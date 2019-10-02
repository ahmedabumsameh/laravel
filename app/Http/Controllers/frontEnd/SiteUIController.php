<?php

namespace App\Http\Controllers\frontEnd;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Video;
use App\Models\Category;
use App\Models\Skill;
use App\Models\Tag;
use App\Models\Comment;
use App\Models\Message;
class SiteUIController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['commentStore','commentUpdate']);
    }
    public function index()
    {

        return view('frontEnd.index')->with('lastVideo',Video::orderBy('created_at','desc')->take(6)->get());
    }
    public function show($id)
    {
        $row = Video::with('user','skills','tags','comments.user','category')->find($id);

        return view('frontEnd.videos.show',compact('row'));
    }
    public function category($id)
    {
        $type = Category::find($id);
        $rows = Video::where('category_id',$id)->paginate(15);

        return view('frontEnd.category.index',compact('rows','type'));
    }
    public function skills($id)
    {
        $type = Skill::find($id);
        $rows = Video::whereHas('skills', function ($query) use ($id) {
            $query->where('skill_id', $id);
        })->paginate(30);


        return view('frontEnd.skills.index',compact('rows','type'));
    }
    public function tags($id)
    {
        $type = Tag::find($id);
        $rows = Video::whereHas('tags', function ($query) use ($id) {
            $query->where('tag_id', $id);
        })->paginate(30);


        return view('frontEnd.tags.index',compact('rows','type'));
    }
    public function commentUpdate($id , Request $request){
        $request->validate([
            'content' => ['required', 'string'],

        ]);
        $row  = Comment::findOrFail($id);
        if(($row->user_id == auth()->user()->id) || auth()->user()->role == 'admin'){
            $row->content = $request->content;
            $row->save();
            // alert()->success('Your Comment Has Been Updated' , 'Done');
        }
        // alert()->error('we did not found this comment' , 'Done');
        return redirect()->route('frontEnd.video.show',['id'=> $row->video_id,'#commentsId']);
    }

    public function commentStore($id , Request $request){
        $request->validate([
            'content' => ['required', 'string'],

        ]);
        $video = Video::findOrFail($id);
        $row =new Comment();
        $row->content = $request->content;
        $row->user_id = auth()->user()->id;
        $row->video_id = $video->id;
        $row->save();
        // alert()->success('Your Comment Has Been Added' , 'Done');
        return redirect()->route('frontEnd.video.show',['id'=>$video->id,'#commentsId']);
        // return redirect()->back();
    }
    public function messageStore(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:191'],
            'content' => ['required', 'string'],

        ]);
        $row =new Message();
        $row->name = $request->name;
        $row->email = $request->email;
        $row->content = $request->content;
        $row->save();
        alert()->success('Success Message', 'Done');

        return redirect()->back();
    }
    public function getVideos()
    {
        $rows = Video::orderBy('id' , 'desc');
        if(request()->has('search') && request()->get('search') != ''){
            $rows = $rows->where('name' , 'like' , "%".request()->get('search')."%");
        }
        $rows =$rows->paginate(30);
        return view('frontEnd.videos.index',compact('rows'));
    }
    public function aboutUs()
    {
        return view('frontEnd.aboutus');
    }
    public function contactUs()
    {
        return view('frontEnd.contactUs');
    }

}

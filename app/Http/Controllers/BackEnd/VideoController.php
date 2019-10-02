<?php

namespace App\Http\Controllers\BackEnd;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Models\Video;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Skill;
class VideoController extends BackEndController
{
    use CommentTrait;

    public function __construct(Video $model)
    {
        parent::__construct($model);
    }
    protected function with()
    {
        return ['category','tags','user','skills','comments'];
    }
    protected function append()
    {
        $array =  [
            'categories' => Category::get(),
            'skills' => Skill::get(),
            'tags' => Tag::get(),
            // 'selectedSkills' => [],
            // 'selectedTags' => [],
            // 'comments' => []
        ];

        return $array;
    }
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required', 'string', 'max:191',
            'metaKeywords' => 'required', 'string', 'max:191',
            'metaDes' => 'required', 'string', 'max:191',
            'des' => 'required', 'string',
            'youtube' => 'required',
            'category_id' => 'required',
            'image' => 'required',  'image|mimes:jpeg,bmp,png|max:99999',

        ]);

        $row =new Video();
        if ($file = $request->file('image')) {
            $ext = strtolower($file->getClientOriginalExtension());
            $name= Str::random(). time().'.' .$ext;
            $file->move('website/videos/images/', $name);
            $row->image = 'website/videos/images/'.$name;

        }
        $row->name = $request->name;
        $row->metaKeywords = $request->metaKeywords;
        $row->metaDes = $request->metaDes;
        $row->des = $request->des;
        $row->youtube = $request->youtube;
        $row->category_id = $request->category_id;
        $row->user_id =auth()->user()->id;


        $row->save();
        $row->tags()->attach($request->tags);
        $row->skills()->attach($request->skills);
        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('videos.index');
    }

    public function update(Request $request, $id)
    {



        $request->validate([
            'name' => 'required', 'string', 'max:191',
            'metaKeywords' => 'required', 'string', 'max:191',
            'metaDes' => 'required', 'string', 'max:191',
            'des' => 'required', 'string',
            'youtube' => 'required',
            'category_id' => 'required',
            'image' => 'image|mimes:jpeg,bmp,png|max:99999',

        ]);
        $row = $this->model->findOrFail($id);
        $row->name = $request->name;
        $row->metaKeywords = $request->metaKeywords;
        $row->metaDes = $request->metaDes;
        $row->des = $request->des;
        $row->youtube = $request->youtube;
        $row->category_id = $request->category_id;
        $row->user_id = auth()->user()->id;

        if ($file = $request->file('image')) {

            $ext = strtolower($file->getClientOriginalExtension());
            $name= Str::random(). time().'.' .$ext;
            $file->move('website/videos/images/', $name);
            $row->image = 'website/videos/images/'.$name;

        }
        $row->save();

        $row->tags()->sync($request->tags);
        $row->skills()->sync($request->skills);
        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('videos.index');

    }
    public function destroy($id)
    {
        $folderName= 'videos';
        $row = $this->model->findOrFail($id);
        $row->delete();
        $row->tags()->detach();
        $row->skills()->detach();
        session()->flash('success', __('site.deleted_successfully'));
        return  redirect()->back();
    }



}

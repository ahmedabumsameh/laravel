<?php ;
namespace App\Http\Controllers\BackEnd;
use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
trait CommentTrait
{
    public function storeComment(Request $request)
    {

        $request->validate([
            'content' => ['required', 'string', 'max:191'],

        ]);

        $row =new Comment();
        $row->content = $request->content;
        $row->user_id = 2;
        $row->video_id = $request->video_id;

        $row->save();
        session()->flash('success', __('site.added_successfully'));
        return redirect()->back();
    }
public function destroyComment($id)
{
    $row = Comment::findOrFail($id);
    $row->delete();
    session()->flash('success', __('site.deleted_successfully'));
    // return redirect()->route('videos.edit',['id'=>$row->video_id,'#commentsId']);
    return redirect()->back();
}
public function updateComment(Request $request, $id)
{
    $request->validate([
        'content' => ['required'],
    ]);
    $row = Comment::findOrFail($id);
    $row->content = $request->content;
    $row->save();
    session()->flash('success', __('site.deleted_successfully'));
    // return  redirect()->back()->with('#comments');
    return redirect()->back();
}
}

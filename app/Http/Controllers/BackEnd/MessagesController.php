<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReplayContact;
class MessagesController extends BackEndController
{
    public function __construct(Message $model)
    {
        parent::__construct($model);
    }
    public function update(Request $request, $id)
    {


        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:191'],
            'content' => ['required', 'string'],


        ]);
        $row = $this->model->findOrFail($id);
        $row->name = $request->name;
        $row->email = $request->email;
        $row->content = $request->content;
        $row->save();
        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('messages.index');
    }
    public function replay(Request $request ,$id)
    {
        $request->validate([
            'message' => ['required', 'string'],

        ]);
       $message = $this->model->findOrFail($id);
       Mail::send(new ReplayContact($message , $request->message));
    }
}

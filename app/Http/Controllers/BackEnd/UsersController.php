<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Requests\BackEnd\Users\Store;
use App\Http\Requests\BackEnd\Users\Update;
class UsersController extends BackEndController
{

    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:191'],
            'email' => ['required', 'string', 'email', 'max:191', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'password_confirmation' => ['required'],
            'role' => ['required'],

        ]);
        $row =new User();
        $row->name = $request->name;
        $row->email = $request->email;
        $row->role = $request->role;
        $row->password = bcrypt($request->password);
        $row->save();
        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('users.index');
    }

    public function update(Request $request, $id)
    {


        $request->validate([
            'name' => ['required', 'string', 'max:191'],
            'email' => ['required', 'string', 'email', 'max:191', 'unique:users,email,'.$id],


        ]);
        $row = $this->model->findOrFail($id);
        $row->name = $request->name;
        $row->email = $request->email;
        $row->role = $request->role;
        // $row->password = bcrypt($request->password);
        $row->save();
        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('users.index');
    }

    public function changePassword(Request $request, $id)
        {
            $request->validate([

                'password' => ['required', 'string', 'min:8', 'confirmed'],
                'password_confirmation' => ['required'],
            ]);
            $row = $this->model->findOrFail($id);
            $row->password = bcrypt($request->password);
            $row->save();
            session()->flash('success', __('site.updated_successfully'));
            return redirect()->route('users.index');
        }


}

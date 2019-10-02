<?php

namespace App\Http\Controllers\BackEnd;
use App\Http\Controllers\Controller;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends BackEndController
{

    public function __construct(Tag $model)
    {
        parent::__construct($model);
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:191'],

        ]);
        $row =new Tag();
        $row->name = $request->name;

        $row->save();
        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('tags.index');
    }

    public function update(Request $request, $id)
    {


        $request->validate([
            'name' => ['required', 'string', 'max:191'],


        ]);
        $row = $this->model->findOrFail($id);
        $row->name = $request->name;
        $row->save();
        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('tags.index');
    }




}

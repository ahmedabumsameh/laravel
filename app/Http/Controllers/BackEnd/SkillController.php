<?php

namespace App\Http\Controllers\BackEnd;
use App\Http\Controllers\Controller;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends BackEndController
{

    public function __construct(Skill $model)
    {
        parent::__construct($model);
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:191'],

        ]);
        $row =new Skill();
        $row->name = $request->name;

        $row->save();
        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('skills.index');
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
        return redirect()->route('skills.index');
    }




}

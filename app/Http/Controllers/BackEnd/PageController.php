<?php

namespace App\Http\Controllers\BackEnd;
use App\Http\Controllers\Controller;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends BackEndController
{

    public function __construct(Page $model)
    {
        parent::__construct($model);
    }

    public function store(Request $request)
    {


        $request->validate([
            'name' => ['required', 'string', 'max:191'],
            'des' => ['required', 'string'],
            'metaDes' => ['required', 'string'],
            'metaKeywords' => ['required', 'string'],
        ]);
        $row =new Page();
        $row->name = $request->name;
        $row->des = $request->des;
        $row->metaDes = $request->metaDes;
        $row->metaKeywords = $request->metaKeywords;

        $row->save();
        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('pages.index');
    }

    public function update(Request $request, $id)
    {


        $request->validate([
            'name' => ['required', 'string', 'max:191'],
            'des' => ['required', 'string'],
            'metaDes' => ['required', 'string'],
            'metaKeywords' => ['required', 'string'],


        ]);
        $row = $this->model->findOrFail($id);
        $row->name = $request->name;
        $row->des = $request->des;
        $row->metaDes = $request->metaDes;
        $row->metaKeywords = $request->metaKeywords;
        $row->save();
        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('pages.index');
    }




}

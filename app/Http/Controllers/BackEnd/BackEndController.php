<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use App\User;

class BackEndController extends Controller
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }
    public function index()
    {


        $folderName= $this->getClassNameFromModel();
        $routName=$folderName;
        $rows = $this->model;
        $with = $this->with();
        if(!empty($with)){
            $rows = $rows->with($with);
        }
        $rows = $rows->paginate(10);

        return view('BackEnd.' . $folderName . '.index',
                   compact('rows','folderName','routName'));
    }

    public function create()
    {

        $folderName= $this->getClassNameFromModel();
        $routName=$folderName;
        $append = $this->append();
        return view('BackEnd.' .$folderName. '.create',
        compact('folderName','routName'))->with($append);

    }
    public function edit($id)
    {

        $folderName= $this->getClassNameFromModel();
        $routName=$folderName;
        $row = $this->model->findOrFail($id);
        $append = $this->append();
        return view('BackEnd.' . $folderName. '.edit',
        compact('row','folderName','routName'))->with($append);
    }
    public function destroy($id)
    {
        $folderName= $this->getClassNameFromModel();
        $row = $this->model->findOrFail($id);
        $row->delete();


        session()->flash('success', __('site.deleted_successfully'));
        return  redirect()->back();
    }
    public function trashed()
    {
        $folderName= $this->getClassNameFromModel();
        $routName=$folderName;
        $rows = $this->model;
        $rows = $rows->onlyTrashed()->paginate(10);


       return view('BackEnd.' . $folderName . '.trashed',
       compact('rows','folderName','routName'));
    }
    protected function getClassNameFromModel()
    {
        return strtolower($this->pluralModelName());
    }
    protected function pluralModelName(){
        return str_plural($this->getModelName());
    }
    protected function getModelName(){
        return class_basename($this->model);
    }
    protected function with(){
        return [];
    }
    protected function append(){
        return [];
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Session;

class CategoryController extends Controller
{
    public function index(){
        return view('dropdown');
    }

    public function addDropDown(Request $request){
        $this->validate($request,[
            'name'  =>  'required|max:255'
        ]);
        $parent_id = $request->category;
        $name = $request->name;

        $cat = new Category;
        $cat->parent_id = $parent_id;
        $cat->name = $name;
        $cat->save();

        Session::flash('success','category added!');
        return redirect()->back();


    }
}

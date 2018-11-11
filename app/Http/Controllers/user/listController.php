<?php

namespace App\Http\Controllers\user;

use App\lists;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class listController extends Controller
{
        public function index(){
            return view('user.index', ['Lists' => lists::paginate(5)]);
    }
    public function edit(){
            return view('user.edit');
    }
    public function editPost(Request $request){
        $objList = new lists();
        $title = $request->input('title');
        $description = $request->input('description');
        $author = $request->input('author');
        $objList = $objList ->create(['title'=>$title, 'description'=>$description, 'author'=>$author]);
        return redirect(route('index'))->with('success');
    }
    public function delete(Request $request){
        $id = $request->input('id');
        $objList = new lists();
        $objList->where('id', $id)->delete();
        return redirect(route('index'))->with('success');
    }
}

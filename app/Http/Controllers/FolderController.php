<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Folder;

class FolderController extends Controller
{
    //
    public function showCreateform(){
        return view('folders/create');
    }

    public function create(Request $request){
        $folder = new Folder();

        $folder->title = $request->title;

        $folder->save();

        return redirect()->route('tasks.index',['id'=> $folder->id,]);
    }
}

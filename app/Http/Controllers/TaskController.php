<?php

namespace App\Http\Controllers;

use App\Folder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class TaskController extends Controller
{
    //
    public function index(int $id){
        $folders = Folder::all();

        return view('tasks/index', [
            'folders' => $folders,
            'current_folder_id'=> $id,
        ] );
    }
}

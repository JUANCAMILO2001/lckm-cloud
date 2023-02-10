<?php

namespace App\Http\Controllers;

use App\Models\Folder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FoldersController extends Controller
{
    public function store(Request $request){
        $user = Auth::user();
        $sub_folder = $request->folder ? $request->folder : null;
        $folder = Folder::create([
            'name' => $request->name,
            'user_id' => $user->id,
            'folder_id' => $sub_folder,
        ]);
        return back();

    }
}

<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FilesController extends Controller
{
    public function store(Request $request){
        $user = Auth::user();
        $folder = $request->folder ? $request->folder : null;
        $path = $request->file('file')->store('public');

        $file = File::create([
            'name' => $request->name,
            'url' => $path,
            'user_id' => $user->id,
            'folder_id' => $folder,

        ]);
        return back();

    }
}

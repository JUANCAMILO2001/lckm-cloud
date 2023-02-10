<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Folder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(Request $request){
        $user = Auth::user();
        $folder = $request->get('folder') ? $request->get('folder') : null;
        $dashboard = $folder ? null : 1 ;

        $folders =  Folder::when($folder,function ($q) use ($folder){
            $q->where('folder_id', $folder);
        })->when($dashboard, function ($q2){
            $q2->whereNull('folder_id');
        })->where('user_id',$user->id)->get();

        $files = File::when($folder,function ($q) use ($folder){
            $q-> where('folder_id', $folder);

        })->when($dashboard, function ($q2){
            $q2->whereNull('folder_id');
        })->where('user_id',$user->id)->get();

        return view('dashboard', compact('folders', 'files'));
    }
}

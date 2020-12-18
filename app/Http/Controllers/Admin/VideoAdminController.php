<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Video;
use http\Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class VideoAdminController extends Controller
{
    public function index(){
        $videos = Video::all();

        return view('admin.videos.index', compact('videos'));
    }

    public function store(Request $request){
        try {
            $storeVideo = Video::create($request->only('title'));

            if($request->hasFile('video')){
                $storeVideo->addMedia($request->file('video'))->toMediaCollection('videos/');
            }

            return redirect()->back()->withSuccess('publicação criada com successo');


        }catch (Exception $exception){
            Log::error($exception->getMessage());

            return response()->json('Erro ao criar a vídeo!', 400);
        }
    }
}

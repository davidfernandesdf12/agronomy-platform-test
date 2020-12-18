<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreVideoRequest;
use App\Http\Requests\UpdateVideoRequest;
use App\Http\Resources\VideoResource;
use App\Models\Video;
use Illuminate\Support\Facades\Log;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $videos = Video::all();

            return VideoResource::collection($videos);
        }catch (Exception $exception){
            Log::error($exception->getMessage());

            return response()->json('Erro ao consultar vídeos!', 400);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreVideoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVideoRequest $request)
    {
        try {
            $storeVideo = Video::create($request->only('title'));

            if($request->hasFile('video')){
                $storeVideo->addMedia($request->file('video'))->toMediaCollection('videos/');
            }

            return response()->json([
                'message' => 'Vídeo Salvo com Sucesso!',
                'result' => new VideoResource($storeVideo)
            ]);

        }catch (Exception $exception){
            Log::error($exception->getMessage());

            return response()->json('Erro ao criar a vídeo!', 400);
        }
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVideoRequest  $request
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVideoRequest $request, Video $video)
    {
        try {
            $video->update($request->all());

            if($request->hasFile('video')){
                $video->clearMediaCollection('videos/');
                $video->addMedia($request->file('video'))->toMediaCollection('videos/');
            }

            return response()->json([
                'message' => 'Vídeo Atualizado com Sucesso!',
                'result' => new VideoResource($video)
            ]);

        }catch (Exception $exception){
            Log::error($exception->getMessage());

            return response()->json('Erro ao atualizar vídeo!', 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        try {
            $video->clearMediaCollection('videos/');
            $video->delete();

            return response()->json([
                'message' => 'Vídeo deletado com Sucesso!',
            ]);

        }catch (Exception $exception){
            Log::error($exception->getMessage());

            return response()->json('Erro ao deletar vídeo!', 400);
        }
    }
}

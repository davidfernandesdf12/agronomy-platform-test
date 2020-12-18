<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ReportResource;
use App\Models\Report;
use http\Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ReportsController extends Controller
{
    public function index(){
        try {
            $reports = Report::all();

            return ReportResource::collection($reports);
        }catch (Exception $exception){
            Log::error($exception->getMessage());

            return response()->json('Erro ao consultar relatorios!', 400);
        }
    }
}

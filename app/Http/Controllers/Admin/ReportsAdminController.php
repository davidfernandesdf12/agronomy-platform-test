<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Report;
use App\Models\Video;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ReportsAdminController extends Controller
{
    public function index(){
        $reports  = Report::all();
        return view('admin.reports.index', compact('reports'));
    }

    public function create(){
        $videos = Video::all();
        return view('admin.reports.create', compact('videos'));
    }

    public function post(Request $request){
        $request->comments = json_encode($request->comments);

        $storeReport = Report::create($request->only('title', 'comments'));

        if(count($request->images) > 0) {
            foreach ($request->images as $imageBase64){
                $storeReport->addMediaFromBase64($imageBase64)->toMediaCollection('images/');
            }
        }
    }

    public function getPDF(Report $idReport){
        $report = $idReport;
        $comments = $report->comments;

        return PDF::loadView('pdf.report-pdf', compact('report', 'comments'))
            ->stream();

    }

    public function downloadPDF(Report $idReport){
        $report = $idReport;
        return PDF::loadView('pdf.report-pdf', compact('report'))
            ->download($report->title);
    }
}

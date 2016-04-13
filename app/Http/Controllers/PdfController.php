<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View;

class PdfController extends Controller
{
    public function pdf() {
        $view = View::make('provinsi.pdf')->render();
        // panggil fungsi dompdf
        $pdf = App::make('dompdf');
        // set ukuran kertas dan orientasi
        $pdf->loadHTML($view)->setPaper('a4')->setOrientation('potrait');
        // cetak
        return $pdf->stream();
    }
}

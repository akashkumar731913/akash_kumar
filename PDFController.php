<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PDF;

class PDFController extends Controller
{
    public function generatePDF()
    {
        // $data = [
        //     'title' => 'Welcome to codingdriver.com',
        //     'date' => date('m/d/Y')
        // ];
           
        $pdf = PDF::loadView('id_card');
        $pdf->setPaper('A4', 'portrait');
        $pdf->render();
        // return $pdf->stream();
        return $pdf->download('id_card.pdf');
    }

    public function generatePDF_2()
    { 
        $pdf = PDF::loadView('id_card_2');
        $pdf->setPaper('A4', 'portrait');
        $pdf->render();
        // return $pdf->stream();
        return $pdf->download('id_card_2.pdf');
    }
    
}

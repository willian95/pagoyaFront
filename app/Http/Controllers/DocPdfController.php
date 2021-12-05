<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class DocPdfController extends Controller
{
    
    function download($category_slug){
    
        return PDF::loadView('pdf.doc', ["category_slug" => $category_slug])->download($category_slug.'.pdf');

    }

}

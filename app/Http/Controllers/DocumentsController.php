<?php

namespace App\Http\Controllers;

use App\Document;

class DocumentsController
{
    public function index()
    {
        $documents = Document::all();
        return view('documents/index', ['documents' => $documents]);
    }
}

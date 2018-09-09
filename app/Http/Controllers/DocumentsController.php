<?php

namespace App\Http\Controllers;

use App\Document;

class DocumentsController
{
    public function index()
    {
        $documents = Document::byAge()->get();
        return view('documents/index', ['documents' => $documents]);
    }
}

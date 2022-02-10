<?php

namespace App\Http\Controllers;

use App\Export\InvoicesExport;

class ExportMultipleSheetsController extends Controller
{
    public function index()
    {
        return (new InvoicesExport(2021))->store('invoice2s3.xlsx');
    }
}

<?php

namespace App\Http\Controllers;

use App\Traits\ResponseTrait;
use PDF;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests, ResponseTrait;

    protected $currentUser;

    public function __construct()
    {
        $this->currentUser = Auth::user();
    }

    public function exportPDF()
    {
        $pdf = \PDF::loadView('pdf');

        return $pdf->download('itsolutionstuff.pdf');
    }
}

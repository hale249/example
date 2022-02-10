<?php

namespace App\Export;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;

class HtmlExport implements FromView, WithTitle
{
    public function view(): View
    {
        return view('user', [
            'invoices' => User::all()
        ]);
    }


    public function title(): string
    {
        return 'user';
    }
}

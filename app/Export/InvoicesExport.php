<?php

namespace App\Export;

use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class InvoicesExport implements WithMultipleSheets
{
    use Exportable;

    protected $year;

    public function __construct(int $year)
    {
        $this->year = $year;
    }

    /**
     * @return array
     */
    public function sheets(): array
    {
            $sheets[] = new InvoicesPerMonthSheet($this->year, 1);
            $sheets[] = new HtmlExport();

        return $sheets;
    }
}

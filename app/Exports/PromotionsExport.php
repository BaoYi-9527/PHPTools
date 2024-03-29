<?php

namespace App\Exports;

use App\Models\Promotions;
use Maatwebsite\Excel\Concerns\FromArray;

class PromotionsExport implements FromArray
{
    protected $invoices;

    public function __construct(array $invoices)
    {
        $this->invoices = $invoices;
    }


    public function array(): array
    {
        return $this->invoices;
    }
}

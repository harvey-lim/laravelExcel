<?php

namespace App\Exports;

use App\Business;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class BusinessesExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //use this for selecting what column to export
        return Business::select('business_name')->get();
    }

    public function headings(): array {
        return [
            'business_name',
        ];
    }
}

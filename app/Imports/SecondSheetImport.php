<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Business;

class SecondSheetImport implements ToCollection, WithHeadingRow
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {
        $array = [];
        foreach ($collection as $c) {
            $business = new Business;
            $business->business_name = $c['business_name'] ?? '';
            $business->address_line_1 = $c['address_line_1'] ?? '';
            $business->address_line_2 = $c['address_line_2'] ?? '';
            $business->address_line_3 = $c['address_line_3'] ?? '';
            $business->address_line_4 = $c['address_line_4'] ?? '';
            $business->address_line_5 = $c['address_line_5'] ?? '';

            $business->save();
        }

        
    }

    public function headingRow() : int
    {
        return 1;
    }
}

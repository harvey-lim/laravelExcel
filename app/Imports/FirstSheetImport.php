<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class FirstSheetImport implements ToCollection, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {

        //commented for now since first sheet is not needed
        // $array = [];
        // foreach ($collection as $c) {
        //     $array[] = $c;
        // }

        // dd($array[1]);
    }

    public function headingRow() : int
    {
        return 1;
    }
}

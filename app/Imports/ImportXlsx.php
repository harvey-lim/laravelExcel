<?php

namespace App\Imports;

use App\Xlsx;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;



class ImportXlsx implements WithMultipleSheets
{
    /**
    * @param Collection $collection
    */
    // public function collection(Collection $collection)
    // {
    //     $array = [];
    //     foreach ($collection as $c) {
    //         $array[] = $c;
    //     }

    //     return $array;
    // }

    // public function headingRow(): int {
    //     return 1;
    // }


    public function sheets(): array {
        return [
            0 => new FirstSheetImport(),
            1 => new SecondSheetImport(),
        ];
    }

}

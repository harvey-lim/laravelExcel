<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ImportXlsx;
use App\Exports\BusinessesExport;

class ImportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('import');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //import
        // dd($request->all());
        Excel::import(new ImportXlsx, $request->excel_file);
        
    }

    public function storeCsv(Request $request){
        // dd($request->all());
        // dd(fopen($request->csv_file, 'r'));
        // dd(fgetcsv(fopen($request->csv_file, "r")));
        $row = 1;
        if (($handle = fopen($request->csv_file, "r")) !== false) {
            while (($data = fgetcsv($handle, 1000, ",")) !== false) {
                $num = count($data);
                
                for ($c = 0; $c < $num; $c++) {
                    if($row == 1){
                        echo $data[$c] . "<br />\n";
                    }
                }
                $row++;
            }
            fclose($handle);
        }
    }

    public function export(){
        return Excel::download(new BusinessesExport, 'businesses.ods');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

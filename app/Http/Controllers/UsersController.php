<?php

namespace App\Http\Controllers;

use App\Exports\ElementsExport;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UsersController extends Controller
{
    public function export()
    {
      return Excel::download(new ElementsExport, 'Export.xlsx');

    }
    public function show()
    {
        return view('import.import');
    }
    public function import(Request $request)
    {
        $file = $request->file('file');
        Excel::import(new UsersImport, $file);
        return back()->withStatus('Excel has been imported successfully');
    }
}

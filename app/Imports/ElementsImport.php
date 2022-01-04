<?php

namespace App\Imports;

use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;
use function back;

class ElementsImport implements FromCollection,WithStrictNullComparison
{
    public function collection()
    {
      $query =   DB::table('users')->insert([
            ['name' => 'sxdddddd'],
            ['email' => 'archer@example.com'],
            ['password' => 'xdddd']
        ]);
   if ($query){
       return back()->with('success','xdddd');

   }else{
       return back()->with()('fail','xddd nie udalo sie');
   }

    }
}

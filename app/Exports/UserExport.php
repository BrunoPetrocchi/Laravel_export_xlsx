<?php

namespace App\Exports;

use App\Models\User;

use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;

class UserExport implements FromCollection, Responsable
{
   
    use Exportable;

    private $fileName = 'baseteste.xlsx';

    public function collection()
    {
        return User::all();
    }
}

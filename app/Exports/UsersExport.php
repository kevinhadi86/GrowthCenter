<?php

namespace App\Exports;

use App\SubscribedUser;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return SubscribedUser::all();
    }
}

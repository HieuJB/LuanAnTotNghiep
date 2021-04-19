<?php

namespace App\Imports;

use App\Models\model_sinhvien;
use Session;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class sinhvienImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new model_sinhvien([
            'msv' => $row['msv'],
            'hoten' => $row['hoten'],
            'lop' => $row['lop'],
            'mahocphan' => $row['mahocphan'],
            'tenmonhoc' => $row['tenmonhoc'],
            'email' => $row['email'],
            'giaovien' => session('email1'),
        ]);
    }
}

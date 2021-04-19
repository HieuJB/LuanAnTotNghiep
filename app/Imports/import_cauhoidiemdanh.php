<?php

namespace App\Imports;
use Session;
use App\Models\model_cauhoidiemdanh;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class import_cauhoidiemdanh implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new model_cauhoidiemdanh([
            'cauhoi' => $row['cauhoi'],
            'ansa' => $row['ansa'],
            'ansb' => $row['ansb'],
            'ansc' => $row['ansc'],
            'ansd' => $row['ansd'],
            'caucx' => $row['caucx'],
            'buoi' => $row['buoi'],
            'mahocphan' => $row['mahocphan'],
            'monhoc' => $row['monhoc'],
            'giaovien' => session('email1'),
        ]);
    }
}

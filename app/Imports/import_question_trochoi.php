<?php

namespace App\Imports;

use App\Models\table_api;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class import_question_trochoi implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new table_api([
            'question' => $row['question'],
            'ansa' => $row['ansa'],
            'ansb' => $row['ansb'],
            'ansc' => $row['ansc'],
            'ansd' => $row['ansd'],
            'ansCX' => $row['caucx'],
        ]);
    }
}

<?php

namespace App\Imports;

use App\Models\Children;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class ChildrenImport implements ToModel, WithHeadingRow
{
    public function rules(): array
    {
        return [

        'birth_date' => 'required|dateformat:YYYY-MM-DD',
        ];
    }
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Children([
            'first_name'     => $row['first_name'],
            'last_name'     => $row['last_name'],
            'middle_name'     => $row['middle_name'],
            'gender'     => $row['gender'],
            'school'     => $row['school'],
            'level'     => $row['level'],
            'image_id'     => $row['image_id'],
            'birth_date'     => $row['birth_date'],
            'guardian_one'     => $row['guardian_one'],
            'guardian_two'     => $row['guardian_two'],
            'hog_member_id'     => 'HOG/' . date('Y') . '/'. substr(rand(0, time()), 0, 5),
            'class'    => $row['class'],
        ]);
    }
}

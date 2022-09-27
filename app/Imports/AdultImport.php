<?php

namespace App\Imports;

use App\Models\Address;
use App\Models\Adult;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AdultImport implements ToModel, WithHeadingRow
{
    public function rules(): array
    {
        return [
            'wedding_date' => 'required|dateformat:DD-MM-YYYY',
            'image_id' => 'required','image_id', 'max:255', 'unique:adults',
        ];
    }
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $member = Adult::create([
            'first_name'     => $row['first_name'],
            'last_name'     => $row['last_name'],
            'middle_name'     => $row['middle_name'],
            'gender'     => $row['gender'],
            'email'     => $row['email'],
            'primary_phone'     => $row['primary_phone'],
            'secondary_phone'     => $row['secondary_phone'],
            'wedding_date'     => $row['wedding_date'],
            'image_id'     => $row['image_id'],
            'age_id'     => $row['age_id'],
            'day'     => $row['day'],
            'month'     => $row['month'],
            'year'     => $row['year'],
            'marital_status'     => $row['marital_status'],
            'fellowship_group_id'     => $row['fellowship_group_id'],
            'friendship_centre_id'     => $row['friendship_centre_id'],
            'functional_group_id'     => $row['functional_group_id'],
            'hog_member_id'     => 'HOG/' . date('Y') . '/' . substr(rand(0, time()), 0, 5),
            'church_id'    => $row['church_id'],
            'is_leader'    => $row['is_leader'],
            'occupation'    => $row['occupation'],
        ]);

        return new Address([
            'member_id'     => $member->id,
            'house_number'     => $row['house_number'],
            'street'     => $row['street'],
            'city'     => $row['city'],
            'lga_id'     => $row['lga_id'],
            'zip_code'     => $row['zip_code'],
            'status'     => $row['status'],
            'state_id'     => $row['state_id'],
            'country'     => $row['country'],
        ]);
    }
}

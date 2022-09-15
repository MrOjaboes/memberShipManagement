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
        'birth_date' => 'required|dateformat:DD-MM-YYYY',
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
            'birth_date'     => $row['birth_date'],
            'marital_status'     => $row['marital_status'],
            'fellowship_group_id'     => $row['fellowship_group'],
            'friendship_centre_id'     => $row['friendship_centre'],
            'hog_member_id'     => 'HOG/' . date('Y') . '/' . substr(rand(0, time()), 0, 5),
            'church'    => $row['church'],
            'is_leader'    => $row['is_leader'],
            'occupation'    => $row['occupation'],
        ]);
        // if (condition) {
        //     foreach ($row as $key => $value) {
        //         $save = new Adult();
        //     $save->name = "";
        //     if($save->save()){
        //         $new_id = $save->id;
        //         $save2 = new Address();
        //         $save2->member_id = $new_id;
        //         $savw2->state = $row['state'];

        //     }
        //                     }
        // }


       // $member = $this->members->where('first_name',$row['first_name'])->first();
//dd(array($member->id));
        //dd(array($member->id));
        return new Address([
            'member_id'     => $member->id,
            'house_number'     => $row['house_number'],
            'street'     => $row['street'],
            'city'     => $row['city'],
            'lga'     => $row['lga'],
            'zip_code'     => $row['zip_code'],
            'status'     => $row['status'],
            'state'     => $row['state'],
            'country'     => $row['country'],
        ]);
    }
}

<?php

namespace App\Imports;

use App\Models\DiplomaEE;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Carbon\Carbon;

class DiplomaEEImport implements ToModel, WithStartRow
{
    /**
     * @return int
     */
    public function startRow(): int
    {
        return 6;
    }

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new DiplomaEE([
            'enrollment_no' => $row[1],
            'photo' => $row[2],
            'student' => $row[3],
            'date_of_birth' => Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[4])),
            'gender' => $row[5],
            'student_moblie' => $row[6],
            'email' => $row[7],
            'last_degree_name' => $row[8],
            'last_degree_per' => $row[11],   
            'last_college_name' => $row[12],
            'permanent_address' => $row[13],
            'local_address' => $row[14],
            'sms_no' => $row[16],
            'phone_number' => $row[17],
            'father_name' => $row[18],
            'father_moblie' => $row[19],
            'mother_name' => $row[20],
            'mother_number' => $row[21],
            'guardian_name' => $row[22],
            'guardian_moblie' => $row[23],
            'admission_date' => Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[24])),
            'cast' => $row[25],
            'sub_cast' => $row[26],
            'blood_group' => $row[27],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Member;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Hapus data lama jika ada
        Member::truncate();

        // Data member untuk di-seed
        $members = [
            [
                'nim' => '240533604545',
                'name' => 'Nazwa Hilmia Zida',
                'group_name' => 'Inverter',
                'mentor_name' => 'Moh Ayyub Chan',
            ],
            [
                'nim' => '240535607376',
                'name' => 'Muhammad Difo Alfajri',
                'group_name' => 'Inverter',
                'mentor_name' => 'Moh Ayyub Chan',
            ],
            [
                'nim' => '240533603799',
                'name' => 'Iola Sava Lintang Ariella Mahestibm',
                'group_name' => 'Inverter',
                'mentor_name' => 'Moh Ayyub Chan',
            ],
            [
                'nim' => '240535600335',
                'name' => 'Muhammad Romadhoni Al-Bukhori',
                'group_name' => 'Inverter',
                'mentor_name' => 'Moh Ayyub Chan',
            ],
            [
                'nim' => '240535613416',
                'name' => 'Rajiv Muhammad Atmadja Syahrobert',
                'group_name' => 'Inverter',
                'mentor_name' => 'Moh Ayyub Chan',
            ],
            [
                'nim' => '240535602267',
                'name' => 'Farasy Umawi Al-Faridzi',
                'group_name' => 'Inverter',
                'mentor_name' => 'Moh Ayyub Chan',
            ],
            [
                'nim' => '240535606780',
                'name' => 'Muhammad Salim Ramadhan',
                'group_name' => 'Inverter',
                'mentor_name' => 'Moh Ayyub Chan',
            ],
            [
                'nim' => '240535602181',
                'name' => 'Devi Aulia Rachma',
                'group_name' => 'Inverter',
                'mentor_name' => 'Moh Ayyub Chan',
            ],
            [
                'nim' => '240536606779',
                'name' => 'Febrianti Nurwahyuni',
                'group_name' => 'Inverter',
                'mentor_name' => 'Moh Ayyub Chan',
            ],
            [
                'nim' => '240536602672',
                'name' => 'Ahmad Hafizh Febriansyah',
                'group_name' => 'Inverter',
                'mentor_name' => 'Moh Ayyub Chan',
            ],
            [
                'nim' => '240533609984',
                'name' => 'Agbita Grace Josepine S',
                'group_name' => 'Inverter',
                'mentor_name' => 'Moh Ayyub Chan',
            ],
            [
                'nim' => '240536608930',
                'name' => 'Adam Aqhief Hazim Zuhri',
                'group_name' => 'Inverter',
                'mentor_name' => 'Moh Ayyub Chan',
            ],
        ];

        // Insert data menggunakan batch insert untuk efisiensi
        Member::insert($members);
        
        // Atau bisa menggunakan cara ini jika ingin satu per satu:
        // foreach ($members as $member) {
        //     Member::create($member);
        // }
    }
}
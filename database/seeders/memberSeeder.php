<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\member;

class memberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $member = new member();
        $member->name = 'Orang 1';
        $member->address = 'Medan';
        $member->email = 'orang1@example.com';
        $member->phone = '092191921029';
        $member->save();

        $member = new member();
        $member->name = 'Orang 2';
        $member->address = 'Medan';
        $member->email = 'swsw@example.com';
        $member->phone = '092191921029';
        $member->save();

        $member = new member();
        $member->name = 'Orang 3';
        $member->address = 'Medan';
        $member->email = '2121@example.com';
        $member->phone = '092191921029';
        $member->save();

        $member = new member();
        $member->name = 'Orang 4';
        $member->address = 'Medan';
        $member->email = '2121@example.com';
        $member->phone = '092191921029';
        $member->save();

        $member = new member();
        $member->name = 'Orang 5';
        $member->address = 'Medan';
        $member->email = 'oran21@example.com';
        $member->phone = '092191921029';
        $member->save();
    }
}

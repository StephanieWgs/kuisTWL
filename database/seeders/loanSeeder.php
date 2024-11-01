<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\loan;

class loanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $loan = new loan();
        $loan->member_id = '1';
        $loan->book_id = '2';
        $loan->borrow_date = '2024-10-31';
        $loan->return_date = '2024-11-04';
        $loan->status = 'dipinjam';
        $loan->save();

        $loan = new loan();
        $loan->member_id = '1';
        $loan->book_id = '3';
        $loan->borrow_date = '2024-10-31';
        $loan->return_date = '2024-11-04';
        $loan->status = 'dipinjam';
        $loan->save();


        $loan = new loan();
        $loan->member_id = '2';
        $loan->book_id = '2';
        $loan->borrow_date = '2024-10-31';
        $loan->return_date = '2024-11-04';
        $loan->status = 'dipinjam';
        $loan->save();

        $loan = new loan();
        $loan->member_id = '2';
        $loan->book_id = '1';
        $loan->borrow_date = '2024-10-31';
        $loan->return_date = '2024-11-04';
        $loan->status = 'dipinjam';
        $loan->save();

        $loan = new loan();
        $loan->member_id = '3';
        $loan->book_id = '2';
        $loan->borrow_date = '2024-10-31';
        $loan->return_date = '2024-11-04';
        $loan->status = 'dipinjam';
        $loan->save();
    }
}

<?php

namespace Database\Seeders;

use App\Models\book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class bookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $book = new book();
        $book->title = 'Buku 1';
        $book->author = 'Orang 1';
        $book->publisher = 'Cendana';
        $book->year_published = '2022';
        $book->stock = '10';
        $book->save();

        $book = new book();
        $book->title = 'Buku 2';
        $book->author = 'Orang 1';
        $book->publisher = 'Cendana';
        $book->year_published = '2022';
        $book->stock = '10';
        $book->save();

        $book = new book();
        $book->title = 'Buku 3';
        $book->author = 'Orang 1';
        $book->year_published = '2022';
        $book->publisher = 'Cendana';
        $book->stock = '10';
        $book->save();

        $book = new book();
        $book->title = 'Buku 4';
        $book->author = 'Orang 1';
        $book->year_published = '2022';
        $book->publisher = 'Cendana';
        $book->stock = '10';
        $book->save();

        $book = new book();
        $book->title = 'Buku 5';
        $book->author = 'Orang 1';
        $book->year_published = '2022';
        $book->publisher = 'Cendana';
        $book->stock = '10';
        $book->save();
    }
}

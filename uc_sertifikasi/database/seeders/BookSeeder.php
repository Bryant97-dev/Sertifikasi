<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book = [
            [
                'book_id'             => 1,
                'title'           => 'Art Light And Color',
                'author'          => 'James Gurney',
                'page'       => '350',
                'publication_date' => 2012,
            ],
            [
                'book_id'             => 2,
                'title'           => 'Basic Figure Drawing',
                'author'          => 'Louis Loomis',
                'page'       => '230',
                'publication_date' => 1998,
            ],
        ];

        Book::insert($book);
    }

}

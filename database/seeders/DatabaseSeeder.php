<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Book;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $books = [
            [
                'title' => 'To Kill a Mockingbird',
                'author' => 'Harper Lee',
                'isbn' => '9780061120084',
                'description' => 'A novel about the serious issues of rape and racial inequality.',
                'cover_image' => 'https://covers.openlibrary.org/b/isbn/9780061120084-L.jpg',
                'genre' => 'Fiction',
            ],
            [
                'title' => '1984',
                'author' => 'George Orwell',
                'isbn' => '9780451524935',
                'description' => 'A dystopian social science fiction novel and cautionary tale about the dangers of totalitarianism.',
                'cover_image' => 'https://covers.openlibrary.org/b/isbn/9780451524935-L.jpg',
                'genre' => 'Dystopian',
            ],
            [
                'title' => 'Pride and Prejudice',
                'author' => 'Jane Austen',
                'isbn' => '9780141040349',
                'description' => 'A romantic novel that charts the emotional development of the protagonist, Elizabeth Bennet.',
                'cover_image' => 'https://covers.openlibrary.org/b/isbn/9780141040349-L.jpg',
                'genre' => 'Romance',
            ],
            [
                'title' => 'The Great Gatsby',
                'author' => 'F. Scott Fitzgerald',
                'isbn' => '9780743273565',
                'description' => 'A novel about the American dream and the roaring twenties.',
                'cover_image' => 'https://covers.openlibrary.org/b/isbn/9780743273565-L.jpg',
                'genre' => 'Classic',
            ],
            [
                'title' => 'War and Peace',
                'author' => 'Leo Tolstoy',
                'isbn' => '9780199232765',
                'description' => 'A historical novel that chronicles the French invasion of Russia and its impact on Tsarist society.',
                'cover_image' => 'https://covers.openlibrary.org/b/isbn/9780199232765-L.jpg',
                'genre' => 'Historical Fiction',
            ],
            [
                'title' => 'The Catcher in the Rye',
                'author' => 'J.D. Salinger',
                'isbn' => '9780316769488',
                'description' => 'A story about teenage rebellion and angst, narrated by the iconic character Holden Caulfield.',
                'cover_image' => 'https://covers.openlibrary.org/b/isbn/9780316769488-L.jpg',
                'genre' => 'Fiction',
            ],
            [
                'title' => 'The Hobbit',
                'author' => 'J.R.R. Tolkien',
                'isbn' => '9780547928227',
                'description' => 'A fantasy novel that follows the journey of Bilbo Baggins, a hobbit who embarks on an epic adventure.',
                'cover_image' => 'https://covers.openlibrary.org/b/isbn/9780547928227-L.jpg',
                'genre' => 'Fantasy',
            ],
            [
                'title' => 'Brave New World',
                'author' => 'Aldous Huxley',
                'isbn' => '9780060850524',
                'description' => 'A dystopian novel that explores a futuristic society driven by technological advancements and social engineering.',
                'cover_image' => 'https://covers.openlibrary.org/b/isbn/9780060850524-L.jpg',
                'genre' => 'Dystopian',
            ],
            [
                'title' => 'The Odyssey',
                'author' => 'Homer',
                'isbn' => '9780140268867',
                'description' => 'An epic poem that recounts the adventures of Odysseus as he returns home from the Trojan War.',
                'cover_image' => 'https://covers.openlibrary.org/b/isbn/9780140268867-L.jpg',
                'genre' => 'Epic Poetry',
            ],
        ];

        foreach ($books as $bookData) {
            Book::updateOrCreate(
                ['isbn' => $bookData['isbn']], // Unique identifier
                $bookData
            );
        }
    }
}

<?php
namespace Gort\Models;
use RedBeanPHP\R;

class BookModel {

    public static function all(): array {
        return R::findAll("book");
    }

    public static function create(string $title, int $rating, string $author): int {
        $book = R::dispense("book");
        $book->title = $title;
        $book->rating = $rating;
        $book->author = $author;
        return R::store($book);
    }

}
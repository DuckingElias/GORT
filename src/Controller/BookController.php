<?php
namespace Gort\Controller;

use Gort\Core\Controller;
use Gort\Models\BookModel;
use RedBeanPHP\R;

class BookController extends Controller {

    public function all() {
        $books = BookModel::all();
        render('books.twig', [
            "page" => "Books",
            "books" => $books,
            "books_count" => count($books)
        ]);
    }

}
<?php

namespace App\Http\Controllers;

use App\Book;

/**      
 * Ckas BooksController
 * @package App\Http\Controllers
 */

class BooksController extends Controller
{
    /**
     * Get /books
     *  @return array
     */

    public function index()
    {
        return Book::all();
    }
}
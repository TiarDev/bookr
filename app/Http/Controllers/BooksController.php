<?php

namespace App\Http\Controllers;

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
        return[
            ['title' => 'War of the Worlds'],
            ['title' => 'A Wringkle in Time']
        ];
    }
}
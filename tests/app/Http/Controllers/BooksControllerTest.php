<?php

namespace Tests;

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;
use Tests\TestCase;

class BooksControllerTest extends TestCase
{
    /** @test */

    public function index_should_return_a_collection_of_records()
    {
        $this
            ->get('/books')
            ->seeJson([
                'title' => 'Boku no Academia'
            ])
            ->seeJson([
                'title' => 'Kimetsu no Yaiba'
            ]);

        // $this->assertEquals(
        //     $this->app->version(), $this->response->getContent()
        // );
    }
}
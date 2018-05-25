<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class NewsTest extends TestCase
{
    /**
     * get all news test.
     *
     * @return void
     */
    public function testGetNews()
    {
        $response = $this->get('/api/news');

        $response->assertStatus(200);
    }

    /**
     * insert news test.
     *
     * @return void
     */
    public function testInsertNews()
    {
        $response = $this->withHeaders([
                'X-Header' => 'Value',
            ])->json('POST', '/api/news', [
                'title' => 'Title of news',
                'body' => 'This is body of news',
                'status' => 'draft'
            ]);

        $response
            ->assertStatus(201)
            ->assertJsonStructure([
                'title',
                'body',
                'status',
                'updated_at',
                'created_at',
                'id'
            ]);
    }

    /**
     * insert news test.
     *
     * @return void
     */
    public function testUpdateNews()
    {
        $response = $this->withHeaders([
                'X-Header' => 'Value',
            ])->json('POST', '/api/news/2', [
                'body' => 'This body of news has been updated for testing.'
            ]);

        $response
            ->assertSee('Update success');
    }

    /**
     * insert news test.
     *
     * @return void
     */
    public function testDeleteNews()
    {
        $response = $this->withHeaders([
                'X-Header' => 'Value',
            ])->json('DELETE', '/api/news/1');

        $response
            ->assertSee('Delete success');
    }
}

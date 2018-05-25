<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TopicTest extends TestCase
{
    /**
     * get all topic test.
     *
     * @return void
     */
    public function testGetTopic()
    {
        $response = $this->get('/api/topic');

        $response->assertStatus(200);
    }

    /**
     * insert topic test.
     *
     * @return void
     */
    public function testInsertTopic()
    {
        $response = $this->withHeaders([
                'X-Header' => 'Value',
            ])->json('POST', '/api/topic', [
                'topicname' => 'The name of Topic'
            ]);

        $response
            ->assertStatus(201)
            ->assertJsonStructure([
                'topicname',
                'updated_at',
                'created_at',
                'id'
            ]);
    }

    /**
     * insert topic test.
     *
     * @return void
     */
    public function testUpdateTopic()
    {
        $response = $this->withHeaders([
                'X-Header' => 'Value',
            ])->json('POST', '/api/topic/2', [
                'topicname' => 'Updated topic name'
            ]);

        $response
            ->assertSee('Update success');
    }

    /**
     * insert topic test.
     *
     * @return void
     */
    public function testDeleteTopic()
    {
        $response = $this->withHeaders([
                'X-Header' => 'Value',
            ])->json('DELETE', '/api/topic/1');

        $response
            ->assertSee('Delete success');
    }
}

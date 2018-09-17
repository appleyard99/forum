<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ThreadsTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic test example.
     *
     * @return void

    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }*/

    public function test_a_user_can_browse_threads(){

        $response = $this->get('/threads');

        $response->assertSee($this->thread->title);

        $response = $this->get('/threads/'.$this->thread->id);
        $response = assertSee($this->thread->title);
    }

    public function a_user_can_read_replies_that_are_associated_with_a_thread(){

        $reply=factory('App\Reply')->create(['thread_id'=>$this->thread->id]);
        $this->get("/threads/".$this->thread->id)->assertSee($reply->body);
    }


}

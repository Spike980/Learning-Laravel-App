<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Todolist;

class TodolistTest extends TestCase 
{

    use DatabaseMigrations;

    public function testCanInitiateTodolist()
    {
        $list = new Todolist;
        $this->assertEquals(get_class($list), 'App\Todolist');
    }

    public function testTodolistRecordCount()
    {
        $listFactory = factory('App\Todolist')->create();
        $id = Todolist::orderBy('id', 'DESC')->first();
        $lists = Todolist::all();

        $this->assertEquals($lists->count(), $id->id);
    }
}

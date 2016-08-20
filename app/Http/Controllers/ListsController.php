<?php

namespace App\Http\Controllers;

use App\Events\ListWasCreated;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\ListFormRequest;
use App\Todolist;
use Event;
use Illuminate\Http\Request;

class ListsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        if (true) {
            # code...
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $categories = \App\Category::lists('name', 'id');
        return view('lists.create')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(ListFormRequest $request)
    {
        $list = new Todolist(['name' => $request->get('name'),
                              'description' => $request->get('description')
                              ]);
        $list->save();

        if(count($request->get('categories')) > 0)
        {
            $list->categories()->attach($request->get('categories'));
        }

        Event::fire(new ListWasCreated($list));

        return \Redirect::route('lists.create')->with('message', 'You list has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $list = Todolist::find($id);
        return view('lists.edit')->with('list', $list);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(ListFormRequest $request, $id)
    {
        $list = Todolist::find($id);

        $list->update(['name' => $request->get('name'),
                       'description' => $request->get('description')
                       ]);
        return \Redirect::route('lists.edit', [$list->id])->with('message', 'Your list has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Todolist::destroy($id);

        return \Redirect::route('lists.index')->with('message', 'The list has been deleted!');
    }
}
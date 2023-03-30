<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    
    public function index(Request $request)
    {
        try {
            $todos = new Todo();

            return view('todo', ['todos' => $todos->get()]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function store(Request $request)
    {
        try {
            $todo = new Todo;
            $todo->fill($request->all())
                ->save();

            return redirect()->route('todo.index', ['todos' => $todo->get()]);
            // return response('Saved successfully.');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function show(Request $request, $id)
    {
        try {
            $todo = new Todo;
            

            return view('edit-todo', ['todo' => $todo->find($id)]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $todo = new Todo();
            $todo->find($id)
                ->fill($request->all())
                ->save();

            return response('Updated successfully');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function delete(Request $request, $id)
    {
        try {
            $todo = new Todo();
            $todo ->find($id);


            return response('Deleted successfully.');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}

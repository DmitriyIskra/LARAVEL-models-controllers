<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Group as GroupModel;
use App\Models\Student;
use Illuminate\Http\Client\Response;

class Group extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = GroupModel::query()->get(['title', 'id']);

        return view('groups', [
            'groups' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create-group');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(isset($request->title)) {
            GroupModel::query()->create([
                "title" => "$request->title",
                "start_from" => "$request->start_from",
            ]);
        }

        return redirect('/');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = GroupModel::query()->where('id', $id)->first();
        $students = Student::query()->where('group_id', $id)->get();

        return view('group-id', [
            "data" => $data,
            "students" => $students,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

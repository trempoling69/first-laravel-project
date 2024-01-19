<?php

namespace App\Http\Controllers;

use App\Http\Requests\User as RequestsUser;
use Illuminate\Http\Request;

class User extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = [];
        function generateRandomName()
        {
            $names = ['John', 'Jane', 'Doe', 'Alice', 'Bob'];
            return $names[array_rand($names)] . ' ' . $names[array_rand($names)];
        }

        function generateRandomEmail()
        {
            $domains = ['gmail.com', 'yahoo.com', 'hotmail.com', 'example.com', 'domain.com'];
            return strtolower(str_replace(' ', '', generateRandomName()) . '@' . $domains[array_rand($domains)]);
        }

        for ($i = 0; $i < 5; $i++) {
            $users[] = [
                'name' => generateRandomName(),
                'email' => generateRandomEmail(),
            ];
        }

        return view('users.users', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RequestsUser $request)
    {
        return redirect()->route('user.all');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $id;
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

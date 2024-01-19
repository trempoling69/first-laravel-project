@extends('layout')

@section('title', 'Page des users')

@section('content')
@foreach($users as $user)
<p>{{$user['name']}}</p>
<p>{{$user['email']}}</p>
@endforeach
<div class="mt-10">
    <a href="{{ route('user.create') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Ajouter un user</a>
</div>
@endsection
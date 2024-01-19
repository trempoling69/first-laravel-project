@extends('layout')

@section('title', 'Page des categories')

@section('content')
@foreach($categories as $category)
<a href={{route('category.show', ['id' => $category['id']])}} class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
    <div class="flex flex-col justify-between p-4 leading-normal">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$category['name']}}</h5>
    </div>
</a>
@endforeach
<div class="mt-10">
    <a href="{{ route('category.create') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Ajouter une category</a>
</div>
@endsection
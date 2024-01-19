@extends('layout')

@section('title', 'Page des articles')

@section('content')
@foreach($articles as $article)
<a href={{route('article.show', ['id' => $article['id']])}} class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src={{$article['picture']}} alt="">
    <div class="flex flex-col justify-between p-4 leading-normal">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$article['name']}}</h5>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$article['content']}}</p>
    </div>
</a>
@endforeach
<div class="mt-10">
    <a href="{{ route('article.create') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Ajouter un article</a>
</div>
@endsection
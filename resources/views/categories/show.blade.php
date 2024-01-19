@extends('layout')

@section('title', 'Page des categories')

@section('content')
<div class="container my-24 mx-auto md:px-6">
    <section class="mb-32">
        <div class="mb-6 flex items-center">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (23).jpg" class="mr-2 h-8 rounded-full" alt="avatar" loading="lazy" />
            <div>
                <span> Published <u>15.07.2020</u> by </span>
                <a href="#!" class="font-medium">Anna Maria Doe</a>
            </div>
        </div>

        <h1 class="mb-6 text-3xl font-bold">
            {{$category['name']}}
        </h1>
    </section>
</div>
@endsection
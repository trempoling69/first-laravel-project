@extends('layout')

@section('title', 'Créer un user')

@section('content')
<form class="w-full max-w-sm" method="POST">
    @csrf
    <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/3">
            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                Full Name
            </label>
        </div>
        <div class="md:w-2/3">
            <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" value="{{old('name')}}" name="name" placeholder="NAME">
            @error('name')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/3">
            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
                Email
            </label>
        </div>
        <div class="md:w-2/3">
            <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-password" type="email" placeholder="EMAIL" name="email" value="{{old('email')}}">
            @error('email')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/3">
            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
                Date de naissance
            </label>
        </div>
        <div class="md:w-2/3">
            <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-password" type="date" placeholder="date de naissance" name="birthDate" value="{{old('birthDate')}}">
            @error('birthDate')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="md:flex md:items-center">
        <div class="md:w-1/3"></div>
        <div class="md:w-2/3">
            <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                Sign Up
            </button>
        </div>
    </div>
</form>
@endsection
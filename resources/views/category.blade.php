@extends('layouts.master')

@section('title', 'Категория')

@section('content')
    <h1>
        {{'content() -> $category->name'}} {{'content() -> $category->products->count()'}}
    </h1>
    <p>
        {{'content() -> $category->description'}}
    </p>
    <div class="row">
        @foreach('$category'->products( as '$product')
            @include('layouts.card', compact('product'))
        @endforeach
        </div>
@endsection
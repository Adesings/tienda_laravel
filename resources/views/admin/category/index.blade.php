@extends('admin.template')

@section('content')
    @foreach($categories as $category)
	    <h3>{{ $category->name }}</h3>
    @endforeach
@stop
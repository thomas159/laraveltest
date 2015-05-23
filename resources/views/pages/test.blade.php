@extends('layouts.default')
@section('content')

@foreach ($posts as $post)
         {{ $post->maps->link }}
 


@endforeach
@stop
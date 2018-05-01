@extends('layouts.app')

@section('content')
    <post-update
    	:post="{{ $post }}"
    ></post-update>
@endsection

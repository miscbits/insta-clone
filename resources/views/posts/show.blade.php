@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <post-card 
                    :key="{{ $post->id }}"
                    :post="{{ $post }}"
                ></post-card>
                @if(Auth::user()->id == $post->user_id)
                	<a href="/posts/{{ $post->id }}/edit">Edit Post</a>
                @endif
            </div>
        </div>
    </div>
@endsection

@extends('layout.app')

@section('content')
<div class="container">
    <h2>Gallery</h2>
    <div class="gallery">
        @foreach($images as $image)
            <div class="gallery-item">
                <img src="{{ asset('storage/'.$image->filename) }}" alt="{{ $image->title }}">
                <p>{{ $image->title }}</p>
            </div>
        @endforeach
    </div>
</div>
@endsection


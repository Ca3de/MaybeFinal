@extends('layout.app')

@section('content')
<div class="container">
    <h2>Sermons</h2>
    @foreach($sermons as $sermon)
        <div class="sermon">
            <h3>{{ $sermon->title }}</h3>
            <iframe width="560" height="315" 
                src="https://www.youtube.com/embed/{{ $sermon->youtube_video_id }}" 
                frameborder="0" allowfullscreen>
            </iframe>
        </div>
    @endforeach
</div>
@endsection


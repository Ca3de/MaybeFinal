@extends('layout.app')

@section('content')
<div class="container">
    <h2>Prayer Request</h2>
    @if(session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
    @endif

    <form action="{{ route('prayer.request.submit') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" required value="{{ old('name') }}">
            @error('name') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" required value="{{ old('email') }}">
            @error('email') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="request">Prayer Request:</label>
            <textarea name="request" rows="5" required>{{ old('request') }}</textarea>
            @error('request') <span class="error">{{ $message }}</span> @enderror
        </div>

        <button type="submit">Submit</button>
    </form>
</div>
@endsection


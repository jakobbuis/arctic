@extends('layout')

@section('title', 'Documents')

@section('page')
    <div class="container">
        <ul class="list-group">
            @foreach ($documents as $document)
                <li class="list-group-item">{{ $document->title }}</li>
            @endforeach
        </ul>
    </div>
@endsection

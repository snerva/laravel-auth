@extends('layouts.admin')

@section('content')

<div class="container py-4">
    <h2>Comics</h2>
    <div class="d-flex gap-4">
        <div class="details">
            <h1>{{$project->title}}</h1>
            <p>{{$project->description}}</p>
        </div>
    </div>
</div>
@endsection
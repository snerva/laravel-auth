@extends('layouts.admin')

@section('content')
<div class="container py-4">

    <div class="container py-2">
        <h3>Update: {{$project->title}}</h3>
        @include('partials.errors')
        <form action="{{route('admin.projects.update', $project->slug)}}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="title here" aria-describedby="titleHelpId" value="{{old('title', $project->title)}}">
                <small id="titleHelpId" class="text-muted">Add project title here, max 100 characters.</small>
            </div>
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" name="description" id="description" class="form-control @error('description') is-invalid @enderror" placeholder="description here" aria-describedby="descriptionHelpId" value="{{old('description', $project->description)}}">
                <small id="descriptionHelpId" class="text-muted">Add project description here, min 20 characters.</small>
            </div>
            @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <button type="submit" class="btn btn-outline-primary my-3"><i class="fa-solid fa-arrow-up-from-bracket"></i></button>
        </form>
    </div>

</div>
@endsection
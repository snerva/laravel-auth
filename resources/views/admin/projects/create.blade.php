@section('content')
<div class="container py-4">
    <h2>Projects</h2>

    <div class="container py-2">
        <h3>Add a new Project</h3>
        @include('partials.errors')
        <form action="{{route('projects.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="title here" aria-describedby="titleHelpId" value="{{old('title')}}">
                <small id="titleHelpId" class="text-muted">Add project title here, max 100 characters.</small>
            </div>
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" name="description" id="description" class="form-control @error('description') is-invalid @enderror" placeholder="description here" aria-describedby="descriptionHelpId" value="{{old('description')}}">
                <small id="descriptionHelpId" class="text-muted">Add project description here, min 20 characters.</small>
            </div>
            @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <button type="submit" class="btn btn-primary my-3">Add Project</button>
        </form>
    </div>

</div>
@endsection
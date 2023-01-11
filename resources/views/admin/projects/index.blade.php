@extends('layouts.admin')

@section('content')
<div class="heading d-flex justify-content-between align-items-center pt-4">
    <h2>Projects</h2>
    <div><a href="{{route('admin.projects.create')}}" class="btn btn-outline-light"><i class="fas fa-plus    "></i></a></div>
</div>

@include('partials.message')

<div class="table-responsive pt-4">
    <table class="table table-striped table-primary align-middle table-hover table-borderless">
        <thead class="table-dark">
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Slug</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @forelse($projects as $project)
            <tr class="table-light">
                <td scope="row">{{$project->id}}</td>
                <td>{{$project->title}}</td>
                <td>{{$project->slug}}</td>
                <td>{{$project->description}}</td>

                <td class="d-flex flex-column gap-2">
                    <a href="{{route('admin.projects.show', $project->slug)}}" class="btn btn-outline-primary view" role="button">
                        <i class="fas fa-eye"></i>
                    </a>
                    <a href="" class="btn btn-outline-secondary edit">
                        <i class="fas fa-pencil fa-sm fa-fw"></i>
                    </a>
                    <a href="" class="btn btn-outline-danger delete" data-bs-toggle="modal" data-bs-target="#deleteProduct-{{$project->id}}">
                        <i class="fas fa-trash fa-sm fa-fw"></i>
                    </a>



                </td>
            </tr>
            @empty
            <tr class="table-primary">
                <td scope="row">No projects to show yet</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
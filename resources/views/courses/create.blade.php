@extends('layouts.app')


@section('content')

    <h1 class="mt-4 mb-4">Creat a Course</h1>

    <form action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-4">
            <div class="control-group col-6">
                <label for="title">Course Title</label>
                <input type="text" id="title" class="form-control"
                       name="title" value="{{ old('title') }}"
                       placeholder="Enter Course Title"
                >
            </div>
        </div>
        <div class="row mt-4">
            <div class="control-group col-6">
                <label for="description">Course Description</label>
                <textarea type="text" id="description" class="form-control"
                          name="description"
                          placeholder="Enter Course Description"
                >{{ old('description') }}</textarea>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-6 mb-3">
                <label for="imageId" class="form-label">Course Image</label>
                <input type="file" class="form-control" name="image" id="imageId">
            </div>
        </div>

        <div class="row mt-2">
            <div class="control-group col-6">
                <button id="btn-submit" class="btn btn-primary">
                    Create Course
                </button>
            </div>
        </div>

    </form>
@endsection

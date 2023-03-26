@extends('layouts.app')

@section('content')


        <a href="{{ route('courses.create') }}"
            class="btn btn-success mt-4 mb-4">
            Create a Course
        </a>

        <h1 class="mt-4 mb-4">All Courses</h1>

        <div class="row">
{{--            @foreach($courses as $course)--}}
{{--                <div class="card col-4">--}}
{{--                    <img src="{{ asset('storage/images/'. $course->image) }}" class="card-img-top" alt="...">--}}
{{--                    <div class="card-body">--}}
{{--                        <h5 class="card-title">Card title</h5>--}}
{{--                        <p class="card-text">--}}
{{--                            Some quick example text to build on the card--}}
{{--                            title and make up the bulk of the card's content.--}}
{{--                        </p>--}}
{{--                        <a href="#" class="btn btn-primary">Go somewhere</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            @endforeach--}}

            @forelse($courses as $course)
                <div class="card col-4">
                    <img src="{{ asset('storage/images/'. $course->image) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            Some quick example text to build on the card
                            title and make up the bulk of the card's content.
                        </p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            @empty
                <p class="text-warning">No Course Available</p>
            @endforelse
        </div>

@endsection

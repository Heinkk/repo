@extends('layouts.app')
@section('title')
    Category Create
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-6`">
                <div class="my-5">
                    <form action="{{ route('category.store') }}" method="post">

                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <label for="" class="form-label">Category Name</label>

                            </div>
                            <div class="col-xl-4">
                                <input type="text" class="form-control" name="title">
                                @error('title') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                            <div class="col-xl-4">
                                <button class="btn btn-outline-primary">Create</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection

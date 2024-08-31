@extends('admin.layouts.main') 
@section('title','Add Artist')
@section('wrapper')
<main class="content">
    <div class="container-fluid p-0">
        <form action="{{route('artists.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="mb-3">
                    <h1 class="h3 d-inline align-middle">Add new singer</h1>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Name</h5>
                        </div>
                        @error('name')
                        <span class="text-danger m-4">{{ $message }}</span>
                        @enderror
                        <div class="card-body">
                            <input type="text" name="name" class="form-control" />
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Country</h5>
                        </div>
                        @error('country')
                        <span class="text-danger m-4">{{ $message }}</span>
                        @enderror
                        <div class="card-body">
                            <input type="text" name="country" class="form-control" />
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">BirthYear</h5>
                        </div>
                        @error('birth_year')
                        <span class="text-danger m-4">{{ $message }}</span>
                        @enderror
                        <div class="card-body">
                            <input type="number" name="birth_year" class="form-control" />
                        </div>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</main>
@endsection

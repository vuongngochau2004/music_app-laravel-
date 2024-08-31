@extends('admin.layouts.main')
@section('title','User Update')
@section('wrapper')
<main class="content">
    <div class="container-fluid p-0">
        <form action="{{route('users.update', $user->id)}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="mb-3">
                    <h1 class="h3 d-inline align-middle">Update user</h1>
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
                            <input type="text" name="name" class="form-control" value="{{$user->name}}"/>
                        </div>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</main>
@endsection
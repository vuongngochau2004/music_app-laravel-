@extends('admin.layouts.main') 
@section('title','Add Album')
@section('wrapper')
<main class="content">
    <div class="container-fluid p-0">
        <form action="{{route('albums.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="mb-3">
                    <h1 class="h3 d-inline align-middle">Add new album</h1>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Title</h5>
                        </div>
                        @error('title')
                        <span class="text-danger m-4">{{ $message }}</span>
                        @enderror
                        <div class="card-body">
                            <input type="text" name="title" class="form-control" />
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Artist</h5>
                        </div>

                        <div class="card-body">
                            <select class="form-select mb-3" name="artist_id">
                                @foreach ($artists as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">File Image</h5>
                        </div>
                        @error('image')
                        <span class="text-danger m-4">{{ $message }}</span>
                        @enderror
                        <div class="card-body">
                            <input type="file" id="imageFile" name="image_album" class="form-control" accept="image/*" />
                        </div>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</main>
@endsection

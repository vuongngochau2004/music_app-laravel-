@extends('admin.layouts.main') 
@section('title','Upadte Album') 
@section('wrapper')
<main class="content">
    <div class="container-fluid p-0">
        <form action="{{route('albums.update', $album)}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
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
                            <input type="text" name="title" class="form-control" value="{{$album->title}}"/>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Artist</h5>
                        </div>

                        <div class="card-body">
                            <select class="form-select mb-3" name="artist_id">
                                @foreach ($artists as $item)
                                <option value="{{$item->id}}" {{$album->artist_id == $item->id ? 'selected' : ''}}>{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</main>
@endsection

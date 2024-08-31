@extends('admin.layouts.main')
@section('title','Update Song') 
@section('wrapper')
<main class="content">
    <div class="container-fluid p-0">
        <form action="{{route('songs.update', $song)}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="mb-3">
                    <h1 class="h3 d-inline align-middle">Update song</h1>
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
                            <input type="text" id="songName" name="title" class="form-control" value="{{$song->title}}" />
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Artist</h5>
                        </div>
                        
                        <div class="card-body">
                          <select class="form-select mb-3" name="artist_id">
                            @foreach ($artists as $item)
                              <option value="{{$item->id}}" {{$song->artist_id == $item->id ? 'selected' : '' }}>{{$item->name}}</option>
                            @endforeach
                          </select>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">File Song</h5>
                        </div>
                        @error('audio_data')
                        <span class="text-danger m-4">{{ $message }}</span>
                        @enderror
                        <div class="card-body">
                            <input type="file" id="audioFile" name="audio_data" class="form-control" value="{{$song->audio_data}}" />
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Genre</h5>
                        </div>
                        @error('genre')
                        <span class="text-danger m-4">{{ $message }}</span>
                        @enderror
                        <div class="card-body">
                            <input type="text" id="genre" name="genre" class="form-control" value="{{$song->genre}}"/>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Album</h5>
                        </div>
                        
                        <div class="card-body">
                          <select class="form-select mb-3" name="album_id">
                            <option value="">None</option>
                            @foreach ($albums as $item)
                              <option value="{{$item->id}}" {{$song->album_id == $item->id ? 'selected' : '' }}>{{$item->title}}</option>
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
                            <input type="file" id="imageFile" name="image" class="form-control" accept="image/*" value="{{$song->image}}"/>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</main>
@endsection

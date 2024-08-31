<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Albums;
use App\Models\Artists;
use Illuminate\Http\Request;
use App\Models\Songs;
use FFMpeg\FFMpeg;
use Illuminate\Support\Facades\Storage;
use getID3;
use FFMpeg\FFProbe;



class SongsController extends Controller
{
    public function index()
    {   
        $songs = Songs::all();
        $artists = Artists::all();
        $albums = Albums::all();
        return view('admin.songs.index', compact('songs','artists','albums'));
    }
    public function create()
    {
        $songs = Songs::all();
        $artists = Artists::all();
        $albums = Albums::all();
        return view('admin.songs.add', compact('songs','artists','albums'));
    }

    public function getMp3Duration($filePath)
    {
        $getID3 = new getID3();
        $fileInfo = $getID3->analyze($filePath);
        
        if (isset($fileInfo['playtime_string'])) {
            $durationInSeconds = $fileInfo['playtime_string'];
            return $durationInSeconds;
        } else {
            return null;
        }
    }

    public function store(Request $request)
    {
        
        $song = $request->validate([
            'title' => 'required',
            'artist_id' => 'required',
            'album_id' => 'required',
            'audio_data' => 'required|file|mimes:mp3,wav',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'genre' => 'required',
        ]);
        // ri cung dc e, function ->move k dc thi doi sang ->store
        // Lưu audio_data
        $audio_file = $request->file('audio_data');
        $audio_filename = $audio_file->hashName();
        $audio_path = 'public/uploads/audio/' . $audio_filename;
        $audio_file->storeAs($audio_path);
        $song['audio_data'] = $audio_filename;

        // Lưu image
        $image_file = $request->file('image');
        $image_filename = $image_file->hashName();
        $image_path = 'public/uploads/image/' . $image_filename;
        $image_file->storeAs($image_path);
        $song['image'] = $image_filename;
        $audioDuration = $this->getMp3Duration($audio_file);
        $song['duration'] = $audioDuration;
        try {
            Songs::create($song);
            return redirect()->route('songs.index')->with('success','Thêm thành công bài mới.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error','Thêm mới thất bại');
        }
    }
    public function show(string $id)
    {
        //
    }
    public function edit(Songs $song)
    {
        $songs = Songs::all();
        $artists = Artists::all();
        $albums = Albums::all();
        return view('admin.songs.edit',compact('song', 'songs','artists','albums'));
    }
    public function update(Request $request, Songs $song)
    {
        $songUpdate = $request->validate([
            'title' => 'required',
            'artist_id' => 'required',
            'album_id' => 'required',
            'audio_data' => 'required|file|mimes:mp3,wav',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'genre' => 'required',
        ]);
        try {
            $song->update($songUpdate);
            return redirect()->route('songs.index')->with('success','Cập nhật thành công.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error','Cập nhật thất bại.');
        }
    }
    public function destroy(Songs $song)
    {
        try {
            $song->delete();
            return redirect()->route('songs.index')->with('success','Xoá thành công.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error','Xoá thất bại.');
        }
    }
    public function trash(){;
        $songs = Songs::onlyTrashed()->get();
        $artists = Artists::all();
        $albums = Albums::all();
        return view('admin.songs.trash', compact('songs', 'artists', 'albums'));
    }
    public function restore($id){
        Songs::withTrashed()->where('id', $id)->restore();
        return redirect()->route('songs.trash')->with('success','Khôi phục thành công.');
    }
    public function forceDelete($id){
        Songs::withTrashed()->where('id', $id)->forceDelete();
        return redirect()->route('songs.trash')->with('success','Xoá vĩnh viễn thành công.');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Albums;
use App\Models\Artists;
use Illuminate\Http\Request;

class AlbumsController extends Controller
{
    public function index()
    {   
        $albums = Albums::all();
        $artists = Artists::all();
        return view('admin.albums.index', compact('albums','artists'));
    }
    public function create()
    {
        $albums = Albums::all();
        $artists = Artists::all();
        return view('admin.albums.add', compact('albums','artists'));
    }
    public function store(Request $request)
    {
        $albums = $request->validate([
            'title' => 'required',
            'artist_id' => 'required',
            'image_album' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        // Lưu image
        $image_file = $request->file('image_album');
        $image_filename = $image_file->hashName();
        $image_path = 'public/uploads/image_album/' . $image_filename;
        $image_file->storeAs($image_path);
        $albums['image_album'] = $image_filename;
        try {
            Albums::create($albums);
            return redirect()->route('albums.index')->with('success','Thêm album thành công.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error','Thêm thất bại');
        }
    }
    public function show(string $id)
    {
        //
    }
    public function edit(Albums $album)
    {
        $artists = Artists::all();
        $albums = Albums::all();
        return view('admin.albums.edit', compact('album', 'albums', 'artists'));   
    }
    public function update(Request $request, Albums $album)
    {
        $albumUpadte = $request->validate([
            'title' => 'required',
            'artist_id' => 'required',
        ]);
        try {
            $album->update($albumUpadte);
            return redirect()->route('albums.index')->with('success','Cập nhật thành công.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error','Cập nhật thất bại');
        }
    }
    public function destroy(Albums $album)
    {
        try {
            $album->delete();
            return redirect()->route('albums.index')->with('success','Xoá thành công.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error','Xoá thất bại.');
        }
    }
    public function trash(){;
        $albums = Albums::onlyTrashed()->get();
        $artists = Artists::all();
        return view('admin.albums.trash', compact('albums', 'artists'));
    }
    public function restore($id){
        Albums::withTrashed()->where('id', $id)->restore();
        return redirect()->route('albums.trash')->with('success','Khôi phục thành công.');
    }
    public function forceDelete($id){
        Albums::withTrashed()->where('id', $id)->forceDelete();
        return redirect()->route('albums.trash')->with('success','Xoá vĩnh viễn thành công.');
    }
}

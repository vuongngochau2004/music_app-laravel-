<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artists;
use Illuminate\Http\Request;

class ArtistsController extends Controller
{
    public function index()
    {   
        $artists = Artists::all();
        // return view('admin.songs.index', compact('songs'));
        return view('admin.artists.index', compact('artists'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $artists = Artists::all();
        return view('admin.artists.add', compact('artists'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $singer = $request->validate([
            'name' => 'required',
            'country' => 'required',
            'birth_year' => 'required',
        ]);
        try {
            Artists::create($singer);
            return redirect()->route('artists.index')->with('success','Thêm ca sĩ thành công.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error','Thêm thất bại');
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }
    public function edit(Artists $artist)
    {
        $artists = Artists::all();
        return view('admin.artists.edit', compact('artists', 'artist'));    
    }
    public function update(Request $request, Artists $artist)
    {
        $singerUpadte = $request->validate([
            'name' => 'required',
            'country' => 'required',
            'birth_year' => 'required',
        ]);
        try {
            $artist->update($singerUpadte);            
            return redirect()->route('artists.index')->with('success','Cập nhật thành công.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error','Cập nhật thất bại.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artists $artist)
    {
        try {
            $artist->delete();
            return redirect()->route('artists.index')->with('success','Xoá thành công.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error','Xoá thất bại.');
        }
    }
    public function trash(){;
        $artists = Artists::onlyTrashed()->get();
        return view('admin.artists.trash', compact('artists'));
    }
    public function restore($id){
        Artists::withTrashed()->where('id', $id)->restore();
        return redirect()->route('artists.trash')->with('success','Khôi phục thành công.');
    }
    public function forceDelete($id){
        Artists::withTrashed()->where('id', $id)->forceDelete();
        return redirect()->route('artists.trash')->with('success','Xoá vĩnh viễn thành công.');
    }
}

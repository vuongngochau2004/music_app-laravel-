<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Playlist;

class PlaylistController extends Controller
{
    public function create()
    {
        return view('client.playlists.create');
    }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //     ]);

    //     $playlist = auth()->user()->playlists()->create([
    //         'name' => $request->input('name'),
    //     ]);

    //     return redirect()->route('playlists.show', $playlist);
    // }

    public function index()
    {
        return view('client.playlists.index');
    }

    public function show(Playlist $playlist)
    {
        return view('playlists.show', compact('playlist'));
    }

    public function destroy(Playlist $playlist)
    {
        $this->authorize('delete', $playlist);

        $playlist->delete();

        return redirect()->route('playlists.index');
    }

    // Admin
    // Trong tệp PlaylistController.php
    public function adminIndex()
    {
        // Hiển thị danh sách tất cả playlist
        $playlists = Playlist::all();
        return view('playlists.adminIndex', compact('playlists'));
    }

    public function adminShow(Playlist $playlist)
    {
        // Hiển thị chi tiết playlist
        return view('playlists.adminShow', compact('playlist'));
    }

    public function adminDestroy(Playlist $playlist)
    {
        // Xóa playlist của bất kỳ người dùng nào
        $playlist->delete();

        return redirect()->route('playlists.adminIndex');
    }

}

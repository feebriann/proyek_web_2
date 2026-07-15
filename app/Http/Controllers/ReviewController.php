<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    // =======================================================
    // FUNGSI UNTUK MENYIMPAN RATING/KOMENTAR BARU
    // =======================================================
    public function store(Request $request, Album $album)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string',
        ]);

        Review::create([
            'album_id' => $album->id,
            'user_id' => Auth::id(),
            'rating' => $request->rating,
            'comment' => $request->comment,
        ]);

        return back();
    }

    // =======================================================
    // FUNGSI UNTUK MENGHANCURKAN (DELETE) RATING/KOMENTAR
    // =======================================================
    public function destroy($id)
    {
        // 1. Cari data review/komentar berdasarkan ID-nya
        $review = Review::findOrFail($id);

        // 2. Sistem Keamanan: Pastikan HANYA pemilik komentar atau Admin yang bisa menghapusnya!
        if (Auth::id() == $review->user_id || Auth::user()->role == 'admin') {
            $review->delete();
        }

        // 3. Tendang kembali ke halaman detail album setelah dihapus
        return back();
    }
}
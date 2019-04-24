<?php

namespace App\Http\Controllers;

use App\Kontak;
use App\visitor;
use Illuminate\Http\Request;
use App\posting;
use App\jadwal;
use App\gallery;
use Illuminate\Support\Facades\Storage;
use Nexmo\Response;

class GetController extends Controller
{
    public function indexPostingBerita()
    {
        $posted1 = posting::where('typeText','berita')->paginate(6);


        $posted = [
            'data' => $posted1
        ];
        return response()->json($posted);

    }

    public function indexPostingArtikel()
    {
        $posted1 = posting::where('typeText','artikel')->paginate(6);
        $posted = [
            'data' => $posted1
        ];
        return response()->json($posted);
    }

    public function indexPostingPengumuman()
    {
        $posted1 = posting::where('typeText','pengumuman')->paginate(6);
        $posted = [
            'data' => $posted1
        ];
        return response()->json($posted);
    }

    public function indexGallery()
    {
        $posted1 = gallery::paginate(9);
        $posted = [
            'data' => $posted1
        ];

        return response()->json($posted);
    }

    //user

    public function indexPostingAll()
    {
        $posted1 = posting::get();
        $posted = [
            'data' => $posted1
        ];
        return response()->json($posted);
    }

    public function indexGalleryAll()
    {
        $posted1 = gallery::get();
//        $foto = Response::download(public_path().'/uploads/jadwal/php3AF6.tmp.jpg');
        $posted = [
            'data' => $posted1,
//            'photo' => $foto
        ];

        return response()->json($posted);
    }
    public function indexJadwalAll()
    {
        $posted1 = jadwal::get();
        $posted = [
            'data' => $posted1
        ];
        return response()->json($posted);
    }


    public function indexVisitor()
    {
        $visitorTraffic = visitor::selectRaw('Date(created_at) as date, count(*) as visitor')
            ->where('created_at', '>=', \Carbon\Carbon::now()->subMonth()->toDateString())
            ->groupBy('date')
            ->orderBy('date', 'DESC')   
            ->limit(7)
            ->get();

        return response()->json($visitorTraffic);
    }
}

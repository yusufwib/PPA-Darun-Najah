<?php

namespace App\Http\Controllers;

use App\posting;
use Illuminate\Http\Request;
use App\gallery;

class DeleteController extends Controller
{

    public  function  __construct()
    {
        $this->middleware(
            'jwt.auth');
    }

    public function deletePosting($id)
    {
        posting::where('id',$id)->delete();

        return response()->json([
            'data' => posting::get()
        ]);
    }

    public function deleteGallery($id)
    {
        $posted = gallery::where('id',$id)->delete();

        return response()->json([
            'data' => gallery::get()
        ]);

    }
}

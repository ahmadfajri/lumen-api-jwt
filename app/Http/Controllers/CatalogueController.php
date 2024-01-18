<?php

namespace App\Http\Controllers;

use App\Models\Catalogue;

class CatalogueController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function get()
    {
        $catalogue = Catalogue::all();

        return response()->json([
            'data' => $catalogue
        ]);
    }
}

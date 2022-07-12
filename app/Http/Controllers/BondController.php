<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class BondController extends Controller
{
    /**
     * Store a new bond.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request, $bond_id)
    {
        return \response()->json(['id' => $request->all()]);
    }
}

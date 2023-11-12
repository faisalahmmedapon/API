<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $vendors = Vendor::latest('id')->get();
        return response()->json([
            'vendors' => $vendors,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        if ($user){
            $validatedData = $request->validate([
                'name' => 'required|max:255|unique:vendors',
                'description' => 'required',
            ]);

            $vendor = Vendor::create($validatedData);
            return response()->json([
                'message' => 'Successfully create new vendor',
                'vendor' => $vendor,
            ]);
        }else {
            return response()->json(['message' => 'Unauthorized.'], 401);
        }


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = Auth::user();
        if ($user){

            $vendor = Vendor::findOrFail($id);

            $validatedData = $request->validate([
                'name' => 'required|max:255',
                'description' => 'required',
            ]);

            $vendor->update($validatedData);
            return response()->json([
                'message' => 'Successfully Update the vendor',
                'vendor' => $vendor,
            ]);
        }else {
            return response()->json(['message' => 'Unauthorized.'], 401);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $user = Auth::user();
        if ($user){
            $vendor = Vendor::findOrFail($id);
            $vendor->delete();
            return response()->json([
                'message' => 'Successfully delete vendor',
                'vendor' => $vendor,
            ]);
        }else {
            return response()->json(['message' => 'Unauthorized.'], 401);
        }


    }
}

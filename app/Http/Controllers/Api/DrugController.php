<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Drug;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DrugController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $drugs = Drug::latest('id')->get();
        return response()->json([
            'drugs' => $drugs,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    
    public function search(Request $request)
    {
        $drugs =  Drug::where('name','LIKE','%'.$request->searchString."%")->get();
        return response()->json([
            'drugs' => $drugs,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        if ($user){
            $validatedData = $request->validate([
                'name' => 'required|max:255|unique:drugs',
                'weight' => 'required',
                'type' => 'required',
                'vendor' => 'required',
                'price' => 'required',
                'quantity' => 'required',
            ]);

            $drug = Drug::create($validatedData);
            return response()->json([
                'message' => 'Successfully create new drug',
                'drug' => $drug,
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

            $drug = Drug::findOrFail($id);

            $validatedData = $request->validate([
                'name' => 'required|max:255',
                'weight' => 'required',
                'type' => 'required',
                'vendor' => 'required',
                'price' => 'required',
                'quantity' => 'required',
            ]);

            $drug->update($validatedData);
            return response()->json([
                'message' => 'Successfully Update the drug',
                'drug' => $drug,
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
            $drug = Drug::findOrFail($id);
            $drug->delete();
            return response()->json([
                'message' => 'Successfully delete drug',
                'drug' => $drug,
            ]);
        }else {
            return response()->json(['message' => 'Unauthorized.'], 401);
        }


    }
}

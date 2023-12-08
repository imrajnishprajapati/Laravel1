<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\ApiCrud;
use Illuminate\Http\Request;

class ApiCrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id=null)
    {
      return $id?ApiCrud::find($id):ApiCrud::all();
            }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $req)
    {
        $ApiCrud = new ApiCrud;
        $ApiCrud->name=$req->name;
        $ApiCrud->roll=$req->roll;
        $ApiCrud->school=$req->school;
        $result=$ApiCrud->save();
        if ($result) {
          return ["result"=>"Data has been Saved."];
        } else {
          return ["result"=>"Operation has been Failed."];
        }
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ApiCrud $apiCrud)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function search($name)
    {
        return ApiCrud::where("name",$name)->get();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req)
    {
        $ApiCrud = ApiCrud::find($req->id);
        $ApiCrud->name=$req->name;
        $ApiCrud->roll=$req->roll;
        $ApiCrud->school=$req->school;
        $result=$ApiCrud->save();
        if ($result) {
          return ["result"=>"Data has been Updated."];
        } else {
          return ["result"=>"Operation has been Failed."];
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $ApiCrud = ApiCrud::find($id);
        $result=$ApiCrud->delete();
        if ($result) {
          return ["result"=>"Data has been Delete."];
        } else {
          return ["result"=>"Operation has been Failed."];
        }
    }
}

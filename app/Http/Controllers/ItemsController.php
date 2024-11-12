<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Items;

class ItemsController extends Controller
{
    public function index(){
        return response()->json(Items::all());
    }

    public function store(Request $request){
        $item = Items::create($request->all());
        return response()->json($item,201);
    }

    public function show($id){
        $item = Items::find($id);
        return response()->json($item);
    }

    public function update(Request $request,$id){
        $item = Items::find($id);
        $item->update($request->all());
        return response()->json($item);
    }

    public function destroy($id){
        $item = Items::destroy($id);
        return response()->json(null,204);
    }
}

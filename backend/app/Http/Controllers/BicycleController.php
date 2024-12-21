<?php

namespace App\Http\Controllers;


use App\Http\Resources\BicycleResource;
use Illuminate\Http\Request;
use App\Models\Bicycle;
use App\Http\Requests\BicycleStoreRequest;
use App\Http\Requests\BicycleUpdateRequest;

class BicycleController extends Controller
{
    public function index(){
        return BicycleResource::collection(Bicycle::all());
    }

    public function store(BicycleStoreRequest $request){
        $data = $request->validated();
        $created = Bicycle::create($data);
        return new BicycleResource($created);
    }

    public function show(int $bicycle){
        return new BicycleResource(Bicycle::findOrFail($bicycle));
    }

    public function update(BicycleUpdateRequest $request, int $bicycle){
        $data = $request->validated();
        Bicycle::findOrFail($bicycle)->update($data);
        return new BicycleResource(Bicycle::findOrFail($bicycle));
    }

    public function destroy(int $bicycle){
        Bicycle::findOrFail($bicycle);
        Bicycle::destroy($bicycle);
    }
}

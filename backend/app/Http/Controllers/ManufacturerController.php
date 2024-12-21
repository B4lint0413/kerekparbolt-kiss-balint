<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manufacturer;
use App\Http\Requests\ManufacturerStoreRequest;
use App\Http\Requests\ManufacturerUpdateRequest;
use App\Http\Resources\ManufacturerResource;

class ManufacturerController extends Controller
{
    public function index(){
        return ManufacturerResource::collection(Manufacturer::all());
    }

    public function store(ManufacturerStoreRequest $request){
        $data = $request->validated();
        $created = Manufacturer::create($data);
        return new ManufacturerResource($created);
    }

    public function show(int $manufacturer){
        return new ManufacturerResource(Manufacturer::findOrFail($manufacturer));
    }

    public function update(ManufacturerUpdateRequest $request, int $manufacturer){
        $data = $request->validated();
        Manufacturer::findOrFail($manufacturer)->update($data);
        return new ManufacturerResource(Manufacturer::findOrFail($manufacturer));
    }
    
    public function destroy(int $manufacturer){
        Manufacturer::findOrFail($manufacturer);
        Manufacturer::destroy($manufacturer);
    }
}

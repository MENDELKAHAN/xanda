<?php

namespace App\Http\Controllers;

use App\Characteristic;
use App\Armament;
use Illuminate\Http\Request;
use DB;


class CharacteristicController extends Controller
{

    
    // @return all characteristics (id name and status) as json
    public function showAll()
    {
        return response()->json(Characteristic::all(array("id", "name","status")));
    }

    // @param characteristic id
    // @return characteristic with armament as json
    // result does not need characteristic is. just added as function request it to get the rsult
    public function findById($id)
    {
        return response()->json(characteristic::with(array('armament'=>function($query){
            $query->select('title','qty','characteristic_id');
        }))->find($id));

    }

    //create new Characteristic
    public function create(Request $request)
    {
        $result = Characteristic::create($request->all());
        return response()->json(array('success' => true));
    }

    //edit update Characteristic
    public function edit($id, Request $request)
    {
        $characteristic = Characteristic::findOrFail($id);
        $characteristic->update($request->all());
        return response()->json(array('success' => true));
    }

    //hard delete Characteristic
    public function delete($id)
    {
        Characteristic::findOrFail($id)->delete();
        return response()->json(array('success' => true));
    }


}


 
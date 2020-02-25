<?php

namespace App\Http\Controllers\Api;

use App\Model\Classe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class ClasseController extends Controller
{

    public function index()
    {
        return Classe::all();
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:classes',
        ]);

        $data = array();
        $data['name'] = $request->name;
        $insert = DB::table('classes')->insert($data);
        return response('done');
    }

    public function show($id)
    {
        $show = DB::table('classes')->where('id', $id)->first();
        return response()->json($show);
    }

    public function edit(Classe $classe)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $data = array();
        $data['name'] = $request->name;
        DB::table('classes')->where('id', $id)->update($data);
        return response('Updated');
    }

    public function destroy($id)
    {
        DB::table('classes')->where('id', $id)->delete();
        return response('deleted');
    }
}
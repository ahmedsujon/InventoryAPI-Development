<?php

namespace App\Http\Controllers\Api;

use App\Model\Section;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SectionController extends Controller
{

    public function index()
    {
        $section = Section::all();
        return response()->json($section);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'classe_id' => 'required',
            'name' => 'required|unique:sections',
        ]);
        $section = Section::create($request->all());
        //return response()->json($subject);
        return response('section');
    }

    public function show($id)
    {
        $section = Section::findorfail($id);
        return response()->json($section);
    }

    public function edit(Section $section)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $section = Section::findorfail($id);
        $section->update($request->all());
        return response('Updated');
    }

    public function destroy($id)
    {
        Section::where('id', $id)->delete();
        return response('Deleted');
    }
}
<?php

namespace App\Http\Controllers\Api;

use App\Model\Subject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubjectController extends Controller
{

    public function index()
    {
        $subject = Subject::all();
        return response()->json($subject);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'classe_id' => 'required',
            'name' => 'required|unique:subjects',
            'code' => 'required|unique:subjects',
        ]);

        $subject = Subject::create($request->all());
        //return response()->json($subject);
        return response('subject');
    }

    public function show($id)
    {
        $subject = Subject::findorfail($id);
        return response()->json($subject);
    }

    public function edit(Subject $subject)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $subject = Subject::findorfail($id);
        $subject->update($request->all());
        return response('Updated');
    }

    public function destroy($id)
    {
        Subject::where('id', $id)->delete();
        return response('Deleted');
    }
}
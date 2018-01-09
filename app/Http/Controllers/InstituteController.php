<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Institute;
use App\Course;
use Session;

class InstituteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $institutes = Institute::all();
      return view('manage.institutes.index')->withInstitutes($institutes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

      return view('manage.institutes.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validateWith([
        'institute_name' => 'required|max:100',
        'description' => 'sometimes|max:255'
      ]);

      $institute = new Institute();
      $institute->name = $request->institute_name;
      $institute->description = $request->description;
      $institute->save();


      Session::flash('success', 'Successfully created the new '. $institute->name . ' institute in the database.');
      //return redirect()->route('roles.show', $institute->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $institute = Institute::where('id', $id)->with('courses')->first();
      return view('manage.institutes.show')->withInstitute($institute);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $institute = Institute::where('id', $id)->with('courses')->first();
      return view('manage.institutes.edit')->withInstitute($institute);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validateWith([
        'institute_name' => 'required|max:100',
        'description' => 'sometimes|max:255'
      ]);

      $institute = Institute::findOrFail($id);
      $institute->name = $request->institute_name;
      $institute->description = $request->description;
      $institute->save();

      Session::flash('success', 'Successfully updated  '. $institute->name . ' institute in the database.');
      return redirect()->route('institutes.show', $institute->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $institute = Institute::find($id);
      $institute->delete();
      Session::flash('success','Institute is successfully deleted!');
      return redirect()->route('institutes.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\StaffRecord;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.staff_reg');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        StaffRecord::create($request->all());
        return back()->with('success', 'Staff Record Saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $staff = StaffRecord::where('user_status', '1')->latest()->paginate(10);
        return view('admin.show', compact('staff'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = StaffRecord::find($id);
        return view('admin.staff_edit', compact('user'));
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
        $update = StaffRecord::find($id);
        $input = $request->all();

        $update->update($input);
        return redirect()->route('staffs.index')
                        ->with('success','User data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $id = StaffRecord::find($id);
        // $id->delete();
    
        // return redirect()->route('staffs.index')
        //                 ->with('success','Staff Deleted Successfully');
        $update = StaffRecord::find($id);
        //$input = $request->all();

        $update->update(['user_status' => '2', 'status' => 'Deleted']);
        return redirect()->route('staffs.index')
                        ->with('success','Staff Deleted Successfully');
    }

}

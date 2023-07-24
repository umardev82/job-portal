<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company\Company;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $company = Company::where('id', Auth::id())->first();
        return view('company.profile.edit',compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('company/images'), $imageName);

        $company = Company::where('id', Auth::id())->first();
        $company->name = $request->name;
        $company->description = $request->description;
        $company->address = $request->address;
        $company->email = $request->email;
        $company->location = $request->location;
        $company->image = 'company/images/' . $imageName;
        $company->save();
        return redirect()->route('company.profile.edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

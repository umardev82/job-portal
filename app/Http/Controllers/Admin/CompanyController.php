<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Company;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companys = Company::all();
        return view('admin.company.index', compact("companys"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.company.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $company = new Company();
        $company->name = $request->name;
        $company->description = $request->description;
        $company->address = $request->address;
        $company->email = $request->email;
        $company->location = $request->location;
        $company->save();
        return redirect()->route('admin.company.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.company.detail');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $company = Company::find($id);
        $users = User::wherehas('role', function ($query) {
            $query->where('role', 'job_provider');
        })->get();
        return view('admin.company.edit', compact('company', 'users'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $company = Company::find($id);
        $company->name = $request->name;
        $company->description = $request->description;
        $company->address = $request->address;
        $company->email = $request->email;
        $company->location = $request->location;
        $company->user_id = $request->user_id;
        $company->save();
        return redirect()->route('admin.company.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $companys = Company::find($request->id);
        $companys->delete();
        return redirect()->route('admin.company.index');
    }
}

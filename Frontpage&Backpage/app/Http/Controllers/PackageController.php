<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\Category;
use Illuminate\Support\Facades\DB;


class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
            $data = Package::all();
            // dd($data);
            //$s2 = Category::all();
            //$data = array_merge($s, $s2);
            //$titel = Market Place;
            return view('page-package.package', compact('data'));
        //
    }

    public function preview()
    {
        return view('page-package.preview_package');
    }

    
    public function pre1($id)
    {
        
        $data = DB::table('packages')->where('package_id', $id)->get();
        //dd($data);
        return view('page-package.preview_package', ['data' => $data ]);//
    }

    public function pre2()
    {
        return view('page-package.preview2');//
    }
    public function pre3()
    {
        return view('page-package.preview3');//
    }
    public function pre4()
    {
        return view('page-package.preview4');//
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function order()
    {   
        return view('admin.order-package');
    }
    public function table()
    {

        //$package=Package::all();
    
        $title="Table";
        $data = Package::all();
        return view('admin.table-package',compact('title','data'));
        //
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.create',['Title' =>"Upload Data"]);
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
    // dd($request->except(['_token','sumbit']));
    //Package::create($request->except(['_token','sumbit']));
    $save = $request->file('image');

    $name = time() . $save->getClientOriginalName();
    $path = $request->file('image')->storeAs('/img/packages', $name);
    $save->move(\base_path() . "/public/img/packages", $name);

    // $save = DB::table('doctors')->insert(['doctor_img' => $name]);
    // $hash = Hash::make($request->password);
    $data = array_merge([
        'id_package'=> $request->id_package,
        'name_package'=> $request->name_package,
        'category_id'  => $request->category_id,
        'name_package'  => $request->name_package,
        'facility'   => $request->facility,
        'time'   => $request->time,
        'price'   => $request->price,
        'status'   => $request->status,
        'location'   => $request->location,
        'descriptions'   => $request->descriptions,
        'img_package' => $path,
    ]);

    Package::create($data);
    return redirect()->route('table');
   }

    // public function save(Request $request)
    // {
    //     //
    //     Package::create($request->except(['tiket','sumbit']));
    //     return redirect('/admin/create');
    // }

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
    //     Package::edit($request->except(['_token','sumbit']));
    $data = Package::find($id);
    return view ('admin.update', compact('data'));
    // }
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
        $data = Package::find($id);
        // return Route::view('admin.create', compact(['data']));
        $save = $request->file('image');
        $name = time() . $save->getClientOriginalName();
        $path = $request->file('image')->storeAs('/img/packages', $name);
        $save->move(\base_path() . "/public/img/packages", $name);
    
        // $save = DB::table('doctors')->insert(['doctor_img' => $name]);
        // // $hash = Hash::make($request->password);
        $data = array_merge([
            //'package_id'=> $request->id_package,
            'id_package'=> $request->id_package,
            'name_package'=> $request->name_package,
            'category_id'  => $request->category_id,
            'name_package'  => $request->name_package,
            'facility'   => $request->facility,
            'time'   => $request->time,
            'price'   => $request->price,
            'status'   => $request->status,
            'location'   => $request->location,
            'descriptions'   => $request->descriptions,
            'img_package' => $path,
        ]);
    
        Package::where('package_id', $id)->update($data);
        return redirect()->route('table');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Package::find($id)->delete();
        return redirect()->route('table');
        
        // try{
        //     $data = Package::find($id);
        //     $data -> delete();
        //     return redirect('admin.table-package');
        // } catch(\Throwable $th)
       
        // // $data = delete();
        // // return redirect('admin');
    }
}


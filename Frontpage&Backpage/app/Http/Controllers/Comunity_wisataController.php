<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comunity_wisata;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
class Comunity_wisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function comunity()
    {
        $title = 'Comunity';
        $data = Comunity_wisata::all();
        return view('comunity.thecomunity', compact('title', 'data'));
    }
    public function index()
    {
        //
    }
    public function comu()
    {
        $title = 'Comunity';
        $data = Comunity_wisata::all();
        return view('comunity.comulist', compact('title', 'data'));
        // return view('comunity.comulist');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('comunity.comu-create)
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
    $path = $request->file('image')->storeAs('/img/community', $name);
    $save->move(\base_path() . "/public/img/community", $name);

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

    Comunity_wisata::create($data);
    return redirect()->route('the-comunity');
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
    $data = Comunity_wisata::find($id);
    return view ('admin.update', compact('data'));
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
        $data = Comunity_wisata::find($id);
        // return Route::view('admin.create', compact(['data']));
        $save = $request->file('image');
        $name = time() . $save->getClientOriginalName();
        $path = $request->file('image')->storeAs('/img/packages', $name);
        $save->move(\base_path() . '/public/img/packages', $name);

        // $save = DB::table('doctors')->insert(['doctor_img' => $name]);
        // // $hash = Hash::make($request->password);
        $data = array_merge([
            //'package_id'=> $request->id_package,
            'id_package' => $request->id_package,
            'name_package' => $request->name_package,
            'category_id' => $request->category_id,
            'name_package' => $request->name_package,
            'facility' => $request->facility,
            'time' => $request->time,
            'price' => $request->price,
            'status' => $request->status,
            'location' => $request->location,
            'descriptions' => $request->descriptions,
            'img_package' => $path,
        ]);

        Comunity_wisata::where('package_id', $id)->update($data);
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
        //
    }
}

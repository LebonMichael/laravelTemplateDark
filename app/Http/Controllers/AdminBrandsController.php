<?php

namespace App\Http\Controllers;

use App\Models\Brand;

use App\Models\Photo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminBrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::with(['photo'])->paginate(10);
        $id = Auth::user()->id;
        $mainUser = User::findOrFail($id);
        return view('admin.brands.index', compact('brands','mainUser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = Auth::user()->id;
        $mainUser = User::findOrFail($id);
        return view('admin.brands.create',compact('mainUser'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $brand = new Brand();
        $brand->name = $request->name;
        $brand->description = $request->description;

        /**photo opslaan**/
        if ($file = $request->file('photo_id')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('img/brands', $name);
            $photo = Photo::create(['file' => $name]);
            $brand->photo_id = $photo->id;

        }
        $brand->save();
        Session::flash('brand_message','Brand ' . $request->name . ' was created!');
        return redirect()->route('brands.index');
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
        $brand = Brand::findOrFail($id);
        $id = Auth::user()->id;
        $mainUser = User::findOrFail($id);
        return view('admin.brands.edit', compact('brand','mainUser'));
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
        $brand = Brand::findOrFail($id);
        $brand->name = $request->name;
        $brand->description = $request->description;

        /** opvragen oude image **/
        if($file = $request->file('photo_id')){
            /** opvragen oude image **/
            $oldImage = Photo::find($brand->photo_id);
            if($oldImage){
                unlink(public_path() . '/img/brands/' . $oldImage->file);
                $oldImage->delete();
            }
            /**wegschrijven naar de img folder**/
            $name = time(). $file->getClientOriginalName();
            $file->move('img/brands', $name);
            /**wegschrijven naar de photo table**/
            $photo = Photo::create(['file'=>$name]);
            $brand->photo_id = $photo->id;
        }
        $brand->update();
        Session::flash('brands_message', 'Brand ' . $brand->name . ' was updated');
        return redirect()->route('brands.index');
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

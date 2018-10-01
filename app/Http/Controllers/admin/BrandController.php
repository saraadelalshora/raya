<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Category;
use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $brands=Brand::latest()->paginate(50);
        return view('admin.brands.index',compact('brands'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories=Category::all();
        return view('admin.brands.create', compact('categories'));
   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //`name_en`, `name_ar`, `category_id`, `img`, `order`, `status`
        request()->validate([
            'name_en' => 'required',
            'name_ar' => 'required',
            'category_id' => 'required',
            'img' => 'required',
            'status' => 'required',
            'order' => 'required',
        ]);
        $brand=new Brand;
        // $building->postcode = $request->postcode ;
        $brand->name_en=$request->name_en;
        $brand->name_ar=$request->name_ar;
        $brand->category_id=$request->category_id;
        $brand->img=$request->img;
        $brand->status=$request->status;
        $brand->order=$request->order;
        $brand-> save();
        $id = $brand->id;
        if($main_image = $request->file('img')){
            $extension=$main_image->getClientOriginalExtension();
            $image_name = $id.'_brand'.'.'.$extension;
            $main_image->move(public_path('/upload/brand'), $image_name);
            Brand::where('id',$id)->update(['img' => $image_name]);
            
        }
        //$brand->country_id()->sync($request->country_id);
        return redirect()->route('brands.index')
        ->with('success','brand Add successfully');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        //
        $categories=Category::all();
        return view('admin.brands.edit', compact('brand','categories'));
   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        //
        request()->validate([
            'name_en' => 'required',
            'name_ar' => 'required',
            'category_id' => 'required',
            'status' => 'required',
            'order' => 'required',
            
        ]);
        // dd($request);
        $brand->update([
            'name_en' => $request->input('name_en'),
            'name_ar' => $request->input('name_ar'),
            'category_id' => $request->input('category_id'),            
            'status' => $request->input('status'),
            'order' => $request->input('order'),
           
            ]);
            $id= $brand->id;
            if($main_image = $request->file('img')){
                $extension=$main_image->getClientOriginalExtension();
                $image_name = $id.'_brand'.'.'.$extension;
                $main_image->move(public_path('/upload/brand'), $image_name);
                Brand::where('id',$id)->update(['img' => $image_name]);
                
            }
            return redirect()->route('brands.index')
             ->with('success','brand Updated successfully');
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        //
        $brand->delete();
        return redirect()->route('brands.index')
             ->with('success','brand Deleted successfully');
  

    }
}

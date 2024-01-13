<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use Illuminate\Http\Request;
use App\Models\Category;





class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['route']='categories';
        return view('admin.category.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['route']='categories';
        return view ('admin.category.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        try{   $validate =$request->validated();

            $validate = $request->validated();

            $image =$request->file('image')->storePublicly('public/assets/uploads/category');


            $category = new Category();
            $category->name = ['ar'=>$request->name_ar, 'en'=>$request->name_en];
            $category->slug = $request->slug;
            $category->description = ['ar'=>$request->description_ar,'en'=>$request->description_ar];
            $category->is_showing = $request->is_showing ? '1' :'0';
            $category->is_popular = $request->is_popular ? '1' :'0';
            $category->meta_title = ['ar'=>$request->meta_title_ar, 'en'=>$request->meta_title_en];
            $category->meta_description = ['ar'=>$request->meta_description_ar,'en'=>$request->meta_description_en];
            $category->meta_keywords = $request->meta_keywords;
            $category->save();

            toastr()->success('trans("messages_trans.success_save")', 'Congrats', ['timeOut' => 5000]);


            return redirect()->route('categories.index');

        }catch (\Exception $e){
            return redirect()->back()->withErrors('error',$e->getMessage());
        }
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

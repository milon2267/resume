<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.category.category-index',[
            'categories' => Category::orderBy('id', 'asc')->get(),
            
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_name'=> 'required'
        ]);
            // Resource Controller Ar Data Insurt.
        Category::create($request->all());
            // Eloquent ORM Data Insurt.
    //    $category = new Category;
    //    $category->category_name = $request->name;
    //    $category->slug = $request->slug;
    //    $category->save();

       $notification = array(
           'message' => 'Category Add Successfully.',
           'alert-type' => 'success',
       );
       return back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('backend.category.category-edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'category_name'=> 'required'
        ]);

        $category -> update($request->all());
        $notification = array(
            'message' => 'Category Update Successfully.',
            'alert-type' => 'success',
        );
        return redirect()->route('category.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();

        $notification = array(
            'message' => 'Category Update Successfully.',
            'alert-type' => 'success',
        );
        return redirect()->route('category.index')->with($notification);

        return view('backend.category.category-destroy', [
            'trashes' => Category::onlyTrashed()->latest()->simplePaginate(3),
        ]);

    }

    public function TrashList(){
        return view('backend.category.trash-list', [
            'trashed' => Category::onlyTrashed()->get(),
        ]);
    }

    public function CategoryRestore($id){
        Category::onlyTrashed()->findOrFail($id)->restore();
        return back();

        $notification = array(
            'message' => 'Category Update Successfully.',
            'alert-type' => 'success',
        );
        return redirect()->route('category.index')->with($notification);
    }
    
    public function CategoryDelete($id){
        Category::onlyTrashed()->findOrFail($id)->forceDelete();
        return back();

        $notification = array(
            'message' => 'Category Update Successfully.',
            'alert-type' => 'success',
        );
        return redirect()->route('category.index')->with($notification);
    }

    
}

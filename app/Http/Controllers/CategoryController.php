<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    public function AllCategory   (){
        $categories = Category::latest()->get();
        return view('admin.categories.all_categories',compact('categories'));
    }// End Method

    public function AddCategory (Request $request)
    {
        try {
            Category::insert([
                'name' => $request->name,
                'created_at' => Carbon::now(),
            ]);
            $notification = array(
                'message' => 'Category Is Addeed Successfully',
                'alert-type' => 'success'
            );
            return back()->with($notification);
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function DeleteCategory ($id){
        try{
            Category::findOrFail($id)->delete();
            $notification = array(
                'message' => 'Category Deleted Successfully',
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    } // End Method

    public function EditCategory (Request $request){
        $category_id = $request->id;

        Category::findOrFail($category_id)->update([
            'name' => $request->name,
        ]);

        $notification = array(
            'message' => 'Category Updated Successfully',
            'alert-type' => 'info'
        );
        return back()->with($notification);
    } // End Method


}

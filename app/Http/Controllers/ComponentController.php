<?php

namespace App\Http\Controllers;
use App\Models\component;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ComponentController extends Controller
{
    public function AllComponents   (){
        $products = Product::all();
        $components = component::latest()->get();
        return view('admin.components.all_components',compact('components','products'));
    }// End Method

    public function AddComponent (Request $request)
    {
        try {
            component::insert([
                'name' => $request->name,
                'description' => $request->description,
                'product_id' => $request->product_id,
                'created_at' => Carbon::now(),
            ]);
            $notification = array(
                'message' => 'Component Is Addeed Successfully',
                'alert-type' => 'success'
            );
            return back()->with($notification);
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function DeleteComponent ($id){
        try{
            component::findOrFail($id)->delete();
            $notification = array(
                'message' => 'Component Deleted Successfully',
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    } // End Method

    public function EditComponent (Request $request){
        $component_id = $request->id;

        component::findOrFail($component_id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'updated_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Component Updated Successfully',
            'alert-type' => 'info'
        );
        return back()->with($notification);
    } // End Method
}

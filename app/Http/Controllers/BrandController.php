<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::latest()->get();
        return view('admin.brands.brands',compact('brands'));
    }

    public function store(Request $request)
    {
        try {
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$request->file('image')->getClientOriginalExtension();  // 3434343443.jpg
            $img = $manager->read($request->file('image'));
            $img = $img->resize(430,327);
            $img->toPng()->save(base_path('public/uploads/brands/'.$name_gen));
            $save_url = 'uploads/brands/'.$name_gen;

            Brand::insert([
                'image' => $save_url,
                'name' => $request->name,
                'created_at' => Carbon::now(),
            ]);
            $notification = array(
                'message' => 'Brand Is Addeed Successfully',
                'alert-type' => 'success'
            );
            return back()->with($notification);
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function destroy(Request $request)
    {
        try {
            $brands = Brand::findOrFail($request->id)->delete();
            $notification = array(
                'message' => 'Brand Is Deleted Successfully ',
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}

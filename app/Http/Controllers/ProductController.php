<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use App\Models\component;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Carbon\Carbon;
use Auth;

class ProductController extends Controller
{
    public function AllProducts()
    {
        $products = Product::latest()->get();
        return view('admin.products.products',compact('products'));
    }

    public function AddProduct()
    {
        $categories = Category::all();
        $components = component::all();
        $brands = brand::all();
        return view('admin.products.add_product',compact('categories','brands','components'));
    }

    public function StoreProduct (Request $request)
    {
        try {
            $manager = new ImageManager(new Driver());

            $name_gen1 = hexdec(uniqid()).'.'.$request->file('image1')->getClientOriginalExtension();  // 3434343443.jpg
            $img1 = $manager->read($request->file('image1'));
            $img1 = $img1->resize(430,327);
            $img1->toPng()->save(base_path('public/uploads/products/'.$name_gen1));
            $save_url1 = 'uploads/products/'.$name_gen1;

            $name_gen2 = hexdec(uniqid()).'.'.$request->file('image2')->getClientOriginalExtension();  // 3434343443.jpg
            $img2 = $manager->read($request->file('image2'));
            $img2 = $img2->resize(430,327);
            $img2->toPng()->save(base_path('public/uploads/products/'.$name_gen2));
            $save_url2 = 'uploads/products/'.$name_gen2;

            $name_gen3 = hexdec(uniqid()).'.'.$request->file('image3')->getClientOriginalExtension();  // 3434343443.jpg
            $img3 = $manager->read($request->file('image3'));
            $img3 = $img3->resize(430,327);
            $img3->toPng()->save(base_path('public/uploads/products/'.$name_gen3));
            $save_url3 = 'uploads/products/'.$name_gen3;

            $name_gen4 = hexdec(uniqid()).'.'.$request->file('image4')->getClientOriginalExtension();  // 3434343443.jpg
            $img4 = $manager->read($request->file('image4'));
            $img4 = $img4->resize(430,327);
            $img4->toPng()->save(base_path('public/uploads/products/'.$name_gen4));
            $save_url4 = 'uploads/products/'.$name_gen4;

            $name_gen5 = hexdec(uniqid()).'.'.$request->file('image5')->getClientOriginalExtension();  // 3434343443.jpg
            $img5 = $manager->read($request->file('image5'));
            $img5 = $img5->resize(430,327);
            $img5->toPng()->save(base_path('public/uploads/products/'.$name_gen5));
            $save_url5 = 'uploads/products/'.$name_gen5;

            Product::insert([
                'name' => $request->name,
                'cat_id' => $request->cat_id,
                'brand_id' => $request->brand_id,
                'size' => $request->size,
                'code' => $request->code,
                'quantity' => $request->quantity,
                'old_price' => $request->old_price,
                'new_price' => $request->new_price,
                'short_desc' => $request->short_desc,
                'long_desc' => $request->long_desc,
                'image1' => $save_url1,
                'image2' => $save_url2,
                'image3' => $save_url3,
                'image4' => $save_url4,
                'image5' => $save_url5,
                'created_at' => Carbon::now(),
            ]);
            $notification = array(
                'message' => 'Product Addeed Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('all.products')->with($notification);
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function EditProduct  ($id){
        $categories = Category::all();
        $brands = Brand::all();
        $products  = Product::findOrFail($id);
        return view('admin.products.edit_product',compact('categories','products','brands'));
    } // End Method

    public function UpdateProduct(Request $request)
    {
        $product_id = $request->id;
        if ($request->file('image1') OR $request->file('image2') OR $request->file('image3') OR $request->file('image4') OR $request->file('image5') ) {
            $manager = new ImageManager(new Driver());

            $name_gen1 = hexdec(uniqid()).'.'.$request->file('image1')->getClientOriginalExtension();  // 3434343443.jpg
            $img1 = $manager->read($request->file('image1'));
            $img1 = $img1->resize(430,327);
            $img1->toPng()->save(base_path('public/uploads/products/'.$name_gen1));
            $save_url1 = 'uploads/products/'.$name_gen1;

            $name_gen2 = hexdec(uniqid()).'.'.$request->file('image2')->getClientOriginalExtension();  // 3434343443.jpg
            $img2 = $manager->read($request->file('image2'));
            $img2 = $img2->resize(430,327);
            $img2->toPng()->save(base_path('public/uploads/products/'.$name_gen2));
            $save_url2 = 'uploads/products/'.$name_gen2;

            $name_gen3 = hexdec(uniqid()).'.'.$request->file('image3')->getClientOriginalExtension();  // 3434343443.jpg
            $img3 = $manager->read($request->file('image3'));
            $img3 = $img3->resize(430,327);
            $img3->toPng()->save(base_path('public/uploads/products/'.$name_gen3));
            $save_url3 = 'uploads/products/'.$name_gen3;

            $name_gen4 = hexdec(uniqid()).'.'.$request->file('image4')->getClientOriginalExtension();  // 3434343443.jpg
            $img4 = $manager->read($request->file('image4'));
            $img4 = $img4->resize(430,327);
            $img4->toPng()->save(base_path('public/uploads/products/'.$name_gen4));
            $save_url4 = 'uploads/products/'.$name_gen4;

            $name_gen5 = hexdec(uniqid()).'.'.$request->file('image5')->getClientOriginalExtension();  // 3434343443.jpg
            $img5 = $manager->read($request->file('image5'));
            $img5 = $img5->resize(430,327);
            $img5->toPng()->save(base_path('public/uploads/products/'.$name_gen5));
            $save_url5 = 'uploads/products/'.$name_gen5;

            Product::findOrFail($product_id)->update([
                'name' => $request->name,
                'cat_id' => $request->cat_id,
                'brand_id' => $request->brand_id,
                'size' => $request->size,
                'code' => $request->code,
                'quantity' => $request->quantity,
                'old_price' => $request->old_price,
                'new_price' => $request->new_price,
                'short_desc' => $request->short_desc,
                'long_desc' => $request->long_desc,
                'image1' => $save_url1,
                'image2' => $save_url2,
                'image3' => $save_url3,
                'image4' => $save_url4,
                'image5' => $save_url5,
                'updated_at' => Carbon::now(),
            ]);

            $notification = array(
                'message' => 'Product Updated Successfully With Images ',
                'alert-type' => 'info'
            );
            return redirect()->route('all.products')->with($notification);
        } else{

            Product::findOrFail($product_id)->update([
                'name' => $request->name,
                'cat_id' => $request->cat_id,
                'brand_id' => $request->brand_id,
                'size' => $request->size,
                'code' => $request->code,
                'quantity' => $request->quantity,
                'old_price' => $request->old_price,
                'new_price' => $request->new_price,
                'short_desc' => $request->short_desc,
                'long_desc' => $request->long_desc,
                'updated_at' => Carbon::now(),
            ]);

            $notification = array(
                'message' => 'Product Updated Successfully Without Images ',
                'alert-type' => 'info'
            );
            return redirect()->route('all.products')->with($notification);
        } // end Else
    }

    public function DeleteProduct ($id){
        try{
            Product::findOrFail($id)->delete();
            $notification = array(
                'message' => 'Product Deleted Successfully',
                'alert-type' => 'error'
            );
            return redirect()->route('all.products')->with($notification);
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    } // End Method

    public function ProductDetails($id){
        $components = component::all();
        $products = Product::findOrFail($id);
        return view('frontend.product_details',compact('products','components'));
    } // End Method

    public function CategoryProduct ($id){
        $products = Product::where('cat_id',$id)->orderBy('id','DESC')->get();
        return view('frontend.cat_products',compact('products'));
     } // End Method

    public function BrandProduct ($id){
        $products = Product::where('brand_id',$id)->orderBy('id','DESC')->get();
        return view('frontend.brand_products',compact('products'));
    } // End Method

    public function ReportProduct(){
        $products = Product::latest()->get();
        return view('admin.reports.products',compact('products'));
    }// End Method

    public function SearchProductReport(Request $request){
        $start_at = date($request->start_at);
        $end_at = date($request->end_at);
        $products = Product::whereBetween('created_at',[$start_at,$end_at])->get();
        return view('admin.reports.products')->withDetails($products);
    }//end method

    public function EReportProduct(){
        $products = Product::latest()->get();
        return view('employee.reports.products',compact('products'));
    }// End Method

    public function ESearchProductReport(Request $request){
        $start_at = date($request->start_at);
        $end_at = date($request->end_at);
        $products = Product::whereBetween('created_at',[$start_at,$end_at])->get();
        return view('employee.reports.products')->withDetails($products);
    }//end method
 
    public function MyOrders(){
        $products = Product::all();
        return view('user.myorders',compact('products'));
    }// End Method

    public function Pay()
    {
        return view('user.payment');
    }
}

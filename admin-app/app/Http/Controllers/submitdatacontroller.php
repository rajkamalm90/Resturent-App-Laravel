<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SubmitdataController extends Controller
{
    public function form()
    {
        return view('forntend.menuadd');
    }

    public function product()
    {
        $products = Product::all();
        return view('forntend.foodIndex')->with(['products' => $products]);
    }

    public function data_submit(Request $request)
    {
        $name = $request->input('name');
        $description = $request->input('description');
        $price = $request->input('price');

        
        $imageName = null;

        //  image upload  we do hear
        if ($request->hasFile('picture')) {
            $image = $request->file('picture');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
        }

        $obj_product = new Product;
        $obj_product->name = $name;
        $obj_product->description = $description;
        $obj_product->price = $price;

        
        if ($imageName !== null) {
            $obj_product->image = $imageName; 
        }

        $result = $obj_product->save();

        if ($result) {
            return redirect('/signup')->with(['message' => 'Successfully submitted']);
        } else {
            return redirect('/signup')->with(['message' => 'Not submitted']);
        }
    }

    public function data_update(Request $request)
    {
        $name = $request->input('name');
        $description = $request->input('description');
        $price = $request->input('price');
        $update_id = $request->input('hidden_id');

        //  image update
        if ($request->hasFile('picture')) {
            $image = $request->file('picture');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);

            // Update the image column in the database
            $affectedRows = Product::whereId($update_id)->update([
                'name' => $name,
                'description' => $description,
                'price' => $price,
                'image' => $imageName
            ]);
        } else {
            // No image update, only update name, description, and price
            $affectedRows = Product::whereId($update_id)->update([
                'name' => $name,
                'description' => $description,
                'price' => $price,
            ]);
        }

        if ($affectedRows) {
            return redirect('/getall')->with(['message' => "Successfully updated"]);
        } else {
            return redirect('/getall')->with(['message' => "Nothing updated"]);
        }
    }

    public function data_fetch()
    {
        $products = Product::all();
        return view('forntend.indextable')->with(['details' => $products]);
    }

    public function data_edit($id)
    {
        $edit_info = Product::find($id);
        return view('forntend.edit')->with(['edit_details' => $edit_info]);
    }

    public function data_delete($id)
    {
        $delete_info = Product::whereId($id)->delete();

        if ($delete_info) {
            return redirect('/getall')->with(['message' => "Successfully deleted"]);
        } else {
            return redirect('/getall')->with(['message' => "Not deleted"]);
        }
    }
}

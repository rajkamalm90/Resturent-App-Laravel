<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;


class UserController extends Controller
{
    public function elements($id)

        {
        $product = Product::find($id);
    
        if ($product) {
            return view('forntend.elements')->with(['product' => $product]);
        } 
    }
    
    


    public function data_submit(Request $request)
    {
        $name = $request->input('name');
        $phone = $request->input('phone');
        $address = $request->input('address');
        $payment = $request->input('payment');
        $price = $request->input('price');
        $description = $request->input('description');
        $subscribe = $request->input('subscribe');

        $subscribe = $request->has('subscribe') ? true : false;


        $obj_User = new User;
        $obj_User->name = $name;
        $obj_User->phone = $phone;
        $obj_User->address = $address;
        $obj_User->payment = $payment;
        $obj_User->price = $price;
        $obj_User->description = $description;
        $obj_User->subscribe = $subscribe;

        $result = $obj_User->save();

        if ($result) {
            return redirect('/elements')->with(['message' => '<mark>Successfully your order submit</mark>']);
        } else {
            return redirect('/elements')->with(['message' => 'sorry! Not submit your order']);
        }
    }

    // Other methods go here


    public function data_fetch()
    {
        $obj_User = new User;
        $alluserdata = $obj_User->get();
        return view('admin.userdatatable')->with(['details' => $alluserdata]);
    }
       



    public function data_edit($id)
    {
        $edit_info = User::find($id);
        return view('edit')->with(['edit_details' => $edit_info]);
    }

    public function data_update(Request $request)
    {
        $name = $request->input('name');
        $phone = $request->input('phone');
        $address = $request->input('address');
        $payment = $request->input('payment');
        $description = $request->input('description');
        $subscribe = $request->input('subscribe');

        $update_id = $request->input('hidden_id');

        $affected_row = User::whereId($update_id)->update([
            'name' => $name,
            'phone' => $phone,
            'address' => $address,
            'payment' => $payment,
            'description' => $description,
            'subscribe' => $subscribe,
        ]);

        if ($affected_row) {
            return redirect('/getelement')->with(['message' => "Successfully updated"]);
        } else {
            return redirect('/getelement')->with(['message' => "Nothing updated"]);
        }
    }

    public function data_delete($id)
    {
        $delete_info = User::whereId($id)->delete();

        if ($delete_info) {
            return redirect('/getelement')->with(['message' => "Successfully deleted"]);
        } else {
            return redirect('/getelement')->with(['message' => "Not deleted"]);
        }
    }
}

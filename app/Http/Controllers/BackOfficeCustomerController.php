<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
class BackOfficeCustomerController extends Controller
{
    public function index(){

        $customers = Customer::all();
        return view('home-backoffice-customer',["customers"=>$customers]);

    }
    public function showCreate(){
        return view('add-customer');
    }

    public function create(Request $request){
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'password' => 'required|string',
        ]);
        $customer = new Customer();
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->password = $request->password;
        $customer->save();
        return redirect()->route('home.backoffice.customer');
    }

    public function showUpdate(Customer $customer){
        return view('update-category',['categories' => $customer]);
    }
    public function update(Request $request ,Customer $customer){
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'password' => 'required|string',
        ]);
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->password = $request->password;
        $customer->update();
        return redirect()->route('home.backoffice.customer');
    }


    public function destroy(Category $customer){
        $customer->delete();
        return redirect()->route('home.backoffice.customer');

    }
}

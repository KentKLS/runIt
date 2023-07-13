<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddressRequest;
use App\Models\Address;
use Error;
use Exception;
use Illuminate\Http\Request;

class BackofficeAddressController extends Controller
{
    public function index()
    {
        $addresses = Address::all();
        return view('backoffice.indexAddress', compact('addresses'));
    }
    public function create()
    {
        return view('backoffice.createAddress');
    }
    public function store(AddressRequest $request)
    {

        $newData = new Address();
        $newData->user_id = $request->user_id;
        $newData->addresse_livraison = $request->addresse_livraison;
        $newData->addresse_facturation = $request->addresse_facturation;
        $newData->phone_number = $request->phone_number;
        $newData->save();
        return redirect()->route('address.index')->with('success','Nouvel Adresse ajouté avec succès');
    }
    public function edit(Address $address)
    {
        return view('backoffice.updateAddress')->with('address', $address);
    }
    public function update(AddressRequest $request, Address $address)
    {

        $address->user_id = $request->user_id;
        $address->addresse_livraison = $request->addresse_livraison;
        $address->addresse_facturation = $request->addresse_facturation;
        $address->phone_number = $request->phone_number;
        $address->save();
        return redirect()->route('address.index')->with('success',"Adresse $address->id modifié avec succès");

    }
    public function destroy(Address $address)
    {
        $address->delete();
        return redirect()->route('address.index')->with('delete',"Adresse $address->id Supprimé");
    }
}

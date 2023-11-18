<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Apartment;
use App\Models\ApartmentService;
use App\Models\Service;
use Illuminate\Auth\Events\Validated;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class ApartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = Auth::user()->id;
        $apartments = Apartment::where('owner_id',$userId)->get();
        return view('admin.apartments.index',compact('apartments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $services= Service::all();
        return view('admin.apartments.create',compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $regions = ['abruzzo','basilicata','calabria','campania','emilia Romagna','friuli venezia giulia','lazio','liguria','lombardia',
                    'marche','molise','piemonte','puglia','sardegna','sicilia','toscana','trentino alto adige','umbria',"val d'aosta",'veneto'];
        
        $userId = Auth::user()->id;


        $data = $request->validate([
            'name' => ['required','max:40'],
            'description' => ['required','max:600'],
            'image' => ['required','max:500'],
            'region' => ['required',Rule::in($regions)],
            'city' => ['required','max:20'],
            'address' => ['required','max:50'],
            'beds' => ['required','numeric','max:25'],
            'nightly_rate' => ['required','max:3'],
            'services'=>['exists:services,id']
        ]);

        $data['owner_id']=$userId;

        $newApartment = Apartment::create($data);

        if($request->has('services')){
            $newApartment->services()->sync($request->services);
        }

        return redirect()->route('admin.apartments.index');  
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $apartment = Apartment::findOrFail($id);
        return view('admin.apartments.show', compact('apartment'));
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
    public function destroy(Apartment $apartment)
    {
        $apartment->delete();
        return redirect()->route('admin.apartments.index');
    }
    /**
     * Shows all items in the trash
     */
    public function trashed()
    {
        $apartmentList = Apartment::onlyTrashed()->paginate(10);
        return view('admin.apartments.trashed', compact('apartmentList'));
    }
}

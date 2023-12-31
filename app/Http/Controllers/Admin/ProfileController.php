<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Owner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.owners.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { 
        $userId = Auth::user()->id;

        $data = $request->validate([
            'name' => ['required','max:25'],
            'surname' => ['required','max:30'],
            'age' => ['max:2'],
            'image' => ['nullable','max:200'],
            'bio' => ['nullable','max:1000'],
        ]);

       $newOwner = new Owner();
       $newOwner->id = $userId;
       $newOwner->user_id = $userId;
       $newOwner->name = $data['name'];
       $newOwner->surname = $data['surname'];
       $newOwner->age = $data['age'];
       $newOwner->image = $data['image'];
       $newOwner->bio = $data['bio'];
       $newOwner->save();

       return redirect()->route('admin.dashboard');  
    }

    /**
     * Display the specified resource.
     */
    public function show(string $authId)
    {
        $authId = Auth::id();
        $owner = Owner::findOrFail($authId);

        return view('admin.owners.show',compact('owner'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Owner $owner)
    {
        return view('admin.owners.edit',compact('owner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Owner $owner)
    {
        $data = $request->validate([
            'name' => ['required','max:25'],
            'surname' => ['required','max:30'],
            'age' => ['max:2'],
            'image' => ['nullable','max:200'],
            'bio' => ['nullable','max:1000'],
        ]);
        $owner->update($data);
        return redirect()->route('admin.owners.show',$owner->id);


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Owner $owner)
    {
        $owner->delete();
        return view('auth.register');
    }
}

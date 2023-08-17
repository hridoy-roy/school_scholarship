<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => "Contact",
            'sub_title' => "Index",
            'header' => "List Contact",
        ];
        $contacts = Contact::paginate();
        return view ('admin.content.contact.index', compact('contacts'), $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=>'required|min:3|max:255',
            'mobile'=>'required|min:11|max:13',
            'email'=>'required|email',
            'subject'=>'required|min:3|max:255',
            'massage'=>'required|min:20|max:500',
        ]);

        $contact = Contact::create($request->all());
        

        Mail::to($contact->email)->send(new ContactMail($contact->toArray()));
            
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        session()->put('success', 'Item Deleted successfully.');
        return redirect()->back();
    }
}
<?php

namespace EInvoice\Http\Controllers;

use Illuminate\Http\Request;
use EInvoice\Contact;

class contactController extends Controller
{

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = Contact::all()->toArray();
        return view('viewcontact', compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addcontact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contacts = new Contact([
            'label_id' => $request->get('label_id'),
            'owner_name' => $request->get('name'),
            'b_name' => $request->get('b_name'),
            'email' => $request->get('email'),
            'contact' => $request->get('contact'),
            'address' => $request->get('address'),
            // 'contact_status' => $request->get('contact_status'),
            // 'status_review' => $request->get(''),
            ]);  
         $contacts->save();
         return redirect('contact');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('contact.editcontact', compact('contact', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);
        $contact->owner_name = $request->get('name');
        $contact->b_name = $request->get('b_name');
        $contact->email = $request->get('email');
        $contact->contact = $request->get('contact');
        $contact->address = $request->get('address');
        $contact->save();
        return redirect('contact');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        return redirect('contact');
    }
}

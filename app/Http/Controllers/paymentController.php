<?php

namespace EInvoice\Http\Controllers;

use Illuminate\Http\Request;
use EInvoice\Payment;
class paymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vpayments = Payment::all()->toArray();
        return view('vpayments', compact('vpayments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('receivepayments');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $payments = new Payment([
            // 'paymenttype' => $request->get('p_type'),
            'amount'      => $request->get('amount'),
            'received'    => $request->get('received'),
            'remaining'   => $request->get('remaining'),
            'remarks'     => $request->get('remarks')
            ]);
        $payments->save();
        return redirect('payments');

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
        $payments = Payment::find($id);
        return view('editpayments', compact('payments','id'));
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
            $payments = Payment::find($id);
            $payments->amount = $request->get('amount');
            $payments->received = $request->get('received');
            $payments->remaining = $request->get('remaining');
            $payments->remarks = $request->get('remarks');
            $payments->save();
            return redirect('payments');


            // 'amount'=>$request->get('amount'),
            // 'received'=>$request->get('received'),
            // 'remaining'=>$request->get('remaining'),
            // 'remarks'=>$request->get('remarks')
            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $payments = Payment::find($id);
        $payments->delete();
        return redirect('payments');
    }
}

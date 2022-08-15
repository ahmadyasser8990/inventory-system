<?php

namespace App\Http\Controllers\Dashboard;

use App\CatchReceipt;
use App\Client;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PhpParser\Node\Stmt\Catch_;

class CatchReceiptController extends Controller
{

    public function index()
    {
        $totalAmount = CatchReceipt::sum('amount');
        $catchReceipts = CatchReceipt::all();
        return view('dashboard.authorities.catch_receipt.index', compact('totalAmount','catchReceipts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::all();
        $catchReceipts = CatchReceipt::latest()->first();
        $nextCatchReceiptId = isset($catchReceipts->id)?$catchReceipts->id+1:1;
        return view('dashboard.authorities.catch_receipt.create', compact('clients','catchReceipts','nextCatchReceiptId'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'document_date'=>'required',
            'recieve_date'=>'required',
            'payment_method'=>'required',
        ]);

        $data['client_id'] = $request->client_no;
        $data['client_name'] = $request->client_name;
        $data['user_id'] = Auth::id();
        $data['payment_method'] = $request->payment_method;
        $data['amount'] = $request->amount;
        $data['document_date'] = $request->document_date;
        $data['recieve_date'] = $request->recieve_date;
        $data['description'] = $request->description;

        $catchReceipt = CatchReceipt::create($data);

        session()->flash('success',__('site.added_successfully'));
        return redirect()->route('dashboard.catch-receipt.index');

    }

    public function show($id)
    {
        $catchReceipt = CatchReceipt::find($id);
        return view('dashboard.authorities.catch_receipt.show', compact('catchReceipt'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        CatchReceipt::find($id)->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('dashboard.catch-receipt.index');
    }
}

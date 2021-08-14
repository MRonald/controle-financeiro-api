<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Transaction::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Transaction::create($request->all())) {
            return response()->json(['status' => 201, 'message' => 'Created successfully'], 201);
        } else {
            return response()->json(['status' => 500, 'message' => 'Internal Server Error'], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        return Transaction::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->type = $request->type;
        $transaction->product = $request->product;
        $transaction->value = $request->value;

        if ($transaction->save()) {
            return response()->json(['status' => 202, 'message' => 'Updated successfully'], 202);
        } else {
            return response()->json(['status' => 500, 'message' => 'Internal Server Error'], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $transaction = Transaction::findOrFail($id);
        if ($transaction->delete()) {
            return response()->json(['status' => 202, 'message' => 'Deleted successfully'], 202);
        } else {
            return response()->json(['status' => 500, 'message' => 'Internal Server Error'], 500);
        }
    }
}

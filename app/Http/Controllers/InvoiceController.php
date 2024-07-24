<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actes;

class InvoiceController extends Controller
{
    public function showActs()
    {
        $actes = Actes::all();
        return view('select_acts', compact('actes'));
    }

    public function generateInvoice(Request $request)
    {
        $acteIds = $request->input('actes');
        $actes = Actes::whereIn('id_a', $acteIds)->get();
        $total = $actes->sum('cout');

        return view('invoice', compact('actes', 'total'));
    }
}

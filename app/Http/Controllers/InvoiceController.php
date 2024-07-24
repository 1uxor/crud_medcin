<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Facture;

class InvoiceController extends Controller
{
    public function index()
    {
        // Debugging to see if the data is being retrieved
        $patients = Patient::with(['facture', 'hospitalizationReport'])->get();
        //dd($patients);

        return view('invoices.index', compact('patients'));
    }

    public function downloadInvoice($id)
    {
        $facture = Facture::findOrFail($id);
        $pathToFile = storage_path('app/public/invoices/' . $facture->file_name);
        return response()->download($pathToFile);
    }
}
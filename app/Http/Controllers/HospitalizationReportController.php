<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use App\Models\HospitalizationReport;
use Illuminate\Http\Request;

class HospitalizationReportController extends Controller
{
    // Afficher tous les rapports d'hospitalisation
    public function index()
    {
        $reports = HospitalizationReport::all();
        return view('hospitalization_reports.index', compact('reports'));
    }

    // Afficher le formulaire de création d'un rapport d'hospitalisation
    public function create()
    {
        return view('hospitalization_reports.create');
    }

    // Enregistrer un nouveau rapport d'hospitalisation
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'cne' => 'required|string|max:255',
            'hospitalization_start' => 'required|date',
            'hospitalization_end' => 'required|date',
            'reason' => 'required|string',
            'history' => 'required|string',
            'discharge_decision' => 'required|string',
            'discharge_date' => 'required|date',
        ]);

        HospitalizationReport::create($request->all());
        return redirect()->route('hospitalization-reports.index')
                         ->with('success', 'Report created successfully.');
    }

    // Afficher les détails d'un rapport d'hospitalisation spécifique
    public function show(HospitalizationReport $hospitalizationReport)
    {
        return view('hospitalization_reports.show', compact('hospitalizationReport'));
    }

    // Afficher le formulaire pour modifier un rapport d'hospitalisation
    public function edit(HospitalizationReport $hospitalizationReport)
    {
        return view('hospitalization_reports.edit', compact('hospitalizationReport'));
    }

    // Mettre à jour un rapport d'hospitalisation existant
    public function update(Request $request, HospitalizationReport $hospitalizationReport)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'cne' => 'required|string|max:255',
            'hospitalization_start' => 'required|date',
            'hospitalization_end' => 'required|date',
            'reason' => 'required|string',
            'history' => 'required|string',
            'discharge_decision' => 'required|string',
            'discharge_date' => 'required|date',
        ]);

        $hospitalizationReport->update($request->all());
        return redirect()->route('hospitalization-reports.index')
                         ->with('success', 'Report updated successfully.');
    }

    // Supprimer un rapport d'hospitalisation
    public function destroy(HospitalizationReport $hospitalizationReport)
    {
        $hospitalizationReport->delete();
        return redirect()->route('hospitalization-reports.index')
                         ->with('success', 'Report deleted successfully.');
    }

    // Générer et télécharger un PDF pour un rapport d'hospitalisation spécifique
    public function generatePdf($id)
    {
        // Récupérer les données du rapport d'hospitalisation depuis la base de données
        $hospitalizationReport = HospitalizationReport::findOrFail($id);

        // Générer le PDF à partir de la vue pdf.blade.php avec les données du rapport
        $pdf = PDF::loadView('hospitalization_reports.pdf', compact('hospitalizationReport'));

        // Télécharger le PDF
        return $pdf->download('hospitalization-report.pdf');
    }


    public function downloadReport($id)
    {
        $report = HospitalizationReport::findOrFail($id);
        $pathToFile = storage_path('app/public/reports/' . $report->file_name);
        return response()->download($pathToFile);
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'id_p', 'id');
    }
}

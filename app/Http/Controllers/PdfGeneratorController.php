<?php

namespace App\Http\Controllers;

use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfGeneratorController extends Controller
{
    public function index($id)
    {
        $user = User::findOrFail($id);

        $pdf = Pdf::loadView('resume', [
            'user' => $user
        ]);

        return $pdf->download('user_' . $user->id . '.pdf');
    }
}
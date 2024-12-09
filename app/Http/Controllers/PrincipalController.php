<?php

namespace App\Http\Controllers;

use App\Models\Principal;
use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function index()
    {
        // Fetch the active principal (not retired)
        $activePrincipal = Principal::whereNull('retire_date')->first();

        // Fetch retired principals ordered by retire_date descending
        $retiredPrincipals = Principal::whereNotNull('retire_date')
            ->orderBy('retire_date', 'desc')
            ->get();


        return view('principals.index', compact('activePrincipal', 'retiredPrincipals'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class VacanciesController extends Controller
{
    //
    public function vacancies()
    {
        $user = Auth::user();
        return view('vacancies');
    }

}

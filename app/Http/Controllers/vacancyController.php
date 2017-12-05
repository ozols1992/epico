<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vacancy;

class vacancyController extends Controller
{
    public function vacancyView($id){
        $vacancy = vacancy::get($id);
        return $vacancy != null ? view('/vacancies/vacancy', $vacancy) 
                    : view('applications/application_NotAllowed', ["message" => 'Vacancy is not active']);
    }
}

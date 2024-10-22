<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller{

    public function Dashboard(){
        return view('admin.Dashboard');
    }

    public function Tutor_Manager(){
        return view('admin.Tutor_Manager');
    }

    public function details(){
        return view('admin.details');
    }
    public function Manager_payment(){
        return view('admin.Manager_payment');
    }
    public function inbox(){
        return view('admin.inbox');
    }
    public function Personal_Information(){
        return view('admin.Personal_Information');
    }
    public function we(){
        return view('user.we');
    }
    public function search_tutor(){
        return view('user.parents.search_tutor');
    }
    public function Existing_tutors(){
        return view('user.parents.Existing_tutors');
    }
    public function Find_a_tutor(){
        return view('user.parents.Find_a_tutor');
    }
    public function Tutor_Information(){
        return view('user.tutor.Tutor_Information');
    }
    public function document(){
        return view('user.document');
    }
    public function detail_document(){
        return view('user.detail_document');
    }
    public function Tutor_Classes(){
        return view('user.tutor.Tutor_Classes');
    }

}


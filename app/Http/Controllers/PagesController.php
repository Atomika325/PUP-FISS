<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to PUP-FISS';
        return view('welcome')->with('title', $title);
    }

    public function admindboard(){
        $title = 'Dashboard';
        return view('admin.admindashboard')->with('title', $title);
    }

    public function schedulingstart(){
        $title = 'Scheduling Area';
        return view('admin.scheduling')->with('title', $title);
    }

    public function pscheduling(){
        $title = 'Professor Scheduling';
        return view('admin.pscheduling')->with('title', $title);
    }

    public function sscheduling(){ 
        $title = 'Class Scheduling';
        return view('admin.sscheduling')->with('title', $title);
    }

    public function faclist(){
        $title = 'Faculty List';
        return view('admin.faclist')-> with ('title', $title);
    }
    
    public function crudroom(){
        $title = 'Administration Manager | Room ';
        return view('admin.crud.crudroom')->with('title', $title);
    }

    public function crudcurriculum(){
        $title = 'Administration Manager | Curriculum ';
        return view('admin.crud.crudcurriculum')->with('title', $title);

    }

    public function crudcurriculumadd(){
        //
    }

    public function crudcurriculumview(){
        //
    }

    public function crudcurriculumupdate(){
        //
    }

    public function crudroomadd(){
        //
    }

    public function crudroomview(){
        //
    }

    public function crudroomupdate(){
        //
    }

    public function crudcourse(){
        $title = 'Administration Manager | Course ';
        return view('admin.crud.crudcourse')->with('title', $title);
    }

    public function crudcourseadd(){
        //
    }

    public function crudcourseview(){
        //
    }

    public function crudcourseupdate(){
        //
    }

    public function crudsubject(){
        $title = 'Administration Manager | Subject ';
        return view('admin.crud.crudsubject')->with('title', $title);

    }

    public function crudsubjectadd(){
        //
    }

    public function crudsubjectview(){
        //
    }

    public function crudsubjectupdate(){
        //
    }

    public function crudprofessor(){
        $title = 'Administration Manager | Professor ';
        return view('admin.crud.crudprofessor')->with('title', $title);

    }

    public function crudprofessoradd(){
        //
    }

    public function crudprofessorview(){
        //
    }

    public function crudprofessorupdate(){
        //
    }

    public function profdashboard(){
        $title = 'Dashboard';
        return view('prof.professordashboard')->with('title', $title);
    }
    
    public function profprofile(){
        $title = 'Profile';
        return view('prof.professordashboard')->with('title', $title);
    }

    public function profschedule(){
        $title = 'Your Schedule';
        return view('prof.professorschedule')->with('title', $title);
    }

}

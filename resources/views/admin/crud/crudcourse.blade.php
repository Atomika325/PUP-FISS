@extends('layouts.appadmin')

@section('content')
<section>
<!-- Side navigation -->
<div class="sidenav">
    <a href="/admin/manager/room" id="default">Room</a>
    <a href="/admin/manager/course">Course</a>
    <a href="/admin/manager/subjects">Subjects</a>
   <a href="/admin/manager/professor">Professor</a>
  </div>
  
  <div id="Course" class="tabcontent" align="center">
    <h3 align="center">Add Course</h3>
    {!! Form::open(['action' => 'CoursesController@store', 'method' =>'POST']) !!}
  <div class = "form-group" align="center">
      {{Form:: label('coursecode', 'Course Code')}}
      <div class= "col-md-6">
        {{Form:: text('coursecode', '',['class' => 'form-control input-md','placeholder' => 'Course Code (ex: BSIT-SJ)'])}}
      </div>
  </div>
  <div class = "form-group" align="center">
      {{Form:: label('coursedesc', 'Course Description')}}
      <div class= "col-md-6">
        {{Form:: text('coursedesc', '', ['class' => 'form-control input-md','placeholder' => 'Course Description'])}}
      </div>
  </div>
  <div align = "center">
    <div class="col-md-6">
        {{Form::button('Submit', ['type' => 'submit', 'class' => 'btn button-submit'])}}
        {{Form::button('Reset', ['type' => 'reset','class' => 'btn button-reset'])}}
    </div>
  </div>
  {!! Form::close() !!}
  <div id="Layer1" align="">
                          <!-- Text input-->
                          <div class="form-group" align="left">
              <button id="cView" name="cView" class= "btn btn-info">View Course/s</button>
              <button id="cEdit" name="cEdit" class= "btn button-edit">Edit Course/s</button>
                            <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Course Code</th>
        <th scope="col">Course Description</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td colspan="2"></td>
        <td></td>
      </tr>
    </tbody>
  </table>
                          </div>
          </form></div>	
    </p> 
  </div>
  <script>
  function openCity(evt, cityName) {
      var i, tabcontent, sidenav;
      sidenav = document.getElementsByClassName("sidenav");
      for (i = 0; i < sidenav.length; i++) {
          sienav[i].style.display = "none";
      }
      sidenav = document.getElementsByClassName("sidenav");
      for (i = 0; i < sidenav.length; i++) {
          sidenav[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
  }
  </script>
</section>
  @endsection
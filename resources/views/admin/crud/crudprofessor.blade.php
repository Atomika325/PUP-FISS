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

      
      <div id="Professor" class="tabcontent" align="center">
        <h3>Add Professor</h3>
        {!! Form::open(['action' => 'ProfessorsController@store', 'method' =>'POST']) !!}
        <div class = "form-group" align="center">
            {{Form:: label('faculty_id', 'Faculty ID')}}
            <div class= "col-md-6">
              {{Form:: text('faculty_id', '',['class' => 'form-control input-md','placeholder' => 'Faculty ID'])}}
            </div>
        </div>
        <div class = "form-group" align="center">
            {{Form:: label('last_name', 'Last Name')}}
            <div class= "col-md-6">
              {{Form:: text('last_name', '', ['class' => 'form-control input-md','placeholder' => 'Last Name'])}}
            </div>
        </div>
        <div class = "form-group" align="center">
            {{Form:: label('first_name', 'First Name')}}
            <div class= "col-md-6">
              {{Form:: text('first_name', '', ['class' => 'form-control input-md','placeholder' => 'First Name'])}}
            </div>
        </div>
            <div class ="form-group" align="center">
                {{Form:: label('faculty_type', 'Faculty Type')}}
            <div class="col-md-6">
                {{Form:: select('faculty_type',['Permanent' => 'Permanent', 'Part-Time' => 'Part-Time', 'Designee' => 'Designee'],null,['class' => 'form-control'])}}
            </div>
          </div>
          <div class ="form-group" align="center">
              {{Form:: label('expertise', 'Expertise')}}
            <div class="col-md-6">
                {{Form:: select('expertise',['Information Technology' => 'Information Technology', 'Accountancy' => 'Accountancy', 'Finance' => 'Finance', 'Entrepreneurship' =>'Entrepreneurship', 'Education' => 'Education', 'Hospitality Management' => 'Hospitality Management', 'General Education' => 'General Education'],null,['class' => 'form-control'])}}
            </div>
          </div>
          <div align = "center">
              <div class="col-md-6">
                  {{Form::button('Submit', ['type' => 'submit', 'class' => 'btn button-submit'])}}
                  {{Form::button('Reset', ['type' => 'reset','class' => 'btn button-reset'])}}
              </div>
            </div>
            {!! Form::close() !!}
                                  <div id="Layer1" align="left"><form>
                              <!-- Text input-->
                              <div class="form-group" align="left">
                              <button id="prView" name="prView" class= "btn btn-info">View Professor/s</button>
                              <button id="prEdit" name="prEdit" class= "btn button-edit">Edit Professor/s</button>
                                <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Faculty ID</th>
            <th scope="col">Full Name</th>
            <th scope="col">Faculty Type</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
                              </div>
                      </form></div>
      </div>
      <script>
      function openCity(evt, cityName) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
              tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
              tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(cityName).style.display = "block";
          evt.currentTarget.className += " active";
      }
      
      // Get the element with id="defaultOpen" and click on it
      document.getElementById("defaultOpen").click();
      </script>
      </section>
    @endsection

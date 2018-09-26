@extends('layouts.appadmin')

@section('content')
<section>
<div class="sidenav">
        <a href="/admin/manager/room" id="default">Room</a>
        <a href="/admin/manager/course">Course</a>
        <a href="/admin/manager/subjects">Subjects</a>
       <a href="/admin/manager/professor">Professor</a>
      </div>
<div id="Subject" class="tabcontent" align="center">
        <h3>Add Subject</h3>
        {!! Form::open(['action' => 'SubjectsController@store', 'method' =>'POST']) !!}
        <div class = "form-group" align="center">
            {{Form:: label('subj_code', 'Subject Code')}}
            <div class= "col-md-6">
              {{Form:: text('subj_code', '',['class' => 'form-control input-md','placeholder' => 'Subject Code'])}}
            </div>
        </div>
        <div class = "form-group" align="center">
            {{Form:: label('subj_desc', 'Subject Description')}}
            <div class= "col-md-6">
              {{Form:: text('subj_desc', '', ['class' => 'form-control input-md','placeholder' => 'Subject Description'])}}
            </div>
        </div>
        <div class ="form-group" align="center">
            {{Form:: label('subj_hours', 'Subject Hours')}}
            <div class="col-md-6">
              {{Form:: select('subj_hours',['1' => '1', '1.5' => '1.5', '2' => '2', '3' =>'3', '5' => '5', '6' => '6', '9' => '9'],null,['class' => 'form-control'])}}
            </div>
          </div>
            <div class ="form-group" align="center">
                {{Form:: label('course_affiliated', 'Course Affiliated')}}
            <div class="col-md-6">
                {{Form:: select('course_affiliated',['Information Technology' => 'Information Technology', 'Accountancy' => 'Accountancy', 'Finance' => 'Finance', 'Entrepreneurship' =>'Entrepreneurship', 'Education' => 'Education', 'Hospitality Management' => 'Hospitality Management', 'General Education' => 'General Education'],null,['class' => 'form-control'])}}
            </div>
          </div>
          <div class ="form-group" align="center">
              {{Form:: label('subj_units', 'Subject Units')}}
            <div class="col-md-6">
                {{Form:: select('subj_units',['1' => '1', '2' => '2', '3' =>'3', '6' => '6', '9' => '9'],null,['class' => 'form-control'])}}
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
                                <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Subject	 Code</th>
            <th scope="col">Subject Description</th>
             <th scope="col">Units</th>
              <th scope="col">Hours</th>
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
            <td></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2"></td>
            <td></td>
            <td></td>
           
          </tr>
        </tbody>
      </table>
                              </div>
                      </form></div>	</div>
                                        
        </form>
      </div>
                        </div>
                      </div>
                    </div></p>
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

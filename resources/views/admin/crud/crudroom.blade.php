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
      <div id="Room" class="tabcontent">
        <h3 align="center">Add a Room</h3> 
        {!! Form::open(['action' => 'RoomsController@store', 'method' =>'POST']) !!}
        <div class = "form-group" align="center">
            {{Form:: label('roomNo', 'Room Number')}}
            <div class= "col-md-6">
              {{Form:: text('roomNo', '',['class' => 'form-control input-md','placeholder' => 'Room Number'])}}
            </div>
        </div>
        <div class = "form-group" align="center">
                  {{Form:: label('roomBldg', 'Room Building')}}
              <div class="col-md-6">
                  {{Form:: select('roomBldg',['Main Building' => 'Main Building', 'JV Building' => 'JV Building'],null,['class' => 'form-control'])}}
              </div>
      
        </div>
        <div class = "form-group" align="center">
                   {{Form:: label('roomType', 'Room Type')}}
              <div class="col-md-6">
                  {{Form:: select('roomType',['Lecture Room' => 'Lecture Room', 'Laboratory' => 'Laboratory', 'Special Function Room' => 'Special Function Room'],null,['class' => 'form-control'])}}
              </div>
        </div>
      
      
        <div class = "form-group" align="center">
            {{Form:: label('roomCap', 'Room Capacity')}}
            <div class= "col-md-6">
              {{Form:: text('roomCap', '',['class' => 'form-control input-md','placeholder' => 'Room Capacity'])}}
            </div>
        </div>'
      
        <div align = "center">
          <div class="col-md-6">
              {{Form::button('Submit', ['type' => 'submit', 'class' => 'btn button-submit'])}}
              {{Form::button('Reset', ['type' => 'reset','class' => 'btn button-reset'])}}
          </div>
        </div>
        {!! Form::close() !!}
                                    <div id="Layer1" align=""><form>
                              <!-- Text input-->
                              <div class="form-group" align="left">
                              <button id="rView" name="rView" class= "btn btn-info">View Room/s</button>
                              <button id="rEdit" name="rEdit" class= "btn btn-default">Edit Room/s</button>
                                <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Room No.</th>
            <th scope="col">Building</th>
            <th scope="col">Type</th>
            <th scope="col">Capacity</th><th scope="col">Action</th>
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
            <td></td>
            
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2"></td>
            <td></td
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
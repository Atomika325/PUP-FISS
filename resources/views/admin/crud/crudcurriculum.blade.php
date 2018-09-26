@extends('layouts.appadmin')

@section('content')
<section>
<!-- Side navigation -->
<div class="sidenav">
    <a href="/admin/manager/room" id="default">Room</a>
    <a href="/admin/manager/course">Course</a>
    <a href="/admin/manager/subjects">Subjects</a>
   <a href="/admin/manager/professor">Professor</a>
   <a href="/admin/manager/curriculum">Curriculum</a>
  </div>
  
  <div id="Curriculum" class="tabcontent">
        <h3 align="center">Curriculum</h3> 
        <p>								<form>   			 
                                            <div class="form-group" align="center">
                                        <label class="col-md-6 control-label" for="course">Course</label>
                                        <div class="col-md-6">
                                          <select id="course" name="CourseList" class="form-control">
                        
                                          </select>
                                        </div>
                                      </div>
                                      
                                        <div class="form-group" align="center" >
                                      <label class="col-md-6 control-label" for="sy" >Curriculum Name</label>
                                      <div class="col-md-6">
                                        <input id="cName" name="cName" type="text" placeholder="" class="form-control input-md"></div>
                  </div> 
                
                  <div class="form-group" align="center" >
                        <label class="col-md-6 control-label" for="sy" >School Year</label>
                        <div class="col-md-6">
                          <input id="sy" name="Schoolyear" type="text" placeholder="" class="form-control input-md"></div>
                    <button id="cuSubmit" name="cuSubmit" class= "btn button-submit">Submit</button>
                    <button id="cuReset" name="cuReset" class= "btn button-reset">Reset</button>
    </div></form>
                              <div id="Layer1" align=""><form>
                              <!-- Text input-->
                              <div class="form-group" align="left">
                              <button id="cuView" name="cuView" class= "btn btn-info">View/s Curriculum</button>
                              <button id="cuEdit" name="cuEdit" class= "btn button-edit">Edit/s Curriculum</button>
                                <table class="table table-hover">
                                    
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Year No.</th>
            <th scope="col">Course</th>
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
      

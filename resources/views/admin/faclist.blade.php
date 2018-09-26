@extends('layouts.appadmin')
@section('content')

  <section>
    <div class="row"></div>
  </section>

<div id="Title">
<h3 align="center"> Faculty List </h3>
</div>

<div id="Layer1"  align="center">
<img src="/img/user-add-icon.png" height="150" width="150">
<button class="btn" data-toggle="modal" data-target="#exampleModal3" >Prof 1</button>
</div>

<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModal3Label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
	  <!-- Call mo dito yung Fname, Lname ng prof -->
        <h5 class="modal-title" id="exampleModal3Label">Prof 1</h5>
		<!-- Dito naman yung Faculty ID -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <legend align="">Availability</legend>

<!-- CALL MO DITO YUNG AVAILABILITY NG PROF -->

                    <!-- Multiple Checkboxes (inline) -->
                    <div class="form-check form-check-inline">
  <label class="form-check-label" for="inlineCheckbox1">MON</label>
    <input id="pCStudied" name="pCStudied" type="text" size="9" class="form-control input-md" required="">
	  <input id="pCStudied" name="pCStudied" type="text" size="9"class="form-control input-md" required="">
</div>
<div class="form-check form-check-inline">
  <label class="form-check-label" for="inlineCheckbox2">TUE</label>
    <input id="pCStudied" name="pCStudied" type="text" size="9" class="form-control input-md" required="">
	  <input id="pCStudied" name="pCStudied" type="text" size="9"class="form-control input-md" required="">
</div>
<div class="form-check form-check-inline">
  <label class="form-check-label" for="inlineCheckbox1">WED</label>
    <input id="pCStudied" name="pCStudied" type="text" size="9" class="form-control input-md" required="">
	  <input id="pCStudied" name="pCStudied" type="text" size="9"class="form-control input-md" required="">
</div>
<div class="form-check form-check-inline">
  <label class="form-check-label" for="inlineCheckbox3">THU</label>
    <input id="pCStudied" name="pCStudied" type="text" size="9" class="form-control input-md" required="">
	  <input id="pCStudied" name="pCStudied" type="text" size="9"class="form-control input-md" required="">
</div>
<div class="form-check form-check-inline">
  <label class="form-check-label" for="inlineCheckbox4">FRI</label>
    <input id="pCStudied" name="pCStudied" type="text" size="9" class="form-control input-md" required="">
	  <input id="pCStudied" name="pCStudied" type="text" size="9"class="form-control input-md" required="">
</div>
<div class="form-check form-check-inline">
  <label class="form-check-label" for="inlineCheckbox5">SAT</label>
    <input id="pCStudied" name="pCStudied" type="text" size="9" class="form-control input-xs" required="">
	  <input id="pCStudied" name="pCStudied" type="text" size="9"class="form-control input-xs" required="">
</div>
      </div>
	
      <div class="modal-footer">
        <button type="button" class="btn button-reset" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div id="Layer3"  align="center">
<img src="/img/user-add-icon.png" height="150" width="150">
<button class="btn" data-toggle="modal" data-target="#exampleModal345" >Prof 3</button>
</div>

<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModal3Label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
	  <!-- Call mo dito yung Fname, Lname ng prof -->
        <h5 class="modal-title" id="exampleModal345Label">Prof 3</h5>
		<!-- Dito naman yung Faculty ID -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <legend align="">Availability</legend>

<!-- CALL MO DITO YUNG AVAILABILITY NG PROF -->

                    <!-- Multiple Checkboxes (inline) -->
                    <div>
  <label>MON</label>
    <input id="pCStudied" name="pCStudied" type="text" size="9" class="form-control input-md" required="">
	  <input id="pCStudied" name="pCStudied" type="text" size="9"class="form-control input-md" required="">
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
  <label class="form-check-label" for="inlineCheckbox2">TUE</label>
    <input id="pCStudied" name="pCStudied" type="text" size="9" class="form-control input-md" required="">
	  <input id="pCStudied" name="pCStudied" type="text" size="9"class="form-control input-md" required="">
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option3">
  <label class="form-check-label" for="inlineCheckbox1">WED</label>
    <input id="pCStudied" name="pCStudied" type="text" size="9" class="form-control input-md" required="">
	  <input id="pCStudied" name="pCStudied" type="text" size="9"class="form-control input-md" required="">
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option4">
  <label class="form-check-label" for="inlineCheckbox3">THU</label>
    <input id="pCStudied" name="pCStudied" type="text" size="9" class="form-control input-md" required="">
	  <input id="pCStudied" name="pCStudied" type="text" size="9"class="form-control input-md" required="">
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option5">
  <label class="form-check-label" for="inlineCheckbox4">FRI</label>
    <input id="pCStudied" name="pCStudied" type="text" size="9" class="form-control input-md" required="">
	  <input id="pCStudied" name="pCStudied" type="text" size="9"class="form-control input-md" required="">
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option6">
  <label class="form-check-label" for="inlineCheckbox5">SAT</label>
    <input id="pCStudied" name="pCStudied" type="text" size="9" class="form-control input-xs" required="">
	  <input id="pCStudied" name="pCStudied" type="text" size="9"class="form-control input-xs" required="">
</div>
      </div>
	
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div id="Layer2"  align="center">
<img src="/img/user-add-icon.png" height="150" width="150">
<button class="btn" data-toggle="modal" data-target="#exampleModal34" >Prof 2</button>
</div>

<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModal3Label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
	  <!-- Call mo dito yung Fname, Lname ng prof -->
        <h5 class="modal-title" id="exampleModal34Label">Prof 2</h5>
		<!-- Dito naman yung Faculty ID -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <legend align="">Availability</legend>

<!-- CALL MO DITO YUNG AVAILABILITY NG PROF -->

                    <!-- Multiple Checkboxes (inline) -->
                    <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" align=""value="option1">
  <label class="form-check-label" for="inlineCheckbox1">MON</label>
    <input id="pCStudied" name="pCStudied" type="text" size="9" class="form-control input-md" required="">
	  <input id="pCStudied" name="pCStudied" type="text" size="9"class="form-control input-md" required="">
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
  <label class="form-check-label" for="inlineCheckbox2">TUE</label>
    <input id="pCStudied" name="pCStudied" type="text" size="9" class="form-control input-md" required="">
	  <input id="pCStudied" name="pCStudied" type="text" size="9"class="form-control input-md" required="">
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option3">
  <label class="form-check-label" for="inlineCheckbox1">WED</label>
    <input id="pCStudied" name="pCStudied" type="text" size="9" class="form-control input-md" required="">
	  <input id="pCStudied" name="pCStudied" type="text" size="9"class="form-control input-md" required="">
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option4">
  <label class="form-check-label" for="inlineCheckbox3">THU</label>
    <input id="pCStudied" name="pCStudied" type="text" size="9" class="form-control input-md" required="">
	  <input id="pCStudied" name="pCStudied" type="text" size="9"class="form-control input-md" required="">
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option5">
  <label class="form-check-label" for="inlineCheckbox4">FRI</label>
    <input id="pCStudied" name="pCStudied" type="text" size="9" class="form-control input-md" required="">
	  <input id="pCStudied" name="pCStudied" type="text" size="9"class="form-control input-md" required="">
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option6">
  <label class="form-check-label" for="inlineCheckbox5">SAT</label>
    <input id="pCStudied" name="pCStudied" type="text" size="9" class="form-control input-xs" required="">
	  <input id="pCStudied" name="pCStudied" type="text" size="9"class="form-control input-xs" required="">
</div>
      </div>
	
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection
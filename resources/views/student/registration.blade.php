@extends('layouts.master')
@section('content')
<style>
@media (min-width: 1025px) {
    .h-custom {
    height: 50px;
    }
    }
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<form id="student-form">
  @csrf
<section class="h-100 h-custom" style="background-color: #8fc4b7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img3.webp"
            class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
            alt="Sample photo">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Registration Info</h3>
            <form class="px-md-2">
            <div class="form-outline mb-4">
                <input type="text" id="form3Example1q" name="name" class="form-control" />
                <label class="form-label" for="form3Example1q">Name</label>
              </div>
            <div class="form-outline mb-4">
                <input type="text" id="form3Example1q" name="age" class="form-control" />
                <label class="form-label" for="form3Example1q">Age</label>
              </div>
              <div class="form-outline mb-4">
                <input type="text" id="form3Example1q" name="dob" class="form-control" />
                <label class="form-label" for="form3Example1q">Date of Birth</label>
              </div>
            <div class="form-outline mb-4">
                <input type="text" id="form3Example1q" name="address" class="form-control" />
                <label class="form-label" for="form3Example1q">Address</label>
              </div>
            <button type="submit" class="btn btn-success btn-lg mb-1" id="save-btn">Submit</button>
        </form>
        </div>
        </div>
      </div>
    </div>
  </div>
</section>
</form>
<script>
  $(document).ready(function() {
  $('#save-btn').click(function(e) {
    e.preventDefault();
    $(this).html('save');
    $.ajax({
      data:$("#student-form").serialize(),
      url:"{{route('student.student_save')}}",
      type:"POST",
      dataType:"JSON",
      success:function(data) {
        alert("Data Added Succesfully");
      },
      error:function(data) {
        console.log("Error",data);
      }
    })
  })
});
  </script>


@endsection


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
</head>
<body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
<div class="container">
    <h1>Student List</h1>
    <table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>SI No</th>
                <th>Name</th>
                <th>Age</th>
                <th>Date_of_Birth</th>
                <th>Address</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        @foreach($students as $student)    
        <tr>
            <td>{{$loop->iteration}}
            <td>{{$student->name}}</td>
            <td>{{$student->age}}</td>
            <td>{{$student->dob}}</td>
            <td>{{$student->address}}</td>
            <td><a href="{{route('student.editStudent',$student->id)}}" class="btn btn-primary">Edit</td>
            <td><a href="delete" class="btn btn-warning">Delete</td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
<script type="txt/javascript">
    var table = $(".data-table").DataTable({
        serverSide:true,
        Processing:true,
        ajax:"{{route('student.student_reg')}}",
        columns:[
            {data:'name',name:'name'},
            {data:'age',age:'age'},
            {data:'email',email:'email'},
            {data:'action',action:'action'},
        ]
    });

</script>
</html>
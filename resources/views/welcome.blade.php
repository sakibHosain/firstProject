<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <h2 style="text-align:center">Students Table</h2>
  <a href="{{route('add.student')}}" class="btn btn-success float-right">Add New Student</a><br>
        
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Roll</th>
        <th>Registration No</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach($students as $data)
      <tr>
        <td>{{$data->id}}</td>
        <td>{{$data->name}}</td>
        <td>{{$data->roll}}</td>
        <td>{{$data->reg}}</td>
        <td>
            <a href="{{route('edit.student',$data->id)}}" class="btn btn-success">Edit</a>
            <a href="{{route('delete.student',$data->id)}}" class="btn btn-danger">Delete</a>
        </td>
      </tr>
    @endforeach
      
    </tbody>
  </table>
</div>

</body>
</html>

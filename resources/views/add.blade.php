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
  <h2>
  @if(@$editData)
  Edit Student
  @else
  Add New Student
  @endif

</h2>
  
  <form action="{{$editData?route('update.student',$editData->id):route('store.student')}}" method="POST" class="was-validated" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="uname">Name:</label>
      <input type="text" class="form-control"  placeholder="Enter username" name="name" value="{{$editData ? $editData->name:''}}">
    </div>
    <div class="form-group">
      <label for="pwd">Roll:</label>
      <input type="text" class="form-control"  placeholder="Enter password" name="roll" value="{{$editData ? $editData->roll:''}}">
    </div>
    <div class="form-group">
      <label for="pwd">Registration No:</label>
      <input type="text" class="form-control"  placeholder="Enter password" name="reg" value="{{$editData ? $editData->reg:''}}">
    </div>
    <div class="form-group">
      <input type="file" class="form-control"  placeholder="Upload Photo" name="image">
    </div>
    <button type="submit" class="btn btn-primary">
    @if(@$editData)
    Update
    @else
    Add
    @endif
  </button>
  </form>
</div>

</body>
</html>

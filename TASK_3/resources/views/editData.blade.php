
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Registration</title>
  </head>
<br><br>
  <body>
    <div class="container">

        @if(Session::has('regSuccess'))
        <p class="alert alert-success">{{Session::get('regSuccess')}}</p>
        @endif

<form action="{{url('updateData')}}" method="post">
    @csrf
    <div class="form-row">
    <div class="form-group col-md-6">
        <label for="inputAddress">First Name</label>
        <input type="text" class="form-control" name="fname"  value="{{$editData->fname}}">

    </div>
    <div class="form-group col-md-6">
        <label for="inputAddress">Last Name</label>
        <input type="text" class="form-control" name="lname" value="{{$editData->lname}}">

    </div>

</div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" name="email"value="{{$editData->email}}" >


  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Address</label>
      <input type="text" class="form-control" name="Address"value="{{$editData->Address}}" >

    </div>

    <div class="form-group col-md-6">
      <label for="inputZip">Phone Number</label>
      <input type="text" class="form-control" name="phoneNumber" value="{{$editData->phoneNumber}}">

    </div>
  </div>

  <input type="submit" class="btn btn-primary" value="Submit">
  <a href="{{url('dashboard')}}" class="btn btn-primary my-3">Back</a><br><br>

</form>

    </div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

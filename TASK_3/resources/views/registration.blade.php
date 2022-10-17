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

  <body>
    <div class="container">
        <a href="{{url('login')}}" class="btn btn-primary my-3">Back to Login</a>

<form action="{{url('storeData')}}" method="post">
    @csrf
    <div class="form-row">
    <div class="form-group col-md-6">
        <label for="inputAddress">First Name</label>
        <input type="text" class="form-control" name="fname" placeholder="Md Takib">
        @error('fname')
        <span class="text-error" style="color: red">{{$message}}</span>
      @enderror
    </div>
    <div class="form-group col-md-6">
        <label for="inputAddress">Last Name</label>
        <input type="text" class="form-control" name="lname" placeholder="Uddin">
        @error('lname')
        <span class="text-error" style="color: red">{{$message}}</span>
      @enderror
    </div>
</div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" name="email" placeholder="takib@mail.com">
      @error('email')
      <span class="text-error" style="color: red">{{$message}}</span>
    @enderror
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" name="password" placeholder="More than 8 characters">
      @error('password')
      <span class="text-error" style="color: red">{{$message}}</span>
    @enderror
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Address</label>
      <input type="text" class="form-control" name="address" placeholder="312/16, K- Block, Banasree, Dhaka">
      @error('address')
      <span class="text-error" style="color: red">{{$message}}</span>
    @enderror
    </div>

    <div class="form-group col-md-6">
      <label for="inputZip">Phone Number</label>
      <input type="text" class="form-control" name="phoneNo" placeholder="01779011690">
      @error('phoneNo')
      <span class="text-error" style="color: red">{{$message}}</span>
    @enderror
    </div>
  </div>

  <input type="submit" class="btn btn-primary" value="Submit">
</form>

    </div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

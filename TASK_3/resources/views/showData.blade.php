<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>User Data</title>
  </head>
<br><br><br>
  <body>
    <div class="container">
        <a href="{{url('dashboard')}}" class="btn btn-primary my-3">Back</a><br><br>
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Id</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone No.</th>
                <th scope="col">Address</th>
              </tr>

            </thead>
            <tbody>
                @foreach ($showData as $key=>$data )
              <tr>
                <td>{{$data['id']}}</td>
                <td>{{$data['fname']}}</td>
                <td>{{$data['lname']}}</td>
                <td>{{$data['email']}}</td>
                <td>{{$data['phoneNumber']}}</td>
                <td>{{$data['Address']}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>


    </div>


     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

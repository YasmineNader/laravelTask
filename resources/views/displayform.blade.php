
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</head>
<body>

<div class="container">
<h3>ALL Data</h3>


<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Age </th>
      <th scope="col">Phone </th>
      <th scope="col">National Id </th>
      <th scope="col">Address </th>
      <th scope="col">About Me </th>
      <th scope="col">Actions</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach ($person_data as $data )
      
 
    <tr>
      <th>{{ $data->id }}</th>
      <td>{{ $data->name }}</td>
      <td>{{ $data->age }}</td>
      <td>{{ $data->phone }}</td>
      <td>{{ $data->nationalid }}</td>
      <td>{{ $data->address }}</td>
      <td>{{ $data->aboutme }}</td>
      <td>
          <a href="{{ url('delete/'.$data->id) }}" class="btn btn-danger" >Delete</a>
    </td>
    </tr> 
    @endforeach
  </tbody>
</table>
<a href="{{url('form')}}" class="btn btn-primary mb-3">Add Person</a>
</div>
</div>
</div>
</body>
</html>
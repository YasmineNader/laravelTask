

<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{$title}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

   

    
    <div class="container">
        <h2>Application form</h2>
        <form action="{{ url('addData') }}" method="post" enctype="multipart/form-data">

            @csrf
            
                <div class="form-group">
                <label for="name">Name</label>
                <input type="name" name="name"  value="{{ old('name') }}" class="form-control" id="name"  placeholder="Enter Your Name">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>

            <div class="form-group">
                <label for="age">Age</label>
                <input type="text" name="age" value="{{ old('age') }}"  class="form-control" id="age" placeholder="Enter Your Age">
                @error('age')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>

            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone"  value="{{ old('phone') }}" class="form-control" id="phone" placeholder="Enter Your Phone">
                @error('phone')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>

            <div class="form-group">
                <label for="nationalid">National ID</label>
                <input type="text" name="nationalid" value="{{old('nationalid')}} " class="form-control"  id="nationalid"  placeholder="Enter Your National ID">
                @error('nationalid')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" value="{{old('password')}}" class="form-control" id="password" placeholder="Enter Your Password">
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" value="{{old('address')}}" class="form-control" id="address" placeholder="Enter Your Address">
                @error('address')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>


            <div class="mb-3">
                <label for="aboutme" class="form-label">About Me</label>
                <textarea class="form-control" id="aboutme" name ="aboutme" rows="3">{!! old('aboutme') !!}</textarea>
                @error('aboutme')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>









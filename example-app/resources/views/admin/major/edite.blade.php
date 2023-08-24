@include('admin.inc.head');
@include('admin.inc.aside');
@include('admin.inc.nav');

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        form
        {
            width:50%;
            position: relative;
            left: 20%
        }
    </style>
</head>
<body>
    <form action="{{route('updatemajor', $Majors->id)}}" method="POST">
        @method('PUT')
        @csrf
  <div class="mb-3">
    <label  class="form-label">title</label>
    <input type="text" class="form-control" name="title" value="{{$Majors->title}}" placeholder=" type major title">
    @error('title')
    {{ $message }}
    @enderror
    @if (session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
    @endif
  </div>
  <div class="mb-3">
    <label  class="form-label">image</label>
    <input type="file" name="image" class="form-control" value="{{$Majors->image}}" placeholder="upload major image">
    @error('image')
    {{ $message}}

    @enderror
    @if (session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
    @endif
    </div>

  <button type="submit" class="btn btn-primary">Update</button>
</form>
</body>
</html>

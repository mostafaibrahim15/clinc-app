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
    <form action="{{route('update', $Doctors->id)}}" method="POST">
        @method('PUT')
        @csrf
  <div class="mb-3">
    <label  class="form-label">name</label>
    <input type="text" class="form-control" name="name" value="{{$Doctors->name}}" placeholder=" type major title">
    @error('name')
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
    <input type="file" name="image" class="form-control" value="{{$Doctors->image}}" placeholder="upload major image">
    @error('image')
    {{ $message}}

    @enderror
    @if (session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
    @endif
    </div>
    <div class="mb-3">
        <label  class="form-label">major-id</label>
        <input type="text" name="major_id" class="form-control" value="{{$Doctors->major_id}}" placeholder="upload major image">
        @error('major_id')
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

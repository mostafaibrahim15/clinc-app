 @include('Admin.inc.head');
 @include('Admin.inc.nav');
 @include('Admin.inc.aside');
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <section class="mostafa">

        <h1 class="text-center">Doctors</h1>
        <a href="{{route('create')}}" class="text-center"> Add new doctor</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">title</th>
                <th scope="col">image</th>
                <th scope="col">major-id</th>
                <th scope="col">action</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($Doctors as $doctor)
                <tr>
                    <td>{{$doctor->id}}</td>
                    <td>{{$doctor->name}}</td>
                    <td>{{$doctor->image}}</td>
                    <td>{{$doctor->major_id}}</td>
                    <td>
                        <a href="{{route('editedoctor',$doctor->id)}}">Edit</a>
                        <a href="{{route('showdoctor',$doctor->id)}}">Show</a>

                    </td>
                  </tr>
                  <tr>
                @empty
                  no dostors to show
                @endforelse
          </table>
    </section>

</body>
</html>

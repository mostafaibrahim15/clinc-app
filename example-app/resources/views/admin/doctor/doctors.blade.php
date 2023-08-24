@extends('admin.doctor');


@section('doctortable')
<section class="mostafa">

    <h1 class="text-center">majors</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">title</th>
            <th scope="col">image</th>
            <th scope="col">action</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($Doctors as $doctor)
            <tr>
                <td>{{$doctor->id}}</td>
                <td>{{$doctor->image}}</td>
                <td>{{$doctor->name}}</td>
                <td>{{$doctor->major-id}}</td>
                <td>
                    <a href="{{route('edite')}}">Edit</a>
                    <a href="{{route('showdoctor')}}">Show</a>

                </td>
              </tr>
              <tr>
            @empty
              no major to show
            @endforelse
      </table>
</section>
</section>
@endsection

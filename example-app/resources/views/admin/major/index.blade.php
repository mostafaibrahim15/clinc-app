@extends('admin.inc.master');


@section('majorform')
<section class="mostafa">

    <h1 class="text-center">majors</h1>
    <a href="{{route('create')}}" class="text-center"> Add new major</a>
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

            @forelse ($Majors as $major)
            <tr>
                <td>{{$major->id}}</td>
                <td>{{$major->title}}</td>
                <td>{{$major->image}}</td>
                <td>
                    <a href="{{route('editemajor',$major->id)}}">Edit</a>
                    <a href="{{route('showmajor',$major->id)}}">Show</a>

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




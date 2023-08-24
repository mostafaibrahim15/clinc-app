@include('admin.inc.head');
@include('admin.inc.aside');
@include('admin.inc.nav');
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>homepage</title>
</head>
<body>
    <section class="mostafa">

        <h1 class="text-center">majors</h1>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">title</th>
                <th scope="col">image</th>

              </tr>
            </thead>
            <tbody>

                @forelse ($Majors as $major)
                <tr>
                    <td>{{$major->id}}</td>
                    <td>{{$major->title}}</td>
                    <td>{{$major->image}}</td>
                  </tr>
                  <tr>
                @empty
                  no major to show
                @endforelse
          </table>
          <section class="mostafa">

            <h1 class="text-center">Doctors</h1>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">title</th>
                    <th scope="col">image</th>
                    <th scope="col">major_id</th>

                  </tr>
                </thead>
                <tbody>
                    @forelse ($Doctors as $doctor)
                    <tr>
                        <td>{{$doctor->id}}</td>
                        <td>{{$doctor->name}}</td>
                        <td>{{$doctor->image}}</td>
                        <td>{{$doctor->major_id}}</td>

                      </tr>
                      <tr>
                    @empty
                      no major to show
                    @endforelse
              </table>


                <h1 class="text-center">Bookings</h1>

                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">date</th>
                        <th scope="col">status</th>
                        <th scope="col">doctor_id</th>
                        <th scope="col">user_id</th>

                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($Bookings as $booking)
                        <tr>
                            <td>{{$booking->id}}</td>
                            <td>{{$booking->date}}</td>
                            <td>{{$booking->status}}</td>
                            <td>{{$booking->doctor_id}}</td>
                            <td>{{$booking->user_id}}</td>

                          </tr>
                          <tr>
                        @empty
                          no bookings to show
                        @endforelse
                  </table>
            </section>


                <h1 class="text-center">contacts</h1>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">name</th>
                        <th scope="col">email</th>
                        <th scope="col">phone</th>
                        <th scope="col">subject</th>
                        <th scope="col">massage</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($Contacts as $contact)
                        <tr>
                            <td>{{$contact->id}}</td>
                            <td>{{$contact->name}}</td>
                            <td>{{$contact->email}}</td>
                            <td>{{$contact->phone}}</td>
                            <td>{{$contact->subject}}</td>
                            <td>{{$contact->massage}}</td>

                          </tr>
                          <tr>
                        @empty
                          no massages to show to show
                        @endforelse
                  </table>


                    <h1 class="text-center">Users</h1>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">name</th>
                            <th scope="col">email</th>
                            <th scope="col">phone</th>
                            <th scope="col">role</th>

                          </tr>
                        </thead>
                        <tbody>
                            @forelse ($Users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->phone}}</td>
                                <td>{{$user->rolr}}</td>


                              </tr>
                              <tr>
                            @empty
                              no users to show to show
                            @endforelse
                      </table>

            </section>
</body>
</html>

@include('admin.inc.head');
@include('admin.inc.aside');
@include('admin.inc.nav');
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>users</title>
</head>
<body>
    <section class="mostafa">

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
    </section>
</body>
</html>

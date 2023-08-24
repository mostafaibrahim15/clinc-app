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
</head>
<body>
    <section class="mostafa">

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
    </section>
    </section>
</body>
</html>

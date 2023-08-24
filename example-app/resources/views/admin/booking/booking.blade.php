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

       <h1 class="text-center">Bookings</h1>

       <table class="table">
           <thead>
             <tr>
               <th scope="col">#</th>
               <th scope="col">date</th>
               <th scope="col">status</th>
               <th scope="col">doctor_id</th>
               <th scope="col">user_id</th>
               <th scope="col">action</th>
             </tr>
           </thead>
           <tbody>
               @forelse ($bookings as $booking)
               <tr>
                   <td>{{$booking->id}}</td>
                   <td>{{$booking->date}}</td>
                   <td>{{$booking->status}}</td>
                   <td>{{$booking->doctor_id}}</td>
                   <td>{{$booking->user_id}}</td>
                   <td>
                       <a href="#">Edit</a>
                       <a href="#">Show</a>

                   </td>
                 </tr>
                 <tr>
               @empty
                 no bookings to show
               @endforelse
         </table>
   </section>

</body>
</html>

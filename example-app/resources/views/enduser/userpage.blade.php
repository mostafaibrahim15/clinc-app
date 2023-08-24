@include('enduser.inc.head');
@include('enduser.inc.footer');
@include('enduser.index')
 @extends('enduser.inc.nav');

 @section('userpage')
 <h1 class="h1">{{$Users->name}}</h1>
 @endsection

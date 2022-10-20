@extends('layouts.main')
@section('dropdown')
<div class="dropdown">
                    <button class="dropbtn">{{ Auth::user()->name }}</button>
                    <div class="dropdown-content">
                      
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a  href="/home"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>
                        <a href="/users2">Check users </a>
                        <a href="/reservations">Check Reservation </a>
                    </div>
</div>
@endsection
@section('content')
<style>
table, td {
  border: 1px solid black;
}
table {
    border-collapse: collapse;
    width: 100%;
}
h1 {
text-align:center;
}
td {
  padding: 15px;
  text-align: left;
  
}
#tabletitle {
    background-color: brown;
    font-size: 1.2em;
    font-weight: bold;
}

</style>
<h1>Display Reservations </h1>

<table>
    <tr id="tabletitle">
        <td>ID</td>
        <td>Name</td>
        <td>Date</td>
        <td>Hour</td> 
    </tr>
    @foreach($reservations as $reservation)
    <tr>
        <td>{{$reservation['id']}}</td>
        <td>{{$reservation['Name']}}</td>
        <td>{{$reservation['Date']}}</td>
        <td>{{$reservation['Hour']}}</td> 
    </tr>
    @endforeach
</table>



@endsection
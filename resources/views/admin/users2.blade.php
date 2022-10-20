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
                        <a href="/users2">Check Users </a>
                        <a href="/reservations">Check Reservations</a>
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
    background-color: yellow;
    font-size: 1.2em;
    font-weight: bold;
}

</style>
<h1>Display Users  </h1>

<table>
    <tr id="tabletitle">
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
    </tr>
    @foreach($users as $user)
    <tr>
        <td>{{$user['id']}}</td>
        <td>{{$user['name']}}</td>
        <td>{{$user['email']}}</td>
    
    </tr>
    @endforeach
</table>



@endsection
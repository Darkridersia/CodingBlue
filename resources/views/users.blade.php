<x-header data="User"/>

<h1>This is the User Page</h1>

<hr style="height: 5px; background-color: black;">

@if($user == "YL Loo")
    <h2>Hello {{ $user }}</h2>
@elseif($user == "Peter")
    <h2>Hi {{ $user }}</h2>
@elseif($user == "Nigel")
    <h2>Bonjour, {{ $user }}</h2>
@else
    <h2>Unknown User</h2>
@endif

<hr style="height: 5px; background-color: black;">

@include('userInner')

<hr style="height: 5px; background-color: black;">

@foreach($users as $user)
    <h1>{{ $user }}</h1>
@endforeach

<script>
    var data=@json($users);
    
    console.log(data);
</script>

<!-- U need the below code to show the JSciprt data in the console -->
@csrf


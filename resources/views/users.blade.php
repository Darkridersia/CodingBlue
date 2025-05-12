<x-header data="User" />

<h1>This is the User Page</h1>

<hr style="height: 5px; background-color: black;">

<hr style="height: 5px; background-color: black;">

{{-- it will able to get the data from teh userInner view bcs the @include function will inherit all the var that is passed to the parent view which is the "users.blade.php" view --}}
@include('userInner')

@if(session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif

<hr style="height: 5px; background-color: black;">

@foreach($users as $user)
    <h3>ID: {{ $user->id }}</h3>
    <h3>Name: {{ $user->name }}</h3>
    <h3>Email: {{ $user->email }}</h3>
<hr>@endforeach

<script>
    var data = @json($users);

    console.log(data);
</script>

<!-- U need the below code to show the JSciprt data in the console -->
@csrf
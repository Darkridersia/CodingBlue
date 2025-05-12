<x-header data="Add User Header Component" />

<h1>Hi {{ session('user') }}</h1>

<form action="/addUser" method="POST">
    @csrf
    <div>
        <label for="name">Name:</label>
        <br>
        <input type="text" id="name" name="name" placeholder="Enter ur name">
    </div>

    <br>

    <div>
        <label for="email">Email:</label>
        <br>
        <input type="text" id="email" name="email" placeholder="Enter ur email">
    </div>

    <br>

    <div>
        <label for="password">Password:</label>
        <br>
        <input type="password" id="password" name="password" placeholder="Enter ur password">
    </div>

    <br>

    <div>
        <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm ur password">
    </div>

    <br>

    <button type="submit">Add User</button>
</form>

@if(session('message'))
<div class="alert alert-success" style="color: green; font-weight: bold;">
    {{ session('message') }}
</div>
@endIf

@if ($errors->any())
    <div style="color: red; font-weight: bold;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
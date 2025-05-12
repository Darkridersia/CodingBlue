<x-header data="Add User Header Component" />

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
        <input type="text" id="password" name="password" placeholder="Enter ur password">
    </div>

    <br>

    <button type="submit">Add User</button>
</form>

@if(session('message'))
<div class="alert alert-success" style="color: green; font-weight: bold;">
    {{ session('message') }}
</div>
@endIf
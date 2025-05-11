<x-header data="Add User Header Component"/>

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

    <button type="submit">Add User</button>
</form>
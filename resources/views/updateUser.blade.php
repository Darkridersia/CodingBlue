<x-header data="Update User Header Component"/>

<form action="/updateUser/{{ $data }}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $data['id'] }}">
    <br>
    <input type="text" name="name" value="{{ $data['name'] }}">
    <br>
    <br>
    <input type="text" name="email" value="{{ $data['email'] }}">
    <br>
    <br>
    <button type="submit">Update User</button>
</form>
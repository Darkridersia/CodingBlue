<h1>This is the User Inner View</h1>

This is the list of users:

<Table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
                        <th>Actions</th>

        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <form action="/users/usercontroller/{{$user->id}}" method="POST">
                        @csrf
                        <button type="submit">Delete</button>
                    </form>
                </td>
                <td>
                    <a href="/updateUser/{{ $user->id }}">Update</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</Table>

<span>
    {{$users->links()}}
</span>

{{-- Solve the styling issues for pagination --}}
<style>
    .w-5 {
        display: none
    }
</style>
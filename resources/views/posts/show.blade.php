<table>
    <thead>
        <tr>
            <th>Content</th>
            <th>User ID</th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
            @can('view', $post)

                <tr>
                    <td>{{ $post->content }}</td>
                    <td>{{ $post->user_id }}</td>
                </tr>
            @endcan
        @endforeach

    </tbody>
</table>

    <div class="container">

        <div class="card">
            <div class="card-header">CreatePost</div>
            <div class="card-body">
                <form action="{{route('posts.store')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">User_id</label>
                        <input class="form-control" type="text" name="user_id">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input class="form-control" type="text" name="title">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Content</label>
                        <textarea class="form-control" name="content" rows="4"></textarea>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary w-100">Add Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<x-header data="User Login Header Component" />

<form action="/login" method="POST">
    @csrf
    <input type="text" name="email" placeholder="Enter Email">
    <span style="color:red;">
        @error('email')
            {{ $message }}
        @enderror
    </span>
    <br>
    <br>
    <input type="text" name="password" placeholder="Enter Password">
    <span style="color:red;">
        @error('password')
            {{ $message }}
        @enderror
    </span>
    <input type="hidden" name="is_admin" value="0">
    <br>
    <br>
    <button type="submit">Login</button>

    <br>
    <br>

    @if(session('message'))
    <div class="alert alert-success" style="color: green; font-weight: bold;">
        {{ session('message') }}
    </div>
    @endIf

    @if ($errors->any())
        <div class="alert alert-danger" style="color: red; font-weight: bold;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</form>
<h1> User Login Header Component</h1>

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
@endif

<br>
<form action="/login" method="post">
    @csrf
    <input type="text" name="email" placeholder="Enter Email"><br>
    <span style="color:red">
        @error('email')
            {{ $message }}
        @enderror
    </span><br>
    <input type="password" name="password" placeholder="Enter Password"><br>
    <span style="color:red">
        @error('password')
            {{ $message }}
        @enderror
    </span><br>
    <input type="hidden" name="is_admin" value="0"><br>
    <button type="submit">login</button><br><br>
</form>
<a href="/home">Home Page </a><br>
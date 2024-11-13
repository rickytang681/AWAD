@if (session('user'))
<h3 style="color: green">Hi, {{session('user')}} you are now a registered user</h3>
@endif
<form action="/signUp" method="post">
@csrf
<input type="text" name="name" placeholder="Enter user name"><br>
<span style="color: red" > @error('name'){{$message}}@enderror </span><br>
<input type="text" name="email" placeholder="Enter Email"><br>
<span style="color: red" > @error('email'){{$message}}@enderror </span><br>
<input type="password" name="password" placeholder="Enter Password"><br>
<span style="color: red" > @error('password'){{$message}}@enderror </span><br>
<input type="password" name="confirm_password" placeholder="Enter Match Password"><br>
<span style="color: red" > @error('confirm_password'){{$message}}@enderror </span><br>
<input type="hidden" name="is_admin" value="0"><br>
<button type="submit">Add new user</button><br><br>
</form>
<a href="/home">Home Page </a><br>
<a href="/login">Login </a><br><br>
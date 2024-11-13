<x-header data="UserController" />
<h2>This is the list of Users. </h2>

<table border='1'>
    <tr>
        <td>id</td>
        <td>name</td>
        <td>email</td>
        <td>Operation</td>
        <td>Operation</td>
    </tr>

    @foreach($users as $user)
    <tr>
        <td>{{$user['id']}}</td>
        <td>{{$user['name']}}</td>
        <td>{{$user['email']}}</td>
        <td><a href ={{"deleteUser/".$user['id']}}>Delete</a></td>
        <td><a href ={{"updateUserNewData/".$user['id']}}>Update</a></td>
    </tr>
    @endforeach
</table>

<style>
    .w-5{
        display: none
    }
</style>

<span>
    {{$users->links()}}
</span>

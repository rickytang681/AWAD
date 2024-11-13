<x-header data="User Inner" />
<h2>This is the list of Users. </h2>

<table border="1">
    <thead>
        <tr>
            <td>id</td>
            <td>name</td>
            <td>email</td>
            <td>Operation</td>
            <td>Operation</td>
        </tr>
    </thead>
    
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user['id'] }}</td>
                <td>{{ $user['name'] }}</td>
                <td>{{ $user['email'] }}</td>
                <td><a href={{ 'deleteUser/' . $user['id'] }}>Delete</a></td>
                <td><a href={{ 'updateUserNewData/' . $user['id'] }}>Update</a></td>
            </tr>
        @endforeach
    </tbody>
</table>

// smaller the size arrow
<style>
    .w-5 {
        display: none
    }
</style>

<span>
    {{ $users->links() }}
</span>

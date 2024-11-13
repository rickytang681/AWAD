<x-header data="UserController" />

{{--
@if($username=="Ricky")
<h2> Hello {{$username}} </h2>
@elseif($username=="Peter")
<h2> Hi {{$username}} </h2>
@elseif($username=="Ali")
<h2> Bonjour, {{$username}} </h2>
@else
<h2> Unknown User </h2>
@endif
--}}

@foreach($users as $user)
<h1> {{$user}} </h1>
@endforeach

@include("userInner")

<script>
    var data=@json($users);
    console.warn(data);
</script>

<!- Cross-site request forgery (CSRF) ->

@csrf


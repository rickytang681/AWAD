<x-header data="User" />

@if($username=="Ricky")
<h2> Hello {{$username}} </h2>
@elseif($username=="Peter")
<h2> Hi {{$username}} </h2>
@elseif($username=="Ali")
<h2> Bonjour, {{$username}} </h2>
@elseif($username=="ricky")
<h2> 您好, {{$username}} </h2>
@else
<h2> Unknown User </h2>
@endif
<br><br>

<!- Cross-site request forgery (CSRF) ->

@csrf
<h1>Home Page</h1>
<button><a href="{{url('/')}}">Welcome</a></button>
<button><a href="/about/lipu">About</a></button>

<h1>{{$name}}</h1>

<h1>{{rand()}}</h1>

<h1>{{$users[2]}}</h1>

@if($name == "anil")
<h2>This is anil</h2>
@elseif($name == 'sam')
<h2>this is sam</h2>
@else
<h2>other user</h2>
@endif

<div>
   @foreach($users as $user)
   <h4>{{$user}}</h4>
   @endforeach
</div>

<div>
   @for($i=0;$i<=10;$i++)
   <h3>{{$i}}</h3>
   @endfor
</div>
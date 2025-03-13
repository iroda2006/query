@foreach ($users as $user)
<p>{{$user->name}}</p>
<p>{{$user->age}}</p>
<p>{{$user->email}}</p>
<p>{{$user->status}}</p>
@endforeach

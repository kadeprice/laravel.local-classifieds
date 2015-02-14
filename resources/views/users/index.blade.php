<h2>Show Users</h2>
<br/>
@foreach($users as $user)
    <p>
        {{ $user['fname'] }} {{ $user['lname'] }}
    </p>
@endforeach
<br/>
{{ App::environment() }}
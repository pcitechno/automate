<h1>Admins</h1>
<ul>
    @foreach ($admins as $admin)
        <li>{{ $admin->name }}</li>
    @endforeach
</ul>

<h1>Managers</h1>
<ul>
    @foreach ($managers as $manager)
        <li>{{ $manager->name }}</li>
    @endforeach
</ul>

<h1>Users</h1>
<ul>
    @foreach ($users as $user)
        <li>{{ $user->name }}</li>
    @endforeach
</ul>

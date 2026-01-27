<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Edit User</h1>
    @foreach($userId as $user)
    <form action="/user/update/{{ $user->id }}" method="POST">
        @csrf
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" value="{{ $user->username }}">
        <br>
        <label for="nama">Name:</label>
        <input type="text" name="nama" id="nama" value="{{ $user->nama }}">
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ $user->email }}">
        <br>
        <label for="role">Role:</label>
        <input type="text" name="role" id="role" value="{{ $user->role }}">
        <br>
        <button type="submit">Submit</button>
    </form>
        @endforeach
</body>

</html>

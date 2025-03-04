
<html>
<head>
    <title>UPDATE</title>
</head>
<body>
    <form method="POST" action="{{ route('users.update', ['user' => $user->id]) }}">
        @csrf 


        <input name="email" value="{{ $user->email }}">
        <br>
        <br>
        <input name="name" value="{{ $user->name }}">
        <br>
        <br>
        <input name="password" type="password">
        <br>
        <br>
        <button type="submit">
            Módositás
        </button>

    </form>

</body>
</html>
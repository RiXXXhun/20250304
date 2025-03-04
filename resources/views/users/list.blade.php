<html>
<head>
    <title>LIST</title>
</head>
<body>
    <h1>LISTA</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>E-mail cím</th>
            <th>Felhasználónév</th>
            <th colspan="2">Műveletek</th>
        </tr>
        @foreach($users as $user)

            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->name }}</td>
                <td>
                    <a href="{{ route('users.updateForm', ['user' => $user->id]) }}">
                        Módositás
                    </a>
                </td>
                <td>
                    <form action="">
                        <button>
                            Törlés
                        </button>
                    </form>
                </td>
            </tr>

        @endforeach
    </table>
</body>
</html>
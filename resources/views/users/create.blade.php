<html>
<head>
    <title>CREATE</title>
</head>
<body>
    <form method="POST" action="{{ route('users.store') }}">
        <input name="email" placeholder="E-mail cím">
        <br>
        <br>
        <input name="name" placeholder="Felhasználó neve">
        <br>
        <br>
        <input name="password" type="password" placeholder="Jelszó">
        <br>
        <br>
        <Button type="submit">Küldés</Button>
    </form>
</body>
</html>
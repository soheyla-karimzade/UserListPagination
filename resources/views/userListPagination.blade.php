<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users view</title>
</head>
    <body>

    <h1>Users view</h1>
    <table>
    <tr>
        <th>name</th>
        <th>email</th>
    </tr>
            @foreach($UserPagination as  $user)
            <tr>
                <td>
                        {{$user->name}}
                </td>
                    <td>
                        {{$user->email}}
                </td>
            </tr>
            @endforeach

    </table>
</body>
</html>
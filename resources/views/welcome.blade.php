<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <title>Laravel</title>
    </head>
    <body class="bg-dark">
            <div class="container">
                <h3 class="text-white">User List</h3>
                <div class="row">
                    <div class="col-lg-4">
                @isset($users)
                @foreach ($users as $user)
                        <p class=""><a href="/{{$user->id}}">{{$user->first_name }} {{$user->last_name}}</a></p>
                @endforeach
                @endisset
                    </div>
                </div>
            </div>
    </body>
</html>

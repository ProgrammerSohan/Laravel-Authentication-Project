<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>

    <h1>Login</h1>

  @include('header')
    <form action="" method="post" style="margin:auto;width:300px;">
        @csrf

        <input type="email" name="email" placeholder="Email"> <br>
            @error('email')
                <span>{{$message}}</span>
            @enderror
        <br>
        <input type="password" name="password" placeholder="Password"> <br>
         @error('password')
             <span>{{$message}}</span>
         @enderror
        <br>
        <input type="submit" value="Login">


    </form>

</body>
</html>

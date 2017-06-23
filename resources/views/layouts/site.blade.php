<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('titulo')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
       
        

               
</head>

<body backgroud="http://3.bp.blogspot.com/-1it_rjwEh5E/Tx4ORGyZAJI/AAAAAAAAAUA/0nPdCZcGGHo/s1600/empty_cinema_room.jpg">

    <div class="container">
       
       @include('layouts.partials.nav')

        @yield('content')


    </div>


</body>

</html>
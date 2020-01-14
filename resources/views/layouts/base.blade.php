<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= {{mix("css/app.css")}}>
    <title>Php Dischi</title>
</head>

<body>
   

    @include('partials.header')

    <div class="cds-container">

        @yield('content')

    </div>
        
</body>

</html>
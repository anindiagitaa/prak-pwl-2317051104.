<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
          rel="stylesheet" 
          integrity="sha384-QWTKZyjpPEjISv3uR9W0FeRpokCTwtnbrSpMyl2RbNjXh0eJMjYh6YhALWnN9c9" 
          crossorigin="anonymous">
</head>

<body>
    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-vpcrYFBY31HBG9NNxeCsp9FDVILESAASsINzDoxhg9kcGldsk1leZN7N6j" 
            crossorigin="anonymous">
    </script>
</body>

</html>

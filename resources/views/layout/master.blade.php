<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
          integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-light bg-light">
    <div class="col-md-3">
        <a class="navbar-brand" href="#"><img src="https://static.topcv.vn/company_logos/aptech-computer-education-center-57982df91f555.jpg" width="200px" height="100px"></a>
    </div>
    <div class="col-md-2 mt-3">
        <div class="mt-3">
            <strong>luyendh@fe.edu.vn</strong>
            <a href="#">(Logout)</a>
        </div>
    </div>
    </div>
</nav>
<div class="container-fluid row mt-2">
    <nav class="col-md-2">
        <div class="nav flex-column nav-tabs" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link" id="v-pills-profile-tab" href="/"
               aria-controls="v-pills-profile" aria-selected="false">Home</a>
            <a class="nav-link" id="v-pills-profile-tab" href="/attendent"
               aria-controls="v-pills-profile" aria-selected="false">List Student</a>
            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#"
               aria-controls="v-pills-messages" aria-selected="false">Time Slot</a>
        </div>
    </nav>
    <main class="col-md-10">
        @section('content')
        @show
    </main>
</div>
<footer class="container-fluid mt-3 mb-3">
    <p class="text-center">Copyright @2017</p>
</footer>
</body>
</html>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid col-12 m-0 p-0">
        <div class="col-12 m-0 p-0 navbar-ebs">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Event Booking System</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            @if (Auth::user()->role == 'admin')
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ url('/') }}/dashboard">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ url('/') }}/user">User</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ url('/') }}/event">Event</a>
                            </li>
                            @else
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ url('/') }}/listEvent">Events</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ url('/') }}/listBooked">Booked</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ url('/') }}/event">Event</a>
                            </li>
                            @endif
                        </ul>
                    </div>
                    <div class="inline">
                        <a class="link-dark" style="text-decoration: none;" href="{{ url('/') }}/profile/{{ Auth::user()->id }}">{{ Auth::user()->name }}</a>,<a href="{{ url('/') }}/profile">Profile</a>, <a href="{{ url('/') }}/logout">Logout</a>
                    </div>
                </div>
            </nav>
        </div>
        <div class="col-12 m-0 p-0 content">
            @yield("content")
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

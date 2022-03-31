<html>
    <head>
        @if ($title)
                <title>{{ $title }}</title>
        @else
                <title>Example Laravel App</title>
        @endif
    </head>
   
    </body>
    <div><a href="/home">Home</a> | <a href="/about">About</a> | <a href="/gallery_of_travelling">Gallery Of Travelling</a> | <a href="/contact_us_page">Contact Us Page Of Travelling</a> | <a href="/booking">Booking Of Travelling</a> </div>
        <hr/>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>

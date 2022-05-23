<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
    <header>
        @include('partials.header')
    </header>

    <main>
        @include('partials.jumbo')
        
        @yield('section-1')

        @yield('section-2')

        
    </main>

    <footer>
        <div class="link">
            <div class="box">
                @include('partials.footer-link.footerLink1')
                @include('partials.footer-link.footerLink2')
                @include('partials.footer-link.footerLink3')
                @include('partials.footer-link.footerLink4')
                <div class="logo-dc"></div>
            </div>
        </div>
        <div class="footer-social">
            <div class="box-social">
                @include('partials.footer-link.footerSocial')
            </div>
        </div>
        
    </footer>
</body>
</html>
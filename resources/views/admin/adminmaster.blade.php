<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
        crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Noto+Sans+SC:400,500,700,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC:400,500,700,900" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.min.js"></script>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
    
        <link rel="stylesheet" href="/css/app.css">
    <title>@yield('title')</title>
</head>
<body>
    
    <div class="container">
        <div class="admin-banner">
            <h1>CSI Admin Panel</h1>
    
        </div>
        @yield('content')
        

    </div>

    <footer class="footer">

            <div class="footer-main">
                <div class="address">
                    <h3>Location</h3>
                    <p> Unit 1,</p>
                    <p> Blah blah blah</p>
                </div>
                <div class="number">
                    <h3>Contact</h3>
                    <p>
                        1800 123456789
                    </p>
                </div>
                <div class="social">
                    <h3>Social Media</h3>
                    FB TW INST
                </div>
            </div>
            <div class="footer-sub">
                Copyright Rocket.Chip Web Solutions
            </div>
    </footer>



    <script src="/js/app.js"></script>
	{{-- <script src="js/app.js"></script>
	<script src="js/app.js"></script> --}}
	<script>
		AOS.init();
	</script>
    
</body>
</html>
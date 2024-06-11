<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="icon" href="{{ url('storage/images/logo.png') }}">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="assets/images/favicon.png" />
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    {{-- <link href="{{ URL::asset('storage/css/bootstrap.min.css'); }}" rel="stylesheet"> --}}
    <!-- Slick slider -->
    <link href="{{ URL::asset('storage/css/slick.css') }}" rel="stylesheet">
    <!-- Theme color -->
    <link id="switcher" href="{{ URL::asset('storage/css/theme-color/default-theme.css') }}" rel="stylesheet">

    <!-- Main Style -->
    <link href="{{ URL::asset('storage/css/style.css') }}" rel="stylesheet">

    <!-- Fonts -->

    <!-- Open Sans for body font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
    <!-- Lato for Title -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        iframe.skiptranslate {
            visibility: hidden !important;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            /* height: 100vh; */
            margin: 0;
            position: relative;
            background-color: #f0f0f0; /* Background color for visibility */
        }

        .arrow {
            position: fixed;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            height: 40px;
            width: 40px;
            align-items: center;
            justify-content: center;
            border: 1px solid #ccc;
            background-color: white;
            border-radius: 50%;
            cursor: pointer;
            transition: brightness 0.3s;
        }

        .arrow:hover {
            filter: brightness(90%);
        }

        .arrow svg {
            fill: currentColor;
        }

        .previous {
            left: 3%;
        }

        .next {
            right: 3%;
        }
        /* public/css/app.css */
.logo-container {
    text-align: center;
    padding: 20px;
}

.logo {
    width: 100%;
    max-width: 200px;
    height: auto;
}

/* Responsive adjustments */
@media (min-width: 768px) {
    .logo {
        max-width: 150px;
    }
}

@media (min-width: 1024px) {
    .logo {
        max-width: 120px;
    }
}

/* set width of logo as the minimum of 200px & 50vw */
.logo-img {
	width: min(50vw, 200px);
}

    </style>

</head>

<body>
    @include('layouts.gita_site.header')


    <main class="py-4">
        @yield('content')
        @include('layouts.gita_site.footer')
    </main>


    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Bootstrap -->
    <script src="{{ URL::asset('storage/js/bootstrap.min.js') }}"></script>
    <!-- Slick slider -->
    <script type="text/javascript" src="{{ URL::asset('storage/js/slick.min.js') }}"></script>
    <!-- Counter js -->
    {{-- <script type="text/javascript" src="{{ URL::asset('storage/js/counter.js'); }}"></script> --}}
    <!-- Ajax contact form  -->
    <script type="text/javascript" src="{{ URL::asset('storage/js/app.js') }}"></script>



    <!-- Custom js -->
    <script type="text/javascript" src="{{ URL::asset('storage/js/custom.js') }}"></script>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en'
            }, 'google_translate_element');

            // to remove poverded by google text and link
            var $googleDiv = $("#google_translate_element .skiptranslate");
            var $googleDivChild = $("#google_translate_element .skiptranslate div");
            $googleDivChild.next().remove();

            $googleDiv.contents().filter(function() {
                return this.nodeType === 3 && $.trim(this.nodeValue) !== '';
            }).remove();

        }

        $(document).ready(function() {
            translationTooltipsDisable();
        });


        function translationTooltipsDisable() {
            //Override google's functions
            _tipon = function() {
                /*Don't display the tooltip*/
            };
            _tipoff = function() {
                /*Don't hide the tooltip*/
            };
        }
    </script>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>

    @yield('java_script')
</body>

</html>

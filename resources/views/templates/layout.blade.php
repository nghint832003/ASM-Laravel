<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
    <script src="https://kit.fontawesome.com/a4c378ce73.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

        <div class="row">

                <nav  class="col-xl-3">
                    <ul class="mcd-menu">
                        <li>
                            <a href="">
                                <i class="fa fa-home"></i>
                                <strong>Home</strong>
                                {{-- <small>sweet home</small> --}}
                            </a>
                        </li>
                        <li>
                            <a href="" class="active">
                                <i class="fa fa-edit"></i>
                                <strong>About us</strong>
                                {{-- <small>sweet home</small> --}}
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-gift"></i>
                                <strong>Features</strong>
                                {{-- <small>sweet home</small> --}}
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-globe"></i>
                                <strong>News</strong>
                                {{-- <small>sweet home</small> --}}
                            </a>
                        </li>

                        <li>
                            <a href="">
                                <i class="fa fa-comments-o"></i>
                                <strong>Blog</strong>
                                {{-- <small>what they say</small> --}}
                            </a>
                            <ul>
                                <li><a href="#"><i class="fa fa-globe"></i>Mission</a></li>
                                <li>
                                    <a href="#"><i class="fa fa-group"></i>Our Team</a>
                                    {{-- <ul>
                                        <li><a href="#"><i class="fa fa-female"></i>Leyla Sparks</a></li>
                                        <li>
                                            <a href="#"><i class="fa fa-male"></i>Gleb Ismailov</a>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-leaf"></i>About</a></li>
                                                <li><a href="#"><i class="fa fa-tasks"></i>Skills</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="fa fa-female"></i>Viktoria Gibbers2</a></li>
                                    </ul> --}}
                                </li>
                                <li><a href="#"><i class="fa fa-trophy"></i>Rewards</a></li>
                                <li><a href="#"><i class="fa fa-certificate"></i>Certificates</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-picture-o"></i>
                                <strong>Portfolio</strong>
                                {{-- <small>sweet home</small> --}}
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-envelope-o"></i>
                                <strong>Contacts</strong>
                                {{-- <small>drop a line</small> --}}
                            </a>
                        </li>
                        <li class="float">
                            <a class="search">
                                <input type="text" value="search ...">
                                <button><i class="fa fa-search"></i></button>
                            </a>
                            <a href="" class="search-mobile">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>
                    </ul>
                </nav>

            <div class="col-xl-9">
                @yield('content')
                <h1>abcasdf</h1>
            </div>
        </div>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=htmlentities(env("APP_NAME"), ENT_QUOTES, 'UTF-8');?> | <?=htmlentities("WELCOME", ENT_QUOTES, 'UTF-8');?></title>
    <link rel="shortcut icon" type="image/png" href="<?=url('favicon.ico')?>">
    <link rel="stylesheet" href="<?=url('/assets/css/spectre.min.css')?>">
    <!-- spectre css -->
    <style>
        html {
            position: relative;
            min-height: 100%;
        }
        body {
            background: -webkit-gradient(linear, left top, left bottom, from(#cbcdd2), to(#ffffff)) fixed;
            background-repeat: no-repeat;
            margin-bottom: 60px; /* Margin bottom by footer height */
        }
        a, a:hover, a:active, a:visited, a:focus {
            text-decoration: none;
            box-shadow: none;
            color: #45a3c4;
        }
        header {
            margin-top: 4rem;
        }
        header p {
            color: #7e7e7e;
        }
        footer {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
        }
        footer p {
            margin: 1rem 0;
        }
        .nav-menu nav {
            margin-top: 2rem;
        }
        .nav-menu nav ul {
            list-style: none;
            margin: 0;
        }
        .nav-menu nav ul li {
            display: inline-block;
            height: 50px;
        }
        .nav-menu nav ul li a {
            display: block;
            padding: .5rem;
        }
        .nav-menu nav ul li a:hover {
            color: #05759c;
        }
        .nav-menu {
            background: radial-gradient(circle at center, #f2f2f2 0, transparent 90%);
        }
        .label {
            background: none;
            color: #47474b;
        }
        .logo {
            background: radial-gradient(circle at center, #f2f2f2 0, transparent 20%);
            padding: 20px 0px 1px 0px;
        }
        header .logo span {
            font-size: 20px;
            letter-spacing: 0.7em;
            position: relative;
            left: 8px;
            top: -25px;
            color: #05759c;
            font-weight: 400;
        }
        .main{
            margin: 80px auto;
            margin-top: 30px;
        }
    </style>
</head>
<body>
<div class="container grid-xl mt-2">
    <div class="label hide-sm mt-2 float-left">
            <b>Git: </b> <span> master</span>
    </div>
    <div class="label mt-2 float-right">
        <b>Version:</b> <span><?=env("APP_VERSION")?></span>
    </div>
    <div class="clearfix"></div>
    <div class="container grid-lg text-center">
        <header>
            <div class="columns">
                <div class="column col-12">
                    <div class="logo">
                        <img src="<?=htmlentities(url('favicon.ico'), ENT_QUOTES, 'UTF-8');?>" height="100">
                        <h1><?=htmlentities("SILO ", ENT_QUOTES, 'UTF-8');?></h1>
                        <span><?=htmlentities("Framework", ENT_QUOTES, 'UTF-8');?></span>
                    </div>
                    <p style="margin-bottom:0">Thanks for choosing Silo !</p>
                </div>
            </div>
        </header>
        <main class="text-center nav-menu">
            <nav>
                <ul>
                    <li><a href="#">Changes</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Documentation</a></li>
                    <li><a href="#">Contribution</a></li>
                </ul>
            </nav>
        </main>
        <div class="main">
            <!-- <a href="#" target="_blank">
                <img src="#" width="200">
            </a>
            <p>Join us on Community HUB</p> -->
        </div>
        <footer class="text-center">
            <div class="col-12">
                <p>Silo &copy;2019</p>
            </div>
        </footer>
    </div>
</div>
</body>
</html>
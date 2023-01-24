<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="/assets/img/logo.jpg" />
    <title>Tumor on target</title>
    <link rel="stylesheet" href="/assets/app.css" />
</head>

<body>
    <div class="wrapper">
        <div class="layout">
            <div class="sidebar">
                <a class="logo" href="#">
                    <img src="https://cat-sa.uz/wp-content/uploads/IMG_20200831_162713_749-Shohista-Rustamova.jpg"
                        alt="" />
                    Tumorontarget
                </a>

                <ul class="menu">
                    <li>
                        <a href="{{ route('members.index') }}">Barcha bemorlar</a>
                    </li>
                    <li>
                        <a href="{{ route('members.create') }}">Ro'yhatga olish</a>
                    </li>
                    <li>
                        <a href="{{ route('diagramm') }}">Diagramma</a>
                    </li>


                </ul>
            </div>
@yield('content')
</div>
</div>

<script src="/assets/app.js"></script>
</body>

</html>


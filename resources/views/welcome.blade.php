<html>
<head>
    <title>OrderEZ</title>

    <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"
          integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ=="
          crossorigin="anonymous">

    <style>
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            color: #B0BEC5;
            font-weight: 100;
            font-family: 'Lato';
        }

        .container {
            text-align: center;
            height: 100%;
            display: table;
        }

        .content {
            text-align: center;
            vertical-align: middle;
            display: table-cell;
        }

        .title {
            font-size: 96px;
            font-weight: bold;
            margin-bottom: 40px;
            color: goldenrod;
        }

        .quote {
            font-size: 24px;
            font-weight: bold;
            color: cornflowerblue;
        }

        .navbar {
            width: 100%;
            position: fixed;
            top: 0px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-default">

    <div class="container-fluid">

        <div class="collapse navbar-collapse" id="my-login">

            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ url('/auth/login') }}">Login</a></li>
                <li><a href="{{ url('/auth/register') }}">Register</a></li>

            </ul>
        </div>
    </div>
</nav>

<div class="container">

    <div class="content">
        <div class="title">OrderEZ</div>
        <div class="quote">{{ Inspiring::quote() }}</div>
    </div>
</div>


</body>
</html>


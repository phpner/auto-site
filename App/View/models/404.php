<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>error 404</title>
    <style>
        #error-404{
            position: relative;
            left: 50%;
            top: 50%;
            transform: translate(-50%,-50%);
            width: 61%;
            display: block;
        }
        #go-home{
            display: block;
            background: #5693b8;
            position: absolute;
            left: 50%;
            bottom: 0;
            font-size: 2rem;
            transform: translate(-50%);
            color: #fff;
            padding: 15px;
            border-radius: 14px;
            box-shadow: 0 0 16px 2px #161c65;
            min-width: 250px;
            text-align: center;
        }
        #go-home:hover{
            background: #477998;
        }
    </style>
</head>
<body style="height: 100vh">
<img id="error-404" src="/public/images/404.png" alt="">
<a id="go-home" href="/">На главную</a>
</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    *{
        padding: 0;
        margin: 0;
    }
    .box-wrapper{
        background: gainsboro;
        display: flex;
        width: 100%;
        height: 100vh;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
</style>
<body>

<div class="box-wrapper">
<h1><?php echo $errror; ?></h1>
    <a href="/">На главную</a>
</div>

</body>
</html>
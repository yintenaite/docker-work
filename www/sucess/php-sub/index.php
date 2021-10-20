<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="./../docker.png" sizes="16x16" type="image/png">
    <title>Docker安装成功</title>
</head>
<style>
    body {
        margin: 0;
        padding: 0;
    }

    .container {
        width: 100%;
        height: 300px;
        background: url("./../docker.png") no-repeat center;

    }

    .warp {
        margin-top: 30px;
    }
</style>
<body>
<div class="container"></div>
<div class="warp"><?php echo phpinfo() ?></div>
</body>
</html>

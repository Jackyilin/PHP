<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <base href="<?php echo site_url()?>">
</head>
<body>
    <form action="user/update/<?php echo $user->id ?>" method="post">
        用户名:<input type="text" name="username" value="<?php echo $user->name ?>">
        <input type="submit">
    </form>
</body>
</html>
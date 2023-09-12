<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="public/assets/css/style.css">
</head>

<body>
    <img src="assets/img/sh.jpg" width="200" alt="">


    <a href="/welcome">welcome</a>

    {{ $user }}
    {{ $password }}

    <br>
    <br>
    <br>

    <form action="/insert">
        name: <input type="text" name="name"><br>
        password: <input type="text" name="password"><br>

        <input type="submit" name="Submit">
    </form>
    <!-- <a href="/insert">Insert</a> -->
    <br><br>
    <form action="/delete">
        Delte By Id: <input type="number" name="id"><br>

        <input type="submit" name="Submit">
    </form>

    <br><br>
    <form action="/update">
        Update Name By Id: <input type="number" name="id"><br>
        <input type="text" name="name"><br>

        <input type="submit" name="Submit">
    </form>
    <br><br>

    <h1> <a href="/view">View all Data as JSON</a>
    </h1>
</body>

</html>
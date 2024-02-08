<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1> Testing 123</h1>
    <div style="border: 3px solid black;
    float: center;
    ">
        <h2>Register</h2>
        <form action="/register" method="post">
            @Csrf
            <input type="text" name="name" placeholder="name">
            <br>
            <br>
            <input type="text" name="email" placeholder="email">
            <br>
            <br>
            <input type="password" name="password" placeholder="password">
            <br>
            <br>
            <button style="
            color: green;
            width:90px;
            height:40px;
            ">Register</button>
        </form>




    </div>



</body>

</html>

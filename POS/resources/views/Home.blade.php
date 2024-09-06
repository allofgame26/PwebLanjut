<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <style>
        ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
    }
    </style>
</head>
<body>
    <ul>
        <li><a href="{{route('Home')}}">Home</a></li>
        <li><a href="news.asp">Penjualan</a></li>
        <li><a href="contact.asp">Product</a></li>
        <li><a href="{{route('user')}}">User</a></li>
      </ul>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../../public/css/main.css">
    <title>Products</title>
    <style>
        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }
        .container {
            width: 80%;
            margin-left: 10%;
        }
        nav {
            width: 100%;
            height: 30px;
        }
        nav ul {
            list-style-type: none;
        }
        nav li {
            display: inline-block;
        }
        nav li a {
            display: inline-block;
            font-size: 16px;
            padding: 7px;
        }
        article {
            width: 100%;
            margin-top: 50px;
        }
        table {
            border-collapse: collapse;
            text-align: center;
            font-size: 16px;
            padding: 5px;
        }
        td, th {
            width: 100px;
            height: 34px;
        }

    </style>
</head>
<body>
<div class="container">
    <form method="post">
        {{csrf_field()}}
        CateID:
        <select name="cateID">
            <option>{{$product->cateID}}</option>
            @foreach($cateIDs as $cateID)
                <option>
                    {{$cateID->id}}
                </option>
            @endforeach
        </select><br>
        Name : <input type="text" name="name" value="{{$product->name}}"><br>
        <button type="submit">Update</button>
    </form>
</div>
</body>
</html>
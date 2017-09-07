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
            <nav>
                <ul>
                    <li><a href="#">Category</a></li>
                    <li><a href="#">Product</a></li>
                </ul>
            </nav>
            <article>
                <table border="1">
                    <a href="{{route("product.add")}}">Add</a>
                    <tr>
                        <th>STT</th>
                        <th>CateID</th>
                        <th>Name</th>
                    </tr>
                    <?php $i=0;?>
                @foreach($products as $product)
                    <tr>
                        <td><?php echo ++$i;?></td>
                        <td>{{$product->cateID}}</td>
                        <td>{{$product->name}}</td>
                        <td><a href="{{route("product.edit",["id" => $product->id])}}">Edit</a></td>
                        <td><a href="{{route("product.delete", ["id" => $product->id])}}">Delete</a></td>
                    </tr>
                @endforeach
                </table>
            </article>
        </div>
    </body>
</html>
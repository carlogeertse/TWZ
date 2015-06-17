<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Show Hide Dropdown Using CSS</title>
    <style type="text/css">
        ul{
            padding: 0;
            list-style: none;
        }
        ul li{
            width: 100px;
            display: inline-block;
            position: relative;
            text-align: center;
            line-height: 21px;
        }
        ul li a{
            display: block;
            padding: 5px 10px;
            color: #333;
            background: #f2f2f2;
            text-decoration: none;
        }
        ul li a:hover{
            color: #fff;
            background: #939393;
        }
        ul li ul{
            display: none;
            position: absolute;
            z-index: 999;
            left: 0;
        }
        ul li:hover ul{
            display: block; /* display the dropdown */
        }
    </style>
</head>
<body>
<ul>
    <li><a href="#">Home</a></li>
    <li><a href="#">About</a></li>
    <li>
        <a href="#">Products &#9662;</a>
        <ul>
            <li><a href="#">Laptops</a></li>
            <li><a href="#">Monitors</a></li>
            <li><a href="#">Printers</a></li>
        </ul>
    </li>
    <li><a href="#">Contact</a></li>
</ul>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Vestibulum id metus ac nisl bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet sagittis. In tincidunt orci sit amet elementum vestibulum. Vivamus fermentum in arcu in aliquam. Quisque aliquam porta odio in fringilla. Vivamus nisl leo, blandit at bibendum eu, tristique eget risus. Integer aliquet quam ut elit suscipit, id interdum neque porttitor. Integer faucibus ligula.</p>
</body>
</html>                                		
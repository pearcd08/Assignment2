<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fish Food</title>
    <link href="css/stylesheet.css" rel="stylesheet" type="text/css">
    <script src="js/script.js"></script>
</head>
<body>

<div id="header">
    <img src="images/Header1.jpg.jpg">
    <div id="header">
    </div>
</div>

<div>
    <img class="rotate_01" src="images/yarn.png" style="background:transparent">
</div>

<div id="menu">
    <ul>
        <li><a href="Dog.php">Dog</a></li>
        <li><a href="Cat.php">Cat</a></li>
        <li><a href="Bird.php">Bird</a></li>
        <li><a class="active" href="Fish.php">Fish</a></li>
    </ul>
</div>


<div class="product">
    <img src="images/fish1.jpg">
    <p>$6.50 ea</p>
    <p>qty:<input class="qty" id="Fish1Qty" type="number">
        <button class="addBut" id="addFish1" onclick="addToCart(this)" price="5.50">Add to Cart</button>
    </p>
</div>

<div class="product">
    <img src="images/fish2.png">
    <p>$7.50 ea</p>
    <p>qty:<input class="qty" id="Fish2Qty" type="number">
        <button class="addBut" id="addFish2" onclick="addToCart(this)" price="6.50">Add to Cart</button>
    </p>
</div>

<div class="product">
    <img src="images/fish3.png">
    <p>$8.50 ea</p>
    <p>qty:<input class="qty" id="Fish3Qty" type="number">
        <button class="addBut" id="addFish3" onclick="addToCart(this)" price="7.50">Add to Cart</button>
    </p>
</div>

<td id="rightside">
    <p>Cart:</p>
    <div id="cartDiv"></div>
    <button id="showInvoiceBut">Invoice</button>
</td>
</tr>
</table>
</div>


<div id="voicePage" class="voice">


    <div id="voice-content">
        <span class="close">&times;</span>
        <p>Please check your invoice</p>
    </div>


</body>
<footer>
    <p>
        Petz Food Company, Auckland, New Zealand
    </p></footer>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cat Food</title>
    <link rel = "stylesheet" type = "text/css" href = "css/stylesheet.css" >
    <script src="js/script.js"></script>
    <div id = "header">
        <img src = "images/Header1.jpg.jpg">
        <div id = "header">
        </div></head>
    </div>

<body>

<div>
    <img class="rotate_01" src="images/yarn.png" style="background:transparent">
</div>


<div id = "menu">
    <ul>
        <li><a href="Dog.php">Dog</a></li>
        <li><a href="cat.html" class="active">Cat</a></li>
        <li><a href="Bird.php">Bird</a></li>
        <li><a href="Fish.php">Fish</a></li>
    </ul>
</div>

<div class="product">
    <img src="images/cat1.webp ">
    <p>$6.50 ea</p>
    <p>qty:<input class="qty" id="Cat1Qty" type="number">
        <button class = "addBut" id="addCat1" onclick="addToCart(this)" price="5.50">Add to Cart</button>
    </p>
</div>

<div class="product">
    <img src="images/catfood2.jpg">
    <p>$7.50 ea</p>
    <p>qty:<input class="qty" id="Cat2Qty" type="number">
        <button class = "addBut" id="addCat2" onclick="addToCart(this)" price="6.50">Add to Cart</button>
    </p>
</div>

<div class="product">
    <img src="images/cat3.webp">
    <p>$8.50 ea</p>
    <p>qty:<input class="qty" id="Cat3Qty" type="number">
        <button class = "addBut" id="addCat3" onclick="addToCart(this)" price="7.50">Add to Cart</button>
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
<footer>
    <p>
        Petz Food Company, Auckland, New Zealand
    </p></footer>
</html>
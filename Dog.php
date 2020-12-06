<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dog Food</title>
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
        <li><a href="Dog.php" class="active">Dog</a></li>
        <li><a href="cat.html">Cat</a></li>
        <li><a href="Bird.php">Bird</a></li>
        <li><a href="Fish.php">Fish</a></li>
    </ul>
</div>

<div class="product">
    <img src="images/dog1.webp ">
    <p>$6.50 ea</p>
    <p>qty:<input class="qty" id="Dog1Qty" type="number">
        <button class = "addBut" id="addDog1" onclick="addToCart(this)" price="5.50">Add to Cart</button>
    </p>
</div>

<div class="product">
    <img src="images/dog2.webp">
    <p>$7.50 ea</p>
    <p>qty:<input class="qty" id="Dog2Qty" type="number">
        <button class = "addBut" id="addDog2" onclick="addToCart(this)" price="6.50">Add to Cart</button>
    </p>
</div>

<div class="product">
    <img src="images/dog3.webp">
    <p>$8.50 ea</p>
    <p>qty:<input class="qty" id="Dog3Qty" type="number">
        <button class = "addBut" id="addDog3" onclick="addToCart(this)" price="7.50">Add to Cart</button>
    </p>
</div>
<td id="rightside">
    3
    <p>Cart:</p>
    <div id="cartDiv"></div>
    <button id="showInvoiceBut">Invoice</button>
</td>
</tr>
</table>
</div>

<!-- The Voice Page -->
<div id="voicePage" class="voice">

    <!-- Modal content -->
    <div id="voice-content">
        <span class="close">&times;</span>
        <p>Please check your invoice</p>
    </div>

</div>


</div>




</body>
<footer>
    <p>
        Petz Food Company, Auckland, New Zealand
    </p></footer>
</html>
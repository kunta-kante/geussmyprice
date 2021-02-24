<?php
$finialprice = 2000;
if(isset($_POST)){
if(isset($_POST['guess'])){
    $price = intval($_POST['guess']);


}


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
    
    <header>
        <img alt="logo du juste prix" src="logo.jpg" />
    </header>
    <main>
        <img src="whatch.jpg" alt="une belle montre de luxe" />
        <form action="guess.php" method="post">
            <div class="input-group">
                <label for="price">C'est combien ?</label>
                <span>$</span><input id="price" name="guess" />
            </div>
            <button type="submit">Valider</button>
<?php

if($price < $finialprice){
    echo "<p style=\"color:red\"> this $price is less than the price
    </p>";
}else if($price > $finialprice){
    echo "<p style=\"color:orange\"> this price is more than $price</p>";
}else if($price === $finialprice){
    echo "<p style=\"color:green\"> you have the right $price</p>";
}


?>

        </form>
    </main>
</body>
</html>
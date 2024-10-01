<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Błażej Miśtak">
    <title>Document</title>
</head>
<body>
    <nav>
        <h1>money calculator</h1>
    </nav>
    <main>
        <section class="money_usage">
            <span>Money calculator</span>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita, ullam reprehenderit maiores laboriosam quibusdam vitae excepturi delectus quisquam magnam? Magnam consequuntur cupiditate cum vitae, odit corporis possimus dicta laudantium ipsam!</p>
        </section>
        <section class="money_calculator">
            <form action="index.php" method="post">
                <input type="number" name="PLN500" placeholder="500 PLN"><br>
                <input type="number" name="PLN200" placeholder="200 PLN"><br>
                <input type="number" name="PLN100" placeholder="100 PLN"><br>
                <input type="number" name="PLN50" placeholder="50 PLN"><br>
                <input type="number" name="PLN20" placeholder="20 PLN"><br>
                <input type="number" name="PLN10" placeholder="10 PLN"><br>
                <input type="number" name="PLN5" placeholder="5 PLN"><br>
                <input type="number" name="PLN2" placeholder="2 PLN"><br>
                <input type="number" name="PLN1" placeholder="1 PLN"><br>
                <input type="number" name="PLN50gr" placeholder="0,50 PLN"><br>
                <input type="number" name="PLN20gr" placeholder="0,20 PLN"><br>
                <input type="number" name="PLN10gr" placeholder="0,10 PLN"><br>
                <input type="number" name="PLN5gr" placeholder="0,05 PLN"><br>
                <input type="number" name="PLN2gr" placeholder="0,02 PLN"><br>
                <input type="number" name="PLN1gr" placeholder="0,01 PLN"><br>
                <input type="submit" value="submit">
            </form>
        </section>
    </main>
    <aside></aside>
    <footer>
        <span>Author: Błażej Miśtak</span>
    </footer>
</body>
</html>

<?php 
    // setting variables value to null.
    $PLN500 = null;$PLN200 = null;$PLN100 = null;$PLN50 = null;$PLN20 = null;$PLN10 = null;$PLN5 = null;$PLN2 = null;$PLN1 = null;$PLN50gr = null;$PLN20gr = null;$PLN10gr = null;$PLN5gr = null;$PLN2gr = null;$PLN1gr = null;
    // setting variables value to user input.
    $PLN500 = $_POST['PLN500']; $PLN200 = $_POST['PLN200'];$PLN100 = $_POST['PLN100'];$PLN50 = $_POST['PLN50'];$PLN20 = $_POST['PLN20'];$PLN10 = $_POST['PLN10'];$PLN5 = $_POST['PLN5'];$PLN2 = $_POST['PLN2'];$PLN1 = $_POST['PLN1'];$PLN50gr = $_POST['PLN50gr'];$PLN20gr = $_POST['PLN20gr'];$PLN20gr = $_POST['PLN20gr'];$PLN10gr = $_POST['PLN10gr'];$PLN5gr = $_POST['PLN5gr'];$PLN2gr = $_POST['PLN2gr'];$PLN1gr = $_POST['PLN1gr'];
    //calculating total sum of money
    $PLNsum = null;
    $PLNsum = $PLN500* 500 + $PLN200* 200 + $PLN100* 100 + $PLN50* 50 + $PLN20* 20 + $PLN10* 10 + $PLN5* 5 + $PLN2* 2 + $PLN1* 1 + $PLN50gr* 0.5 + $PLN20gr* 0.2 + $PLN10gr* 0.1 + $PLN5gr* 0.05 + $PLN2gr* 0.02 + $PLN1gr* 0.01;
    echo "Suma wynosi {$PLNsum} PLN. <br>";
?>
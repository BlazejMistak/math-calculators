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
                <input type="number" value="PLN500" placeholder="500 PLN"><br>
                <input type="number" value="PLN200" placeholder="200 PLN"><br>
                <input type="number" value="PLN100" placeholder="100 PLN"><br>
                <input type="number" value="PLN50" placeholder="50 PLN"><br>
                <input type="number" value="PLN20" placeholder="20 PLN"><br>
                <input type="number" value="PLN10" placeholder="10 PLN"><br>
                <input type="number" value="PLN5" placeholder="5 PLN"><br>
                <input type="number" value="PLN2" placeholder="2 PLN"><br>
                <input type="number" value="PLN1" placeholder="1 PLN"><br>
                <input type="number" value="PLN50gr" placeholder="0,50 PLN"><br>
                <input type="number" value="PLN20gr" placeholder="0,20 PLN"><br>
                <input type="number" value="PLN10gr" placeholder="0,10 PLN"><br>
                <input type="number" value="PLN5gr" placeholder="0,05 PLN"><br>
                <input type="number" value="PLN2gr" placeholder="0,02 PLN"><br>
                <input type="number" value="PLN1gr" placeholder="0,01 PLN"><br>
                <input type="submit" name="money_submit">
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

    $PLN500 = null;$PLN200 = null;$PLN100 = null;$PLN50 = null;$PLN20 = null;$PLN10 = null;$PLN5 = null;$PLN2 = null;$PLN1 = null;$PLN50gr = null;$PLN20gr = null;$PLN10gr = null;$PLN5gr = null;$PLN2gr = null;$PLN1gr = null;

?>
<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <meta name="author" content="Błażej Miśtak">
    <title>Money calculator</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <nav>
        <h1>PLN calculator</h1>
    </nav>
    <section class="wrapped">
    <main>
        <section class="money-description">
            <span>Kalkulator PLN</span>
            <p>Wstaw odpowiednią liczbę banknotów lub monet w pole edycyjne. Po wprowadzeniu naciśnij przycisk "prześlij". Zwrócona zostanie suma pieniędzy. Nie należy podawać warości negatywnych oraz wartości niecałkowitych.</p>
        </section>
        <section class="money-calculator">
            <form action="index.php" method="post">
                <div class="input-container">
                    <label>500 PLN:</label>
                    <input type="number" name="PLN500" placeholder="ilość sztuk"><br>
                </div>
                <div class="input-container">
                    <label>200 PLN:</label>
                    <input type="number" name="PLN200" placeholder="ilość sztuk"><br>
                </div>
                <div class="input-container">
                    <label>100 PLN:</label>
                    <input type="number" name="PLN100" placeholder="ilość sztuk"><br>
                </div>
                <div class="input-container">
                    <label>50 PLN:</label>
                    <input type="number" name="PLN50" placeholder="ilość sztuk"><br>
                </div>
                <div class="input-container">
                    <label>20 PLN:</label>
                    <input type="number" name="PLN20" placeholder="ilość sztuk"><br>
                </div>
                <div class="input-container">
                    <label>10 PLN:</label>
                    <input type="number" name="PLN10" placeholder="ilość sztuk"><br>
                </div>
                <div class="input-container">
                    <label>5 PLN:</label>
                    <input type="number" name="PLN5" placeholder="ilość sztuk"><br>
                </div>
                <div class="input-container">
                    <label>2 PLN:</label>
                    <input type="number" name="PLN2" placeholder="ilość sztuk"><br>
                </div>
                <div class="input-container">
                    <label>1 PLN:</label>
                    <input type="number" name="PLN1" placeholder="ilość sztuk"><br>
                </div>
                <div class="input-container">
                    <label>0,50 PLN:</label>
                    <input type="number" name="PLN50gr" placeholder="ilość sztuk"><br>
                </div>
                <div class="input-container">
                    <label>0,20 PLN:</label>
                    <input type="number" name="PLN20gr" placeholder="ilość sztuk"><br>
                </div>
                <div class="input-container">
                    <label>0,10 PLN:</label>
                    <input type="number" name="PLN10gr" placeholder="ilość sztuk"><br>
                </div>
                <div class="input-container">
                    <label>0,05 PLN:</label>
                    <input type="number" name="PLN5gr" placeholder="ilość sztuk"><br>
                </div>
                <div class="input-container">
                    <label>0,02 PLN:</label>
                    <input type="number" name="PLN2gr" placeholder="ilość sztuk"><br>
                </div>
                <div class="input-container">
                    <label>0,01 PLN:</label>
                    <input type="number" name="PLN1gr" placeholder="ilość sztuk"><br>
                </div>
                <input type="submit" value="Prześlj" class="submit">
            </form>
            <?php
// Checking if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Setting variable values to user input or default to 0 if not set
    $PLN500 = isset($_POST['PLN500']) ? (int)$_POST['PLN500'] : 0;
    $PLN200 = isset($_POST['PLN200']) ? (int)$_POST['PLN200'] : 0;
    $PLN100 = isset($_POST['PLN100']) ? (int)$_POST['PLN100'] : 0;
    $PLN50  = isset($_POST['PLN50'])  ? (int)$_POST['PLN50']  : 0;
    $PLN20  = isset($_POST['PLN20'])  ? (int)$_POST['PLN20']  : 0;
    $PLN10  = isset($_POST['PLN10'])  ? (int)$_POST['PLN10']  : 0;
    $PLN5   = isset($_POST['PLN5'])   ? (int)$_POST['PLN5']   : 0;
    $PLN2   = isset($_POST['PLN2'])   ? (int)$_POST['PLN2']   : 0;
    $PLN1   = isset($_POST['PLN1'])   ? (int)$_POST['PLN1']   : 0;

    $PLN50gr  = isset($_POST['PLN50gr'])  ? (int)$_POST['PLN50gr']  : 0;
    $PLN20gr  = isset($_POST['PLN20gr'])  ? (int)$_POST['PLN20gr']  : 0;
    $PLN10gr  = isset($_POST['PLN10gr'])  ? (int)$_POST['PLN10gr']  : 0;
    $PLN5gr   = isset($_POST['PLN5gr'])   ? (int)$_POST['PLN5gr']   : 0;
    $PLN2gr   = isset($_POST['PLN2gr'])   ? (int)$_POST['PLN2gr']   : 0;
    $PLN1gr   = isset($_POST['PLN1gr'])   ? (int)$_POST['PLN1gr']   : 0;

    // Checking if user input is not negative
    if ($PLN500 < 0 || $PLN200 < 0 || $PLN100 < 0 || $PLN50 < 0 || $PLN20 < 0 || $PLN10 < 0 || $PLN5 < 0 || $PLN2 < 0 || $PLN1 < 0 || 
        $PLN50gr < 0 || $PLN20gr < 0 || $PLN10gr < 0 || $PLN5gr < 0 || $PLN2gr < 0 || $PLN1gr < 0) {
        echo "Wprowadzono nieprawidłową liczbę banknotów/monet. Liczba banknotów/monet nie może być mniejsza od 0.";
    } else {
        // Calculating the total sum of money
        $PLNsum = $PLN500 * 500 + $PLN200 * 200 + $PLN100 * 100 + $PLN50 * 50 + $PLN20 * 20 + $PLN10 * 10 + $PLN5 * 5 + $PLN2 * 2 + $PLN1 * 1 +
                  $PLN50gr * 0.5 + $PLN20gr * 0.2 + $PLN10gr * 0.1 + $PLN5gr * 0.05 + $PLN2gr * 0.02 + $PLN1gr * 0.01;

        echo "Suma wynosi {$PLNsum} PLN.<br>";
    }
} else {
    echo "Formularz nie został przesłany.";
}
?>
        </section>
    </main>
    <aside></aside>
    </section>
    <footer>
        <span>author: <a href="https://github.com/BlazejMistak">Błażej Miśtak</a></span>
    </footer>
</body>
</html>
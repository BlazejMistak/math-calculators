function calculate() {
  const pln500 = document.getElementById("PLN500").value;
  const pln200 = document.getElementById("PLN200").value;
  const pln100 = document.getElementById("PLN100").value;
  const pln50 = document.getElementById("PLN50").value;
  const pln20 = document.getElementById("PLN20").value;
  const pln10 = document.getElementById("PLN10").value;
  const pln5 = document.getElementById("PLN5").value;
  const pln2 = document.getElementById("PLN2").value;
  const pln1 = document.getElementById("PLN1").value;
  const gr50 = document.getElementById("PLN50gr").value;
  const gr20 = document.getElementById("PLN20gr").value;
  const gr10 = document.getElementById("PLN10gr").value;
  const gr5 = document.getElementById("PLN5gr").value;
  const gr2 = document.getElementById("PLN2gr").value;
  const gr1 = document.getElementById("PLN1gr").value;

  const total =
    pln500 * 500 +
    pln200 * 200 +
    pln100 * 100 +
    pln50 * 50 +
    pln20 * 20 +
    pln10 * 10 +
    pln5 * 5 +
    pln2 * 2 +
    pln1 * 1 +
    gr50 * 0.5 +
    gr20 * 0.2 +
    gr10 * 0.1 +
    gr5 * 0.05 +
    gr2 * 0.02 +
    gr1 * 0.01;

  window.alert("Total: " + total + " PLN");
}

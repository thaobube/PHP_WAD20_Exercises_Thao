console.log("je suis là, le script js");

console.log(document.getElementById("btnHello"));
console.log(document.getElementById("monH5"));

var btn = document.getElementById("btnHello");
btn.addEventListener("click", function () {
  console.log("on a clicqué sur moi!");
});

document.getElementById("monH5").addEventListener("mouseover", function () {
  console.log("on passe sur H5");
});

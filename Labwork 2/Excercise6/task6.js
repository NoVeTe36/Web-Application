document.addEventListener("DOMContentLoaded", function () {
    var divH1s = document.querySelectorAll("div > h1");

    divH1s.forEach(function (h1) {
        h1.style.backgroundColor = "red";
    });
});
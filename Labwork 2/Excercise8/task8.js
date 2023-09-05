document.addEventListener("DOMContentLoaded", function () {
    var field1 = document.getElementById("field1");
    var count = 0;
    field1.addEventListener("blur", function () {
        count++;
        document.getElementById("log").innerHTML = "Field 1 has been out of focus " + count + " times";
    });
});
function checkEmpty() {
    var firstNumber = document.getElementById("1stNumber").value;
    var secondNumber = document.getElementById("2ndNumber").value;
    if (firstNumber == "" || secondNumber == "") {
        alert("Please enter two numbers");
        return false;
    }
    return true;
}
$(document).ready(function(){
    $("#multiplyButton").click(function(){
        if (!checkEmpty()) return;
        var firstNumber = $("#1stNumber").val();
        var secondNumber = $("#2ndNumber").val();
        var result = firstNumber * secondNumber;
        $("#result").html("Result: " + result);
    });
    $("#divideButton").click(function(){
        if (!checkEmpty()) return;
        var firstNumber = $("#1stNumber").val();
        var secondNumber = $("#2ndNumber").val();
        var result = firstNumber / secondNumber;
        $("#result").html("Result: " + result);
    });
});
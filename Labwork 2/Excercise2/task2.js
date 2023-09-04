$(document).ready(function(){
    $("#getMaxNumberBtn").click(function(){
        var inputNumbers = $("#inputNumber").val().split(' ').map(Number);
        if (inputNumbers.length > 0) {
            var maxNumber = Math.max.apply(null, inputNumbers);
            $("#displayMaxNumber").html("Max number is: " + maxNumber);
        } 
        else {
            $("#displayMaxNumber").html("No valid numbers entered.");
        }
    });
});
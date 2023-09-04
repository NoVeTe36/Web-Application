$(document).ready(function(){
    $("#getMaxNumberBtn").click(function(){
        var inputNumbers = $("#inputNumber").val().split(' ').map(Number);
        if (inputNumbers.length > 0) {
            var maxNumber = Math.max.apply(null, inputNumbers);
            alert("Max number is: " + maxNumber);
        } 
        else {
            alert("Please enter at least one number");
        }
    });
});
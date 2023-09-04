$(document).ready(function(){
    for (let i = 1; i <= 15; i++) {
        if (i % 2 == 0) {
            $("#displayOddEven").append(i + " is even number <br>");
        } else {
            $("#displayOddEven").append(i + " is odd number <br>");
        }
    }
});
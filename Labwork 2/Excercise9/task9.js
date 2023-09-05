document.addEventListener("DOMContentLoaded", function () {
    var clickStartTime = null;
    var button = document.getElementById("clickButton");
    var log = document.getElementById("log");
    button.addEventListener("click", function () {
        if (clickStartTime === null) {

            clickStartTime = new Date().getTime();
        } 
        else {
            var clickEndTime = new Date().getTime();
            var timeDifference = clickEndTime - clickStartTime;
            timeDifference = timeDifference / 1000;
            log.textContent = "Time between clicks: " + timeDifference + " seconds";
            clickStartTime = null; // Reset the start time
        }
    });
});

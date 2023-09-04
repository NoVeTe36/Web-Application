$(document).ready(function() {
    $("#getWeatherBtn").click(function() {
        const temp = $("#tempInput").val();
        const type = $("#tempType").val();
        if (type == "celsius") {
            const tempInfo = `
                <p>Temperature: ${temp}°C / ${(temp * 1.8 + 32).toFixed(1)}°F</p>
            `;
            $("#weatherInfo").html(tempInfo);
        } else {
            const tempInfo = `
                <p>Temperature: ${temp}°F / ${((temp - 32) / 1.8).toFixed(1)}°C</p>
            `;
            $("#weatherInfo").html(tempInfo);
        }
    })
})
function loadTime(){
    console.log('Loading Time...');
    var xmlhttp = new XMLHttpRequest();
    var url = "calendar.php";

    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var message = JSON.parse(this.responseText).message;
            myFunction(message);
        }
    };
    xmlhttp.open("GET", url, true);
    xmlhttp.send();

    function myFunction(message) {
        document.getElementById("currentTime").innerHTML = message;
        console.log('Time Updated');
    }
}

setInterval(loadTime(), 1000);
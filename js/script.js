function getMaps(){
    var httpxml = new XMLHttpRequest();
    function stateck() {
        if(httpxml.readyState == 4){
            const obj = JSON.parse(httpxml.responseText);
            document.getElementById("map").src = "https://maps.google.com/maps?q="+obj.latitude+","+obj.longitude+"&output=embed";
        }
    }
    httpxml.onreadystatechange = stateck;
    httpxml.open("GET", "api.php", true);
    httpxml.send(null);
}

function getData(){
    var httpxml = new XMLHttpRequest();
    function stateck() {
        if(httpxml.readyState == 4){
            const obj = JSON.parse(httpxml.responseText);
            document.getElementById("ultrasonic").innerHTML = obj.ultrasonic + " %";
            document.getElementById("progress-bar").style.width = obj.ultrasonic+"%";
            document.getElementById("cairan_keluar").innerHTML = obj.cairan_keluar + " mL";
            if(obj.identifikasi == "0"){
                document.getElementById("identifikasi").innerHTML = "Aman";
            }
            else if(obj.identifikasi == "1"){
                document.getElementById("identifikasi").innerHTML = "Pencurian";
            }
            else if(obj.identifikasi == "2"){
                document.getElementById("identifikasi").innerHTML = "Bocor Valve";
            }
            else if(obj.identifikasi == "3"){
                document.getElementById("identifikasi").innerHTML = "Bocor Tangki";
            }
        }
    }
    httpxml.onreadystatechange = stateck;
    httpxml.open("GET", "api.php", true);
    httpxml.send(null);
}

setInterval(function() {
    getMaps();
}, 5000);

setInterval(function() {
    getData();
}, 1000);
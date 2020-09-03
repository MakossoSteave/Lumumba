function Achat() {
    var id = document.getElementById("Acheter").value;


    donne = [id]
    var xhr;

    if (window.XMLHttpRequest) { // Mozilla, Safari, ...
        xhr = new XMLHttpRequest();
        console.log("test")

    } else if (window.ActiveXObject) { // IE 8 and older
        console.log("teste")

        xhr = new ActiveXObject("Microsoft.XMLHTTP");
    }
    var data = "donne=" + donne
    console.log(donne);
    console.log(data)

    xhr.open("POST", "../Db/request/achat.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send(data);
    xhr.onreadystatechange = display_data;

    function display_data() {
        if (xhr.readyState == 4) {
            console.log("editions")

            if (xhr.status == 200) {
                console.log("teste2")

                document.getElementById("AchatExc").innerHTML = xhr.responseText;
            } else {
                alert('There was a problem with the request.');
            }
        }
    }
}

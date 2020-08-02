function appele() {
    var desc = document.getElementById("description").value;
    var img = document.getElementById("image").value;
    var heure = document.getElementById("heure").value;
    var prix = document.getElementById("prix").value;
    var createur = document.getElementById("prix").value;
    var xhr;
    var nom = document.getElementById("noms").value;

    donne = JSON.parse(desc, img, heure, prix, createur, nom)
    if (window.XMLHttpRequest) { // Mozilla, Safari, ...
        xhr = new XMLHttpRequest();
        console.log("test")

    } else if (window.ActiveXObject) { // IE 8 and older
        console.log("teste")

        xhr = new ActiveXObject("Microsoft.XMLHTTP");
    }
    var data = "donne" + donne
    console.log(donne);

    xhr.open("POST", "../Db/request/createformation.php", true);
    xhr.setRequestHeader("Content-Type", "json; charset=utf-8");
    xhr.send(data);
    xhr.onreadystatechange = display_data;

    function display_data() {
        if (xhr.readyState == 4) {
            console.log("teste1")

            if (xhr.status == 200) {
                console.log("teste2")

                document.getElementById("ter").innerHTML = xhr.responseText;
            } else {
                alert('There was a problem with the request.');
            }
        }
    }
}
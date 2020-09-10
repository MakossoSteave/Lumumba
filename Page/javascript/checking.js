function emailSearch() {
    console.log("okey");
    var dep = document.getElementById('mail').value;
    console.log(dep)
    var xhr;
    if (window.XMLHttpRequest) {
        xhr = new XMLHttpRequest();
    } else if (window.ActiveXObject) {
        xhr = new ActiveXObject("Microsoft.XMLHTTP");
    }
    var data = "Mail=" + dep;
    xhr.open("POST", "../Db/request/mailSearch.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send(data);
    xhr.onreadystatechange = display_data;

    function display_data() {
        console.log("t")
        if (xhr.readyState == 4) {
            console.log("e")
            if (xhr.status == 200) {
                console.log("r")
                document.getElementById("resultRecherche").innerHTML = xhr.responseText;
                console.log("y")
            } else {
                alert('There was a problem with the request.');
            }
        }
    }
}

function book_suggestion() {
    var book = document.getElementById("liste").value;
    var xhr;
    if (window.XMLHttpRequest) { // Mozilla, Safari, ...
        xhr = new XMLHttpRequest();
        console.log("test")

    } else if (window.ActiveXObject) { // IE 8 and older
        console.log("teste")

        xhr = new ActiveXObject("Microsoft.XMLHTTP");
    }
    var data = "book_name=" + book;
    xhr.open("POST", "../DB/request/recherche.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send(data);
    xhr.onreadystatechange = display_data;

    function display_data() {
        if (xhr.readyState == 4) {
            console.log("teste1")

            if (xhr.status == 200) {
                //alert(xhr.responseText);	   
                console.log("teste2")

                document.getElementById("marecherche").innerHTML = xhr.responseText;
            } else {
                alert('There was a problem with the request.');
            }
        }
    }
}
function connect_suggestion() {
    var book = document.getElementById("connec").value;
    var xhr;
    if (window.XMLHttpRequest) { // Mozilla, Safari, ...
        xhr = new XMLHttpRequest();
        console.log("test")

    } else if (window.ActiveXObject) { // IE 8 and older
        console.log("teste")

        xhr = new ActiveXObject("Microsoft.XMLHTTP");
    }
    var data = "book_name=" + book;
    xhr.open("POST", "../DB/request/recherche.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send(data);
    xhr.onreadystatechange = display_data;

    function display_data() {
        if (xhr.readyState == 4) {
            console.log("teste1")

            if (xhr.status == 200) {
                //alert(xhr.responseText);	   
                console.log("teste2")

                document.getElementById("dashboard").innerHTML = xhr.responseText;
            } else {
                alert('There was a problem with the request.');
            }
        }
    }
}
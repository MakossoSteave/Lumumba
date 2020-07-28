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
                    //alert(xhr.responseText);       
                document.getElementById("resultRecherche").innerHTML = xhr.responseText;
                console.log("y")
            } else {
                alert('There was a problem with the request.');
            }
        }
    }
}
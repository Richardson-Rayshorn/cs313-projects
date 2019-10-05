var app = document.getElementById("app");

var xmlhttp = new XMLHttpRequest();

xmlhttp.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200) {
        app.innerHTML =  this.responseText;
    }
}

xmlhttp.open("GET", "products.php", true);
xmlhttp.send();

function seeProduct(e) {
    alert(e.dataset.id);
}
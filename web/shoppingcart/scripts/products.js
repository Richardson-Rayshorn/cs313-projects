var app = document.getElementById("app");

var xmlhttp = new XMLHttpRequest();

xmlhttp.onreadystatechange = function()
{
    if(this.readyState == 4 && this.status == 200) 
    {
        app.innerHTML =  this.responseText;
    }
}

xmlhttp.open("GET", "products.php", true);
xmlhttp.send();

function seeProduct(e) 
{
    var s = e.dataset.id;
    xmlhttp.open("GET", "productview.php?q=" + s, true);
    xmlhttp.send();
}

function addCart(e)
{
    var name = document.getElementById("productname").value;
    var price = document.getElementById("price").value;
    var quantity = document.getElementById("quantity").value;

    alert(name + price + quantity);
    // xmlhttp.open("GET", "productview.php", true);
    // xmlhttp.send();
}
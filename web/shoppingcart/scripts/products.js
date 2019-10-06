var app = document.getElementById("app");
var anchor = document.querySelectorAll(".anchorTag");
var s;
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
    s = e.dataset.id;
    xmlhttp.open("GET", "productview.php?q=" + s, true);
    xmlhttp.send();
}

function navigation(e){
    var i = 0; 
    for(; i <= anchor.length; i++){
        if(anchor[i].id === e.id){
            xmlhttp.open("GET", e.id + ".php", true);
            xmlhttp.send();
            break;
        }
    }
}

function addCart()
{
    var name = document.getElementById("productname").innerHTML;
    var price = document.getElementById("price").innerHTML;
    var quantity = document.getElementById("quantity").value;

    if(typeof(Storage) !== "undefined") {
        if (sessionStorage.clickcount) {
        sessionStorage.clickcount = Number(sessionStorage.clickcount)+1;
        } else {
        sessionStorage.clickcount = 0;
        }
        var clickcounter = sessionStorage.clickcount;
    }
    xmlhttp.open("GET", "productview.php?q=" + s + "&x=" + clickcounter + "&prodname=" + name 
                    + "&price=" + price + "&quan=" + quantity, true);
    xmlhttp.send();

    // xmlcart.open("GET", "cart.php", true);
    // xmlcart.send();
}
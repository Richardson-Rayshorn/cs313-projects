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

function navigation(e)
{
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

    var pricefloat = parseFloat(price); 
    var quanInt = parseFloat(quantity);

    var actualPrice = parseFloat(pricefloat * quanInt);

    if(typeof(Storage) !== "undefined") 
    {
        if (sessionStorage.clickcount) 
        {
        sessionStorage.clickcount = Number(sessionStorage.clickcount)+1;
        } 
        else 
        {
        sessionStorage.clickcount = 0;
        }
        var clickcounter = sessionStorage.clickcount;
    }
    xmlhttp.open("GET", "productview.php?q=" + s + "&x=" + clickcounter + "&prodname=" + name 
                    + "&price=" + actualPrice + "&quan=" + quantity, true);
    xmlhttp.send();
}

function browse()
{
    xmlhttp.open("GET", "products.php", true);
    xmlhttp.send();
}

function order()
{
    xmlhttp.open("GET", "checkout.php", true);
    xmlhttp.send();
}

function validateMyForm(e)
{
    var fname = document.forms["checkout"]["first_name"].value;
    var lname = document.forms["checkout"]["last_name"].value;
    var email = document.forms["checkout"]["email"].value;
    var city = document.forms["checkout"]["city"].value;
    var country = document.forms["checkout"]["country"].value;
    var address = document.forms["checkout"]["address"].value;
    var number = document.forms["checkout"]["number"].value;
    
    xmlhttp.open("POST", "confirmation.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("fname=" + fname + "&lname=" + lname + "&email=" 
                    + email + "&city=" + city + "&country=" + country
                    + "&address=" + address + "&number=" + number);

    console.log(sessionStorage.clickcount);
}

function resetCount()
{
    if(typeof(Storage) !== "undefined") 
    {
        if (sessionStorage.clickcount) 
        {
            sessionStorage.clickcount = 0;
        }
    }

    console.log(sessionStorage.clickcount);
}
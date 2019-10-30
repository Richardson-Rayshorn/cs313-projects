$(document).ready(function(){
    $('#searchId').click(function(){
        var searchValue = $('#searchbox').val();
        alert(searchValue);

        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                window.location.assign("./business.php");
                xmlhttp.open("GET", "business.php?biz=" + searchValue, true);
                xmlhttp.send();
            }
          };

        xmlhttp.open("GET", "business.php?biz=" + searchValue, true);
        xmlhttp.send();
    });
});
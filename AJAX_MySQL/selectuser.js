var xmlHttp;
function showUser(str)
{
    xmlHttp=new XMLHttpRequest();
    if (xmlHttp==null)
    {
        alert ("Browser does not support HTTP Request");
        return
    }
    var url="getuser.php";
    url=url+"?q="+str;
    url=url+"&sid="+Math.random();
    xmlHttp.onreadystatechange=stateChanged;
    xmlHttp.open("GET",url,true);
    xmlHttp.send(null);
}

function stateChanged()
{
    if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
    {
        document.getElementById("txtHint").innerHTML=xmlHttp.responseText;
    }
}

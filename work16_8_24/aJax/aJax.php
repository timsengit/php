<html>
<head>
<script type="text/javascript">
function loadXMLDoc()
{
    var xmlhttp;
    var txt,x,i;
if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
    if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
        xmlDoc=xmlhttp.responseXML;
        txt="";
        x=xmlDoc.getElementsByTagName("title");
        for (i=0;i<x.length;i++)
      {
          txt=txt + x[i].childNodes[0].nodeValue + "<br />";
      }
        document.getElementById("myDiv").innerHTML=txt;
    }
}
xmlhttp.open("GET","http://timsite.yaochufa.com/php/work16_8_24/aJax/books.xml",true);
xmlhttp.send();
}
</script>
</head>

<body>

<h2>My Book Collection:</h2>
<div id="myDiv"></div>
<button type="button" onclick="loadXMLDoc()">获得我的图书收藏列表</button>

</body>
</html>

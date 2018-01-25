<?php
header("Content-type: text/css; charset: UTF-8");
include("../../config.php");
?>
#uvod{
background:white;
width:270px;
padding:20px;
border-radius:50px 20px;
margin:10px auto;
}
html {
background-image: url(<?php echo URL; ?>pub/images/background.jpg);
background-attachment:fixed;
background-position:center top;
background-repeat:no-repeat;
background-size:cover;
background-color:green;
}
body {
margin:0;
padding:0;
font-family: 'Open Sans', Arial, sans-serif;
font-size:14px;
}
h1,h2,h3,h4,h5,h6{
font-weight:normal;
margin:0.3em 0 0.5em 0;
}
h1 {font-size: 32px;}
h2 {font-size: 22px;}
h3 {font-size: 20px;}
h4 {font-size: 18px;}
h5 {font-size: 16px;}
h6 {font-size: 14px;}
a{
text-decoration:none;
}
a:link{
color:#00aa1fd;
}
a:visited{
color:#00aa1f;
}
a:hover{
color:gray;
}
a:active{
color:black;
}
img{
vertical-align:bottom;
}
#wrapper {
box-shadow:0 0 12px rgba(0,0,0,0.6);
width:960px;
padding:15px;
margin:10px auto;
background-color:#FFFFFF;
border-radius:5px;
}
#header {
background-color:green;
color:#FFF;
overflow: hidden;
margin-bottom: 15px;
padding:10px;
}
#main {
word-wrap:break-word;
float:left;
width:700px;
margin-right: 20px;
}
#adm {
background-color:#333333;
width:220px;
float:left;
margin:0 20px 0 0;
}
#amd{
clear:both;
text-align:center;
}
#adm ul{
margin:0;
padding:0;
list-style:none;
}
#adm ul li{
position:relative;
}
#adm ul li a{
padding:10px;
display:block;
height:20px;
}
#adm ul li a:link{
color:white;
transition:all 300ms ease;
}
#adm ul li a:visited{
color:white;
}
#adm ul li a:hover{
background:green;
transition:all 300ms ease;
}
#adm ul li a:active{
background:#999999;
color:#000000;
}
#navbar h2{
color:white;
font-weight:bold;
}
#navbar{
background:#333333;
float:left;
width:940px;
padding:10px;
margin:0 0 10px 0;
}
#navbar a:link{
color:white;
}
#navbar a:visited{
color:white;
}
#navbar a:hover{
color:#e8e9ea;
}
#navbar a:active{
color:#00aa1f;
}
#navbar ul{
list-style:none;
margin:0;
padding:0;
}
#navbar ul input{
float:right;
border-radius: 8px;
background:#333333;
font-weight:bold;
color:white;
border:0;
font-size:22px;
}
#navbar ul input:hover{
background:green;
transition:all 300ms ease;
}
#navbar ul input:active{
background:#999999;
color:#000000;
}
#navbar ul form{
position:relative;
padding:10px;
line-height: 50px;
vertical-align: middle;
text-align: center;
font-weight:bold;
}

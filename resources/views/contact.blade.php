<!DOCTYPE html>

<html>
<head>   
<title>Profile</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<style>
    
    body {
  background-color: #555;
  font-family: Tahoma, Verdana, Segoe, sans-serif;
}
#text {
  text-align: center;
  position: absolute;
  left: 0;
  top: 0;
  width: 270px;
  height: 600px;
  background-color: #555;
  -webkit-box-shadow: 8px 0px 6px -6px #000000;
  -moz-box-shadow: 8px 0px 6px -6px #000000;
  box-shadow: 8px 0px 6px -6px #000000;
}
p {
  position: relative;
  top: 250px;
}
#wheelExt {
  -webkit-box-shadow: 8px 6px 15px -6px #222222;
  -moz-box-shadow: 8px 6px 15px -6px #222222;
  box-shadow: 8px 6px 15px -6px #222222;
  position: absolute;
  top: 50px;
  height: 500px;
  width: 500px;
  border: 3px solid #333;
  border-radius: 50%;
}
#wheel {
  position: absolute;
  height: 500px;
  width: 500px;
  border-radius: 50%;
  background-color: #ccc;
  overflow: hidden;
}
#wheel div {
  position: absolute;
  left: 100px;
  bottom: -10px;
  -webkit-transform-origin: 50% 50%;
  -moz-transform-origin: 50% 50%;
  -ms-transform-origin: 50% 50%;
  -o-transform-origin: 50% 50%;
  transform-origin: 50% 50%;
  border-style: solid;
  border-width: 260px 150px;
  box-sizing: border-box;
}
#wheel div.color01 {
  -webkit-transform: rotate(0deg);
  -moz-transform: rotate(0deg);
  -ms-transform: rotate(0deg);
  -o-transform: rotate(0deg);
  transform: rotate(0deg);
  border-color: #662a6c transparent transparent transparent;
}
#wheel div.color02 {
  -webkit-transform: rotate(60deg);
  -moz-transform: rotate(60deg);
  -ms-transform: rotate(60deg);
  -o-transform: rotate(60deg);
  transform: rotate(60deg);
  border-color: #2381ad transparent transparent transparent;
}
#wheel div.color03 {
  -webkit-transform: rotate(120deg);
  -moz-transform: rotate(120deg);
  -ms-transform: rotate(120deg);
  -o-transform: rotate(120deg);
  transform: rotate(120deg);
  border-color: #639b47 transparent transparent transparent;
}
#wheel div.color04 {
  -webkit-transform: rotate(180deg);
  -moz-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  -o-transform: rotate(180deg);
  transform: rotate(180deg);
  border-color: #e1e23b transparent transparent transparent;
}
#wheel div.color05 {
  -webkit-transform: rotate(240deg);
  -moz-transform: rotate(240deg);
  -ms-transform: rotate(240deg);
  -o-transform: rotate(240deg);
  transform: rotate(240deg);
  border-color: #f7941e transparent transparent transparent;
}
#wheel div.color06 {
  -webkit-transform: rotate(300deg);
  -moz-transform: rotate(300deg);
  -ms-transform: rotate(300deg);
  -o-transform: rotate(300deg);
  transform: rotate(300deg);
  border-color: #9a1d34 transparent transparent transparent;
}
#wheel span {
  cursor: pointer;
  position: absolute;
  left: 370px;
  bottom: 225px;
  -webkit-transform-origin: -300% 0%;
  -moz-transform-origin: -300% 0%;
  -ms-transform-origin: -300% 0%;
  -o-transform-origin: -300% 0%;
  transform-origin: -300% 0%;
}
#wheel span.word {
  font-size: 20px;
  width: 40px;
  float: right;
}
#wheel span.word01 {
  top: 65%;
}
#wheel span.word02 {
  top: 85%;
  left: 40%;
}
#wheel span.word03 {
  top: 65%;
  left: 15%;
}
#wheel span.word04 {
  left: 13%;
  top: 35%;
}
#wheel span.word05 {
  left: 44%;
  top: 15%;
}
#wheel span.word06 {
  left: 70%;
  top: 35%;
}
#wheel:before {
  position: absolute;
  height: 450px;
  width: 450px;
  left: 25px;
  top: 25px;
  background-color: #222;
  border-radius: 50%;
  -webkit-transform-origin: 50px 150px;
  -moz-transform-origin: 50px 150px;
  -ms-transform-origin: 50px 150px;
  -o-transform-origin: 50px 150px;
  transform-origin: 50px 150px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  -o-user-select: none;
  user-select: none;
}
#wheel:before:hover {
  -webkit-transform: rotate(540deg);
  -moz-transform: rotate(540deg);
  -ms-transform: rotate(540deg);
  -o-transform: rotate(540deg);
  transform: rotate(540deg);
}







</style>
</head> 

<body >


<div id='wheelExt'>
  <div id="wheel">
    <div class="wheel_part color01"></div>
    <div class="wheel_part color02"></div>
    <div class="wheel_part color03"></div>
    <div class="wheel_part color04"></div>
    <div class="wheel_part word color05"></div>
    <div class="wheel_part word color06"></div>
    <span class="wheel_part w3-green word word01">Deen</span>
    <span class="wheel_part word word02">Momintum</span>
    <span class="wheel_part word word03">Projects</span>
    <span class="wheel_part word word04">Adventure</span>
    <span class="wheel_part word word05">Social</span>
    <span class="wheel_part word word06">Leadership</span>
  </div>
</div>













</body>
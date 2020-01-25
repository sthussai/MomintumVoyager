<!DOCTYPE html>

<html>

<head>

  <title>Laravel Bootstrap Datepicker</title>

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>

</head>

<body>



<div class="container">

    <h1>Laravel Bootstrap Datepicker</h1>

    <input class="date form-control" type="text">

</div>

<div class="w3-row-padding">
  <div class="w3-third">
    <input class="w3-input date w3-border" type="text" placeholder="One">
  </div>
  <div class="w3-third">
    <input class="w3-input date w3-border" type="text" placeholder="Two">
  </div>
  <div class="w3-third">
    <input class="w3-input date w3-border" type="text" placeholder="Three">
  </div>
</div>

<script type="text/javascript">

    $('.date').datepicker({  

       format: 'mm-dd-yyyy'

     });  

</script>  



</body>

</html>
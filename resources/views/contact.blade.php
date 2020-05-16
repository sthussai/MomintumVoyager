<html>

<head>
  <title>Ajax Example</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
  </script>

  <meta name="_token" content="{{ csrf_token() }}">
</head>

<body>
  <div id='msg'>This message will be replaced using Ajax.
    Click the button to replace the message.</div>

  <div class="w3-content">

    <div class="w3-border w3-bottombar">
      <input type="text" class="w3-input form-controller" id="search" name="search"></input>
    </div>


    <div id="results" class="w3-content">
      

  </div>


  <script>
    $('#search').on('keyup', function() {
      $value = $(this).val();
      $.ajax({
        type: 'get',
        url: '/search',
        data: {
          'search': $value
        },
        success: function(data) {
          $('#results').html(data);
        }
      });
    });
  </script>

  <script type="text/javascript">
    $.ajaxSetup({
      headers: {
        'csrftoken': '{{ csrf_token() }}'
      }
    });
  </script>

</body>

</html>
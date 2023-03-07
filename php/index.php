<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AS | page title </title>
  <!-- <script src="https://cdn.tailwindcss.com"></script> -->
  <link rel="stylesheet" href="../css/output.css">
  <script src="../js/jquery.min.js"></script>
  <script>
    $(function() {
    startRefresh();
    });

    function startRefresh() {
        setTimeout(startRefresh,5000);
        $.get('dashboard.php', function(data) {
            $('#display').html(data);    
        });
    }
  </script>
</head>


<body class="bgcolor">
<div id="display" >

</div>
</body>

</html>
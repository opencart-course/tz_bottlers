<?php require_once('params.php');?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
</head>
<body>


Доступная тара ящик по <?=$bigbox;?> бут., ящик <?=$mediumbox;?> бут., ящик <?=$minibox;?> бут.

<form id="bottles" method="post">
<input type="number" name="bottles" id="bottles" />
<input type="submit" name="box" id="box" value="box" />
</form>
<div id="result"></div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#bottles').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: 'app.php',
                data: $(this).serialize(),
                success: function(response)
                {
                    $('#result').html(response);
               }
           });
         });
    });
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WITHOUT REFRESH FETCH DATA</title>
</head>
<body>
    <div id="dt">
    </div>
    <script src="jquery.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        setInterval(function(){
            $('#dt').load('fetch.php');
        },-1000);
    });
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QrLink</title>
</head>
<body>
    <div>

        <form action="" method="Get">
            <input type="text" name="code">
            <input type="submit" value="generate" name="sent">
        </form><br><br><br>
<?php
if (isset($_GET["sent"])) {
    $codes = $_GET["code"];

};

    ?>

{!! QrCode::size('300')->generate($codes) !!}



    </div>
</body>
</html>ml

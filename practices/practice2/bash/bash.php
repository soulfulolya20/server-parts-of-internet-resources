<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bash</title>
    <style>
        .center {
            position: relative;
            top: 20%;
            text-align: center;
            background: #ffffff;
            color: #00a16b;
        }

        .title {
            color: #00a16b;
        }

        .bash {
            margin-top: 10%;
            font-size: 20pt;
            font-family: monospace;
        }
    </style>
</head>

<body class="center">
<?php
echo '<h1 class="title">Введите команду<h1>';
echo '<form><input name="cmd" /></form>';
?>
<div class="bash">
    <?php
    if (isset($_GET['cmd']))
        if ($_GET['cmd'] == 'ls' || $_GET['cmd'] == 'ps' || $_GET['cmd'] == 'whoami' || $_GET['cmd'] == 'id') {
            $output = shell_exec($_GET['cmd']);
            echo "<pre>$output</pre>";
        } else {
            echo "😡😡😡😡😡😡😡😡😡";
        }
    ?>
</div>
</body>

</html>

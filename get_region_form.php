<?php

include('get_region.php');

if (isset($_GET['post_code'])) {
    print('Region: ' . get_region($_GET['post_code']));
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form method="GET">
            <input type="text" name="post_code" placeholder="eg NW1 0AG" />
            <button type="submit">Get region</button>
        </form>
    </body>
</html>

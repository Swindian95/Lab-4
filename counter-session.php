<html>
    <head>
        <title>Counting with the SESSION array</title>
    <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/826287FF-9063-2346-AF5C-3F145EA3B91C/main.js" charset="UTF-8"></script></head>
    <body>
        <FORM action="counter-session.php" method="GET">
            <INPUT type="submit" name="Count" value="Count">
            <?php
            session_start();
            if (!isset($_SESSION['counter']))
                $count = 0;
            else
                $count = $_SESSION['counter'];
            $count = $count + 1;
            $_SESSION['counter'] = $count;
            echo "count is $count";
            ?>
        </FORM>

    </body>
</html>

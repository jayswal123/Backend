<?php
extract($_POST);
if (isset($save)) {
    if ($sp > $cp) {
        $p = $sp - $cp;
        $pp = ($p * 100) / $cp;
        $res = "Profit=" . $p;
    } else {
        $l = $cp - $sp;
        $lp = ($l * 100) / $cp;
        $res = "Loss=" . $l;
    }
}

?>

<html>

<head>
    <title>Profit and Loss</title>

</head>

<body>
    <form method="post" action="profitloss.php">

        Enter your Cost Price :
        <input type="number" name="cp" value="<?php echo @$cp; ?>" />
        <br>
        <br>

        Enter your Selling Price :
        <input type="number" name="sp" value="<?php echo @$sp; ?>" /><br>
        <br>
        <br>
        <input type="submit" name="save" value="Check" />

        Your Answer :
        <textarea readonly="readonly" disabled="disabled">
                <?php echo @$res; ?>
            </textarea>
    </form>
</body>

</html>
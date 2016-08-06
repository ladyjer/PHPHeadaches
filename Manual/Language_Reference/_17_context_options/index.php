<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
if (isset($_POST['nome'])) {
    ?>
    <h1><?= $_POST['nome']; ?></h1>
    <?php
}
?>
    <form method="post">
       <input name="nome" value=""/>
       <button type="submit" name="ok">Vai</button>
    </form>
</body>
</html>
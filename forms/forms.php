<?php
/** PHP Form Handling */
echo '<pre>';
echo '<h1>PHP Form Handling $_POST</h1>';
?>
<html>
<body>

<form action="../ancillary/welcome.php" method="post">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit">
</form>

<h1>PHP Form Handling $_GET</h1>

<form action="../ancillary/welcome_get.php" method="get">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit">
</form>

</body>
</html>

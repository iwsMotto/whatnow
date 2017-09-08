<?php
session_start();
?>
    <form action="one.php" method="post">
        Name: <input type="text" name="name"
                     placeholder="<?php echo isset($_SERVER['HTTP_REFERER']) ? 'gothttp' : 'nope'; ?>"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form><br>
<?php
?>
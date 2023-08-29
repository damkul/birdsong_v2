<?php
session_start();

require('./app/core/init.php');
$app = new App;
$app->loadController(); ?>

<!--
<!DOCTYPE html>
<html>
<body>
    <?php if ($isLoggedIn): ?>
        <p>Welcome, User!</p>
        <button id="editButton">Edit</button>
        <button id="deleteButton">Delete</button>
        <a href="?logout">Logout</a>
    <?php else: ?>
        <p>Please log in to edit or delete.</p>
        <a href="login.php">Login</a>
    <?php endif; ?>
    
    <script>
        // JavaScript to hide buttons if user is not logged in
        var editButton = document.getElementById("editButton");
        var deleteButton = document.getElementById("deleteButton");
        
        <?php if (!$isLoggedIn): ?>
            editButton.style.display = "none";
            deleteButton.style.display = "none";
        <?php endif; ?>
    </script>
</body>
</html> -->
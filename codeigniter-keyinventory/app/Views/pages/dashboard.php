<?php $session = session(); ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
    <?php
        echo "Welcome : ".$session->get('name');
        echo "<br><br>";
    ?>
    <p>
        To view available key inventory: <a href='./keys'>Click Here </a><br>
        To add a new key to the inventory: <a href='./keys/add'>Click Here </a><br>
        To view staff list: <a href='./staff'>Click Here </a><br>
        To add a new staff member: <a href='./staff/add'>Click Here </a><br>
        To view or edit key assignments: <a href='./keyassignment'>Click Here </a><br>
        To checkout a key to a staff member: <a href='./keyassignment/checkout'>Click Here </a><br>
    </p>    
</body>
</html>
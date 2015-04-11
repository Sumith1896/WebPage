<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8">
        <meta name="description" content="Sumith | Coder | Book Addict | IITB-CSE">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">

        <title>PHP Projects</title>

        <link rel="stylesheet" href="assets/css/projects.css">

        <link rel="shortcut icon" href="assets/img/icons/favicon.ico">

    </head>

    <body>
    <center><h1>PHP Projects</h1></center>
    <left><h3>Roommate-Finder</h3></left>
    <p>Project started by <a href="https://github.com/ranveeraggarwal">Ranveer</a> and <a href="https://github.com/abhijitt">Abhijit</a>. The initial backend of the program used to write data in a .txt file and then access it. I implemented PHP and MySQL support for the database management. The project is however not hosted due to lack of MySQL support in Gymkhana. Anyways, you can get the code <a href="https://github.com/ranveeraggarwal/roommate-finder">here</a> and run locally.</p>
    <br>
    <left><h3>EasyFill</h3></left>
    <p>Though strictly not a PHP project, I built a Python server using Flask as a part of a Android app for a hackathon. The Android(Java) was coded by <a href='https://github.com/udiboy1209'>Meet</a> and <a href='https://github.com/sprihabiswas'>Spriha</a>. I coded the backend with SQLite dependence. The code can be found <a href='https://github.com/Sumith1896/EasyFill'>here.</a></p>
    <br>
    <left><h3>Form validation:Self requests</h3></left>
    <p>Posting the below form to the same page using POST request.</p>
    <?php
    if(isset($_POST["foo"]))
    {
        echo "The form was submitted - you entered : " . $_POST["foo"];
    }
    else
    {
        echo "You haven't entered the details yet";
    }
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        Lorem Ipsum:
        <input type="text" name="foo" />
        <input type="submit" name="btnSendForm" value="Send" />
    </form>
    <br>
    <left><h3>php's mail()</h3></left>
    <p>Useful to get comments from user, for testing purposes the To area is also given to user here.</p>
    <?php
    if (isset($_REQUEST['email']))  {
    $admin_email = "sumith1896@gmail.com";
    $email = $_REQUEST['email'];
    $subject = $_REQUEST['subject'];
    $comment = $_REQUEST['comment'];
    mail($admin_email, "$subject", $comment, "From:" . $email);
          echo "Thank you for contacting us!";
    }
    else  {
    ?>

    <form method="post">
         Email: <input name="email" type="text" /><br />
         Subject: <input name="subject" type="text" /><br />
         Message:<br />
         <textarea name="comment" rows="15" cols="40"></textarea><br />
         <input type="submit" value="Submit" />
         </form>
    <?php
    }
    ?>
    </body>

</html>
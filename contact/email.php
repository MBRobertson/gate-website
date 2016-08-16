<?php include $_SERVER['DOCUMENT_ROOT'].'/app.php' ?>
<!DOCTYPE html>
<html>
    <head>
        <?php $app->template('htmlhead', ['title'=>'Email']) ?>
        <link rel="stylesheet" type="text/css" href="/CSS/Pages/nomination.css">
    </head>
    <body>
        <?php $app->template('nav', ['page'=>'Contact Us','subPage'=>'Email']); ?>
        <main>
            <h2>Email Us</h2>

        </main>
    </body>
</html>
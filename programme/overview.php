<?php include $_SERVER['DOCUMENT_ROOT'].'/app.php' ?>
<!DOCTYPE html>
<html>
    <head>
        <?php $app->template('htmlhead', ['title'=>'Overview']) ?>
        <!-- OVERVIEW CSS <link rel="stylesheet" type="text/css" href="/CSS/Pages/competitions.css">-->
    </head>
    <body>
        <?php $app->template('nav', ['page'=>'programme','subPage'=>'overview']); ?>
        <main>
            <h2>Programme Overview</h2>
            <section style="text-align:center; width: auto; max-width: 973px; min-width: 300px; margin: 0 auto; padding: 0;">
                <img src="/IMG/overview.png" style="max-width: 100%; margin: 0 auto;"/>
            </section>
            

        </main>
    </body>
</html>
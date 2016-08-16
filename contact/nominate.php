<?php include $_SERVER['DOCUMENT_ROOT'].'/app.php' ?>
<!DOCTYPE html>
<html>
    <head>
        <?php $app->template('htmlhead', ['title'=>'Nominate']) ?>
        <link rel="stylesheet" type="text/css" href="/CSS/Pages/nominate.css">
    </head>
    <body>
        <?php $app->template('nav', ['page'=>'Contact Us','subPage'=>'Nominate']); ?>
        <main>
            <h2>Nomination Form</h2>
            <form>
                <span class="formLine"><label for="studentName">Student Name: </label><input type="text" id="studentName"/></span>
                <span class="formLine"><label for="formClass">Student Form Class: </label><input type="text" id="formClass"/></span>
                <span class="formLine"><label for="studentTalent">Type of Talent/Gift: </label><input type="text" id="studentTalent"/></span>
                <span class="formLine"><label for="reason">Why do you believe this student is gifted? </label><textarea rows="8" id="reason"></textarea></span>
                <span class="formLine"><label for="nominatorName">Nominator's Name: </label><input type="text" id="nominatorName"/></span>
                <span class="formLine"><label for="nominatorContact">Nominator's Contact Details: </label><textarea rows="6" id="nominatorContact"></textarea></span>
                <span class="formLine"><input type="submit" value="Nominate"/></span>
            </form>
        </main>
    </body>
</html>
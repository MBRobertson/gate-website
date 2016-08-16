<?php include $_SERVER['DOCUMENT_ROOT'].'/app.php' ?>
<!DOCTYPE html>
<html>
    <head>
        <?php $app->template('htmlhead', ['title'=>'Home']) ?>
        <link rel="stylesheet" type="text/css" href="/CSS/Pages/index.css">
    </head>
    <body>
        <?php $app->template('nav', ['page'=>'home']); ?>
        <main>
            <section class="featured-box">Image is going here</section>
            <p>
                <span class="overclock">THE NATIONAL VISION is THE CAMBRIDGE HIGH SCHOOL VISION: </span>
                <span>gifted and talented learners are recognised, valued, and empowered to develop their exceptional abilities and qualities through equitable access to differentiated and culturally responsive provisions.</span>
                <span style="font-size: 8pt;">A National Overview: Gifted and Talented Students: Meeting their needs in New Zealand Schools, (Ministry of Education, 2012 p. 10)</span>
            </p>
            <p>
                <span class="overclock">DEFINITION: </span>
                <span>Cambridge High School defines gifted and talented students as those learners, whose potential, performance and/or thinking is at a level significantly beyond what might be expected when compared with most others of their age, experience and/or environment. They have the potential for outstanding performance and achievement in one or more of the following areas:</span>
                <ul>
                    <li>General intellectual ability</li>
                    <li>Specific academic aptitude</li>
                    <li>Creative and productive thinking</li>
                    <li>Leadership and interpersonal skills</li>
                    <li>Cultural knowledge and skills</li>
                    <li>Visual and performing arts</li>
                    <li>Physical and sporting ability</li>
                </ul>
            </p>
            <!--<p>
                Image of things 
            </p>-->
            <p>
                It is recognised that exceptional talents and abilities may be demonstrated through a student’s behaviour and responses, as well as by their actual performance at school. There are students who are less visible and therefore may be overlooked using traditional assessment processes, for example those who:
                <ul>
                    <li>belong to minority ethnic groups,</li>
                    <li>are English language learners,</li>
                    <li>have special needs – learning and/or physical, for example,</li>
                    <li>underachieve.pa</li>
                </ul>
            </p>
            
        </main>
    </body>
</html>

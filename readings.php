<?php include $_SERVER['DOCUMENT_ROOT'].'/app.php' ?>
<!DOCTYPE html>
<html>
    <head>
        <?php $app->template('htmlhead', ['title'=>'Further Reading']) ?>
        <link rel="stylesheet" type="text/css" href="/CSS/Pages/readings.css">
    </head>
    <body>
        <?php $app->template('nav', ['page'=>'further reading']); ?>
        <main>
            <h2>Further Reading</h2>
            <section class="reading-item">
                <span class="image-holder"><img alt="Andrew Solomon" src="/IMG/readings/andrewsolomon.png"/></span>
                <div class="reading-info">
                    <h3><a href="http://www.abc.net.au/local/stories/2014/05/20/4008150.htm">Andrew Solomon: parenting exceptional children</a></h3>
                    <p>Andrew Solomon spent a decade speaking with 300 parents raising children who are exceptional, unusual or difficult.</p>
                </div>
            </section>
            
            <section class="reading-item">
                <span class="image-holder"><img alt="Ero Report" src="/IMG/readings/ERO-Report.jpg"/></span>
                <div class="reading-info">
                    <h3><a href="http://www.ero.govt.nz/assets/Uploads/ERO-Gift-Talent-WEB.pdf">Schools’ Provision for Gifted and Talented Students</a></h3>
                    <p>This report presents the Education Review Office’s findings from an evaluation of schools’ provision for gifted and talented students. ERO evaluated the provision for gifted and talented students in 315 schools reviewed in Terms 3 and 4, 2007.</p>
                </div>
            </section>
            
            <section class="reading-item">
                <span class="image-holder"><img alt="Ero Report" src="/IMG/readings/Ind-Concepts.jpg"/></span>
                <div class="reading-info">
                    <h3><a href="http://www.aaegt.net.au/DEEWR%20Books/02%20Indig.pdf">Indigenous Conceptions of Giftedness</a></h3>
                    <p>Giftedness can be found amongst people from all cultural, ethnic and socio-economic groups. However, what is understood as giftedness, and how it is provided! for, can differ considerably between these groups.</p>
                </div>
            </section>
            
            <section class="reading-item">
                <span class="image-holder"><img alt="Ero Report" src="/IMG/readings/Ministry.jpg"/></span>
                <div class="reading-info">
                    <h3><a href="http://gifted.tki.org.nz/content/download/2358/13915/file/Gifted%20and%20talented%20students%20-%20meeting%20their%20needs%20in%20New%20Zealand%20Schools.pdf">Gifted and Talented Students</a></h3>
                    <p>Gifted and Talented Students: Meeting Their Needs in New Zealand Schools aims to support schools in assisting gifted and talented students to reach their full potential academically, emotionally, and socially.</p>
                </div>
            </section>
            
            <section class="reading-item">
                <span class="image-holder"><img alt="Ero Report" src="/IMG/readings/MaoriStudents.jpg"/></span>
                <div class="reading-info">
                    <h3><a href="http://www.nzcer.org.nz/nzcerpress/set/set-2012-no-2">Maori Education</a></h3>
                    <p>Tracing the birth of marae in schools.</p>
                </div>
            </section>
            
            <section class="reading-item">
                <span class="image-holder"><img alt="Ero Report" src="/IMG/readings/NzGatePolicy.jpg"/></span>
                <div class="reading-info">
                    <h3><a href="http://www.giftedchildren.org.nz/apex/vol-19-no-1/">New Zealand Journal of Gifted Education</a></h3>
                    <p>As a refereed journal, the aim of APEX is to disseminate essays, research reports and critical comments in the broad field of gifted and talented children.</p>
                </div>
            </section>
            
            <section class="reading-item">
                <span class="image-holder"><img alt="Ero Report" src="/IMG/readings/Blogtour.png"/></span>
                <div class="reading-info">
                    <h3><a href="http://nzcge.co.nz/Blogtour">Gifted Awarenesss Blog Tour</a></h3>
                    <p>Home of the New Zealand Gifted Awareness Blog tour. The blog tour runs in June each year to coincide with New Zealand's Gifted Awareness Week, this year June 13-19th. The  Blog Tour aligns each year with the theme of Gifted Awareness Week.</p>
                </div>
            </section>
        </main>
    </body>
</html>

<?php include $_SERVER['DOCUMENT_ROOT'].'/app.php' ?>
<!DOCTYPE html>
<html>
<head>
    <?php $app->template('htmlhead', ['title'=>'Honors Board']) ?>
    <link rel="stylesheet" type="text/css" href="/CSS/Pages/honorsBoard.css">
</head>
<body>
<?php $app->template('nav', ['page'=>'honors board']); ?>
<main>
    <h2>Honors Board</h2>
    <p id="subInfo">Students that have succeeded in the highest of achievements</p>
    <?php
    
    $loremIpsum = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam scelerisque tincidunt mi, et gravida urna venenatis eget. Vivamus lacinia massa non ex tincidunt interdum. Praesent in egestas erat, at consectetur quam. Vivamus volutpat imperdiet metus ut efficitur.";
    function award($name, $date, $desc) {
        ?>
            <article class="honorsBlock">
            <div class="honorsInfo">
                <span class="honorsName">
                    <?=$name ?>
                </span>
                <span class="honorsDate">
                    Date Awarded: <time><?=$date ?></time>
                </span>
            </div>
            <p class="honorsDesc">
                <?=$desc ?>
            </p>
        </article>
        <?php
    }
    ?>
    <section class="honorsRow">
        <?php 
            award("Megan Hemming", "August 2014", "Scholarship in German");
            award("Student Name", "10/03/2006", $loremIpsum); 
        ?>
    </section>
    <section class="honorsRow">
        <?php 
            award("Student Name", "10/03/2006", $loremIpsum); 
            award("Student Name", "10/03/2006", $loremIpsum); 
        ?>
    </section>
    <section class="honorsRow">
        <?php 
            award("Student Name", "10/03/2006", $loremIpsum); 
            award("Student Name", "10/03/2006", $loremIpsum); 
        ?>
    </section>
    <section class="honorsRow">
        <?php 
            award("Student Name", "10/03/2006", $loremIpsum); 
            award("Student Name", "10/03/2006", $loremIpsum); 
        ?>
    </section>
</main>
</body>
</html>
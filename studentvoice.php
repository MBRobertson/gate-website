<?php include $_SERVER['DOCUMENT_ROOT'].'/app.php' ?>
<!DOCTYPE html>
<html>
<head>
    <?php $app->template('htmlhead', ['title'=>'Student Voice']) ?>
    <script src="/JS/iedetect.js"></script>
    <script src="/JS/modernizr.js"></script>
    <link rel="stylesheet" type="text/css" href="/CSS/Pages/studentvoice.css">
</head>
<body>
<?php $app->template('nav', ['page'=>'student voice']); ?>
<main>
    <h2>Student Voice</h2>
    <p id="subInfo">Select a category to view student lists</p>
    <div class="card-container">
        <div class="card">
            <figure class="front">
                <div class="info-box" data-assoc="academicShow"><span>Academic</span></div>
                <img class="card-img" alt="Academic Success" src="IMG/academic.jpg">
            </figure>
            <figure class="back flippable mobileHidden academicShow">
                <h3>Academic</h3>
                <ul>
                    <?php
                    //Academic starts here
                    for ($i=0; $i < 12; $i++) {
                        ?>
                        <li class="student">
                            <img src="/IMG/students/student1.jpg" alt="Student">
                            <section class="info">
                                <span class="name">Students Name</span>
                                <div class="desc">
                                    <span class="blurb">They did something pretty darn neat!</span>
                                    <a href="#" class="link">More info...</a>
                                </div>
                            </section>
                        </li>
                        <?php
                    }
                    //Cultural ends here
                    ?>
                </ul>
                <div class="shadow"></div>
            </figure>
        </div>
    </div>
    <!-- Cultural -->
    <div class="card-container">
        <div class="card">
            <figure class="front">
                <div class="info-box" data-assoc="culturalShow"><span>Cultural</span></div>
                <img class="card-img" alt="Cultural Success" src="IMG/cultural.jpg">
            </figure>
            <figure class="back flippable mobileHidden culturalShow">
                <h3>Cultural</h3>
                <ul>
                    <?php
                    //Cultural starts here
                    for ($i=0; $i < 5; $i++) {
                        ?>
                        <li class="student">
                            <img src="IMG/students/student1.jpg" alt="Student">
                            <section class="info">
                                <span class="name">Students Name</span>
                                <div class="desc">
                                    <span class="blurb">They did something pretty darn neat!</span>
                                    <a href="#" class="link">More info...</a>
                                </div>
                            </section>
                        </li>
                        <?php
                    }
                    //Cultural ends here
                    ?>
                </ul>
                <div class="shadow"></div>
            </figure>
        </div>
    </div>
    <!-- Sport -->
    <div class="card-container">
        <div class="card">
            <figure class="front">
                <div class="info-box" data-assoc="sportingShow"><span>Sport</span></div>
                <img class="card-img" alt="Sporting Success" src="IMG/sport.jpg">
            </figure>
            <figure class="back flippable mobileHidden sportingShow">
                <h3>Sport</h3>
                <ul>
                    <?php
                    //Academic starts here
                    for ($i=0; $i < 3; $i++) {
                        ?>
                        <li class="student">
                            <img src="IMG/students/student1.jpg" alt="Student">
                            <section class="info">
                                <span class="name">Students Name</span>
                                <div class="desc">
                                    <span class="blurb">They did something pretty darn neat!</span>
                                    <a href="#" class="link">More info...</a>
                                </div>
                            </section>
                        </li>
                        <?php
                    }
                    //Cultural ends here
                    ?>
                </ul>
                <div class="shadow"></div>
            </figure>
        </div>
    </div>
</main>
<script>
    $(document).ready(function() {
        var ie = detectIE();
        //var ie = 10
        if (ie == false || ie >= 12) {
            $('.card-container').click(function() {
                $('.card').not($(this).find('.card')).removeClass('flipped');
                $(this).find('.card').toggleClass('flipped');
            });
        } else {
            $('.flippable').addClass('unflippable');
            $('.unflippable').removeClass('flippable').hide();
            $('.card-container').click(function()  {
                $(this).find('.card>figure').fadeToggle();
                if (!$(this).find('.card>figure').first().hasClass('toggled')) {
                    $('.toggled').fadeToggle().removeClass('toggled')
                }
                $(this).find('.card>figure').toggleClass('toggled')
            })
        }

        $('.info-box').click(function() {
            var assoc = $(this).data('assoc');
            //noinspection JSJQueryEfficiency
            if ($('.'+assoc).hasClass('mobileHidden')) {
                $('.back').addClass('mobileHidden');
                $('.'+assoc).removeClass('mobileHidden');
            }
            else {
                $('.back').addClass('mobileHidden');
            }
        });
    });
</script>
</body>
</html>
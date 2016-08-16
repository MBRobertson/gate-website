<?php include $_SERVER['DOCUMENT_ROOT'].'/app.php' ?>
<!DOCTYPE html>
<html>
    <head>
        <?php $app->template('htmlhead', ['title'=>'Competitions']) ?>
        <link rel="stylesheet" type="text/css" href="/CSS/Pages/competitions.css">
    </head>
    <body>
        <?php $app->template('nav', ['page'=>'programme','subPage'=>'competitions']); ?>
        <main>
            <h2>Active Competitions</h2>
            <section id="compList">
                <?php
                function competition($name, $desc) {
                    ?>
                    <article class="compBlock">
                        <h3 class="compName"><?=$name ?></h3>
                        <p class="compDesc"><?=$desc ?></p>
                        <a href="#" class="compEnter">More Info...</a>
                    </article>
                    <?php
                }
                competition("Canon Eyecon Competition", "The Canon EYECON Photography and Film competition is the ultimate opportunity to develop your style, gain experience and showcase your talent to leading industry professionals.");
                for ($i = 0; $i < 19; $i++) {
                    competition("Competition Name", "This is a really neat competition that you could probably enter.");
                }
                ?>
            </section>
            <!--TODO POPUP MODAL -->
            
        </main>
        <section class="modal">
            <section class="popup">
                    
            </section>
        </section>
        
        <script>
            /* global $ */
            hideModal();
            
            function showModal() {
                $('.modal').show();
            }
            
            function hideModal() {
                $('.modal').hide();
            }
            
            $(document).ready(function() {
                $('.modal').click(function(e) {
                    if (e.target !== this) return;
                    hideModal();
                });
                $('.compEnter').click(function() {
                    showModal();
                });
            });
        </script>
    </body>
</html>
<?php
function nav_addButton($title, $link, $current) {
    ?>
    <li class="navItem"><a class="navButton <?php if (strcasecmp($title, $current) == 0) echo('navActive'); ?>" href="<?=$link ?>"><span><?=$title ?></span></a></li>
    <?php
}
$DDID = -1;
function nav_addDropDown($title, $current, $content) {
    global $DDID;
    $DDID++
    ?>
    <li class="navItem"><span data-DDID="<?php echo((string)$DDID) ?>" class="navButton navDropDownButton <?php if (strcasecmp($title, $current) == 0) echo('navActive'); ?>">
            <span>
                <!--<div class="navExpandIcon"></div>--><?php echo($title . ' &#9660;'); ?>
            </span>
        </span>
        <section class="navDropDown navDropDownHidden DDID<?=$DDID ?>">
            <div class="navDropDownHolder">
                <span><?php echo($title) ?></span>
                <?php $content() ?>
            </div>
        </section>
    </li>
    <?php
}

function nav_addDropButton($title, $link, $current) {
?>
    <div class="navDropItem"><a class="navDropButton <?php if (strcasecmp($title, $current) == 0) echo('navDropActive'); ?>" href="<?=$link ?>"><span><?php echo($title); ?></span></a></div>
<?php
}

function draw_nav($arg, $app, $content)
{
    if (!isset($arg['subPage']))
        $arg['subPage'] = ''
    ?>
    <!-- Template Start -->
    <nav>
        <script>
        /* global $*/
            function hideDropDowns() {
                currentDropDown = -1;
                $('.navDropDown').addClass('navDropDownHidden');
            }

            var currentDropDown = -1;
            function showDropDown(id) {
                hideDropDowns();
                currentDropDown = id;
                $('.DDID'+id).removeClass('navDropDownHidden');
            }

            $(document).ready(function() {
                $('.navButton').click(function() {
                    if ($(this).hasClass('navDropDownButton')) {
                        var id = $(this).data("ddid");
                        if (id != currentDropDown)
                            showDropDown(id);
                        else
                            hideDropDowns();
                    } else {
                        hideDropDowns();
                    }
                });
                $('.menuButton').click(function() {
                    $('.menuButton').toggleClass('menuButtonToggled');
                    $('#navContainer').toggleClass('navContainerToggled');
                })
            })
        </script>
        <section id="navHolder">
            <header>
                <h1 id="mainHeaderImage"><span>GATE</span></h1>
            </header>
            <span class="menuButton mobileOnly"></span>
            <ul id="navContainer" class="navContainerToggled">
                <?php
                $ROOT = "/";
                nav_addButton("Home", $ROOT."index.php", $arg['page']);
                nav_addDropDown("Programme", $arg['page'], function() use ($arg, $ROOT) {
                    nav_addDropButton("Overview", $ROOT."programme/overview.php", $arg['subPage']);
                    nav_addDropButton("Scholarship", "#", $arg['subPage']);
                    nav_addDropButton("Competitions", $ROOT."programme/competitions.php", $arg['subPage']);
                });
                nav_addButton("Student Voice", $ROOT."studentvoice.php", $arg['page']);
                nav_addButton("Honors Board", $ROOT."honorsboard.php", $arg['page']);
                nav_addDropDown("Contact Us", $arg['page'], function() use ($arg, $ROOT) {
                    nav_addDropButton("Email", $ROOT."contact/email.php", $arg['subPage']);
                    nav_addDropButton("Nominate", $ROOT."contact/nominate.php", $arg['subPage']);
                    nav_addDropButton("Suggestion Box", "#", $arg['subPage']);
                });
                nav_addButton("Groups", "#", $arg['page']);
                nav_addButton("Further Reading", $ROOT."readings.php", $arg['page']);
                ?>
            </ul>
        </section>
    </nav>
    <!-- Template End -->
    <?php
}

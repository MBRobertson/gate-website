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
            <section class="featured-box"><div class="image-box image-load">Loading...</div></section>
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
                    <li>have special needs – learning and/or physical</li>
                </ul>
            </p>
            <script>
            /* global $ */
            
                function slide(contentFunc) {
                    var oldBox = $('.image-box')
                    var newBox = $('<div class="image-box image-box-pre"></div>').appendTo($('.featured-box'));
                    //Do stuff with new box
                    if (contentFunc) {
                        contentFunc(newBox);
                    }
                    
                    setTimeout(function() {
                        oldBox.addClass('image-box-post');
                        newBox.removeClass('image-box-pre');
                        setTimeout(function() {
                            oldBox.remove();
                        }, 930);
                    }, 10);
                    
                }
                
                function student(id, name, desc, pic) {
                    //var i = $('<img class="student-img" src="/IMG/students/' + pic + '" alt="' + name + '"/>');
                    var n = $('<h3 class="student-name">' + name + '</h3>');
                    var d = $('<p class="student-desc">' + desc + '</p>');
                    var c = $('<div class="student-container"></div>');
                    
                    c.append(n);
                    c.append(d);
                    
                    slide(function(content) {
                        //content.append(i);
                        content.append(c);
                        content.css("background-image", "url(/IMG/students/" + pic + ")");
                        
                        content.click(function() {
                            document.location.href=("/studentvoice.php#" + id)
                        });
                    });
                }
                
                var studentIndex = 0;
                function switchStudent() {
                    var s = students[studentIndex];
                    student(s.id, s.name, s.desc, s.img);
                    studentIndex++;
                    if (studentIndex >= students.length) {
                        studentIndex = 0;
                    }
                    var next = students[studentIndex];
                    if (next.preload === undefined) {
                        next.preload = new Image();
                        next.preload.src = ("/IMG/students/" + students[studentIndex].img);
                    }
                }
                
                var SWITCH_INTERVAL = 3750;
                var switcher;
                var students;
                
                $(document).ready(function() {
                    $.getJSON("RES/students.php", function(data) { 
                        students = data.students;
                        switchStudent();
                        switcher = setInterval(switchStudent, SWITCH_INTERVAL);
                    }).fail(function() { console.error("Failed to retrieve student data!") });
                    
                    /*$.getJSON("api/students.php", function(data) { 
                        students = data;
                        switchStudent();
                        switcher = setInterval(switchStudent, SWITCH_INTERVAL);
                    }).fail(function() { console.error("Failed to retrieve student data!") });*/
                
                });
            </script>
        </main>
    </body>
</html>

<!--
File Name: index.php - Contact Form
Date: 02/28/19
Programmer: Greg Khmara
-->

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Contact Form</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link href='http://fonts.googleapis.com/css?family=Changa+One|Open+Sans:400italic,700italic,400,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <header class="header">
        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
        <h1 id="logo"><a href="../index.html">ACE IN THE HOLE MULTISPORT EVENTS</a></h1>
        <ul class="menu">
            <li><a href="../index.html">Home</a></li>
            <li><a href="../courseDetails.html">Course Details</a></li>
            <li><a href="../registration/index.php">Registration</a></li>
            <li><a href="index.php">Contact Page</a></li>
            <li><a href="../faq.html">FAQ</a></li>
        </ul>
    </header>

    <main>
        <h2 class="formTitle">Contact Form</h2>
        <div class="container">
            <form class="contact-form" action="contactform.php" method="post">
                <div class="row">
                    <div class="col-75">
                        <input type="text" id="fname" name="name" placeholder="Full Name">
                    </div>
                </div>
                <div class="row">
                    <br>
                    <div class="col-75">
                        <input type="text" id="mail" name="mail" placeholder="E-Mail">
                    </div>
                </div>
                <div class="row">
                    <br>
                    <div class="col-75">
                        <textarea id="subject" name="comment" placeholder="Question or Comment" style="height:200px"></textarea>
                    </div>
                </div>
                <div class="row">
                    <br>
                    <div class="col-25">
                        <label for="subject">Please Choose One:</label>
                    </div>
                    <div class="col-75">
                        <input type="radio" name="type" value="Athlete"> Athlete<br>
                        <input type="radio" name="type" value="Volunteer"> Volunteer<br>
                        <input type="radio" name="type" value="Interested Party"> Interested Party<br>
                    </div>
                </div>
                <div class="row">
                    <br>
                    <input type="submit" name="submit" value="SEND MAIL">
                </div>
            </form>
        </div>

    </main>
    <footer class="grid-container">

        <section class="item1">
            <div class="footer_menu">
        <ul class="menu">
            <li><a href="../courseDetails.html">Course Details</a></li>
            <li><a href="registration/index.php">Registration</a></li>
            <li><a href="../contact/index.php">Contact Page</a></li>
            <li><a href="../faq.html">FAQ</a></li>
        </ul>
            </div>
        </section>

        <div class="section group" align="center">
            <div class="col span_1_of_3">
                <a class="twitter-timeline" data-width="270" data-height="350" data-theme="dark" href="https://twitter.com/pcccas222?ref_src=twsrc%5Etfw">Tweets by pcccas222</a>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
            <div class="col span_1_of_3">
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fcas222cascade%2F&tabs=timeline&width=270&height=350&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="270" height="350" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
            </div>

            <div class="col span_1_of_3 weatherSize">
                <a class="weatherwidget-io" href="https://forecast7.com/en/45d52n122d68/portland/?unit=us" data-label_1="PORTLAND" data-label_2="WEATHER" data-theme="dark">PORTLAND WEATHER</a>
                <script>
                    ! function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (!d.getElementById(id)) {
                            js = d.createElement(s);
                            js.id = id;
                            js.src = 'https://weatherwidget.io/js/widget.min.js';
                            fjs.parentNode.insertBefore(js, fjs);
                        }
                    }(document, 'script', 'weatherwidget-io-js');

                </script>
            </div>
        </div>

        <div align="center">&copy; 2019 Greg Khmara.</div>
    </footer>
</body>

</html>

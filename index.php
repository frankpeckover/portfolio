<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Francis Peckover</title>

        <link rel="stylesheet" href="frontend/styles/main.css">
        <link rel="stylesheet" href="frontend/styles/animations.css">
        <link rel="stylesheet" href="frontend/styles/projects.css">
        <link rel="stylesheet" href="frontend/styles/about.css">
        <link rel="stylesheet" href="frontend/styles/contact.css">
        <link rel="stylesheet" href="frontend/styles/responsive.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="shortcut icon" href="frontend/images/avatar.png">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
        <script src="frontend/js/main.js"></script>
    </head>
    
    <body>
        <!-- #region header-->
        <header id="header" class="header">
            <h2>Peckover</h2>
            <ul id="nav" class="nav">
                <a class="nav-link center" href="#home"><i class="fa fa-home"></i><p>Home</p></a>
                <a class="nav-link center" href="#about"><i class="fa fa-info"></i><p>About</p></a>
                <a class="nav-link center" href="#projects"><i class="fa fa-cogs"></i><p>Projects</p></a>
                <a class="contact-link rounded-border nav-link center" href="#contact"><i class="fa fa-envelope"></i><p>Contact</p></a>
            </ul>
        </header>

        <!-- #endregion -->

        <!-- #region home-->
        <div id="home" class="home window">
            <div style="grid-area: words;" class="home-text-div">
                <h2 style="animation: slideFromLeft 1500ms forwards;">Francis Peckover</h2>
                <p class="home-text" style="opacity: 0; animation: fadeIn 2000ms forwards 500ms;">I am a full stack web-developer, up to the challenge and ready building anything</p>
                <div>
                    <button onclick="document.getElementById('contact').scrollIntoView();"  class="call-to-action rounded-border">Contact</button>
                    <button onclick="document.getElementById('projects').scrollIntoView();" class="call-to-action call-to-action-main rounded-border">Projects</button>
                </div>
            </div>
            <div class="logo-div center" style="grid-area: logo;">
                <img class="logo" src="frontend/images/avatar.png" alt="logo">
            </div>
        </div>
        <!-- #endregion -->

        <!-- #region projects-->
        <div id="projects" class="projects seperator window center">
            <div class="section-title center">
                <h1 class="center">Projects</h1>
            </div>

            <?php
                $json = file_get_contents("frontend/js/projects.json");
                $projects = json_decode($json, true);
                foreach($projects as $project) {
                    echo
                    "<div class='card animated'>
                        <div class='content'>
                            <div class='card-front'>
                                <img class='card-img' src={$project["image"]} alt=''>
                            </div>
                            <div class='card-back'>
                                <h3>{$project["title"]}</h3>
                                <p>{$project["description"]}</p>
                                <div>";
                                foreach($project['tech'] as $tech) {
                                    echo "<p>$tech</p>";
                                };
                                echo 
                                "</div>
                                <div class='links'>";    
                                    if($project['link'] != '') {                         
                                        echo "<a href={$project['link']} target='_blank'><i class='fa fa-link'></i></a>";
                                    }
                                    if($project['github'] != '') {
                                        echo "<a href={$project['github']} target='_blank'><i class='fa fa-github'></i></a>";
                                    }
                                    echo "
                                </div>
                            </div>
                        </div>
                    </div>";
                };
            ?>            
        </div>
        <!-- #endregion -->

        <!-- #region about-->
        <div id="about" class="about seperator window center">
            <div class="section-title center">
                <h1 class="center">About</h1>
            </div>
            <img id='boyImg' class="animated avatar" style="grid-area: maleImg;" src="frontend/images/avatar.png" alt="boy">
            <p class="animated center about-text fill rounded-border" style="grid-area: maleText;">
                I am currently a university student studying a Bachelor of Information Technology with an 
                eager attitude towards learning anything IT. I have undertaken a few personal 
                projects in order to expand and refine my skills which can be found in the section 
                above. Feel free to drop me a message and let me know what you're thinking :)
            </p>
        </div>
        <!--#endregion-->

        <!-- #region contact-->
        <div id="contact" class="contact seperator window column">
            <div class="section-title center">
                <h1 class="center">Contact</h1>
            </div>
            <h2 class="animated" style="animation: grow 500ms forwards; margin-bottom: 5%; text-align: center">Let me know what you're thinking</h2>
            <form class="animated contact-form column" action="helper.php" method="post">
                <input class="form-element" type="text" name="name" placeholder="Name" required>
                <input class="form-element" type="email" name="email" placeholder="Email" required>
                <input class="form-element" type="text" name="subject" placeholder="Subject">
                <textarea style="height: 120px;" class="form-element" name="body" id="body" cols="30" rows="10" placeholder="Let me know what you're thinking" required></textarea>
                <button class="submit" type="submit" name="submit">Submit</button>
            </form>
        </div>
        <!-- #endregion -->

        <!-- #region footer-->
        <div class="seperator footer">
            <div style="grid-area: info;" class="info fill">
                <h3>Contact</h3>
                <p>peckover.francis@outlook.com</p>
                <p>Townsville 4812</p>
            </div>
            <div style="grid-area: socials;" class="socials center fill">
                <a href="https://facebook.com" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="https://instagram.com" target="_blank"><i class="fa fa-instagram"></i></a>
                <a href="https://github.com/frankpeckover" target="_blank"><i class="fa fa-github"></i></a>
                <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a>
            </div>
            <p class="center" style="grid-area: copyright;"><i class="center fa fa-copyright"></i> Website by Francis Peckover 2020. All rights reserved</p>
        </div>
        <!-- #endregion -->

    

    </body>
</html>
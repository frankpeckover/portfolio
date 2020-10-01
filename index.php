<!DOCTYPE html>
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
        <link rel="shortcut icon" href="frontend/images/female-avatar.png">
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
                <p class="home-text" style="opacity: 0; animation: fadeIn 2000ms forwards 500ms;">I am a self-taught programmer and web-developer. </p>
                <div class="justify-end">
                    <button onclick="document.getElementById('contact').scrollIntoView();"  class="call-to-action rounded-border">Contact</button>
                    <button onclick="document.getElementById('projects').scrollIntoView();" class="call-to-action call-to-action-main rounded-border">Projects</button>
                </div>
            </div>
            <div class="logo-div center" style="grid-area: logo;">
                <img class="logo" src="frontend/images/female-avatar.png" alt="logo">
            </div>
        </div>
        <!-- #endregion -->

        <!-- #region projects-->
        <div id="projects" class="projects seperator window center">
            <div class="section-title center">
                <h1 class="center">Projects</h1>
            </div>
            
            <div class="animated project rounded-border column">
                <div class="project-text column rounded-border">
                    <h2>Yahtzee</h2>
                    <h3>Description</h3>
                    <p>A simple score sheet for the dice game, Yahtzee</p>
                </div>
                <div class="project-img">
                    <img style="border: 1px solid black" class="fill rounded-border" src="frontend/images/yahtzee.png" alt="Image of the project">
                    <div class="overlay rounded-border center">
                        <a class="center" href="https://yahtzeescoresheet.herokuapp.com/" target="_blank"><i class="fa fa-link"></i></a>
                        <a class="center" href="https://github.com/frankpeckover/Yahtzee" target="_blank"><i class="fa fa-github"></i></a>
                    </div>
                </div>
                <div class="project-text rounded-border column">
                    <h3>Technologies</h3>
                    <ul>
                        <li>React</li>
                        <li>Node</li>
                        <li>Express</li>
                        <li>MongoDB</li>
                        <li>JavaScript</li>
                    </ul>
                </div>
            </div>
            <div class="animated project rounded-border column">
                <div class="project-text column rounded-border">
                    <h2>Overland Offshore</h2>
                    <h3>Description</h3>
                    <p>A blog site for an upcoming adventure company</p>
                </div>
                <div class="project-img">
                    <img style="border: 1px solid black" class="fill rounded-border" src="frontend/images/overlandoffshore.png" alt="Image of the project">
                    <div class="overlay rounded-border center">
                        <a class="center" href="https://overlandoffshore.herokuapp.com/" target="_blank"><i class="fa fa-link"></i></a>
                        <a class="center" href="https://github.com/frankpeckover/OverlandOffshore" target="_blank"><i class="fa fa-github"></i></a>
                    </div>
                </div>
                <div class="project-text rounded-border column">
                    <h3>Technologies</h3>
                    <ul>
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>JavaScript</li>
                        <li>Illustrator</li>
                    </ul>
                </div>
            </div>
            <div class="animated project rounded-border column">
                <div class="project-text column rounded-border">
                    <h2>Sorting and Searching</h2>
                    <h3>Description</h3>
                    <p>A basic visualisation of common searching and sorting algorithms</p>
                </div>
                <div class="project-img">
                    <img style="border: 1px solid black" class="fill rounded-border" src="frontend/images/sorting.gif" alt="Image of the project">
                    <div class="overlay rounded-border center">
                        <a class="center" href="https://sortingandsearching.herokuapp.com/" target="_blank"><i class="fa fa-link"></i></a>
                        <a class="center" href="https://github.com/frankpeckover/Sorting" target="_blank"><i class="fa fa-github"></i></a>
                    </div>
                </div>
                <div class="project-text rounded-border column">
                    <h3>Technologies</h3>
                    <ul>
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>JavaScript</li>
                        <li>Algorithms</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #endregion -->

        <!-- #region about-->
        <div id="about" class="about seperator window center">
            <div class="section-title center">
                <h1 class="center">About</h1>
            </div>
            <img id='boyImg' class="animated avatar" style="grid-area: maleImg;" src="frontend/images/female-avatar.png" alt="boy">
            <p class="animated center about-text fill rounded-border" style="grid-area: maleText;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex obcaecati laborum soluta quia magni 
                esse, quasi inventore, vitae quo aspernatur provident unde porro. Ab consectetur fugiat, perferendis laudantium vel molestiae aliquam 
                praesentium quod earum veritatis illum dignissimos suscipit dolore enim tenetur illo exercitationem obcaecati expedita eligendi accusamus 
                architecto necessitatibus! Perferendis.
            </p>
        </div>
        <!--#endregion-->

        <!-- #region contact-->
        <div id="contact" class="contact seperator window column">
            <div class="section-title center">
                <h1 class="center">Contact</h1>
            </div>
            <h2 class="animated" style="animation: grow 500ms forwards; margin-bottom: 5%;">Let me know what you're thinking</h2>
            <form class="animated contact-form column" action="../backend/contact.php" method="post">
                <input class="form-element" type="text" name="name" placeholder="Name" required>
                <input class="form-element" type="email" name="email" placeholder="Email" required>
                <input class="form-element" type="text" name="subject" placeholder="Subject">
                <textarea style="height: 120px;" class="form-element" name="description" id="description" cols="30" rows="10" placeholder="Let me know what you're thinking" required></textarea>
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
            <p class="center" style="grid-area: copyright;"><i class="center fa fa-copyright"></i> Website by Amalgam 2020. All rights reserved</p>
        </div>
        <!-- #endregion -->

    </body>
</html>
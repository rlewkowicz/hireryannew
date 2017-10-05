<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hire Ryan Today!</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/app.css">
    <script src="js/app.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body onorientationchange="updateOrientation();">
    <div class="site-wrapper">
        <div class="site-wrapper-upper">
          <h1 class="cover-heading">Ryan Lewkowicz</h1>
          <img src="media/ryan.png" class="img-circle img-responsive">
        </div>
        <div class="site-wrapper-lower">
          <div id="tabs">
            <ul class="nav info-nav">
              <li class="inactive"><a href="#menu3">My Projects</a></li>
              <li class="inactive"><a href="#menu1">My Card</a></li>
              <li class="inactive"><a href="#menu2">Resume</a></li>
              <li class="inactive"><a href="#menu4">The Old Site</a></li>
            </ul>
          </div>
        </div>
        <div class="tab-content">
          <div id="menu1">
            <div class='container'>
              <div class='single-item placeholder'>
                <img src="media/sd.jpeg" class="img-responsive">
              </div>
              <div class='single-item'>
                <img src="media/sd.jpegbak" class="img-responsive">
                <img src="media/lw.jpg" class="img-responsive">
              </div>
            </div>
          </div>
          <div id="menu2">
            <div class="resume-container">
              <div class="resume">
                <iframe src="https://docs.google.com/gview?url=https://drive.google.com/uc?id=0B96PbEXfu6sAUzFRcGUwb2dwS0drWTUxbF8yWFI2cEt1UjhF&embedded=true" frameborder="0"></iframe>
              </div>
            </div>
          </div>
          <div id="menu3">
            <div class="github-wrap">
              <a class="git-anchor" href="https://github.com/rlewkowicz">
                <img src="media/GitHub_Logo.png" class="img-responsive">
              </a>
            </div>
            <div class="row-one project">
              <div class="table">
                <h2>Mediawiki and Docker</h2>
                <h2>Jenkins CI/CD</h2>
              </div>
              <div class="table">
                <a href="http://binaryoasis.com:8000/">Project Compendium</a>
                <a href="http://jenkins.binaryoasis.com/">My Jenkins Builder</a>
              </div>
              <div class="table">
                <p>
                  Mediawiki is the world's largest enterprise wiki platform. It can be less than trivial to install only minus the fact that I've made it very easy. This is the project overview.
                </p>
                <p>
                  Jenkins is a swiss army knife of sorts used predominantly with CI/CD. I use it against a number of forked repos to keep my docker images up to date with the needed dependencies.
                </p>
              </div>
            </div>
            <div class="project" >
              <div class="table">
                <h2>Jupyter</h2>
                <h2>HireRyan.Today</h2>
              </div>
              <div class="table">
                <a href="http://nbviewer.jupyter.org/github/rlewkowicz/Jupyter/blob/6f794ff64d08b58fb4a006294982126c90e613cb/Housing%20vs%20Income.ipynb">Jupyter Notebook</a>
                <a href="http://HireRyan.Today/">HireRyan.Today</a>
              </div>
              <div class="table">
                <p>
                  Jupyter is science/data modeling platform built around python. This was just a little weekend project, but I like it. If you scroll to the bottom, you can see house prices vs income, adjusted for inflation. I could stand to normalize the data, but haven’t gotten back to it just yet. It’s plotted in plotly, a matlib analog.
                </p>
                <p>
                  This is the site you’re on right now! In its current implementation I really just needed a splash page for a little data analytics backend I built. Not to be cynical, but I don’t think people really take the time to review my work any ways. At the very least truly understand its value. Which is super ok though! People are busy. That’s why I made it easy to track my applications. With every submission I include a link to this site with a hash appended. It lets me know if someone viewed my cover letter, resume, etc. Alongside this, there’s a hyper brief questionnaire. Even if they don’t fill it, just clicking the link gives me some good info.
                </p>
              </div>
            </div>
          </div>
          <div id="menu4">
            <h3><a href="http://162.243.247.85/">The Old Site</a></h3>
            <p>
The old site gets its own tab because I really like it. The objective of the old site was to make it so people could have an interview with me, without me. You’d click on various headings, and I’d have a write up as well as a video. Same as the current site, it’s all from scratch in Laravel. I’ve discontinued it because I’m going for a different image. The last one was intentionally playful while the current one is rather dry. I also had gotten some feedback that I came across as erratic. Along side me being fairly eccentric in general, I was unemployed for the first time in 7 years, I was in a weird place. I’m sure the feedback was valid. Under the hood the site utilized BEM and the 7-1 model. Going back and snagging snippets was a breeze. Some of the CSS was kinda gross, but it’s 100% custom. If nothing else, the organization was gorgeous.             </p>
            {{-- <iframe class="old-site" src="http://162.243.247.85"></iframe> --}}
        </div>
      </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
  </body>
</html>

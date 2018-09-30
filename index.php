<?php include('email_form.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Product demo for potential investors.">
  <meta name="author" content="Ashley Singleton">

  <title>AR BOOKS</title>
  <!-- Core CSS -->
  <link href="css/style.css" rel="stylesheet">
  <!-- Device Mockup -->
  <link href="device-mockups/device-mockups.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>

<body>
  <nav class="main-nav">
    <div class="logo">AR Books</div>
    <div class="menu-bar-wrapper" onclick="openMenu(this)">
      <div class="menu-bar bar1"></div>
      <div class="menu-bar bar2"></div>
      <div class="menu-bar bar3"></div>
    </div>
    <ul id="mobile-display" class="menu-hidden">
      <li class="nav-item"><a href="#mission">Mission</a></li>
      <li class="nav-item"><a href="#story-book">Story Book</a></li>
      <li class="nav-item"><a href="#story-book">Goal</a></li>
      <li class="nav-item"><a href="#story-book">Coloring Book</a></li>
      <li class="nav-item"><a href="#story-book">Team Members</a></li>
      <li class="nav-item"><a href="#story-book">Contact Us</a></li>
    </ul>
    <ul id="menu-display">
      <li class="nav-item"><a href="#mission">Mission</a></li>
      <li class="nav-item"><a href="#story-book">Story Book</a></li>
      <li class="nav-item"><a href="#story-book">Goal</a></li>
      <li class="nav-item"><a href="#story-book">Coloring Book</a></li>
      <li class="nav-item"><a href="#story-book">Team Members</a></li>
      <li class="nav-item"><a href="#story-book">Contact Us</a></li>
    </ul>
  </nav>
  <header>
    <div class="book-wrapper">
      <div class="text-wrapper">
        <h3 class="lighter-text grey-text">New Type of Pop Up Book</h3>
        <p class="gold-text">Learn More</p>
        <a href="#mission"><i class="fas fa-chevron-circle-down gold-text bounce"></i></a>
      </div>
      <div class="book-image-wrapper"><img class="book" src="img/header-book.png" /></div>
      <div class="device-wrapper">
        <div class="mission-device device-container animate-bottom">
          <div class="device-mockup iphone6_plus portrait gold">
            <div class="device">
              <div class="screen fade">
                <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                <img src="img/justme.png" class="img-fluid" alt="">
                <button class="play-button" onclick="toggleMissionVideo()"><i class="far fa-play-circle"></i></button>
                <video class="missionbook-video display-none" width="232" height="131">
                  <source src="video/storybook-video.mp4" type="video/mp4">
                </video>
              </div>
              <div class="button">
                <!-- You can hook the "home button" to some JavaScript events or just remove it -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <section id="mission">
    <div class="content padding-left">
      <div class="two-third whole-m">
        <h1 class="purple-text">Our Mission</h1>
        <p class="gold-text lighter-text">
          Bilingual picture books which apply augmented reality (AR).
          This message is for the children who will live as the next generation and also seek to understanding the diversity of culture, importance of sharing experiences and belongings, awareness of curiosity and cultivating the ability of
          communication with others.
        </p>
      </div>
      <div class="third whole-m">
        <div class="alligator-wrapper">
          <img class="alligator" src="img/alligator.png"/></div>
        </div>
    </div>
  </section>
  <section id="story-book" class="pink-bg">
    <h2 class="pink-text lighter-text">Story Book</h2>
    <div class="content padding-both">
      <div class="third center-text whole-m">
        <i class="fas fa-book"></i>
        <p>Encourage vocabulary building</p>
        <i class="fas fa-video"></i>
        <p>Help children to learn Japanese and English with audio and video</p>
        <i class="fas fa-book-reader"></i>
        <p>Help children to build confidence through learning</p>
      </div>
      <div class="relative">
        <div class="storybook-wrapper"><img class="book" src="img/storybook.png"/></div>
        <div class="device-wrapper">
          <div class="story-device device-container">
            <div class="device-mockup iphone6_plus portrait gold">
              <div class="device">
                <div class="screen">
                  <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                  <img src="img/story-book-iphone.png" class="img-fluid" alt="">
                  <button class="play-button" onclick="toggleStoryVideo()"><i class="far fa-play-circle"></i></button>
                  <video class="storybook-video display-none" width="232" height="131">
                    <source src="video/storybook-video.mp4" type="video/mp4">
                  </video>
                </div>
                <div class="button">
                  <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="third center-text whole-m">
        <i class="fas fa-flag"></i>
        <p>Introduce children to different cultures</p>
        <i class="fas fa-palette"></i>
        <p>Cultivate curiosity through a colorful story</p>
        <i class="fas fa-brain"></i>
        <p>Use AI to facilitate a new kind of reading experience</p>
      </div>
    </div>
  </section>
  <section id="goals">
    <div class="content">
      <div class="third whole-m">
        <h1 class="purple-text center-text">Our Goals</h1>
        <div class="bird-wrapper">
          <img class="bird" src="img/bird.png"/>
        </div>
      </div>
      <div class="two-third whole-m">
        <p class="leaves-border gold-text lighter-text">
          We would love to create the value when the tradition and culture is combined with the efficiency of present. Also we would love to persist it as our basic missions of this project. Growing up by time to time.
        </p>
      </div>
    </div>
  </section>
  <section id="coloring-book" class="purple-bg">
    <h2 class="dark-purple-text lighter-text">Coloring Book</h2>
    <div class="content padding-both">
      <div class="third center-text whole-m">
        <i class="fas fa-book"></i>
        <p>Introducing a new kind of coloring book to encourage creativity!</p>
        <i class="far fa-eye"></i>
        <p>Color in a page and watch your creations come to life.</p>
      </div>
      <div class="relative">
        <div class="storybook-wrapper"><img class="book" src="img/coloring-book.png"/></div>
        <div class="device-wrapper">
          <div class="coloring-device device-container">
            <div class="device-mockup iphone6_plus portrait gold">
              <div class="device">
                <div class="screen">
                  <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                  <img src="img/coloring-book-iphone.png" class="img-fluid" alt="">
                  <button class="play-button" onclick="toggleColoringVideo()"><i class="far fa-play-circle"></i></button>
                  <video class="coloringbook-video display-none" width="232" height="131">
                    <source src="video/coloringbook-video.mp4" type="video/mp4">
                  </video>
                </div>
                <div class="button">
                  <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="third center-text whole-m">
        <i class="far fa-images"></i>
        <p>Colored images will appear on your device in 3d.</p>
        <i class="fas fa-palette"></i>
        <p>Use your colorful creations as your own stickers (emoji) to customize your messages!</p>
      </div>
    </div>
  </section>
  <section id="team-members" class="team-members">
    <h1 class="purple-text center-text">Team Members</h1>
    <div class="content padding-both">
      <div class="third whole-m">
        <div class="circle-image kyoko">
          <img src="img/kyoko.png"/>
          <span>We apply AR technology to picture books to provide new possibilities for young readers and parents. These AR books allow young children to listen to a story while learning to read, and they can choose to listen in either English or Japanese.  The AR technology also allows readers to watch videos related to the story, bringing characters and scenarios from the page to life. We developed this project with the idea to make a new type of pop up book. We use a convenient AR application available on smartphones and tablets, using both the written word and audio visual materials to develop reading skills and to facilitate language learning in a way that is fun for children and parents. </span>
        </div>
        <h4 class="dark-purple-text">Kyoko Lyons <br /> <i class="lighter-text">Founder</i></h4>
      </div>
      <div class="third whole-m">
        <div class="circle-image itsumi">
          <img src="img/itsumi.png"/>
          <span>Some text</span>
        </div>
        <h4 class="dark-purple-text">Itsumi Fukuda <br /> <i class="lighter-text">Position</i></h4>
      </div>
      <div class="third whole-m">
        <div class="circle-image natalia">
          <img src="img/natalia.png"/>
          <span>Some text</span>
        </div>
        <h4 class="dark-purple-text">Natalia La Fay <br /> <i class="lighter-text">Artist</i></h4>
      </div>
    </div>
  </section>
  <section id="contact" class="contact">
    <h2 class="pink-text center-text lighter-text">Contact Us</h2>
    <form role="form" method="post" action="<?= $_SERVER['PHP_SELF']; ?>">
      <div class="form-row content padding-both">
        <div class="half padding-5 whole-m">
          <input type="text" class="form-control" placeholder="Name" name="name" value="<?= $name ?>">
          <span class="error"><?= $name_error ?></span>
          <input type="text" class="form-control" placeholder="Email" name="email" value="<?= $email ?>">
          <span class="error"><?= $email_error ?></span>
          <input type="text" class="form-control" placeholder="Phone" name="phone" value="<?= $phone ?>">
          <span class="error"><?= $phone_error ?></span>
          <p class="antispam">Leave this empty: <input type="text" name="url"></p>
        </div>
        <div class="half padding-5 whole-m">
          <textarea class="form-control" rows="8" type="text" placeholder="Please leave a detailed message." name="message"><?= $message ?></textarea>
          <button type="submit" class="btn">SUBMIT</button>
          <span class="success"><?= $success; ?></span>
        </div>
      </div>
    </form>
  </section>
  <script src="js/script.js"></script>
</body>

</html>

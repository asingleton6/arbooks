<?php include('email_form.php'); ?>
<?php include('cache_refresh.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Product demo for potential investors.">
  <meta name="author" content="Ashley Singleton">

  <title>AR Books</title>
  <!-- Core CSS -->
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo auto_version('/css/style.css'); ?>" type="text/css" />
  <!-- Device Mockup -->
  <link href="device-mockups/device-mockups.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Open+Sans" rel="stylesheet">
</head>

<body>
  <nav class="main-nav">
    <div class="logo">AR Books</div>
    <div class="language-wrapper">
      <button class="language" onclick="englishTranslate()">Eng</button>
      <button class="language" onclick="japaneseTranslate()">Jap</button>
    </div>
    <div class="menu-bar-wrapper" onclick="openMenu(this)">
      <div class="menu-bar bar1"></div>
      <div class="menu-bar bar2"></div>
      <div class="menu-bar bar3"></div>
    </div>
    <ul id="mobile-display" class="menu-hidden english">
      <li class="nav-item"><a href="#mission">Mission</a></li>
      <li class="nav-item"><a href="#story-book">Story Book</a></li>
      <li class="nav-item"><a href="#goals">Goals</a></li>
      <li class="nav-item"><a href="#coloring-book">Coloring Book</a></li>
      <li class="nav-item"><a href="#team-members">Team Members</a></li>
      <li class="nav-item"><a href="#contact">Contact Us</a></li>
    </ul>
    <ul id="mobile-display" class="menu-hidden display-none japanese">
      <li class="nav-item"><a href="#mission">使命</a></li>
      <li class="nav-item"><a href="#story-book">絵本</a></li>
      <li class="nav-item"><a href="#goals">ねらい</a></li>
      <li class="nav-item"><a href="#coloring-book">塗り絵本</a></li>
      <li class="nav-item"><a href="#team-members">メンバー</a></li>
      <li class="nav-item"><a href="#contact">お問い合わせ</a></li>
    </ul>
    <ul id="menu-display" class="english">
      <li class="nav-item"><a href="#mission">Mission</a></li>
      <li class="nav-item"><a href="#story-book">Story Book</a></li>
      <li class="nav-item"><a href="#goals">Goals</a></li>
      <li class="nav-item"><a href="#coloring-book">Coloring Book</a></li>
      <li class="nav-item"><a href="#team-members">Team Members</a></li>
      <li class="nav-item"><a href="#contact">Contact Us</a></li>
    </ul>
    <ul id="menu-display" class="display-none japanese">
      <li class="nav-item"><a href="#mission">使命</a></li>
      <li class="nav-item"><a href="#story-book">絵本</a></li>
      <li class="nav-item"><a href="#goals">ねらい</a></li>
      <li class="nav-item"><a href="#coloring-book">塗り絵本</a></li>
      <li class="nav-item"><a href="#team-members">メンバー</a></li>
      <li class="nav-item"><a href="#contact">お問い合わせ</a></li>
    </ul>
  </nav>
  <header>
    <div class="book-wrapper">
      <div class="text-wrapper">
        <h3 class="lighter-text grey-text english">New Type of Pop Up Book</h3>
        <h3 class="lighter-text grey-text display-none japanese">新しい形の仕掛け絵本</h3>
        <p class="gold-text english">Learn More</p>
        <p class="gold-text display-none japanese">詳しく知る</p>
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
    <div class="content padding-left padding-both-m">
      <div class="half whole-m">
        <h1 class="purple-text english">Our Mission</h1>
        <h1 class="purple-text display-none japanese">私たちの使命</h1>
        <p class="gold-text bold-text english">
          We create bilingual books that apply augmented reality (AR) software to promote language learning. These books encourage children to understand the diversity of cultures, to appreciate the importance of sharing, to develop their curiosity, and to cultivate the ability of communicate.
        </p>
        <p class="gold-text bold-text display-none japanese">
          二ヶ国語でのARを取り入れた絵本。これは次世代を生きる子供たちへのメッセージであり、文化の多様性や経験を共有することや所属することの大切さ、好奇心を持つこと、他者とのコミュニケーション能力を養うこと。
        </p>
      </div>
      <div class="half display-none-m">
        <div class="alligator-wrapper">
          <img class="alligator" src="img/alligator-full.png"/></div>
        </div>
    </div>
  </section>
  <section id="story-book" class="pink-bg">
    <h2 class="pink-text lighter-text english">Story Book</h2>
    <h2 class="pink-text display-none japanese">絵本</h2>
    <div class="content padding-both">
      <div class="third center-text whole-m">
        <div class="bullet-wrapper">
          <i class="fas fa-book"></i>
          <p class="english">Encourage vocabulary building</p>
          <p class="display-none japanese">語彙の獲得を促す</p>
        </div>
        <div class="bullet-wrapper">
          <i class="fas fa-video"></i>
          <p class="english">Help children to learn both Japanese and English using audio and video support</p>
          <p class="display-none japanese">子供たちが日本語と英語を学ぶのを映像と音声を用いて手助けする</p>
        </div>
        <div class="bullet-wrapper">
          <i class="fas fa-book-reader"></i>
          <p class="english">Help children to build confidence through learning</p>
          <p class="display-none japanese">子供たちが学びを通して自信をつける手助けをする</p>
        </div>
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
        <div class="bullet-wrapper">
          <i class="fas fa-flag"></i>
          <p class="english">Introduce children to different cultures</p>
          <p class="display-none japanese">子供たちに外国の文化を紹介する</p>
        </div>
        <div class="bullet-wrapper">
          <i class="fas fa-palette"></i>
          <p class="english">Cultivate curiosity through colorful stories</p>
          <p class="display-none japanese">多彩なお話を用いて、子供たちの好奇心を養う</p>
        </div>
        <div class="bullet-wrapper">
          <i class="fas fa-brain"></i>
          <p class="english">Use AR to facilitate a new kind of reading experience</p>
          <p class="display-none japanese">ARを用いて新しい読書体験をもたらす</p>
        </div>
      </div>
    </div>
  </section>
  <section id="goals">
    <div class="content">
      <div class="third whole-m">
        <h1 class="purple-text center-text english">Our Goals</h1>
        <h1 class="purple-text center-text display-none japanese">ねらい</h1>
        <div class="bird-wrapper">
          <img class="bird" src="img/bird.png"/>
        </div>
      </div>
      <div class="two-third whole-m">
        <p class="leaves-border gold-text bold-text english">
          We harness the latest educational technology to help children to learn about culture and traditions. We will continue to incorporate the latest develops in educational technologies to provide up to date learning resources for children, parents, and educators.
        </p>
        <p class="leaves-border gold-text bold-text display-none japanese">
          伝統と文化が現代の有効な技術革新と一つになった時に創り出される新しい価値を生み出したいと強く願っている。また、それを続けて行くことが私たちの基本的な使命と考えています。時間が経つに連れて成長して行くこと。
        </p>
      </div>
    </div>
  </section>
  <section id="coloring-book" class="purple-bg">
    <h2 class="dark-purple-text lighter-text english">Coloring Book</h2>
    <h2 class="dark-purple-text lighter-text display-none japanese">塗り絵本</h2>
    <div class="content padding-both">
      <div class="third center-text whole-m">
        <div class="bullet-wrapper">
          <i class="fas fa-book"></i>
          <p class="english">We are pleased to introduce a new kind of coloring book designed to encourage creativity.</p>
          <p class="display-none japanese">想像力を喚起する新しいタイプの塗り絵本を紹介</p>
        </div>
        <div class="bullet-wrapper">
          <i class="far fa-eye"></i>
          <p class="english">With this AR coloring book, children can color in a page and watch their creations come to life!</p>
          <p class="display-none japanese">色で塗ったページが動き出すのが見られる</p>
        </div>
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
        <div class="bullet-wrapper">
          <i class="far fa-images"></i>
          <p class="english">Colorful creations can be rendered on computers or handheld electronic devices in 3D.</p>
          <p class="display-none japanese">色で塗ったページがデバイス上で3Dとし現れる</p>
        </div>
        <div class="bullet-wrapper">
          <i class="fas fa-palette"></i>
          <p class="english">Use original colorful creations as stickers (emoji) to customize your messages!</p>
          <p class="display-none japanese">ご自身で塗った色のスティッカー（絵文字）をSNSメッセージに使用することが可能</p>
        </div>
      </div>
    </div>
  </section>
  <section id="team-members" class="team-members">
    <h1 class="purple-text center-text english">Team Members</h1>
    <h1 class="purple-text center-text display-none japanese">メンバー</h1>
    <div class="content padding-both">
      <div class="third whole-m">
        <div class="circle-image kyoko">
          <img src="img/kyoko.png"/>
          <div class="english">We apply AR technology to picture books to provide new possibilities for young readers and parents. These AR books allow young children to listen to a story while learning to read, and they can choose to listen in either English or Japanese.  The AR technology also allows readers to watch videos related to the story, bringing characters and scenarios from the page to life. We developed this project with the idea to make a new type of pop up book. We use a convenient AR application available on smartphones and tablets, using both the written word and audio visual materials to develop reading skills and to facilitate language learning in a way that is fun for children and parents.</div>
          <div class="display-none japanese">Japanese Text</div>
        </div>
        <div class="english">
          <h4 class="dark-purple-text">Kyoko Lyons<br /> <i class="lighter-text">Founder</i></h4>
        </div>
        <div class="display-none japanese">
          <h4 class="dark-purple-text">Japanese<br /> <i class="lighter-text">Japanese</i></h4>
        </div>
      </div>
      <div class="third whole-m">
        <div class="circle-image itsumi">
          <img src="img/itsumi.png"/>
          <div class="english">Some text</div>
          <div class="display-none japanese">Japanese Text</div>
        </div>
        <div class="english">
          <h4 class="dark-purple-text">Itsumi Fukuda <br /> <i class="lighter-text">Publishing Author</i></h4>
        </div>
        <div class="display-none japanese">
          <h4 class="dark-purple-text">Japanese<br /> <i class="lighter-text">Japanese</i></h4>
        </div>
      </div>
      <div class="third whole-m">
        <div class="circle-image natalia">
          <img src="img/natalia.png"/>
          <div class="english">Some text</div>
          <div class="display-none japanese">Japanese Text</div>
        </div>
        <div class="english">
        <h4 class="dark-purple-text">Natalia La Fay <br /> <i class="lighter-text">Artist</i></h4>
        </div>
        <div class="display-none japanese">
          <h4 class="dark-purple-text">Japanese<br /> <i class="lighter-text">Japanese</i></h4>
        </div>
      </div>
    </div>
  </section>
  <section id="contact" class="contact" onclick="removeTooltip()">
    <h2 class="pink-text center-text lighter-text english">Contact Us</h2>
    <h2 class="pink-text center-text lighter-text display-none japanese">お問い合わせ</h2>
    <p class="english">
      Thank you very much for your interest in our project. For questions and other inquiries please feel free to contact us below.
    </p>
    <p class="display-none japanese">
      私たちのプロジェクトにご興味を持ってくださって、誠にありがとうございます。質問、その他のお問い合わせは下記よりお願い致します。どうぞお気軽にお問い合わせ下さいませ。
    </p>
    <form role="form" method="post" action="<?= $_SERVER['PHP_SELF']; ?>">
      <div class="form-row content padding-both relative">
        <div class="half padding-5 whole-m">
          <input type="text" id="name" class="form-control" placeholder="Name (お名前)" name="name" value="<?= $name ?>">
          <span id="name-error" class="error"><?= $name_error ?></span>
          <input type="text" id="email" class="form-control" placeholder="Email (メールアドレス)" name="email" value="<?= $email ?>">
          <span id="email-error" class="error"><?= $email_error ?></span>
          <input type="text" id="phone" class="form-control" placeholder="Phone (電話番号)" name="phone" value="<?= $phone ?>">
          <span id="phone-error" class="error"><?= $phone_error ?></span>
          <p class="antispam">Leave this empty: <input type="text" name="url"></p>
        </div>
        <div class="half padding-5 whole-m">
          <textarea class="form-control" rows="8" type="text" placeholder="Please leave a detailed message. (質問やメッセージ。)" name="message"><?= $message ?></textarea>
          <button type="submit" class="btn">SUBMIT(送信)</button>
          <span class="success"><?= $success; ?></span>
        </div>
      </div>
    </form>
  </section>
  <script src="js/script.js"></script>
  <script src="<?php echo auto_version('/js/script.js'); ?>"></script>
</body>

</html>

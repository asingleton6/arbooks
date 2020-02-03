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
    <div class="logo"><a href="#"><img src="img/arbooks-logo.png"/></a></div>
    <div class="language-wrapper">
      <button class="language" onclick="englishTranslate()">Eng</button>
      <button class="language" onclick="japaneseTranslate()">日本語</button>
    </div>
    <div class="menu-bar-wrapper" onclick="openMenu(this)">
      <div class="menu-bar bar1"></div>
      <div class="menu-bar bar2"></div>
      <div class="menu-bar bar3"></div>
    </div>
    <ul id="mobile-display" class="menu-hidden english">
      <li class="nav-item"><a href="#mission-target">Mission</a></li>
      <li class="nav-item"><a href="#story-book-target">Story Book</a></li>
      <li class="nav-item"><a href="#goals-target">Goals</a></li>
      <li class="nav-item"><a href="#coloring-book-target">Coloring Book</a></li>
      <li class="nav-item"><a href="#team-members-target">Team Members</a></li>
      <li class="nav-item"><a href="#contact-target">Contact Us</a></li>
    </ul>
    <ul id="mobile-display" class="menu-hidden display-none japanese">
      <li class="nav-item"><a href="#mission-target">使命</a></li>
      <li class="nav-item"><a href="#story-book-target">絵本</a></li>
      <li class="nav-item"><a href="#goals-target">ねらい</a></li>
      <li class="nav-item"><a href="#coloring-book-target">塗り絵本</a></li>
      <li class="nav-item"><a href="#team-members-target">メンバー</a></li>
      <li class="nav-item"><a href="#contact-target">お問い合わせ</a></li>
    </ul>
    <ul id="menu-display" class="english">
      <li class="nav-item"><a href="#mission-target">Mission</a></li>
      <li class="nav-item"><a href="#story-book-target">Story Book</a></li>
      <li class="nav-item"><a href="#goals-target">Goals</a></li>
      <li class="nav-item"><a href="#coloring-book-target">Coloring Book</a></li>
      <li class="nav-item"><a href="#team-members-target">Team Members</a></li>
      <li class="nav-item"><a href="#contact-target">Contact Us</a></li>
    </ul>
    <ul id="menu-display" class="display-none japanese">
      <li class="nav-item"><a href="#mission-target">使命</a></li>
      <li class="nav-item"><a href="#story-book-target">絵本</a></li>
      <li class="nav-item"><a href="#goals-target">ねらい</a></li>
      <li class="nav-item"><a href="#coloring-book-target">塗り絵本</a></li>
      <li class="nav-item"><a href="#team-members-target">メンバー</a></li>
      <li class="nav-item"><a href="#contact-target">お問い合わせ</a></li>
    </ul>
  </nav>
  <header>
    <div class="book-wrapper">
      <div class="text-wrapper">
        <h3 class="lighter-text grey-text english">New Type of Pop Up Book</h3>
        <h3 class="lighter-text grey-text display-none japanese">新しい形の仕掛け絵本</h3>
        <p class="gold-text english">Learn More</p>
        <p class="gold-text display-none japanese">詳しく知る</p>
        <a href="#mission-target"><i class="fas fa-chevron-circle-down gold-text bounce"></i></a>
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
    <a id="mission-target"></a>
    <div class="content padding-left padding-both-m">
      <div class="half whole-m">
        <h1 class="purple-text english">Our Mission</h1>
        <h1 class="purple-text display-none japanese">私たちの使命</h1>
        <p class="gold-text bold-text english">
          We create bilingual books that apply augmented reality (AR) software to promote language learning. These books encourage children to understand the diversity of cultures, to appreciate the importance of sharing, to develop their curiosity, and to cultivate the ability of communicate.
        </p>
        <p class="gold-text display-none japanese">
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
    <a id="story-book-target"></a>
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
          <p class="display-none japanese">子供たちが日本語と英語という全く異なる言語を絵本に映像と音声を埋め込み好奇心を刺激し、楽しみながら持続して学ぶ工夫を凝らしている</p>
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
          <p class="english">Enhancing children’s awareness by exposing them to a variety of cultures</p>
          <p class="display-none japanese">子供たちに自国と他国の文化を紹介し、多様性の時代への自覚を芽生えさせる</p>
        </div>
        <div class="bullet-wrapper">
          <i class="fas fa-palette"></i>
          <p class="english">Cultivate curiosity through colorful stories</p>
          <p class="display-none japanese">多彩なお話を用いて、子供たちの好奇心を養う</p>
        </div>
        <div class="bullet-wrapper">
          <i class="fas fa-brain"></i>
          <p class="english">Use AR to facilitate a new kind of reading experience</p>
          <p class="display-none japanese adjust-width">ARを用いて新しい読書体験をもたらす</p>
        </div>
      </div>
    </div>
  </section>
  <section id="goals">
    <a id="goals-target"></a>
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
        <p class="leaves-border gold-text display-none japanese">
          伝統と文化が現代の有効な技術革新と一つになった時に創り出される新しい価値を生み出したいと強く願っている。また、それを続けて行くことが私たちの基本的な使命と考えています。時間が経つに連れて成長して行くこと。
        </p>
      </div>
    </div>
  </section>
  <section id="coloring-book" class="purple-bg">
    <a id="coloring-book-target"></a>
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
    <a id="team-members-target"></a>
    <h1 class="purple-text center-text english">Team Members</h1>
    <h1 class="purple-text center-text display-none japanese">メンバー</h1>
    <div class="content padding-both">
      <div class="third whole-m">
        <div class="circle-image kyoko">
          <img src="img/kyoko.png"/>
          <div class="english">
            <p>
              We apply AR technology to picture books to provide new possibilities for young readers and parents. These AR books allow young children to listen to a story while learning to read, and they can choose to listen in either English or Japanese.  The AR technology also allows readers to watch videos related to the story, bringing characters and scenarios from the page to life. We developed this project with the idea to make a new type of pop up book. We use a convenient AR application available on smartphones and tablets, using both the written word and audio visual materials to develop reading skills and to facilitate language learning in a way that is fun for children and parents.
            </p>
          </div>
          <div class="display-none japanese">
            AR技術を展示会のポスター等に使われていることを知ったのがきっかけで、この技術を絵本に取り入れることにより、その本の朗読を聞いたり、二言語に変更して朗読を聞いたり、関連するビデオ（映像）を観たりと、新しい仕掛け絵本を生み出したいと話が盛り上がったのが、このプロジェクトのきっかけです。特にヘッドセットを使わずにスマホやタブレットにて見ることのできるAR技術に特化していきたいと考えている。理由は青少年の視神経の発達への負担がヘッドセットを使用する技術よりも少ないからです。本という紙媒体とIT技術が結びついた時に、より奥深い多面的なお話の世界を生み出せると期待している。
          </div>
        </div>
        <div class="english">
          <h4 class="dark-purple-text">Kyoko Lyons<br /> <i class="lighter-text">Founder</i></h4>
        </div>
        <div class="display-none japanese">
          <h4 class="dark-purple-text">Kyoko Lyons<br /> <i class="lighter-text">創始者</i></h4>
        </div>
      </div>
      <div class="third whole-m">
        <div class="circle-image itsumi">
          <img src="img/itsumi.png"/>
          <div class="english">
          <p>
            I am a published author, an editor, and a recognized authority on patient’s rights and best practices for navigating the Japanese health care system. In addition to my day job working in publication in Tokyo, I have also been awarded first prize for screen and pitch writing by the Motion Picture Association’s film workshop in 2015.
          </p>
          <p>
           My work was the only Japanese production to be nominated to participate in a Hollywood TV planning pitch practical seminar held in February 2017, where participants included Academy Award winner Glen Anderson. My creative work draws on my experience as an established publisher in the field of consumer advocacy and my newfound international success as an author of fiction. My current project combines these interests into a form of storytelling that relates cutting edge scientific issues in narratives that appeal to the emotions and inspire thought.
         </p>
         <p>
           In my day job, I work for an IT company harnessing for practical and creative uses the data drawn from scientific measurements of brain waves and biometric information. I am chief researcher and also in charge of business development.
         </p>
         <p>
           In this capacity, at the first AI EXPO, my team and I collaborated with MacCan Erickson and OneJapan.  We developed a program we dubbed the “Creative Flower,” which relies on brain wave measuring technology to produce a visual representation of a person’s mental activity in real time. The resulting image creates a visual representation of a person’s mental activity, and the resulting “flower” opens and closes its   petals to reflect the flow of thoughts. This software was well received as an innovative model for harnessing biometric information for creative purposes.
           <a href="http://www.littlesoftware.jp/works/creative-flower/" target="_blank">littlesoftware</a>
         </p>
         <p>
           My current research project combines cutting edge VR technology with biometric analysis of brain waves to produce a new level of interactive technology. This work aims to develop practical uses of biometric information in the field of VR by enabling responsive virtual reality narratives that adapt to users’ emotions and thoughts to render a new level of immersive educational and entertainment experiences.
         </p>
          </div>
          <div class="display-none japanese">
            編集者として活動する傍ら、2015年10月、MPA/JIMCA/DHUのフィルムワークショップにて大賞（共作）を受賞。2017年2月経済産業省の委託事業「ハリウッド流映画・テレビ企画ピッチ実践セミナー」にて、米国アカデミー賞作品賞受賞のプロデューサーであるグレン・アンダーソン氏へのピッチ選出等を経て、ストーリーと人の感情の推移の関係を科学的に考察する、"ストーリーテック"として研究するようになる。
            その過程で、「脳波・生体情報のビッグデータ」から感情推定を行うＩＴベンチャーに所属。
            現在は、脳波感情解析研究主任、兼、新規事業開発の責任者として、ブレインテック、ニューロマーケティングの発展に貢献すべく活動している。
            第１回AI・人工知能EXPOでは、マッキャンエリクソン、OneJAPAN有志とともに、”体験者の脳波を、花の映像としてリアルタイムでキャラクター化”し、マインドフルネスによって脳が変化する状態を花の開閉で表現する、「creative-flower」を実施。映像と生体情報のインタラクティブ・アートとして好評を得る。
            <a href="http://www.littlesoftware.jp/works/creative-flower/" target="_blank">littlesoftware</a>
            他に、脳波の状態によって映像を切り替えるVRコンテンツの企画や、触覚フィードバックを用いたVRコンテンツのプロデュース等も行い、生体情報をベースとしたストーリー感のあるインタラクティブな映像体験の実用化にも注力している。
          </div>
        </div>
        <div class="english">
          <h4 class="dark-purple-text">Itsumi Fukuda <br /> <i class="lighter-text">Author</i></h4>
        </div>
        <div class="display-none japanese">
          <h4 class="dark-purple-text">Itsumi Fukuda<br /> <i class="lighter-text">著者</i></h4>
        </div>
      </div>
      <div class="third whole-m">
        <div class="circle-image natalia">
          <img src="img/natalia.png"/>
          <div class="english"><a href="http://natalialafey.com/" target="_blank">http://natalialafey.com/</a></div>
          <div class="display-none japanese"><a href="http://natalialafey.com/" target="_blank">http://natalialafey.com/</a></div>
        </div>
        <div class="english">
        <h4 class="dark-purple-text">Natalia La Fay <br /> <i class="lighter-text">Artist</i></h4>
        </div>
        <div class="display-none japanese">
          <h4 class="dark-purple-text">Natalia La Fay<br /> <i class="lighter-text">アーティスト</i></h4>
        </div>
      </div>
    </div>
  </section>
  <section id="contact" class="contact" onclick="removeTooltip()">
    <a id="contact-target"></a>
    <h2 class="pink-text center-text lighter-text english">Contact Us</h2>
    <h2 class="pink-text center-text lighter-text display-none japanese">お問い合わせ</h2>
    <p class="bold-text english">
      Thank you very much for your interest in our project. For questions and other inquiries please feel free to contact us below.
    </p>
    <p class="display-none japanese">
      私たちのプロジェクトにご興味を持ってくださって、誠にありがとうございます。質問、その他のお問い合わせは下記よりお願い致します。どうぞお気軽にお問い合わせ下さいませ。
    </p>
    <form role="form" method="post" action="index.php#contact-target">
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
          <textarea class="form-control" rows="8" type="text" placeholder="Please leave a detailed message. (質問やメッセージ)" name="message"><?= $message ?></textarea>
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

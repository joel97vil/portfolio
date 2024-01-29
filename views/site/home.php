<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\HomeAsset;
use yii\bootstrap5\Html;
use yii\bootstrap5\Modal;

HomeAsset::register($this);

?>
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet" />

<header class="container header active" id="home">
    <div class="header-content">
        <div class="left-header">
            <div class="h-shape"></div>
            <div class="image">
                <img src="img/layout/hero.png" alt="">
            </div>
        </div>
        <div class="right-header">
            <h1 class="name">
                <?= Yii::t("app", "Hello there, I'm"); ?> <span>Joel Faura Micó.</span>
                <?= Yii::t("app", "A FullStack Developer."); ?>
            </h1>
            <p>
                <?= Yii::t("app", "I'm a FullStack App and Web Developer, I love to create beautiful and functional solutions."); ?>
                <?= Yii::t("app", "Fullstack developer with more than four years of experience in the sector being part in various projects in a small development team.");?>
                <?= Yii::t("app", "Knowledgeable and collaborator in most project phases: analysis, functional requirements, documentations, task organization, development, testing, version control, steps to production, integrations and customer training.");?>
                <?= Yii::t("app", "Interested in cybersecurity, new development technologies and ensuring good user experience.");?>
            </p>
            <?= Yii::$app->view->renderFile('@app/views/components/_download_button_default.php'); ?>
        </div>
    </div>
</header>
<main>
    <section class="container about" id="about">
        <div class="main-title">
            <h2><?= Yii::t('app','About');?> <span><?= Yii::t('app','me');?></span><span class="bg-text"><?= Yii::t('app','About me');?></span></h2>
        </div>
        <div class="about-container">
            <div class="left-about">
                <h4><?= Yii::t('app','Information about me');?></h4>
                <p>
                    <?= Yii::t('app',"I've been developer since I was 11 years old, but I didn't knew that"); ?>
                    <?= Yii::t('app',"I started programming at 11 because I was a big fan of RuneScape, a MMO-RPG. I wanted to investigate how the game could be built. And I starting my research of how to do it I found the RuneScape private servers world, which is a RS replica with Java Code..."); ?>
                    <?= Yii::t("app", "Fullstack developer with more than four years of experience in the sector being part in various projects in a small development team.");?>
                    <?= Yii::t("app", "Knowledgeable and collaborator in most project phases: analysis, functional requirements, documentations, task organization, development, testing, version control, steps to production, integrations and customer training.");?>
                    <?= Yii::t("app", "Interested in cybersecurity, new development technologies and ensuring good user experience.");?>
                </p>
                <?= Yii::$app->view->renderFile('@app/views/components/_download_button_default.php'); ?>
            </div>
            <div class="right-about">
                <div class="about-item">
                    <div class="abt-text">
                        <p class="large-text">5+</p>
                        <p class="small-text"><?= Yii::t('app','Years of');?> <br /> <?= Yii::t('app','professional developer experience');?></p>
                    </div>
                </div>
                <div class="about-item">
                    <div class="abt-text">
                        <p class="large-text">8+</p>
                        <p class="small-text"><?= Yii::t('app','Years of');?> <br /> <?= Yii::t('app','student developer experience'); ?></p>
                    </div>
                </div>
                <div class="about-item">
                    <div class="abt-text">
                        <p class="large-text">6+</p>
                        <p class="small-text"><?= Yii::t('app','Professional projects');?> <br /> <?= Yii::t('app','worked in');?></p>
                    </div>
                </div>
                <div class="about-item">
                    <div class="abt-text">
                        <p class="large-text">5+</p>
                        <p class="small-text"><?= Yii::t('app','Personal projects');?> <br /> <?= Yii::t('app','worked in');?></p>
                    </div>
                </div>
            </div>
        </div>
        <h4 class="stat-title"><?= Yii::t('app', 'My Timeline'); ?></h4>
        <div class="timeline">
            <div class="timeline-item">
                <div class="tl-icon">
                    <i class="fas fa-briefcase"></i>
                </div>
                <p class="tl-duration">2021 - <?= Yii::t('app', "present");?></p>
                <h5><?= Yii::t('app','Fullstack developer');?><span> - TERRA ALTA CONSULTORIA, TIC.</span></h5>
                <p>
                    <?= Yii::t('app', "Being part of all project phases in various projects, mainly desktop applications (some analysis, developing, documentating, deploying, etc.).");?>
                </p>
            </div>
            <div class="timeline-item">
                <div class="tl-icon">
                    <i class="fas fa-briefcase"></i>
                </div>
                <p class="tl-duration">2019 - 2021</p>
                <h5><?= Yii::t('app','Web applications developer');?><span> - TERRA ALTA CONSULTORIA, TIC.</span></h5>
                <p>
                    <?= Yii::t('app', "Developing complete web applications (with backoffice and frontoffice), designing database and integrating third-party apps and plugins on our web-apps."); ?>
                </p>
            </div>
            <div class="timeline-item">
                <div class="tl-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <p class="tl-duration">2023 - <?= Yii::t('app', "present");?></p>
                <h5><?= Yii::t('app', "Cicle Formatiu de Grau Superior Desenvolupament d'aplicacions multiplataforma");?><span> (CFGS DAM)</span><span> - Institut Obert de Catalunya (IOC)</span></h5>
                <p>
                <?= Yii::t('app', "Desktop applications languages as C#, projects management, Data-access-objects, .Net Framework, Java, etc.");?>
                </p>
            </div>
            <div class="timeline-item">
                <div class="tl-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <p class="tl-duration">2022 - 2022</p>
                <h5><?= Yii::t('app', "Cicle Formatiu de Grau Superior Desenvolupament d'aplicacions web");?><span> (CFGS DAW)</span><span> - Institut Obert de Catalunya (IOC)</span></h5>
                <p>
                    <?= Yii::t('app', "Accessibilty and usability, Data-access-objects, Web services and APIs, complete web development, PHP frameworks, JavaScript frameworks, etc.");?>
                </p>
            </div>
            <div class="timeline-item">
                <div class="tl-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <p class="tl-duration">2018 - 2022</p>
                <h5><?= Yii::t('app', "Cicle Formatiu de Grau Superior Desenvolupament d'aplicacions web");?><span> (CFGS DAW)</span><span> - Institut Provençana</span></h5>
                <p>
                    <?= Yii::t('app', 'Basics of programation (sequential and objects-orientated), advanced databases (mySQL and Oracle), advanced markdown languages, development environments, etc.');?>
                </p>
            </div>
            <div class="timeline-item">
                <div class="tl-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <p class="tl-duration">2015 - 2017</p>
                <h5><?= Yii::t('app', "Cicle Formatiu de Grau Mitjà Sistemes Microinformàtics i Xarxes");?><span> (CFGM SMIX)</span><span> - Institut Provençana</span></h5>
                <p>
                    <?= Yii::t('app', "Systems and services administration (Windows and Linux), basic markdown languages usage, basic database usage (Access and equivalents), and basic WordPress");?>
                </p>
            </div>
        </div>
    </section>

    <section class="container skills" id="skills">
        <div class="main-title">
            <h2><?= Yii::t('app','My');?> <span><?= Yii::t('app','Skills & knowledge');?></span><span class="bg-text"><?= Yii::t('app','Knowledge');?></span></h2>
        </div>
        <div class="skills-container">
            <div class="about-stats">
                <h4 class="stat-title"><?= Yii::t('app','Programming skills and knowledge');?></h4>
                <div class="progress-bars">
                    <div class="progress-bar">
                        <p class="prog-title"><?= Yii::t('app','C# (.Net Framework 4.5 and 4.8');?></p>
                        <div class="progress-con">
                            <p class="prog-text">95%</p>
                            <div class="progress">
                                <span class="ninety-five-percent"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title"><?= Yii::t('app','PHP (Yii2 and Laravel)');?></p>
                        <div class="progress-con">
                            <p class="prog-text">90%</p>
                            <div class="progress">
                                <span class="ninety-five-percent"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">Javascript (JQuery)</p>
                        <div class="progress-con">
                            <p class="prog-text">80%</p>
                            <div class="progress">
                                <span class="eighty-percent"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title"><?= Yii::t('app','SQL Server (2005 to 2019)');?></p>
                        <div class="progress-con">
                            <p class="prog-text">80%</p>
                            <div class="progress">
                                <span class="eighty-percent"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">MySQL</p>
                        <div class="progress-con">
                            <p class="prog-text">75%</p>
                            <div class="progress">
                                <span class="seventy-five-percent"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">Java</p>
                        <div class="progress-con">
                            <p class="prog-text">60%</p>
                            <div class="progress">
                                <span class="sixty-percent"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">VisualBasic (.Net Framework)</p>
                        <div class="progress-con">
                            <p class="prog-text">40%</p>
                            <div class="progress">
                                <span class="forty-percent"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="about-stats">
                <h4 class="stat-title"><?= Yii::t('app','Professional skills and knowledge');?></h4>
                <div class="progress-bars">
                    <div class="progress-bar">
                        <p class="prog-title"><?= Yii::t('app','Teamworking');?></p>
                        <div class="progress-con">
                            <p class="prog-text">95%</p>
                            <div class="progress">
                                <span class="ninety-five-percent"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title"><?= Yii::t('app','User attention');?></p>
                        <div class="progress-con">
                            <p class="prog-text">80%</p>
                            <div class="progress">
                                <span class="eighty-percent"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title"><?= Yii::t('app','Organization (self and team)');?></p>
                        <div class="progress-con">
                            <p class="prog-text">75%</p>
                            <div class="progress">
                                <span class="seventy-five-percent"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title"><?= Yii::t('app','Documentation (code and documents)');?></p>
                        <div class="progress-con">
                            <p class="prog-text">70%</p>
                            <div class="progress">
                                <span class="seventy-percent"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title"><?= Yii::t('app','Development environments (SCRUM or KanBan)');?></p>
                        <div class="progress-con">
                            <p class="prog-text">60%</p>
                            <div class="progress">
                                <span class="seventy-percent"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="about-stats">
                <h4 class="stat-title"><?= Yii::t('app','Languages');?></h4>
                <div class="progress-bars">
                    <div class="progress-bar">
                        <p class="prog-title"><?= Yii::t('app','English');?> - A2</p>
                        <div class="progress-con">
                            <p class="prog-text">60%</p>
                            <div class="progress">
                                <span class="sixty-percent"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title"><?= Yii::t('app','Spanish');?> - C1</p>
                        <div class="progress-con">
                            <p class="prog-text">90%</p>
                            <div class="progress">
                                <span class="ninety-percent"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title"><?= Yii::t('app','Catalan');?> - C1</p>
                        <div class="progress-con">
                            <p class="prog-text">90%</p>
                            <div class="progress">
                                <span class="ninety-percent"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container" id="portfolio">
        <div class="main-title">
            <h2><?= Yii::t('app','My');?> <span><?= Yii::t('app','personal projects');?></span><span class="bg-text"><?= Yii::t('app','Projects');?></span></h2>
        </div>
        <p class="port-text">
        <?= Yii::t('app',"Here is some of my work that I've done in various programming languages.");?>
        </p>
        <div class="portfolios">
            <div class="portfolio-item">
                <div class="image">
                    <img src="img/layout/port1.jpg" alt="">
                </div>
                <div class="hover-items">
                    <h3>Where do I sleep? (WDIS)</h3>
                    <div class="icons">
                        <a href="https://github.com/joel97vil/wdis" class="icon">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-behance"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="portfolio-item">
                <div class="image">
                    <img src="img/layout/port2.jpg" alt="">
                </div>
                <div class="hover-items">
                    <h3><?= Yii::t('app','Portfolio (this website)');?></h3>
                    <div class="icons">
                        <a href="https://github.com/joel97vil/portfolio" class="icon">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-behance"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="portfolio-item">
                <div class="image">
                    <img src="img/layout/port3.jpg" alt="">
                </div>
                <div class="hover-items">
                    <h3>Elvarg</h3>
                    <div class="icons">
                        <a href="https://github.com/joel97vil/Elvarg" class="icon">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-behance"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="portfolio-item">
                <div class="image">
                    <img src="img/layout/port4.jpg" alt="">
                </div>
                <div class="hover-items">
                    <h3>XAMPP Web Initializer</h3>
                    <div class="icons">
                        <a href="https://github.com/joel97vil/xampp-web-initializer" class="icon">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-behance"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="portfolio-item">
                <div class="image">
                    <img src="img/layout/port5.jpg" alt="">
                </div>
                <div class="hover-items">
                    <h3>JS Loading Spinner</h3>
                    <div class="icons">
                        <a href="https://github.com/joel97vil/html-loading-spinner" class="icon">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-behance"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container" id="blogs">
        <div class="blogs-content">
            <div class="main-title">
                <h2><?= Yii::t('app','My');?> <span><?= Yii::t('app','Blogs');?></span><span class="bg-text"><?= Yii::t('app','Blogs');?></span></h2>
            </div>
            <div class="blogs">
                <?php
                    $blogs = app\models\Blog::getLastest();
                    foreach($blogs as $blog) {
                        if($blog != null){
                ?>
                    <div class="blog" data-id="<?= $blog->id; ?>">
                        <?php
                            if($blog->bannerImage != null)
                            {
                                echo Html::img([$blog->bannerImage->fullUrl, ['alt' => $blog->bannerImage->alt]]);
                            }
                            else{
                                echo Html::img(["@blog/port6.jpg", ['alt' => $blog->title]]);
                            }
                        ?>
                        <div class="blog-text">
                            <h4>
                                <?= $blog->title ?>
                            </h4>
                            <p>
                                <?= $blog->bodyPreview ?>
                            </p>
                        </div>
                    </div>
                <?php
                        }
                    }
                ?>
            </div>
        </div>
    </section>
    <section class="container contact" id="contact">
        <div class="contact-container">
            <div class="main-title">
                <h2><?= Yii::t('app','Contact');?> <span><?= Yii::t('app','Me');?></span><span class="bg-text"><?= Yii::t('app','Contact'); ?></span></h2>
            </div>
            <div class="contact-content-con">
                <div class="left-contact">
                    <h4><?= Yii::t('app','Contact me here');?></h4>
                    <p>
                        <?= Yii::t('app', "Do you want to collaborate with me with any project, do you want more info about a project, or about me? Then you can contact me using the following channels, or by sending me a message through this web."); ?>
                    </p>
                    <div class="contact-info">
                        <div class="contact-item">
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                                <span><?= Yii::t('app','Location');?> :</span>
                            </div>
                            <p>
                                <?= Yii::t('app','Vilalba dels Arcs, Tarragona, Spain'); ?>
                            </p>
                        </div>
                        <div class="contact-item">
                            <div class="icon">
                                <i class="fas fa-envelope"></i>
                                <span>Email :</span>
                            </div>
                            <p>
                                <span><a href="mailto:info@joelfaura.com" target="_blank">info@joelfaura.com</a></span>
                            </p>
                        </div>
                        <div class="contact-item">
                            <div class="icon">
                                <i class="fas fa-user-graduate"></i>
                                <span><?= Yii::t('app','Education');?> :</span>
                            </div>
                            <p>
                                <span><a href="https://ioc.xtec.cat/" target="_blank">Institut Obert de Catalunya (IOC)</a></span>
                            </p>
                        </div>
                        <div class="contact-item">
                            <div class="icon">
                                <i class="fas fa-globe-africa"></i>
                                <span><?= Yii::t('app','Languages');?> :</span>
                            </div>
                            <p>
                                <span><?= Yii::t('app','English, Spanish, Catalan');?></span>
                            </p>
                        </div>
                    </div>
                    <div class="contact-icons">
                        <div class="contact-icon">
                            <a href="https://www.linkedin.com/in/joel-faura-m/" target="_blank">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="https://github.com/joel97vil" target="_blank">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="https://twitter.com/lopubill" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="right-contact">
                    <form action="/site/contact" class="contact-form" method="post">
                        <div class="input-control i-c-2">
                            <input type="text" required placeholder="<?= Yii::t('app','Your name'); ?>">
                            <input type="email" required placeholder="<?= Yii::t('app','Your email'); ?>">
                        </div>
                        <div class="input-control">
                            <input type="text" required placeholder="<?= Yii::t('app','Enter subject'); ?>">
                        </div>
                        <div class="input-control">
                            <textarea name="" id="" cols="15" rows="8" placeholder="<?= Yii::t('app','Your message here...'); ?>"></textarea>
                        </div>
                        <div class="submit-btn">
                            <button type="submit" class="main-btn">
                                <span class="btn-text"><?= Yii::t('app','Send'); ?></span>
                                <span class="btn-icon"><i class="fas fa-envelope"></i></span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<div class="controls">
    <div class="control active-btn" data-id="home" >
        <i class="fas fa-home"></i>
    </div>
    <div class="control" data-id="about">
        <i class="fas fa-user"></i>
    </div>
    <div class="control" data-id="skills">
        <i class="fas fa-code"></i>
    </div>
    <div class="control" data-id="portfolio">
        <i class="fas fa-file"></i>
    </div>
    <div class="control" data-id="blogs">
        <i class="far fa-newspaper"></i>
    </div>
    <div class="control" data-id="contact">
        <i class="fas fa-envelope-open"></i>
    </div>
</div>
<div class="theme-btn">
    <i class="fas fa-paint-brush"></i>
</div>
<div class="language-btn">
    <i class="fas fa-language"></i>
</div>

<?php
Modal::begin([
    'title' => '<i class="fas fa-language"></i> ' . Yii::t('app', 'Language'),
    'id' => 'languages-modal',
    'size' => 'modal-sm',
    'centerVertical' => true
]);
echo Html::a('English', ['/site/change-language', 'lang' => 'en-US']);
echo Html::a('Español', ['/site/change-language', 'lang' => 'es-ES']);
echo Html::a('Català', ['/site/change-language', 'lang' => 'ca-ES']);
Modal::end();


Modal::begin([
    //'title' => '',
    'id' => 'blog-modal',
    'size' => 'modal-lg',
    'centerVertical' => true
]);
//BLOG CONTENT GOES HERE!
Modal::end();
?>
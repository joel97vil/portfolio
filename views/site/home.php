<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\HomeAsset;
use app\models\ContactForm;
use yii\bootstrap5\Html;
use yii\bootstrap5\Modal;
use yii\widgets\ActiveForm;

HomeAsset::register($this);

?>
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
<noscript><?= Yii::t('app','This website requires JavaScript to function properly. Please enable JavaScript in your browser settings.'); ?></noscript>

<?php
    foreach (Yii::$app->session->getAllFlashes() as $type => $message) {
        echo "<div class='alert alert-{$type} flash-message' role='alert'>".Html::encode($message)."</div>";
    }
?>

<header class="container header active" id="home">
    <div class="header-content">
        <div class="left-header">
            <div class="h-shape"></div>
            <div class="image">
                <img src="img/layout/joel.png" alt="">
            </div>
        </div>
        <div class="right-header">
            <h1 class="name">
                <?= Yii::t("app", "Hello there, I'm"); ?> <span>Joel Faura Micó, </span>
                <?= Yii::t("app", "a FullStack Developer"); ?>
            </h1>
            <p>
                <?= Yii::t("app", "With over five years of experience delivering beautiful, functional solutions."); ?>
                <?= Yii::t("app", "I've been part of various projects within small development teams, contributing across all phases—from analyzing requirements and organizing tasks to hands-on development, testing, version control, and seamless production deployments.");?>
                <?= Yii::t("app", "I’m passionate about cybersecurity, exploring new development technologies, and ensuring an exceptional user experience.");?>
                <?= Yii::t("app", " I also enjoy collaborating with clients, providing thorough documentation, integration support, and training to help them succeed with their digital products.");?>
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
                    <?= Yii::t('app', "My journey in programming began when I was 11, sparked by my fascination with the MMO-RPG RuneScape."); ?>
                    <?= Yii::t('app', "Curious about how such a game could be built, I discovered the world of RuneScape private servers—a Java-based replica environment that fueled my early learning."); ?>
                    <?= Yii::t("app", "Now, as a FullStack developer with over four years of professional experience, I’ve contributed to a variety of projects within small development teams.");?>
                    <?= Yii::t("app", "I'm skilled across all project phases, including requirements analysis, documentation, task organization, development, testing, version control, production deployment, integration, and client training.");?>
                    <?= Yii::t("app", "My interests also extend to cybersecurity, emerging technologies, and optimizing user experience, and I’m driven by the opportunity to build impactful, seamless solutions.");?>
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
        <?= Yii::t('app',"Here are some projects I've developed across different programming languages, highlighting a range of skills and solutions.");?>
        </p>
        <div class="portfolios">
            <div class="portfolio-item">
                <div class="image">
                    <img src="img/layout/wdis.jpg" alt="">
                </div>
                <div class="hover-items">
                    <h3>Where do I sleep? (WDIS)</h3>
                    <div class="icons">
                        <a href="https://github.com/joel97vil/wdis" class="icon">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="portfolio-item">
                <div class="image">
                    <img src="img/layout/port1.jpg" alt="">
                </div>
                <div class="hover-items">
                    <h3><?= Yii::t('app','Portfolio (this website)');?></h3>
                    <div class="icons">
                        <a href="https://github.com/joel97vil/portfolio" class="icon">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="portfolio-item">
                <div class="image">
                    <img src="img/layout/elvarg.png" alt="">
                </div>
                <div class="hover-items">
                    <h3>Elvarg</h3>
                    <div class="icons">
                        <a href="https://github.com/joel97vil/Elvarg" class="icon">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fa fa-play"></i>
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
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
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
                        <?= Yii::t('app', "Interested in collaborating on a project, learning more about my work, or just connecting? Feel free to reach out through any of the channels below, or simply send me a message directly from this website. I look forward to hearing from you!"); ?>
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
                    <?php $model = new ContactForm(); ?>
                    <?php $form = ActiveForm::begin([
                            'action' => ['/contact'], 
                            //'fieldConfig' => ['template' => '{label}{input}'],
                            'options' => ['method' => 'post', 'class' => 'contact-form', 'enctype' => 'multipart/form-data', 'id' => 'contact-form'],
                        ]); ?>
                        <div class="input-control i-c-2">
                            <?= $form->field($model, 'name')->textInput(['placeholder' => Yii::t('app','Your name'), 'required' => true])->label(false); ?>
                            <?= $form->field($model, 'email')->input('email', ['placeholder' => Yii::t('app','Your email'), 'required' => true])->label(false); ?>
                        </div>
                        <div class="input-control">
                            <?= $form->field($model, 'subject')->textInput(['placeholder' => Yii::t('app','Enter subject'), 'required' => true])->label(false); ?>
                        </div>
                        <div class="input-control">
                            <?= $form->field($model, 'body')->textarea(['cols' => 15, 'rows' => 8, 'placeholder' => Yii::t('app','Your message here...'), 'required' => true])->label(false); ?>
                        </div>
                        <div class="submit-btn">
                            <a href="#" class="main-btn" id="submit-form">
                                <span class="btn-text"><?= Yii::t('app','Send'); ?></span>
                                <span class="btn-icon"><i class="fas fa-envelope"></i></span>
                            </a>
                        </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </section>
</main>

<div class="controls">
    <div class="control active-btn" data-id="home" >
        <i class="fas fa-home"></i>
        <!--<span class="text-bottom"><?= Yii::t('app','Home'); ?></span>-->
    </div>
    <div class="control" data-id="about" alt="<?= Yii::t('app','About') ?>">
        <i class="fas fa-user"></i>
        <!--<span class="text-bottom"><?= Yii::t('app','About me'); ?> </span>-->
    </div>
    <div class="control" data-id="skills" alt="<?= Yii::t('app','Skills') ?>">
        <i class="fas fa-code"></i>
        <!--<span class="text-bottom"><?= Yii::t('app','Skills'); ?> </span>-->
    </div>
    <div class="control" data-id="portfolio">
        <i class="fas fa-file"></i>
        <!--<span class="text-bottom"><?= Yii::t('app','Portfolio'); ?> </span>-->
    </div>
    <div class="control" data-id="contact">
        <i class="fas fa-envelope-open"></i>
        <!--<span class="text-bottom"><?= Yii::t('app','Contact'); ?> </span>-->
    </div>
</div>
<div class="theme-btn">
    <i class="fas fa-paint-brush"></i>
    <!--<span class="text-bottom"><?= Yii::t('app','Theme'); ?> </span>-->
</div>
<div class="language-btn">
    <i class="fas fa-language"></i>
    <!--<span class="text-bottom"><?= Yii::t('app','Language'); ?> </span>-->
</div>

<?php
Modal::begin([
    'title' => '<i class="fas fa-language"></i> ' . Yii::t('app', 'Language'),
    'id' => 'languages-modal',
    'size' => 'modal-sm',
    'centerVertical' => true,
    'closeButton' => ['class' => 'btn-close btn-close-white', 'id' => 'btn-close-modal'],
]);
echo Html::a('English', ['/site/change-language', 'lang' => 'en-US']);
echo Html::a('Español', ['/site/change-language', 'lang' => 'es-ES']);
echo Html::a('Català', ['/site/change-language', 'lang' => 'ca-ES']);
Modal::end();
?>
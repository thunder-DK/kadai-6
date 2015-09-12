<<<<<<< HEAD
<!DOCTYPE html>
<html lang="ja">
<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
        include("header.php");
    ?>
    
    <!--
    <header class="header">
        <div class="inner clearfix">
            <h1 class="site-title"><a href="#"><img src="img/logo.png" alt="Cheese Academy Tokyo"></a></h1>
            <ul class="list-header text-right">
                <li>CHEESE DEVELOPMENT</li>
                <li>GROWTH CHEESE</li>
                <li>CHEESE PERSPECTIVE</li>
                <li>CHEESE GENERATOR</li>
            </ul>
        </div>
    </header>
    -->

    <section class="main_visual">
        <div class="inner">
            <p class="catch text-center">世界を震わすチーズを創ろう。<span class="catch-small">新しい形のチーズ職人養成学校、はじまります。</span></p>
        </div>
    </section>
    
    <section class="news contents-box">
        <h2 class="section-title text-center">
            <span class="section-title__yellow">News</span><span class="section-title-ja text-center">お知らせ・更新情報</span>
        </h2>
        <article class="news-detail">
            
            <dl class="clearfix">
                <?php
                    $pdo = new PDO("mysql:host=localhost;dbname=cs_academy;charset=utf8", "root", "");
                    $sql = "SELECT * FROM news ORDER BY create_date DESC LIMIT 5";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute();
                    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    foreach($results as $row) {
                        $iKey = $row["news_id"];
                        $c_date = substr($row["create_date"],0,10);
                        print $c_date;
                        //print $row["create_date"];
                        print "            ";
                        $cc_newstitle = $row["news_title"];
                        print "<a href=\"news.php?key1=$iKey\">$cc_newstitle</a>";
                        // print $row["news_title"];
                        print "<br>";
                    }
                    $pdo = null;
                ?>
            </dl>    
            
            <?php
            //    $pdo = new PDO("mysql:host=localhost;dbname=cs_academy;charset=utf8", "root", "");
            //    $sql = "SELECT create_date, news_title FROM news ORDER BY create_date DESC LIMIT 5";
            //    $stmt = $pdo->prepare($sql);
            //    $stmt->execute();
            //    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            //    foreach($results as $row) {
            //        print $row["create_date"]."                 ".$row["news_title"]."<br>";
            //        // echo $row["news_title"];
            //    }
            //    $pdo = null;
            ?>
            
            <!-- 
            <dl class="clearfix">

                <dt class="news-date">2015.07.12</dt>
                <dd class="news-description">初日開講しました！</dd>
                <dt class="news-date">2015.06.12</dt>
                <dd class="news-description">初めてのチーズハッカソンを開催しました！</dd>
                <dt class="news-date">2015.04.11</dt>
                <dd class="news-description">トーキョーチーズFesを開催いたしました！</dd>
                
            </dl>
            -->

            <p class="view-detail text-right"><a href="news_list.php">ニュース一覧を見る</a></p>
        </article>
    </section>
   
    <section class="feature contents-box">
        <div class="inner">
            <h2 class="section-title text-center">
                <span class="section-title__white">Feature</span><span class="section-title-ja text-center">特徴</span>
            </h2>
            <ul class="list-feature">
                <li><img src="img/point1.png" alt=""></li>
                <li><img src="img/point2.png" alt=""></li>
                <li><img src="img/point3.png" alt=""></li>
            </ul>
        </div>
    </section>
    
    <section class="cource contents-box">
        <div class="inner">
            <h2 class="section-title text-center">
                <span class="">Cource</span><span class="section-title-ja text-center">コース紹介</span>
            </h2>
            <div class="block-cource block-cource-lab clearfix">
                <div class="cource-img"><img src="img/cource-lab.png" alt=""></div>
                <div class="cource-txt cource-txt__usually">
                <h3 class="cource-title text-center">LABコース</h3>
                <p>週末集中型の初心者対象のチーズ職人養成講座です。<br />
                    週末集中型の初心者対象のチーズ職人養成講座です。<br />
                    週末集中型の初心者対象のチーズ職人養成講座です。<br />
                    週末集中型の初心者対象のチーズ職人養成講座です。<br />
                    週末集中型の初心者対象のチーズ職人養成講座です。<br />
                    </p>
                </div>
            </div>
            <div class="block-cource clearfix">   
                <div class="cource-img__reverse">
                    <img src="img/cource-academy.png" alt="">
                </div>
                <div class="cource-txt cource-txt__reverse">
                    <h3 class="cource-title text-center">ACADEMYコース</h3>
                    <p>週末集中型の初心者対象のチーズ職人養成講座です。<br />
                    週末集中型の初心者対象のチーズ職人養成講座です。<br />
                    週末集中型の初心者対象のチーズ職人養成講座です。<br />
                    週末集中型の初心者対象のチーズ職人養成講座です。<br />
                    週末集中型の初心者対象のチーズ職人養成講座です。<br />
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="gallery">
        <div class="contents-heading bg-yellow">
            <h2 class="section-title text-center">
                <span class="section-title">Gallery</span><span class="section-title__white section-title-ja text-center">ギャラリー</span
            </h2>
        </div>
        <div class="inner contents-box">
            <ul class="list-gallery clearfix">
                <li><a href="#"><img src="img/gallery01.jpg" alt="" /></a></li>
                <li><a href="#"><img src="img/gallery02.jpg" alt="" /></a></li>
                <li><a href="#"><img src="img/gallery03.jpg" alt="" /></a></li>
                <li class="no-white-space"><a href="#"><img src="img/gallery04.jpg" alt="" /></a></li>
                <li><a href="#"><img src="img/gallery05.jpg" alt="" /></a></li>
                <li><a href="#"><img src="img/gallery06.jpg" alt="" /></a></li>
                <li><a href="#"><img src="img/gallery07.jpg" alt="" /></a></li>
                <li class="no-white-space"><a href="#"><img src="img/gallery08.jpg" alt="" /></a></li>
                <li><a href="#"><img src="img/gallery09.jpg" alt="" /></a></li>
                <li><a href="#"><img src="img/gallery10.jpg" alt="" /></a></li>
                <li><a href="#"><img src="img/gallery11.jpg" alt="" /></a></li>
                <li class="no-white-space"><a href="#"><img src="img/gallery12.jpg" alt="" /></a></li>
            </ul>
        </div>
    </section>

    <section class="entry-form">
        <div class="contents-heading bg-yellow">
            <h2 class="section-title text-center">
                <span class="section-title">Entry</span><span class="section-title__white section-title-ja text-center">説明会に申し込む</span></h2>
        </div>
        <div class="inner contents-box">
            <form action="#" class="form-module">
                <table>
                    <tr>
                        <td class="form-text">氏名</td>
                        <td><input type="text" value="" name="name"></td>
                    </tr>
                    <tr>
                        <td class="form-text">フリガナ</td>
                        <td><input type="text" value="" name="kana"></td>
                    </tr>
                    <tr>
                        <td class="form-text">メールアドレス</td>
                        <td><input type="text" value="" name="email"></td>
                    </tr>
                    <tr>
                        <td class="form-text">説明会の希望日時</td>
                        <td><select id="select-box" name="date">
                                <option value="2015/7/18 10:00">2015/7/18 10:00</option>
                                <option value="2015/7/25 10:00">2015/7/25 10:00</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="form-text">志望動機</td>
                        <td>
                            <label for="1"><input type="radio" name="motivation" value="起業したい" id="1">起業をしたい</label>
                            <label for="2"><input type="radio" name="motivation" value="チーズ企業に就職したい。" id="2">チーズ企業に就職したい。</label>
                            <label for="3"><input type="radio" name="motivation" value="チーズと関わる仕事なので、知識をつけたい。" id="3">チーズと関わる仕事なので、知識をつけたい。</label>
                            <label for="4"><input type="radio" name="motivation" value="教養として身につけたい" id="4">教養として身につけたい</label>
                        </td>
                    </tr>
                </table>
                <p class="text-center"><input type="submit" class="entry-btn"></p>
            </form>
        </div>
    </section>

    <?php
        include("footer.php");
    ?>
        
    <!--#information-->
    <!--
    <footer class="footer contents-box">
    <h2 class="section-title text-center"><span class="section-title__white">Information</span><span class="section-title-ja section-title__white text-center">基本情報</span></h2>

        <div class="inner">
            <ul class="list-footer clearfix">
                <li class="text-center"><img src="img/kunsei_cheese.png" alt="space_image" width="175" height="127"></li>
                <li class="maps"><iframe width="300" height="222" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1620.879730972407!2d139.70531929996108!3d35.65829752117608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xff3d912f43a54715!2z5riL6LC344Kv44Ot44K544K_44Ov44O8!5e0!3m2!1sja!2sjp!4v1437965881707" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></li>
                <li class="text-center"><img src="img/kunsei_cheese.png" alt="space_image" width="175" height="127"></li>
            </ul>
        <p class="footer-caution">※実際にはチーズアカデミーという学校は存在しません。<br />
くれぐれも間違ってデジタルハリウッドにお問い合わせすることのないようにご注意ください。</p>
        </div>
    </section>
    -->
    <!--end #information-->
<p class="btn-pageTop"><a href="#"><img src="img/btn-pagetop.png" alt=""></a></p>
</body>
=======
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>チーズの世界へようこそ！ ｜ </title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/style-1.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>
        <div id="container">        
            <h1 id="logoimg"><img src="img/logo.png"></h1>
            <ul id="introduction">
                <li>CHEESE DEVELOPMENT</li>
                <li>GROWTH CHEESE</li>
                <li>CHEESE PERSPECTIVE</li>
                <li>CHEESE HACK!</li>
            </ul>
            
            <p id="keyvisual"><img src="img/bg-cheese.jpg" alt="" width="100%"></p>
            
            
            <form action="input_enq.php" method="get">
                 <input type="submit" value="" name="submit" id="submit">
            </form>   
            
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
>>>>>>> kadai/master
</html>
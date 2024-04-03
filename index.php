<?php
    require($_SERVER['DOCUMENT_ROOT'] . '/app/index.php');
    global $app;
    $page_meta_info = new PageMetaInfo();

?>

<?php $app->view_manager->head($page_meta_info); ?> 

<body class="l-Top">
    <?php $app->view_manager->display_component("g_nav"); ?>

    <header class="c-Hero">
        <section class="container">
            <p class="a-Text">重症・難病・奇病 専門整体</p>
            <h1 class="a-Title">手技処 気楽庵</h1>
        </section>
    </header>
  
    <?php $app->view_manager->display_bread_crumnb("", ""); ?>

    <main class="m-Main">
        <!-- 紹介 -->
        <article class="m-Article">
            <?php $app->view_manager->display_component("preparing"); ?> 
            <section class="m-Top-Message">
                <div class="container c-Section-2">
                    
                    <h2 class="a-Title is_h2">東京まで行かずに <a class="is_key2" href="https://shugido.jp/" target="_blank"><span class="is_key2">大阪で</span>「手技道®️の施術」</a>が受けれます！</h2>
                    
                    <div class="c-Section-2__inner">
                    
                        <div class="c-Info row">
                            <div class="col-md">
                                <div class="c-Info__desctiption">
                                    <!-- <h2 class="a-Title is_h2">当院は、<a href="https://shugido.jp/" target="_blank">「東京で人気の手技道®️」</a>から<br>教わりました手技により整体を行います。</h2> -->
                                    <p>当院では、手技道®️の「腹相」と「全身施術」を受けていただけます。</p>
                                    <p></p>
                                    <!-- <p>
                                        皆様の健康になって幸せに過ごせるよう助力するために、皆様を整体サービスを提供します。<br>
                                        患者様が納得できる判断、説明をしてから施術にあたるよう心掛けております。<br>
                                    </p> -->
                                    <ul>
                                        <li>・鼻炎、アレルギー</li>
                                        <li>・コロナの後遺症</li>
                                        <li>・肩こり、腰痛</li>
                                        <li>・鞭打ち</li>
                                        <li>・精神病</li>
                                    </ul>
                                    <p>など症状など対応しておりますので、<br>まずはお気軽にご相談下さい。</p>
                                </div>
                            </div>

                            <div class="c-Info__image col-md">
                                <div class="a-Image">
                                    <picture>
                                        <source srcset="..." type="jpeg">
                                        <img src="/assets/images/rensyuukai/2023_09_24/9379.jpg?2024_02_01" alt="手技処 気楽庵 玄関">
                                    </picture>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="container c-Section">
                    <h2 class="a-Title is_h2">初めて方へ</h2>
                    <div>
                        <p>当院での施術までの流れについて、<a href="/first-visitor">こちらをクリック!!</a></p>

                        <!-- <p>当院での手技について、<a href="/column/service.html">こちらをクリック!!</a></p>
                        <p>その他について、<a href="/column/">こちらをクリック!!</a></p> -->
                    </div>
                </div>
            </section>

            <!-- <section class="container">
                <h2 class="a-Title is_h2">あなたのお悩みを改善</h2>
                <p></p>
            </section> -->

            <section>
                <div class="container c-Section">
                    <h2 class="a-Title is_h2">気楽庵の特徴</h2>
                    <ul class="u-ch-mt-3">
                        <li>
                            <section class="c-Section">
                                <h3 class="a-Title is_h3">1: 手技道®️の独自技術</h3>
                                <p>当院では、患者様との問診をしっかり行い、また患者様の声に耳を傾けて、西洋医学の思想から痛みや症状に対する直接的なアプローチを行う方法と、東洋医学の思想からバランスや調和を大切にする間接的なアプローチの両面から、お悩みの解決を行います。</p>
                                <p>当院では、手技道®️にて修了したスタッフが在籍し、あなたの症状にあった施術をご提案、健康指導を行っています。</p>
                                <!-- <figure><img src="" alt=""></figure> -->
                            </section>
                        </li>
                        <li>
                            <section class="c-Section">
                                <h3 class="a-Title is_h3">2: 各種疾患にあった的確な健康指導</h3>
                                <!-- TODO: テキストを変える -->
                                <p>「呼吸・姿勢・食事・睡眠・運動・心」それぞれの側面で問題を明確する事で、的確な健康指導を行う事が出来ます。</p>
                                <p>例えば、「右の肩こりは早食いが１つの原因ですので、ゆっくり食事をするように」<br>「アレルギー症状は、主に小麦・お菓子・添加物による腸の荒れが原因の１つですので、健康的な食事をとるように」など</p>
                                <p>これ以上に知りたい方は当院に来院して聞いていただけたら、お話しします。</p>
                                <!-- <figure><img src="" alt=""></figure> -->
                            </section>
                        </li>
                    </ul>
                </div>
            </section>

            <!-- <section class="container">
                <h2>実例</h2>
                <p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa<br>aaaaaaaaaaaaaaaaaaa<br>aaaaaaaaaaa<br>aaaaaaaaaaaaaaaaaaa<br>aaaaaaaaaaa<br>aaaaaaaaaaaaaaaaaaa<br>aaaaaaaaaaa<br>aaaaaaaaaaaaaaaaaaa<br>aaaaaaaaaaa<br>aaaaaaaaaaaaaaaaaaa<br>aaaaaaaaaaa</p>
            </section> -->

            <section>
                <div class="container c-Section">
                    <h2 class="a-Title is_h2">安心と信頼をモットーに！</h2>
                    <p>貴方の身体の事、お気軽に相談して頂けませんか。</p>
                    <p>
                        当院は若い人から、お年寄りまで様々な方を大歓迎です！<br>肩、腰、膝、関節などの痛み、デスクワークの疲労、姿勢のこと等でお悩みの方は、どうぞお越し下さい。<br>
                        お体のお悩み、お聞かせ下さい！<br>
                        「笑顔と元気の出るところ」気楽庵は、お客様に寄り添い、心身のリフレッシュ、身体の痛み改善をお客様と一緒になって考える施術徹底主義の整体院です。<br>気になる事はお気軽にご相談下さい！
                    </p>
                </div>
            </section>
        
        </article>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    
    <?php $app->view_manager->display_component("footer"); ?> 
</body>

<?php $app->view_manager->tail(); ?> 

<?php
    require($_SERVER['DOCUMENT_ROOT'] . '/app/index.php');
    $page_meta_info = new PageMetaInfo();
?>

<?php $app->view_manager->head($page_meta_info); ?> 

<body class="l-Price">
    <?php $app->view_manager->display_component("g_nav"); ?>

    <header class="c-Hero">
        <section class="container">
            <h1 class="a-Title">料金表</h1>
        </section>
    </header>
 
    <?php $app->view_manager->display_bread_crumnb("", ""); ?>

    <main class="m-Main">
        <article class="m-Article">
            
            <?php $app->view_manager->display_component("preparing"); ?> 
            
            <section>
                <div class="container c-Section">
                    <h2 class="a-Title is_h2">施術内容・料金</h2>
                    <p>当院では、筋膜にアプローチし、根本改善することを目標としています。</p>
                    <p>施術だけではなく、セルフケアや食事のアドバイスなども積極的に行っています。</p>
                </div>
            </section>

            <section id="c-Open-Course">
                <div class="container c-Section">
                    <h2 class="a-Title is_h2">体質改善コース: 60分</h2>
                    <p>施術料: 8000円</p>
                    <p>※初回はカウンセリング・検査があるため、70~80分ほど掛かります。</p>
                </div>
            </section>

            <!-- <section>
                <div class="container c-Section">
                    <h2 class="a-Title is_h2">(準備中): 全身調整コース: 30分</h2>
                    <p>疲れやすい方、精神的にリラックスされたい方におすすめ！</p>
                    <p>施術料: 5000円</p>
                    <p class="is_key2">初期限定: 2000円</p>
                    <p>※初回はカウンセリング・検査があるため、30～50分ほど掛かります。</p>

                    <span class="a-Remark">※2023年12月25日からのコースです。</span>
                </div>
            </section>

            <section>
                <div class="container c-Section">
                    <h2 class="a-Title is_h2">(準備中): 体質改善コース: 60分</h2>
                    <p>少しずつでも、鼻炎、アレルギー、腰痛、膝痛などの症状を改善されたい方におすすめ！</p>
                    <p>症状の根本改善を目指して原因の追求からセルフケアまでをサポートします。</p>
                    <p>施術料: 9000円</p>
                    <p class="is_key2">初期限定: 3000円</p>
                    <p>※初回はカウンセリング・検査があるため、60～80分ほど掛かります。</p>
                    <span class="a-Remark">※2023年12月25日からのコースです。</span>
                </div>
            </section>

            <section>
                <div class="container c-Section">
                    <h2 class="a-Title is_h2">(準備中): 本格コース: 90分 + ?</h2>
                    <p>辛い症状を少しでも早く改善したい方におすすめ！</p>
                    <p>施術料: 13000円</p>
                    <p>※初回はカウンセリング・検査があるため、90～110分ほど掛かります。</p>
                    <span class="a-Remark">※2023年12月25日からのコースです。</span>
                </div>
            </section>
         -->
        </article>
    </main>
    <!-- <div class="c-Open-Course-Btn">
        <a class="a-Title is_h3" href="#c-Open-Course">オープン記念コースはこちら！</a>
    </div> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <?php $app->view_manager->display_component("footer"); ?> 
</body>

<?php $app->view_manager->tail(); ?> 
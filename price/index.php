<!DOCTYPE html>
<html lang="ja">
<head>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/__components/head.php'); ?> 
</head>
<body class="l-Price">
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/__components/g_nav.php'); ?>

    <header class="c-Hero">
        <section class="container">
            <h1 class="a-Title">料金表</h1>
        </section>
    </header>
    
    <div class="c-breadcrumb container u-ch-mt-2">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">ホーム</a></li>
                <li class="breadcrumb-item active" aria-current="page">料金表</li>
            </ol>
        </nav>
    </div>

    <main class="m-Main">
        <article class="m-Article">
            
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/__components/preparing.php'); ?> 
            
            <section>
                <div class="container c-Section">
                    <h2 class="a-Title is_h2">施術内容・料金</h2>
                    <p>当院では、筋膜にアプローチし、根本改善することを目標としています。</p>
                    <p>施術だけではなく、セルフケアや食事のアドバイスなども積極的に行っています。</p>
                </div>
            </section>

            <section>
                <div class="container c-Section">
                    <h2 class="a-Title is_h2">(準備中): 全身調整コース: 30分</h2>
                    <p>疲れやすい方、精神的にリラックスされたい方におすすめ！</p>
                    <p>施術だけではなく、セルフケアや食事のアドバイスなども積極的に行っています。</p>
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

            <section id="c-Open-Course">
                <div class="container c-Section">
                    <h2 class="a-Title is_h2">オープン記念コース: 50分</h2>
                    <p>2023年12月25日まで <span class="has_line">期間限定！</span></p>
                    <p>施術料: 4000円</p>
                    <p class="is_key2">初期限定: 2000円</p>
                    <p>※初回はカウンセリング・検査があるため、50～70分ほど掛かります。</p>
                </div>
            </section>
        
        </article>
    </main>
    <div class="c-Open-Course-Btn">
        <a class="a-Title is_h3" href="#c-Open-Course">オープン記念コースはこちら！</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/__components/footer.php'); ?> 
</body>
</html>
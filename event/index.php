<!DOCTYPE html>
<html lang="ja">
<head>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/__components/head.php'); ?>
</head>
<body class="l-Column">
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/__components/g_nav.php'); ?>

    <header class="c-Hero">
        <section class="container">
            <h1 class="a-Title">イベント</h1>
        </section>
    </header>
    
    <div class="c-breadcrumb container u-ch-mt-2">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">ホーム</a></li>
                <li class="breadcrumb-item active" aria-current="page">イベント</li>
            </ol>
        </nav>
    </div>

    <main class="m-Main">
        <article class="m-Article">
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/__components/preparing.php'); ?> 
            <section>
                <div class="container c-Section">
                    <h2 class="a-Title is_h2">イベント一覧</h2>
                    <ul class="c-List">
                        <li>
                            <!-- TODO: クリックできる感を出す -->
                            <li>
                                <p>・準備中です：体験会</p>
                            </li>
                        </li>
                    </ul>
                </div>
            </section>
        
        </article>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/__components/footer.php'); ?> 
</body>
</html>
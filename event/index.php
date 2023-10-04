<?php
    require($_SERVER['DOCUMENT_ROOT'] . '/app/index.php');
    $page_meta_info = new PageMetaInfo();
?>

<?php $app->view_manager->head($page_meta_info); ?> 

<body class="l-Column">
    <?php $app->view_manager->display_component("g_nav"); ?>

    <header class="c-Hero">
        <section class="container">
            <h1 class="a-Title">イベント</h1>
        </section>
    </header>

    <?php $app->view_manager->display_bread_crumnb("", ""); ?>

    <main class="m-Main">
        <article class="m-Article">
            <?php $app->view_manager->display_component("preparing"); ?> 
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
    <?php $app->view_manager->display_component("footer"); ?> 
</body>

<?php $app->view_manager->tail(); ?> 
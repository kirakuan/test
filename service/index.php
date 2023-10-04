<?php
    require($_SERVER['DOCUMENT_ROOT'] . '/app/index.php');
    $page_meta_info = new PageMetaInfo();
?>

<?php $app->view_manager->head($page_meta_info); ?> 

<body class="l-Service">
    <!-- メリット -->

    <header class="c-Hero">
        <section class="container">
            <h1 class="a-Title">当院のサービスついて</h1>
        </section>
    </header>
  
    <?php $app->view_manager->display_bread_crumnb("", ""); ?>

    <main class="m-Main">

        <article class="m-Article">
            
            <script>prepend_preparing()</script>
            
            <section class="container">
                <h2 class="a-Title is_h2">テスト</h2>
                <p>テスト</p>
            </section>
        
        </article>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script>append_contact()</script>
    <script>append_nav()</script>
</body>

<?php $app->view_manager->tail(); ?> 
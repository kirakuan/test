

const append_nav = function () {

    $(`
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-bottom">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">TOP</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/first-visitor">初めての方へ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/service">サービス</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/column">読み物</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    `).appendTo("body")



    // $(`
    // <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-bottom">
    //     <div class="container-fluid">
    //         <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
    //             <span class="navbar-toggler-icon"></span>
    //         </button>
    //         <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
    //             <div class="offcanvas-header">
    //                 <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    //             </div>
    //             <div class="offcanvas-body">
    //                 <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
    //                     <li class="nav-item">
    //                         <a class="nav-link active" aria-current="page" href="/">TOP</a>
    //                     </li>
    //                     <li class="nav-item">
    //                         <a class="nav-link" href="/first-visitor">初めての方へ</a>
    //                     </li>
    //                     <li class="nav-item" style="display: None;">
    //                         <a class="nav-link" href="#">症状一覧</a>
    //                     </li>
    //                     <li class="nav-item">
    //                         <a class="nav-link" href="#">サービスメニュー</a>
    //                     </li>
    //                     <li class="nav-item">
    //                         <a class="nav-link" href="#">料金表</a>
    //                     </li>
    //                     <li class="nav-item">
    //                         <a class="nav-link" href="#">スタッフ紹介</a>
    //                     </li>
    //                     <li class="nav-item">
    //                         <a class="nav-link" href="#">お問い合わせ</a>
    //                     </li>
    //                 </ul>
    //                 <form class="d-flex mt-3" role="search">
    //                     <input class="form-control me-2" type="search" placeholder="キーワードを入力してください" aria-label="Search">
    //                     <button class="btn btn-outline-success" type="submit">検索</button>
    //                 </form>
    //             </div>
    //         </div>
    //     </div>
    // </nav>
    // `).appendTo("body")
}


const append_contact = function () {
    $(`
    <footer class="m-Footer">
        <div class="m-Footer__inner container u-ch-mt-2">
            <div class="c-Opening-Hours has_no_mt">
                <p class="a-Title is_h3">受付時間<span>予約優先制</span><p>
                <p>土、日、祝日: 午前 10:00 ~ 午後 20:00</p>
                <p>その他日時については、ご相談ください。</p>
            </div>
            <div class="c-Contact" id="c-Contact">
                <p class="a-Title is_h3">連絡先</p>
                <a href="tel:080-3769-8027" target="_blank">080-3769-8027</a>
                <p>
                    <a href="mailto:nakabayashi.shugido-r@gmail.com?subject=「手技処 気楽庵」へのお問い合わせ" target="_blank">nakabayashi.shugido-r@gmail.com</a>
                </p>
                <p>
                    <a data-v-6fa6a74a="" href="https://lin.ee/QXXp8VJ" target="_blank">lineの友達登録をお願いします！</a>
                </p>
            </div>
            <div class="c-Address">
                <p class="a-Title is_h3">当院はこちら</p>
                <p><a href="https://goo.gl/maps/CEporq8CZ4EgXQXR9" target="_blank">〒534-0002 大阪市都島区大東町 2-11-14</a></p>
            </div>
            <div class="c-Access">
                <p class="a-Title is_h3">アクセス</p>
                <p>JR東西戦「城北公園通り」下車・徒歩15分</p>
                <p>大阪シティバス・57号・毛馬中央公園行き「大東町三丁目」下車・徒歩３分</p>
            </div>
        </div>
    </footer>`).appendTo("body")
}

const prepend_preparing = function () {
    $(".m-Article").prepend(`
    <section>
        <div class="container c-Section">
            <h2 class="a-Title is_h2">サイト準備中です。</h2>
            <p><a href="#c-Contact">連絡先はこちら！</a></p>
        </div>
    </section>
    `)
}

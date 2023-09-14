

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
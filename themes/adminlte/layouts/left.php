<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= Yii::getAlias('@web').'/images/P2.jpg'; ?>" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?= Yii::$app->user->identity->username ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- | Navigation Admin | -->
        <?php if (Yii::$app->user->identity->id_user_role == 1): ?>
            <?= dmstr\widgets\Menu::widget(
                [
                    'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                    'items' => [
                        //['label' => 'Rumah', 'icon' => 'home', 'url' => ['site/index'],],
                        ['label' => 'Home', 'icon' => 'home', 'url' => ['site/dashboard'],],
                        ['label' => 'Menu Buku', 'options' => ['class' => 'header']],
                        [
                            'label' => 'Buku',
                            'icon' => 'book',
                            'url' => '#',
                            'items' => [
                                ['label' => 'Buku', 'icon' => 'book', 'url' => ['buku/index'],],
                                ['label' => 'Kategori', 'icon' => 'cubes', 'url' => ['kategori/index'],],
                                ['label' => 'Penerbit', 'icon' => 'building', 'url' => ['penerbit/index'],],
                                ['label' => 'Penulis', 'icon' => 'user', 'url' => ['penulis/index'],],
                                ['label' => 'Peminjaman', 'icon' => 'sticky-note', 'url' => ['peminjaman/index'],],
                            ],
                        ],
                        ['label' => 'Menu Pengguna', 'options' => ['class' => 'header']],
                        [
                            'label' => 'Pengguna',
                            'icon' => 'user',
                            'url' => '#',
                            'items' => [
                                ['label' => 'User', 'icon' => 'user', 'url' => ['user/index'],],
                                ['label' => 'Anggota', 'icon' => 'user', 'url' => ['anggota/index'],],
                                ['label' => 'Petugas', 'icon' => 'users', 'url' => ['petugas/index'],],
                                ['label' => 'Kategori User', 'icon' => 'cubes', 'url' => ['user-role/index'],],
                            ],
                        ],
                        ['label' => 'Menu Fitur Lain', 'options' => ['class' => 'header']],
                        [
                            'label' => 'Fitur Lain',
                            'icon' => 'gear',
                            'url' => '#',
                            'items' => [
                                ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
                                ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
                                ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                            ],
                        ],
                        ['label' => 'Lain-lain', 'options' => ['class' => 'header']],
                        ['label' => 'Kontak', 'icon' => 'tty', 'url' => ['site/contact'],],
                        ['label' => 'Tentang', 'icon' => 'font', 'url' => ['site/about'],],
                        ['label' => 'Testing', 'icon' => 'file-word-o', 'url' => ['site/testing'],],
                        /*[
                            'label' => 'Some tools',
                            'icon' => 'share',
                            'url' => '#',
                            'items' => [
                                ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
                                ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
                                [
                                    'label' => 'Level One',
                                    'icon' => 'circle-o',
                                    'url' => '#',
                                    'items' => [
                                        ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
                                        [
                                            'label' => 'Level Two',
                                            'icon' => 'circle-o',
                                            'url' => '#',
                                            'items' => [
                                                ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                                ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],*/
                    ],
                ]
            ) ?>
        <?php endif ?>

        <!-- | Navigation Anggota | -->
        <?php if (Yii::$app->user->identity->id_user_role == 2): ?>
            <?= dmstr\widgets\Menu::widget(
                [
                    'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                    'items' => [
                        //['label' => 'Rumah', 'icon' => 'home', 'url' => ['site/index'],],
                        ['label' => 'Home', 'icon' => 'home', 'url' => ['site/dashboard'],],
                        ['label' => 'Menu Buku', 'options' => ['class' => 'header']],
                        [
                            'label' => 'Buku',
                            'icon' => 'book',
                            'url' => '#',
                            'items' => [
                                /*['label' => 'Buku', 'icon' => 'book', 'url' => ['buku/index'],],
                                ['label' => 'Kategori', 'icon' => 'cubes', 'url' => ['kategori/index'],],
                                ['label' => 'Penerbit', 'icon' => 'building', 'url' => ['penerbit/index'],],
                                ['label' => 'Penulis', 'icon' => 'user', 'url' => ['penulis/index'],],*/
                                ['label' => 'Peminjaman', 'icon' => 'sticky-note', 'url' => ['peminjaman/index'],],
                            ],
                        ],
                        /*['label' => 'Menu Pengguna', 'options' => ['class' => 'header']],
                        [
                            'label' => 'Pengguna',
                            'icon' => 'user',
                            'url' => '#',
                            'items' => [
                                ['label' => 'User', 'icon' => 'user', 'url' => ['user/index'],],
                                ['label' => 'Anggota', 'icon' => 'user', 'url' => ['anggota/index'],],
                                ['label' => 'Petugas', 'icon' => 'users', 'url' => ['petugas/index'],],
                                ['label' => 'Kategori User', 'icon' => 'cubes', 'url' => ['user-role/index'],],
                            ],
                        ],*/
                        /*['label' => 'Menu Fitur Lain', 'options' => ['class' => 'header']],
                        [
                            'label' => 'Fitur Lain',
                            'icon' => 'gear',
                            'url' => '#',
                            'items' => [
                                ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
                                ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
                                ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                            ],
                        ],*/
                        /*['label' => 'Lain-lain', 'options' => ['class' => 'header']],
                        ['label' => 'Kontak', 'icon' => 'tty', 'url' => ['site/contact'],],
                        ['label' => 'Tentang', 'icon' => 'font', 'url' => ['site/about'],],
                        ['label' => 'Testing', 'icon' => 'file-word-o', 'url' => ['site/testing'],],*/
                        /*[
                            'label' => 'Some tools',
                            'icon' => 'share',
                            'url' => '#',
                            'items' => [
                                ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
                                ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
                                [
                                    'label' => 'Level One',
                                    'icon' => 'circle-o',
                                    'url' => '#',
                                    'items' => [
                                        ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
                                        [
                                            'label' => 'Level Two',
                                            'icon' => 'circle-o',
                                            'url' => '#',
                                            'items' => [
                                                ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                                ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],*/
                    ],
                ]
            ) ?>
        <?php endif ?>

        <!-- | Navigation Petugas | -->
        <?php if (Yii::$app->user->identity->id_user_role == 3): ?>
            <?= dmstr\widgets\Menu::widget(
                [
                    'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                    'items' => [
                        //['label' => 'Rumah', 'icon' => 'home', 'url' => ['site/index'],],
                        ['label' => 'Home', 'icon' => 'home', 'url' => ['site/dashboard'],],
                        ['label' => 'Menu Buku', 'options' => ['class' => 'header']],
                        [
                            'label' => 'Buku',
                            'icon' => 'book',
                            'url' => '#',
                            'items' => [
                                ['label' => 'Buku', 'icon' => 'book', 'url' => ['buku/index'],],
                                ['label' => 'Kategori', 'icon' => 'cubes', 'url' => ['kategori/index'],],
                                ['label' => 'Penerbit', 'icon' => 'building', 'url' => ['penerbit/index'],],
                                ['label' => 'Penulis', 'icon' => 'user', 'url' => ['penulis/index'],],
                                ['label' => 'Peminjaman', 'icon' => 'sticky-note', 'url' => ['peminjaman/index'],],
                            ],
                        ],
                        ['label' => 'Menu Pengguna', 'options' => ['class' => 'header']],
                        [
                            'label' => 'Pengguna',
                            'icon' => 'user',
                            'url' => '#',
                            'items' => [
                                //['label' => 'User', 'icon' => 'user', 'url' => ['user/index'],],
                                ['label' => 'Anggota', 'icon' => 'user', 'url' => ['anggota/index'],],
                                //['label' => 'Petugas', 'icon' => 'users', 'url' => ['petugas/index'],],
                                //['label' => 'Kategori User', 'icon' => 'cubes', 'url' => ['user-role/index'],],
                            ],
                        ],
                        /*['label' => 'Menu Fitur Lain', 'options' => ['class' => 'header']],
                        [
                            'label' => 'Fitur Lain',
                            'icon' => 'gear',
                            'url' => '#',
                            'items' => [
                                ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
                                ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
                                ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                            ],
                        ],*/
                        /*['label' => 'Lain-lain', 'options' => ['class' => 'header']],
                        ['label' => 'Kontak', 'icon' => 'tty', 'url' => ['site/contact'],],
                        ['label' => 'Tentang', 'icon' => 'font', 'url' => ['site/about'],],
                        ['label' => 'Testing', 'icon' => 'file-word-o', 'url' => ['site/testing'],],*/
                        /*[
                            'label' => 'Some tools',
                            'icon' => 'share',
                            'url' => '#',
                            'items' => [
                                ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
                                ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
                                [
                                    'label' => 'Level One',
                                    'icon' => 'circle-o',
                                    'url' => '#',
                                    'items' => [
                                        ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
                                        [
                                            'label' => 'Level Two',
                                            'icon' => 'circle-o',
                                            'url' => '#',
                                            'items' => [
                                                ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                                ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],*/
                    ],
                ]
            ) ?>
        <?php endif ?>

    </section>

</aside>

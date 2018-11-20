<aside class="main-sidebar">

    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?=Yii::$app->user->identity->username?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <!--<form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form> -->
        <!-- /.search form -->

        <?php
        if(  Yii::$app->user->identity->isAdmin) {
            $user_items =                             [
                ['label' => Yii::t('hstone', 'Users'), 'icon' => 'users', 'url' => ['/user/admin']],
                ['label' => Yii::t('hstone', 'assignment'), 'icon' => 'users', 'url' => ['/admin/assignment']],
                //['label' => Yii::t('hstone', 'Admin'), 'icon' => 'users', 'url' => ['/admin']],
                ['label' => Yii::t('hstone', 'route'), 'icon' => 'users', 'url' => ['/admin/route']],
                ['label' => Yii::t('hstone', 'permission'), 'icon' => 'users', 'url' => ['/admin/permission']],
                ['label' => Yii::t('hstone', 'menu'), 'icon' => 'users', 'url' => ['/admin/menu']],
                ['label' => Yii::t('hstone', 'role'), 'icon' => 'users', 'url' => ['/admin/role']],

                //['label' => Yii::t('hstone', 'user'), 'icon' => 'users', 'url' => ['/admin/user']],

            ];

        }else{
            $user_items =          [];
        }
        ?>
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    [
                            'label' => Yii::t('hstone', 'Users'),
                        'icon' => 'share',
                        'url' => '#',
                        'items' => $user_items

                    ],
                    [
                        'label' => Yii::t('hstone', 'Daily Checklists'),
                        'icon' => 'share',
                        'url' => '#',
                        'items' =>
                            [
                                [
                                    'label' => Yii::t('hstone', 'Front of the House'),
                                    'icon' => 'circle-o',
                                    'url' => '#',
                                    'items' => [
                                        ['label' => Yii::t('hstone', 'List'), 'icon' => 'circle-o', 'url' => ['/fronthouse'],],
                                        ['label' => Yii::t('hstone', 'New'), 'icon' => 'circle-o', 'url' => ['/fronthouse/create'],],
                                    ],
                                ],
                                [
                                    'label' => Yii::t('hstone', 'Production Area'),
                                    'icon' => 'circle-o',
                                    'url' => '#',
                                    'items' => [
                                        ['label' => Yii::t('hstone', 'List'), 'icon' => 'circle-o', 'url' => ['/productionarea'],],
                                        ['label' => Yii::t('hstone', 'New'), 'icon' => 'circle-o', 'url' => ['/productionarea/create'],],
                                    ],
                                ],
                                [
                                    'label' => Yii::t('hstone', 'Hair & Mackup Area'),
                                    'icon' => 'circle-o',
                                    'url' => '#',
                                    'items' => [
                                        ['label' => Yii::t('hstone', 'List'), 'icon' => 'circle-o', 'url' => ['/hairmackup'],],
                                        ['label' => Yii::t('hstone', 'New'), 'icon' => 'circle-o', 'url' => ['/hairmackup/create'],],
                                    ],
                                ],
                                [
                                    'label' => Yii::t('hstone', 'Spa Area'),
                                    'icon' => 'circle-o',
                                    'url' => '#',
                                    'items' => [
                                        ['label' => Yii::t('hstone', 'List'), 'icon' => 'circle-o', 'url' => ['/spa'],],
                                        ['label' => Yii::t('hstone', 'New'), 'icon' => 'circle-o', 'url' => ['/spa/create'],],
                                    ],
                                ],
                                [
                                    'label' =>  Yii::t('hstone', 'Manicure and Pedicure'),
                                    'icon' => 'circle-o',
                                    'url' => '#',
                                    'items' => [
                                        ['label' => Yii::t('hstone', 'List'), 'icon' => 'circle-o', 'url' => ['/manicure'],],
                                        ['label' => Yii::t('hstone', 'New'), 'icon' => 'circle-o', 'url' => ['/manicure/create'],],
                                    ],
                                ],
                                [
                                    'label' => Yii::t('hstone', 'SPA cleaning Checklist'),
                                    'icon' => 'circle-o',
                                    'url' => '#',
                                    'items' => [
                                        ['label' => Yii::t('hstone', 'List'), 'icon' => 'circle-o', 'url' => ['/commonarea'],],
                                        ['label' => Yii::t('hstone', 'New'), 'icon' => 'circle-o', 'url' => ['/commonarea/create'],],
                                    ],
                                ],
                            ]
                    ],
                    [
                        'label' =>Yii::t('hstone', 'Branches'),
                        'icon' => 'circle-o',
                        'url' => '#',
                        'items' => [
                            ['label' => Yii::t('hstone', 'List'), 'icon' => 'circle-o', 'url' => ['/branch'],],
                            ['label' => Yii::t('hstone', 'New'), 'icon' => 'circle-o', 'url' => ['/commobranchnarea/create'],],
                        ],
                    ],
//                    [
//                        'label' => Yii::t('hstone', 'Cleaning Checklists'),
//                        'icon' => 'share',
//                        'url' => '#',
//                        'items' =>
//                            [
//                                [
//                                    'label' => Yii::t('hstone', Yii::t('hstone', 'Salon Area')),
//                                    'icon' => 'circle-o',
//                                    'url' => '#',
//                                    'items' => [
//                                        ['label' => Yii::t('hstone', 'List'), 'icon' => 'circle-o', 'url' => ['/salonarea'],],
//                                        ['label' => Yii::t('hstone', 'New'), 'icon' => 'circle-o', 'url' => ['/salonarea/create'],],
//                                    ],
//                                ],
//                                [
//                                    'label' => Yii::t('hstone', Yii::t('hstone', 'Spa Area')),
//                                    'icon' => 'circle-o',
//                                    'url' => '#',
//                                    'items' => [
//                                        ['label' => Yii::t('hstone', 'List'), 'icon' => 'circle-o', 'url' => ['/spaarea'],],
//                                        ['label' => Yii::t('hstone', 'New'), 'icon' => 'circle-o', 'url' => ['/spaarea/create'],],
//                                    ],
//                                ],
//                                [
//                                    'label' => Yii::t('hstone', Yii::t('hstone', 'Common Area')),
//                                    'icon' => 'circle-o',
//                                    'url' => '#',
//                                    'items' => [
//                                        ['label' => Yii::t('hstone', 'List'), 'icon' => 'circle-o', 'url' => ['/commonarea'],],
//                                        ['label' => Yii::t('hstone', 'New'), 'icon' => 'circle-o', 'url' => ['/commonarea/create'],],
//                                    ],
//                                ],
//                                [
//                                    'label' => Yii::t('hstone', Yii::t('hstone', 'Product Bar area')),
//                                    'icon' => 'circle-o',
//                                    'url' => '#',
//                                    'items' => [
//                                        ['label' => Yii::t('hstone', 'List'), 'icon' => 'circle-o', 'url' => ['/productarea'],],
//                                        ['label' => Yii::t('hstone', 'New'), 'icon' => 'circle-o', 'url' => ['/productarea/create'],],
//                                    ],
//                                ],
//                                [
//                                    'label' => Yii::t('hstone', Yii::t('hstone', 'Reception area')),
//                                    'icon' => 'circle-o',
//                                    'url' => '#',
//                                    'items' => [
//                                        ['label' => Yii::t('hstone', 'List'), 'icon' => 'circle-o', 'url' => ['/receptionarea'],],
//                                        ['label' => Yii::t('hstone', 'New'), 'icon' => 'circle-o', 'url' => ['/receptionarea/create'],],
//                                    ],
//                                ],
//                                [
//                                    'label' => Yii::t('hstone', Yii::t('hstone', 'Entrance area')),
//                                    'icon' => 'circle-o',
//                                    'url' => '#',
//                                    'items' => [
//                                        ['label' => Yii::t('hstone', 'List'), 'icon' => 'circle-o', 'url' => ['/entrancearea'],],
//                                        ['label' => Yii::t('hstone', 'New'), 'icon' => 'circle-o', 'url' => ['/entrancearea/create'],],
//                                    ],
//                                ],
//                        ]
//                    ],
                    [
                        'label' => Yii::t('hstone', 'Customers'),
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            [
                                'label' => Yii::t('hstone', 'Customer intake'),
                                'icon' => 'circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => Yii::t('hstone', 'List'), 'icon' => 'circle-o', 'url' => ['/health'],],
                                    ['label' => Yii::t('hstone', 'New'), 'icon' => 'circle-o', 'url' => ['/health/create'],],
                                ],
                            ],
                            [
                                'label' => Yii::t('hstone', 'Acrylic & Gel'),
                                'icon' => 'circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => Yii::t('hstone', 'List'), 'icon' => 'circle-o', 'url' => ['/acrylic'],],
                                    ['label' => Yii::t('hstone', 'New'), 'icon' => 'circle-o', 'url' => ['/acrylic/create'],],
                                ],
                            ],
                            [
                                'label' => Yii::t('hstone', 'hammam and body scrub'),
                                'icon' => 'circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => Yii::t('hstone', 'List'), 'icon' => 'circle-o', 'url' => ['/scrub'],],
                                    ['label' => Yii::t('hstone', 'New'), 'icon' => 'circle-o', 'url' => ['/scrub/create'],],
                                ],
                            ],
                            [
                                'label' => Yii::t('hstone', 'Facial Treatment'),
                                'icon' => 'circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => Yii::t('hstone', 'List'), 'icon' => 'circle-o', 'url' => ['/facial'],],
                                    ['label' => Yii::t('hstone', 'New'), 'icon' => 'circle-o', 'url' => ['/facial/create'],],
                                ],
                            ],
                         [
                                'label' => Yii::t('hstone', 'Hair Treatment'),
                                'icon' => 'circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => Yii::t('hstone', 'List'), 'icon' => 'circle-o', 'url' => ['/hair-treatment'],],
                                    ['label' => Yii::t('hstone', 'New'), 'icon' => 'circle-o', 'url' => ['/hair-treatment/create'],],
                                ],
                            ],
                         [
                                'label' => Yii::t('hstone', 'Hair colour consultation'),
                                'icon' => 'circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => Yii::t('hstone', 'List'), 'icon' => 'circle-o', 'url' => ['/hair-colour'],],
                                    ['label' => Yii::t('hstone', 'New'), 'icon' => 'circle-o', 'url' => ['/hair-colour/create'],],
                                ],
                            ],
                            [
                                'label' => Yii::t('hstone', 'keratin consultation'),
                                'icon' => 'circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => Yii::t('hstone', 'List'), 'icon' => 'circle-o', 'url' => ['/keratin'],],
                                    ['label' => Yii::t('hstone', 'New'), 'icon' => 'circle-o', 'url' => ['/keratin/create'],],
                                ],
                            ],
                            [
                                'label' => Yii::t('hstone', 'Manicure & Pedicure'),
                                'icon' => 'circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => Yii::t('hstone', 'List'), 'icon' => 'circle-o', 'url' => ['/manicurep'],],
                                    ['label' => Yii::t('hstone', 'New'), 'icon' => 'circle-o', 'url' => ['/manicurep/create'],],
                                ],
                            ],
                            [
                                'label' => Yii::t('hstone', 'Massage'),
                                'icon' => 'circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => Yii::t('hstone', 'List'), 'icon' => 'circle-o', 'url' => ['/massage'],],
                                    ['label' => Yii::t('hstone', 'New'), 'icon' => 'circle-o', 'url' => ['/massage/create'],],
                                ],
                            ],
                            [
                                'label' => Yii::t('hstone', 'Visits'),
                                'icon' => 'circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => Yii::t('hstone', 'List'), 'icon' => 'circle-o', 'url' => ['/visits'],],
                                    ['label' => Yii::t('hstone', 'New'), 'icon' => 'circle-o', 'url' => ['/visits/create'],],
                                ],
                            ],
                        ],
                    ],



//                    [
//                        'label' => 'Categories',
//                        'icon' => 'share',
//                        'url' => '#',
//                        'items' => [
//                            ['label' => 'Categories List', 'icon' => 'file-code-o', 'url' => ['/category/index'],],
//                            ['label' => 'Add new category', 'icon' => 'dashboard', 'url' => ['/category/create'],],
//                        ],
//                    ],

//                    ['label' => Yii::t('language', 'Scan'), 'url' => ['/user/admin']],
//                    [
//                        'label' => 'Categories',
//                        'icon' => 'share',
//                        'url' => '#',
//                        'items' => [
//                            ['label' => 'Categories List', 'icon' => 'file-code-o', 'url' => ['/category/index'],],
//                            ['label' => 'Add new category', 'icon' => 'dashboard', 'url' => ['/category/create'],],
//                        ],
//                    ],
//                    [
//                        'label' => 'Posts',
//                        'icon' => 'share',
//                        'url' => '#',
//                        'items' => [
//                            ['label' => 'Posts List', 'icon' => 'file-code-o', 'url' => ['/post/index'],],
//                            ['label' => 'Add new Post', 'icon' => 'dashboard', 'url' => ['/post/create'],],
//                        ],
//                    ],

//                    ['label' => 'Menu Yii2', 'options' => ['class' => 'header']],
//                    ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
//                    ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
//                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
//                    [
//                        'label' => 'Some tools',
//                        'icon' => 'share',
//                        'url' => '#',
//                        'items' => [
//                            ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
//                            ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
//                            [
//                                'label' => 'Level One',
//                                'icon' => 'circle-o',
//                                'url' => '#',
//                                'items' => [
//                                    ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
//                                    [
//                                        'label' => 'Level Two',
//                                        'icon' => 'circle-o',
//                                        'url' => '#',
//                                        'items' => [
//                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
//                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
//                                        ],
//                                    ],
//                                ],
//                            ],
//                        ],
//                    ],
//                    ['label' => Yii::t('language', 'Language'), 'items' => [
//                        ['label' => Yii::t('language', 'List of languages'), 'url' => ['/translatemanager/language/list']],
//                        ['label' => Yii::t('language', 'Create'), 'url' => ['/translatemanager/language/create']],
//                    ]
//                    ],


//                    ['label' => Yii::t('language', 'Scan'), 'url' => ['/translatemanager/language/scan']],
//                    ['label' => Yii::t('language', 'Optimize'), 'url' => ['/translatemanager/language/optimizer']],
//                    ['label' => Yii::t('language', 'Im-/Export'), 'items' => [
//                        ['label' => Yii::t('language', 'Import'), 'url' => ['/translatemanager/language/import']],
//                        ['label' => Yii::t('language', 'Export'), 'url' => ['/translatemanager/language/export']],
//                    ]],
                ],
            ]
        ) ?>

    </section>

</aside>

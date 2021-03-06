<div class="col-md-3 left_col">
    <div class="left_col scroll-view">

        <div class="navbar nav_title" style="border: 0;">
            <a href="/" class="site_title"><i class="fa fa-paw"></i> <span>Gentellela Alela!</span></a>
        </div>
        <div class="clearfix"></div>

        <!-- menu prile quick info -->
        <div class="profile">
            <div class="profile_pic">
                <img src="http://placehold.it/128x128" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
            </div>
        </div>
        <!-- /menu prile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
                <h3>General</h3>
                <?=
                \yiister\gentelella\widgets\Menu::widget(
                    [
                        "items" => [
                            ["label" => "Home", "url" => "/", "icon" => "home"],
                            ["label" => "Universitas", "url" => ["universitas/"], "icon" => "bank"],
                            [
                                "label" => "Widgets",
                                "icon" => "th",
                                "url" => "#",
                                "items" => [
                                    ["label" => "Menu", "url" => ["site/menu"]],
                                    ["label" => "Panel", "url" => ["site/panel"]],
                                ],
                            ],
                            [
                                "label" => "Badges",
                                "url" => "#",
                                "icon" => "table",
                                "items" => [
                                    [
                                        "label" => "Default",
                                        "url" => "#",
                                        "badge" => "123",
                                    ],
                                    [
                                        "label" => "Success",
                                        "url" => "#",
                                        "badge" => "new",
                                        "badgeOptions" => ["class" => "label-success"],
                                    ],
                                    [
                                        "label" => "Danger",
                                        "url" => "#",
                                        "badge" => "!",
                                        "badgeOptions" => ["class" => "label-danger"],
                                    ],
                                ],
                            ],
                            [
                                "label" => "Multilevel",
                                "url" => "#",
                                "icon" => "table",
                                "items" => [
                                    [
                                        "label" => "Second level 1",
                                        "url" => "#",
                                    ],
                                    [
                                        "label" => "Second level 2",
                                        "url" => "#",
                                        "items" => [
                                            [
                                                "label" => "Third level 1",
                                                "url" => "#",
                                            ],
                                            [
                                                "label" => "Third level 2",
                                                "url" => "#",
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ]
                )
                ?>
            </div>

        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>
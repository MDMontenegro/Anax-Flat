<?php
/**
 * Config-file for navigation bar.
 *
 */
return [

    // Name of this menu
    "navbarTop" => [
        // Use for styling the menu
        "wrapper" => null,
        "class" => "rm-default rm-desktop",
     
        // Here comes the menu structure
        "items" => [

            "report" => [
                "text"  => t("Redovisning"),
                "url"   => $this->di->get("url")->create("report"),
                "title" => t("Reports from kmom assignments"),
                "mark-if-parent" => true,
            ],

            "about" => [
                "text"  => t("Om"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("About this website")
            ],
            
            "grid" => [
                "text"  => t("Grid"),
                "url"   => $this->di->get("url")->create("grid"),
                "title" => t("About this website")
            ],
            
            "typography" => [
                "text"  => t("Typografi"),
                "url"   => $this->di->get("url")->create("typography"),
                "title" => t("About this website")
            ],
            
            "images" => [
                "text"  => t("Bilder"),
                "url"   => $this->di->get("url")->create("images"),
                "title" => t("About this website")
            ],
            
            "blog" => [
                "text"  => t("Blogg"),
                "url"   => $this->di->get("url")->create("blog"),
                "title" => t("About this website")
            ],
            
            "themes" => [
                "text"  => t("Teman"),
                "url"   => $this->di->get("url")->create("themes"),
                "title" => t("About this website"),
                "submenu" => [
                    "items" => [
                        "theme" => [
                            "text"  => t("Färg teman"),
                            "url"   => $this->di->get("url")->create("theme"),
                            "title" => t("About this website")
                        ],
                        "design-principle" => [
                            "text"  => t("Design principer"),
                            "url"   => $this->di->get("url")->create("design-principle"),
                            "title" => t("About this website")
                        ],
                        "design-element" => [
                            "text"  => t("Design element"),
                            "url"   => $this->di->get("url")->create("design-element"),
                            "title" => t("About this website")
                        ],
                    ],
                ],
            ],
            
            /*"design-principle" => [
                "text"  => t("Design principer"),
                "url"   => $this->di->get("url")->create("design-principle"),
                "title" => t("About this website")
            ],*/
            
            "analysis" => [
                "text"  => t("Analys"),
                "url"   => $this->di->get("url")->create("analysis"),
                "title" => t("About this website")
            ],
        ],
    ],




    // Used as menu together with responsive menu
    // Name of this menu
    "navbarMax" => [
        // Use for styling the menu
        "id" => "rm-menu",
        "wrapper" => null,
        "class" => "rm-default rm-mobile",
     
        // Here comes the menu structure
        "items" => [

            "report" => [
                "text"  => t("Redovisning"),
                "url"   => $this->di->get("url")->create("report"),
                "title" => t("Reports from kmom assignments"),
                "mark-if-parent" => true,
            ],

            "about" => [
                "text"  => t("Om"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("About this website")
            ],
            
            "grid" => [
                "text"  => t("Grid"),
                "url"   => $this->di->get("url")->create("grid"),
                "title" => t("About this website")
            ],
            
            "typography" => [
                "text"  => t("Typografi"),
                "url"   => $this->di->get("url")->create("typography"),
                "title" => t("About this website")
            ],
            
            "images" => [
                "text"  => t("Bilder"),
                "url"   => $this->di->get("url")->create("images"),
                "title" => t("About this website")
            ],
            
            "blog" => [
                "text"  => t("Blogg"),
                "url"   => $this->di->get("url")->create("blog"),
                "title" => t("About this website")
            ],
            
            "themes" => [
                "text"  => t("Teman"),
                "url"   => $this->di->get("url")->create("themes"),
                "title" => t("About this website"),
                "submenu" => [
                    "items" => [
                        "theme" => [
                            "text"  => t("Färg teman"),
                            "url"   => $this->di->get("url")->create("theme"),
                            "title" => t("About this website")
                        ],
                        "design-principle" => [
                            "text"  => t("Design principer"),
                            "url"   => $this->di->get("url")->create("design-principle"),
                            "title" => t("About this website")
                        ],
                        "design-element" => [
                            "text"  => t("Design element"),
                            "url"   => $this->di->get("url")->create("design-element"),
                            "title" => t("About this website")
                        ],
                    ],
                ],
            ],
            
            /*"design-principle" => [
                "text"  => t("Design principer"),
                "url"   => $this->di->get("url")->create("design-principle"),
                "title" => t("About this website")
            ],*/
            
            "analysis" => [
                "text"  => t("Analys"),
                "url"   => $this->di->get("url")->create("analysis"),
                "title" => t("About this website")
            ],
        ],
    ],



    /**
     * Callback tracing the current selected menu item base on scriptname
     *
     */
    "callback" => function ($url) {
        return !strcmp($url, $this->di->get("request")->getCurrentUrl(false));
    },



    /**
     * Callback to check if current page is a decendant of the menuitem,
     * this check applies for those menuitems that has the setting
     * "mark-if-parent" set to true.
     *
     */
    "is_parent" => function ($parent) {
        $url = $this->di->get("request")->getCurrentUrl(false);
        return !substr_compare($parent, $url, 0, strlen($parent));
    },



   /**
     * Callback to create the url, if needed, else comment out.
     *
     */
     /*
    "create_url" => function ($url) {
        return $this->di->get("url")->create($url);
    },*/
];

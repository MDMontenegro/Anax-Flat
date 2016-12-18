<?php
/**
 * Config file for theme selector.
 *
 */
return [

    "separator" => "------------------------------------------------",
    
    "themes" => [

        "separator0" => "------------------------------------------------",

        "base"      => [
            "title"      => "Minimal style, only the plain base",
            "class"      => "",
            "stylesheets" => [
                "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css",  "css/base.min.css"
            ]
        ],

        "default"   => [
            "title"      => "Your own selected default theme",
            "class"      => "",
            "stylesheets" => [
                "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", "css/default.min.css"
            ]
        ],

        "separator1" => "------------------------------------------------",

        "light"     =>  [
            "title"      => "Very light theme, white, black and nuances of grey",
            "class"      => "light",
            "stylesheets" => ["https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", "css/light.min.css"]
        ],

        "color"     => [
            "title"      => "Enhance the light theme by adding a tiny bit of color",
            "class"      => "color",
            "stylesheets" => ["https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", "css/color.min.css"]
        ],

        "dark"      => [
            "title"      => "Dark background and light text",
            "class"      => "dark",
            "stylesheets" => ["https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", "css/dark.min.css"]
        ],

        "colorful"  => [
            "title"      => "Make a very colorful theme",
            "class"      => "colorful",
            "stylesheets" => ["https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", "css/colorful.min.css"]
        ],

        "typography" => [
            "title"      => "A theme where the typography really stands out",
            "class"      => "typography",
            "stylesheets" => ["https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", "https://fonts.googleapis.com/css?family=Arvo|Open+Sans:300", "css/typography-theme.min.css"]
        ],

        "separator2" => "------------------------------------------------",

        "tema1"       => [
            "title"      => "Design principle - variaty and contrast",
            "class"      => "tema1",
            "stylesheets" => ["css/tema1.min.css"]
        ],
        
        "tema2"       => [
            "title"      => "Design principle - unity",
            "class"      => "tema2",
            "stylesheets" => ["css/tema2.min.css"]
        ],
        
        "tema3"       => [
            "title"      => "Design principle - movement",
            "class"      => "tema3",
            "stylesheets" => ["css/tema3.min.css"]
        ],
        
        "tema4"       => [
            "title"      => "Theme with design elements",
            "class"      => "tema4",
            "stylesheets" => ["css/tema4.min.css"]
        ],
        
        "tema5"       => [
            "title"      => "Theme with design elements",
            "class"      => "tema5",
            "stylesheets" => ["css/tema5.min.css"]
        ],
        
        "tema6"       => [
            "title"      => "Theme with design elements",
            "class"      => "tema6",
            "stylesheets" => ["css/tema6.min.css"]
        ],
    ]
];

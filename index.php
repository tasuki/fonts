<?php

$fonts = [
    'Sans' => [
        'Titillium Web' => ['ext' => true, 'weights' => ['400', '400i', '700']],
        'Roboto' => ['ext' => true, 'weights' => ['400', '400i', '700']],
        'Lato' => ['ext' => false, 'weights' => ['400', '400i', '700']],
        'Open Sans' => ['ext' => true, 'weights' => ['400', '400i', '700']],
        'Source Sans Pro' => ['ext' => true, 'weights' => ['400', '400i', '700']],
        'Ubuntu' => ['ext' => true, 'weights' => ['400', '400i', '700']],
        'Raleway' => ['ext' => true, 'weights' => ['400', '400i', '700']],
        'Dosis' => ['ext' => true, 'weights' => ['400', '700']],
    ],

    'Serif' => [
        'PT Serif' => ['ext' => true, 'weights' => ['400', '400i', '700']],
        'Noto Serif' => ['ext' => true, 'weights' => ['400', '400i', '700']],
        'Noticia Text' => ['ext' => true, 'weights' => ['400', '400i', '700']],
        'Alegreya' => ['ext' => true, 'weights' => ['400', '400i', '700']],
        'Goudy Bookletter 1911' => ['ext' => false, 'weights' => ['400']],
        'Sorts Mill Goudy' => ['ext' => true, 'weights' => ['400', '400i']],
        'Cardo' => ['ext' => true, 'weights' => ['400', '400i', '700']],
        'Poly' => ['ext' => false, 'weights' => ['400', '400i']],
        'Fjord One' => ['ext' => false, 'weights' => ['400']],
        'Andada' => ['ext' => true, 'weights' => ['400']],
        'Merriweather' => ['ext' => true, 'weights' => ['400', '400i', '700']],
        'Libre Baskerville' => ['ext' => true, 'weights' => ['400', '400i', '700']],
        'Prociono' => ['ext' => false, 'weights' => ['400']],
        'Fanwood Text' => ['ext' => false, 'weights' => ['400', '400i']],
        'Lora' => ['ext' => true, 'weights' => ['400', '400i', '700']],
        'Domine' => ['ext' => true, 'weights' => ['400', '700']],
        'Gentium Book Basic' => ['ext' => true, 'weights' => ['400', '400i', '700']],
    ],

    'Slab' => [
        'Bitter' => ['ext' => false, 'weights' => ['400', '400i', '700']],
        'Bree Serif' => ['ext' => true, 'weights' => ['400']],
        'Roboto Slab' => ['ext' => true, 'weights' => ['400', '400i', '700']],
        'Rokkitt' => ['ext' => false, 'weights' => ['400', '700']],
        'Arvo' => ['ext' => false, 'weights' => ['400', '400i', '700']],
        'Patua One' => ['ext' => false, 'weights' => ['400']],
        'Crete Round' => ['ext' => true, 'weights' => ['400', '400i']],
        'Bevan' => ['ext' => false, 'weights' => ['400']],
        'Alfa Slab One' => ['ext' => false, 'weights' => ['400']],
        'Enriqueta' => ['ext' => true, 'weights' => ['400', '700']],
        'Copse' => ['ext' => false, 'weights' => ['400']],
        'Ultra' => ['ext' => false, 'weights' => ['400']],
    ],

    'Other' => [
        'Playfair Display' => ['ext' => true, 'weights' => ['400', '400i', '700']],
        'Abril Fatface' => ['ext' => true, 'weights' => ['400']],
        'Arapey' => ['ext' => false, 'weights' => ['400', '400i', '700']],
        'Oswald' => ['ext' => true, 'weights' => ['400', '700']],
        'Fjalla One' => ['ext' => true, 'weights' => ['400']],
        'Lobster' => ['ext' => true, 'weights' => ['400']],
        'Lobster Two' => ['ext' => false, 'weights' => ['400', '400i', '700']],
        'Passion One' => ['ext' => false, 'weights' => ['400', '700']],
        'Anton' => ['ext' => true, 'weights' => ['400']],
        'Acme' => ['ext' => false, 'weights' => ['400']],
        'Amaranth' => ['ext' => false, 'weights' => ['400', '400i', '700']],
        'Changa One' => ['ext' => false, 'weights' => ['400', '400i']],
        'Signika' => ['ext' => true, 'weights' => ['400', '700']],
        'Aller' => ['ext' => true, 'weights' => ['400', '400i', '700']],
    ],
];

?>
<html>
<head>
    <title>Favourite fonts comparison</title>
<?php

foreach ($fonts as $category) {
    foreach ($category as $font => $params) {
        extract($params);
        ?>
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=<?php echo str_replace(' ', '+', $font) ?>:<?php echo implode($weights, ',') ?>&subset=latin,latin-ext">
        <?php
    }
}

?>
    <style>
        a { color: #bc360a; }
        p { margin: 0px; padding: 0px 5px; }
        hr { border: 0px; height: 1px; background: #CCC; }
        .container { position: relative; clear: both; padding: 10px 0px; }
        .box { float: left; }
        .big { width: 35%; font-size: 32px; line-height: 36px; }
        .number { width: 15%; font-size: 32px; line-height: 36px; }
        .small { width: 25%; font-size: 14px; line-height: 18px; }
        .tiny { width: 25%; font-size: 10px; line-height: 12px; }
    </style>
</head>
<body>
<?php

foreach ($fonts as $category) {
    foreach ($category as $font => $params) {
        extract($params);
        ?>
        <div class="container">
            <div class="font"><a href="https://www.google.com/fonts/specimen/<?php echo str_replace(' ', '+', $font) ?>"><?php echo $font ?></a></div>
            <div class="box big" style="font-family: '<?php echo $font ?>'">
                <?php if (in_array('400',  $weights)) echo "Hamburgefonstijvyffi<br>" ?>
                <?php if ($ext) echo "Hámbůřgěfóňšťíjvý<br>" ?>
                <?php if (in_array('400i', $weights)) echo "<em>Hamburgefonstijvyffi</em><br>" ?>
                <?php if (in_array('700',  $weights)) echo "<strong>Hamburgefonstijvyffi</strong><br>" ?>
            </div>

            <div class="box number" style="font-family: '<?php echo $font ?>'">
                1234567890<br>
                1111111111<br>
                0000000000<br>
            </div>

            <div class="box small" style="font-family: '<?php echo $font ?>'">
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>

            <div class="box tiny" style="font-family: '<?php echo $font ?>'">
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
        </div>
        <?php
    }

    echo '<div class="container"><hr></div>';
}

?>
</body>
</html>

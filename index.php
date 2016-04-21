<?php

$fontList = [
    'Titillium Web' => '400,400i,700,czech,sans',
    'Roboto' => '400,400i,700,czech,sans',
    'Lato' => '400,400i,700,sans',
    'Open Sans' => '400,400i,700,czech,sans',
    'Source Sans Pro' => '400,400i,700,czech,sans',
    'Ubuntu' => '400,400i,700,czech,sans',
    'Raleway' => '400,400i,700,czech,sans',
    'Dosis' => '400,700,czech,sans',

    'PT Serif' => '400,400i,700,czech,serif',
    'Noto Serif' => '400,400i,700,czech,serif',
    'Noticia Text' => '400,400i,700,czech,serif',
    'Alegreya' => '400,400i,700,czech,serif',
    'Goudy Bookletter 1911' => '400,serif',
    'Sorts Mill Goudy' => '400,400i,czech,serif',
    'Cardo' => '400,400i,700,czech,serif',
    'Poly' => '400,400i,serif',
    'Fjord One' => '400,serif',
    'Andada' => '400,czech,serif',
    'Merriweather' => '400,400i,700,czech,serif',
    'Libre Baskerville' => '400,400i,700,czech,serif',
    'Prociono' => '400,serif',
    'Fanwood Text' => '400,400i,serif',
    'Lora' => '400,400i,700,czech,serif',
    'Domine' => '400,700,czech,serif',
    'Gentium Book Basic' => '400,400i,700,czech,serif',

    'Bitter' => '400,400i,700,slab',
    'Bree Serif' => '400,czech,slab',
    'Roboto Slab' => '400,400i,700,czech,slab',
    'Arvo' => '400,400i,700,slab',
    'Patua One' => '400,slab',
    'Crete Round' => '400,400i,czech,slab',
    'Bevan' => '400,slab',
    'Alfa Slab One' => '400,slab',
    'Enriqueta' => '400,700,czech,slab',
    'Copse' => '400,slab',
    'Ultra' => '400,slab',

    'Playfair Display' => '400,400i,700,czech,didone',
    'Abril Fatface' => '400,czech,didone',
    'Arapey' => '400,400i,700',
    'Oswald' => '400,700,czech',
    'Fjalla One' => '400,czech',
    'Lobster' => '400,czech',
    'Lobster Two' => '400,400i,700',
    'Passion One' => '400,700',
    'Anton' => '400,czech',
    'Acme' => '400',
    'Amaranth' => '400,400i,700',
    'Changa One' => '400,400i',
    'Signika' => '400,700,czech',
];

class Font {
    public function __construct($name, $tagList)
    {
        $this->name = $name;
        $this->tags = explode(',', $tagList);
    }

    public function weights()
    {
        return implode(',', array_filter($this->tags, function($tag) { return preg_match('/^\d/', $tag); }));
    }

    public function urlName()
    {
        return str_replace($this->name);
    }

    public function hasTag($tag)
    {
        return in_array($tag, $this->tags);
    }
}

$fonts = [];
foreach ($fontList as $name => $tagList) {
    $fonts[] = new Font($name, $tagList);
}

?>
<html>
<head>
    <title>Favourite fonts comparison</title>
<?php

foreach ($fonts as $font) {
    ?>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=<?php echo $font->urlName() ?>:<?php echo $font->weights() ?>&subset=latin,latin-ext">
    <?php
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

foreach ($fonts as $font) {
    ?>
    <div class="container">
        <div class="font"><a href="https://www.google.com/fonts/specimen/<?php echo $font->urlName() ?>"><?php echo $font->name ?></a></div>
        <div class="box big" style="font-family: '<?php echo $font->name ?>'">
            <?php if ($font->hasTag('400')) echo "Hamburgefonstijvyffi<br>" ?>
            <?php if ($font->hasTag('czech')) echo "Hámbůřgěfóňšťíjvý<br>" ?>
            <?php if ($font->hasTag('400i')) echo "<em>Hamburgefonstijvyffi</em><br>" ?>
            <?php if ($font->hasTag('700')) echo "<strong>Hamburgefonstijvyffi</strong><br>" ?>
        </div>

        <div class="box number" style="font-family: '<?php echo $font->name ?>'">
            1234567890<br>
            1111111111<br>
            0000000000<br>
        </div>

        <div class="box small">
            <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>

        <div class="box tiny" style="font-family: '<?php echo $font->name ?>'">
            <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
    </div>
    <?php
}
?>
</body>
</html>

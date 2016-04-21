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

require_once('./vendor/autoload.php');
$twig = new Twig_Environment(new Twig_Loader_Filesystem('.'));

echo $twig->render('template.html.twig', array('fonts' => $fonts));

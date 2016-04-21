<?php

require_once('./vendor/autoload.php');

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

$yamlParser = new Symfony\Component\Yaml\Parser;
$fontList = $yamlParser->parse(file_get_contents('fonts.yaml'));

$fonts = [];
foreach ($fontList as $name => $tagList) {
    $fonts[] = new Font($name, $tagList);
}

$twig = new Twig_Environment(new Twig_Loader_Filesystem('.'));
echo $twig->render('template.html.twig', array('fonts' => $fonts));

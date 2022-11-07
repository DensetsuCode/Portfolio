<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_556d5dedd58a46e81235892e695d9a7867e7745ff0e4cadfa0530e2c3373357c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html class=\"h-100\" lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        // line 10
        echo "\t\t</title>
\t\t";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "\t\t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "\t</head>
\t";
        // line 18
        $this->loadTemplate("includes/navbar.html.twig", "base.html.twig", 18)->display($context);
        // line 19
        echo "\t
\t";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 29
        echo "\t\t";
        $this->loadTemplate("includes/footer.html.twig", "base.html.twig", 29)->display($context);
        // line 30
        echo "\t\t";
        // line 31
        echo "\t</body>
</html>

";
    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Portfolio
\t\t\t";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "\t\t\t";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
\t\t";
    }

    // line 14
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "\t\t\t";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
\t\t";
    }

    // line 20
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "\t\t
\t\t<body ";
        // line 22
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\StimulusTwigExtension']->renderStimulusController($this->env, "symfony/ux-swup/swup", ["containers" => [0 => "#swup"], "theme" => "slide", "debug" => true]);
        echo ">
\t\t\t<main id=\"swup\">
\t\t\t\t";
        // line 24
        $this->displayBlock('main', $context, $blocks);
        // line 27
        echo "\t\t\t</main>
\t\t";
    }

    // line 24
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "\t\t\t\t
\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 25,  132 => 24,  127 => 27,  125 => 24,  120 => 22,  117 => 21,  113 => 20,  106 => 15,  102 => 14,  95 => 12,  91 => 11,  83 => 8,  76 => 31,  74 => 30,  71 => 29,  69 => 20,  66 => 19,  64 => 18,  61 => 17,  58 => 14,  56 => 11,  53 => 10,  51 => 8,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/home/yanis/server/symfony/projet0/templates/base.html.twig");
    }
}

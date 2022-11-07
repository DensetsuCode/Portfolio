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

/* includes/footer.html.twig */
class __TwigTemplate_7226f628d3c98ccac9b09666c2ffe52d3125106699b4f7c0db40980600c65da4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!-- Footer -->

<footer class=\"d-flex flex-wrap justify-content-between align-items-center py-4 my-4 border-top \">
\t<div class=\"col-md-4 d-flex align-items-center\">
\t\t<a href=\"/\" class=\"mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1\">
\t\t\t<svg class=\"bi\" width=\"30\" height=\"24\"><use xlink:href=\"#bootstrap\"/></svg>
\t\t</a>
\t\t<span class=\"text-muted\">&copy; 2022 Yanis, Dev.Jr</span>
\t</div>

\t<ul class=\"nav col-md-4 justify-content-end list-unstyled d-flex\">
\t\t<li class=\"ms-3\">
\t\t\t<a class=\"text-muted\" href=\"#\">
\t\t\t\t<svg class=\"bi\" width=\"24\" height=\"24\"><use xlink:href=\"#twitter\"/></svg>
\t\t\t</a>
\t\t</li>
\t\t<li class=\"ms-3\">
\t\t\t<a class=\"text-muted\" href=\"#\">
\t\t\t\t<svg class=\"bi\" width=\"24\" height=\"24\"><use xlink:href=\"#Github\"/></svg>
\t\t\t</a>
\t\t</li>
\t\t<li class=\"ms-3\">
\t\t\t<a class=\"text-muted\" href=\"#\">
\t\t\t\t<svg class=\"bi\" width=\"24\" height=\"24\"><use xlink:href=\"#LinkedIn \"/></svg>
\t\t\t</a>
\t\t</li>
\t</ul>\t
</footer>
";
    }

    public function getTemplateName()
    {
        return "includes/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "includes/footer.html.twig", "/home/yanis/server/symfony/projet0/templates/includes/footer.html.twig");
    }
}

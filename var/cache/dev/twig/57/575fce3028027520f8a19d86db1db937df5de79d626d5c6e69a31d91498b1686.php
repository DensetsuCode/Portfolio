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
class __TwigTemplate_2a6e35b05b155f9bb4161826d0373f32e2ffaae0660a80f5a08f5dc715c817c1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/footer.html.twig"));

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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "includes/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Footer -->

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
", "includes/footer.html.twig", "/home/yanis/server/symfony/projet0/templates/includes/footer.html.twig");
    }
}

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

/* stages/stages.html.twig */
class __TwigTemplate_b6d07f1c5da9d2b08214391f515fb92279c7842fa7225fd54e858e11d8c16e48 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'javascripts' => [$this, 'block_javascripts'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "stages/stages.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Stages
";
    }

    // line 5
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "\t";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
";
    }

    // line 8
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "\t<div class=\"px-4 pt-5 my-5 text-center border-bottom\">
\t\t<h1 class=\"display-4 fw-bold\">Stage de BTS SIO</h1>
\t\t<div class=\"col-lg-6 mx-auto\">
\t\t\t<p class=\"lead mb-4\">Mon stage a été réalisé sur une période de deux ans chez Sudalys, société spécialisée dans le conseil, l’audit et le contrôle des infrastructures télécoms pour le compte des collectivités locales et des opérateurs via le lien ci-joint vous accederez à mon contrat d'apprentissage 
\t\t\t\t<a href=\"ressources/Contrat-apprentissage.pdf\">Contrat d'apprentissage</a>.</p>
\t\t\t<div class=\"d-grid gap-2 d-sm-flex justify-content-sm-center mb-5\"></div>
\t\t</div>
\t\t<div class=\"overflow-hidden\" style=\"max-height: 30vh;\">
\t\t\t<div class=\"container px-5\">
\t\t\t\t<img src=\"../ressources/Sudalys.jpg\" class=\"img-fluid border rounded-3 shadow-lg mb-4\" width=\"700\" height=\"500\" loading=\"lazy\">
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "stages/stages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 9,  67 => 8,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "stages/stages.html.twig", "/home/yanis/server/symfony/projet0/templates/stages/stages.html.twig");
    }
}

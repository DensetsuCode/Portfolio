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

/* veille_techno/veille_techno.html.twig */
class __TwigTemplate_92797b2da226b8044205a5e458fd1ea559710b0896e23d1f72e9e18ecd24d242 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "veille_techno/veille_techno.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Veille Techno 2023 ";
    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script></script>
";
    }

    // line 11
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "
\t<div class=\"container col-xxl-8 px-4 py-5\">
\t\t<div class=\"row flex-lg-row-reverse align-items-center g-5 py-5\">
\t\t\t<div class=\"col-10 col-sm-8 col-lg-6\">
\t\t\t\t<img src=\"../ressources/Blockchain.jpg\" class=\"img-fluid border rounded-3 shadow-lg mb-4 border border-black\" width=\"700\" height=\"500\" loading=\"lazy\">
\t\t\t</div>
\t\t\t<div class=\"col-lg-6\">
\t\t\t\t<h1 class=\"display-5 fw-bold lh-1 mb-3\">La Veille Techno</h1>
\t\t\t\t<p class=\"lead\">
\t\t\t\t\tA l'issu de ces deux années de Bts Sio option Slam j'ai fait le choix de porter ma veille Technologique sur la BlockChain. Je vais à présent vous montrer le fruit de mon travail à l'issu de cette veille Technologqiue via la version web, J'ai également mis à disposition une version PDF afin que vous puissiez la telecharger.</p>
\t\t\t\t<div class=\"d-grid gap-2 d-md-flex justify-content-md-start\">
\t\t\t\t\t<a href=\"../ressources/Veille-Technologique-cryptomonnaies-Yass.pdf\" type=\"button\" class=\"btn btn-danger btn-lg px-4 me-md-2\">Version PDF</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Section 1 La Veille-->

\t<section id=\"Veille\" class=\"container-flex justify-content-center pb-5\">
\t\t<div class=\"px-4 py-5 my-5 text-center\">
    <img class=\"d-block mx-auto mb-4\" src=\"../ressources/veilleTech.jpg\" alt=\"\" width=\"auto\" height=\"auto\">
    <h1 class=\"display-5 fw-bold\">Veille Technologique</h1>
    <div class=\"col-lg-6 mx-auto\">
      <p class=\"lead mb-4\">Une veille technologique est un moyen de se tenir informé au fil du temps sur des innovations dans un secteur précis. Cela consiste à stocker, analyser les informations que l’on reçoit de tierce application sur le sujet de notre veille et d’en voir l’évolution au cours du temps. 
Pour ma part j’ai décidé d’orienter ma veille sur les crypto-monnaies et la technologie qui les entoure, la blockchain. Celle-ci m’a permis d’en apprendre plus sur ce domaine et ainsi acquérir des connaissances que je ne possédais pas.
</section>
";
    }

    public function getTemplateName()
    {
        return "veille_techno/veille_techno.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 12,  79 => 11,  71 => 8,  67 => 7,  60 => 5,  56 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "veille_techno/veille_techno.html.twig", "/home/yanis/server/symfony/projet0/templates/veille_techno/veille_techno.html.twig");
    }
}

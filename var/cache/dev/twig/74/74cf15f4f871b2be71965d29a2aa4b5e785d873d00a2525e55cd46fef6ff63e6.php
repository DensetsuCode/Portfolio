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

/* about/about.html.twig */
class __TwigTemplate_966a00115d621272dab74643a375d2c8c0a6423d851532b7cba1309550b93513 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about/about.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about/about.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "about/about.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Profil
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
    <div class=\"container\" id=\"profil\">
\t    <h1 \"text-align:center\">À propos de moi</h1>
        <p>
            Bonjour, Je m’appelle Yanis El Kajjoui, je suis âgé de 20 ans. 
            Je suis actuellement étudiant à Montpellier au seins d'Esicad, en deuxième année de BTS « SIO spécialité SLAM » 
            Services Informatiques aux Organisations spécialité en Solutions Logicielles et Applications Métier en alternance.
            J’ai toujours été attiré par l’informatique et les nouvelles technologies. 
            Pour en arriver la je suis passé par un Bts STI2D 
            en effectuant mes trois années d’études en BAC technologique,
            et mes deux années d’études en BTS Services Informatiques aux Organisations Services Informatiques aux Organisations spécialité en Solutions Logicielles et Applications Métier.
        </p>
        <h1>Experience professionnelle</h1>
        <p>
            Afin de pouvoir mettre en pratique ce que j'apprenais à l'école et en entreprise j'ai donc choisi la voie de l'alternance afin d'alié pratique et théorie pour pouvoir avoir une experience riche à la fin de mon cursus.
            J'ai travailler chez Sudalys, entreprise spécialisé dans le domaine de la fibre optique en tant que developpeur web.
        </p>
        
        <h1>
            Projet professionnel
        </h1>
        
        <p>Après l'obtention de mon Bts je souhaiterai devenir développeur web. Au bout de ces deux années d'études et de travail j'ai acquis des compétences
        me permettant de me lancer réelement dans ce dans quoi je me vois évoluer plus tard.
        </p>
    
        <h1>
            Mes Compétences
        </h1>
        <p>Grace à l'école,le travaille en entreprise ainsi que mes travaux personnel j'ai pu acquérir des compétences en programmation divers et variée voici une lisete exhaustive de ce sur quoi j'ai pu traiter. 
        </p>
        <h1>
            Mes Qualités
        </h1>
        <div id=\"conteneur\">
    <div class=\"element 1\">Persévérant </div>
    <div class=\"element 2\">Autonome </div>
    <div class=\"element 3\">À l'écoute </div>
</div>
        <h1 div style=\"text-align:center\">
            Mon Curriculum Vitae
        </h1>
        <div class=\"d-grid gap-2 d-md-block text-center \">
  <a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cv");
        echo "\" class=\"btn btn-primary btn-lg active\" role=\"button\" aria-pressed=\"true\">Voir mon Cv</a>
  <a href=\"C:\\Users\\yelka\\Downloads\\CV-1.pdf\" class=\"btn btn-secondary btn-lg active\" role=\"button\" aria-pressed=\"true\">Link</a>
</div>
    </div>
        
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "about/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 50,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Profil
{% endblock %}

{% block body %}

    <div class=\"container\" id=\"profil\">
\t    <h1 \"text-align:center\">À propos de moi</h1>
        <p>
            Bonjour, Je m’appelle Yanis El Kajjoui, je suis âgé de 20 ans. 
            Je suis actuellement étudiant à Montpellier au seins d'Esicad, en deuxième année de BTS « SIO spécialité SLAM » 
            Services Informatiques aux Organisations spécialité en Solutions Logicielles et Applications Métier en alternance.
            J’ai toujours été attiré par l’informatique et les nouvelles technologies. 
            Pour en arriver la je suis passé par un Bts STI2D 
            en effectuant mes trois années d’études en BAC technologique,
            et mes deux années d’études en BTS Services Informatiques aux Organisations Services Informatiques aux Organisations spécialité en Solutions Logicielles et Applications Métier.
        </p>
        <h1>Experience professionnelle</h1>
        <p>
            Afin de pouvoir mettre en pratique ce que j'apprenais à l'école et en entreprise j'ai donc choisi la voie de l'alternance afin d'alié pratique et théorie pour pouvoir avoir une experience riche à la fin de mon cursus.
            J'ai travailler chez Sudalys, entreprise spécialisé dans le domaine de la fibre optique en tant que developpeur web.
        </p>
        
        <h1>
            Projet professionnel
        </h1>
        
        <p>Après l'obtention de mon Bts je souhaiterai devenir développeur web. Au bout de ces deux années d'études et de travail j'ai acquis des compétences
        me permettant de me lancer réelement dans ce dans quoi je me vois évoluer plus tard.
        </p>
    
        <h1>
            Mes Compétences
        </h1>
        <p>Grace à l'école,le travaille en entreprise ainsi que mes travaux personnel j'ai pu acquérir des compétences en programmation divers et variée voici une lisete exhaustive de ce sur quoi j'ai pu traiter. 
        </p>
        <h1>
            Mes Qualités
        </h1>
        <div id=\"conteneur\">
    <div class=\"element 1\">Persévérant </div>
    <div class=\"element 2\">Autonome </div>
    <div class=\"element 3\">À l'écoute </div>
</div>
        <h1 div style=\"text-align:center\">
            Mon Curriculum Vitae
        </h1>
        <div class=\"d-grid gap-2 d-md-block text-center \">
  <a href=\"{{ path('cv') }}\" class=\"btn btn-primary btn-lg active\" role=\"button\" aria-pressed=\"true\">Voir mon Cv</a>
  <a href=\"C:\\Users\\yelka\\Downloads\\CV-1.pdf\" class=\"btn btn-secondary btn-lg active\" role=\"button\" aria-pressed=\"true\">Link</a>
</div>
    </div>
        
{% endblock %}
", "about/about.html.twig", "/home/yanis/server/symfony/projet0/templates/about/about.html.twig");
    }
}

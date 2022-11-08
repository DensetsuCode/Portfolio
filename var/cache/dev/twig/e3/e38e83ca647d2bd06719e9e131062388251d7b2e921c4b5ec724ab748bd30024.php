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

/* home/home.html.twig */
class __TwigTemplate_5e12662190b321ba15808ac831378e00d6d2421f4d11bd91c0c164d297f45a6b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/home.html.twig", 1);
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

        echo "Accueil
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t";
        // line 7
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("home");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 10
        echo "\t";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 14
        echo "
\t<section
\t\tclass=\".container-fluid h-100 \">

\t\t<!-- Home -->
\t\t<div class=\"w-100 h-100 bg-dark position-relative\">

\t\t\t <video autoplay loop muted src=\"ressources/anonymous.mp4\" class=\"position-absolute w-100 h-100\"></video>
        <div class=\"position-absolute w-100 h-100 bg-dark opacity-50\"></div>
        <div class=\"position-relative w-100 h-100 d-flex align-items-center justify-content-center flex-column pb-5\">

\t\t\t<p class=\"fs-5 text-light mb-0\">ETUDIANT BTS SIO</p>
\t\t\t<h1 class=\"text-center display-1 fw-bolder text-light\">YANIS EL KAJJOUI </h1>
\t\t\t<p class=\"fs-5 text-light mb-4\">\"Programmez-vous pour être libre et libérez-vous de la programmation\"</p>
\t\t\t<a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        echo "\" class=\"btn btn-lg btn-primary\">Plus d'info sur moi</a>
\t\t</div>

\t</div>
\t<!-- Section 2  à propos de moi -->

\t<section id=\"features\" class=\"container-flex pb-5\">

\t\t<h2 class=\"text-center display-4 mb-md-5 mb-3\">MES QUALITES</h2>

\t\t<div class=\"row justify-content-center pt-4 pb-5 mt-md-5 mt-0\">
\t\t\t<div class=\"col-3 d-flex flex-column align-items-center\">
\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t<img src=\"ressources/chat.svg\" alt=\"chat icon\" class=\"col-4\">
\t\t\t\t</div>
\t\t\t\t<h2 class=\"fs-4\">Réactif</h2>
\t\t\t\t<p class=\"text-center\">
\t\t\t\t\t<strong>La réactivité permet une résolution rapide des problèmes.</strong>
\t\t\t\t</p>
\t\t\t</div>


\t\t\t<div class=\"col-3 d-flex flex-column align-items-center\">
\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t<img src=\"ressources/coding.svg\" alt=\"coding icon\" class=\"col-4\">
\t\t\t\t</div>
\t\t\t\t<h2 class=\"fs-4\">Persévérant</h2>
\t\t\t\t<p class=\"text-center\">
\t\t\t\t\t<strong>La persévérance est un fait fastidieux et long parfois, mais qui est récompensée par la satisfaction d'avoir réussi dans le monde de la programmation.</strong>
\t\t\t\t</p>
\t\t\t</div>


\t\t\t<div class=\"col-3 d-flex flex-column align-items-center\">
\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t<img src=\"ressources/transfer.svg\" alt=\"transfer icon\" class=\"col-4\">
\t\t\t\t</div>
\t\t\t\t<h2 class=\"fs-4\">Autonome</h2>
\t\t\t\t<p class=\"text-center\">
\t\t\t\t\t<strong>L'autonomie permet de mettre des solutions en place sans avoir besoin d'être assisté.</strong></p>
\t\t\t\t</p>
\t\t\t</div>

\t\t</div>

\t</section>

\t<!-- Section 3 Mon Bts -->


\t<section class=\"border-wrapper border-top pb-5 mb-5\">

\t\t<div id=\"bts\" class=\"container-flex\">

\t\t\t<h2 class=\"text-center display-4 mt-md-5 mt-4\">
\t\t\t\tLE BTS SIO
\t\t\t</h2>
\t\t\t<p class=\"fs-5 text-dark mb-md-5 mb-4 text-center\">(Services Informatiques aux Organisations)</p>

\t\t\t<div class=\"row g-3 row-cols-1 row-cols-lg-2\">

\t\t\t\t<div>
\t\t\t\t\t<div class=\"p-5 text-white bg-dark rounded-3 shadow\">
\t\t\t\t\t\t<h2>Les différentes options du BTS SIO 🏆</h2>

\t\t\t\t\t\t<p class=\"mt-3\">Deux options sont possible avec ce Bts l'option Slam ou l'option Sisr.</p>
\t\t\t\t\t\t<a class=\"btn btn-outline-light\" href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bts_sio");
        echo "\">Plus d'info ici</a>
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t\t<div>
\t\t\t\t\t<div class=\"p-5 text-dark bg-warning rounded-3 shadow\">
\t\t\t\t\t\t<h2>Bloc de compétences</h2>
\t\t\t\t\t\t<p>Consulter mon bloc de compétences réalisé de 2021 à 2023.</p>
\t\t\t\t\t\t<a class=\"btn btn-outline-light\" href=\"ressources/Annexe 6-1.pdf\">Plus d'info ici</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div>
\t\t\t\t\t<div class=\"p-5 text-white bg-primary rounded-3 shadow\">
\t\t\t\t\t\t<h2>Mes PPE</h2>
\t\t\t\t\t\t<p>Mes projets perso encadrés sont disponible ci-dessous.</p>
\t\t\t\t\t\t<a class=\"btn btn-outline-light\" href=\"";
        // line 111
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ppe");
        echo "\">Plus d'info ici</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div>
\t\t\t\t\t<div class=\"p-5 text-dark bg-light rounded-3 shadow\">
\t\t\t\t\t\t<h2>Mon Cv</h2>
\t\t\t\t\t\t<p>disponible ici.</p>
\t\t\t\t\t\t<a class=\"btn btn-outline-dark\" href= \"";
        // line 119
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cv");
        echo "\">Plus d'info</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</section>

\t<!-- Section Stripe -->

\t<section class=\"bg-dark py-5 mt-5 d-flex flex-column justify-content-center align-items-center\">
\t\t<h1 class=\"text-light display-3\">Portfolio Junior</h1>
\t</section>

\t<!-- Section de mes projets -->

\t<section class=\"border-bottom\">

\t\t<div class=\"container mb-5 pb-5\">

\t\t\t<h2 class=\"text-center mt-md-5 mt-4 display-4\">Les projets que j'ai pu réalisé au cours de mes deux années de BTS SIO</h2>
\t\t\t<p class=\"fs-5 text-dark mb-md-5 mb-3 text-center\">En voici quelques-uns
\t\t\t</p>

\t\t\t<div class=\"row g-4 row-cols-1 row-cols-md-2 row-cols-lg-3\">

\t\t\t\t<div>
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<img src=\"ressources/Tesla-symbol.jpg\" class=\"img-fluid\" alt=\"Tesla\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Création du site de Tesla via Bootstrap 5</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">En cour...</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Jetez un coup d'oeil</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div>
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<img src=\"ressources/E-commerce.png\" class=\"img-fluid\" alt=\"E-Commerce\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Site e-commerce Symfony 
\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">En cour...</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Jetez un coup d'oeil</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div>
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<img src=\"ressources/Portfolio2.jpg\" class=\"img-fluid\" alt=\"Portfolio\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">
\t\t\t\t\t\t\t\tPortfolio V2</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Terminé !</p>
\t\t\t\t\t\t\t<a href\"";
        // line 175
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cv");
        echo "\" class=\"btn btn-primary\">Jetez un coup d'oeil</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div>
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<img src=\"ressources/meteo.png\" class=\"img-fluid\" alt=\"meteo\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">App météo</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Terminé !</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Jetez un coup d'oeil</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div>
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<img src=\"ressources/Pokedex.png\" class=\"img-fluid\" alt=\"Pokedex\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Pokedex</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Terminé !</p>
\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-primary\">Jetez un coup d'oeil</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div>
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<img src=\"ressources/desk-work.jpg\" class=\"img-fluid\" alt=\"desk-work\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">???</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">...</p>
\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-primary\">Nada</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>

\t\t</div>


\t</section>

\t<!-- Parallax Section -->

\t<section class=\"parallax-section d-flex justify-content-center align-items-center\">
\t\t<h2 class=\"display-3 text-center text-white fw-bolder\">
\t\t\tFormulaire de Contact
\t\t</h2>
\t</section>

\t<!-- Contact -->

\t<!-- Wrapper container -->
\t<div
\t\tclass=\"container py-4\">

\t\t<!-- Bootstrap 5 starter form -->
\t\t<form
\t\t\tid=\"contactForm\">

\t\t\t<!-- Name input -->
\t\t\t<div class=\"mb-3\">
\t\t\t\t<label class=\"form-label\" for=\"name\">Nom</label>
\t\t\t\t<input class=\"form-control\" id=\"name\" type=\"text\" placeholder=\"Votre nom\" data-sb-validations=\"required\"/>
\t\t\t</div>

\t\t\t\t\t\t<!-- Prenom input -->
\t\t\t<div class=\"mb-3\">
\t\t\t\t<label class=\"form-label\" for=\"name\">Prénom</label>
\t\t\t\t<input class=\"form-control\" id=\"name\" type=\"text\" placeholder=\"Votre prénom\" data-sb-validations=\"required\"/>
\t\t\t</div>

\t\t\t<!-- Email address input -->
\t\t\t<div class=\"mb-3\">
\t\t\t\t<label class=\"form-label\" for=\"emailAddress\">Adresse mail</label>
\t\t\t\t<input class=\"form-control\" id=\"emailAddress\" type=\"email\" placeholder=\"Votre adresse mail\" data-sb-validations=\"required, email\"/>
\t\t\t</div>

\t\t\t<!-- Message input -->
\t\t\t<div class=\"mb-3\">
\t\t\t\t<label class=\"form-label\" for=\"message\">Message</label>
\t\t\t\t<textarea class=\"form-control\" id=\"message\" type=\"text\" placeholder=\"Votre message\" style=\"height: 10rem;\" data-sb-validations=\"required\"></textarea>
\t\t\t</div>

\t\t\t<!-- Form submit button -->
\t\t\t<div class=\"d-grid\">
\t\t\t\t<button class=\"btn btn-primary btn-lg\" type=\"submit\">Envoyer</button>
\t\t\t</div>

\t\t</form>
\t</div>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 175,  257 => 119,  246 => 111,  226 => 94,  157 => 28,  141 => 14,  131 => 13,  118 => 10,  108 => 9,  96 => 7,  91 => 6,  81 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil
{% endblock %}
{% block stylesheets %}
\t{{ parent() }}
\t{{encore_entry_link_tags('home')}}
{% endblock %}
{% block javascripts %}
\t{{ encore_entry_script_tags('app') }}
{% endblock %}

{% block main %}

\t<section
\t\tclass=\".container-fluid h-100 \">

\t\t<!-- Home -->
\t\t<div class=\"w-100 h-100 bg-dark position-relative\">

\t\t\t <video autoplay loop muted src=\"ressources/anonymous.mp4\" class=\"position-absolute w-100 h-100\"></video>
        <div class=\"position-absolute w-100 h-100 bg-dark opacity-50\"></div>
        <div class=\"position-relative w-100 h-100 d-flex align-items-center justify-content-center flex-column pb-5\">

\t\t\t<p class=\"fs-5 text-light mb-0\">ETUDIANT BTS SIO</p>
\t\t\t<h1 class=\"text-center display-1 fw-bolder text-light\">YANIS EL KAJJOUI </h1>
\t\t\t<p class=\"fs-5 text-light mb-4\">\"Programmez-vous pour être libre et libérez-vous de la programmation\"</p>
\t\t\t<a href=\"{{ path('about') }}\" class=\"btn btn-lg btn-primary\">Plus d'info sur moi</a>
\t\t</div>

\t</div>
\t<!-- Section 2  à propos de moi -->

\t<section id=\"features\" class=\"container-flex pb-5\">

\t\t<h2 class=\"text-center display-4 mb-md-5 mb-3\">MES QUALITES</h2>

\t\t<div class=\"row justify-content-center pt-4 pb-5 mt-md-5 mt-0\">
\t\t\t<div class=\"col-3 d-flex flex-column align-items-center\">
\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t<img src=\"ressources/chat.svg\" alt=\"chat icon\" class=\"col-4\">
\t\t\t\t</div>
\t\t\t\t<h2 class=\"fs-4\">Réactif</h2>
\t\t\t\t<p class=\"text-center\">
\t\t\t\t\t<strong>La réactivité permet une résolution rapide des problèmes.</strong>
\t\t\t\t</p>
\t\t\t</div>


\t\t\t<div class=\"col-3 d-flex flex-column align-items-center\">
\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t<img src=\"ressources/coding.svg\" alt=\"coding icon\" class=\"col-4\">
\t\t\t\t</div>
\t\t\t\t<h2 class=\"fs-4\">Persévérant</h2>
\t\t\t\t<p class=\"text-center\">
\t\t\t\t\t<strong>La persévérance est un fait fastidieux et long parfois, mais qui est récompensée par la satisfaction d'avoir réussi dans le monde de la programmation.</strong>
\t\t\t\t</p>
\t\t\t</div>


\t\t\t<div class=\"col-3 d-flex flex-column align-items-center\">
\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t<img src=\"ressources/transfer.svg\" alt=\"transfer icon\" class=\"col-4\">
\t\t\t\t</div>
\t\t\t\t<h2 class=\"fs-4\">Autonome</h2>
\t\t\t\t<p class=\"text-center\">
\t\t\t\t\t<strong>L'autonomie permet de mettre des solutions en place sans avoir besoin d'être assisté.</strong></p>
\t\t\t\t</p>
\t\t\t</div>

\t\t</div>

\t</section>

\t<!-- Section 3 Mon Bts -->


\t<section class=\"border-wrapper border-top pb-5 mb-5\">

\t\t<div id=\"bts\" class=\"container-flex\">

\t\t\t<h2 class=\"text-center display-4 mt-md-5 mt-4\">
\t\t\t\tLE BTS SIO
\t\t\t</h2>
\t\t\t<p class=\"fs-5 text-dark mb-md-5 mb-4 text-center\">(Services Informatiques aux Organisations)</p>

\t\t\t<div class=\"row g-3 row-cols-1 row-cols-lg-2\">

\t\t\t\t<div>
\t\t\t\t\t<div class=\"p-5 text-white bg-dark rounded-3 shadow\">
\t\t\t\t\t\t<h2>Les différentes options du BTS SIO 🏆</h2>

\t\t\t\t\t\t<p class=\"mt-3\">Deux options sont possible avec ce Bts l'option Slam ou l'option Sisr.</p>
\t\t\t\t\t\t<a class=\"btn btn-outline-light\" href=\"{{ path('bts_sio') }}\">Plus d'info ici</a>
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t\t<div>
\t\t\t\t\t<div class=\"p-5 text-dark bg-warning rounded-3 shadow\">
\t\t\t\t\t\t<h2>Bloc de compétences</h2>
\t\t\t\t\t\t<p>Consulter mon bloc de compétences réalisé de 2021 à 2023.</p>
\t\t\t\t\t\t<a class=\"btn btn-outline-light\" href=\"ressources/Annexe 6-1.pdf\">Plus d'info ici</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div>
\t\t\t\t\t<div class=\"p-5 text-white bg-primary rounded-3 shadow\">
\t\t\t\t\t\t<h2>Mes PPE</h2>
\t\t\t\t\t\t<p>Mes projets perso encadrés sont disponible ci-dessous.</p>
\t\t\t\t\t\t<a class=\"btn btn-outline-light\" href=\"{{ path('ppe') }}\">Plus d'info ici</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div>
\t\t\t\t\t<div class=\"p-5 text-dark bg-light rounded-3 shadow\">
\t\t\t\t\t\t<h2>Mon Cv</h2>
\t\t\t\t\t\t<p>disponible ici.</p>
\t\t\t\t\t\t<a class=\"btn btn-outline-dark\" href= \"{{ path('cv') }}\">Plus d'info</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</section>

\t<!-- Section Stripe -->

\t<section class=\"bg-dark py-5 mt-5 d-flex flex-column justify-content-center align-items-center\">
\t\t<h1 class=\"text-light display-3\">Portfolio Junior</h1>
\t</section>

\t<!-- Section de mes projets -->

\t<section class=\"border-bottom\">

\t\t<div class=\"container mb-5 pb-5\">

\t\t\t<h2 class=\"text-center mt-md-5 mt-4 display-4\">Les projets que j'ai pu réalisé au cours de mes deux années de BTS SIO</h2>
\t\t\t<p class=\"fs-5 text-dark mb-md-5 mb-3 text-center\">En voici quelques-uns
\t\t\t</p>

\t\t\t<div class=\"row g-4 row-cols-1 row-cols-md-2 row-cols-lg-3\">

\t\t\t\t<div>
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<img src=\"ressources/Tesla-symbol.jpg\" class=\"img-fluid\" alt=\"Tesla\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Création du site de Tesla via Bootstrap 5</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">En cour...</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Jetez un coup d'oeil</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div>
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<img src=\"ressources/E-commerce.png\" class=\"img-fluid\" alt=\"E-Commerce\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Site e-commerce Symfony 
\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">En cour...</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Jetez un coup d'oeil</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div>
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<img src=\"ressources/Portfolio2.jpg\" class=\"img-fluid\" alt=\"Portfolio\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">
\t\t\t\t\t\t\t\tPortfolio V2</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Terminé !</p>
\t\t\t\t\t\t\t<a href\"{{ path('cv') }}\" class=\"btn btn-primary\">Jetez un coup d'oeil</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div>
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<img src=\"ressources/meteo.png\" class=\"img-fluid\" alt=\"meteo\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">App météo</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Terminé !</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Jetez un coup d'oeil</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div>
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<img src=\"ressources/Pokedex.png\" class=\"img-fluid\" alt=\"Pokedex\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Pokedex</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Terminé !</p>
\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-primary\">Jetez un coup d'oeil</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div>
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<img src=\"ressources/desk-work.jpg\" class=\"img-fluid\" alt=\"desk-work\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">???</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">...</p>
\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-primary\">Nada</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>

\t\t</div>


\t</section>

\t<!-- Parallax Section -->

\t<section class=\"parallax-section d-flex justify-content-center align-items-center\">
\t\t<h2 class=\"display-3 text-center text-white fw-bolder\">
\t\t\tFormulaire de Contact
\t\t</h2>
\t</section>

\t<!-- Contact -->

\t<!-- Wrapper container -->
\t<div
\t\tclass=\"container py-4\">

\t\t<!-- Bootstrap 5 starter form -->
\t\t<form
\t\t\tid=\"contactForm\">

\t\t\t<!-- Name input -->
\t\t\t<div class=\"mb-3\">
\t\t\t\t<label class=\"form-label\" for=\"name\">Nom</label>
\t\t\t\t<input class=\"form-control\" id=\"name\" type=\"text\" placeholder=\"Votre nom\" data-sb-validations=\"required\"/>
\t\t\t</div>

\t\t\t\t\t\t<!-- Prenom input -->
\t\t\t<div class=\"mb-3\">
\t\t\t\t<label class=\"form-label\" for=\"name\">Prénom</label>
\t\t\t\t<input class=\"form-control\" id=\"name\" type=\"text\" placeholder=\"Votre prénom\" data-sb-validations=\"required\"/>
\t\t\t</div>

\t\t\t<!-- Email address input -->
\t\t\t<div class=\"mb-3\">
\t\t\t\t<label class=\"form-label\" for=\"emailAddress\">Adresse mail</label>
\t\t\t\t<input class=\"form-control\" id=\"emailAddress\" type=\"email\" placeholder=\"Votre adresse mail\" data-sb-validations=\"required, email\"/>
\t\t\t</div>

\t\t\t<!-- Message input -->
\t\t\t<div class=\"mb-3\">
\t\t\t\t<label class=\"form-label\" for=\"message\">Message</label>
\t\t\t\t<textarea class=\"form-control\" id=\"message\" type=\"text\" placeholder=\"Votre message\" style=\"height: 10rem;\" data-sb-validations=\"required\"></textarea>
\t\t\t</div>

\t\t\t<!-- Form submit button -->
\t\t\t<div class=\"d-grid\">
\t\t\t\t<button class=\"btn btn-primary btn-lg\" type=\"submit\">Envoyer</button>
\t\t\t</div>

\t\t</form>
\t</div>
</section>
{% endblock %}

", "home/home.html.twig", "/home/yanis/server/symfony/projet0/templates/home/home.html.twig");
    }
}

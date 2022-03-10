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
class __TwigTemplate_7da493b4586852f4f542c7afddcd8d015baeeb5bbd1e083ed5fda19a296128ec extends Template
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
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 7
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("home");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
<!-- Navigation -->
<body class=\"global-container h-100\">

\t<nav class=\"global-container  navbar-expand-lg navbar fixed-top navbar-light bg-light justify-content-center border-bottom shadow-sm\">
\t\t<a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"nav-link fs-5 text-dark\">Accueil</a>
\t\t<a href=\"#\" class=\"nav-link fs-5 text-dark\">Portfolio</a>
\t\t<a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        echo "\" class=\"nav-link fs-5 text-dark\">Profil</a>
\t\t<a href=\"#\" class=\"nav-link fs-5 text-dark\">Contact</a>
\t\t<a href=\"#bts\" class=\"nav-link fs-5 text-dark\">Bts Sio</a>
\t</nav>

\t<!-- Home -->
\t<div id=\"home\" class=\"w-100 h-100 bg-dark position-relative\">

\t\t<video autoplay loop muted src=\"ressources/Citynight.mp4\" class=\"position-absolute w-100 h-100\"></video>
\t\t<div class=\"position-absolute w-100 h-100 bg-dark opacity-50\"></div>
\t\t<div class=\"position-relative w-100 h-100 d-flex align-items-center justify-content-center flex-column pb-5\">

\t\t\t<p class=\"fs-5 text-light mb-0\">Etudiant en Bts Sio en Option Slam
\t\t\t</p>
\t\t\t<h1 class=\"text-center display-1 fw-bolder text-light\">Yanis El Kajjoui</h1>
\t\t\t<p class=\"fs-5 text-light mb-4\">En perpétuel évolution</p>
\t\t\t<a href=\"#features\" class=\"btn btn-lg btn-primary\">À Propos de moi</a>
\t\t</div>

\t</div>

\t<!-- Section 3  à propos de moi -->

\t<section id=\"features\" class=\"container pb-5\">

\t\t<p class=\"fs-5 text-dark mb-0 mt-md-5 mt-4 text-center\">Durant mes 2 ans d'apprentissage j'ai pu développer des compétences solides</p>
\t\t<h2 class=\"text-center display-4 mb-md-5 mb-3\">Mes qualités.</h2>

\t\t<div class=\"row row-cols-1 row-cols-md-2 row-cols-lg-3 justify-content-center pt-4 pb-5 mt-md-5 mt-0\">

\t\t\t<div class=\"d-flex flex-column align-items-center\">
\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t<img src=\"ressources/chat.svg\" alt=\"chat icon\" class=\"col-4\">
\t\t\t\t</div>
\t\t\t\t<h2 class=\"fs-4\">Réactif</h2>
\t\t\t\t<p class=\"text-center\">La réactivité permet une résolution rapide des problèmes.</p>
\t\t\t</div>


\t\t\t<div class=\"d-flex flex-column align-items-center\">
\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t<img src=\"ressources/coding.svg\" alt=\"coding icon\" class=\"col-4\">
\t\t\t\t</div>
\t\t\t\t<h2 class=\"fs-4\">Persévérant</h2>
\t\t\t\t<p class=\"text-center\">La persévérance est un fait fastidieux et long parfois, mais qui est récompensée par la satisfaction d'avoir réussi dans le monde de la programmation.</p>
\t\t\t</div>


\t\t\t<div class=\"d-flex flex-column align-items-center\">
\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t<img src=\"ressources/transfer.svg\" alt=\"transfer icon\" class=\"col-4\">
\t\t\t\t</div>
\t\t\t\t<h2 class=\"fs-4\">Autonome</h2>
\t\t\t\t<p class=\"text-center\">L'autonomie permet de mettre des solutions en place sans avoir besoin d'être assisté.</p>
\t\t\t</div>

\t\t</div>

\t</section>

\t<!-- Section 2 Mon Bts -->


\t<section class=\"border-wrapper border-top pb-5 mb-5\">

\t\t<div  id=\"bts\" class=\"container\">

\t\t\t<h2  class=\"text-center display-4 mt-md-5 mt-4\">Mon Bts Sio
\t\t\t</h2>
\t\t\t<p class=\"fs-5 text-dark mb-md-5 mb-4 text-center\">Services Informatiques aux Organisations.</p>

\t\t\t<div class=\"row g-3 row-cols-1 row-cols-lg-2\">

\t\t\t\t<div>
\t\t\t\t\t<div class=\"p-5 text-white bg-dark rounded-3 shadow\">
\t\t\t\t\t\t<h2>Les différentes options 🏆</h2>
\t\t\t\t\t\t
\t\t\t\t\t\t<p class=\"mt-3\">Deux options sont possible avec ce Bts l'option Slam ou l'option Sisr.</p>
\t\t\t\t\t\t<a class=\"btn btn-outline-light\" href=\"#\">Plus d'info ici</a>
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t\t<div>
\t\t\t\t\t<div class=\"p-5 text-dark bg-warning rounded-3 shadow\">
\t\t\t\t\t\t<h2>Bloc de compétences</h2>
\t\t\t\t\t\t<p>Consulter mon bloc de compétences réalisé au cour de ces deux années.</p>
\t\t\t\t\t\t<a class=\"btn btn-outline-light\" href=\"#\">Plus d'info ici</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div>
\t\t\t\t\t<div class=\"p-5 text-white bg-primary rounded-3 shadow\">
\t\t\t\t\t\t<h2>Mes PPE</h2>
\t\t\t\t\t\t<p>Mes projets perso encadrés sont disponible ci-dessous</p>
\t\t\t\t\t\t<a class=\"btn btn-outline-light\" href=\"#\">Plus d'info ici</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div>
\t\t\t\t\t<div class=\"p-5 text-dark bg-light rounded-3 shadow\">
\t\t\t\t\t\t<h2>Mon Curriculum vitæ</h2>
\t\t\t\t\t\t<p>Mon cv disponible par ici.</p>
\t\t\t\t\t\t<a class=\"btn btn-outline-dark\" href=\"";
        // line 120
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cv");
        echo "\">Plus d'info ici</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</section>

\t<!-- Section Stripe -->

\t<section class=\"bg-dark py-5 mt-5 d-flex flex-column justify-content-center align-items-center\">
\t\t<h1 class=\"text-light display-3\">Portfolio V1</h1>
\t</section>

\t<!-- Section de mes projets -->

\t<section class=\"border-bottom\">

\t\t<div class=\"container mb-5 pb-5\">

\t\t\t<h2 class=\"text-center mt-md-5 mt-4 display-4\">Mes projets apparaitrons ici
\t\t\t</h2>
\t\t\t<p class=\"fs-5 text-dark mb-md-5 mb-3  text-center\">En voici quelques-uns
\t\t\t</p>

\t\t\t<div class=\"row g-4 row-cols-1 row-cols-md-2 row-cols-lg-3\">

\t\t\t\t<div>
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<img src=\"ressources/robot.jpg\" alt=\"robot image\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Projet 1</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">En cour...</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Jetez un coup d'oeil</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div>
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<img src=\"ressources/purpleish-pic.jpg\" alt=\"purple image\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Projet 2</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">En cour...</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Jetez un coup d'oeil</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div>
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<img src=\"ressources/codebase.jpg\" alt=\"codebase\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Projet 3</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">En cour...</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Jetez un coup d'oeil</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div>
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<img src=\"ressources/laptop.jpg\" alt=\"laptop\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Projet 4</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">En cour...</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Jetez un coup d'oeil</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div>
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<img src=\"ressources/bright-laptop.jpg\" alt=\"bright-laptop\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Projet 5</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">En cour...</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Jetez un coup d'oeil</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div>
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<img src=\"ressources/desk-work.jpg\" alt=\"desk work\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Projet 6</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">En cour...</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Jetez un coup d'oeil</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>

\t\t</div>


</section>

 <!-- Parallax Section -->

      <section
      class=\"parallax-section d-flex justify-content-center align-items-center\">
          <h2 class=\"display-3 text-center text-light fw-bolder\">
              Toudoum
          </h2>
      </section>

   <!-- Contact -->

      <section class=\"border-top pb-5 mb-5 container\">

        <h2 class=\"text-center display-4 my-md-5 my-4\">Me contacter</h2>

        <form>

            <div class=\"mb-3\">
                <label for=\"email\" class=\"form-label\">Adresse Mail</label>
                <input type=\"email\" id=\"email\" class=\"form-control\">
                <p class=\"form-text m-0\">Votre adresse mail ne sera jamais partagé.</p>
            </div>

            <div class=\"form-floating mb-3\">
                <textarea
                class=\"form-control\"
                placeholder=\"Your message\"
                id=\"floatTxtArea\"
                style=\"height: 100px\"
                ></textarea>
                <label for=\"floatTxtArea\">Votre message</label>
            </div>

            <button class=\"btn btn-primary\">Envoyer</button>
        </form>

      </section>



\t   <!-- Footer -->

      <footer class=\"bg-light text-center py-3 my-4 border-top\">
          <a href=\"#\" class=\"mb-3 mb-md-0 text-muted text-decoration-none lh-1\">© 2022 Yanis El Kajjoui</a>
      </footer>

</body>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 269
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 270
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>

    </script>
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
        return array (  405 => 270,  395 => 269,  236 => 120,  130 => 17,  125 => 15,  118 => 10,  108 => 9,  96 => 7,  91 => 6,  81 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil
{% endblock %}
{% block stylesheets %}
    {{ parent() }}
    {{encore_entry_link_tags('home')}}
{% endblock %}
{% block body %}

<!-- Navigation -->
<body class=\"global-container h-100\">

\t<nav class=\"global-container  navbar-expand-lg navbar fixed-top navbar-light bg-light justify-content-center border-bottom shadow-sm\">
\t\t<a href=\"{{ path('home') }}\" class=\"nav-link fs-5 text-dark\">Accueil</a>
\t\t<a href=\"#\" class=\"nav-link fs-5 text-dark\">Portfolio</a>
\t\t<a href=\"{{ path('about') }}\" class=\"nav-link fs-5 text-dark\">Profil</a>
\t\t<a href=\"#\" class=\"nav-link fs-5 text-dark\">Contact</a>
\t\t<a href=\"#bts\" class=\"nav-link fs-5 text-dark\">Bts Sio</a>
\t</nav>

\t<!-- Home -->
\t<div id=\"home\" class=\"w-100 h-100 bg-dark position-relative\">

\t\t<video autoplay loop muted src=\"ressources/Citynight.mp4\" class=\"position-absolute w-100 h-100\"></video>
\t\t<div class=\"position-absolute w-100 h-100 bg-dark opacity-50\"></div>
\t\t<div class=\"position-relative w-100 h-100 d-flex align-items-center justify-content-center flex-column pb-5\">

\t\t\t<p class=\"fs-5 text-light mb-0\">Etudiant en Bts Sio en Option Slam
\t\t\t</p>
\t\t\t<h1 class=\"text-center display-1 fw-bolder text-light\">Yanis El Kajjoui</h1>
\t\t\t<p class=\"fs-5 text-light mb-4\">En perpétuel évolution</p>
\t\t\t<a href=\"#features\" class=\"btn btn-lg btn-primary\">À Propos de moi</a>
\t\t</div>

\t</div>

\t<!-- Section 3  à propos de moi -->

\t<section id=\"features\" class=\"container pb-5\">

\t\t<p class=\"fs-5 text-dark mb-0 mt-md-5 mt-4 text-center\">Durant mes 2 ans d'apprentissage j'ai pu développer des compétences solides</p>
\t\t<h2 class=\"text-center display-4 mb-md-5 mb-3\">Mes qualités.</h2>

\t\t<div class=\"row row-cols-1 row-cols-md-2 row-cols-lg-3 justify-content-center pt-4 pb-5 mt-md-5 mt-0\">

\t\t\t<div class=\"d-flex flex-column align-items-center\">
\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t<img src=\"ressources/chat.svg\" alt=\"chat icon\" class=\"col-4\">
\t\t\t\t</div>
\t\t\t\t<h2 class=\"fs-4\">Réactif</h2>
\t\t\t\t<p class=\"text-center\">La réactivité permet une résolution rapide des problèmes.</p>
\t\t\t</div>


\t\t\t<div class=\"d-flex flex-column align-items-center\">
\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t<img src=\"ressources/coding.svg\" alt=\"coding icon\" class=\"col-4\">
\t\t\t\t</div>
\t\t\t\t<h2 class=\"fs-4\">Persévérant</h2>
\t\t\t\t<p class=\"text-center\">La persévérance est un fait fastidieux et long parfois, mais qui est récompensée par la satisfaction d'avoir réussi dans le monde de la programmation.</p>
\t\t\t</div>


\t\t\t<div class=\"d-flex flex-column align-items-center\">
\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t<img src=\"ressources/transfer.svg\" alt=\"transfer icon\" class=\"col-4\">
\t\t\t\t</div>
\t\t\t\t<h2 class=\"fs-4\">Autonome</h2>
\t\t\t\t<p class=\"text-center\">L'autonomie permet de mettre des solutions en place sans avoir besoin d'être assisté.</p>
\t\t\t</div>

\t\t</div>

\t</section>

\t<!-- Section 2 Mon Bts -->


\t<section class=\"border-wrapper border-top pb-5 mb-5\">

\t\t<div  id=\"bts\" class=\"container\">

\t\t\t<h2  class=\"text-center display-4 mt-md-5 mt-4\">Mon Bts Sio
\t\t\t</h2>
\t\t\t<p class=\"fs-5 text-dark mb-md-5 mb-4 text-center\">Services Informatiques aux Organisations.</p>

\t\t\t<div class=\"row g-3 row-cols-1 row-cols-lg-2\">

\t\t\t\t<div>
\t\t\t\t\t<div class=\"p-5 text-white bg-dark rounded-3 shadow\">
\t\t\t\t\t\t<h2>Les différentes options 🏆</h2>
\t\t\t\t\t\t
\t\t\t\t\t\t<p class=\"mt-3\">Deux options sont possible avec ce Bts l'option Slam ou l'option Sisr.</p>
\t\t\t\t\t\t<a class=\"btn btn-outline-light\" href=\"#\">Plus d'info ici</a>
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t\t<div>
\t\t\t\t\t<div class=\"p-5 text-dark bg-warning rounded-3 shadow\">
\t\t\t\t\t\t<h2>Bloc de compétences</h2>
\t\t\t\t\t\t<p>Consulter mon bloc de compétences réalisé au cour de ces deux années.</p>
\t\t\t\t\t\t<a class=\"btn btn-outline-light\" href=\"#\">Plus d'info ici</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div>
\t\t\t\t\t<div class=\"p-5 text-white bg-primary rounded-3 shadow\">
\t\t\t\t\t\t<h2>Mes PPE</h2>
\t\t\t\t\t\t<p>Mes projets perso encadrés sont disponible ci-dessous</p>
\t\t\t\t\t\t<a class=\"btn btn-outline-light\" href=\"#\">Plus d'info ici</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div>
\t\t\t\t\t<div class=\"p-5 text-dark bg-light rounded-3 shadow\">
\t\t\t\t\t\t<h2>Mon Curriculum vitæ</h2>
\t\t\t\t\t\t<p>Mon cv disponible par ici.</p>
\t\t\t\t\t\t<a class=\"btn btn-outline-dark\" href=\"{{ path('cv') }}\">Plus d'info ici</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</section>

\t<!-- Section Stripe -->

\t<section class=\"bg-dark py-5 mt-5 d-flex flex-column justify-content-center align-items-center\">
\t\t<h1 class=\"text-light display-3\">Portfolio V1</h1>
\t</section>

\t<!-- Section de mes projets -->

\t<section class=\"border-bottom\">

\t\t<div class=\"container mb-5 pb-5\">

\t\t\t<h2 class=\"text-center mt-md-5 mt-4 display-4\">Mes projets apparaitrons ici
\t\t\t</h2>
\t\t\t<p class=\"fs-5 text-dark mb-md-5 mb-3  text-center\">En voici quelques-uns
\t\t\t</p>

\t\t\t<div class=\"row g-4 row-cols-1 row-cols-md-2 row-cols-lg-3\">

\t\t\t\t<div>
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<img src=\"ressources/robot.jpg\" alt=\"robot image\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Projet 1</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">En cour...</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Jetez un coup d'oeil</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div>
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<img src=\"ressources/purpleish-pic.jpg\" alt=\"purple image\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Projet 2</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">En cour...</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Jetez un coup d'oeil</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div>
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<img src=\"ressources/codebase.jpg\" alt=\"codebase\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Projet 3</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">En cour...</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Jetez un coup d'oeil</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div>
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<img src=\"ressources/laptop.jpg\" alt=\"laptop\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Projet 4</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">En cour...</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Jetez un coup d'oeil</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div>
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<img src=\"ressources/bright-laptop.jpg\" alt=\"bright-laptop\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Projet 5</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">En cour...</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Jetez un coup d'oeil</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div>
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<img src=\"ressources/desk-work.jpg\" alt=\"desk work\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Projet 6</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">En cour...</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Jetez un coup d'oeil</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>

\t\t</div>


</section>

 <!-- Parallax Section -->

      <section
      class=\"parallax-section d-flex justify-content-center align-items-center\">
          <h2 class=\"display-3 text-center text-light fw-bolder\">
              Toudoum
          </h2>
      </section>

   <!-- Contact -->

      <section class=\"border-top pb-5 mb-5 container\">

        <h2 class=\"text-center display-4 my-md-5 my-4\">Me contacter</h2>

        <form>

            <div class=\"mb-3\">
                <label for=\"email\" class=\"form-label\">Adresse Mail</label>
                <input type=\"email\" id=\"email\" class=\"form-control\">
                <p class=\"form-text m-0\">Votre adresse mail ne sera jamais partagé.</p>
            </div>

            <div class=\"form-floating mb-3\">
                <textarea
                class=\"form-control\"
                placeholder=\"Your message\"
                id=\"floatTxtArea\"
                style=\"height: 100px\"
                ></textarea>
                <label for=\"floatTxtArea\">Votre message</label>
            </div>

            <button class=\"btn btn-primary\">Envoyer</button>
        </form>

      </section>



\t   <!-- Footer -->

      <footer class=\"bg-light text-center py-3 my-4 border-top\">
          <a href=\"#\" class=\"mb-3 mb-md-0 text-muted text-decoration-none lh-1\">© 2022 Yanis El Kajjoui</a>
      </footer>

</body>

    {% endblock %}
{% block javascripts %}
    {{ parent()}}
    <script>

    </script>
{% endblock %}", "home/home.html.twig", "/home/yanis/server/symfony/projet0/templates/home/home.html.twig");
    }
}

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

/* cv/curriculum_vitæ.html.twig */
class __TwigTemplate_c6a013898f03029431a1486f259cdf2db35ede670cf90763952065b37c6caa34 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cv/curriculum_vitæ.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cv/curriculum_vitæ.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cv/curriculum_vitæ.html.twig", 1);
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

        echo "Curriculum vitae !
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
\t<link href=\"https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Poppins&display=swap\" rel=\"stylesheet\">
\t";
        // line 8
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("portfolio");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 11
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
        echo "\t<!-- Btn flottant gauche petit menu -->

\t<div class=\"btn-rond-menu\">
\t\t<div class=\"cont-ligne\">
\t\t\t<div class=\"ligne-unique\"></div>
\t\t</div>
\t</div>

\t<!-- Navigation verticale -->

\t<div class=\"nav-gauche\">

\t\t<div class=\"blocs-menu\">
\t\t\t<div class=\"cercle-portrait\">
\t\t\t\t<img src=\"cv1/Luffy-modified.png\" alt=\"portrait img\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"blocs-menu\">
\t\t\t<span class=\"nav-menu-item\">
\t\t\t\t<a href=\"#accueil\">
\t\t\t\t\tAccueil
\t\t\t\t</a>
\t\t\t</span>
\t\t</div>
\t\t<div class=\"blocs-menu\">
\t\t\t<span class=\"nav-menu-item\">
\t\t\t\t<a href=\"#pres\">
\t\t\t\t\tPrésentation
\t\t\t\t</a>
\t\t\t</span>
\t\t</div>
\t\t<div class=\"blocs-menu\">
\t\t\t<span class=\"nav-menu-item\">
\t\t\t\t<a href=\"#port\">
\t\t\t\t\tPortfolio
\t\t\t\t</a>
\t\t\t</span>
\t\t</div>
\t\t<div class=\"blocs-menu\">
\t\t\t<span class=\"nav-menu-item\">
\t\t\t\t<a href=\"#range\">
\t\t\t\t\tCompétences
\t\t\t\t</a>
\t\t\t</span>
\t\t</div>

\t\t<div class=\"blocs-menu\">
\t\t\t<span class=\"nav-menu-item\">
\t\t\t\t<a href=\"#exp\">
\t\t\t\t\tExperience professionnelle
\t\t\t\t</a>
\t\t\t</span>
\t\t</div>

\t\t<div class=\"blocs-menu\">
\t\t\t<span class=\"nav-menu-item\">
\t\t\t\t<a href=\"ressources/Cv1.pdf\">
\t\t\t\t\tAccéder à mon Cv
\t\t\t\t</a>
\t\t\t</span>
\t\t</div>

\t\t<div class=\"blocs-menu\">
\t\t\t<div class=\"logo-cercle\">
\t\t\t\t<a href=\"#contact\">
\t\t\t\t\t<img src=\"cv1/contact.svg\" alt=\"logo contact\">
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>

\t</div>

\t<!-- Section Accueil -->

\t<section class=\"accueil\" id=\"accueil\">
\t\t<h1>Le Curriculum vitae
\t\t</h1>
\t\t<p class=\"txt-animation\"></p>
\t\t<a href=\"#port\" class=\"btn-acc btn-acc1\">Portfolio</a>
\t\t<a href=\"#exp\" class=\"btn-acc btn-acc2\">Expériences</a>

\t\t<div class=\"medias\">
\t\t\t<a href=\"https://github.com\" target=\"blank\">
\t\t\t\t<div class=\"media media1\">
\t\t\t\t\t<img src=\"cv1/github.svg\" alt=\"github icone\" class=\"icone-medias\">
\t\t\t\t</div>
\t\t\t</a>
\t\t\t<a href=\"https://linkedin.com\" target=\"blank\">
\t\t\t\t<div class=\"media media2\">
\t\t\t\t\t<img src=\"cv1/linkedin.svg\" alt=\"linkedin icone\" class=\"icone-medias\">
\t\t\t\t</div>
\t\t\t</a>
\t\t\t<a href=\"https://twitter.com\" target=\"blank\">
\t\t\t\t<div class=\"media media3\">
\t\t\t\t\t<img src=\"cv1/twitter.svg\" alt=\"twitter icone\" class=\"icone-medias\">
\t\t\t\t</div>
\t\t\t</a>
\t\t</div>

\t\t<a href=\"#pres\">
\t\t\t<div class=\"btn-rond\">
\t\t\t\t<img src=\"cv1/arrowDown.svg\" alt=\"logo fleche bas\" class=\"logo-btn-rond-acc\">
\t\t\t</div>
\t\t</a>
\t</section>

\t<!-- Section Présentation -->

\t<section class=\"presentation\" id=\"pres\">

\t\t<h2 class=\"titre-pres\">Yanis El Kajjoui.</h2>

\t\t<div class=\"container-presentation\">

\t\t\t<div class=\"fond-forme\"></div>

\t\t\t<div class=\"pres-gauche\">
\t\t\t\t<h3>Etudiant en développement Web</h3>
\t\t\t\t<hr>
\t\t\t\t<p>A l'heure ou j'écris ces lignes j'ai actuellement 19 ans et suis étudiant au sein de l’établissement ESICAD (Ecole Supérieure Privée de Commerce et de Gestion) en BTS SIO (Services informatiques aux Organisations) option SLAM (Solutions Logicielles et Applications Métiers) suivant un cursus en alternance.
\t\t\t\t</p>
\t\t\t\t<br>
\t\t\t\t<p>
\t\t\t\t\tSuite à ce Bts je serez capable de devenir l'un de ces types de developpeur  qui s'affiche sur votre droite.
\t\t\t\t</p>
\t\t\t</div>

\t\t\t<div class=\"pres-droite\">
\t\t\t\t<ul class=\"liste-presentation\">
\t\t\t\t\t<li class=\"item-liste i1\">
\t\t\t\t\t\t<span class=\"chiffre-style\">1.</span>
\t\t\t\t\t\t<p class=\"txt-liste\">UX Design expert</p>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"item-liste i2\">
\t\t\t\t\t\t<span class=\"chiffre-style\">2.</span>
\t\t\t\t\t\t<p class=\"txt-liste\">Spécialiste UI</p>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"item-liste i3\">
\t\t\t\t\t\t<span class=\"chiffre-style\">3.</span>
\t\t\t\t\t\t<p class=\"txt-liste\">Développeur Back-end</p>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"item-liste i4\">
\t\t\t\t\t\t<span class=\"chiffre-style\">4.</span>
\t\t\t\t\t\t<p class=\"txt-liste\">Développeur Front-End</p>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"item-liste i5\">
\t\t\t\t\t\t<span class=\"chiffre-style\">5.</span>
\t\t\t\t\t\t<p class=\"txt-liste\">Développeur Full-Stack</p>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>

\t\t</div>

\t</section>

\t<!-- Section Portfolio -->

\t<section class=\"portfolio\" id=\"port\">


\t\t<h2 class=\"titre-port\">Mon Portfolio Junior</h2>

\t\t<div class=\"cont-portfolio\">


\t\t\t<div class=\"item vague1\">
\t\t\t\t<div class=\"cont-img-port\">
\t\t\t\t\t<img src=\"ressources/robot.jpg\" alt=\"img portfolio\">
\t\t\t\t</div>
\t\t\t\t<h3>Numero1 projet</h3>
\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, dolore?</p>
\t\t\t\t<a href=\"#\" class=\"btn-projets\">Découvrez le projet</a>
\t\t\t</div>

\t\t\t<div class=\"item vague1\">
\t\t\t\t<div class=\"cont-img-port\">
\t\t\t\t\t<img src=\"ressources/purpleish-pic.jpg \" alt=\"img portfolio\">
\t\t\t\t</div>
\t\t\t\t<h3>Numero2 projet</h3>
\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, dolore?</p>
\t\t\t\t<a href=\"#\" class=\"btn-projets\">Découvrez le projet</a>
\t\t\t</div>

\t\t\t<div class=\"item vague1\">
\t\t\t\t<div class=\"cont-img-port\">
\t\t\t\t\t<img src=\"ressources/codebase.jpg\" alt=\"img portfolio\">
\t\t\t\t</div>
\t\t\t\t<h3>Numero3 projet</h3>
\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, dolore?</p>
\t\t\t\t<a href=\"#\" class=\"btn-projets\">Découvrez le projet</a>
\t\t\t</div>


\t\t\t<div class=\"item vague2\">
\t\t\t\t<div class=\"cont-img-port\">
\t\t\t\t\t<img src=\"ressources/laptop.jpg\" alt=\"img portfolio\">
\t\t\t\t</div>
\t\t\t\t<h3>Numero4 projet</h3>
\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, dolore?</p>
\t\t\t\t<a href=\"#\" class=\"btn-projets\">Découvrez le projet</a>
\t\t\t</div>


\t\t\t<div class=\"item vague2\">
\t\t\t\t<div class=\"cont-img-port\">
\t\t\t\t\t<img src=\"ressources/bright-laptop.jpg\" alt=\"img portfolio\">
\t\t\t\t</div>
\t\t\t\t<h3>Numero5 projet</h3>
\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, dolore?</p>
\t\t\t\t<a href=\"#\" class=\"btn-projets\">Découvrez le projet</a>
\t\t\t</div>


\t\t\t<div class=\"item vague2\">
\t\t\t\t<div class=\"cont-img-port\">
\t\t\t\t\t<img src=\"ressources/desk-work.jpg\" alt=\"img portfolio\">
\t\t\t\t</div>
\t\t\t\t<h3>Numero6 projet</h3>
\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, dolore?</p>
\t\t\t\t<a href=\"#\" class=\"btn-projets\">Découvrez le projet</a>
\t\t\t</div>

\t\t</div>


\t</section>

\t<!-- Section Range -->

\t<section class=\"section-range\" id=\"range\">

\t\t<h2 class=\"titre-exp\">Mes compétences informatiques</h2>

\t\t<div class=\"grille-skill\">


\t\t\t<div class=\"range-cont\">
\t\t\t\t<p class=\"label-skill\">JavaScript</p>


\t\t\t</div>
\t\t\t<div class=\"range-cont\">
\t\t\t\t<p class=\"label-skill\">PHP</p>


\t\t\t</div>
\t\t\t<div class=\"range-cont\">
\t\t\t\t<p class=\"label-skill\">CSS</p>

\t\t\t</div>


\t\t\t<div class=\"range-cont\">
\t\t\t\t<p class=\"label-skill\">HTML</p>

\t\t\t</div>
\t\t\t<div class=\"range-cont\">
\t\t\t\t<p class=\"label-skill\">Python</p>

\t\t\t</div>

\t\t\t<div class=\"range-cont\">
\t\t\t\t<p class=\"label-skill\">Symfony</p>

\t\t\t</div>

\t\t\t<div class=\"range-cont\">
\t\t\t\t<p class=\"label-skill\">Photoshop</p>

\t\t\t</div>

\t\t\t<div class=\"range-cont\">
\t\t\t\t<p class=\"label-skill\">Visual Studio Code</p>

\t\t\t</div>

\t\t</div>

\t</section>

\t<!-- Section -->

\t<section class=\"travail-exp\" id=\"exp\">

\t\t<h2 class=\"titre-travail-exp\">Mes expériences  professionnelles
\t\t</h2>

\t\t<div class=\"cont-exp-travail\">

\t\t\t<div class=\"barre-verticale\">
\t\t\t\t<div class=\"boule-ico\">
\t\t\t\t\t<img src=\"cv1/1237246.svg\" alt=\"icone gauche\">
\t\t\t\t</div>
\t\t\t\t<div class=\"boule-ico\">
\t\t\t\t\t<img src=\"cv1/Strike.svg\" alt=\"icone gauche\">
\t\t\t\t</div>
\t\t\t\t<div class=\"boule-ico\">
\t\t\t\t\t<img src=\"cv1/Strike.svg\" alt=\"icone gauche\">
\t\t\t\t</div>
\t\t\t\t<div class=\"boule-ico\">
\t\t\t\t\t<img src=\"cv1/Strike.svg\" alt=\"icone gauche\">
\t\t\t\t</div>
\t\t\t\t<div class=\"boule-ico\">
\t\t\t\t\t<img src=\"cv1/plane.svg\" class=\"avion\" alt=\"icone gauche\">
\t\t\t\t</div>
\t\t\t</div>


\t\t\t<div class=\"flex-cont-bloc-exp\">

\t\t\t\t<div class=\"bloc bloc1\">
\t\t\t\t\t<div class=\"contenu-bloc\">
\t\t\t\t\t\t<p class=\"titre-section-bloc\">Développeur Web en Alternance (Bts Sio Option Slam), 2021-2023</p>
\t\t\t\t\t\t<p class=\"txt-section\">Entreprise SUDALYS | Octobre 2021 -> Octobre 2023</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"bloc bloc2\">
\t\t\t\t\t<div class=\"contenu-bloc\">
\t\t\t\t\t\t<p class=\"titre-section-bloc\">Vendeur Magasin (Job étudiant), 2022-2022</p>
\t\t\t\t\t\t<p class=\"txt-section\">Entreprise Leroy Merlin | Avril 2022
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"bloc bloc3\">
\t\t\t\t\t<div class=\"contenu-bloc\">
\t\t\t\t\t\t<p class=\"titre-section-bloc\">Aide Conducteur de Ligne, 2021-2021</p>
\t\t\t\t\t\t<p class=\"txt-section\">Entreprise Poppies Berlidon | Juin 2021 -Juillet 2021</p>
\t\t\t\t\t\t<li>Approvisionner les lignes de production en cartons</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\tTri sur les lignes de production</li>


\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"bloc bloc4\">
\t\t\t\t\t<div class=\"contenu-bloc\">
\t\t\t\t\t\t<p class=\"titre-section-bloc\">Animateur, 2020-2021</p>
\t\t\t\t\t\t<p class=\"txt-section\">Mairie de Nîmes | Septembre 2021- Octobre 2021 (Musées)<br>
\t\t\t\t\t\t\tIFAC, Nîmes | Août 2020 (Centres de Loisirs)</p>
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t</div>
\t\t</div>

\t</section>


\t<!-- Section Parallax -->

\t<div class=\"section-parallax\">
\t\t<p class=\"txt-par\">
\t\t\tLe
\t\t</p>
\t\t<p class=\"txt-par\">
\t\t\tPetit
\t\t</p>
\t\t<p class=\"txt-par\">
\t\t\tDev
\t\t</p>
\t</div>
\t#}


\t<!-- Section Contact -->

\t<section class=\"section-contact\" id=\"contact\">

\t\t<h2>
\t\t\t<strong>Rentrons</strong>
\t\t\ten Contact</h2>

\t\t<div class=\"container-form\">

\t\t\t<form class=\"form-bloc\">

\t\t\t\t<div class=\"form-groupe\">
\t\t\t\t\t<label for=\"prenom\">Email</label>
\t\t\t\t\t<input type=\"text\" required maxlength=\"16\" id=\"prenom\">
\t\t\t\t</div>
\t\t\t\t<div class=\"form-groupe\">
\t\t\t\t\t<label for=\"nom\">Numéro de téléphone</label>
\t\t\t\t\t<input type=\"text\" required maxlength=\"16\" id=\"nom\">
\t\t\t\t</div>
\t\t\t\t<div class=\"form-groupe\">
\t\t\t\t\t<textarea id=\"txt\" placeholder=\"Votre message\" required></textarea>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-groupe\">
\t\t\t\t\t<input type=\"submit\" value=\"ENVOYER\" class=\"button-sub\">
\t\t\t\t</div>

\t\t\t</form>

\t\t</div>


\t</section>

\t<footer>
\t\tTout Droits réservés &copy;
\t</footer>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cv/curriculum_vitæ.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 14,  132 => 13,  119 => 11,  109 => 10,  97 => 8,  91 => 6,  81 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Curriculum vitae !
{% endblock %}
{% block stylesheets %}
\t{{ parent() }}
\t<link href=\"https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Poppins&display=swap\" rel=\"stylesheet\">
\t{{encore_entry_link_tags('portfolio')}}
{% endblock %}
{% block javascripts %}
\t{{ encore_entry_script_tags('app') }}
{% endblock %}
{% block main %}
\t<!-- Btn flottant gauche petit menu -->

\t<div class=\"btn-rond-menu\">
\t\t<div class=\"cont-ligne\">
\t\t\t<div class=\"ligne-unique\"></div>
\t\t</div>
\t</div>

\t<!-- Navigation verticale -->

\t<div class=\"nav-gauche\">

\t\t<div class=\"blocs-menu\">
\t\t\t<div class=\"cercle-portrait\">
\t\t\t\t<img src=\"cv1/Luffy-modified.png\" alt=\"portrait img\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"blocs-menu\">
\t\t\t<span class=\"nav-menu-item\">
\t\t\t\t<a href=\"#accueil\">
\t\t\t\t\tAccueil
\t\t\t\t</a>
\t\t\t</span>
\t\t</div>
\t\t<div class=\"blocs-menu\">
\t\t\t<span class=\"nav-menu-item\">
\t\t\t\t<a href=\"#pres\">
\t\t\t\t\tPrésentation
\t\t\t\t</a>
\t\t\t</span>
\t\t</div>
\t\t<div class=\"blocs-menu\">
\t\t\t<span class=\"nav-menu-item\">
\t\t\t\t<a href=\"#port\">
\t\t\t\t\tPortfolio
\t\t\t\t</a>
\t\t\t</span>
\t\t</div>
\t\t<div class=\"blocs-menu\">
\t\t\t<span class=\"nav-menu-item\">
\t\t\t\t<a href=\"#range\">
\t\t\t\t\tCompétences
\t\t\t\t</a>
\t\t\t</span>
\t\t</div>

\t\t<div class=\"blocs-menu\">
\t\t\t<span class=\"nav-menu-item\">
\t\t\t\t<a href=\"#exp\">
\t\t\t\t\tExperience professionnelle
\t\t\t\t</a>
\t\t\t</span>
\t\t</div>

\t\t<div class=\"blocs-menu\">
\t\t\t<span class=\"nav-menu-item\">
\t\t\t\t<a href=\"ressources/Cv1.pdf\">
\t\t\t\t\tAccéder à mon Cv
\t\t\t\t</a>
\t\t\t</span>
\t\t</div>

\t\t<div class=\"blocs-menu\">
\t\t\t<div class=\"logo-cercle\">
\t\t\t\t<a href=\"#contact\">
\t\t\t\t\t<img src=\"cv1/contact.svg\" alt=\"logo contact\">
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>

\t</div>

\t<!-- Section Accueil -->

\t<section class=\"accueil\" id=\"accueil\">
\t\t<h1>Le Curriculum vitae
\t\t</h1>
\t\t<p class=\"txt-animation\"></p>
\t\t<a href=\"#port\" class=\"btn-acc btn-acc1\">Portfolio</a>
\t\t<a href=\"#exp\" class=\"btn-acc btn-acc2\">Expériences</a>

\t\t<div class=\"medias\">
\t\t\t<a href=\"https://github.com\" target=\"blank\">
\t\t\t\t<div class=\"media media1\">
\t\t\t\t\t<img src=\"cv1/github.svg\" alt=\"github icone\" class=\"icone-medias\">
\t\t\t\t</div>
\t\t\t</a>
\t\t\t<a href=\"https://linkedin.com\" target=\"blank\">
\t\t\t\t<div class=\"media media2\">
\t\t\t\t\t<img src=\"cv1/linkedin.svg\" alt=\"linkedin icone\" class=\"icone-medias\">
\t\t\t\t</div>
\t\t\t</a>
\t\t\t<a href=\"https://twitter.com\" target=\"blank\">
\t\t\t\t<div class=\"media media3\">
\t\t\t\t\t<img src=\"cv1/twitter.svg\" alt=\"twitter icone\" class=\"icone-medias\">
\t\t\t\t</div>
\t\t\t</a>
\t\t</div>

\t\t<a href=\"#pres\">
\t\t\t<div class=\"btn-rond\">
\t\t\t\t<img src=\"cv1/arrowDown.svg\" alt=\"logo fleche bas\" class=\"logo-btn-rond-acc\">
\t\t\t</div>
\t\t</a>
\t</section>

\t<!-- Section Présentation -->

\t<section class=\"presentation\" id=\"pres\">

\t\t<h2 class=\"titre-pres\">Yanis El Kajjoui.</h2>

\t\t<div class=\"container-presentation\">

\t\t\t<div class=\"fond-forme\"></div>

\t\t\t<div class=\"pres-gauche\">
\t\t\t\t<h3>Etudiant en développement Web</h3>
\t\t\t\t<hr>
\t\t\t\t<p>A l'heure ou j'écris ces lignes j'ai actuellement 19 ans et suis étudiant au sein de l’établissement ESICAD (Ecole Supérieure Privée de Commerce et de Gestion) en BTS SIO (Services informatiques aux Organisations) option SLAM (Solutions Logicielles et Applications Métiers) suivant un cursus en alternance.
\t\t\t\t</p>
\t\t\t\t<br>
\t\t\t\t<p>
\t\t\t\t\tSuite à ce Bts je serez capable de devenir l'un de ces types de developpeur  qui s'affiche sur votre droite.
\t\t\t\t</p>
\t\t\t</div>

\t\t\t<div class=\"pres-droite\">
\t\t\t\t<ul class=\"liste-presentation\">
\t\t\t\t\t<li class=\"item-liste i1\">
\t\t\t\t\t\t<span class=\"chiffre-style\">1.</span>
\t\t\t\t\t\t<p class=\"txt-liste\">UX Design expert</p>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"item-liste i2\">
\t\t\t\t\t\t<span class=\"chiffre-style\">2.</span>
\t\t\t\t\t\t<p class=\"txt-liste\">Spécialiste UI</p>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"item-liste i3\">
\t\t\t\t\t\t<span class=\"chiffre-style\">3.</span>
\t\t\t\t\t\t<p class=\"txt-liste\">Développeur Back-end</p>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"item-liste i4\">
\t\t\t\t\t\t<span class=\"chiffre-style\">4.</span>
\t\t\t\t\t\t<p class=\"txt-liste\">Développeur Front-End</p>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"item-liste i5\">
\t\t\t\t\t\t<span class=\"chiffre-style\">5.</span>
\t\t\t\t\t\t<p class=\"txt-liste\">Développeur Full-Stack</p>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>

\t\t</div>

\t</section>

\t<!-- Section Portfolio -->

\t<section class=\"portfolio\" id=\"port\">


\t\t<h2 class=\"titre-port\">Mon Portfolio Junior</h2>

\t\t<div class=\"cont-portfolio\">


\t\t\t<div class=\"item vague1\">
\t\t\t\t<div class=\"cont-img-port\">
\t\t\t\t\t<img src=\"ressources/robot.jpg\" alt=\"img portfolio\">
\t\t\t\t</div>
\t\t\t\t<h3>Numero1 projet</h3>
\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, dolore?</p>
\t\t\t\t<a href=\"#\" class=\"btn-projets\">Découvrez le projet</a>
\t\t\t</div>

\t\t\t<div class=\"item vague1\">
\t\t\t\t<div class=\"cont-img-port\">
\t\t\t\t\t<img src=\"ressources/purpleish-pic.jpg \" alt=\"img portfolio\">
\t\t\t\t</div>
\t\t\t\t<h3>Numero2 projet</h3>
\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, dolore?</p>
\t\t\t\t<a href=\"#\" class=\"btn-projets\">Découvrez le projet</a>
\t\t\t</div>

\t\t\t<div class=\"item vague1\">
\t\t\t\t<div class=\"cont-img-port\">
\t\t\t\t\t<img src=\"ressources/codebase.jpg\" alt=\"img portfolio\">
\t\t\t\t</div>
\t\t\t\t<h3>Numero3 projet</h3>
\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, dolore?</p>
\t\t\t\t<a href=\"#\" class=\"btn-projets\">Découvrez le projet</a>
\t\t\t</div>


\t\t\t<div class=\"item vague2\">
\t\t\t\t<div class=\"cont-img-port\">
\t\t\t\t\t<img src=\"ressources/laptop.jpg\" alt=\"img portfolio\">
\t\t\t\t</div>
\t\t\t\t<h3>Numero4 projet</h3>
\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, dolore?</p>
\t\t\t\t<a href=\"#\" class=\"btn-projets\">Découvrez le projet</a>
\t\t\t</div>


\t\t\t<div class=\"item vague2\">
\t\t\t\t<div class=\"cont-img-port\">
\t\t\t\t\t<img src=\"ressources/bright-laptop.jpg\" alt=\"img portfolio\">
\t\t\t\t</div>
\t\t\t\t<h3>Numero5 projet</h3>
\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, dolore?</p>
\t\t\t\t<a href=\"#\" class=\"btn-projets\">Découvrez le projet</a>
\t\t\t</div>


\t\t\t<div class=\"item vague2\">
\t\t\t\t<div class=\"cont-img-port\">
\t\t\t\t\t<img src=\"ressources/desk-work.jpg\" alt=\"img portfolio\">
\t\t\t\t</div>
\t\t\t\t<h3>Numero6 projet</h3>
\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, dolore?</p>
\t\t\t\t<a href=\"#\" class=\"btn-projets\">Découvrez le projet</a>
\t\t\t</div>

\t\t</div>


\t</section>

\t<!-- Section Range -->

\t<section class=\"section-range\" id=\"range\">

\t\t<h2 class=\"titre-exp\">Mes compétences informatiques</h2>

\t\t<div class=\"grille-skill\">


\t\t\t<div class=\"range-cont\">
\t\t\t\t<p class=\"label-skill\">JavaScript</p>


\t\t\t</div>
\t\t\t<div class=\"range-cont\">
\t\t\t\t<p class=\"label-skill\">PHP</p>


\t\t\t</div>
\t\t\t<div class=\"range-cont\">
\t\t\t\t<p class=\"label-skill\">CSS</p>

\t\t\t</div>


\t\t\t<div class=\"range-cont\">
\t\t\t\t<p class=\"label-skill\">HTML</p>

\t\t\t</div>
\t\t\t<div class=\"range-cont\">
\t\t\t\t<p class=\"label-skill\">Python</p>

\t\t\t</div>

\t\t\t<div class=\"range-cont\">
\t\t\t\t<p class=\"label-skill\">Symfony</p>

\t\t\t</div>

\t\t\t<div class=\"range-cont\">
\t\t\t\t<p class=\"label-skill\">Photoshop</p>

\t\t\t</div>

\t\t\t<div class=\"range-cont\">
\t\t\t\t<p class=\"label-skill\">Visual Studio Code</p>

\t\t\t</div>

\t\t</div>

\t</section>

\t<!-- Section -->

\t<section class=\"travail-exp\" id=\"exp\">

\t\t<h2 class=\"titre-travail-exp\">Mes expériences  professionnelles
\t\t</h2>

\t\t<div class=\"cont-exp-travail\">

\t\t\t<div class=\"barre-verticale\">
\t\t\t\t<div class=\"boule-ico\">
\t\t\t\t\t<img src=\"cv1/1237246.svg\" alt=\"icone gauche\">
\t\t\t\t</div>
\t\t\t\t<div class=\"boule-ico\">
\t\t\t\t\t<img src=\"cv1/Strike.svg\" alt=\"icone gauche\">
\t\t\t\t</div>
\t\t\t\t<div class=\"boule-ico\">
\t\t\t\t\t<img src=\"cv1/Strike.svg\" alt=\"icone gauche\">
\t\t\t\t</div>
\t\t\t\t<div class=\"boule-ico\">
\t\t\t\t\t<img src=\"cv1/Strike.svg\" alt=\"icone gauche\">
\t\t\t\t</div>
\t\t\t\t<div class=\"boule-ico\">
\t\t\t\t\t<img src=\"cv1/plane.svg\" class=\"avion\" alt=\"icone gauche\">
\t\t\t\t</div>
\t\t\t</div>


\t\t\t<div class=\"flex-cont-bloc-exp\">

\t\t\t\t<div class=\"bloc bloc1\">
\t\t\t\t\t<div class=\"contenu-bloc\">
\t\t\t\t\t\t<p class=\"titre-section-bloc\">Développeur Web en Alternance (Bts Sio Option Slam), 2021-2023</p>
\t\t\t\t\t\t<p class=\"txt-section\">Entreprise SUDALYS | Octobre 2021 -> Octobre 2023</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"bloc bloc2\">
\t\t\t\t\t<div class=\"contenu-bloc\">
\t\t\t\t\t\t<p class=\"titre-section-bloc\">Vendeur Magasin (Job étudiant), 2022-2022</p>
\t\t\t\t\t\t<p class=\"txt-section\">Entreprise Leroy Merlin | Avril 2022
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"bloc bloc3\">
\t\t\t\t\t<div class=\"contenu-bloc\">
\t\t\t\t\t\t<p class=\"titre-section-bloc\">Aide Conducteur de Ligne, 2021-2021</p>
\t\t\t\t\t\t<p class=\"txt-section\">Entreprise Poppies Berlidon | Juin 2021 -Juillet 2021</p>
\t\t\t\t\t\t<li>Approvisionner les lignes de production en cartons</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\tTri sur les lignes de production</li>


\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"bloc bloc4\">
\t\t\t\t\t<div class=\"contenu-bloc\">
\t\t\t\t\t\t<p class=\"titre-section-bloc\">Animateur, 2020-2021</p>
\t\t\t\t\t\t<p class=\"txt-section\">Mairie de Nîmes | Septembre 2021- Octobre 2021 (Musées)<br>
\t\t\t\t\t\t\tIFAC, Nîmes | Août 2020 (Centres de Loisirs)</p>
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t</div>
\t\t</div>

\t</section>


\t<!-- Section Parallax -->

\t<div class=\"section-parallax\">
\t\t<p class=\"txt-par\">
\t\t\tLe
\t\t</p>
\t\t<p class=\"txt-par\">
\t\t\tPetit
\t\t</p>
\t\t<p class=\"txt-par\">
\t\t\tDev
\t\t</p>
\t</div>
\t#}


\t<!-- Section Contact -->

\t<section class=\"section-contact\" id=\"contact\">

\t\t<h2>
\t\t\t<strong>Rentrons</strong>
\t\t\ten Contact</h2>

\t\t<div class=\"container-form\">

\t\t\t<form class=\"form-bloc\">

\t\t\t\t<div class=\"form-groupe\">
\t\t\t\t\t<label for=\"prenom\">Email</label>
\t\t\t\t\t<input type=\"text\" required maxlength=\"16\" id=\"prenom\">
\t\t\t\t</div>
\t\t\t\t<div class=\"form-groupe\">
\t\t\t\t\t<label for=\"nom\">Numéro de téléphone</label>
\t\t\t\t\t<input type=\"text\" required maxlength=\"16\" id=\"nom\">
\t\t\t\t</div>
\t\t\t\t<div class=\"form-groupe\">
\t\t\t\t\t<textarea id=\"txt\" placeholder=\"Votre message\" required></textarea>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-groupe\">
\t\t\t\t\t<input type=\"submit\" value=\"ENVOYER\" class=\"button-sub\">
\t\t\t\t</div>

\t\t\t</form>

\t\t</div>


\t</section>

\t<footer>
\t\tTout Droits réservés &copy;
\t</footer>

{% endblock %}

", "cv/curriculum_vitæ.html.twig", "/home/yanis/server/symfony/projet0/templates/cv/curriculum_vitæ.html.twig");
    }
}

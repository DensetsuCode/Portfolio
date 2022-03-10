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
class __TwigTemplate_44487a928a702042674fda3502ba93734de3d2ecc75cccc97603250cc1e77f0b extends Template
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

        echo "Hello CvController!
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
    <link href=\"https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Poppins&display=swap\" rel=\"stylesheet\">
    ";
        // line 8
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("cv");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo " <!-- Btn flottant gauche petit menu -->

    <div class=\"btn-rond-menu\">
        <div class=\"cont-ligne\">
            <div class=\"ligne-unique\"></div>
        </div>
    </div>

    <!-- Navigation verticale -->

    <div class=\"nav-gauche\">

        <div class=\"blocs-menu\">
            <div class=\"cercle-portrait\">
                <img src=\"cv1/boss.svg\" alt=\"portrait img\">
            </div>
        </div>

        <div class=\"blocs-menu\">
            <span class=\"nav-menu-item\">
                <a href=\"#accueil\">
                    Accueil
                </a>
            </span>
        </div>
        <div class=\"blocs-menu\">
            <span class=\"nav-menu-item\">
                <a href=\"#pres\">
                    Présentation
                </a>
            </span>
        </div>
        <div class=\"blocs-menu\">
            <span class=\"nav-menu-item\">
                <a href=\"#port\">
                    Portfolio
                </a>
            </span>
        </div>
        <div class=\"blocs-menu\">
            <span class=\"nav-menu-item\">
                <a href=\"#range\">
                    Compétences
                </a>
            </span>
        </div>
        <div class=\"blocs-menu\">
            <span class=\"nav-menu-item\">
                <a href=\"#contact\">
                    Contact
                </a>
            </span>
        </div>



        <div class=\"blocs-menu\">
            <div class=\"logo-cercle\">
                <a href=\"#contact\">
                    <img src=\"cv1/contact.svg\" alt=\"logo contact\">
                </a>
            </div>
        </div>

    </div>

    <!-- Section Accueil -->

    <section class=\"accueil\" id=\"accueil\">
        <h1>Bienvenue sur mon portfolio</h1>
        <p class=\"txt-animation\"></p>
        <a href=\"#\" class=\"btn-acc btn-acc1\">Portfolio</a>
        <a href=\"#\" class=\"btn-acc btn-acc2\">Expériences</a>

        <div class=\"medias\">
            <a href=\"https://github.com\" target=\"blank\">
                <div class=\"media media1\">
                    <img src=\"cv1/github.svg\" alt=\"github icone\" class=\"icone-medias\">
                </div>
            </a>
            <a href=\"https://linkedin.com\" target=\"blank\">
                <div class=\"media media2\">
                    <img src=\"cv1/linkedin.svg\" alt=\"linkedin icone\" class=\"icone-medias\">
                </div>
            </a>
            <a href=\"https://twitter.com\" target=\"blank\">
                <div class=\"media media3\">
                    <img src=\"cv1/twitter.svg\" alt=\"twitter icone\" class=\"icone-medias\">
                </div>
            </a>
        </div>

        <a href=\"#pres\">
            <div class=\"btn-rond\">
                <img src=\"cv1/arrowDown.svg\" alt=\"logo fleche bas\" class=\"logo-btn-rond-acc\">
            </div>
        </a>
    </section>

    <!-- Section Présentation -->

<section class=\"presentation\" id=\"pres\">

    <h2 class=\"titre-pres\">Lorem ipsum dolor sit amet.</h2>

    <div class=\"container-presentation\">

        <div class=\"fond-forme\"></div>

        <div class=\"pres-gauche\">
            <h3>Laborum cumque aliquid ut pariatur, natus maxime.</h3>
            <hr>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit dignissimos quisquam rerum aliquam quasi vitae nisi expedita debitis cupiditate asperiores optio eveniet labore, vel beatae!</p>
            <br>
            <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi facere illum ullam exercitationem praesentium veniam?
            </p>
        </div>
        
        <div class=\"pres-droite\">
            <ul class=\"liste-presentation\">
                <li class=\"item-liste i1\">
                    <span class=\"chiffre-style\">1.</span>
                    <p class=\"txt-liste\">UX Design expert</p>
                </li>
                <li class=\"item-liste i2\">
                    <span class=\"chiffre-style\">2.</span>
                    <p class=\"txt-liste\">Spécialiste UI</p>
                </li>
                <li class=\"item-liste i3\">
                    <span class=\"chiffre-style\">3.</span>
                    <p class=\"txt-liste\">Développeur Back-end</p>
                </li>
                <li class=\"item-liste i4\">
                    <span class=\"chiffre-style\">4.</span>
                    <p class=\"txt-liste\">Développeur Front-End</p>
                </li>
                <li class=\"item-liste i5\">
                    <span class=\"chiffre-style\">5.</span>
                    <p class=\"txt-liste\">Développeur Full-Stack</p>
                </li>
            </ul>
        </div>
        
    </div>

</section>

<!-- Section Portfolio -->

<section class=\"portfolio\" id=\"port\">


    <h2 class=\"titre-port\">Mon Portfolio</h2>

    <div class=\"cont-portfolio\">


        <div class=\"item vague1\">
            <div class=\"cont-img-port\">
                <img src=\"cv1/bootstrap.jpg\" alt=\"img portfolio\">
            </div>
            <h3>Mon fabuleux projet</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, dolore?</p>
            <a href=\"#\" class=\"btn-projets\">Découvrez le projet</a>
        </div>

        <div class=\"item vague1\">
            <div class=\"cont-img-port\">
                <img src=\"cv1/console.jpg\" alt=\"img portfolio\">
            </div>
            <h3>Mon fabuleux projet</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, dolore?</p>
            <a href=\"#\" class=\"btn-projets\">Découvrez le projet</a>
        </div>

        <div class=\"item vague1\">
            <div class=\"cont-img-port\">
                <img src=\"cv1/animcss.jpg\" alt=\"img portfolio\">
            </div>
            <h3>Mon fabuleux projet</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, dolore?</p>
            <a href=\"#\" class=\"btn-projets\">Découvrez le projet</a>
        </div>


        <div class=\"item vague2\">
            <div class=\"cont-img-port\">
                <img src=\"cv1/bootstrapsite.jpg\" alt=\"img portfolio\">
            </div>
            <h3>Mon fabuleux projet</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, dolore?</p>
            <a href=\"#\" class=\"btn-projets\">Découvrez le projet</a>
        </div>


        <div class=\"item vague2\">
            <div class=\"cont-img-port\">
                <img src=\"cv1/flex.jpg\" alt=\"img portfolio\">
            </div>
            <h3>Mon fabuleux projet</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, dolore?</p>
            <a href=\"#\" class=\"btn-projets\">Découvrez le projet</a>
        </div>


        <div class=\"item vague2\">
            <div class=\"cont-img-port\">
                <img src=\"cv1/d3.jpg\" alt=\"img portfolio\">
            </div>
            <h3>Mon fabuleux projet</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, dolore?</p>
            <a href=\"#\" class=\"btn-projets\">Découvrez le projet</a>
        </div>


        <div class=\"item vague3\">
            <div class=\"cont-img-port\">
                <img src=\"cv1/Menus.jpg\" alt=\"img portfolio\">
            </div>
            <h3>Mon fabuleux projet</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, dolore?</p>
            <a href=\"#\" class=\"btn-projets\">Découvrez le projet</a>
        </div>


        <div class=\"item vague3\">
            <div class=\"cont-img-port\">
                <img src=\"cv1/projetsCars.jpg\" alt=\"img portfolio\">
            </div>
            <h3>Mon fabuleux projet</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, dolore?</p>
            <a href=\"#\" class=\"btn-projets\">Découvrez le projet</a>
        </div>


        <div class=\"item vague3\">
            <div class=\"cont-img-port\">
                <img src=\"cv1/form.jpg\" alt=\"img portfolio\">
            </div>
            <h3>Mon fabuleux projet</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, dolore?</p>
            <a href=\"#\" class=\"btn-projets\">Découvrez le projet</a>
        </div>


       

    </div>


</section>

<!-- Section Range -->

<section class=\"section-range\" id=\"range\">

    <h2 class=\"titre-exp\">Mes compétences</h2>

    <div class=\"grille-skill\">


        ";
        // line 312
        echo "
    </div>

</section>

<!-- Section -->

<section class=\"travail-exp\" id=\"exp\">

    <h2 class=\"titre-travail-exp\">Mes expériences</h2>

    <div class=\"cont-exp-travail\">

        <div class=\"barre-verticale\">
            <div class=\"boule-ico\">
                <img src=\"cv1/google.svg\" alt=\"icone gauche\">
            </div>
            <div class=\"boule-ico\">
                <img src=\"cv1/instagram.svg\" alt=\"icone gauche\">
            </div>
            <div class=\"boule-ico\">
                <img src=\"cv1/amazon.svg\" alt=\"icone gauche\">
            </div>
            <div class=\"boule-ico\">
                <img src=\"cv1/apple.svg\" alt=\"icone gauche\">
            </div>
            <div class=\"boule-ico\">
                <img src=\"cv1/plane.svg\" class=\"avion\" alt=\"icone gauche\">
            </div>
        </div>


        <div class=\"flex-cont-bloc-exp\">

            <div class=\"bloc bloc1\">
                <div class=\"contenu-bloc\">
                    <p class=\"titre-section-bloc\">Test, 2019</p>
                    <p class=\"txt-section\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In perferendis dignissimos doloribus quaerat corrupti facere ratione modi vel. Voluptatem minima facilis eaque eum quia voluptatibus dolorem minus incidunt repellendus culpa?</p>
                </div>
            </div>

            <div class=\"bloc bloc2\">
                <div class=\"contenu-bloc\">
                    <p class=\"titre-section-bloc\">Test, 2017-2018</p>
                    <p class=\"txt-section\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, vel ipsam nulla aliquid quae beatae ut et cum libero molestiae?</p>
                </div>
            </div>

            <div class=\"bloc bloc3\">
                <div class=\"contenu-bloc\">
                    <p class=\"titre-section-bloc\">Test, 2015-2016</p>
                    <p class=\"txt-section\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, vel ipsam nulla aliquid quae beatae ut et cum libero molestiae?</p>
                </div>
            </div>

            <div class=\"bloc bloc4\">
                <div class=\"contenu-bloc\">
                    <p class=\"titre-section-bloc\">Test, 2012-2014</p>
                    <p class=\"txt-section\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, vel ipsam nulla aliquid quae beatae ut et cum libero molestiae?</p>
                </div>
            </div>


        </div>
    </div>

</section>


<!-- Section Parallax -->

<div class=\"section-parallax\">
    <p class=\"txt-par\">
        Test
    </p>
    <p class=\"txt-par\">
       Test
    </p>
    <p class=\"txt-par\">
        Test
    </p>
</div>


<!-- Section Contact -->

<section class=\"section-contact\" id=\"contact\">

    <h2><strong>Rentrons</strong> en Contact</h2>

    <div class=\"container-form\">

        <form class=\"form-bloc\">

            <div class=\"form-groupe\">
                <label for=\"prenom\">Prénom</label>
                <input type=\"text\" required maxlength=\"16\" id=\"prenom\">
            </div>
            <div class=\"form-groupe\">
                <label for=\"nom\">Nom</label>
                <input type=\"text\" required maxlength=\"16\" id=\"nom\">
            </div>
            <div class=\"form-groupe\">
                <textarea id=\"txt\" placeholder=\"Votre message\" required></textarea>
            </div>

            <div class=\"form-groupe\">
                <input type=\"submit\" value=\"ENVOYER\" class=\"button-sub\">
            </div>

        </form>

    </div>


</section>

<footer>
    Tout Droits réservés &copy;
</footer>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 433
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 434
        echo "        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js\"></script>
    <script src=\"https://unpkg.com/typewriter-effect@latest/dist/core.js\"></script>

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
        return array (  523 => 434,  513 => 433,  383 => 312,  119 => 11,  109 => 10,  97 => 8,  91 => 6,  81 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello CvController!
{% endblock %}
{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Poppins&display=swap\" rel=\"stylesheet\">
    {{encore_entry_link_tags('cv')}}
{% endblock %}
{% block body %}
 <!-- Btn flottant gauche petit menu -->

    <div class=\"btn-rond-menu\">
        <div class=\"cont-ligne\">
            <div class=\"ligne-unique\"></div>
        </div>
    </div>

    <!-- Navigation verticale -->

    <div class=\"nav-gauche\">

        <div class=\"blocs-menu\">
            <div class=\"cercle-portrait\">
                <img src=\"cv1/boss.svg\" alt=\"portrait img\">
            </div>
        </div>

        <div class=\"blocs-menu\">
            <span class=\"nav-menu-item\">
                <a href=\"#accueil\">
                    Accueil
                </a>
            </span>
        </div>
        <div class=\"blocs-menu\">
            <span class=\"nav-menu-item\">
                <a href=\"#pres\">
                    Présentation
                </a>
            </span>
        </div>
        <div class=\"blocs-menu\">
            <span class=\"nav-menu-item\">
                <a href=\"#port\">
                    Portfolio
                </a>
            </span>
        </div>
        <div class=\"blocs-menu\">
            <span class=\"nav-menu-item\">
                <a href=\"#range\">
                    Compétences
                </a>
            </span>
        </div>
        <div class=\"blocs-menu\">
            <span class=\"nav-menu-item\">
                <a href=\"#contact\">
                    Contact
                </a>
            </span>
        </div>



        <div class=\"blocs-menu\">
            <div class=\"logo-cercle\">
                <a href=\"#contact\">
                    <img src=\"cv1/contact.svg\" alt=\"logo contact\">
                </a>
            </div>
        </div>

    </div>

    <!-- Section Accueil -->

    <section class=\"accueil\" id=\"accueil\">
        <h1>Bienvenue sur mon portfolio</h1>
        <p class=\"txt-animation\"></p>
        <a href=\"#\" class=\"btn-acc btn-acc1\">Portfolio</a>
        <a href=\"#\" class=\"btn-acc btn-acc2\">Expériences</a>

        <div class=\"medias\">
            <a href=\"https://github.com\" target=\"blank\">
                <div class=\"media media1\">
                    <img src=\"cv1/github.svg\" alt=\"github icone\" class=\"icone-medias\">
                </div>
            </a>
            <a href=\"https://linkedin.com\" target=\"blank\">
                <div class=\"media media2\">
                    <img src=\"cv1/linkedin.svg\" alt=\"linkedin icone\" class=\"icone-medias\">
                </div>
            </a>
            <a href=\"https://twitter.com\" target=\"blank\">
                <div class=\"media media3\">
                    <img src=\"cv1/twitter.svg\" alt=\"twitter icone\" class=\"icone-medias\">
                </div>
            </a>
        </div>

        <a href=\"#pres\">
            <div class=\"btn-rond\">
                <img src=\"cv1/arrowDown.svg\" alt=\"logo fleche bas\" class=\"logo-btn-rond-acc\">
            </div>
        </a>
    </section>

    <!-- Section Présentation -->

<section class=\"presentation\" id=\"pres\">

    <h2 class=\"titre-pres\">Lorem ipsum dolor sit amet.</h2>

    <div class=\"container-presentation\">

        <div class=\"fond-forme\"></div>

        <div class=\"pres-gauche\">
            <h3>Laborum cumque aliquid ut pariatur, natus maxime.</h3>
            <hr>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit dignissimos quisquam rerum aliquam quasi vitae nisi expedita debitis cupiditate asperiores optio eveniet labore, vel beatae!</p>
            <br>
            <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi facere illum ullam exercitationem praesentium veniam?
            </p>
        </div>
        
        <div class=\"pres-droite\">
            <ul class=\"liste-presentation\">
                <li class=\"item-liste i1\">
                    <span class=\"chiffre-style\">1.</span>
                    <p class=\"txt-liste\">UX Design expert</p>
                </li>
                <li class=\"item-liste i2\">
                    <span class=\"chiffre-style\">2.</span>
                    <p class=\"txt-liste\">Spécialiste UI</p>
                </li>
                <li class=\"item-liste i3\">
                    <span class=\"chiffre-style\">3.</span>
                    <p class=\"txt-liste\">Développeur Back-end</p>
                </li>
                <li class=\"item-liste i4\">
                    <span class=\"chiffre-style\">4.</span>
                    <p class=\"txt-liste\">Développeur Front-End</p>
                </li>
                <li class=\"item-liste i5\">
                    <span class=\"chiffre-style\">5.</span>
                    <p class=\"txt-liste\">Développeur Full-Stack</p>
                </li>
            </ul>
        </div>
        
    </div>

</section>

<!-- Section Portfolio -->

<section class=\"portfolio\" id=\"port\">


    <h2 class=\"titre-port\">Mon Portfolio</h2>

    <div class=\"cont-portfolio\">


        <div class=\"item vague1\">
            <div class=\"cont-img-port\">
                <img src=\"cv1/bootstrap.jpg\" alt=\"img portfolio\">
            </div>
            <h3>Mon fabuleux projet</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, dolore?</p>
            <a href=\"#\" class=\"btn-projets\">Découvrez le projet</a>
        </div>

        <div class=\"item vague1\">
            <div class=\"cont-img-port\">
                <img src=\"cv1/console.jpg\" alt=\"img portfolio\">
            </div>
            <h3>Mon fabuleux projet</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, dolore?</p>
            <a href=\"#\" class=\"btn-projets\">Découvrez le projet</a>
        </div>

        <div class=\"item vague1\">
            <div class=\"cont-img-port\">
                <img src=\"cv1/animcss.jpg\" alt=\"img portfolio\">
            </div>
            <h3>Mon fabuleux projet</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, dolore?</p>
            <a href=\"#\" class=\"btn-projets\">Découvrez le projet</a>
        </div>


        <div class=\"item vague2\">
            <div class=\"cont-img-port\">
                <img src=\"cv1/bootstrapsite.jpg\" alt=\"img portfolio\">
            </div>
            <h3>Mon fabuleux projet</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, dolore?</p>
            <a href=\"#\" class=\"btn-projets\">Découvrez le projet</a>
        </div>


        <div class=\"item vague2\">
            <div class=\"cont-img-port\">
                <img src=\"cv1/flex.jpg\" alt=\"img portfolio\">
            </div>
            <h3>Mon fabuleux projet</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, dolore?</p>
            <a href=\"#\" class=\"btn-projets\">Découvrez le projet</a>
        </div>


        <div class=\"item vague2\">
            <div class=\"cont-img-port\">
                <img src=\"cv1/d3.jpg\" alt=\"img portfolio\">
            </div>
            <h3>Mon fabuleux projet</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, dolore?</p>
            <a href=\"#\" class=\"btn-projets\">Découvrez le projet</a>
        </div>


        <div class=\"item vague3\">
            <div class=\"cont-img-port\">
                <img src=\"cv1/Menus.jpg\" alt=\"img portfolio\">
            </div>
            <h3>Mon fabuleux projet</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, dolore?</p>
            <a href=\"#\" class=\"btn-projets\">Découvrez le projet</a>
        </div>


        <div class=\"item vague3\">
            <div class=\"cont-img-port\">
                <img src=\"cv1/projetsCars.jpg\" alt=\"img portfolio\">
            </div>
            <h3>Mon fabuleux projet</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, dolore?</p>
            <a href=\"#\" class=\"btn-projets\">Découvrez le projet</a>
        </div>


        <div class=\"item vague3\">
            <div class=\"cont-img-port\">
                <img src=\"cv1/form.jpg\" alt=\"img portfolio\">
            </div>
            <h3>Mon fabuleux projet</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, dolore?</p>
            <a href=\"#\" class=\"btn-projets\">Découvrez le projet</a>
        </div>


       

    </div>


</section>

<!-- Section Range -->

<section class=\"section-range\" id=\"range\">

    <h2 class=\"titre-exp\">Mes compétences</h2>

    <div class=\"grille-skill\">


        {# <div class=\"range-cont\">
            <p class=\"label-skill\">JavaScript</p>
            <p class=\"number-skill\">90%</p>
            <div class=\"barre-skill b1\"></div>
            <div class=\"barre-grises\"></div>
        </div>
        <div class=\"range-cont\">
            <p class=\"label-skill\">SEO</p>
            <p class=\"number-skill\">75%</p>
            <div class=\"barre-skill b2\"></div>
            <div class=\"barre-grises\"></div>
        </div>
        <div class=\"range-cont\">
            <p class=\"label-skill\">UI / UX</p>
            <p class=\"number-skill\">70%</p>
            <div class=\"barre-skill b3\"></div>
            <div class=\"barre-grises\"></div>
        </div>


        <div class=\"range-cont\">
            <p class=\"label-skill\">Node JS</p>
            <p class=\"number-skill\">80%</p>
            <div class=\"barre-skill b4\"></div>
            <div class=\"barre-grises\"></div>
        </div>
        <div class=\"range-cont\">
            <p class=\"label-skill\">Wordpress</p>
            <p class=\"number-skill\">70%</p>
            <div class=\"barre-skill b5\"></div>
            <div class=\"barre-grises\"></div>
        </div>
        <div class=\"range-cont\">
            <p class=\"label-skill\">React JS</p>
            <p class=\"number-skill\">80%</p>
            <div class=\"barre-skill b6\"></div>
            <div class=\"barre-grises\"></div>
        </div>
 #}

    </div>

</section>

<!-- Section -->

<section class=\"travail-exp\" id=\"exp\">

    <h2 class=\"titre-travail-exp\">Mes expériences</h2>

    <div class=\"cont-exp-travail\">

        <div class=\"barre-verticale\">
            <div class=\"boule-ico\">
                <img src=\"cv1/google.svg\" alt=\"icone gauche\">
            </div>
            <div class=\"boule-ico\">
                <img src=\"cv1/instagram.svg\" alt=\"icone gauche\">
            </div>
            <div class=\"boule-ico\">
                <img src=\"cv1/amazon.svg\" alt=\"icone gauche\">
            </div>
            <div class=\"boule-ico\">
                <img src=\"cv1/apple.svg\" alt=\"icone gauche\">
            </div>
            <div class=\"boule-ico\">
                <img src=\"cv1/plane.svg\" class=\"avion\" alt=\"icone gauche\">
            </div>
        </div>


        <div class=\"flex-cont-bloc-exp\">

            <div class=\"bloc bloc1\">
                <div class=\"contenu-bloc\">
                    <p class=\"titre-section-bloc\">Test, 2019</p>
                    <p class=\"txt-section\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In perferendis dignissimos doloribus quaerat corrupti facere ratione modi vel. Voluptatem minima facilis eaque eum quia voluptatibus dolorem minus incidunt repellendus culpa?</p>
                </div>
            </div>

            <div class=\"bloc bloc2\">
                <div class=\"contenu-bloc\">
                    <p class=\"titre-section-bloc\">Test, 2017-2018</p>
                    <p class=\"txt-section\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, vel ipsam nulla aliquid quae beatae ut et cum libero molestiae?</p>
                </div>
            </div>

            <div class=\"bloc bloc3\">
                <div class=\"contenu-bloc\">
                    <p class=\"titre-section-bloc\">Test, 2015-2016</p>
                    <p class=\"txt-section\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, vel ipsam nulla aliquid quae beatae ut et cum libero molestiae?</p>
                </div>
            </div>

            <div class=\"bloc bloc4\">
                <div class=\"contenu-bloc\">
                    <p class=\"titre-section-bloc\">Test, 2012-2014</p>
                    <p class=\"txt-section\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, vel ipsam nulla aliquid quae beatae ut et cum libero molestiae?</p>
                </div>
            </div>


        </div>
    </div>

</section>


<!-- Section Parallax -->

<div class=\"section-parallax\">
    <p class=\"txt-par\">
        Test
    </p>
    <p class=\"txt-par\">
       Test
    </p>
    <p class=\"txt-par\">
        Test
    </p>
</div>


<!-- Section Contact -->

<section class=\"section-contact\" id=\"contact\">

    <h2><strong>Rentrons</strong> en Contact</h2>

    <div class=\"container-form\">

        <form class=\"form-bloc\">

            <div class=\"form-groupe\">
                <label for=\"prenom\">Prénom</label>
                <input type=\"text\" required maxlength=\"16\" id=\"prenom\">
            </div>
            <div class=\"form-groupe\">
                <label for=\"nom\">Nom</label>
                <input type=\"text\" required maxlength=\"16\" id=\"nom\">
            </div>
            <div class=\"form-groupe\">
                <textarea id=\"txt\" placeholder=\"Votre message\" required></textarea>
            </div>

            <div class=\"form-groupe\">
                <input type=\"submit\" value=\"ENVOYER\" class=\"button-sub\">
            </div>

        </form>

    </div>


</section>

<footer>
    Tout Droits réservés &copy;
</footer>
{% endblock %}
{% block javascripts %}
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js\"></script>
    <script src=\"https://unpkg.com/typewriter-effect@latest/dist/core.js\"></script>

{% endblock %}
", "cv/curriculum_vitæ.html.twig", "/home/yanis/server/symfony/projet0/templates/cv/curriculum_vitæ.html.twig");
    }
}

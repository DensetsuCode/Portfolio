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

/* bts_sio/bts_sio.html.twig */
class __TwigTemplate_67f2e2ff06af3e95b8fb6870608932030050de4366e05227a308027708636224 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bts_sio/bts_sio.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bts_sio/bts_sio.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "bts_sio/bts_sio.html.twig", 1);
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

        echo "C'est quoi le Bts Sio ?
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 6
        echo "\t";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 9
        echo "
\t<div class=\"row justify-content-evenly\">
\t\t<h1 class=\"text-dark display-3 text-center\">Le BTS SIO</h1>
\t\t<div class=\"text-center\">
\t\t\t<h2>En quoi consiste ce Bts consiste ?</h2>
\t\t\t<p>
\t\t\t\t<strong>
\t\t\t\t\tLe Brevet de technicien supérieur - Services informatiques aux organisations est destiné aux personnes souhaitent se former sur 2 ans aux métiers de développeur ou d'administrateur réseau.<br>
\t\t\t\t\tPar la suite ils pourront directement rejoindre le monde du travail à l'issu de cela ou bien continuer leurs études dans le domaine qu'ils ont choisi.</strong>
\t\t\t</p>
\t\t</div>
\t\t<h1 class=\"text-dark display-3 text-center\">
\t\t\tLe BTS SIO se distingue par deux options différentes :</h1>
\t</section>
\t<div class=\"row justify-content-evenly\">
\t\t<div class=\"col-4\">
\t<div class=\"h-100 p-5 text-white bg-secondary rounded-3\">

\t\t\t<h2>
\t\t\t\tL'Option SLAM
\t\t\t</h2>
\t\t\t<p>L’acronyme SLAM signifie
\t\t\t\t<strong>« Solutions Logicielles et Applications Métier ».</strong>
\t\t\t\tVoici des précisions sur cette formation et ses débouchés.</p>

\t\t\t<h3>
\t\t\t\tQu'est ce que l'option SLAM
\t\t\t</h3>
\t\t\t<p>
\t\t\t\tL’option SLAM est destinée aux étudiants qui s’orientent vers les métiers liés à la conception et la maintenance de programmes applicatifs. Grâce à des cours spécifiques, les diplômés seront capables de gérer un parc informatique ou d’administrer un réseau au sein d’une entreprise.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tIls pourront également gérer l’intégration, la sécurisation et la configuration des serveurs, mais aussi des postes clients et des équipements d’interconnexion.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tVoici les débouchés avec un BTS SIO SLAM:

\t\t\t\t<ul>
\t\t\t\t\t<li>
\t\t\t\t\t\tDéveloppeur d'applications informatiques
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\tDéveloppeur informatique
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\tAnalyste d'applications ou d'études
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\tAnalyste programmeur
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\tChargé d'études informatiques
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\tInformaticien d'études
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\tProgrammeur analyste
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\tProgrammeur d'applications
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\tResponsable des services applicatifs
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\tTechnicien d'études informatiques
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</p>
\t\t</div>
\t</div>
\t        <div class=\"col-4\">
\t<div class=\"h-100 p-5 text-white bg-dark rounded-3\">


\t\t<h2>
\t\t\tL'Option SISR
\t\t</h2>
\t\t<p>
\t\t\tL’acronyme SISR signifie
\t\t\t<strong>
\t\t\t\t« Solutions d’infrastructure, systèmes et réseaux ».</strong>
\t\t\t\tVoici des précisions sur cette formation et ses débouchés.
\t\t</p>
\t\t<h3>
\t\t\tQu'est ce que l'option SISR
\t\t</h3>

\t\t<p>L’option SISR est destinée aux étudiants qui s’orientent vers les métiers liés à la conception et la maintenance d’infrastructures réseaux. Assurer la sécurité, la maintenance et l’installation des réseaux et des équipements informatiques font partie des principales missions des futurs administrateurs, techniciens ou pilotes d’exploitation.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tDes cours plus généraux viendront compléter la formation et apporter des compétences plus généralistes, permettant ainsi aux diplômés d’être opérationnels dans n’importe quelle entreprise.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tVoici les débouchés avec un BTS SIO SISR:
\t\t\t<ul>
\t\t\t\t<li>
\t\t\t\t\tTechnicien de production
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\tTechnicien d’infrastructure
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\tTechnicien réseau et télécoms
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\tTechnicien systèmes et réseaux
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\tAdministrateur systèmes et réseaux
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\tSupport systèmes et réseaux
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\tPilote d’exploitation
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\tInformaticien support et déploiement</li>
\t\t\t</ul>
\t\t</p>
\t\t </div>
  </div>
</div>
\t</div>
</div></div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "bts_sio/bts_sio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 9,  103 => 8,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}C'est quoi le Bts Sio ?
{% endblock %}
{% block javascripts %}
\t{{ encore_entry_script_tags('app') }}
{% endblock %}
{% block main %}

\t<div class=\"row justify-content-evenly\">
\t\t<h1 class=\"text-dark display-3 text-center\">Le BTS SIO</h1>
\t\t<div class=\"text-center\">
\t\t\t<h2>En quoi consiste ce Bts consiste ?</h2>
\t\t\t<p>
\t\t\t\t<strong>
\t\t\t\t\tLe Brevet de technicien supérieur - Services informatiques aux organisations est destiné aux personnes souhaitent se former sur 2 ans aux métiers de développeur ou d'administrateur réseau.<br>
\t\t\t\t\tPar la suite ils pourront directement rejoindre le monde du travail à l'issu de cela ou bien continuer leurs études dans le domaine qu'ils ont choisi.</strong>
\t\t\t</p>
\t\t</div>
\t\t<h1 class=\"text-dark display-3 text-center\">
\t\t\tLe BTS SIO se distingue par deux options différentes :</h1>
\t</section>
\t<div class=\"row justify-content-evenly\">
\t\t<div class=\"col-4\">
\t<div class=\"h-100 p-5 text-white bg-secondary rounded-3\">

\t\t\t<h2>
\t\t\t\tL'Option SLAM
\t\t\t</h2>
\t\t\t<p>L’acronyme SLAM signifie
\t\t\t\t<strong>« Solutions Logicielles et Applications Métier ».</strong>
\t\t\t\tVoici des précisions sur cette formation et ses débouchés.</p>

\t\t\t<h3>
\t\t\t\tQu'est ce que l'option SLAM
\t\t\t</h3>
\t\t\t<p>
\t\t\t\tL’option SLAM est destinée aux étudiants qui s’orientent vers les métiers liés à la conception et la maintenance de programmes applicatifs. Grâce à des cours spécifiques, les diplômés seront capables de gérer un parc informatique ou d’administrer un réseau au sein d’une entreprise.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tIls pourront également gérer l’intégration, la sécurisation et la configuration des serveurs, mais aussi des postes clients et des équipements d’interconnexion.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tVoici les débouchés avec un BTS SIO SLAM:

\t\t\t\t<ul>
\t\t\t\t\t<li>
\t\t\t\t\t\tDéveloppeur d'applications informatiques
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\tDéveloppeur informatique
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\tAnalyste d'applications ou d'études
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\tAnalyste programmeur
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\tChargé d'études informatiques
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\tInformaticien d'études
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\tProgrammeur analyste
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\tProgrammeur d'applications
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\tResponsable des services applicatifs
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\tTechnicien d'études informatiques
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</p>
\t\t</div>
\t</div>
\t        <div class=\"col-4\">
\t<div class=\"h-100 p-5 text-white bg-dark rounded-3\">


\t\t<h2>
\t\t\tL'Option SISR
\t\t</h2>
\t\t<p>
\t\t\tL’acronyme SISR signifie
\t\t\t<strong>
\t\t\t\t« Solutions d’infrastructure, systèmes et réseaux ».</strong>
\t\t\t\tVoici des précisions sur cette formation et ses débouchés.
\t\t</p>
\t\t<h3>
\t\t\tQu'est ce que l'option SISR
\t\t</h3>

\t\t<p>L’option SISR est destinée aux étudiants qui s’orientent vers les métiers liés à la conception et la maintenance d’infrastructures réseaux. Assurer la sécurité, la maintenance et l’installation des réseaux et des équipements informatiques font partie des principales missions des futurs administrateurs, techniciens ou pilotes d’exploitation.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tDes cours plus généraux viendront compléter la formation et apporter des compétences plus généralistes, permettant ainsi aux diplômés d’être opérationnels dans n’importe quelle entreprise.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tVoici les débouchés avec un BTS SIO SISR:
\t\t\t<ul>
\t\t\t\t<li>
\t\t\t\t\tTechnicien de production
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\tTechnicien d’infrastructure
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\tTechnicien réseau et télécoms
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\tTechnicien systèmes et réseaux
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\tAdministrateur systèmes et réseaux
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\tSupport systèmes et réseaux
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\tPilote d’exploitation
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\tInformaticien support et déploiement</li>
\t\t\t</ul>
\t\t</p>
\t\t </div>
  </div>
</div>
\t</div>
</div></div>{% endblock %}
", "bts_sio/bts_sio.html.twig", "/home/yanis/server/symfony/projet0/templates/bts_sio/bts_sio.html.twig");
    }
}

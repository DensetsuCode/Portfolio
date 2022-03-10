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
class __TwigTemplate_f7c0e2abc8ea18ca400d82b28949ad586781c81d10f069a6d3ff7f220f74af76 extends Template
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

        echo "C'est quoi le Bts Sio ?";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container\" style=\"background-color: #fefdd6; padding:10px;margin-top:20px;\">

<h1>En quoi consiste le Bts Sio ?</h1>
<p>
Le Brevet de technicien supérieur - Services informatiques aux organisations est destiné aux personnes souhaitent se former sur 2 ans aux métiers de développeur ou d'administrateur réseau.<br>
Par la suite ils pourront directement rejoindre le monde du travail à l'issu de cela ou bien continuer leurs études dans le domaine qu'ils ont choisi.

<h1> Le BTS SIO se compose de 2 options :</h1>

<h2> L'Option SLAM </h2>
 <p>
            Le signe SLAM signifie <strong> « Solutions Logicielles et Applications Métier ».</strong> Voici des précisions sur cette formation et ses débouchés.
        </p>


<h3> Qu'est ce que l'option SLAM </h3>
 <p> L’option SLAM est destinée aux étudiants qui s’orientent vers les métiers liés à la conception et la maintenance de programmes applicatifs. Grâce à des cours spécifiques, les diplômés seront capables de gérer un parc informatique ou d’administrer un réseau au sein d’une entreprise.
Ils pourront également gérer l’intégration, la sécurisation et la configuration des serveurs, mais aussi des postes clients et des équipements d’interconnexion.
Voici les débouchés avec un BTS SIO SLAM:

<ul>
    <li> Développeur d'applications informatiques </li>
    <li> Développeur informatique </li>
    <li> Analyste d'applications ou d'études </li>
    <li> Analyste programmeur </li>
    <li> Chargé d'études informatiques </li>
    <li> Informaticien d'études </li>
    <li> Programmeur analyste </li>
    <li> Programmeur d'applications </li>
    <li> Responsable des services applicatifs </li>
    <li> Technicien d'études informatiques </li>
</ul>
        </p>

    <h2> L'Option SISR </h2>
<p>
            L’acronyme SISR signifie <strong> « Solutions d’infrastructure, systèmes et réseaux ».</strong> Voici quelques indications sur cette seconde option du BTS SIO.
        </p>
<h3> Qu'est ce que l'option SISR </h3>

<p>L’option SISR est destinée aux étudiants qui s’orientent vers les métiers liés à la conception et la maintenance d’infrastructures réseaux. Assurer la sécurité, la maintenance et l’installation des réseaux et des équipements informatiques font partie des principales missions des futurs administrateurs, techniciens ou pilotes d’exploitation.
Des cours plus généraux viendront compléter la formation et apporter des compétences plus généralistes, permettant ainsi aux diplômés d’être opérationnels dans n’importe quelle entreprise.
Voici les débouchés avec un BTS SIO SISR:
<ul>
    <li> Technicien de production </li>
    <li> Technicien d’infrastructure </li>
    <li> Technicien réseau et télécoms </li>
    <li> Technicien systèmes et réseaux </li>
    <li> Administrateur systèmes et réseaux </li>
    <li> Support systèmes et réseaux </li>
    <li> Pilote d’exploitation </li>
    <li> Informaticien support et déploiement</li>
</ul>
        </p>
        </div>
";
        
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
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}C'est quoi le Bts Sio ?{% endblock %}

{% block body %}
<div class=\"container\" style=\"background-color: #fefdd6; padding:10px;margin-top:20px;\">

<h1>En quoi consiste le Bts Sio ?</h1>
<p>
Le Brevet de technicien supérieur - Services informatiques aux organisations est destiné aux personnes souhaitent se former sur 2 ans aux métiers de développeur ou d'administrateur réseau.<br>
Par la suite ils pourront directement rejoindre le monde du travail à l'issu de cela ou bien continuer leurs études dans le domaine qu'ils ont choisi.

<h1> Le BTS SIO se compose de 2 options :</h1>

<h2> L'Option SLAM </h2>
 <p>
            Le signe SLAM signifie <strong> « Solutions Logicielles et Applications Métier ».</strong> Voici des précisions sur cette formation et ses débouchés.
        </p>


<h3> Qu'est ce que l'option SLAM </h3>
 <p> L’option SLAM est destinée aux étudiants qui s’orientent vers les métiers liés à la conception et la maintenance de programmes applicatifs. Grâce à des cours spécifiques, les diplômés seront capables de gérer un parc informatique ou d’administrer un réseau au sein d’une entreprise.
Ils pourront également gérer l’intégration, la sécurisation et la configuration des serveurs, mais aussi des postes clients et des équipements d’interconnexion.
Voici les débouchés avec un BTS SIO SLAM:

<ul>
    <li> Développeur d'applications informatiques </li>
    <li> Développeur informatique </li>
    <li> Analyste d'applications ou d'études </li>
    <li> Analyste programmeur </li>
    <li> Chargé d'études informatiques </li>
    <li> Informaticien d'études </li>
    <li> Programmeur analyste </li>
    <li> Programmeur d'applications </li>
    <li> Responsable des services applicatifs </li>
    <li> Technicien d'études informatiques </li>
</ul>
        </p>

    <h2> L'Option SISR </h2>
<p>
            L’acronyme SISR signifie <strong> « Solutions d’infrastructure, systèmes et réseaux ».</strong> Voici quelques indications sur cette seconde option du BTS SIO.
        </p>
<h3> Qu'est ce que l'option SISR </h3>

<p>L’option SISR est destinée aux étudiants qui s’orientent vers les métiers liés à la conception et la maintenance d’infrastructures réseaux. Assurer la sécurité, la maintenance et l’installation des réseaux et des équipements informatiques font partie des principales missions des futurs administrateurs, techniciens ou pilotes d’exploitation.
Des cours plus généraux viendront compléter la formation et apporter des compétences plus généralistes, permettant ainsi aux diplômés d’être opérationnels dans n’importe quelle entreprise.
Voici les débouchés avec un BTS SIO SISR:
<ul>
    <li> Technicien de production </li>
    <li> Technicien d’infrastructure </li>
    <li> Technicien réseau et télécoms </li>
    <li> Technicien systèmes et réseaux </li>
    <li> Administrateur systèmes et réseaux </li>
    <li> Support systèmes et réseaux </li>
    <li> Pilote d’exploitation </li>
    <li> Informaticien support et déploiement</li>
</ul>
        </p>
        </div>
{% endblock %}", "bts_sio/bts_sio.html.twig", "/home/yanis/server/symfony/projet0/templates/bts_sio/bts_sio.html.twig");
    }
}

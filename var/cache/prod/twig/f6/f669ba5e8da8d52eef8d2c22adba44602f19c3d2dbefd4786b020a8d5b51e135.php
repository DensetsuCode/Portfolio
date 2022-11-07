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
class __TwigTemplate_e34476ec2828b183ae9dec3f4fc42678ed06fb2a428396a7af160c33dba03c5b extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "bts_sio/bts_sio.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "C'est quoi le Bts Sio ?
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
        echo "\t<div class=\"container-fluid text-center\">

\t\t<h1 class=\"text-dark display-3\">Le Bts SIO</h1>
\t\t<div class=\"text-center\">
\t\t\t<h2>En quoi consiste ce Bts consiste ?</h2>
\t\t\t<p>
\t\t\t\t<strong>
\t\t\t\t\tLe Brevet de technicien supérieur - Services informatiques aux organisations est destiné aux personnes souhaitent se former sur 2 ans aux métiers de développeur ou d'administrateur réseau.<br>
\t\t\t\t\tPar la suite ils pourront directement rejoindre le monde du travail à l'issu de cela ou bien continuer leurs études dans le domaine qu'ils ont choisi.</strong>
\t\t\t</p>
\t\t</div>
\t\t<h1>
\t\t\tLe BTS SIO se compose de 2 options :</h1>
\t</section>
\t<div class=\"h-100 p-5 bg-light border rounded-3\">
\t\t<h2>
\t\t\tL'Option SLAM
\t\t</h2>
\t\t<p>Le signe SLAM signifie
\t\t\t<strong>Solutions Logicielles et Applications Métier.</strong>
\t\t\tVoici des précisions sur cette formation et ses débouchés.</p>

\t\t<h3>
\t\t\tQu'est ce que l'option SLAM
\t\t</h3>
\t\t<p>
\t\t\tL’option SLAM est destinée aux étudiants qui s’orientent vers les métiers liés à la conception et la maintenance de programmes applicatifs. Grâce à des cours spécifiques, les diplômés seront capables de gérer un parc informatique ou d’administrer un réseau au sein d’une entreprise.
\t\t\t\t\t\t\t\t\t\t\t\t\tIls pourront également gérer l’intégration, la sécurisation et la configuration des serveurs, mais aussi des postes clients et des équipements d’interconnexion.
\t\t\t\t\t\t\t\t\t\t\t\t\tVoici les débouchés avec un BTS SIO SLAM:

\t\t\t<ul>
\t\t\t\t<li>
\t\t\t\t\tDéveloppeur d'applications informatiques
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\tDéveloppeur informatique
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\tAnalyste d'applications ou d'études
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\tAnalyste programmeur
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\tChargé d'études informatiques
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\tInformaticien d'études
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\tProgrammeur analyste
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\tProgrammeur d'applications
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\tResponsable des services applicatifs
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\tTechnicien d'études informatiques
\t\t\t\t</li>
\t\t\t</ul>
\t\t</p>
\t</div>
\t<div class=\"h-100 p-5 text-white bg-dark rounded-3\">


\t\t<h2>
\t\t\tL'Option SISR
\t\t</h2>
\t\t<p>
\t\t\tL’acronyme SISR signifie
\t\t\t<strong>
\t\t\t\t« Solutions d’infrastructure, systèmes et réseaux ».</strong>
\t\t\tVoici quelques indications sur cette seconde option du BTS SIO.
\t\t</p>
\t\t<h3>
\t\t\tQu'est ce que l'option SISR
\t\t</h3>

\t\t<p>L’option SISR est destinée aux étudiants qui s’orientent vers les métiers liés à la conception et la maintenance d’infrastructures réseaux. Assurer la sécurité, la maintenance et l’installation des réseaux et des équipements informatiques font partie des principales missions des futurs administrateurs, techniciens ou pilotes d’exploitation.
\t\t\t\t\t\t\t\t\t\t\t\t\tDes cours plus généraux viendront compléter la formation et apporter des compétences plus généralistes, permettant ainsi aux diplômés d’être opérationnels dans n’importe quelle entreprise.
\t\t\t\t\t\t\t\t\t\t\t\t\tVoici les débouchés avec un BTS SIO SISR:
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
\t</div>
</div></div>";
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
        return array (  71 => 9,  67 => 8,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bts_sio/bts_sio.html.twig", "/home/yanis/server/symfony/projet0/templates/bts_sio/bts_sio.html.twig");
    }
}

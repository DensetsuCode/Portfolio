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

/* contact/contact.html.twig */
class __TwigTemplate_60335f0365ddd0c6650c4e4769f2452aa28985cc8d75a7f0ec5708a23bdfb967 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "<div class=\"col-sm-12\">
    <div class=\"form-group\">
";
        // line 4
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["our_form"] ?? null), 'form_start');
        echo "
    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["our_form"] ?? null), "fullName", [], "any", false, false, false, 5), 'row', ["attr" => ["class" => "form-control"]]);
        echo "


</div>
<div class=\"form-group\">
    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["our_form"] ?? null), "email", [], "any", false, false, false, 10), 'row', ["attr" => ["class" => "form-control"]]);
        echo "

</div>
<div class=\"form-group\">
    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["our_form"] ?? null), "message", [], "any", false, false, false, 14), 'row', ["attr" => ["class" => "form-control"]]);
        echo "

</div>

<div class=\"form-group\">
    <input type=\"submit\" value=\"Send\" class=\"btn btn-primary py-3 px-5\">
</div>
";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["our_form"] ?? null), 'form_end');
        echo "
</div>

</div>
";
    }

    public function getTemplateName()
    {
        return "contact/contact.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  78 => 21,  68 => 14,  61 => 10,  53 => 5,  49 => 4,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "contact/contact.html.twig", "/home/yanis/server/symfony/projet0/templates/contact/contact.html.twig");
    }
}

<?php

/* SyliusAdminBundle:Zone:_form.html.twig */
class __TwigTemplate_bf3dce409bfe9887812e423c9ec272cde95f0ca8a730839194e89400c7eba64a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc0542ee37dc315705ec96e9c9706e94ec31605526cc663497133b44e2c92f0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc0542ee37dc315705ec96e9c9706e94ec31605526cc663497133b44e2c92f0e->enter($__internal_cc0542ee37dc315705ec96e9c9706e94ec31605526cc663497133b44e2c92f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Zone:_form.html.twig"));

        $__internal_a7053f2c6c382f7ee1ff1dd5b05f10b40b5c52d56d906a1ff2806118a5c93632 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7053f2c6c382f7ee1ff1dd5b05f10b40b5c52d56d906a1ff2806118a5c93632->enter($__internal_a7053f2c6c382f7ee1ff1dd5b05f10b40b5c52d56d906a1ff2806118a5c93632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Zone:_form.html.twig"));

        // line 1
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
<div class=\"ui segment\">
    <div class=\"two fields\">
        ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), 'row');
        echo "
        ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "code", array()), 'row');
        echo "
    </div>
    <div class=\"two fields\">
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'row');
        echo "
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "scope", array()), 'row');
        echo "
    </div>
</div>
<div class=\"ui segment\">
    <h4 class=\"ui dividing header\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.members"), "html", null, true);
        echo "</h4>
    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "members", array()), 'row', array("label" => false));
        echo "
</div>
";
        
        $__internal_cc0542ee37dc315705ec96e9c9706e94ec31605526cc663497133b44e2c92f0e->leave($__internal_cc0542ee37dc315705ec96e9c9706e94ec31605526cc663497133b44e2c92f0e_prof);

        
        $__internal_a7053f2c6c382f7ee1ff1dd5b05f10b40b5c52d56d906a1ff2806118a5c93632->leave($__internal_a7053f2c6c382f7ee1ff1dd5b05f10b40b5c52d56d906a1ff2806118a5c93632_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Zone:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 14,  52 => 13,  45 => 9,  41 => 8,  35 => 5,  31 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_errors(form) }}
<div class=\"ui segment\">
    <div class=\"two fields\">
        {{ form_row(form.type) }}
        {{ form_row(form.code) }}
    </div>
    <div class=\"two fields\">
        {{ form_row(form.name) }}
        {{ form_row(form.scope) }}
    </div>
</div>
<div class=\"ui segment\">
    <h4 class=\"ui dividing header\">{{ 'sylius.ui.members'|trans }}</h4>
    {{ form_row(form.members, {'label': false}) }}
</div>
", "SyliusAdminBundle:Zone:_form.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Zone/_form.html.twig");
    }
}

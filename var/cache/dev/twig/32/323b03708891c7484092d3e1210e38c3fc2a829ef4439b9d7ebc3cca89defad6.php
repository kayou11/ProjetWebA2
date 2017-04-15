<?php

/* SyliusUiBundle:Grid/Field:state.html.twig */
class __TwigTemplate_a5b2a4e4d2d80cbc538db5899a3d863872cf3295fa24eeb59ab23e031d16b409 extends Twig_Template
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
        $__internal_9f83599016fe744d0f7065017bf7ca82dc59183bc567e53e770d7b1612c59acd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f83599016fe744d0f7065017bf7ca82dc59183bc567e53e770d7b1612c59acd->enter($__internal_9f83599016fe744d0f7065017bf7ca82dc59183bc567e53e770d7b1612c59acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Field:state.html.twig"));

        $__internal_262f51a49c7904cd02ae8d10ac6a5f826dbe9fa0e5213c3bd663c90c0db63001 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_262f51a49c7904cd02ae8d10ac6a5f826dbe9fa0e5213c3bd663c90c0db63001->enter($__internal_262f51a49c7904cd02ae8d10ac6a5f826dbe9fa0e5213c3bd663c90c0db63001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Field:state.html.twig"));

        // line 1
        $context["value"] = ("sylius.ui." . ($context["data"] ?? $this->getContext($context, "data")));
        // line 2
        echo "
";
        // line 3
        if ($this->getAttribute($this->getAttribute(($context["options"] ?? null), "vars", array(), "any", false, true), "labels", array(), "any", true, true)) {
            // line 4
            echo "    ";
            $this->loadTemplate(array(0 => ((($this->getAttribute($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "vars", array()), "labels", array()) . "/") . ($context["data"] ?? $this->getContext($context, "data"))) . ".html.twig"), 1 => "@SyliusUi/Label/_default.html.twig"), "SyliusUiBundle:Grid/Field:state.html.twig", 4)->display(array_merge($context, array("value" => ($context["value"] ?? $this->getContext($context, "value")))));
        } else {
            // line 6
            echo "    ";
            $this->loadTemplate("@SyliusUi/Label/_default.html.twig", "SyliusUiBundle:Grid/Field:state.html.twig", 6)->display(array_merge($context, array("value" => ($context["value"] ?? $this->getContext($context, "value")))));
        }
        
        $__internal_9f83599016fe744d0f7065017bf7ca82dc59183bc567e53e770d7b1612c59acd->leave($__internal_9f83599016fe744d0f7065017bf7ca82dc59183bc567e53e770d7b1612c59acd_prof);

        
        $__internal_262f51a49c7904cd02ae8d10ac6a5f826dbe9fa0e5213c3bd663c90c0db63001->leave($__internal_262f51a49c7904cd02ae8d10ac6a5f826dbe9fa0e5213c3bd663c90c0db63001_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Grid/Field:state.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  32 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set value = 'sylius.ui.' ~ data %}

{% if options.vars.labels is defined %}
    {% include [(options.vars.labels ~ '/' ~ data ~ '.html.twig'), '@SyliusUi/Label/_default.html.twig'] with {'value': value} %}
{% else %}
    {% include '@SyliusUi/Label/_default.html.twig' with {'value': value} %}
{% endif %}
", "SyliusUiBundle:Grid/Field:state.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Grid/Field/state.html.twig");
    }
}

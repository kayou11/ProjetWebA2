<?php

/* SyliusUiBundle:Grid/Field:label.html.twig */
class __TwigTemplate_4ec5d9865d84c01f636b4d4d68cc9931023482aec8749259d27fabded1fa9e89 extends Twig_Template
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
        $__internal_02f67db767554171e4ef547ef56cf2da9d2e599d6f8a9538f013eb53bf9bfefc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02f67db767554171e4ef547ef56cf2da9d2e599d6f8a9538f013eb53bf9bfefc->enter($__internal_02f67db767554171e4ef547ef56cf2da9d2e599d6f8a9538f013eb53bf9bfefc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Field:label.html.twig"));

        $__internal_2168d1c47a2c7d1d84e49a2fe9a4e7083b627781a959dbf5f07b36b9efe44024 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2168d1c47a2c7d1d84e49a2fe9a4e7083b627781a959dbf5f07b36b9efe44024->enter($__internal_2168d1c47a2c7d1d84e49a2fe9a4e7083b627781a959dbf5f07b36b9efe44024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Field:label.html.twig"));

        // line 1
        $context["value"] = ("sylius.ui." . ($context["data"] ?? $this->getContext($context, "data")));
        // line 2
        echo "
";
        // line 3
        if ($this->getAttribute($this->getAttribute(($context["options"] ?? null), "vars", array(), "any", false, true), "labels", array(), "any", true, true)) {
            // line 4
            echo "    ";
            $this->loadTemplate(array(0 => ((($this->getAttribute($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "vars", array()), "labels", array()) . "/") . ($context["data"] ?? $this->getContext($context, "data"))) . ".html.twig"), 1 => "@SyliusUi/Label/_default.html.twig"), "SyliusUiBundle:Grid/Field:label.html.twig", 4)->display(array_merge($context, array("value" => ($context["value"] ?? $this->getContext($context, "value")))));
        } else {
            // line 6
            echo "    ";
            $this->loadTemplate("@SyliusUi/Label/_default.html.twig", "SyliusUiBundle:Grid/Field:label.html.twig", 6)->display(array_merge($context, array("value" => ($context["value"] ?? $this->getContext($context, "value")))));
        }
        
        $__internal_02f67db767554171e4ef547ef56cf2da9d2e599d6f8a9538f013eb53bf9bfefc->leave($__internal_02f67db767554171e4ef547ef56cf2da9d2e599d6f8a9538f013eb53bf9bfefc_prof);

        
        $__internal_2168d1c47a2c7d1d84e49a2fe9a4e7083b627781a959dbf5f07b36b9efe44024->leave($__internal_2168d1c47a2c7d1d84e49a2fe9a4e7083b627781a959dbf5f07b36b9efe44024_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Grid/Field:label.html.twig";
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
", "SyliusUiBundle:Grid/Field:label.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Grid/Field/label.html.twig");
    }
}

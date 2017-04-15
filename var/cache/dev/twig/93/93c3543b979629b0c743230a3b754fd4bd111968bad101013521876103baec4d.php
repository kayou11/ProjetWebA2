<?php

/* SyliusResourceBundle:Twig:sorting.html.twig */
class __TwigTemplate_e10e80379738630940787506160078eefd483cff4f370ed8bd164bbb453601b5 extends Twig_Template
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
        $__internal_eebc5cd351385f80aca1714ce8e4bf0d4ab92be1d02e47d3a545efc8f5884e5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eebc5cd351385f80aca1714ce8e4bf0d4ab92be1d02e47d3a545efc8f5884e5a->enter($__internal_eebc5cd351385f80aca1714ce8e4bf0d4ab92be1d02e47d3a545efc8f5884e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusResourceBundle:Twig:sorting.html.twig"));

        $__internal_a9da1b2e0989fbd408e43994fe7a56c658eee240f28ac212c74fddc962a5a19b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9da1b2e0989fbd408e43994fe7a56c658eee240f28ac212c74fddc962a5a19b->enter($__internal_a9da1b2e0989fbd408e43994fe7a56c658eee240f28ac212c74fddc962a5a19b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusResourceBundle:Twig:sorting.html.twig"));

        // line 1
        echo "<a href=\"";
        echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
        echo "\">
    ";
        // line 2
        echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
        echo "
    ";
        // line 3
        if (($context["icon"] ?? $this->getContext($context, "icon"))) {
            // line 4
            if ((($context["currentOrder"] ?? $this->getContext($context, "currentOrder")) == "desc")) {
                // line 5
                echo "<i class=\"glyphicon glyphicon-chevron-down\"></i>";
            } else {
                // line 7
                echo "<i class=\"glyphicon glyphicon-chevron-up\"></i>";
            }
        }
        // line 10
        echo "</a>
";
        
        $__internal_eebc5cd351385f80aca1714ce8e4bf0d4ab92be1d02e47d3a545efc8f5884e5a->leave($__internal_eebc5cd351385f80aca1714ce8e4bf0d4ab92be1d02e47d3a545efc8f5884e5a_prof);

        
        $__internal_a9da1b2e0989fbd408e43994fe7a56c658eee240f28ac212c74fddc962a5a19b->leave($__internal_a9da1b2e0989fbd408e43994fe7a56c658eee240f28ac212c74fddc962a5a19b_prof);

    }

    public function getTemplateName()
    {
        return "SyliusResourceBundle:Twig:sorting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 10,  41 => 7,  38 => 5,  36 => 4,  34 => 3,  30 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a href=\"{{ url }}\">
    {{ label }}
    {% if icon -%}
        {%- if currentOrder == 'desc' -%}
            <i class=\"glyphicon glyphicon-chevron-down\"></i>
        {%- else -%}
            <i class=\"glyphicon glyphicon-chevron-up\"></i>
        {%- endif %}
    {%- endif %}
</a>
", "SyliusResourceBundle:Twig:sorting.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ResourceBundle/Resources/views/Twig/sorting.html.twig");
    }
}

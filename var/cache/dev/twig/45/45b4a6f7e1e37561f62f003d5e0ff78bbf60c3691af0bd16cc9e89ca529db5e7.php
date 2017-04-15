<?php

/* SyliusAdminBundle:ProductVariant/Grid/Field:name.html.twig */
class __TwigTemplate_1d6e859fc3910a79908b22c80ecfe4d9d287ecd66674de8a13f33880e04c2cfd extends Twig_Template
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
        $__internal_64b682412ddd128326a31b4544af82c55f17c6388f0e3e4e454dbc680485325e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64b682412ddd128326a31b4544af82c55f17c6388f0e3e4e454dbc680485325e->enter($__internal_64b682412ddd128326a31b4544af82c55f17c6388f0e3e4e454dbc680485325e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant/Grid/Field:name.html.twig"));

        $__internal_7026c4e1b035318f095b43fb125edbde9608996be6faf8b6e5c13e3782fa2ede = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7026c4e1b035318f095b43fb125edbde9608996be6faf8b6e5c13e3782fa2ede->enter($__internal_7026c4e1b035318f095b43fb125edbde9608996be6faf8b6e5c13e3782fa2ede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant/Grid/Field:name.html.twig"));

        // line 1
        echo "<span class=\"ui small header\">
    ";
        // line 2
        $context["product"] = $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "product", array());
        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, (((null === $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "name", array()))) ? ($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "name", array())) : ($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "name", array()))), "html", null, true);
        echo "
</span>
";
        // line 5
        if ((twig_length_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "optionValues", array())) > 0)) {
            // line 6
            echo "    <br>
    <div class=\"ui horizontal divided list\">
        ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "optionValues", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["optionValue"]) {
                // line 9
                echo "            <div class=\"item\">
                ";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($context["optionValue"], "value", array()), "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['optionValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "    </div>
";
        }
        
        $__internal_64b682412ddd128326a31b4544af82c55f17c6388f0e3e4e454dbc680485325e->leave($__internal_64b682412ddd128326a31b4544af82c55f17c6388f0e3e4e454dbc680485325e_prof);

        
        $__internal_7026c4e1b035318f095b43fb125edbde9608996be6faf8b6e5c13e3782fa2ede->leave($__internal_7026c4e1b035318f095b43fb125edbde9608996be6faf8b6e5c13e3782fa2ede_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductVariant/Grid/Field:name.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 13,  49 => 10,  46 => 9,  42 => 8,  38 => 6,  36 => 5,  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<span class=\"ui small header\">
    {% set product = data.product %}
    {{ data.name is null ? product.name : data.name }}
</span>
{% if data.optionValues|length > 0 %}
    <br>
    <div class=\"ui horizontal divided list\">
        {% for optionValue in data.optionValues %}
            <div class=\"item\">
                {{ optionValue.value }}
            </div>
        {% endfor %}
    </div>
{% endif %}
", "SyliusAdminBundle:ProductVariant/Grid/Field:name.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/ProductVariant/Grid/Field/name.html.twig");
    }
}

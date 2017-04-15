<?php

/* SyliusAttributeBundle:Types:select.html.twig */
class __TwigTemplate_ad37a248370f98a5047f65e4fd99dccbbd9aaffbc127d0b9879af44dc96ee6eb extends Twig_Template
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
        $__internal_c9930012e00553b8982aa14e6aeabdb2bfdb7e7350942c11da1a6889a59102c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9930012e00553b8982aa14e6aeabdb2bfdb7e7350942c11da1a6889a59102c5->enter($__internal_c9930012e00553b8982aa14e6aeabdb2bfdb7e7350942c11da1a6889a59102c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAttributeBundle:Types:select.html.twig"));

        $__internal_b6fe9cf29a037cd0831f611b7997a4b7e7656dcfc47dc97bb0985f26c25c1b9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6fe9cf29a037cd0831f611b7997a4b7e7656dcfc47dc97bb0985f26c25c1b9d->enter($__internal_b6fe9cf29a037cd0831f611b7997a4b7e7656dcfc47dc97bb0985f26c25c1b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAttributeBundle:Types:select.html.twig"));

        // line 1
        if ( !(null === $this->getAttribute(($context["attribute"] ?? $this->getContext($context, "attribute")), "value", array()))) {
            // line 2
            echo "    ";
            $context["values"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["attribute"] ?? $this->getContext($context, "attribute")), "attribute", array()), "configuration", array()), "choices", array());
            // line 3
            echo "    ";
            if (twig_test_iterable($this->getAttribute(($context["attribute"] ?? $this->getContext($context, "attribute")), "value", array()))) {
                // line 4
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["attribute"] ?? $this->getContext($context, "attribute")), "value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["values"] ?? $this->getContext($context, "values")), $context["value"], array(), "array"), "html", null, true);
                    echo " ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 5
                echo "    ";
            } else {
                // line 6
                echo "        ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["values"] ?? $this->getContext($context, "values")), $this->getAttribute(($context["attribute"] ?? $this->getContext($context, "attribute")), "value", array()), array(), "array"), "html", null, true);
                echo "
    ";
            }
        }
        
        $__internal_c9930012e00553b8982aa14e6aeabdb2bfdb7e7350942c11da1a6889a59102c5->leave($__internal_c9930012e00553b8982aa14e6aeabdb2bfdb7e7350942c11da1a6889a59102c5_prof);

        
        $__internal_b6fe9cf29a037cd0831f611b7997a4b7e7656dcfc47dc97bb0985f26c25c1b9d->leave($__internal_b6fe9cf29a037cd0831f611b7997a4b7e7656dcfc47dc97bb0985f26c25c1b9d_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAttributeBundle:Types:select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 6,  44 => 5,  33 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if attribute.value is not null %}
    {% set values = attribute.attribute.configuration.choices %}
    {% if attribute.value is iterable %}
        {% for value in attribute.value %}{{ values[value] }} {% endfor %}
    {% else %}
        {{ values[attribute.value] }}
    {% endif %}
{% endif %}
", "SyliusAttributeBundle:Types:select.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/views/Types/select.html.twig");
    }
}

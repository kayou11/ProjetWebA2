<?php

/* SyliusAttributeBundle:Types:checkbox.html.twig */
class __TwigTemplate_186e614aee0e5b6e5de80c2270cc2ec43ab3cf0b8dee1cd70aa9841101c76b47 extends Twig_Template
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
        $__internal_8cf0e701350e0de1c0fbbc459c5a84ff3514a951aa50b6fd1b453df87f5bce04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cf0e701350e0de1c0fbbc459c5a84ff3514a951aa50b6fd1b453df87f5bce04->enter($__internal_8cf0e701350e0de1c0fbbc459c5a84ff3514a951aa50b6fd1b453df87f5bce04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAttributeBundle:Types:checkbox.html.twig"));

        $__internal_338ff4d50322be879732056252e6dc48423da2609799425314b019164e72fc62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_338ff4d50322be879732056252e6dc48423da2609799425314b019164e72fc62->enter($__internal_338ff4d50322be879732056252e6dc48423da2609799425314b019164e72fc62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAttributeBundle:Types:checkbox.html.twig"));

        // line 1
        if ($this->getAttribute(($context["attribute"] ?? $this->getContext($context, "attribute")), "value", array())) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.yes_label"), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.no_label"), "html", null, true);
            echo "
";
        }
        
        $__internal_8cf0e701350e0de1c0fbbc459c5a84ff3514a951aa50b6fd1b453df87f5bce04->leave($__internal_8cf0e701350e0de1c0fbbc459c5a84ff3514a951aa50b6fd1b453df87f5bce04_prof);

        
        $__internal_338ff4d50322be879732056252e6dc48423da2609799425314b019164e72fc62->leave($__internal_338ff4d50322be879732056252e6dc48423da2609799425314b019164e72fc62_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAttributeBundle:Types:checkbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if attribute.value %}
    {{ 'sylius.ui.yes_label'|trans }}
{% else %}
    {{ 'sylius.ui.no_label'|trans }}
{% endif %}
", "SyliusAttributeBundle:Types:checkbox.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/views/Types/checkbox.html.twig");
    }
}

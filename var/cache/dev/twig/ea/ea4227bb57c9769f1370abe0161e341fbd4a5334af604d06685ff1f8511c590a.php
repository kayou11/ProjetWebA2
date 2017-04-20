<?php

/* SonataBlockBundle:Block:block_core_action.html.twig */
class __TwigTemplate_650d600fb5874cd6c4299cb62f43702ac5ab25dcf012f01bd7ec32c378c8aac1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_block"]) || array_key_exists("sonata_block", $context) ? $context["sonata_block"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_block" does not exist.', 12, $this->getSourceContext()); })()), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a8415aee3f6a324a758ca232dfeb16e4e86dafa0ad1bbfd778cab4375f07e56f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8415aee3f6a324a758ca232dfeb16e4e86dafa0ad1bbfd778cab4375f07e56f->enter($__internal_a8415aee3f6a324a758ca232dfeb16e4e86dafa0ad1bbfd778cab4375f07e56f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $__internal_7435530c6abe6e87c073c7b485f0ee21ff93b65d5b543c0e1ea9e493f5c2f993 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7435530c6abe6e87c073c7b485f0ee21ff93b65d5b543c0e1ea9e493f5c2f993->enter($__internal_7435530c6abe6e87c073c7b485f0ee21ff93b65d5b543c0e1ea9e493f5c2f993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8415aee3f6a324a758ca232dfeb16e4e86dafa0ad1bbfd778cab4375f07e56f->leave($__internal_a8415aee3f6a324a758ca232dfeb16e4e86dafa0ad1bbfd778cab4375f07e56f_prof);

        
        $__internal_7435530c6abe6e87c073c7b485f0ee21ff93b65d5b543c0e1ea9e493f5c2f993->leave($__internal_7435530c6abe6e87c073c7b485f0ee21ff93b65d5b543c0e1ea9e493f5c2f993_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_22203bf06b7096b945f9ac3ae600d300e43423ed4d9bb87a005c2cc2f55c065b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22203bf06b7096b945f9ac3ae600d300e43423ed4d9bb87a005c2cc2f55c065b->enter($__internal_22203bf06b7096b945f9ac3ae600d300e43423ed4d9bb87a005c2cc2f55c065b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_6828ae03e82dd854032eb1c18118a31e46bd2166f6816dba2e21a294eb819b47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6828ae03e82dd854032eb1c18118a31e46bd2166f6816dba2e21a294eb819b47->enter($__internal_6828ae03e82dd854032eb1c18118a31e46bd2166f6816dba2e21a294eb819b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new Twig_Error_Runtime('Variable "content" does not exist.', 15, $this->getSourceContext()); })());
        echo "
";
        
        $__internal_6828ae03e82dd854032eb1c18118a31e46bd2166f6816dba2e21a294eb819b47->leave($__internal_6828ae03e82dd854032eb1c18118a31e46bd2166f6816dba2e21a294eb819b47_prof);

        
        $__internal_22203bf06b7096b945f9ac3ae600d300e43423ed4d9bb87a005c2cc2f55c065b->leave($__internal_22203bf06b7096b945f9ac3ae600d300e43423ed4d9bb87a005c2cc2f55c065b_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 15,  39 => 14,  18 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends sonata_block.templates.block_base %}

{% block block %}
    {{ content|raw }}
{% endblock %}
", "SonataBlockBundle:Block:block_core_action.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/block-bundle/Resources/views/Block/block_core_action.html.twig");
    }
}

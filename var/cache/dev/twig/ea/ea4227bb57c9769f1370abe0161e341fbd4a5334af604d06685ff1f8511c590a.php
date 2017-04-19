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
        $__internal_1eaaacdf4bd0659cf5043372423dedc57ae13ea3c8be414b1adecf2c6cd776a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1eaaacdf4bd0659cf5043372423dedc57ae13ea3c8be414b1adecf2c6cd776a4->enter($__internal_1eaaacdf4bd0659cf5043372423dedc57ae13ea3c8be414b1adecf2c6cd776a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $__internal_6e9eb22a34a9730fe20b8f95496a66b8495c88ee200e344b84f02b2eb5ce05d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e9eb22a34a9730fe20b8f95496a66b8495c88ee200e344b84f02b2eb5ce05d0->enter($__internal_6e9eb22a34a9730fe20b8f95496a66b8495c88ee200e344b84f02b2eb5ce05d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1eaaacdf4bd0659cf5043372423dedc57ae13ea3c8be414b1adecf2c6cd776a4->leave($__internal_1eaaacdf4bd0659cf5043372423dedc57ae13ea3c8be414b1adecf2c6cd776a4_prof);

        
        $__internal_6e9eb22a34a9730fe20b8f95496a66b8495c88ee200e344b84f02b2eb5ce05d0->leave($__internal_6e9eb22a34a9730fe20b8f95496a66b8495c88ee200e344b84f02b2eb5ce05d0_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_de7308f9d0740499a2d80442b67dc16c8f531676af1de84b94e5c2cd36d39006 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de7308f9d0740499a2d80442b67dc16c8f531676af1de84b94e5c2cd36d39006->enter($__internal_de7308f9d0740499a2d80442b67dc16c8f531676af1de84b94e5c2cd36d39006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_fd90597ebbea08b2a9ee9cbb396e49cb824d47e0a016d461d9a4bdf9f0df9c48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd90597ebbea08b2a9ee9cbb396e49cb824d47e0a016d461d9a4bdf9f0df9c48->enter($__internal_fd90597ebbea08b2a9ee9cbb396e49cb824d47e0a016d461d9a4bdf9f0df9c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new Twig_Error_Runtime('Variable "content" does not exist.', 15, $this->getSourceContext()); })());
        echo "
";
        
        $__internal_fd90597ebbea08b2a9ee9cbb396e49cb824d47e0a016d461d9a4bdf9f0df9c48->leave($__internal_fd90597ebbea08b2a9ee9cbb396e49cb824d47e0a016d461d9a4bdf9f0df9c48_prof);

        
        $__internal_de7308f9d0740499a2d80442b67dc16c8f531676af1de84b94e5c2cd36d39006->leave($__internal_de7308f9d0740499a2d80442b67dc16c8f531676af1de84b94e5c2cd36d39006_prof);

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

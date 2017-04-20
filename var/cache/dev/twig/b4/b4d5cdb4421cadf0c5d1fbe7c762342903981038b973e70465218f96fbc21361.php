<?php

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_0b807cb1637baf2dbbf4b03f72a97436ac80fb96e964f532ccb75b550aa86a91 extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_block"]) || array_key_exists("sonata_block", $context) ? $context["sonata_block"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_block" does not exist.', 12, $this->getSourceContext()); })()), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b22e1498017b7576286bf824e7c382a6d48fbabe055c992174341adcfef11824 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b22e1498017b7576286bf824e7c382a6d48fbabe055c992174341adcfef11824->enter($__internal_b22e1498017b7576286bf824e7c382a6d48fbabe055c992174341adcfef11824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $__internal_dabcb0ebf2b5ac08c7e1af83d1e9b3078ae6208292d95f07ab1861be5ff6e37f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dabcb0ebf2b5ac08c7e1af83d1e9b3078ae6208292d95f07ab1861be5ff6e37f->enter($__internal_dabcb0ebf2b5ac08c7e1af83d1e9b3078ae6208292d95f07ab1861be5ff6e37f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b22e1498017b7576286bf824e7c382a6d48fbabe055c992174341adcfef11824->leave($__internal_b22e1498017b7576286bf824e7c382a6d48fbabe055c992174341adcfef11824_prof);

        
        $__internal_dabcb0ebf2b5ac08c7e1af83d1e9b3078ae6208292d95f07ab1861be5ff6e37f->leave($__internal_dabcb0ebf2b5ac08c7e1af83d1e9b3078ae6208292d95f07ab1861be5ff6e37f_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_941cae2ff9e0c22d6f850e40a013c435bdc34c53f421cb43b644866a7b0c0c34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_941cae2ff9e0c22d6f850e40a013c435bdc34c53f421cb43b644866a7b0c0c34->enter($__internal_941cae2ff9e0c22d6f850e40a013c435bdc34c53f421cb43b644866a7b0c0c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_4725a5c941b837ee416e81a38ccb73b7e0cad406461eed8ec9f525099fa3055e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4725a5c941b837ee416e81a38ccb73b7e0cad406461eed8ec9f525099fa3055e->enter($__internal_4725a5c941b837ee416e81a38ccb73b7e0cad406461eed8ec9f525099fa3055e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new Twig_Error_Runtime('Variable "settings" does not exist.', 15, $this->getSourceContext()); })()), "content", array());
        echo "
";
        
        $__internal_4725a5c941b837ee416e81a38ccb73b7e0cad406461eed8ec9f525099fa3055e->leave($__internal_4725a5c941b837ee416e81a38ccb73b7e0cad406461eed8ec9f525099fa3055e_prof);

        
        $__internal_941cae2ff9e0c22d6f850e40a013c435bdc34c53f421cb43b644866a7b0c0c34->leave($__internal_941cae2ff9e0c22d6f850e40a013c435bdc34c53f421cb43b644866a7b0c0c34_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_text.html.twig";
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
    {{ settings.content|raw }}
{% endblock %}
", "SonataBlockBundle:Block:block_core_text.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/block-bundle/Resources/views/Block/block_core_text.html.twig");
    }
}

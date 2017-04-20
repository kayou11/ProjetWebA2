<?php

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_3b88c478fe27462f568664fcdab0ae704de4a2bfa9f07cc515d6158f98ccc178 extends Twig_Template
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
        $__internal_6e08a38f63e9b2f9e1a4b57138f030d6906477794b0906a13be8bdf188272616 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e08a38f63e9b2f9e1a4b57138f030d6906477794b0906a13be8bdf188272616->enter($__internal_6e08a38f63e9b2f9e1a4b57138f030d6906477794b0906a13be8bdf188272616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $__internal_454bfed4663aac0d31c695ac33009b136d04674441e57084aba36846d8ec37d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_454bfed4663aac0d31c695ac33009b136d04674441e57084aba36846d8ec37d4->enter($__internal_454bfed4663aac0d31c695ac33009b136d04674441e57084aba36846d8ec37d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e08a38f63e9b2f9e1a4b57138f030d6906477794b0906a13be8bdf188272616->leave($__internal_6e08a38f63e9b2f9e1a4b57138f030d6906477794b0906a13be8bdf188272616_prof);

        
        $__internal_454bfed4663aac0d31c695ac33009b136d04674441e57084aba36846d8ec37d4->leave($__internal_454bfed4663aac0d31c695ac33009b136d04674441e57084aba36846d8ec37d4_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_2e3186b7f282d81779229668758c114277d1e53e90a142f5f304aee61d45a341 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e3186b7f282d81779229668758c114277d1e53e90a142f5f304aee61d45a341->enter($__internal_2e3186b7f282d81779229668758c114277d1e53e90a142f5f304aee61d45a341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_986cd36c47c56737a6015e29130d8516b1746df88ca6cd8554be7b8326b955a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_986cd36c47c56737a6015e29130d8516b1746df88ca6cd8554be7b8326b955a4->enter($__internal_986cd36c47c56737a6015e29130d8516b1746df88ca6cd8554be7b8326b955a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new Twig_Error_Runtime('Variable "settings" does not exist.', 15, $this->getSourceContext()); })()), "content", array());
        echo "
";
        
        $__internal_986cd36c47c56737a6015e29130d8516b1746df88ca6cd8554be7b8326b955a4->leave($__internal_986cd36c47c56737a6015e29130d8516b1746df88ca6cd8554be7b8326b955a4_prof);

        
        $__internal_2e3186b7f282d81779229668758c114277d1e53e90a142f5f304aee61d45a341->leave($__internal_2e3186b7f282d81779229668758c114277d1e53e90a142f5f304aee61d45a341_prof);

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

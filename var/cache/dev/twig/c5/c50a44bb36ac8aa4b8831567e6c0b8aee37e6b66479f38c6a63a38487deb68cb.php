<?php

/* SonataBlockBundle:Block:block_exception.html.twig */
class __TwigTemplate_8b42a16b9a9346c003eeb7582587847903014ee8b4633b1a544cfbb41e06a9f7 extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_block"]) || array_key_exists("sonata_block", $context) ? $context["sonata_block"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_block" does not exist.', 12, $this->getSourceContext()); })()), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_exception.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_749b2c96459e43e5e26f77cfa7e30dfbe54238fb3d523373c8d7c45c65356974 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_749b2c96459e43e5e26f77cfa7e30dfbe54238fb3d523373c8d7c45c65356974->enter($__internal_749b2c96459e43e5e26f77cfa7e30dfbe54238fb3d523373c8d7c45c65356974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception.html.twig"));

        $__internal_801fdf398bbbec1a960d29ffae83056caa4977a10796ad8316f47312c7ead3af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_801fdf398bbbec1a960d29ffae83056caa4977a10796ad8316f47312c7ead3af->enter($__internal_801fdf398bbbec1a960d29ffae83056caa4977a10796ad8316f47312c7ead3af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_749b2c96459e43e5e26f77cfa7e30dfbe54238fb3d523373c8d7c45c65356974->leave($__internal_749b2c96459e43e5e26f77cfa7e30dfbe54238fb3d523373c8d7c45c65356974_prof);

        
        $__internal_801fdf398bbbec1a960d29ffae83056caa4977a10796ad8316f47312c7ead3af->leave($__internal_801fdf398bbbec1a960d29ffae83056caa4977a10796ad8316f47312c7ead3af_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_451b99f8f6211719ecb40cc669b5e7a13b77caec269afa631a4093d75e048674 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_451b99f8f6211719ecb40cc669b5e7a13b77caec269afa631a4093d75e048674->enter($__internal_451b99f8f6211719ecb40cc669b5e7a13b77caec269afa631a4093d75e048674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_2d5bdb26bd2e9ab3f565418bacbaa660c953a253e115a851aba4dcbcf403253d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d5bdb26bd2e9ab3f565418bacbaa660c953a253e115a851aba4dcbcf403253d->enter($__internal_2d5bdb26bd2e9ab3f565418bacbaa660c953a253e115a851aba4dcbcf403253d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"cms-block-exception\">
        <h2>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new Twig_Error_Runtime('Variable "block" does not exist.', 16, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo "</h2>
        <h3>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 17, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo "</h3>
    </div>
";
        
        $__internal_2d5bdb26bd2e9ab3f565418bacbaa660c953a253e115a851aba4dcbcf403253d->leave($__internal_2d5bdb26bd2e9ab3f565418bacbaa660c953a253e115a851aba4dcbcf403253d_prof);

        
        $__internal_451b99f8f6211719ecb40cc669b5e7a13b77caec269afa631a4093d75e048674->leave($__internal_451b99f8f6211719ecb40cc669b5e7a13b77caec269afa631a4093d75e048674_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 17,  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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
    <div class=\"cms-block-exception\">
        <h2>{{ block.name }}</h2>
        <h3>{{ exception.message }}</h3>
    </div>
{% endblock %}
", "SonataBlockBundle:Block:block_exception.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/block-bundle/Resources/views/Block/block_exception.html.twig");
    }
}

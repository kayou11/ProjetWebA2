<?php

/* SonataBlockBundle:Block:block_exception_debug.html.twig */
class __TwigTemplate_24dc36ff1b375392cb143afc72c75a07feffaa91b05ae8b8b210a78ec91aa211 extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_block"]) || array_key_exists("sonata_block", $context) ? $context["sonata_block"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_block" does not exist.', 12, $this->getSourceContext()); })()), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_exception_debug.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_659eef9631fcbbce5acc1ddf4d36bf7ba9159dd1af2fe0673fa7debba92e2ee6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_659eef9631fcbbce5acc1ddf4d36bf7ba9159dd1af2fe0673fa7debba92e2ee6->enter($__internal_659eef9631fcbbce5acc1ddf4d36bf7ba9159dd1af2fe0673fa7debba92e2ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception_debug.html.twig"));

        $__internal_667c6d290e8b107542c09b694f87464c33497b1cd44f2ec273f2b322cd3fe0f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_667c6d290e8b107542c09b694f87464c33497b1cd44f2ec273f2b322cd3fe0f0->enter($__internal_667c6d290e8b107542c09b694f87464c33497b1cd44f2ec273f2b322cd3fe0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception_debug.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_659eef9631fcbbce5acc1ddf4d36bf7ba9159dd1af2fe0673fa7debba92e2ee6->leave($__internal_659eef9631fcbbce5acc1ddf4d36bf7ba9159dd1af2fe0673fa7debba92e2ee6_prof);

        
        $__internal_667c6d290e8b107542c09b694f87464c33497b1cd44f2ec273f2b322cd3fe0f0->leave($__internal_667c6d290e8b107542c09b694f87464c33497b1cd44f2ec273f2b322cd3fe0f0_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_c8e0d46cf018a53047490dad909eb9f86024d3c0215721a3cb283f58f207e4e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8e0d46cf018a53047490dad909eb9f86024d3c0215721a3cb283f58f207e4e5->enter($__internal_c8e0d46cf018a53047490dad909eb9f86024d3c0215721a3cb283f58f207e4e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_18a7954edaf2dde77e91727edbbb074b6c80c544172eee10507a52c6161df408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18a7954edaf2dde77e91727edbbb074b6c80c544172eee10507a52c6161df408->enter($__internal_18a7954edaf2dde77e91727edbbb074b6c80c544172eee10507a52c6161df408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"cms-block-exception\" ";
        if ((isset($context["forceStyle"]) || array_key_exists("forceStyle", $context) ? $context["forceStyle"] : (function () { throw new Twig_Error_Runtime('Variable "forceStyle" does not exist.', 15, $this->getSourceContext()); })())) {
            echo "style=\"overflow-y: scroll; min-width: 300px; max-height: 300px;\"";
        }
        echo ">

        ";
        // line 18
        echo "        ";
        if ((isset($context["forceStyle"]) || array_key_exists("forceStyle", $context) ? $context["forceStyle"] : (function () { throw new Twig_Error_Runtime('Variable "forceStyle" does not exist.', 18, $this->getSourceContext()); })())) {
            // line 19
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception_layout.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
            <link href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
        ";
        }
        // line 22
        echo "        ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "SonataBlockBundle:Block:block_exception_debug.html.twig", 22)->display($context);
        // line 23
        echo "    </div>
";
        
        $__internal_18a7954edaf2dde77e91727edbbb074b6c80c544172eee10507a52c6161df408->leave($__internal_18a7954edaf2dde77e91727edbbb074b6c80c544172eee10507a52c6161df408_prof);

        
        $__internal_c8e0d46cf018a53047490dad909eb9f86024d3c0215721a3cb283f58f207e4e5->leave($__internal_c8e0d46cf018a53047490dad909eb9f86024d3c0215721a3cb283f58f207e4e5_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_exception_debug.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 23,  69 => 22,  64 => 20,  59 => 19,  56 => 18,  48 => 15,  39 => 14,  18 => 12,);
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
    <div class=\"cms-block-exception\" {% if forceStyle %}style=\"overflow-y: scroll; min-width: 300px; max-height: 300px;\"{% endif %}>

        {# this is dirty but the alternative would require a new block-optimized exception css #}
        {% if forceStyle %}
            <link href=\"{{ asset('bundles/framework/css/exception_layout.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
            <link href=\"{{ asset('bundles/framework/css/exception.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
        {% endif %}
        {% include 'TwigBundle:Exception:exception.html.twig' %}
    </div>
{% endblock %}
", "SonataBlockBundle:Block:block_exception_debug.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/block-bundle/Resources/views/Block/block_exception_debug.html.twig");
    }
}

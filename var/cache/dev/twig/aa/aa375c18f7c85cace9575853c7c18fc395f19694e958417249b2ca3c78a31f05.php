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
        $__internal_85d516cf79ae0ce7289f004caebbac782e7347df1616694a368f2c495360fde3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85d516cf79ae0ce7289f004caebbac782e7347df1616694a368f2c495360fde3->enter($__internal_85d516cf79ae0ce7289f004caebbac782e7347df1616694a368f2c495360fde3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception_debug.html.twig"));

        $__internal_44e1cd30c02df1da59a4d58b1bcfa511e8af43840db02afe1f0321214ab4382a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44e1cd30c02df1da59a4d58b1bcfa511e8af43840db02afe1f0321214ab4382a->enter($__internal_44e1cd30c02df1da59a4d58b1bcfa511e8af43840db02afe1f0321214ab4382a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception_debug.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85d516cf79ae0ce7289f004caebbac782e7347df1616694a368f2c495360fde3->leave($__internal_85d516cf79ae0ce7289f004caebbac782e7347df1616694a368f2c495360fde3_prof);

        
        $__internal_44e1cd30c02df1da59a4d58b1bcfa511e8af43840db02afe1f0321214ab4382a->leave($__internal_44e1cd30c02df1da59a4d58b1bcfa511e8af43840db02afe1f0321214ab4382a_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_8cb3c555af2fc2bec6a7ea525c0f82f752b2265c31cef2da7a84a50345985f90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cb3c555af2fc2bec6a7ea525c0f82f752b2265c31cef2da7a84a50345985f90->enter($__internal_8cb3c555af2fc2bec6a7ea525c0f82f752b2265c31cef2da7a84a50345985f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_dd226ab223639dc6388ea8db71719a579929d646d50cb5f9e7ccb3788a5423c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd226ab223639dc6388ea8db71719a579929d646d50cb5f9e7ccb3788a5423c1->enter($__internal_dd226ab223639dc6388ea8db71719a579929d646d50cb5f9e7ccb3788a5423c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

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
        
        $__internal_dd226ab223639dc6388ea8db71719a579929d646d50cb5f9e7ccb3788a5423c1->leave($__internal_dd226ab223639dc6388ea8db71719a579929d646d50cb5f9e7ccb3788a5423c1_prof);

        
        $__internal_8cb3c555af2fc2bec6a7ea525c0f82f752b2265c31cef2da7a84a50345985f90->leave($__internal_8cb3c555af2fc2bec6a7ea525c0f82f752b2265c31cef2da7a84a50345985f90_prof);

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

<?php

/* SonataBlockBundle:Block:block_exception_debug.html.twig */
class __TwigTemplate_ea5ea027ad8efca1873a4fe7d0788b8225c03f4852a1842309cefa38398f2926 extends Twig_Template
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
        $__internal_1deda1dba984eced242efb27bd11cd16281ebfb33651d1801c952ed944994d84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1deda1dba984eced242efb27bd11cd16281ebfb33651d1801c952ed944994d84->enter($__internal_1deda1dba984eced242efb27bd11cd16281ebfb33651d1801c952ed944994d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception_debug.html.twig"));

        $__internal_50e05b165d0e2ef37783dc51dd75ab54a88709eb156854f860e1df382bcc8a85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50e05b165d0e2ef37783dc51dd75ab54a88709eb156854f860e1df382bcc8a85->enter($__internal_50e05b165d0e2ef37783dc51dd75ab54a88709eb156854f860e1df382bcc8a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception_debug.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1deda1dba984eced242efb27bd11cd16281ebfb33651d1801c952ed944994d84->leave($__internal_1deda1dba984eced242efb27bd11cd16281ebfb33651d1801c952ed944994d84_prof);

        
        $__internal_50e05b165d0e2ef37783dc51dd75ab54a88709eb156854f860e1df382bcc8a85->leave($__internal_50e05b165d0e2ef37783dc51dd75ab54a88709eb156854f860e1df382bcc8a85_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_3d6b067690f9e32f9214689960050967471e474d0c58e60162c271bd27aeb500 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d6b067690f9e32f9214689960050967471e474d0c58e60162c271bd27aeb500->enter($__internal_3d6b067690f9e32f9214689960050967471e474d0c58e60162c271bd27aeb500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_a51b97208544e5433ec0925b1ac6737ec8e4d8d09d30c86bb46f817e9c9659f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a51b97208544e5433ec0925b1ac6737ec8e4d8d09d30c86bb46f817e9c9659f5->enter($__internal_a51b97208544e5433ec0925b1ac6737ec8e4d8d09d30c86bb46f817e9c9659f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

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
        
        $__internal_a51b97208544e5433ec0925b1ac6737ec8e4d8d09d30c86bb46f817e9c9659f5->leave($__internal_a51b97208544e5433ec0925b1ac6737ec8e4d8d09d30c86bb46f817e9c9659f5_prof);

        
        $__internal_3d6b067690f9e32f9214689960050967471e474d0c58e60162c271bd27aeb500->leave($__internal_3d6b067690f9e32f9214689960050967471e474d0c58e60162c271bd27aeb500_prof);

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

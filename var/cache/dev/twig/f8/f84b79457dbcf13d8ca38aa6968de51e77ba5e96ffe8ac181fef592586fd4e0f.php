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
        $__internal_ea2d3a4d7e9a4573d60819951ab8368a4445e4aee0d18a2e0edcc6faaef95680 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea2d3a4d7e9a4573d60819951ab8368a4445e4aee0d18a2e0edcc6faaef95680->enter($__internal_ea2d3a4d7e9a4573d60819951ab8368a4445e4aee0d18a2e0edcc6faaef95680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception_debug.html.twig"));

        $__internal_95f88bb7bedc21a336e19e70cdfb9169af2904c8487034269b3c5063394251cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95f88bb7bedc21a336e19e70cdfb9169af2904c8487034269b3c5063394251cf->enter($__internal_95f88bb7bedc21a336e19e70cdfb9169af2904c8487034269b3c5063394251cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception_debug.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea2d3a4d7e9a4573d60819951ab8368a4445e4aee0d18a2e0edcc6faaef95680->leave($__internal_ea2d3a4d7e9a4573d60819951ab8368a4445e4aee0d18a2e0edcc6faaef95680_prof);

        
        $__internal_95f88bb7bedc21a336e19e70cdfb9169af2904c8487034269b3c5063394251cf->leave($__internal_95f88bb7bedc21a336e19e70cdfb9169af2904c8487034269b3c5063394251cf_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_8b0d7262e66f3815ed12d619caee3ac9acba21ddf2f1a48777b1ce252adf794f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b0d7262e66f3815ed12d619caee3ac9acba21ddf2f1a48777b1ce252adf794f->enter($__internal_8b0d7262e66f3815ed12d619caee3ac9acba21ddf2f1a48777b1ce252adf794f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_31a0d6a4d12c8ce51fc3da525870a720812c2b5cf5271d32e5ebb510ec358b8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31a0d6a4d12c8ce51fc3da525870a720812c2b5cf5271d32e5ebb510ec358b8b->enter($__internal_31a0d6a4d12c8ce51fc3da525870a720812c2b5cf5271d32e5ebb510ec358b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

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
        
        $__internal_31a0d6a4d12c8ce51fc3da525870a720812c2b5cf5271d32e5ebb510ec358b8b->leave($__internal_31a0d6a4d12c8ce51fc3da525870a720812c2b5cf5271d32e5ebb510ec358b8b_prof);

        
        $__internal_8b0d7262e66f3815ed12d619caee3ac9acba21ddf2f1a48777b1ce252adf794f->leave($__internal_8b0d7262e66f3815ed12d619caee3ac9acba21ddf2f1a48777b1ce252adf794f_prof);

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

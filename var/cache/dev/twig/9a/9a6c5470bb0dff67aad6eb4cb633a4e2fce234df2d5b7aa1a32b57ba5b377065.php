<?php

/* SonataBlockBundle:Block:block_exception_debug.html.twig */
class __TwigTemplate_72df60688e5d1d91df35cb24868448b1070ade14f0a172e4d2456a9dd063674b extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_exception_debug.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62377cefb87f450e8de177fce0e4badddfbd9bbc92b512f6e57126981779c027 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62377cefb87f450e8de177fce0e4badddfbd9bbc92b512f6e57126981779c027->enter($__internal_62377cefb87f450e8de177fce0e4badddfbd9bbc92b512f6e57126981779c027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception_debug.html.twig"));

        $__internal_655fa6ca190f4fec534eb7fc91f57429d54923502e74b23c2af53d6200af3db3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_655fa6ca190f4fec534eb7fc91f57429d54923502e74b23c2af53d6200af3db3->enter($__internal_655fa6ca190f4fec534eb7fc91f57429d54923502e74b23c2af53d6200af3db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception_debug.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62377cefb87f450e8de177fce0e4badddfbd9bbc92b512f6e57126981779c027->leave($__internal_62377cefb87f450e8de177fce0e4badddfbd9bbc92b512f6e57126981779c027_prof);

        
        $__internal_655fa6ca190f4fec534eb7fc91f57429d54923502e74b23c2af53d6200af3db3->leave($__internal_655fa6ca190f4fec534eb7fc91f57429d54923502e74b23c2af53d6200af3db3_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_90bc48ec3e789e0163bede3ba6c98e67cff22e981978bc240e40d6c27b0889d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90bc48ec3e789e0163bede3ba6c98e67cff22e981978bc240e40d6c27b0889d1->enter($__internal_90bc48ec3e789e0163bede3ba6c98e67cff22e981978bc240e40d6c27b0889d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_57926a9fffa7af14bd2c51c02f37c59c5e7b9769a05635ba57e38e80b14d0af0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57926a9fffa7af14bd2c51c02f37c59c5e7b9769a05635ba57e38e80b14d0af0->enter($__internal_57926a9fffa7af14bd2c51c02f37c59c5e7b9769a05635ba57e38e80b14d0af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"cms-block-exception\" ";
        if (($context["forceStyle"] ?? $this->getContext($context, "forceStyle"))) {
            echo "style=\"overflow-y: scroll; min-width: 300px; max-height: 300px;\"";
        }
        echo ">

        ";
        // line 18
        echo "        ";
        if (($context["forceStyle"] ?? $this->getContext($context, "forceStyle"))) {
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
        
        $__internal_57926a9fffa7af14bd2c51c02f37c59c5e7b9769a05635ba57e38e80b14d0af0->leave($__internal_57926a9fffa7af14bd2c51c02f37c59c5e7b9769a05635ba57e38e80b14d0af0_prof);

        
        $__internal_90bc48ec3e789e0163bede3ba6c98e67cff22e981978bc240e40d6c27b0889d1->leave($__internal_90bc48ec3e789e0163bede3ba6c98e67cff22e981978bc240e40d6c27b0889d1_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "SonataBlockBundle:Block:block_exception_debug.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sonata-project/block-bundle/Resources/views/Block/block_exception_debug.html.twig");
    }
}

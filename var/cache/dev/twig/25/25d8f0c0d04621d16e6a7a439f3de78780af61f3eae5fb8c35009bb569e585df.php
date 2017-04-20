<?php

/* SonataBlockBundle:Block:block_exception.html.twig */
class __TwigTemplate_6ad8200043f316f00b382f5e4813b9a11427ed6e15a434497f2e6510e8214200 extends Twig_Template
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
        $__internal_483954c780c0ce01c1d9c60041b4fea32b84a5b658e2781167283c362f329453 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_483954c780c0ce01c1d9c60041b4fea32b84a5b658e2781167283c362f329453->enter($__internal_483954c780c0ce01c1d9c60041b4fea32b84a5b658e2781167283c362f329453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception.html.twig"));

        $__internal_c19564729a360fd7cb0a17fbd3db93e7bb4ee4c93f2ad5bda61ce421ed15de2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c19564729a360fd7cb0a17fbd3db93e7bb4ee4c93f2ad5bda61ce421ed15de2c->enter($__internal_c19564729a360fd7cb0a17fbd3db93e7bb4ee4c93f2ad5bda61ce421ed15de2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_483954c780c0ce01c1d9c60041b4fea32b84a5b658e2781167283c362f329453->leave($__internal_483954c780c0ce01c1d9c60041b4fea32b84a5b658e2781167283c362f329453_prof);

        
        $__internal_c19564729a360fd7cb0a17fbd3db93e7bb4ee4c93f2ad5bda61ce421ed15de2c->leave($__internal_c19564729a360fd7cb0a17fbd3db93e7bb4ee4c93f2ad5bda61ce421ed15de2c_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_445340928bd3977443e9c426a2246b860270a4b2d31ba3970dd3508a9ebbdb42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_445340928bd3977443e9c426a2246b860270a4b2d31ba3970dd3508a9ebbdb42->enter($__internal_445340928bd3977443e9c426a2246b860270a4b2d31ba3970dd3508a9ebbdb42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_4ce7db95ef4f09ae5bb64e699f08f7974d7649c8fabe83c3e2d7b7b5b9d4af7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ce7db95ef4f09ae5bb64e699f08f7974d7649c8fabe83c3e2d7b7b5b9d4af7f->enter($__internal_4ce7db95ef4f09ae5bb64e699f08f7974d7649c8fabe83c3e2d7b7b5b9d4af7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

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
        
        $__internal_4ce7db95ef4f09ae5bb64e699f08f7974d7649c8fabe83c3e2d7b7b5b9d4af7f->leave($__internal_4ce7db95ef4f09ae5bb64e699f08f7974d7649c8fabe83c3e2d7b7b5b9d4af7f_prof);

        
        $__internal_445340928bd3977443e9c426a2246b860270a4b2d31ba3970dd3508a9ebbdb42->leave($__internal_445340928bd3977443e9c426a2246b860270a4b2d31ba3970dd3508a9ebbdb42_prof);

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

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
        $__internal_c004cf2de121d45df4408a3a1d8556816a82a2ea79856ce7787a1199c4077d14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c004cf2de121d45df4408a3a1d8556816a82a2ea79856ce7787a1199c4077d14->enter($__internal_c004cf2de121d45df4408a3a1d8556816a82a2ea79856ce7787a1199c4077d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception.html.twig"));

        $__internal_db1d6f400f47d6f773744af8ea30e30e6573080ede4ed38d889c30d0d36b0ed3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db1d6f400f47d6f773744af8ea30e30e6573080ede4ed38d889c30d0d36b0ed3->enter($__internal_db1d6f400f47d6f773744af8ea30e30e6573080ede4ed38d889c30d0d36b0ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c004cf2de121d45df4408a3a1d8556816a82a2ea79856ce7787a1199c4077d14->leave($__internal_c004cf2de121d45df4408a3a1d8556816a82a2ea79856ce7787a1199c4077d14_prof);

        
        $__internal_db1d6f400f47d6f773744af8ea30e30e6573080ede4ed38d889c30d0d36b0ed3->leave($__internal_db1d6f400f47d6f773744af8ea30e30e6573080ede4ed38d889c30d0d36b0ed3_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_db4c4ad3ecf463f2c6f5c60baa26f3de04a41c80a9df9658a152faf2b31444d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db4c4ad3ecf463f2c6f5c60baa26f3de04a41c80a9df9658a152faf2b31444d6->enter($__internal_db4c4ad3ecf463f2c6f5c60baa26f3de04a41c80a9df9658a152faf2b31444d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_c0e3537bd05ef2edbbddec802d0ed9ccb2b78110e32f2ada422a6a5065586062 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0e3537bd05ef2edbbddec802d0ed9ccb2b78110e32f2ada422a6a5065586062->enter($__internal_c0e3537bd05ef2edbbddec802d0ed9ccb2b78110e32f2ada422a6a5065586062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

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
        
        $__internal_c0e3537bd05ef2edbbddec802d0ed9ccb2b78110e32f2ada422a6a5065586062->leave($__internal_c0e3537bd05ef2edbbddec802d0ed9ccb2b78110e32f2ada422a6a5065586062_prof);

        
        $__internal_db4c4ad3ecf463f2c6f5c60baa26f3de04a41c80a9df9658a152faf2b31444d6->leave($__internal_db4c4ad3ecf463f2c6f5c60baa26f3de04a41c80a9df9658a152faf2b31444d6_prof);

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

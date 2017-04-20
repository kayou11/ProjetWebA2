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
        $__internal_38e7c8a981a62427f7d7b9d16c514acb64695bbc4a237b447b094da43121c097 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38e7c8a981a62427f7d7b9d16c514acb64695bbc4a237b447b094da43121c097->enter($__internal_38e7c8a981a62427f7d7b9d16c514acb64695bbc4a237b447b094da43121c097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception.html.twig"));

        $__internal_be904b6da49d02dedfe927a4b794a6b97c07cdb4f4e80a46527c9ae1315c3dd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be904b6da49d02dedfe927a4b794a6b97c07cdb4f4e80a46527c9ae1315c3dd7->enter($__internal_be904b6da49d02dedfe927a4b794a6b97c07cdb4f4e80a46527c9ae1315c3dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38e7c8a981a62427f7d7b9d16c514acb64695bbc4a237b447b094da43121c097->leave($__internal_38e7c8a981a62427f7d7b9d16c514acb64695bbc4a237b447b094da43121c097_prof);

        
        $__internal_be904b6da49d02dedfe927a4b794a6b97c07cdb4f4e80a46527c9ae1315c3dd7->leave($__internal_be904b6da49d02dedfe927a4b794a6b97c07cdb4f4e80a46527c9ae1315c3dd7_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_0a5da372261dd7aba08e6997beebaca0718dd829cd202c8662837673cb67549e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a5da372261dd7aba08e6997beebaca0718dd829cd202c8662837673cb67549e->enter($__internal_0a5da372261dd7aba08e6997beebaca0718dd829cd202c8662837673cb67549e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_2d0e47bc4615dfa674d0125300e7cec8d8c9e429a8344db21931d425c0593f39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d0e47bc4615dfa674d0125300e7cec8d8c9e429a8344db21931d425c0593f39->enter($__internal_2d0e47bc4615dfa674d0125300e7cec8d8c9e429a8344db21931d425c0593f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

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
        
        $__internal_2d0e47bc4615dfa674d0125300e7cec8d8c9e429a8344db21931d425c0593f39->leave($__internal_2d0e47bc4615dfa674d0125300e7cec8d8c9e429a8344db21931d425c0593f39_prof);

        
        $__internal_0a5da372261dd7aba08e6997beebaca0718dd829cd202c8662837673cb67549e->leave($__internal_0a5da372261dd7aba08e6997beebaca0718dd829cd202c8662837673cb67549e_prof);

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

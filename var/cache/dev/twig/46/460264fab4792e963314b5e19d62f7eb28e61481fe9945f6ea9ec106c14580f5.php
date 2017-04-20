<?php

/* SonataBlockBundle:Block:block_core_action.html.twig */
class __TwigTemplate_489c6631a6ad7e7bdfb31d36aefb6acdfa77d0a4dac95715ffd2c77f93bf0c2a extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_block"]) || array_key_exists("sonata_block", $context) ? $context["sonata_block"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_block" does not exist.', 12, $this->getSourceContext()); })()), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce23acc5d75f9f82876f65cd388017bca06d61c8d306cfe3fc71e99a1b2deb47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce23acc5d75f9f82876f65cd388017bca06d61c8d306cfe3fc71e99a1b2deb47->enter($__internal_ce23acc5d75f9f82876f65cd388017bca06d61c8d306cfe3fc71e99a1b2deb47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $__internal_993e4d4388bd4559148298ff42f53155e42de3b4597eca24766e645d2485b979 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_993e4d4388bd4559148298ff42f53155e42de3b4597eca24766e645d2485b979->enter($__internal_993e4d4388bd4559148298ff42f53155e42de3b4597eca24766e645d2485b979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce23acc5d75f9f82876f65cd388017bca06d61c8d306cfe3fc71e99a1b2deb47->leave($__internal_ce23acc5d75f9f82876f65cd388017bca06d61c8d306cfe3fc71e99a1b2deb47_prof);

        
        $__internal_993e4d4388bd4559148298ff42f53155e42de3b4597eca24766e645d2485b979->leave($__internal_993e4d4388bd4559148298ff42f53155e42de3b4597eca24766e645d2485b979_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_07b2fc1a319bf876797f8059376b5862f3f9e6fe588f01fa54b7954f38b717a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07b2fc1a319bf876797f8059376b5862f3f9e6fe588f01fa54b7954f38b717a1->enter($__internal_07b2fc1a319bf876797f8059376b5862f3f9e6fe588f01fa54b7954f38b717a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_3d120f2603c1f8bed164d18b44d9890db6069227fbf303cce863f10d94127cb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d120f2603c1f8bed164d18b44d9890db6069227fbf303cce863f10d94127cb0->enter($__internal_3d120f2603c1f8bed164d18b44d9890db6069227fbf303cce863f10d94127cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new Twig_Error_Runtime('Variable "content" does not exist.', 15, $this->getSourceContext()); })());
        echo "
";
        
        $__internal_3d120f2603c1f8bed164d18b44d9890db6069227fbf303cce863f10d94127cb0->leave($__internal_3d120f2603c1f8bed164d18b44d9890db6069227fbf303cce863f10d94127cb0_prof);

        
        $__internal_07b2fc1a319bf876797f8059376b5862f3f9e6fe588f01fa54b7954f38b717a1->leave($__internal_07b2fc1a319bf876797f8059376b5862f3f9e6fe588f01fa54b7954f38b717a1_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_action.html.twig";
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
    {{ content|raw }}
{% endblock %}
", "SonataBlockBundle:Block:block_core_action.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/block-bundle/Resources/views/Block/block_core_action.html.twig");
    }
}

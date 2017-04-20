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
        $__internal_0f8b25f3e1d025f4900daa7784a4526554121ddf630e0396e1006878be4f32f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f8b25f3e1d025f4900daa7784a4526554121ddf630e0396e1006878be4f32f9->enter($__internal_0f8b25f3e1d025f4900daa7784a4526554121ddf630e0396e1006878be4f32f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $__internal_b82d160ef3ce8470b6ad3673a7e1f33947d1793331700b0a728a2cb0ae50126d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b82d160ef3ce8470b6ad3673a7e1f33947d1793331700b0a728a2cb0ae50126d->enter($__internal_b82d160ef3ce8470b6ad3673a7e1f33947d1793331700b0a728a2cb0ae50126d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f8b25f3e1d025f4900daa7784a4526554121ddf630e0396e1006878be4f32f9->leave($__internal_0f8b25f3e1d025f4900daa7784a4526554121ddf630e0396e1006878be4f32f9_prof);

        
        $__internal_b82d160ef3ce8470b6ad3673a7e1f33947d1793331700b0a728a2cb0ae50126d->leave($__internal_b82d160ef3ce8470b6ad3673a7e1f33947d1793331700b0a728a2cb0ae50126d_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_cd47b0c79ee11796bf08b30fbb3eaf670fa5196d8d5d5a9342478eb2680fcb7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd47b0c79ee11796bf08b30fbb3eaf670fa5196d8d5d5a9342478eb2680fcb7e->enter($__internal_cd47b0c79ee11796bf08b30fbb3eaf670fa5196d8d5d5a9342478eb2680fcb7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_f099c2046180d892bda90f26630d651309d7e4b51273b1ebac4c1e153433b773 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f099c2046180d892bda90f26630d651309d7e4b51273b1ebac4c1e153433b773->enter($__internal_f099c2046180d892bda90f26630d651309d7e4b51273b1ebac4c1e153433b773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new Twig_Error_Runtime('Variable "content" does not exist.', 15, $this->getSourceContext()); })());
        echo "
";
        
        $__internal_f099c2046180d892bda90f26630d651309d7e4b51273b1ebac4c1e153433b773->leave($__internal_f099c2046180d892bda90f26630d651309d7e4b51273b1ebac4c1e153433b773_prof);

        
        $__internal_cd47b0c79ee11796bf08b30fbb3eaf670fa5196d8d5d5a9342478eb2680fcb7e->leave($__internal_cd47b0c79ee11796bf08b30fbb3eaf670fa5196d8d5d5a9342478eb2680fcb7e_prof);

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

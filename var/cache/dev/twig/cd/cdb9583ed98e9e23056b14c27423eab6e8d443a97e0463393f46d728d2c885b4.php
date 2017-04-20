<?php

/* SonataBlockBundle:Block:block_template.html.twig */
class __TwigTemplate_07c5e0530f007440ca2848d41b42f30e83f7224f71842db7a83a2cfb7daad5b3 extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_block"]) || array_key_exists("sonata_block", $context) ? $context["sonata_block"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_block" does not exist.', 12, $this->getSourceContext()); })()), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_template.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3cfd356183cd0a7d0069073bad20de7855699151d89c217e908cdfc5b49692e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cfd356183cd0a7d0069073bad20de7855699151d89c217e908cdfc5b49692e4->enter($__internal_3cfd356183cd0a7d0069073bad20de7855699151d89c217e908cdfc5b49692e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_template.html.twig"));

        $__internal_8ee172eb23df6fb1e2b3c54b27bbfedfffbd61527859a9e63948990b9095d5d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ee172eb23df6fb1e2b3c54b27bbfedfffbd61527859a9e63948990b9095d5d2->enter($__internal_8ee172eb23df6fb1e2b3c54b27bbfedfffbd61527859a9e63948990b9095d5d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_template.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3cfd356183cd0a7d0069073bad20de7855699151d89c217e908cdfc5b49692e4->leave($__internal_3cfd356183cd0a7d0069073bad20de7855699151d89c217e908cdfc5b49692e4_prof);

        
        $__internal_8ee172eb23df6fb1e2b3c54b27bbfedfffbd61527859a9e63948990b9095d5d2->leave($__internal_8ee172eb23df6fb1e2b3c54b27bbfedfffbd61527859a9e63948990b9095d5d2_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_df67f631343972778483ac8dee01cebc483f1e8e0b42553296230fed6f815afd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df67f631343972778483ac8dee01cebc483f1e8e0b42553296230fed6f815afd->enter($__internal_df67f631343972778483ac8dee01cebc483f1e8e0b42553296230fed6f815afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_5d1b19504f6d199bc585f35aaa792d50dce45239fe295edfd3a05af8d6d0adcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d1b19504f6d199bc585f35aaa792d50dce45239fe295edfd3a05af8d6d0adcc->enter($__internal_5d1b19504f6d199bc585f35aaa792d50dce45239fe295edfd3a05af8d6d0adcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <h3>Sonata Block Template</h3>
    If you want to use the <code>sonata.block.template</code> block type, you need to create a template :

    <pre>";
        // line 33
        echo "{# file: 'MyBundle:Block:my_block_feature_1.html.twig' #}
{% extends sonata_block.templates.block_base %}

{% block block %}
    &lt;h3&gt;The block title&lt;/h3&gt;
    &lt;p&gt;
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel turpis at lacus
        vehicula fringilla at eu lectus. Duis vitae arcu congue, porttitor nisi sit amet,
        mattis metus. Nunc mollis elit ut lectus cursus luctus. Aliquam eu magna sit amet
        massa volutpat auctor.
    &lt;/p&gt;
{% endblock %}";
        echo "</pre>

    And then call it from a template with the <code>sonata_block_render</code> helper:

    <pre>";
        // line 43
        echo "{{ sonata_block_render({ 'type': 'sonata.block.service.template' }, {
    'template': 'MyBundle:Block:my_block_feature_1.html.twig',
}) }}";
        echo "</pre>
";
        
        $__internal_5d1b19504f6d199bc585f35aaa792d50dce45239fe295edfd3a05af8d6d0adcc->leave($__internal_5d1b19504f6d199bc585f35aaa792d50dce45239fe295edfd3a05af8d6d0adcc_prof);

        
        $__internal_df67f631343972778483ac8dee01cebc483f1e8e0b42553296230fed6f815afd->leave($__internal_df67f631343972778483ac8dee01cebc483f1e8e0b42553296230fed6f815afd_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 43,  53 => 33,  48 => 15,  39 => 14,  18 => 12,);
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
    <h3>Sonata Block Template</h3>
    If you want to use the <code>sonata.block.template</code> block type, you need to create a template :

    <pre>
        {%- verbatim -%}
{# file: 'MyBundle:Block:my_block_feature_1.html.twig' #}
{% extends sonata_block.templates.block_base %}

{% block block %}
    &lt;h3&gt;The block title&lt;/h3&gt;
    &lt;p&gt;
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel turpis at lacus
        vehicula fringilla at eu lectus. Duis vitae arcu congue, porttitor nisi sit amet,
        mattis metus. Nunc mollis elit ut lectus cursus luctus. Aliquam eu magna sit amet
        massa volutpat auctor.
    &lt;/p&gt;
{% endblock %}
        {%- endverbatim -%}
    </pre>

    And then call it from a template with the <code>sonata_block_render</code> helper:

    <pre>
{%- verbatim -%}
{{ sonata_block_render({ 'type': 'sonata.block.service.template' }, {
    'template': 'MyBundle:Block:my_block_feature_1.html.twig',
}) }}
{%- endverbatim -%}
    </pre>
{% endblock %}
", "SonataBlockBundle:Block:block_template.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/block-bundle/Resources/views/Block/block_template.html.twig");
    }
}

<?php

/* SonataBlockBundle:Block:block_template.html.twig */
class __TwigTemplate_9b0efb1403bf22b98e7268452dc6db0354f4f07f8f5a0afcb597a8098a923add extends Twig_Template
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
        $__internal_f5f11d9cc79cf3c4e84e41ad922677f5578611ba54e35801537d23ff5c05b485 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5f11d9cc79cf3c4e84e41ad922677f5578611ba54e35801537d23ff5c05b485->enter($__internal_f5f11d9cc79cf3c4e84e41ad922677f5578611ba54e35801537d23ff5c05b485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_template.html.twig"));

        $__internal_00604ebc5f3852345f0ae20b6a45df9131ba35c84cc711609a8f0d805f9610c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00604ebc5f3852345f0ae20b6a45df9131ba35c84cc711609a8f0d805f9610c2->enter($__internal_00604ebc5f3852345f0ae20b6a45df9131ba35c84cc711609a8f0d805f9610c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_template.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5f11d9cc79cf3c4e84e41ad922677f5578611ba54e35801537d23ff5c05b485->leave($__internal_f5f11d9cc79cf3c4e84e41ad922677f5578611ba54e35801537d23ff5c05b485_prof);

        
        $__internal_00604ebc5f3852345f0ae20b6a45df9131ba35c84cc711609a8f0d805f9610c2->leave($__internal_00604ebc5f3852345f0ae20b6a45df9131ba35c84cc711609a8f0d805f9610c2_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_51ef10be9d41279413f331ec5acf30500af55d22811b70bdebabf41272252e7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51ef10be9d41279413f331ec5acf30500af55d22811b70bdebabf41272252e7e->enter($__internal_51ef10be9d41279413f331ec5acf30500af55d22811b70bdebabf41272252e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_36720519fa1434f4b3a6178a0e9c3d20f5f02ce80d88eb37a17f5464404862d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36720519fa1434f4b3a6178a0e9c3d20f5f02ce80d88eb37a17f5464404862d5->enter($__internal_36720519fa1434f4b3a6178a0e9c3d20f5f02ce80d88eb37a17f5464404862d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

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
        
        $__internal_36720519fa1434f4b3a6178a0e9c3d20f5f02ce80d88eb37a17f5464404862d5->leave($__internal_36720519fa1434f4b3a6178a0e9c3d20f5f02ce80d88eb37a17f5464404862d5_prof);

        
        $__internal_51ef10be9d41279413f331ec5acf30500af55d22811b70bdebabf41272252e7e->leave($__internal_51ef10be9d41279413f331ec5acf30500af55d22811b70bdebabf41272252e7e_prof);

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

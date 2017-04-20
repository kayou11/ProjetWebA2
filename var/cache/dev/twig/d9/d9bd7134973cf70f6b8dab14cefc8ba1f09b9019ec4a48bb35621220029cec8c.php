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
        $__internal_fc891abedf5f1be82482812736f717565dabaa4ae10ef13bdb9b522e18fbd706 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc891abedf5f1be82482812736f717565dabaa4ae10ef13bdb9b522e18fbd706->enter($__internal_fc891abedf5f1be82482812736f717565dabaa4ae10ef13bdb9b522e18fbd706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_template.html.twig"));

        $__internal_03cfb6449261a2930c1b6b36d64e6fa68cd43b284126f03b5d92efc282606a70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03cfb6449261a2930c1b6b36d64e6fa68cd43b284126f03b5d92efc282606a70->enter($__internal_03cfb6449261a2930c1b6b36d64e6fa68cd43b284126f03b5d92efc282606a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_template.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc891abedf5f1be82482812736f717565dabaa4ae10ef13bdb9b522e18fbd706->leave($__internal_fc891abedf5f1be82482812736f717565dabaa4ae10ef13bdb9b522e18fbd706_prof);

        
        $__internal_03cfb6449261a2930c1b6b36d64e6fa68cd43b284126f03b5d92efc282606a70->leave($__internal_03cfb6449261a2930c1b6b36d64e6fa68cd43b284126f03b5d92efc282606a70_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_8aa57c4c2cdbac5055e93e641b22a7c5b8bae6db608d59c53143bb6b73aee5b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aa57c4c2cdbac5055e93e641b22a7c5b8bae6db608d59c53143bb6b73aee5b7->enter($__internal_8aa57c4c2cdbac5055e93e641b22a7c5b8bae6db608d59c53143bb6b73aee5b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_595993251e00e90f42e9d6aac8eca1a74ae5876822c8e4d1e38f59cedbcf863a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_595993251e00e90f42e9d6aac8eca1a74ae5876822c8e4d1e38f59cedbcf863a->enter($__internal_595993251e00e90f42e9d6aac8eca1a74ae5876822c8e4d1e38f59cedbcf863a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

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
        
        $__internal_595993251e00e90f42e9d6aac8eca1a74ae5876822c8e4d1e38f59cedbcf863a->leave($__internal_595993251e00e90f42e9d6aac8eca1a74ae5876822c8e4d1e38f59cedbcf863a_prof);

        
        $__internal_8aa57c4c2cdbac5055e93e641b22a7c5b8bae6db608d59c53143bb6b73aee5b7->leave($__internal_8aa57c4c2cdbac5055e93e641b22a7c5b8bae6db608d59c53143bb6b73aee5b7_prof);

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

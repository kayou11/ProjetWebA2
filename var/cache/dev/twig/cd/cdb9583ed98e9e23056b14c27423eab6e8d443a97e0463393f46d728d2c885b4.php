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
        $__internal_0be274fc98b357fb527e0053f7d097ae4f034bf5699dc4feabaeb93e3f59c226 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0be274fc98b357fb527e0053f7d097ae4f034bf5699dc4feabaeb93e3f59c226->enter($__internal_0be274fc98b357fb527e0053f7d097ae4f034bf5699dc4feabaeb93e3f59c226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_template.html.twig"));

        $__internal_6e095c35d36497af8586eb459aec7da0214425e01873e4e1403198720720a705 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e095c35d36497af8586eb459aec7da0214425e01873e4e1403198720720a705->enter($__internal_6e095c35d36497af8586eb459aec7da0214425e01873e4e1403198720720a705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_template.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0be274fc98b357fb527e0053f7d097ae4f034bf5699dc4feabaeb93e3f59c226->leave($__internal_0be274fc98b357fb527e0053f7d097ae4f034bf5699dc4feabaeb93e3f59c226_prof);

        
        $__internal_6e095c35d36497af8586eb459aec7da0214425e01873e4e1403198720720a705->leave($__internal_6e095c35d36497af8586eb459aec7da0214425e01873e4e1403198720720a705_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_f1c57c5ed1bfd8294d9f72bf3b9ac0af036c1b20fdb01922ed36f713cf115a9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1c57c5ed1bfd8294d9f72bf3b9ac0af036c1b20fdb01922ed36f713cf115a9d->enter($__internal_f1c57c5ed1bfd8294d9f72bf3b9ac0af036c1b20fdb01922ed36f713cf115a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_2836356b566cb5cbe786ccf6186c2da87606c19d3045ea9072aacc185553040e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2836356b566cb5cbe786ccf6186c2da87606c19d3045ea9072aacc185553040e->enter($__internal_2836356b566cb5cbe786ccf6186c2da87606c19d3045ea9072aacc185553040e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

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
        
        $__internal_2836356b566cb5cbe786ccf6186c2da87606c19d3045ea9072aacc185553040e->leave($__internal_2836356b566cb5cbe786ccf6186c2da87606c19d3045ea9072aacc185553040e_prof);

        
        $__internal_f1c57c5ed1bfd8294d9f72bf3b9ac0af036c1b20fdb01922ed36f713cf115a9d->leave($__internal_f1c57c5ed1bfd8294d9f72bf3b9ac0af036c1b20fdb01922ed36f713cf115a9d_prof);

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

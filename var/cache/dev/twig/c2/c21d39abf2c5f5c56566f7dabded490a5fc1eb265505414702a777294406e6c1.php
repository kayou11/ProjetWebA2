<?php

/* SonataBlockBundle:Block:block_template.html.twig */
class __TwigTemplate_a7114ea83f69a26842c9e1cf1451195cecc4ea8c2b674ecc8328516e714b7ff5 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_template.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8751dcb61804b36e9eb00d39916db146b01b7b6c32f4631b4e0eec5399fdbb6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8751dcb61804b36e9eb00d39916db146b01b7b6c32f4631b4e0eec5399fdbb6c->enter($__internal_8751dcb61804b36e9eb00d39916db146b01b7b6c32f4631b4e0eec5399fdbb6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_template.html.twig"));

        $__internal_3465f06991bcdcf14ca1706a5593d8447ed392e00ef31b61c9093498b8d08e5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3465f06991bcdcf14ca1706a5593d8447ed392e00ef31b61c9093498b8d08e5a->enter($__internal_3465f06991bcdcf14ca1706a5593d8447ed392e00ef31b61c9093498b8d08e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_template.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8751dcb61804b36e9eb00d39916db146b01b7b6c32f4631b4e0eec5399fdbb6c->leave($__internal_8751dcb61804b36e9eb00d39916db146b01b7b6c32f4631b4e0eec5399fdbb6c_prof);

        
        $__internal_3465f06991bcdcf14ca1706a5593d8447ed392e00ef31b61c9093498b8d08e5a->leave($__internal_3465f06991bcdcf14ca1706a5593d8447ed392e00ef31b61c9093498b8d08e5a_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_e7aa26ef6a9c4dc1fa5e42f2d2c28251f09253a7809533e291c3b12fdc6b4d71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7aa26ef6a9c4dc1fa5e42f2d2c28251f09253a7809533e291c3b12fdc6b4d71->enter($__internal_e7aa26ef6a9c4dc1fa5e42f2d2c28251f09253a7809533e291c3b12fdc6b4d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_4d48c8773f4538ae13a1ab3f729d84b5ea2f606402e56066ce529d1b044acc5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d48c8773f4538ae13a1ab3f729d84b5ea2f606402e56066ce529d1b044acc5d->enter($__internal_4d48c8773f4538ae13a1ab3f729d84b5ea2f606402e56066ce529d1b044acc5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

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
        
        $__internal_4d48c8773f4538ae13a1ab3f729d84b5ea2f606402e56066ce529d1b044acc5d->leave($__internal_4d48c8773f4538ae13a1ab3f729d84b5ea2f606402e56066ce529d1b044acc5d_prof);

        
        $__internal_e7aa26ef6a9c4dc1fa5e42f2d2c28251f09253a7809533e291c3b12fdc6b4d71->leave($__internal_e7aa26ef6a9c4dc1fa5e42f2d2c28251f09253a7809533e291c3b12fdc6b4d71_prof);

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
", "SonataBlockBundle:Block:block_template.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sonata-project/block-bundle/Resources/views/Block/block_template.html.twig");
    }
}

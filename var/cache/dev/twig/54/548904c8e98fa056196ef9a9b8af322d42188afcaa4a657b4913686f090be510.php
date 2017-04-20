<?php

/* SonataAdminBundle:CRUD:show_array.html.twig */
class __TwigTemplate_1bcd2ef26f0a69d382b07aba6fcbd942f71653cb582a3d7b7b4a09dbd6618ac5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_array.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d6d62f41e51f0ddf95c0b3e2c40a1ca6476fe8bd3b58cfbf0e8f4b86f26fdfc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6d62f41e51f0ddf95c0b3e2c40a1ca6476fe8bd3b58cfbf0e8f4b86f26fdfc9->enter($__internal_d6d62f41e51f0ddf95c0b3e2c40a1ca6476fe8bd3b58cfbf0e8f4b86f26fdfc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_array.html.twig"));

        $__internal_cab7791e7036592c455ff3febf480829576ec469264bce7cf6312a55aa01d15b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cab7791e7036592c455ff3febf480829576ec469264bce7cf6312a55aa01d15b->enter($__internal_cab7791e7036592c455ff3febf480829576ec469264bce7cf6312a55aa01d15b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_array.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6d62f41e51f0ddf95c0b3e2c40a1ca6476fe8bd3b58cfbf0e8f4b86f26fdfc9->leave($__internal_d6d62f41e51f0ddf95c0b3e2c40a1ca6476fe8bd3b58cfbf0e8f4b86f26fdfc9_prof);

        
        $__internal_cab7791e7036592c455ff3febf480829576ec469264bce7cf6312a55aa01d15b->leave($__internal_cab7791e7036592c455ff3febf480829576ec469264bce7cf6312a55aa01d15b_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_573ac25b4a372066e95154f30966230535f47eb5396a6fc3d7a052fbd61597ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_573ac25b4a372066e95154f30966230535f47eb5396a6fc3d7a052fbd61597ab->enter($__internal_573ac25b4a372066e95154f30966230535f47eb5396a6fc3d7a052fbd61597ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_21dc0107d92801d89cd8a41c682f5499e4e5c3140d2824c6f5efd42e6de3e516 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21dc0107d92801d89cd8a41c682f5499e4e5c3140d2824c6f5efd42e6de3e516->enter($__internal_21dc0107d92801d89cd8a41c682f5499e4e5c3140d2824c6f5efd42e6de3e516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 15, $this->getSourceContext()); })()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 16
            echo "        ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 16, $this->getSourceContext()); })()), "options", array()), "safe", array())) {
                // line 17
                echo "            [";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo " => ";
                echo $context["val"];
                echo "]
        ";
            } else {
                // line 19
                echo "            [";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo " => ";
                echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                echo "]
        ";
            }
            // line 21
            echo "
        ";
            // line 22
            if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) {
                // line 23
                echo "            ";
                if (( !twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "inline", array(), "any", true, true) || (false == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 23, $this->getSourceContext()); })()), "options", array()), "inline", array())))) {
                    echo "<br>";
                }
                // line 24
                echo "        ";
            }
            // line 25
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_21dc0107d92801d89cd8a41c682f5499e4e5c3140d2824c6f5efd42e6de3e516->leave($__internal_21dc0107d92801d89cd8a41c682f5499e4e5c3140d2824c6f5efd42e6de3e516_prof);

        
        $__internal_573ac25b4a372066e95154f30966230535f47eb5396a6fc3d7a052fbd61597ab->leave($__internal_573ac25b4a372066e95154f30966230535f47eb5396a6fc3d7a052fbd61597ab_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 25,  96 => 24,  91 => 23,  89 => 22,  86 => 21,  78 => 19,  70 => 17,  67 => 16,  49 => 15,  40 => 14,  11 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field%}
    {% for key, val in value %}
        {% if field_description.options.safe %}
            [{{ key }} => {{ val|raw }}]
        {% else %}
            [{{ key }} => {{ val }}]
        {% endif %}

        {% if not loop.last %}
            {% if field_description.options.inline is not defined or false == field_description.options.inline %}<br>{% endif %}
        {% endif %}
    {% endfor %}
{% endblock %}
", "SonataAdminBundle:CRUD:show_array.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_array.html.twig");
    }
}

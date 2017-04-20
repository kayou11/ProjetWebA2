<?php

/* SonataAdminBundle:CRUD:list_array.html.twig */
class __TwigTemplate_23c257335ecd7912b2c040aed4e198df5df8d7d581ab130906bc69319c3e5ba4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 22
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 22, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_array.html.twig", 22);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3240237ec164c341207b07b00fa52c78676a72b9e863a35d6c28e3c166fa33cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3240237ec164c341207b07b00fa52c78676a72b9e863a35d6c28e3c166fa33cb->enter($__internal_3240237ec164c341207b07b00fa52c78676a72b9e863a35d6c28e3c166fa33cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_array.html.twig"));

        $__internal_ae31ead81b1a2286ac9fa111b828009876459ccf51c5cf30b1b6f393ce7b6776 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae31ead81b1a2286ac9fa111b828009876459ccf51c5cf30b1b6f393ce7b6776->enter($__internal_ae31ead81b1a2286ac9fa111b828009876459ccf51c5cf30b1b6f393ce7b6776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_array.html.twig"));

        // line 11
        $context["list"] = $this;
        // line 22
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3240237ec164c341207b07b00fa52c78676a72b9e863a35d6c28e3c166fa33cb->leave($__internal_3240237ec164c341207b07b00fa52c78676a72b9e863a35d6c28e3c166fa33cb_prof);

        
        $__internal_ae31ead81b1a2286ac9fa111b828009876459ccf51c5cf30b1b6f393ce7b6776->leave($__internal_ae31ead81b1a2286ac9fa111b828009876459ccf51c5cf30b1b6f393ce7b6776_prof);

    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        $__internal_4c304b8ce7f105547244cb4230204caea3b74f55c2b9abda4ad2d029c893c5c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c304b8ce7f105547244cb4230204caea3b74f55c2b9abda4ad2d029c893c5c6->enter($__internal_4c304b8ce7f105547244cb4230204caea3b74f55c2b9abda4ad2d029c893c5c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_63f234ea49c71cb5716f4b2a8a4c28f0ab64f40c6e2b5a83d54f1729c7ba664c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63f234ea49c71cb5716f4b2a8a4c28f0ab64f40c6e2b5a83d54f1729c7ba664c->enter($__internal_63f234ea49c71cb5716f4b2a8a4c28f0ab64f40c6e2b5a83d54f1729c7ba664c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 25
        echo "    ";
        echo $context["list"]->macro_render_array((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 25, $this->getSourceContext()); })()));
        echo "
";
        
        $__internal_63f234ea49c71cb5716f4b2a8a4c28f0ab64f40c6e2b5a83d54f1729c7ba664c->leave($__internal_63f234ea49c71cb5716f4b2a8a4c28f0ab64f40c6e2b5a83d54f1729c7ba664c_prof);

        
        $__internal_4c304b8ce7f105547244cb4230204caea3b74f55c2b9abda4ad2d029c893c5c6->leave($__internal_4c304b8ce7f105547244cb4230204caea3b74f55c2b9abda4ad2d029c893c5c6_prof);

    }

    // line 12
    public function macro_render_array($__value__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "value" => $__value__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_743576fb128311ef2a2b79a3c22b01aa9fe54db8bd179c127e6af8cbf98037e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_743576fb128311ef2a2b79a3c22b01aa9fe54db8bd179c127e6af8cbf98037e2->enter($__internal_743576fb128311ef2a2b79a3c22b01aa9fe54db8bd179c127e6af8cbf98037e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_array"));

            $__internal_628f66f482af4ba4b3112386aacf81bdf2624ea43964003440df784ba9e3b35a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_628f66f482af4ba4b3112386aacf81bdf2624ea43964003440df784ba9e3b35a->enter($__internal_628f66f482af4ba4b3112386aacf81bdf2624ea43964003440df784ba9e3b35a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_array"));

            // line 13
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 13, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 14
                echo "        ";
                if (twig_test_iterable($context["val"])) {
                    // line 15
                    echo "            [";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo " => ";
                    echo $context["list"]->macro_render_array($context["val"]);
                    echo "}]
        ";
                } else {
                    // line 17
                    echo "            [";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo " => ";
                    echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                    echo "]
        ";
                }
                // line 19
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_628f66f482af4ba4b3112386aacf81bdf2624ea43964003440df784ba9e3b35a->leave($__internal_628f66f482af4ba4b3112386aacf81bdf2624ea43964003440df784ba9e3b35a_prof);

            
            $__internal_743576fb128311ef2a2b79a3c22b01aa9fe54db8bd179c127e6af8cbf98037e2->leave($__internal_743576fb128311ef2a2b79a3c22b01aa9fe54db8bd179c127e6af8cbf98037e2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 19,  98 => 17,  90 => 15,  87 => 14,  82 => 13,  64 => 12,  51 => 25,  42 => 24,  32 => 22,  30 => 11,  18 => 22,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
{% import _self as list %}
{%  macro render_array(value) %}
    {% for key, val in value %}
        {% if val is iterable %}
            [{{ key }} => {{ list.render_array(val) }}}]
        {%  else %}
            [{{ key }} => {{ val }}]
        {%  endif %}
    {% endfor %}
{% endmacro %}

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {{ list.render_array(value) }}
{% endblock %}
", "SonataAdminBundle:CRUD:list_array.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_array.html.twig");
    }
}

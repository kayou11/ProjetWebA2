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
        $__internal_7bed4ed2f4ce166300cc218d626a16dfed855303b59be979a135d16b991bb9f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bed4ed2f4ce166300cc218d626a16dfed855303b59be979a135d16b991bb9f2->enter($__internal_7bed4ed2f4ce166300cc218d626a16dfed855303b59be979a135d16b991bb9f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_array.html.twig"));

        $__internal_dd8de65e1b0aa1790b44c0d816ecaabf30bb2c9a9d36f56fc0ebad752ce77f57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd8de65e1b0aa1790b44c0d816ecaabf30bb2c9a9d36f56fc0ebad752ce77f57->enter($__internal_dd8de65e1b0aa1790b44c0d816ecaabf30bb2c9a9d36f56fc0ebad752ce77f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_array.html.twig"));

        // line 11
        $context["list"] = $this;
        // line 22
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bed4ed2f4ce166300cc218d626a16dfed855303b59be979a135d16b991bb9f2->leave($__internal_7bed4ed2f4ce166300cc218d626a16dfed855303b59be979a135d16b991bb9f2_prof);

        
        $__internal_dd8de65e1b0aa1790b44c0d816ecaabf30bb2c9a9d36f56fc0ebad752ce77f57->leave($__internal_dd8de65e1b0aa1790b44c0d816ecaabf30bb2c9a9d36f56fc0ebad752ce77f57_prof);

    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        $__internal_a3648e1a3bf6b11d9b8af4532cd9563ed327df21a3664dbaaa8481e6e1de8223 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3648e1a3bf6b11d9b8af4532cd9563ed327df21a3664dbaaa8481e6e1de8223->enter($__internal_a3648e1a3bf6b11d9b8af4532cd9563ed327df21a3664dbaaa8481e6e1de8223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_24e3c3dd463ccdbf2202cc144ab63d085bfcf154d198d11525e6359bc1e42562 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24e3c3dd463ccdbf2202cc144ab63d085bfcf154d198d11525e6359bc1e42562->enter($__internal_24e3c3dd463ccdbf2202cc144ab63d085bfcf154d198d11525e6359bc1e42562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 25
        echo "    ";
        echo $context["list"]->macro_render_array((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 25, $this->getSourceContext()); })()));
        echo "
";
        
        $__internal_24e3c3dd463ccdbf2202cc144ab63d085bfcf154d198d11525e6359bc1e42562->leave($__internal_24e3c3dd463ccdbf2202cc144ab63d085bfcf154d198d11525e6359bc1e42562_prof);

        
        $__internal_a3648e1a3bf6b11d9b8af4532cd9563ed327df21a3664dbaaa8481e6e1de8223->leave($__internal_a3648e1a3bf6b11d9b8af4532cd9563ed327df21a3664dbaaa8481e6e1de8223_prof);

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
            $__internal_aafd8666aff9ccac16e8b04d3990b8aca84f0125b40fc3715a0db345d6497b4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_aafd8666aff9ccac16e8b04d3990b8aca84f0125b40fc3715a0db345d6497b4e->enter($__internal_aafd8666aff9ccac16e8b04d3990b8aca84f0125b40fc3715a0db345d6497b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_array"));

            $__internal_9c2843caf8c7758da2478dd8dbcbf063a0ec038d81abbd13fe23b7add670d954 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_9c2843caf8c7758da2478dd8dbcbf063a0ec038d81abbd13fe23b7add670d954->enter($__internal_9c2843caf8c7758da2478dd8dbcbf063a0ec038d81abbd13fe23b7add670d954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_array"));

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
            
            $__internal_9c2843caf8c7758da2478dd8dbcbf063a0ec038d81abbd13fe23b7add670d954->leave($__internal_9c2843caf8c7758da2478dd8dbcbf063a0ec038d81abbd13fe23b7add670d954_prof);

            
            $__internal_aafd8666aff9ccac16e8b04d3990b8aca84f0125b40fc3715a0db345d6497b4e->leave($__internal_aafd8666aff9ccac16e8b04d3990b8aca84f0125b40fc3715a0db345d6497b4e_prof);


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

<?php

/* SonataAdminBundle:CRUD:show_array.html.twig */
class __TwigTemplate_c1364d175d31c8a0840319c1a8ba4c58a54481faa20af744736add93438b52b2 extends Twig_Template
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
        $__internal_d2d994a2e3cbfb1de7969101955438b400b016710c7615fb9b034e96332e91c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2d994a2e3cbfb1de7969101955438b400b016710c7615fb9b034e96332e91c6->enter($__internal_d2d994a2e3cbfb1de7969101955438b400b016710c7615fb9b034e96332e91c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_array.html.twig"));

        $__internal_bba9d551b6d34123c7ad2f51108c0f91915156c36c67214404cf9130d9058828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bba9d551b6d34123c7ad2f51108c0f91915156c36c67214404cf9130d9058828->enter($__internal_bba9d551b6d34123c7ad2f51108c0f91915156c36c67214404cf9130d9058828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_array.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2d994a2e3cbfb1de7969101955438b400b016710c7615fb9b034e96332e91c6->leave($__internal_d2d994a2e3cbfb1de7969101955438b400b016710c7615fb9b034e96332e91c6_prof);

        
        $__internal_bba9d551b6d34123c7ad2f51108c0f91915156c36c67214404cf9130d9058828->leave($__internal_bba9d551b6d34123c7ad2f51108c0f91915156c36c67214404cf9130d9058828_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_19eb2b00107e7d6b306eb774b907334980b0f9e9e1b8281ce5bca3aa9711e286 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19eb2b00107e7d6b306eb774b907334980b0f9e9e1b8281ce5bca3aa9711e286->enter($__internal_19eb2b00107e7d6b306eb774b907334980b0f9e9e1b8281ce5bca3aa9711e286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_730849aef4f39553227852260b7d7c22be43dd713158f90d48482f4424c2fa5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_730849aef4f39553227852260b7d7c22be43dd713158f90d48482f4424c2fa5d->enter($__internal_730849aef4f39553227852260b7d7c22be43dd713158f90d48482f4424c2fa5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_730849aef4f39553227852260b7d7c22be43dd713158f90d48482f4424c2fa5d->leave($__internal_730849aef4f39553227852260b7d7c22be43dd713158f90d48482f4424c2fa5d_prof);

        
        $__internal_19eb2b00107e7d6b306eb774b907334980b0f9e9e1b8281ce5bca3aa9711e286->leave($__internal_19eb2b00107e7d6b306eb774b907334980b0f9e9e1b8281ce5bca3aa9711e286_prof);

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

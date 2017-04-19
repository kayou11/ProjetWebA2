<?php

/* SonataAdminBundle:Pager:simple_pager_results.html.twig */
class __TwigTemplate_59fc103b106f049380e76ecb80c2793d5a3213b61a49bea6aafad5d84c12ec94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "SonataAdminBundle:Pager:simple_pager_results.html.twig", 12);
        $this->blocks = array(
            'num_results' => array($this, 'block_num_results'),
            'num_pages' => array($this, 'block_num_pages'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c9a69245ffb8187303bb1dbf0ab3f5cd64d274ff40bd3af73d71efa0a77871c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c9a69245ffb8187303bb1dbf0ab3f5cd64d274ff40bd3af73d71efa0a77871c->enter($__internal_0c9a69245ffb8187303bb1dbf0ab3f5cd64d274ff40bd3af73d71efa0a77871c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:simple_pager_results.html.twig"));

        $__internal_087f2ea605c03117e3908e6d4f13263446cd5f9b840f64a285121bf61cbc79ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_087f2ea605c03117e3908e6d4f13263446cd5f9b840f64a285121bf61cbc79ba->enter($__internal_087f2ea605c03117e3908e6d4f13263446cd5f9b840f64a285121bf61cbc79ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:simple_pager_results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c9a69245ffb8187303bb1dbf0ab3f5cd64d274ff40bd3af73d71efa0a77871c->leave($__internal_0c9a69245ffb8187303bb1dbf0ab3f5cd64d274ff40bd3af73d71efa0a77871c_prof);

        
        $__internal_087f2ea605c03117e3908e6d4f13263446cd5f9b840f64a285121bf61cbc79ba->leave($__internal_087f2ea605c03117e3908e6d4f13263446cd5f9b840f64a285121bf61cbc79ba_prof);

    }

    // line 14
    public function block_num_results($context, array $blocks = array())
    {
        $__internal_10eb0997f2453c66e7dd4e857a6d23de3898c7a180d50bb50f836c0300fd8bc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10eb0997f2453c66e7dd4e857a6d23de3898c7a180d50bb50f836c0300fd8bc0->enter($__internal_10eb0997f2453c66e7dd4e857a6d23de3898c7a180d50bb50f836c0300fd8bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        $__internal_d7f0a30895944380e84848f1bd11ed95eac3570d698c9933592b8ebc740a84ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7f0a30895944380e84848f1bd11ed95eac3570d698c9933592b8ebc740a84ab->enter($__internal_d7f0a30895944380e84848f1bd11ed95eac3570d698c9933592b8ebc740a84ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        // line 15
        echo "    ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 15, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "lastPage", array()) != twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 15, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "page", array()))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list_results_count_prefix", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        // line 18
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("list_results_count", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 18, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "nbresults", array()), array("%count%" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 18, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "nbresults", array())), "SonataAdminBundle");
        // line 19
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_d7f0a30895944380e84848f1bd11ed95eac3570d698c9933592b8ebc740a84ab->leave($__internal_d7f0a30895944380e84848f1bd11ed95eac3570d698c9933592b8ebc740a84ab_prof);

        
        $__internal_10eb0997f2453c66e7dd4e857a6d23de3898c7a180d50bb50f836c0300fd8bc0->leave($__internal_10eb0997f2453c66e7dd4e857a6d23de3898c7a180d50bb50f836c0300fd8bc0_prof);

    }

    // line 22
    public function block_num_pages($context, array $blocks = array())
    {
        $__internal_5b6526afe422da31313e97d18fe0b306b1f991a0b12b223d76a0ad5ea6af8bc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b6526afe422da31313e97d18fe0b306b1f991a0b12b223d76a0ad5ea6af8bc9->enter($__internal_5b6526afe422da31313e97d18fe0b306b1f991a0b12b223d76a0ad5ea6af8bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        $__internal_d4229fd18ccb29fff1a58d8f62f568902f191608be44314ebaf696b246a63a6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4229fd18ccb29fff1a58d8f62f568902f191608be44314ebaf696b246a63a6a->enter($__internal_d4229fd18ccb29fff1a58d8f62f568902f191608be44314ebaf696b246a63a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        // line 23
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 23, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "page", array()), "html", null, true);
        echo "
    /
    ";
        // line 25
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 25, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "lastPage", array()) != twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 25, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "page", array()))) {
            // line 26
            echo "        ?
    ";
        } else {
            // line 28
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 28, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "lastpage", array()), "html", null, true);
            echo "
    ";
        }
        // line 30
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_d4229fd18ccb29fff1a58d8f62f568902f191608be44314ebaf696b246a63a6a->leave($__internal_d4229fd18ccb29fff1a58d8f62f568902f191608be44314ebaf696b246a63a6a_prof);

        
        $__internal_5b6526afe422da31313e97d18fe0b306b1f991a0b12b223d76a0ad5ea6af8bc9->leave($__internal_5b6526afe422da31313e97d18fe0b306b1f991a0b12b223d76a0ad5ea6af8bc9_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:simple_pager_results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 30,  94 => 28,  90 => 26,  88 => 25,  82 => 23,  73 => 22,  62 => 19,  59 => 18,  53 => 16,  50 => 15,  41 => 14,  11 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}

{% block num_results %}
    {% if admin.datagrid.pager.lastPage != admin.datagrid.pager.page %}
        {{ 'list_results_count_prefix'|trans({}, 'SonataAdminBundle') }}
    {% endif %}
    {% transchoice admin.datagrid.pager.nbresults with {'%count%': admin.datagrid.pager.nbresults} from 'SonataAdminBundle' %}list_results_count{% endtranschoice %}
    &nbsp;-&nbsp;
{% endblock %}

{% block num_pages %}
    {{ admin.datagrid.pager.page }}
    /
    {% if admin.datagrid.pager.lastPage != admin.datagrid.pager.page %}
        ?
    {% else %}
        {{ admin.datagrid.pager.lastpage }}
    {% endif %}
    &nbsp;-&nbsp;
{% endblock %}
", "SonataAdminBundle:Pager:simple_pager_results.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/Pager/simple_pager_results.html.twig");
    }
}

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
        $__internal_fdb3ca050fd3f0ecb595a8faebd77293fe42ef7d8731daae1ebec5cd6d8c293a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdb3ca050fd3f0ecb595a8faebd77293fe42ef7d8731daae1ebec5cd6d8c293a->enter($__internal_fdb3ca050fd3f0ecb595a8faebd77293fe42ef7d8731daae1ebec5cd6d8c293a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:simple_pager_results.html.twig"));

        $__internal_dc42be745726f605245458a4783af13108ed9f3c59e658979aa43c9f407cc096 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc42be745726f605245458a4783af13108ed9f3c59e658979aa43c9f407cc096->enter($__internal_dc42be745726f605245458a4783af13108ed9f3c59e658979aa43c9f407cc096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:simple_pager_results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fdb3ca050fd3f0ecb595a8faebd77293fe42ef7d8731daae1ebec5cd6d8c293a->leave($__internal_fdb3ca050fd3f0ecb595a8faebd77293fe42ef7d8731daae1ebec5cd6d8c293a_prof);

        
        $__internal_dc42be745726f605245458a4783af13108ed9f3c59e658979aa43c9f407cc096->leave($__internal_dc42be745726f605245458a4783af13108ed9f3c59e658979aa43c9f407cc096_prof);

    }

    // line 14
    public function block_num_results($context, array $blocks = array())
    {
        $__internal_84781559a59959e912e1adef97caaddda4305d5369330b0c05db44533492bfa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84781559a59959e912e1adef97caaddda4305d5369330b0c05db44533492bfa4->enter($__internal_84781559a59959e912e1adef97caaddda4305d5369330b0c05db44533492bfa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        $__internal_f533a3cd4e1142ba2c1f1cd89b8e1254fc8699084ace484c57566e3f151f4426 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f533a3cd4e1142ba2c1f1cd89b8e1254fc8699084ace484c57566e3f151f4426->enter($__internal_f533a3cd4e1142ba2c1f1cd89b8e1254fc8699084ace484c57566e3f151f4426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

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
        
        $__internal_f533a3cd4e1142ba2c1f1cd89b8e1254fc8699084ace484c57566e3f151f4426->leave($__internal_f533a3cd4e1142ba2c1f1cd89b8e1254fc8699084ace484c57566e3f151f4426_prof);

        
        $__internal_84781559a59959e912e1adef97caaddda4305d5369330b0c05db44533492bfa4->leave($__internal_84781559a59959e912e1adef97caaddda4305d5369330b0c05db44533492bfa4_prof);

    }

    // line 22
    public function block_num_pages($context, array $blocks = array())
    {
        $__internal_6fbe2df0bf01c4c0bc5cbd450c8aa05dd53a2cc90acb357f6169b7f9a7425358 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fbe2df0bf01c4c0bc5cbd450c8aa05dd53a2cc90acb357f6169b7f9a7425358->enter($__internal_6fbe2df0bf01c4c0bc5cbd450c8aa05dd53a2cc90acb357f6169b7f9a7425358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        $__internal_b638f8c46a34a56d25c49589746c3ebc1dd30bc72657ca933c9812e71cfd4560 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b638f8c46a34a56d25c49589746c3ebc1dd30bc72657ca933c9812e71cfd4560->enter($__internal_b638f8c46a34a56d25c49589746c3ebc1dd30bc72657ca933c9812e71cfd4560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

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
        
        $__internal_b638f8c46a34a56d25c49589746c3ebc1dd30bc72657ca933c9812e71cfd4560->leave($__internal_b638f8c46a34a56d25c49589746c3ebc1dd30bc72657ca933c9812e71cfd4560_prof);

        
        $__internal_6fbe2df0bf01c4c0bc5cbd450c8aa05dd53a2cc90acb357f6169b7f9a7425358->leave($__internal_6fbe2df0bf01c4c0bc5cbd450c8aa05dd53a2cc90acb357f6169b7f9a7425358_prof);

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

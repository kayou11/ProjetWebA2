<?php

/* SonataAdminBundle:Pager:simple_pager_results.html.twig */
class __TwigTemplate_d5e1a2fb1b92d71088f735c2b378689ed65c9bdfa6654a9b64b0250f27b6b275 extends Twig_Template
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
        $__internal_f16604bd0087f706b0a17a26e2ac4e46100855071e99df551d95628c612a33a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f16604bd0087f706b0a17a26e2ac4e46100855071e99df551d95628c612a33a3->enter($__internal_f16604bd0087f706b0a17a26e2ac4e46100855071e99df551d95628c612a33a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:simple_pager_results.html.twig"));

        $__internal_cf5ddadcac6cca01561d47340bcc6c1c7965ef9a6b6288f68b558f2222394159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf5ddadcac6cca01561d47340bcc6c1c7965ef9a6b6288f68b558f2222394159->enter($__internal_cf5ddadcac6cca01561d47340bcc6c1c7965ef9a6b6288f68b558f2222394159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:simple_pager_results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f16604bd0087f706b0a17a26e2ac4e46100855071e99df551d95628c612a33a3->leave($__internal_f16604bd0087f706b0a17a26e2ac4e46100855071e99df551d95628c612a33a3_prof);

        
        $__internal_cf5ddadcac6cca01561d47340bcc6c1c7965ef9a6b6288f68b558f2222394159->leave($__internal_cf5ddadcac6cca01561d47340bcc6c1c7965ef9a6b6288f68b558f2222394159_prof);

    }

    // line 14
    public function block_num_results($context, array $blocks = array())
    {
        $__internal_7ff778e530254c242937f9f5fb658f98ede9c6a691272116dfe0a37fe5458860 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ff778e530254c242937f9f5fb658f98ede9c6a691272116dfe0a37fe5458860->enter($__internal_7ff778e530254c242937f9f5fb658f98ede9c6a691272116dfe0a37fe5458860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        $__internal_aa4ac8835b833ff9077ad2712e4670aa99e698026b0c30302126fe13f8c9ba8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa4ac8835b833ff9077ad2712e4670aa99e698026b0c30302126fe13f8c9ba8f->enter($__internal_aa4ac8835b833ff9077ad2712e4670aa99e698026b0c30302126fe13f8c9ba8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

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
        
        $__internal_aa4ac8835b833ff9077ad2712e4670aa99e698026b0c30302126fe13f8c9ba8f->leave($__internal_aa4ac8835b833ff9077ad2712e4670aa99e698026b0c30302126fe13f8c9ba8f_prof);

        
        $__internal_7ff778e530254c242937f9f5fb658f98ede9c6a691272116dfe0a37fe5458860->leave($__internal_7ff778e530254c242937f9f5fb658f98ede9c6a691272116dfe0a37fe5458860_prof);

    }

    // line 22
    public function block_num_pages($context, array $blocks = array())
    {
        $__internal_434a62ad972fecdf005789d7af7584ff6b073860b654dd694b4c5080d8b77b6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_434a62ad972fecdf005789d7af7584ff6b073860b654dd694b4c5080d8b77b6a->enter($__internal_434a62ad972fecdf005789d7af7584ff6b073860b654dd694b4c5080d8b77b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        $__internal_82ce0787b4e3b797e5c25a19871c1517a7727439d52a0b671389a84c6308ab60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82ce0787b4e3b797e5c25a19871c1517a7727439d52a0b671389a84c6308ab60->enter($__internal_82ce0787b4e3b797e5c25a19871c1517a7727439d52a0b671389a84c6308ab60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

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
        
        $__internal_82ce0787b4e3b797e5c25a19871c1517a7727439d52a0b671389a84c6308ab60->leave($__internal_82ce0787b4e3b797e5c25a19871c1517a7727439d52a0b671389a84c6308ab60_prof);

        
        $__internal_434a62ad972fecdf005789d7af7584ff6b073860b654dd694b4c5080d8b77b6a->leave($__internal_434a62ad972fecdf005789d7af7584ff6b073860b654dd694b4c5080d8b77b6a_prof);

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

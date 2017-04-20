<?php

/* SonataAdminBundle:Pager:base_results.html.twig */
class __TwigTemplate_b80850a0ae67223536859c2cf008a9a5a1fa1adc2e82e3c5cf2db6516cea4da8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'num_pages' => array($this, 'block_num_pages'),
            'num_results' => array($this, 'block_num_results'),
            'max_per_page' => array($this, 'block_max_per_page'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d4ceeb71752d76fc3ac19217e76dedea852adb774db0ebdb619b1b7b008cc62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d4ceeb71752d76fc3ac19217e76dedea852adb774db0ebdb619b1b7b008cc62->enter($__internal_7d4ceeb71752d76fc3ac19217e76dedea852adb774db0ebdb619b1b7b008cc62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:base_results.html.twig"));

        $__internal_6ac444dba7d99285752d8d38d744f888d04b1d783072711dbae6bf0c463a4e44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ac444dba7d99285752d8d38d744f888d04b1d783072711dbae6bf0c463a4e44->enter($__internal_6ac444dba7d99285752d8d38d744f888d04b1d783072711dbae6bf0c463a4e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:base_results.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('num_pages', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('num_results', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('max_per_page', $context, $blocks);
        
        $__internal_7d4ceeb71752d76fc3ac19217e76dedea852adb774db0ebdb619b1b7b008cc62->leave($__internal_7d4ceeb71752d76fc3ac19217e76dedea852adb774db0ebdb619b1b7b008cc62_prof);

        
        $__internal_6ac444dba7d99285752d8d38d744f888d04b1d783072711dbae6bf0c463a4e44->leave($__internal_6ac444dba7d99285752d8d38d744f888d04b1d783072711dbae6bf0c463a4e44_prof);

    }

    // line 12
    public function block_num_pages($context, array $blocks = array())
    {
        $__internal_215abe389bd9aa02f8203626691317067ed02797c5e443e89ee3792a3c4d4d34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_215abe389bd9aa02f8203626691317067ed02797c5e443e89ee3792a3c4d4d34->enter($__internal_215abe389bd9aa02f8203626691317067ed02797c5e443e89ee3792a3c4d4d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        $__internal_29b6902604095366e5a6cccf1c09d24775293e5d34088d52055c56499a98790e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29b6902604095366e5a6cccf1c09d24775293e5d34088d52055c56499a98790e->enter($__internal_29b6902604095366e5a6cccf1c09d24775293e5d34088d52055c56499a98790e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        // line 13
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 13, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "page", array()), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 13, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "lastpage", array()), "html", null, true);
        echo "
    &nbsp;-&nbsp;
";
        
        $__internal_29b6902604095366e5a6cccf1c09d24775293e5d34088d52055c56499a98790e->leave($__internal_29b6902604095366e5a6cccf1c09d24775293e5d34088d52055c56499a98790e_prof);

        
        $__internal_215abe389bd9aa02f8203626691317067ed02797c5e443e89ee3792a3c4d4d34->leave($__internal_215abe389bd9aa02f8203626691317067ed02797c5e443e89ee3792a3c4d4d34_prof);

    }

    // line 17
    public function block_num_results($context, array $blocks = array())
    {
        $__internal_0eba3fb0855add751aa0c1516a3eff559b4a36da21204f101ec261929d3b7d8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0eba3fb0855add751aa0c1516a3eff559b4a36da21204f101ec261929d3b7d8f->enter($__internal_0eba3fb0855add751aa0c1516a3eff559b4a36da21204f101ec261929d3b7d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        $__internal_7562fa38b1c5b654bbd78f0494ee21245cce289ad4d33155ba71836865dc6830 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7562fa38b1c5b654bbd78f0494ee21245cce289ad4d33155ba71836865dc6830->enter($__internal_7562fa38b1c5b654bbd78f0494ee21245cce289ad4d33155ba71836865dc6830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        // line 18
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("list_results_count", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 18, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "nbresults", array()), array("%count%" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 18, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "nbresults", array())), "SonataAdminBundle");
        // line 19
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_7562fa38b1c5b654bbd78f0494ee21245cce289ad4d33155ba71836865dc6830->leave($__internal_7562fa38b1c5b654bbd78f0494ee21245cce289ad4d33155ba71836865dc6830_prof);

        
        $__internal_0eba3fb0855add751aa0c1516a3eff559b4a36da21204f101ec261929d3b7d8f->leave($__internal_0eba3fb0855add751aa0c1516a3eff559b4a36da21204f101ec261929d3b7d8f_prof);

    }

    // line 22
    public function block_max_per_page($context, array $blocks = array())
    {
        $__internal_541d669fc389ca854164d2b519dc2c96cf434ce8e3f479c493b02d2ab04c6075 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_541d669fc389ca854164d2b519dc2c96cf434ce8e3f479c493b02d2ab04c6075->enter($__internal_541d669fc389ca854164d2b519dc2c96cf434ce8e3f479c493b02d2ab04c6075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "max_per_page"));

        $__internal_2a2229b8336b388917bcf13dbc62422692e9bf3a64cb078effe5bc79453fa397 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a2229b8336b388917bcf13dbc62422692e9bf3a64cb078effe5bc79453fa397->enter($__internal_2a2229b8336b388917bcf13dbc62422692e9bf3a64cb078effe5bc79453fa397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "max_per_page"));

        // line 23
        echo "    <label class=\"control-label\" for=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 23, $this->getSourceContext()); })()), "uniqid", array()), "html", null, true);
        echo "_per_page\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_per_page", array(), "SonataAdminBundle");
        echo "</label>
    <select class=\"per-page small form-control\" id=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 24, $this->getSourceContext()); })()), "uniqid", array()), "html", null, true);
        echo "_per_page\" style=\"width: auto\">
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 25, $this->getSourceContext()); })()), "getperpageoptions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["per_page"]) {
            // line 26
            echo "            <option ";
            if (($context["per_page"] == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 26, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "maxperpage", array()))) {
                echo "selected=\"selected\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 26, $this->getSourceContext()); })()), "generateUrl", array(0 => "list", 1 => array("filter" => twig_array_merge(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 26, $this->getSourceContext()); })()), "datagrid", array()), "values", array()), array("_page" => 1, "_per_page" => $context["per_page"])))), "method"), "html", null, true);
            echo "\">";
            // line 27
            echo twig_escape_filter($this->env, $context["per_page"], "html", null, true);
            // line 28
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['per_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </select>
";
        
        $__internal_2a2229b8336b388917bcf13dbc62422692e9bf3a64cb078effe5bc79453fa397->leave($__internal_2a2229b8336b388917bcf13dbc62422692e9bf3a64cb078effe5bc79453fa397_prof);

        
        $__internal_541d669fc389ca854164d2b519dc2c96cf434ce8e3f479c493b02d2ab04c6075->leave($__internal_541d669fc389ca854164d2b519dc2c96cf434ce8e3f479c493b02d2ab04c6075_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  140 => 30,  133 => 28,  131 => 27,  123 => 26,  119 => 25,  115 => 24,  108 => 23,  99 => 22,  88 => 19,  85 => 18,  76 => 17,  60 => 13,  51 => 12,  41 => 22,  38 => 21,  36 => 17,  33 => 16,  31 => 12,  28 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% block num_pages %}
    {{ admin.datagrid.pager.page }} / {{ admin.datagrid.pager.lastpage }}
    &nbsp;-&nbsp;
{% endblock %}

{% block num_results %}
    {% transchoice admin.datagrid.pager.nbresults with {'%count%': admin.datagrid.pager.nbresults} from 'SonataAdminBundle' %}list_results_count{% endtranschoice %}
    &nbsp;-&nbsp;
{% endblock %}

{% block max_per_page %}
    <label class=\"control-label\" for=\"{{ admin.uniqid }}_per_page\">{% trans from 'SonataAdminBundle' %}label_per_page{% endtrans %}</label>
    <select class=\"per-page small form-control\" id=\"{{ admin.uniqid }}_per_page\" style=\"width: auto\">
        {% for per_page in admin.getperpageoptions %}
            <option {% if per_page == admin.datagrid.pager.maxperpage %}selected=\"selected\"{% endif %} value=\"{{ admin.generateUrl('list', {'filter': admin.datagrid.values|merge({'_page': 1, '_per_page': per_page})}) }}\">
                {{- per_page -}}
            </option>
        {% endfor %}
    </select>
{% endblock %}
", "SonataAdminBundle:Pager:base_results.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/Pager/base_results.html.twig");
    }
}

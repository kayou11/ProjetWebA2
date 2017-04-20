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
        $__internal_6f6dbdd3d7deca67db4bf0502b7608d53e97656c9a56ac72b21dc433c8f93dc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f6dbdd3d7deca67db4bf0502b7608d53e97656c9a56ac72b21dc433c8f93dc1->enter($__internal_6f6dbdd3d7deca67db4bf0502b7608d53e97656c9a56ac72b21dc433c8f93dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:base_results.html.twig"));

        $__internal_3e3c6df53c7f9f43e0fd76ded7b400f62703790e48f31bebb9b90c2a6275ec6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e3c6df53c7f9f43e0fd76ded7b400f62703790e48f31bebb9b90c2a6275ec6d->enter($__internal_3e3c6df53c7f9f43e0fd76ded7b400f62703790e48f31bebb9b90c2a6275ec6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:base_results.html.twig"));

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
        
        $__internal_6f6dbdd3d7deca67db4bf0502b7608d53e97656c9a56ac72b21dc433c8f93dc1->leave($__internal_6f6dbdd3d7deca67db4bf0502b7608d53e97656c9a56ac72b21dc433c8f93dc1_prof);

        
        $__internal_3e3c6df53c7f9f43e0fd76ded7b400f62703790e48f31bebb9b90c2a6275ec6d->leave($__internal_3e3c6df53c7f9f43e0fd76ded7b400f62703790e48f31bebb9b90c2a6275ec6d_prof);

    }

    // line 12
    public function block_num_pages($context, array $blocks = array())
    {
        $__internal_5d2d5a7f3c2941179835b0a93075e0f73919a6c2aa416683f8168a04928404d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d2d5a7f3c2941179835b0a93075e0f73919a6c2aa416683f8168a04928404d0->enter($__internal_5d2d5a7f3c2941179835b0a93075e0f73919a6c2aa416683f8168a04928404d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        $__internal_62a468dc83b1b32407c7cdbd334d1e9070134fc8f538ea435a3b83a17ed9d8d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62a468dc83b1b32407c7cdbd334d1e9070134fc8f538ea435a3b83a17ed9d8d5->enter($__internal_62a468dc83b1b32407c7cdbd334d1e9070134fc8f538ea435a3b83a17ed9d8d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        // line 13
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 13, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "page", array()), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 13, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "lastpage", array()), "html", null, true);
        echo "
    &nbsp;-&nbsp;
";
        
        $__internal_62a468dc83b1b32407c7cdbd334d1e9070134fc8f538ea435a3b83a17ed9d8d5->leave($__internal_62a468dc83b1b32407c7cdbd334d1e9070134fc8f538ea435a3b83a17ed9d8d5_prof);

        
        $__internal_5d2d5a7f3c2941179835b0a93075e0f73919a6c2aa416683f8168a04928404d0->leave($__internal_5d2d5a7f3c2941179835b0a93075e0f73919a6c2aa416683f8168a04928404d0_prof);

    }

    // line 17
    public function block_num_results($context, array $blocks = array())
    {
        $__internal_03a019462805591b13460842d08f999d134f33de4d9def13b9cb65748e0b695c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03a019462805591b13460842d08f999d134f33de4d9def13b9cb65748e0b695c->enter($__internal_03a019462805591b13460842d08f999d134f33de4d9def13b9cb65748e0b695c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        $__internal_c25c23b2b837023d01153f8eca5799485bc31d201e5f253096ae7df5a573eed9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c25c23b2b837023d01153f8eca5799485bc31d201e5f253096ae7df5a573eed9->enter($__internal_c25c23b2b837023d01153f8eca5799485bc31d201e5f253096ae7df5a573eed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        // line 18
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("list_results_count", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 18, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "nbresults", array()), array("%count%" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 18, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "nbresults", array())), "SonataAdminBundle");
        // line 19
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_c25c23b2b837023d01153f8eca5799485bc31d201e5f253096ae7df5a573eed9->leave($__internal_c25c23b2b837023d01153f8eca5799485bc31d201e5f253096ae7df5a573eed9_prof);

        
        $__internal_03a019462805591b13460842d08f999d134f33de4d9def13b9cb65748e0b695c->leave($__internal_03a019462805591b13460842d08f999d134f33de4d9def13b9cb65748e0b695c_prof);

    }

    // line 22
    public function block_max_per_page($context, array $blocks = array())
    {
        $__internal_23743890a9f1e7979d689d81764f909cc3bf4d0f0c7b5cd98fb5806d439e00c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23743890a9f1e7979d689d81764f909cc3bf4d0f0c7b5cd98fb5806d439e00c5->enter($__internal_23743890a9f1e7979d689d81764f909cc3bf4d0f0c7b5cd98fb5806d439e00c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "max_per_page"));

        $__internal_be5e1ea34992e947aa97d4b13f05dd7ea7458c3966a5ae9544855dd66772746e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be5e1ea34992e947aa97d4b13f05dd7ea7458c3966a5ae9544855dd66772746e->enter($__internal_be5e1ea34992e947aa97d4b13f05dd7ea7458c3966a5ae9544855dd66772746e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "max_per_page"));

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
        
        $__internal_be5e1ea34992e947aa97d4b13f05dd7ea7458c3966a5ae9544855dd66772746e->leave($__internal_be5e1ea34992e947aa97d4b13f05dd7ea7458c3966a5ae9544855dd66772746e_prof);

        
        $__internal_23743890a9f1e7979d689d81764f909cc3bf4d0f0c7b5cd98fb5806d439e00c5->leave($__internal_23743890a9f1e7979d689d81764f909cc3bf4d0f0c7b5cd98fb5806d439e00c5_prof);

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

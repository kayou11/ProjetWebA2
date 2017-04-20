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
        $__internal_d8800d278fbcf84e60d998eeb900461167feafe562507d417cc708a63fb6e270 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8800d278fbcf84e60d998eeb900461167feafe562507d417cc708a63fb6e270->enter($__internal_d8800d278fbcf84e60d998eeb900461167feafe562507d417cc708a63fb6e270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:base_results.html.twig"));

        $__internal_891cc87c8f761b99a90ae82bba3950619dea41a6741bf31ce6a7ac5852251a18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_891cc87c8f761b99a90ae82bba3950619dea41a6741bf31ce6a7ac5852251a18->enter($__internal_891cc87c8f761b99a90ae82bba3950619dea41a6741bf31ce6a7ac5852251a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:base_results.html.twig"));

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
        
        $__internal_d8800d278fbcf84e60d998eeb900461167feafe562507d417cc708a63fb6e270->leave($__internal_d8800d278fbcf84e60d998eeb900461167feafe562507d417cc708a63fb6e270_prof);

        
        $__internal_891cc87c8f761b99a90ae82bba3950619dea41a6741bf31ce6a7ac5852251a18->leave($__internal_891cc87c8f761b99a90ae82bba3950619dea41a6741bf31ce6a7ac5852251a18_prof);

    }

    // line 12
    public function block_num_pages($context, array $blocks = array())
    {
        $__internal_be520acdb1b48c3e3977b2347f5704424f3ce9409029c2aff734c1d4182f891a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be520acdb1b48c3e3977b2347f5704424f3ce9409029c2aff734c1d4182f891a->enter($__internal_be520acdb1b48c3e3977b2347f5704424f3ce9409029c2aff734c1d4182f891a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        $__internal_cbd1ec59835402e2c5e7b010f047c345c77c82f3301d512333721b78ed0db06a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbd1ec59835402e2c5e7b010f047c345c77c82f3301d512333721b78ed0db06a->enter($__internal_cbd1ec59835402e2c5e7b010f047c345c77c82f3301d512333721b78ed0db06a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        // line 13
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 13, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "page", array()), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 13, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "lastpage", array()), "html", null, true);
        echo "
    &nbsp;-&nbsp;
";
        
        $__internal_cbd1ec59835402e2c5e7b010f047c345c77c82f3301d512333721b78ed0db06a->leave($__internal_cbd1ec59835402e2c5e7b010f047c345c77c82f3301d512333721b78ed0db06a_prof);

        
        $__internal_be520acdb1b48c3e3977b2347f5704424f3ce9409029c2aff734c1d4182f891a->leave($__internal_be520acdb1b48c3e3977b2347f5704424f3ce9409029c2aff734c1d4182f891a_prof);

    }

    // line 17
    public function block_num_results($context, array $blocks = array())
    {
        $__internal_b985f13dd0c307cea7fe4bd7f1bcacdd3d961e88b7f645456a8201d9ba5ca10f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b985f13dd0c307cea7fe4bd7f1bcacdd3d961e88b7f645456a8201d9ba5ca10f->enter($__internal_b985f13dd0c307cea7fe4bd7f1bcacdd3d961e88b7f645456a8201d9ba5ca10f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        $__internal_bfde62353ab34f799da92f11c83c12d1ff0c50e39c3065e56653d382aca28756 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfde62353ab34f799da92f11c83c12d1ff0c50e39c3065e56653d382aca28756->enter($__internal_bfde62353ab34f799da92f11c83c12d1ff0c50e39c3065e56653d382aca28756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        // line 18
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("list_results_count", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 18, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "nbresults", array()), array("%count%" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 18, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "nbresults", array())), "SonataAdminBundle");
        // line 19
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_bfde62353ab34f799da92f11c83c12d1ff0c50e39c3065e56653d382aca28756->leave($__internal_bfde62353ab34f799da92f11c83c12d1ff0c50e39c3065e56653d382aca28756_prof);

        
        $__internal_b985f13dd0c307cea7fe4bd7f1bcacdd3d961e88b7f645456a8201d9ba5ca10f->leave($__internal_b985f13dd0c307cea7fe4bd7f1bcacdd3d961e88b7f645456a8201d9ba5ca10f_prof);

    }

    // line 22
    public function block_max_per_page($context, array $blocks = array())
    {
        $__internal_6d4faddf22a27c00a036eb5dfe185478c32ca85e40a742517793dc21f3db82b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d4faddf22a27c00a036eb5dfe185478c32ca85e40a742517793dc21f3db82b5->enter($__internal_6d4faddf22a27c00a036eb5dfe185478c32ca85e40a742517793dc21f3db82b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "max_per_page"));

        $__internal_aeed13e100055b16e511e26c572bd27a039ad336e121bc41c508f042dc082e7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeed13e100055b16e511e26c572bd27a039ad336e121bc41c508f042dc082e7b->enter($__internal_aeed13e100055b16e511e26c572bd27a039ad336e121bc41c508f042dc082e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "max_per_page"));

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
        
        $__internal_aeed13e100055b16e511e26c572bd27a039ad336e121bc41c508f042dc082e7b->leave($__internal_aeed13e100055b16e511e26c572bd27a039ad336e121bc41c508f042dc082e7b_prof);

        
        $__internal_6d4faddf22a27c00a036eb5dfe185478c32ca85e40a742517793dc21f3db82b5->leave($__internal_6d4faddf22a27c00a036eb5dfe185478c32ca85e40a742517793dc21f3db82b5_prof);

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

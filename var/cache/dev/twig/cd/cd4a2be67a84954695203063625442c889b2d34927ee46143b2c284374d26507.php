<?php

/* SonataAdminBundle:Pager:base_results.html.twig */
class __TwigTemplate_0ffdf672cc5e6d195d6b70f05eb4ca5893a38b3f7ce6cd7355e06a6a48998de0 extends Twig_Template
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
        $__internal_031a802b0028b3b5aff8da2a86d2996595f6e4f05d003a3fc61e4c72c8f0835e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_031a802b0028b3b5aff8da2a86d2996595f6e4f05d003a3fc61e4c72c8f0835e->enter($__internal_031a802b0028b3b5aff8da2a86d2996595f6e4f05d003a3fc61e4c72c8f0835e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:base_results.html.twig"));

        $__internal_cd68230c973eaf9d9eee348e97095ab7f213b527930c2795bbad35139ba5bedc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd68230c973eaf9d9eee348e97095ab7f213b527930c2795bbad35139ba5bedc->enter($__internal_cd68230c973eaf9d9eee348e97095ab7f213b527930c2795bbad35139ba5bedc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:base_results.html.twig"));

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
        
        $__internal_031a802b0028b3b5aff8da2a86d2996595f6e4f05d003a3fc61e4c72c8f0835e->leave($__internal_031a802b0028b3b5aff8da2a86d2996595f6e4f05d003a3fc61e4c72c8f0835e_prof);

        
        $__internal_cd68230c973eaf9d9eee348e97095ab7f213b527930c2795bbad35139ba5bedc->leave($__internal_cd68230c973eaf9d9eee348e97095ab7f213b527930c2795bbad35139ba5bedc_prof);

    }

    // line 12
    public function block_num_pages($context, array $blocks = array())
    {
        $__internal_1efae58cfe2297551cb0fe444047111cb0d03b31f2cac223a99c6a6ef2a084d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1efae58cfe2297551cb0fe444047111cb0d03b31f2cac223a99c6a6ef2a084d6->enter($__internal_1efae58cfe2297551cb0fe444047111cb0d03b31f2cac223a99c6a6ef2a084d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        $__internal_7d769e4609f4919e339baffb408e147ff1df85f2f30f8f04ba0edebd146519dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d769e4609f4919e339baffb408e147ff1df85f2f30f8f04ba0edebd146519dd->enter($__internal_7d769e4609f4919e339baffb408e147ff1df85f2f30f8f04ba0edebd146519dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        // line 13
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 13, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "page", array()), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 13, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "lastpage", array()), "html", null, true);
        echo "
    &nbsp;-&nbsp;
";
        
        $__internal_7d769e4609f4919e339baffb408e147ff1df85f2f30f8f04ba0edebd146519dd->leave($__internal_7d769e4609f4919e339baffb408e147ff1df85f2f30f8f04ba0edebd146519dd_prof);

        
        $__internal_1efae58cfe2297551cb0fe444047111cb0d03b31f2cac223a99c6a6ef2a084d6->leave($__internal_1efae58cfe2297551cb0fe444047111cb0d03b31f2cac223a99c6a6ef2a084d6_prof);

    }

    // line 17
    public function block_num_results($context, array $blocks = array())
    {
        $__internal_b70428755bd78e90f6d4f244d41d60e53d9164194272cdbff509b043ab4f19ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b70428755bd78e90f6d4f244d41d60e53d9164194272cdbff509b043ab4f19ac->enter($__internal_b70428755bd78e90f6d4f244d41d60e53d9164194272cdbff509b043ab4f19ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        $__internal_852a2ea50e4cd41442f09f4d77391f9842e984726466cca3b51130de755a2414 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_852a2ea50e4cd41442f09f4d77391f9842e984726466cca3b51130de755a2414->enter($__internal_852a2ea50e4cd41442f09f4d77391f9842e984726466cca3b51130de755a2414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        // line 18
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("list_results_count", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 18, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "nbresults", array()), array("%count%" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 18, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "nbresults", array())), "SonataAdminBundle");
        // line 19
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_852a2ea50e4cd41442f09f4d77391f9842e984726466cca3b51130de755a2414->leave($__internal_852a2ea50e4cd41442f09f4d77391f9842e984726466cca3b51130de755a2414_prof);

        
        $__internal_b70428755bd78e90f6d4f244d41d60e53d9164194272cdbff509b043ab4f19ac->leave($__internal_b70428755bd78e90f6d4f244d41d60e53d9164194272cdbff509b043ab4f19ac_prof);

    }

    // line 22
    public function block_max_per_page($context, array $blocks = array())
    {
        $__internal_6706642abb48a7a2ed25786112b4165ff8c3db48bd580d43980d399fa6d7b101 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6706642abb48a7a2ed25786112b4165ff8c3db48bd580d43980d399fa6d7b101->enter($__internal_6706642abb48a7a2ed25786112b4165ff8c3db48bd580d43980d399fa6d7b101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "max_per_page"));

        $__internal_d46dd914906e774906478a19032160447ec2b580c24a2bebf23d7a8cead1bcb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d46dd914906e774906478a19032160447ec2b580c24a2bebf23d7a8cead1bcb3->enter($__internal_d46dd914906e774906478a19032160447ec2b580c24a2bebf23d7a8cead1bcb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "max_per_page"));

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
        
        $__internal_d46dd914906e774906478a19032160447ec2b580c24a2bebf23d7a8cead1bcb3->leave($__internal_d46dd914906e774906478a19032160447ec2b580c24a2bebf23d7a8cead1bcb3_prof);

        
        $__internal_6706642abb48a7a2ed25786112b4165ff8c3db48bd580d43980d399fa6d7b101->leave($__internal_6706642abb48a7a2ed25786112b4165ff8c3db48bd580d43980d399fa6d7b101_prof);

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

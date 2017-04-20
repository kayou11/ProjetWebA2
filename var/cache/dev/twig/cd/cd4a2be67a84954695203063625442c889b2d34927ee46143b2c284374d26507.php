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
        $__internal_f8c1866210ad66ec8e34fcea0d03706bf82a53f19061bdb0846ee6bb8f4714e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8c1866210ad66ec8e34fcea0d03706bf82a53f19061bdb0846ee6bb8f4714e0->enter($__internal_f8c1866210ad66ec8e34fcea0d03706bf82a53f19061bdb0846ee6bb8f4714e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:base_results.html.twig"));

        $__internal_f0742a360ae28d82b56ca0bbe09488797c459ffc02406fc068e77c3d9293111d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0742a360ae28d82b56ca0bbe09488797c459ffc02406fc068e77c3d9293111d->enter($__internal_f0742a360ae28d82b56ca0bbe09488797c459ffc02406fc068e77c3d9293111d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:base_results.html.twig"));

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
        
        $__internal_f8c1866210ad66ec8e34fcea0d03706bf82a53f19061bdb0846ee6bb8f4714e0->leave($__internal_f8c1866210ad66ec8e34fcea0d03706bf82a53f19061bdb0846ee6bb8f4714e0_prof);

        
        $__internal_f0742a360ae28d82b56ca0bbe09488797c459ffc02406fc068e77c3d9293111d->leave($__internal_f0742a360ae28d82b56ca0bbe09488797c459ffc02406fc068e77c3d9293111d_prof);

    }

    // line 12
    public function block_num_pages($context, array $blocks = array())
    {
        $__internal_cf98b3fd42e212f5bcab44e69afb5830f01a1d1fe10d72d45e5c53494e942dad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf98b3fd42e212f5bcab44e69afb5830f01a1d1fe10d72d45e5c53494e942dad->enter($__internal_cf98b3fd42e212f5bcab44e69afb5830f01a1d1fe10d72d45e5c53494e942dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        $__internal_04b018fc9c5c795992be2258d5ff37c514861364daba10381914550483dd9250 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04b018fc9c5c795992be2258d5ff37c514861364daba10381914550483dd9250->enter($__internal_04b018fc9c5c795992be2258d5ff37c514861364daba10381914550483dd9250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        // line 13
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 13, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "page", array()), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 13, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "lastpage", array()), "html", null, true);
        echo "
    &nbsp;-&nbsp;
";
        
        $__internal_04b018fc9c5c795992be2258d5ff37c514861364daba10381914550483dd9250->leave($__internal_04b018fc9c5c795992be2258d5ff37c514861364daba10381914550483dd9250_prof);

        
        $__internal_cf98b3fd42e212f5bcab44e69afb5830f01a1d1fe10d72d45e5c53494e942dad->leave($__internal_cf98b3fd42e212f5bcab44e69afb5830f01a1d1fe10d72d45e5c53494e942dad_prof);

    }

    // line 17
    public function block_num_results($context, array $blocks = array())
    {
        $__internal_210c51adb72fed6aefe009ea4040a218c49f5da2c774e6c1a6d66aab8e6c3fec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_210c51adb72fed6aefe009ea4040a218c49f5da2c774e6c1a6d66aab8e6c3fec->enter($__internal_210c51adb72fed6aefe009ea4040a218c49f5da2c774e6c1a6d66aab8e6c3fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        $__internal_af83b16c99f27f8edd0707bd4b4f327eadaf1cb803bce84e189a6e3814a91056 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af83b16c99f27f8edd0707bd4b4f327eadaf1cb803bce84e189a6e3814a91056->enter($__internal_af83b16c99f27f8edd0707bd4b4f327eadaf1cb803bce84e189a6e3814a91056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        // line 18
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("list_results_count", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 18, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "nbresults", array()), array("%count%" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 18, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "nbresults", array())), "SonataAdminBundle");
        // line 19
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_af83b16c99f27f8edd0707bd4b4f327eadaf1cb803bce84e189a6e3814a91056->leave($__internal_af83b16c99f27f8edd0707bd4b4f327eadaf1cb803bce84e189a6e3814a91056_prof);

        
        $__internal_210c51adb72fed6aefe009ea4040a218c49f5da2c774e6c1a6d66aab8e6c3fec->leave($__internal_210c51adb72fed6aefe009ea4040a218c49f5da2c774e6c1a6d66aab8e6c3fec_prof);

    }

    // line 22
    public function block_max_per_page($context, array $blocks = array())
    {
        $__internal_566083fdddbd53390660df704c7b070de7b3a59531fbc2402e539f5f1c2cd8e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_566083fdddbd53390660df704c7b070de7b3a59531fbc2402e539f5f1c2cd8e8->enter($__internal_566083fdddbd53390660df704c7b070de7b3a59531fbc2402e539f5f1c2cd8e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "max_per_page"));

        $__internal_38f09bbfb97114ac021aaabda652556bc5b46f753a3d296a04df8ed6f5e705fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38f09bbfb97114ac021aaabda652556bc5b46f753a3d296a04df8ed6f5e705fe->enter($__internal_38f09bbfb97114ac021aaabda652556bc5b46f753a3d296a04df8ed6f5e705fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "max_per_page"));

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
        
        $__internal_38f09bbfb97114ac021aaabda652556bc5b46f753a3d296a04df8ed6f5e705fe->leave($__internal_38f09bbfb97114ac021aaabda652556bc5b46f753a3d296a04df8ed6f5e705fe_prof);

        
        $__internal_566083fdddbd53390660df704c7b070de7b3a59531fbc2402e539f5f1c2cd8e8->leave($__internal_566083fdddbd53390660df704c7b070de7b3a59531fbc2402e539f5f1c2cd8e8_prof);

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

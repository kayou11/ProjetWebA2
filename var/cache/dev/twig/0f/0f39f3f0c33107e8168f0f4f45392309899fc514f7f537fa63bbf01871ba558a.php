<?php

/* SonataAdminBundle:CRUD:preview.html.twig */
class __TwigTemplate_65502d720b0e54fdf9e0589eb588110f559679fcb3b2815d957a58685ba25e3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:edit.html.twig", "SonataAdminBundle:CRUD:preview.html.twig", 12);
        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'formactions' => array($this, 'block_formactions'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_289959a2f71013d85f9eef5b4317faecfe3a7c333a9824bc60b0ad3b0c21f818 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_289959a2f71013d85f9eef5b4317faecfe3a7c333a9824bc60b0ad3b0c21f818->enter($__internal_289959a2f71013d85f9eef5b4317faecfe3a7c333a9824bc60b0ad3b0c21f818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:preview.html.twig"));

        $__internal_ad8de299121a8df2c59c0c4fac5f3416a01bfef0b29b0dde87f2776b26015a34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad8de299121a8df2c59c0c4fac5f3416a01bfef0b29b0dde87f2776b26015a34->enter($__internal_ad8de299121a8df2c59c0c4fac5f3416a01bfef0b29b0dde87f2776b26015a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:preview.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_289959a2f71013d85f9eef5b4317faecfe3a7c333a9824bc60b0ad3b0c21f818->leave($__internal_289959a2f71013d85f9eef5b4317faecfe3a7c333a9824bc60b0ad3b0c21f818_prof);

        
        $__internal_ad8de299121a8df2c59c0c4fac5f3416a01bfef0b29b0dde87f2776b26015a34->leave($__internal_ad8de299121a8df2c59c0c4fac5f3416a01bfef0b29b0dde87f2776b26015a34_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_803ee0088dbd42ef4cd7a3b0379e3c1b083de6f5fcfe917da063ee8c450e655b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_803ee0088dbd42ef4cd7a3b0379e3c1b083de6f5fcfe917da063ee8c450e655b->enter($__internal_803ee0088dbd42ef4cd7a3b0379e3c1b083de6f5fcfe917da063ee8c450e655b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_3e29151141ae66294467d78381ea1cdc0c310c4e9d08171c736cc9cea681dd03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e29151141ae66294467d78381ea1cdc0c310c4e9d08171c736cc9cea681dd03->enter($__internal_3e29151141ae66294467d78381ea1cdc0c310c4e9d08171c736cc9cea681dd03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        
        $__internal_3e29151141ae66294467d78381ea1cdc0c310c4e9d08171c736cc9cea681dd03->leave($__internal_3e29151141ae66294467d78381ea1cdc0c310c4e9d08171c736cc9cea681dd03_prof);

        
        $__internal_803ee0088dbd42ef4cd7a3b0379e3c1b083de6f5fcfe917da063ee8c450e655b->leave($__internal_803ee0088dbd42ef4cd7a3b0379e3c1b083de6f5fcfe917da063ee8c450e655b_prof);

    }

    // line 17
    public function block_side_menu($context, array $blocks = array())
    {
        $__internal_93232578e492350a23e3f0dad96a904b47a71c7b4723e16ad095b4b679c0f2b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93232578e492350a23e3f0dad96a904b47a71c7b4723e16ad095b4b679c0f2b4->enter($__internal_93232578e492350a23e3f0dad96a904b47a71c7b4723e16ad095b4b679c0f2b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_menu"));

        $__internal_2ab9b03fc37fd322e2629c464bbcd5a75b9dc0fa0168179762b140849d4f2cc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ab9b03fc37fd322e2629c464bbcd5a75b9dc0fa0168179762b140849d4f2cc6->enter($__internal_2ab9b03fc37fd322e2629c464bbcd5a75b9dc0fa0168179762b140849d4f2cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_menu"));

        
        $__internal_2ab9b03fc37fd322e2629c464bbcd5a75b9dc0fa0168179762b140849d4f2cc6->leave($__internal_2ab9b03fc37fd322e2629c464bbcd5a75b9dc0fa0168179762b140849d4f2cc6_prof);

        
        $__internal_93232578e492350a23e3f0dad96a904b47a71c7b4723e16ad095b4b679c0f2b4->leave($__internal_93232578e492350a23e3f0dad96a904b47a71c7b4723e16ad095b4b679c0f2b4_prof);

    }

    // line 20
    public function block_formactions($context, array $blocks = array())
    {
        $__internal_c25fb53b9e573ba346ab8790260f9efed71ce7cb6a5758d6c3acdcb165a99995 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c25fb53b9e573ba346ab8790260f9efed71ce7cb6a5758d6c3acdcb165a99995->enter($__internal_c25fb53b9e573ba346ab8790260f9efed71ce7cb6a5758d6c3acdcb165a99995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

        $__internal_1eae5cf71425682cb30fc842ac277ce0b57f926fe81cbc274cd085517e2a3db7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eae5cf71425682cb30fc842ac277ce0b57f926fe81cbc274cd085517e2a3db7->enter($__internal_1eae5cf71425682cb30fc842ac277ce0b57f926fe81cbc274cd085517e2a3db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

        // line 21
        echo "    <button class=\"btn btn-success\" type=\"submit\" name=\"btn_preview_approve\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_preview_approve", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
    <button class=\"btn btn-danger\" type=\"submit\" name=\"btn_preview_decline\">
        <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
        ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_preview_decline", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
";
        
        $__internal_1eae5cf71425682cb30fc842ac277ce0b57f926fe81cbc274cd085517e2a3db7->leave($__internal_1eae5cf71425682cb30fc842ac277ce0b57f926fe81cbc274cd085517e2a3db7_prof);

        
        $__internal_c25fb53b9e573ba346ab8790260f9efed71ce7cb6a5758d6c3acdcb165a99995->leave($__internal_c25fb53b9e573ba346ab8790260f9efed71ce7cb6a5758d6c3acdcb165a99995_prof);

    }

    // line 31
    public function block_preview($context, array $blocks = array())
    {
        $__internal_f55f91bc8cf17232424f3ca7e886dbc687a43a42366cf8d1d4741af013e928a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f55f91bc8cf17232424f3ca7e886dbc687a43a42366cf8d1d4741af013e928a1->enter($__internal_f55f91bc8cf17232424f3ca7e886dbc687a43a42366cf8d1d4741af013e928a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        $__internal_8a8dd9ca4790eb02b0a6e2186b091f789f87d07e0325d99c0dd748c308ffcc37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a8dd9ca4790eb02b0a6e2186b091f789f87d07e0325d99c0dd748c308ffcc37->enter($__internal_8a8dd9ca4790eb02b0a6e2186b091f789f87d07e0325d99c0dd748c308ffcc37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        // line 32
        echo "    <div class=\"sonata-ba-view\">
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 33, $this->getSourceContext()); })()), "showgroups", array()));
        foreach ($context['_seq'] as $context["name"] => $context["view_group"]) {
            // line 34
            echo "            <table class=\"table table-bordered\">
                ";
            // line 35
            if ($context["name"]) {
                // line 36
                echo "                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            ";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["name"], array(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 38, $this->getSourceContext()); })()), "translationdomain", array())), "html", null, true);
                echo "
                        </td>
                    </tr>
                ";
            }
            // line 42
            echo "
                ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["view_group"], "fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 44
                echo "                    <tr class=\"sonata-ba-view-container\">
                        ";
                // line 45
                if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "show", array(), "any", false, true), $context["field_name"], array(), "array", true, true)) {
                    // line 46
                    echo "                            ";
                    echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElement($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 46, $this->getSourceContext()); })()), "show", array()), $context["field_name"], array(), "array"), (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 46, $this->getSourceContext()); })()));
                    echo "
                        ";
                }
                // line 48
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "            </table>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['view_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    </div>
";
        
        $__internal_8a8dd9ca4790eb02b0a6e2186b091f789f87d07e0325d99c0dd748c308ffcc37->leave($__internal_8a8dd9ca4790eb02b0a6e2186b091f789f87d07e0325d99c0dd748c308ffcc37_prof);

        
        $__internal_f55f91bc8cf17232424f3ca7e886dbc687a43a42366cf8d1d4741af013e928a1->leave($__internal_f55f91bc8cf17232424f3ca7e886dbc687a43a42366cf8d1d4741af013e928a1_prof);

    }

    // line 55
    public function block_form($context, array $blocks = array())
    {
        $__internal_faac2ebc852aa391fd0812b2954d6160357ddeddcf2c43932d1542ca17cabef9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faac2ebc852aa391fd0812b2954d6160357ddeddcf2c43932d1542ca17cabef9->enter($__internal_faac2ebc852aa391fd0812b2954d6160357ddeddcf2c43932d1542ca17cabef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_11e409000398a9157655ea72d6165011ffc3367be6e6fcbbe143b0e654dda51d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11e409000398a9157655ea72d6165011ffc3367be6e6fcbbe143b0e654dda51d->enter($__internal_11e409000398a9157655ea72d6165011ffc3367be6e6fcbbe143b0e654dda51d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 56
        echo "    <div class=\"sonata-preview-form-container\">
        ";
        // line 57
        $this->displayParentBlock("form", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_11e409000398a9157655ea72d6165011ffc3367be6e6fcbbe143b0e654dda51d->leave($__internal_11e409000398a9157655ea72d6165011ffc3367be6e6fcbbe143b0e654dda51d_prof);

        
        $__internal_faac2ebc852aa391fd0812b2954d6160357ddeddcf2c43932d1542ca17cabef9->leave($__internal_faac2ebc852aa391fd0812b2954d6160357ddeddcf2c43932d1542ca17cabef9_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 57,  195 => 56,  186 => 55,  175 => 52,  168 => 50,  161 => 48,  155 => 46,  153 => 45,  150 => 44,  146 => 43,  143 => 42,  136 => 38,  132 => 36,  130 => 35,  127 => 34,  123 => 33,  120 => 32,  111 => 31,  98 => 27,  91 => 23,  87 => 21,  78 => 20,  61 => 17,  44 => 14,  11 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:edit.html.twig' %}

{% block actions %}
{% endblock %}

{% block side_menu %}
{% endblock %}

{% block formactions %}
    <button class=\"btn btn-success\" type=\"submit\" name=\"btn_preview_approve\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        {{ 'btn_preview_approve'|trans({}, 'SonataAdminBundle') }}
    </button>
    <button class=\"btn btn-danger\" type=\"submit\" name=\"btn_preview_decline\">
        <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
        {{ 'btn_preview_decline'|trans({}, 'SonataAdminBundle') }}
    </button>
{% endblock %}

{% block preview %}
    <div class=\"sonata-ba-view\">
        {% for name, view_group in admin.showgroups %}
            <table class=\"table table-bordered\">
                {% if name %}
                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            {{ name|trans({}, admin.translationdomain) }}
                        </td>
                    </tr>
                {% endif %}

                {% for field_name in view_group.fields %}
                    <tr class=\"sonata-ba-view-container\">
                        {% if admin.show[field_name] is defined %}
                            {{ admin.show[field_name]|render_view_element(object) }}
                        {% endif %}
                    </tr>
                {% endfor %}
            </table>
        {% endfor %}
    </div>
{% endblock %}

{% block form %}
    <div class=\"sonata-preview-form-container\">
        {{ parent() }}
    </div>
{% endblock %}
", "SonataAdminBundle:CRUD:preview.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/preview.html.twig");
    }
}

<?php

/* SonataAdminBundle:CRUD:preview.html.twig */
class __TwigTemplate_4bdcc3b89c1b6ff46721a5e32f9e88a6e9bc20cb453cc52b3b22f1f4fba364c5 extends Twig_Template
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
        $__internal_a53b78a3423f699d58bae294bb317e427080c8edb08bbf7947659c73b3e88571 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a53b78a3423f699d58bae294bb317e427080c8edb08bbf7947659c73b3e88571->enter($__internal_a53b78a3423f699d58bae294bb317e427080c8edb08bbf7947659c73b3e88571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:preview.html.twig"));

        $__internal_29c755b1f2ae3528205f46786d0ba31efa1c3e4f98361214d17d4fb07fd1d457 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29c755b1f2ae3528205f46786d0ba31efa1c3e4f98361214d17d4fb07fd1d457->enter($__internal_29c755b1f2ae3528205f46786d0ba31efa1c3e4f98361214d17d4fb07fd1d457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:preview.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a53b78a3423f699d58bae294bb317e427080c8edb08bbf7947659c73b3e88571->leave($__internal_a53b78a3423f699d58bae294bb317e427080c8edb08bbf7947659c73b3e88571_prof);

        
        $__internal_29c755b1f2ae3528205f46786d0ba31efa1c3e4f98361214d17d4fb07fd1d457->leave($__internal_29c755b1f2ae3528205f46786d0ba31efa1c3e4f98361214d17d4fb07fd1d457_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_4c7b3e16f730e502678f68873b49539590b31978eb8edcced855bc2ae2af7055 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c7b3e16f730e502678f68873b49539590b31978eb8edcced855bc2ae2af7055->enter($__internal_4c7b3e16f730e502678f68873b49539590b31978eb8edcced855bc2ae2af7055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_2ed0f1394a67f1ffea051ffe32490249f3b2334438cf029e277cf8081654a51c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ed0f1394a67f1ffea051ffe32490249f3b2334438cf029e277cf8081654a51c->enter($__internal_2ed0f1394a67f1ffea051ffe32490249f3b2334438cf029e277cf8081654a51c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        
        $__internal_2ed0f1394a67f1ffea051ffe32490249f3b2334438cf029e277cf8081654a51c->leave($__internal_2ed0f1394a67f1ffea051ffe32490249f3b2334438cf029e277cf8081654a51c_prof);

        
        $__internal_4c7b3e16f730e502678f68873b49539590b31978eb8edcced855bc2ae2af7055->leave($__internal_4c7b3e16f730e502678f68873b49539590b31978eb8edcced855bc2ae2af7055_prof);

    }

    // line 17
    public function block_side_menu($context, array $blocks = array())
    {
        $__internal_d96258a6dd258fa85657b19d31651757ae91832fff71efc8e49def5c6af70961 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d96258a6dd258fa85657b19d31651757ae91832fff71efc8e49def5c6af70961->enter($__internal_d96258a6dd258fa85657b19d31651757ae91832fff71efc8e49def5c6af70961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_menu"));

        $__internal_4c56a83da866bc4987599637c717639d6b69cd7e9c9c6a1423d01db97d3e7aea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c56a83da866bc4987599637c717639d6b69cd7e9c9c6a1423d01db97d3e7aea->enter($__internal_4c56a83da866bc4987599637c717639d6b69cd7e9c9c6a1423d01db97d3e7aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_menu"));

        
        $__internal_4c56a83da866bc4987599637c717639d6b69cd7e9c9c6a1423d01db97d3e7aea->leave($__internal_4c56a83da866bc4987599637c717639d6b69cd7e9c9c6a1423d01db97d3e7aea_prof);

        
        $__internal_d96258a6dd258fa85657b19d31651757ae91832fff71efc8e49def5c6af70961->leave($__internal_d96258a6dd258fa85657b19d31651757ae91832fff71efc8e49def5c6af70961_prof);

    }

    // line 20
    public function block_formactions($context, array $blocks = array())
    {
        $__internal_7e5a8d7caa087686f9bdc36da8c4a6fcf93b39d62377cc519a3470fb18a13697 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e5a8d7caa087686f9bdc36da8c4a6fcf93b39d62377cc519a3470fb18a13697->enter($__internal_7e5a8d7caa087686f9bdc36da8c4a6fcf93b39d62377cc519a3470fb18a13697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

        $__internal_01499f8cfa553f14fb81f32e9513e48547b51cca4f628ac687da7ac495dfa526 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01499f8cfa553f14fb81f32e9513e48547b51cca4f628ac687da7ac495dfa526->enter($__internal_01499f8cfa553f14fb81f32e9513e48547b51cca4f628ac687da7ac495dfa526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

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
        
        $__internal_01499f8cfa553f14fb81f32e9513e48547b51cca4f628ac687da7ac495dfa526->leave($__internal_01499f8cfa553f14fb81f32e9513e48547b51cca4f628ac687da7ac495dfa526_prof);

        
        $__internal_7e5a8d7caa087686f9bdc36da8c4a6fcf93b39d62377cc519a3470fb18a13697->leave($__internal_7e5a8d7caa087686f9bdc36da8c4a6fcf93b39d62377cc519a3470fb18a13697_prof);

    }

    // line 31
    public function block_preview($context, array $blocks = array())
    {
        $__internal_58687b8d8d452efd2accc0f2caf0add9e78b635dcbf2a3c418f9f204403c4c5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58687b8d8d452efd2accc0f2caf0add9e78b635dcbf2a3c418f9f204403c4c5c->enter($__internal_58687b8d8d452efd2accc0f2caf0add9e78b635dcbf2a3c418f9f204403c4c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        $__internal_f9430f92b33aad0ed6fb7a953c841be4444118611e72b46437e44d4923134bc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9430f92b33aad0ed6fb7a953c841be4444118611e72b46437e44d4923134bc9->enter($__internal_f9430f92b33aad0ed6fb7a953c841be4444118611e72b46437e44d4923134bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

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
        
        $__internal_f9430f92b33aad0ed6fb7a953c841be4444118611e72b46437e44d4923134bc9->leave($__internal_f9430f92b33aad0ed6fb7a953c841be4444118611e72b46437e44d4923134bc9_prof);

        
        $__internal_58687b8d8d452efd2accc0f2caf0add9e78b635dcbf2a3c418f9f204403c4c5c->leave($__internal_58687b8d8d452efd2accc0f2caf0add9e78b635dcbf2a3c418f9f204403c4c5c_prof);

    }

    // line 55
    public function block_form($context, array $blocks = array())
    {
        $__internal_ecf4f6cbef7761a01afeb08a1a9f99b9307eaf08af02fb13af2a78c9643a18df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecf4f6cbef7761a01afeb08a1a9f99b9307eaf08af02fb13af2a78c9643a18df->enter($__internal_ecf4f6cbef7761a01afeb08a1a9f99b9307eaf08af02fb13af2a78c9643a18df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_a8525ceada501d52eb69f447ceb5fb190d3a15bfecbbc9b30a6d22e3f239c963 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8525ceada501d52eb69f447ceb5fb190d3a15bfecbbc9b30a6d22e3f239c963->enter($__internal_a8525ceada501d52eb69f447ceb5fb190d3a15bfecbbc9b30a6d22e3f239c963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 56
        echo "    <div class=\"sonata-preview-form-container\">
        ";
        // line 57
        $this->displayParentBlock("form", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_a8525ceada501d52eb69f447ceb5fb190d3a15bfecbbc9b30a6d22e3f239c963->leave($__internal_a8525ceada501d52eb69f447ceb5fb190d3a15bfecbbc9b30a6d22e3f239c963_prof);

        
        $__internal_ecf4f6cbef7761a01afeb08a1a9f99b9307eaf08af02fb13af2a78c9643a18df->leave($__internal_ecf4f6cbef7761a01afeb08a1a9f99b9307eaf08af02fb13af2a78c9643a18df_prof);

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

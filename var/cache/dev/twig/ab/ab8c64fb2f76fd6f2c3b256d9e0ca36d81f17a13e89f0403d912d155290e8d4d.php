<?php

/* SonataAdminBundle:CRUD:select_subclass.html.twig */
class __TwigTemplate_7a9b59c3d0ab4c9a7f78c359481ac5e0f253c8df3f8cc825fc12f3da64080700 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 11, $this->getSourceContext()); })()), "SonataAdminBundle:CRUD:select_subclass.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b3602f8be0c9ce1043f82370567c289667e42e2ef9c694b5f417cc72d036357d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3602f8be0c9ce1043f82370567c289667e42e2ef9c694b5f417cc72d036357d->enter($__internal_b3602f8be0c9ce1043f82370567c289667e42e2ef9c694b5f417cc72d036357d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:select_subclass.html.twig"));

        $__internal_d07ae5c7da70c89f01efa176d77cf3f7ae020b8bfab39c57d3f8fd13c2030c57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d07ae5c7da70c89f01efa176d77cf3f7ae020b8bfab39c57d3f8fd13c2030c57->enter($__internal_d07ae5c7da70c89f01efa176d77cf3f7ae020b8bfab39c57d3f8fd13c2030c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:select_subclass.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3602f8be0c9ce1043f82370567c289667e42e2ef9c694b5f417cc72d036357d->leave($__internal_b3602f8be0c9ce1043f82370567c289667e42e2ef9c694b5f417cc72d036357d_prof);

        
        $__internal_d07ae5c7da70c89f01efa176d77cf3f7ae020b8bfab39c57d3f8fd13c2030c57->leave($__internal_d07ae5c7da70c89f01efa176d77cf3f7ae020b8bfab39c57d3f8fd13c2030c57_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_510e9a6afc3f04cfd596e74905d8ae00beb53d4c2d168083ef2271d1ce7a4a7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_510e9a6afc3f04cfd596e74905d8ae00beb53d4c2d168083ef2271d1ce7a4a7a->enter($__internal_510e9a6afc3f04cfd596e74905d8ae00beb53d4c2d168083ef2271d1ce7a4a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_512fb456afae8fa046764ff262cdc8169b723d096246f0cb40697c57777767e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_512fb456afae8fa046764ff262cdc8169b723d096246f0cb40697c57777767e0->enter($__internal_512fb456afae8fa046764ff262cdc8169b723d096246f0cb40697c57777767e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_select_subclass", array(), "SonataAdminBundle"), "html", null, true);
        
        $__internal_512fb456afae8fa046764ff262cdc8169b723d096246f0cb40697c57777767e0->leave($__internal_512fb456afae8fa046764ff262cdc8169b723d096246f0cb40697c57777767e0_prof);

        
        $__internal_510e9a6afc3f04cfd596e74905d8ae00beb53d4c2d168083ef2271d1ce7a4a7a->leave($__internal_510e9a6afc3f04cfd596e74905d8ae00beb53d4c2d168083ef2271d1ce7a4a7a_prof);

    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        $__internal_0e224a92e4efe47867ff638bbd5339ca0070fa31f0c4b17d0108abe84f609618 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e224a92e4efe47867ff638bbd5339ca0070fa31f0c4b17d0108abe84f609618->enter($__internal_0e224a92e4efe47867ff638bbd5339ca0070fa31f0c4b17d0108abe84f609618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_b23262778c114ee1fe00b3710bf4dd8983b26bb3cf63a89ffd37eec58803b2f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b23262778c114ee1fe00b3710bf4dd8983b26bb3cf63a89ffd37eec58803b2f1->enter($__internal_b23262778c114ee1fe00b3710bf4dd8983b26bb3cf63a89ffd37eec58803b2f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 16
        echo "    <div class=\"box box-success\">
        <div class=\"box-header\">
            <h3 class=\"box-title\">
                ";
        // line 19
        $this->displayBlock("title", $context, $blocks);
        echo "
            </h3>
        </div>
        <div class=\"box-body\">
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 23, $this->getSourceContext()); })()), "subclasses", array())));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["subclass"]) {
            // line 24
            echo "                <div class=\"col-lg-2 col-md-3 col-sm-4 col-xs-6\">
                    <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 25, $this->getSourceContext()); })()), "generateUrl", array(0 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 25, $this->getSourceContext()); })()), 1 => array("subclass" => $context["subclass"])), "method"), "html", null, true);
            echo "\"
                       class=\"btn btn-app btn-block\"
                            >
                        <i class=\"fa fa-plus-square\" aria-hidden=\"true\"></i>
                        ";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["subclass"], array(), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "translationdomain", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "translationdomain", array()), "SonataAdminBundle")) : ("SonataAdminBundle"))), "html", null, true);
            echo "
                    </a>
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 33
            echo "                <span class=\"alert alert-info\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("no_subclass_available", array(), "SonataAdminBundle"), "html", null, true);
            echo "</span>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subclass'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "            <div class=\"clearfix\"></div>
        </div>
    </div>
";
        
        $__internal_b23262778c114ee1fe00b3710bf4dd8983b26bb3cf63a89ffd37eec58803b2f1->leave($__internal_b23262778c114ee1fe00b3710bf4dd8983b26bb3cf63a89ffd37eec58803b2f1_prof);

        
        $__internal_0e224a92e4efe47867ff638bbd5339ca0070fa31f0c4b17d0108abe84f609618->leave($__internal_0e224a92e4efe47867ff638bbd5339ca0070fa31f0c4b17d0108abe84f609618_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:select_subclass.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 35,  103 => 33,  94 => 29,  87 => 25,  84 => 24,  79 => 23,  72 => 19,  67 => 16,  58 => 15,  40 => 13,  19 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
{% extends base_template %}

{% block title %}{{ 'title_select_subclass'|trans({}, 'SonataAdminBundle') }}{% endblock %}

{% block content %}
    <div class=\"box box-success\">
        <div class=\"box-header\">
            <h3 class=\"box-title\">
                {{ block('title') }}
            </h3>
        </div>
        <div class=\"box-body\">
            {% for subclass in admin.subclasses|keys %}
                <div class=\"col-lg-2 col-md-3 col-sm-4 col-xs-6\">
                    <a href=\"{{ admin.generateUrl(action, {'subclass': subclass }) }}\"
                       class=\"btn btn-app btn-block\"
                            >
                        <i class=\"fa fa-plus-square\" aria-hidden=\"true\"></i>
                        {{ subclass|trans({}, admin.translationdomain|default('SonataAdminBundle')) }}
                    </a>
                </div>
            {% else %}
                <span class=\"alert alert-info\">{{ 'no_subclass_available'|trans({}, 'SonataAdminBundle') }}</span>
            {% endfor %}
            <div class=\"clearfix\"></div>
        </div>
    </div>
{% endblock %}
", "SonataAdminBundle:CRUD:select_subclass.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/select_subclass.html.twig");
    }
}

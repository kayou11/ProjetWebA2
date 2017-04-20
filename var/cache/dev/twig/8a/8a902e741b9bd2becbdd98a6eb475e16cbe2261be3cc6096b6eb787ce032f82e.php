<?php

/* SonataAdminBundle:CRUD:select_subclass.html.twig */
class __TwigTemplate_7461090a5999720538ce849b0b0bd2ed613c113cb1834516bf4ae0da43ee512d extends Twig_Template
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
        $__internal_21d5e143a702266f5b9148ee82cb48b0d1bf715d062aaae2434256cfc25daf09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21d5e143a702266f5b9148ee82cb48b0d1bf715d062aaae2434256cfc25daf09->enter($__internal_21d5e143a702266f5b9148ee82cb48b0d1bf715d062aaae2434256cfc25daf09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:select_subclass.html.twig"));

        $__internal_55b00614d9ee7258eb70e6f55576227de3b5c2e42c68b14aacdeaedb5017f71b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55b00614d9ee7258eb70e6f55576227de3b5c2e42c68b14aacdeaedb5017f71b->enter($__internal_55b00614d9ee7258eb70e6f55576227de3b5c2e42c68b14aacdeaedb5017f71b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:select_subclass.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21d5e143a702266f5b9148ee82cb48b0d1bf715d062aaae2434256cfc25daf09->leave($__internal_21d5e143a702266f5b9148ee82cb48b0d1bf715d062aaae2434256cfc25daf09_prof);

        
        $__internal_55b00614d9ee7258eb70e6f55576227de3b5c2e42c68b14aacdeaedb5017f71b->leave($__internal_55b00614d9ee7258eb70e6f55576227de3b5c2e42c68b14aacdeaedb5017f71b_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_52b0c00ff7bb173f4a597efda8dca8183afd1f2fbe29999b9bfa8e7619bbae81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52b0c00ff7bb173f4a597efda8dca8183afd1f2fbe29999b9bfa8e7619bbae81->enter($__internal_52b0c00ff7bb173f4a597efda8dca8183afd1f2fbe29999b9bfa8e7619bbae81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_05c012279831f2ffcca9d022a6d085bebb4d38caf78be768b1ecd60c3d135d6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05c012279831f2ffcca9d022a6d085bebb4d38caf78be768b1ecd60c3d135d6e->enter($__internal_05c012279831f2ffcca9d022a6d085bebb4d38caf78be768b1ecd60c3d135d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_select_subclass", array(), "SonataAdminBundle"), "html", null, true);
        
        $__internal_05c012279831f2ffcca9d022a6d085bebb4d38caf78be768b1ecd60c3d135d6e->leave($__internal_05c012279831f2ffcca9d022a6d085bebb4d38caf78be768b1ecd60c3d135d6e_prof);

        
        $__internal_52b0c00ff7bb173f4a597efda8dca8183afd1f2fbe29999b9bfa8e7619bbae81->leave($__internal_52b0c00ff7bb173f4a597efda8dca8183afd1f2fbe29999b9bfa8e7619bbae81_prof);

    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        $__internal_8cc7d1c33761a81f4d194008c9b50809be4fd68c51c9e5113439da75484cfc68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cc7d1c33761a81f4d194008c9b50809be4fd68c51c9e5113439da75484cfc68->enter($__internal_8cc7d1c33761a81f4d194008c9b50809be4fd68c51c9e5113439da75484cfc68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_be837146f10245a43a9b03f650374e098935e50073623913e10f837f2125915e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be837146f10245a43a9b03f650374e098935e50073623913e10f837f2125915e->enter($__internal_be837146f10245a43a9b03f650374e098935e50073623913e10f837f2125915e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_be837146f10245a43a9b03f650374e098935e50073623913e10f837f2125915e->leave($__internal_be837146f10245a43a9b03f650374e098935e50073623913e10f837f2125915e_prof);

        
        $__internal_8cc7d1c33761a81f4d194008c9b50809be4fd68c51c9e5113439da75484cfc68->leave($__internal_8cc7d1c33761a81f4d194008c9b50809be4fd68c51c9e5113439da75484cfc68_prof);

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

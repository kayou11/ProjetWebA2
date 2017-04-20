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
        $__internal_5aec2390ebc8ea264e1fc215958cead99d5cbc33da92137d47e0082136f31872 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5aec2390ebc8ea264e1fc215958cead99d5cbc33da92137d47e0082136f31872->enter($__internal_5aec2390ebc8ea264e1fc215958cead99d5cbc33da92137d47e0082136f31872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:select_subclass.html.twig"));

        $__internal_4e3c27df0878f3c218e645947970b8ee4fbae2ee099752e08d322c4736a907bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e3c27df0878f3c218e645947970b8ee4fbae2ee099752e08d322c4736a907bb->enter($__internal_4e3c27df0878f3c218e645947970b8ee4fbae2ee099752e08d322c4736a907bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:select_subclass.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5aec2390ebc8ea264e1fc215958cead99d5cbc33da92137d47e0082136f31872->leave($__internal_5aec2390ebc8ea264e1fc215958cead99d5cbc33da92137d47e0082136f31872_prof);

        
        $__internal_4e3c27df0878f3c218e645947970b8ee4fbae2ee099752e08d322c4736a907bb->leave($__internal_4e3c27df0878f3c218e645947970b8ee4fbae2ee099752e08d322c4736a907bb_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_c40a9099449ecded79d7aeec150e58c2f46827812e6def0401bab4ef2e9fd2bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c40a9099449ecded79d7aeec150e58c2f46827812e6def0401bab4ef2e9fd2bd->enter($__internal_c40a9099449ecded79d7aeec150e58c2f46827812e6def0401bab4ef2e9fd2bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_582c4c5834e8fc84b691d22ea64dc370fac4d2b3e9bba493bdf1f7e2f64b39f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_582c4c5834e8fc84b691d22ea64dc370fac4d2b3e9bba493bdf1f7e2f64b39f4->enter($__internal_582c4c5834e8fc84b691d22ea64dc370fac4d2b3e9bba493bdf1f7e2f64b39f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_select_subclass", array(), "SonataAdminBundle"), "html", null, true);
        
        $__internal_582c4c5834e8fc84b691d22ea64dc370fac4d2b3e9bba493bdf1f7e2f64b39f4->leave($__internal_582c4c5834e8fc84b691d22ea64dc370fac4d2b3e9bba493bdf1f7e2f64b39f4_prof);

        
        $__internal_c40a9099449ecded79d7aeec150e58c2f46827812e6def0401bab4ef2e9fd2bd->leave($__internal_c40a9099449ecded79d7aeec150e58c2f46827812e6def0401bab4ef2e9fd2bd_prof);

    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        $__internal_83586f488a23cc869a4a5b1f91889fb9308e75eec1add295bc35aa2e833ed677 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83586f488a23cc869a4a5b1f91889fb9308e75eec1add295bc35aa2e833ed677->enter($__internal_83586f488a23cc869a4a5b1f91889fb9308e75eec1add295bc35aa2e833ed677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_fcac73c95261b16b0446f25b6994b9af30083541c45863c58ed28729faac9b9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcac73c95261b16b0446f25b6994b9af30083541c45863c58ed28729faac9b9c->enter($__internal_fcac73c95261b16b0446f25b6994b9af30083541c45863c58ed28729faac9b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_fcac73c95261b16b0446f25b6994b9af30083541c45863c58ed28729faac9b9c->leave($__internal_fcac73c95261b16b0446f25b6994b9af30083541c45863c58ed28729faac9b9c_prof);

        
        $__internal_83586f488a23cc869a4a5b1f91889fb9308e75eec1add295bc35aa2e833ed677->leave($__internal_83586f488a23cc869a4a5b1f91889fb9308e75eec1add295bc35aa2e833ed677_prof);

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

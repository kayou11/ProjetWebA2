<?php

/* SonataAdminBundle:CRUD:delete.html.twig */
class __TwigTemplate_003342874d3333cacd7e5981b21fde55a6756c9aaab878278bc2d0a4ccd205a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 12, $this->getSourceContext()); })()), "SonataAdminBundle:CRUD:delete.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b3e8cae9a8bbdf290c62a273b9e5d2fd2ce2be6c18832b5abca1b0b58400f0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b3e8cae9a8bbdf290c62a273b9e5d2fd2ce2be6c18832b5abca1b0b58400f0a->enter($__internal_2b3e8cae9a8bbdf290c62a273b9e5d2fd2ce2be6c18832b5abca1b0b58400f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:delete.html.twig"));

        $__internal_5a5b9fc76871aa6c3d0d0853f6a2ba6445eaf141beef98e05c8527b16782e2dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a5b9fc76871aa6c3d0d0853f6a2ba6445eaf141beef98e05c8527b16782e2dd->enter($__internal_5a5b9fc76871aa6c3d0d0853f6a2ba6445eaf141beef98e05c8527b16782e2dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:delete.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b3e8cae9a8bbdf290c62a273b9e5d2fd2ce2be6c18832b5abca1b0b58400f0a->leave($__internal_2b3e8cae9a8bbdf290c62a273b9e5d2fd2ce2be6c18832b5abca1b0b58400f0a_prof);

        
        $__internal_5a5b9fc76871aa6c3d0d0853f6a2ba6445eaf141beef98e05c8527b16782e2dd->leave($__internal_5a5b9fc76871aa6c3d0d0853f6a2ba6445eaf141beef98e05c8527b16782e2dd_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_52c14b275f223f8773ca8baf9951769d8007a0ca84e4bf7f060a62e4eeae65c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52c14b275f223f8773ca8baf9951769d8007a0ca84e4bf7f060a62e4eeae65c3->enter($__internal_52c14b275f223f8773ca8baf9951769d8007a0ca84e4bf7f060a62e4eeae65c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_a9250808e81519fa185dac34767fa301d15899a033d89040a77d41103802ee72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9250808e81519fa185dac34767fa301d15899a033d89040a77d41103802ee72->enter($__internal_a9250808e81519fa185dac34767fa301d15899a033d89040a77d41103802ee72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:delete.html.twig", 15)->display($context);
        
        $__internal_a9250808e81519fa185dac34767fa301d15899a033d89040a77d41103802ee72->leave($__internal_a9250808e81519fa185dac34767fa301d15899a033d89040a77d41103802ee72_prof);

        
        $__internal_52c14b275f223f8773ca8baf9951769d8007a0ca84e4bf7f060a62e4eeae65c3->leave($__internal_52c14b275f223f8773ca8baf9951769d8007a0ca84e4bf7f060a62e4eeae65c3_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_28eb169633fdfdd1a479c96edcbf515cb8725fac906ef56c8d30feb5d50473ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28eb169633fdfdd1a479c96edcbf515cb8725fac906ef56c8d30feb5d50473ba->enter($__internal_28eb169633fdfdd1a479c96edcbf515cb8725fac906ef56c8d30feb5d50473ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_345755e744291c0db13cb71237193eb0407dcee54a438b2d7b23d167c5003b8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_345755e744291c0db13cb71237193eb0407dcee54a438b2d7b23d167c5003b8c->enter($__internal_345755e744291c0db13cb71237193eb0407dcee54a438b2d7b23d167c5003b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 18, $this->getSourceContext()); })()), "sidemenu", array(0 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 18, $this->getSourceContext()); })())), "method"), array("currentClass" => "active", "template" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 18, $this->getSourceContext()); })()), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_345755e744291c0db13cb71237193eb0407dcee54a438b2d7b23d167c5003b8c->leave($__internal_345755e744291c0db13cb71237193eb0407dcee54a438b2d7b23d167c5003b8c_prof);

        
        $__internal_28eb169633fdfdd1a479c96edcbf515cb8725fac906ef56c8d30feb5d50473ba->leave($__internal_28eb169633fdfdd1a479c96edcbf515cb8725fac906ef56c8d30feb5d50473ba_prof);

    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        $__internal_44d60ec8f35af84f3b3785f7d566b942736c4961df4b30449c6681606b8d154c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44d60ec8f35af84f3b3785f7d566b942736c4961df4b30449c6681606b8d154c->enter($__internal_44d60ec8f35af84f3b3785f7d566b942736c4961df4b30449c6681606b8d154c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_9b0122b6e4e367f78022a40376d299672a46b709cc30abcbd3a66638d6888dc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b0122b6e4e367f78022a40376d299672a46b709cc30abcbd3a66638d6888dc0->enter($__internal_9b0122b6e4e367f78022a40376d299672a46b709cc30abcbd3a66638d6888dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 21
        echo "    <div class=\"sonata-ba-delete\">

        <div class=\"box box-danger\">
            <div class=\"box-header\">
                <h3 class=\"box-title\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_delete", array(), "SonataAdminBundle"), "html", null, true);
        echo "</h3>
            </div>
            <div class=\"box-body\">
                ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("message_delete_confirmation", array("%object%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 28, $this->getSourceContext()); })()), "toString", array(0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 28, $this->getSourceContext()); })())), "method")), "SonataAdminBundle"), "html", null, true);
        echo "
            </div>
            <div class=\"box-footer clearfix\">
                <form method=\"POST\" action=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 31, $this->getSourceContext()); })()), "generateObjectUrl", array(0 => "delete", 1 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 31, $this->getSourceContext()); })())), "method"), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                    <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 33, $this->getSourceContext()); })()), "html", null, true);
        echo "\">

                    <button type=\"submit\" class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i> ";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_delete", array(), "SonataAdminBundle"), "html", null, true);
        echo "</button>
                    ";
        // line 36
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 36, $this->getSourceContext()); })()), "hasRoute", array(0 => "edit"), "method") && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 36, $this->getSourceContext()); })()), "hasAccess", array(0 => "edit", 1 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 36, $this->getSourceContext()); })())), "method"))) {
            // line 37
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
            echo "

                        <a class=\"btn btn-success\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 39, $this->getSourceContext()); })()), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 39, $this->getSourceContext()); })())), "method"), "html", null, true);
            echo "\">
                            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                            ";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_edit", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
                    ";
        }
        // line 43
        echo "                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_9b0122b6e4e367f78022a40376d299672a46b709cc30abcbd3a66638d6888dc0->leave($__internal_9b0122b6e4e367f78022a40376d299672a46b709cc30abcbd3a66638d6888dc0_prof);

        
        $__internal_44d60ec8f35af84f3b3785f7d566b942736c4961df4b30449c6681606b8d154c->leave($__internal_44d60ec8f35af84f3b3785f7d566b942736c4961df4b30449c6681606b8d154c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 43,  132 => 41,  127 => 39,  121 => 37,  119 => 36,  115 => 35,  110 => 33,  105 => 31,  99 => 28,  93 => 25,  87 => 21,  78 => 20,  60 => 18,  50 => 15,  41 => 14,  20 => 12,);
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

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}

{% block content %}
    <div class=\"sonata-ba-delete\">

        <div class=\"box box-danger\">
            <div class=\"box-header\">
                <h3 class=\"box-title\">{{ 'title_delete'|trans({}, 'SonataAdminBundle') }}</h3>
            </div>
            <div class=\"box-body\">
                {{ 'message_delete_confirmation'|trans({'%object%': admin.toString(object)}, 'SonataAdminBundle') }}
            </div>
            <div class=\"box-footer clearfix\">
                <form method=\"POST\" action=\"{{ admin.generateObjectUrl('delete', object) }}\">
                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                    <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"{{ csrf_token }}\">

                    <button type=\"submit\" class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i> {{ 'btn_delete'|trans({}, 'SonataAdminBundle') }}</button>
                    {% if admin.hasRoute('edit') and admin.hasAccess('edit', object) %}
                        {{ 'delete_or'|trans({}, 'SonataAdminBundle') }}

                        <a class=\"btn btn-success\" href=\"{{ admin.generateObjectUrl('edit', object) }}\">
                            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                            {{ 'link_action_edit'|trans({}, 'SonataAdminBundle') }}</a>
                    {% endif %}
                </form>
            </div>
        </div>
    </div>
{% endblock %}
", "SonataAdminBundle:CRUD:delete.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/delete.html.twig");
    }
}

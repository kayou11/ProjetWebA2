<?php

/* SonataAdminBundle:CRUD:base_edit_form_macro.html.twig */
class __TwigTemplate_58a6c2736e455edaf0903b78b508eb21786cfc48ad2b43849f63b7e8a15af3ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d2221b166cca6b55c0689c0646335bb28ffaac8768f578336e03f58efbb0594c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2221b166cca6b55c0689c0646335bb28ffaac8768f578336e03f58efbb0594c->enter($__internal_d2221b166cca6b55c0689c0646335bb28ffaac8768f578336e03f58efbb0594c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit_form_macro.html.twig"));

        $__internal_64ad9ab8b01813b65b09c28f8b3a3c7fd31c8f355c6a5d0ab41027ed4c78afe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64ad9ab8b01813b65b09c28f8b3a3c7fd31c8f355c6a5d0ab41027ed4c78afe3->enter($__internal_64ad9ab8b01813b65b09c28f8b3a3c7fd31c8f355c6a5d0ab41027ed4c78afe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit_form_macro.html.twig"));

        
        $__internal_d2221b166cca6b55c0689c0646335bb28ffaac8768f578336e03f58efbb0594c->leave($__internal_d2221b166cca6b55c0689c0646335bb28ffaac8768f578336e03f58efbb0594c_prof);

        
        $__internal_64ad9ab8b01813b65b09c28f8b3a3c7fd31c8f355c6a5d0ab41027ed4c78afe3->leave($__internal_64ad9ab8b01813b65b09c28f8b3a3c7fd31c8f355c6a5d0ab41027ed4c78afe3_prof);

    }

    // line 1
    public function macro_render_groups($__admin__ = null, $__form__ = null, $__groups__ = null, $__has_tab__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "admin" => $__admin__,
            "form" => $__form__,
            "groups" => $__groups__,
            "has_tab" => $__has_tab__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_c37ed301be8ed2b5a5666e74b575428b3a1bf49d56c3afcf1c53a251c0c96cde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_c37ed301be8ed2b5a5666e74b575428b3a1bf49d56c3afcf1c53a251c0c96cde->enter($__internal_c37ed301be8ed2b5a5666e74b575428b3a1bf49d56c3afcf1c53a251c0c96cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_groups"));

            $__internal_c601b57187420462eb89446b65956a4c5dbed41be97e33ff4a8f348684717582 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_c601b57187420462eb89446b65956a4c5dbed41be97e33ff4a8f348684717582->enter($__internal_c601b57187420462eb89446b65956a4c5dbed41be97e33ff4a8f348684717582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_groups"));

            // line 2
            echo "    <div class=\"row\">

    ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new Twig_Error_Runtime('Variable "groups" does not exist.', 4, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
                if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "formgroups", array(), "any", false, true), $context["code"], array(), "array", true, true)) {
                    // line 5
                    echo "        ";
                    $context["form_group"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 5, $this->getSourceContext()); })()), "formgroups", array()), $context["code"], array(), "array");
                    // line 6
                    echo "
        <div class=\"";
                    // line 7
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["form_group"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form_group"] ?? null), "class", array()), "col-md-12")) : ("col-md-12")), "html", null, true);
                    echo "\">
            <div class=\"";
                    // line 8
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_group"]) || array_key_exists("form_group", $context) ? $context["form_group"] : (function () { throw new Twig_Error_Runtime('Variable "form_group" does not exist.', 8, $this->getSourceContext()); })()), "box_class", array()), "html", null, true);
                    echo "\">
                <div class=\"box-header\">
                    <h4 class=\"box-title\">
                        ";
                    // line 11
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_group"]) || array_key_exists("form_group", $context) ? $context["form_group"] : (function () { throw new Twig_Error_Runtime('Variable "form_group" does not exist.', 11, $this->getSourceContext()); })()), "name", array()), array(), ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_group"]) || array_key_exists("form_group", $context) ? $context["form_group"] : (function () { throw new Twig_Error_Runtime('Variable "form_group" does not exist.', 11, $this->getSourceContext()); })()), "translation_domain", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_group"]) || array_key_exists("form_group", $context) ? $context["form_group"] : (function () { throw new Twig_Error_Runtime('Variable "form_group" does not exist.', 11, $this->getSourceContext()); })()), "translation_domain", array())) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 11, $this->getSourceContext()); })()), "translationDomain", array())))), "html", null, true);
                    echo "
                    </h4>
                </div>
                <div class=\"box-body\">
                    <div class=\"sonata-ba-collapsed-fields\">
                        ";
                    // line 16
                    if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_group"]) || array_key_exists("form_group", $context) ? $context["form_group"] : (function () { throw new Twig_Error_Runtime('Variable "form_group" does not exist.', 16, $this->getSourceContext()); })()), "description", array())) {
                        // line 17
                        echo "                            <p>";
                        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_group"]) || array_key_exists("form_group", $context) ? $context["form_group"] : (function () { throw new Twig_Error_Runtime('Variable "form_group" does not exist.', 17, $this->getSourceContext()); })()), "description", array());
                        echo "</p>
                        ";
                    }
                    // line 19
                    echo "
                        ";
                    // line 20
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_group"]) || array_key_exists("form_group", $context) ? $context["form_group"] : (function () { throw new Twig_Error_Runtime('Variable "form_group" does not exist.', 20, $this->getSourceContext()); })()), "fields", array()));
                    $context['_iterated'] = false;
                    foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "formfielddescriptions", array(), "any", false, true), $context["field_name"], array(), "array", true, true)) {
                            // line 21
                            echo "                            ";
                            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), $context["field_name"], array(), "array"), 'row');
                            echo "
                        ";
                            $context['_iterated'] = true;
                        }
                    }
                    if (!$context['_iterated']) {
                        // line 23
                        echo "                            <em>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("message_form_group_empty", array(), "SonataAdminBundle"), "html", null, true);
                        echo "</em>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 25
                    echo "                    </div>
                </div>
            </div>
        </div>
    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "    </div>
";
            
            $__internal_c601b57187420462eb89446b65956a4c5dbed41be97e33ff4a8f348684717582->leave($__internal_c601b57187420462eb89446b65956a4c5dbed41be97e33ff4a8f348684717582_prof);

            
            $__internal_c37ed301be8ed2b5a5666e74b575428b3a1bf49d56c3afcf1c53a251c0c96cde->leave($__internal_c37ed301be8ed2b5a5666e74b575428b3a1bf49d56c3afcf1c53a251c0c96cde_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit_form_macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 30,  122 => 25,  113 => 23,  104 => 21,  98 => 20,  95 => 19,  89 => 17,  87 => 16,  79 => 11,  73 => 8,  69 => 7,  66 => 6,  63 => 5,  58 => 4,  54 => 2,  33 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro render_groups(admin, form, groups, has_tab) %}
    <div class=\"row\">

    {% for code in groups if admin.formgroups[code] is defined %}
        {% set form_group = admin.formgroups[code] %}

        <div class=\"{{ form_group.class|default('col-md-12') }}\">
            <div class=\"{{ form_group.box_class }}\">
                <div class=\"box-header\">
                    <h4 class=\"box-title\">
                        {{ form_group.name|trans({}, form_group.translation_domain ?: admin.translationDomain) }}
                    </h4>
                </div>
                <div class=\"box-body\">
                    <div class=\"sonata-ba-collapsed-fields\">
                        {% if form_group.description %}
                            <p>{{ form_group.description|raw }}</p>
                        {% endif %}

                        {% for field_name in form_group.fields if admin.formfielddescriptions[field_name] is defined %}
                            {{ form_row(form[field_name])}}
                        {% else %}
                            <em>{{ 'message_form_group_empty'|trans({}, 'SonataAdminBundle') }}</em>
                        {% endfor %}
                    </div>
                </div>
            </div>
        </div>
    {% endfor %}
    </div>
{% endmacro %}
", "SonataAdminBundle:CRUD:base_edit_form_macro.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_edit_form_macro.html.twig");
    }
}

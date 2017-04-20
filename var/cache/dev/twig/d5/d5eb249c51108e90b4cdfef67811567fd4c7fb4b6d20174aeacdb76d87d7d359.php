<?php

/* SonataAdminBundle:CRUD:base_show_macro.html.twig */
class __TwigTemplate_0d9f3837d3ae12848f62d7b5ed3bae9ce1252e96d70491abbd76220ddb3f1165 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field_row' => array($this, 'block_field_row'),
            'show_title' => array($this, 'block_show_title'),
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29948930d9c09819719f8a97f0c1c70c8ff20bc4be553389fcf63aaea9022e28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29948930d9c09819719f8a97f0c1c70c8ff20bc4be553389fcf63aaea9022e28->enter($__internal_29948930d9c09819719f8a97f0c1c70c8ff20bc4be553389fcf63aaea9022e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_macro.html.twig"));

        $__internal_e7248b8d5333549b80201a559c359d5b87597a64e71897c3b989221862a7148b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7248b8d5333549b80201a559c359d5b87597a64e71897c3b989221862a7148b->enter($__internal_e7248b8d5333549b80201a559c359d5b87597a64e71897c3b989221862a7148b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_macro.html.twig"));

        // line 2
        echo "
";
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('field_row', $context, $blocks);
        
        $__internal_29948930d9c09819719f8a97f0c1c70c8ff20bc4be553389fcf63aaea9022e28->leave($__internal_29948930d9c09819719f8a97f0c1c70c8ff20bc4be553389fcf63aaea9022e28_prof);

        
        $__internal_e7248b8d5333549b80201a559c359d5b87597a64e71897c3b989221862a7148b->leave($__internal_e7248b8d5333549b80201a559c359d5b87597a64e71897c3b989221862a7148b_prof);

    }

    public function block_field_row($context, array $blocks = array())
    {
        $__internal_92cab1de51fc347046345235cef408fc73aef43810f875d3e51a64048af7edcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92cab1de51fc347046345235cef408fc73aef43810f875d3e51a64048af7edcf->enter($__internal_92cab1de51fc347046345235cef408fc73aef43810f875d3e51a64048af7edcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_row"));

        $__internal_ac407c78d7901ae93b9108f5137c94d2a4dd52f8e3a926b09f02a696233f7dbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac407c78d7901ae93b9108f5137c94d2a4dd52f8e3a926b09f02a696233f7dbd->enter($__internal_ac407c78d7901ae93b9108f5137c94d2a4dd52f8e3a926b09f02a696233f7dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_row"));

        // line 10
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new Twig_Error_Runtime('Variable "groups" does not exist.', 10, $this->getSourceContext()); })()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
            // line 11
            echo "        ";
            $context["show_group"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 11, $this->getSourceContext()); })()), "showgroups", array()), $context["code"], array(), "array");
            // line 12
            echo "
        <div class=\"";
            // line 13
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["show_group"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["show_group"] ?? null), "class", array()), "col-md-12")) : ("col-md-12")), "html", null, true);
            echo " ";
            echo (((isset($context["no_padding"]) || array_key_exists("no_padding", $context) ? $context["no_padding"] : (function () { throw new Twig_Error_Runtime('Variable "no_padding" does not exist.', 13, $this->getSourceContext()); })())) ? ("nopadding") : (""));
            echo "\">
            <div class=\"";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["show_group"]) || array_key_exists("show_group", $context) ? $context["show_group"] : (function () { throw new Twig_Error_Runtime('Variable "show_group" does not exist.', 14, $this->getSourceContext()); })()), "box_class", array()), "html", null, true);
            echo "\">
                <div class=\"box-header\">
                    <h4 class=\"box-title\">
                        ";
            // line 17
            $this->displayBlock('show_title', $context, $blocks);
            // line 20
            echo "                    </h4>
                </div>
                <div class=\"box-body table-responsive no-padding\">
                    <table class=\"table\">
                        <tbody>
                        ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["show_group"]) || array_key_exists("show_group", $context) ? $context["show_group"] : (function () { throw new Twig_Error_Runtime('Variable "show_group" does not exist.', 25, $this->getSourceContext()); })()), "fields", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 26
                echo "                            ";
                $this->displayBlock('show_field', $context, $blocks);
                // line 33
                echo "                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_ac407c78d7901ae93b9108f5137c94d2a4dd52f8e3a926b09f02a696233f7dbd->leave($__internal_ac407c78d7901ae93b9108f5137c94d2a4dd52f8e3a926b09f02a696233f7dbd_prof);

        
        $__internal_92cab1de51fc347046345235cef408fc73aef43810f875d3e51a64048af7edcf->leave($__internal_92cab1de51fc347046345235cef408fc73aef43810f875d3e51a64048af7edcf_prof);

    }

    // line 17
    public function block_show_title($context, array $blocks = array())
    {
        $__internal_0d582a858e75f7128b514e8cddce3e0cb8d0f9a8fdb43f254e55c4414e2cc671 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d582a858e75f7128b514e8cddce3e0cb8d0f9a8fdb43f254e55c4414e2cc671->enter($__internal_0d582a858e75f7128b514e8cddce3e0cb8d0f9a8fdb43f254e55c4414e2cc671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        $__internal_6cd71a09fae9cf6142744e5629f2f8900653d9dab1a90898ed3b762e437f83d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cd71a09fae9cf6142744e5629f2f8900653d9dab1a90898ed3b762e437f83d7->enter($__internal_6cd71a09fae9cf6142744e5629f2f8900653d9dab1a90898ed3b762e437f83d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        // line 18
        echo "                            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["show_group"]) || array_key_exists("show_group", $context) ? $context["show_group"] : (function () { throw new Twig_Error_Runtime('Variable "show_group" does not exist.', 18, $this->getSourceContext()); })()), "name", array()), array(), ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["show_group"]) || array_key_exists("show_group", $context) ? $context["show_group"] : (function () { throw new Twig_Error_Runtime('Variable "show_group" does not exist.', 18, $this->getSourceContext()); })()), "translation_domain", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["show_group"]) || array_key_exists("show_group", $context) ? $context["show_group"] : (function () { throw new Twig_Error_Runtime('Variable "show_group" does not exist.', 18, $this->getSourceContext()); })()), "translation_domain", array())) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 18, $this->getSourceContext()); })()), "translationDomain", array())))), "html", null, true);
        echo "
                        ";
        
        $__internal_6cd71a09fae9cf6142744e5629f2f8900653d9dab1a90898ed3b762e437f83d7->leave($__internal_6cd71a09fae9cf6142744e5629f2f8900653d9dab1a90898ed3b762e437f83d7_prof);

        
        $__internal_0d582a858e75f7128b514e8cddce3e0cb8d0f9a8fdb43f254e55c4414e2cc671->leave($__internal_0d582a858e75f7128b514e8cddce3e0cb8d0f9a8fdb43f254e55c4414e2cc671_prof);

    }

    // line 26
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_0e2f8b95a546928f657d66e5adf5ed49d3d1b2bcdbeed0e4da7763d6064447b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e2f8b95a546928f657d66e5adf5ed49d3d1b2bcdbeed0e4da7763d6064447b3->enter($__internal_0e2f8b95a546928f657d66e5adf5ed49d3d1b2bcdbeed0e4da7763d6064447b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        $__internal_de7cc588cae6789f1ac708a82032a34c66082dfba08cc5be2d7ebd08c69d8645 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de7cc588cae6789f1ac708a82032a34c66082dfba08cc5be2d7ebd08c69d8645->enter($__internal_de7cc588cae6789f1ac708a82032a34c66082dfba08cc5be2d7ebd08c69d8645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 27
        echo "                                <tr class=\"sonata-ba-view-container\">
                                    ";
        // line 28
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["elements"] ?? null), (isset($context["field_name"]) || array_key_exists("field_name", $context) ? $context["field_name"] : (function () { throw new Twig_Error_Runtime('Variable "field_name" does not exist.', 28, $this->getSourceContext()); })()), array(), "array", true, true)) {
            // line 29
            echo "                                        ";
            echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElement($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["elements"]) || array_key_exists("elements", $context) ? $context["elements"] : (function () { throw new Twig_Error_Runtime('Variable "elements" does not exist.', 29, $this->getSourceContext()); })()), (isset($context["field_name"]) || array_key_exists("field_name", $context) ? $context["field_name"] : (function () { throw new Twig_Error_Runtime('Variable "field_name" does not exist.', 29, $this->getSourceContext()); })()), array(), "array"), (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 29, $this->getSourceContext()); })()));
            echo "
                                    ";
        }
        // line 31
        echo "                                </tr>
                            ";
        
        $__internal_de7cc588cae6789f1ac708a82032a34c66082dfba08cc5be2d7ebd08c69d8645->leave($__internal_de7cc588cae6789f1ac708a82032a34c66082dfba08cc5be2d7ebd08c69d8645_prof);

        
        $__internal_0e2f8b95a546928f657d66e5adf5ed49d3d1b2bcdbeed0e4da7763d6064447b3->leave($__internal_0e2f8b95a546928f657d66e5adf5ed49d3d1b2bcdbeed0e4da7763d6064447b3_prof);

    }

    // line 3
    public function macro_render_groups($__admin__ = null, $__object__ = null, $__elements__ = null, $__groups__ = null, $__has_tab__ = null, $__no_padding__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "admin" => $__admin__,
            "object" => $__object__,
            "elements" => $__elements__,
            "groups" => $__groups__,
            "has_tab" => $__has_tab__,
            "no_padding" => $__no_padding__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_64bf1842411648021e94eeb2b1bdd9f3d79d1b7a9e82c41d9ddfdb085bcfcabe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_64bf1842411648021e94eeb2b1bdd9f3d79d1b7a9e82c41d9ddfdb085bcfcabe->enter($__internal_64bf1842411648021e94eeb2b1bdd9f3d79d1b7a9e82c41d9ddfdb085bcfcabe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_groups"));

            $__internal_7153531410ebf7860dcbe18c1cfe9eef6a51601ddcc561cd8e4fa2831c76a79e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_7153531410ebf7860dcbe18c1cfe9eef6a51601ddcc561cd8e4fa2831c76a79e->enter($__internal_7153531410ebf7860dcbe18c1cfe9eef6a51601ddcc561cd8e4fa2831c76a79e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_groups"));

            // line 4
            echo "    <div class=\"row\">
        ";
            // line 5
            $this->displayBlock("field_row", $context, $blocks);
            echo "
    </div>
";
            
            $__internal_7153531410ebf7860dcbe18c1cfe9eef6a51601ddcc561cd8e4fa2831c76a79e->leave($__internal_7153531410ebf7860dcbe18c1cfe9eef6a51601ddcc561cd8e4fa2831c76a79e_prof);

            
            $__internal_64bf1842411648021e94eeb2b1bdd9f3d79d1b7a9e82c41d9ddfdb085bcfcabe->leave($__internal_64bf1842411648021e94eeb2b1bdd9f3d79d1b7a9e82c41d9ddfdb085bcfcabe_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 5,  234 => 4,  211 => 3,  200 => 31,  194 => 29,  192 => 28,  189 => 27,  180 => 26,  167 => 18,  158 => 17,  131 => 34,  117 => 33,  114 => 26,  97 => 25,  90 => 20,  88 => 17,  82 => 14,  76 => 13,  73 => 12,  70 => 11,  52 => 10,  34 => 9,  31 => 8,  28 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# NEXT_MAJOR: remove this template #}

{% macro render_groups(admin, object, elements, groups, has_tab, no_padding = false) %}
    <div class=\"row\">
        {{ block('field_row') }}
    </div>
{% endmacro %}

{% block field_row %}
    {% for code in groups %}
        {% set show_group = admin.showgroups[code] %}

        <div class=\"{{ show_group.class|default('col-md-12') }} {{ no_padding ? 'nopadding' }}\">
            <div class=\"{{ show_group.box_class }}\">
                <div class=\"box-header\">
                    <h4 class=\"box-title\">
                        {% block show_title %}
                            {{ show_group.name|trans({}, show_group.translation_domain ?: admin.translationDomain) }}
                        {% endblock %}
                    </h4>
                </div>
                <div class=\"box-body table-responsive no-padding\">
                    <table class=\"table\">
                        <tbody>
                        {% for field_name in show_group.fields %}
                            {% block show_field %}
                                <tr class=\"sonata-ba-view-container\">
                                    {% if elements[field_name] is defined %}
                                        {{ elements[field_name]|render_view_element(object)}}
                                    {% endif %}
                                </tr>
                            {% endblock %}
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    {% endfor %}
{% endblock %}
", "SonataAdminBundle:CRUD:base_show_macro.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_show_macro.html.twig");
    }
}

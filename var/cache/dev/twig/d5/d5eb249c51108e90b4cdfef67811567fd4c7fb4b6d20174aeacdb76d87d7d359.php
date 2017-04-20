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
        $__internal_7bdfa9de1d93cfb9e87970172b3228d64ca42b751b51e1e44e356f1f2bd2ab3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bdfa9de1d93cfb9e87970172b3228d64ca42b751b51e1e44e356f1f2bd2ab3c->enter($__internal_7bdfa9de1d93cfb9e87970172b3228d64ca42b751b51e1e44e356f1f2bd2ab3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_macro.html.twig"));

        $__internal_e2ed05df5b8b36e79d20e2e3a7c3cc700e54e392ba76451254be43cad2d3a3ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2ed05df5b8b36e79d20e2e3a7c3cc700e54e392ba76451254be43cad2d3a3ed->enter($__internal_e2ed05df5b8b36e79d20e2e3a7c3cc700e54e392ba76451254be43cad2d3a3ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_macro.html.twig"));

        // line 2
        echo "
";
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('field_row', $context, $blocks);
        
        $__internal_7bdfa9de1d93cfb9e87970172b3228d64ca42b751b51e1e44e356f1f2bd2ab3c->leave($__internal_7bdfa9de1d93cfb9e87970172b3228d64ca42b751b51e1e44e356f1f2bd2ab3c_prof);

        
        $__internal_e2ed05df5b8b36e79d20e2e3a7c3cc700e54e392ba76451254be43cad2d3a3ed->leave($__internal_e2ed05df5b8b36e79d20e2e3a7c3cc700e54e392ba76451254be43cad2d3a3ed_prof);

    }

    public function block_field_row($context, array $blocks = array())
    {
        $__internal_65f9f1a37f26a29b2112dc39f402b01014710cf3fe05606ded5cf9c664720f75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65f9f1a37f26a29b2112dc39f402b01014710cf3fe05606ded5cf9c664720f75->enter($__internal_65f9f1a37f26a29b2112dc39f402b01014710cf3fe05606ded5cf9c664720f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_row"));

        $__internal_3307d2b86f1a3462da626ba08d532afb86a81e323959e5c9f7fa9ecbf0f0ef08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3307d2b86f1a3462da626ba08d532afb86a81e323959e5c9f7fa9ecbf0f0ef08->enter($__internal_3307d2b86f1a3462da626ba08d532afb86a81e323959e5c9f7fa9ecbf0f0ef08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_row"));

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
        
        $__internal_3307d2b86f1a3462da626ba08d532afb86a81e323959e5c9f7fa9ecbf0f0ef08->leave($__internal_3307d2b86f1a3462da626ba08d532afb86a81e323959e5c9f7fa9ecbf0f0ef08_prof);

        
        $__internal_65f9f1a37f26a29b2112dc39f402b01014710cf3fe05606ded5cf9c664720f75->leave($__internal_65f9f1a37f26a29b2112dc39f402b01014710cf3fe05606ded5cf9c664720f75_prof);

    }

    // line 17
    public function block_show_title($context, array $blocks = array())
    {
        $__internal_68e60f07ab445674b201020a2cc27bfbe2af592d6a3e172bf8756ce2b79703f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68e60f07ab445674b201020a2cc27bfbe2af592d6a3e172bf8756ce2b79703f4->enter($__internal_68e60f07ab445674b201020a2cc27bfbe2af592d6a3e172bf8756ce2b79703f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        $__internal_b86535ee1376e932e8c68f86fb4ec15804923f2bc456ff7afc162ce90598b968 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b86535ee1376e932e8c68f86fb4ec15804923f2bc456ff7afc162ce90598b968->enter($__internal_b86535ee1376e932e8c68f86fb4ec15804923f2bc456ff7afc162ce90598b968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        // line 18
        echo "                            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["show_group"]) || array_key_exists("show_group", $context) ? $context["show_group"] : (function () { throw new Twig_Error_Runtime('Variable "show_group" does not exist.', 18, $this->getSourceContext()); })()), "name", array()), array(), ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["show_group"]) || array_key_exists("show_group", $context) ? $context["show_group"] : (function () { throw new Twig_Error_Runtime('Variable "show_group" does not exist.', 18, $this->getSourceContext()); })()), "translation_domain", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["show_group"]) || array_key_exists("show_group", $context) ? $context["show_group"] : (function () { throw new Twig_Error_Runtime('Variable "show_group" does not exist.', 18, $this->getSourceContext()); })()), "translation_domain", array())) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 18, $this->getSourceContext()); })()), "translationDomain", array())))), "html", null, true);
        echo "
                        ";
        
        $__internal_b86535ee1376e932e8c68f86fb4ec15804923f2bc456ff7afc162ce90598b968->leave($__internal_b86535ee1376e932e8c68f86fb4ec15804923f2bc456ff7afc162ce90598b968_prof);

        
        $__internal_68e60f07ab445674b201020a2cc27bfbe2af592d6a3e172bf8756ce2b79703f4->leave($__internal_68e60f07ab445674b201020a2cc27bfbe2af592d6a3e172bf8756ce2b79703f4_prof);

    }

    // line 26
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_afe6dcb6dcb8be752ea2e77f7378eb1dbf766cd2c7863d6609fd30dace4bc23b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afe6dcb6dcb8be752ea2e77f7378eb1dbf766cd2c7863d6609fd30dace4bc23b->enter($__internal_afe6dcb6dcb8be752ea2e77f7378eb1dbf766cd2c7863d6609fd30dace4bc23b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        $__internal_666dfd58accfbd2158bd090ac71d86b4538423886842c5c9a8499fddc262a93f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_666dfd58accfbd2158bd090ac71d86b4538423886842c5c9a8499fddc262a93f->enter($__internal_666dfd58accfbd2158bd090ac71d86b4538423886842c5c9a8499fddc262a93f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

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
        
        $__internal_666dfd58accfbd2158bd090ac71d86b4538423886842c5c9a8499fddc262a93f->leave($__internal_666dfd58accfbd2158bd090ac71d86b4538423886842c5c9a8499fddc262a93f_prof);

        
        $__internal_afe6dcb6dcb8be752ea2e77f7378eb1dbf766cd2c7863d6609fd30dace4bc23b->leave($__internal_afe6dcb6dcb8be752ea2e77f7378eb1dbf766cd2c7863d6609fd30dace4bc23b_prof);

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
            $__internal_396a66f8a9117fdbac41f2d7902e701c26677efb127df7d22caa7b5fa040fb5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_396a66f8a9117fdbac41f2d7902e701c26677efb127df7d22caa7b5fa040fb5d->enter($__internal_396a66f8a9117fdbac41f2d7902e701c26677efb127df7d22caa7b5fa040fb5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_groups"));

            $__internal_08f4ac531777cd7f7996f7afb704dade4ba11259f1ed5cd6bdb8178e70a68e1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_08f4ac531777cd7f7996f7afb704dade4ba11259f1ed5cd6bdb8178e70a68e1f->enter($__internal_08f4ac531777cd7f7996f7afb704dade4ba11259f1ed5cd6bdb8178e70a68e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_groups"));

            // line 4
            echo "    <div class=\"row\">
        ";
            // line 5
            $this->displayBlock("field_row", $context, $blocks);
            echo "
    </div>
";
            
            $__internal_08f4ac531777cd7f7996f7afb704dade4ba11259f1ed5cd6bdb8178e70a68e1f->leave($__internal_08f4ac531777cd7f7996f7afb704dade4ba11259f1ed5cd6bdb8178e70a68e1f_prof);

            
            $__internal_396a66f8a9117fdbac41f2d7902e701c26677efb127df7d22caa7b5fa040fb5d->leave($__internal_396a66f8a9117fdbac41f2d7902e701c26677efb127df7d22caa7b5fa040fb5d_prof);


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

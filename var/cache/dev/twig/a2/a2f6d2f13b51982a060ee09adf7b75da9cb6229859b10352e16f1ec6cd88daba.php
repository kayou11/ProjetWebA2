<?php

/* SonataAdminBundle:CRUD:base_standard_edit_field.html.twig */
class __TwigTemplate_d5b339211e44701868fd142347330c641a4bd5804f70b6d2e40a261f28e51887 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
            'help' => array($this, 'block_help'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c22b83c0987150170a11509e5e514b00330d39cef6df5e43e62a30eb890e528 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c22b83c0987150170a11509e5e514b00330d39cef6df5e43e62a30eb890e528->enter($__internal_4c22b83c0987150170a11509e5e514b00330d39cef6df5e43e62a30eb890e528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_standard_edit_field.html.twig"));

        $__internal_cd7082b4f1841b6536ddbe04dff07927df2b9d51216592c4de76b45f8f653e2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd7082b4f1841b6536ddbe04dff07927df2b9d51216592c4de76b45f8f653e2b->enter($__internal_cd7082b4f1841b6536ddbe04dff07927df2b9d51216592c4de76b45f8f653e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_standard_edit_field.html.twig"));

        // line 11
        echo "
<div class=\"form-group";
        // line 12
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 12, $this->getSourceContext()); })()), "var", array()), "errors", array())) > 0)) {
            echo " has-error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 12, $this->getSourceContext()); })()), "vars", array()), "id", array()), "html", null, true);
        echo "\">
    ";
        // line 13
        $this->displayBlock('label', $context, $blocks);
        // line 20
        echo "
    <div class=\"col-sm-10 col-md-5 sonata-ba-field sonata-ba-field-";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["edit"]) || array_key_exists("edit", $context) ? $context["edit"] : (function () { throw new Twig_Error_Runtime('Variable "edit" does not exist.', 21, $this->getSourceContext()); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["inline"]) || array_key_exists("inline", $context) ? $context["inline"] : (function () { throw new Twig_Error_Runtime('Variable "inline" does not exist.', 21, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 21, $this->getSourceContext()); })()), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">

        ";
        // line 23
        $this->displayBlock('field', $context, $blocks);
        // line 24
        echo "
        ";
        // line 25
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 25, $this->getSourceContext()); })()), "help", array())) {
            // line 26
            echo "            <span class=\"help-block\">";
            $this->displayBlock('help', $context, $blocks);
            echo "</span>
        ";
        }
        // line 28
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 30
        $this->displayBlock('errors', $context, $blocks);
        // line 31
        echo "        </div>

    </div>
</div>
";
        
        $__internal_4c22b83c0987150170a11509e5e514b00330d39cef6df5e43e62a30eb890e528->leave($__internal_4c22b83c0987150170a11509e5e514b00330d39cef6df5e43e62a30eb890e528_prof);

        
        $__internal_cd7082b4f1841b6536ddbe04dff07927df2b9d51216592c4de76b45f8f653e2b->leave($__internal_cd7082b4f1841b6536ddbe04dff07927df2b9d51216592c4de76b45f8f653e2b_prof);

    }

    // line 13
    public function block_label($context, array $blocks = array())
    {
        $__internal_aef24e70163d017869c8cec63776f3f00aaaef1008d25fa114ab431c7c64539e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aef24e70163d017869c8cec63776f3f00aaaef1008d25fa114ab431c7c64539e->enter($__internal_aef24e70163d017869c8cec63776f3f00aaaef1008d25fa114ab431c7c64539e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_06beb2cae29fac3a83d5f1daec9e270c08936a795a57d24e846a4acb8c55ce9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06beb2cae29fac3a83d5f1daec9e270c08936a795a57d24e846a4acb8c55ce9f->enter($__internal_06beb2cae29fac3a83d5f1daec9e270c08936a795a57d24e846a4acb8c55ce9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 14
        echo "        ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 15
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 15, $this->getSourceContext()); })()), 'label', (twig_test_empty($_label_ = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 15, $this->getSourceContext()); })()), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 17
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 17, $this->getSourceContext()); })()), 'label');
            echo "
        ";
        }
        // line 19
        echo "    ";
        
        $__internal_06beb2cae29fac3a83d5f1daec9e270c08936a795a57d24e846a4acb8c55ce9f->leave($__internal_06beb2cae29fac3a83d5f1daec9e270c08936a795a57d24e846a4acb8c55ce9f_prof);

        
        $__internal_aef24e70163d017869c8cec63776f3f00aaaef1008d25fa114ab431c7c64539e->leave($__internal_aef24e70163d017869c8cec63776f3f00aaaef1008d25fa114ab431c7c64539e_prof);

    }

    // line 23
    public function block_field($context, array $blocks = array())
    {
        $__internal_c3f1a34c99a64d92106acfe918b5d4b9d57371019cbd06e6e06d9c1f0853aad6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3f1a34c99a64d92106acfe918b5d4b9d57371019cbd06e6e06d9c1f0853aad6->enter($__internal_c3f1a34c99a64d92106acfe918b5d4b9d57371019cbd06e6e06d9c1f0853aad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_537b0f7a841f39397feeed146314bac2bd16360316e2501d8be1d242db73b18d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_537b0f7a841f39397feeed146314bac2bd16360316e2501d8be1d242db73b18d->enter($__internal_537b0f7a841f39397feeed146314bac2bd16360316e2501d8be1d242db73b18d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 23, $this->getSourceContext()); })()), 'widget');
        
        $__internal_537b0f7a841f39397feeed146314bac2bd16360316e2501d8be1d242db73b18d->leave($__internal_537b0f7a841f39397feeed146314bac2bd16360316e2501d8be1d242db73b18d_prof);

        
        $__internal_c3f1a34c99a64d92106acfe918b5d4b9d57371019cbd06e6e06d9c1f0853aad6->leave($__internal_c3f1a34c99a64d92106acfe918b5d4b9d57371019cbd06e6e06d9c1f0853aad6_prof);

    }

    // line 26
    public function block_help($context, array $blocks = array())
    {
        $__internal_ae247d33529eee081774f9ad9fb08403f7cf024598688a749948dc8346843d68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae247d33529eee081774f9ad9fb08403f7cf024598688a749948dc8346843d68->enter($__internal_ae247d33529eee081774f9ad9fb08403f7cf024598688a749948dc8346843d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help"));

        $__internal_c8ede2ee75734786c2da2161bca7375037fc4d611e2c50e280e279b30b9f23a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8ede2ee75734786c2da2161bca7375037fc4d611e2c50e280e279b30b9f23a7->enter($__internal_c8ede2ee75734786c2da2161bca7375037fc4d611e2c50e280e279b30b9f23a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help"));

        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 26, $this->getSourceContext()); })()), "help", array());
        
        $__internal_c8ede2ee75734786c2da2161bca7375037fc4d611e2c50e280e279b30b9f23a7->leave($__internal_c8ede2ee75734786c2da2161bca7375037fc4d611e2c50e280e279b30b9f23a7_prof);

        
        $__internal_ae247d33529eee081774f9ad9fb08403f7cf024598688a749948dc8346843d68->leave($__internal_ae247d33529eee081774f9ad9fb08403f7cf024598688a749948dc8346843d68_prof);

    }

    // line 30
    public function block_errors($context, array $blocks = array())
    {
        $__internal_91593c244addfdefc79eb8ae646ebb887e86d344cc91901b6ee5cc5474026c36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91593c244addfdefc79eb8ae646ebb887e86d344cc91901b6ee5cc5474026c36->enter($__internal_91593c244addfdefc79eb8ae646ebb887e86d344cc91901b6ee5cc5474026c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        $__internal_1f188f046f69ffaa4089e947186b74bcf4546aed827899e9da52fe777df26b15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f188f046f69ffaa4089e947186b74bcf4546aed827899e9da52fe777df26b15->enter($__internal_1f188f046f69ffaa4089e947186b74bcf4546aed827899e9da52fe777df26b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 30, $this->getSourceContext()); })()), 'errors');
        
        $__internal_1f188f046f69ffaa4089e947186b74bcf4546aed827899e9da52fe777df26b15->leave($__internal_1f188f046f69ffaa4089e947186b74bcf4546aed827899e9da52fe777df26b15_prof);

        
        $__internal_91593c244addfdefc79eb8ae646ebb887e86d344cc91901b6ee5cc5474026c36->leave($__internal_91593c244addfdefc79eb8ae646ebb887e86d344cc91901b6ee5cc5474026c36_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_standard_edit_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 30,  141 => 26,  123 => 23,  113 => 19,  107 => 17,  101 => 15,  98 => 14,  89 => 13,  75 => 31,  73 => 30,  69 => 28,  63 => 26,  61 => 25,  58 => 24,  56 => 23,  45 => 21,  42 => 20,  40 => 13,  32 => 12,  29 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

<div class=\"form-group{% if field_element.var.errors|length > 0%} has-error{%endif%}\" id=\"sonata-ba-field-container-{{ field_element.vars.id }}\">
    {% block label %}
        {% if field_description.options.name is defined %}
            {{ form_label(field_element, field_description.options.name) }}
        {% else %}
            {{ form_label(field_element) }}
        {% endif %}
    {% endblock %}

    <div class=\"col-sm-10 col-md-5 sonata-ba-field sonata-ba-field-{{ edit }}-{{ inline }} {% if field_element.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}\">

        {% block field %}{{ form_widget(field_element) }}{% endblock %}

        {% if field_description.help %}
            <span class=\"help-block\">{% block help %}{{ field_description.help|raw }}{% endblock %}</span>
        {% endif %}

        <div class=\"sonata-ba-field-error-messages\">
            {% block errors %}{{ form_errors(field_element) }}{% endblock %}
        </div>

    </div>
</div>
", "SonataAdminBundle:CRUD:base_standard_edit_field.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_standard_edit_field.html.twig");
    }
}

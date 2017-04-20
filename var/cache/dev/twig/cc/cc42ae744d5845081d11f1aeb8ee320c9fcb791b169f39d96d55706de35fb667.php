<?php

/* SonataAdminBundle:CRUD:edit_boolean.html.twig */
class __TwigTemplate_21ad2b8e51492d592885cc7fdfb9ae49e25bb4613a86ee5012eed08019c5e70d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'label' => array($this, 'block_label'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_872ab7a0ed7fff80e056601beffefddd1bcea628e89807f84294edbe0f10e7c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_872ab7a0ed7fff80e056601beffefddd1bcea628e89807f84294edbe0f10e7c1->enter($__internal_872ab7a0ed7fff80e056601beffefddd1bcea628e89807f84294edbe0f10e7c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

        $__internal_d8d409f7c47a00bfc7a21d291125f605b2a7b01e53f281021a2d98e5831e41b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8d409f7c47a00bfc7a21d291125f605b2a7b01e53f281021a2d98e5831e41b1->enter($__internal_d8d409f7c47a00bfc7a21d291125f605b2a7b01e53f281021a2d98e5831e41b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

        // line 11
        echo "
<div>
    <div class=\"sonata-ba-field ";
        // line 13
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 13, $this->getSourceContext()); })()), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 14
        $this->displayBlock('field', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('label', $context, $blocks);
        // line 23
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 25
        $this->displayBlock('errors', $context, $blocks);
        // line 26
        echo "        </div>

    </div>
</div>
";
        
        $__internal_872ab7a0ed7fff80e056601beffefddd1bcea628e89807f84294edbe0f10e7c1->leave($__internal_872ab7a0ed7fff80e056601beffefddd1bcea628e89807f84294edbe0f10e7c1_prof);

        
        $__internal_d8d409f7c47a00bfc7a21d291125f605b2a7b01e53f281021a2d98e5831e41b1->leave($__internal_d8d409f7c47a00bfc7a21d291125f605b2a7b01e53f281021a2d98e5831e41b1_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_30c2008749299fe98cc6e9d454b0a2032e22094f361bf218b76ac897573ebcbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30c2008749299fe98cc6e9d454b0a2032e22094f361bf218b76ac897573ebcbd->enter($__internal_30c2008749299fe98cc6e9d454b0a2032e22094f361bf218b76ac897573ebcbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_257b1d6a8af80c4c7a1140ecc395fa7dc2e65312aa1df29e0306b7896dc535c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_257b1d6a8af80c4c7a1140ecc395fa7dc2e65312aa1df29e0306b7896dc535c8->enter($__internal_257b1d6a8af80c4c7a1140ecc395fa7dc2e65312aa1df29e0306b7896dc535c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 14, $this->getSourceContext()); })()), 'widget');
        
        $__internal_257b1d6a8af80c4c7a1140ecc395fa7dc2e65312aa1df29e0306b7896dc535c8->leave($__internal_257b1d6a8af80c4c7a1140ecc395fa7dc2e65312aa1df29e0306b7896dc535c8_prof);

        
        $__internal_30c2008749299fe98cc6e9d454b0a2032e22094f361bf218b76ac897573ebcbd->leave($__internal_30c2008749299fe98cc6e9d454b0a2032e22094f361bf218b76ac897573ebcbd_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_8402c502e31da626770428007b3646cb23eaa78c0166bd1c13a0be4b7bb938bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8402c502e31da626770428007b3646cb23eaa78c0166bd1c13a0be4b7bb938bd->enter($__internal_8402c502e31da626770428007b3646cb23eaa78c0166bd1c13a0be4b7bb938bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_22707e37d8dde0f858f4ab20b6fb33dfba97ae4cfb10d4d4951cf07c7b5b3baa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22707e37d8dde0f858f4ab20b6fb33dfba97ae4cfb10d4d4951cf07c7b5b3baa->enter($__internal_22707e37d8dde0f858f4ab20b6fb33dfba97ae4cfb10d4d4951cf07c7b5b3baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 16
        echo "            ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 17
            echo "                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 17, $this->getSourceContext()); })()), 'label', (twig_test_empty($_label_ = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 17, $this->getSourceContext()); })()), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
            ";
        } else {
            // line 19
            echo "                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 19, $this->getSourceContext()); })()), 'label');
            echo "
            ";
        }
        // line 21
        echo "            <br>
        ";
        
        $__internal_22707e37d8dde0f858f4ab20b6fb33dfba97ae4cfb10d4d4951cf07c7b5b3baa->leave($__internal_22707e37d8dde0f858f4ab20b6fb33dfba97ae4cfb10d4d4951cf07c7b5b3baa_prof);

        
        $__internal_8402c502e31da626770428007b3646cb23eaa78c0166bd1c13a0be4b7bb938bd->leave($__internal_8402c502e31da626770428007b3646cb23eaa78c0166bd1c13a0be4b7bb938bd_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_9e47297a1f1ad07e7f643d0f8bb0791fc2b56f5c2a2e2e9b3b920aaec00b2de4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e47297a1f1ad07e7f643d0f8bb0791fc2b56f5c2a2e2e9b3b920aaec00b2de4->enter($__internal_9e47297a1f1ad07e7f643d0f8bb0791fc2b56f5c2a2e2e9b3b920aaec00b2de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        $__internal_581efe141ac0f7c239051df6f643bb939e9422243e7ac46f3790847429f47a84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_581efe141ac0f7c239051df6f643bb939e9422243e7ac46f3790847429f47a84->enter($__internal_581efe141ac0f7c239051df6f643bb939e9422243e7ac46f3790847429f47a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 25, $this->getSourceContext()); })()), 'errors');
        
        $__internal_581efe141ac0f7c239051df6f643bb939e9422243e7ac46f3790847429f47a84->leave($__internal_581efe141ac0f7c239051df6f643bb939e9422243e7ac46f3790847429f47a84_prof);

        
        $__internal_9e47297a1f1ad07e7f643d0f8bb0791fc2b56f5c2a2e2e9b3b920aaec00b2de4->leave($__internal_9e47297a1f1ad07e7f643d0f8bb0791fc2b56f5c2a2e2e9b3b920aaec00b2de4_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 25,  105 => 21,  99 => 19,  93 => 17,  90 => 16,  81 => 15,  63 => 14,  49 => 26,  47 => 25,  43 => 23,  40 => 15,  38 => 14,  32 => 13,  28 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

<div>
    <div class=\"sonata-ba-field {% if field_element.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}\">
        {% block field %}{{ form_widget(field_element) }}{% endblock %}
        {% block label %}
            {% if field_description.options.name is defined %}
                {{ form_label(field_element, field_description.options.name) }}
            {% else %}
                {{ form_label(field_element) }}
            {% endif %}
            <br>
        {% endblock %}

        <div class=\"sonata-ba-field-error-messages\">
            {% block errors %}{{ form_errors(field_element) }}{% endblock %}
        </div>

    </div>
</div>
", "SonataAdminBundle:CRUD:edit_boolean.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_boolean.html.twig");
    }
}

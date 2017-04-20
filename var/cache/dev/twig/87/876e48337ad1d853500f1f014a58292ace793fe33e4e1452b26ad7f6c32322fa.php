<?php

/* SonataAdminBundle:CRUD:edit_boolean.html.twig */
class __TwigTemplate_cbdd678180643ee7e35679b37bfbc98774ee883b367f7396babcd50563ec64b0 extends Twig_Template
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
        $__internal_eb79009d7dd66db9f565fdba634fe36660e2a295877f1df41af2404f7d7a5156 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb79009d7dd66db9f565fdba634fe36660e2a295877f1df41af2404f7d7a5156->enter($__internal_eb79009d7dd66db9f565fdba634fe36660e2a295877f1df41af2404f7d7a5156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

        $__internal_1a2bd819b2a6b49e5be6f92887c0e46be9a25a8f607216a15f4bdf27a4d25b5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a2bd819b2a6b49e5be6f92887c0e46be9a25a8f607216a15f4bdf27a4d25b5b->enter($__internal_1a2bd819b2a6b49e5be6f92887c0e46be9a25a8f607216a15f4bdf27a4d25b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

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
        
        $__internal_eb79009d7dd66db9f565fdba634fe36660e2a295877f1df41af2404f7d7a5156->leave($__internal_eb79009d7dd66db9f565fdba634fe36660e2a295877f1df41af2404f7d7a5156_prof);

        
        $__internal_1a2bd819b2a6b49e5be6f92887c0e46be9a25a8f607216a15f4bdf27a4d25b5b->leave($__internal_1a2bd819b2a6b49e5be6f92887c0e46be9a25a8f607216a15f4bdf27a4d25b5b_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_a5e0ff51d460d334298a54c6424c446f12c2c518c26ae14d66c186ade98ad0e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5e0ff51d460d334298a54c6424c446f12c2c518c26ae14d66c186ade98ad0e9->enter($__internal_a5e0ff51d460d334298a54c6424c446f12c2c518c26ae14d66c186ade98ad0e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_36079cc05077c0e0c9839583b1d67922431f8fd2565aa6f6f860e98956721ba8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36079cc05077c0e0c9839583b1d67922431f8fd2565aa6f6f860e98956721ba8->enter($__internal_36079cc05077c0e0c9839583b1d67922431f8fd2565aa6f6f860e98956721ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 14, $this->getSourceContext()); })()), 'widget');
        
        $__internal_36079cc05077c0e0c9839583b1d67922431f8fd2565aa6f6f860e98956721ba8->leave($__internal_36079cc05077c0e0c9839583b1d67922431f8fd2565aa6f6f860e98956721ba8_prof);

        
        $__internal_a5e0ff51d460d334298a54c6424c446f12c2c518c26ae14d66c186ade98ad0e9->leave($__internal_a5e0ff51d460d334298a54c6424c446f12c2c518c26ae14d66c186ade98ad0e9_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_c2600a0de028d33f8d907867b850418791413c50d056363fae9be94d936d92aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2600a0de028d33f8d907867b850418791413c50d056363fae9be94d936d92aa->enter($__internal_c2600a0de028d33f8d907867b850418791413c50d056363fae9be94d936d92aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_56eff2e380fd212a95dcd3b6473eb18813c468e7e223c3da7e15aecbdd1a9af2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56eff2e380fd212a95dcd3b6473eb18813c468e7e223c3da7e15aecbdd1a9af2->enter($__internal_56eff2e380fd212a95dcd3b6473eb18813c468e7e223c3da7e15aecbdd1a9af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_56eff2e380fd212a95dcd3b6473eb18813c468e7e223c3da7e15aecbdd1a9af2->leave($__internal_56eff2e380fd212a95dcd3b6473eb18813c468e7e223c3da7e15aecbdd1a9af2_prof);

        
        $__internal_c2600a0de028d33f8d907867b850418791413c50d056363fae9be94d936d92aa->leave($__internal_c2600a0de028d33f8d907867b850418791413c50d056363fae9be94d936d92aa_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_e88030ca97cfbe85bb52573e552685834e4968809ee2fe3f705bd0baab46800d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e88030ca97cfbe85bb52573e552685834e4968809ee2fe3f705bd0baab46800d->enter($__internal_e88030ca97cfbe85bb52573e552685834e4968809ee2fe3f705bd0baab46800d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        $__internal_0f60c2092d2f34e3da7985806774ce298d1c96f0661735b7a0fec58cd5331c00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f60c2092d2f34e3da7985806774ce298d1c96f0661735b7a0fec58cd5331c00->enter($__internal_0f60c2092d2f34e3da7985806774ce298d1c96f0661735b7a0fec58cd5331c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 25, $this->getSourceContext()); })()), 'errors');
        
        $__internal_0f60c2092d2f34e3da7985806774ce298d1c96f0661735b7a0fec58cd5331c00->leave($__internal_0f60c2092d2f34e3da7985806774ce298d1c96f0661735b7a0fec58cd5331c00_prof);

        
        $__internal_e88030ca97cfbe85bb52573e552685834e4968809ee2fe3f705bd0baab46800d->leave($__internal_e88030ca97cfbe85bb52573e552685834e4968809ee2fe3f705bd0baab46800d_prof);

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

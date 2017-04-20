<?php

/* SonataAdminBundle:CRUD:base_filter_field.html.twig */
class __TwigTemplate_d2810a09df921788db4dfa9c6228f873dcc5f67afe8513627ba21afa6e9c820b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f19dcd1119c853ff5b62f43ad7ab935ad2bed1bad1e8ee5dc47594c3be7f59b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f19dcd1119c853ff5b62f43ad7ab935ad2bed1bad1e8ee5dc47594c3be7f59b->enter($__internal_8f19dcd1119c853ff5b62f43ad7ab935ad2bed1bad1e8ee5dc47594c3be7f59b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_filter_field.html.twig"));

        $__internal_927386bda240dd86391681857a9584f2212eba83f3f1a68f257f350eb4b71ea7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_927386bda240dd86391681857a9584f2212eba83f3f1a68f257f350eb4b71ea7->enter($__internal_927386bda240dd86391681857a9584f2212eba83f3f1a68f257f350eb4b71ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_filter_field.html.twig"));

        // line 11
        echo "

<div>
    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 22
        echo "
    <div class=\"sonata-ba-field";
        // line 23
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["filter_form"]) || array_key_exists("filter_form", $context) ? $context["filter_form"] : (function () { throw new Twig_Error_Runtime('Variable "filter_form" does not exist.', 23, $this->getSourceContext()); })()), "vars", array()), "errors", array())) {
            echo " sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 24
        $this->displayBlock('field', $context, $blocks);
        // line 25
        echo "    </div>
</div>
";
        
        $__internal_8f19dcd1119c853ff5b62f43ad7ab935ad2bed1bad1e8ee5dc47594c3be7f59b->leave($__internal_8f19dcd1119c853ff5b62f43ad7ab935ad2bed1bad1e8ee5dc47594c3be7f59b_prof);

        
        $__internal_927386bda240dd86391681857a9584f2212eba83f3f1a68f257f350eb4b71ea7->leave($__internal_927386bda240dd86391681857a9584f2212eba83f3f1a68f257f350eb4b71ea7_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_ea67ddcaf45849ddc1a914c267da2a5c666b7b525eba1a304c09d7c8f354c471 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea67ddcaf45849ddc1a914c267da2a5c666b7b525eba1a304c09d7c8f354c471->enter($__internal_ea67ddcaf45849ddc1a914c267da2a5c666b7b525eba1a304c09d7c8f354c471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_df3cc26385882cf12c2f363f0b3c4e98be62b00a791bf83df7abcc03ac3ed0cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df3cc26385882cf12c2f363f0b3c4e98be62b00a791bf83df7abcc03ac3ed0cb->enter($__internal_df3cc26385882cf12c2f363f0b3c4e98be62b00a791bf83df7abcc03ac3ed0cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 15
        echo "        ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["filter"] ?? null), "fielddescription", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 16
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["filter_form"]) || array_key_exists("filter_form", $context) ? $context["filter_form"] : (function () { throw new Twig_Error_Runtime('Variable "filter_form" does not exist.', 16, $this->getSourceContext()); })()), 'label', (twig_test_empty($_label_ = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new Twig_Error_Runtime('Variable "filter" does not exist.', 16, $this->getSourceContext()); })()), "fielddescription", array()), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 18
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["filter_form"]) || array_key_exists("filter_form", $context) ? $context["filter_form"] : (function () { throw new Twig_Error_Runtime('Variable "filter_form" does not exist.', 18, $this->getSourceContext()); })()), 'label');
            echo "
        ";
        }
        // line 20
        echo "        <br>
    ";
        
        $__internal_df3cc26385882cf12c2f363f0b3c4e98be62b00a791bf83df7abcc03ac3ed0cb->leave($__internal_df3cc26385882cf12c2f363f0b3c4e98be62b00a791bf83df7abcc03ac3ed0cb_prof);

        
        $__internal_ea67ddcaf45849ddc1a914c267da2a5c666b7b525eba1a304c09d7c8f354c471->leave($__internal_ea67ddcaf45849ddc1a914c267da2a5c666b7b525eba1a304c09d7c8f354c471_prof);

    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        $__internal_642916d334ac8f1205b331a0647ffda2a4fa7c36d86b836315a7fb3f97b4da38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_642916d334ac8f1205b331a0647ffda2a4fa7c36d86b836315a7fb3f97b4da38->enter($__internal_642916d334ac8f1205b331a0647ffda2a4fa7c36d86b836315a7fb3f97b4da38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_a08fb0dc4f6ba50ee616ad7d8e064c64fa5962206c5e5ac82f7f3d24e838c15a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a08fb0dc4f6ba50ee616ad7d8e064c64fa5962206c5e5ac82f7f3d24e838c15a->enter($__internal_a08fb0dc4f6ba50ee616ad7d8e064c64fa5962206c5e5ac82f7f3d24e838c15a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["filter_form"]) || array_key_exists("filter_form", $context) ? $context["filter_form"] : (function () { throw new Twig_Error_Runtime('Variable "filter_form" does not exist.', 24, $this->getSourceContext()); })()), 'widget');
        
        $__internal_a08fb0dc4f6ba50ee616ad7d8e064c64fa5962206c5e5ac82f7f3d24e838c15a->leave($__internal_a08fb0dc4f6ba50ee616ad7d8e064c64fa5962206c5e5ac82f7f3d24e838c15a_prof);

        
        $__internal_642916d334ac8f1205b331a0647ffda2a4fa7c36d86b836315a7fb3f97b4da38->leave($__internal_642916d334ac8f1205b331a0647ffda2a4fa7c36d86b836315a7fb3f97b4da38_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_filter_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 24,  81 => 20,  75 => 18,  69 => 16,  66 => 15,  57 => 14,  45 => 25,  43 => 24,  37 => 23,  34 => 22,  32 => 14,  27 => 11,);
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
    {% block label %}
        {% if filter.fielddescription.options.name is defined %}
            {{ form_label(filter_form, filter.fielddescription.options.name) }}
        {% else %}
            {{ form_label(filter_form) }}
        {% endif %}
        <br>
    {% endblock %}

    <div class=\"sonata-ba-field{% if filter_form.vars.errors %} sonata-ba-field-error{% endif %}\">
        {% block field %}{{ form_widget(filter_form) }}{% endblock %}
    </div>
</div>
", "SonataAdminBundle:CRUD:base_filter_field.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_filter_field.html.twig");
    }
}

<?php

/* SonataAdminBundle:CRUD:edit_integer.html.twig */
class __TwigTemplate_ef34fe1d4b74e8e5cb1b8b00b995e8f8eaa44574f896686d111340095fee22c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 12, $this->getSourceContext()); })()), "SonataAdminBundle:CRUD:edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7f069ff1a2636e2f077336f74ac73ad161f252d55235bdc432e2b298897abedc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f069ff1a2636e2f077336f74ac73ad161f252d55235bdc432e2b298897abedc->enter($__internal_7f069ff1a2636e2f077336f74ac73ad161f252d55235bdc432e2b298897abedc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $__internal_5765205b5b687e09229f40d81e70d6029debc8b7b19839c82b36b3ff543d07bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5765205b5b687e09229f40d81e70d6029debc8b7b19839c82b36b3ff543d07bb->enter($__internal_5765205b5b687e09229f40d81e70d6029debc8b7b19839c82b36b3ff543d07bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f069ff1a2636e2f077336f74ac73ad161f252d55235bdc432e2b298897abedc->leave($__internal_7f069ff1a2636e2f077336f74ac73ad161f252d55235bdc432e2b298897abedc_prof);

        
        $__internal_5765205b5b687e09229f40d81e70d6029debc8b7b19839c82b36b3ff543d07bb->leave($__internal_5765205b5b687e09229f40d81e70d6029debc8b7b19839c82b36b3ff543d07bb_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_6469a23bb1f727eaaae5e8f6b114bb126571972ab0d64e6b68f6b85920c12013 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6469a23bb1f727eaaae5e8f6b114bb126571972ab0d64e6b68f6b85920c12013->enter($__internal_6469a23bb1f727eaaae5e8f6b114bb126571972ab0d64e6b68f6b85920c12013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_99c7bc363186c6328915571eebd583e3ac4644518781e120b4b10e2513bb20ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99c7bc363186c6328915571eebd583e3ac4644518781e120b4b10e2513bb20ce->enter($__internal_99c7bc363186c6328915571eebd583e3ac4644518781e120b4b10e2513bb20ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 14, $this->getSourceContext()); })()), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_99c7bc363186c6328915571eebd583e3ac4644518781e120b4b10e2513bb20ce->leave($__internal_99c7bc363186c6328915571eebd583e3ac4644518781e120b4b10e2513bb20ce_prof);

        
        $__internal_6469a23bb1f727eaaae5e8f6b114bb126571972ab0d64e6b68f6b85920c12013->leave($__internal_6469a23bb1f727eaaae5e8f6b114bb126571972ab0d64e6b68f6b85920c12013_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_integer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 14,  18 => 12,);
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

{% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}
", "SonataAdminBundle:CRUD:edit_integer.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_integer.html.twig");
    }
}

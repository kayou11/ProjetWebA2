<?php

/* SonataAdminBundle:CRUD:edit_integer.html.twig */
class __TwigTemplate_3499b70c580b656326c0d60cae359b51c0f1604d62473904af62ff14c1262bea extends Twig_Template
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
        $__internal_f6ea18eed2f1e97ff84deba0f5a169fc4494dba6b55df65f00e5843f7de598ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6ea18eed2f1e97ff84deba0f5a169fc4494dba6b55df65f00e5843f7de598ec->enter($__internal_f6ea18eed2f1e97ff84deba0f5a169fc4494dba6b55df65f00e5843f7de598ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $__internal_272b030107a7e5e6900bc9199329b42ba64e05bb92034674af9f17c616300aa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_272b030107a7e5e6900bc9199329b42ba64e05bb92034674af9f17c616300aa9->enter($__internal_272b030107a7e5e6900bc9199329b42ba64e05bb92034674af9f17c616300aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6ea18eed2f1e97ff84deba0f5a169fc4494dba6b55df65f00e5843f7de598ec->leave($__internal_f6ea18eed2f1e97ff84deba0f5a169fc4494dba6b55df65f00e5843f7de598ec_prof);

        
        $__internal_272b030107a7e5e6900bc9199329b42ba64e05bb92034674af9f17c616300aa9->leave($__internal_272b030107a7e5e6900bc9199329b42ba64e05bb92034674af9f17c616300aa9_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_be2adf4ffa3234f669f87368cb77fd5d29e94999a33f693f061b78a04cd2e6f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be2adf4ffa3234f669f87368cb77fd5d29e94999a33f693f061b78a04cd2e6f1->enter($__internal_be2adf4ffa3234f669f87368cb77fd5d29e94999a33f693f061b78a04cd2e6f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_0149f9ab29137b10dfc53d2990542acc827e6f1c8640f86146e8eda95af86751 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0149f9ab29137b10dfc53d2990542acc827e6f1c8640f86146e8eda95af86751->enter($__internal_0149f9ab29137b10dfc53d2990542acc827e6f1c8640f86146e8eda95af86751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 14, $this->getSourceContext()); })()), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_0149f9ab29137b10dfc53d2990542acc827e6f1c8640f86146e8eda95af86751->leave($__internal_0149f9ab29137b10dfc53d2990542acc827e6f1c8640f86146e8eda95af86751_prof);

        
        $__internal_be2adf4ffa3234f669f87368cb77fd5d29e94999a33f693f061b78a04cd2e6f1->leave($__internal_be2adf4ffa3234f669f87368cb77fd5d29e94999a33f693f061b78a04cd2e6f1_prof);

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

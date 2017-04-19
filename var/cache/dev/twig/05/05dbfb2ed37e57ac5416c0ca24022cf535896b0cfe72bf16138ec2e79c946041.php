<?php

/* SonataAdminBundle:CRUD:edit_file.html.twig */
class __TwigTemplate_1cac5e61ce7e6b1a5bb869bde340516e4bc9e32097e6a47ac8e9a7b0ed62862b extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 12, $this->getSourceContext()); })()), "SonataAdminBundle:CRUD:edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_509b5f7561f98d8d0344f2116038c3b477d443feabc27965489f0d0495052ce7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_509b5f7561f98d8d0344f2116038c3b477d443feabc27965489f0d0495052ce7->enter($__internal_509b5f7561f98d8d0344f2116038c3b477d443feabc27965489f0d0495052ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $__internal_494ecfa5426d3ec6721893e97e7210a8645a407c435fa1ca306ebc958efa7c95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_494ecfa5426d3ec6721893e97e7210a8645a407c435fa1ca306ebc958efa7c95->enter($__internal_494ecfa5426d3ec6721893e97e7210a8645a407c435fa1ca306ebc958efa7c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_509b5f7561f98d8d0344f2116038c3b477d443feabc27965489f0d0495052ce7->leave($__internal_509b5f7561f98d8d0344f2116038c3b477d443feabc27965489f0d0495052ce7_prof);

        
        $__internal_494ecfa5426d3ec6721893e97e7210a8645a407c435fa1ca306ebc958efa7c95->leave($__internal_494ecfa5426d3ec6721893e97e7210a8645a407c435fa1ca306ebc958efa7c95_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_e2d8b55ac00d2d21a56e59e4b37d61f52d046c602c34ff206aab390c775e2527 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2d8b55ac00d2d21a56e59e4b37d61f52d046c602c34ff206aab390c775e2527->enter($__internal_e2d8b55ac00d2d21a56e59e4b37d61f52d046c602c34ff206aab390c775e2527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_fe51fc2fb4490f1edc1bcb64bfc2fde8b85ea075b0d765445fcedbeb136d4bac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe51fc2fb4490f1edc1bcb64bfc2fde8b85ea075b0d765445fcedbeb136d4bac->enter($__internal_fe51fc2fb4490f1edc1bcb64bfc2fde8b85ea075b0d765445fcedbeb136d4bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 14, $this->getSourceContext()); })()), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_fe51fc2fb4490f1edc1bcb64bfc2fde8b85ea075b0d765445fcedbeb136d4bac->leave($__internal_fe51fc2fb4490f1edc1bcb64bfc2fde8b85ea075b0d765445fcedbeb136d4bac_prof);

        
        $__internal_e2d8b55ac00d2d21a56e59e4b37d61f52d046c602c34ff206aab390c775e2527->leave($__internal_e2d8b55ac00d2d21a56e59e4b37d61f52d046c602c34ff206aab390c775e2527_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_file.html.twig";
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
", "SonataAdminBundle:CRUD:edit_file.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_file.html.twig");
    }
}

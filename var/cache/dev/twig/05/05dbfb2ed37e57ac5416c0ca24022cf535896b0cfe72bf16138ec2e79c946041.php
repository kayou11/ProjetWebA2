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
        $__internal_89206d591966495b432b54f4494d6d033b8023e783866bf5ff26ac370103b0af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89206d591966495b432b54f4494d6d033b8023e783866bf5ff26ac370103b0af->enter($__internal_89206d591966495b432b54f4494d6d033b8023e783866bf5ff26ac370103b0af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $__internal_addce5096406b5541cded5e6f502dc737891248c256e117c30c59e3f8dd32350 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_addce5096406b5541cded5e6f502dc737891248c256e117c30c59e3f8dd32350->enter($__internal_addce5096406b5541cded5e6f502dc737891248c256e117c30c59e3f8dd32350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89206d591966495b432b54f4494d6d033b8023e783866bf5ff26ac370103b0af->leave($__internal_89206d591966495b432b54f4494d6d033b8023e783866bf5ff26ac370103b0af_prof);

        
        $__internal_addce5096406b5541cded5e6f502dc737891248c256e117c30c59e3f8dd32350->leave($__internal_addce5096406b5541cded5e6f502dc737891248c256e117c30c59e3f8dd32350_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_3ec05c07258fdd511f71b5c27365d25aa514792e859fe5b9d374550e645f7422 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ec05c07258fdd511f71b5c27365d25aa514792e859fe5b9d374550e645f7422->enter($__internal_3ec05c07258fdd511f71b5c27365d25aa514792e859fe5b9d374550e645f7422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_5a4578d7de93a45f63e479fdb411ef9d0d5690d217dbc3dc01c37a89fbf7c564 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a4578d7de93a45f63e479fdb411ef9d0d5690d217dbc3dc01c37a89fbf7c564->enter($__internal_5a4578d7de93a45f63e479fdb411ef9d0d5690d217dbc3dc01c37a89fbf7c564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 14, $this->getSourceContext()); })()), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_5a4578d7de93a45f63e479fdb411ef9d0d5690d217dbc3dc01c37a89fbf7c564->leave($__internal_5a4578d7de93a45f63e479fdb411ef9d0d5690d217dbc3dc01c37a89fbf7c564_prof);

        
        $__internal_3ec05c07258fdd511f71b5c27365d25aa514792e859fe5b9d374550e645f7422->leave($__internal_3ec05c07258fdd511f71b5c27365d25aa514792e859fe5b9d374550e645f7422_prof);

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

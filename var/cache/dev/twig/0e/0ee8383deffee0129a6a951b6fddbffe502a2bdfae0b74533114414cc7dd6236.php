<?php

/* SonataAdminBundle:CRUD:edit_text.html.twig */
class __TwigTemplate_8b44b05c30ed79a002e036f5f79aeffbfeb82edc828e67b62d4556eb241f8d3c extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 12, $this->getSourceContext()); })()), "SonataAdminBundle:CRUD:edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_15e763a3272670fce13760e161704e3ef8fa330771636497eb72cfb866fbb7ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15e763a3272670fce13760e161704e3ef8fa330771636497eb72cfb866fbb7ac->enter($__internal_15e763a3272670fce13760e161704e3ef8fa330771636497eb72cfb866fbb7ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $__internal_ae9bf1df9bc1aefe7268c4e83cf3fa9f6e7afb9ef65584903e728f93f0623b90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae9bf1df9bc1aefe7268c4e83cf3fa9f6e7afb9ef65584903e728f93f0623b90->enter($__internal_ae9bf1df9bc1aefe7268c4e83cf3fa9f6e7afb9ef65584903e728f93f0623b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15e763a3272670fce13760e161704e3ef8fa330771636497eb72cfb866fbb7ac->leave($__internal_15e763a3272670fce13760e161704e3ef8fa330771636497eb72cfb866fbb7ac_prof);

        
        $__internal_ae9bf1df9bc1aefe7268c4e83cf3fa9f6e7afb9ef65584903e728f93f0623b90->leave($__internal_ae9bf1df9bc1aefe7268c4e83cf3fa9f6e7afb9ef65584903e728f93f0623b90_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_53845c48a9e2316ad0c641f84e5f0a27b1cee48037e305c08569f6e783935d9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53845c48a9e2316ad0c641f84e5f0a27b1cee48037e305c08569f6e783935d9d->enter($__internal_53845c48a9e2316ad0c641f84e5f0a27b1cee48037e305c08569f6e783935d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_ba3f25fc5e22712ee51107d24ee2527751f4ba9f3242bf108735b3e2ee19994d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba3f25fc5e22712ee51107d24ee2527751f4ba9f3242bf108735b3e2ee19994d->enter($__internal_ba3f25fc5e22712ee51107d24ee2527751f4ba9f3242bf108735b3e2ee19994d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 14, $this->getSourceContext()); })()), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_ba3f25fc5e22712ee51107d24ee2527751f4ba9f3242bf108735b3e2ee19994d->leave($__internal_ba3f25fc5e22712ee51107d24ee2527751f4ba9f3242bf108735b3e2ee19994d_prof);

        
        $__internal_53845c48a9e2316ad0c641f84e5f0a27b1cee48037e305c08569f6e783935d9d->leave($__internal_53845c48a9e2316ad0c641f84e5f0a27b1cee48037e305c08569f6e783935d9d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_text.html.twig";
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
", "SonataAdminBundle:CRUD:edit_text.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_text.html.twig");
    }
}

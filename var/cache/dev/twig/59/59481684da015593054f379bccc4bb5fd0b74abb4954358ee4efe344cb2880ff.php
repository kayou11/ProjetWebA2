<?php

/* SonataAdminBundle:CRUD:edit_file.html.twig */
class __TwigTemplate_361493c19cea84c9071050320493468478b690c7a8fd6cbea8ebb7a6c55fec00 extends Twig_Template
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
        $__internal_0a77ecf64a5dba7b2c90532ac6604a0e4a6b2e6bc55f7beffe20580508e1b56f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a77ecf64a5dba7b2c90532ac6604a0e4a6b2e6bc55f7beffe20580508e1b56f->enter($__internal_0a77ecf64a5dba7b2c90532ac6604a0e4a6b2e6bc55f7beffe20580508e1b56f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $__internal_c137993db9e0c1a4fb688a344d28b9ba42cc2e27ccd1cd885ad528f5ebd9b0bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c137993db9e0c1a4fb688a344d28b9ba42cc2e27ccd1cd885ad528f5ebd9b0bc->enter($__internal_c137993db9e0c1a4fb688a344d28b9ba42cc2e27ccd1cd885ad528f5ebd9b0bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a77ecf64a5dba7b2c90532ac6604a0e4a6b2e6bc55f7beffe20580508e1b56f->leave($__internal_0a77ecf64a5dba7b2c90532ac6604a0e4a6b2e6bc55f7beffe20580508e1b56f_prof);

        
        $__internal_c137993db9e0c1a4fb688a344d28b9ba42cc2e27ccd1cd885ad528f5ebd9b0bc->leave($__internal_c137993db9e0c1a4fb688a344d28b9ba42cc2e27ccd1cd885ad528f5ebd9b0bc_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_5d0398db7784607a8efc0fcb00d14f976ea45f2eabbe24dba0904fe2e29f9253 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d0398db7784607a8efc0fcb00d14f976ea45f2eabbe24dba0904fe2e29f9253->enter($__internal_5d0398db7784607a8efc0fcb00d14f976ea45f2eabbe24dba0904fe2e29f9253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_3ed7369d64d4a83afb4a400b9c450f5c4595bc1a0d32b0c3bcd882de00abcfbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ed7369d64d4a83afb4a400b9c450f5c4595bc1a0d32b0c3bcd882de00abcfbc->enter($__internal_3ed7369d64d4a83afb4a400b9c450f5c4595bc1a0d32b0c3bcd882de00abcfbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 14, $this->getSourceContext()); })()), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_3ed7369d64d4a83afb4a400b9c450f5c4595bc1a0d32b0c3bcd882de00abcfbc->leave($__internal_3ed7369d64d4a83afb4a400b9c450f5c4595bc1a0d32b0c3bcd882de00abcfbc_prof);

        
        $__internal_5d0398db7784607a8efc0fcb00d14f976ea45f2eabbe24dba0904fe2e29f9253->leave($__internal_5d0398db7784607a8efc0fcb00d14f976ea45f2eabbe24dba0904fe2e29f9253_prof);

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

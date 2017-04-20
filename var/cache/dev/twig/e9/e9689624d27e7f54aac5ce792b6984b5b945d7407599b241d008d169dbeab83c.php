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
        $__internal_226368595a1f0dcb28e7c2d4d645f9416bd3a480dd65bfec0133d9f12457565e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_226368595a1f0dcb28e7c2d4d645f9416bd3a480dd65bfec0133d9f12457565e->enter($__internal_226368595a1f0dcb28e7c2d4d645f9416bd3a480dd65bfec0133d9f12457565e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $__internal_7a9981e1969769dda74c2dab864566b605dab7faba25f0aeb48747a20038178f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a9981e1969769dda74c2dab864566b605dab7faba25f0aeb48747a20038178f->enter($__internal_7a9981e1969769dda74c2dab864566b605dab7faba25f0aeb48747a20038178f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_226368595a1f0dcb28e7c2d4d645f9416bd3a480dd65bfec0133d9f12457565e->leave($__internal_226368595a1f0dcb28e7c2d4d645f9416bd3a480dd65bfec0133d9f12457565e_prof);

        
        $__internal_7a9981e1969769dda74c2dab864566b605dab7faba25f0aeb48747a20038178f->leave($__internal_7a9981e1969769dda74c2dab864566b605dab7faba25f0aeb48747a20038178f_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_84c508046825ea265a6e0385e150f6615aebb60615072eaa0244ec5dd81a310a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84c508046825ea265a6e0385e150f6615aebb60615072eaa0244ec5dd81a310a->enter($__internal_84c508046825ea265a6e0385e150f6615aebb60615072eaa0244ec5dd81a310a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_fa72ea98b5d08993c6256b9a6d1d5d59bc2bb8e0fc4c36a410e40dcbe64a971f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa72ea98b5d08993c6256b9a6d1d5d59bc2bb8e0fc4c36a410e40dcbe64a971f->enter($__internal_fa72ea98b5d08993c6256b9a6d1d5d59bc2bb8e0fc4c36a410e40dcbe64a971f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 14, $this->getSourceContext()); })()), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_fa72ea98b5d08993c6256b9a6d1d5d59bc2bb8e0fc4c36a410e40dcbe64a971f->leave($__internal_fa72ea98b5d08993c6256b9a6d1d5d59bc2bb8e0fc4c36a410e40dcbe64a971f_prof);

        
        $__internal_84c508046825ea265a6e0385e150f6615aebb60615072eaa0244ec5dd81a310a->leave($__internal_84c508046825ea265a6e0385e150f6615aebb60615072eaa0244ec5dd81a310a_prof);

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

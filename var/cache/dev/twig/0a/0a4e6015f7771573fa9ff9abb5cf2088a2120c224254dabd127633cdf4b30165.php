<?php

/* SonataAdminBundle:CRUD:edit_string.html.twig */
class __TwigTemplate_9aa28a229cd910c001f1ff507afa47c7b18fea434dbeb0fde55a9ed6ac8add09 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 12, $this->getSourceContext()); })()), "SonataAdminBundle:CRUD:edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_314281238bc191f62fb25b8803d52c8c235cbe723e43dff9ac60193031d54624 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_314281238bc191f62fb25b8803d52c8c235cbe723e43dff9ac60193031d54624->enter($__internal_314281238bc191f62fb25b8803d52c8c235cbe723e43dff9ac60193031d54624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $__internal_08fca4f010428cd4ac2178d1399ea02795b2f1f07fb90763f24a803dc217138d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08fca4f010428cd4ac2178d1399ea02795b2f1f07fb90763f24a803dc217138d->enter($__internal_08fca4f010428cd4ac2178d1399ea02795b2f1f07fb90763f24a803dc217138d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_314281238bc191f62fb25b8803d52c8c235cbe723e43dff9ac60193031d54624->leave($__internal_314281238bc191f62fb25b8803d52c8c235cbe723e43dff9ac60193031d54624_prof);

        
        $__internal_08fca4f010428cd4ac2178d1399ea02795b2f1f07fb90763f24a803dc217138d->leave($__internal_08fca4f010428cd4ac2178d1399ea02795b2f1f07fb90763f24a803dc217138d_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_eb9ca8674d7d7d354acf38115ded78b8092fb5596f1e937a44cc54910fade75c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb9ca8674d7d7d354acf38115ded78b8092fb5596f1e937a44cc54910fade75c->enter($__internal_eb9ca8674d7d7d354acf38115ded78b8092fb5596f1e937a44cc54910fade75c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_6670ecb321372c7268914cc46c0c00ac4e4481153fae68a7893f62a2b165ffb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6670ecb321372c7268914cc46c0c00ac4e4481153fae68a7893f62a2b165ffb4->enter($__internal_6670ecb321372c7268914cc46c0c00ac4e4481153fae68a7893f62a2b165ffb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 14, $this->getSourceContext()); })()), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_6670ecb321372c7268914cc46c0c00ac4e4481153fae68a7893f62a2b165ffb4->leave($__internal_6670ecb321372c7268914cc46c0c00ac4e4481153fae68a7893f62a2b165ffb4_prof);

        
        $__internal_eb9ca8674d7d7d354acf38115ded78b8092fb5596f1e937a44cc54910fade75c->leave($__internal_eb9ca8674d7d7d354acf38115ded78b8092fb5596f1e937a44cc54910fade75c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_string.html.twig";
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
", "SonataAdminBundle:CRUD:edit_string.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_string.html.twig");
    }
}

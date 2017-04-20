<?php

/* SonataAdminBundle:CRUD:edit_string.html.twig */
class __TwigTemplate_6b22664ec4c7ec578b132b37b27d55f5a141e97d198fb863cff1c8f8aca083c9 extends Twig_Template
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
        $__internal_95444304960e55fbf9f13794b523a33acf74299a43a6b4820e01b321a7cbda27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95444304960e55fbf9f13794b523a33acf74299a43a6b4820e01b321a7cbda27->enter($__internal_95444304960e55fbf9f13794b523a33acf74299a43a6b4820e01b321a7cbda27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $__internal_546dace3dde59f93d33c0d387bf854ad8d424639288cb624f8f4a6d285e91c22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_546dace3dde59f93d33c0d387bf854ad8d424639288cb624f8f4a6d285e91c22->enter($__internal_546dace3dde59f93d33c0d387bf854ad8d424639288cb624f8f4a6d285e91c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95444304960e55fbf9f13794b523a33acf74299a43a6b4820e01b321a7cbda27->leave($__internal_95444304960e55fbf9f13794b523a33acf74299a43a6b4820e01b321a7cbda27_prof);

        
        $__internal_546dace3dde59f93d33c0d387bf854ad8d424639288cb624f8f4a6d285e91c22->leave($__internal_546dace3dde59f93d33c0d387bf854ad8d424639288cb624f8f4a6d285e91c22_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_45ca95ea0229fe313feff1781e50ddec48d66d47f63cbbac5c8364f8ae7a773a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45ca95ea0229fe313feff1781e50ddec48d66d47f63cbbac5c8364f8ae7a773a->enter($__internal_45ca95ea0229fe313feff1781e50ddec48d66d47f63cbbac5c8364f8ae7a773a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_39daf613e097bb7dbcdb4fd226ce0060348129ad9a00f21a4746cdca7f85db59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39daf613e097bb7dbcdb4fd226ce0060348129ad9a00f21a4746cdca7f85db59->enter($__internal_39daf613e097bb7dbcdb4fd226ce0060348129ad9a00f21a4746cdca7f85db59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 14, $this->getSourceContext()); })()), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_39daf613e097bb7dbcdb4fd226ce0060348129ad9a00f21a4746cdca7f85db59->leave($__internal_39daf613e097bb7dbcdb4fd226ce0060348129ad9a00f21a4746cdca7f85db59_prof);

        
        $__internal_45ca95ea0229fe313feff1781e50ddec48d66d47f63cbbac5c8364f8ae7a773a->leave($__internal_45ca95ea0229fe313feff1781e50ddec48d66d47f63cbbac5c8364f8ae7a773a_prof);

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

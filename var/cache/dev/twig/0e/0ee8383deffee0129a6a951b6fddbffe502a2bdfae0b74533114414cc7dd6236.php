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
        $__internal_8ab0ff2c8ccbcf19c87b92cf1faf9a0a4574299aa05f6a1a6b67736cca976e34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ab0ff2c8ccbcf19c87b92cf1faf9a0a4574299aa05f6a1a6b67736cca976e34->enter($__internal_8ab0ff2c8ccbcf19c87b92cf1faf9a0a4574299aa05f6a1a6b67736cca976e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $__internal_869300f83f9587700b69dc009c1fc7b0b2d0d190062fb1763c48b12987be642c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_869300f83f9587700b69dc009c1fc7b0b2d0d190062fb1763c48b12987be642c->enter($__internal_869300f83f9587700b69dc009c1fc7b0b2d0d190062fb1763c48b12987be642c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ab0ff2c8ccbcf19c87b92cf1faf9a0a4574299aa05f6a1a6b67736cca976e34->leave($__internal_8ab0ff2c8ccbcf19c87b92cf1faf9a0a4574299aa05f6a1a6b67736cca976e34_prof);

        
        $__internal_869300f83f9587700b69dc009c1fc7b0b2d0d190062fb1763c48b12987be642c->leave($__internal_869300f83f9587700b69dc009c1fc7b0b2d0d190062fb1763c48b12987be642c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_518d4ea3a6229e51c4f8f0eb24f30ac1cc111b0df34df570d4ccfc4cb6107d34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_518d4ea3a6229e51c4f8f0eb24f30ac1cc111b0df34df570d4ccfc4cb6107d34->enter($__internal_518d4ea3a6229e51c4f8f0eb24f30ac1cc111b0df34df570d4ccfc4cb6107d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_1ef8c68215c05219e251b57875497867639d7f658c1dd98f42fb3e74e843014e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ef8c68215c05219e251b57875497867639d7f658c1dd98f42fb3e74e843014e->enter($__internal_1ef8c68215c05219e251b57875497867639d7f658c1dd98f42fb3e74e843014e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 14, $this->getSourceContext()); })()), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_1ef8c68215c05219e251b57875497867639d7f658c1dd98f42fb3e74e843014e->leave($__internal_1ef8c68215c05219e251b57875497867639d7f658c1dd98f42fb3e74e843014e_prof);

        
        $__internal_518d4ea3a6229e51c4f8f0eb24f30ac1cc111b0df34df570d4ccfc4cb6107d34->leave($__internal_518d4ea3a6229e51c4f8f0eb24f30ac1cc111b0df34df570d4ccfc4cb6107d34_prof);

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

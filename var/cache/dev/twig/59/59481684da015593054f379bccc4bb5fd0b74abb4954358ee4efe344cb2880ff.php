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
        $__internal_4a209e283b94e1f79c0aa0d1ae0d4d0ff262bf1beebe9a5394d4b4f760a03dec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a209e283b94e1f79c0aa0d1ae0d4d0ff262bf1beebe9a5394d4b4f760a03dec->enter($__internal_4a209e283b94e1f79c0aa0d1ae0d4d0ff262bf1beebe9a5394d4b4f760a03dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $__internal_a570d32c987ba57ff9bdb85e97f4d5624834bdf376a8cce111588f984ce767d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a570d32c987ba57ff9bdb85e97f4d5624834bdf376a8cce111588f984ce767d8->enter($__internal_a570d32c987ba57ff9bdb85e97f4d5624834bdf376a8cce111588f984ce767d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a209e283b94e1f79c0aa0d1ae0d4d0ff262bf1beebe9a5394d4b4f760a03dec->leave($__internal_4a209e283b94e1f79c0aa0d1ae0d4d0ff262bf1beebe9a5394d4b4f760a03dec_prof);

        
        $__internal_a570d32c987ba57ff9bdb85e97f4d5624834bdf376a8cce111588f984ce767d8->leave($__internal_a570d32c987ba57ff9bdb85e97f4d5624834bdf376a8cce111588f984ce767d8_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_730223c95fced7084e615a555cd36cdb3477849e2a13c9ac313634b146e6f618 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_730223c95fced7084e615a555cd36cdb3477849e2a13c9ac313634b146e6f618->enter($__internal_730223c95fced7084e615a555cd36cdb3477849e2a13c9ac313634b146e6f618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_b3c8d440149ddad0d5ccc18ffc7c2a0e50df2456ed6a35fd3d4899848cca55f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3c8d440149ddad0d5ccc18ffc7c2a0e50df2456ed6a35fd3d4899848cca55f8->enter($__internal_b3c8d440149ddad0d5ccc18ffc7c2a0e50df2456ed6a35fd3d4899848cca55f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 14, $this->getSourceContext()); })()), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_b3c8d440149ddad0d5ccc18ffc7c2a0e50df2456ed6a35fd3d4899848cca55f8->leave($__internal_b3c8d440149ddad0d5ccc18ffc7c2a0e50df2456ed6a35fd3d4899848cca55f8_prof);

        
        $__internal_730223c95fced7084e615a555cd36cdb3477849e2a13c9ac313634b146e6f618->leave($__internal_730223c95fced7084e615a555cd36cdb3477849e2a13c9ac313634b146e6f618_prof);

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

<?php

/* SonataAdminBundle:CRUD:edit_array.html.twig */
class __TwigTemplate_40d1d98849e810c86d49a519da16daa1a13bc4299a864ae863fcee270aaef8fe extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 12, $this->getSourceContext()); })()), "SonataAdminBundle:CRUD:edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5ff5611734fc49200ac867740de51e0a849b0632e726bbe374e45084976905e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5ff5611734fc49200ac867740de51e0a849b0632e726bbe374e45084976905e->enter($__internal_a5ff5611734fc49200ac867740de51e0a849b0632e726bbe374e45084976905e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $__internal_5a8afa313301e20767fc36f3781e223c92725e2a0310f1b7243efb5acda17b1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a8afa313301e20767fc36f3781e223c92725e2a0310f1b7243efb5acda17b1e->enter($__internal_5a8afa313301e20767fc36f3781e223c92725e2a0310f1b7243efb5acda17b1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5ff5611734fc49200ac867740de51e0a849b0632e726bbe374e45084976905e->leave($__internal_a5ff5611734fc49200ac867740de51e0a849b0632e726bbe374e45084976905e_prof);

        
        $__internal_5a8afa313301e20767fc36f3781e223c92725e2a0310f1b7243efb5acda17b1e->leave($__internal_5a8afa313301e20767fc36f3781e223c92725e2a0310f1b7243efb5acda17b1e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_7b004fce8fb0978b4ca26e5a43dc9eb81776129a2031d9ee199bc69bd3e078e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b004fce8fb0978b4ca26e5a43dc9eb81776129a2031d9ee199bc69bd3e078e2->enter($__internal_7b004fce8fb0978b4ca26e5a43dc9eb81776129a2031d9ee199bc69bd3e078e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_24fdd35c6dca0bb34c3737da7d6b6cb3008fa2551aaee063debf91fc7853e887 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24fdd35c6dca0bb34c3737da7d6b6cb3008fa2551aaee063debf91fc7853e887->enter($__internal_24fdd35c6dca0bb34c3737da7d6b6cb3008fa2551aaee063debf91fc7853e887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 16, $this->getSourceContext()); })()), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_24fdd35c6dca0bb34c3737da7d6b6cb3008fa2551aaee063debf91fc7853e887->leave($__internal_24fdd35c6dca0bb34c3737da7d6b6cb3008fa2551aaee063debf91fc7853e887_prof);

        
        $__internal_7b004fce8fb0978b4ca26e5a43dc9eb81776129a2031d9ee199bc69bd3e078e2->leave($__internal_7b004fce8fb0978b4ca26e5a43dc9eb81776129a2031d9ee199bc69bd3e078e2_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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

{% block field %}
    <span class=\"edit\">
        {{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}
    </span>
{% endblock %}
", "SonataAdminBundle:CRUD:edit_array.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_array.html.twig");
    }
}

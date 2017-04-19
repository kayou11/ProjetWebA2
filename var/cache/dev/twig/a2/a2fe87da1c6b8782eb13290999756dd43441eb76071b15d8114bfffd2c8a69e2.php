<?php

/* SonataAdminBundle:CRUD:edit_text.html.twig */
class __TwigTemplate_195beb20c0e01ca53ab129a29d8347405c1916d23b24077f6467cd4c2192c2de extends Twig_Template
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
        $__internal_c66c5276fd8e9280414bd2104adb6e64546625cc1ff8151432e65a909473fe5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c66c5276fd8e9280414bd2104adb6e64546625cc1ff8151432e65a909473fe5b->enter($__internal_c66c5276fd8e9280414bd2104adb6e64546625cc1ff8151432e65a909473fe5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $__internal_9be8d88dee6007e47f24e07e972d86a1d24bb0f3c9b5ceb6c53efacada1afe50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9be8d88dee6007e47f24e07e972d86a1d24bb0f3c9b5ceb6c53efacada1afe50->enter($__internal_9be8d88dee6007e47f24e07e972d86a1d24bb0f3c9b5ceb6c53efacada1afe50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c66c5276fd8e9280414bd2104adb6e64546625cc1ff8151432e65a909473fe5b->leave($__internal_c66c5276fd8e9280414bd2104adb6e64546625cc1ff8151432e65a909473fe5b_prof);

        
        $__internal_9be8d88dee6007e47f24e07e972d86a1d24bb0f3c9b5ceb6c53efacada1afe50->leave($__internal_9be8d88dee6007e47f24e07e972d86a1d24bb0f3c9b5ceb6c53efacada1afe50_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_78742726b7e3ee00f22d7f0612ee9e4de00cec40cf788c0c2291dc5afdc69606 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78742726b7e3ee00f22d7f0612ee9e4de00cec40cf788c0c2291dc5afdc69606->enter($__internal_78742726b7e3ee00f22d7f0612ee9e4de00cec40cf788c0c2291dc5afdc69606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_8011116c741fffca9b78227bf1676b22f77207439a7905c4f732775ed5e51453 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8011116c741fffca9b78227bf1676b22f77207439a7905c4f732775ed5e51453->enter($__internal_8011116c741fffca9b78227bf1676b22f77207439a7905c4f732775ed5e51453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 14, $this->getSourceContext()); })()), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_8011116c741fffca9b78227bf1676b22f77207439a7905c4f732775ed5e51453->leave($__internal_8011116c741fffca9b78227bf1676b22f77207439a7905c4f732775ed5e51453_prof);

        
        $__internal_78742726b7e3ee00f22d7f0612ee9e4de00cec40cf788c0c2291dc5afdc69606->leave($__internal_78742726b7e3ee00f22d7f0612ee9e4de00cec40cf788c0c2291dc5afdc69606_prof);

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

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
        $__internal_e40d8aecae1a042e88d4b5afdf1c83bc9994e1182cd80cf07003c4cf57ab2706 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e40d8aecae1a042e88d4b5afdf1c83bc9994e1182cd80cf07003c4cf57ab2706->enter($__internal_e40d8aecae1a042e88d4b5afdf1c83bc9994e1182cd80cf07003c4cf57ab2706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $__internal_9a081fe90492efa04150da891d6430d7ac29f5934a3ca64331ab570ff278408c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a081fe90492efa04150da891d6430d7ac29f5934a3ca64331ab570ff278408c->enter($__internal_9a081fe90492efa04150da891d6430d7ac29f5934a3ca64331ab570ff278408c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e40d8aecae1a042e88d4b5afdf1c83bc9994e1182cd80cf07003c4cf57ab2706->leave($__internal_e40d8aecae1a042e88d4b5afdf1c83bc9994e1182cd80cf07003c4cf57ab2706_prof);

        
        $__internal_9a081fe90492efa04150da891d6430d7ac29f5934a3ca64331ab570ff278408c->leave($__internal_9a081fe90492efa04150da891d6430d7ac29f5934a3ca64331ab570ff278408c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c5cc755a3c38f5c52d560534eb0a20bb3e1752ea05f72aad97719324a0ed9198 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5cc755a3c38f5c52d560534eb0a20bb3e1752ea05f72aad97719324a0ed9198->enter($__internal_c5cc755a3c38f5c52d560534eb0a20bb3e1752ea05f72aad97719324a0ed9198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_aa044260738a7f4c2bfeec61f16ecda66a0d8aa00561a3e5f83b1ca38bc6b044 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa044260738a7f4c2bfeec61f16ecda66a0d8aa00561a3e5f83b1ca38bc6b044->enter($__internal_aa044260738a7f4c2bfeec61f16ecda66a0d8aa00561a3e5f83b1ca38bc6b044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 16, $this->getSourceContext()); })()), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_aa044260738a7f4c2bfeec61f16ecda66a0d8aa00561a3e5f83b1ca38bc6b044->leave($__internal_aa044260738a7f4c2bfeec61f16ecda66a0d8aa00561a3e5f83b1ca38bc6b044_prof);

        
        $__internal_c5cc755a3c38f5c52d560534eb0a20bb3e1752ea05f72aad97719324a0ed9198->leave($__internal_c5cc755a3c38f5c52d560534eb0a20bb3e1752ea05f72aad97719324a0ed9198_prof);

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

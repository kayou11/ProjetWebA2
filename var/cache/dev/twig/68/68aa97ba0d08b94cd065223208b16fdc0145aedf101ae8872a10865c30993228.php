<?php

/* SonataAdminBundle:CRUD:show_boolean.html.twig */
class __TwigTemplate_aad33cc93cc688e8343b658fdb48996e17088bf5d424330971d153b76e4d1ead extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_boolean.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_15a5d4985768ae4482077938f83da89f64daa7999bf1bb6bb0fc9a033bfe03c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15a5d4985768ae4482077938f83da89f64daa7999bf1bb6bb0fc9a033bfe03c5->enter($__internal_15a5d4985768ae4482077938f83da89f64daa7999bf1bb6bb0fc9a033bfe03c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_boolean.html.twig"));

        $__internal_22de67ffeddf1d43f15398cef8c7d29ad46f721b92f3626bee65fb52a0e81862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22de67ffeddf1d43f15398cef8c7d29ad46f721b92f3626bee65fb52a0e81862->enter($__internal_22de67ffeddf1d43f15398cef8c7d29ad46f721b92f3626bee65fb52a0e81862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_boolean.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15a5d4985768ae4482077938f83da89f64daa7999bf1bb6bb0fc9a033bfe03c5->leave($__internal_15a5d4985768ae4482077938f83da89f64daa7999bf1bb6bb0fc9a033bfe03c5_prof);

        
        $__internal_22de67ffeddf1d43f15398cef8c7d29ad46f721b92f3626bee65fb52a0e81862->leave($__internal_22de67ffeddf1d43f15398cef8c7d29ad46f721b92f3626bee65fb52a0e81862_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_44e6a7cd0e343e93b60eb288152a77a470186ed38e2023f687f63ff61d853823 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44e6a7cd0e343e93b60eb288152a77a470186ed38e2023f687f63ff61d853823->enter($__internal_44e6a7cd0e343e93b60eb288152a77a470186ed38e2023f687f63ff61d853823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_c40a920019f9a290cc0ea06ef944950e594cd2ae17f4c36fc014b303dfaccba2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c40a920019f9a290cc0ea06ef944950e594cd2ae17f4c36fc014b303dfaccba2->enter($__internal_c40a920019f9a290cc0ea06ef944950e594cd2ae17f4c36fc014b303dfaccba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        ob_start();
        // line 16
        echo "    ";
        if ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 16, $this->getSourceContext()); })())) {
            // line 17
            echo "        <span class=\"label label-success\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
            echo "</span>
    ";
        } else {
            // line 19
            echo "        <span class=\"label label-danger\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
            echo "</span>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_c40a920019f9a290cc0ea06ef944950e594cd2ae17f4c36fc014b303dfaccba2->leave($__internal_c40a920019f9a290cc0ea06ef944950e594cd2ae17f4c36fc014b303dfaccba2_prof);

        
        $__internal_44e6a7cd0e343e93b60eb288152a77a470186ed38e2023f687f63ff61d853823->leave($__internal_44e6a7cd0e343e93b60eb288152a77a470186ed38e2023f687f63ff61d853823_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 19,  54 => 17,  51 => 16,  49 => 15,  40 => 14,  11 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
{% spaceless %}
    {% if value %}
        <span class=\"label label-success\">{%- trans from 'SonataAdminBundle' %}label_type_yes{% endtrans -%}</span>
    {% else %}
        <span class=\"label label-danger\">{%- trans from 'SonataAdminBundle' %}label_type_no{% endtrans -%}</span>
    {% endif %}
{% endspaceless %}
{% endblock %}
", "SonataAdminBundle:CRUD:show_boolean.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_boolean.html.twig");
    }
}

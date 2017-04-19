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
        $__internal_4b8072f410a5cc6289a1df258b312df188e5c226dc7ae48f2736be4f4b9ccc6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b8072f410a5cc6289a1df258b312df188e5c226dc7ae48f2736be4f4b9ccc6c->enter($__internal_4b8072f410a5cc6289a1df258b312df188e5c226dc7ae48f2736be4f4b9ccc6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_boolean.html.twig"));

        $__internal_960fe2a79eb361f8bec23d912d2507879972cd7e29f05c2e1749eaadb3d68dbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_960fe2a79eb361f8bec23d912d2507879972cd7e29f05c2e1749eaadb3d68dbc->enter($__internal_960fe2a79eb361f8bec23d912d2507879972cd7e29f05c2e1749eaadb3d68dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_boolean.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b8072f410a5cc6289a1df258b312df188e5c226dc7ae48f2736be4f4b9ccc6c->leave($__internal_4b8072f410a5cc6289a1df258b312df188e5c226dc7ae48f2736be4f4b9ccc6c_prof);

        
        $__internal_960fe2a79eb361f8bec23d912d2507879972cd7e29f05c2e1749eaadb3d68dbc->leave($__internal_960fe2a79eb361f8bec23d912d2507879972cd7e29f05c2e1749eaadb3d68dbc_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_27455f3d4beb7475beb34af3fae64f5c6b5ea2b96ee841138e0b7f251cc6ceed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27455f3d4beb7475beb34af3fae64f5c6b5ea2b96ee841138e0b7f251cc6ceed->enter($__internal_27455f3d4beb7475beb34af3fae64f5c6b5ea2b96ee841138e0b7f251cc6ceed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_5c564ee0ebff46fe6c6795fb83d8aefe10b395d6a04402c8da7918e0cad2a03d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c564ee0ebff46fe6c6795fb83d8aefe10b395d6a04402c8da7918e0cad2a03d->enter($__internal_5c564ee0ebff46fe6c6795fb83d8aefe10b395d6a04402c8da7918e0cad2a03d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_5c564ee0ebff46fe6c6795fb83d8aefe10b395d6a04402c8da7918e0cad2a03d->leave($__internal_5c564ee0ebff46fe6c6795fb83d8aefe10b395d6a04402c8da7918e0cad2a03d_prof);

        
        $__internal_27455f3d4beb7475beb34af3fae64f5c6b5ea2b96ee841138e0b7f251cc6ceed->leave($__internal_27455f3d4beb7475beb34af3fae64f5c6b5ea2b96ee841138e0b7f251cc6ceed_prof);

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

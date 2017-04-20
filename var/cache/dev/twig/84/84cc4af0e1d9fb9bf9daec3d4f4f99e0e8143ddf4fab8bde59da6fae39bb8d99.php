<?php

/* SonataAdminBundle:CRUD:list_email.html.twig */
class __TwigTemplate_13c960a900773b9773380f24c36a97ce8757304dd0751da5d1872276985aa93a extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_email.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_50a7e64d12d505478e44eb206f83fc076b03de494355611d2327587aed3d358b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50a7e64d12d505478e44eb206f83fc076b03de494355611d2327587aed3d358b->enter($__internal_50a7e64d12d505478e44eb206f83fc076b03de494355611d2327587aed3d358b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_email.html.twig"));

        $__internal_b1ef1f693aeff08de399637aec55ae57899a05594c6021754bb06f64d750c346 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1ef1f693aeff08de399637aec55ae57899a05594c6021754bb06f64d750c346->enter($__internal_b1ef1f693aeff08de399637aec55ae57899a05594c6021754bb06f64d750c346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_email.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50a7e64d12d505478e44eb206f83fc076b03de494355611d2327587aed3d358b->leave($__internal_50a7e64d12d505478e44eb206f83fc076b03de494355611d2327587aed3d358b_prof);

        
        $__internal_b1ef1f693aeff08de399637aec55ae57899a05594c6021754bb06f64d750c346->leave($__internal_b1ef1f693aeff08de399637aec55ae57899a05594c6021754bb06f64d750c346_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_9b9cbc8f0941698934cb7dbe8ce70d9adae42884b1f5d234df89d82b44323463 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b9cbc8f0941698934cb7dbe8ce70d9adae42884b1f5d234df89d82b44323463->enter($__internal_9b9cbc8f0941698934cb7dbe8ce70d9adae42884b1f5d234df89d82b44323463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_1f6ed8b22d1121747325b1a0227b66d4e754ea9897c8004d7eaf83734e4aedd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f6ed8b22d1121747325b1a0227b66d4e754ea9897c8004d7eaf83734e4aedd0->enter($__internal_1f6ed8b22d1121747325b1a0227b66d4e754ea9897c8004d7eaf83734e4aedd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:list_email.html.twig", 15)->display($context);
        
        $__internal_1f6ed8b22d1121747325b1a0227b66d4e754ea9897c8004d7eaf83734e4aedd0->leave($__internal_1f6ed8b22d1121747325b1a0227b66d4e754ea9897c8004d7eaf83734e4aedd0_prof);

        
        $__internal_9b9cbc8f0941698934cb7dbe8ce70d9adae42884b1f5d234df89d82b44323463->leave($__internal_9b9cbc8f0941698934cb7dbe8ce70d9adae42884b1f5d234df89d82b44323463_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 15,  39 => 14,  18 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}
{% endblock %}
", "SonataAdminBundle:CRUD:list_email.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_email.html.twig");
    }
}

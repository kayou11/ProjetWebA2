<?php

/* SonataAdminBundle:CRUD:list_email.html.twig */
class __TwigTemplate_1d448cc819149c94f689617cba91c5910007c72154c2d98ebfa170b9d07d4019 extends Twig_Template
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
        $__internal_aac43ad7995e64b09211517cbdd167f2369080f4a8758818d378d52409f97f6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aac43ad7995e64b09211517cbdd167f2369080f4a8758818d378d52409f97f6c->enter($__internal_aac43ad7995e64b09211517cbdd167f2369080f4a8758818d378d52409f97f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_email.html.twig"));

        $__internal_8fb2dab412b9e4fba886f83109341e1000ebe101aecdcb683c70fe3898380dd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fb2dab412b9e4fba886f83109341e1000ebe101aecdcb683c70fe3898380dd7->enter($__internal_8fb2dab412b9e4fba886f83109341e1000ebe101aecdcb683c70fe3898380dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_email.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aac43ad7995e64b09211517cbdd167f2369080f4a8758818d378d52409f97f6c->leave($__internal_aac43ad7995e64b09211517cbdd167f2369080f4a8758818d378d52409f97f6c_prof);

        
        $__internal_8fb2dab412b9e4fba886f83109341e1000ebe101aecdcb683c70fe3898380dd7->leave($__internal_8fb2dab412b9e4fba886f83109341e1000ebe101aecdcb683c70fe3898380dd7_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_57a8ab09e8cbb8598062a06dcaa8943dc91a5a64d7f15e1e081a6679d533beb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57a8ab09e8cbb8598062a06dcaa8943dc91a5a64d7f15e1e081a6679d533beb0->enter($__internal_57a8ab09e8cbb8598062a06dcaa8943dc91a5a64d7f15e1e081a6679d533beb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_dc42a336a9e76d3028aa770b499724b2e4fc08c2c47ef942c27b81b077e797c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc42a336a9e76d3028aa770b499724b2e4fc08c2c47ef942c27b81b077e797c2->enter($__internal_dc42a336a9e76d3028aa770b499724b2e4fc08c2c47ef942c27b81b077e797c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:list_email.html.twig", 15)->display($context);
        
        $__internal_dc42a336a9e76d3028aa770b499724b2e4fc08c2c47ef942c27b81b077e797c2->leave($__internal_dc42a336a9e76d3028aa770b499724b2e4fc08c2c47ef942c27b81b077e797c2_prof);

        
        $__internal_57a8ab09e8cbb8598062a06dcaa8943dc91a5a64d7f15e1e081a6679d533beb0->leave($__internal_57a8ab09e8cbb8598062a06dcaa8943dc91a5a64d7f15e1e081a6679d533beb0_prof);

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

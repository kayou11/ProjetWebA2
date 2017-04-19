<?php

/* SonataAdminBundle:CRUD:list__select.html.twig */
class __TwigTemplate_4007b7d4aa79c470773b14edc9c4493d4247d3e6a4671f1b392e17aa05f2a122 extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__select.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7278c0d823e9009335c802aa58a8e838bd965ef90e57e2cd78999b44911cc860 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7278c0d823e9009335c802aa58a8e838bd965ef90e57e2cd78999b44911cc860->enter($__internal_7278c0d823e9009335c802aa58a8e838bd965ef90e57e2cd78999b44911cc860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__select.html.twig"));

        $__internal_1090a805d6293b728970a5bd0066445ff3672a0bfb3329bec60b4c03cf5a9606 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1090a805d6293b728970a5bd0066445ff3672a0bfb3329bec60b4c03cf5a9606->enter($__internal_1090a805d6293b728970a5bd0066445ff3672a0bfb3329bec60b4c03cf5a9606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__select.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7278c0d823e9009335c802aa58a8e838bd965ef90e57e2cd78999b44911cc860->leave($__internal_7278c0d823e9009335c802aa58a8e838bd965ef90e57e2cd78999b44911cc860_prof);

        
        $__internal_1090a805d6293b728970a5bd0066445ff3672a0bfb3329bec60b4c03cf5a9606->leave($__internal_1090a805d6293b728970a5bd0066445ff3672a0bfb3329bec60b4c03cf5a9606_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_bcdca648eec026eb988c06e6b33ace23755deadc5717ce7a2dc87a7061d424ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcdca648eec026eb988c06e6b33ace23755deadc5717ce7a2dc87a7061d424ea->enter($__internal_bcdca648eec026eb988c06e6b33ace23755deadc5717ce7a2dc87a7061d424ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_b5ce90f32bcfaa2ea6dde362d5eaeea50e4dfca60b5f3202e03b2bc95b3955c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5ce90f32bcfaa2ea6dde362d5eaeea50e4dfca60b5f3202e03b2bc95b3955c3->enter($__internal_b5ce90f32bcfaa2ea6dde362d5eaeea50e4dfca60b5f3202e03b2bc95b3955c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <a class=\"btn btn-primary\" href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 15, $this->getSourceContext()); })()), "generateUrl", array(0 => "list"), "method"), "html", null, true);
        echo "\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list_select", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_b5ce90f32bcfaa2ea6dde362d5eaeea50e4dfca60b5f3202e03b2bc95b3955c3->leave($__internal_b5ce90f32bcfaa2ea6dde362d5eaeea50e4dfca60b5f3202e03b2bc95b3955c3_prof);

        
        $__internal_bcdca648eec026eb988c06e6b33ace23755deadc5717ce7a2dc87a7061d424ea->leave($__internal_bcdca648eec026eb988c06e6b33ace23755deadc5717ce7a2dc87a7061d424ea_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 17,  48 => 15,  39 => 14,  18 => 12,);
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
    <a class=\"btn btn-primary\" href=\"{{ admin.generateUrl('list') }}\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        {{ 'list_select'|trans({}, 'SonataAdminBundle') }}
    </a>
{% endblock %}
", "SonataAdminBundle:CRUD:list__select.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list__select.html.twig");
    }
}

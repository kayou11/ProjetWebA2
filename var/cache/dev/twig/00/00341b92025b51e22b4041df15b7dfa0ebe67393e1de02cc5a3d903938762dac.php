<?php

/* SonataAdminBundle:CRUD:list__select.html.twig */
class __TwigTemplate_8e5277249f1adb2d762d43f0422ac33ab027e324470d935fec30a1b6e7004f1a extends Twig_Template
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
        $__internal_fb7ee9b10ffab3b7f2f4cebee66045279aa2ce01f689018c9960a309c263da19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb7ee9b10ffab3b7f2f4cebee66045279aa2ce01f689018c9960a309c263da19->enter($__internal_fb7ee9b10ffab3b7f2f4cebee66045279aa2ce01f689018c9960a309c263da19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__select.html.twig"));

        $__internal_9f20d5a61aad1d3645cb850713376b6b9a97089b38d54bea79c80eb8de68a28d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f20d5a61aad1d3645cb850713376b6b9a97089b38d54bea79c80eb8de68a28d->enter($__internal_9f20d5a61aad1d3645cb850713376b6b9a97089b38d54bea79c80eb8de68a28d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__select.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb7ee9b10ffab3b7f2f4cebee66045279aa2ce01f689018c9960a309c263da19->leave($__internal_fb7ee9b10ffab3b7f2f4cebee66045279aa2ce01f689018c9960a309c263da19_prof);

        
        $__internal_9f20d5a61aad1d3645cb850713376b6b9a97089b38d54bea79c80eb8de68a28d->leave($__internal_9f20d5a61aad1d3645cb850713376b6b9a97089b38d54bea79c80eb8de68a28d_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_6a9047815fcf0e7a3b5289c54f5fb58361947002cd60e67f680be326c70fa62b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a9047815fcf0e7a3b5289c54f5fb58361947002cd60e67f680be326c70fa62b->enter($__internal_6a9047815fcf0e7a3b5289c54f5fb58361947002cd60e67f680be326c70fa62b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_1132721d09465f429f6a62300ce0887d188d6b0ee0b0a8dffd93a1497e2e82e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1132721d09465f429f6a62300ce0887d188d6b0ee0b0a8dffd93a1497e2e82e4->enter($__internal_1132721d09465f429f6a62300ce0887d188d6b0ee0b0a8dffd93a1497e2e82e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_1132721d09465f429f6a62300ce0887d188d6b0ee0b0a8dffd93a1497e2e82e4->leave($__internal_1132721d09465f429f6a62300ce0887d188d6b0ee0b0a8dffd93a1497e2e82e4_prof);

        
        $__internal_6a9047815fcf0e7a3b5289c54f5fb58361947002cd60e67f680be326c70fa62b->leave($__internal_6a9047815fcf0e7a3b5289c54f5fb58361947002cd60e67f680be326c70fa62b_prof);

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

<?php

/* SonataAdminBundle:CRUD:list_trans.html.twig */
class __TwigTemplate_95befbebb552ac02534d699f4aa76f1262492c0bd98f97195630e7dce401a2bf extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_trans.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30c08a7c5e0cc02de5848c83c72b1e56a5f63830215ec66d1178af104a221f1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30c08a7c5e0cc02de5848c83c72b1e56a5f63830215ec66d1178af104a221f1b->enter($__internal_30c08a7c5e0cc02de5848c83c72b1e56a5f63830215ec66d1178af104a221f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_trans.html.twig"));

        $__internal_31daa95b55273fd57f69be63f7c794251b2d557e6cc5fa85c1a1b3f9bf250d5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31daa95b55273fd57f69be63f7c794251b2d557e6cc5fa85c1a1b3f9bf250d5a->enter($__internal_31daa95b55273fd57f69be63f7c794251b2d557e6cc5fa85c1a1b3f9bf250d5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_trans.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30c08a7c5e0cc02de5848c83c72b1e56a5f63830215ec66d1178af104a221f1b->leave($__internal_30c08a7c5e0cc02de5848c83c72b1e56a5f63830215ec66d1178af104a221f1b_prof);

        
        $__internal_31daa95b55273fd57f69be63f7c794251b2d557e6cc5fa85c1a1b3f9bf250d5a->leave($__internal_31daa95b55273fd57f69be63f7c794251b2d557e6cc5fa85c1a1b3f9bf250d5a_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c189251d87ef4e5bcd0ddaaa5f06638b1c4b8b822ddd0077418f472a1fb587a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c189251d87ef4e5bcd0ddaaa5f06638b1c4b8b822ddd0077418f472a1fb587a7->enter($__internal_c189251d87ef4e5bcd0ddaaa5f06638b1c4b8b822ddd0077418f472a1fb587a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_007df281fbce34ca54dd05892b1fc36bb320dff9db3e27b7a87534daa1fad732 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_007df281fbce34ca54dd05892b1fc36bb320dff9db3e27b7a87534daa1fad732->enter($__internal_007df281fbce34ca54dd05892b1fc36bb320dff9db3e27b7a87534daa1fad732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["translationDomain"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "catalogue", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 15, $this->getSourceContext()); })()), "translationDomain", array()))) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 15, $this->getSourceContext()); })()), "translationDomain", array())));
        // line 16
        echo "    ";
        $context["valueFormat"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "format", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "format", array()), "%s")) : ("%s"));
        // line 17
        echo "
    ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(sprintf((isset($context["valueFormat"]) || array_key_exists("valueFormat", $context) ? $context["valueFormat"] : (function () { throw new Twig_Error_Runtime('Variable "valueFormat" does not exist.', 18, $this->getSourceContext()); })()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 18, $this->getSourceContext()); })())), array(), (isset($context["translationDomain"]) || array_key_exists("translationDomain", $context) ? $context["translationDomain"] : (function () { throw new Twig_Error_Runtime('Variable "translationDomain" does not exist.', 18, $this->getSourceContext()); })())), "html", null, true);
        echo "
";
        
        $__internal_007df281fbce34ca54dd05892b1fc36bb320dff9db3e27b7a87534daa1fad732->leave($__internal_007df281fbce34ca54dd05892b1fc36bb320dff9db3e27b7a87534daa1fad732_prof);

        
        $__internal_c189251d87ef4e5bcd0ddaaa5f06638b1c4b8b822ddd0077418f472a1fb587a7->leave($__internal_c189251d87ef4e5bcd0ddaaa5f06638b1c4b8b822ddd0077418f472a1fb587a7_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_trans.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 18,  54 => 17,  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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

{% block field%}
    {% set translationDomain = field_description.options.catalogue|default(admin.translationDomain) %}
    {% set valueFormat = field_description.options.format|default('%s') %}

    {{valueFormat|format(value)|trans({}, translationDomain)}}
{% endblock %}
", "SonataAdminBundle:CRUD:list_trans.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_trans.html.twig");
    }
}

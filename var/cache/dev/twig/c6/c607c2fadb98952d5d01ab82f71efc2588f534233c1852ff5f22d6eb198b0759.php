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
        $__internal_9bd83bec09addcca7fa6046c77e88e5cbc8f797fbc3b0b013b077705c09581f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bd83bec09addcca7fa6046c77e88e5cbc8f797fbc3b0b013b077705c09581f3->enter($__internal_9bd83bec09addcca7fa6046c77e88e5cbc8f797fbc3b0b013b077705c09581f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__select.html.twig"));

        $__internal_6f2fc7aeee469b29f321f9ea454a6ae4ca3575ca4fe2cf320bcad679137e391c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f2fc7aeee469b29f321f9ea454a6ae4ca3575ca4fe2cf320bcad679137e391c->enter($__internal_6f2fc7aeee469b29f321f9ea454a6ae4ca3575ca4fe2cf320bcad679137e391c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__select.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9bd83bec09addcca7fa6046c77e88e5cbc8f797fbc3b0b013b077705c09581f3->leave($__internal_9bd83bec09addcca7fa6046c77e88e5cbc8f797fbc3b0b013b077705c09581f3_prof);

        
        $__internal_6f2fc7aeee469b29f321f9ea454a6ae4ca3575ca4fe2cf320bcad679137e391c->leave($__internal_6f2fc7aeee469b29f321f9ea454a6ae4ca3575ca4fe2cf320bcad679137e391c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_fd6b4e06df86feef6fb68120b7c6952ba1462ec4ca9fd84971e69ec624b1a2a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd6b4e06df86feef6fb68120b7c6952ba1462ec4ca9fd84971e69ec624b1a2a7->enter($__internal_fd6b4e06df86feef6fb68120b7c6952ba1462ec4ca9fd84971e69ec624b1a2a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_f4506595f1e13f60b76fbc56e767560c82ef2e625cd1b2ccbd03c770b092748a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4506595f1e13f60b76fbc56e767560c82ef2e625cd1b2ccbd03c770b092748a->enter($__internal_f4506595f1e13f60b76fbc56e767560c82ef2e625cd1b2ccbd03c770b092748a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_f4506595f1e13f60b76fbc56e767560c82ef2e625cd1b2ccbd03c770b092748a->leave($__internal_f4506595f1e13f60b76fbc56e767560c82ef2e625cd1b2ccbd03c770b092748a_prof);

        
        $__internal_fd6b4e06df86feef6fb68120b7c6952ba1462ec4ca9fd84971e69ec624b1a2a7->leave($__internal_fd6b4e06df86feef6fb68120b7c6952ba1462ec4ca9fd84971e69ec624b1a2a7_prof);

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

<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_953ca3b9cfd366e59311eb78c74d843f0a1c62d126b553adcdaecb7a19820bf7 extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a4983c6b5defcd1e5e660bd71f8064a02c5e0916a596bb663752e6b8f5817c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a4983c6b5defcd1e5e660bd71f8064a02c5e0916a596bb663752e6b8f5817c1->enter($__internal_9a4983c6b5defcd1e5e660bd71f8064a02c5e0916a596bb663752e6b8f5817c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $__internal_acf0928031f15d229ad7d93e91273fa0b554cc748e4ea8eec4dcf278a2f9efdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acf0928031f15d229ad7d93e91273fa0b554cc748e4ea8eec4dcf278a2f9efdf->enter($__internal_acf0928031f15d229ad7d93e91273fa0b554cc748e4ea8eec4dcf278a2f9efdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a4983c6b5defcd1e5e660bd71f8064a02c5e0916a596bb663752e6b8f5817c1->leave($__internal_9a4983c6b5defcd1e5e660bd71f8064a02c5e0916a596bb663752e6b8f5817c1_prof);

        
        $__internal_acf0928031f15d229ad7d93e91273fa0b554cc748e4ea8eec4dcf278a2f9efdf->leave($__internal_acf0928031f15d229ad7d93e91273fa0b554cc748e4ea8eec4dcf278a2f9efdf_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_599218eb206bbd3e0ca42bcbb7f9f825a9a618ef7a2dfcb5a5c083af23aeb32a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_599218eb206bbd3e0ca42bcbb7f9f825a9a618ef7a2dfcb5a5c083af23aeb32a->enter($__internal_599218eb206bbd3e0ca42bcbb7f9f825a9a618ef7a2dfcb5a5c083af23aeb32a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_bf6a010dc35f05cb54bce4547f841e29231aef9ffd5bd284125c56dc5f3dd2a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf6a010dc35f05cb54bce4547f841e29231aef9ffd5bd284125c56dc5f3dd2a0->enter($__internal_bf6a010dc35f05cb54bce4547f841e29231aef9ffd5bd284125c56dc5f3dd2a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 15, $this->getSourceContext()); })()), "id", array(0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 15, $this->getSourceContext()); })())), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_bf6a010dc35f05cb54bce4547f841e29231aef9ffd5bd284125c56dc5f3dd2a0->leave($__internal_bf6a010dc35f05cb54bce4547f841e29231aef9ffd5bd284125c56dc5f3dd2a0_prof);

        
        $__internal_599218eb206bbd3e0ca42bcbb7f9f825a9a618ef7a2dfcb5a5c083af23aeb32a->leave($__internal_599218eb206bbd3e0ca42bcbb7f9f825a9a618ef7a2dfcb5a5c083af23aeb32a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
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
    <input type=\"checkbox\" name=\"idx[]\" value=\"{{ admin.id(object) }}\">
{% endblock %}
", "SonataAdminBundle:CRUD:list__batch.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list__batch.html.twig");
    }
}

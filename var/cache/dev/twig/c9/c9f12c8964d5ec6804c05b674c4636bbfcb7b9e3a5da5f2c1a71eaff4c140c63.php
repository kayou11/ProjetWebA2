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
        $__internal_ef8ea9b1cf1679c039cc17b4ee8e11f155033de9d651131849f7752427c6b4bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef8ea9b1cf1679c039cc17b4ee8e11f155033de9d651131849f7752427c6b4bf->enter($__internal_ef8ea9b1cf1679c039cc17b4ee8e11f155033de9d651131849f7752427c6b4bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $__internal_9118b4ba7d761690b6d2af24b1a495009a13b9f4efe73e052a6ae4d0c4b56428 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9118b4ba7d761690b6d2af24b1a495009a13b9f4efe73e052a6ae4d0c4b56428->enter($__internal_9118b4ba7d761690b6d2af24b1a495009a13b9f4efe73e052a6ae4d0c4b56428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef8ea9b1cf1679c039cc17b4ee8e11f155033de9d651131849f7752427c6b4bf->leave($__internal_ef8ea9b1cf1679c039cc17b4ee8e11f155033de9d651131849f7752427c6b4bf_prof);

        
        $__internal_9118b4ba7d761690b6d2af24b1a495009a13b9f4efe73e052a6ae4d0c4b56428->leave($__internal_9118b4ba7d761690b6d2af24b1a495009a13b9f4efe73e052a6ae4d0c4b56428_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_94b43e04e48a9cc06cd1efee5dffbb969b8d39a85a83dd32d4efb5ae307c5610 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94b43e04e48a9cc06cd1efee5dffbb969b8d39a85a83dd32d4efb5ae307c5610->enter($__internal_94b43e04e48a9cc06cd1efee5dffbb969b8d39a85a83dd32d4efb5ae307c5610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_2ad8672836fcea854f20596e931dd6683a9ed91944d3d4a9f40a417f56215187 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ad8672836fcea854f20596e931dd6683a9ed91944d3d4a9f40a417f56215187->enter($__internal_2ad8672836fcea854f20596e931dd6683a9ed91944d3d4a9f40a417f56215187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 15, $this->getSourceContext()); })()), "id", array(0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 15, $this->getSourceContext()); })())), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_2ad8672836fcea854f20596e931dd6683a9ed91944d3d4a9f40a417f56215187->leave($__internal_2ad8672836fcea854f20596e931dd6683a9ed91944d3d4a9f40a417f56215187_prof);

        
        $__internal_94b43e04e48a9cc06cd1efee5dffbb969b8d39a85a83dd32d4efb5ae307c5610->leave($__internal_94b43e04e48a9cc06cd1efee5dffbb969b8d39a85a83dd32d4efb5ae307c5610_prof);

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

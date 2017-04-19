<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_d8a712ba971fef46760afd5d09d8599b32b7c43dcd0b20e73214759b98dcc989 extends Twig_Template
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
        $__internal_0b065b3d027c34579d69d41f19b709aaf744e491909ac6c1788808a90e6b951b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b065b3d027c34579d69d41f19b709aaf744e491909ac6c1788808a90e6b951b->enter($__internal_0b065b3d027c34579d69d41f19b709aaf744e491909ac6c1788808a90e6b951b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $__internal_f1e101a5933877e8750e1a30e81d9625053c0b1bb871d31a5596d9629369994c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1e101a5933877e8750e1a30e81d9625053c0b1bb871d31a5596d9629369994c->enter($__internal_f1e101a5933877e8750e1a30e81d9625053c0b1bb871d31a5596d9629369994c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b065b3d027c34579d69d41f19b709aaf744e491909ac6c1788808a90e6b951b->leave($__internal_0b065b3d027c34579d69d41f19b709aaf744e491909ac6c1788808a90e6b951b_prof);

        
        $__internal_f1e101a5933877e8750e1a30e81d9625053c0b1bb871d31a5596d9629369994c->leave($__internal_f1e101a5933877e8750e1a30e81d9625053c0b1bb871d31a5596d9629369994c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_5ea53544f3a05119d0f8ebf67eb846a3e2415fd3fb5f8e840743374ee6beff05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ea53544f3a05119d0f8ebf67eb846a3e2415fd3fb5f8e840743374ee6beff05->enter($__internal_5ea53544f3a05119d0f8ebf67eb846a3e2415fd3fb5f8e840743374ee6beff05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_cdbb12c47347381314a509c524f65ad661dc45d99b1e1b09ef44d876722dfd8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdbb12c47347381314a509c524f65ad661dc45d99b1e1b09ef44d876722dfd8c->enter($__internal_cdbb12c47347381314a509c524f65ad661dc45d99b1e1b09ef44d876722dfd8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 15, $this->getSourceContext()); })()), "id", array(0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 15, $this->getSourceContext()); })())), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_cdbb12c47347381314a509c524f65ad661dc45d99b1e1b09ef44d876722dfd8c->leave($__internal_cdbb12c47347381314a509c524f65ad661dc45d99b1e1b09ef44d876722dfd8c_prof);

        
        $__internal_5ea53544f3a05119d0f8ebf67eb846a3e2415fd3fb5f8e840743374ee6beff05->leave($__internal_5ea53544f3a05119d0f8ebf67eb846a3e2415fd3fb5f8e840743374ee6beff05_prof);

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

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
        $__internal_27194d4ac6e1db30556c62baeb5383c9ee014376466d3a5462500fbfbead9a33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27194d4ac6e1db30556c62baeb5383c9ee014376466d3a5462500fbfbead9a33->enter($__internal_27194d4ac6e1db30556c62baeb5383c9ee014376466d3a5462500fbfbead9a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__select.html.twig"));

        $__internal_4084f66db7779cb129706d2529595d0518951157caff2bcc0f8f93f7f49e46e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4084f66db7779cb129706d2529595d0518951157caff2bcc0f8f93f7f49e46e1->enter($__internal_4084f66db7779cb129706d2529595d0518951157caff2bcc0f8f93f7f49e46e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__select.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27194d4ac6e1db30556c62baeb5383c9ee014376466d3a5462500fbfbead9a33->leave($__internal_27194d4ac6e1db30556c62baeb5383c9ee014376466d3a5462500fbfbead9a33_prof);

        
        $__internal_4084f66db7779cb129706d2529595d0518951157caff2bcc0f8f93f7f49e46e1->leave($__internal_4084f66db7779cb129706d2529595d0518951157caff2bcc0f8f93f7f49e46e1_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_0e9b64a79dd276a9e26ff3d051429441c9c831e956de4cb0a6f55e2a1c6d1109 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e9b64a79dd276a9e26ff3d051429441c9c831e956de4cb0a6f55e2a1c6d1109->enter($__internal_0e9b64a79dd276a9e26ff3d051429441c9c831e956de4cb0a6f55e2a1c6d1109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_8bd679c56545c3923a047e74e6d9ee29ed98b821765326b067e1348fc9aeb35f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bd679c56545c3923a047e74e6d9ee29ed98b821765326b067e1348fc9aeb35f->enter($__internal_8bd679c56545c3923a047e74e6d9ee29ed98b821765326b067e1348fc9aeb35f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_8bd679c56545c3923a047e74e6d9ee29ed98b821765326b067e1348fc9aeb35f->leave($__internal_8bd679c56545c3923a047e74e6d9ee29ed98b821765326b067e1348fc9aeb35f_prof);

        
        $__internal_0e9b64a79dd276a9e26ff3d051429441c9c831e956de4cb0a6f55e2a1c6d1109->leave($__internal_0e9b64a79dd276a9e26ff3d051429441c9c831e956de4cb0a6f55e2a1c6d1109_prof);

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

<?php

/* SyliusAdminBundle:Product:index.html.twig */
class __TwigTemplate_1b226cd538fed4930942734ee9152b90bcc9884286466c507004011117b64228 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SyliusAdminBundle::layout.html.twig", "SyliusAdminBundle:Product:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SyliusAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3aee0ca255603d7fd6d66d7e541e15ef0f79e210b633b831207f9a4006ef7997 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3aee0ca255603d7fd6d66d7e541e15ef0f79e210b633b831207f9a4006ef7997->enter($__internal_3aee0ca255603d7fd6d66d7e541e15ef0f79e210b633b831207f9a4006ef7997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product:index.html.twig"));

        $__internal_1b0f3c3477de5426193eb00785dd5607dff5e37f9dc00db83a9e705c8554448e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b0f3c3477de5426193eb00785dd5607dff5e37f9dc00db83a9e705c8554448e->enter($__internal_1b0f3c3477de5426193eb00785dd5607dff5e37f9dc00db83a9e705c8554448e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product:index.html.twig"));

        // line 3
        $context["headers"] = $this->loadTemplate("SyliusUiBundle:Macro:headers.html.twig", "SyliusAdminBundle:Product:index.html.twig", 3);
        // line 5
        $context["definition"] = $this->getAttribute(($context["resources"] ?? $this->getContext($context, "resources")), "definition", array());
        // line 6
        $context["data"] = $this->getAttribute(($context["resources"] ?? $this->getContext($context, "resources")), "data", array());
        // line 8
        $context["header"] = (($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "header", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "header", array()), (($this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "applicationName", array()) . ".ui.") . $this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "pluralName", array())))) : ((($this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "applicationName", array()) . ".ui.") . $this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "pluralName", array()))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3aee0ca255603d7fd6d66d7e541e15ef0f79e210b633b831207f9a4006ef7997->leave($__internal_3aee0ca255603d7fd6d66d7e541e15ef0f79e210b633b831207f9a4006ef7997_prof);

        
        $__internal_1b0f3c3477de5426193eb00785dd5607dff5e37f9dc00db83a9e705c8554448e->leave($__internal_1b0f3c3477de5426193eb00785dd5607dff5e37f9dc00db83a9e705c8554448e_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_b302ad83ed4a75f650112501a400b4e22f34502ef61ee891950fb76a6799b0d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b302ad83ed4a75f650112501a400b4e22f34502ef61ee891950fb76a6799b0d6->enter($__internal_b302ad83ed4a75f650112501a400b4e22f34502ef61ee891950fb76a6799b0d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3567dd27447d72bd43eeee0bee53742904d12281680785f1972292826f9a84e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3567dd27447d72bd43eeee0bee53742904d12281680785f1972292826f9a84e6->enter($__internal_3567dd27447d72bd43eeee0bee53742904d12281680785f1972292826f9a84e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["header"] ?? $this->getContext($context, "header"))), "html", null, true);
        
        $__internal_3567dd27447d72bd43eeee0bee53742904d12281680785f1972292826f9a84e6->leave($__internal_3567dd27447d72bd43eeee0bee53742904d12281680785f1972292826f9a84e6_prof);

        
        $__internal_b302ad83ed4a75f650112501a400b4e22f34502ef61ee891950fb76a6799b0d6->leave($__internal_b302ad83ed4a75f650112501a400b4e22f34502ef61ee891950fb76a6799b0d6_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_bc2b492f44da386d44751f1d8ce473549b55bdbf694eeb6ec2d00c185b868206 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc2b492f44da386d44751f1d8ce473549b55bdbf694eeb6ec2d00c185b868206->enter($__internal_bc2b492f44da386d44751f1d8ce473549b55bdbf694eeb6ec2d00c185b868206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f7f8b6d855d55fa9f96fdec809535eb53c0970e611f37435232684597b42c49a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7f8b6d855d55fa9f96fdec809535eb53c0970e611f37435232684597b42c49a->enter($__internal_f7f8b6d855d55fa9f96fdec809535eb53c0970e611f37435232684597b42c49a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.product.index.before_header", array("resources" => ($context["resources"] ?? $this->getContext($context, "resources")))));
        echo "

    <div class=\"ui stackable two column grid\">
        ";
        // line 16
        $this->loadTemplate("@SyliusAdmin/Product/Index/_header.html.twig", "SyliusAdminBundle:Product:index.html.twig", 16)->display($context);
        // line 17
        echo "        ";
        $this->loadTemplate("@SyliusAdmin/Crud/Index/_actions.html.twig", "SyliusAdminBundle:Product:index.html.twig", 17)->display($context);
        // line 18
        echo "    </div>

    ";
        // line 20
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.product.index.after_header", array("resources" => ($context["resources"] ?? $this->getContext($context, "resources")))));
        echo "

    <div class=\"ui two column stackable grid\">
        <div class=\"three wide column\">
            ";
        // line 24
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.product.index.before_taxon_tree", array("resources" => ($context["resources"] ?? $this->getContext($context, "resources")))));
        echo "

            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_partial_taxon_tree", array("template" => "@SyliusAdmin/Taxon/_treeWithoutButtons.html.twig")));
        echo "

            ";
        // line 28
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.product.index.after_taxon_tree", array("resources" => ($context["resources"] ?? $this->getContext($context, "resources")))));
        echo "
        </div>
        <div class=\"thirteen wide column sylius-product-index\">
            ";
        // line 31
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.product.index.before_filters", array("resources" => ($context["resources"] ?? $this->getContext($context, "resources")))));
        echo "

            ";
        // line 33
        $this->loadTemplate("@SyliusAdmin/Crud/Index/_content.html.twig", "SyliusAdminBundle:Product:index.html.twig", 33)->display($context);
        // line 34
        echo "        </div>
    </div>

    ";
        // line 37
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.product.index.after_content", array("resources" => ($context["resources"] ?? $this->getContext($context, "resources")))));
        echo "
";
        
        $__internal_f7f8b6d855d55fa9f96fdec809535eb53c0970e611f37435232684597b42c49a->leave($__internal_f7f8b6d855d55fa9f96fdec809535eb53c0970e611f37435232684597b42c49a_prof);

        
        $__internal_bc2b492f44da386d44751f1d8ce473549b55bdbf694eeb6ec2d00c185b868206->leave($__internal_bc2b492f44da386d44751f1d8ce473549b55bdbf694eeb6ec2d00c185b868206_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Product:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 37,  125 => 34,  123 => 33,  118 => 31,  112 => 28,  107 => 26,  102 => 24,  95 => 20,  91 => 18,  88 => 17,  86 => 16,  79 => 13,  70 => 12,  50 => 10,  40 => 1,  38 => 8,  36 => 6,  34 => 5,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SyliusAdminBundle::layout.html.twig' %}

{% import 'SyliusUiBundle:Macro:headers.html.twig' as headers %}

{% set definition = resources.definition %}
{% set data = resources.data %}

{% set header = configuration.vars.header|default(metadata.applicationName~'.ui.'~metadata.pluralName) %}

{% block title %}{{ parent() }} {{ header|trans }}{% endblock %}

{% block content %}
    {{ sonata_block_render_event('sylius.admin.product.index.before_header', {'resources': resources}) }}

    <div class=\"ui stackable two column grid\">
        {% include '@SyliusAdmin/Product/Index/_header.html.twig' %}
        {% include '@SyliusAdmin/Crud/Index/_actions.html.twig' %}
    </div>

    {{ sonata_block_render_event('sylius.admin.product.index.after_header', {'resources': resources}) }}

    <div class=\"ui two column stackable grid\">
        <div class=\"three wide column\">
            {{ sonata_block_render_event('sylius.admin.product.index.before_taxon_tree', {'resources': resources}) }}

            {{ render(path('sylius_admin_partial_taxon_tree', {'template': '@SyliusAdmin/Taxon/_treeWithoutButtons.html.twig'})) }}

            {{ sonata_block_render_event('sylius.admin.product.index.after_taxon_tree', {'resources': resources}) }}
        </div>
        <div class=\"thirteen wide column sylius-product-index\">
            {{ sonata_block_render_event('sylius.admin.product.index.before_filters', {'resources': resources}) }}

            {% include '@SyliusAdmin/Crud/Index/_content.html.twig' %}
        </div>
    </div>

    {{ sonata_block_render_event('sylius.admin.product.index.after_content', {'resources': resources}) }}
{% endblock %}
", "SyliusAdminBundle:Product:index.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/index.html.twig");
    }
}

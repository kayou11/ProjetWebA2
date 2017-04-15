<?php

/* SyliusAdminBundle:Taxon:update.html.twig */
class __TwigTemplate_10ed80294386985edcc0acf7cdda0516c97c4562d24205cbf466bc7cc40ed9f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusAdmin/Crud/update.html.twig", "SyliusAdminBundle:Taxon:update.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusAdmin/Crud/update.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c27928c743a9c79c65573e366f111a5630234756d435d482227fa227b76e8ed0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c27928c743a9c79c65573e366f111a5630234756d435d482227fa227b76e8ed0->enter($__internal_c27928c743a9c79c65573e366f111a5630234756d435d482227fa227b76e8ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Taxon:update.html.twig"));

        $__internal_929627e2e7bf63c9b6232fd8ed7f67e78122e7e62790d860e74ea9d6dae11605 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_929627e2e7bf63c9b6232fd8ed7f67e78122e7e62790d860e74ea9d6dae11605->enter($__internal_929627e2e7bf63c9b6232fd8ed7f67e78122e7e62790d860e74ea9d6dae11605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Taxon:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c27928c743a9c79c65573e366f111a5630234756d435d482227fa227b76e8ed0->leave($__internal_c27928c743a9c79c65573e366f111a5630234756d435d482227fa227b76e8ed0_prof);

        
        $__internal_929627e2e7bf63c9b6232fd8ed7f67e78122e7e62790d860e74ea9d6dae11605->leave($__internal_929627e2e7bf63c9b6232fd8ed7f67e78122e7e62790d860e74ea9d6dae11605_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_916606a27d798485ea38c22a73c42930b68f33d726212f33ca3f2412a65dfa89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_916606a27d798485ea38c22a73c42930b68f33d726212f33ca3f2412a65dfa89->enter($__internal_916606a27d798485ea38c22a73c42930b68f33d726212f33ca3f2412a65dfa89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_1da811f3e2decb9b19a477388e267816d59d542923440afbc5bda4608d56e375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1da811f3e2decb9b19a477388e267816d59d542923440afbc5bda4608d56e375->enter($__internal_1da811f3e2decb9b19a477388e267816d59d542923440afbc5bda4608d56e375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.taxon.update.before_content", array("resource" => ($context["resource"] ?? $this->getContext($context, "resource")))));
        echo "

    <div class=\"ui two column stackable grid\">
        <div class=\"four wide column\">
            ";
        // line 8
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.taxon.update.before_taxon_tree", array("resource" => ($context["resource"] ?? $this->getContext($context, "resource")))));
        echo "

            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_partial_taxon_tree", array("template" => "@SyliusAdmin/Taxon/_treeWithButtons.html.twig")));
        echo "

            ";
        // line 12
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.taxon.update.after_taxon_tree", array("resource" => ($context["resource"] ?? $this->getContext($context, "resource")))));
        echo "
        </div>
        <div class=\"twelve wide column\">
            ";
        // line 15
        $this->displayParentBlock("content", $context, $blocks);
        echo "
        </div>
    </div>
";
        
        $__internal_1da811f3e2decb9b19a477388e267816d59d542923440afbc5bda4608d56e375->leave($__internal_1da811f3e2decb9b19a477388e267816d59d542923440afbc5bda4608d56e375_prof);

        
        $__internal_916606a27d798485ea38c22a73c42930b68f33d726212f33ca3f2412a65dfa89->leave($__internal_916606a27d798485ea38c22a73c42930b68f33d726212f33ca3f2412a65dfa89_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Taxon:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 15,  67 => 12,  62 => 10,  57 => 8,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusAdmin/Crud/update.html.twig' %}

{% block content %}
    {{ sonata_block_render_event('sylius.admin.taxon.update.before_content', {'resource': resource}) }}

    <div class=\"ui two column stackable grid\">
        <div class=\"four wide column\">
            {{ sonata_block_render_event('sylius.admin.taxon.update.before_taxon_tree', {'resource': resource}) }}

            {{ render(path('sylius_admin_partial_taxon_tree', {'template': '@SyliusAdmin/Taxon/_treeWithButtons.html.twig'})) }}

            {{ sonata_block_render_event('sylius.admin.taxon.update.after_taxon_tree', {'resource': resource}) }}
        </div>
        <div class=\"twelve wide column\">
            {{ parent() }}
        </div>
    </div>
{% endblock %}
", "SyliusAdminBundle:Taxon:update.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Taxon/update.html.twig");
    }
}

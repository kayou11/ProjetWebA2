<?php

/* SyliusAdminBundle:Taxon:create.html.twig */
class __TwigTemplate_c3ffacc47c0f2cc365f6589028a1502f072708bb93e517462f406703ea531bc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusAdmin/Crud/create.html.twig", "SyliusAdminBundle:Taxon:create.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusAdmin/Crud/create.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f6600b93c744edd2ae59c26c2b7c80ac20c1d668a0f8f3a18459d594028e4e7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6600b93c744edd2ae59c26c2b7c80ac20c1d668a0f8f3a18459d594028e4e7f->enter($__internal_f6600b93c744edd2ae59c26c2b7c80ac20c1d668a0f8f3a18459d594028e4e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Taxon:create.html.twig"));

        $__internal_c15f52d8d80041772840082078a0258001efa4d90f9f412ee2f06c11d22f3e0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c15f52d8d80041772840082078a0258001efa4d90f9f412ee2f06c11d22f3e0f->enter($__internal_c15f52d8d80041772840082078a0258001efa4d90f9f412ee2f06c11d22f3e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Taxon:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6600b93c744edd2ae59c26c2b7c80ac20c1d668a0f8f3a18459d594028e4e7f->leave($__internal_f6600b93c744edd2ae59c26c2b7c80ac20c1d668a0f8f3a18459d594028e4e7f_prof);

        
        $__internal_c15f52d8d80041772840082078a0258001efa4d90f9f412ee2f06c11d22f3e0f->leave($__internal_c15f52d8d80041772840082078a0258001efa4d90f9f412ee2f06c11d22f3e0f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_f2a236c350d4013af1f967136ed4e9b0445c5ce839838967eb1d2a80fb7a4efa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2a236c350d4013af1f967136ed4e9b0445c5ce839838967eb1d2a80fb7a4efa->enter($__internal_f2a236c350d4013af1f967136ed4e9b0445c5ce839838967eb1d2a80fb7a4efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_065454a9c7c29527f5b538b3d72feab3293c21d660606355fc9047660189eb66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_065454a9c7c29527f5b538b3d72feab3293c21d660606355fc9047660189eb66->enter($__internal_065454a9c7c29527f5b538b3d72feab3293c21d660606355fc9047660189eb66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.taxon.create.before_content", array("resource" => ($context["resource"] ?? $this->getContext($context, "resource")))));
        echo "

    <div class=\"ui two column stackable grid\">
        <div class=\"four wide column\">
            ";
        // line 8
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.taxon.create.before_taxon_tree", array("resource" => ($context["resource"] ?? $this->getContext($context, "resource")))));
        echo "

            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_partial_taxon_tree", array("template" => "@SyliusAdmin/Taxon/_treeWithButtons.html.twig")));
        echo "

            ";
        // line 12
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.taxon.create.after_taxon_tree", array("resource" => ($context["resource"] ?? $this->getContext($context, "resource")))));
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
        
        $__internal_065454a9c7c29527f5b538b3d72feab3293c21d660606355fc9047660189eb66->leave($__internal_065454a9c7c29527f5b538b3d72feab3293c21d660606355fc9047660189eb66_prof);

        
        $__internal_f2a236c350d4013af1f967136ed4e9b0445c5ce839838967eb1d2a80fb7a4efa->leave($__internal_f2a236c350d4013af1f967136ed4e9b0445c5ce839838967eb1d2a80fb7a4efa_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Taxon:create.html.twig";
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
        return new Twig_Source("{% extends '@SyliusAdmin/Crud/create.html.twig' %}

{% block content %}
    {{ sonata_block_render_event('sylius.admin.taxon.create.before_content', {'resource': resource}) }}

    <div class=\"ui two column stackable grid\">
        <div class=\"four wide column\">
            {{ sonata_block_render_event('sylius.admin.taxon.create.before_taxon_tree', {'resource': resource}) }}

            {{ render(path('sylius_admin_partial_taxon_tree', {'template': '@SyliusAdmin/Taxon/_treeWithButtons.html.twig'})) }}

            {{ sonata_block_render_event('sylius.admin.taxon.create.after_taxon_tree', {'resource': resource}) }}
        </div>
        <div class=\"twelve wide column\">
            {{ parent() }}
        </div>
    </div>
{% endblock %}
", "SyliusAdminBundle:Taxon:create.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Taxon/create.html.twig");
    }
}

<?php

/* SyliusAdminBundle:Form:theme.html.twig */
class __TwigTemplate_0f1cd859529f829babe4b014c5adf05fd33a9734e99270b8cc4665f8c8a20f0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusUi/Form/theme.html.twig", "SyliusAdminBundle:Form:theme.html.twig", 1);
        $this->blocks = array(
            'sylius_taxon_autocomplete_choice_row' => array($this, 'block_sylius_taxon_autocomplete_choice_row'),
            'sylius_product_autocomplete_choice_row' => array($this, 'block_sylius_product_autocomplete_choice_row'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusUi/Form/theme.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6179434e95c5ea4cc87e0069a4ad4bce8a6141e3743fd43e38853aedbfbcb59d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6179434e95c5ea4cc87e0069a4ad4bce8a6141e3743fd43e38853aedbfbcb59d->enter($__internal_6179434e95c5ea4cc87e0069a4ad4bce8a6141e3743fd43e38853aedbfbcb59d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Form:theme.html.twig"));

        $__internal_56776260fde2e80f8f3e4ad2b4101a8602fa77800082ac0f18fae96f05f4c3ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56776260fde2e80f8f3e4ad2b4101a8602fa77800082ac0f18fae96f05f4c3ee->enter($__internal_56776260fde2e80f8f3e4ad2b4101a8602fa77800082ac0f18fae96f05f4c3ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Form:theme.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6179434e95c5ea4cc87e0069a4ad4bce8a6141e3743fd43e38853aedbfbcb59d->leave($__internal_6179434e95c5ea4cc87e0069a4ad4bce8a6141e3743fd43e38853aedbfbcb59d_prof);

        
        $__internal_56776260fde2e80f8f3e4ad2b4101a8602fa77800082ac0f18fae96f05f4c3ee->leave($__internal_56776260fde2e80f8f3e4ad2b4101a8602fa77800082ac0f18fae96f05f4c3ee_prof);

    }

    // line 3
    public function block_sylius_taxon_autocomplete_choice_row($context, array $blocks = array())
    {
        $__internal_09d5d0a3e4c95df2dc92a26ff682b791aa8d03c2ab5741ba5dca7d84b8306a67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09d5d0a3e4c95df2dc92a26ff682b791aa8d03c2ab5741ba5dca7d84b8306a67->enter($__internal_09d5d0a3e4c95df2dc92a26ff682b791aa8d03c2ab5741ba5dca7d84b8306a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_taxon_autocomplete_choice_row"));

        $__internal_5bb0f0b22c58057576ac179538f9b50df99e60d187b675c3127bd83c547415ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bb0f0b22c58057576ac179538f9b50df99e60d187b675c3127bd83c547415ae->enter($__internal_5bb0f0b22c58057576ac179538f9b50df99e60d187b675c3127bd83c547415ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_taxon_autocomplete_choice_row"));

        // line 4
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'row', array("remote_url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_ajax_taxon_by_name_phrase"), "load_edit_url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_ajax_taxon_by_code")));
        echo "
";
        
        $__internal_5bb0f0b22c58057576ac179538f9b50df99e60d187b675c3127bd83c547415ae->leave($__internal_5bb0f0b22c58057576ac179538f9b50df99e60d187b675c3127bd83c547415ae_prof);

        
        $__internal_09d5d0a3e4c95df2dc92a26ff682b791aa8d03c2ab5741ba5dca7d84b8306a67->leave($__internal_09d5d0a3e4c95df2dc92a26ff682b791aa8d03c2ab5741ba5dca7d84b8306a67_prof);

    }

    // line 7
    public function block_sylius_product_autocomplete_choice_row($context, array $blocks = array())
    {
        $__internal_efc2426124189964d42b2535cd6d8891b3ffdc1b9bb3b7d7d2724c058df2e544 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efc2426124189964d42b2535cd6d8891b3ffdc1b9bb3b7d7d2724c058df2e544->enter($__internal_efc2426124189964d42b2535cd6d8891b3ffdc1b9bb3b7d7d2724c058df2e544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_product_autocomplete_choice_row"));

        $__internal_49e91470fe3823ce4528acf44b5a576bdd87f4da79c12216c55dad17fca47cd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49e91470fe3823ce4528acf44b5a576bdd87f4da79c12216c55dad17fca47cd9->enter($__internal_49e91470fe3823ce4528acf44b5a576bdd87f4da79c12216c55dad17fca47cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_product_autocomplete_choice_row"));

        // line 8
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'row', array("remote_url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_ajax_product_by_name_phrase"), "load_edit_url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_ajax_product_by_code")));
        echo "
";
        
        $__internal_49e91470fe3823ce4528acf44b5a576bdd87f4da79c12216c55dad17fca47cd9->leave($__internal_49e91470fe3823ce4528acf44b5a576bdd87f4da79c12216c55dad17fca47cd9_prof);

        
        $__internal_efc2426124189964d42b2535cd6d8891b3ffdc1b9bb3b7d7d2724c058df2e544->leave($__internal_efc2426124189964d42b2535cd6d8891b3ffdc1b9bb3b7d7d2724c058df2e544_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Form:theme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusUi/Form/theme.html.twig' %}

{% block sylius_taxon_autocomplete_choice_row %}
    {{ form_row(form, {'remote_url': path('sylius_admin_ajax_taxon_by_name_phrase'), 'load_edit_url': path('sylius_admin_ajax_taxon_by_code')}) }}
{% endblock %}

{% block sylius_product_autocomplete_choice_row %}
    {{ form_row(form, {'remote_url': path('sylius_admin_ajax_product_by_name_phrase'), 'load_edit_url': path('sylius_admin_ajax_product_by_code')}) }}
{% endblock %}
", "SyliusAdminBundle:Form:theme.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Form/theme.html.twig");
    }
}

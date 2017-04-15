<?php

/* SyliusAdminBundle:Order:update.html.twig */
class __TwigTemplate_78031e052c6301b5bc1a798fcacdb79f5f5f8083574ba6baf92f3dfdfc81a27d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SyliusAdminBundle::layout.html.twig", "SyliusAdminBundle:Order:update.html.twig", 1);
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
        $__internal_c9f62859a30c8f090754ffb98aa181c3fd31561eda6769ac8016ec5ad795b4bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9f62859a30c8f090754ffb98aa181c3fd31561eda6769ac8016ec5ad795b4bb->enter($__internal_c9f62859a30c8f090754ffb98aa181c3fd31561eda6769ac8016ec5ad795b4bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order:update.html.twig"));

        $__internal_f5939b9bca638e3b21e1327a29d21732275bbafa432da7b62b9a2b7366048c07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5939b9bca638e3b21e1327a29d21732275bbafa432da7b62b9a2b7366048c07->enter($__internal_f5939b9bca638e3b21e1327a29d21732275bbafa432da7b62b9a2b7366048c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order:update.html.twig"));

        // line 3
        $context["headers"] = $this->loadTemplate("SyliusUiBundle:Macro:headers.html.twig", "SyliusAdminBundle:Order:update.html.twig", 3);
        // line 4
        $context["buttons"] = $this->loadTemplate("SyliusUiBundle:Macro:buttons.html.twig", "SyliusAdminBundle:Order:update.html.twig", 4);
        // line 8
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "SyliusUiBundle:Form:theme.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9f62859a30c8f090754ffb98aa181c3fd31561eda6769ac8016ec5ad795b4bb->leave($__internal_c9f62859a30c8f090754ffb98aa181c3fd31561eda6769ac8016ec5ad795b4bb_prof);

        
        $__internal_f5939b9bca638e3b21e1327a29d21732275bbafa432da7b62b9a2b7366048c07->leave($__internal_f5939b9bca638e3b21e1327a29d21732275bbafa432da7b62b9a2b7366048c07_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_721e835c39751ce1373281a70e9aec3d3e12e71652882ed1a98975ffc7885890 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_721e835c39751ce1373281a70e9aec3d3e12e71652882ed1a98975ffc7885890->enter($__internal_721e835c39751ce1373281a70e9aec3d3e12e71652882ed1a98975ffc7885890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c7ee1974656650073d3024715bef0d1565bf8b07765460f05478f20cf55c7b57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7ee1974656650073d3024715bef0d1565bf8b07765460f05478f20cf55c7b57->enter($__internal_c7ee1974656650073d3024715bef0d1565bf8b07765460f05478f20cf55c7b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        echo twig_escape_filter($this->env, (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.edit_order") . " #") . $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "number", array())), "html", null, true);
        
        $__internal_c7ee1974656650073d3024715bef0d1565bf8b07765460f05478f20cf55c7b57->leave($__internal_c7ee1974656650073d3024715bef0d1565bf8b07765460f05478f20cf55c7b57_prof);

        
        $__internal_721e835c39751ce1373281a70e9aec3d3e12e71652882ed1a98975ffc7885890->leave($__internal_721e835c39751ce1373281a70e9aec3d3e12e71652882ed1a98975ffc7885890_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_ef4a5c91b65a784ebd730bfc4994fdce047de72198d1de431b22bf294d0e78b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef4a5c91b65a784ebd730bfc4994fdce047de72198d1de431b22bf294d0e78b9->enter($__internal_ef4a5c91b65a784ebd730bfc4994fdce047de72198d1de431b22bf294d0e78b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_5e3287c5d498bac05b7b09da630c5680bb473f98f81bde5428ec6619d5499558 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e3287c5d498bac05b7b09da630c5680bb473f98f81bde5428ec6619d5499558->enter($__internal_5e3287c5d498bac05b7b09da630c5680bb473f98f81bde5428ec6619d5499558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.order.update.before_header", array("resource" => ($context["resource"] ?? $this->getContext($context, "resource")))));
        echo "

<div class=\"ui stackable two column grid\">
    <div class=\"twelve wide column\">
        ";
        // line 15
        $this->loadTemplate("@SyliusAdmin/Order/Show/_header.html.twig", "SyliusAdminBundle:Order:update.html.twig", 15)->display($context);
        // line 16
        echo "    </div>
    <div class=\"four wide right aligned column\">
        ";
        // line 18
        $this->loadTemplate("@SyliusAdmin/Order/Update/_actions.html.twig", "SyliusAdminBundle:Order:update.html.twig", 18)->display($context);
        // line 19
        echo "    </div>
</div>

";
        // line 22
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.order.update.after_header", array("resource" => ($context["resource"] ?? $this->getContext($context, "resource")))));
        echo "
    
";
        // line 24
        $this->loadTemplate("@SyliusAdmin/Order/Update/_breadcrumb.html.twig", "SyliusAdminBundle:Order:update.html.twig", 24)->display($context);
        // line 25
        echo "
";
        // line 26
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.order.update.after_breadcrumb", array("resource" => ($context["resource"] ?? $this->getContext($context, "resource")))));
        echo "

";
        // line 28
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_order_update", array("id" => $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "id", array()))), "attr" => array("class" => "ui loadable form", "novalidate" => "novalidate")));
        echo "
    <div class=\"ui segment\">
        <input type=\"hidden\" name=\"_method\" value=\"PATCH\" />

        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.shipping_address"), "html", null, true);
        echo "</h4>
            ";
        // line 34
        $this->loadTemplate("@SyliusAdmin/Common/Form/_address.html.twig", "SyliusAdminBundle:Order:update.html.twig", 34)->display(array_merge($context, array("form" => $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "shippingAddress", array()))));
        // line 35
        echo "        </div>

        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.billing_address"), "html", null, true);
        echo "</h4>
            ";
        // line 39
        $this->loadTemplate("@SyliusAdmin/Common/Form/_address.html.twig", "SyliusAdminBundle:Order:update.html.twig", 39)->display(array_merge($context, array("form" => $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "billingAddress", array()))));
        // line 40
        echo "        </div>

        ";
        // line 42
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.order.update.form", array("resource" => ($context["resource"] ?? $this->getContext($context, "resource")))));
        echo "

        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
        ";
        // line 45
        $this->loadTemplate("@SyliusUi/Form/Buttons/_update.html.twig", "SyliusAdminBundle:Order:update.html.twig", 45)->display(array_merge($context, array("paths" => array("cancel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_order_index")))));
        // line 46
        echo "    </div>
";
        // line 47
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "

";
        // line 49
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.order.update.after_content", array("resource" => ($context["resource"] ?? $this->getContext($context, "resource")))));
        echo "
";
        
        $__internal_5e3287c5d498bac05b7b09da630c5680bb473f98f81bde5428ec6619d5499558->leave($__internal_5e3287c5d498bac05b7b09da630c5680bb473f98f81bde5428ec6619d5499558_prof);

        
        $__internal_ef4a5c91b65a784ebd730bfc4994fdce047de72198d1de431b22bf294d0e78b9->leave($__internal_ef4a5c91b65a784ebd730bfc4994fdce047de72198d1de431b22bf294d0e78b9_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 49,  155 => 47,  152 => 46,  150 => 45,  146 => 44,  141 => 42,  137 => 40,  135 => 39,  131 => 38,  126 => 35,  124 => 34,  120 => 33,  112 => 28,  107 => 26,  104 => 25,  102 => 24,  97 => 22,  92 => 19,  90 => 18,  86 => 16,  84 => 15,  77 => 11,  68 => 10,  48 => 6,  38 => 1,  36 => 8,  34 => 4,  32 => 3,  11 => 1,);
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
{% import 'SyliusUiBundle:Macro:buttons.html.twig' as buttons %}

{% block title %}{{ parent() }} {{ 'sylius.ui.edit_order'|trans ~' #'~ order.number }}{% endblock %}

{% form_theme form 'SyliusUiBundle:Form:theme.html.twig' %}

{% block content %}
{{ sonata_block_render_event('sylius.admin.order.update.before_header', {'resource': resource}) }}

<div class=\"ui stackable two column grid\">
    <div class=\"twelve wide column\">
        {% include '@SyliusAdmin/Order/Show/_header.html.twig' %}
    </div>
    <div class=\"four wide right aligned column\">
        {% include '@SyliusAdmin/Order/Update/_actions.html.twig' %}
    </div>
</div>

{{ sonata_block_render_event('sylius.admin.order.update.after_header', {'resource': resource}) }}
    
{% include '@SyliusAdmin/Order/Update/_breadcrumb.html.twig' %}

{{ sonata_block_render_event('sylius.admin.order.update.after_breadcrumb', {'resource': resource}) }}

{{ form_start(form, {'action': path('sylius_admin_order_update', {'id': order.id}), 'attr': {'class': 'ui loadable form', 'novalidate': 'novalidate'}}) }}
    <div class=\"ui segment\">
        <input type=\"hidden\" name=\"_method\" value=\"PATCH\" />

        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">{{ 'sylius.ui.shipping_address'|trans }}</h4>
            {% include '@SyliusAdmin/Common/Form/_address.html.twig' with {'form': form.shippingAddress} %}
        </div>

        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">{{ 'sylius.ui.billing_address'|trans }}</h4>
            {% include '@SyliusAdmin/Common/Form/_address.html.twig' with {'form': form.billingAddress} %}
        </div>

        {{ sonata_block_render_event('sylius.admin.order.update.form', {'resource': resource}) }}

        {{ form_row(form._token) }}
        {% include '@SyliusUi/Form/Buttons/_update.html.twig' with {'paths': {'cancel': path('sylius_admin_order_index')}} %}
    </div>
{{ form_end(form, {'render_rest': false}) }}

{{ sonata_block_render_event('sylius.admin.order.update.after_content', {'resource': resource}) }}
{% endblock %}
", "SyliusAdminBundle:Order:update.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/update.html.twig");
    }
}

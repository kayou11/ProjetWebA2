<?php

/* SyliusAdminBundle:Crud:create.html.twig */
class __TwigTemplate_74f21b04bbd031544e98c8afe7262f55bb43c661b6f285d87d44fd22231abc89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SyliusAdminBundle::layout.html.twig", "SyliusAdminBundle:Crud:create.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SyliusAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f1e6e6d8dcc9696a369fb1414c0395a33ce3062e387205e02e6f077608061368 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1e6e6d8dcc9696a369fb1414c0395a33ce3062e387205e02e6f077608061368->enter($__internal_f1e6e6d8dcc9696a369fb1414c0395a33ce3062e387205e02e6f077608061368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Crud:create.html.twig"));

        $__internal_a5d68ab325997a02024cacaedbe48c185a5f988d608c5f7a0f3982af0ef5c712 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5d68ab325997a02024cacaedbe48c185a5f988d608c5f7a0f3982af0ef5c712->enter($__internal_a5d68ab325997a02024cacaedbe48c185a5f988d608c5f7a0f3982af0ef5c712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Crud:create.html.twig"));

        // line 3
        $context["headers"] = $this->loadTemplate("SyliusUiBundle:Macro:headers.html.twig", "SyliusAdminBundle:Crud:create.html.twig", 3);
        // line 5
        $context["header"] = (($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "header", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "header", array()), (($this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "applicationName", array()) . ".ui.new_") . $this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "name", array())))) : ((($this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "applicationName", array()) . ".ui.new_") . $this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "name", array()))));
        // line 6
        $context["event_prefix"] = ((($this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "applicationName", array()) . ".admin.") . $this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "name", array())) . ".create");
        // line 10
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "@SyliusAdmin/Form/theme.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1e6e6d8dcc9696a369fb1414c0395a33ce3062e387205e02e6f077608061368->leave($__internal_f1e6e6d8dcc9696a369fb1414c0395a33ce3062e387205e02e6f077608061368_prof);

        
        $__internal_a5d68ab325997a02024cacaedbe48c185a5f988d608c5f7a0f3982af0ef5c712->leave($__internal_a5d68ab325997a02024cacaedbe48c185a5f988d608c5f7a0f3982af0ef5c712_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_e28d64343e251eb701510461ea743fbdf34ff6d53a04b084a7a72a3a72e8d73a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e28d64343e251eb701510461ea743fbdf34ff6d53a04b084a7a72a3a72e8d73a->enter($__internal_e28d64343e251eb701510461ea743fbdf34ff6d53a04b084a7a72a3a72e8d73a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1a375d88ee83f6d89945ffee6052990197ec2da80f143473f71df110a1b195c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a375d88ee83f6d89945ffee6052990197ec2da80f143473f71df110a1b195c1->enter($__internal_1a375d88ee83f6d89945ffee6052990197ec2da80f143473f71df110a1b195c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["header"] ?? $this->getContext($context, "header"))), "html", null, true);
        
        $__internal_1a375d88ee83f6d89945ffee6052990197ec2da80f143473f71df110a1b195c1->leave($__internal_1a375d88ee83f6d89945ffee6052990197ec2da80f143473f71df110a1b195c1_prof);

        
        $__internal_e28d64343e251eb701510461ea743fbdf34ff6d53a04b084a7a72a3a72e8d73a->leave($__internal_e28d64343e251eb701510461ea743fbdf34ff6d53a04b084a7a72a3a72e8d73a_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_48590176124134e21cee5d4bbe90c4bdff9132b1d150871e11b43f73b1f36d1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48590176124134e21cee5d4bbe90c4bdff9132b1d150871e11b43f73b1f36d1b->enter($__internal_48590176124134e21cee5d4bbe90c4bdff9132b1d150871e11b43f73b1f36d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2da4af8e5734323488a6f29ca8f19aacd2ef72140f37f475cee4590cad617484 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2da4af8e5734323488a6f29ca8f19aacd2ef72140f37f475cee4590cad617484->enter($__internal_2da4af8e5734323488a6f29ca8f19aacd2ef72140f37f475cee4590cad617484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array((($context["event_prefix"] ?? $this->getContext($context, "event_prefix")) . ".before_header"), array("resource" => ($context["resource"] ?? $this->getContext($context, "resource")))));
        echo "

";
        // line 15
        $this->loadTemplate("@SyliusAdmin/Crud/Create/_header.html.twig", "SyliusAdminBundle:Crud:create.html.twig", 15)->display($context);
        // line 16
        echo "
";
        // line 17
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array((($context["event_prefix"] ?? $this->getContext($context, "event_prefix")) . ".after_header"), array("resource" => ($context["resource"] ?? $this->getContext($context, "resource")))));
        echo "

";
        // line 19
        $this->loadTemplate("@SyliusAdmin/Crud/Create/_content.html.twig", "SyliusAdminBundle:Crud:create.html.twig", 19)->display($context);
        // line 20
        echo "
";
        // line 21
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array((($context["event_prefix"] ?? $this->getContext($context, "event_prefix")) . ".after_content"), array("resource" => ($context["resource"] ?? $this->getContext($context, "resource")))));
        echo "
";
        
        $__internal_2da4af8e5734323488a6f29ca8f19aacd2ef72140f37f475cee4590cad617484->leave($__internal_2da4af8e5734323488a6f29ca8f19aacd2ef72140f37f475cee4590cad617484_prof);

        
        $__internal_48590176124134e21cee5d4bbe90c4bdff9132b1d150871e11b43f73b1f36d1b->leave($__internal_48590176124134e21cee5d4bbe90c4bdff9132b1d150871e11b43f73b1f36d1b_prof);

    }

    // line 24
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_37eb67001e5ab572af1d3f0ffdf6a84db8dcfe77e1a516632d08e961c70b2ffc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37eb67001e5ab572af1d3f0ffdf6a84db8dcfe77e1a516632d08e961c70b2ffc->enter($__internal_37eb67001e5ab572af1d3f0ffdf6a84db8dcfe77e1a516632d08e961c70b2ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_98f472bd147211f79a55042ed5d20c9e7b85d49dbd5fd89faf12868486a6b2d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98f472bd147211f79a55042ed5d20c9e7b85d49dbd5fd89faf12868486a6b2d1->enter($__internal_98f472bd147211f79a55042ed5d20c9e7b85d49dbd5fd89faf12868486a6b2d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 25
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    ";
        // line 27
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array((($context["event_prefix"] ?? $this->getContext($context, "event_prefix")) . ".stylesheets")));
        echo "
";
        
        $__internal_98f472bd147211f79a55042ed5d20c9e7b85d49dbd5fd89faf12868486a6b2d1->leave($__internal_98f472bd147211f79a55042ed5d20c9e7b85d49dbd5fd89faf12868486a6b2d1_prof);

        
        $__internal_37eb67001e5ab572af1d3f0ffdf6a84db8dcfe77e1a516632d08e961c70b2ffc->leave($__internal_37eb67001e5ab572af1d3f0ffdf6a84db8dcfe77e1a516632d08e961c70b2ffc_prof);

    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d4f7a713fd74b5841aaa165ccec5d6fea862ae22f871fd7aeb6ed94a5be3b345 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4f7a713fd74b5841aaa165ccec5d6fea862ae22f871fd7aeb6ed94a5be3b345->enter($__internal_d4f7a713fd74b5841aaa165ccec5d6fea862ae22f871fd7aeb6ed94a5be3b345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4a427f7ba1b0a63212dd2d2ccb8ea68c8ed7f2316d84c0fac5e3f54c469376ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a427f7ba1b0a63212dd2d2ccb8ea68c8ed7f2316d84c0fac5e3f54c469376ae->enter($__internal_4a427f7ba1b0a63212dd2d2ccb8ea68c8ed7f2316d84c0fac5e3f54c469376ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 31
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    ";
        // line 33
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array((($context["event_prefix"] ?? $this->getContext($context, "event_prefix")) . ".javascripts")));
        echo "
";
        
        $__internal_4a427f7ba1b0a63212dd2d2ccb8ea68c8ed7f2316d84c0fac5e3f54c469376ae->leave($__internal_4a427f7ba1b0a63212dd2d2ccb8ea68c8ed7f2316d84c0fac5e3f54c469376ae_prof);

        
        $__internal_d4f7a713fd74b5841aaa165ccec5d6fea862ae22f871fd7aeb6ed94a5be3b345->leave($__internal_d4f7a713fd74b5841aaa165ccec5d6fea862ae22f871fd7aeb6ed94a5be3b345_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Crud:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 33,  149 => 31,  140 => 30,  128 => 27,  122 => 25,  113 => 24,  101 => 21,  98 => 20,  96 => 19,  91 => 17,  88 => 16,  86 => 15,  81 => 13,  72 => 12,  52 => 8,  42 => 1,  40 => 10,  38 => 6,  36 => 5,  34 => 3,  11 => 1,);
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

{% set header = configuration.vars.header|default(metadata.applicationName~'.ui.new_'~metadata.name) %}
{% set event_prefix = metadata.applicationName ~ '.admin.' ~ metadata.name ~ '.create' %}

{% block title %}{{ parent() }} {{ header|trans }}{% endblock %}

{% form_theme form '@SyliusAdmin/Form/theme.html.twig' %}

{% block content %}
{{ sonata_block_render_event(event_prefix ~ '.before_header', {'resource': resource}) }}

{% include '@SyliusAdmin/Crud/Create/_header.html.twig' %}

{{ sonata_block_render_event(event_prefix ~ '.after_header', {'resource': resource}) }}

{% include '@SyliusAdmin/Crud/Create/_content.html.twig' %}

{{ sonata_block_render_event(event_prefix ~ '.after_content', {'resource': resource}) }}
{% endblock %}

{% block stylesheets %}
    {{ parent() }}

    {{ sonata_block_render_event(event_prefix ~ '.stylesheets') }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    {{ sonata_block_render_event(event_prefix ~ '.javascripts') }}
{% endblock %}
", "SyliusAdminBundle:Crud:create.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Crud/create.html.twig");
    }
}

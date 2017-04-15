<?php

/* SyliusAdminBundle:ProductVariant:index.html.twig */
class __TwigTemplate_1e228b6f1a81de1e8526fb207af342224f06d2c22a2e4f15c5cd03a65f61bfe6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SyliusAdminBundle::layout.html.twig", "SyliusAdminBundle:ProductVariant:index.html.twig", 1);
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
        $__internal_eb57285a7211024a4b9fe3aa6f311dd1ad878c1953517c61f905765ab9ecdbb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb57285a7211024a4b9fe3aa6f311dd1ad878c1953517c61f905765ab9ecdbb5->enter($__internal_eb57285a7211024a4b9fe3aa6f311dd1ad878c1953517c61f905765ab9ecdbb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant:index.html.twig"));

        $__internal_fdfa6bf0ebd1b6ed6043a7d0d1285e1b7a90720f29d7861ff3ae35b560e8e704 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdfa6bf0ebd1b6ed6043a7d0d1285e1b7a90720f29d7861ff3ae35b560e8e704->enter($__internal_fdfa6bf0ebd1b6ed6043a7d0d1285e1b7a90720f29d7861ff3ae35b560e8e704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant:index.html.twig"));

        // line 3
        $context["headers"] = $this->loadTemplate("SyliusUiBundle:Macro:headers.html.twig", "SyliusAdminBundle:ProductVariant:index.html.twig", 3);
        // line 5
        $context["definition"] = $this->getAttribute(($context["resources"] ?? $this->getContext($context, "resources")), "definition", array());
        // line 6
        $context["data"] = $this->getAttribute(($context["resources"] ?? $this->getContext($context, "resources")), "data", array());
        // line 8
        $context["header"] = (($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "header", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "header", array()), (($this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "applicationName", array()) . ".ui.") . $this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "pluralName", array())))) : ((($this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "applicationName", array()) . ".ui.") . $this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "pluralName", array()))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb57285a7211024a4b9fe3aa6f311dd1ad878c1953517c61f905765ab9ecdbb5->leave($__internal_eb57285a7211024a4b9fe3aa6f311dd1ad878c1953517c61f905765ab9ecdbb5_prof);

        
        $__internal_fdfa6bf0ebd1b6ed6043a7d0d1285e1b7a90720f29d7861ff3ae35b560e8e704->leave($__internal_fdfa6bf0ebd1b6ed6043a7d0d1285e1b7a90720f29d7861ff3ae35b560e8e704_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_837866d5ef3396bd4f91a5ab1204cb6c2cf07caeb51c19dc04a51432a27403ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_837866d5ef3396bd4f91a5ab1204cb6c2cf07caeb51c19dc04a51432a27403ba->enter($__internal_837866d5ef3396bd4f91a5ab1204cb6c2cf07caeb51c19dc04a51432a27403ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_87ea231181a22e8b0262824e0e68ae96706e13d76ff7a734f3a1b50c34341d04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87ea231181a22e8b0262824e0e68ae96706e13d76ff7a734f3a1b50c34341d04->enter($__internal_87ea231181a22e8b0262824e0e68ae96706e13d76ff7a734f3a1b50c34341d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["header"] ?? $this->getContext($context, "header"))), "html", null, true);
        
        $__internal_87ea231181a22e8b0262824e0e68ae96706e13d76ff7a734f3a1b50c34341d04->leave($__internal_87ea231181a22e8b0262824e0e68ae96706e13d76ff7a734f3a1b50c34341d04_prof);

        
        $__internal_837866d5ef3396bd4f91a5ab1204cb6c2cf07caeb51c19dc04a51432a27403ba->leave($__internal_837866d5ef3396bd4f91a5ab1204cb6c2cf07caeb51c19dc04a51432a27403ba_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_bf739e475168d7d78b1a5707217d842a3de412b92fa9c2bb488b67442e8adc13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf739e475168d7d78b1a5707217d842a3de412b92fa9c2bb488b67442e8adc13->enter($__internal_bf739e475168d7d78b1a5707217d842a3de412b92fa9c2bb488b67442e8adc13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_47d4f69d350706057674d8eede212b07651fd7140179fb20f1274b54478a5ba7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47d4f69d350706057674d8eede212b07651fd7140179fb20f1274b54478a5ba7->enter($__internal_47d4f69d350706057674d8eede212b07651fd7140179fb20f1274b54478a5ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.product_variant.index.before_header", array("resources" => ($context["resources"] ?? $this->getContext($context, "resources")))));
        echo "

    <div class=\"ui stackable two column grid\">
        ";
        // line 16
        $this->loadTemplate("@SyliusAdmin/ProductVariant/Index/_header.html.twig", "SyliusAdminBundle:ProductVariant:index.html.twig", 16)->display($context);
        // line 17
        echo "        ";
        $this->loadTemplate("@SyliusAdmin/Crud/Index/_actions.html.twig", "SyliusAdminBundle:ProductVariant:index.html.twig", 17)->display($context);
        // line 18
        echo "    </div>

    ";
        // line 20
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.product_variant.index.after_header", array("resources" => ($context["resources"] ?? $this->getContext($context, "resources")))));
        echo "

    ";
        // line 22
        $this->loadTemplate("@SyliusAdmin/Crud/Index/_content.html.twig", "SyliusAdminBundle:ProductVariant:index.html.twig", 22)->display($context);
        // line 23
        echo "
    ";
        // line 24
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.product_variant.index.after_content", array("resources" => ($context["resources"] ?? $this->getContext($context, "resources")))));
        echo "
";
        
        $__internal_47d4f69d350706057674d8eede212b07651fd7140179fb20f1274b54478a5ba7->leave($__internal_47d4f69d350706057674d8eede212b07651fd7140179fb20f1274b54478a5ba7_prof);

        
        $__internal_bf739e475168d7d78b1a5707217d842a3de412b92fa9c2bb488b67442e8adc13->leave($__internal_bf739e475168d7d78b1a5707217d842a3de412b92fa9c2bb488b67442e8adc13_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductVariant:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 24,  102 => 23,  100 => 22,  95 => 20,  91 => 18,  88 => 17,  86 => 16,  79 => 13,  70 => 12,  50 => 10,  40 => 1,  38 => 8,  36 => 6,  34 => 5,  32 => 3,  11 => 1,);
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
    {{ sonata_block_render_event('sylius.admin.product_variant.index.before_header', {'resources': resources}) }}

    <div class=\"ui stackable two column grid\">
        {% include '@SyliusAdmin/ProductVariant/Index/_header.html.twig' %}
        {% include '@SyliusAdmin/Crud/Index/_actions.html.twig' %}
    </div>

    {{ sonata_block_render_event('sylius.admin.product_variant.index.after_header', {'resources': resources}) }}

    {% include '@SyliusAdmin/Crud/Index/_content.html.twig' %}

    {{ sonata_block_render_event('sylius.admin.product_variant.index.after_content', {'resources': resources}) }}
{% endblock %}
", "SyliusAdminBundle:ProductVariant:index.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/ProductVariant/index.html.twig");
    }
}

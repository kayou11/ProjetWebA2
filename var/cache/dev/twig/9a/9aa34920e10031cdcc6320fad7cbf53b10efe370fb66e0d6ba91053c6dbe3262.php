<?php

/* SyliusAdminBundle:ProductVariant:generate.html.twig */
class __TwigTemplate_006c22afd7a8fd36ce03a1b1523ab708e16e2940e7b5bc2a2cdc51af34b27e9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusAdmin/layout.html.twig", "SyliusAdminBundle:ProductVariant:generate.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusAdmin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee12324a26ac867d37428c8ec1a6619de86e37a63465fba6d4ea1ca1dd0419c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee12324a26ac867d37428c8ec1a6619de86e37a63465fba6d4ea1ca1dd0419c7->enter($__internal_ee12324a26ac867d37428c8ec1a6619de86e37a63465fba6d4ea1ca1dd0419c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant:generate.html.twig"));

        $__internal_afaea79808799b6321c2a43e824ef9e7b68107d236f1da648015472d12921020 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afaea79808799b6321c2a43e824ef9e7b68107d236f1da648015472d12921020->enter($__internal_afaea79808799b6321c2a43e824ef9e7b68107d236f1da648015472d12921020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant:generate.html.twig"));

        // line 3
        $context["headers"] = $this->loadTemplate("SyliusUiBundle:Macro:headers.html.twig", "SyliusAdminBundle:ProductVariant:generate.html.twig", 3);
        // line 5
        $context["header"] = "sylius.ui.generate_variants";
        // line 9
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "SyliusUiBundle:Form:theme.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee12324a26ac867d37428c8ec1a6619de86e37a63465fba6d4ea1ca1dd0419c7->leave($__internal_ee12324a26ac867d37428c8ec1a6619de86e37a63465fba6d4ea1ca1dd0419c7_prof);

        
        $__internal_afaea79808799b6321c2a43e824ef9e7b68107d236f1da648015472d12921020->leave($__internal_afaea79808799b6321c2a43e824ef9e7b68107d236f1da648015472d12921020_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd0570b75487c92eef5ec760b2ee107681bc5cbb47fcfa15a8c2d36716935452 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd0570b75487c92eef5ec760b2ee107681bc5cbb47fcfa15a8c2d36716935452->enter($__internal_cd0570b75487c92eef5ec760b2ee107681bc5cbb47fcfa15a8c2d36716935452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f8c92b49fbfde2988745e5757df919e54e65e5446fd6cb03e72a1c0762071b12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8c92b49fbfde2988745e5757df919e54e65e5446fd6cb03e72a1c0762071b12->enter($__internal_f8c92b49fbfde2988745e5757df919e54e65e5446fd6cb03e72a1c0762071b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["header"] ?? $this->getContext($context, "header"))), "html", null, true);
        
        $__internal_f8c92b49fbfde2988745e5757df919e54e65e5446fd6cb03e72a1c0762071b12->leave($__internal_f8c92b49fbfde2988745e5757df919e54e65e5446fd6cb03e72a1c0762071b12_prof);

        
        $__internal_cd0570b75487c92eef5ec760b2ee107681bc5cbb47fcfa15a8c2d36716935452->leave($__internal_cd0570b75487c92eef5ec760b2ee107681bc5cbb47fcfa15a8c2d36716935452_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_a482c56c6fb6e3a4321bcaa1f595a2f0750b3bdc59f63e94ba50b41d42e821cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a482c56c6fb6e3a4321bcaa1f595a2f0750b3bdc59f63e94ba50b41d42e821cc->enter($__internal_a482c56c6fb6e3a4321bcaa1f595a2f0750b3bdc59f63e94ba50b41d42e821cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_5f3ddd3d732c0faa0a6c8b019ed6c256eacd86b96310e31410329b3f3d9c6237 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f3ddd3d732c0faa0a6c8b019ed6c256eacd86b96310e31410329b3f3d9c6237->enter($__internal_5f3ddd3d732c0faa0a6c8b019ed6c256eacd86b96310e31410329b3f3d9c6237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.product_variant.generate.before_header", array("resource" => ($context["resource"] ?? $this->getContext($context, "resource")))));
        echo "

";
        // line 14
        echo $context["headers"]->getdefault($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "name", array()), "random", $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "subheader", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "subheader", array()), ($context["header"] ?? $this->getContext($context, "header")))) : (($context["header"] ?? $this->getContext($context, "header"))))));
        echo "

";
        // line 16
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.product_variant.generate.after_header", array("resource" => ($context["resource"] ?? $this->getContext($context, "resource")))));
        echo "

";
        // line 18
        $this->loadTemplate("@SyliusAdmin/ProductVariant/Generate/_breadcrumb.html.twig", "SyliusAdminBundle:ProductVariant:generate.html.twig", 18)->display($context);
        // line 19
        echo "
";
        // line 20
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.product_variant.generate.after_breadcrumb", array("resource" => ($context["resource"] ?? $this->getContext($context, "resource")))));
        echo "

";
        // line 22
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_product_variant_generate", array("productId" => $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "id", array()))), "attr" => array("class" => "ui loadable form", "novalidate" => "novalidate")));
        echo "
<div class=\"ui segment\">
    ";
        // line 24
        $this->loadTemplate("@SyliusAdmin/ProductVariant/Generate/_form.html.twig", "SyliusAdminBundle:ProductVariant:generate.html.twig", 24)->display($context);
        // line 25
        echo "    <div class=\"ui basic segment\">
        <div class=\"ui buttons\">
            <button class=\"ui labeled icon primary button\" type=\"submit\"><i class=\"random icon\"></i>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.generate"), "html", null, true);
        echo "</button>
            <div class=\"or\" data-text=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.or"), "html", null, true);
        echo "\"></div>
            ";
        // line 29
        $this->loadTemplate("@SyliusUi/Form/Buttons/_cancel.html.twig", "SyliusAdminBundle:ProductVariant:generate.html.twig", 29)->display(array_merge($context, array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(($context["configuration"] ?? $this->getContext($context, "configuration")), "getRouteName", array(0 => "index"), "method"), array("productId" => $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "id", array()))))));
        // line 30
        echo "        </div>
    </div>

    ";
        // line 33
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.product_variant.generate.form", array("resource" => ($context["resource"] ?? $this->getContext($context, "resource")))));
        echo "
</div>
";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
";
        // line 36
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "

";
        // line 38
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.product_variant.generate.after_content", array("resource" => ($context["resource"] ?? $this->getContext($context, "resource")))));
        echo "
";
        
        $__internal_5f3ddd3d732c0faa0a6c8b019ed6c256eacd86b96310e31410329b3f3d9c6237->leave($__internal_5f3ddd3d732c0faa0a6c8b019ed6c256eacd86b96310e31410329b3f3d9c6237_prof);

        
        $__internal_a482c56c6fb6e3a4321bcaa1f595a2f0750b3bdc59f63e94ba50b41d42e821cc->leave($__internal_a482c56c6fb6e3a4321bcaa1f595a2f0750b3bdc59f63e94ba50b41d42e821cc_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductVariant:generate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 38,  137 => 36,  133 => 35,  128 => 33,  123 => 30,  121 => 29,  117 => 28,  113 => 27,  109 => 25,  107 => 24,  102 => 22,  97 => 20,  94 => 19,  92 => 18,  87 => 16,  82 => 14,  77 => 12,  68 => 11,  48 => 7,  38 => 1,  36 => 9,  34 => 5,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusAdmin/layout.html.twig' %}

{% import 'SyliusUiBundle:Macro:headers.html.twig' as headers %}

{% set header = 'sylius.ui.generate_variants' %}

{% block title %}{{ parent() }} {{ header|trans }}{% endblock %}

{% form_theme form 'SyliusUiBundle:Form:theme.html.twig' %}

{% block content %}
{{ sonata_block_render_event('sylius.admin.product_variant.generate.before_header', {'resource': resource}) }}

{{ headers.default(product.name, 'random', configuration.vars.subheader|default(header)|trans) }}

{{ sonata_block_render_event('sylius.admin.product_variant.generate.after_header', {'resource': resource}) }}

{% include '@SyliusAdmin/ProductVariant/Generate/_breadcrumb.html.twig' %}

{{ sonata_block_render_event('sylius.admin.product_variant.generate.after_breadcrumb', {'resource': resource}) }}

{{ form_start(form, {'action': path('sylius_admin_product_variant_generate', {'productId': product.id}), 'attr': {'class': 'ui loadable form', 'novalidate': 'novalidate'}}) }}
<div class=\"ui segment\">
    {% include '@SyliusAdmin/ProductVariant/Generate/_form.html.twig' %}
    <div class=\"ui basic segment\">
        <div class=\"ui buttons\">
            <button class=\"ui labeled icon primary button\" type=\"submit\"><i class=\"random icon\"></i>{{- 'sylius.ui.generate'|trans -}}</button>
            <div class=\"or\" data-text=\"{{ 'sylius.ui.or'|trans }}\"></div>
            {% include '@SyliusUi/Form/Buttons/_cancel.html.twig' with {'path': path(configuration.getRouteName('index'), {'productId': product.id})} %}
        </div>
    </div>

    {{ sonata_block_render_event('sylius.admin.product_variant.generate.form', {'resource': resource}) }}
</div>
{{ form_row(form._token) }}
{{ form_end(form, {'render_rest': false}) }}

{{ sonata_block_render_event('sylius.admin.product_variant.generate.after_content', {'resource': resource}) }}
{% endblock %}
", "SyliusAdminBundle:ProductVariant:generate.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/ProductVariant/generate.html.twig");
    }
}

<?php

/* SyliusAdminBundle:PromotionCoupon:generate.html.twig */
class __TwigTemplate_be6e5d43f54fe0c9154e8ef1ebc8dead92f6949d9a06afb97d7b85ca6fa35481 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusAdmin/layout.html.twig", "SyliusAdminBundle:PromotionCoupon:generate.html.twig", 1);
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
        $__internal_bb0fc86b431980c1e15337c238a07a867afd7c9c88439a12bb02617debd529c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb0fc86b431980c1e15337c238a07a867afd7c9c88439a12bb02617debd529c7->enter($__internal_bb0fc86b431980c1e15337c238a07a867afd7c9c88439a12bb02617debd529c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:PromotionCoupon:generate.html.twig"));

        $__internal_058765af87a46e09217410e0a7c241857f10398e0ec9d0ee248b2d0d8f5b3ffc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_058765af87a46e09217410e0a7c241857f10398e0ec9d0ee248b2d0d8f5b3ffc->enter($__internal_058765af87a46e09217410e0a7c241857f10398e0ec9d0ee248b2d0d8f5b3ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:PromotionCoupon:generate.html.twig"));

        // line 3
        $context["headers"] = $this->loadTemplate("SyliusUiBundle:Macro:headers.html.twig", "SyliusAdminBundle:PromotionCoupon:generate.html.twig", 3);
        // line 5
        $context["header"] = "sylius.ui.generate_coupons";
        // line 9
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "SyliusUiBundle:Form:theme.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb0fc86b431980c1e15337c238a07a867afd7c9c88439a12bb02617debd529c7->leave($__internal_bb0fc86b431980c1e15337c238a07a867afd7c9c88439a12bb02617debd529c7_prof);

        
        $__internal_058765af87a46e09217410e0a7c241857f10398e0ec9d0ee248b2d0d8f5b3ffc->leave($__internal_058765af87a46e09217410e0a7c241857f10398e0ec9d0ee248b2d0d8f5b3ffc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_59ff1036b865d830e5ed13a3f1519f4137f17950ba089ab8d621400a7d7fb97d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59ff1036b865d830e5ed13a3f1519f4137f17950ba089ab8d621400a7d7fb97d->enter($__internal_59ff1036b865d830e5ed13a3f1519f4137f17950ba089ab8d621400a7d7fb97d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f3f15633c0cae993433ea24f2f59fbe34d322732f7d31bcbe5c5254675b3da3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3f15633c0cae993433ea24f2f59fbe34d322732f7d31bcbe5c5254675b3da3b->enter($__internal_f3f15633c0cae993433ea24f2f59fbe34d322732f7d31bcbe5c5254675b3da3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["header"] ?? $this->getContext($context, "header"))), "html", null, true);
        
        $__internal_f3f15633c0cae993433ea24f2f59fbe34d322732f7d31bcbe5c5254675b3da3b->leave($__internal_f3f15633c0cae993433ea24f2f59fbe34d322732f7d31bcbe5c5254675b3da3b_prof);

        
        $__internal_59ff1036b865d830e5ed13a3f1519f4137f17950ba089ab8d621400a7d7fb97d->leave($__internal_59ff1036b865d830e5ed13a3f1519f4137f17950ba089ab8d621400a7d7fb97d_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_1d8b7c9abccc8f53c2acf28a2cbd82b3e99f93719a6d60121b330f41e1928c17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d8b7c9abccc8f53c2acf28a2cbd82b3e99f93719a6d60121b330f41e1928c17->enter($__internal_1d8b7c9abccc8f53c2acf28a2cbd82b3e99f93719a6d60121b330f41e1928c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c33512bba0098e48472883dbe93a90ae6e97ee13b0d488fa5c649bd6c00910d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c33512bba0098e48472883dbe93a90ae6e97ee13b0d488fa5c649bd6c00910d1->enter($__internal_c33512bba0098e48472883dbe93a90ae6e97ee13b0d488fa5c649bd6c00910d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.promotion_coupon.generate.before_header", array("resource" => ($context["promotion"] ?? $this->getContext($context, "promotion")))));
        echo "

";
        // line 14
        echo $context["headers"]->getdefault($this->getAttribute(($context["promotion"] ?? $this->getContext($context, "promotion")), "name", array()), "random", $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "subheader", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "subheader", array()), ($context["header"] ?? $this->getContext($context, "header")))) : (($context["header"] ?? $this->getContext($context, "header"))))));
        echo "

";
        // line 16
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.promotion_coupon.generate.after_header", array("resource" => ($context["promotion"] ?? $this->getContext($context, "promotion")))));
        echo "

";
        // line 18
        $this->loadTemplate("@SyliusAdmin/PromotionCoupon/Generate/_breadcrumb.html.twig", "SyliusAdminBundle:PromotionCoupon:generate.html.twig", 18)->display($context);
        // line 19
        echo "
";
        // line 20
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.promotion_coupon.generate.after_breadcrumb", array("resource" => ($context["promotion"] ?? $this->getContext($context, "promotion")))));
        echo "

";
        // line 22
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_promotion_coupon_generate", array("promotionId" => $this->getAttribute(($context["promotion"] ?? $this->getContext($context, "promotion")), "id", array()))), "attr" => array("class" => "ui loadable form", "novalidate" => "novalidate")));
        echo "
<div class=\"ui segment\">
    ";
        // line 24
        $this->loadTemplate("@SyliusAdmin/PromotionCoupon/Generate/_form.html.twig", "SyliusAdminBundle:PromotionCoupon:generate.html.twig", 24)->display($context);
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
        $this->loadTemplate("@SyliusUi/Form/Buttons/_cancel.html.twig", "SyliusAdminBundle:PromotionCoupon:generate.html.twig", 29)->display(array_merge($context, array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(($context["configuration"] ?? $this->getContext($context, "configuration")), "getRouteName", array(0 => "index"), "method"), array("promotionId" => $this->getAttribute(($context["promotion"] ?? $this->getContext($context, "promotion")), "id", array()))))));
        // line 30
        echo "        </div>
    </div>

    ";
        // line 33
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.promotion_coupon.generate.form", array("resource" => ($context["promotion"] ?? $this->getContext($context, "promotion")))));
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
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.promotion_coupon.generate.after_content", array("resource" => ($context["promotion"] ?? $this->getContext($context, "promotion")))));
        echo "
";
        
        $__internal_c33512bba0098e48472883dbe93a90ae6e97ee13b0d488fa5c649bd6c00910d1->leave($__internal_c33512bba0098e48472883dbe93a90ae6e97ee13b0d488fa5c649bd6c00910d1_prof);

        
        $__internal_1d8b7c9abccc8f53c2acf28a2cbd82b3e99f93719a6d60121b330f41e1928c17->leave($__internal_1d8b7c9abccc8f53c2acf28a2cbd82b3e99f93719a6d60121b330f41e1928c17_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:PromotionCoupon:generate.html.twig";
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

{% set header = 'sylius.ui.generate_coupons' %}

{% block title %}{{ parent() }} {{ header|trans }}{% endblock %}

{% form_theme form 'SyliusUiBundle:Form:theme.html.twig' %}

{% block content %}
{{ sonata_block_render_event('sylius.admin.promotion_coupon.generate.before_header', {'resource': promotion}) }}

{{ headers.default(promotion.name, 'random', configuration.vars.subheader|default(header)|trans) }}

{{ sonata_block_render_event('sylius.admin.promotion_coupon.generate.after_header', {'resource': promotion}) }}

{% include '@SyliusAdmin/PromotionCoupon/Generate/_breadcrumb.html.twig' %}

{{ sonata_block_render_event('sylius.admin.promotion_coupon.generate.after_breadcrumb', {'resource': promotion}) }}

{{ form_start(form, {'action': path('sylius_admin_promotion_coupon_generate', {'promotionId': promotion.id}), 'attr': {'class': 'ui loadable form', 'novalidate': 'novalidate'}}) }}
<div class=\"ui segment\">
    {% include '@SyliusAdmin/PromotionCoupon/Generate/_form.html.twig' %}
    <div class=\"ui basic segment\">
        <div class=\"ui buttons\">
            <button class=\"ui labeled icon primary button\" type=\"submit\"><i class=\"random icon\"></i>{{- 'sylius.ui.generate'|trans -}}</button>
            <div class=\"or\" data-text=\"{{ 'sylius.ui.or'|trans }}\"></div>
            {% include '@SyliusUi/Form/Buttons/_cancel.html.twig' with {'path': path(configuration.getRouteName('index'), {'promotionId': promotion.id})} %}
        </div>
    </div>

    {{ sonata_block_render_event('sylius.admin.promotion_coupon.generate.form', {'resource': promotion}) }}
</div>
{{ form_row(form._token) }}
{{ form_end(form, {'render_rest': false}) }}

{{ sonata_block_render_event('sylius.admin.promotion_coupon.generate.after_content', {'resource': promotion}) }}
{% endblock %}
", "SyliusAdminBundle:PromotionCoupon:generate.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/PromotionCoupon/generate.html.twig");
    }
}

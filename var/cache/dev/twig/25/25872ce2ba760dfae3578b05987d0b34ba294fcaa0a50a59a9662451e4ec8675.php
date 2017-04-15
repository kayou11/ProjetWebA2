<?php

/* SyliusShopBundle::error500.html.twig */
class __TwigTemplate_c0fa177d2d95eb24d167fd7181d38a97728d9fac861fb5c9c181ee0db38fede4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "SyliusShopBundle::error500.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusShop/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de3e71867f61a12919d525fb9fceec74d057b6ab09534e41b044626d6271c909 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de3e71867f61a12919d525fb9fceec74d057b6ab09534e41b044626d6271c909->enter($__internal_de3e71867f61a12919d525fb9fceec74d057b6ab09534e41b044626d6271c909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle::error500.html.twig"));

        $__internal_21b30a76b8d58c5015d7678cf5ed9b16417ef5552e3466506176fbcc91afe862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21b30a76b8d58c5015d7678cf5ed9b16417ef5552e3466506176fbcc91afe862->enter($__internal_21b30a76b8d58c5015d7678cf5ed9b16417ef5552e3466506176fbcc91afe862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle::error500.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de3e71867f61a12919d525fb9fceec74d057b6ab09534e41b044626d6271c909->leave($__internal_de3e71867f61a12919d525fb9fceec74d057b6ab09534e41b044626d6271c909_prof);

        
        $__internal_21b30a76b8d58c5015d7678cf5ed9b16417ef5552e3466506176fbcc91afe862->leave($__internal_21b30a76b8d58c5015d7678cf5ed9b16417ef5552e3466506176fbcc91afe862_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_4b4b7b383165da74d705f3c0ca75ceaafb376f77220a9d9aabf1099fb3f412d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b4b7b383165da74d705f3c0ca75ceaafb376f77220a9d9aabf1099fb3f412d1->enter($__internal_4b4b7b383165da74d705f3c0ca75ceaafb376f77220a9d9aabf1099fb3f412d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ea62e796f292e577cd3a23d32a7f9674fdb7509a17f68c4fb1fcb55eaeff72f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea62e796f292e577cd3a23d32a7f9674fdb7509a17f68c4fb1fcb55eaeff72f8->enter($__internal_ea62e796f292e577cd3a23d32a7f9674fdb7509a17f68c4fb1fcb55eaeff72f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h2 class=\"ui center aligned icon header\">
        <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/shop/img/logo.png"), "html", null, true);
        echo "\" alt=\"Sylius logo\" class=\"ui small image\" />
        <br/><br/>
        ";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.server_has_encountered_some_errors"), "html", null, true);
        echo "
    </h2>

";
        
        $__internal_ea62e796f292e577cd3a23d32a7f9674fdb7509a17f68c4fb1fcb55eaeff72f8->leave($__internal_ea62e796f292e577cd3a23d32a7f9674fdb7509a17f68c4fb1fcb55eaeff72f8_prof);

        
        $__internal_4b4b7b383165da74d705f3c0ca75ceaafb376f77220a9d9aabf1099fb3f412d1->leave($__internal_4b4b7b383165da74d705f3c0ca75ceaafb376f77220a9d9aabf1099fb3f412d1_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle::error500.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusShop/layout.html.twig' %}

{% block content %}
    <h2 class=\"ui center aligned icon header\">
        <img src=\"{{ asset('assets/shop/img/logo.png') }}\" alt=\"Sylius logo\" class=\"ui small image\" />
        <br/><br/>
        {{ 'sylius.ui.server_has_encountered_some_errors'|trans }}
    </h2>

{% endblock %}
", "SyliusShopBundle::error500.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/error500.html.twig");
    }
}

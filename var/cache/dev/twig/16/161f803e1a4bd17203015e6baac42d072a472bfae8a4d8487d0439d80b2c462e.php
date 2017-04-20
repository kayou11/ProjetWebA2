<?php

/* ShopBundle:Boutique:panier.html.twig */
class __TwigTemplate_12f1cb62275908b04d017f1b1aeee950c816e37d6021bd896b83cbb606463d01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SiteBundle::base.html.twig", "ShopBundle:Boutique:panier.html.twig", 1);
        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SiteBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_909b00de865dbe29a9cc0b4fdc039b34f14c7d730dc433df504f8d9cdc12ebcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_909b00de865dbe29a9cc0b4fdc039b34f14c7d730dc433df504f8d9cdc12ebcc->enter($__internal_909b00de865dbe29a9cc0b4fdc039b34f14c7d730dc433df504f8d9cdc12ebcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ShopBundle:Boutique:panier.html.twig"));

        $__internal_c388a6be3b1c2c48a9012d934f4d5b0fc517d96e8c10d0baf3326fe3e591f700 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c388a6be3b1c2c48a9012d934f4d5b0fc517d96e8c10d0baf3326fe3e591f700->enter($__internal_c388a6be3b1c2c48a9012d934f4d5b0fc517d96e8c10d0baf3326fe3e591f700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ShopBundle:Boutique:panier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_909b00de865dbe29a9cc0b4fdc039b34f14c7d730dc433df504f8d9cdc12ebcc->leave($__internal_909b00de865dbe29a9cc0b4fdc039b34f14c7d730dc433df504f8d9cdc12ebcc_prof);

        
        $__internal_c388a6be3b1c2c48a9012d934f4d5b0fc517d96e8c10d0baf3326fe3e591f700->leave($__internal_c388a6be3b1c2c48a9012d934f4d5b0fc517d96e8c10d0baf3326fe3e591f700_prof);

    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        $__internal_3eaba0568206fc33116bf9de9360065f629441c2c9a0737ef5ec9447f58e1dfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eaba0568206fc33116bf9de9360065f629441c2c9a0737ef5ec9447f58e1dfc->enter($__internal_3eaba0568206fc33116bf9de9360065f629441c2c9a0737ef5ec9447f58e1dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_d0f264cc3c6b04a09f867f2a39b107c7b86c069b78820df5d3df63a9cdc6a796 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0f264cc3c6b04a09f867f2a39b107c7b86c069b78820df5d3df63a9cdc6a796->enter($__internal_d0f264cc3c6b04a09f867f2a39b107c7b86c069b78820df5d3df63a9cdc6a796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"../../public/css/pages/panier.css\" type=\"text/css\" />
";
        
        $__internal_d0f264cc3c6b04a09f867f2a39b107c7b86c069b78820df5d3df63a9cdc6a796->leave($__internal_d0f264cc3c6b04a09f867f2a39b107c7b86c069b78820df5d3df63a9cdc6a796_prof);

        
        $__internal_3eaba0568206fc33116bf9de9360065f629441c2c9a0737ef5ec9447f58e1dfc->leave($__internal_3eaba0568206fc33116bf9de9360065f629441c2c9a0737ef5ec9447f58e1dfc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2bfd19e0261a7b4dabe3112da1841d62fbf7f043275d0e68aed70a955bc59434 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bfd19e0261a7b4dabe3112da1841d62fbf7f043275d0e68aed70a955bc59434->enter($__internal_2bfd19e0261a7b4dabe3112da1841d62fbf7f043275d0e68aed70a955bc59434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_af206004ab45a0998fc17f50e9629e3998b4124499c26977ff5f4c757c9bf771 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af206004ab45a0998fc17f50e9629e3998b4124499c26977ff5f4c757c9bf771->enter($__internal_af206004ab45a0998fc17f50e9629e3998b4124499c26977ff5f4c757c9bf771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Votre panier";
        
        $__internal_af206004ab45a0998fc17f50e9629e3998b4124499c26977ff5f4c757c9bf771->leave($__internal_af206004ab45a0998fc17f50e9629e3998b4124499c26977ff5f4c757c9bf771_prof);

        
        $__internal_2bfd19e0261a7b4dabe3112da1841d62fbf7f043275d0e68aed70a955bc59434->leave($__internal_2bfd19e0261a7b4dabe3112da1841d62fbf7f043275d0e68aed70a955bc59434_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_f987d1f16473853e7aa4d4099ab89060f5d1ac17e968e4956438bcecd1f77575 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f987d1f16473853e7aa4d4099ab89060f5d1ac17e968e4956438bcecd1f77575->enter($__internal_f987d1f16473853e7aa4d4099ab89060f5d1ac17e968e4956438bcecd1f77575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a66a4620c228999189061f274dfc268fec131ed6cceda4e4e54b55894c6447f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a66a4620c228999189061f274dfc268fec131ed6cceda4e4e54b55894c6447f9->enter($__internal_a66a4620c228999189061f274dfc268fec131ed6cceda4e4e54b55894c6447f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    <div class=\"container\">
        <h2 id=\"TitleHead\"> Votre panier</h2>
        <div class=\"row\">
            <div class=\"col-lg-12\" id=\"ArticlePhoto\">
                <div class=\"col-md-2\">
                    <img src=\"../../public/img/kubb.jpg\" class=\"photosize\">
                </div>
                <div class=\"col-md-3\">
                    <a href=\"\"><h2 class=\"BodyTitle\">The Kubb !</h2></a>
                </div>
                <div class=\"col-md-1\">
                    <p>Prix : EUR xx.xx</p>
                </div>
            </div>
            <div class=\"col-lg-12\" id=\"ArticlePhoto\">
                <div class=\"col-md-2\">
                    <img src=\"../../public/img/foot.jpg\" class=\"photosize\">
                </div>
                <div class=\"col-md-3\">
                    <a href=\"\"><h2 class=\"BodyTitle\">Foot</h2></a>
                </div>
                <div class=\"col-md-1\">
                    <p>Prix : EUR xx.xx</p>
                </div>
            </div>
            <div class=\"col-lg-12\" id=\"ArticlePhoto\">
                <div class=\"col-md-2\">
                    <img src=\"../../public/img/hacking.jpg\" class=\"photosize\">
                </div>
                <div class=\"col-md-3\">
                    <a href=\"\"><h2 class=\"BodyTitle\">Rootme</h2></a>
                </div>
                <div class=\"col-md-1\">
                    <p>Prix : EUR xx.xx</p>
                </div>
            </div>
            <div class=\"col-md-1\" id=\"ArticlePhoto\">
                <p>Total : </p>
            </div>
        </div>
    </div>
";
        
        $__internal_a66a4620c228999189061f274dfc268fec131ed6cceda4e4e54b55894c6447f9->leave($__internal_a66a4620c228999189061f274dfc268fec131ed6cceda4e4e54b55894c6447f9_prof);

        
        $__internal_f987d1f16473853e7aa4d4099ab89060f5d1ac17e968e4956438bcecd1f77575->leave($__internal_f987d1f16473853e7aa4d4099ab89060f5d1ac17e968e4956438bcecd1f77575_prof);

    }

    public function getTemplateName()
    {
        return "ShopBundle:Boutique:panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 10,  80 => 9,  62 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SiteBundle::base.html.twig\" %}

{% block style %}
    <link rel=\"stylesheet\" href=\"../../public/css/pages/panier.css\" type=\"text/css\" />
{% endblock %}

{% block title  %}Votre panier{% endblock %}

{% block content %}
    <div class=\"container\">
        <h2 id=\"TitleHead\"> Votre panier</h2>
        <div class=\"row\">
            <div class=\"col-lg-12\" id=\"ArticlePhoto\">
                <div class=\"col-md-2\">
                    <img src=\"../../public/img/kubb.jpg\" class=\"photosize\">
                </div>
                <div class=\"col-md-3\">
                    <a href=\"\"><h2 class=\"BodyTitle\">The Kubb !</h2></a>
                </div>
                <div class=\"col-md-1\">
                    <p>Prix : EUR xx.xx</p>
                </div>
            </div>
            <div class=\"col-lg-12\" id=\"ArticlePhoto\">
                <div class=\"col-md-2\">
                    <img src=\"../../public/img/foot.jpg\" class=\"photosize\">
                </div>
                <div class=\"col-md-3\">
                    <a href=\"\"><h2 class=\"BodyTitle\">Foot</h2></a>
                </div>
                <div class=\"col-md-1\">
                    <p>Prix : EUR xx.xx</p>
                </div>
            </div>
            <div class=\"col-lg-12\" id=\"ArticlePhoto\">
                <div class=\"col-md-2\">
                    <img src=\"../../public/img/hacking.jpg\" class=\"photosize\">
                </div>
                <div class=\"col-md-3\">
                    <a href=\"\"><h2 class=\"BodyTitle\">Rootme</h2></a>
                </div>
                <div class=\"col-md-1\">
                    <p>Prix : EUR xx.xx</p>
                </div>
            </div>
            <div class=\"col-md-1\" id=\"ArticlePhoto\">
                <p>Total : </p>
            </div>
        </div>
    </div>
{% endblock %}", "ShopBundle:Boutique:panier.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/src/ShopBundle/Resources/views/Boutique/panier.html.twig");
    }
}

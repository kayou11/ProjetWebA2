<?php

/* SyliusUiBundle:Layout:sidebar.html.twig */
class __TwigTemplate_4738082cc0fe170097ad8006560adaf603d02228e33e212f0d881e1e27c7aed9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'metatags' => array($this, 'block_metatags'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sidebar' => array($this, 'block_sidebar'),
            'topbar' => array($this, 'block_topbar'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_286b5469fa21b073588759eede3ff27facafaced4e522ea229d3f3148adb3b21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_286b5469fa21b073588759eede3ff27facafaced4e522ea229d3f3148adb3b21->enter($__internal_286b5469fa21b073588759eede3ff27facafaced4e522ea229d3f3148adb3b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Layout:sidebar.html.twig"));

        $__internal_c467261a9983d00e0ba41cc732306d0ccde5f686bf8541db72f683d5d3837812 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c467261a9983d00e0ba41cc732306d0ccde5f686bf8541db72f683d5d3837812->enter($__internal_c467261a9983d00e0ba41cc732306d0ccde5f686bf8541db72f683d5d3837812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Layout:sidebar.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">

    ";
        // line 12
        $this->displayBlock('metatags', $context, $blocks);
        // line 14
        echo "
    ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "</head>

<body>
<div class=\"ui sidebar vertical inverted menu\" id=\"sidebar\">
    ";
        // line 21
        $this->displayBlock('sidebar', $context, $blocks);
        // line 23
        echo "</div>
<div class=\"ui fixed inverted menu\">
    ";
        // line 25
        $this->displayBlock('topbar', $context, $blocks);
        // line 27
        echo "</div>
<div class=\"pusher\">
    <div class=\"full height\" id=\"wrapper\">
        <div id=\"content\">
            ";
        // line 31
        $this->loadTemplate("@SyliusUi/_flashes.html.twig", "SyliusUiBundle:Layout:sidebar.html.twig", 31)->display($context);
        // line 32
        echo "
            ";
        // line 33
        $this->displayBlock('content', $context, $blocks);
        // line 35
        echo "        </div>
    </div>
</div>

";
        // line 39
        $this->loadTemplate("@SyliusUi/Modal/_confirmation.html.twig", "SyliusUiBundle:Layout:sidebar.html.twig", 39)->display($context);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('javascripts', $context, $blocks);
        // line 43
        echo "</body>
</html>
";
        
        $__internal_286b5469fa21b073588759eede3ff27facafaced4e522ea229d3f3148adb3b21->leave($__internal_286b5469fa21b073588759eede3ff27facafaced4e522ea229d3f3148adb3b21_prof);

        
        $__internal_c467261a9983d00e0ba41cc732306d0ccde5f686bf8541db72f683d5d3837812->leave($__internal_c467261a9983d00e0ba41cc732306d0ccde5f686bf8541db72f683d5d3837812_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_f8b18023ae78081e4582f3ca79dcd5faa545723df714e5942e43fc19d951012e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8b18023ae78081e4582f3ca79dcd5faa545723df714e5942e43fc19d951012e->enter($__internal_f8b18023ae78081e4582f3ca79dcd5faa545723df714e5942e43fc19d951012e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4db3894bca671d96f0787d7c1b9d6f319ed572cb115b4ca6c2f50ce32280fb00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4db3894bca671d96f0787d7c1b9d6f319ed572cb115b4ca6c2f50ce32280fb00->enter($__internal_4db3894bca671d96f0787d7c1b9d6f319ed572cb115b4ca6c2f50ce32280fb00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sylius";
        
        $__internal_4db3894bca671d96f0787d7c1b9d6f319ed572cb115b4ca6c2f50ce32280fb00->leave($__internal_4db3894bca671d96f0787d7c1b9d6f319ed572cb115b4ca6c2f50ce32280fb00_prof);

        
        $__internal_f8b18023ae78081e4582f3ca79dcd5faa545723df714e5942e43fc19d951012e->leave($__internal_f8b18023ae78081e4582f3ca79dcd5faa545723df714e5942e43fc19d951012e_prof);

    }

    // line 12
    public function block_metatags($context, array $blocks = array())
    {
        $__internal_75fc77e302d7fd839f6654f1923e0dde999682a2936faaf91e55ea4343ecd278 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75fc77e302d7fd839f6654f1923e0dde999682a2936faaf91e55ea4343ecd278->enter($__internal_75fc77e302d7fd839f6654f1923e0dde999682a2936faaf91e55ea4343ecd278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metatags"));

        $__internal_c2b451020a292570003ced00387431f81305fb3f7419663e10a1acc9767dfc3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2b451020a292570003ced00387431f81305fb3f7419663e10a1acc9767dfc3c->enter($__internal_c2b451020a292570003ced00387431f81305fb3f7419663e10a1acc9767dfc3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metatags"));

        // line 13
        echo "    ";
        
        $__internal_c2b451020a292570003ced00387431f81305fb3f7419663e10a1acc9767dfc3c->leave($__internal_c2b451020a292570003ced00387431f81305fb3f7419663e10a1acc9767dfc3c_prof);

        
        $__internal_75fc77e302d7fd839f6654f1923e0dde999682a2936faaf91e55ea4343ecd278->leave($__internal_75fc77e302d7fd839f6654f1923e0dde999682a2936faaf91e55ea4343ecd278_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7e3230051e011201da28cf553adf7dd48416eec1e8ec4305a7c4f92fd7e9e787 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e3230051e011201da28cf553adf7dd48416eec1e8ec4305a7c4f92fd7e9e787->enter($__internal_7e3230051e011201da28cf553adf7dd48416eec1e8ec4305a7c4f92fd7e9e787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7b9fa73d08283212a21007d4a92daa919f4dec0172f00fb7a2f0afc2cab653f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b9fa73d08283212a21007d4a92daa919f4dec0172f00fb7a2f0afc2cab653f1->enter($__internal_7b9fa73d08283212a21007d4a92daa919f4dec0172f00fb7a2f0afc2cab653f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "    ";
        
        $__internal_7b9fa73d08283212a21007d4a92daa919f4dec0172f00fb7a2f0afc2cab653f1->leave($__internal_7b9fa73d08283212a21007d4a92daa919f4dec0172f00fb7a2f0afc2cab653f1_prof);

        
        $__internal_7e3230051e011201da28cf553adf7dd48416eec1e8ec4305a7c4f92fd7e9e787->leave($__internal_7e3230051e011201da28cf553adf7dd48416eec1e8ec4305a7c4f92fd7e9e787_prof);

    }

    // line 21
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_73017157a589df66c40348e7622543bb7954d7b3ea556fcc09b00021304e9cf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73017157a589df66c40348e7622543bb7954d7b3ea556fcc09b00021304e9cf8->enter($__internal_73017157a589df66c40348e7622543bb7954d7b3ea556fcc09b00021304e9cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_de6342dbb3a0330a95f4f9de951792ccb60a86ea427785884198577ebfb54561 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de6342dbb3a0330a95f4f9de951792ccb60a86ea427785884198577ebfb54561->enter($__internal_de6342dbb3a0330a95f4f9de951792ccb60a86ea427785884198577ebfb54561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 22
        echo "    ";
        
        $__internal_de6342dbb3a0330a95f4f9de951792ccb60a86ea427785884198577ebfb54561->leave($__internal_de6342dbb3a0330a95f4f9de951792ccb60a86ea427785884198577ebfb54561_prof);

        
        $__internal_73017157a589df66c40348e7622543bb7954d7b3ea556fcc09b00021304e9cf8->leave($__internal_73017157a589df66c40348e7622543bb7954d7b3ea556fcc09b00021304e9cf8_prof);

    }

    // line 25
    public function block_topbar($context, array $blocks = array())
    {
        $__internal_0124bb631f0e60b90c2e1c79080619ad4ffeedd85e413c3230ed1193f0997b3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0124bb631f0e60b90c2e1c79080619ad4ffeedd85e413c3230ed1193f0997b3c->enter($__internal_0124bb631f0e60b90c2e1c79080619ad4ffeedd85e413c3230ed1193f0997b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbar"));

        $__internal_5740d78eae1cc0a8f61ce6a42476ecb6919541f4c39853ff1e86eeabfcbdb7b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5740d78eae1cc0a8f61ce6a42476ecb6919541f4c39853ff1e86eeabfcbdb7b5->enter($__internal_5740d78eae1cc0a8f61ce6a42476ecb6919541f4c39853ff1e86eeabfcbdb7b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbar"));

        // line 26
        echo "    ";
        
        $__internal_5740d78eae1cc0a8f61ce6a42476ecb6919541f4c39853ff1e86eeabfcbdb7b5->leave($__internal_5740d78eae1cc0a8f61ce6a42476ecb6919541f4c39853ff1e86eeabfcbdb7b5_prof);

        
        $__internal_0124bb631f0e60b90c2e1c79080619ad4ffeedd85e413c3230ed1193f0997b3c->leave($__internal_0124bb631f0e60b90c2e1c79080619ad4ffeedd85e413c3230ed1193f0997b3c_prof);

    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
        $__internal_18479a3ff9a4bf375e7a8761362dcb0beea76cf405703b2ffcb388aa571d6e1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18479a3ff9a4bf375e7a8761362dcb0beea76cf405703b2ffcb388aa571d6e1c->enter($__internal_18479a3ff9a4bf375e7a8761362dcb0beea76cf405703b2ffcb388aa571d6e1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_1629b5839ba2acfc822c5a9f217f09146494ea2f00c70519a7448e79b3580bf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1629b5839ba2acfc822c5a9f217f09146494ea2f00c70519a7448e79b3580bf8->enter($__internal_1629b5839ba2acfc822c5a9f217f09146494ea2f00c70519a7448e79b3580bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 34
        echo "            ";
        
        $__internal_1629b5839ba2acfc822c5a9f217f09146494ea2f00c70519a7448e79b3580bf8->leave($__internal_1629b5839ba2acfc822c5a9f217f09146494ea2f00c70519a7448e79b3580bf8_prof);

        
        $__internal_18479a3ff9a4bf375e7a8761362dcb0beea76cf405703b2ffcb388aa571d6e1c->leave($__internal_18479a3ff9a4bf375e7a8761362dcb0beea76cf405703b2ffcb388aa571d6e1c_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4557ca8c47b6c550a51b6aeef5df56c5e16dd4e84618ab43041aa9e1fbe73bb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4557ca8c47b6c550a51b6aeef5df56c5e16dd4e84618ab43041aa9e1fbe73bb2->enter($__internal_4557ca8c47b6c550a51b6aeef5df56c5e16dd4e84618ab43041aa9e1fbe73bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e5de72a6067bdf2e3f64f8ea3fa3d8799a57804b74795a33325c46816ee62243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5de72a6067bdf2e3f64f8ea3fa3d8799a57804b74795a33325c46816ee62243->enter($__internal_e5de72a6067bdf2e3f64f8ea3fa3d8799a57804b74795a33325c46816ee62243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e5de72a6067bdf2e3f64f8ea3fa3d8799a57804b74795a33325c46816ee62243->leave($__internal_e5de72a6067bdf2e3f64f8ea3fa3d8799a57804b74795a33325c46816ee62243_prof);

        
        $__internal_4557ca8c47b6c550a51b6aeef5df56c5e16dd4e84618ab43041aa9e1fbe73bb2->leave($__internal_4557ca8c47b6c550a51b6aeef5df56c5e16dd4e84618ab43041aa9e1fbe73bb2_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Layout:sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 41,  210 => 34,  201 => 33,  191 => 26,  182 => 25,  172 => 22,  163 => 21,  153 => 16,  144 => 15,  134 => 13,  125 => 12,  107 => 8,  95 => 43,  93 => 41,  90 => 40,  88 => 39,  82 => 35,  80 => 33,  77 => 32,  75 => 31,  69 => 27,  67 => 25,  63 => 23,  61 => 21,  55 => 17,  53 => 15,  50 => 14,  48 => 12,  41 => 8,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>

<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <title>{% block title %}Sylius{% endblock %}</title>

    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">

    {% block metatags %}
    {% endblock %}

    {% block stylesheets %}
    {% endblock %}
</head>

<body>
<div class=\"ui sidebar vertical inverted menu\" id=\"sidebar\">
    {% block sidebar %}
    {% endblock %}
</div>
<div class=\"ui fixed inverted menu\">
    {% block topbar %}
    {% endblock %}
</div>
<div class=\"pusher\">
    <div class=\"full height\" id=\"wrapper\">
        <div id=\"content\">
            {% include '@SyliusUi/_flashes.html.twig' %}

            {% block content %}
            {% endblock %}
        </div>
    </div>
</div>

{% include '@SyliusUi/Modal/_confirmation.html.twig' %}

{% block javascripts %}
{% endblock %}
</body>
</html>
", "SyliusUiBundle:Layout:sidebar.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Layout/sidebar.html.twig");
    }
}

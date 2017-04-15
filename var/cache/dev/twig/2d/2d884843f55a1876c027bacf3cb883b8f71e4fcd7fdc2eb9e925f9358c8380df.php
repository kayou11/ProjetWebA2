<?php

/* @SyliusShop/layout.html.twig */
class __TwigTemplate_7f34cd1bbcab723b5a7b4a15986ee2c57cf9c96729fb3e2bef1259e35e1bb663 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'metatags' => array($this, 'block_metatags'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'top' => array($this, 'block_top'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d835060e2ca2b1bbf0881c9e88b237cc0114ae747e988373adbb59c4655fb76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d835060e2ca2b1bbf0881c9e88b237cc0114ae747e988373adbb59c4655fb76->enter($__internal_5d835060e2ca2b1bbf0881c9e88b237cc0114ae747e988373adbb59c4655fb76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/layout.html.twig"));

        $__internal_ba8fac1b8079bc1adf7720ef727aec5694ffdb1e3f5400bdce9984dfaeec085f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba8fac1b8079bc1adf7720ef727aec5694ffdb1e3f5400bdce9984dfaeec085f->enter($__internal_ba8fac1b8079bc1adf7720ef727aec5694ffdb1e3f5400bdce9984dfaeec085f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html lang=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array()), 0, 2), "html", null, true);
        echo "\">
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
        // line 20
        echo "</head>

<body class=\"pushable\">
<div class=\"pusher\">
    ";
        // line 24
        $this->displayBlock('top', $context, $blocks);
        // line 38
        echo "
    <div class=\"ui container\">
        ";
        // line 40
        $this->displayBlock('header', $context, $blocks);
        // line 49
        echo "
        ";
        // line 50
        $this->loadTemplate("@SyliusUi/_flashes.html.twig", "@SyliusShop/layout.html.twig", 50)->display($context);
        // line 51
        echo "
        ";
        // line 52
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.layout.before_content"));
        echo "

        ";
        // line 54
        $this->displayBlock('content', $context, $blocks);
        // line 56
        echo "
        ";
        // line 57
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.layout.after_content"));
        echo "
    </div>

    ";
        // line 60
        $this->displayBlock('footer', $context, $blocks);
        // line 63
        echo "</div>

";
        // line 65
        $this->displayBlock('javascripts', $context, $blocks);
        // line 70
        echo "
";
        // line 71
        $this->loadTemplate("@SyliusUi/Modal/_confirmation.html.twig", "@SyliusShop/layout.html.twig", 71)->display($context);
        // line 72
        echo "</body>
</html>
";
        
        $__internal_5d835060e2ca2b1bbf0881c9e88b237cc0114ae747e988373adbb59c4655fb76->leave($__internal_5d835060e2ca2b1bbf0881c9e88b237cc0114ae747e988373adbb59c4655fb76_prof);

        
        $__internal_ba8fac1b8079bc1adf7720ef727aec5694ffdb1e3f5400bdce9984dfaeec085f->leave($__internal_ba8fac1b8079bc1adf7720ef727aec5694ffdb1e3f5400bdce9984dfaeec085f_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_0a54806e75606484c0d43553560b8cf63ea41eaa85262d7cfb687f10159f7823 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a54806e75606484c0d43553560b8cf63ea41eaa85262d7cfb687f10159f7823->enter($__internal_0a54806e75606484c0d43553560b8cf63ea41eaa85262d7cfb687f10159f7823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_97519365d188ee78a6775acc640083211fbbca77ac7c7765a2674c82967bc6ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97519365d188ee78a6775acc640083211fbbca77ac7c7765a2674c82967bc6ce->enter($__internal_97519365d188ee78a6775acc640083211fbbca77ac7c7765a2674c82967bc6ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sylius";
        
        $__internal_97519365d188ee78a6775acc640083211fbbca77ac7c7765a2674c82967bc6ce->leave($__internal_97519365d188ee78a6775acc640083211fbbca77ac7c7765a2674c82967bc6ce_prof);

        
        $__internal_0a54806e75606484c0d43553560b8cf63ea41eaa85262d7cfb687f10159f7823->leave($__internal_0a54806e75606484c0d43553560b8cf63ea41eaa85262d7cfb687f10159f7823_prof);

    }

    // line 12
    public function block_metatags($context, array $blocks = array())
    {
        $__internal_360633bf06d6eeb954878d2724cb809d6908786079e7cc9b74827a4f571d60f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_360633bf06d6eeb954878d2724cb809d6908786079e7cc9b74827a4f571d60f9->enter($__internal_360633bf06d6eeb954878d2724cb809d6908786079e7cc9b74827a4f571d60f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metatags"));

        $__internal_20e68b02ee1219c647c12288d52ce698501b4bc0d49d31c9c07856b55dfbc68a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20e68b02ee1219c647c12288d52ce698501b4bc0d49d31c9c07856b55dfbc68a->enter($__internal_20e68b02ee1219c647c12288d52ce698501b4bc0d49d31c9c07856b55dfbc68a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metatags"));

        // line 13
        echo "    ";
        
        $__internal_20e68b02ee1219c647c12288d52ce698501b4bc0d49d31c9c07856b55dfbc68a->leave($__internal_20e68b02ee1219c647c12288d52ce698501b4bc0d49d31c9c07856b55dfbc68a_prof);

        
        $__internal_360633bf06d6eeb954878d2724cb809d6908786079e7cc9b74827a4f571d60f9->leave($__internal_360633bf06d6eeb954878d2724cb809d6908786079e7cc9b74827a4f571d60f9_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d68b15a5aff62082030627b7998720aa0d991b835545d2a0c3f1562dbdf769b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d68b15a5aff62082030627b7998720aa0d991b835545d2a0c3f1562dbdf769b2->enter($__internal_d68b15a5aff62082030627b7998720aa0d991b835545d2a0c3f1562dbdf769b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_da1dcaa44d0f7758f5ecff0389ab7a5a23ce580ee52425c4851a88f260eb419d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da1dcaa44d0f7758f5ecff0389ab7a5a23ce580ee52425c4851a88f260eb419d->enter($__internal_da1dcaa44d0f7758f5ecff0389ab7a5a23ce580ee52425c4851a88f260eb419d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "        ";
        $this->loadTemplate("@SyliusUi/_stylesheets.html.twig", "@SyliusShop/layout.html.twig", 16)->display(array_merge($context, array("path" => "assets/shop/css/style.css")));
        // line 17
        echo "
        ";
        // line 18
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.layout.stylesheets"));
        echo "
    ";
        
        $__internal_da1dcaa44d0f7758f5ecff0389ab7a5a23ce580ee52425c4851a88f260eb419d->leave($__internal_da1dcaa44d0f7758f5ecff0389ab7a5a23ce580ee52425c4851a88f260eb419d_prof);

        
        $__internal_d68b15a5aff62082030627b7998720aa0d991b835545d2a0c3f1562dbdf769b2->leave($__internal_d68b15a5aff62082030627b7998720aa0d991b835545d2a0c3f1562dbdf769b2_prof);

    }

    // line 24
    public function block_top($context, array $blocks = array())
    {
        $__internal_ff7ed54f3b409f5bbfe92aaff0c2b4ada6305b8cefa40fe152ecfc59460ce105 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff7ed54f3b409f5bbfe92aaff0c2b4ada6305b8cefa40fe152ecfc59460ce105->enter($__internal_ff7ed54f3b409f5bbfe92aaff0c2b4ada6305b8cefa40fe152ecfc59460ce105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top"));

        $__internal_bd91c7c9c25c5b54bd42f2861c79402e1edbf711d03e533804edc21e48b446cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd91c7c9c25c5b54bd42f2861c79402e1edbf711d03e533804edc21e48b446cd->enter($__internal_bd91c7c9c25c5b54bd42f2861c79402e1edbf711d03e533804edc21e48b446cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top"));

        // line 25
        echo "        <div id=\"menu\" class=\"ui large sticky inverted stackable menu\">
            ";
        // line 26
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.layout.before_currency_switcher"));
        echo "

            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("sylius.controller.shop.currency_switch:renderAction"));
        echo "
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("sylius.controller.shop.locale_switch:renderAction"));
        echo "

            ";
        // line 31
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.layout.before_security_widget"));
        echo "

            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("sylius.controller.shop.security_widget:renderAction"));
        echo "

            ";
        // line 35
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.layout.after_security_widget"));
        echo "
        </div>
    ";
        
        $__internal_bd91c7c9c25c5b54bd42f2861c79402e1edbf711d03e533804edc21e48b446cd->leave($__internal_bd91c7c9c25c5b54bd42f2861c79402e1edbf711d03e533804edc21e48b446cd_prof);

        
        $__internal_ff7ed54f3b409f5bbfe92aaff0c2b4ada6305b8cefa40fe152ecfc59460ce105->leave($__internal_ff7ed54f3b409f5bbfe92aaff0c2b4ada6305b8cefa40fe152ecfc59460ce105_prof);

    }

    // line 40
    public function block_header($context, array $blocks = array())
    {
        $__internal_56b878e42b124856e66efb85ee4cfdc17d16f72cbbef13434dd0e968e29d982a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56b878e42b124856e66efb85ee4cfdc17d16f72cbbef13434dd0e968e29d982a->enter($__internal_56b878e42b124856e66efb85ee4cfdc17d16f72cbbef13434dd0e968e29d982a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_eb6e7cd90b5591c33ef9698e6d3be67dc5131a172a648f9df22c739ec7bd9caa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb6e7cd90b5591c33ef9698e6d3be67dc5131a172a648f9df22c739ec7bd9caa->enter($__internal_eb6e7cd90b5591c33ef9698e6d3be67dc5131a172a648f9df22c739ec7bd9caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 41
        echo "            <header>
                ";
        // line 42
        $this->loadTemplate("@SyliusShop/_header.html.twig", "@SyliusShop/layout.html.twig", 42)->display($context);
        // line 43
        echo "
                ";
        // line 44
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.layout.after_header"));
        echo "

                ";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sylius_shop_partial_taxon_index_by_code", array("code" => "category", "template" => "@SyliusShop/Taxon/_horizontalMenu.html.twig")));
        echo "
            </header>
        ";
        
        $__internal_eb6e7cd90b5591c33ef9698e6d3be67dc5131a172a648f9df22c739ec7bd9caa->leave($__internal_eb6e7cd90b5591c33ef9698e6d3be67dc5131a172a648f9df22c739ec7bd9caa_prof);

        
        $__internal_56b878e42b124856e66efb85ee4cfdc17d16f72cbbef13434dd0e968e29d982a->leave($__internal_56b878e42b124856e66efb85ee4cfdc17d16f72cbbef13434dd0e968e29d982a_prof);

    }

    // line 54
    public function block_content($context, array $blocks = array())
    {
        $__internal_52f80b6c73eb98573436dc840ccd62cf24350c2566972dce001bce4b818b986f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52f80b6c73eb98573436dc840ccd62cf24350c2566972dce001bce4b818b986f->enter($__internal_52f80b6c73eb98573436dc840ccd62cf24350c2566972dce001bce4b818b986f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c07ba1dc3c7afaaa6b8fe72e48032341f6cfd6978635ee840e32671714726779 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c07ba1dc3c7afaaa6b8fe72e48032341f6cfd6978635ee840e32671714726779->enter($__internal_c07ba1dc3c7afaaa6b8fe72e48032341f6cfd6978635ee840e32671714726779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 55
        echo "        ";
        
        $__internal_c07ba1dc3c7afaaa6b8fe72e48032341f6cfd6978635ee840e32671714726779->leave($__internal_c07ba1dc3c7afaaa6b8fe72e48032341f6cfd6978635ee840e32671714726779_prof);

        
        $__internal_52f80b6c73eb98573436dc840ccd62cf24350c2566972dce001bce4b818b986f->leave($__internal_52f80b6c73eb98573436dc840ccd62cf24350c2566972dce001bce4b818b986f_prof);

    }

    // line 60
    public function block_footer($context, array $blocks = array())
    {
        $__internal_af4217ccfbeb8c7e2a772a93d14a53c80cb4807e84e77f51a1380c20db2b79f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af4217ccfbeb8c7e2a772a93d14a53c80cb4807e84e77f51a1380c20db2b79f0->enter($__internal_af4217ccfbeb8c7e2a772a93d14a53c80cb4807e84e77f51a1380c20db2b79f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_445d36733cde69d06776850bd280aa9f1753192fe8643218ad8d87d010424a8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_445d36733cde69d06776850bd280aa9f1753192fe8643218ad8d87d010424a8b->enter($__internal_445d36733cde69d06776850bd280aa9f1753192fe8643218ad8d87d010424a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 61
        echo "        ";
        $this->loadTemplate("@SyliusShop/_footer.html.twig", "@SyliusShop/layout.html.twig", 61)->display($context);
        // line 62
        echo "    ";
        
        $__internal_445d36733cde69d06776850bd280aa9f1753192fe8643218ad8d87d010424a8b->leave($__internal_445d36733cde69d06776850bd280aa9f1753192fe8643218ad8d87d010424a8b_prof);

        
        $__internal_af4217ccfbeb8c7e2a772a93d14a53c80cb4807e84e77f51a1380c20db2b79f0->leave($__internal_af4217ccfbeb8c7e2a772a93d14a53c80cb4807e84e77f51a1380c20db2b79f0_prof);

    }

    // line 65
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0bdcec5e2678bbc300981e32b53cf4686ea5f9bc9ad727034edc7f48dacabe65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bdcec5e2678bbc300981e32b53cf4686ea5f9bc9ad727034edc7f48dacabe65->enter($__internal_0bdcec5e2678bbc300981e32b53cf4686ea5f9bc9ad727034edc7f48dacabe65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7962582bbb0ecde6f169ed6c9c97b453fe676afdfe3c5a620eb3493276df4fd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7962582bbb0ecde6f169ed6c9c97b453fe676afdfe3c5a620eb3493276df4fd9->enter($__internal_7962582bbb0ecde6f169ed6c9c97b453fe676afdfe3c5a620eb3493276df4fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 66
        echo "    ";
        $this->loadTemplate("@SyliusUi/_javascripts.html.twig", "@SyliusShop/layout.html.twig", 66)->display(array_merge($context, array("path" => "assets/shop/js/app.js")));
        // line 67
        echo "
    ";
        // line 68
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.layout.javascripts"));
        echo "
";
        
        $__internal_7962582bbb0ecde6f169ed6c9c97b453fe676afdfe3c5a620eb3493276df4fd9->leave($__internal_7962582bbb0ecde6f169ed6c9c97b453fe676afdfe3c5a620eb3493276df4fd9_prof);

        
        $__internal_0bdcec5e2678bbc300981e32b53cf4686ea5f9bc9ad727034edc7f48dacabe65->leave($__internal_0bdcec5e2678bbc300981e32b53cf4686ea5f9bc9ad727034edc7f48dacabe65_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 68,  323 => 67,  320 => 66,  311 => 65,  301 => 62,  298 => 61,  289 => 60,  279 => 55,  270 => 54,  257 => 46,  252 => 44,  249 => 43,  247 => 42,  244 => 41,  235 => 40,  222 => 35,  217 => 33,  212 => 31,  207 => 29,  203 => 28,  198 => 26,  195 => 25,  186 => 24,  174 => 18,  171 => 17,  168 => 16,  159 => 15,  149 => 13,  140 => 12,  122 => 8,  110 => 72,  108 => 71,  105 => 70,  103 => 65,  99 => 63,  97 => 60,  91 => 57,  88 => 56,  86 => 54,  81 => 52,  78 => 51,  76 => 50,  73 => 49,  71 => 40,  67 => 38,  65 => 24,  59 => 20,  57 => 15,  54 => 14,  52 => 12,  45 => 8,  37 => 3,  33 => 1,);
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

<html lang=\"{{ app.request.locale|slice(0, 2) }}\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <title>{% block title %}Sylius{% endblock %}</title>

    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">

    {% block metatags %}
    {% endblock %}

    {% block stylesheets %}
        {% include '@SyliusUi/_stylesheets.html.twig' with {'path': 'assets/shop/css/style.css'} %}

        {{ sonata_block_render_event('sylius.shop.layout.stylesheets') }}
    {% endblock %}
</head>

<body class=\"pushable\">
<div class=\"pusher\">
    {% block top %}
        <div id=\"menu\" class=\"ui large sticky inverted stackable menu\">
            {{ sonata_block_render_event('sylius.shop.layout.before_currency_switcher') }}

            {{ render(controller('sylius.controller.shop.currency_switch:renderAction')) }}
            {{ render(controller('sylius.controller.shop.locale_switch:renderAction')) }}

            {{ sonata_block_render_event('sylius.shop.layout.before_security_widget') }}

            {{ render(controller('sylius.controller.shop.security_widget:renderAction')) }}

            {{ sonata_block_render_event('sylius.shop.layout.after_security_widget') }}
        </div>
    {% endblock %}

    <div class=\"ui container\">
        {% block header %}
            <header>
                {% include '@SyliusShop/_header.html.twig' %}

                {{ sonata_block_render_event('sylius.shop.layout.after_header') }}

                {{ render(url('sylius_shop_partial_taxon_index_by_code', {'code': 'category', 'template': '@SyliusShop/Taxon/_horizontalMenu.html.twig'})) }}
            </header>
        {% endblock %}

        {% include '@SyliusUi/_flashes.html.twig' %}

        {{ sonata_block_render_event('sylius.shop.layout.before_content') }}

        {% block content %}
        {% endblock %}

        {{ sonata_block_render_event('sylius.shop.layout.after_content') }}
    </div>

    {% block footer %}
        {% include '@SyliusShop/_footer.html.twig' %}
    {% endblock %}
</div>

{% block javascripts %}
    {% include '@SyliusUi/_javascripts.html.twig' with {'path': 'assets/shop/js/app.js'} %}

    {{ sonata_block_render_event('sylius.shop.layout.javascripts') }}
{% endblock %}

{% include '@SyliusUi/Modal/_confirmation.html.twig' %}
</body>
</html>
", "@SyliusShop/layout.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/layout.html.twig");
    }
}

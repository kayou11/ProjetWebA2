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
        $__internal_c6f60ed11ef5f03d690a325b97cf22c26ccaf1ac05cc77cf5a54d72a0fcf9b49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6f60ed11ef5f03d690a325b97cf22c26ccaf1ac05cc77cf5a54d72a0fcf9b49->enter($__internal_c6f60ed11ef5f03d690a325b97cf22c26ccaf1ac05cc77cf5a54d72a0fcf9b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/layout.html.twig"));

        $__internal_e7dd68eb4929cd052b342e9644722ca636db5cdd0aac7d75f54d8eee7b8c8249 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7dd68eb4929cd052b342e9644722ca636db5cdd0aac7d75f54d8eee7b8c8249->enter($__internal_e7dd68eb4929cd052b342e9644722ca636db5cdd0aac7d75f54d8eee7b8c8249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/layout.html.twig"));

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
        
        $__internal_c6f60ed11ef5f03d690a325b97cf22c26ccaf1ac05cc77cf5a54d72a0fcf9b49->leave($__internal_c6f60ed11ef5f03d690a325b97cf22c26ccaf1ac05cc77cf5a54d72a0fcf9b49_prof);

        
        $__internal_e7dd68eb4929cd052b342e9644722ca636db5cdd0aac7d75f54d8eee7b8c8249->leave($__internal_e7dd68eb4929cd052b342e9644722ca636db5cdd0aac7d75f54d8eee7b8c8249_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_64ddb5b541b28e38ed271b5d428326bceec1639f3414b31016916211b1898596 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64ddb5b541b28e38ed271b5d428326bceec1639f3414b31016916211b1898596->enter($__internal_64ddb5b541b28e38ed271b5d428326bceec1639f3414b31016916211b1898596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e9cd473ba69734dd6a56672383f30fd20a5d63c8317bf260bfcad69cccef1d39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9cd473ba69734dd6a56672383f30fd20a5d63c8317bf260bfcad69cccef1d39->enter($__internal_e9cd473ba69734dd6a56672383f30fd20a5d63c8317bf260bfcad69cccef1d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sylius";
        
        $__internal_e9cd473ba69734dd6a56672383f30fd20a5d63c8317bf260bfcad69cccef1d39->leave($__internal_e9cd473ba69734dd6a56672383f30fd20a5d63c8317bf260bfcad69cccef1d39_prof);

        
        $__internal_64ddb5b541b28e38ed271b5d428326bceec1639f3414b31016916211b1898596->leave($__internal_64ddb5b541b28e38ed271b5d428326bceec1639f3414b31016916211b1898596_prof);

    }

    // line 12
    public function block_metatags($context, array $blocks = array())
    {
        $__internal_b334ea098a0a37778e14e6345cac1fb18aa75d5693daed8ac3302e179c060330 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b334ea098a0a37778e14e6345cac1fb18aa75d5693daed8ac3302e179c060330->enter($__internal_b334ea098a0a37778e14e6345cac1fb18aa75d5693daed8ac3302e179c060330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metatags"));

        $__internal_3ae216f82932017f2d3faacb66bf111435c2fdd447c9dba9da23e289ecd309a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ae216f82932017f2d3faacb66bf111435c2fdd447c9dba9da23e289ecd309a3->enter($__internal_3ae216f82932017f2d3faacb66bf111435c2fdd447c9dba9da23e289ecd309a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metatags"));

        // line 13
        echo "    ";
        
        $__internal_3ae216f82932017f2d3faacb66bf111435c2fdd447c9dba9da23e289ecd309a3->leave($__internal_3ae216f82932017f2d3faacb66bf111435c2fdd447c9dba9da23e289ecd309a3_prof);

        
        $__internal_b334ea098a0a37778e14e6345cac1fb18aa75d5693daed8ac3302e179c060330->leave($__internal_b334ea098a0a37778e14e6345cac1fb18aa75d5693daed8ac3302e179c060330_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_11f53670ed58220db9c41b5a905047cef91c602622b0e4e8080d084ef0df2892 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11f53670ed58220db9c41b5a905047cef91c602622b0e4e8080d084ef0df2892->enter($__internal_11f53670ed58220db9c41b5a905047cef91c602622b0e4e8080d084ef0df2892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ccab80811d04f27e8150bee70ffd6bfbc1bfb7195ead321c757ce66a79f6ddbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccab80811d04f27e8150bee70ffd6bfbc1bfb7195ead321c757ce66a79f6ddbf->enter($__internal_ccab80811d04f27e8150bee70ffd6bfbc1bfb7195ead321c757ce66a79f6ddbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_ccab80811d04f27e8150bee70ffd6bfbc1bfb7195ead321c757ce66a79f6ddbf->leave($__internal_ccab80811d04f27e8150bee70ffd6bfbc1bfb7195ead321c757ce66a79f6ddbf_prof);

        
        $__internal_11f53670ed58220db9c41b5a905047cef91c602622b0e4e8080d084ef0df2892->leave($__internal_11f53670ed58220db9c41b5a905047cef91c602622b0e4e8080d084ef0df2892_prof);

    }

    // line 24
    public function block_top($context, array $blocks = array())
    {
        $__internal_6c3bd9a5239d99b54efa5ce53a294061e4b360d368c0f7ad0f7d4601fb3455ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c3bd9a5239d99b54efa5ce53a294061e4b360d368c0f7ad0f7d4601fb3455ad->enter($__internal_6c3bd9a5239d99b54efa5ce53a294061e4b360d368c0f7ad0f7d4601fb3455ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top"));

        $__internal_393877d290ad0858f41722bbb5827da2f6d7be6546e04cdeedba73a1935a6f5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_393877d290ad0858f41722bbb5827da2f6d7be6546e04cdeedba73a1935a6f5e->enter($__internal_393877d290ad0858f41722bbb5827da2f6d7be6546e04cdeedba73a1935a6f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top"));

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
        
        $__internal_393877d290ad0858f41722bbb5827da2f6d7be6546e04cdeedba73a1935a6f5e->leave($__internal_393877d290ad0858f41722bbb5827da2f6d7be6546e04cdeedba73a1935a6f5e_prof);

        
        $__internal_6c3bd9a5239d99b54efa5ce53a294061e4b360d368c0f7ad0f7d4601fb3455ad->leave($__internal_6c3bd9a5239d99b54efa5ce53a294061e4b360d368c0f7ad0f7d4601fb3455ad_prof);

    }

    // line 40
    public function block_header($context, array $blocks = array())
    {
        $__internal_86818ea4a1f6b335c7b3742a209fdec2a96a77c1d10abfc843fcd2aad6b80b0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86818ea4a1f6b335c7b3742a209fdec2a96a77c1d10abfc843fcd2aad6b80b0f->enter($__internal_86818ea4a1f6b335c7b3742a209fdec2a96a77c1d10abfc843fcd2aad6b80b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_86503ca42237b7d27a3f49846d92482119a5eb11d5fddf43df7e82cff5d4a173 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86503ca42237b7d27a3f49846d92482119a5eb11d5fddf43df7e82cff5d4a173->enter($__internal_86503ca42237b7d27a3f49846d92482119a5eb11d5fddf43df7e82cff5d4a173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_86503ca42237b7d27a3f49846d92482119a5eb11d5fddf43df7e82cff5d4a173->leave($__internal_86503ca42237b7d27a3f49846d92482119a5eb11d5fddf43df7e82cff5d4a173_prof);

        
        $__internal_86818ea4a1f6b335c7b3742a209fdec2a96a77c1d10abfc843fcd2aad6b80b0f->leave($__internal_86818ea4a1f6b335c7b3742a209fdec2a96a77c1d10abfc843fcd2aad6b80b0f_prof);

    }

    // line 54
    public function block_content($context, array $blocks = array())
    {
        $__internal_99e5a3a760107b740cb8a51b51c4e201fa04f47e957ce303ee47c001afbd0e5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99e5a3a760107b740cb8a51b51c4e201fa04f47e957ce303ee47c001afbd0e5f->enter($__internal_99e5a3a760107b740cb8a51b51c4e201fa04f47e957ce303ee47c001afbd0e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_6b84e2e071c6bb4278c55b5988c8c239edc01aec7ea9c85cccb1982d29fddc83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b84e2e071c6bb4278c55b5988c8c239edc01aec7ea9c85cccb1982d29fddc83->enter($__internal_6b84e2e071c6bb4278c55b5988c8c239edc01aec7ea9c85cccb1982d29fddc83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 55
        echo "        ";
        
        $__internal_6b84e2e071c6bb4278c55b5988c8c239edc01aec7ea9c85cccb1982d29fddc83->leave($__internal_6b84e2e071c6bb4278c55b5988c8c239edc01aec7ea9c85cccb1982d29fddc83_prof);

        
        $__internal_99e5a3a760107b740cb8a51b51c4e201fa04f47e957ce303ee47c001afbd0e5f->leave($__internal_99e5a3a760107b740cb8a51b51c4e201fa04f47e957ce303ee47c001afbd0e5f_prof);

    }

    // line 60
    public function block_footer($context, array $blocks = array())
    {
        $__internal_dfe8b62764b3d48686d313ef33f5eb5a36e802a6e603815ff4f91bfcb7f657d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfe8b62764b3d48686d313ef33f5eb5a36e802a6e603815ff4f91bfcb7f657d4->enter($__internal_dfe8b62764b3d48686d313ef33f5eb5a36e802a6e603815ff4f91bfcb7f657d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_dbcad848dad884a01613429601eb83fc7663ab494ef606f56bee9064703534e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbcad848dad884a01613429601eb83fc7663ab494ef606f56bee9064703534e7->enter($__internal_dbcad848dad884a01613429601eb83fc7663ab494ef606f56bee9064703534e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 61
        echo "        ";
        $this->loadTemplate("@SyliusShop/_footer.html.twig", "@SyliusShop/layout.html.twig", 61)->display($context);
        // line 62
        echo "    ";
        
        $__internal_dbcad848dad884a01613429601eb83fc7663ab494ef606f56bee9064703534e7->leave($__internal_dbcad848dad884a01613429601eb83fc7663ab494ef606f56bee9064703534e7_prof);

        
        $__internal_dfe8b62764b3d48686d313ef33f5eb5a36e802a6e603815ff4f91bfcb7f657d4->leave($__internal_dfe8b62764b3d48686d313ef33f5eb5a36e802a6e603815ff4f91bfcb7f657d4_prof);

    }

    // line 65
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3402caaa0e1a796ce3288aa34ccbe4f3596209a124a79d90be302e7e00e3d7f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3402caaa0e1a796ce3288aa34ccbe4f3596209a124a79d90be302e7e00e3d7f5->enter($__internal_3402caaa0e1a796ce3288aa34ccbe4f3596209a124a79d90be302e7e00e3d7f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_43ee9577103161ec0088b3d02b5f2165d9fe18fbc9f9757568fb987a694a8399 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43ee9577103161ec0088b3d02b5f2165d9fe18fbc9f9757568fb987a694a8399->enter($__internal_43ee9577103161ec0088b3d02b5f2165d9fe18fbc9f9757568fb987a694a8399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_43ee9577103161ec0088b3d02b5f2165d9fe18fbc9f9757568fb987a694a8399->leave($__internal_43ee9577103161ec0088b3d02b5f2165d9fe18fbc9f9757568fb987a694a8399_prof);

        
        $__internal_3402caaa0e1a796ce3288aa34ccbe4f3596209a124a79d90be302e7e00e3d7f5->leave($__internal_3402caaa0e1a796ce3288aa34ccbe4f3596209a124a79d90be302e7e00e3d7f5_prof);

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

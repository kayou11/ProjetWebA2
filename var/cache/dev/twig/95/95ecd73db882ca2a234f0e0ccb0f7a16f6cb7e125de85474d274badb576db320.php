<?php

/* @SyliusShop/layout.html.twig */
class __TwigTemplate_ccbd91d48104edb9972e1ccd4d9b7e6f81dca4a2ec508b9ef269709a15e9ada7 extends Twig_Template
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
        $__internal_365e7820097692311466fb075fe1828b6fb1062e01303380b6b8619c23cb98c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_365e7820097692311466fb075fe1828b6fb1062e01303380b6b8619c23cb98c5->enter($__internal_365e7820097692311466fb075fe1828b6fb1062e01303380b6b8619c23cb98c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/layout.html.twig"));

        $__internal_750cdcf695a40b686febbaa9211228715eb8e81c4b67de9ad5975951322c4004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_750cdcf695a40b686febbaa9211228715eb8e81c4b67de9ad5975951322c4004->enter($__internal_750cdcf695a40b686febbaa9211228715eb8e81c4b67de9ad5975951322c4004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/layout.html.twig"));

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
        
        $__internal_365e7820097692311466fb075fe1828b6fb1062e01303380b6b8619c23cb98c5->leave($__internal_365e7820097692311466fb075fe1828b6fb1062e01303380b6b8619c23cb98c5_prof);

        
        $__internal_750cdcf695a40b686febbaa9211228715eb8e81c4b67de9ad5975951322c4004->leave($__internal_750cdcf695a40b686febbaa9211228715eb8e81c4b67de9ad5975951322c4004_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_02df3dbb4a7cbac42f8ac6eb908b85d035a0ab31c46f32c31a329ae768e4cad0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02df3dbb4a7cbac42f8ac6eb908b85d035a0ab31c46f32c31a329ae768e4cad0->enter($__internal_02df3dbb4a7cbac42f8ac6eb908b85d035a0ab31c46f32c31a329ae768e4cad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0a3f2251d93102b89138d0e43223e7fbde45e5dc5182b5d0bd72d72c5b3958ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a3f2251d93102b89138d0e43223e7fbde45e5dc5182b5d0bd72d72c5b3958ef->enter($__internal_0a3f2251d93102b89138d0e43223e7fbde45e5dc5182b5d0bd72d72c5b3958ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sylius";
        
        $__internal_0a3f2251d93102b89138d0e43223e7fbde45e5dc5182b5d0bd72d72c5b3958ef->leave($__internal_0a3f2251d93102b89138d0e43223e7fbde45e5dc5182b5d0bd72d72c5b3958ef_prof);

        
        $__internal_02df3dbb4a7cbac42f8ac6eb908b85d035a0ab31c46f32c31a329ae768e4cad0->leave($__internal_02df3dbb4a7cbac42f8ac6eb908b85d035a0ab31c46f32c31a329ae768e4cad0_prof);

    }

    // line 12
    public function block_metatags($context, array $blocks = array())
    {
        $__internal_d83d9b871aecc27a33c690f9e9c4d690628c9e9d32b38df0fdc44782dbe2a122 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d83d9b871aecc27a33c690f9e9c4d690628c9e9d32b38df0fdc44782dbe2a122->enter($__internal_d83d9b871aecc27a33c690f9e9c4d690628c9e9d32b38df0fdc44782dbe2a122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metatags"));

        $__internal_4dc6790457fea19155bb0fc6fbc88525b5ddb75fc67fec605f77471976da619c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dc6790457fea19155bb0fc6fbc88525b5ddb75fc67fec605f77471976da619c->enter($__internal_4dc6790457fea19155bb0fc6fbc88525b5ddb75fc67fec605f77471976da619c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metatags"));

        // line 13
        echo "    ";
        
        $__internal_4dc6790457fea19155bb0fc6fbc88525b5ddb75fc67fec605f77471976da619c->leave($__internal_4dc6790457fea19155bb0fc6fbc88525b5ddb75fc67fec605f77471976da619c_prof);

        
        $__internal_d83d9b871aecc27a33c690f9e9c4d690628c9e9d32b38df0fdc44782dbe2a122->leave($__internal_d83d9b871aecc27a33c690f9e9c4d690628c9e9d32b38df0fdc44782dbe2a122_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_98e511b738650ab591a3ee80e84f85ad573073dd9c38d6a975a6767ad0cb4652 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98e511b738650ab591a3ee80e84f85ad573073dd9c38d6a975a6767ad0cb4652->enter($__internal_98e511b738650ab591a3ee80e84f85ad573073dd9c38d6a975a6767ad0cb4652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_941e85382c7b3dcf1c06b425497308f8f96b241ad80cbc5afeab3fcfa3b46bb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_941e85382c7b3dcf1c06b425497308f8f96b241ad80cbc5afeab3fcfa3b46bb4->enter($__internal_941e85382c7b3dcf1c06b425497308f8f96b241ad80cbc5afeab3fcfa3b46bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_941e85382c7b3dcf1c06b425497308f8f96b241ad80cbc5afeab3fcfa3b46bb4->leave($__internal_941e85382c7b3dcf1c06b425497308f8f96b241ad80cbc5afeab3fcfa3b46bb4_prof);

        
        $__internal_98e511b738650ab591a3ee80e84f85ad573073dd9c38d6a975a6767ad0cb4652->leave($__internal_98e511b738650ab591a3ee80e84f85ad573073dd9c38d6a975a6767ad0cb4652_prof);

    }

    // line 24
    public function block_top($context, array $blocks = array())
    {
        $__internal_8338fa7a8a76d1087088e42ed25d3bf36543fcc3578385fc028f1ebb44db4f7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8338fa7a8a76d1087088e42ed25d3bf36543fcc3578385fc028f1ebb44db4f7b->enter($__internal_8338fa7a8a76d1087088e42ed25d3bf36543fcc3578385fc028f1ebb44db4f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top"));

        $__internal_9a97a63d52e78f9a138cd772f12adca792f5657f711d998e7e9a5d04ca176c25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a97a63d52e78f9a138cd772f12adca792f5657f711d998e7e9a5d04ca176c25->enter($__internal_9a97a63d52e78f9a138cd772f12adca792f5657f711d998e7e9a5d04ca176c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top"));

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
        
        $__internal_9a97a63d52e78f9a138cd772f12adca792f5657f711d998e7e9a5d04ca176c25->leave($__internal_9a97a63d52e78f9a138cd772f12adca792f5657f711d998e7e9a5d04ca176c25_prof);

        
        $__internal_8338fa7a8a76d1087088e42ed25d3bf36543fcc3578385fc028f1ebb44db4f7b->leave($__internal_8338fa7a8a76d1087088e42ed25d3bf36543fcc3578385fc028f1ebb44db4f7b_prof);

    }

    // line 40
    public function block_header($context, array $blocks = array())
    {
        $__internal_fbf44e8892f5d55dbae4772df02625e76842f9db7f08778cd3735e8380b6c268 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbf44e8892f5d55dbae4772df02625e76842f9db7f08778cd3735e8380b6c268->enter($__internal_fbf44e8892f5d55dbae4772df02625e76842f9db7f08778cd3735e8380b6c268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_6af978aa30ddddd21b38dd5074b22ee1597aa085c7a0e0fc68b84236eaa0ef04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6af978aa30ddddd21b38dd5074b22ee1597aa085c7a0e0fc68b84236eaa0ef04->enter($__internal_6af978aa30ddddd21b38dd5074b22ee1597aa085c7a0e0fc68b84236eaa0ef04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_6af978aa30ddddd21b38dd5074b22ee1597aa085c7a0e0fc68b84236eaa0ef04->leave($__internal_6af978aa30ddddd21b38dd5074b22ee1597aa085c7a0e0fc68b84236eaa0ef04_prof);

        
        $__internal_fbf44e8892f5d55dbae4772df02625e76842f9db7f08778cd3735e8380b6c268->leave($__internal_fbf44e8892f5d55dbae4772df02625e76842f9db7f08778cd3735e8380b6c268_prof);

    }

    // line 54
    public function block_content($context, array $blocks = array())
    {
        $__internal_5c2b8bebc617da9c57fea328546aacb927a96e8ab56add84ff2b6957ac342a52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c2b8bebc617da9c57fea328546aacb927a96e8ab56add84ff2b6957ac342a52->enter($__internal_5c2b8bebc617da9c57fea328546aacb927a96e8ab56add84ff2b6957ac342a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_8a3e517ca205a304c7e5e6cfa5639c84d6e5fb5f6b247498ee947415f1e2ed77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a3e517ca205a304c7e5e6cfa5639c84d6e5fb5f6b247498ee947415f1e2ed77->enter($__internal_8a3e517ca205a304c7e5e6cfa5639c84d6e5fb5f6b247498ee947415f1e2ed77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 55
        echo "        ";
        
        $__internal_8a3e517ca205a304c7e5e6cfa5639c84d6e5fb5f6b247498ee947415f1e2ed77->leave($__internal_8a3e517ca205a304c7e5e6cfa5639c84d6e5fb5f6b247498ee947415f1e2ed77_prof);

        
        $__internal_5c2b8bebc617da9c57fea328546aacb927a96e8ab56add84ff2b6957ac342a52->leave($__internal_5c2b8bebc617da9c57fea328546aacb927a96e8ab56add84ff2b6957ac342a52_prof);

    }

    // line 60
    public function block_footer($context, array $blocks = array())
    {
        $__internal_fe0db8a12521caad3cc166bd87922302c2233d6f7f6137f18cfba89ddda33faf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe0db8a12521caad3cc166bd87922302c2233d6f7f6137f18cfba89ddda33faf->enter($__internal_fe0db8a12521caad3cc166bd87922302c2233d6f7f6137f18cfba89ddda33faf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_cd2e23400dfc0970ba046c9be71dd2aee42c2e9a37218ffa43dc8225d62596de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd2e23400dfc0970ba046c9be71dd2aee42c2e9a37218ffa43dc8225d62596de->enter($__internal_cd2e23400dfc0970ba046c9be71dd2aee42c2e9a37218ffa43dc8225d62596de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 61
        echo "        ";
        $this->loadTemplate("@SyliusShop/_footer.html.twig", "@SyliusShop/layout.html.twig", 61)->display($context);
        // line 62
        echo "    ";
        
        $__internal_cd2e23400dfc0970ba046c9be71dd2aee42c2e9a37218ffa43dc8225d62596de->leave($__internal_cd2e23400dfc0970ba046c9be71dd2aee42c2e9a37218ffa43dc8225d62596de_prof);

        
        $__internal_fe0db8a12521caad3cc166bd87922302c2233d6f7f6137f18cfba89ddda33faf->leave($__internal_fe0db8a12521caad3cc166bd87922302c2233d6f7f6137f18cfba89ddda33faf_prof);

    }

    // line 65
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1b5213e26d958aef1a4b3d9ead715199a85d63fa599507e21910e67a52087df8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b5213e26d958aef1a4b3d9ead715199a85d63fa599507e21910e67a52087df8->enter($__internal_1b5213e26d958aef1a4b3d9ead715199a85d63fa599507e21910e67a52087df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4a77cd4f2d1ae08e54f2f6d589422cfc41eab7d829333a9c82aa32daebe43c41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a77cd4f2d1ae08e54f2f6d589422cfc41eab7d829333a9c82aa32daebe43c41->enter($__internal_4a77cd4f2d1ae08e54f2f6d589422cfc41eab7d829333a9c82aa32daebe43c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_4a77cd4f2d1ae08e54f2f6d589422cfc41eab7d829333a9c82aa32daebe43c41->leave($__internal_4a77cd4f2d1ae08e54f2f6d589422cfc41eab7d829333a9c82aa32daebe43c41_prof);

        
        $__internal_1b5213e26d958aef1a4b3d9ead715199a85d63fa599507e21910e67a52087df8->leave($__internal_1b5213e26d958aef1a4b3d9ead715199a85d63fa599507e21910e67a52087df8_prof);

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
", "@SyliusShop/layout.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/layout.html.twig");
    }
}

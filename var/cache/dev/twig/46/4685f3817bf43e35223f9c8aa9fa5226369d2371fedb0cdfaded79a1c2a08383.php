<?php

/* SonataAdminBundle::standard_layout.html.twig */
class __TwigTemplate_71b69bc16bc50664a7f210b1c860e1b2d33da86b5a9fb70f66f3cb1330cd71b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_attributes' => array($this, 'block_html_attributes'),
            'meta_tags' => array($this, 'block_meta_tags'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'sonata_javascript_config' => array($this, 'block_sonata_javascript_config'),
            'sonata_javascript_pool' => array($this, 'block_sonata_javascript_pool'),
            'sonata_head_title' => array($this, 'block_sonata_head_title'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_header_noscript_warning' => array($this, 'block_sonata_header_noscript_warning'),
            'logo' => array($this, 'block_logo'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'sonata_top_nav_menu' => array($this, 'block_sonata_top_nav_menu'),
            'sonata_top_nav_menu_add_block' => array($this, 'block_sonata_top_nav_menu_add_block'),
            'sonata_top_nav_menu_user_block' => array($this, 'block_sonata_top_nav_menu_user_block'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_side_nav' => array($this, 'block_sonata_side_nav'),
            'sonata_sidebar_search' => array($this, 'block_sonata_sidebar_search'),
            'side_bar_before_nav' => array($this, 'block_side_bar_before_nav'),
            'side_bar_nav' => array($this, 'block_side_bar_nav'),
            'side_bar_after_nav' => array($this, 'block_side_bar_after_nav'),
            'side_bar_after_nav_content' => array($this, 'block_side_bar_after_nav_content'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
            'sonata_page_content_header' => array($this, 'block_sonata_page_content_header'),
            'sonata_page_content_nav' => array($this, 'block_sonata_page_content_nav'),
            'tab_menu_navbar_header' => array($this, 'block_tab_menu_navbar_header'),
            'sonata_admin_content_actions_wrappers' => array($this, 'block_sonata_admin_content_actions_wrappers'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
            'notice' => array($this, 'block_notice'),
            'bootlint' => array($this, 'block_bootlint'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb70f99b06bb314557f82a0086980b18f8725ffb585154df191527550f40c478 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb70f99b06bb314557f82a0086980b18f8725ffb585154df191527550f40c478->enter($__internal_fb70f99b06bb314557f82a0086980b18f8725ffb585154df191527550f40c478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::standard_layout.html.twig"));

        $__internal_7440ec8b318781e325c02394424b69c5d5f229c4cc96d8336bcbdcd78f0cfa87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7440ec8b318781e325c02394424b69c5d5f229c4cc96d8336bcbdcd78f0cfa87->enter($__internal_7440ec8b318781e325c02394424b69c5d5f229c4cc96d8336bcbdcd78f0cfa87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::standard_layout.html.twig"));

        // line 11
        echo "
";
        // line 12
        $context["_preview"] = ((        $this->hasBlock("preview", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("preview", $context, $blocks))) : (null));
        // line 13
        $context["_form"] = ((        $this->hasBlock("form", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("form", $context, $blocks))) : (null));
        // line 14
        $context["_show"] = ((        $this->hasBlock("show", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("show", $context, $blocks))) : (null));
        // line 15
        $context["_list_table"] = ((        $this->hasBlock("list_table", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_table", $context, $blocks))) : (null));
        // line 16
        $context["_list_filters"] = ((        $this->hasBlock("list_filters", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_filters", $context, $blocks))) : (null));
        // line 17
        $context["_tab_menu"] = ((        $this->hasBlock("tab_menu", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("tab_menu", $context, $blocks))) : (null));
        // line 18
        $context["_content"] = ((        $this->hasBlock("content", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("content", $context, $blocks))) : (null));
        // line 19
        $context["_title"] = ((        $this->hasBlock("title", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("title", $context, $blocks))) : (null));
        // line 20
        $context["_breadcrumb"] = ((        $this->hasBlock("breadcrumb", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("breadcrumb", $context, $blocks))) : (null));
        // line 21
        $context["_actions"] = ((        $this->hasBlock("actions", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("actions", $context, $blocks))) : (null));
        // line 22
        $context["_navbar_title"] = ((        $this->hasBlock("navbar_title", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("navbar_title", $context, $blocks))) : (null));
        // line 23
        $context["_list_filters_actions"] = ((        $this->hasBlock("list_filters_actions", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_filters_actions", $context, $blocks))) : (null));
        // line 24
        echo "
<!DOCTYPE html>
<html ";
        // line 26
        $this->displayBlock('html_attributes', $context, $blocks);
        echo ">
    <head>
        ";
        // line 28
        $this->displayBlock('meta_tags', $context, $blocks);
        // line 33
        echo "
        ";
        // line 34
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 39
        echo "
        ";
        // line 40
        $this->displayBlock('javascripts', $context, $blocks);
        // line 88
        echo "
        <title>
        ";
        // line 90
        $this->displayBlock('sonata_head_title', $context, $blocks);
        // line 116
        echo "        </title>
    </head>
    <body ";
        // line 118
        $this->displayBlock('body_attributes', $context, $blocks);
        echo ">

    <div class=\"wrapper\">

        ";
        // line 122
        $this->displayBlock('sonata_header', $context, $blocks);
        // line 221
        echo "
        ";
        // line 222
        $this->displayBlock('sonata_wrapper', $context, $blocks);
        // line 355
        echo "    </div>

    ";
        // line 357
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 357, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "use_bootlint"), "method")) {
            // line 358
            echo "        ";
            $this->displayBlock('bootlint', $context, $blocks);
            // line 364
            echo "    ";
        }
        // line 365
        echo "
    </body>
</html>
";
        
        $__internal_fb70f99b06bb314557f82a0086980b18f8725ffb585154df191527550f40c478->leave($__internal_fb70f99b06bb314557f82a0086980b18f8725ffb585154df191527550f40c478_prof);

        
        $__internal_7440ec8b318781e325c02394424b69c5d5f229c4cc96d8336bcbdcd78f0cfa87->leave($__internal_7440ec8b318781e325c02394424b69c5d5f229c4cc96d8336bcbdcd78f0cfa87_prof);

    }

    // line 26
    public function block_html_attributes($context, array $blocks = array())
    {
        $__internal_84bc810382442129675ff32eea23501325793d1a80c3d40104dde2b31abac8cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84bc810382442129675ff32eea23501325793d1a80c3d40104dde2b31abac8cf->enter($__internal_84bc810382442129675ff32eea23501325793d1a80c3d40104dde2b31abac8cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        $__internal_8aa38805e12839849a6889131a544e42348998b3e274f531ee213c312e71fc37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aa38805e12839849a6889131a544e42348998b3e274f531ee213c312e71fc37->enter($__internal_8aa38805e12839849a6889131a544e42348998b3e274f531ee213c312e71fc37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        echo "class=\"no-js\"";
        
        $__internal_8aa38805e12839849a6889131a544e42348998b3e274f531ee213c312e71fc37->leave($__internal_8aa38805e12839849a6889131a544e42348998b3e274f531ee213c312e71fc37_prof);

        
        $__internal_84bc810382442129675ff32eea23501325793d1a80c3d40104dde2b31abac8cf->leave($__internal_84bc810382442129675ff32eea23501325793d1a80c3d40104dde2b31abac8cf_prof);

    }

    // line 28
    public function block_meta_tags($context, array $blocks = array())
    {
        $__internal_cd67ef71b7b5142e17d380fb036bbd65ec50495c643b604bac74b573b11574e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd67ef71b7b5142e17d380fb036bbd65ec50495c643b604bac74b573b11574e4->enter($__internal_cd67ef71b7b5142e17d380fb036bbd65ec50495c643b604bac74b573b11574e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        $__internal_e22c80b7392e0baaaa77118c31b37078de2ec28ceb52c5b1279e5487c907e8d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e22c80b7392e0baaaa77118c31b37078de2ec28ceb52c5b1279e5487c907e8d0->enter($__internal_e22c80b7392e0baaaa77118c31b37078de2ec28ceb52c5b1279e5487c907e8d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        // line 29
        echo "            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        ";
        
        $__internal_e22c80b7392e0baaaa77118c31b37078de2ec28ceb52c5b1279e5487c907e8d0->leave($__internal_e22c80b7392e0baaaa77118c31b37078de2ec28ceb52c5b1279e5487c907e8d0_prof);

        
        $__internal_cd67ef71b7b5142e17d380fb036bbd65ec50495c643b604bac74b573b11574e4->leave($__internal_cd67ef71b7b5142e17d380fb036bbd65ec50495c643b604bac74b573b11574e4_prof);

    }

    // line 34
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_68a79b7c98ccaba3cff87c775a256df6b2a223b97422c42898433e06122ab2d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68a79b7c98ccaba3cff87c775a256df6b2a223b97422c42898433e06122ab2d5->enter($__internal_68a79b7c98ccaba3cff87c775a256df6b2a223b97422c42898433e06122ab2d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ee7154c25ff9aef438d73ea7f8b07c30f112afb6fad1efcd6c22de533b1b4591 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee7154c25ff9aef438d73ea7f8b07c30f112afb6fad1efcd6c22de533b1b4591->enter($__internal_ee7154c25ff9aef438d73ea7f8b07c30f112afb6fad1efcd6c22de533b1b4591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 35
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 35, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "stylesheets", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
            // line 36
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["stylesheet"]), "html", null, true);
            echo "\">
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        ";
        
        $__internal_ee7154c25ff9aef438d73ea7f8b07c30f112afb6fad1efcd6c22de533b1b4591->leave($__internal_ee7154c25ff9aef438d73ea7f8b07c30f112afb6fad1efcd6c22de533b1b4591_prof);

        
        $__internal_68a79b7c98ccaba3cff87c775a256df6b2a223b97422c42898433e06122ab2d5->leave($__internal_68a79b7c98ccaba3cff87c775a256df6b2a223b97422c42898433e06122ab2d5_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_50b17fa0498215b02b242f2d9e9b39f8f30fd4b6f4f0dd6040d7886a658caea6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50b17fa0498215b02b242f2d9e9b39f8f30fd4b6f4f0dd6040d7886a658caea6->enter($__internal_50b17fa0498215b02b242f2d9e9b39f8f30fd4b6f4f0dd6040d7886a658caea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_57e9bfd6ad0b58208561796cf7c1fdfad462297b569c454ccb96bd7d1609178f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57e9bfd6ad0b58208561796cf7c1fdfad462297b569c454ccb96bd7d1609178f->enter($__internal_57e9bfd6ad0b58208561796cf7c1fdfad462297b569c454ccb96bd7d1609178f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 41
        echo "            ";
        $this->displayBlock('sonata_javascript_config', $context, $blocks);
        // line 61
        echo "
            ";
        // line 62
        $this->displayBlock('sonata_javascript_pool', $context, $blocks);
        // line 67
        echo "
            ";
        // line 68
        $context["locale"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 68, $this->getSourceContext()); })()), "request", array()), "locale", array());
        // line 69
        echo "            ";
        // line 70
        echo "            ";
        if ((twig_slice($this->env, (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 70, $this->getSourceContext()); })()), 0, 2) != "en")) {
            // line 71
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/moment/locale/" . twig_replace_filter(twig_lower_filter($this->env,             // line 73
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 73, $this->getSourceContext()); })())), array("_" => "-"))) . ".js")), "html", null, true);
            // line 75
            echo "\"></script>
            ";
        }
        // line 77
        echo "
            ";
        // line 79
        echo "            ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 79, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            // line 80
            echo "                ";
            if (((isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 80, $this->getSourceContext()); })()) == "pt")) {
                $context["locale"] = "pt_PT";
            }
            // line 81
            echo "
                ";
            // line 83
            echo "                ";
            if ((twig_slice($this->env, (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 83, $this->getSourceContext()); })()), 0, 2) != "en")) {
                // line 84
                echo "                    <script src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/select2/select2_locale_" . twig_replace_filter((isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 84, $this->getSourceContext()); })()), array("_" => "-"))) . ".js")), "html", null, true);
                echo "\"></script>
                ";
            }
            // line 86
            echo "            ";
        }
        // line 87
        echo "        ";
        
        $__internal_57e9bfd6ad0b58208561796cf7c1fdfad462297b569c454ccb96bd7d1609178f->leave($__internal_57e9bfd6ad0b58208561796cf7c1fdfad462297b569c454ccb96bd7d1609178f_prof);

        
        $__internal_50b17fa0498215b02b242f2d9e9b39f8f30fd4b6f4f0dd6040d7886a658caea6->leave($__internal_50b17fa0498215b02b242f2d9e9b39f8f30fd4b6f4f0dd6040d7886a658caea6_prof);

    }

    // line 41
    public function block_sonata_javascript_config($context, array $blocks = array())
    {
        $__internal_4309edca7991c5ad4b55ffbcf8cc53febb984286c30b9fd5b88a683068108940 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4309edca7991c5ad4b55ffbcf8cc53febb984286c30b9fd5b88a683068108940->enter($__internal_4309edca7991c5ad4b55ffbcf8cc53febb984286c30b9fd5b88a683068108940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_config"));

        $__internal_61d536d90097dbb2bbc4b32bc64e380fd7dda8dcf0ee04c8f7d0da97d236f90e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61d536d90097dbb2bbc4b32bc64e380fd7dda8dcf0ee04c8f7d0da97d236f90e->enter($__internal_61d536d90097dbb2bbc4b32bc64e380fd7dda8dcf0ee04c8f7d0da97d236f90e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_config"));

        // line 42
        echo "                <script>
                    window.SONATA_CONFIG = {
                        CONFIRM_EXIT: ";
        // line 44
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 44, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "confirm_exit"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_SELECT2: ";
        // line 45
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 45, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_ICHECK: ";
        // line 46
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 46, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "use_icheck"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_STICKYFORMS: ";
        // line 47
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 47, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "use_stickyforms"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        // line 48
        echo "                    };
                    window.SONATA_TRANSLATIONS = {
                        CONFIRM_EXIT: '";
        // line 50
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("confirm_exit", array(), "SonataAdminBundle"), "js"), "html", null, true);
        echo "'
                    };

                    // http://getbootstrap.com/getting-started/#support-ie10-width
                    if (navigator.userAgent.match(/IEMobile\\/10\\.0/)) {
                        var msViewportStyle = document.createElement('style');
                        msViewportStyle.appendChild(document.createTextNode('@-ms-viewport{width:auto!important}'));
                        document.querySelector('head').appendChild(msViewportStyle);
                    }
                </script>
            ";
        
        $__internal_61d536d90097dbb2bbc4b32bc64e380fd7dda8dcf0ee04c8f7d0da97d236f90e->leave($__internal_61d536d90097dbb2bbc4b32bc64e380fd7dda8dcf0ee04c8f7d0da97d236f90e_prof);

        
        $__internal_4309edca7991c5ad4b55ffbcf8cc53febb984286c30b9fd5b88a683068108940->leave($__internal_4309edca7991c5ad4b55ffbcf8cc53febb984286c30b9fd5b88a683068108940_prof);

    }

    // line 62
    public function block_sonata_javascript_pool($context, array $blocks = array())
    {
        $__internal_a7414805aa241a2d0531e8fdd564a668da0da0b5da1448548f86ecf54929fd8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7414805aa241a2d0531e8fdd564a668da0da0b5da1448548f86ecf54929fd8e->enter($__internal_a7414805aa241a2d0531e8fdd564a668da0da0b5da1448548f86ecf54929fd8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_pool"));

        $__internal_35e9d9cf147df9fb738e09f5da257415977b38ac57404a943ffe84b82fb59590 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35e9d9cf147df9fb738e09f5da257415977b38ac57404a943ffe84b82fb59590->enter($__internal_35e9d9cf147df9fb738e09f5da257415977b38ac57404a943ffe84b82fb59590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_pool"));

        // line 63
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 63, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "javascripts", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["javascript"]) {
            // line 64
            echo "                    <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["javascript"]), "html", null, true);
            echo "\"></script>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['javascript'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "            ";
        
        $__internal_35e9d9cf147df9fb738e09f5da257415977b38ac57404a943ffe84b82fb59590->leave($__internal_35e9d9cf147df9fb738e09f5da257415977b38ac57404a943ffe84b82fb59590_prof);

        
        $__internal_a7414805aa241a2d0531e8fdd564a668da0da0b5da1448548f86ecf54929fd8e->leave($__internal_a7414805aa241a2d0531e8fdd564a668da0da0b5da1448548f86ecf54929fd8e_prof);

    }

    // line 90
    public function block_sonata_head_title($context, array $blocks = array())
    {
        $__internal_f212e6b04dead5887efad857a2017718727a71e9dde565ab728f1be5a4130f0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f212e6b04dead5887efad857a2017718727a71e9dde565ab728f1be5a4130f0c->enter($__internal_f212e6b04dead5887efad857a2017718727a71e9dde565ab728f1be5a4130f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

        $__internal_4bc2b93fb19b2573fec6c0dfa2ae2bc7526b5d51dbe8bcef6c140d540c549cc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bc2b93fb19b2573fec6c0dfa2ae2bc7526b5d51dbe8bcef6c140d540c549cc0->enter($__internal_4bc2b93fb19b2573fec6c0dfa2ae2bc7526b5d51dbe8bcef6c140d540c549cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

        // line 91
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 93
        if ( !twig_test_empty((isset($context["_title"]) || array_key_exists("_title", $context) ? $context["_title"] : (function () { throw new Twig_Error_Runtime('Variable "_title" does not exist.', 93, $this->getSourceContext()); })()))) {
            // line 94
            echo "                ";
            echo (isset($context["_title"]) || array_key_exists("_title", $context) ? $context["_title"] : (function () { throw new Twig_Error_Runtime('Variable "_title" does not exist.', 94, $this->getSourceContext()); })());
            echo "
            ";
        } else {
            // line 96
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 97
                echo "                    -
                    ";
                // line 98
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["breadcrumbs_builder"]) || array_key_exists("breadcrumbs_builder", $context) ? $context["breadcrumbs_builder"] : (function () { throw new Twig_Error_Runtime('Variable "breadcrumbs_builder" does not exist.', 98, $this->getSourceContext()); })()), "breadcrumbs", array(0 => (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 98, $this->getSourceContext()); })()), 1 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 98, $this->getSourceContext()); })())), "method"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                    // line 99
                    echo "                        ";
                    if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "first", array())) {
                        // line 100
                        echo "                            ";
                        if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()) != 2)) {
                            // line 101
                            echo "                                &gt;
                            ";
                        }
                        // line 104
                        $context["translation_domain"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "extra", array(0 => "translation_domain", 1 => "messages"), "method");
                        // line 105
                        $context["label"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "label", array());
                        // line 106
                        if ( !((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 106, $this->getSourceContext()); })()) === false)) {
                            // line 107
                            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 107, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "extra", array(0 => "translation_params", 1 => array()), "method"), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 107, $this->getSourceContext()); })()));
                        }
                        // line 110
                        echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 110, $this->getSourceContext()); })()), "html", null, true);
                        echo "
                        ";
                    }
                    // line 112
                    echo "                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 113
                echo "                ";
            }
            // line 114
            echo "            ";
        }
        // line 115
        echo "        ";
        
        $__internal_4bc2b93fb19b2573fec6c0dfa2ae2bc7526b5d51dbe8bcef6c140d540c549cc0->leave($__internal_4bc2b93fb19b2573fec6c0dfa2ae2bc7526b5d51dbe8bcef6c140d540c549cc0_prof);

        
        $__internal_f212e6b04dead5887efad857a2017718727a71e9dde565ab728f1be5a4130f0c->leave($__internal_f212e6b04dead5887efad857a2017718727a71e9dde565ab728f1be5a4130f0c_prof);

    }

    // line 118
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_d1c7dca9a18952f6625aafb91c0912963c023f69eb3ce4ea5503f19c41869029 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1c7dca9a18952f6625aafb91c0912963c023f69eb3ce4ea5503f19c41869029->enter($__internal_d1c7dca9a18952f6625aafb91c0912963c023f69eb3ce4ea5503f19c41869029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        $__internal_0a07633d93e07d1fce036456a69f1fe0dd3319c1fedbe823ef7ed407bb88692f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a07633d93e07d1fce036456a69f1fe0dd3319c1fedbe823ef7ed407bb88692f->enter($__internal_0a07633d93e07d1fce036456a69f1fe0dd3319c1fedbe823ef7ed407bb88692f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc skin-black fixed\"";
        
        $__internal_0a07633d93e07d1fce036456a69f1fe0dd3319c1fedbe823ef7ed407bb88692f->leave($__internal_0a07633d93e07d1fce036456a69f1fe0dd3319c1fedbe823ef7ed407bb88692f_prof);

        
        $__internal_d1c7dca9a18952f6625aafb91c0912963c023f69eb3ce4ea5503f19c41869029->leave($__internal_d1c7dca9a18952f6625aafb91c0912963c023f69eb3ce4ea5503f19c41869029_prof);

    }

    // line 122
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_11f2b0e694c765ddb1bdb62b0cad316c312a725256945242aa901d4e7ab9aed5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11f2b0e694c765ddb1bdb62b0cad316c312a725256945242aa901d4e7ab9aed5->enter($__internal_11f2b0e694c765ddb1bdb62b0cad316c312a725256945242aa901d4e7ab9aed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        $__internal_3987ba93a161e2c9d215f71aaac5e3712bb8919a02f4d14e21bed8e5e44fdbfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3987ba93a161e2c9d215f71aaac5e3712bb8919a02f4d14e21bed8e5e44fdbfb->enter($__internal_3987ba93a161e2c9d215f71aaac5e3712bb8919a02f4d14e21bed8e5e44fdbfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        // line 123
        echo "            <header class=\"main-header\">
                ";
        // line 124
        $this->displayBlock('sonata_header_noscript_warning', $context, $blocks);
        // line 131
        echo "                ";
        $this->displayBlock('logo', $context, $blocks);
        // line 143
        echo "                ";
        $this->displayBlock('sonata_nav', $context, $blocks);
        // line 219
        echo "            </header>
        ";
        
        $__internal_3987ba93a161e2c9d215f71aaac5e3712bb8919a02f4d14e21bed8e5e44fdbfb->leave($__internal_3987ba93a161e2c9d215f71aaac5e3712bb8919a02f4d14e21bed8e5e44fdbfb_prof);

        
        $__internal_11f2b0e694c765ddb1bdb62b0cad316c312a725256945242aa901d4e7ab9aed5->leave($__internal_11f2b0e694c765ddb1bdb62b0cad316c312a725256945242aa901d4e7ab9aed5_prof);

    }

    // line 124
    public function block_sonata_header_noscript_warning($context, array $blocks = array())
    {
        $__internal_6831da9897eea6fd9329e9a6a89e6bbda264cdac1ea83dcc3d5ffacba393edf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6831da9897eea6fd9329e9a6a89e6bbda264cdac1ea83dcc3d5ffacba393edf4->enter($__internal_6831da9897eea6fd9329e9a6a89e6bbda264cdac1ea83dcc3d5ffacba393edf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

        $__internal_d9647a36d552b12823f2cd7a4d91b570f2a9a0aea98ff50862dab7fb33d6953a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9647a36d552b12823f2cd7a4d91b570f2a9a0aea98ff50862dab7fb33d6953a->enter($__internal_d9647a36d552b12823f2cd7a4d91b570f2a9a0aea98ff50862dab7fb33d6953a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

        // line 125
        echo "                    <noscript>
                        <div class=\"noscript-warning\">
                            ";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("noscript_warning", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                        </div>
                    </noscript>
                ";
        
        $__internal_d9647a36d552b12823f2cd7a4d91b570f2a9a0aea98ff50862dab7fb33d6953a->leave($__internal_d9647a36d552b12823f2cd7a4d91b570f2a9a0aea98ff50862dab7fb33d6953a_prof);

        
        $__internal_6831da9897eea6fd9329e9a6a89e6bbda264cdac1ea83dcc3d5ffacba393edf4->leave($__internal_6831da9897eea6fd9329e9a6a89e6bbda264cdac1ea83dcc3d5ffacba393edf4_prof);

    }

    // line 131
    public function block_logo($context, array $blocks = array())
    {
        $__internal_0d6b5ab7c05e7780acf369ad4d98f7c6a4eaf3e43096ad681beb7a13075376cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d6b5ab7c05e7780acf369ad4d98f7c6a4eaf3e43096ad681beb7a13075376cc->enter($__internal_0d6b5ab7c05e7780acf369ad4d98f7c6a4eaf3e43096ad681beb7a13075376cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        $__internal_176688e6ceb82acce6297e06b717fe774d11670baa9fffbd0924d715a538604c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_176688e6ceb82acce6297e06b717fe774d11670baa9fffbd0924d715a538604c->enter($__internal_176688e6ceb82acce6297e06b717fe774d11670baa9fffbd0924d715a538604c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 132
        echo "                    ";
        ob_start();
        // line 133
        echo "                        <a class=\"logo\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_dashboard");
        echo "\">
                            ";
        // line 134
        if ((("single_image" == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 134, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 134, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 135
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 135, $this->getSourceContext()); })()), "adminPool", array()), "titlelogo", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 135, $this->getSourceContext()); })()), "adminPool", array()), "title", array()), "html", null, true);
            echo "\">
                            ";
        }
        // line 137
        echo "                            ";
        if ((("single_text" == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 137, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 137, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 138
            echo "                                <span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 138, $this->getSourceContext()); })()), "adminPool", array()), "title", array()), "html", null, true);
            echo "</span>
                            ";
        }
        // line 140
        echo "                        </a>
                    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 142
        echo "                ";
        
        $__internal_176688e6ceb82acce6297e06b717fe774d11670baa9fffbd0924d715a538604c->leave($__internal_176688e6ceb82acce6297e06b717fe774d11670baa9fffbd0924d715a538604c_prof);

        
        $__internal_0d6b5ab7c05e7780acf369ad4d98f7c6a4eaf3e43096ad681beb7a13075376cc->leave($__internal_0d6b5ab7c05e7780acf369ad4d98f7c6a4eaf3e43096ad681beb7a13075376cc_prof);

    }

    // line 143
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_eff8fb56be574ac7d14ba57c575ed2f209180e2c1646b31b20f8453bf4f7dd95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eff8fb56be574ac7d14ba57c575ed2f209180e2c1646b31b20f8453bf4f7dd95->enter($__internal_eff8fb56be574ac7d14ba57c575ed2f209180e2c1646b31b20f8453bf4f7dd95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        $__internal_9bf1754b959f6073268e04b79dc4f2d77fe30e227a432669ae4a09a80694000a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bf1754b959f6073268e04b79dc4f2d77fe30e227a432669ae4a09a80694000a->enter($__internal_9bf1754b959f6073268e04b79dc4f2d77fe30e227a432669ae4a09a80694000a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        // line 144
        echo "                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                        </a>

                        <div class=\"navbar-left\">
                            ";
        // line 150
        $this->displayBlock('sonata_breadcrumb', $context, $blocks);
        // line 189
        echo "                        </div>

                        ";
        // line 191
        $this->displayBlock('sonata_top_nav_menu', $context, $blocks);
        // line 217
        echo "                    </nav>
                ";
        
        $__internal_9bf1754b959f6073268e04b79dc4f2d77fe30e227a432669ae4a09a80694000a->leave($__internal_9bf1754b959f6073268e04b79dc4f2d77fe30e227a432669ae4a09a80694000a_prof);

        
        $__internal_eff8fb56be574ac7d14ba57c575ed2f209180e2c1646b31b20f8453bf4f7dd95->leave($__internal_eff8fb56be574ac7d14ba57c575ed2f209180e2c1646b31b20f8453bf4f7dd95_prof);

    }

    // line 150
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_3d4c762d4d257de4a93ad0849ecd7ef1afb0263da282427e45d3dc214b6e5252 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d4c762d4d257de4a93ad0849ecd7ef1afb0263da282427e45d3dc214b6e5252->enter($__internal_3d4c762d4d257de4a93ad0849ecd7ef1afb0263da282427e45d3dc214b6e5252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        $__internal_f3aff4fcf027735a065b0c5b2bcc54febc4f4e90881d2ccdb631d9cd4e3e5835 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3aff4fcf027735a065b0c5b2bcc54febc4f4e90881d2ccdb631d9cd4e3e5835->enter($__internal_f3aff4fcf027735a065b0c5b2bcc54febc4f4e90881d2ccdb631d9cd4e3e5835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        // line 151
        echo "                                <div class=\"hidden-xs\">
                                    ";
        // line 152
        if (( !twig_test_empty((isset($context["_breadcrumb"]) || array_key_exists("_breadcrumb", $context) ? $context["_breadcrumb"] : (function () { throw new Twig_Error_Runtime('Variable "_breadcrumb" does not exist.', 152, $this->getSourceContext()); })())) || array_key_exists("action", $context))) {
            // line 153
            echo "                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            ";
            // line 154
            if (twig_test_empty((isset($context["_breadcrumb"]) || array_key_exists("_breadcrumb", $context) ? $context["_breadcrumb"] : (function () { throw new Twig_Error_Runtime('Variable "_breadcrumb" does not exist.', 154, $this->getSourceContext()); })()))) {
                // line 155
                echo "                                                ";
                if (array_key_exists("action", $context)) {
                    // line 156
                    echo "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["breadcrumbs_builder"]) || array_key_exists("breadcrumbs_builder", $context) ? $context["breadcrumbs_builder"] : (function () { throw new Twig_Error_Runtime('Variable "breadcrumbs_builder" does not exist.', 156, $this->getSourceContext()); })()), "breadcrumbs", array(0 => (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 156, $this->getSourceContext()); })()), 1 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 156, $this->getSourceContext()); })())), "method"));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                        // line 157
                        $context["translation_domain"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "extra", array(0 => "translation_domain", 1 => "messages"), "method");
                        // line 158
                        $context["label"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "label", array());
                        // line 159
                        if ( !((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 159, $this->getSourceContext()); })()) === false)) {
                            // line 160
                            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 160, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "extra", array(0 => "translation_params", 1 => array()), "method"), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 160, $this->getSourceContext()); })()));
                        }
                        // line 163
                        if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) {
                            // line 164
                            echo "                                                            <li>
                                                                ";
                            // line 165
                            if ( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "uri", array()))) {
                                // line 166
                                echo "                                                                    <a href=\"";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "uri", array()), "html", null, true);
                                echo "\">
                                                                        ";
                                // line 167
                                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "extra", array(0 => "safe_label", 1 => true), "method")) {
                                    // line 168
                                    echo (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 168, $this->getSourceContext()); })());
                                } else {
                                    // line 170
                                    echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 170, $this->getSourceContext()); })()), "html", null, true);
                                }
                                // line 172
                                echo "                                                                    </a>
                                                                ";
                            } else {
                                // line 174
                                echo "                                                                    <span>";
                                echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 174, $this->getSourceContext()); })()), "html", null, true);
                                echo "</span>
                                                                ";
                            }
                            // line 176
                            echo "                                                            </li>
                                                        ";
                        } else {
                            // line 178
                            echo "                                                            <li class=\"active\"><span>";
                            echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 178, $this->getSourceContext()); })()), "html", null, true);
                            echo "</span></li>
                                                        ";
                        }
                        // line 180
                        echo "                                                    ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 181
                    echo "                                                ";
                }
                // line 182
                echo "                                            ";
            } else {
                // line 183
                echo "                                                ";
                echo (isset($context["_breadcrumb"]) || array_key_exists("_breadcrumb", $context) ? $context["_breadcrumb"] : (function () { throw new Twig_Error_Runtime('Variable "_breadcrumb" does not exist.', 183, $this->getSourceContext()); })());
                echo "
                                            ";
            }
            // line 185
            echo "                                        </ol>
                                    ";
        }
        // line 187
        echo "                                </div>
                            ";
        
        $__internal_f3aff4fcf027735a065b0c5b2bcc54febc4f4e90881d2ccdb631d9cd4e3e5835->leave($__internal_f3aff4fcf027735a065b0c5b2bcc54febc4f4e90881d2ccdb631d9cd4e3e5835_prof);

        
        $__internal_3d4c762d4d257de4a93ad0849ecd7ef1afb0263da282427e45d3dc214b6e5252->leave($__internal_3d4c762d4d257de4a93ad0849ecd7ef1afb0263da282427e45d3dc214b6e5252_prof);

    }

    // line 191
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        $__internal_e84ab4f9b39c0be6621b4e045bbe62a8b607df144c66a903f8365564640cc65d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e84ab4f9b39c0be6621b4e045bbe62a8b607df144c66a903f8365564640cc65d->enter($__internal_e84ab4f9b39c0be6621b4e045bbe62a8b607df144c66a903f8365564640cc65d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

        $__internal_b003f67e1292598255b1fc62f3c5082da3aeb94406a29cee36387bc6b71d7a27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b003f67e1292598255b1fc62f3c5082da3aeb94406a29cee36387bc6b71d7a27->enter($__internal_b003f67e1292598255b1fc62f3c5082da3aeb94406a29cee36387bc6b71d7a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

        // line 192
        echo "                            ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 192, $this->getSourceContext()); })()), "user", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 193
            echo "                                <div class=\"navbar-custom-menu\">
                                    <ul class=\"nav navbar-nav\">
                                        ";
            // line 195
            $this->displayBlock('sonata_top_nav_menu_add_block', $context, $blocks);
            // line 203
            echo "                                        ";
            $this->displayBlock('sonata_top_nav_menu_user_block', $context, $blocks);
            // line 213
            echo "                                    </ul>
                                </div>
                            ";
        }
        // line 216
        echo "                        ";
        
        $__internal_b003f67e1292598255b1fc62f3c5082da3aeb94406a29cee36387bc6b71d7a27->leave($__internal_b003f67e1292598255b1fc62f3c5082da3aeb94406a29cee36387bc6b71d7a27_prof);

        
        $__internal_e84ab4f9b39c0be6621b4e045bbe62a8b607df144c66a903f8365564640cc65d->leave($__internal_e84ab4f9b39c0be6621b4e045bbe62a8b607df144c66a903f8365564640cc65d_prof);

    }

    // line 195
    public function block_sonata_top_nav_menu_add_block($context, array $blocks = array())
    {
        $__internal_9d5170f67782dbe5619fcd78bbe4443089714e02b7c768c73cd4c6c174656928 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d5170f67782dbe5619fcd78bbe4443089714e02b7c768c73cd4c6c174656928->enter($__internal_9d5170f67782dbe5619fcd78bbe4443089714e02b7c768c73cd4c6c174656928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_add_block"));

        $__internal_dda78520981e06760064ee561e4e3351f66db48ca116649b6ab301e24f42a325 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dda78520981e06760064ee561e4e3351f66db48ca116649b6ab301e24f42a325->enter($__internal_dda78520981e06760064ee561e4e3351f66db48ca116649b6ab301e24f42a325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_add_block"));

        // line 196
        echo "                                            <li class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-plus-square fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                ";
        // line 200
        $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 200, $this->getSourceContext()); })()), "adminPool", array()), "getTemplate", array(0 => "add_block"), "method"), "SonataAdminBundle::standard_layout.html.twig", 200)->display($context);
        // line 201
        echo "                                            </li>
                                        ";
        
        $__internal_dda78520981e06760064ee561e4e3351f66db48ca116649b6ab301e24f42a325->leave($__internal_dda78520981e06760064ee561e4e3351f66db48ca116649b6ab301e24f42a325_prof);

        
        $__internal_9d5170f67782dbe5619fcd78bbe4443089714e02b7c768c73cd4c6c174656928->leave($__internal_9d5170f67782dbe5619fcd78bbe4443089714e02b7c768c73cd4c6c174656928_prof);

    }

    // line 203
    public function block_sonata_top_nav_menu_user_block($context, array $blocks = array())
    {
        $__internal_5e3b10c5ddafaa8c97b157a0da7945dfd8bfecb4ae76b406f03b836db1ede31d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e3b10c5ddafaa8c97b157a0da7945dfd8bfecb4ae76b406f03b836db1ede31d->enter($__internal_5e3b10c5ddafaa8c97b157a0da7945dfd8bfecb4ae76b406f03b836db1ede31d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_user_block"));

        $__internal_abf26517fc0436aba408376350fd8aab216f05b612f5d6ff7b0eadf051d912c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abf26517fc0436aba408376350fd8aab216f05b612f5d6ff7b0eadf051d912c6->enter($__internal_abf26517fc0436aba408376350fd8aab216f05b612f5d6ff7b0eadf051d912c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_user_block"));

        // line 204
        echo "                                            <li class=\"dropdown user-menu\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                <ul class=\"dropdown-menu dropdown-user\">
                                                    ";
        // line 209
        $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 209, $this->getSourceContext()); })()), "adminPool", array()), "getTemplate", array(0 => "user_block"), "method"), "SonataAdminBundle::standard_layout.html.twig", 209)->display($context);
        // line 210
        echo "                                                </ul>
                                            </li>
                                        ";
        
        $__internal_abf26517fc0436aba408376350fd8aab216f05b612f5d6ff7b0eadf051d912c6->leave($__internal_abf26517fc0436aba408376350fd8aab216f05b612f5d6ff7b0eadf051d912c6_prof);

        
        $__internal_5e3b10c5ddafaa8c97b157a0da7945dfd8bfecb4ae76b406f03b836db1ede31d->leave($__internal_5e3b10c5ddafaa8c97b157a0da7945dfd8bfecb4ae76b406f03b836db1ede31d_prof);

    }

    // line 222
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_8c862fe907f77907c0d25d9b0e71879c9e5248d0dab4f3bf095df3804587fa0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c862fe907f77907c0d25d9b0e71879c9e5248d0dab4f3bf095df3804587fa0e->enter($__internal_8c862fe907f77907c0d25d9b0e71879c9e5248d0dab4f3bf095df3804587fa0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        $__internal_ff06d4fd9e8777b4c8c27c034780a58c1fdc6ea78535b921932f5a8976ae594a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff06d4fd9e8777b4c8c27c034780a58c1fdc6ea78535b921932f5a8976ae594a->enter($__internal_ff06d4fd9e8777b4c8c27c034780a58c1fdc6ea78535b921932f5a8976ae594a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 223
        echo "            ";
        $this->displayBlock('sonata_left_side', $context, $blocks);
        // line 255
        echo "
            <div class=\"content-wrapper\">
                ";
        // line 257
        $this->displayBlock('sonata_page_content', $context, $blocks);
        // line 353
        echo "            </div>
        ";
        
        $__internal_ff06d4fd9e8777b4c8c27c034780a58c1fdc6ea78535b921932f5a8976ae594a->leave($__internal_ff06d4fd9e8777b4c8c27c034780a58c1fdc6ea78535b921932f5a8976ae594a_prof);

        
        $__internal_8c862fe907f77907c0d25d9b0e71879c9e5248d0dab4f3bf095df3804587fa0e->leave($__internal_8c862fe907f77907c0d25d9b0e71879c9e5248d0dab4f3bf095df3804587fa0e_prof);

    }

    // line 223
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_79f9dc7d40b1eb2cb332e5ba84b1d74fdde56deaaaa7b716fb12e21166895a2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79f9dc7d40b1eb2cb332e5ba84b1d74fdde56deaaaa7b716fb12e21166895a2b->enter($__internal_79f9dc7d40b1eb2cb332e5ba84b1d74fdde56deaaaa7b716fb12e21166895a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        $__internal_8f5a30af407c97f5745de7da808145aa108c60e2d5b9f1930c4b3ee78f1021c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f5a30af407c97f5745de7da808145aa108c60e2d5b9f1930c4b3ee78f1021c6->enter($__internal_8f5a30af407c97f5745de7da808145aa108c60e2d5b9f1930c4b3ee78f1021c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        // line 224
        echo "                <aside class=\"main-sidebar\">
                    <section class=\"sidebar\">
                        ";
        // line 226
        $this->displayBlock('sonata_side_nav', $context, $blocks);
        // line 252
        echo "                    </section>
                </aside>
            ";
        
        $__internal_8f5a30af407c97f5745de7da808145aa108c60e2d5b9f1930c4b3ee78f1021c6->leave($__internal_8f5a30af407c97f5745de7da808145aa108c60e2d5b9f1930c4b3ee78f1021c6_prof);

        
        $__internal_79f9dc7d40b1eb2cb332e5ba84b1d74fdde56deaaaa7b716fb12e21166895a2b->leave($__internal_79f9dc7d40b1eb2cb332e5ba84b1d74fdde56deaaaa7b716fb12e21166895a2b_prof);

    }

    // line 226
    public function block_sonata_side_nav($context, array $blocks = array())
    {
        $__internal_0b3aff875c69cf21ab270a837c88b78e65e029ab214d4ae989f41886f16e2cc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b3aff875c69cf21ab270a837c88b78e65e029ab214d4ae989f41886f16e2cc2->enter($__internal_0b3aff875c69cf21ab270a837c88b78e65e029ab214d4ae989f41886f16e2cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

        $__internal_01f88628388898506bb6f86aef1ce321e1ec5204c46d309935f445be233a4ba2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01f88628388898506bb6f86aef1ce321e1ec5204c46d309935f445be233a4ba2->enter($__internal_01f88628388898506bb6f86aef1ce321e1ec5204c46d309935f445be233a4ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

        // line 227
        echo "                            ";
        $this->displayBlock('sonata_sidebar_search', $context, $blocks);
        // line 239
        echo "
                            ";
        // line 240
        $this->displayBlock('side_bar_before_nav', $context, $blocks);
        // line 241
        echo "                            ";
        $this->displayBlock('side_bar_nav', $context, $blocks);
        // line 244
        echo "                            ";
        $this->displayBlock('side_bar_after_nav', $context, $blocks);
        // line 251
        echo "                        ";
        
        $__internal_01f88628388898506bb6f86aef1ce321e1ec5204c46d309935f445be233a4ba2->leave($__internal_01f88628388898506bb6f86aef1ce321e1ec5204c46d309935f445be233a4ba2_prof);

        
        $__internal_0b3aff875c69cf21ab270a837c88b78e65e029ab214d4ae989f41886f16e2cc2->leave($__internal_0b3aff875c69cf21ab270a837c88b78e65e029ab214d4ae989f41886f16e2cc2_prof);

    }

    // line 227
    public function block_sonata_sidebar_search($context, array $blocks = array())
    {
        $__internal_f506ef91af8c090834f005547f4cc6846b6efe33926e831be4952526079e511c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f506ef91af8c090834f005547f4cc6846b6efe33926e831be4952526079e511c->enter($__internal_f506ef91af8c090834f005547f4cc6846b6efe33926e831be4952526079e511c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        $__internal_6cc35cfc46068d838ebd47733d75cc0aa559da59008a90c45547bdbd2b07b91b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cc35cfc46068d838ebd47733d75cc0aa559da59008a90c45547bdbd2b07b91b->enter($__internal_6cc35cfc46068d838ebd47733d75cc0aa559da59008a90c45547bdbd2b07b91b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        // line 228
        echo "                                <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_search");
        echo "\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                    <div class=\"input-group custom-search-form\">
                                        <input type=\"text\" name=\"q\" value=\"";
        // line 230
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 230, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "q"), "method"), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("search_placeholder", array(), "SonataAdminBundle"), "html", null, true);
        echo "\">
                                        <span class=\"input-group-btn\">
                                            <button class=\"btn btn-flat\" type=\"submit\">
                                                <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            ";
        
        $__internal_6cc35cfc46068d838ebd47733d75cc0aa559da59008a90c45547bdbd2b07b91b->leave($__internal_6cc35cfc46068d838ebd47733d75cc0aa559da59008a90c45547bdbd2b07b91b_prof);

        
        $__internal_f506ef91af8c090834f005547f4cc6846b6efe33926e831be4952526079e511c->leave($__internal_f506ef91af8c090834f005547f4cc6846b6efe33926e831be4952526079e511c_prof);

    }

    // line 240
    public function block_side_bar_before_nav($context, array $blocks = array())
    {
        $__internal_ea7f22518f679b14f4bc714bd6dccda1baecf34236dc5910fb08ecb074fb94b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea7f22518f679b14f4bc714bd6dccda1baecf34236dc5910fb08ecb074fb94b8->enter($__internal_ea7f22518f679b14f4bc714bd6dccda1baecf34236dc5910fb08ecb074fb94b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        $__internal_b64350821f4480b8faae671d79567bbbfe7dc0d8d7758a9e7738910ac826c60e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b64350821f4480b8faae671d79567bbbfe7dc0d8d7758a9e7738910ac826c60e->enter($__internal_b64350821f4480b8faae671d79567bbbfe7dc0d8d7758a9e7738910ac826c60e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        echo " ";
        
        $__internal_b64350821f4480b8faae671d79567bbbfe7dc0d8d7758a9e7738910ac826c60e->leave($__internal_b64350821f4480b8faae671d79567bbbfe7dc0d8d7758a9e7738910ac826c60e_prof);

        
        $__internal_ea7f22518f679b14f4bc714bd6dccda1baecf34236dc5910fb08ecb074fb94b8->leave($__internal_ea7f22518f679b14f4bc714bd6dccda1baecf34236dc5910fb08ecb074fb94b8_prof);

    }

    // line 241
    public function block_side_bar_nav($context, array $blocks = array())
    {
        $__internal_031067d973d39b01d569698a567c78eeed3d5c464a4f27e62df5c023c0b91d63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_031067d973d39b01d569698a567c78eeed3d5c464a4f27e62df5c023c0b91d63->enter($__internal_031067d973d39b01d569698a567c78eeed3d5c464a4f27e62df5c023c0b91d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        $__internal_7f6ff19f79efd216041c82428c25eb84a5789012d9c77354090de04c6a695980 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f6ff19f79efd216041c82428c25eb84a5789012d9c77354090de04c6a695980->enter($__internal_7f6ff19f79efd216041c82428c25eb84a5789012d9c77354090de04c6a695980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        // line 242
        echo "                                ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("sonata_admin_sidebar", array("template" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 242, $this->getSourceContext()); })()), "adminPool", array()), "getTemplate", array(0 => "knp_menu_template"), "method")));
        echo "
                            ";
        
        $__internal_7f6ff19f79efd216041c82428c25eb84a5789012d9c77354090de04c6a695980->leave($__internal_7f6ff19f79efd216041c82428c25eb84a5789012d9c77354090de04c6a695980_prof);

        
        $__internal_031067d973d39b01d569698a567c78eeed3d5c464a4f27e62df5c023c0b91d63->leave($__internal_031067d973d39b01d569698a567c78eeed3d5c464a4f27e62df5c023c0b91d63_prof);

    }

    // line 244
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        $__internal_9704d91619c531d4cf047dd83a4b6abab7f5f1fd987ac993d0e834de946d1d2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9704d91619c531d4cf047dd83a4b6abab7f5f1fd987ac993d0e834de946d1d2b->enter($__internal_9704d91619c531d4cf047dd83a4b6abab7f5f1fd987ac993d0e834de946d1d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        $__internal_9118cea8938445318cedd89ea5f07b1f6d37d9bbfc6f91aacf99e00203c571a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9118cea8938445318cedd89ea5f07b1f6d37d9bbfc6f91aacf99e00203c571a8->enter($__internal_9118cea8938445318cedd89ea5f07b1f6d37d9bbfc6f91aacf99e00203c571a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        // line 245
        echo "                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">
                                    ";
        // line 246
        $this->displayBlock('side_bar_after_nav_content', $context, $blocks);
        // line 249
        echo "                                </p>
                            ";
        
        $__internal_9118cea8938445318cedd89ea5f07b1f6d37d9bbfc6f91aacf99e00203c571a8->leave($__internal_9118cea8938445318cedd89ea5f07b1f6d37d9bbfc6f91aacf99e00203c571a8_prof);

        
        $__internal_9704d91619c531d4cf047dd83a4b6abab7f5f1fd987ac993d0e834de946d1d2b->leave($__internal_9704d91619c531d4cf047dd83a4b6abab7f5f1fd987ac993d0e834de946d1d2b_prof);

    }

    // line 246
    public function block_side_bar_after_nav_content($context, array $blocks = array())
    {
        $__internal_cc53571a236bb2e5d6bd16ee2ac07bb4867b68ca1b8acb344be86ed5436897ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc53571a236bb2e5d6bd16ee2ac07bb4867b68ca1b8acb344be86ed5436897ea->enter($__internal_cc53571a236bb2e5d6bd16ee2ac07bb4867b68ca1b8acb344be86ed5436897ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav_content"));

        $__internal_ea4ec70c4bab3c74f00d48413a3268586d8a6301fcf9e1ae4c2b83fc48857360 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea4ec70c4bab3c74f00d48413a3268586d8a6301fcf9e1ae4c2b83fc48857360->enter($__internal_ea4ec70c4bab3c74f00d48413a3268586d8a6301fcf9e1ae4c2b83fc48857360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav_content"));

        // line 247
        echo "                                        <a href=\"https://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a>
                                    ";
        
        $__internal_ea4ec70c4bab3c74f00d48413a3268586d8a6301fcf9e1ae4c2b83fc48857360->leave($__internal_ea4ec70c4bab3c74f00d48413a3268586d8a6301fcf9e1ae4c2b83fc48857360_prof);

        
        $__internal_cc53571a236bb2e5d6bd16ee2ac07bb4867b68ca1b8acb344be86ed5436897ea->leave($__internal_cc53571a236bb2e5d6bd16ee2ac07bb4867b68ca1b8acb344be86ed5436897ea_prof);

    }

    // line 257
    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_fee810486b5feaadef92432fdfd61ddfc6d36f6767cb4d5e43ecb1bc327fe758 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fee810486b5feaadef92432fdfd61ddfc6d36f6767cb4d5e43ecb1bc327fe758->enter($__internal_fee810486b5feaadef92432fdfd61ddfc6d36f6767cb4d5e43ecb1bc327fe758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        $__internal_13b5c9ca0a0f5b7746e744d3c5cca7e841cb651b37904bc06f7d99e591486205 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13b5c9ca0a0f5b7746e744d3c5cca7e841cb651b37904bc06f7d99e591486205->enter($__internal_13b5c9ca0a0f5b7746e744d3c5cca7e841cb651b37904bc06f7d99e591486205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 258
        echo "                    <section class=\"content-header\">

                        ";
        // line 260
        $this->displayBlock('sonata_page_content_header', $context, $blocks);
        // line 314
        echo "                    </section>

                    <section class=\"content\">
                        ";
        // line 317
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 351
        echo "                    </section>
                ";
        
        $__internal_13b5c9ca0a0f5b7746e744d3c5cca7e841cb651b37904bc06f7d99e591486205->leave($__internal_13b5c9ca0a0f5b7746e744d3c5cca7e841cb651b37904bc06f7d99e591486205_prof);

        
        $__internal_fee810486b5feaadef92432fdfd61ddfc6d36f6767cb4d5e43ecb1bc327fe758->leave($__internal_fee810486b5feaadef92432fdfd61ddfc6d36f6767cb4d5e43ecb1bc327fe758_prof);

    }

    // line 260
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        $__internal_48fff5980364da3ebba41f75bcecfc97d13baf856ddbb94cad9cc1cff327fa3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48fff5980364da3ebba41f75bcecfc97d13baf856ddbb94cad9cc1cff327fa3c->enter($__internal_48fff5980364da3ebba41f75bcecfc97d13baf856ddbb94cad9cc1cff327fa3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        $__internal_1d122bca87c69a4d2b6663741e8e6d01d6a820f4d8242e712c862c85be8b956a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d122bca87c69a4d2b6663741e8e6d01d6a820f4d8242e712c862c85be8b956a->enter($__internal_1d122bca87c69a4d2b6663741e8e6d01d6a820f4d8242e712c862c85be8b956a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        // line 261
        echo "                            ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 313
        echo "                        ";
        
        $__internal_1d122bca87c69a4d2b6663741e8e6d01d6a820f4d8242e712c862c85be8b956a->leave($__internal_1d122bca87c69a4d2b6663741e8e6d01d6a820f4d8242e712c862c85be8b956a_prof);

        
        $__internal_48fff5980364da3ebba41f75bcecfc97d13baf856ddbb94cad9cc1cff327fa3c->leave($__internal_48fff5980364da3ebba41f75bcecfc97d13baf856ddbb94cad9cc1cff327fa3c_prof);

    }

    // line 261
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        $__internal_ee725a730914dacd15870290cee72da6183b19dd63ba4d6d3e8398a0ab7cba89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee725a730914dacd15870290cee72da6183b19dd63ba4d6d3e8398a0ab7cba89->enter($__internal_ee725a730914dacd15870290cee72da6183b19dd63ba4d6d3e8398a0ab7cba89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        $__internal_aa6cfe8dc11f89f6cc46d4115e0fe0e5a1827d02d55421c4575f27f02d185ead = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa6cfe8dc11f89f6cc46d4115e0fe0e5a1827d02d55421c4575f27f02d185ead->enter($__internal_aa6cfe8dc11f89f6cc46d4115e0fe0e5a1827d02d55421c4575f27f02d185ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        // line 262
        echo "                                ";
        if ((( !twig_test_empty((isset($context["_tab_menu"]) || array_key_exists("_tab_menu", $context) ? $context["_tab_menu"] : (function () { throw new Twig_Error_Runtime('Variable "_tab_menu" does not exist.', 262, $this->getSourceContext()); })())) ||  !twig_test_empty((isset($context["_actions"]) || array_key_exists("_actions", $context) ? $context["_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_actions" does not exist.', 262, $this->getSourceContext()); })()))) ||  !twig_test_empty((isset($context["_list_filters_actions"]) || array_key_exists("_list_filters_actions", $context) ? $context["_list_filters_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_list_filters_actions" does not exist.', 262, $this->getSourceContext()); })())))) {
            // line 263
            echo "                                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                                        <div class=\"container-fluid\">
                                            ";
            // line 265
            $this->displayBlock('tab_menu_navbar_header', $context, $blocks);
            // line 272
            echo "
                                            <div class=\"navbar-collapse\">
                                                ";
            // line 274
            if ( !twig_test_empty((isset($context["_tab_menu"]) || array_key_exists("_tab_menu", $context) ? $context["_tab_menu"] : (function () { throw new Twig_Error_Runtime('Variable "_tab_menu" does not exist.', 274, $this->getSourceContext()); })()))) {
                // line 275
                echo "                                                    <div class=\"navbar-left\">
                                                        ";
                // line 276
                echo (isset($context["_tab_menu"]) || array_key_exists("_tab_menu", $context) ? $context["_tab_menu"] : (function () { throw new Twig_Error_Runtime('Variable "_tab_menu" does not exist.', 276, $this->getSourceContext()); })());
                echo "
                                                    </div>
                                                ";
            }
            // line 279
            echo "
                                                ";
            // line 280
            if ((((array_key_exists("admin", $context) && array_key_exists("action", $context)) && ((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 280, $this->getSourceContext()); })()) == "list")) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 280, $this->getSourceContext()); })()), "listModes", array())) > 1))) {
                // line 281
                echo "                                                    <div class=\"nav navbar-right btn-group\">
                                                        ";
                // line 282
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 282, $this->getSourceContext()); })()), "listModes", array()));
                foreach ($context['_seq'] as $context["mode"] => $context["settings"]) {
                    // line 283
                    echo "                                                            <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 283, $this->getSourceContext()); })()), "generateUrl", array(0 => "list", 1 => twig_array_merge(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 283, $this->getSourceContext()); })()), "request", array()), "query", array()), "all", array()), array("_list_mode" => $context["mode"]))), "method"), "html", null, true);
                    echo "\" class=\"btn btn-default navbar-btn btn-sm";
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 283, $this->getSourceContext()); })()), "getListMode", array(), "method") == $context["mode"])) {
                        echo " active";
                    }
                    echo "\"><i class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["settings"], "class", array()), "html", null, true);
                    echo "\"></i></a>
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['mode'], $context['settings'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 285
                echo "                                                    </div>
                                                ";
            }
            // line 287
            echo "
                                                ";
            // line 288
            $this->displayBlock('sonata_admin_content_actions_wrappers', $context, $blocks);
            // line 304
            echo "
                                                ";
            // line 305
            if ( !twig_test_empty((isset($context["_list_filters_actions"]) || array_key_exists("_list_filters_actions", $context) ? $context["_list_filters_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_list_filters_actions" does not exist.', 305, $this->getSourceContext()); })()))) {
                // line 306
                echo "                                                    ";
                echo (isset($context["_list_filters_actions"]) || array_key_exists("_list_filters_actions", $context) ? $context["_list_filters_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_list_filters_actions" does not exist.', 306, $this->getSourceContext()); })());
                echo "
                                                ";
            }
            // line 308
            echo "                                            </div>
                                        </div>
                                    </nav>
                                ";
        }
        // line 312
        echo "                            ";
        
        $__internal_aa6cfe8dc11f89f6cc46d4115e0fe0e5a1827d02d55421c4575f27f02d185ead->leave($__internal_aa6cfe8dc11f89f6cc46d4115e0fe0e5a1827d02d55421c4575f27f02d185ead_prof);

        
        $__internal_ee725a730914dacd15870290cee72da6183b19dd63ba4d6d3e8398a0ab7cba89->leave($__internal_ee725a730914dacd15870290cee72da6183b19dd63ba4d6d3e8398a0ab7cba89_prof);

    }

    // line 265
    public function block_tab_menu_navbar_header($context, array $blocks = array())
    {
        $__internal_67a2f9a65e47cff11c39f81e674fe4f74639d6eba2231f792a383cbc16471d1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67a2f9a65e47cff11c39f81e674fe4f74639d6eba2231f792a383cbc16471d1c->enter($__internal_67a2f9a65e47cff11c39f81e674fe4f74639d6eba2231f792a383cbc16471d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

        $__internal_c205a2a217b371ae6c517cd1b9fc69eb941559b749adf1700011bbdacb168be6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c205a2a217b371ae6c517cd1b9fc69eb941559b749adf1700011bbdacb168be6->enter($__internal_c205a2a217b371ae6c517cd1b9fc69eb941559b749adf1700011bbdacb168be6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

        // line 266
        echo "                                                ";
        if ( !twig_test_empty((isset($context["_navbar_title"]) || array_key_exists("_navbar_title", $context) ? $context["_navbar_title"] : (function () { throw new Twig_Error_Runtime('Variable "_navbar_title" does not exist.', 266, $this->getSourceContext()); })()))) {
            // line 267
            echo "                                                    <div class=\"navbar-header\">
                                                        <a class=\"navbar-brand\" href=\"#\">";
            // line 268
            echo (isset($context["_navbar_title"]) || array_key_exists("_navbar_title", $context) ? $context["_navbar_title"] : (function () { throw new Twig_Error_Runtime('Variable "_navbar_title" does not exist.', 268, $this->getSourceContext()); })());
            echo "</a>
                                                    </div>
                                                ";
        }
        // line 271
        echo "                                            ";
        
        $__internal_c205a2a217b371ae6c517cd1b9fc69eb941559b749adf1700011bbdacb168be6->leave($__internal_c205a2a217b371ae6c517cd1b9fc69eb941559b749adf1700011bbdacb168be6_prof);

        
        $__internal_67a2f9a65e47cff11c39f81e674fe4f74639d6eba2231f792a383cbc16471d1c->leave($__internal_67a2f9a65e47cff11c39f81e674fe4f74639d6eba2231f792a383cbc16471d1c_prof);

    }

    // line 288
    public function block_sonata_admin_content_actions_wrappers($context, array $blocks = array())
    {
        $__internal_ad5dba06bb3926b748921709f96d8dd8e31db7009381298224c5b11425d8add4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad5dba06bb3926b748921709f96d8dd8e31db7009381298224c5b11425d8add4->enter($__internal_ad5dba06bb3926b748921709f96d8dd8e31db7009381298224c5b11425d8add4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content_actions_wrappers"));

        $__internal_f8d5636c13110feca8da33a2a8ebcb0f8df0b52480d97b88e247f1c43385ac64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8d5636c13110feca8da33a2a8ebcb0f8df0b52480d97b88e247f1c43385ac64->enter($__internal_f8d5636c13110feca8da33a2a8ebcb0f8df0b52480d97b88e247f1c43385ac64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content_actions_wrappers"));

        // line 289
        echo "                                                    ";
        if ( !twig_test_empty(twig_trim_filter(twig_replace_filter((isset($context["_actions"]) || array_key_exists("_actions", $context) ? $context["_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_actions" does not exist.', 289, $this->getSourceContext()); })()), array("<li>" => "", "</li>" => ""))))) {
            // line 290
            echo "                                                        <ul class=\"nav navbar-nav navbar-right\">
                                                        ";
            // line 291
            if ((twig_length_filter($this->env, twig_split_filter($this->env, (isset($context["_actions"]) || array_key_exists("_actions", $context) ? $context["_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_actions" does not exist.', 291, $this->getSourceContext()); })()), "</a>")) > 2)) {
                // line 292
                echo "                                                            <li class=\"dropdown sonata-actions\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 293
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_actions", array(), "SonataAdminBundle"), "html", null, true);
                echo " <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                                    ";
                // line 295
                echo (isset($context["_actions"]) || array_key_exists("_actions", $context) ? $context["_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_actions" does not exist.', 295, $this->getSourceContext()); })());
                echo "
                                                                </ul>
                                                            </li>
                                                        ";
            } else {
                // line 299
                echo "                                                            ";
                echo (isset($context["_actions"]) || array_key_exists("_actions", $context) ? $context["_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_actions" does not exist.', 299, $this->getSourceContext()); })());
                echo "
                                                        ";
            }
            // line 301
            echo "                                                        </ul>
                                                    ";
        }
        // line 303
        echo "                                                ";
        
        $__internal_f8d5636c13110feca8da33a2a8ebcb0f8df0b52480d97b88e247f1c43385ac64->leave($__internal_f8d5636c13110feca8da33a2a8ebcb0f8df0b52480d97b88e247f1c43385ac64_prof);

        
        $__internal_ad5dba06bb3926b748921709f96d8dd8e31db7009381298224c5b11425d8add4->leave($__internal_ad5dba06bb3926b748921709f96d8dd8e31db7009381298224c5b11425d8add4_prof);

    }

    // line 317
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        $__internal_420039e7722df09fc0eafa2e6757519de33cff5df7a2f66922100a31e0a75270 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_420039e7722df09fc0eafa2e6757519de33cff5df7a2f66922100a31e0a75270->enter($__internal_420039e7722df09fc0eafa2e6757519de33cff5df7a2f66922100a31e0a75270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        $__internal_f8881ee70fe2ef55f6d0432c1e6a42e7eadabf7df9dc04fc7a1ffbe2e78fdf01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8881ee70fe2ef55f6d0432c1e6a42e7eadabf7df9dc04fc7a1ffbe2e78fdf01->enter($__internal_f8881ee70fe2ef55f6d0432c1e6a42e7eadabf7df9dc04fc7a1ffbe2e78fdf01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        // line 318
        echo "
                            ";
        // line 319
        $this->displayBlock('notice', $context, $blocks);
        // line 322
        echo "
                            ";
        // line 323
        if ( !twig_test_empty((isset($context["_preview"]) || array_key_exists("_preview", $context) ? $context["_preview"] : (function () { throw new Twig_Error_Runtime('Variable "_preview" does not exist.', 323, $this->getSourceContext()); })()))) {
            // line 324
            echo "                                <div class=\"sonata-ba-preview\">";
            echo (isset($context["_preview"]) || array_key_exists("_preview", $context) ? $context["_preview"] : (function () { throw new Twig_Error_Runtime('Variable "_preview" does not exist.', 324, $this->getSourceContext()); })());
            echo "</div>
                            ";
        }
        // line 326
        echo "
                            ";
        // line 327
        if ( !twig_test_empty((isset($context["_content"]) || array_key_exists("_content", $context) ? $context["_content"] : (function () { throw new Twig_Error_Runtime('Variable "_content" does not exist.', 327, $this->getSourceContext()); })()))) {
            // line 328
            echo "                                <div class=\"sonata-ba-content\">";
            echo (isset($context["_content"]) || array_key_exists("_content", $context) ? $context["_content"] : (function () { throw new Twig_Error_Runtime('Variable "_content" does not exist.', 328, $this->getSourceContext()); })());
            echo "</div>
                            ";
        }
        // line 330
        echo "
                            ";
        // line 331
        if ( !twig_test_empty((isset($context["_show"]) || array_key_exists("_show", $context) ? $context["_show"] : (function () { throw new Twig_Error_Runtime('Variable "_show" does not exist.', 331, $this->getSourceContext()); })()))) {
            // line 332
            echo "                                <div class=\"sonata-ba-show\">";
            echo (isset($context["_show"]) || array_key_exists("_show", $context) ? $context["_show"] : (function () { throw new Twig_Error_Runtime('Variable "_show" does not exist.', 332, $this->getSourceContext()); })());
            echo "</div>
                            ";
        }
        // line 334
        echo "
                            ";
        // line 335
        if ( !twig_test_empty((isset($context["_form"]) || array_key_exists("_form", $context) ? $context["_form"] : (function () { throw new Twig_Error_Runtime('Variable "_form" does not exist.', 335, $this->getSourceContext()); })()))) {
            // line 336
            echo "                                <div class=\"sonata-ba-form\">";
            echo (isset($context["_form"]) || array_key_exists("_form", $context) ? $context["_form"] : (function () { throw new Twig_Error_Runtime('Variable "_form" does not exist.', 336, $this->getSourceContext()); })());
            echo "</div>
                            ";
        }
        // line 338
        echo "
                            ";
        // line 339
        if ( !twig_test_empty((isset($context["_list_filters"]) || array_key_exists("_list_filters", $context) ? $context["_list_filters"] : (function () { throw new Twig_Error_Runtime('Variable "_list_filters" does not exist.', 339, $this->getSourceContext()); })()))) {
            // line 340
            echo "                                <div class=\"row\">
                                    ";
            // line 341
            echo (isset($context["_list_filters"]) || array_key_exists("_list_filters", $context) ? $context["_list_filters"] : (function () { throw new Twig_Error_Runtime('Variable "_list_filters" does not exist.', 341, $this->getSourceContext()); })());
            echo "
                                </div>
                            ";
        }
        // line 344
        echo "
                            ";
        // line 345
        if ( !twig_test_empty((isset($context["_list_table"]) || array_key_exists("_list_table", $context) ? $context["_list_table"] : (function () { throw new Twig_Error_Runtime('Variable "_list_table" does not exist.', 345, $this->getSourceContext()); })()))) {
            // line 346
            echo "                                <div class=\"row\">
                                    ";
            // line 347
            echo (isset($context["_list_table"]) || array_key_exists("_list_table", $context) ? $context["_list_table"] : (function () { throw new Twig_Error_Runtime('Variable "_list_table" does not exist.', 347, $this->getSourceContext()); })());
            echo "
                                </div>
                            ";
        }
        // line 350
        echo "                        ";
        
        $__internal_f8881ee70fe2ef55f6d0432c1e6a42e7eadabf7df9dc04fc7a1ffbe2e78fdf01->leave($__internal_f8881ee70fe2ef55f6d0432c1e6a42e7eadabf7df9dc04fc7a1ffbe2e78fdf01_prof);

        
        $__internal_420039e7722df09fc0eafa2e6757519de33cff5df7a2f66922100a31e0a75270->leave($__internal_420039e7722df09fc0eafa2e6757519de33cff5df7a2f66922100a31e0a75270_prof);

    }

    // line 319
    public function block_notice($context, array $blocks = array())
    {
        $__internal_e868b6cac4ef9318c0f6394d670600680948b031621752b513b7aab6cdf9af26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e868b6cac4ef9318c0f6394d670600680948b031621752b513b7aab6cdf9af26->enter($__internal_e868b6cac4ef9318c0f6394d670600680948b031621752b513b7aab6cdf9af26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        $__internal_a4eb636b26bca3b0a59b3466f775346da2a45a627a0501fb68b579ffc9f2bad3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4eb636b26bca3b0a59b3466f775346da2a45a627a0501fb68b579ffc9f2bad3->enter($__internal_a4eb636b26bca3b0a59b3466f775346da2a45a627a0501fb68b579ffc9f2bad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        // line 320
        echo "                                ";
        $this->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig", "SonataAdminBundle::standard_layout.html.twig", 320)->display($context);
        // line 321
        echo "                            ";
        
        $__internal_a4eb636b26bca3b0a59b3466f775346da2a45a627a0501fb68b579ffc9f2bad3->leave($__internal_a4eb636b26bca3b0a59b3466f775346da2a45a627a0501fb68b579ffc9f2bad3_prof);

        
        $__internal_e868b6cac4ef9318c0f6394d670600680948b031621752b513b7aab6cdf9af26->leave($__internal_e868b6cac4ef9318c0f6394d670600680948b031621752b513b7aab6cdf9af26_prof);

    }

    // line 358
    public function block_bootlint($context, array $blocks = array())
    {
        $__internal_e1f9f578e6cf11532f84e38209bbef8ed3f3e306168be8279ad66eeca4939346 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1f9f578e6cf11532f84e38209bbef8ed3f3e306168be8279ad66eeca4939346->enter($__internal_e1f9f578e6cf11532f84e38209bbef8ed3f3e306168be8279ad66eeca4939346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootlint"));

        $__internal_686187ee00ce8f9645099d6cdb06e1cb79509dbb817417ee6a905c3487e2f9be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_686187ee00ce8f9645099d6cdb06e1cb79509dbb817417ee6a905c3487e2f9be->enter($__internal_686187ee00ce8f9645099d6cdb06e1cb79509dbb817417ee6a905c3487e2f9be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootlint"));

        // line 359
        echo "            ";
        // line 360
        echo "            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        ";
        
        $__internal_686187ee00ce8f9645099d6cdb06e1cb79509dbb817417ee6a905c3487e2f9be->leave($__internal_686187ee00ce8f9645099d6cdb06e1cb79509dbb817417ee6a905c3487e2f9be_prof);

        
        $__internal_e1f9f578e6cf11532f84e38209bbef8ed3f3e306168be8279ad66eeca4939346->leave($__internal_e1f9f578e6cf11532f84e38209bbef8ed3f3e306168be8279ad66eeca4939346_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1458 => 360,  1456 => 359,  1447 => 358,  1437 => 321,  1434 => 320,  1425 => 319,  1415 => 350,  1409 => 347,  1406 => 346,  1404 => 345,  1401 => 344,  1395 => 341,  1392 => 340,  1390 => 339,  1387 => 338,  1381 => 336,  1379 => 335,  1376 => 334,  1370 => 332,  1368 => 331,  1365 => 330,  1359 => 328,  1357 => 327,  1354 => 326,  1348 => 324,  1346 => 323,  1343 => 322,  1341 => 319,  1338 => 318,  1329 => 317,  1319 => 303,  1315 => 301,  1309 => 299,  1302 => 295,  1297 => 293,  1294 => 292,  1292 => 291,  1289 => 290,  1286 => 289,  1277 => 288,  1267 => 271,  1261 => 268,  1258 => 267,  1255 => 266,  1246 => 265,  1236 => 312,  1230 => 308,  1224 => 306,  1222 => 305,  1219 => 304,  1217 => 288,  1214 => 287,  1210 => 285,  1195 => 283,  1191 => 282,  1188 => 281,  1186 => 280,  1183 => 279,  1177 => 276,  1174 => 275,  1172 => 274,  1168 => 272,  1166 => 265,  1162 => 263,  1159 => 262,  1150 => 261,  1140 => 313,  1137 => 261,  1128 => 260,  1117 => 351,  1115 => 317,  1110 => 314,  1108 => 260,  1104 => 258,  1095 => 257,  1084 => 247,  1075 => 246,  1064 => 249,  1062 => 246,  1059 => 245,  1050 => 244,  1037 => 242,  1028 => 241,  1010 => 240,  989 => 230,  983 => 228,  974 => 227,  964 => 251,  961 => 244,  958 => 241,  956 => 240,  953 => 239,  950 => 227,  941 => 226,  929 => 252,  927 => 226,  923 => 224,  914 => 223,  903 => 353,  901 => 257,  897 => 255,  894 => 223,  885 => 222,  873 => 210,  871 => 209,  864 => 204,  855 => 203,  844 => 201,  842 => 200,  836 => 196,  827 => 195,  817 => 216,  812 => 213,  809 => 203,  807 => 195,  803 => 193,  800 => 192,  791 => 191,  780 => 187,  776 => 185,  770 => 183,  767 => 182,  764 => 181,  750 => 180,  744 => 178,  740 => 176,  734 => 174,  730 => 172,  727 => 170,  724 => 168,  722 => 167,  717 => 166,  715 => 165,  712 => 164,  710 => 163,  707 => 160,  705 => 159,  703 => 158,  701 => 157,  683 => 156,  680 => 155,  678 => 154,  675 => 153,  673 => 152,  670 => 151,  661 => 150,  650 => 217,  648 => 191,  644 => 189,  642 => 150,  634 => 144,  625 => 143,  615 => 142,  611 => 140,  605 => 138,  602 => 137,  594 => 135,  592 => 134,  587 => 133,  584 => 132,  575 => 131,  561 => 127,  557 => 125,  548 => 124,  537 => 219,  534 => 143,  531 => 131,  529 => 124,  526 => 123,  517 => 122,  499 => 118,  489 => 115,  486 => 114,  483 => 113,  469 => 112,  464 => 110,  461 => 107,  459 => 106,  457 => 105,  455 => 104,  451 => 101,  448 => 100,  445 => 99,  428 => 98,  425 => 97,  422 => 96,  416 => 94,  414 => 93,  408 => 91,  399 => 90,  389 => 66,  380 => 64,  375 => 63,  366 => 62,  345 => 50,  341 => 48,  335 => 47,  327 => 46,  319 => 45,  311 => 44,  307 => 42,  298 => 41,  288 => 87,  285 => 86,  279 => 84,  276 => 83,  273 => 81,  268 => 80,  265 => 79,  262 => 77,  258 => 75,  256 => 73,  254 => 71,  251 => 70,  249 => 69,  247 => 68,  244 => 67,  242 => 62,  239 => 61,  236 => 41,  227 => 40,  217 => 38,  208 => 36,  203 => 35,  194 => 34,  181 => 29,  172 => 28,  154 => 26,  141 => 365,  138 => 364,  135 => 358,  133 => 357,  129 => 355,  127 => 222,  124 => 221,  122 => 122,  115 => 118,  111 => 116,  109 => 90,  105 => 88,  103 => 40,  100 => 39,  98 => 34,  95 => 33,  93 => 28,  88 => 26,  84 => 24,  82 => 23,  80 => 22,  78 => 21,  76 => 20,  74 => 19,  72 => 18,  70 => 17,  68 => 16,  66 => 15,  64 => 14,  62 => 13,  60 => 12,  57 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% set _preview = block('preview') is defined ? block('preview')|trim : null %}
{% set _form = block('form') is defined ? block('form')|trim : null %}
{% set _show = block('show') is defined ? block('show')|trim : null %}
{% set _list_table = block('list_table') is defined ? block('list_table')|trim : null %}
{% set _list_filters = block('list_filters') is defined ? block('list_filters')|trim : null %}
{% set _tab_menu = block('tab_menu') is defined ? block('tab_menu')|trim : null %}
{% set _content = block('content') is defined ? block('content')|trim : null %}
{% set _title = block('title') is defined ? block('title')|trim : null %}
{% set _breadcrumb = block('breadcrumb') is defined ? block('breadcrumb')|trim : null %}
{% set _actions = block('actions') is defined ? block('actions')|trim : null %}
{% set _navbar_title = block('navbar_title') is defined ? block('navbar_title')|trim : null %}
{% set _list_filters_actions = block('list_filters_actions') is defined ? block('list_filters_actions')|trim : null %}

<!DOCTYPE html>
<html {% block html_attributes %}class=\"no-js\"{% endblock %}>
    <head>
        {% block meta_tags %}
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        {% endblock %}

        {% block stylesheets %}
            {% for stylesheet in sonata_admin.adminPool.getOption('stylesheets', []) %}
                <link rel=\"stylesheet\" href=\"{{ asset(stylesheet) }}\">
            {% endfor %}
        {% endblock %}

        {% block javascripts %}
            {% block sonata_javascript_config %}
                <script>
                    window.SONATA_CONFIG = {
                        CONFIRM_EXIT: {% if sonata_admin.adminPool.getOption('confirm_exit') %}true{% else %}false{% endif %},
                        USE_SELECT2: {% if sonata_admin.adminPool.getOption('use_select2') %}true{% else %}false{% endif %},
                        USE_ICHECK: {% if sonata_admin.adminPool.getOption('use_icheck') %}true{% else %}false{% endif %},
                        USE_STICKYFORMS: {% if sonata_admin.adminPool.getOption('use_stickyforms') %}true{% else %}false{% endif %}
                    };
                    window.SONATA_TRANSLATIONS = {
                        CONFIRM_EXIT: '{{ 'confirm_exit'|trans({}, 'SonataAdminBundle')|escape('js') }}'
                    };

                    // http://getbootstrap.com/getting-started/#support-ie10-width
                    if (navigator.userAgent.match(/IEMobile\\/10\\.0/)) {
                        var msViewportStyle = document.createElement('style');
                        msViewportStyle.appendChild(document.createTextNode('@-ms-viewport{width:auto!important}'));
                        document.querySelector('head').appendChild(msViewportStyle);
                    }
                </script>
            {% endblock %}

            {% block sonata_javascript_pool %}
                {% for javascript in sonata_admin.adminPool.getOption('javascripts', []) %}
                    <script src=\"{{ asset(javascript) }}\"></script>
                {% endfor %}
            {% endblock %}

            {% set locale = app.request.locale %}
            {# localize moment #}
            {% if locale[:2] != 'en' %}
                <script src=\"{{ asset(
                    'bundles/sonatacore/vendor/moment/locale/' ~
                    locale|lower|replace({'_':'-'}) ~
                    '.js'
                ) }}\"></script>
            {% endif %}

            {# localize select2 #}
            {% if sonata_admin.adminPool.getOption('use_select2') %}
                {% if locale == 'pt' %}{% set locale = 'pt_PT' %}{% endif %}

                {# omit default EN locale #}
                {% if locale[:2] != 'en' %}
                    <script src=\"{{ asset('bundles/sonatacore/vendor/select2/select2_locale_' ~ locale|replace({'_':'-'}) ~ '.js') }}\"></script>
                {% endif %}
            {% endif %}
        {% endblock %}

        <title>
        {% block sonata_head_title %}
            {{ 'Admin'|trans({}, 'SonataAdminBundle') }}

            {% if _title is not empty %}
                {{ _title|raw }}
            {% else %}
                {% if action is defined %}
                    -
                    {% for menu in breadcrumbs_builder.breadcrumbs(admin, action) %}
                        {% if not loop.first %}
                            {% if loop.index != 2 %}
                                &gt;
                            {% endif %}

                            {%- set translation_domain = menu.extra('translation_domain', 'messages') -%}
                            {%- set label = menu.label -%}
                            {%- if translation_domain is not same as(false) -%}
                                {%- set label = label|trans(menu.extra('translation_params', {}), translation_domain) -%}
                            {%- endif -%}

                            {{ label }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endif %}
        {% endblock %}
        </title>
    </head>
    <body {% block body_attributes %}class=\"sonata-bc skin-black fixed\"{% endblock %}>

    <div class=\"wrapper\">

        {% block sonata_header %}
            <header class=\"main-header\">
                {% block sonata_header_noscript_warning %}
                    <noscript>
                        <div class=\"noscript-warning\">
                            {{ 'noscript_warning'|trans({}, 'SonataAdminBundle') }}
                        </div>
                    </noscript>
                {% endblock %}
                {% block logo %}
                    {% spaceless %}
                        <a class=\"logo\" href=\"{{ path('sonata_admin_dashboard') }}\">
                            {% if 'single_image' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}
                                <img src=\"{{ asset(sonata_admin.adminPool.titlelogo) }}\" alt=\"{{ sonata_admin.adminPool.title }}\">
                            {% endif %}
                            {% if 'single_text' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}
                                <span>{{ sonata_admin.adminPool.title }}</span>
                            {% endif %}
                        </a>
                    {% endspaceless %}
                {% endblock %}
                {% block sonata_nav %}
                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                        </a>

                        <div class=\"navbar-left\">
                            {% block sonata_breadcrumb %}
                                <div class=\"hidden-xs\">
                                    {% if _breadcrumb is not empty or action is defined %}
                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            {% if _breadcrumb is empty %}
                                                {% if action is defined %}
                                                    {% for menu in breadcrumbs_builder.breadcrumbs(admin, action) %}
                                                        {%- set translation_domain = menu.extra('translation_domain', 'messages') -%}
                                                        {%- set label = menu.label -%}
                                                        {%- if translation_domain is not same as(false) -%}
                                                            {%- set label = label|trans(menu.extra('translation_params', {}), translation_domain) -%}
                                                        {%- endif -%}

                                                        {% if not loop.last %}
                                                            <li>
                                                                {% if menu.uri is not empty %}
                                                                    <a href=\"{{ menu.uri }}\">
                                                                        {% if menu.extra('safe_label', true) %}
                                                                            {{- label|raw -}}
                                                                        {% else %}
                                                                            {{- label -}}
                                                                        {% endif %}
                                                                    </a>
                                                                {% else %}
                                                                    <span>{{ label }}</span>
                                                                {% endif %}
                                                            </li>
                                                        {% else %}
                                                            <li class=\"active\"><span>{{ label }}</span></li>
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endif %}
                                            {% else %}
                                                {{ _breadcrumb|raw }}
                                            {% endif %}
                                        </ol>
                                    {% endif %}
                                </div>
                            {% endblock sonata_breadcrumb %}
                        </div>

                        {% block sonata_top_nav_menu %}
                            {% if app.user and is_granted('ROLE_SONATA_ADMIN') %}
                                <div class=\"navbar-custom-menu\">
                                    <ul class=\"nav navbar-nav\">
                                        {% block sonata_top_nav_menu_add_block %}
                                            <li class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-plus-square fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                {% include sonata_admin.adminPool.getTemplate('add_block') %}
                                            </li>
                                        {% endblock %}
                                        {% block sonata_top_nav_menu_user_block %}
                                            <li class=\"dropdown user-menu\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                <ul class=\"dropdown-menu dropdown-user\">
                                                    {% include sonata_admin.adminPool.getTemplate('user_block') %}
                                                </ul>
                                            </li>
                                        {% endblock %}
                                    </ul>
                                </div>
                            {% endif %}
                        {% endblock %}
                    </nav>
                {% endblock sonata_nav %}
            </header>
        {% endblock sonata_header %}

        {% block sonata_wrapper %}
            {% block sonata_left_side %}
                <aside class=\"main-sidebar\">
                    <section class=\"sidebar\">
                        {% block sonata_side_nav %}
                            {% block sonata_sidebar_search %}
                                <form action=\"{{ path('sonata_admin_search') }}\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                    <div class=\"input-group custom-search-form\">
                                        <input type=\"text\" name=\"q\" value=\"{{ app.request.get('q') }}\" class=\"form-control\" placeholder=\"{{ 'search_placeholder'|trans({}, 'SonataAdminBundle') }}\">
                                        <span class=\"input-group-btn\">
                                            <button class=\"btn btn-flat\" type=\"submit\">
                                                <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            {% endblock sonata_sidebar_search %}

                            {% block side_bar_before_nav %} {% endblock %}
                            {% block side_bar_nav %}
                                {{ knp_menu_render('sonata_admin_sidebar', {template: sonata_admin.adminPool.getTemplate('knp_menu_template')}) }}
                            {% endblock side_bar_nav %}
                            {% block side_bar_after_nav %}
                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">
                                    {% block side_bar_after_nav_content %}
                                        <a href=\"https://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a>
                                    {% endblock %}
                                </p>
                            {% endblock %}
                        {% endblock sonata_side_nav %}
                    </section>
                </aside>
            {% endblock sonata_left_side %}

            <div class=\"content-wrapper\">
                {% block sonata_page_content %}
                    <section class=\"content-header\">

                        {% block sonata_page_content_header %}
                            {% block sonata_page_content_nav %}
                                {% if _tab_menu is not empty or _actions is not empty or _list_filters_actions is not empty %}
                                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                                        <div class=\"container-fluid\">
                                            {% block tab_menu_navbar_header %}
                                                {% if _navbar_title is not empty %}
                                                    <div class=\"navbar-header\">
                                                        <a class=\"navbar-brand\" href=\"#\">{{ _navbar_title|raw }}</a>
                                                    </div>
                                                {% endif %}
                                            {% endblock %}

                                            <div class=\"navbar-collapse\">
                                                {% if _tab_menu is not empty %}
                                                    <div class=\"navbar-left\">
                                                        {{ _tab_menu|raw }}
                                                    </div>
                                                {% endif %}

                                                {% if admin is defined and action is defined and action == 'list' and admin.listModes|length > 1 %}
                                                    <div class=\"nav navbar-right btn-group\">
                                                        {% for mode, settings in admin.listModes %}
                                                            <a href=\"{{ admin.generateUrl('list', app.request.query.all|merge({_list_mode: mode})) }}\" class=\"btn btn-default navbar-btn btn-sm{% if admin.getListMode() == mode %} active{% endif %}\"><i class=\"{{ settings.class }}\"></i></a>
                                                        {% endfor %}
                                                    </div>
                                                {% endif %}

                                                {% block sonata_admin_content_actions_wrappers %}
                                                    {% if _actions|replace({ '<li>': '', '</li>': '' })|trim is not empty %}
                                                        <ul class=\"nav navbar-nav navbar-right\">
                                                        {% if _actions|split('</a>')|length > 2 %}
                                                            <li class=\"dropdown sonata-actions\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">{{ 'link_actions'|trans({}, 'SonataAdminBundle') }} <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                                    {{ _actions|raw }}
                                                                </ul>
                                                            </li>
                                                        {% else %}
                                                            {{ _actions|raw }}
                                                        {% endif %}
                                                        </ul>
                                                    {% endif %}
                                                {% endblock sonata_admin_content_actions_wrappers %}

                                                {% if _list_filters_actions is not empty %}
                                                    {{ _list_filters_actions|raw }}
                                                {% endif %}
                                            </div>
                                        </div>
                                    </nav>
                                {% endif %}
                            {% endblock sonata_page_content_nav %}
                        {% endblock sonata_page_content_header %}
                    </section>

                    <section class=\"content\">
                        {% block sonata_admin_content %}

                            {% block notice %}
                                {% include 'SonataCoreBundle:FlashMessage:render.html.twig' %}
                            {% endblock notice %}

                            {% if _preview is not empty %}
                                <div class=\"sonata-ba-preview\">{{ _preview|raw }}</div>
                            {% endif %}

                            {% if _content is not empty %}
                                <div class=\"sonata-ba-content\">{{ _content|raw }}</div>
                            {% endif %}

                            {% if _show is not empty %}
                                <div class=\"sonata-ba-show\">{{ _show|raw }}</div>
                            {% endif %}

                            {% if _form is not empty %}
                                <div class=\"sonata-ba-form\">{{ _form|raw }}</div>
                            {% endif %}

                            {% if _list_filters is not empty %}
                                <div class=\"row\">
                                    {{ _list_filters|raw }}
                                </div>
                            {% endif %}

                            {% if _list_table is not empty %}
                                <div class=\"row\">
                                    {{ _list_table|raw }}
                                </div>
                            {% endif %}
                        {% endblock sonata_admin_content %}
                    </section>
                {% endblock sonata_page_content %}
            </div>
        {% endblock sonata_wrapper %}
    </div>

    {% if sonata_admin.adminPool.getOption('use_bootlint') %}
        {% block bootlint %}
            {# Bootlint - https://github.com/twbs/bootlint#in-the-browser #}
            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        {% endblock %}
    {% endif %}

    </body>
</html>
", "SonataAdminBundle::standard_layout.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/standard_layout.html.twig");
    }
}

<?php

/* SonataAdminBundle::standard_layout.html.twig */
class __TwigTemplate_7bbeb6403b61d73ed7cd8b648fad0df474fe2bb273f0679b5eb81413ef92c81c extends Twig_Template
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
        $__internal_043a90fdc50c15686af384ef5a2242c67bcbd74f9769c123d219edb647876e3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_043a90fdc50c15686af384ef5a2242c67bcbd74f9769c123d219edb647876e3e->enter($__internal_043a90fdc50c15686af384ef5a2242c67bcbd74f9769c123d219edb647876e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::standard_layout.html.twig"));

        $__internal_77f4fd2e34eca7d3b8f42bee3dff058ac305fd842e38a340edaefb8feb50743f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77f4fd2e34eca7d3b8f42bee3dff058ac305fd842e38a340edaefb8feb50743f->enter($__internal_77f4fd2e34eca7d3b8f42bee3dff058ac305fd842e38a340edaefb8feb50743f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::standard_layout.html.twig"));

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
        
        $__internal_043a90fdc50c15686af384ef5a2242c67bcbd74f9769c123d219edb647876e3e->leave($__internal_043a90fdc50c15686af384ef5a2242c67bcbd74f9769c123d219edb647876e3e_prof);

        
        $__internal_77f4fd2e34eca7d3b8f42bee3dff058ac305fd842e38a340edaefb8feb50743f->leave($__internal_77f4fd2e34eca7d3b8f42bee3dff058ac305fd842e38a340edaefb8feb50743f_prof);

    }

    // line 26
    public function block_html_attributes($context, array $blocks = array())
    {
        $__internal_a7874ea054aafc7d180124e9128ddd8bb532f0c11e4ddc1afee59ea9f6c639fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7874ea054aafc7d180124e9128ddd8bb532f0c11e4ddc1afee59ea9f6c639fc->enter($__internal_a7874ea054aafc7d180124e9128ddd8bb532f0c11e4ddc1afee59ea9f6c639fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        $__internal_f86a111607af898326bc3f684a3239334da60f4f4b64e2268d914cbe09d7e2b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f86a111607af898326bc3f684a3239334da60f4f4b64e2268d914cbe09d7e2b6->enter($__internal_f86a111607af898326bc3f684a3239334da60f4f4b64e2268d914cbe09d7e2b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        echo "class=\"no-js\"";
        
        $__internal_f86a111607af898326bc3f684a3239334da60f4f4b64e2268d914cbe09d7e2b6->leave($__internal_f86a111607af898326bc3f684a3239334da60f4f4b64e2268d914cbe09d7e2b6_prof);

        
        $__internal_a7874ea054aafc7d180124e9128ddd8bb532f0c11e4ddc1afee59ea9f6c639fc->leave($__internal_a7874ea054aafc7d180124e9128ddd8bb532f0c11e4ddc1afee59ea9f6c639fc_prof);

    }

    // line 28
    public function block_meta_tags($context, array $blocks = array())
    {
        $__internal_dfb026cdb5e4e515025f238f22b72b17f66f290f4bab33157ee79a00ba9556e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfb026cdb5e4e515025f238f22b72b17f66f290f4bab33157ee79a00ba9556e0->enter($__internal_dfb026cdb5e4e515025f238f22b72b17f66f290f4bab33157ee79a00ba9556e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        $__internal_fab3907746eb2fe85fd62cb70be6a8109952517a8c373afcc680d628964946a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fab3907746eb2fe85fd62cb70be6a8109952517a8c373afcc680d628964946a5->enter($__internal_fab3907746eb2fe85fd62cb70be6a8109952517a8c373afcc680d628964946a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        // line 29
        echo "            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        ";
        
        $__internal_fab3907746eb2fe85fd62cb70be6a8109952517a8c373afcc680d628964946a5->leave($__internal_fab3907746eb2fe85fd62cb70be6a8109952517a8c373afcc680d628964946a5_prof);

        
        $__internal_dfb026cdb5e4e515025f238f22b72b17f66f290f4bab33157ee79a00ba9556e0->leave($__internal_dfb026cdb5e4e515025f238f22b72b17f66f290f4bab33157ee79a00ba9556e0_prof);

    }

    // line 34
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_95dce6cc20306a1045377f64c7589fd2c3361f9172d10e6f1064bbe23ce5d87b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95dce6cc20306a1045377f64c7589fd2c3361f9172d10e6f1064bbe23ce5d87b->enter($__internal_95dce6cc20306a1045377f64c7589fd2c3361f9172d10e6f1064bbe23ce5d87b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a5ac74fea7a9edab38be4e1d8457e1af722a16c865852168f5973132f93ba30b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5ac74fea7a9edab38be4e1d8457e1af722a16c865852168f5973132f93ba30b->enter($__internal_a5ac74fea7a9edab38be4e1d8457e1af722a16c865852168f5973132f93ba30b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_a5ac74fea7a9edab38be4e1d8457e1af722a16c865852168f5973132f93ba30b->leave($__internal_a5ac74fea7a9edab38be4e1d8457e1af722a16c865852168f5973132f93ba30b_prof);

        
        $__internal_95dce6cc20306a1045377f64c7589fd2c3361f9172d10e6f1064bbe23ce5d87b->leave($__internal_95dce6cc20306a1045377f64c7589fd2c3361f9172d10e6f1064bbe23ce5d87b_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7059407e9c5f5b5631c7d8d388cf4d69b62dc54054f73f94045308050d0b5b52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7059407e9c5f5b5631c7d8d388cf4d69b62dc54054f73f94045308050d0b5b52->enter($__internal_7059407e9c5f5b5631c7d8d388cf4d69b62dc54054f73f94045308050d0b5b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5892b141bc1772892ef5458059d18be0ace254b628429289507a8f0ab8235671 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5892b141bc1772892ef5458059d18be0ace254b628429289507a8f0ab8235671->enter($__internal_5892b141bc1772892ef5458059d18be0ace254b628429289507a8f0ab8235671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_5892b141bc1772892ef5458059d18be0ace254b628429289507a8f0ab8235671->leave($__internal_5892b141bc1772892ef5458059d18be0ace254b628429289507a8f0ab8235671_prof);

        
        $__internal_7059407e9c5f5b5631c7d8d388cf4d69b62dc54054f73f94045308050d0b5b52->leave($__internal_7059407e9c5f5b5631c7d8d388cf4d69b62dc54054f73f94045308050d0b5b52_prof);

    }

    // line 41
    public function block_sonata_javascript_config($context, array $blocks = array())
    {
        $__internal_b539158ab5fc065a4c55bd169bc4e9c3a2731adf89e645f161ded625daf0a221 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b539158ab5fc065a4c55bd169bc4e9c3a2731adf89e645f161ded625daf0a221->enter($__internal_b539158ab5fc065a4c55bd169bc4e9c3a2731adf89e645f161ded625daf0a221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_config"));

        $__internal_23500b798cedcdd6f4ac85ee4ad1a6c88e30591ef7e1e51f637fdb63bfec600b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23500b798cedcdd6f4ac85ee4ad1a6c88e30591ef7e1e51f637fdb63bfec600b->enter($__internal_23500b798cedcdd6f4ac85ee4ad1a6c88e30591ef7e1e51f637fdb63bfec600b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_config"));

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
        
        $__internal_23500b798cedcdd6f4ac85ee4ad1a6c88e30591ef7e1e51f637fdb63bfec600b->leave($__internal_23500b798cedcdd6f4ac85ee4ad1a6c88e30591ef7e1e51f637fdb63bfec600b_prof);

        
        $__internal_b539158ab5fc065a4c55bd169bc4e9c3a2731adf89e645f161ded625daf0a221->leave($__internal_b539158ab5fc065a4c55bd169bc4e9c3a2731adf89e645f161ded625daf0a221_prof);

    }

    // line 62
    public function block_sonata_javascript_pool($context, array $blocks = array())
    {
        $__internal_bc9e36f98f20ac755aed040cbe7b9b3c519379afa01fe74cdb98482d8d99f0ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc9e36f98f20ac755aed040cbe7b9b3c519379afa01fe74cdb98482d8d99f0ab->enter($__internal_bc9e36f98f20ac755aed040cbe7b9b3c519379afa01fe74cdb98482d8d99f0ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_pool"));

        $__internal_79041803ace91bf39a5a79193380488709a1d75d48ce5d99dd59a09e35695877 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79041803ace91bf39a5a79193380488709a1d75d48ce5d99dd59a09e35695877->enter($__internal_79041803ace91bf39a5a79193380488709a1d75d48ce5d99dd59a09e35695877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_pool"));

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
        
        $__internal_79041803ace91bf39a5a79193380488709a1d75d48ce5d99dd59a09e35695877->leave($__internal_79041803ace91bf39a5a79193380488709a1d75d48ce5d99dd59a09e35695877_prof);

        
        $__internal_bc9e36f98f20ac755aed040cbe7b9b3c519379afa01fe74cdb98482d8d99f0ab->leave($__internal_bc9e36f98f20ac755aed040cbe7b9b3c519379afa01fe74cdb98482d8d99f0ab_prof);

    }

    // line 90
    public function block_sonata_head_title($context, array $blocks = array())
    {
        $__internal_31396cd2964f7dfb8340cc7e2d693fbcff9531ebd0d550121ecfc00dc6d6e6e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31396cd2964f7dfb8340cc7e2d693fbcff9531ebd0d550121ecfc00dc6d6e6e7->enter($__internal_31396cd2964f7dfb8340cc7e2d693fbcff9531ebd0d550121ecfc00dc6d6e6e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

        $__internal_e2d8d255fe66bd6a6d5536ad0f7e1fb39afa05a39ad026af9c27e5195590d17d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2d8d255fe66bd6a6d5536ad0f7e1fb39afa05a39ad026af9c27e5195590d17d->enter($__internal_e2d8d255fe66bd6a6d5536ad0f7e1fb39afa05a39ad026af9c27e5195590d17d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

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
        
        $__internal_e2d8d255fe66bd6a6d5536ad0f7e1fb39afa05a39ad026af9c27e5195590d17d->leave($__internal_e2d8d255fe66bd6a6d5536ad0f7e1fb39afa05a39ad026af9c27e5195590d17d_prof);

        
        $__internal_31396cd2964f7dfb8340cc7e2d693fbcff9531ebd0d550121ecfc00dc6d6e6e7->leave($__internal_31396cd2964f7dfb8340cc7e2d693fbcff9531ebd0d550121ecfc00dc6d6e6e7_prof);

    }

    // line 118
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_729837a8f7041e10de56f9c5caf9d7e2b2d5dad6d190a72bfc37b50280d4c642 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_729837a8f7041e10de56f9c5caf9d7e2b2d5dad6d190a72bfc37b50280d4c642->enter($__internal_729837a8f7041e10de56f9c5caf9d7e2b2d5dad6d190a72bfc37b50280d4c642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        $__internal_f4eeab6eb6cc4882b126b84ba956a56dd1c158e1575096e8dd13dd143d27aafe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4eeab6eb6cc4882b126b84ba956a56dd1c158e1575096e8dd13dd143d27aafe->enter($__internal_f4eeab6eb6cc4882b126b84ba956a56dd1c158e1575096e8dd13dd143d27aafe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc skin-black fixed\"";
        
        $__internal_f4eeab6eb6cc4882b126b84ba956a56dd1c158e1575096e8dd13dd143d27aafe->leave($__internal_f4eeab6eb6cc4882b126b84ba956a56dd1c158e1575096e8dd13dd143d27aafe_prof);

        
        $__internal_729837a8f7041e10de56f9c5caf9d7e2b2d5dad6d190a72bfc37b50280d4c642->leave($__internal_729837a8f7041e10de56f9c5caf9d7e2b2d5dad6d190a72bfc37b50280d4c642_prof);

    }

    // line 122
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_2f5c7aae9dfe603277ab78201b2dc39f7c3db16d052bfdea5911b5cb71e1eff8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f5c7aae9dfe603277ab78201b2dc39f7c3db16d052bfdea5911b5cb71e1eff8->enter($__internal_2f5c7aae9dfe603277ab78201b2dc39f7c3db16d052bfdea5911b5cb71e1eff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        $__internal_5483f2b136dccb02736773d0674458bc5b62f9faea021889bc35bfa77aa1bf40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5483f2b136dccb02736773d0674458bc5b62f9faea021889bc35bfa77aa1bf40->enter($__internal_5483f2b136dccb02736773d0674458bc5b62f9faea021889bc35bfa77aa1bf40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

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
        
        $__internal_5483f2b136dccb02736773d0674458bc5b62f9faea021889bc35bfa77aa1bf40->leave($__internal_5483f2b136dccb02736773d0674458bc5b62f9faea021889bc35bfa77aa1bf40_prof);

        
        $__internal_2f5c7aae9dfe603277ab78201b2dc39f7c3db16d052bfdea5911b5cb71e1eff8->leave($__internal_2f5c7aae9dfe603277ab78201b2dc39f7c3db16d052bfdea5911b5cb71e1eff8_prof);

    }

    // line 124
    public function block_sonata_header_noscript_warning($context, array $blocks = array())
    {
        $__internal_fc7e5d09d8dbe61bb6396a493fb22b52e58c29ba5fe4c805e8808eb0bb1662b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc7e5d09d8dbe61bb6396a493fb22b52e58c29ba5fe4c805e8808eb0bb1662b6->enter($__internal_fc7e5d09d8dbe61bb6396a493fb22b52e58c29ba5fe4c805e8808eb0bb1662b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

        $__internal_a99f98e0fc09090114edb1c7319f53a06c50194b2b9cf4b87d73439bf3c8a37c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a99f98e0fc09090114edb1c7319f53a06c50194b2b9cf4b87d73439bf3c8a37c->enter($__internal_a99f98e0fc09090114edb1c7319f53a06c50194b2b9cf4b87d73439bf3c8a37c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

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
        
        $__internal_a99f98e0fc09090114edb1c7319f53a06c50194b2b9cf4b87d73439bf3c8a37c->leave($__internal_a99f98e0fc09090114edb1c7319f53a06c50194b2b9cf4b87d73439bf3c8a37c_prof);

        
        $__internal_fc7e5d09d8dbe61bb6396a493fb22b52e58c29ba5fe4c805e8808eb0bb1662b6->leave($__internal_fc7e5d09d8dbe61bb6396a493fb22b52e58c29ba5fe4c805e8808eb0bb1662b6_prof);

    }

    // line 131
    public function block_logo($context, array $blocks = array())
    {
        $__internal_d67c382e9e8ef6029aee7da29879ad0ab091d2755e4ff4d1064dacbe42d2191a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d67c382e9e8ef6029aee7da29879ad0ab091d2755e4ff4d1064dacbe42d2191a->enter($__internal_d67c382e9e8ef6029aee7da29879ad0ab091d2755e4ff4d1064dacbe42d2191a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        $__internal_26cdc15ee52df725e18f3ca1491d9e6d6f39ac851899e04136a20c094bc3b13c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26cdc15ee52df725e18f3ca1491d9e6d6f39ac851899e04136a20c094bc3b13c->enter($__internal_26cdc15ee52df725e18f3ca1491d9e6d6f39ac851899e04136a20c094bc3b13c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

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
        
        $__internal_26cdc15ee52df725e18f3ca1491d9e6d6f39ac851899e04136a20c094bc3b13c->leave($__internal_26cdc15ee52df725e18f3ca1491d9e6d6f39ac851899e04136a20c094bc3b13c_prof);

        
        $__internal_d67c382e9e8ef6029aee7da29879ad0ab091d2755e4ff4d1064dacbe42d2191a->leave($__internal_d67c382e9e8ef6029aee7da29879ad0ab091d2755e4ff4d1064dacbe42d2191a_prof);

    }

    // line 143
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_6cf3c8b3dcd087dc08c94818b4e9dd027abba3e60134a739a31219031c847a3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cf3c8b3dcd087dc08c94818b4e9dd027abba3e60134a739a31219031c847a3f->enter($__internal_6cf3c8b3dcd087dc08c94818b4e9dd027abba3e60134a739a31219031c847a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        $__internal_150a0c097fec0893c4d9cf2d19b3af010754068e925f1de3fabebaeccc39f8ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_150a0c097fec0893c4d9cf2d19b3af010754068e925f1de3fabebaeccc39f8ee->enter($__internal_150a0c097fec0893c4d9cf2d19b3af010754068e925f1de3fabebaeccc39f8ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

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
        
        $__internal_150a0c097fec0893c4d9cf2d19b3af010754068e925f1de3fabebaeccc39f8ee->leave($__internal_150a0c097fec0893c4d9cf2d19b3af010754068e925f1de3fabebaeccc39f8ee_prof);

        
        $__internal_6cf3c8b3dcd087dc08c94818b4e9dd027abba3e60134a739a31219031c847a3f->leave($__internal_6cf3c8b3dcd087dc08c94818b4e9dd027abba3e60134a739a31219031c847a3f_prof);

    }

    // line 150
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_00e165b43207c318b3c51031f8485d0e431042990d74677535e18e960faaf3d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00e165b43207c318b3c51031f8485d0e431042990d74677535e18e960faaf3d4->enter($__internal_00e165b43207c318b3c51031f8485d0e431042990d74677535e18e960faaf3d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        $__internal_ee8017c71d2abb5059ffe7038cbd52267f97cca47617d29dbd2dc6ad4a0933ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee8017c71d2abb5059ffe7038cbd52267f97cca47617d29dbd2dc6ad4a0933ba->enter($__internal_ee8017c71d2abb5059ffe7038cbd52267f97cca47617d29dbd2dc6ad4a0933ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

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
        
        $__internal_ee8017c71d2abb5059ffe7038cbd52267f97cca47617d29dbd2dc6ad4a0933ba->leave($__internal_ee8017c71d2abb5059ffe7038cbd52267f97cca47617d29dbd2dc6ad4a0933ba_prof);

        
        $__internal_00e165b43207c318b3c51031f8485d0e431042990d74677535e18e960faaf3d4->leave($__internal_00e165b43207c318b3c51031f8485d0e431042990d74677535e18e960faaf3d4_prof);

    }

    // line 191
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        $__internal_2ba62b334becbd446e1b9355f145378bc46fee29bb064c2223ba73bc98e9cc0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ba62b334becbd446e1b9355f145378bc46fee29bb064c2223ba73bc98e9cc0d->enter($__internal_2ba62b334becbd446e1b9355f145378bc46fee29bb064c2223ba73bc98e9cc0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

        $__internal_599441e99c68589bc5eaf97102404e6c5e2241512a75af9a0f7070921dde04f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_599441e99c68589bc5eaf97102404e6c5e2241512a75af9a0f7070921dde04f4->enter($__internal_599441e99c68589bc5eaf97102404e6c5e2241512a75af9a0f7070921dde04f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

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
        
        $__internal_599441e99c68589bc5eaf97102404e6c5e2241512a75af9a0f7070921dde04f4->leave($__internal_599441e99c68589bc5eaf97102404e6c5e2241512a75af9a0f7070921dde04f4_prof);

        
        $__internal_2ba62b334becbd446e1b9355f145378bc46fee29bb064c2223ba73bc98e9cc0d->leave($__internal_2ba62b334becbd446e1b9355f145378bc46fee29bb064c2223ba73bc98e9cc0d_prof);

    }

    // line 195
    public function block_sonata_top_nav_menu_add_block($context, array $blocks = array())
    {
        $__internal_7fbfe64582de58f6065a0586b66f3a6bfdb6ea64082da6a9ab36f3ad3afea5d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fbfe64582de58f6065a0586b66f3a6bfdb6ea64082da6a9ab36f3ad3afea5d1->enter($__internal_7fbfe64582de58f6065a0586b66f3a6bfdb6ea64082da6a9ab36f3ad3afea5d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_add_block"));

        $__internal_556211bffbcb4d5378454ae90245c7ec677c235a9cb73ef9861a00197f090815 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_556211bffbcb4d5378454ae90245c7ec677c235a9cb73ef9861a00197f090815->enter($__internal_556211bffbcb4d5378454ae90245c7ec677c235a9cb73ef9861a00197f090815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_add_block"));

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
        
        $__internal_556211bffbcb4d5378454ae90245c7ec677c235a9cb73ef9861a00197f090815->leave($__internal_556211bffbcb4d5378454ae90245c7ec677c235a9cb73ef9861a00197f090815_prof);

        
        $__internal_7fbfe64582de58f6065a0586b66f3a6bfdb6ea64082da6a9ab36f3ad3afea5d1->leave($__internal_7fbfe64582de58f6065a0586b66f3a6bfdb6ea64082da6a9ab36f3ad3afea5d1_prof);

    }

    // line 203
    public function block_sonata_top_nav_menu_user_block($context, array $blocks = array())
    {
        $__internal_8a0468646bedff7eb42498d555d59d5deb0a8a2d82e42987e2236ea7566d4b41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a0468646bedff7eb42498d555d59d5deb0a8a2d82e42987e2236ea7566d4b41->enter($__internal_8a0468646bedff7eb42498d555d59d5deb0a8a2d82e42987e2236ea7566d4b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_user_block"));

        $__internal_3f5bdc5b62277b1f65ce245598d3f6f11280078d24136649a793a2a586faec1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f5bdc5b62277b1f65ce245598d3f6f11280078d24136649a793a2a586faec1a->enter($__internal_3f5bdc5b62277b1f65ce245598d3f6f11280078d24136649a793a2a586faec1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_user_block"));

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
        
        $__internal_3f5bdc5b62277b1f65ce245598d3f6f11280078d24136649a793a2a586faec1a->leave($__internal_3f5bdc5b62277b1f65ce245598d3f6f11280078d24136649a793a2a586faec1a_prof);

        
        $__internal_8a0468646bedff7eb42498d555d59d5deb0a8a2d82e42987e2236ea7566d4b41->leave($__internal_8a0468646bedff7eb42498d555d59d5deb0a8a2d82e42987e2236ea7566d4b41_prof);

    }

    // line 222
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_7339c44a86f74307563e5eb82bd1ebe86f86c39bc63794b46b029008b17fa87f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7339c44a86f74307563e5eb82bd1ebe86f86c39bc63794b46b029008b17fa87f->enter($__internal_7339c44a86f74307563e5eb82bd1ebe86f86c39bc63794b46b029008b17fa87f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        $__internal_a04338611058f911399c5f889065172cb04138d929cf7dc16605a0e61791b73a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a04338611058f911399c5f889065172cb04138d929cf7dc16605a0e61791b73a->enter($__internal_a04338611058f911399c5f889065172cb04138d929cf7dc16605a0e61791b73a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
        
        $__internal_a04338611058f911399c5f889065172cb04138d929cf7dc16605a0e61791b73a->leave($__internal_a04338611058f911399c5f889065172cb04138d929cf7dc16605a0e61791b73a_prof);

        
        $__internal_7339c44a86f74307563e5eb82bd1ebe86f86c39bc63794b46b029008b17fa87f->leave($__internal_7339c44a86f74307563e5eb82bd1ebe86f86c39bc63794b46b029008b17fa87f_prof);

    }

    // line 223
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_37dfcdc48151afde312a54d6a94c058c1c08daeb43f6f5ebc8450981772f1e81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37dfcdc48151afde312a54d6a94c058c1c08daeb43f6f5ebc8450981772f1e81->enter($__internal_37dfcdc48151afde312a54d6a94c058c1c08daeb43f6f5ebc8450981772f1e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        $__internal_aa36da06fc7090d947b3415fdd53cbc70cfd356a06d21bfeece92729e965415e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa36da06fc7090d947b3415fdd53cbc70cfd356a06d21bfeece92729e965415e->enter($__internal_aa36da06fc7090d947b3415fdd53cbc70cfd356a06d21bfeece92729e965415e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

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
        
        $__internal_aa36da06fc7090d947b3415fdd53cbc70cfd356a06d21bfeece92729e965415e->leave($__internal_aa36da06fc7090d947b3415fdd53cbc70cfd356a06d21bfeece92729e965415e_prof);

        
        $__internal_37dfcdc48151afde312a54d6a94c058c1c08daeb43f6f5ebc8450981772f1e81->leave($__internal_37dfcdc48151afde312a54d6a94c058c1c08daeb43f6f5ebc8450981772f1e81_prof);

    }

    // line 226
    public function block_sonata_side_nav($context, array $blocks = array())
    {
        $__internal_78c6c9cbf06e0a34bc50992af5a8123a7d29c5034dbaec0d8d9d43dd38b24b5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78c6c9cbf06e0a34bc50992af5a8123a7d29c5034dbaec0d8d9d43dd38b24b5c->enter($__internal_78c6c9cbf06e0a34bc50992af5a8123a7d29c5034dbaec0d8d9d43dd38b24b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

        $__internal_66f64ebd49bc110d3f81bee17b3b4f8336524ad34e1e0aa6c2aa585abac15a5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66f64ebd49bc110d3f81bee17b3b4f8336524ad34e1e0aa6c2aa585abac15a5c->enter($__internal_66f64ebd49bc110d3f81bee17b3b4f8336524ad34e1e0aa6c2aa585abac15a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

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
        
        $__internal_66f64ebd49bc110d3f81bee17b3b4f8336524ad34e1e0aa6c2aa585abac15a5c->leave($__internal_66f64ebd49bc110d3f81bee17b3b4f8336524ad34e1e0aa6c2aa585abac15a5c_prof);

        
        $__internal_78c6c9cbf06e0a34bc50992af5a8123a7d29c5034dbaec0d8d9d43dd38b24b5c->leave($__internal_78c6c9cbf06e0a34bc50992af5a8123a7d29c5034dbaec0d8d9d43dd38b24b5c_prof);

    }

    // line 227
    public function block_sonata_sidebar_search($context, array $blocks = array())
    {
        $__internal_70394805cac2ff43fe2817f559c2deda90f0e2e4d277f6f2b0a769cb83f2f26a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70394805cac2ff43fe2817f559c2deda90f0e2e4d277f6f2b0a769cb83f2f26a->enter($__internal_70394805cac2ff43fe2817f559c2deda90f0e2e4d277f6f2b0a769cb83f2f26a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        $__internal_bf2bcf0b0f3602e97ee31359a2ddbf6d104aaaaccb497d00dec8c7ad2a160f00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf2bcf0b0f3602e97ee31359a2ddbf6d104aaaaccb497d00dec8c7ad2a160f00->enter($__internal_bf2bcf0b0f3602e97ee31359a2ddbf6d104aaaaccb497d00dec8c7ad2a160f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

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
        
        $__internal_bf2bcf0b0f3602e97ee31359a2ddbf6d104aaaaccb497d00dec8c7ad2a160f00->leave($__internal_bf2bcf0b0f3602e97ee31359a2ddbf6d104aaaaccb497d00dec8c7ad2a160f00_prof);

        
        $__internal_70394805cac2ff43fe2817f559c2deda90f0e2e4d277f6f2b0a769cb83f2f26a->leave($__internal_70394805cac2ff43fe2817f559c2deda90f0e2e4d277f6f2b0a769cb83f2f26a_prof);

    }

    // line 240
    public function block_side_bar_before_nav($context, array $blocks = array())
    {
        $__internal_54830afa036e5949973dfbc2ece73d615865275d522852d2e4cbabeefe694cc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54830afa036e5949973dfbc2ece73d615865275d522852d2e4cbabeefe694cc3->enter($__internal_54830afa036e5949973dfbc2ece73d615865275d522852d2e4cbabeefe694cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        $__internal_dda0d67d08139f3dacb49985376fdcd993f2cd5adc660ad56d710aa4952788ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dda0d67d08139f3dacb49985376fdcd993f2cd5adc660ad56d710aa4952788ec->enter($__internal_dda0d67d08139f3dacb49985376fdcd993f2cd5adc660ad56d710aa4952788ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        echo " ";
        
        $__internal_dda0d67d08139f3dacb49985376fdcd993f2cd5adc660ad56d710aa4952788ec->leave($__internal_dda0d67d08139f3dacb49985376fdcd993f2cd5adc660ad56d710aa4952788ec_prof);

        
        $__internal_54830afa036e5949973dfbc2ece73d615865275d522852d2e4cbabeefe694cc3->leave($__internal_54830afa036e5949973dfbc2ece73d615865275d522852d2e4cbabeefe694cc3_prof);

    }

    // line 241
    public function block_side_bar_nav($context, array $blocks = array())
    {
        $__internal_6aeceb9fdfb34c1f96d6aad33e3deaeba8db38bc9e59d0f7f7918273d95df2b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6aeceb9fdfb34c1f96d6aad33e3deaeba8db38bc9e59d0f7f7918273d95df2b8->enter($__internal_6aeceb9fdfb34c1f96d6aad33e3deaeba8db38bc9e59d0f7f7918273d95df2b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        $__internal_3dfb27e24df258da5249e4b1647e750e773190b0d61254041e2825e29b56c8a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dfb27e24df258da5249e4b1647e750e773190b0d61254041e2825e29b56c8a3->enter($__internal_3dfb27e24df258da5249e4b1647e750e773190b0d61254041e2825e29b56c8a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        // line 242
        echo "                                ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("sonata_admin_sidebar", array("template" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 242, $this->getSourceContext()); })()), "adminPool", array()), "getTemplate", array(0 => "knp_menu_template"), "method")));
        echo "
                            ";
        
        $__internal_3dfb27e24df258da5249e4b1647e750e773190b0d61254041e2825e29b56c8a3->leave($__internal_3dfb27e24df258da5249e4b1647e750e773190b0d61254041e2825e29b56c8a3_prof);

        
        $__internal_6aeceb9fdfb34c1f96d6aad33e3deaeba8db38bc9e59d0f7f7918273d95df2b8->leave($__internal_6aeceb9fdfb34c1f96d6aad33e3deaeba8db38bc9e59d0f7f7918273d95df2b8_prof);

    }

    // line 244
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        $__internal_2aea2ffa9471f26bac7b985fdb1530ff84580057f3d114cf11404883e7e9d117 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2aea2ffa9471f26bac7b985fdb1530ff84580057f3d114cf11404883e7e9d117->enter($__internal_2aea2ffa9471f26bac7b985fdb1530ff84580057f3d114cf11404883e7e9d117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        $__internal_ce455026b775a83f0766893d618dbe6c71a48f06b0ecaa24afdebc72b1e4fbf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce455026b775a83f0766893d618dbe6c71a48f06b0ecaa24afdebc72b1e4fbf6->enter($__internal_ce455026b775a83f0766893d618dbe6c71a48f06b0ecaa24afdebc72b1e4fbf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        // line 245
        echo "                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">
                                    ";
        // line 246
        $this->displayBlock('side_bar_after_nav_content', $context, $blocks);
        // line 249
        echo "                                </p>
                            ";
        
        $__internal_ce455026b775a83f0766893d618dbe6c71a48f06b0ecaa24afdebc72b1e4fbf6->leave($__internal_ce455026b775a83f0766893d618dbe6c71a48f06b0ecaa24afdebc72b1e4fbf6_prof);

        
        $__internal_2aea2ffa9471f26bac7b985fdb1530ff84580057f3d114cf11404883e7e9d117->leave($__internal_2aea2ffa9471f26bac7b985fdb1530ff84580057f3d114cf11404883e7e9d117_prof);

    }

    // line 246
    public function block_side_bar_after_nav_content($context, array $blocks = array())
    {
        $__internal_af45b10950c9d4f289fa1b59e5f9fe5fe2d7811bc460230c6603426b1d293743 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af45b10950c9d4f289fa1b59e5f9fe5fe2d7811bc460230c6603426b1d293743->enter($__internal_af45b10950c9d4f289fa1b59e5f9fe5fe2d7811bc460230c6603426b1d293743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav_content"));

        $__internal_fa7e8016efe63397982ee33660c3a7414b3af25df00ea58af6b8d167493089ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa7e8016efe63397982ee33660c3a7414b3af25df00ea58af6b8d167493089ce->enter($__internal_fa7e8016efe63397982ee33660c3a7414b3af25df00ea58af6b8d167493089ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav_content"));

        // line 247
        echo "                                        <a href=\"https://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a>
                                    ";
        
        $__internal_fa7e8016efe63397982ee33660c3a7414b3af25df00ea58af6b8d167493089ce->leave($__internal_fa7e8016efe63397982ee33660c3a7414b3af25df00ea58af6b8d167493089ce_prof);

        
        $__internal_af45b10950c9d4f289fa1b59e5f9fe5fe2d7811bc460230c6603426b1d293743->leave($__internal_af45b10950c9d4f289fa1b59e5f9fe5fe2d7811bc460230c6603426b1d293743_prof);

    }

    // line 257
    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_ebbc0fb2cd3d7a11aa6d076d4d86ccf7389a3c3077b4e33c03cd72fe6b791003 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebbc0fb2cd3d7a11aa6d076d4d86ccf7389a3c3077b4e33c03cd72fe6b791003->enter($__internal_ebbc0fb2cd3d7a11aa6d076d4d86ccf7389a3c3077b4e33c03cd72fe6b791003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        $__internal_74ed9b5b29831bcb17b8cad3442beed24e700051fbd6ac5c27ee14d417765278 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74ed9b5b29831bcb17b8cad3442beed24e700051fbd6ac5c27ee14d417765278->enter($__internal_74ed9b5b29831bcb17b8cad3442beed24e700051fbd6ac5c27ee14d417765278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

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
        
        $__internal_74ed9b5b29831bcb17b8cad3442beed24e700051fbd6ac5c27ee14d417765278->leave($__internal_74ed9b5b29831bcb17b8cad3442beed24e700051fbd6ac5c27ee14d417765278_prof);

        
        $__internal_ebbc0fb2cd3d7a11aa6d076d4d86ccf7389a3c3077b4e33c03cd72fe6b791003->leave($__internal_ebbc0fb2cd3d7a11aa6d076d4d86ccf7389a3c3077b4e33c03cd72fe6b791003_prof);

    }

    // line 260
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        $__internal_be8f4bc0ce4c8d14fca53d7840fd1762455846256e3584e6e39f04a023d5ada9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be8f4bc0ce4c8d14fca53d7840fd1762455846256e3584e6e39f04a023d5ada9->enter($__internal_be8f4bc0ce4c8d14fca53d7840fd1762455846256e3584e6e39f04a023d5ada9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        $__internal_2c861b5481cc896c987d2fac0de71fb073afbe7ef3c564d911a26957f48b65d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c861b5481cc896c987d2fac0de71fb073afbe7ef3c564d911a26957f48b65d5->enter($__internal_2c861b5481cc896c987d2fac0de71fb073afbe7ef3c564d911a26957f48b65d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        // line 261
        echo "                            ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 313
        echo "                        ";
        
        $__internal_2c861b5481cc896c987d2fac0de71fb073afbe7ef3c564d911a26957f48b65d5->leave($__internal_2c861b5481cc896c987d2fac0de71fb073afbe7ef3c564d911a26957f48b65d5_prof);

        
        $__internal_be8f4bc0ce4c8d14fca53d7840fd1762455846256e3584e6e39f04a023d5ada9->leave($__internal_be8f4bc0ce4c8d14fca53d7840fd1762455846256e3584e6e39f04a023d5ada9_prof);

    }

    // line 261
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        $__internal_44654cc69f4a87db5105cad6b49244566d3aec165f03e74aa6aa5dde9b624f74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44654cc69f4a87db5105cad6b49244566d3aec165f03e74aa6aa5dde9b624f74->enter($__internal_44654cc69f4a87db5105cad6b49244566d3aec165f03e74aa6aa5dde9b624f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        $__internal_f1ba3027d3cb28e652f2d0b2761213e18ceb6ed00405504492140702105ec0f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1ba3027d3cb28e652f2d0b2761213e18ceb6ed00405504492140702105ec0f6->enter($__internal_f1ba3027d3cb28e652f2d0b2761213e18ceb6ed00405504492140702105ec0f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

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
        
        $__internal_f1ba3027d3cb28e652f2d0b2761213e18ceb6ed00405504492140702105ec0f6->leave($__internal_f1ba3027d3cb28e652f2d0b2761213e18ceb6ed00405504492140702105ec0f6_prof);

        
        $__internal_44654cc69f4a87db5105cad6b49244566d3aec165f03e74aa6aa5dde9b624f74->leave($__internal_44654cc69f4a87db5105cad6b49244566d3aec165f03e74aa6aa5dde9b624f74_prof);

    }

    // line 265
    public function block_tab_menu_navbar_header($context, array $blocks = array())
    {
        $__internal_e6af9da051c111fbaec571b6ef4c1b5b0ade49b2c688c3434b1db5587c9e498c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6af9da051c111fbaec571b6ef4c1b5b0ade49b2c688c3434b1db5587c9e498c->enter($__internal_e6af9da051c111fbaec571b6ef4c1b5b0ade49b2c688c3434b1db5587c9e498c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

        $__internal_2abe33ec184ace655a8c763636ca7d2af66540e3d59bec66cd2fb83180d42717 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2abe33ec184ace655a8c763636ca7d2af66540e3d59bec66cd2fb83180d42717->enter($__internal_2abe33ec184ace655a8c763636ca7d2af66540e3d59bec66cd2fb83180d42717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

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
        
        $__internal_2abe33ec184ace655a8c763636ca7d2af66540e3d59bec66cd2fb83180d42717->leave($__internal_2abe33ec184ace655a8c763636ca7d2af66540e3d59bec66cd2fb83180d42717_prof);

        
        $__internal_e6af9da051c111fbaec571b6ef4c1b5b0ade49b2c688c3434b1db5587c9e498c->leave($__internal_e6af9da051c111fbaec571b6ef4c1b5b0ade49b2c688c3434b1db5587c9e498c_prof);

    }

    // line 288
    public function block_sonata_admin_content_actions_wrappers($context, array $blocks = array())
    {
        $__internal_3d1588943593db9f9110ddc3c0f51fc06bcb037c93f5e2ac94775a7455e7f2f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d1588943593db9f9110ddc3c0f51fc06bcb037c93f5e2ac94775a7455e7f2f1->enter($__internal_3d1588943593db9f9110ddc3c0f51fc06bcb037c93f5e2ac94775a7455e7f2f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content_actions_wrappers"));

        $__internal_a23d667283405f059b9810bc8ef38ba100086585404fdfd7ce1afaa533c37e21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a23d667283405f059b9810bc8ef38ba100086585404fdfd7ce1afaa533c37e21->enter($__internal_a23d667283405f059b9810bc8ef38ba100086585404fdfd7ce1afaa533c37e21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content_actions_wrappers"));

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
        
        $__internal_a23d667283405f059b9810bc8ef38ba100086585404fdfd7ce1afaa533c37e21->leave($__internal_a23d667283405f059b9810bc8ef38ba100086585404fdfd7ce1afaa533c37e21_prof);

        
        $__internal_3d1588943593db9f9110ddc3c0f51fc06bcb037c93f5e2ac94775a7455e7f2f1->leave($__internal_3d1588943593db9f9110ddc3c0f51fc06bcb037c93f5e2ac94775a7455e7f2f1_prof);

    }

    // line 317
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        $__internal_10cb51b6c7388be8c658f0ad3075df2c01dd1954e0a328a7a15549285f2a3825 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10cb51b6c7388be8c658f0ad3075df2c01dd1954e0a328a7a15549285f2a3825->enter($__internal_10cb51b6c7388be8c658f0ad3075df2c01dd1954e0a328a7a15549285f2a3825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        $__internal_417057e57338d8cf0a1d5c67ca0a1111d8a4e4304028b43a980a1056df25394e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_417057e57338d8cf0a1d5c67ca0a1111d8a4e4304028b43a980a1056df25394e->enter($__internal_417057e57338d8cf0a1d5c67ca0a1111d8a4e4304028b43a980a1056df25394e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

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
        
        $__internal_417057e57338d8cf0a1d5c67ca0a1111d8a4e4304028b43a980a1056df25394e->leave($__internal_417057e57338d8cf0a1d5c67ca0a1111d8a4e4304028b43a980a1056df25394e_prof);

        
        $__internal_10cb51b6c7388be8c658f0ad3075df2c01dd1954e0a328a7a15549285f2a3825->leave($__internal_10cb51b6c7388be8c658f0ad3075df2c01dd1954e0a328a7a15549285f2a3825_prof);

    }

    // line 319
    public function block_notice($context, array $blocks = array())
    {
        $__internal_c4ae3e897a921e411bc27ca27d1bd4a64469d0f6635c0426bf6dc9882ec8cdaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4ae3e897a921e411bc27ca27d1bd4a64469d0f6635c0426bf6dc9882ec8cdaa->enter($__internal_c4ae3e897a921e411bc27ca27d1bd4a64469d0f6635c0426bf6dc9882ec8cdaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        $__internal_e49d3867aebdbf24a88b4f7d739e0cf8cd4900bfe9a77b369b02a20abe2bb712 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e49d3867aebdbf24a88b4f7d739e0cf8cd4900bfe9a77b369b02a20abe2bb712->enter($__internal_e49d3867aebdbf24a88b4f7d739e0cf8cd4900bfe9a77b369b02a20abe2bb712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        // line 320
        echo "                                ";
        $this->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig", "SonataAdminBundle::standard_layout.html.twig", 320)->display($context);
        // line 321
        echo "                            ";
        
        $__internal_e49d3867aebdbf24a88b4f7d739e0cf8cd4900bfe9a77b369b02a20abe2bb712->leave($__internal_e49d3867aebdbf24a88b4f7d739e0cf8cd4900bfe9a77b369b02a20abe2bb712_prof);

        
        $__internal_c4ae3e897a921e411bc27ca27d1bd4a64469d0f6635c0426bf6dc9882ec8cdaa->leave($__internal_c4ae3e897a921e411bc27ca27d1bd4a64469d0f6635c0426bf6dc9882ec8cdaa_prof);

    }

    // line 358
    public function block_bootlint($context, array $blocks = array())
    {
        $__internal_54e6ae86283221e269e14edbec1fb675e5a9467e3f8164ece714756920ade1a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54e6ae86283221e269e14edbec1fb675e5a9467e3f8164ece714756920ade1a4->enter($__internal_54e6ae86283221e269e14edbec1fb675e5a9467e3f8164ece714756920ade1a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootlint"));

        $__internal_21ec5a927a927d4fb6c0fe2805564a22da5e3d58eaa3a6b7416186eb1aa25558 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21ec5a927a927d4fb6c0fe2805564a22da5e3d58eaa3a6b7416186eb1aa25558->enter($__internal_21ec5a927a927d4fb6c0fe2805564a22da5e3d58eaa3a6b7416186eb1aa25558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootlint"));

        // line 359
        echo "            ";
        // line 360
        echo "            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        ";
        
        $__internal_21ec5a927a927d4fb6c0fe2805564a22da5e3d58eaa3a6b7416186eb1aa25558->leave($__internal_21ec5a927a927d4fb6c0fe2805564a22da5e3d58eaa3a6b7416186eb1aa25558_prof);

        
        $__internal_54e6ae86283221e269e14edbec1fb675e5a9467e3f8164ece714756920ade1a4->leave($__internal_54e6ae86283221e269e14edbec1fb675e5a9467e3f8164ece714756920ade1a4_prof);

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

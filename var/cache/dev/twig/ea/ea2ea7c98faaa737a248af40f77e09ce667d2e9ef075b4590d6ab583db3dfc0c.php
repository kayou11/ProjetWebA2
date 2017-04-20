<?php

/* SonataAdminBundle:Core:dashboard.html.twig */
class __TwigTemplate_eaa402da26d04f2a36487ad4d5ed7724626146ae5ae978c0f02493b5628e72fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 12, $this->getSourceContext()); })()), "SonataAdminBundle:Core:dashboard.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_78b16f27f18d07097a453abb8df11a1efca7e56d9f9cb46b53bb2d331d01ab9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78b16f27f18d07097a453abb8df11a1efca7e56d9f9cb46b53bb2d331d01ab9c->enter($__internal_78b16f27f18d07097a453abb8df11a1efca7e56d9f9cb46b53bb2d331d01ab9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:dashboard.html.twig"));

        $__internal_651ad6ea946fed3f5c1ca478c4274c7f4a2bb7345a756d09d1e27cfce21c75d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_651ad6ea946fed3f5c1ca478c4274c7f4a2bb7345a756d09d1e27cfce21c75d0->enter($__internal_651ad6ea946fed3f5c1ca478c4274c7f4a2bb7345a756d09d1e27cfce21c75d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:dashboard.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78b16f27f18d07097a453abb8df11a1efca7e56d9f9cb46b53bb2d331d01ab9c->leave($__internal_78b16f27f18d07097a453abb8df11a1efca7e56d9f9cb46b53bb2d331d01ab9c_prof);

        
        $__internal_651ad6ea946fed3f5c1ca478c4274c7f4a2bb7345a756d09d1e27cfce21c75d0->leave($__internal_651ad6ea946fed3f5c1ca478c4274c7f4a2bb7345a756d09d1e27cfce21c75d0_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_a62a4f6b1abd82dd7ab29ac67315e2713f71b57f1603d12bcb57e2927088d4cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a62a4f6b1abd82dd7ab29ac67315e2713f71b57f1603d12bcb57e2927088d4cf->enter($__internal_a62a4f6b1abd82dd7ab29ac67315e2713f71b57f1603d12bcb57e2927088d4cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ca0f82b10ff9a44e563bd7f17e036e80fcfdf61b63d6a9f9ff661214027152cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca0f82b10ff9a44e563bd7f17e036e80fcfdf61b63d6a9f9ff661214027152cd->enter($__internal_ca0f82b10ff9a44e563bd7f17e036e80fcfdf61b63d6a9f9ff661214027152cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_dashboard", array(), "SonataAdminBundle"), "html", null, true);
        
        $__internal_ca0f82b10ff9a44e563bd7f17e036e80fcfdf61b63d6a9f9ff661214027152cd->leave($__internal_ca0f82b10ff9a44e563bd7f17e036e80fcfdf61b63d6a9f9ff661214027152cd_prof);

        
        $__internal_a62a4f6b1abd82dd7ab29ac67315e2713f71b57f1603d12bcb57e2927088d4cf->leave($__internal_a62a4f6b1abd82dd7ab29ac67315e2713f71b57f1603d12bcb57e2927088d4cf_prof);

    }

    // line 15
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_5625d4741ec7aada495c4a9ee15e630dc4f70abaa3902df1edf47d16d702f9e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5625d4741ec7aada495c4a9ee15e630dc4f70abaa3902df1edf47d16d702f9e8->enter($__internal_5625d4741ec7aada495c4a9ee15e630dc4f70abaa3902df1edf47d16d702f9e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_a4bc2f2d302af7a3fcd85e8ae49bbd7bb3d84c999d2d0e4493c50f6236e470ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4bc2f2d302af7a3fcd85e8ae49bbd7bb3d84c999d2d0e4493c50f6236e470ef->enter($__internal_a4bc2f2d302af7a3fcd85e8ae49bbd7bb3d84c999d2d0e4493c50f6236e470ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        
        $__internal_a4bc2f2d302af7a3fcd85e8ae49bbd7bb3d84c999d2d0e4493c50f6236e470ef->leave($__internal_a4bc2f2d302af7a3fcd85e8ae49bbd7bb3d84c999d2d0e4493c50f6236e470ef_prof);

        
        $__internal_5625d4741ec7aada495c4a9ee15e630dc4f70abaa3902df1edf47d16d702f9e8->leave($__internal_5625d4741ec7aada495c4a9ee15e630dc4f70abaa3902df1edf47d16d702f9e8_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_30329a3a99fe6c890397e96e58d0b5a39b9070d1794c25947bef823d6d5b49ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30329a3a99fe6c890397e96e58d0b5a39b9070d1794c25947bef823d6d5b49ae->enter($__internal_30329a3a99fe6c890397e96e58d0b5a39b9070d1794c25947bef823d6d5b49ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_44c61a99fb36f72c54a49431cdb9b9bceec40beb2efdc465c3ee9247539c2366 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44c61a99fb36f72c54a49431cdb9b9bceec40beb2efdc465c3ee9247539c2366->enter($__internal_44c61a99fb36f72c54a49431cdb9b9bceec40beb2efdc465c3ee9247539c2366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "
    ";
        // line 18
        $context["has_left"] = false;
        // line 19
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["blocks"]) || array_key_exists("blocks", $context) ? $context["blocks"] : (function () { throw new Twig_Error_Runtime('Variable "blocks" does not exist.', 19, $this->getSourceContext()); })()), "left", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 20
            echo "        ";
            if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "roles", array())) == 0) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted(twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "roles", array())))) {
                // line 21
                echo "            ";
                $context["has_left"] = true;
                // line 22
                echo "        ";
            }
            // line 23
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
    ";
        // line 25
        $context["has_center"] = false;
        // line 26
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["blocks"]) || array_key_exists("blocks", $context) ? $context["blocks"] : (function () { throw new Twig_Error_Runtime('Variable "blocks" does not exist.', 26, $this->getSourceContext()); })()), "center", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 27
            echo "        ";
            if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "roles", array())) == 0) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted(twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "roles", array())))) {
                // line 28
                echo "            ";
                $context["has_center"] = true;
                // line 29
                echo "        ";
            }
            // line 30
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
    ";
        // line 32
        $context["has_right"] = false;
        // line 33
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["blocks"]) || array_key_exists("blocks", $context) ? $context["blocks"] : (function () { throw new Twig_Error_Runtime('Variable "blocks" does not exist.', 33, $this->getSourceContext()); })()), "right", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 34
            echo "        ";
            if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "roles", array())) == 0) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted(twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "roles", array())))) {
                // line 35
                echo "            ";
                $context["has_right"] = true;
                // line 36
                echo "        ";
            }
            // line 37
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
    ";
        // line 39
        $context["has_top"] = false;
        // line 40
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["blocks"]) || array_key_exists("blocks", $context) ? $context["blocks"] : (function () { throw new Twig_Error_Runtime('Variable "blocks" does not exist.', 40, $this->getSourceContext()); })()), "top", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 41
            echo "        ";
            if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "roles", array())) == 0) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted(twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "roles", array())))) {
                // line 42
                echo "            ";
                $context["has_top"] = true;
                // line 43
                echo "        ";
            }
            // line 44
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "
    ";
        // line 46
        $context["has_bottom"] = false;
        // line 47
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["blocks"]) || array_key_exists("blocks", $context) ? $context["blocks"] : (function () { throw new Twig_Error_Runtime('Variable "blocks" does not exist.', 47, $this->getSourceContext()); })()), "bottom", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 48
            echo "        ";
            if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "roles", array())) == 0) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted(twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "roles", array())))) {
                // line 49
                echo "            ";
                $context["has_bottom"] = true;
                // line 50
                echo "        ";
            }
            // line 51
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "
    ";
        // line 53
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.dashboard.top", array("admin_pool" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 53, $this->getSourceContext()); })()), "adminPool", array()))));
        echo "

    ";
        // line 55
        if ((isset($context["has_top"]) || array_key_exists("has_top", $context) ? $context["has_top"] : (function () { throw new Twig_Error_Runtime('Variable "has_top" does not exist.', 55, $this->getSourceContext()); })())) {
            // line 56
            echo "        <div class=\"row\">
            ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["blocks"]) || array_key_exists("blocks", $context) ? $context["blocks"] : (function () { throw new Twig_Error_Runtime('Variable "blocks" does not exist.', 57, $this->getSourceContext()); })()), "top", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 58
                echo "                ";
                if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "roles", array())) == 0) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted(twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "roles", array())))) {
                    // line 59
                    echo "                    <div class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "class", array()), "html", null, true);
                    echo "\">
                        ";
                    // line 60
                    echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "type", array()), "settings" => twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "settings", array()))));
                    echo "
                    </div>
                ";
                }
                // line 63
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "        </div>
    ";
        }
        // line 66
        echo "
    <div class=\"row\">
        ";
        // line 68
        $context["width_left"] = 4;
        // line 69
        echo "        ";
        $context["width_right"] = 4;
        // line 70
        echo "        ";
        $context["width_center"] = 4;
        // line 71
        echo "
        ";
        // line 73
        echo "        ";
        if ( !(isset($context["has_center"]) || array_key_exists("has_center", $context) ? $context["has_center"] : (function () { throw new Twig_Error_Runtime('Variable "has_center" does not exist.', 73, $this->getSourceContext()); })())) {
            // line 74
            echo "            ";
            $context["width_left"] = 6;
            // line 75
            echo "            ";
            $context["width_right"] = 6;
            // line 76
            echo "        ";
        }
        // line 77
        echo "
        ";
        // line 79
        echo "        ";
        if (( !(isset($context["has_left"]) || array_key_exists("has_left", $context) ? $context["has_left"] : (function () { throw new Twig_Error_Runtime('Variable "has_left" does not exist.', 79, $this->getSourceContext()); })()) &&  !(isset($context["has_right"]) || array_key_exists("has_right", $context) ? $context["has_right"] : (function () { throw new Twig_Error_Runtime('Variable "has_right" does not exist.', 79, $this->getSourceContext()); })()))) {
            // line 80
            echo "            ";
            $context["width_center"] = 12;
            // line 81
            echo "        ";
        }
        // line 82
        echo "
        ";
        // line 84
        echo "        ";
        if (((isset($context["has_left"]) || array_key_exists("has_left", $context) ? $context["has_left"] : (function () { throw new Twig_Error_Runtime('Variable "has_left" does not exist.', 84, $this->getSourceContext()); })()) || (isset($context["has_right"]) || array_key_exists("has_right", $context) ? $context["has_right"] : (function () { throw new Twig_Error_Runtime('Variable "has_right" does not exist.', 84, $this->getSourceContext()); })()))) {
            // line 85
            echo "        <div class=\"col-md-";
            echo twig_escape_filter($this->env, (isset($context["width_left"]) || array_key_exists("width_left", $context) ? $context["width_left"] : (function () { throw new Twig_Error_Runtime('Variable "width_left" does not exist.', 85, $this->getSourceContext()); })()), "html", null, true);
            echo "\">
            ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["blocks"]) || array_key_exists("blocks", $context) ? $context["blocks"] : (function () { throw new Twig_Error_Runtime('Variable "blocks" does not exist.', 86, $this->getSourceContext()); })()), "left", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 87
                echo "                ";
                if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "roles", array())) == 0) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted(twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "roles", array())))) {
                    // line 88
                    echo "                    ";
                    echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "type", array()), "settings" => twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "settings", array()))));
                    echo "
                ";
                }
                // line 90
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "        </div>
        ";
        }
        // line 93
        echo "
        ";
        // line 94
        if ((isset($context["has_center"]) || array_key_exists("has_center", $context) ? $context["has_center"] : (function () { throw new Twig_Error_Runtime('Variable "has_center" does not exist.', 94, $this->getSourceContext()); })())) {
            // line 95
            echo "            <div class=\"col-md-";
            echo twig_escape_filter($this->env, (isset($context["width_center"]) || array_key_exists("width_center", $context) ? $context["width_center"] : (function () { throw new Twig_Error_Runtime('Variable "width_center" does not exist.', 95, $this->getSourceContext()); })()), "html", null, true);
            echo "\">
                ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["blocks"]) || array_key_exists("blocks", $context) ? $context["blocks"] : (function () { throw new Twig_Error_Runtime('Variable "blocks" does not exist.', 96, $this->getSourceContext()); })()), "center", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 97
                echo "                    ";
                if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "roles", array())) == 0) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted(twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "roles", array())))) {
                    // line 98
                    echo "                        ";
                    echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "type", array()), "settings" => twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "settings", array()))));
                    echo "
                    ";
                }
                // line 100
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "            </div>
        ";
        }
        // line 103
        echo "
        ";
        // line 105
        echo "        ";
        if (((isset($context["has_left"]) || array_key_exists("has_left", $context) ? $context["has_left"] : (function () { throw new Twig_Error_Runtime('Variable "has_left" does not exist.', 105, $this->getSourceContext()); })()) || (isset($context["has_right"]) || array_key_exists("has_right", $context) ? $context["has_right"] : (function () { throw new Twig_Error_Runtime('Variable "has_right" does not exist.', 105, $this->getSourceContext()); })()))) {
            // line 106
            echo "         <div class=\"col-md-";
            echo twig_escape_filter($this->env, (isset($context["width_right"]) || array_key_exists("width_right", $context) ? $context["width_right"] : (function () { throw new Twig_Error_Runtime('Variable "width_right" does not exist.', 106, $this->getSourceContext()); })()), "html", null, true);
            echo "\">
            ";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["blocks"]) || array_key_exists("blocks", $context) ? $context["blocks"] : (function () { throw new Twig_Error_Runtime('Variable "blocks" does not exist.', 107, $this->getSourceContext()); })()), "right", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 108
                echo "                ";
                if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "roles", array())) == 0) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted(twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "roles", array())))) {
                    // line 109
                    echo "                    ";
                    echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "type", array()), "settings" => twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "settings", array()))));
                    echo "
                ";
                }
                // line 111
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "        </div>
        ";
        }
        // line 114
        echo "    </div>

    ";
        // line 116
        if ((isset($context["has_bottom"]) || array_key_exists("has_bottom", $context) ? $context["has_bottom"] : (function () { throw new Twig_Error_Runtime('Variable "has_bottom" does not exist.', 116, $this->getSourceContext()); })())) {
            // line 117
            echo "        <div class=\"row\">
            ";
            // line 118
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["blocks"]) || array_key_exists("blocks", $context) ? $context["blocks"] : (function () { throw new Twig_Error_Runtime('Variable "blocks" does not exist.', 118, $this->getSourceContext()); })()), "bottom", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 119
                echo "                ";
                if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "roles", array())) == 0) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted(twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "roles", array())))) {
                    // line 120
                    echo "                    <div class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "class", array()), "html", null, true);
                    echo "\">
                        ";
                    // line 121
                    echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "type", array()), "settings" => twig_get_attribute($this->env, $this->getSourceContext(), $context["block"], "settings", array()))));
                    echo "
                    </div>
                ";
                }
                // line 124
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "        </div>
    ";
        }
        // line 127
        echo "
    ";
        // line 128
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.dashboard.bottom", array("admin_pool" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 128, $this->getSourceContext()); })()), "adminPool", array()))));
        echo "

";
        
        $__internal_44c61a99fb36f72c54a49431cdb9b9bceec40beb2efdc465c3ee9247539c2366->leave($__internal_44c61a99fb36f72c54a49431cdb9b9bceec40beb2efdc465c3ee9247539c2366_prof);

        
        $__internal_30329a3a99fe6c890397e96e58d0b5a39b9070d1794c25947bef823d6d5b49ae->leave($__internal_30329a3a99fe6c890397e96e58d0b5a39b9070d1794c25947bef823d6d5b49ae_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  431 => 128,  428 => 127,  424 => 125,  418 => 124,  412 => 121,  407 => 120,  404 => 119,  400 => 118,  397 => 117,  395 => 116,  391 => 114,  387 => 112,  381 => 111,  375 => 109,  372 => 108,  368 => 107,  363 => 106,  360 => 105,  357 => 103,  353 => 101,  347 => 100,  341 => 98,  338 => 97,  334 => 96,  329 => 95,  327 => 94,  324 => 93,  320 => 91,  314 => 90,  308 => 88,  305 => 87,  301 => 86,  296 => 85,  293 => 84,  290 => 82,  287 => 81,  284 => 80,  281 => 79,  278 => 77,  275 => 76,  272 => 75,  269 => 74,  266 => 73,  263 => 71,  260 => 70,  257 => 69,  255 => 68,  251 => 66,  247 => 64,  241 => 63,  235 => 60,  230 => 59,  227 => 58,  223 => 57,  220 => 56,  218 => 55,  213 => 53,  210 => 52,  204 => 51,  201 => 50,  198 => 49,  195 => 48,  190 => 47,  188 => 46,  185 => 45,  179 => 44,  176 => 43,  173 => 42,  170 => 41,  165 => 40,  163 => 39,  160 => 38,  154 => 37,  151 => 36,  148 => 35,  145 => 34,  140 => 33,  138 => 32,  135 => 31,  129 => 30,  126 => 29,  123 => 28,  120 => 27,  115 => 26,  113 => 25,  110 => 24,  104 => 23,  101 => 22,  98 => 21,  95 => 20,  90 => 19,  88 => 18,  85 => 17,  76 => 16,  59 => 15,  41 => 14,  20 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends base_template %}

{% block title %}{{ 'title_dashboard'|trans({}, 'SonataAdminBundle') }}{% endblock%}
{% block breadcrumb %}{% endblock %}
{% block content %}

    {% set has_left = false %}
    {% for block in blocks.left %}
        {% if block.roles|length == 0 or is_granted(block.roles) %}
            {% set has_left = true %}
        {% endif %}
    {% endfor %}

    {% set has_center = false %}
    {% for block in blocks.center %}
        {% if block.roles|length == 0 or is_granted(block.roles) %}
            {% set has_center = true %}
        {% endif %}
    {% endfor %}

    {% set has_right = false %}
    {% for block in blocks.right %}
        {% if block.roles|length == 0 or is_granted(block.roles) %}
            {% set has_right = true %}
        {% endif %}
    {% endfor %}

    {% set has_top = false %}
    {% for block in blocks.top %}
        {% if block.roles|length == 0 or is_granted(block.roles) %}
            {% set has_top = true %}
        {% endif %}
    {% endfor %}

    {% set has_bottom = false %}
    {% for block in blocks.bottom %}
        {% if block.roles|length == 0 or is_granted(block.roles) %}
            {% set has_bottom = true %}
        {% endif %}
    {% endfor %}

    {{ sonata_block_render_event('sonata.admin.dashboard.top', { 'admin_pool': sonata_admin.adminPool }) }}

    {% if has_top %}
        <div class=\"row\">
            {% for block in blocks.top %}
                {% if block.roles|length == 0 or is_granted(block.roles) %}
                    <div class=\"{{ block.class }}\">
                        {{ sonata_block_render({ 'type': block.type, 'settings': block.settings}) }}
                    </div>
                {% endif %}
            {% endfor %}
        </div>
    {% endif %}

    <div class=\"row\">
        {% set width_left = 4 %}
        {% set width_right = 4 %}
        {% set width_center = 4 %}

        {# if center block is not present we make left and right ones wider #}
        {% if not has_center %}
            {% set width_left = 6 %}
            {% set width_right = 6 %}
        {% endif %}

        {# if there is no right and left block present we make center one full width #}
        {% if not has_left and not has_right %}
            {% set width_center = 12 %}
        {% endif %}

        {# don't show left column if only center one is present #}
        {% if has_left or has_right %}
        <div class=\"col-md-{{ width_left }}\">
            {% for block in blocks.left %}
                {% if block.roles|length == 0 or is_granted(block.roles) %}
                    {{ sonata_block_render({ 'type': block.type, 'settings': block.settings}) }}
                {% endif %}
            {% endfor %}
        </div>
        {% endif %}

        {% if has_center %}
            <div class=\"col-md-{{ width_center }}\">
                {% for block in blocks.center %}
                    {% if block.roles|length == 0 or is_granted(block.roles) %}
                        {{ sonata_block_render({ 'type': block.type, 'settings': block.settings}) }}
                    {% endif %}
                {% endfor %}
            </div>
        {% endif %}

        {# don't show right column if only center one is present #}
        {% if has_left or has_right %}
         <div class=\"col-md-{{ width_right }}\">
            {% for block in blocks.right %}
                {% if block.roles|length == 0 or is_granted(block.roles) %}
                    {{ sonata_block_render({ 'type': block.type, 'settings': block.settings}) }}
                {% endif %}
            {% endfor %}
        </div>
        {% endif %}
    </div>

    {% if has_bottom %}
        <div class=\"row\">
            {% for block in blocks.bottom %}
                {% if block.roles|length == 0 or is_granted(block.roles) %}
                    <div class=\"{{ block.class }}\">
                        {{ sonata_block_render({ 'type': block.type, 'settings': block.settings}) }}
                    </div>
                {% endif %}
            {% endfor %}
        </div>
    {% endif %}

    {{ sonata_block_render_event('sonata.admin.dashboard.bottom', { 'admin_pool': sonata_admin.adminPool }) }}

{% endblock %}
", "SonataAdminBundle:Core:dashboard.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/Core/dashboard.html.twig");
    }
}

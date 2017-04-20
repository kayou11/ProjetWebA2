<?php

/* SonataAdminBundle:CRUD:base_show.html.twig */
class __TwigTemplate_8b750fee6735080c0946e215fa781ae0dbde13ac24a845eff44eaa2799b2d3b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'navbar_title' => array($this, 'block_navbar_title'),
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'show' => array($this, 'block_show'),
            'show_groups' => array($this, 'block_show_groups'),
            'field_row' => array($this, 'block_field_row'),
            'show_title' => array($this, 'block_show_title'),
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 12, $this->getSourceContext()); })()), "SonataAdminBundle:CRUD:base_show.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bfefb6e8f4e6ed6e08708fd0599efd6f745590d846c33be3da8fd980efdd33ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfefb6e8f4e6ed6e08708fd0599efd6f745590d846c33be3da8fd980efdd33ef->enter($__internal_bfefb6e8f4e6ed6e08708fd0599efd6f745590d846c33be3da8fd980efdd33ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show.html.twig"));

        $__internal_8d0f12cce6b133cfc4ece7ddb1bdb5e18526a9391d07ede2354acdee6f1b29d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d0f12cce6b133cfc4ece7ddb1bdb5e18526a9391d07ede2354acdee6f1b29d5->enter($__internal_8d0f12cce6b133cfc4ece7ddb1bdb5e18526a9391d07ede2354acdee6f1b29d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfefb6e8f4e6ed6e08708fd0599efd6f745590d846c33be3da8fd980efdd33ef->leave($__internal_bfefb6e8f4e6ed6e08708fd0599efd6f745590d846c33be3da8fd980efdd33ef_prof);

        
        $__internal_8d0f12cce6b133cfc4ece7ddb1bdb5e18526a9391d07ede2354acdee6f1b29d5->leave($__internal_8d0f12cce6b133cfc4ece7ddb1bdb5e18526a9391d07ede2354acdee6f1b29d5_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_b718ded1a80ea6ddb0040dff51437825c70514cded71ed26ff78a202c8081b07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b718ded1a80ea6ddb0040dff51437825c70514cded71ed26ff78a202c8081b07->enter($__internal_b718ded1a80ea6ddb0040dff51437825c70514cded71ed26ff78a202c8081b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8d36feae2476dcc2f84f05aa9475895c8a7efd4a185eaa16f1125be38f851d1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d36feae2476dcc2f84f05aa9475895c8a7efd4a185eaa16f1125be38f851d1d->enter($__internal_8d36feae2476dcc2f84f05aa9475895c8a7efd4a185eaa16f1125be38f851d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_show", array("%name%" => twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 15, $this->getSourceContext()); })()), "toString", array(0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 15, $this->getSourceContext()); })())), "method"), 15)), "SonataAdminBundle"), "html", null, true);
        echo "
";
        
        $__internal_8d36feae2476dcc2f84f05aa9475895c8a7efd4a185eaa16f1125be38f851d1d->leave($__internal_8d36feae2476dcc2f84f05aa9475895c8a7efd4a185eaa16f1125be38f851d1d_prof);

        
        $__internal_b718ded1a80ea6ddb0040dff51437825c70514cded71ed26ff78a202c8081b07->leave($__internal_b718ded1a80ea6ddb0040dff51437825c70514cded71ed26ff78a202c8081b07_prof);

    }

    // line 18
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_5c6f08ac634156a79806992a79448a1c9c7c42bc409b44c316d7993e0cbcab31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c6f08ac634156a79806992a79448a1c9c7c42bc409b44c316d7993e0cbcab31->enter($__internal_5c6f08ac634156a79806992a79448a1c9c7c42bc409b44c316d7993e0cbcab31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        $__internal_659de7edf6af5390025ae7048358a63105633c81cf699369e597628a8221250a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_659de7edf6af5390025ae7048358a63105633c81cf699369e597628a8221250a->enter($__internal_659de7edf6af5390025ae7048358a63105633c81cf699369e597628a8221250a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 19
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_659de7edf6af5390025ae7048358a63105633c81cf699369e597628a8221250a->leave($__internal_659de7edf6af5390025ae7048358a63105633c81cf699369e597628a8221250a_prof);

        
        $__internal_5c6f08ac634156a79806992a79448a1c9c7c42bc409b44c316d7993e0cbcab31->leave($__internal_5c6f08ac634156a79806992a79448a1c9c7c42bc409b44c316d7993e0cbcab31_prof);

    }

    // line 22
    public function block_actions($context, array $blocks = array())
    {
        $__internal_421459d57b7964e1eabbb9504f17515dc980d28a23876838175035ffbe7deebc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_421459d57b7964e1eabbb9504f17515dc980d28a23876838175035ffbe7deebc->enter($__internal_421459d57b7964e1eabbb9504f17515dc980d28a23876838175035ffbe7deebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_5ef7012741be64574ffe845c01d2d999ccfe26be8899512486847a8fadd0f161 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ef7012741be64574ffe845c01d2d999ccfe26be8899512486847a8fadd0f161->enter($__internal_5ef7012741be64574ffe845c01d2d999ccfe26be8899512486847a8fadd0f161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 23
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_show.html.twig", 23)->display($context);
        
        $__internal_5ef7012741be64574ffe845c01d2d999ccfe26be8899512486847a8fadd0f161->leave($__internal_5ef7012741be64574ffe845c01d2d999ccfe26be8899512486847a8fadd0f161_prof);

        
        $__internal_421459d57b7964e1eabbb9504f17515dc980d28a23876838175035ffbe7deebc->leave($__internal_421459d57b7964e1eabbb9504f17515dc980d28a23876838175035ffbe7deebc_prof);

    }

    // line 26
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_c7b141ecf0d82156a854d086273c61e0a31a4f164c013b3c97c6f7b7b7a6659f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7b141ecf0d82156a854d086273c61e0a31a4f164c013b3c97c6f7b7b7a6659f->enter($__internal_c7b141ecf0d82156a854d086273c61e0a31a4f164c013b3c97c6f7b7b7a6659f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_5721f06aa626ac7dbb780a2c1c93a7a594a0641ea6a293be9f0146a2216f036b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5721f06aa626ac7dbb780a2c1c93a7a594a0641ea6a293be9f0146a2216f036b->enter($__internal_5721f06aa626ac7dbb780a2c1c93a7a594a0641ea6a293be9f0146a2216f036b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 27
        echo "    ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 27, $this->getSourceContext()); })()), "sidemenu", array(0 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 27, $this->getSourceContext()); })())), "method"), array("currentClass" => "active", "template" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 29
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 29, $this->getSourceContext()); })()), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        // line 30
        echo "
";
        
        $__internal_5721f06aa626ac7dbb780a2c1c93a7a594a0641ea6a293be9f0146a2216f036b->leave($__internal_5721f06aa626ac7dbb780a2c1c93a7a594a0641ea6a293be9f0146a2216f036b_prof);

        
        $__internal_c7b141ecf0d82156a854d086273c61e0a31a4f164c013b3c97c6f7b7b7a6659f->leave($__internal_c7b141ecf0d82156a854d086273c61e0a31a4f164c013b3c97c6f7b7b7a6659f_prof);

    }

    // line 33
    public function block_show($context, array $blocks = array())
    {
        $__internal_b24c6df16667befd33a079eebbbf388a539d9408b8e36d2a5157c26aa217ee2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b24c6df16667befd33a079eebbbf388a539d9408b8e36d2a5157c26aa217ee2c->enter($__internal_b24c6df16667befd33a079eebbbf388a539d9408b8e36d2a5157c26aa217ee2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        $__internal_1b1b8aa476cbd90fea070b503f09fd0193794e7b19db2a65dbe0a829f1f3d540 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b1b8aa476cbd90fea070b503f09fd0193794e7b19db2a65dbe0a829f1f3d540->enter($__internal_1b1b8aa476cbd90fea070b503f09fd0193794e7b19db2a65dbe0a829f1f3d540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        // line 34
        echo "    <div class=\"sonata-ba-view\">

        ";
        // line 36
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.show.top", array("admin" => (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 36, $this->getSourceContext()); })()), "object" => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 36, $this->getSourceContext()); })()))));
        echo "

        ";
        // line 38
        $context["has_tab"] = (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 38, $this->getSourceContext()); })()), "showtabs", array())) == 1) && (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_array_keys_filter(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 38, $this->getSourceContext()); })()), "showtabs", array())), 0, array(), "array") != "default")) || (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 38, $this->getSourceContext()); })()), "showtabs", array())) > 1));
        // line 39
        echo "
        ";
        // line 40
        if ((isset($context["has_tab"]) || array_key_exists("has_tab", $context) ? $context["has_tab"] : (function () { throw new Twig_Error_Runtime('Variable "has_tab" does not exist.', 40, $this->getSourceContext()); })())) {
            // line 41
            echo "            <div class=\"nav-tabs-custom\">
                <ul class=\"nav nav-tabs\" role=\"tablist\">
                    ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 43, $this->getSourceContext()); })()), "showtabs", array()));
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
            foreach ($context['_seq'] as $context["name"] => $context["show_tab"]) {
                // line 44
                echo "                        <li";
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "first", array())) {
                    echo " class=\"active\"";
                }
                echo ">
                            <a href=\"#tab_";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 45, $this->getSourceContext()); })()), "uniqid", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
                echo "\" data-toggle=\"tab\">
                                <i class=\"fa fa-exclamation-circle has-errors hide\" aria-hidden=\"true\"></i>
                                ";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["name"], array(), ((twig_get_attribute($this->env, $this->getSourceContext(), $context["show_tab"], "translation_domain", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["show_tab"], "translation_domain", array())) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 47, $this->getSourceContext()); })()), "translationDomain", array())))), "html", null, true);
                echo "
                            </a>
                        </li>
                    ";
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['show_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                </ul>

                <div class=\"tab-content\">
                    ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 54, $this->getSourceContext()); })()), "showtabs", array()));
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
            foreach ($context['_seq'] as $context["code"] => $context["show_tab"]) {
                // line 55
                echo "                        <div
                                class=\"tab-pane fade";
                // line 56
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "first", array())) {
                    echo " in active";
                }
                echo "\"
                                id=\"tab_";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 57, $this->getSourceContext()); })()), "uniqid", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
                echo "\"
                        >
                            <div class=\"box-body  container-fluid\">
                                <div class=\"sonata-ba-collapsed-fields\">
                                    ";
                // line 61
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["show_tab"], "description", array()) != false)) {
                    // line 62
                    echo "                                        <p>";
                    echo twig_get_attribute($this->env, $this->getSourceContext(), $context["show_tab"], "description", array());
                    echo "</p>
                                    ";
                }
                // line 64
                echo "
                                    ";
                // line 65
                $context["groups"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["show_tab"], "groups", array());
                // line 66
                echo "                                    ";
                $this->displayBlock("show_groups", $context, $blocks);
                echo "
                                </div>
                            </div>
                        </div>
                    ";
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
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['show_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "                </div>
            </div>
        ";
        } elseif (twig_test_iterable(twig_get_attribute($this->env, $this->getSourceContext(),         // line 73
(isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 73, $this->getSourceContext()); })()), "showtabs", array()))) {
            // line 74
            echo "            ";
            $context["groups"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 74, $this->getSourceContext()); })()), "showtabs", array()), "default", array()), "groups", array());
            // line 75
            echo "            ";
            $this->displayBlock("show_groups", $context, $blocks);
            echo "
        ";
        }
        // line 77
        echo "
    </div>

    ";
        // line 80
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.show.bottom", array("admin" => (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 80, $this->getSourceContext()); })()), "object" => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 80, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_1b1b8aa476cbd90fea070b503f09fd0193794e7b19db2a65dbe0a829f1f3d540->leave($__internal_1b1b8aa476cbd90fea070b503f09fd0193794e7b19db2a65dbe0a829f1f3d540_prof);

        
        $__internal_b24c6df16667befd33a079eebbbf388a539d9408b8e36d2a5157c26aa217ee2c->leave($__internal_b24c6df16667befd33a079eebbbf388a539d9408b8e36d2a5157c26aa217ee2c_prof);

    }

    // line 83
    public function block_show_groups($context, array $blocks = array())
    {
        $__internal_91a6cc603df771d70af987ac215a0f8e77b19f9354136d149c13103995a2eced = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91a6cc603df771d70af987ac215a0f8e77b19f9354136d149c13103995a2eced->enter($__internal_91a6cc603df771d70af987ac215a0f8e77b19f9354136d149c13103995a2eced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_groups"));

        $__internal_92aa15e2d366f072a1e6aecd92ec5c7532b381411c48e6a3bf20df0ad523664e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92aa15e2d366f072a1e6aecd92ec5c7532b381411c48e6a3bf20df0ad523664e->enter($__internal_92aa15e2d366f072a1e6aecd92ec5c7532b381411c48e6a3bf20df0ad523664e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_groups"));

        // line 84
        echo "    <div class=\"row\">
        ";
        // line 85
        $this->displayBlock('field_row', $context, $blocks);
        // line 117
        echo "
    </div>
";
        
        $__internal_92aa15e2d366f072a1e6aecd92ec5c7532b381411c48e6a3bf20df0ad523664e->leave($__internal_92aa15e2d366f072a1e6aecd92ec5c7532b381411c48e6a3bf20df0ad523664e_prof);

        
        $__internal_91a6cc603df771d70af987ac215a0f8e77b19f9354136d149c13103995a2eced->leave($__internal_91a6cc603df771d70af987ac215a0f8e77b19f9354136d149c13103995a2eced_prof);

    }

    // line 85
    public function block_field_row($context, array $blocks = array())
    {
        $__internal_616b719c4dbb2e6241aadb7c06f8420454bb763676b74a6944bf31f478d05cc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_616b719c4dbb2e6241aadb7c06f8420454bb763676b74a6944bf31f478d05cc8->enter($__internal_616b719c4dbb2e6241aadb7c06f8420454bb763676b74a6944bf31f478d05cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_row"));

        $__internal_2df5eb2caae2cc59f0019f1c750ab48f19cc044c5d8acdde502b600604d5271e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2df5eb2caae2cc59f0019f1c750ab48f19cc044c5d8acdde502b600604d5271e->enter($__internal_2df5eb2caae2cc59f0019f1c750ab48f19cc044c5d8acdde502b600604d5271e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_row"));

        // line 86
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new Twig_Error_Runtime('Variable "groups" does not exist.', 86, $this->getSourceContext()); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
            // line 87
            echo "                ";
            $context["show_group"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 87, $this->getSourceContext()); })()), "showgroups", array()), $context["code"], array(), "array");
            // line 88
            echo "
                <div class=\"";
            // line 89
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["show_group"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["show_group"] ?? null), "class", array()), "col-md-12")) : ("col-md-12")), "html", null, true);
            echo " ";
            echo ((((array_key_exists("no_padding", $context)) ? (_twig_default_filter((isset($context["no_padding"]) || array_key_exists("no_padding", $context) ? $context["no_padding"] : (function () { throw new Twig_Error_Runtime('Variable "no_padding" does not exist.', 89, $this->getSourceContext()); })()), false)) : (false))) ? ("nopadding") : (""));
            echo "\">
                    <div class=\"";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["show_group"]) || array_key_exists("show_group", $context) ? $context["show_group"] : (function () { throw new Twig_Error_Runtime('Variable "show_group" does not exist.', 90, $this->getSourceContext()); })()), "box_class", array()), "html", null, true);
            echo "\">
                        <div class=\"box-header\">
                            <h4 class=\"box-title\">
                                ";
            // line 93
            $this->displayBlock('show_title', $context, $blocks);
            // line 96
            echo "                            </h4>
                        </div>
                        <div class=\"box-body table-responsive no-padding\">
                            <table class=\"table\">
                                <tbody>
                                ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["show_group"]) || array_key_exists("show_group", $context) ? $context["show_group"] : (function () { throw new Twig_Error_Runtime('Variable "show_group" does not exist.', 101, $this->getSourceContext()); })()), "fields", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 102
                echo "                                    ";
                $this->displayBlock('show_field', $context, $blocks);
                // line 109
                echo "                                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "        ";
        
        $__internal_2df5eb2caae2cc59f0019f1c750ab48f19cc044c5d8acdde502b600604d5271e->leave($__internal_2df5eb2caae2cc59f0019f1c750ab48f19cc044c5d8acdde502b600604d5271e_prof);

        
        $__internal_616b719c4dbb2e6241aadb7c06f8420454bb763676b74a6944bf31f478d05cc8->leave($__internal_616b719c4dbb2e6241aadb7c06f8420454bb763676b74a6944bf31f478d05cc8_prof);

    }

    // line 93
    public function block_show_title($context, array $blocks = array())
    {
        $__internal_d0c933b57c9939a830b903cb1ed55a9b15f6286871ffc2fa29f1b04a8b48a73a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0c933b57c9939a830b903cb1ed55a9b15f6286871ffc2fa29f1b04a8b48a73a->enter($__internal_d0c933b57c9939a830b903cb1ed55a9b15f6286871ffc2fa29f1b04a8b48a73a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        $__internal_24a7f0ed3c5eb703bca6e2374f0ede98c8a891c6a2dacaa9c222af4c96036090 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24a7f0ed3c5eb703bca6e2374f0ede98c8a891c6a2dacaa9c222af4c96036090->enter($__internal_24a7f0ed3c5eb703bca6e2374f0ede98c8a891c6a2dacaa9c222af4c96036090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        // line 94
        echo "                                    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["show_group"]) || array_key_exists("show_group", $context) ? $context["show_group"] : (function () { throw new Twig_Error_Runtime('Variable "show_group" does not exist.', 94, $this->getSourceContext()); })()), "name", array()), array(), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["show_group"] ?? null), "translation_domain", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["show_group"] ?? null), "translation_domain", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 94, $this->getSourceContext()); })()), "translationDomain", array()))) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 94, $this->getSourceContext()); })()), "translationDomain", array())))), "html", null, true);
        echo "
                                ";
        
        $__internal_24a7f0ed3c5eb703bca6e2374f0ede98c8a891c6a2dacaa9c222af4c96036090->leave($__internal_24a7f0ed3c5eb703bca6e2374f0ede98c8a891c6a2dacaa9c222af4c96036090_prof);

        
        $__internal_d0c933b57c9939a830b903cb1ed55a9b15f6286871ffc2fa29f1b04a8b48a73a->leave($__internal_d0c933b57c9939a830b903cb1ed55a9b15f6286871ffc2fa29f1b04a8b48a73a_prof);

    }

    // line 102
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_0b574bcb02ba512a073ff5a8dc0af90c5562d694d7e8ccfbbcf613f5983f8214 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b574bcb02ba512a073ff5a8dc0af90c5562d694d7e8ccfbbcf613f5983f8214->enter($__internal_0b574bcb02ba512a073ff5a8dc0af90c5562d694d7e8ccfbbcf613f5983f8214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        $__internal_61feddec4fcd578089a63bcfee47bdcb4a2c1eb302a6d84637344b9da224ea78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61feddec4fcd578089a63bcfee47bdcb4a2c1eb302a6d84637344b9da224ea78->enter($__internal_61feddec4fcd578089a63bcfee47bdcb4a2c1eb302a6d84637344b9da224ea78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 103
        echo "                                        <tr class=\"sonata-ba-view-container\">
                                            ";
        // line 104
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["elements"] ?? null), (isset($context["field_name"]) || array_key_exists("field_name", $context) ? $context["field_name"] : (function () { throw new Twig_Error_Runtime('Variable "field_name" does not exist.', 104, $this->getSourceContext()); })()), array(), "array", true, true)) {
            // line 105
            echo "                                                ";
            echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElement($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["elements"]) || array_key_exists("elements", $context) ? $context["elements"] : (function () { throw new Twig_Error_Runtime('Variable "elements" does not exist.', 105, $this->getSourceContext()); })()), (isset($context["field_name"]) || array_key_exists("field_name", $context) ? $context["field_name"] : (function () { throw new Twig_Error_Runtime('Variable "field_name" does not exist.', 105, $this->getSourceContext()); })()), array(), "array"), (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 105, $this->getSourceContext()); })()));
            echo "
                                            ";
        }
        // line 107
        echo "                                        </tr>
                                    ";
        
        $__internal_61feddec4fcd578089a63bcfee47bdcb4a2c1eb302a6d84637344b9da224ea78->leave($__internal_61feddec4fcd578089a63bcfee47bdcb4a2c1eb302a6d84637344b9da224ea78_prof);

        
        $__internal_0b574bcb02ba512a073ff5a8dc0af90c5562d694d7e8ccfbbcf613f5983f8214->leave($__internal_0b574bcb02ba512a073ff5a8dc0af90c5562d694d7e8ccfbbcf613f5983f8214_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  502 => 107,  496 => 105,  494 => 104,  491 => 103,  482 => 102,  469 => 94,  460 => 93,  450 => 116,  431 => 110,  417 => 109,  414 => 102,  397 => 101,  390 => 96,  388 => 93,  382 => 90,  376 => 89,  373 => 88,  370 => 87,  352 => 86,  343 => 85,  331 => 117,  329 => 85,  326 => 84,  317 => 83,  305 => 80,  300 => 77,  294 => 75,  291 => 74,  289 => 73,  285 => 71,  265 => 66,  263 => 65,  260 => 64,  254 => 62,  252 => 61,  243 => 57,  237 => 56,  234 => 55,  217 => 54,  212 => 51,  194 => 47,  187 => 45,  180 => 44,  163 => 43,  159 => 41,  157 => 40,  154 => 39,  152 => 38,  147 => 36,  143 => 34,  134 => 33,  123 => 30,  121 => 29,  119 => 27,  110 => 26,  100 => 23,  91 => 22,  78 => 19,  69 => 18,  56 => 15,  47 => 14,  26 => 12,);
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

{% block title %}
    {{ \"title_show\"|trans({'%name%': admin.toString(object)|truncate(15) }, 'SonataAdminBundle') }}
{% endblock %}

{% block navbar_title %}
    {{ block('title') }}
{% endblock %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}
    {{ knp_menu_render(admin.sidemenu(action), {
        'currentClass' : 'active',
        'template': sonata_admin.adminPool.getTemplate('tab_menu_template')
    }, 'twig') }}
{% endblock %}

{% block show %}
    <div class=\"sonata-ba-view\">

        {{ sonata_block_render_event('sonata.admin.show.top', { 'admin': admin, 'object': object }) }}

        {% set has_tab = (admin.showtabs|length == 1 and admin.showtabs|keys[0] != 'default') or admin.showtabs|length > 1 %}

        {% if has_tab %}
            <div class=\"nav-tabs-custom\">
                <ul class=\"nav nav-tabs\" role=\"tablist\">
                    {% for name, show_tab in admin.showtabs %}
                        <li{% if loop.first %} class=\"active\"{% endif %}>
                            <a href=\"#tab_{{ admin.uniqid }}_{{ loop.index }}\" data-toggle=\"tab\">
                                <i class=\"fa fa-exclamation-circle has-errors hide\" aria-hidden=\"true\"></i>
                                {{ name|trans({}, show_tab.translation_domain ?: admin.translationDomain) }}
                            </a>
                        </li>
                    {% endfor %}
                </ul>

                <div class=\"tab-content\">
                    {% for code, show_tab in admin.showtabs %}
                        <div
                                class=\"tab-pane fade{% if loop.first %} in active{% endif %}\"
                                id=\"tab_{{ admin.uniqid }}_{{ loop.index }}\"
                        >
                            <div class=\"box-body  container-fluid\">
                                <div class=\"sonata-ba-collapsed-fields\">
                                    {% if show_tab.description != false %}
                                        <p>{{ show_tab.description|raw }}</p>
                                    {% endif %}

                                    {% set groups = show_tab.groups %}
                                    {{ block('show_groups') }}
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
        {% elseif admin.showtabs is iterable %}
            {% set groups = admin.showtabs.default.groups %}
            {{ block('show_groups') }}
        {% endif %}

    </div>

    {{ sonata_block_render_event('sonata.admin.show.bottom', { 'admin': admin, 'object': object }) }}
{% endblock %}

{% block show_groups %}
    <div class=\"row\">
        {% block field_row %}
            {% for code in groups %}
                {% set show_group = admin.showgroups[code] %}

                <div class=\"{{ show_group.class|default('col-md-12') }} {{ no_padding|default(false) ? 'nopadding' }}\">
                    <div class=\"{{ show_group.box_class }}\">
                        <div class=\"box-header\">
                            <h4 class=\"box-title\">
                                {% block show_title %}
                                    {{ show_group.name|trans({}, show_group.translation_domain|default(admin.translationDomain)) }}
                                {% endblock %}
                            </h4>
                        </div>
                        <div class=\"box-body table-responsive no-padding\">
                            <table class=\"table\">
                                <tbody>
                                {% for field_name in show_group.fields %}
                                    {% block show_field %}
                                        <tr class=\"sonata-ba-view-container\">
                                            {% if elements[field_name] is defined %}
                                                {{ elements[field_name]|render_view_element(object)}}
                                            {% endif %}
                                        </tr>
                                    {% endblock %}
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            {% endfor %}
        {% endblock %}

    </div>
{% endblock %}
", "SonataAdminBundle:CRUD:base_show.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_show.html.twig");
    }
}

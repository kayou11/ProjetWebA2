<?php

/* SonataAdminBundle:Core:tab_menu_template.html.twig */
class __TwigTemplate_faa54e38bcfabc18ac40ee74c6aeffe13d2c17a96776f6b09253875418dcbb3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "SonataAdminBundle:Core:tab_menu_template.html.twig", 1);
        $this->blocks = array(
            'item' => array($this, 'block_item'),
            'dividerElement' => array($this, 'block_dividerElement'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'dropdownElement' => array($this, 'block_dropdownElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a48cc7fe8ea3b7caf4bc9ca08b117a89a322ca94a026d00081d9143b5029ff38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a48cc7fe8ea3b7caf4bc9ca08b117a89a322ca94a026d00081d9143b5029ff38->enter($__internal_a48cc7fe8ea3b7caf4bc9ca08b117a89a322ca94a026d00081d9143b5029ff38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:tab_menu_template.html.twig"));

        $__internal_53b92128f9c61bf46687130bdecd2917999f45c0e846c4b32d4264a005069b9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53b92128f9c61bf46687130bdecd2917999f45c0e846c4b32d4264a005069b9e->enter($__internal_53b92128f9c61bf46687130bdecd2917999f45c0e846c4b32d4264a005069b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:tab_menu_template.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a48cc7fe8ea3b7caf4bc9ca08b117a89a322ca94a026d00081d9143b5029ff38->leave($__internal_a48cc7fe8ea3b7caf4bc9ca08b117a89a322ca94a026d00081d9143b5029ff38_prof);

        
        $__internal_53b92128f9c61bf46687130bdecd2917999f45c0e846c4b32d4264a005069b9e->leave($__internal_53b92128f9c61bf46687130bdecd2917999f45c0e846c4b32d4264a005069b9e_prof);

    }

    // line 3
    public function block_item($context, array $blocks = array())
    {
        $__internal_78a0bb7f8c1cd409a3e29027954137dbe68d5d97de041ce1568e9506a8a6e59c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78a0bb7f8c1cd409a3e29027954137dbe68d5d97de041ce1568e9506a8a6e59c->enter($__internal_78a0bb7f8c1cd409a3e29027954137dbe68d5d97de041ce1568e9506a8a6e59c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_c22bd9c1cc26b3813a7e7bfc7ed8b3efe8dc1a5803c9092d581d298838a309c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c22bd9c1cc26b3813a7e7bfc7ed8b3efe8dc1a5803c9092d581d298838a309c1->enter($__internal_c22bd9c1cc26b3813a7e7bfc7ed8b3efe8dc1a5803c9092d581d298838a309c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 4
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "SonataAdminBundle:Core:tab_menu_template.html.twig", 4);
        // line 5
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 5, $this->getSourceContext()); })()), "displayed", array())) {
            // line 6
            $context["attributes"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 6, $this->getSourceContext()); })()), "attributes", array());
            // line 7
            $context["is_dropdown"] = ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attributes"] ?? null), "dropdown", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attributes"] ?? null), "dropdown", array()), false)) : (false));
            // line 8
            $context["divider_prepend"] = ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attributes"] ?? null), "divider_prepend", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attributes"] ?? null), "divider_prepend", array()), false)) : (false));
            // line 9
            $context["divider_append"] = ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attributes"] ?? null), "divider_append", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attributes"] ?? null), "divider_append", array()), false)) : (false));
            // line 10
            echo "
";
            // line 12
            $context["attributes"] = twig_array_merge((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 12, $this->getSourceContext()); })()), array("dropdown" => null, "divider_prepend" => null, "divider_append" => null));
            // line 14
            if ((isset($context["divider_prepend"]) || array_key_exists("divider_prepend", $context) ? $context["divider_prepend"] : (function () { throw new Twig_Error_Runtime('Variable "divider_prepend" does not exist.', 14, $this->getSourceContext()); })())) {
                // line 15
                echo "        ";
                $this->displayBlock("dividerElement", $context, $blocks);
            }
            // line 17
            echo "
";
            // line 19
            $context["classes"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 19, $this->getSourceContext()); })()), "attribute", array(0 => "class"), "method"))) ? (array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 19, $this->getSourceContext()); })()), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 21
            if (array_key_exists("matcher", $context)) {
                echo " ";
                // line 22
                if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new Twig_Error_Runtime('Variable "matcher" does not exist.', 22, $this->getSourceContext()); })()), "isCurrent", array(0 => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 22, $this->getSourceContext()); })())), "method")) {
                    // line 23
                    $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 23, $this->getSourceContext()); })()), array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 23, $this->getSourceContext()); })()), "currentClass", array())));
                } elseif (twig_get_attribute($this->env, $this->getSourceContext(),                 // line 24
(isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new Twig_Error_Runtime('Variable "matcher" does not exist.', 24, $this->getSourceContext()); })()), "isAncestor", array(0 => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 24, $this->getSourceContext()); })()), 1 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 24, $this->getSourceContext()); })()), "depth", array())), "method")) {
                    // line 25
                    $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 25, $this->getSourceContext()); })()), array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 25, $this->getSourceContext()); })()), "ancestorClass", array())));
                }
            } else {
                // line 27
                echo " ";
                // line 28
                if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 28, $this->getSourceContext()); })()), "current", array())) {
                    // line 29
                    $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 29, $this->getSourceContext()); })()), array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 29, $this->getSourceContext()); })()), "currentClass", array())));
                } elseif (twig_get_attribute($this->env, $this->getSourceContext(),                 // line 30
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 30, $this->getSourceContext()); })()), "currentAncestor", array())) {
                    // line 31
                    $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 31, $this->getSourceContext()); })()), array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 31, $this->getSourceContext()); })()), "ancestorClass", array())));
                }
            }
            // line 35
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 35, $this->getSourceContext()); })()), "actsLikeFirst", array())) {
                // line 36
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 36, $this->getSourceContext()); })()), array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 36, $this->getSourceContext()); })()), "firstClass", array())));
            }
            // line 38
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 38, $this->getSourceContext()); })()), "actsLikeLast", array())) {
                // line 39
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 39, $this->getSourceContext()); })()), array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 39, $this->getSourceContext()); })()), "lastClass", array())));
            }
            // line 41
            echo "
";
            // line 43
            $context["childrenClasses"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 43, $this->getSourceContext()); })()), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 43, $this->getSourceContext()); })()), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 44
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) || array_key_exists("childrenClasses", $context) ? $context["childrenClasses"] : (function () { throw new Twig_Error_Runtime('Variable "childrenClasses" does not exist.', 44, $this->getSourceContext()); })()), array(0 => ("menu_level_" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 44, $this->getSourceContext()); })()), "level", array()))));
            // line 45
            echo "
";
            // line 47
            if ((isset($context["is_dropdown"]) || array_key_exists("is_dropdown", $context) ? $context["is_dropdown"] : (function () { throw new Twig_Error_Runtime('Variable "is_dropdown" does not exist.', 47, $this->getSourceContext()); })())) {
                // line 48
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 48, $this->getSourceContext()); })()), array(0 => "dropdown"));
                // line 49
                $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) || array_key_exists("childrenClasses", $context) ? $context["childrenClasses"] : (function () { throw new Twig_Error_Runtime('Variable "childrenClasses" does not exist.', 49, $this->getSourceContext()); })()), array(0 => "dropdown-menu"));
            }
            // line 51
            echo "
";
            // line 53
            if ( !twig_test_empty((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 53, $this->getSourceContext()); })()))) {
                // line 54
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 54, $this->getSourceContext()); })()), array("class" => twig_join_filter((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 54, $this->getSourceContext()); })()), " ")));
            }
            // line 56
            $context["listAttributes"] = twig_array_merge(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 56, $this->getSourceContext()); })()), "childrenAttributes", array()), array("class" => twig_join_filter((isset($context["childrenClasses"]) || array_key_exists("childrenClasses", $context) ? $context["childrenClasses"] : (function () { throw new Twig_Error_Runtime('Variable "childrenClasses" does not exist.', 56, $this->getSourceContext()); })()), " ")));
            // line 57
            echo "
";
            // line 59
            echo "    <li";
            echo $context["macros"]->macro_attributes((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 59, $this->getSourceContext()); })()));
            echo ">";
            // line 60
            if ((isset($context["is_dropdown"]) || array_key_exists("is_dropdown", $context) ? $context["is_dropdown"] : (function () { throw new Twig_Error_Runtime('Variable "is_dropdown" does not exist.', 60, $this->getSourceContext()); })())) {
                // line 61
                echo "            ";
                $this->displayBlock("dropdownElement", $context, $blocks);
            } elseif (( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(),             // line 62
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 62, $this->getSourceContext()); })()), "uri", array())) && ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 62, $this->getSourceContext()); })()), "current", array()) || twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 62, $this->getSourceContext()); })()), "currentAsLink", array())))) {
                // line 63
                echo "            ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 65
                echo "            ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 68
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    </li>";
            // line 71
            if ((isset($context["divider_append"]) || array_key_exists("divider_append", $context) ? $context["divider_append"] : (function () { throw new Twig_Error_Runtime('Variable "divider_append" does not exist.', 71, $this->getSourceContext()); })())) {
                // line 72
                echo "        ";
                $this->displayBlock("dividerElement", $context, $blocks);
            }
        }
        
        $__internal_c22bd9c1cc26b3813a7e7bfc7ed8b3efe8dc1a5803c9092d581d298838a309c1->leave($__internal_c22bd9c1cc26b3813a7e7bfc7ed8b3efe8dc1a5803c9092d581d298838a309c1_prof);

        
        $__internal_78a0bb7f8c1cd409a3e29027954137dbe68d5d97de041ce1568e9506a8a6e59c->leave($__internal_78a0bb7f8c1cd409a3e29027954137dbe68d5d97de041ce1568e9506a8a6e59c_prof);

    }

    // line 77
    public function block_dividerElement($context, array $blocks = array())
    {
        $__internal_d8269d2d1d10c8a15507e32713e93ffaef632f19b4690b0d2df3244ad613eca6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8269d2d1d10c8a15507e32713e93ffaef632f19b4690b0d2df3244ad613eca6->enter($__internal_d8269d2d1d10c8a15507e32713e93ffaef632f19b4690b0d2df3244ad613eca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dividerElement"));

        $__internal_e113c20a1b362bd4265f03f645cc579285d9aa1805c570278eff76fb5a4c437a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e113c20a1b362bd4265f03f645cc579285d9aa1805c570278eff76fb5a4c437a->enter($__internal_e113c20a1b362bd4265f03f645cc579285d9aa1805c570278eff76fb5a4c437a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dividerElement"));

        // line 78
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 78, $this->getSourceContext()); })()), "level", array()) == 1)) {
            // line 79
            echo "    <li class=\"divider-vertical\"></li>
";
        } else {
            // line 81
            echo "    <li class=\"divider\"></li>
";
        }
        
        $__internal_e113c20a1b362bd4265f03f645cc579285d9aa1805c570278eff76fb5a4c437a->leave($__internal_e113c20a1b362bd4265f03f645cc579285d9aa1805c570278eff76fb5a4c437a_prof);

        
        $__internal_d8269d2d1d10c8a15507e32713e93ffaef632f19b4690b0d2df3244ad613eca6->leave($__internal_d8269d2d1d10c8a15507e32713e93ffaef632f19b4690b0d2df3244ad613eca6_prof);

    }

    // line 85
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_9b8ccdd94aa0eb0780dad0cc1ea73ac9d84d2dbc11e720d7e1f3d9c52cd3ae8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b8ccdd94aa0eb0780dad0cc1ea73ac9d84d2dbc11e720d7e1f3d9c52cd3ae8e->enter($__internal_9b8ccdd94aa0eb0780dad0cc1ea73ac9d84d2dbc11e720d7e1f3d9c52cd3ae8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_f5c89a45c56c09883c2bb77eea8dc2e1c1e8561c2a340ae4afb9847d2fd3fac0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5c89a45c56c09883c2bb77eea8dc2e1c1e8561c2a340ae4afb9847d2fd3fac0->enter($__internal_f5c89a45c56c09883c2bb77eea8dc2e1c1e8561c2a340ae4afb9847d2fd3fac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        // line 86
        echo "    ";
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "SonataAdminBundle:Core:tab_menu_template.html.twig", 86);
        // line 87
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 87, $this->getSourceContext()); })()), "uri", array()), "html", null, true);
        echo "\"";
        echo $context["macros"]->macro_attributes(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 87, $this->getSourceContext()); })()), "linkAttributes", array()));
        echo ">
        ";
        // line 88
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 88, $this->getSourceContext()); })()), "attribute", array(0 => "icon"), "method"))) {
            // line 89
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 89, $this->getSourceContext()); })()), "attribute", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i>
        ";
        }
        // line 91
        echo "        ";
        $this->displayBlock("label", $context, $blocks);
        echo "
    </a>
";
        
        $__internal_f5c89a45c56c09883c2bb77eea8dc2e1c1e8561c2a340ae4afb9847d2fd3fac0->leave($__internal_f5c89a45c56c09883c2bb77eea8dc2e1c1e8561c2a340ae4afb9847d2fd3fac0_prof);

        
        $__internal_9b8ccdd94aa0eb0780dad0cc1ea73ac9d84d2dbc11e720d7e1f3d9c52cd3ae8e->leave($__internal_9b8ccdd94aa0eb0780dad0cc1ea73ac9d84d2dbc11e720d7e1f3d9c52cd3ae8e_prof);

    }

    // line 95
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_2d78444ba14f00328efe822719914a6a4681df3ffad8926a0d08ecb33ba62b9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d78444ba14f00328efe822719914a6a4681df3ffad8926a0d08ecb33ba62b9c->enter($__internal_2d78444ba14f00328efe822719914a6a4681df3ffad8926a0d08ecb33ba62b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_9588b2557eca3013defb7522a4d0924f0e2e2a8f383a23a5c54f5ab1d151b632 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9588b2557eca3013defb7522a4d0924f0e2e2a8f383a23a5c54f5ab1d151b632->enter($__internal_9588b2557eca3013defb7522a4d0924f0e2e2a8f383a23a5c54f5ab1d151b632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        // line 96
        echo "    ";
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "SonataAdminBundle:Core:tab_menu_template.html.twig", 96);
        // line 97
        echo "    <span ";
        echo $context["macros"]->macro_attributes(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 97, $this->getSourceContext()); })()), "labelAttributes", array()));
        echo ">
        ";
        // line 98
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 98, $this->getSourceContext()); })()), "attribute", array(0 => "icon"), "method"))) {
            // line 99
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 99, $this->getSourceContext()); })()), "attribute", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i>
        ";
        }
        // line 101
        echo "        ";
        $this->displayBlock("label", $context, $blocks);
        echo "
    </span>
";
        
        $__internal_9588b2557eca3013defb7522a4d0924f0e2e2a8f383a23a5c54f5ab1d151b632->leave($__internal_9588b2557eca3013defb7522a4d0924f0e2e2a8f383a23a5c54f5ab1d151b632_prof);

        
        $__internal_2d78444ba14f00328efe822719914a6a4681df3ffad8926a0d08ecb33ba62b9c->leave($__internal_2d78444ba14f00328efe822719914a6a4681df3ffad8926a0d08ecb33ba62b9c_prof);

    }

    // line 105
    public function block_dropdownElement($context, array $blocks = array())
    {
        $__internal_1156f1845264a2755ee4b160e21018cee97e61d46475ae8d61c4058bc2303b51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1156f1845264a2755ee4b160e21018cee97e61d46475ae8d61c4058bc2303b51->enter($__internal_1156f1845264a2755ee4b160e21018cee97e61d46475ae8d61c4058bc2303b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dropdownElement"));

        $__internal_c73da1c4c2aee0aa142c6b1895ebc0fef453dbe1ef587737728bef11b74319ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c73da1c4c2aee0aa142c6b1895ebc0fef453dbe1ef587737728bef11b74319ca->enter($__internal_c73da1c4c2aee0aa142c6b1895ebc0fef453dbe1ef587737728bef11b74319ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dropdownElement"));

        // line 106
        echo "    ";
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "SonataAdminBundle:Core:tab_menu_template.html.twig", 106);
        // line 107
        $context["classes"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 107, $this->getSourceContext()); })()), "linkAttribute", array(0 => "class"), "method"))) ? (array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 107, $this->getSourceContext()); })()), "linkAttribute", array(0 => "class"), "method"))) : (array()));
        // line 108
        $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 108, $this->getSourceContext()); })()), array(0 => "dropdown-toggle"));
        // line 109
        $context["attributes"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 109, $this->getSourceContext()); })()), "linkAttributes", array());
        // line 110
        $context["attributes"] = twig_array_merge((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 110, $this->getSourceContext()); })()), array("class" => twig_join_filter((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 110, $this->getSourceContext()); })()), " ")));
        // line 111
        $context["attributes"] = twig_array_merge((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 111, $this->getSourceContext()); })()), array("data-toggle" => "dropdown"));
        // line 112
        echo "    <a href=\"#\"";
        echo $context["macros"]->macro_attributes((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 112, $this->getSourceContext()); })()));
        echo ">
        ";
        // line 113
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 113, $this->getSourceContext()); })()), "attribute", array(0 => "icon"), "method"))) {
            // line 114
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 114, $this->getSourceContext()); })()), "attribute", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i>
        ";
        }
        // line 116
        echo "        ";
        $this->displayBlock("label", $context, $blocks);
        echo "
        <b class=\"caret\"></b>
    </a>
";
        
        $__internal_c73da1c4c2aee0aa142c6b1895ebc0fef453dbe1ef587737728bef11b74319ca->leave($__internal_c73da1c4c2aee0aa142c6b1895ebc0fef453dbe1ef587737728bef11b74319ca_prof);

        
        $__internal_1156f1845264a2755ee4b160e21018cee97e61d46475ae8d61c4058bc2303b51->leave($__internal_1156f1845264a2755ee4b160e21018cee97e61d46475ae8d61c4058bc2303b51_prof);

    }

    // line 121
    public function block_label($context, array $blocks = array())
    {
        $__internal_d7d45dc64d9940718a20d41f6609f439054f4c684f76e1f6ce8bac0c1ae13cce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7d45dc64d9940718a20d41f6609f439054f4c684f76e1f6ce8bac0c1ae13cce->enter($__internal_d7d45dc64d9940718a20d41f6609f439054f4c684f76e1f6ce8bac0c1ae13cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_c4ab132eb49b03745186e22ba29c6b7b32fe8b8f8f13d8ef627d54bc0b14fa9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4ab132eb49b03745186e22ba29c6b7b32fe8b8f8f13d8ef627d54bc0b14fa9d->enter($__internal_c4ab132eb49b03745186e22ba29c6b7b32fe8b8f8f13d8ef627d54bc0b14fa9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(),         // line 123
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 123, $this->getSourceContext()); })()), "label", array()), twig_get_attribute($this->env, $this->getSourceContext(),         // line 124
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 124, $this->getSourceContext()); })()), "getExtra", array(0 => "translation_params", 1 => array()), "method"), twig_get_attribute($this->env, $this->getSourceContext(),         // line 125
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 125, $this->getSourceContext()); })()), "getExtra", array(0 => "translation_domain", 1 => ((twig_get_attribute($this->env, $this->getSourceContext(),         // line 127
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 127, $this->getSourceContext()); })()), "getParent", array(), "method")) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 127, $this->getSourceContext()); })()), "getParent", array(), "method"), "getExtra", array(0 => "translation_domain"), "method")) : (null))), "method")), "html", null, true);
        
        $__internal_c4ab132eb49b03745186e22ba29c6b7b32fe8b8f8f13d8ef627d54bc0b14fa9d->leave($__internal_c4ab132eb49b03745186e22ba29c6b7b32fe8b8f8f13d8ef627d54bc0b14fa9d_prof);

        
        $__internal_d7d45dc64d9940718a20d41f6609f439054f4c684f76e1f6ce8bac0c1ae13cce->leave($__internal_d7d45dc64d9940718a20d41f6609f439054f4c684f76e1f6ce8bac0c1ae13cce_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:tab_menu_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 127,  355 => 125,  354 => 124,  353 => 123,  352 => 122,  343 => 121,  328 => 116,  322 => 114,  320 => 113,  315 => 112,  313 => 111,  311 => 110,  309 => 109,  307 => 108,  305 => 107,  302 => 106,  293 => 105,  279 => 101,  273 => 99,  271 => 98,  266 => 97,  263 => 96,  254 => 95,  240 => 91,  234 => 89,  232 => 88,  225 => 87,  222 => 86,  213 => 85,  201 => 81,  197 => 79,  195 => 78,  186 => 77,  173 => 72,  171 => 71,  166 => 68,  162 => 65,  158 => 63,  156 => 62,  153 => 61,  151 => 60,  147 => 59,  144 => 57,  142 => 56,  139 => 54,  137 => 53,  134 => 51,  131 => 49,  129 => 48,  127 => 47,  124 => 45,  122 => 44,  120 => 43,  117 => 41,  114 => 39,  112 => 38,  109 => 36,  107 => 35,  103 => 31,  101 => 30,  99 => 29,  97 => 28,  95 => 27,  91 => 25,  89 => 24,  87 => 23,  85 => 22,  82 => 21,  80 => 19,  77 => 17,  73 => 15,  71 => 14,  69 => 12,  66 => 10,  64 => 9,  62 => 8,  60 => 7,  58 => 6,  56 => 5,  54 => 4,  45 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu.html.twig' %}

{% block item %}
{% import \"knp_menu.html.twig\" as macros %}
{% if item.displayed %}
    {%- set attributes = item.attributes %}
    {%- set is_dropdown = attributes.dropdown|default(false) %}
    {%- set divider_prepend = attributes.divider_prepend|default(false) %}
    {%- set divider_append = attributes.divider_append|default(false) %}

{# unset bootstrap specific attributes #}
    {%- set attributes = attributes|merge({'dropdown': null, 'divider_prepend': null, 'divider_append': null }) %}

    {%- if divider_prepend %}
        {{ block('dividerElement') }}
    {%- endif %}

{# building the class of the item #}
    {%- set classes = item.attribute('class') is not empty ? [item.attribute('class')] : [] %}

    {%- if matcher is defined %} {# KnpMenu 2.0#}
        {%- if matcher.isCurrent(item) %}
            {%- set classes = classes|merge([options.currentClass]) %}
        {%- elseif matcher.isAncestor(item, options.depth) %}
            {%- set classes = classes|merge([options.ancestorClass]) %}
        {%- endif %}
    {%- else %} {# KnpMenu 1.X #}
        {%- if item.current %}
        {%- set classes = classes|merge([options.currentClass]) %}
        {%- elseif item.currentAncestor %}
        {%- set classes = classes|merge([options.ancestorClass]) %}
        {%- endif %}
    {%- endif %}

    {%- if item.actsLikeFirst %}
        {%- set classes = classes|merge([options.firstClass]) %}
    {%- endif %}
    {%- if item.actsLikeLast %}
        {%- set classes = classes|merge([options.lastClass]) %}
    {%- endif %}

{# building the class of the children #}
    {%- set childrenClasses = item.childrenAttribute('class') is not empty ? [item.childrenAttribute('class')] : [] %}
    {%- set childrenClasses = childrenClasses|merge(['menu_level_' ~ item.level]) %}

{# adding classes for dropdown #}
    {%- if is_dropdown %}
        {%- set classes = classes|merge(['dropdown']) %}
        {%- set childrenClasses = childrenClasses|merge(['dropdown-menu']) %}
    {%- endif %}

{# putting classes together #}
    {%- if classes is not empty %}
        {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}
    {%- endif %}
    {%- set listAttributes = item.childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}

{# displaying the item #}
    <li{{ macros.attributes(attributes) }}>
        {%- if is_dropdown %}
            {{ block('dropdownElement') }}
        {%- elseif item.uri is not empty and (not item.current or options.currentAsLink) %}
            {{ block('linkElement') }}
        {%- else %}
            {{ block('spanElement') }}
        {%- endif %}
{# render the list of children#}
        {{ block('list') }}
    </li>

    {%- if divider_append %}
        {{ block('dividerElement') }}
    {%- endif %}
{% endif %}
{% endblock %}

{% block dividerElement %}
{% if item.level == 1 %}
    <li class=\"divider-vertical\"></li>
{% else %}
    <li class=\"divider\"></li>
{% endif %}
{% endblock %}

{% block linkElement %}
    {% import \"knp_menu.html.twig\" as macros %}
    <a href=\"{{ item.uri }}\"{{ macros.attributes(item.linkAttributes) }}>
        {% if item.attribute('icon') is not empty  %}
            <i class=\"{{ item.attribute('icon') }}\"></i>
        {% endif %}
        {{ block('label') }}
    </a>
{% endblock %}

{% block spanElement %}
    {% import \"knp_menu.html.twig\" as macros %}
    <span {{ macros.attributes(item.labelAttributes) }}>
        {% if item.attribute('icon') is not empty  %}
            <i class=\"{{ item.attribute('icon') }}\"></i>
        {% endif %}
        {{ block('label') }}
    </span>
{% endblock %}

{% block dropdownElement %}
    {% import \"knp_menu.html.twig\" as macros %}
    {%- set classes = item.linkAttribute('class') is not empty ? [item.linkAttribute('class')] : [] %}
    {%- set classes = classes|merge(['dropdown-toggle']) %}
    {%- set attributes = item.linkAttributes %}
    {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}
    {%- set attributes = attributes|merge({'data-toggle': 'dropdown'}) %}
    <a href=\"#\"{{ macros.attributes(attributes) }}>
        {% if item.attribute('icon') is not empty  %}
            <i class=\"{{ item.attribute('icon') }}\"></i>
        {% endif %}
        {{ block('label') }}
        <b class=\"caret\"></b>
    </a>
{% endblock %}

{% block label %}
{{-
    item.label|trans(
        item.getExtra('translation_params', {}),
        item.getExtra(
            'translation_domain',
            item.getParent() ? item.getParent().getExtra('translation_domain') : null
        )
    )
-}}
{% endblock %}
", "SonataAdminBundle:Core:tab_menu_template.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/Core/tab_menu_template.html.twig");
    }
}

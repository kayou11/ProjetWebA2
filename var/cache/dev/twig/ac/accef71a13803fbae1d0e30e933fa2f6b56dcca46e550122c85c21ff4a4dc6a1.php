<?php

/* SonataBlockBundle:Block:block_side_menu_template.html.twig */
class __TwigTemplate_ac4ec81c29e7f4dfcf01319644afc2e99587f1ad0a5b54f522a068c419e819ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "SonataBlockBundle:Block:block_side_menu_template.html.twig", 12);
        $this->blocks = array(
            'list' => array($this, 'block_list'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_391c1ba6184eea1231644502cb5e98a2af3aee7d8bb5d6bab8d7e9823640a6f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_391c1ba6184eea1231644502cb5e98a2af3aee7d8bb5d6bab8d7e9823640a6f2->enter($__internal_391c1ba6184eea1231644502cb5e98a2af3aee7d8bb5d6bab8d7e9823640a6f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_side_menu_template.html.twig"));

        $__internal_eaa5ae465b98320764495cb9b282a790161b9990e5ff293921b4a58602e52bf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaa5ae465b98320764495cb9b282a790161b9990e5ff293921b4a58602e52bf6->enter($__internal_eaa5ae465b98320764495cb9b282a790161b9990e5ff293921b4a58602e52bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_side_menu_template.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_391c1ba6184eea1231644502cb5e98a2af3aee7d8bb5d6bab8d7e9823640a6f2->leave($__internal_391c1ba6184eea1231644502cb5e98a2af3aee7d8bb5d6bab8d7e9823640a6f2_prof);

        
        $__internal_eaa5ae465b98320764495cb9b282a790161b9990e5ff293921b4a58602e52bf6->leave($__internal_eaa5ae465b98320764495cb9b282a790161b9990e5ff293921b4a58602e52bf6_prof);

    }

    // line 14
    public function block_list($context, array $blocks = array())
    {
        $__internal_3b38be7520ec20d63b0a2c791fba972dac7b9bb5acd3894d2780f3430955b2fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b38be7520ec20d63b0a2c791fba972dac7b9bb5acd3894d2780f3430955b2fd->enter($__internal_3b38be7520ec20d63b0a2c791fba972dac7b9bb5acd3894d2780f3430955b2fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_39eed6c7ba7d85f4a81a31756eca426f91e27cc6285168bb604dee8c00b1e862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39eed6c7ba7d85f4a81a31756eca426f91e27cc6285168bb604dee8c00b1e862->enter($__internal_39eed6c7ba7d85f4a81a31756eca426f91e27cc6285168bb604dee8c00b1e862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 15
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "SonataBlockBundle:Block:block_side_menu_template.html.twig", 15);
        // line 16
        echo "    ";
        if (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 16, $this->getSourceContext()); })()), "hasChildren", array()) &&  !(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 16, $this->getSourceContext()); })()), "depth", array()) === 0)) && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 16, $this->getSourceContext()); })()), "displayChildren", array()))) {
            // line 17
            echo "        <div";
            echo $context["macros"]->macro_attributes((isset($context["listAttributes"]) || array_key_exists("listAttributes", $context) ? $context["listAttributes"] : (function () { throw new Twig_Error_Runtime('Variable "listAttributes" does not exist.', 17, $this->getSourceContext()); })()));
            echo ">
            ";
            // line 18
            $this->displayBlock("children", $context, $blocks);
            echo "
        </div>
    ";
        }
        
        $__internal_39eed6c7ba7d85f4a81a31756eca426f91e27cc6285168bb604dee8c00b1e862->leave($__internal_39eed6c7ba7d85f4a81a31756eca426f91e27cc6285168bb604dee8c00b1e862_prof);

        
        $__internal_3b38be7520ec20d63b0a2c791fba972dac7b9bb5acd3894d2780f3430955b2fd->leave($__internal_3b38be7520ec20d63b0a2c791fba972dac7b9bb5acd3894d2780f3430955b2fd_prof);

    }

    // line 23
    public function block_item($context, array $blocks = array())
    {
        $__internal_7e138bb6c1e2aeddb72e9956e4610b918e1cdcfe8be0e74a9c8f6883992f8ba1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e138bb6c1e2aeddb72e9956e4610b918e1cdcfe8be0e74a9c8f6883992f8ba1->enter($__internal_7e138bb6c1e2aeddb72e9956e4610b918e1cdcfe8be0e74a9c8f6883992f8ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_4f36c15ed0fcdf7fd0b0f8595cb9d6f9a14e64733e89d9798f9b5213410bb513 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f36c15ed0fcdf7fd0b0f8595cb9d6f9a14e64733e89d9798f9b5213410bb513->enter($__internal_4f36c15ed0fcdf7fd0b0f8595cb9d6f9a14e64733e89d9798f9b5213410bb513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 24
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "SonataBlockBundle:Block:block_side_menu_template.html.twig", 24);
        // line 25
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 25, $this->getSourceContext()); })()), "displayed", array())) {
            // line 26
            echo "        ";
            // line 27
            $context["classes"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 27, $this->getSourceContext()); })()), "attribute", array(0 => "class"), "method"))) ? (array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 27, $this->getSourceContext()); })()), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 28
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new Twig_Error_Runtime('Variable "matcher" does not exist.', 28, $this->getSourceContext()); })()), "isCurrent", array(0 => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 28, $this->getSourceContext()); })())), "method")) {
                // line 29
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 29, $this->getSourceContext()); })()), array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 29, $this->getSourceContext()); })()), "currentClass", array())));
            } elseif (twig_get_attribute($this->env, $this->getSourceContext(),             // line 30
(isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new Twig_Error_Runtime('Variable "matcher" does not exist.', 30, $this->getSourceContext()); })()), "isAncestor", array(0 => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 30, $this->getSourceContext()); })()), 1 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 30, $this->getSourceContext()); })()), "depth", array())), "method")) {
                // line 31
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 31, $this->getSourceContext()); })()), array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 31, $this->getSourceContext()); })()), "ancestorClass", array())));
            }
            // line 33
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 33, $this->getSourceContext()); })()), "actsLikeFirst", array())) {
                // line 34
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 34, $this->getSourceContext()); })()), array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 34, $this->getSourceContext()); })()), "firstClass", array())));
            }
            // line 36
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 36, $this->getSourceContext()); })()), "actsLikeLast", array())) {
                // line 37
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 37, $this->getSourceContext()); })()), array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 37, $this->getSourceContext()); })()), "lastClass", array())));
            }
            // line 39
            $context["attributes"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 39, $this->getSourceContext()); })()), "attributes", array());
            // line 40
            if ( !twig_test_empty((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 40, $this->getSourceContext()); })()))) {
                // line 41
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 41, $this->getSourceContext()); })()), array("class" => twig_join_filter((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 41, $this->getSourceContext()); })()), " ")));
            }
            // line 43
            echo "        ";
            // line 44
            if (( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 44, $this->getSourceContext()); })()), "uri", array())) && ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 44, $this->getSourceContext()); })()), "current", array()) || twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 44, $this->getSourceContext()); })()), "currentAsLink", array())))) {
                // line 45
                echo "            ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 47
                echo "            ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 49
            echo "        ";
            // line 50
            $context["childrenClasses"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 50, $this->getSourceContext()); })()), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 50, $this->getSourceContext()); })()), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 51
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) || array_key_exists("childrenClasses", $context) ? $context["childrenClasses"] : (function () { throw new Twig_Error_Runtime('Variable "childrenClasses" does not exist.', 51, $this->getSourceContext()); })()), array(0 => ("menu_level_" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 51, $this->getSourceContext()); })()), "level", array()))));
            // line 52
            $context["listAttributes"] = twig_array_merge(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 52, $this->getSourceContext()); })()), "childrenAttributes", array()), array("class" => twig_join_filter((isset($context["childrenClasses"]) || array_key_exists("childrenClasses", $context) ? $context["childrenClasses"] : (function () { throw new Twig_Error_Runtime('Variable "childrenClasses" does not exist.', 52, $this->getSourceContext()); })()), " ")));
            // line 53
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_4f36c15ed0fcdf7fd0b0f8595cb9d6f9a14e64733e89d9798f9b5213410bb513->leave($__internal_4f36c15ed0fcdf7fd0b0f8595cb9d6f9a14e64733e89d9798f9b5213410bb513_prof);

        
        $__internal_7e138bb6c1e2aeddb72e9956e4610b918e1cdcfe8be0e74a9c8f6883992f8ba1->leave($__internal_7e138bb6c1e2aeddb72e9956e4610b918e1cdcfe8be0e74a9c8f6883992f8ba1_prof);

    }

    // line 57
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_dafc42502cf2a995176c31aa052d6473fe60cdccf5dd1c7e1ab37a3fc147481d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dafc42502cf2a995176c31aa052d6473fe60cdccf5dd1c7e1ab37a3fc147481d->enter($__internal_dafc42502cf2a995176c31aa052d6473fe60cdccf5dd1c7e1ab37a3fc147481d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_48dfeabbe95baf0bd659e780fc7c0e08be7162694cc9f00217d6b2fc120d153d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48dfeabbe95baf0bd659e780fc7c0e08be7162694cc9f00217d6b2fc120d153d->enter($__internal_48dfeabbe95baf0bd659e780fc7c0e08be7162694cc9f00217d6b2fc120d153d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        echo "<a href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 57, $this->getSourceContext()); })()), "uri", array()), "html", null, true);
        echo "\"";
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["macros"]) || array_key_exists("macros", $context) ? $context["macros"] : (function () { throw new Twig_Error_Runtime('Variable "macros" does not exist.', 57, $this->getSourceContext()); })()), "attributes", array(0 => twig_array_merge(twig_array_merge(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 57, $this->getSourceContext()); })()), "attributes", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 57, $this->getSourceContext()); })()), "linkAttributes", array())), (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 57, $this->getSourceContext()); })()))), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
        
        $__internal_48dfeabbe95baf0bd659e780fc7c0e08be7162694cc9f00217d6b2fc120d153d->leave($__internal_48dfeabbe95baf0bd659e780fc7c0e08be7162694cc9f00217d6b2fc120d153d_prof);

        
        $__internal_dafc42502cf2a995176c31aa052d6473fe60cdccf5dd1c7e1ab37a3fc147481d->leave($__internal_dafc42502cf2a995176c31aa052d6473fe60cdccf5dd1c7e1ab37a3fc147481d_prof);

    }

    // line 59
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_ccf0f638da364104b22cf152bcb2d5d96021f6ebb351000ba9ed80c42762a53c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccf0f638da364104b22cf152bcb2d5d96021f6ebb351000ba9ed80c42762a53c->enter($__internal_ccf0f638da364104b22cf152bcb2d5d96021f6ebb351000ba9ed80c42762a53c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_f27644eba588488f956c80d6769c30042ceeb8a4ea4448b0c9bca9dfb0ac26e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f27644eba588488f956c80d6769c30042ceeb8a4ea4448b0c9bca9dfb0ac26e4->enter($__internal_f27644eba588488f956c80d6769c30042ceeb8a4ea4448b0c9bca9dfb0ac26e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        echo "<div";
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["macros"]) || array_key_exists("macros", $context) ? $context["macros"] : (function () { throw new Twig_Error_Runtime('Variable "macros" does not exist.', 59, $this->getSourceContext()); })()), "attributes", array(0 => twig_array_merge(twig_array_merge(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 59, $this->getSourceContext()); })()), "attributes", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 59, $this->getSourceContext()); })()), "labelAttributes", array())), (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 59, $this->getSourceContext()); })()))), "method");
        echo "><h4 class=\"list-group-item-heading\">";
        $this->displayBlock("label", $context, $blocks);
        echo "</h4></div>";
        
        $__internal_f27644eba588488f956c80d6769c30042ceeb8a4ea4448b0c9bca9dfb0ac26e4->leave($__internal_f27644eba588488f956c80d6769c30042ceeb8a4ea4448b0c9bca9dfb0ac26e4_prof);

        
        $__internal_ccf0f638da364104b22cf152bcb2d5d96021f6ebb351000ba9ed80c42762a53c->leave($__internal_ccf0f638da364104b22cf152bcb2d5d96021f6ebb351000ba9ed80c42762a53c_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_side_menu_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 59,  154 => 57,  140 => 53,  138 => 52,  136 => 51,  134 => 50,  132 => 49,  128 => 47,  124 => 45,  122 => 44,  120 => 43,  117 => 41,  115 => 40,  113 => 39,  110 => 37,  108 => 36,  105 => 34,  103 => 33,  100 => 31,  98 => 30,  96 => 29,  94 => 28,  92 => 27,  90 => 26,  87 => 25,  85 => 24,  76 => 23,  62 => 18,  57 => 17,  54 => 16,  52 => 15,  43 => 14,  11 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'knp_menu.html.twig' %}

{% block list %}
{% import 'knp_menu.html.twig' as macros %}
    {% if item.hasChildren and options.depth is not same as(0) and item.displayChildren %}
        <div{{ macros.attributes(listAttributes) }}>
            {{ block('children') }}
        </div>
    {% endif %}
{% endblock %}

{% block item %}
{% import 'knp_menu.html.twig' as macros %}
    {% if item.displayed %}
        {# building the class of the item #}
        {%- set classes = item.attribute('class') is not empty ? [item.attribute('class')] : [] %}
        {%- if matcher.isCurrent(item) %}
            {%- set classes = classes|merge([options.currentClass]) %}
        {%- elseif matcher.isAncestor(item, options.depth) %}
            {%- set classes = classes|merge([options.ancestorClass]) %}
        {%- endif %}
        {%- if item.actsLikeFirst %}
            {%- set classes = classes|merge([options.firstClass]) %}
        {%- endif %}
        {%- if item.actsLikeLast %}
            {%- set classes = classes|merge([options.lastClass]) %}
        {%- endif %}
        {%- set attributes = item.attributes %}
        {%- if classes is not empty %}
            {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}
        {%- endif %}
        {# displaying the item #}
        {%- if item.uri is not empty and (not item.current or options.currentAsLink) %}
            {{ block('linkElement') }}
        {%- else %}
            {{ block('spanElement') }}
        {%- endif %}
        {# render the list of children#}
        {%- set childrenClasses = item.childrenAttribute('class') is not empty ? [item.childrenAttribute('class')] : [] %}
        {%- set childrenClasses = childrenClasses|merge(['menu_level_' ~ item.level]) %}
        {%- set listAttributes = item.childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}
        {{ block('list') }}
    {% endif %}
{% endblock %}

{% block linkElement %}<a href=\"{{ item.uri }}\"{{ macros.attributes(item.attributes|merge(item.linkAttributes)|merge(attributes)) }}>{{ block('label') }}</a>{% endblock %}

{% block spanElement %}<div{{ macros.attributes(item.attributes|merge(item.labelAttributes)|merge(attributes)) }}><h4 class=\"list-group-item-heading\">{{ block('label') }}</h4></div>{% endblock %}
", "SonataBlockBundle:Block:block_side_menu_template.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/block-bundle/Resources/views/Block/block_side_menu_template.html.twig");
    }
}

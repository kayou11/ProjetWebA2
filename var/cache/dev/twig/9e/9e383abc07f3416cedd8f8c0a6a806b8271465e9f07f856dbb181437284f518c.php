<?php

/* knp_menu.html.twig */
class __TwigTemplate_943295c1719462d446e57768fa568153b07e4b639ca2f96782f51b531073c9fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu_base.html.twig", "knp_menu.html.twig", 1);
        $this->blocks = array(
            'compressed_root' => array($this, 'block_compressed_root'),
            'root' => array($this, 'block_root'),
            'list' => array($this, 'block_list'),
            'children' => array($this, 'block_children'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_10e3f73f800ef4548f901528b8289a889810a390c9c78c2dfe40109782c6a91d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10e3f73f800ef4548f901528b8289a889810a390c9c78c2dfe40109782c6a91d->enter($__internal_10e3f73f800ef4548f901528b8289a889810a390c9c78c2dfe40109782c6a91d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu.html.twig"));

        $__internal_aa7b9a37bafff9d0e87ea2be7bd8f18c4ce64e4faf42e059a8677c8dc81bed3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa7b9a37bafff9d0e87ea2be7bd8f18c4ce64e4faf42e059a8677c8dc81bed3c->enter($__internal_aa7b9a37bafff9d0e87ea2be7bd8f18c4ce64e4faf42e059a8677c8dc81bed3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10e3f73f800ef4548f901528b8289a889810a390c9c78c2dfe40109782c6a91d->leave($__internal_10e3f73f800ef4548f901528b8289a889810a390c9c78c2dfe40109782c6a91d_prof);

        
        $__internal_aa7b9a37bafff9d0e87ea2be7bd8f18c4ce64e4faf42e059a8677c8dc81bed3c->leave($__internal_aa7b9a37bafff9d0e87ea2be7bd8f18c4ce64e4faf42e059a8677c8dc81bed3c_prof);

    }

    // line 11
    public function block_compressed_root($context, array $blocks = array())
    {
        $__internal_78f4978ca24e886212b295d547dac5716cd0beca03c618e1eb717a36bbdd08e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78f4978ca24e886212b295d547dac5716cd0beca03c618e1eb717a36bbdd08e5->enter($__internal_78f4978ca24e886212b295d547dac5716cd0beca03c618e1eb717a36bbdd08e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        $__internal_e5c2d77d08d1b45d3071458b1dac80acb9641d40120228f76dc249c848269724 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5c2d77d08d1b45d3071458b1dac80acb9641d40120228f76dc249c848269724->enter($__internal_e5c2d77d08d1b45d3071458b1dac80acb9641d40120228f76dc249c848269724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        // line 12
        ob_start();
        // line 13
        $this->displayBlock("root", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_e5c2d77d08d1b45d3071458b1dac80acb9641d40120228f76dc249c848269724->leave($__internal_e5c2d77d08d1b45d3071458b1dac80acb9641d40120228f76dc249c848269724_prof);

        
        $__internal_78f4978ca24e886212b295d547dac5716cd0beca03c618e1eb717a36bbdd08e5->leave($__internal_78f4978ca24e886212b295d547dac5716cd0beca03c618e1eb717a36bbdd08e5_prof);

    }

    // line 17
    public function block_root($context, array $blocks = array())
    {
        $__internal_f639e0e79e2160f0d1d705b5735bd65e28ce1001923faecf54b6276c73ee94cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f639e0e79e2160f0d1d705b5735bd65e28ce1001923faecf54b6276c73ee94cd->enter($__internal_f639e0e79e2160f0d1d705b5735bd65e28ce1001923faecf54b6276c73ee94cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        $__internal_9dedec39d0635fef3d69a2128cc434f134dc4280eb2349c27ae353efc48e9777 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dedec39d0635fef3d69a2128cc434f134dc4280eb2349c27ae353efc48e9777->enter($__internal_9dedec39d0635fef3d69a2128cc434f134dc4280eb2349c27ae353efc48e9777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 18
        $context["listAttributes"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttributes", array());
        // line 19
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_9dedec39d0635fef3d69a2128cc434f134dc4280eb2349c27ae353efc48e9777->leave($__internal_9dedec39d0635fef3d69a2128cc434f134dc4280eb2349c27ae353efc48e9777_prof);

        
        $__internal_f639e0e79e2160f0d1d705b5735bd65e28ce1001923faecf54b6276c73ee94cd->leave($__internal_f639e0e79e2160f0d1d705b5735bd65e28ce1001923faecf54b6276c73ee94cd_prof);

    }

    // line 22
    public function block_list($context, array $blocks = array())
    {
        $__internal_1c7f62f30ee8bf28af73895f744145c8c972d4a2a6558ff00d665592207f9269 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c7f62f30ee8bf28af73895f744145c8c972d4a2a6558ff00d665592207f9269->enter($__internal_1c7f62f30ee8bf28af73895f744145c8c972d4a2a6558ff00d665592207f9269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_e1961344290c2266176c3287c99014f0710b9505673006cf3f594b72e3d0d4bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1961344290c2266176c3287c99014f0710b9505673006cf3f594b72e3d0d4bd->enter($__internal_e1961344290c2266176c3287c99014f0710b9505673006cf3f594b72e3d0d4bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 23
        if ((($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "depth", array()) === 0)) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayChildren", array()))) {
            // line 24
            echo "    ";
            $context["knp_menu"] = $this;
            // line 25
            echo "    <ul";
            echo $context["knp_menu"]->getattributes(($context["listAttributes"] ?? $this->getContext($context, "listAttributes")));
            echo ">
        ";
            // line 26
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ul>
";
        }
        
        $__internal_e1961344290c2266176c3287c99014f0710b9505673006cf3f594b72e3d0d4bd->leave($__internal_e1961344290c2266176c3287c99014f0710b9505673006cf3f594b72e3d0d4bd_prof);

        
        $__internal_1c7f62f30ee8bf28af73895f744145c8c972d4a2a6558ff00d665592207f9269->leave($__internal_1c7f62f30ee8bf28af73895f744145c8c972d4a2a6558ff00d665592207f9269_prof);

    }

    // line 31
    public function block_children($context, array $blocks = array())
    {
        $__internal_99c243791a2f9c7f3f573a266ebe83567b5570dce04e2397e1191cab7e20d42e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99c243791a2f9c7f3f573a266ebe83567b5570dce04e2397e1191cab7e20d42e->enter($__internal_99c243791a2f9c7f3f573a266ebe83567b5570dce04e2397e1191cab7e20d42e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        $__internal_18c0f349d6c6c35292dc00d323d640263de80bfe6e2eb4d2eb4a6863ccbb2647 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18c0f349d6c6c35292dc00d323d640263de80bfe6e2eb4d2eb4a6863ccbb2647->enter($__internal_18c0f349d6c6c35292dc00d323d640263de80bfe6e2eb4d2eb4a6863ccbb2647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        // line 33
        $context["currentOptions"] = ($context["options"] ?? $this->getContext($context, "options"));
        // line 34
        $context["currentItem"] = ($context["item"] ?? $this->getContext($context, "item"));
        // line 36
        if ( !(null === $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "depth", array()))) {
            // line 37
            $context["options"] = twig_array_merge(($context["options"] ?? $this->getContext($context, "options")), array("depth" => ($this->getAttribute(($context["currentOptions"] ?? $this->getContext($context, "currentOptions")), "depth", array()) - 1)));
        }
        // line 40
        if (( !(null === $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "matchingDepth", array())) && ($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "matchingDepth", array()) > 0))) {
            // line 41
            $context["options"] = twig_array_merge(($context["options"] ?? $this->getContext($context, "options")), array("matchingDepth" => ($this->getAttribute(($context["currentOptions"] ?? $this->getContext($context, "currentOptions")), "matchingDepth", array()) - 1)));
        }
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["currentItem"] ?? $this->getContext($context, "currentItem")), "children", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 44
            echo "    ";
            $this->displayBlock("item", $context, $blocks);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        $context["item"] = ($context["currentItem"] ?? $this->getContext($context, "currentItem"));
        // line 48
        $context["options"] = ($context["currentOptions"] ?? $this->getContext($context, "currentOptions"));
        
        $__internal_18c0f349d6c6c35292dc00d323d640263de80bfe6e2eb4d2eb4a6863ccbb2647->leave($__internal_18c0f349d6c6c35292dc00d323d640263de80bfe6e2eb4d2eb4a6863ccbb2647_prof);

        
        $__internal_99c243791a2f9c7f3f573a266ebe83567b5570dce04e2397e1191cab7e20d42e->leave($__internal_99c243791a2f9c7f3f573a266ebe83567b5570dce04e2397e1191cab7e20d42e_prof);

    }

    // line 51
    public function block_item($context, array $blocks = array())
    {
        $__internal_5cb456f314d62600c57abca96715443691c703e4ec34a7c9d8386835572d79a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cb456f314d62600c57abca96715443691c703e4ec34a7c9d8386835572d79a7->enter($__internal_5cb456f314d62600c57abca96715443691c703e4ec34a7c9d8386835572d79a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_a5b4fd9311087f6728231d745cf1a97c445fed3672a55147dcf2a297bddea3cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5b4fd9311087f6728231d745cf1a97c445fed3672a55147dcf2a297bddea3cc->enter($__internal_a5b4fd9311087f6728231d745cf1a97c445fed3672a55147dcf2a297bddea3cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 52
        if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayed", array())) {
            // line 54
            $context["classes"] = (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 55
            if ($this->getAttribute(($context["matcher"] ?? $this->getContext($context, "matcher")), "isCurrent", array(0 => ($context["item"] ?? $this->getContext($context, "item"))), "method")) {
                // line 56
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "currentClass", array())));
            } elseif ($this->getAttribute(            // line 57
($context["matcher"] ?? $this->getContext($context, "matcher")), "isAncestor", array(0 => ($context["item"] ?? $this->getContext($context, "item")), 1 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "matchingDepth", array())), "method")) {
                // line 58
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "ancestorClass", array())));
            }
            // line 60
            if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "actsLikeFirst", array())) {
                // line 61
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "firstClass", array())));
            }
            // line 63
            if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "actsLikeLast", array())) {
                // line 64
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "lastClass", array())));
            }
            // line 66
            echo "
    ";
            // line 68
            echo "    ";
            if (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "depth", array()) === 0))) {
                // line 69
                echo "        ";
                if (( !twig_test_empty($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "branch_class", array())) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayChildren", array()))) {
                    // line 70
                    $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "branch_class", array())));
                    // line 71
                    echo "        ";
                }
                // line 72
                echo "    ";
            } elseif ( !twig_test_empty($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "leaf_class", array()))) {
                // line 73
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "leaf_class", array())));
            }
            // line 76
            $context["attributes"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attributes", array());
            // line 77
            if ( !twig_test_empty(($context["classes"] ?? $this->getContext($context, "classes")))) {
                // line 78
                $context["attributes"] = twig_array_merge(($context["attributes"] ?? $this->getContext($context, "attributes")), array("class" => twig_join_filter(($context["classes"] ?? $this->getContext($context, "classes")), " ")));
            }
            // line 81
            echo "    ";
            $context["knp_menu"] = $this;
            // line 82
            echo "    <li";
            echo $context["knp_menu"]->getattributes(($context["attributes"] ?? $this->getContext($context, "attributes")));
            echo ">";
            // line 83
            if (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "uri", array())) && ( !$this->getAttribute(($context["matcher"] ?? $this->getContext($context, "matcher")), "isCurrent", array(0 => ($context["item"] ?? $this->getContext($context, "item"))), "method") || $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "currentAsLink", array())))) {
                // line 84
                echo "        ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 86
                echo "        ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 89
            $context["childrenClasses"] = (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 90
            $context["childrenClasses"] = twig_array_merge(($context["childrenClasses"] ?? $this->getContext($context, "childrenClasses")), array(0 => ("menu_level_" . $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "level", array()))));
            // line 91
            $context["listAttributes"] = twig_array_merge($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => twig_join_filter(($context["childrenClasses"] ?? $this->getContext($context, "childrenClasses")), " ")));
            // line 92
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    </li>
";
        }
        
        $__internal_a5b4fd9311087f6728231d745cf1a97c445fed3672a55147dcf2a297bddea3cc->leave($__internal_a5b4fd9311087f6728231d745cf1a97c445fed3672a55147dcf2a297bddea3cc_prof);

        
        $__internal_5cb456f314d62600c57abca96715443691c703e4ec34a7c9d8386835572d79a7->leave($__internal_5cb456f314d62600c57abca96715443691c703e4ec34a7c9d8386835572d79a7_prof);

    }

    // line 97
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_84cf715694dcdba194e264482d1b8d8ba950d5ff0d690100007665aef5d72a48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84cf715694dcdba194e264482d1b8d8ba950d5ff0d690100007665aef5d72a48->enter($__internal_84cf715694dcdba194e264482d1b8d8ba950d5ff0d690100007665aef5d72a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_a7ea72c76d7d21760a5a1d6aba66cc53c903296ce9b7714feae885ebe7f72523 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7ea72c76d7d21760a5a1d6aba66cc53c903296ce9b7714feae885ebe7f72523->enter($__internal_a7ea72c76d7d21760a5a1d6aba66cc53c903296ce9b7714feae885ebe7f72523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $context["knp_menu"] = $this;
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "uri", array()), "html", null, true);
        echo "\"";
        echo $context["knp_menu"]->getattributes($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "linkAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
        
        $__internal_a7ea72c76d7d21760a5a1d6aba66cc53c903296ce9b7714feae885ebe7f72523->leave($__internal_a7ea72c76d7d21760a5a1d6aba66cc53c903296ce9b7714feae885ebe7f72523_prof);

        
        $__internal_84cf715694dcdba194e264482d1b8d8ba950d5ff0d690100007665aef5d72a48->leave($__internal_84cf715694dcdba194e264482d1b8d8ba950d5ff0d690100007665aef5d72a48_prof);

    }

    // line 99
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_7df211f4c54b2c775bf4a0dc61c9e1da4075624b0ee3bc0bd473705c2bd5e049 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7df211f4c54b2c775bf4a0dc61c9e1da4075624b0ee3bc0bd473705c2bd5e049->enter($__internal_7df211f4c54b2c775bf4a0dc61c9e1da4075624b0ee3bc0bd473705c2bd5e049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_9d40b4f09d4c0a1dbf759d67aeb71fcc45b92fc46bf93c241bde21cc304ec886 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d40b4f09d4c0a1dbf759d67aeb71fcc45b92fc46bf93c241bde21cc304ec886->enter($__internal_9d40b4f09d4c0a1dbf759d67aeb71fcc45b92fc46bf93c241bde21cc304ec886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $context["knp_menu"] = $this;
        echo "<span";
        echo $context["knp_menu"]->getattributes($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "labelAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>";
        
        $__internal_9d40b4f09d4c0a1dbf759d67aeb71fcc45b92fc46bf93c241bde21cc304ec886->leave($__internal_9d40b4f09d4c0a1dbf759d67aeb71fcc45b92fc46bf93c241bde21cc304ec886_prof);

        
        $__internal_7df211f4c54b2c775bf4a0dc61c9e1da4075624b0ee3bc0bd473705c2bd5e049->leave($__internal_7df211f4c54b2c775bf4a0dc61c9e1da4075624b0ee3bc0bd473705c2bd5e049_prof);

    }

    // line 101
    public function block_label($context, array $blocks = array())
    {
        $__internal_aa11675ee6ed794f8187c00e697d131f79899ecf565dbee8168bd01fcbe35578 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa11675ee6ed794f8187c00e697d131f79899ecf565dbee8168bd01fcbe35578->enter($__internal_aa11675ee6ed794f8187c00e697d131f79899ecf565dbee8168bd01fcbe35578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_8ba58296ede9c5eeffb5083223d3b72d9a071d37f406be874886ab202d4fc362 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ba58296ede9c5eeffb5083223d3b72d9a071d37f406be874886ab202d4fc362->enter($__internal_8ba58296ede9c5eeffb5083223d3b72d9a071d37f406be874886ab202d4fc362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        if (($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array());
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array()), "html", null, true);
        }
        
        $__internal_8ba58296ede9c5eeffb5083223d3b72d9a071d37f406be874886ab202d4fc362->leave($__internal_8ba58296ede9c5eeffb5083223d3b72d9a071d37f406be874886ab202d4fc362_prof);

        
        $__internal_aa11675ee6ed794f8187c00e697d131f79899ecf565dbee8168bd01fcbe35578->leave($__internal_aa11675ee6ed794f8187c00e697d131f79899ecf565dbee8168bd01fcbe35578_prof);

    }

    // line 3
    public function getattributes($__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_1541de9ee12604fcd207207fc478f7b758c087a59647ac9f0694a671ab31c7ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_1541de9ee12604fcd207207fc478f7b758c087a59647ac9f0694a671ab31c7ea->enter($__internal_1541de9ee12604fcd207207fc478f7b758c087a59647ac9f0694a671ab31c7ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            $__internal_ea001ca101ffd0878fe519cd1664f1c88c7e0348d0407e68a3069b36f8052d0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_ea001ca101ffd0878fe519cd1664f1c88c7e0348d0407e68a3069b36f8052d0c->enter($__internal_ea001ca101ffd0878fe519cd1664f1c88c7e0348d0407e68a3069b36f8052d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? $this->getContext($context, "attributes")));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 5
                if (( !(null === $context["value"]) &&  !($context["value"] === false))) {
                    // line 6
                    echo sprintf(" %s=\"%s\"", $context["name"], ((($context["value"] === true)) ? (twig_escape_filter($this->env, $context["name"])) : (twig_escape_filter($this->env, $context["value"]))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_ea001ca101ffd0878fe519cd1664f1c88c7e0348d0407e68a3069b36f8052d0c->leave($__internal_ea001ca101ffd0878fe519cd1664f1c88c7e0348d0407e68a3069b36f8052d0c_prof);

            
            $__internal_1541de9ee12604fcd207207fc478f7b758c087a59647ac9f0694a671ab31c7ea->leave($__internal_1541de9ee12604fcd207207fc478f7b758c087a59647ac9f0694a671ab31c7ea_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "knp_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  385 => 6,  383 => 5,  379 => 4,  361 => 3,  339 => 101,  316 => 99,  291 => 97,  276 => 92,  274 => 91,  272 => 90,  270 => 89,  266 => 86,  262 => 84,  260 => 83,  256 => 82,  253 => 81,  250 => 78,  248 => 77,  246 => 76,  243 => 73,  240 => 72,  237 => 71,  235 => 70,  232 => 69,  229 => 68,  226 => 66,  223 => 64,  221 => 63,  218 => 61,  216 => 60,  213 => 58,  211 => 57,  209 => 56,  207 => 55,  205 => 54,  203 => 52,  194 => 51,  184 => 48,  182 => 47,  165 => 44,  148 => 43,  145 => 41,  143 => 40,  140 => 37,  138 => 36,  136 => 34,  134 => 33,  125 => 31,  111 => 26,  106 => 25,  103 => 24,  101 => 23,  92 => 22,  82 => 19,  80 => 18,  71 => 17,  58 => 13,  56 => 12,  47 => 11,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu_base.html.twig' %}

{% macro attributes(attributes) %}
{% for name, value in attributes %}
    {%- if value is not none and value is not same as(false) -%}
        {{- ' %s=\"%s\"'|format(name, value is same as(true) ? name|e : value|e)|raw -}}
    {%- endif -%}
{%- endfor -%}
{% endmacro %}

{% block compressed_root %}
{% spaceless %}
{{ block('root') }}
{% endspaceless %}
{% endblock %}

{% block root %}
{% set listAttributes = item.childrenAttributes %}
{{ block('list') -}}
{% endblock %}

{% block list %}
{% if item.hasChildren and options.depth is not same as(0) and item.displayChildren %}
    {% import _self as knp_menu %}
    <ul{{ knp_menu.attributes(listAttributes) }}>
        {{ block('children') }}
    </ul>
{% endif %}
{% endblock %}

{% block children %}
{# save current variables #}
{% set currentOptions = options %}
{% set currentItem = item %}
{# update the depth for children #}
{% if options.depth is not none %}
{% set options = options|merge({'depth': currentOptions.depth - 1}) %}
{% endif %}
{# update the matchingDepth for children #}
{% if options.matchingDepth is not none and options.matchingDepth > 0 %}
{% set options = options|merge({'matchingDepth': currentOptions.matchingDepth - 1}) %}
{% endif %}
{% for item in currentItem.children %}
    {{ block('item') }}
{% endfor %}
{# restore current variables #}
{% set item = currentItem %}
{% set options = currentOptions %}
{% endblock %}

{% block item %}
{% if item.displayed %}
{# building the class of the item #}
    {%- set classes = item.attribute('class') is not empty ? [item.attribute('class')] : [] %}
    {%- if matcher.isCurrent(item) %}
        {%- set classes = classes|merge([options.currentClass]) %}
    {%- elseif matcher.isAncestor(item, options.matchingDepth) %}
        {%- set classes = classes|merge([options.ancestorClass]) %}
    {%- endif %}
    {%- if item.actsLikeFirst %}
        {%- set classes = classes|merge([options.firstClass]) %}
    {%- endif %}
    {%- if item.actsLikeLast %}
        {%- set classes = classes|merge([options.lastClass]) %}
    {%- endif %}

    {# Mark item as \"leaf\" (no children) or as \"branch\" (has children that are displayed) #}
    {% if item.hasChildren and options.depth is not same as(0) %}
        {% if options.branch_class is not empty and item.displayChildren %}
            {%- set classes = classes|merge([options.branch_class]) %}
        {% endif %}
    {% elseif options.leaf_class is not empty %}
        {%- set classes = classes|merge([options.leaf_class]) %}
    {%- endif %}

    {%- set attributes = item.attributes %}
    {%- if classes is not empty %}
        {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}
    {%- endif %}
{# displaying the item #}
    {% import _self as knp_menu %}
    <li{{ knp_menu.attributes(attributes) }}>
        {%- if item.uri is not empty and (not matcher.isCurrent(item) or options.currentAsLink) %}
        {{ block('linkElement') }}
        {%- else %}
        {{ block('spanElement') }}
        {%- endif %}
{# render the list of children#}
        {%- set childrenClasses = item.childrenAttribute('class') is not empty ? [item.childrenAttribute('class')] : [] %}
        {%- set childrenClasses = childrenClasses|merge(['menu_level_' ~ item.level]) %}
        {%- set listAttributes = item.childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}
        {{ block('list') }}
    </li>
{% endif %}
{% endblock %}

{% block linkElement %}{% import _self as knp_menu %}<a href=\"{{ item.uri }}\"{{ knp_menu.attributes(item.linkAttributes) }}>{{ block('label') }}</a>{% endblock %}

{% block spanElement %}{% import _self as knp_menu %}<span{{ knp_menu.attributes(item.labelAttributes) }}>{{ block('label') }}</span>{% endblock %}

{% block label %}{% if options.allow_safe_labels and item.getExtra('safe_label', false) %}{{ item.label|raw }}{% else %}{{ item.label }}{% endif %}{% endblock %}
", "knp_menu.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views/knp_menu.html.twig");
    }
}

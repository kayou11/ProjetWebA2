<?php

/* knp_menu.html.twig */
class __TwigTemplate_3b355e67554d7a5d43381add3c9ad474f56903785b1d371f68a502f0174fddeb extends Twig_Template
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
        $__internal_fec9dd875b7b8d2f36d7919515edc07d28a126e1f42027bdc327f801164de5fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fec9dd875b7b8d2f36d7919515edc07d28a126e1f42027bdc327f801164de5fd->enter($__internal_fec9dd875b7b8d2f36d7919515edc07d28a126e1f42027bdc327f801164de5fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu.html.twig"));

        $__internal_c42877fb5a51246f56af29d9244384b950ef55653a98114397bc8d3924c88239 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c42877fb5a51246f56af29d9244384b950ef55653a98114397bc8d3924c88239->enter($__internal_c42877fb5a51246f56af29d9244384b950ef55653a98114397bc8d3924c88239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fec9dd875b7b8d2f36d7919515edc07d28a126e1f42027bdc327f801164de5fd->leave($__internal_fec9dd875b7b8d2f36d7919515edc07d28a126e1f42027bdc327f801164de5fd_prof);

        
        $__internal_c42877fb5a51246f56af29d9244384b950ef55653a98114397bc8d3924c88239->leave($__internal_c42877fb5a51246f56af29d9244384b950ef55653a98114397bc8d3924c88239_prof);

    }

    // line 11
    public function block_compressed_root($context, array $blocks = array())
    {
        $__internal_a9413be87d33ca37a81b7ddc1e871119da0bff04bc74da59bfbdae6343067263 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9413be87d33ca37a81b7ddc1e871119da0bff04bc74da59bfbdae6343067263->enter($__internal_a9413be87d33ca37a81b7ddc1e871119da0bff04bc74da59bfbdae6343067263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        $__internal_010641a8f4dbfb2402f6df7c858584eaf497ce6ce8a6723fc30e3bfac8022bcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_010641a8f4dbfb2402f6df7c858584eaf497ce6ce8a6723fc30e3bfac8022bcc->enter($__internal_010641a8f4dbfb2402f6df7c858584eaf497ce6ce8a6723fc30e3bfac8022bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        // line 12
        ob_start();
        // line 13
        $this->displayBlock("root", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_010641a8f4dbfb2402f6df7c858584eaf497ce6ce8a6723fc30e3bfac8022bcc->leave($__internal_010641a8f4dbfb2402f6df7c858584eaf497ce6ce8a6723fc30e3bfac8022bcc_prof);

        
        $__internal_a9413be87d33ca37a81b7ddc1e871119da0bff04bc74da59bfbdae6343067263->leave($__internal_a9413be87d33ca37a81b7ddc1e871119da0bff04bc74da59bfbdae6343067263_prof);

    }

    // line 17
    public function block_root($context, array $blocks = array())
    {
        $__internal_7dcc26a64cfa092d24b9de1d4e7d58f70e8f504190eb387591527194a672ce3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dcc26a64cfa092d24b9de1d4e7d58f70e8f504190eb387591527194a672ce3e->enter($__internal_7dcc26a64cfa092d24b9de1d4e7d58f70e8f504190eb387591527194a672ce3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        $__internal_0bd92ec77fb804af07ebd7efccdfa8743fd5d185de0d05561afd755c5f8dec7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bd92ec77fb804af07ebd7efccdfa8743fd5d185de0d05561afd755c5f8dec7f->enter($__internal_0bd92ec77fb804af07ebd7efccdfa8743fd5d185de0d05561afd755c5f8dec7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 18
        $context["listAttributes"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 18, $this->getSourceContext()); })()), "childrenAttributes", array());
        // line 19
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_0bd92ec77fb804af07ebd7efccdfa8743fd5d185de0d05561afd755c5f8dec7f->leave($__internal_0bd92ec77fb804af07ebd7efccdfa8743fd5d185de0d05561afd755c5f8dec7f_prof);

        
        $__internal_7dcc26a64cfa092d24b9de1d4e7d58f70e8f504190eb387591527194a672ce3e->leave($__internal_7dcc26a64cfa092d24b9de1d4e7d58f70e8f504190eb387591527194a672ce3e_prof);

    }

    // line 22
    public function block_list($context, array $blocks = array())
    {
        $__internal_0ff399137ae6a59022c743616536a8fb0d410f92c4395daf5f33b82809f0f25b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ff399137ae6a59022c743616536a8fb0d410f92c4395daf5f33b82809f0f25b->enter($__internal_0ff399137ae6a59022c743616536a8fb0d410f92c4395daf5f33b82809f0f25b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_1a9b807211b6382f62abcc0771b77a2d32da36a9b1de064192db4e49311ec67f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a9b807211b6382f62abcc0771b77a2d32da36a9b1de064192db4e49311ec67f->enter($__internal_1a9b807211b6382f62abcc0771b77a2d32da36a9b1de064192db4e49311ec67f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 23
        if (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 23, $this->getSourceContext()); })()), "hasChildren", array()) &&  !(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 23, $this->getSourceContext()); })()), "depth", array()) === 0)) && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 23, $this->getSourceContext()); })()), "displayChildren", array()))) {
            // line 24
            echo "    ";
            $context["knp_menu"] = $this;
            // line 25
            echo "    <ul";
            echo $context["knp_menu"]->macro_attributes((isset($context["listAttributes"]) || array_key_exists("listAttributes", $context) ? $context["listAttributes"] : (function () { throw new Twig_Error_Runtime('Variable "listAttributes" does not exist.', 25, $this->getSourceContext()); })()));
            echo ">
        ";
            // line 26
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ul>
";
        }
        
        $__internal_1a9b807211b6382f62abcc0771b77a2d32da36a9b1de064192db4e49311ec67f->leave($__internal_1a9b807211b6382f62abcc0771b77a2d32da36a9b1de064192db4e49311ec67f_prof);

        
        $__internal_0ff399137ae6a59022c743616536a8fb0d410f92c4395daf5f33b82809f0f25b->leave($__internal_0ff399137ae6a59022c743616536a8fb0d410f92c4395daf5f33b82809f0f25b_prof);

    }

    // line 31
    public function block_children($context, array $blocks = array())
    {
        $__internal_a592d0257ad151856965cba669d020b50be58b6f9270e4bd86ae9f778fed10e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a592d0257ad151856965cba669d020b50be58b6f9270e4bd86ae9f778fed10e5->enter($__internal_a592d0257ad151856965cba669d020b50be58b6f9270e4bd86ae9f778fed10e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        $__internal_2e55426b01eb53dd2cb50a28da1a30306b5a07cdcf39f3049749604bd974310a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e55426b01eb53dd2cb50a28da1a30306b5a07cdcf39f3049749604bd974310a->enter($__internal_2e55426b01eb53dd2cb50a28da1a30306b5a07cdcf39f3049749604bd974310a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        // line 33
        $context["currentOptions"] = (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 33, $this->getSourceContext()); })());
        // line 34
        $context["currentItem"] = (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 34, $this->getSourceContext()); })());
        // line 36
        if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 36, $this->getSourceContext()); })()), "depth", array()))) {
            // line 37
            $context["options"] = twig_array_merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 37, $this->getSourceContext()); })()), array("depth" => (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["currentOptions"]) || array_key_exists("currentOptions", $context) ? $context["currentOptions"] : (function () { throw new Twig_Error_Runtime('Variable "currentOptions" does not exist.', 37, $this->getSourceContext()); })()), "depth", array()) - 1)));
        }
        // line 40
        if (( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 40, $this->getSourceContext()); })()), "matchingDepth", array())) && (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 40, $this->getSourceContext()); })()), "matchingDepth", array()) > 0))) {
            // line 41
            $context["options"] = twig_array_merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 41, $this->getSourceContext()); })()), array("matchingDepth" => (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["currentOptions"]) || array_key_exists("currentOptions", $context) ? $context["currentOptions"] : (function () { throw new Twig_Error_Runtime('Variable "currentOptions" does not exist.', 41, $this->getSourceContext()); })()), "matchingDepth", array()) - 1)));
        }
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["currentItem"]) || array_key_exists("currentItem", $context) ? $context["currentItem"] : (function () { throw new Twig_Error_Runtime('Variable "currentItem" does not exist.', 43, $this->getSourceContext()); })()), "children", array()));
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
        $context["item"] = (isset($context["currentItem"]) || array_key_exists("currentItem", $context) ? $context["currentItem"] : (function () { throw new Twig_Error_Runtime('Variable "currentItem" does not exist.', 47, $this->getSourceContext()); })());
        // line 48
        $context["options"] = (isset($context["currentOptions"]) || array_key_exists("currentOptions", $context) ? $context["currentOptions"] : (function () { throw new Twig_Error_Runtime('Variable "currentOptions" does not exist.', 48, $this->getSourceContext()); })());
        
        $__internal_2e55426b01eb53dd2cb50a28da1a30306b5a07cdcf39f3049749604bd974310a->leave($__internal_2e55426b01eb53dd2cb50a28da1a30306b5a07cdcf39f3049749604bd974310a_prof);

        
        $__internal_a592d0257ad151856965cba669d020b50be58b6f9270e4bd86ae9f778fed10e5->leave($__internal_a592d0257ad151856965cba669d020b50be58b6f9270e4bd86ae9f778fed10e5_prof);

    }

    // line 51
    public function block_item($context, array $blocks = array())
    {
        $__internal_d066d1a0be726a9a2f5f3ae58bbe299864e5db24fb192e39581ad7b05a825cc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d066d1a0be726a9a2f5f3ae58bbe299864e5db24fb192e39581ad7b05a825cc0->enter($__internal_d066d1a0be726a9a2f5f3ae58bbe299864e5db24fb192e39581ad7b05a825cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_eb821d8b3b297bf55449adee3e0ba281be6ea4889cfbe280eaede966720a64c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb821d8b3b297bf55449adee3e0ba281be6ea4889cfbe280eaede966720a64c9->enter($__internal_eb821d8b3b297bf55449adee3e0ba281be6ea4889cfbe280eaede966720a64c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 52
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 52, $this->getSourceContext()); })()), "displayed", array())) {
            // line 54
            $context["classes"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 54, $this->getSourceContext()); })()), "attribute", array(0 => "class"), "method"))) ? (array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 54, $this->getSourceContext()); })()), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 55
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new Twig_Error_Runtime('Variable "matcher" does not exist.', 55, $this->getSourceContext()); })()), "isCurrent", array(0 => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 55, $this->getSourceContext()); })())), "method")) {
                // line 56
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 56, $this->getSourceContext()); })()), array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 56, $this->getSourceContext()); })()), "currentClass", array())));
            } elseif (twig_get_attribute($this->env, $this->getSourceContext(),             // line 57
(isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new Twig_Error_Runtime('Variable "matcher" does not exist.', 57, $this->getSourceContext()); })()), "isAncestor", array(0 => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 57, $this->getSourceContext()); })()), 1 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 57, $this->getSourceContext()); })()), "matchingDepth", array())), "method")) {
                // line 58
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 58, $this->getSourceContext()); })()), array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 58, $this->getSourceContext()); })()), "ancestorClass", array())));
            }
            // line 60
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 60, $this->getSourceContext()); })()), "actsLikeFirst", array())) {
                // line 61
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 61, $this->getSourceContext()); })()), array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 61, $this->getSourceContext()); })()), "firstClass", array())));
            }
            // line 63
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 63, $this->getSourceContext()); })()), "actsLikeLast", array())) {
                // line 64
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 64, $this->getSourceContext()); })()), array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 64, $this->getSourceContext()); })()), "lastClass", array())));
            }
            // line 66
            echo "
    ";
            // line 68
            echo "    ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 68, $this->getSourceContext()); })()), "hasChildren", array()) &&  !(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 68, $this->getSourceContext()); })()), "depth", array()) === 0))) {
                // line 69
                echo "        ";
                if (( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 69, $this->getSourceContext()); })()), "branch_class", array())) && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 69, $this->getSourceContext()); })()), "displayChildren", array()))) {
                    // line 70
                    $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 70, $this->getSourceContext()); })()), array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 70, $this->getSourceContext()); })()), "branch_class", array())));
                    // line 71
                    echo "        ";
                }
                // line 72
                echo "    ";
            } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 72, $this->getSourceContext()); })()), "leaf_class", array()))) {
                // line 73
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 73, $this->getSourceContext()); })()), array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 73, $this->getSourceContext()); })()), "leaf_class", array())));
            }
            // line 76
            $context["attributes"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 76, $this->getSourceContext()); })()), "attributes", array());
            // line 77
            if ( !twig_test_empty((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 77, $this->getSourceContext()); })()))) {
                // line 78
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 78, $this->getSourceContext()); })()), array("class" => twig_join_filter((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 78, $this->getSourceContext()); })()), " ")));
            }
            // line 81
            echo "    ";
            $context["knp_menu"] = $this;
            // line 82
            echo "    <li";
            echo $context["knp_menu"]->macro_attributes((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 82, $this->getSourceContext()); })()));
            echo ">";
            // line 83
            if (( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 83, $this->getSourceContext()); })()), "uri", array())) && ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new Twig_Error_Runtime('Variable "matcher" does not exist.', 83, $this->getSourceContext()); })()), "isCurrent", array(0 => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 83, $this->getSourceContext()); })())), "method") || twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 83, $this->getSourceContext()); })()), "currentAsLink", array())))) {
                // line 84
                echo "        ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 86
                echo "        ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 89
            $context["childrenClasses"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 89, $this->getSourceContext()); })()), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 89, $this->getSourceContext()); })()), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 90
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) || array_key_exists("childrenClasses", $context) ? $context["childrenClasses"] : (function () { throw new Twig_Error_Runtime('Variable "childrenClasses" does not exist.', 90, $this->getSourceContext()); })()), array(0 => ("menu_level_" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 90, $this->getSourceContext()); })()), "level", array()))));
            // line 91
            $context["listAttributes"] = twig_array_merge(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 91, $this->getSourceContext()); })()), "childrenAttributes", array()), array("class" => twig_join_filter((isset($context["childrenClasses"]) || array_key_exists("childrenClasses", $context) ? $context["childrenClasses"] : (function () { throw new Twig_Error_Runtime('Variable "childrenClasses" does not exist.', 91, $this->getSourceContext()); })()), " ")));
            // line 92
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    </li>
";
        }
        
        $__internal_eb821d8b3b297bf55449adee3e0ba281be6ea4889cfbe280eaede966720a64c9->leave($__internal_eb821d8b3b297bf55449adee3e0ba281be6ea4889cfbe280eaede966720a64c9_prof);

        
        $__internal_d066d1a0be726a9a2f5f3ae58bbe299864e5db24fb192e39581ad7b05a825cc0->leave($__internal_d066d1a0be726a9a2f5f3ae58bbe299864e5db24fb192e39581ad7b05a825cc0_prof);

    }

    // line 97
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_7628ab3f3c2938e30a7ccf535c4bf821176066cb1131d7105da6d93d2b25ba0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7628ab3f3c2938e30a7ccf535c4bf821176066cb1131d7105da6d93d2b25ba0c->enter($__internal_7628ab3f3c2938e30a7ccf535c4bf821176066cb1131d7105da6d93d2b25ba0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_cb406d1a1f221c04e0406e2b6066b564d14ed19ffa53cd8deda0cfb0d343cd03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb406d1a1f221c04e0406e2b6066b564d14ed19ffa53cd8deda0cfb0d343cd03->enter($__internal_cb406d1a1f221c04e0406e2b6066b564d14ed19ffa53cd8deda0cfb0d343cd03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $context["knp_menu"] = $this;
        echo "<a href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 97, $this->getSourceContext()); })()), "uri", array()), "html", null, true);
        echo "\"";
        echo $context["knp_menu"]->macro_attributes(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 97, $this->getSourceContext()); })()), "linkAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
        
        $__internal_cb406d1a1f221c04e0406e2b6066b564d14ed19ffa53cd8deda0cfb0d343cd03->leave($__internal_cb406d1a1f221c04e0406e2b6066b564d14ed19ffa53cd8deda0cfb0d343cd03_prof);

        
        $__internal_7628ab3f3c2938e30a7ccf535c4bf821176066cb1131d7105da6d93d2b25ba0c->leave($__internal_7628ab3f3c2938e30a7ccf535c4bf821176066cb1131d7105da6d93d2b25ba0c_prof);

    }

    // line 99
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_8e4878cb8206c0120810b01623bd65798a1187041ae8591fb6d978a3527a1d3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e4878cb8206c0120810b01623bd65798a1187041ae8591fb6d978a3527a1d3f->enter($__internal_8e4878cb8206c0120810b01623bd65798a1187041ae8591fb6d978a3527a1d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_669d2bcdcf2934ed6ff7ff56a45bc6fd1fdd348b53d6804a31e9b818cb3e42e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_669d2bcdcf2934ed6ff7ff56a45bc6fd1fdd348b53d6804a31e9b818cb3e42e6->enter($__internal_669d2bcdcf2934ed6ff7ff56a45bc6fd1fdd348b53d6804a31e9b818cb3e42e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $context["knp_menu"] = $this;
        echo "<span";
        echo $context["knp_menu"]->macro_attributes(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 99, $this->getSourceContext()); })()), "labelAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>";
        
        $__internal_669d2bcdcf2934ed6ff7ff56a45bc6fd1fdd348b53d6804a31e9b818cb3e42e6->leave($__internal_669d2bcdcf2934ed6ff7ff56a45bc6fd1fdd348b53d6804a31e9b818cb3e42e6_prof);

        
        $__internal_8e4878cb8206c0120810b01623bd65798a1187041ae8591fb6d978a3527a1d3f->leave($__internal_8e4878cb8206c0120810b01623bd65798a1187041ae8591fb6d978a3527a1d3f_prof);

    }

    // line 101
    public function block_label($context, array $blocks = array())
    {
        $__internal_b017d60565fd162fec32fb73b2c813d59972f15c6fc4912f26340667b2b80a6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b017d60565fd162fec32fb73b2c813d59972f15c6fc4912f26340667b2b80a6c->enter($__internal_b017d60565fd162fec32fb73b2c813d59972f15c6fc4912f26340667b2b80a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_cff44b4d758b133d7d400bb7ec750b79afcff39fb0c3537bfa6886259553b1d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cff44b4d758b133d7d400bb7ec750b79afcff39fb0c3537bfa6886259553b1d2->enter($__internal_cff44b4d758b133d7d400bb7ec750b79afcff39fb0c3537bfa6886259553b1d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 101, $this->getSourceContext()); })()), "allow_safe_labels", array()) && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 101, $this->getSourceContext()); })()), "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 101, $this->getSourceContext()); })()), "label", array());
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 101, $this->getSourceContext()); })()), "label", array()), "html", null, true);
        }
        
        $__internal_cff44b4d758b133d7d400bb7ec750b79afcff39fb0c3537bfa6886259553b1d2->leave($__internal_cff44b4d758b133d7d400bb7ec750b79afcff39fb0c3537bfa6886259553b1d2_prof);

        
        $__internal_b017d60565fd162fec32fb73b2c813d59972f15c6fc4912f26340667b2b80a6c->leave($__internal_b017d60565fd162fec32fb73b2c813d59972f15c6fc4912f26340667b2b80a6c_prof);

    }

    // line 3
    public function macro_attributes($__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_eae355d0b8d3333df0c9a99cf00fcfb02d711d344ed133e3450ee6c8730be0bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_eae355d0b8d3333df0c9a99cf00fcfb02d711d344ed133e3450ee6c8730be0bd->enter($__internal_eae355d0b8d3333df0c9a99cf00fcfb02d711d344ed133e3450ee6c8730be0bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            $__internal_e3097b6f1ef57e26000ba757c0333421e44f9477a05323797790a79ead45b667 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_e3097b6f1ef57e26000ba757c0333421e44f9477a05323797790a79ead45b667->enter($__internal_e3097b6f1ef57e26000ba757c0333421e44f9477a05323797790a79ead45b667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 4, $this->getSourceContext()); })()));
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
            
            $__internal_e3097b6f1ef57e26000ba757c0333421e44f9477a05323797790a79ead45b667->leave($__internal_e3097b6f1ef57e26000ba757c0333421e44f9477a05323797790a79ead45b667_prof);

            
            $__internal_eae355d0b8d3333df0c9a99cf00fcfb02d711d344ed133e3450ee6c8730be0bd->leave($__internal_eae355d0b8d3333df0c9a99cf00fcfb02d711d344ed133e3450ee6c8730be0bd_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
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
", "knp_menu.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views/knp_menu.html.twig");
    }
}

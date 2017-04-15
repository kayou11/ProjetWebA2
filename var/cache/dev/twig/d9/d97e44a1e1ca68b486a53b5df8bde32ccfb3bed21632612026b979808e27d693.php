<?php

/* @SyliusUi/Form/theme.html.twig */
class __TwigTemplate_5f5defddc881bf8d28bc05bf7a34fd4921105d2c2805f793ade4a8491de4d819 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "@SyliusUi/Form/theme.html.twig", 1);
        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
            'form_errors' => array($this, 'block_form_errors'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'money_widget' => array($this, 'block_money_widget'),
            'choice_row' => array($this, 'block_choice_row'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'sylius_province_widget' => array($this, 'block_sylius_province_widget'),
            'sylius_zone_member_widget' => array($this, 'block_sylius_zone_member_widget'),
            'sylius_promotion_rule_widget' => array($this, 'block_sylius_promotion_rule_widget'),
            'sylius_promotion_action_widget' => array($this, 'block_sylius_promotion_action_widget'),
            'sylius_promotion_configuration_widget' => array($this, 'block_sylius_promotion_configuration_widget'),
            'sylius_product_option_value_widget' => array($this, 'block_sylius_product_option_value_widget'),
            'sylius_translations_row' => array($this, 'block_sylius_translations_row'),
            'sylius_resource_autocomplete_choice_row' => array($this, 'block_sylius_resource_autocomplete_choice_row'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e1ae69e943ee37bfe4c57589b8b54f005c01fe6408044716f77b34c879dc280 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e1ae69e943ee37bfe4c57589b8b54f005c01fe6408044716f77b34c879dc280->enter($__internal_2e1ae69e943ee37bfe4c57589b8b54f005c01fe6408044716f77b34c879dc280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Form/theme.html.twig"));

        $__internal_314e9e8d2ae5e9be8b6eb142bfa2399ef45244dbbdaa0a0e4d2d8b37808ed5b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_314e9e8d2ae5e9be8b6eb142bfa2399ef45244dbbdaa0a0e4d2d8b37808ed5b7->enter($__internal_314e9e8d2ae5e9be8b6eb142bfa2399ef45244dbbdaa0a0e4d2d8b37808ed5b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Form/theme.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e1ae69e943ee37bfe4c57589b8b54f005c01fe6408044716f77b34c879dc280->leave($__internal_2e1ae69e943ee37bfe4c57589b8b54f005c01fe6408044716f77b34c879dc280_prof);

        
        $__internal_314e9e8d2ae5e9be8b6eb142bfa2399ef45244dbbdaa0a0e4d2d8b37808ed5b7->leave($__internal_314e9e8d2ae5e9be8b6eb142bfa2399ef45244dbbdaa0a0e4d2d8b37808ed5b7_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_a3a1ebb3b91c7d8a5fa252dad02e93694aac6150fed9eeb3c8b93e3595298dea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3a1ebb3b91c7d8a5fa252dad02e93694aac6150fed9eeb3c8b93e3595298dea->enter($__internal_a3a1ebb3b91c7d8a5fa252dad02e93694aac6150fed9eeb3c8b93e3595298dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_584a05cdc76374724c99560a8dccbbe73742a9173275f8d16357b281239e54e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_584a05cdc76374724c99560a8dccbbe73742a9173275f8d16357b281239e54e8->enter($__internal_584a05cdc76374724c99560a8dccbbe73742a9173275f8d16357b281239e54e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<div class=\"";
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            echo "required ";
        }
        echo "field";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " error";
        }
        echo "\">";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 8
        echo "</div>";
        
        $__internal_584a05cdc76374724c99560a8dccbbe73742a9173275f8d16357b281239e54e8->leave($__internal_584a05cdc76374724c99560a8dccbbe73742a9173275f8d16357b281239e54e8_prof);

        
        $__internal_a3a1ebb3b91c7d8a5fa252dad02e93694aac6150fed9eeb3c8b93e3595298dea->leave($__internal_a3a1ebb3b91c7d8a5fa252dad02e93694aac6150fed9eeb3c8b93e3595298dea_prof);

    }

    // line 11
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_a42147bbcaed4350a6968c1f8815e35a0c62f995ba726adbd9eecb3cf98f2160 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a42147bbcaed4350a6968c1f8815e35a0c62f995ba726adbd9eecb3cf98f2160->enter($__internal_a42147bbcaed4350a6968c1f8815e35a0c62f995ba726adbd9eecb3cf98f2160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_7535e59a8e23c48f85dba4db314c6340df791b9c58590781a1f47d37732d6fa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7535e59a8e23c48f85dba4db314c6340df791b9c58590781a1f47d37732d6fa1->enter($__internal_7535e59a8e23c48f85dba4db314c6340df791b9c58590781a1f47d37732d6fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 12
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 14
                echo "<div class=\"ui red ";
                if ( !twig_test_empty($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array()))) {
                    echo "pointing ";
                }
                echo "label sylius-validation-error\"";
                if (twig_test_empty($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array()))) {
                    echo " style=\"margin-bottom: 10px;\"";
                }
                echo ">
                ";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "
            </div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_7535e59a8e23c48f85dba4db314c6340df791b9c58590781a1f47d37732d6fa1->leave($__internal_7535e59a8e23c48f85dba4db314c6340df791b9c58590781a1f47d37732d6fa1_prof);

        
        $__internal_a42147bbcaed4350a6968c1f8815e35a0c62f995ba726adbd9eecb3cf98f2160->leave($__internal_a42147bbcaed4350a6968c1f8815e35a0c62f995ba726adbd9eecb3cf98f2160_prof);

    }

    // line 21
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_b1326d2492a16c7d000da57806c363d80e18f1a6416a9ce2ea3cb0206c3738a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1326d2492a16c7d000da57806c363d80e18f1a6416a9ce2ea3cb0206c3738a9->enter($__internal_b1326d2492a16c7d000da57806c363d80e18f1a6416a9ce2ea3cb0206c3738a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_beafe64f62141a2166c41dfaaabf6f8209ea52167a1bfc0cf08a3efb08c55e7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beafe64f62141a2166c41dfaaabf6f8209ea52167a1bfc0cf08a3efb08c55e7b->enter($__internal_beafe64f62141a2166c41dfaaabf6f8209ea52167a1bfc0cf08a3efb08c55e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 22
        echo "<div class=\"field";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " error";
        }
        echo "\">
        <div class=\"ui toggle checkbox\">";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 27
        echo "</div>
    </div>";
        
        $__internal_beafe64f62141a2166c41dfaaabf6f8209ea52167a1bfc0cf08a3efb08c55e7b->leave($__internal_beafe64f62141a2166c41dfaaabf6f8209ea52167a1bfc0cf08a3efb08c55e7b_prof);

        
        $__internal_b1326d2492a16c7d000da57806c363d80e18f1a6416a9ce2ea3cb0206c3738a9->leave($__internal_b1326d2492a16c7d000da57806c363d80e18f1a6416a9ce2ea3cb0206c3738a9_prof);

    }

    // line 31
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_35a4d747deeb267cd86516087b3cb6d25107d15340ae9b7d83557ada88e7f34a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35a4d747deeb267cd86516087b3cb6d25107d15340ae9b7d83557ada88e7f34a->enter($__internal_35a4d747deeb267cd86516087b3cb6d25107d15340ae9b7d83557ada88e7f34a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_28b331ac2e26c28988fcaddc65fdbec2a481925c45a5dd53aad5abcda760aac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28b331ac2e26c28988fcaddc65fdbec2a481925c45a5dd53aad5abcda760aac1->enter($__internal_28b331ac2e26c28988fcaddc65fdbec2a481925c45a5dd53aad5abcda760aac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 32
        echo "<div class=\"field";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " error";
        }
        echo "\">
        <div class=\"ui radio checkbox\">";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 37
        echo "</div>
    </div>";
        
        $__internal_28b331ac2e26c28988fcaddc65fdbec2a481925c45a5dd53aad5abcda760aac1->leave($__internal_28b331ac2e26c28988fcaddc65fdbec2a481925c45a5dd53aad5abcda760aac1_prof);

        
        $__internal_35a4d747deeb267cd86516087b3cb6d25107d15340ae9b7d83557ada88e7f34a->leave($__internal_35a4d747deeb267cd86516087b3cb6d25107d15340ae9b7d83557ada88e7f34a_prof);

    }

    // line 41
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_ff17a35e409d5d9b1770d2c58ad4e4c48166e7153cf47fbdef1025ebb7ad2bc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff17a35e409d5d9b1770d2c58ad4e4c48166e7153cf47fbdef1025ebb7ad2bc5->enter($__internal_ff17a35e409d5d9b1770d2c58ad4e4c48166e7153cf47fbdef1025ebb7ad2bc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_d4ced7c994d0eef8f0caf3f2ca3a4d8bf11b783c29d1c0afc9072a01372e492c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4ced7c994d0eef8f0caf3f2ca3a4d8bf11b783c29d1c0afc9072a01372e492c->enter($__internal_d4ced7c994d0eef8f0caf3f2ca3a4d8bf11b783c29d1c0afc9072a01372e492c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 42
        echo "<div class=\"ui labeled input\">
        <div class=\"ui label\">";
        // line 43
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sylius_currency_symbol')->getCallable(), array(($context["currency"] ?? $this->getContext($context, "currency")))), "html", null, true);
        echo "</div>";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 45
        echo "</div>";
        
        $__internal_d4ced7c994d0eef8f0caf3f2ca3a4d8bf11b783c29d1c0afc9072a01372e492c->leave($__internal_d4ced7c994d0eef8f0caf3f2ca3a4d8bf11b783c29d1c0afc9072a01372e492c_prof);

        
        $__internal_ff17a35e409d5d9b1770d2c58ad4e4c48166e7153cf47fbdef1025ebb7ad2bc5->leave($__internal_ff17a35e409d5d9b1770d2c58ad4e4c48166e7153cf47fbdef1025ebb7ad2bc5_prof);

    }

    // line 48
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_436c3f4c4de96670dd7de24d35e352d2150f3c9cbd9309d8a54a71f3d892f65a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_436c3f4c4de96670dd7de24d35e352d2150f3c9cbd9309d8a54a71f3d892f65a->enter($__internal_436c3f4c4de96670dd7de24d35e352d2150f3c9cbd9309d8a54a71f3d892f65a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_8b23f26777b03f07a1f329011e04e5d267f432fe8fe2e9b01c638e4d0113641b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b23f26777b03f07a1f329011e04e5d267f432fe8fe2e9b01c638e4d0113641b->enter($__internal_8b23f26777b03f07a1f329011e04e5d267f432fe8fe2e9b01c638e4d0113641b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 49
        echo "<div class=\"";
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            echo "required ";
        }
        echo "field";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " error";
        }
        echo "\">";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 51
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()))) : ("")) . " ui dropdown")));
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget', array("attr" => ($context["attr"] ?? $this->getContext($context, "attr"))));
        // line 53
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 54
        echo "</div>";
        
        $__internal_8b23f26777b03f07a1f329011e04e5d267f432fe8fe2e9b01c638e4d0113641b->leave($__internal_8b23f26777b03f07a1f329011e04e5d267f432fe8fe2e9b01c638e4d0113641b_prof);

        
        $__internal_436c3f4c4de96670dd7de24d35e352d2150f3c9cbd9309d8a54a71f3d892f65a->leave($__internal_436c3f4c4de96670dd7de24d35e352d2150f3c9cbd9309d8a54a71f3d892f65a_prof);

    }

    // line 57
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_abf772500204a0ab8eea7d71fddec024a8454a2a84fc27515aed16f328a73893 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abf772500204a0ab8eea7d71fddec024a8454a2a84fc27515aed16f328a73893->enter($__internal_abf772500204a0ab8eea7d71fddec024a8454a2a84fc27515aed16f328a73893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_88603089718f4d45778fb5ac4e33e6c6668460c4d5b75c102c913b04c3964947 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88603089718f4d45778fb5ac4e33e6c6668460c4d5b75c102c913b04c3964947->enter($__internal_88603089718f4d45778fb5ac4e33e6c6668460c4d5b75c102c913b04c3964947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 58
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        <div class=\"grouped fields\">";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 61
            echo "                <div class=\"field\">
                    <div class=\"ui toggle checkbox\">";
            // line 63
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => ($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            // line 64
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget');
            // line 65
            echo "</div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "</div>
    </div>";
        
        $__internal_88603089718f4d45778fb5ac4e33e6c6668460c4d5b75c102c913b04c3964947->leave($__internal_88603089718f4d45778fb5ac4e33e6c6668460c4d5b75c102c913b04c3964947_prof);

        
        $__internal_abf772500204a0ab8eea7d71fddec024a8454a2a84fc27515aed16f328a73893->leave($__internal_abf772500204a0ab8eea7d71fddec024a8454a2a84fc27515aed16f328a73893_prof);

    }

    // line 72
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_6d5f5cb1e9397e2179dee8b0b70138b8c95336478ade3a8117195e9d44cd115e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d5f5cb1e9397e2179dee8b0b70138b8c95336478ade3a8117195e9d44cd115e->enter($__internal_6d5f5cb1e9397e2179dee8b0b70138b8c95336478ade3a8117195e9d44cd115e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_cb91a13623ad63790e41490c794eebd4638c5ac8f111b53dbcaeda4c502a1941 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb91a13623ad63790e41490c794eebd4638c5ac8f111b53dbcaeda4c502a1941->enter($__internal_cb91a13623ad63790e41490c794eebd4638c5ac8f111b53dbcaeda4c502a1941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 73
        echo "<div class=\"ui right labeled input\">";
        // line 74
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 75
        echo "<div class=\"ui basic label\">%</div>
    </div>";
        
        $__internal_cb91a13623ad63790e41490c794eebd4638c5ac8f111b53dbcaeda4c502a1941->leave($__internal_cb91a13623ad63790e41490c794eebd4638c5ac8f111b53dbcaeda4c502a1941_prof);

        
        $__internal_6d5f5cb1e9397e2179dee8b0b70138b8c95336478ade3a8117195e9d44cd115e->leave($__internal_6d5f5cb1e9397e2179dee8b0b70138b8c95336478ade3a8117195e9d44cd115e_prof);

    }

    // line 79
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_0d8645b634eb4efa14fdbae1019711011ddd95e24ca7dd14b139cd6eb33477e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d8645b634eb4efa14fdbae1019711011ddd95e24ca7dd14b139cd6eb33477e8->enter($__internal_0d8645b634eb4efa14fdbae1019711011ddd95e24ca7dd14b139cd6eb33477e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_0ec60785ccfc0ea24a8d4fb78e713e8e00382bda878606d1fbb6149dab516b40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ec60785ccfc0ea24a8d4fb78e713e8e00382bda878606d1fbb6149dab516b40->enter($__internal_0ec60785ccfc0ea24a8d4fb78e713e8e00382bda878606d1fbb6149dab516b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 80
        $context["__internal_688ea2a1b0ee3a7063ae41ca34feb7752c16d131fcf4ef1783308f80fe2d1110"] = $this->loadTemplate("SyliusResourceBundle:Macros:notification.html.twig", "@SyliusUi/Form/theme.html.twig", 80);
        // line 81
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()))) : ("")) . " controls collection-widget")));
        // line 82
        echo "
    ";
        // line 83
        ob_start();
        // line 84
        echo "        <div data-form-type=\"collection\" ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo "
            ";
        // line 85
        if ((array_key_exists("prototype", $context) && ($context["allow_add"] ?? $this->getContext($context, "allow_add")))) {
            // line 86
            echo "                data-prototype='";
            echo twig_escape_filter($this->env, $this->getAttribute($this, "collection_item", array(0 => ($context["prototype"] ?? $this->getContext($context, "prototype")), 1 => ($context["allow_delete"] ?? $this->getContext($context, "allow_delete")), 2 => ($context["button_delete_label"] ?? $this->getContext($context, "button_delete_label")), 3 => "__name__"), "method"));
            echo "'";
        }
        // line 88
        echo ">
            ";
        // line 89
        echo $context["__internal_688ea2a1b0ee3a7063ae41ca34feb7752c16d131fcf4ef1783308f80fe2d1110"]->geterror($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "errors", array()));
        echo "

            ";
        // line 91
        if (twig_test_iterable(((array_key_exists("prototypes", $context)) ? (_twig_default_filter(($context["prototypes"] ?? $this->getContext($context, "prototypes")))) : ("")))) {
            // line 92
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["prototypes"] ?? $this->getContext($context, "prototypes")));
            foreach ($context['_seq'] as $context["key"] => $context["subPrototype"]) {
                // line 93
                echo "                    <input type=\"hidden\" data-form-prototype=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this, "collection_item", array(0 => $context["subPrototype"], 1 => ($context["allow_delete"] ?? $this->getContext($context, "allow_delete")), 2 => ($context["button_delete_label"] ?? $this->getContext($context, "button_delete_label")), 3 => "__name__"), "method"));
                echo "\" />
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['subPrototype'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "            ";
        }
        // line 96
        echo "
            <div data-form-collection=\"list\">
                ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 99
            echo "                    ";
            echo $this->getAttribute($this, "collection_item", array(0 => $context["child"], 1 => ($context["allow_delete"] ?? $this->getContext($context, "allow_delete")), 2 => ($context["button_delete_label"] ?? $this->getContext($context, "button_delete_label")), 3 => $this->getAttribute($context["loop"], "index0", array())), "method");
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "            </div>

            ";
        // line 103
        if ((array_key_exists("prototype", $context) && ($context["allow_add"] ?? $this->getContext($context, "allow_add")))) {
            // line 104
            echo "                <a href=\"#\" class=\"ui labeled icon button\" data-form-collection=\"add\">
                    <i class=\"plus square outline icon\"></i>
                    ";
            // line 106
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["button_add_label"] ?? $this->getContext($context, "button_add_label"))), "html", null, true);
            echo "
                </a>
            ";
        }
        // line 109
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_0ec60785ccfc0ea24a8d4fb78e713e8e00382bda878606d1fbb6149dab516b40->leave($__internal_0ec60785ccfc0ea24a8d4fb78e713e8e00382bda878606d1fbb6149dab516b40_prof);

        
        $__internal_0d8645b634eb4efa14fdbae1019711011ddd95e24ca7dd14b139cd6eb33477e8->leave($__internal_0d8645b634eb4efa14fdbae1019711011ddd95e24ca7dd14b139cd6eb33477e8_prof);

    }

    // line 127
    public function block_sylius_province_widget($context, array $blocks = array())
    {
        $__internal_9c92214dfe25ab9829340a2c7d96f9c0fac42ddff25d0d7db721887b0b87cb25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c92214dfe25ab9829340a2c7d96f9c0fac42ddff25d0d7db721887b0b87cb25->enter($__internal_9c92214dfe25ab9829340a2c7d96f9c0fac42ddff25d0d7db721887b0b87cb25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_province_widget"));

        $__internal_205c760ce3b35c673e068a145d1eb5be7cf47d1aae4a893d4264f66203a3e7ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_205c760ce3b35c673e068a145d1eb5be7cf47d1aae4a893d4264f66203a3e7ab->enter($__internal_205c760ce3b35c673e068a145d1eb5be7cf47d1aae4a893d4264f66203a3e7ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_province_widget"));

        // line 128
        echo "<div class=\"ui compact segment\">
    <div class=\"inline fields\">
        ";
        // line 130
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "code", array()), 'row');
        echo "
        ";
        // line 131
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'row');
        echo "
        ";
        // line 132
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "abbreviation", array()), 'row');
        echo "
    </div>
</div>
";
        
        $__internal_205c760ce3b35c673e068a145d1eb5be7cf47d1aae4a893d4264f66203a3e7ab->leave($__internal_205c760ce3b35c673e068a145d1eb5be7cf47d1aae4a893d4264f66203a3e7ab_prof);

        
        $__internal_9c92214dfe25ab9829340a2c7d96f9c0fac42ddff25d0d7db721887b0b87cb25->leave($__internal_9c92214dfe25ab9829340a2c7d96f9c0fac42ddff25d0d7db721887b0b87cb25_prof);

    }

    // line 137
    public function block_sylius_zone_member_widget($context, array $blocks = array())
    {
        $__internal_5f9b88c6ab50026b5d8d78e4e0277d1958331c3429d4cdf213050e4f01c197e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f9b88c6ab50026b5d8d78e4e0277d1958331c3429d4cdf213050e4f01c197e4->enter($__internal_5f9b88c6ab50026b5d8d78e4e0277d1958331c3429d4cdf213050e4f01c197e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_zone_member_widget"));

        $__internal_2e0ef45be24958e40b759ccae75d39e76392ede5ac201132bcdf73d529be00f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e0ef45be24958e40b759ccae75d39e76392ede5ac201132bcdf73d529be00f0->enter($__internal_2e0ef45be24958e40b759ccae75d39e76392ede5ac201132bcdf73d529be00f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_zone_member_widget"));

        // line 138
        echo "    <div class=\"ui compact segment\">
        <div class=\"inline fields\">
            ";
        // line 140
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "code", array()), 'row');
        echo "
        </div>
    </div>
";
        
        $__internal_2e0ef45be24958e40b759ccae75d39e76392ede5ac201132bcdf73d529be00f0->leave($__internal_2e0ef45be24958e40b759ccae75d39e76392ede5ac201132bcdf73d529be00f0_prof);

        
        $__internal_5f9b88c6ab50026b5d8d78e4e0277d1958331c3429d4cdf213050e4f01c197e4->leave($__internal_5f9b88c6ab50026b5d8d78e4e0277d1958331c3429d4cdf213050e4f01c197e4_prof);

    }

    // line 145
    public function block_sylius_promotion_rule_widget($context, array $blocks = array())
    {
        $__internal_70b258dc47dda30869cedd74fb7c20ea1710e941cfc0bf03e16625744c684462 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70b258dc47dda30869cedd74fb7c20ea1710e941cfc0bf03e16625744c684462->enter($__internal_70b258dc47dda30869cedd74fb7c20ea1710e941cfc0bf03e16625744c684462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_promotion_rule_widget"));

        $__internal_347bc4bd9f28090392e2c1b85f9d8503b5c21bf0c26a82057509dc257ed2eeb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_347bc4bd9f28090392e2c1b85f9d8503b5c21bf0c26a82057509dc257ed2eeb1->enter($__internal_347bc4bd9f28090392e2c1b85f9d8503b5c21bf0c26a82057509dc257ed2eeb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_promotion_rule_widget"));

        // line 146
        echo "    <div class=\"ui segment\">
        ";
        // line 147
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    </div>
";
        
        $__internal_347bc4bd9f28090392e2c1b85f9d8503b5c21bf0c26a82057509dc257ed2eeb1->leave($__internal_347bc4bd9f28090392e2c1b85f9d8503b5c21bf0c26a82057509dc257ed2eeb1_prof);

        
        $__internal_70b258dc47dda30869cedd74fb7c20ea1710e941cfc0bf03e16625744c684462->leave($__internal_70b258dc47dda30869cedd74fb7c20ea1710e941cfc0bf03e16625744c684462_prof);

    }

    // line 151
    public function block_sylius_promotion_action_widget($context, array $blocks = array())
    {
        $__internal_e1f315bf7a855421a16353bcce81918ac8559f0b70020f9cb9a2a83b44f5d347 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1f315bf7a855421a16353bcce81918ac8559f0b70020f9cb9a2a83b44f5d347->enter($__internal_e1f315bf7a855421a16353bcce81918ac8559f0b70020f9cb9a2a83b44f5d347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_promotion_action_widget"));

        $__internal_6ff66985d6b0776a260318e82d25118b81db066ce2ddd33a3bf84c7466f2bd91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ff66985d6b0776a260318e82d25118b81db066ce2ddd33a3bf84c7466f2bd91->enter($__internal_6ff66985d6b0776a260318e82d25118b81db066ce2ddd33a3bf84c7466f2bd91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_promotion_action_widget"));

        // line 152
        echo "    <div class=\"ui segment\">
        ";
        // line 153
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    </div>
";
        
        $__internal_6ff66985d6b0776a260318e82d25118b81db066ce2ddd33a3bf84c7466f2bd91->leave($__internal_6ff66985d6b0776a260318e82d25118b81db066ce2ddd33a3bf84c7466f2bd91_prof);

        
        $__internal_e1f315bf7a855421a16353bcce81918ac8559f0b70020f9cb9a2a83b44f5d347->leave($__internal_e1f315bf7a855421a16353bcce81918ac8559f0b70020f9cb9a2a83b44f5d347_prof);

    }

    // line 157
    public function block_sylius_promotion_configuration_widget($context, array $blocks = array())
    {
        $__internal_3cd5c664fe3762eba25206cbc2fc61be8cd7a29f878bc7b3a3fe850548c6eec0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cd5c664fe3762eba25206cbc2fc61be8cd7a29f878bc7b3a3fe850548c6eec0->enter($__internal_3cd5c664fe3762eba25206cbc2fc61be8cd7a29f878bc7b3a3fe850548c6eec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_promotion_configuration_widget"));

        $__internal_065c3203f5455260219a39e3fa13304e06c6e6bd9f5fc48e366ce170b0da7ff0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_065c3203f5455260219a39e3fa13304e06c6e6bd9f5fc48e366ce170b0da7ff0->enter($__internal_065c3203f5455260219a39e3fa13304e06c6e6bd9f5fc48e366ce170b0da7ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_promotion_configuration_widget"));

        // line 158
        echo "    <div class=\"configuration\">
        ";
        // line 159
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 160
            echo "            <hr/>";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'row');
            echo "<hr/>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo "    </div>
";
        
        $__internal_065c3203f5455260219a39e3fa13304e06c6e6bd9f5fc48e366ce170b0da7ff0->leave($__internal_065c3203f5455260219a39e3fa13304e06c6e6bd9f5fc48e366ce170b0da7ff0_prof);

        
        $__internal_3cd5c664fe3762eba25206cbc2fc61be8cd7a29f878bc7b3a3fe850548c6eec0->leave($__internal_3cd5c664fe3762eba25206cbc2fc61be8cd7a29f878bc7b3a3fe850548c6eec0_prof);

    }

    // line 165
    public function block_sylius_product_option_value_widget($context, array $blocks = array())
    {
        $__internal_968380ba0ae0cb0d6625ab5df188986df6165d9b512832ec1b2bd47f8efb96aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_968380ba0ae0cb0d6625ab5df188986df6165d9b512832ec1b2bd47f8efb96aa->enter($__internal_968380ba0ae0cb0d6625ab5df188986df6165d9b512832ec1b2bd47f8efb96aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_product_option_value_widget"));

        $__internal_cda9d8894d14c0eacd96a76f484f71626668c807f9e76f6dd567279c75a29e7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cda9d8894d14c0eacd96a76f484f71626668c807f9e76f6dd567279c75a29e7d->enter($__internal_cda9d8894d14c0eacd96a76f484f71626668c807f9e76f6dd567279c75a29e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_product_option_value_widget"));

        // line 166
        echo "    <div class=\"ui segment\">
        ";
        // line 167
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "code", array()), 'row');
        echo "
            <div class=\"five fields\">
            ";
        // line 169
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "translations", array()));
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
        foreach ($context['_seq'] as $context["locale"] => $context["translationForm"]) {
            // line 170
            echo "                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["translationForm"], "value", array()), 'row', array("label" => call_user_func_array($this->env->getFilter('sylius_locale_name')->getCallable(), array($context["locale"]))));
            echo "
                ";
            // line 171
            if ((0 == ($this->getAttribute($context["loop"], "index", array()) % 5))) {
                // line 172
                echo "                </div>
                <div class=\"five fields\">
                ";
            }
            // line 175
            echo "            ";
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
        unset($context['_seq'], $context['_iterated'], $context['locale'], $context['translationForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        echo "            </div>
    </div>
";
        
        $__internal_cda9d8894d14c0eacd96a76f484f71626668c807f9e76f6dd567279c75a29e7d->leave($__internal_cda9d8894d14c0eacd96a76f484f71626668c807f9e76f6dd567279c75a29e7d_prof);

        
        $__internal_968380ba0ae0cb0d6625ab5df188986df6165d9b512832ec1b2bd47f8efb96aa->leave($__internal_968380ba0ae0cb0d6625ab5df188986df6165d9b512832ec1b2bd47f8efb96aa_prof);

    }

    // line 180
    public function block_sylius_translations_row($context, array $blocks = array())
    {
        $__internal_7d87194643f4ce75f43e99c3e58f7b5b81454c92cb618f3d70383dfd1e631c6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d87194643f4ce75f43e99c3e58f7b5b81454c92cb618f3d70383dfd1e631c6e->enter($__internal_7d87194643f4ce75f43e99c3e58f7b5b81454c92cb618f3d70383dfd1e631c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_translations_row"));

        $__internal_88893ab9eccf59d095c2efd4ee4ad22c463355975f30ffcd65298ebdce95c299 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88893ab9eccf59d095c2efd4ee4ad22c463355975f30ffcd65298ebdce95c299->enter($__internal_88893ab9eccf59d095c2efd4ee4ad22c463355975f30ffcd65298ebdce95c299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_translations_row"));

        // line 181
        echo "<h4 class=\"ui dividing header\">";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        echo "</h4>
    <div class=\"ui grid\">
        ";
        // line 183
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["translation"]) {
            // line 184
            echo "            <div class=\"four wide column\">
                ";
            // line 185
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["translation"], 'label', (twig_test_empty($_label_ = call_user_func_array($this->env->getFilter('sylius_locale_name')->getCallable(), array($this->getAttribute($this->getAttribute($context["translation"], "vars", array()), "name", array())))) ? array() : array("label" => $_label_)));
            echo "
            </div>
            <div class=\"twelve wide column\">
                ";
            // line 188
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["translation"], 'widget');
            echo "
            </div>";
            // line 190
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 192
        echo "    </div>";
        
        $__internal_88893ab9eccf59d095c2efd4ee4ad22c463355975f30ffcd65298ebdce95c299->leave($__internal_88893ab9eccf59d095c2efd4ee4ad22c463355975f30ffcd65298ebdce95c299_prof);

        
        $__internal_7d87194643f4ce75f43e99c3e58f7b5b81454c92cb618f3d70383dfd1e631c6e->leave($__internal_7d87194643f4ce75f43e99c3e58f7b5b81454c92cb618f3d70383dfd1e631c6e_prof);

    }

    // line 195
    public function block_sylius_resource_autocomplete_choice_row($context, array $blocks = array())
    {
        $__internal_19ce3fe8236235fec498dd26b0a95a4f683207227df66a43eb1cae2edf46ed08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19ce3fe8236235fec498dd26b0a95a4f683207227df66a43eb1cae2edf46ed08->enter($__internal_19ce3fe8236235fec498dd26b0a95a4f683207227df66a43eb1cae2edf46ed08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_resource_autocomplete_choice_row"));

        $__internal_984078c24b72a0081f27e4a1fee2ec339bcb5d8936f41e91aef930be400ba958 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_984078c24b72a0081f27e4a1fee2ec339bcb5d8936f41e91aef930be400ba958->enter($__internal_984078c24b72a0081f27e4a1fee2ec339bcb5d8936f41e91aef930be400ba958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_resource_autocomplete_choice_row"));

        // line 196
        echo "    <div class=\"";
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            echo "required ";
        }
        echo "field";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " error";
        }
        echo "\">";
        // line 197
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 198
        echo "<div
            class=\"sylius-autocomplete ui fluid search selection dropdown ";
        // line 199
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo "multiple";
        }
        echo "\"
            data-url=\"";
        // line 200
        echo twig_escape_filter($this->env, ($context["remote_url"] ?? $this->getContext($context, "remote_url")), "html", null, true);
        echo "\"
            data-choice-name=\"";
        // line 201
        echo twig_escape_filter($this->env, ($context["choice_name"] ?? $this->getContext($context, "choice_name")), "html", null, true);
        echo "\"
            data-choice-value=\"";
        // line 202
        echo twig_escape_filter($this->env, ($context["choice_value"] ?? $this->getContext($context, "choice_value")), "html", null, true);
        echo "\"
            data-criteria-type=\"";
        // line 203
        echo twig_escape_filter($this->env, ($context["remote_criteria_type"] ?? $this->getContext($context, "remote_criteria_type")), "html", null, true);
        echo "\"
            data-criteria-name=\"";
        // line 204
        echo twig_escape_filter($this->env, ($context["remote_criteria_name"] ?? $this->getContext($context, "remote_criteria_name")), "html", null, true);
        echo "\"
            data-load-edit-url=\"";
        // line 205
        echo twig_escape_filter($this->env, ($context["load_edit_url"] ?? $this->getContext($context, "load_edit_url")), "html", null, true);
        echo "\"
        >";
        // line 207
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget', array("attr" => array("class" => "autocomplete")));
        // line 208
        echo "<i class=\"dropdown icon\"></i>
            <div class=\"default text\">";
        // line 209
        if (array_key_exists("placeholder", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder"))), "html", null, true);
            echo " ";
        }
        echo "</div>
            <div class=\"menu\"></div>
        </div>";
        // line 212
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 213
        echo "</div>
";
        
        $__internal_984078c24b72a0081f27e4a1fee2ec339bcb5d8936f41e91aef930be400ba958->leave($__internal_984078c24b72a0081f27e4a1fee2ec339bcb5d8936f41e91aef930be400ba958_prof);

        
        $__internal_19ce3fe8236235fec498dd26b0a95a4f683207227df66a43eb1cae2edf46ed08->leave($__internal_19ce3fe8236235fec498dd26b0a95a4f683207227df66a43eb1cae2edf46ed08_prof);

    }

    // line 113
    public function getcollection_item($__form__ = null, $__allow_delete__ = null, $__button_delete_label__ = null, $__index__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "allow_delete" => $__allow_delete__,
            "button_delete_label" => $__button_delete_label__,
            "index" => $__index__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_983755876a1e8fbb277653b27ce32993c63d6b82738bfbda3c360d03e4a1ff04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_983755876a1e8fbb277653b27ce32993c63d6b82738bfbda3c360d03e4a1ff04->enter($__internal_983755876a1e8fbb277653b27ce32993c63d6b82738bfbda3c360d03e4a1ff04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "collection_item"));

            $__internal_cf667a60c42c319cc4af96cbb2ca3c3d00222a47904f978abc12af9f139569ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_cf667a60c42c319cc4af96cbb2ca3c3d00222a47904f978abc12af9f139569ea->enter($__internal_cf667a60c42c319cc4af96cbb2ca3c3d00222a47904f978abc12af9f139569ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "collection_item"));

            // line 114
            echo "    ";
            ob_start();
            // line 115
            echo "        <div data-form-collection=\"item\" data-form-collection-index=\"";
            echo twig_escape_filter($this->env, ($context["index"] ?? $this->getContext($context, "index")), "html", null, true);
            echo "\">
            ";
            // line 116
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
            echo "
            ";
            // line 117
            if (($context["allow_delete"] ?? $this->getContext($context, "allow_delete"))) {
                // line 118
                echo "                <a href=\"#\" data-form-collection=\"delete\" class=\"ui red labeled icon button\" style=\"margin-bottom: 1em;\">
                    <i class=\"trash icon\"></i>
                    ";
                // line 120
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["button_delete_label"] ?? $this->getContext($context, "button_delete_label"))), "html", null, true);
                echo "
                </a>
            ";
            }
            // line 123
            echo "        </div>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            
            $__internal_cf667a60c42c319cc4af96cbb2ca3c3d00222a47904f978abc12af9f139569ea->leave($__internal_cf667a60c42c319cc4af96cbb2ca3c3d00222a47904f978abc12af9f139569ea_prof);

            
            $__internal_983755876a1e8fbb277653b27ce32993c63d6b82738bfbda3c360d03e4a1ff04->leave($__internal_983755876a1e8fbb277653b27ce32993c63d6b82738bfbda3c360d03e4a1ff04_prof);

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
        return "@SyliusUi/Form/theme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  852 => 123,  846 => 120,  842 => 118,  840 => 117,  836 => 116,  831 => 115,  828 => 114,  807 => 113,  796 => 213,  794 => 212,  785 => 209,  782 => 208,  780 => 207,  776 => 205,  772 => 204,  768 => 203,  764 => 202,  760 => 201,  756 => 200,  750 => 199,  747 => 198,  745 => 197,  735 => 196,  726 => 195,  716 => 192,  710 => 190,  706 => 188,  700 => 185,  697 => 184,  693 => 183,  687 => 181,  678 => 180,  666 => 176,  652 => 175,  647 => 172,  645 => 171,  640 => 170,  623 => 169,  618 => 167,  615 => 166,  606 => 165,  595 => 162,  586 => 160,  582 => 159,  579 => 158,  570 => 157,  557 => 153,  554 => 152,  545 => 151,  532 => 147,  529 => 146,  520 => 145,  506 => 140,  502 => 138,  493 => 137,  479 => 132,  475 => 131,  471 => 130,  467 => 128,  458 => 127,  446 => 109,  440 => 106,  436 => 104,  434 => 103,  430 => 101,  413 => 99,  396 => 98,  392 => 96,  389 => 95,  378 => 93,  373 => 92,  371 => 91,  366 => 89,  363 => 88,  358 => 86,  356 => 85,  351 => 84,  349 => 83,  346 => 82,  343 => 81,  341 => 80,  332 => 79,  321 => 75,  319 => 74,  317 => 73,  308 => 72,  297 => 68,  289 => 65,  287 => 64,  285 => 63,  282 => 61,  278 => 60,  273 => 58,  264 => 57,  254 => 54,  252 => 53,  250 => 52,  248 => 51,  246 => 50,  236 => 49,  227 => 48,  217 => 45,  215 => 44,  212 => 43,  209 => 42,  200 => 41,  189 => 37,  187 => 36,  185 => 35,  183 => 34,  176 => 32,  167 => 31,  156 => 27,  154 => 26,  152 => 25,  150 => 24,  143 => 22,  134 => 21,  117 => 15,  106 => 14,  102 => 13,  100 => 12,  91 => 11,  81 => 8,  79 => 7,  77 => 6,  75 => 5,  65 => 4,  56 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'form_div_layout.html.twig' %}

{% block form_row -%}
    <div class=\"{% if required %}required {% endif %}field{% if (not compound or force_error|default(false)) and not valid %} error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{%- block form_errors -%}
    {%- if errors|length > 0 -%}
        {%- for error in errors -%}
            <div class=\"ui red {% if form.parent is not empty %}pointing {% endif %}label sylius-validation-error\"{% if form.parent is empty %} style=\"margin-bottom: 10px;\"{% endif %}>
                {{ error.message }}
            </div>
        {%- endfor -%}
    {%- endif -%}
{%- endblock form_errors -%}

{% block checkbox_row -%}
    <div class=\"field{% if (not compound or force_error|default(false)) and not valid %} error{% endif %}\">
        <div class=\"ui toggle checkbox\">
            {{- form_widget(form) -}}
            {{- form_label(form) -}}
            {{- form_errors(form) -}}
        </div>
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"field{% if (not compound or force_error|default(false)) and not valid %} error{% endif %}\">
        <div class=\"ui radio checkbox\">
            {{- form_label(form) -}}
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
    </div>
{%- endblock radio_row %}

{% block money_widget -%}
    <div class=\"ui labeled input\">
        <div class=\"ui label\">{{ currency|sylius_currency_symbol }}</div>
        {{- form_widget(form) -}}
    </div>
{%- endblock money_widget %}

{% block choice_row -%}
    <div class=\"{% if required %}required {% endif %}field{% if (not compound or force_error|default(false)) and not valid %} error{% endif %}\">
        {{- form_label(form) -}}
        {% set attr = attr|merge({'class': attr.class|default ~ ' ui dropdown'}) %}
        {{- form_widget(form, {'attr': attr}) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock choice_row %}

{%- block choice_widget_expanded -%}
    <div {{ block('widget_container_attributes') }}>
        <div class=\"grouped fields\">
            {%- for child in form %}
                <div class=\"field\">
                    <div class=\"ui toggle checkbox\">
                        {{- form_label(child, null, {translation_domain: choice_translation_domain}) -}}
                        {{- form_widget(child) -}}
                    </div>
                </div>
            {% endfor -%}
        </div>
    </div>
{%- endblock choice_widget_expanded -%}

{% block percent_widget -%}
    <div class=\"ui right labeled input\">
        {{- form_widget(form) -}}
        <div class=\"ui basic label\">%</div>
    </div>
{%- endblock percent_widget %}

{% block collection_widget -%}
    {% from 'SyliusResourceBundle:Macros:notification.html.twig' import error %}
    {% set attr = attr|merge({'class': attr.class|default ~ ' controls collection-widget'}) %}

    {% spaceless %}
        <div data-form-type=\"collection\" {{ block('widget_container_attributes') }}
            {% if prototype is defined and allow_add %}
                data-prototype='{{ _self.collection_item(prototype, allow_delete, button_delete_label, '__name__')|e }}'
            {%- endif -%}
        >
            {{ error(form.vars.errors) }}

            {% if prototypes|default is iterable %}
                {% for key, subPrototype in prototypes %}
                    <input type=\"hidden\" data-form-prototype=\"{{ key }}\" value=\"{{ _self.collection_item(subPrototype, allow_delete, button_delete_label, '__name__')|e }}\" />
                {% endfor %}
            {% endif %}

            <div data-form-collection=\"list\">
                {% for child in form %}
                    {{ _self.collection_item(child, allow_delete, button_delete_label, loop.index0) }}
                {% endfor %}
            </div>

            {% if prototype is defined and allow_add %}
                <a href=\"#\" class=\"ui labeled icon button\" data-form-collection=\"add\">
                    <i class=\"plus square outline icon\"></i>
                    {{ button_add_label|trans }}
                </a>
            {% endif %}
        </div>
    {% endspaceless %}
{%- endblock collection_widget %}

{% macro collection_item(form, allow_delete, button_delete_label, index) %}
    {% spaceless %}
        <div data-form-collection=\"item\" data-form-collection-index=\"{{ index }}\">
            {{ form_widget(form) }}
            {% if allow_delete %}
                <a href=\"#\" data-form-collection=\"delete\" class=\"ui red labeled icon button\" style=\"margin-bottom: 1em;\">
                    <i class=\"trash icon\"></i>
                    {{ button_delete_label|trans }}
                </a>
            {% endif %}
        </div>
    {% endspaceless %}
{% endmacro %}

{% block sylius_province_widget %}
<div class=\"ui compact segment\">
    <div class=\"inline fields\">
        {{ form_row(form.code) }}
        {{ form_row(form.name) }}
        {{ form_row(form.abbreviation) }}
    </div>
</div>
{% endblock %}

{% block sylius_zone_member_widget %}
    <div class=\"ui compact segment\">
        <div class=\"inline fields\">
            {{ form_row(form.code) }}
        </div>
    </div>
{% endblock %}

{% block sylius_promotion_rule_widget %}
    <div class=\"ui segment\">
        {{ form_widget(form) }}
    </div>
{% endblock %}

{% block sylius_promotion_action_widget %}
    <div class=\"ui segment\">
        {{ form_widget(form) }}
    </div>
{% endblock %}

{% block sylius_promotion_configuration_widget %}
    <div class=\"configuration\">
        {% for child in form %}
            <hr/>{{ form_row(child) }}<hr/>
        {% endfor %}
    </div>
{% endblock %}

{% block sylius_product_option_value_widget %}
    <div class=\"ui segment\">
        {{ form_row(form.code) }}
            <div class=\"five fields\">
            {% for locale, translationForm in form.translations %}
                {{ form_row(translationForm.value, {'label': locale|sylius_locale_name}) }}
                {% if 0 == loop.index % 5 %}
                </div>
                <div class=\"five fields\">
                {% endif %}
            {% endfor %}
            </div>
    </div>
{% endblock %}

{% block sylius_translations_row -%}
    <h4 class=\"ui dividing header\">{{ form_label(form) }}</h4>
    <div class=\"ui grid\">
        {% for translation in form %}
            <div class=\"four wide column\">
                {{ form_label(translation, translation.vars.name|sylius_locale_name) }}
            </div>
            <div class=\"twelve wide column\">
                {{ form_widget(translation) }}
            </div>
            {{- form_errors(form) -}}
        {% endfor %}
    </div>
{%- endblock sylius_translations_row %}

{% block sylius_resource_autocomplete_choice_row %}
    <div class=\"{% if required %}required {% endif %}field{% if (not compound or force_error|default(false)) and not valid %} error{% endif %}\">
        {{- form_label(form) -}}
        <div
            class=\"sylius-autocomplete ui fluid search selection dropdown {% if multiple %}multiple{% endif %}\"
            data-url=\"{{ remote_url }}\"
            data-choice-name=\"{{ choice_name }}\"
            data-choice-value=\"{{ choice_value }}\"
            data-criteria-type=\"{{ remote_criteria_type }}\"
            data-criteria-name=\"{{ remote_criteria_name }}\"
            data-load-edit-url=\"{{ load_edit_url }}\"
        >
            {{- form_widget(form, {'attr': {'class' : 'autocomplete'}}) -}}
            <i class=\"dropdown icon\"></i>
            <div class=\"default text\">{% if placeholder is defined %} {{ placeholder|trans }} {% endif %}</div>
            <div class=\"menu\"></div>
        </div>
        {{- form_errors(form) -}}
    </div>
{% endblock %}
", "@SyliusUi/Form/theme.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Form/theme.html.twig");
    }
}

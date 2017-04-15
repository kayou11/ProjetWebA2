<?php

/* SyliusUiBundle:Form:theme.html.twig */
class __TwigTemplate_5f5defddc881bf8d28bc05bf7a34fd4921105d2c2805f793ade4a8491de4d819 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "SyliusUiBundle:Form:theme.html.twig", 1);
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
        $__internal_c3fe5421bd137ff76ecda666c3aed9269d11d5b4e769395769fcf75ca114460c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3fe5421bd137ff76ecda666c3aed9269d11d5b4e769395769fcf75ca114460c->enter($__internal_c3fe5421bd137ff76ecda666c3aed9269d11d5b4e769395769fcf75ca114460c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Form:theme.html.twig"));

        $__internal_6bdbbe67b271a900d53a11c8162d9e2febd524c94fbf43eec63fc076a620485c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bdbbe67b271a900d53a11c8162d9e2febd524c94fbf43eec63fc076a620485c->enter($__internal_6bdbbe67b271a900d53a11c8162d9e2febd524c94fbf43eec63fc076a620485c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Form:theme.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3fe5421bd137ff76ecda666c3aed9269d11d5b4e769395769fcf75ca114460c->leave($__internal_c3fe5421bd137ff76ecda666c3aed9269d11d5b4e769395769fcf75ca114460c_prof);

        
        $__internal_6bdbbe67b271a900d53a11c8162d9e2febd524c94fbf43eec63fc076a620485c->leave($__internal_6bdbbe67b271a900d53a11c8162d9e2febd524c94fbf43eec63fc076a620485c_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_ce9bdd35791c6527264db4e7ce4f8f9158907f5572afdd28a06c75c84cb02c8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce9bdd35791c6527264db4e7ce4f8f9158907f5572afdd28a06c75c84cb02c8a->enter($__internal_ce9bdd35791c6527264db4e7ce4f8f9158907f5572afdd28a06c75c84cb02c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_f61327b4b199a9509e87afa2ff64e9f45ea431bb054cdef41a4487fa641ecd16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f61327b4b199a9509e87afa2ff64e9f45ea431bb054cdef41a4487fa641ecd16->enter($__internal_f61327b4b199a9509e87afa2ff64e9f45ea431bb054cdef41a4487fa641ecd16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_f61327b4b199a9509e87afa2ff64e9f45ea431bb054cdef41a4487fa641ecd16->leave($__internal_f61327b4b199a9509e87afa2ff64e9f45ea431bb054cdef41a4487fa641ecd16_prof);

        
        $__internal_ce9bdd35791c6527264db4e7ce4f8f9158907f5572afdd28a06c75c84cb02c8a->leave($__internal_ce9bdd35791c6527264db4e7ce4f8f9158907f5572afdd28a06c75c84cb02c8a_prof);

    }

    // line 11
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_2522d8fb097f500dd9842ad3efd8047423e755c0571df50f27645e4589538e46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2522d8fb097f500dd9842ad3efd8047423e755c0571df50f27645e4589538e46->enter($__internal_2522d8fb097f500dd9842ad3efd8047423e755c0571df50f27645e4589538e46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_4f7a4348d7e6da38d565c0fec8ba91ffea16674f8790a5ad7c5b78f28ffdd55b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f7a4348d7e6da38d565c0fec8ba91ffea16674f8790a5ad7c5b78f28ffdd55b->enter($__internal_4f7a4348d7e6da38d565c0fec8ba91ffea16674f8790a5ad7c5b78f28ffdd55b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_4f7a4348d7e6da38d565c0fec8ba91ffea16674f8790a5ad7c5b78f28ffdd55b->leave($__internal_4f7a4348d7e6da38d565c0fec8ba91ffea16674f8790a5ad7c5b78f28ffdd55b_prof);

        
        $__internal_2522d8fb097f500dd9842ad3efd8047423e755c0571df50f27645e4589538e46->leave($__internal_2522d8fb097f500dd9842ad3efd8047423e755c0571df50f27645e4589538e46_prof);

    }

    // line 21
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_1dc4277b0887afd5b9e58f4e6ea730a04ec6569b7c653f7b55fbf8a794080e94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dc4277b0887afd5b9e58f4e6ea730a04ec6569b7c653f7b55fbf8a794080e94->enter($__internal_1dc4277b0887afd5b9e58f4e6ea730a04ec6569b7c653f7b55fbf8a794080e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_ccfd87060cc3f996f31b4e483a185da6fcb7da087259160559003c69297a2826 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccfd87060cc3f996f31b4e483a185da6fcb7da087259160559003c69297a2826->enter($__internal_ccfd87060cc3f996f31b4e483a185da6fcb7da087259160559003c69297a2826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_ccfd87060cc3f996f31b4e483a185da6fcb7da087259160559003c69297a2826->leave($__internal_ccfd87060cc3f996f31b4e483a185da6fcb7da087259160559003c69297a2826_prof);

        
        $__internal_1dc4277b0887afd5b9e58f4e6ea730a04ec6569b7c653f7b55fbf8a794080e94->leave($__internal_1dc4277b0887afd5b9e58f4e6ea730a04ec6569b7c653f7b55fbf8a794080e94_prof);

    }

    // line 31
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_61909c2c37bee2b45d0d4ec6ef88d39dcbe89fa361ce8a8bd13e8c050e973131 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61909c2c37bee2b45d0d4ec6ef88d39dcbe89fa361ce8a8bd13e8c050e973131->enter($__internal_61909c2c37bee2b45d0d4ec6ef88d39dcbe89fa361ce8a8bd13e8c050e973131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_3d36177b1d77126ba1d25517e937fdff64df1750f5a0d7bb55cb94d705bd2e1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d36177b1d77126ba1d25517e937fdff64df1750f5a0d7bb55cb94d705bd2e1d->enter($__internal_3d36177b1d77126ba1d25517e937fdff64df1750f5a0d7bb55cb94d705bd2e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_3d36177b1d77126ba1d25517e937fdff64df1750f5a0d7bb55cb94d705bd2e1d->leave($__internal_3d36177b1d77126ba1d25517e937fdff64df1750f5a0d7bb55cb94d705bd2e1d_prof);

        
        $__internal_61909c2c37bee2b45d0d4ec6ef88d39dcbe89fa361ce8a8bd13e8c050e973131->leave($__internal_61909c2c37bee2b45d0d4ec6ef88d39dcbe89fa361ce8a8bd13e8c050e973131_prof);

    }

    // line 41
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_d5b5e9510a17c488378aac6e30e71c443fe17a9695ffbf21934b0cd4690e9f7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5b5e9510a17c488378aac6e30e71c443fe17a9695ffbf21934b0cd4690e9f7f->enter($__internal_d5b5e9510a17c488378aac6e30e71c443fe17a9695ffbf21934b0cd4690e9f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_c653ba1ffbd08e0698f78654c7d0dc85afb1ee73d898b8daef4260e9463a2fdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c653ba1ffbd08e0698f78654c7d0dc85afb1ee73d898b8daef4260e9463a2fdb->enter($__internal_c653ba1ffbd08e0698f78654c7d0dc85afb1ee73d898b8daef4260e9463a2fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

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
        
        $__internal_c653ba1ffbd08e0698f78654c7d0dc85afb1ee73d898b8daef4260e9463a2fdb->leave($__internal_c653ba1ffbd08e0698f78654c7d0dc85afb1ee73d898b8daef4260e9463a2fdb_prof);

        
        $__internal_d5b5e9510a17c488378aac6e30e71c443fe17a9695ffbf21934b0cd4690e9f7f->leave($__internal_d5b5e9510a17c488378aac6e30e71c443fe17a9695ffbf21934b0cd4690e9f7f_prof);

    }

    // line 48
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_6b4b0eb8a4884632456895e8cd0c0f3324844e99a6be985cb4173776477e7af0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b4b0eb8a4884632456895e8cd0c0f3324844e99a6be985cb4173776477e7af0->enter($__internal_6b4b0eb8a4884632456895e8cd0c0f3324844e99a6be985cb4173776477e7af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_4c2cb3cc0309ae7694ff7417b017da47849bf75451ce883cc954bc99c4f63644 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c2cb3cc0309ae7694ff7417b017da47849bf75451ce883cc954bc99c4f63644->enter($__internal_4c2cb3cc0309ae7694ff7417b017da47849bf75451ce883cc954bc99c4f63644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

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
        
        $__internal_4c2cb3cc0309ae7694ff7417b017da47849bf75451ce883cc954bc99c4f63644->leave($__internal_4c2cb3cc0309ae7694ff7417b017da47849bf75451ce883cc954bc99c4f63644_prof);

        
        $__internal_6b4b0eb8a4884632456895e8cd0c0f3324844e99a6be985cb4173776477e7af0->leave($__internal_6b4b0eb8a4884632456895e8cd0c0f3324844e99a6be985cb4173776477e7af0_prof);

    }

    // line 57
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_23fbff6ade1aec30eda72ea290a7f373bd16e609a54bfa46e5645e3d740c457a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23fbff6ade1aec30eda72ea290a7f373bd16e609a54bfa46e5645e3d740c457a->enter($__internal_23fbff6ade1aec30eda72ea290a7f373bd16e609a54bfa46e5645e3d740c457a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_ea39942bd682b233d3995956259af93f097b2d29031f31572fd9dcb7fb7480f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea39942bd682b233d3995956259af93f097b2d29031f31572fd9dcb7fb7480f4->enter($__internal_ea39942bd682b233d3995956259af93f097b2d29031f31572fd9dcb7fb7480f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_ea39942bd682b233d3995956259af93f097b2d29031f31572fd9dcb7fb7480f4->leave($__internal_ea39942bd682b233d3995956259af93f097b2d29031f31572fd9dcb7fb7480f4_prof);

        
        $__internal_23fbff6ade1aec30eda72ea290a7f373bd16e609a54bfa46e5645e3d740c457a->leave($__internal_23fbff6ade1aec30eda72ea290a7f373bd16e609a54bfa46e5645e3d740c457a_prof);

    }

    // line 72
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_1f69134f835e51c61742a96d26f28dc035aed8212caed6f0427e3d8c68f3b77d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f69134f835e51c61742a96d26f28dc035aed8212caed6f0427e3d8c68f3b77d->enter($__internal_1f69134f835e51c61742a96d26f28dc035aed8212caed6f0427e3d8c68f3b77d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_0d6d10c34a2ca1abfc5af46c18dd735045aa7d01e8630fb03b902b5f060caab7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d6d10c34a2ca1abfc5af46c18dd735045aa7d01e8630fb03b902b5f060caab7->enter($__internal_0d6d10c34a2ca1abfc5af46c18dd735045aa7d01e8630fb03b902b5f060caab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 73
        echo "<div class=\"ui right labeled input\">";
        // line 74
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 75
        echo "<div class=\"ui basic label\">%</div>
    </div>";
        
        $__internal_0d6d10c34a2ca1abfc5af46c18dd735045aa7d01e8630fb03b902b5f060caab7->leave($__internal_0d6d10c34a2ca1abfc5af46c18dd735045aa7d01e8630fb03b902b5f060caab7_prof);

        
        $__internal_1f69134f835e51c61742a96d26f28dc035aed8212caed6f0427e3d8c68f3b77d->leave($__internal_1f69134f835e51c61742a96d26f28dc035aed8212caed6f0427e3d8c68f3b77d_prof);

    }

    // line 79
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_9bc2003b0f5815f44cbed12db9caaf14a27eb6673cd17caffffc73dd88d084de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bc2003b0f5815f44cbed12db9caaf14a27eb6673cd17caffffc73dd88d084de->enter($__internal_9bc2003b0f5815f44cbed12db9caaf14a27eb6673cd17caffffc73dd88d084de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_30af9c0831556dff59c939f4d03ed2f61fabd285d1c91f4d16974218a5157bee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30af9c0831556dff59c939f4d03ed2f61fabd285d1c91f4d16974218a5157bee->enter($__internal_30af9c0831556dff59c939f4d03ed2f61fabd285d1c91f4d16974218a5157bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 80
        $context["__internal_c9ba9acc094ab25697f5ea4900b5ea57db4625d8e28d6b0373db7458ca1101e7"] = $this->loadTemplate("SyliusResourceBundle:Macros:notification.html.twig", "SyliusUiBundle:Form:theme.html.twig", 80);
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
        echo $context["__internal_c9ba9acc094ab25697f5ea4900b5ea57db4625d8e28d6b0373db7458ca1101e7"]->geterror($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "errors", array()));
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
        
        $__internal_30af9c0831556dff59c939f4d03ed2f61fabd285d1c91f4d16974218a5157bee->leave($__internal_30af9c0831556dff59c939f4d03ed2f61fabd285d1c91f4d16974218a5157bee_prof);

        
        $__internal_9bc2003b0f5815f44cbed12db9caaf14a27eb6673cd17caffffc73dd88d084de->leave($__internal_9bc2003b0f5815f44cbed12db9caaf14a27eb6673cd17caffffc73dd88d084de_prof);

    }

    // line 127
    public function block_sylius_province_widget($context, array $blocks = array())
    {
        $__internal_7756b3abb028d4e90da6053c1f3081680ebf8622aa2e68e4455fb37917e19af4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7756b3abb028d4e90da6053c1f3081680ebf8622aa2e68e4455fb37917e19af4->enter($__internal_7756b3abb028d4e90da6053c1f3081680ebf8622aa2e68e4455fb37917e19af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_province_widget"));

        $__internal_be71c6e622646d3d59c12b5b83ba1b33a0265c79aa9380b8e08033e03d5ad109 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be71c6e622646d3d59c12b5b83ba1b33a0265c79aa9380b8e08033e03d5ad109->enter($__internal_be71c6e622646d3d59c12b5b83ba1b33a0265c79aa9380b8e08033e03d5ad109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_province_widget"));

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
        
        $__internal_be71c6e622646d3d59c12b5b83ba1b33a0265c79aa9380b8e08033e03d5ad109->leave($__internal_be71c6e622646d3d59c12b5b83ba1b33a0265c79aa9380b8e08033e03d5ad109_prof);

        
        $__internal_7756b3abb028d4e90da6053c1f3081680ebf8622aa2e68e4455fb37917e19af4->leave($__internal_7756b3abb028d4e90da6053c1f3081680ebf8622aa2e68e4455fb37917e19af4_prof);

    }

    // line 137
    public function block_sylius_zone_member_widget($context, array $blocks = array())
    {
        $__internal_aba4d92ee25df2a4980694464a29c2df0fdf167e967d2c711b42d5886b386e31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aba4d92ee25df2a4980694464a29c2df0fdf167e967d2c711b42d5886b386e31->enter($__internal_aba4d92ee25df2a4980694464a29c2df0fdf167e967d2c711b42d5886b386e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_zone_member_widget"));

        $__internal_3819c358c895b2e27841e6af872b9d233a564b406aeb8f4b160c084dba9fa7e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3819c358c895b2e27841e6af872b9d233a564b406aeb8f4b160c084dba9fa7e1->enter($__internal_3819c358c895b2e27841e6af872b9d233a564b406aeb8f4b160c084dba9fa7e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_zone_member_widget"));

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
        
        $__internal_3819c358c895b2e27841e6af872b9d233a564b406aeb8f4b160c084dba9fa7e1->leave($__internal_3819c358c895b2e27841e6af872b9d233a564b406aeb8f4b160c084dba9fa7e1_prof);

        
        $__internal_aba4d92ee25df2a4980694464a29c2df0fdf167e967d2c711b42d5886b386e31->leave($__internal_aba4d92ee25df2a4980694464a29c2df0fdf167e967d2c711b42d5886b386e31_prof);

    }

    // line 145
    public function block_sylius_promotion_rule_widget($context, array $blocks = array())
    {
        $__internal_e263d3a2fd8b628d8d11fbcc1e9f38e743f9a13b0c72709fe6a21b8f084f1b0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e263d3a2fd8b628d8d11fbcc1e9f38e743f9a13b0c72709fe6a21b8f084f1b0e->enter($__internal_e263d3a2fd8b628d8d11fbcc1e9f38e743f9a13b0c72709fe6a21b8f084f1b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_promotion_rule_widget"));

        $__internal_00e52dacfa31e0f5dc0f2128052919e638d624de3a05cc350ec462ca8deee2be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00e52dacfa31e0f5dc0f2128052919e638d624de3a05cc350ec462ca8deee2be->enter($__internal_00e52dacfa31e0f5dc0f2128052919e638d624de3a05cc350ec462ca8deee2be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_promotion_rule_widget"));

        // line 146
        echo "    <div class=\"ui segment\">
        ";
        // line 147
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    </div>
";
        
        $__internal_00e52dacfa31e0f5dc0f2128052919e638d624de3a05cc350ec462ca8deee2be->leave($__internal_00e52dacfa31e0f5dc0f2128052919e638d624de3a05cc350ec462ca8deee2be_prof);

        
        $__internal_e263d3a2fd8b628d8d11fbcc1e9f38e743f9a13b0c72709fe6a21b8f084f1b0e->leave($__internal_e263d3a2fd8b628d8d11fbcc1e9f38e743f9a13b0c72709fe6a21b8f084f1b0e_prof);

    }

    // line 151
    public function block_sylius_promotion_action_widget($context, array $blocks = array())
    {
        $__internal_2fd7ec0a204af0623af38cfef6d89c178a195257a7788f90dca052ffb2345782 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fd7ec0a204af0623af38cfef6d89c178a195257a7788f90dca052ffb2345782->enter($__internal_2fd7ec0a204af0623af38cfef6d89c178a195257a7788f90dca052ffb2345782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_promotion_action_widget"));

        $__internal_c2155f1df118f88b59d089ce141a1d9a918cd49d2cdd34f4756ccff71ef77a0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2155f1df118f88b59d089ce141a1d9a918cd49d2cdd34f4756ccff71ef77a0b->enter($__internal_c2155f1df118f88b59d089ce141a1d9a918cd49d2cdd34f4756ccff71ef77a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_promotion_action_widget"));

        // line 152
        echo "    <div class=\"ui segment\">
        ";
        // line 153
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    </div>
";
        
        $__internal_c2155f1df118f88b59d089ce141a1d9a918cd49d2cdd34f4756ccff71ef77a0b->leave($__internal_c2155f1df118f88b59d089ce141a1d9a918cd49d2cdd34f4756ccff71ef77a0b_prof);

        
        $__internal_2fd7ec0a204af0623af38cfef6d89c178a195257a7788f90dca052ffb2345782->leave($__internal_2fd7ec0a204af0623af38cfef6d89c178a195257a7788f90dca052ffb2345782_prof);

    }

    // line 157
    public function block_sylius_promotion_configuration_widget($context, array $blocks = array())
    {
        $__internal_29062ce40fe896f59253baaac533c946a8ea502af3bfbba5d1f6f786bdc88cbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29062ce40fe896f59253baaac533c946a8ea502af3bfbba5d1f6f786bdc88cbc->enter($__internal_29062ce40fe896f59253baaac533c946a8ea502af3bfbba5d1f6f786bdc88cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_promotion_configuration_widget"));

        $__internal_bd6413ac227b0b290a7dfa046284d8968b9d7544c84e915f72d6fd6916fb27a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd6413ac227b0b290a7dfa046284d8968b9d7544c84e915f72d6fd6916fb27a2->enter($__internal_bd6413ac227b0b290a7dfa046284d8968b9d7544c84e915f72d6fd6916fb27a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_promotion_configuration_widget"));

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
        
        $__internal_bd6413ac227b0b290a7dfa046284d8968b9d7544c84e915f72d6fd6916fb27a2->leave($__internal_bd6413ac227b0b290a7dfa046284d8968b9d7544c84e915f72d6fd6916fb27a2_prof);

        
        $__internal_29062ce40fe896f59253baaac533c946a8ea502af3bfbba5d1f6f786bdc88cbc->leave($__internal_29062ce40fe896f59253baaac533c946a8ea502af3bfbba5d1f6f786bdc88cbc_prof);

    }

    // line 165
    public function block_sylius_product_option_value_widget($context, array $blocks = array())
    {
        $__internal_1e76620f8b7e460234b0e7321a54976c65c50bf296cdd40ee1372f31883b565e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e76620f8b7e460234b0e7321a54976c65c50bf296cdd40ee1372f31883b565e->enter($__internal_1e76620f8b7e460234b0e7321a54976c65c50bf296cdd40ee1372f31883b565e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_product_option_value_widget"));

        $__internal_8803ca11dc1f27aee5ffb7ac976775c9e4914544b76c6db6fecc36aaee0fea68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8803ca11dc1f27aee5ffb7ac976775c9e4914544b76c6db6fecc36aaee0fea68->enter($__internal_8803ca11dc1f27aee5ffb7ac976775c9e4914544b76c6db6fecc36aaee0fea68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_product_option_value_widget"));

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
        
        $__internal_8803ca11dc1f27aee5ffb7ac976775c9e4914544b76c6db6fecc36aaee0fea68->leave($__internal_8803ca11dc1f27aee5ffb7ac976775c9e4914544b76c6db6fecc36aaee0fea68_prof);

        
        $__internal_1e76620f8b7e460234b0e7321a54976c65c50bf296cdd40ee1372f31883b565e->leave($__internal_1e76620f8b7e460234b0e7321a54976c65c50bf296cdd40ee1372f31883b565e_prof);

    }

    // line 180
    public function block_sylius_translations_row($context, array $blocks = array())
    {
        $__internal_fd696e2a61ad08a9012082df36fc534616d45b4f68862150c6a497364f883e7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd696e2a61ad08a9012082df36fc534616d45b4f68862150c6a497364f883e7f->enter($__internal_fd696e2a61ad08a9012082df36fc534616d45b4f68862150c6a497364f883e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_translations_row"));

        $__internal_0f71688a784eb6f383df1748d74d518940fc2ab4c42afcc93fcc20c4ba81c9ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f71688a784eb6f383df1748d74d518940fc2ab4c42afcc93fcc20c4ba81c9ae->enter($__internal_0f71688a784eb6f383df1748d74d518940fc2ab4c42afcc93fcc20c4ba81c9ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_translations_row"));

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
        
        $__internal_0f71688a784eb6f383df1748d74d518940fc2ab4c42afcc93fcc20c4ba81c9ae->leave($__internal_0f71688a784eb6f383df1748d74d518940fc2ab4c42afcc93fcc20c4ba81c9ae_prof);

        
        $__internal_fd696e2a61ad08a9012082df36fc534616d45b4f68862150c6a497364f883e7f->leave($__internal_fd696e2a61ad08a9012082df36fc534616d45b4f68862150c6a497364f883e7f_prof);

    }

    // line 195
    public function block_sylius_resource_autocomplete_choice_row($context, array $blocks = array())
    {
        $__internal_058a94b3f5e82e1879605764622386956c6a7a06c785ac250e3d379187296ed6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_058a94b3f5e82e1879605764622386956c6a7a06c785ac250e3d379187296ed6->enter($__internal_058a94b3f5e82e1879605764622386956c6a7a06c785ac250e3d379187296ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_resource_autocomplete_choice_row"));

        $__internal_c7a84f706d605c06aaf3470b63b64eb2f19840f73c1e1b2a135055e5f21bf9a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7a84f706d605c06aaf3470b63b64eb2f19840f73c1e1b2a135055e5f21bf9a9->enter($__internal_c7a84f706d605c06aaf3470b63b64eb2f19840f73c1e1b2a135055e5f21bf9a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_resource_autocomplete_choice_row"));

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
        
        $__internal_c7a84f706d605c06aaf3470b63b64eb2f19840f73c1e1b2a135055e5f21bf9a9->leave($__internal_c7a84f706d605c06aaf3470b63b64eb2f19840f73c1e1b2a135055e5f21bf9a9_prof);

        
        $__internal_058a94b3f5e82e1879605764622386956c6a7a06c785ac250e3d379187296ed6->leave($__internal_058a94b3f5e82e1879605764622386956c6a7a06c785ac250e3d379187296ed6_prof);

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
            $__internal_6bc6d75cd3e8940101d39f9f6385dc7ce422cf22b8eee741d883c0a56112753a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_6bc6d75cd3e8940101d39f9f6385dc7ce422cf22b8eee741d883c0a56112753a->enter($__internal_6bc6d75cd3e8940101d39f9f6385dc7ce422cf22b8eee741d883c0a56112753a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "collection_item"));

            $__internal_7eba095efe77b39685a5bfb437268ea2ea9bfc350e34f440fa43fbba6514e280 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_7eba095efe77b39685a5bfb437268ea2ea9bfc350e34f440fa43fbba6514e280->enter($__internal_7eba095efe77b39685a5bfb437268ea2ea9bfc350e34f440fa43fbba6514e280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "collection_item"));

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
            
            $__internal_7eba095efe77b39685a5bfb437268ea2ea9bfc350e34f440fa43fbba6514e280->leave($__internal_7eba095efe77b39685a5bfb437268ea2ea9bfc350e34f440fa43fbba6514e280_prof);

            
            $__internal_6bc6d75cd3e8940101d39f9f6385dc7ce422cf22b8eee741d883c0a56112753a->leave($__internal_6bc6d75cd3e8940101d39f9f6385dc7ce422cf22b8eee741d883c0a56112753a_prof);

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
        return "SyliusUiBundle:Form:theme.html.twig";
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
", "SyliusUiBundle:Form:theme.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Form/theme.html.twig");
    }
}

<?php

/* @SyliusUi/Form/theme.html.twig */
class __TwigTemplate_032fcee875a6eee312a446c5857629df387b4c32615acd41ff104c103a12fe97 extends Twig_Template
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
        $__internal_cae86e9ed450bded545b8535907fffb7a4c79df0bbed2121253b7a7b482b0c22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cae86e9ed450bded545b8535907fffb7a4c79df0bbed2121253b7a7b482b0c22->enter($__internal_cae86e9ed450bded545b8535907fffb7a4c79df0bbed2121253b7a7b482b0c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Form/theme.html.twig"));

        $__internal_ee57a296eafe0612188aeb2c830cfed91c112d7c1da6231aced6f920bc3b4f66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee57a296eafe0612188aeb2c830cfed91c112d7c1da6231aced6f920bc3b4f66->enter($__internal_ee57a296eafe0612188aeb2c830cfed91c112d7c1da6231aced6f920bc3b4f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Form/theme.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cae86e9ed450bded545b8535907fffb7a4c79df0bbed2121253b7a7b482b0c22->leave($__internal_cae86e9ed450bded545b8535907fffb7a4c79df0bbed2121253b7a7b482b0c22_prof);

        
        $__internal_ee57a296eafe0612188aeb2c830cfed91c112d7c1da6231aced6f920bc3b4f66->leave($__internal_ee57a296eafe0612188aeb2c830cfed91c112d7c1da6231aced6f920bc3b4f66_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_5e57982067ccf040d3dd8b4196b30d875c856c8f70bd14c7cfd211a872d880d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e57982067ccf040d3dd8b4196b30d875c856c8f70bd14c7cfd211a872d880d2->enter($__internal_5e57982067ccf040d3dd8b4196b30d875c856c8f70bd14c7cfd211a872d880d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_b51a6f9f9cfafccdb97bdcdc832ee9fb7363a4ca37c79c013be0e4b70fb00899 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b51a6f9f9cfafccdb97bdcdc832ee9fb7363a4ca37c79c013be0e4b70fb00899->enter($__internal_b51a6f9f9cfafccdb97bdcdc832ee9fb7363a4ca37c79c013be0e4b70fb00899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_b51a6f9f9cfafccdb97bdcdc832ee9fb7363a4ca37c79c013be0e4b70fb00899->leave($__internal_b51a6f9f9cfafccdb97bdcdc832ee9fb7363a4ca37c79c013be0e4b70fb00899_prof);

        
        $__internal_5e57982067ccf040d3dd8b4196b30d875c856c8f70bd14c7cfd211a872d880d2->leave($__internal_5e57982067ccf040d3dd8b4196b30d875c856c8f70bd14c7cfd211a872d880d2_prof);

    }

    // line 11
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_13443ef084d0e7f9670cf7409d54339a9a2de360badb46e28b876a50082eb92b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13443ef084d0e7f9670cf7409d54339a9a2de360badb46e28b876a50082eb92b->enter($__internal_13443ef084d0e7f9670cf7409d54339a9a2de360badb46e28b876a50082eb92b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_30a744a8d13d7f842b4a96cf9a1506d549a3547db0a5fdfa243a8320d0c8860b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30a744a8d13d7f842b4a96cf9a1506d549a3547db0a5fdfa243a8320d0c8860b->enter($__internal_30a744a8d13d7f842b4a96cf9a1506d549a3547db0a5fdfa243a8320d0c8860b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_30a744a8d13d7f842b4a96cf9a1506d549a3547db0a5fdfa243a8320d0c8860b->leave($__internal_30a744a8d13d7f842b4a96cf9a1506d549a3547db0a5fdfa243a8320d0c8860b_prof);

        
        $__internal_13443ef084d0e7f9670cf7409d54339a9a2de360badb46e28b876a50082eb92b->leave($__internal_13443ef084d0e7f9670cf7409d54339a9a2de360badb46e28b876a50082eb92b_prof);

    }

    // line 21
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_c42f10d32ec88f496be5a3713d6e9d2e18e2ff2b8fe1008a4c1e176a2dc79b78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c42f10d32ec88f496be5a3713d6e9d2e18e2ff2b8fe1008a4c1e176a2dc79b78->enter($__internal_c42f10d32ec88f496be5a3713d6e9d2e18e2ff2b8fe1008a4c1e176a2dc79b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_9600c815578dc7d7efa1ddbcccba9bb5af7f12cdd4959fcdc58b04e41d956ead = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9600c815578dc7d7efa1ddbcccba9bb5af7f12cdd4959fcdc58b04e41d956ead->enter($__internal_9600c815578dc7d7efa1ddbcccba9bb5af7f12cdd4959fcdc58b04e41d956ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_9600c815578dc7d7efa1ddbcccba9bb5af7f12cdd4959fcdc58b04e41d956ead->leave($__internal_9600c815578dc7d7efa1ddbcccba9bb5af7f12cdd4959fcdc58b04e41d956ead_prof);

        
        $__internal_c42f10d32ec88f496be5a3713d6e9d2e18e2ff2b8fe1008a4c1e176a2dc79b78->leave($__internal_c42f10d32ec88f496be5a3713d6e9d2e18e2ff2b8fe1008a4c1e176a2dc79b78_prof);

    }

    // line 31
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_2321e16a740041c4b2e3ee2bd786656d2c67dd0874aabc1de59f526acf0d5121 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2321e16a740041c4b2e3ee2bd786656d2c67dd0874aabc1de59f526acf0d5121->enter($__internal_2321e16a740041c4b2e3ee2bd786656d2c67dd0874aabc1de59f526acf0d5121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_0a5bdc5349327ad6e35cb04e4d54219006ccc93da1fe3ba891cbb26eca4e886e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a5bdc5349327ad6e35cb04e4d54219006ccc93da1fe3ba891cbb26eca4e886e->enter($__internal_0a5bdc5349327ad6e35cb04e4d54219006ccc93da1fe3ba891cbb26eca4e886e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_0a5bdc5349327ad6e35cb04e4d54219006ccc93da1fe3ba891cbb26eca4e886e->leave($__internal_0a5bdc5349327ad6e35cb04e4d54219006ccc93da1fe3ba891cbb26eca4e886e_prof);

        
        $__internal_2321e16a740041c4b2e3ee2bd786656d2c67dd0874aabc1de59f526acf0d5121->leave($__internal_2321e16a740041c4b2e3ee2bd786656d2c67dd0874aabc1de59f526acf0d5121_prof);

    }

    // line 41
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_b2331d44c7b42f9d7f48438921ac57d04f5235acd3cb0dc663568df4ad7cb3ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2331d44c7b42f9d7f48438921ac57d04f5235acd3cb0dc663568df4ad7cb3ba->enter($__internal_b2331d44c7b42f9d7f48438921ac57d04f5235acd3cb0dc663568df4ad7cb3ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_467e8b852912c04291aeb4bf700d92f4cf9066bb12b04c51be0a602ffd6f9e27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_467e8b852912c04291aeb4bf700d92f4cf9066bb12b04c51be0a602ffd6f9e27->enter($__internal_467e8b852912c04291aeb4bf700d92f4cf9066bb12b04c51be0a602ffd6f9e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

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
        
        $__internal_467e8b852912c04291aeb4bf700d92f4cf9066bb12b04c51be0a602ffd6f9e27->leave($__internal_467e8b852912c04291aeb4bf700d92f4cf9066bb12b04c51be0a602ffd6f9e27_prof);

        
        $__internal_b2331d44c7b42f9d7f48438921ac57d04f5235acd3cb0dc663568df4ad7cb3ba->leave($__internal_b2331d44c7b42f9d7f48438921ac57d04f5235acd3cb0dc663568df4ad7cb3ba_prof);

    }

    // line 48
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_7ad8455b95f9a1809e0663be42cf79d5a547618e5d1c841eae09165fe054766e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ad8455b95f9a1809e0663be42cf79d5a547618e5d1c841eae09165fe054766e->enter($__internal_7ad8455b95f9a1809e0663be42cf79d5a547618e5d1c841eae09165fe054766e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_7e6100584945d86f11000a4fd0182923fc16d7a8ec9b042039efa7b3249c1bbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e6100584945d86f11000a4fd0182923fc16d7a8ec9b042039efa7b3249c1bbd->enter($__internal_7e6100584945d86f11000a4fd0182923fc16d7a8ec9b042039efa7b3249c1bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

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
        
        $__internal_7e6100584945d86f11000a4fd0182923fc16d7a8ec9b042039efa7b3249c1bbd->leave($__internal_7e6100584945d86f11000a4fd0182923fc16d7a8ec9b042039efa7b3249c1bbd_prof);

        
        $__internal_7ad8455b95f9a1809e0663be42cf79d5a547618e5d1c841eae09165fe054766e->leave($__internal_7ad8455b95f9a1809e0663be42cf79d5a547618e5d1c841eae09165fe054766e_prof);

    }

    // line 57
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_7ee23738a55df1247242f948ae34d394ac7eb0a15a79c431b05420a8fa69f15d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ee23738a55df1247242f948ae34d394ac7eb0a15a79c431b05420a8fa69f15d->enter($__internal_7ee23738a55df1247242f948ae34d394ac7eb0a15a79c431b05420a8fa69f15d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_155d947927d287dffe5c7043835b4634321c5ab3de30294c17e2b76bb93f5735 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_155d947927d287dffe5c7043835b4634321c5ab3de30294c17e2b76bb93f5735->enter($__internal_155d947927d287dffe5c7043835b4634321c5ab3de30294c17e2b76bb93f5735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_155d947927d287dffe5c7043835b4634321c5ab3de30294c17e2b76bb93f5735->leave($__internal_155d947927d287dffe5c7043835b4634321c5ab3de30294c17e2b76bb93f5735_prof);

        
        $__internal_7ee23738a55df1247242f948ae34d394ac7eb0a15a79c431b05420a8fa69f15d->leave($__internal_7ee23738a55df1247242f948ae34d394ac7eb0a15a79c431b05420a8fa69f15d_prof);

    }

    // line 72
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_f57ac68e1f32da2c493fafdcfeda7d1c460174009e5a5ef2e4a5a956321af7d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f57ac68e1f32da2c493fafdcfeda7d1c460174009e5a5ef2e4a5a956321af7d8->enter($__internal_f57ac68e1f32da2c493fafdcfeda7d1c460174009e5a5ef2e4a5a956321af7d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_e693735afb23a2a2f2cc630212f4de8802b81a8f12f42bf14c0d41acfafe5b22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e693735afb23a2a2f2cc630212f4de8802b81a8f12f42bf14c0d41acfafe5b22->enter($__internal_e693735afb23a2a2f2cc630212f4de8802b81a8f12f42bf14c0d41acfafe5b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 73
        echo "<div class=\"ui right labeled input\">";
        // line 74
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 75
        echo "<div class=\"ui basic label\">%</div>
    </div>";
        
        $__internal_e693735afb23a2a2f2cc630212f4de8802b81a8f12f42bf14c0d41acfafe5b22->leave($__internal_e693735afb23a2a2f2cc630212f4de8802b81a8f12f42bf14c0d41acfafe5b22_prof);

        
        $__internal_f57ac68e1f32da2c493fafdcfeda7d1c460174009e5a5ef2e4a5a956321af7d8->leave($__internal_f57ac68e1f32da2c493fafdcfeda7d1c460174009e5a5ef2e4a5a956321af7d8_prof);

    }

    // line 79
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_c62b48eb5702ac4ff9bcdc4f607a6c028efefa2285fe6e0e44fd289c66451414 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c62b48eb5702ac4ff9bcdc4f607a6c028efefa2285fe6e0e44fd289c66451414->enter($__internal_c62b48eb5702ac4ff9bcdc4f607a6c028efefa2285fe6e0e44fd289c66451414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_e2ab1db3b076028e93a65225b9552fa456ebdb858ef39aefb4f1f42a8a75253f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2ab1db3b076028e93a65225b9552fa456ebdb858ef39aefb4f1f42a8a75253f->enter($__internal_e2ab1db3b076028e93a65225b9552fa456ebdb858ef39aefb4f1f42a8a75253f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 80
        $context["__internal_81295d41a409c9aaa7343dfd53c757cd59d71eb165c582f15080861df922eff3"] = $this->loadTemplate("SyliusResourceBundle:Macros:notification.html.twig", "@SyliusUi/Form/theme.html.twig", 80);
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
        echo $context["__internal_81295d41a409c9aaa7343dfd53c757cd59d71eb165c582f15080861df922eff3"]->geterror($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "errors", array()));
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
        
        $__internal_e2ab1db3b076028e93a65225b9552fa456ebdb858ef39aefb4f1f42a8a75253f->leave($__internal_e2ab1db3b076028e93a65225b9552fa456ebdb858ef39aefb4f1f42a8a75253f_prof);

        
        $__internal_c62b48eb5702ac4ff9bcdc4f607a6c028efefa2285fe6e0e44fd289c66451414->leave($__internal_c62b48eb5702ac4ff9bcdc4f607a6c028efefa2285fe6e0e44fd289c66451414_prof);

    }

    // line 127
    public function block_sylius_province_widget($context, array $blocks = array())
    {
        $__internal_8e4e83130b11ee61ce35693718658ca1fcc8f0facc1f5b134113d45efe6012d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e4e83130b11ee61ce35693718658ca1fcc8f0facc1f5b134113d45efe6012d8->enter($__internal_8e4e83130b11ee61ce35693718658ca1fcc8f0facc1f5b134113d45efe6012d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_province_widget"));

        $__internal_e5787acdee4df3ba3ed3a8c287736d17371721034269786e9c0c6a191d251652 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5787acdee4df3ba3ed3a8c287736d17371721034269786e9c0c6a191d251652->enter($__internal_e5787acdee4df3ba3ed3a8c287736d17371721034269786e9c0c6a191d251652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_province_widget"));

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
        
        $__internal_e5787acdee4df3ba3ed3a8c287736d17371721034269786e9c0c6a191d251652->leave($__internal_e5787acdee4df3ba3ed3a8c287736d17371721034269786e9c0c6a191d251652_prof);

        
        $__internal_8e4e83130b11ee61ce35693718658ca1fcc8f0facc1f5b134113d45efe6012d8->leave($__internal_8e4e83130b11ee61ce35693718658ca1fcc8f0facc1f5b134113d45efe6012d8_prof);

    }

    // line 137
    public function block_sylius_zone_member_widget($context, array $blocks = array())
    {
        $__internal_c406fcb6ff235500c430d18604f7f7a9343cbdcd14593582c4a45aaefb2d8910 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c406fcb6ff235500c430d18604f7f7a9343cbdcd14593582c4a45aaefb2d8910->enter($__internal_c406fcb6ff235500c430d18604f7f7a9343cbdcd14593582c4a45aaefb2d8910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_zone_member_widget"));

        $__internal_dde38f2c761541d44184143a04be77ba80811e75b4455ea5c6a08de747f4b054 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dde38f2c761541d44184143a04be77ba80811e75b4455ea5c6a08de747f4b054->enter($__internal_dde38f2c761541d44184143a04be77ba80811e75b4455ea5c6a08de747f4b054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_zone_member_widget"));

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
        
        $__internal_dde38f2c761541d44184143a04be77ba80811e75b4455ea5c6a08de747f4b054->leave($__internal_dde38f2c761541d44184143a04be77ba80811e75b4455ea5c6a08de747f4b054_prof);

        
        $__internal_c406fcb6ff235500c430d18604f7f7a9343cbdcd14593582c4a45aaefb2d8910->leave($__internal_c406fcb6ff235500c430d18604f7f7a9343cbdcd14593582c4a45aaefb2d8910_prof);

    }

    // line 145
    public function block_sylius_promotion_rule_widget($context, array $blocks = array())
    {
        $__internal_10cec57860dd463af121ee86e68c425c23553dbc3be2646da15af1e1d2f962ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10cec57860dd463af121ee86e68c425c23553dbc3be2646da15af1e1d2f962ee->enter($__internal_10cec57860dd463af121ee86e68c425c23553dbc3be2646da15af1e1d2f962ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_promotion_rule_widget"));

        $__internal_e4656d30144325552c72a351208ddf7f8bab6172d741a6f161aa358e651baf10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4656d30144325552c72a351208ddf7f8bab6172d741a6f161aa358e651baf10->enter($__internal_e4656d30144325552c72a351208ddf7f8bab6172d741a6f161aa358e651baf10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_promotion_rule_widget"));

        // line 146
        echo "    <div class=\"ui segment\">
        ";
        // line 147
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    </div>
";
        
        $__internal_e4656d30144325552c72a351208ddf7f8bab6172d741a6f161aa358e651baf10->leave($__internal_e4656d30144325552c72a351208ddf7f8bab6172d741a6f161aa358e651baf10_prof);

        
        $__internal_10cec57860dd463af121ee86e68c425c23553dbc3be2646da15af1e1d2f962ee->leave($__internal_10cec57860dd463af121ee86e68c425c23553dbc3be2646da15af1e1d2f962ee_prof);

    }

    // line 151
    public function block_sylius_promotion_action_widget($context, array $blocks = array())
    {
        $__internal_0e05fc388f77db3f6fdc1f8c2f6559ff6779a6fa9bfb5396a5dbe439d6a98d06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e05fc388f77db3f6fdc1f8c2f6559ff6779a6fa9bfb5396a5dbe439d6a98d06->enter($__internal_0e05fc388f77db3f6fdc1f8c2f6559ff6779a6fa9bfb5396a5dbe439d6a98d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_promotion_action_widget"));

        $__internal_2e1e72a781c8d7adc907b2c9a9ac6a3b78d624e131d7855b9eb24fa43703269d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e1e72a781c8d7adc907b2c9a9ac6a3b78d624e131d7855b9eb24fa43703269d->enter($__internal_2e1e72a781c8d7adc907b2c9a9ac6a3b78d624e131d7855b9eb24fa43703269d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_promotion_action_widget"));

        // line 152
        echo "    <div class=\"ui segment\">
        ";
        // line 153
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    </div>
";
        
        $__internal_2e1e72a781c8d7adc907b2c9a9ac6a3b78d624e131d7855b9eb24fa43703269d->leave($__internal_2e1e72a781c8d7adc907b2c9a9ac6a3b78d624e131d7855b9eb24fa43703269d_prof);

        
        $__internal_0e05fc388f77db3f6fdc1f8c2f6559ff6779a6fa9bfb5396a5dbe439d6a98d06->leave($__internal_0e05fc388f77db3f6fdc1f8c2f6559ff6779a6fa9bfb5396a5dbe439d6a98d06_prof);

    }

    // line 157
    public function block_sylius_promotion_configuration_widget($context, array $blocks = array())
    {
        $__internal_c2de0a606d435fe7ce32a6255778b181d9cf5d4292935aac884517271bfdfcec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2de0a606d435fe7ce32a6255778b181d9cf5d4292935aac884517271bfdfcec->enter($__internal_c2de0a606d435fe7ce32a6255778b181d9cf5d4292935aac884517271bfdfcec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_promotion_configuration_widget"));

        $__internal_7b3f19a474900371f134f8e005b426e3e5b2dfbb1b4ef882f61336706bd81655 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b3f19a474900371f134f8e005b426e3e5b2dfbb1b4ef882f61336706bd81655->enter($__internal_7b3f19a474900371f134f8e005b426e3e5b2dfbb1b4ef882f61336706bd81655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_promotion_configuration_widget"));

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
        
        $__internal_7b3f19a474900371f134f8e005b426e3e5b2dfbb1b4ef882f61336706bd81655->leave($__internal_7b3f19a474900371f134f8e005b426e3e5b2dfbb1b4ef882f61336706bd81655_prof);

        
        $__internal_c2de0a606d435fe7ce32a6255778b181d9cf5d4292935aac884517271bfdfcec->leave($__internal_c2de0a606d435fe7ce32a6255778b181d9cf5d4292935aac884517271bfdfcec_prof);

    }

    // line 165
    public function block_sylius_product_option_value_widget($context, array $blocks = array())
    {
        $__internal_b1faf68c3162dafc4053d8a9718cf58df9057dd15d11edfcbe2861a6a75384a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1faf68c3162dafc4053d8a9718cf58df9057dd15d11edfcbe2861a6a75384a4->enter($__internal_b1faf68c3162dafc4053d8a9718cf58df9057dd15d11edfcbe2861a6a75384a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_product_option_value_widget"));

        $__internal_045595595e056e2d5314138cbedf030c9f13a31a31e8c361d4aa1ae80fd2f6cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_045595595e056e2d5314138cbedf030c9f13a31a31e8c361d4aa1ae80fd2f6cd->enter($__internal_045595595e056e2d5314138cbedf030c9f13a31a31e8c361d4aa1ae80fd2f6cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_product_option_value_widget"));

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
        
        $__internal_045595595e056e2d5314138cbedf030c9f13a31a31e8c361d4aa1ae80fd2f6cd->leave($__internal_045595595e056e2d5314138cbedf030c9f13a31a31e8c361d4aa1ae80fd2f6cd_prof);

        
        $__internal_b1faf68c3162dafc4053d8a9718cf58df9057dd15d11edfcbe2861a6a75384a4->leave($__internal_b1faf68c3162dafc4053d8a9718cf58df9057dd15d11edfcbe2861a6a75384a4_prof);

    }

    // line 180
    public function block_sylius_translations_row($context, array $blocks = array())
    {
        $__internal_c84b47f0c229bf73c2a86773447fb3b5cb8ee14cdff0c9d82504a22e94be1861 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c84b47f0c229bf73c2a86773447fb3b5cb8ee14cdff0c9d82504a22e94be1861->enter($__internal_c84b47f0c229bf73c2a86773447fb3b5cb8ee14cdff0c9d82504a22e94be1861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_translations_row"));

        $__internal_4c61ee939ef51ad26bcaad4376e19f2de9f150ab009d3cb2c6ee8d901d5f1b9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c61ee939ef51ad26bcaad4376e19f2de9f150ab009d3cb2c6ee8d901d5f1b9e->enter($__internal_4c61ee939ef51ad26bcaad4376e19f2de9f150ab009d3cb2c6ee8d901d5f1b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_translations_row"));

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
        
        $__internal_4c61ee939ef51ad26bcaad4376e19f2de9f150ab009d3cb2c6ee8d901d5f1b9e->leave($__internal_4c61ee939ef51ad26bcaad4376e19f2de9f150ab009d3cb2c6ee8d901d5f1b9e_prof);

        
        $__internal_c84b47f0c229bf73c2a86773447fb3b5cb8ee14cdff0c9d82504a22e94be1861->leave($__internal_c84b47f0c229bf73c2a86773447fb3b5cb8ee14cdff0c9d82504a22e94be1861_prof);

    }

    // line 195
    public function block_sylius_resource_autocomplete_choice_row($context, array $blocks = array())
    {
        $__internal_31b10f02aa3a0ea4322640fb622015ab0ecdc1026dce1480b0258bb76e831d29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31b10f02aa3a0ea4322640fb622015ab0ecdc1026dce1480b0258bb76e831d29->enter($__internal_31b10f02aa3a0ea4322640fb622015ab0ecdc1026dce1480b0258bb76e831d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_resource_autocomplete_choice_row"));

        $__internal_c76a02931d20d6b162766a9b2bc4ca9b483aebf64a196b66626b3c19db4405d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c76a02931d20d6b162766a9b2bc4ca9b483aebf64a196b66626b3c19db4405d6->enter($__internal_c76a02931d20d6b162766a9b2bc4ca9b483aebf64a196b66626b3c19db4405d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_resource_autocomplete_choice_row"));

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
        
        $__internal_c76a02931d20d6b162766a9b2bc4ca9b483aebf64a196b66626b3c19db4405d6->leave($__internal_c76a02931d20d6b162766a9b2bc4ca9b483aebf64a196b66626b3c19db4405d6_prof);

        
        $__internal_31b10f02aa3a0ea4322640fb622015ab0ecdc1026dce1480b0258bb76e831d29->leave($__internal_31b10f02aa3a0ea4322640fb622015ab0ecdc1026dce1480b0258bb76e831d29_prof);

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
            $__internal_be99be7e2cfffaee4a8249bedc2b7032832ae3e150c9ba32c24e7e5dbed9c15b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_be99be7e2cfffaee4a8249bedc2b7032832ae3e150c9ba32c24e7e5dbed9c15b->enter($__internal_be99be7e2cfffaee4a8249bedc2b7032832ae3e150c9ba32c24e7e5dbed9c15b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "collection_item"));

            $__internal_1b4899b382b3ae3f28c3c876abc88fff9cf0783fa0dd4c1aa52f2a32b72a0609 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_1b4899b382b3ae3f28c3c876abc88fff9cf0783fa0dd4c1aa52f2a32b72a0609->enter($__internal_1b4899b382b3ae3f28c3c876abc88fff9cf0783fa0dd4c1aa52f2a32b72a0609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "collection_item"));

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
            
            $__internal_1b4899b382b3ae3f28c3c876abc88fff9cf0783fa0dd4c1aa52f2a32b72a0609->leave($__internal_1b4899b382b3ae3f28c3c876abc88fff9cf0783fa0dd4c1aa52f2a32b72a0609_prof);

            
            $__internal_be99be7e2cfffaee4a8249bedc2b7032832ae3e150c9ba32c24e7e5dbed9c15b->leave($__internal_be99be7e2cfffaee4a8249bedc2b7032832ae3e150c9ba32c24e7e5dbed9c15b_prof);

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
", "@SyliusUi/Form/theme.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Form/theme.html.twig");
    }
}

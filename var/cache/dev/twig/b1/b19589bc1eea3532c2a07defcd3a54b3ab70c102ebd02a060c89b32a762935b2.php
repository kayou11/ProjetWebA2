<?php

/* SonataAdminBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_52058b36100fc11625d537850db054d0ac83daf1ce60c2077c454eee998fe8df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "SonataAdminBundle:Form:form_admin_fields.html.twig", 12);
        $this->blocks = array(
            'form_errors' => array($this, 'block_form_errors'),
            'sonata_help' => array($this, 'block_sonata_help'),
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'form_label' => array($this, 'block_form_label'),
            'checkbox_label' => array($this, 'block_checkbox_label'),
            'radio_label' => array($this, 'block_radio_label'),
            'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'form_row' => array($this, 'block_form_row'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'sonata_type_native_collection_widget_row' => array($this, 'block_sonata_type_native_collection_widget_row'),
            'sonata_type_native_collection_widget' => array($this, 'block_sonata_type_native_collection_widget'),
            'sonata_type_immutable_array_widget' => array($this, 'block_sonata_type_immutable_array_widget'),
            'sonata_type_immutable_array_widget_row' => array($this, 'block_sonata_type_immutable_array_widget_row'),
            'sonata_type_model_autocomplete_widget' => array($this, 'block_sonata_type_model_autocomplete_widget'),
            'sonata_type_choice_field_mask_widget' => array($this, 'block_sonata_type_choice_field_mask_widget'),
            'sonata_type_choice_multiple_sortable' => array($this, 'block_sonata_type_choice_multiple_sortable'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_725284d6f6cc65312c1408c8cdb6e8b396202b95afcddca6f4dbb8dbc77f90f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_725284d6f6cc65312c1408c8cdb6e8b396202b95afcddca6f4dbb8dbc77f90f3->enter($__internal_725284d6f6cc65312c1408c8cdb6e8b396202b95afcddca6f4dbb8dbc77f90f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Form:form_admin_fields.html.twig"));

        $__internal_59250523264e042286ad12d9ae2b523e28c481a0428743013fbf7137efb89395 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59250523264e042286ad12d9ae2b523e28c481a0428743013fbf7137efb89395->enter($__internal_59250523264e042286ad12d9ae2b523e28c481a0428743013fbf7137efb89395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Form:form_admin_fields.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_725284d6f6cc65312c1408c8cdb6e8b396202b95afcddca6f4dbb8dbc77f90f3->leave($__internal_725284d6f6cc65312c1408c8cdb6e8b396202b95afcddca6f4dbb8dbc77f90f3_prof);

        
        $__internal_59250523264e042286ad12d9ae2b523e28c481a0428743013fbf7137efb89395->leave($__internal_59250523264e042286ad12d9ae2b523e28c481a0428743013fbf7137efb89395_prof);

    }

    // line 14
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_0b857fcc03da87456d479af3fa2e03ffa88479c03d715fdcb54f656964953cb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b857fcc03da87456d479af3fa2e03ffa88479c03d715fdcb54f656964953cb6->enter($__internal_0b857fcc03da87456d479af3fa2e03ffa88479c03d715fdcb54f656964953cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_b9becf3bc4b46f2075db4e2a6c8a59b2da6a3333fb13e9b929b37cd82462145c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9becf3bc4b46f2075db4e2a6c8a59b2da6a3333fb13e9b929b37cd82462145c->enter($__internal_b9becf3bc4b46f2075db4e2a6c8a59b2da6a3333fb13e9b929b37cd82462145c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 15
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 15, $this->getSourceContext()); })())) > 0)) {
            // line 16
            echo "        ";
            if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->getSourceContext()); })()), "parent", array())) {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 17
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 18, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 19
                echo "                    <li><i class=\"fa fa-exclamation-circle\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "            </ul>
        ";
            // line 22
            if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), "parent", array())) {
                echo "</div>";
            }
            // line 23
            echo "    ";
        }
        
        $__internal_b9becf3bc4b46f2075db4e2a6c8a59b2da6a3333fb13e9b929b37cd82462145c->leave($__internal_b9becf3bc4b46f2075db4e2a6c8a59b2da6a3333fb13e9b929b37cd82462145c_prof);

        
        $__internal_0b857fcc03da87456d479af3fa2e03ffa88479c03d715fdcb54f656964953cb6->leave($__internal_0b857fcc03da87456d479af3fa2e03ffa88479c03d715fdcb54f656964953cb6_prof);

    }

    // line 26
    public function block_sonata_help($context, array $blocks = array())
    {
        $__internal_0d5dc756e80480f1a9e99cdcf668585358b6e85e602b80efaa47be376ecc14cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d5dc756e80480f1a9e99cdcf668585358b6e85e602b80efaa47be376ecc14cc->enter($__internal_0d5dc756e80480f1a9e99cdcf668585358b6e85e602b80efaa47be376ecc14cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_help"));

        $__internal_b4a7cf419ab1fdb9aac5749538d2723ea630799affe4f6b9c1287f62d0109d87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4a7cf419ab1fdb9aac5749538d2723ea630799affe4f6b9c1287f62d0109d87->enter($__internal_b4a7cf419ab1fdb9aac5749538d2723ea630799affe4f6b9c1287f62d0109d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_help"));

        // line 27
        ob_start();
        // line 28
        if ((array_key_exists("sonata_help", $context) && (isset($context["sonata_help"]) || array_key_exists("sonata_help", $context) ? $context["sonata_help"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_help" does not exist.', 28, $this->getSourceContext()); })()))) {
            // line 29
            echo "    <span class=\"help-block sonata-ba-field-widget-help\">";
            echo (isset($context["sonata_help"]) || array_key_exists("sonata_help", $context) ? $context["sonata_help"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_help" does not exist.', 29, $this->getSourceContext()); })());
            echo "</span>
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b4a7cf419ab1fdb9aac5749538d2723ea630799affe4f6b9c1287f62d0109d87->leave($__internal_b4a7cf419ab1fdb9aac5749538d2723ea630799affe4f6b9c1287f62d0109d87_prof);

        
        $__internal_0d5dc756e80480f1a9e99cdcf668585358b6e85e602b80efaa47be376ecc14cc->leave($__internal_0d5dc756e80480f1a9e99cdcf668585358b6e85e602b80efaa47be376ecc14cc_prof);

    }

    // line 34
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_97f6d21c93aa02bc754778c014fafb51e3bb10f1a141d1eea82f3044839fd543 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97f6d21c93aa02bc754778c014fafb51e3bb10f1a141d1eea82f3044839fd543->enter($__internal_97f6d21c93aa02bc754778c014fafb51e3bb10f1a141d1eea82f3044839fd543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        $__internal_8990fd55dc183d5c1f5f73b6d87a5b16c456a5859187fb1a5f09d0f40b76e310 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8990fd55dc183d5c1f5f73b6d87a5b16c456a5859187fb1a5f09d0f40b76e310->enter($__internal_8990fd55dc183d5c1f5f73b6d87a5b16c456a5859187fb1a5f09d0f40b76e310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 35
        $this->displayParentBlock("form_widget", $context, $blocks);
        echo "
    ";
        // line 36
        $this->displayBlock("sonata_help", $context, $blocks);
        
        $__internal_8990fd55dc183d5c1f5f73b6d87a5b16c456a5859187fb1a5f09d0f40b76e310->leave($__internal_8990fd55dc183d5c1f5f73b6d87a5b16c456a5859187fb1a5f09d0f40b76e310_prof);

        
        $__internal_97f6d21c93aa02bc754778c014fafb51e3bb10f1a141d1eea82f3044839fd543->leave($__internal_97f6d21c93aa02bc754778c014fafb51e3bb10f1a141d1eea82f3044839fd543_prof);

    }

    // line 39
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_3f82d4ec7909acb0ffe447e1177d8b6622b7ba9dcaba5fd3cbdd23c9d010bd9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f82d4ec7909acb0ffe447e1177d8b6622b7ba9dcaba5fd3cbdd23c9d010bd9d->enter($__internal_3f82d4ec7909acb0ffe447e1177d8b6622b7ba9dcaba5fd3cbdd23c9d010bd9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_60ce877868865e5f23bcfeabed761a1b3c1c89a9d218b1cd8689c8333912fe3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60ce877868865e5f23bcfeabed761a1b3c1c89a9d218b1cd8689c8333912fe3a->enter($__internal_60ce877868865e5f23bcfeabed761a1b3c1c89a9d218b1cd8689c8333912fe3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 40
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 40, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 41
        echo "    ";
        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 41, $this->getSourceContext()); })()) != "file")) {
            // line 42
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 42, $this->getSourceContext()); })()), array("class" => (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control")));
            // line 43
            echo "    ";
        }
        // line 44
        echo "    ";
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        echo "
";
        
        $__internal_60ce877868865e5f23bcfeabed761a1b3c1c89a9d218b1cd8689c8333912fe3a->leave($__internal_60ce877868865e5f23bcfeabed761a1b3c1c89a9d218b1cd8689c8333912fe3a_prof);

        
        $__internal_3f82d4ec7909acb0ffe447e1177d8b6622b7ba9dcaba5fd3cbdd23c9d010bd9d->leave($__internal_3f82d4ec7909acb0ffe447e1177d8b6622b7ba9dcaba5fd3cbdd23c9d010bd9d_prof);

    }

    // line 47
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_d42d03958bdd1fbbd86b48ae8e14db21e157264ba4d2a2a2813a312489d32097 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d42d03958bdd1fbbd86b48ae8e14db21e157264ba4d2a2a2813a312489d32097->enter($__internal_d42d03958bdd1fbbd86b48ae8e14db21e157264ba4d2a2a2813a312489d32097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_51d89fd85e39019cb05b041177c0ebe19a8d9f7f63cdb119dceeeec423bb7326 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51d89fd85e39019cb05b041177c0ebe19a8d9f7f63cdb119dceeeec423bb7326->enter($__internal_51d89fd85e39019cb05b041177c0ebe19a8d9f7f63cdb119dceeeec423bb7326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 48
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 48, $this->getSourceContext()); })()), array("class" => (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control")));
        // line 49
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        echo "
";
        
        $__internal_51d89fd85e39019cb05b041177c0ebe19a8d9f7f63cdb119dceeeec423bb7326->leave($__internal_51d89fd85e39019cb05b041177c0ebe19a8d9f7f63cdb119dceeeec423bb7326_prof);

        
        $__internal_d42d03958bdd1fbbd86b48ae8e14db21e157264ba4d2a2a2813a312489d32097->leave($__internal_d42d03958bdd1fbbd86b48ae8e14db21e157264ba4d2a2a2813a312489d32097_prof);

    }

    // line 52
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_b4e2419aad1cae58e774eb3960b7b80b77002ac4846324f7f1a114db8033af3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4e2419aad1cae58e774eb3960b7b80b77002ac4846324f7f1a114db8033af3c->enter($__internal_b4e2419aad1cae58e774eb3960b7b80b77002ac4846324f7f1a114db8033af3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_1167a8ba872a41dc7ec4c1c669e54c24d293e65a0d8a0e5be9590f1712a2ce29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1167a8ba872a41dc7ec4c1c669e54c24d293e65a0d8a0e5be9590f1712a2ce29->enter($__internal_1167a8ba872a41dc7ec4c1c669e54c24d293e65a0d8a0e5be9590f1712a2ce29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 53
        if (((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 53, $this->getSourceContext()); })()) == "{{ widget }}")) {
            // line 54
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 56
            echo "        ";
            $context["currencySymbol"] = twig_trim_filter(twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 56, $this->getSourceContext()); })()), array("{{ widget }}" => "")));
            // line 57
            echo "        ";
            if (preg_match("/^{{ widget }}/", (isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 57, $this->getSourceContext()); })()))) {
                // line 58
                echo "            <div class=\"input-group\">";
                // line 59
                $this->displayBlock("form_widget_simple", $context, $blocks);
                // line 60
                echo "<span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, (isset($context["currencySymbol"]) || array_key_exists("currencySymbol", $context) ? $context["currencySymbol"] : (function () { throw new Twig_Error_Runtime('Variable "currencySymbol" does not exist.', 60, $this->getSourceContext()); })()), "html", null, true);
                echo "</span>
            </div>
        ";
            } elseif (preg_match("/{{ widget }}\$/",             // line 62
(isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 62, $this->getSourceContext()); })()))) {
                // line 63
                echo "            <div class=\"input-group\">
                <span class=\"input-group-addon\">";
                // line 64
                echo twig_escape_filter($this->env, (isset($context["currencySymbol"]) || array_key_exists("currencySymbol", $context) ? $context["currencySymbol"] : (function () { throw new Twig_Error_Runtime('Variable "currencySymbol" does not exist.', 64, $this->getSourceContext()); })()), "html", null, true);
                echo "</span>";
                // line 65
                $this->displayBlock("form_widget_simple", $context, $blocks);
                // line 66
                echo "</div>
        ";
            }
            // line 68
            echo "    ";
        }
        
        $__internal_1167a8ba872a41dc7ec4c1c669e54c24d293e65a0d8a0e5be9590f1712a2ce29->leave($__internal_1167a8ba872a41dc7ec4c1c669e54c24d293e65a0d8a0e5be9590f1712a2ce29_prof);

        
        $__internal_b4e2419aad1cae58e774eb3960b7b80b77002ac4846324f7f1a114db8033af3c->leave($__internal_b4e2419aad1cae58e774eb3960b7b80b77002ac4846324f7f1a114db8033af3c_prof);

    }

    // line 71
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_d990759cbe8545505ea6c503ab73095a91dcfe19cb7b955416deda52239cd4ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d990759cbe8545505ea6c503ab73095a91dcfe19cb7b955416deda52239cd4ee->enter($__internal_d990759cbe8545505ea6c503ab73095a91dcfe19cb7b955416deda52239cd4ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_e498df5a0e3c1a4732e000d49029a7c02fd94d25d3de1af08a6c4fa051f01dfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e498df5a0e3c1a4732e000d49029a7c02fd94d25d3de1af08a6c4fa051f01dfa->enter($__internal_e498df5a0e3c1a4732e000d49029a7c02fd94d25d3de1af08a6c4fa051f01dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 72
        echo "    ";
        ob_start();
        // line 73
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 73, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 74
        echo "        <div class=\"input-group\">
            ";
        // line 75
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
            <span class=\"input-group-addon\">%</span>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_e498df5a0e3c1a4732e000d49029a7c02fd94d25d3de1af08a6c4fa051f01dfa->leave($__internal_e498df5a0e3c1a4732e000d49029a7c02fd94d25d3de1af08a6c4fa051f01dfa_prof);

        
        $__internal_d990759cbe8545505ea6c503ab73095a91dcfe19cb7b955416deda52239cd4ee->leave($__internal_d990759cbe8545505ea6c503ab73095a91dcfe19cb7b955416deda52239cd4ee_prof);

    }

    // line 81
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_fdcaf0f3107dc8bb72fe582f1cede0f0948bd757b2488403e6dbde523e66d753 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdcaf0f3107dc8bb72fe582f1cede0f0948bd757b2488403e6dbde523e66d753->enter($__internal_fdcaf0f3107dc8bb72fe582f1cede0f0948bd757b2488403e6dbde523e66d753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_0cb47a6e5b2c4b3b3ba4f3bfa28e52c5916b30bdb14ef34ddb96400ca9c47875 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cb47a6e5b2c4b3b3ba4f3bfa28e52c5916b30bdb14ef34ddb96400ca9c47875->enter($__internal_0cb47a6e5b2c4b3b3ba4f3bfa28e52c5916b30bdb14ef34ddb96400ca9c47875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 82
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 82, $this->getSourceContext()); })()), "")) : (""));
        // line 83
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 83, $this->getSourceContext()); })()))) {
            // line 84
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 84, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 86
            echo "<div class=\"checkbox\">";
            // line 87
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 87, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 88
            echo "</div>";
        }
        
        $__internal_0cb47a6e5b2c4b3b3ba4f3bfa28e52c5916b30bdb14ef34ddb96400ca9c47875->leave($__internal_0cb47a6e5b2c4b3b3ba4f3bfa28e52c5916b30bdb14ef34ddb96400ca9c47875_prof);

        
        $__internal_fdcaf0f3107dc8bb72fe582f1cede0f0948bd757b2488403e6dbde523e66d753->leave($__internal_fdcaf0f3107dc8bb72fe582f1cede0f0948bd757b2488403e6dbde523e66d753_prof);

    }

    // line 92
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_78cf3d415bbc0ca139e845f223e2d3d00e5e938789b83ea011e10d0b778ec614 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78cf3d415bbc0ca139e845f223e2d3d00e5e938789b83ea011e10d0b778ec614->enter($__internal_78cf3d415bbc0ca139e845f223e2d3d00e5e938789b83ea011e10d0b778ec614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_35ebfbca5d70f918129af6869b2c3c7bf4c370e0c92bca13089a996f3ab9e599 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35ebfbca5d70f918129af6869b2c3c7bf4c370e0c92bca13089a996f3ab9e599->enter($__internal_35ebfbca5d70f918129af6869b2c3c7bf4c370e0c92bca13089a996f3ab9e599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 93
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 93, $this->getSourceContext()); })()), "")) : (""));
        // line 94
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 94, $this->getSourceContext()); })()))) {
            // line 95
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 95, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 97
            echo "<div class=\"radio\">";
            // line 98
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 98, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 99
            echo "</div>";
        }
        
        $__internal_35ebfbca5d70f918129af6869b2c3c7bf4c370e0c92bca13089a996f3ab9e599->leave($__internal_35ebfbca5d70f918129af6869b2c3c7bf4c370e0c92bca13089a996f3ab9e599_prof);

        
        $__internal_78cf3d415bbc0ca139e845f223e2d3d00e5e938789b83ea011e10d0b778ec614->leave($__internal_78cf3d415bbc0ca139e845f223e2d3d00e5e938789b83ea011e10d0b778ec614_prof);

    }

    // line 104
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_4743f140d701d620dcc8fa3f280efd4f7d27f2d76b1564085729df6f85cd2726 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4743f140d701d620dcc8fa3f280efd4f7d27f2d76b1564085729df6f85cd2726->enter($__internal_4743f140d701d620dcc8fa3f280efd4f7d27f2d76b1564085729df6f85cd2726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_3e6c2d149ea2df9d8df2688cab4427c42b600618c7cbc978f194b312591565b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e6c2d149ea2df9d8df2688cab4427c42b600618c7cbc978f194b312591565b6->enter($__internal_3e6c2d149ea2df9d8df2688cab4427c42b600618c7cbc978f194b312591565b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 105
        ob_start();
        // line 106
        echo "    ";
        if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 106, $this->getSourceContext()); })()) === false) && (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 106, $this->getSourceContext()); })()), "options", array()), "form_type", array(), "array") == "horizontal"))) {
            // line 107
            echo "        ";
            $context["label_class"] = "col-sm-3";
            // line 108
            echo "    ";
        }
        // line 109
        echo "
    ";
        // line 110
        $context["label_class"] = (((array_key_exists("label_class", $context)) ? (_twig_default_filter((isset($context["label_class"]) || array_key_exists("label_class", $context) ? $context["label_class"] : (function () { throw new Twig_Error_Runtime('Variable "label_class" does not exist.', 110, $this->getSourceContext()); })()), "")) : ("")) . " control-label");
        // line 111
        echo "
    ";
        // line 112
        if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 112, $this->getSourceContext()); })()) === false)) {
            // line 113
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 113, $this->getSourceContext()); })()), array("class" => (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . (isset($context["label_class"]) || array_key_exists("label_class", $context) ? $context["label_class"] : (function () { throw new Twig_Error_Runtime('Variable "label_class" does not exist.', 113, $this->getSourceContext()); })()))));
            // line 114
            echo "
        ";
            // line 115
            if ( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 115, $this->getSourceContext()); })())) {
                // line 116
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 116, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 116, $this->getSourceContext()); })())));
                // line 117
                echo "        ";
            }
            // line 118
            echo "        ";
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 118, $this->getSourceContext()); })())) {
                // line 119
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 119, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 120
                echo "        ";
            }
            // line 121
            echo "
        ";
            // line 122
            if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 122, $this->getSourceContext()); })()))) {
                // line 123
                if ((array_key_exists("label_format", $context) &&  !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 123, $this->getSourceContext()); })())))) {
                    // line 124
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 124, $this->getSourceContext()); })()), array("%name%" =>                     // line 125
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 125, $this->getSourceContext()); })()), "%id%" =>                     // line 126
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 126, $this->getSourceContext()); })())));
                } else {
                    // line 129
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 129, $this->getSourceContext()); })()));
                }
            }
            // line 132
            echo "
        <label";
            // line 133
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 133, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
            ";
            // line 134
            if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 134, $this->getSourceContext()); })()), "admin", array())) {
                // line 135
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 135, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 135, $this->getSourceContext()); })())), "html", null, true);
            } else {
                // line 137
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 137, $this->getSourceContext()); })()), array(), ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 137, $this->getSourceContext()); })()), "field_description", array()), "translationDomain", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 137, $this->getSourceContext()); })()), "field_description", array()), "translationDomain", array())) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 137, $this->getSourceContext()); })()), "translationDomain", array())))), "html", null, true);
                echo "
            ";
            }
            // line 139
            echo "        </label>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_3e6c2d149ea2df9d8df2688cab4427c42b600618c7cbc978f194b312591565b6->leave($__internal_3e6c2d149ea2df9d8df2688cab4427c42b600618c7cbc978f194b312591565b6_prof);

        
        $__internal_4743f140d701d620dcc8fa3f280efd4f7d27f2d76b1564085729df6f85cd2726->leave($__internal_4743f140d701d620dcc8fa3f280efd4f7d27f2d76b1564085729df6f85cd2726_prof);

    }

    // line 144
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_9043ecd79794b07cb543b22d72ec7979eaef295d2cf2192fa20da786d512008c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9043ecd79794b07cb543b22d72ec7979eaef295d2cf2192fa20da786d512008c->enter($__internal_9043ecd79794b07cb543b22d72ec7979eaef295d2cf2192fa20da786d512008c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_9b7c7c50e83d196f24794e57191c4ccaf5e91edd1c23ce1264ccc4743fa1f422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b7c7c50e83d196f24794e57191c4ccaf5e91edd1c23ce1264ccc4743fa1f422->enter($__internal_9b7c7c50e83d196f24794e57191c4ccaf5e91edd1c23ce1264ccc4743fa1f422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 145
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_9b7c7c50e83d196f24794e57191c4ccaf5e91edd1c23ce1264ccc4743fa1f422->leave($__internal_9b7c7c50e83d196f24794e57191c4ccaf5e91edd1c23ce1264ccc4743fa1f422_prof);

        
        $__internal_9043ecd79794b07cb543b22d72ec7979eaef295d2cf2192fa20da786d512008c->leave($__internal_9043ecd79794b07cb543b22d72ec7979eaef295d2cf2192fa20da786d512008c_prof);

    }

    // line 148
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_272687e88de12e4454e7927ad4d159015633eefe37af14a761ca7aeb9afc3ba7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_272687e88de12e4454e7927ad4d159015633eefe37af14a761ca7aeb9afc3ba7->enter($__internal_272687e88de12e4454e7927ad4d159015633eefe37af14a761ca7aeb9afc3ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_996c458875b0227e8a651f577274142c9939d5fa075e84aef62a194a83fccdd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_996c458875b0227e8a651f577274142c9939d5fa075e84aef62a194a83fccdd5->enter($__internal_996c458875b0227e8a651f577274142c9939d5fa075e84aef62a194a83fccdd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 149
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_996c458875b0227e8a651f577274142c9939d5fa075e84aef62a194a83fccdd5->leave($__internal_996c458875b0227e8a651f577274142c9939d5fa075e84aef62a194a83fccdd5_prof);

        
        $__internal_272687e88de12e4454e7927ad4d159015633eefe37af14a761ca7aeb9afc3ba7->leave($__internal_272687e88de12e4454e7927ad4d159015633eefe37af14a761ca7aeb9afc3ba7_prof);

    }

    // line 152
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_d3e715fa018194ffaee9a2852685504bdfc9e2778a9d2f9aad2e83d0b90cfe44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3e715fa018194ffaee9a2852685504bdfc9e2778a9d2f9aad2e83d0b90cfe44->enter($__internal_d3e715fa018194ffaee9a2852685504bdfc9e2778a9d2f9aad2e83d0b90cfe44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_ab6e721dde6c37c5e537e1a8821f6abef1cec240015aeee72aae3961fb7d5180 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab6e721dde6c37c5e537e1a8821f6abef1cec240015aeee72aae3961fb7d5180->enter($__internal_ab6e721dde6c37c5e537e1a8821f6abef1cec240015aeee72aae3961fb7d5180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 153
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 153, $this->getSourceContext()); })()), "admin", array())) {
            // line 154
            echo "        ";
            $context["translation_domain"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 154, $this->getSourceContext()); })()), "field_description", array()), "translationDomain", array());
            // line 155
            echo "    ";
        }
        // line 156
        echo "    ";
        // line 157
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 158
            echo "        ";
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 158, $this->getSourceContext()); })())) {
                // line 159
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 159, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 160
                echo "        ";
            }
            // line 161
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 162
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 162, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 162, $this->getSourceContext()); })())))));
                // line 163
                echo "        ";
            }
            // line 164
            echo "        ";
            if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 164, $this->getSourceContext()); })()) === false) && twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 164, $this->getSourceContext()); })())))) {
                // line 165
                echo "            ";
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 165, $this->getSourceContext()); })()));
                // line 166
                echo "        ";
            }
            // line 167
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 167, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 168
            echo (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 168, $this->getSourceContext()); })());
            // line 169
            if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 169, $this->getSourceContext()); })()) === false)) {
                // line 170
                echo "<span class=\"control-label__text\">";
                // line 171
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 171, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 171, $this->getSourceContext()); })())), "html", null, true);
                // line 172
                echo "</span>";
            }
            // line 174
            echo "</label>
    ";
        }
        
        $__internal_ab6e721dde6c37c5e537e1a8821f6abef1cec240015aeee72aae3961fb7d5180->leave($__internal_ab6e721dde6c37c5e537e1a8821f6abef1cec240015aeee72aae3961fb7d5180_prof);

        
        $__internal_d3e715fa018194ffaee9a2852685504bdfc9e2778a9d2f9aad2e83d0b90cfe44->leave($__internal_d3e715fa018194ffaee9a2852685504bdfc9e2778a9d2f9aad2e83d0b90cfe44_prof);

    }

    // line 178
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_82370ba3f4926eadeec908bca1447f7473ea5c4ba895d39f2ab9f5d82c293c88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82370ba3f4926eadeec908bca1447f7473ea5c4ba895d39f2ab9f5d82c293c88->enter($__internal_82370ba3f4926eadeec908bca1447f7473ea5c4ba895d39f2ab9f5d82c293c88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_2c0ddd33fa42156ef750bd2cc24162227a749e6de52a8d2ef7f752463e2c935d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c0ddd33fa42156ef750bd2cc24162227a749e6de52a8d2ef7f752463e2c935d->enter($__internal_2c0ddd33fa42156ef750bd2cc24162227a749e6de52a8d2ef7f752463e2c935d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 179
        ob_start();
        // line 180
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 180, $this->getSourceContext()); })()), array("class" => (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " list-unstyled")));
        // line 181
        echo "    <ul ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
    ";
        // line 182
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 182, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 183
            echo "        <li>
            ";
            // line 184
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
            echo " ";
            // line 185
            echo "        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
        echo "    </ul>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_2c0ddd33fa42156ef750bd2cc24162227a749e6de52a8d2ef7f752463e2c935d->leave($__internal_2c0ddd33fa42156ef750bd2cc24162227a749e6de52a8d2ef7f752463e2c935d_prof);

        
        $__internal_82370ba3f4926eadeec908bca1447f7473ea5c4ba895d39f2ab9f5d82c293c88->leave($__internal_82370ba3f4926eadeec908bca1447f7473ea5c4ba895d39f2ab9f5d82c293c88_prof);

    }

    // line 191
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_8337031042cefc8d85ec593ddd19a518d979c4b8218dd4b77a32d26790078ca5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8337031042cefc8d85ec593ddd19a518d979c4b8218dd4b77a32d26790078ca5->enter($__internal_8337031042cefc8d85ec593ddd19a518d979c4b8218dd4b77a32d26790078ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_e30d0d67b216fa5dd28fd1fa6c19da8b51eb1d71855491ab9fbb992eb5980ce9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e30d0d67b216fa5dd28fd1fa6c19da8b51eb1d71855491ab9fbb992eb5980ce9->enter($__internal_e30d0d67b216fa5dd28fd1fa6c19da8b51eb1d71855491ab9fbb992eb5980ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 192
        ob_start();
        // line 193
        echo "    ";
        if ((((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 193, $this->getSourceContext()); })()) && array_key_exists("placeholder", $context)) && (null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 193, $this->getSourceContext()); })())))) {
            // line 194
            echo "        ";
            $context["required"] = false;
            // line 195
            echo "    ";
        } elseif (((((((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 195, $this->getSourceContext()); })()) && array_key_exists("empty_value", $context)) && array_key_exists("empty_value_in_choices", $context)) && (null === (isset($context["empty_value"]) || array_key_exists("empty_value", $context) ? $context["empty_value"] : (function () { throw new Twig_Error_Runtime('Variable "empty_value" does not exist.', 195, $this->getSourceContext()); })()))) &&  !(isset($context["empty_value_in_choices"]) || array_key_exists("empty_value_in_choices", $context) ? $context["empty_value_in_choices"] : (function () { throw new Twig_Error_Runtime('Variable "empty_value_in_choices" does not exist.', 195, $this->getSourceContext()); })())) &&  !(isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 195, $this->getSourceContext()); })()))) {
            // line 196
            echo "        ";
            $context["required"] = false;
            // line 197
            echo "    ";
        }
        // line 198
        echo "
    ";
        // line 199
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 199, $this->getSourceContext()); })()), array("class" => (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control")));
        // line 200
        echo "    ";
        if (((array_key_exists("sortable", $context) && (isset($context["sortable"]) || array_key_exists("sortable", $context) ? $context["sortable"] : (function () { throw new Twig_Error_Runtime('Variable "sortable" does not exist.', 200, $this->getSourceContext()); })())) && (isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 200, $this->getSourceContext()); })()))) {
            // line 201
            echo "        ";
            $this->displayBlock("sonata_type_choice_multiple_sortable", $context, $blocks);
            echo "
    ";
        } else {
            // line 203
            echo "        <select ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 203, $this->getSourceContext()); })())) {
                echo " multiple=\"multiple\"";
            }
            echo " >
            ";
            // line 204
            if ((array_key_exists("empty_value", $context) &&  !(null === (isset($context["empty_value"]) || array_key_exists("empty_value", $context) ? $context["empty_value"] : (function () { throw new Twig_Error_Runtime('Variable "empty_value" does not exist.', 204, $this->getSourceContext()); })())))) {
                // line 205
                echo "                <option value=\"\"";
                if (((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 205, $this->getSourceContext()); })()) && twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 205, $this->getSourceContext()); })())))) {
                    echo " selected=\"selected\"";
                }
                echo ">
                    ";
                // line 206
                if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 206, $this->getSourceContext()); })()), "admin", array())) {
                    // line 207
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["empty_value"]) || array_key_exists("empty_value", $context) ? $context["empty_value"] : (function () { throw new Twig_Error_Runtime('Variable "empty_value" does not exist.', 207, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 207, $this->getSourceContext()); })())), "html", null, true);
                } else {
                    // line 209
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["empty_value"]) || array_key_exists("empty_value", $context) ? $context["empty_value"] : (function () { throw new Twig_Error_Runtime('Variable "empty_value" does not exist.', 209, $this->getSourceContext()); })()), array(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 209, $this->getSourceContext()); })()), "field_description", array()), "translationDomain", array())), "html", null, true);
                }
                // line 211
                echo "                </option>
            ";
            } elseif ((            // line 212
array_key_exists("placeholder", $context) &&  !(null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 212, $this->getSourceContext()); })())))) {
                // line 213
                echo "                <option value=\"\"";
                if (((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 213, $this->getSourceContext()); })()) && twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 213, $this->getSourceContext()); })())))) {
                    echo " selected=\"selected\"";
                }
                echo ">
                    ";
                // line 214
                if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 214, $this->getSourceContext()); })()), "admin", array())) {
                    // line 215
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 215, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 215, $this->getSourceContext()); })())), "html", null, true);
                } else {
                    // line 217
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 217, $this->getSourceContext()); })()), array(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 217, $this->getSourceContext()); })()), "field_description", array()), "translationDomain", array())), "html", null, true);
                }
                // line 219
                echo "                </option>
            ";
            }
            // line 221
            echo "            ";
            if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 221, $this->getSourceContext()); })())) > 0)) {
                // line 222
                echo "                ";
                $context["options"] = (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 222, $this->getSourceContext()); })());
                // line 223
                echo "                ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
                ";
                // line 224
                if ((twig_length_filter($this->env, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 224, $this->getSourceContext()); })())) > 0)) {
                    // line 225
                    echo "                    <option disabled=\"disabled\">";
                    echo twig_escape_filter($this->env, (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 225, $this->getSourceContext()); })()), "html", null, true);
                    echo "</option>
                ";
                }
                // line 227
                echo "            ";
            }
            // line 228
            echo "            ";
            $context["options"] = (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 228, $this->getSourceContext()); })());
            // line 229
            echo "            ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
        </select>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_e30d0d67b216fa5dd28fd1fa6c19da8b51eb1d71855491ab9fbb992eb5980ce9->leave($__internal_e30d0d67b216fa5dd28fd1fa6c19da8b51eb1d71855491ab9fbb992eb5980ce9_prof);

        
        $__internal_8337031042cefc8d85ec593ddd19a518d979c4b8218dd4b77a32d26790078ca5->leave($__internal_8337031042cefc8d85ec593ddd19a518d979c4b8218dd4b77a32d26790078ca5_prof);

    }

    // line 235
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_b99be17e4fc9c8de604738b7d8cfae65cc2aefa47e2202eef35132e91c133399 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b99be17e4fc9c8de604738b7d8cfae65cc2aefa47e2202eef35132e91c133399->enter($__internal_b99be17e4fc9c8de604738b7d8cfae65cc2aefa47e2202eef35132e91c133399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_fad4f7ea4d2a0147e9b0082b208f06f69622a9aeb52ef29a59e13fc353d24b23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fad4f7ea4d2a0147e9b0082b208f06f69622a9aeb52ef29a59e13fc353d24b23->enter($__internal_fad4f7ea4d2a0147e9b0082b208f06f69622a9aeb52ef29a59e13fc353d24b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 236
        ob_start();
        // line 237
        echo "    ";
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 237, $this->getSourceContext()); })()) == "single_text")) {
            // line 238
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 240
            echo "        ";
            if (( !array_key_exists("row", $context) || ((isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new Twig_Error_Runtime('Variable "row" does not exist.', 240, $this->getSourceContext()); })()) == true))) {
                // line 241
                echo "            ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 241, $this->getSourceContext()); })()), array("class" => (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " row")));
                // line 242
                echo "        ";
            }
            // line 243
            echo "        ";
            $context["input_wrapper_class"] = ((array_key_exists("input_wrapper_class", $context)) ? (_twig_default_filter((isset($context["input_wrapper_class"]) || array_key_exists("input_wrapper_class", $context) ? $context["input_wrapper_class"] : (function () { throw new Twig_Error_Runtime('Variable "input_wrapper_class" does not exist.', 243, $this->getSourceContext()); })()), "col-sm-4")) : ("col-sm-4"));
            // line 244
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 245
            echo twig_replace_filter((isset($context["date_pattern"]) || array_key_exists("date_pattern", $context) ? $context["date_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "date_pattern" does not exist.', 245, $this->getSourceContext()); })()), array("{{ year }}" => (((("<div class=\"" .             // line 246
(isset($context["input_wrapper_class"]) || array_key_exists("input_wrapper_class", $context) ? $context["input_wrapper_class"] : (function () { throw new Twig_Error_Runtime('Variable "input_wrapper_class" does not exist.', 246, $this->getSourceContext()); })())) . "\">") . $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 246, $this->getSourceContext()); })()), "year", array()), 'widget')) . "</div>"), "{{ month }}" => (((("<div class=\"" .             // line 247
(isset($context["input_wrapper_class"]) || array_key_exists("input_wrapper_class", $context) ? $context["input_wrapper_class"] : (function () { throw new Twig_Error_Runtime('Variable "input_wrapper_class" does not exist.', 247, $this->getSourceContext()); })())) . "\">") . $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 247, $this->getSourceContext()); })()), "month", array()), 'widget')) . "</div>"), "{{ day }}" => (((("<div class=\"" .             // line 248
(isset($context["input_wrapper_class"]) || array_key_exists("input_wrapper_class", $context) ? $context["input_wrapper_class"] : (function () { throw new Twig_Error_Runtime('Variable "input_wrapper_class" does not exist.', 248, $this->getSourceContext()); })())) . "\">") . $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 248, $this->getSourceContext()); })()), "day", array()), 'widget')) . "</div>")));
            // line 249
            echo "
        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_fad4f7ea4d2a0147e9b0082b208f06f69622a9aeb52ef29a59e13fc353d24b23->leave($__internal_fad4f7ea4d2a0147e9b0082b208f06f69622a9aeb52ef29a59e13fc353d24b23_prof);

        
        $__internal_b99be17e4fc9c8de604738b7d8cfae65cc2aefa47e2202eef35132e91c133399->leave($__internal_b99be17e4fc9c8de604738b7d8cfae65cc2aefa47e2202eef35132e91c133399_prof);

    }

    // line 255
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_d89e8a8132ec3d6bd203b7b80ab034c643f1052069764774c103d2ea344a245d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d89e8a8132ec3d6bd203b7b80ab034c643f1052069764774c103d2ea344a245d->enter($__internal_d89e8a8132ec3d6bd203b7b80ab034c643f1052069764774c103d2ea344a245d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_ad2ccf607250b9feefcb0290456d0a7b85a419c8fb71b5c55aa47a1527440019 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad2ccf607250b9feefcb0290456d0a7b85a419c8fb71b5c55aa47a1527440019->enter($__internal_ad2ccf607250b9feefcb0290456d0a7b85a419c8fb71b5c55aa47a1527440019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 256
        ob_start();
        // line 257
        echo "    ";
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 257, $this->getSourceContext()); })()) == "single_text")) {
            // line 258
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 260
            echo "        ";
            if (( !array_key_exists("row", $context) || ((isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new Twig_Error_Runtime('Variable "row" does not exist.', 260, $this->getSourceContext()); })()) == true))) {
                // line 261
                echo "            ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 261, $this->getSourceContext()); })()), array("class" => (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " row")));
                // line 262
                echo "        ";
            }
            // line 263
            echo "        ";
            $context["input_wrapper_class"] = ((array_key_exists("input_wrapper_class", $context)) ? (_twig_default_filter((isset($context["input_wrapper_class"]) || array_key_exists("input_wrapper_class", $context) ? $context["input_wrapper_class"] : (function () { throw new Twig_Error_Runtime('Variable "input_wrapper_class" does not exist.', 263, $this->getSourceContext()); })()), "col-sm-6")) : ("col-sm-6"));
            // line 264
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"";
            // line 265
            echo twig_escape_filter($this->env, (isset($context["input_wrapper_class"]) || array_key_exists("input_wrapper_class", $context) ? $context["input_wrapper_class"] : (function () { throw new Twig_Error_Runtime('Variable "input_wrapper_class" does not exist.', 265, $this->getSourceContext()); })()), "html", null, true);
            echo "\">
                ";
            // line 266
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 266, $this->getSourceContext()); })()), "hour", array()), 'widget');
            echo "
            </div>
            ";
            // line 268
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 268, $this->getSourceContext()); })())) {
                // line 269
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, (isset($context["input_wrapper_class"]) || array_key_exists("input_wrapper_class", $context) ? $context["input_wrapper_class"] : (function () { throw new Twig_Error_Runtime('Variable "input_wrapper_class" does not exist.', 269, $this->getSourceContext()); })()), "html", null, true);
                echo "\">
                    ";
                // line 270
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 270, $this->getSourceContext()); })()), "minute", array()), 'widget');
                echo "
                </div>
            ";
            }
            // line 273
            echo "            ";
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 273, $this->getSourceContext()); })())) {
                // line 274
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, (isset($context["input_wrapper_class"]) || array_key_exists("input_wrapper_class", $context) ? $context["input_wrapper_class"] : (function () { throw new Twig_Error_Runtime('Variable "input_wrapper_class" does not exist.', 274, $this->getSourceContext()); })()), "html", null, true);
                echo "\">
                    ";
                // line 275
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 275, $this->getSourceContext()); })()), "second", array()), 'widget');
                echo "
                </div>
            ";
            }
            // line 278
            echo "        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ad2ccf607250b9feefcb0290456d0a7b85a419c8fb71b5c55aa47a1527440019->leave($__internal_ad2ccf607250b9feefcb0290456d0a7b85a419c8fb71b5c55aa47a1527440019_prof);

        
        $__internal_d89e8a8132ec3d6bd203b7b80ab034c643f1052069764774c103d2ea344a245d->leave($__internal_d89e8a8132ec3d6bd203b7b80ab034c643f1052069764774c103d2ea344a245d_prof);

    }

    // line 283
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_863e75acaa54a54d4d54f63d6e2ba0b4fb65f886f61642519de8fab917c79541 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_863e75acaa54a54d4d54f63d6e2ba0b4fb65f886f61642519de8fab917c79541->enter($__internal_863e75acaa54a54d4d54f63d6e2ba0b4fb65f886f61642519de8fab917c79541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_97ebf92f01b2a96d769b866de0e3d0f935e43738f9b12fa0b30c404111703a59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97ebf92f01b2a96d769b866de0e3d0f935e43738f9b12fa0b30c404111703a59->enter($__internal_97ebf92f01b2a96d769b866de0e3d0f935e43738f9b12fa0b30c404111703a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 284
        ob_start();
        // line 285
        echo "    ";
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 285, $this->getSourceContext()); })()) == "single_text")) {
            // line 286
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 288
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 288, $this->getSourceContext()); })()), array("class" => (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " row")));
            // line 289
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 290
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 290, $this->getSourceContext()); })()), "date", array()), 'errors');
            echo "
            ";
            // line 291
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 291, $this->getSourceContext()); })()), "time", array()), 'errors');
            echo "

            ";
            // line 293
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 293, $this->getSourceContext()); })()), "date", array()), "vars", array()), "widget", array()) == "single_text")) {
                // line 294
                echo "                <div class=\"col-sm-2\">
                    ";
                // line 295
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 295, $this->getSourceContext()); })()), "date", array()), 'widget');
                echo "
                </div>
            ";
            } else {
                // line 298
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 298, $this->getSourceContext()); })()), "date", array()), 'widget', array("row" => false, "input_wrapper_class" => "col-sm-2"));
                echo "
            ";
            }
            // line 300
            echo "
            ";
            // line 301
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 301, $this->getSourceContext()); })()), "time", array()), "vars", array()), "widget", array()) == "single_text")) {
                // line 302
                echo "                <div class=\"col-sm-2\">
                    ";
                // line 303
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 303, $this->getSourceContext()); })()), "time", array()), 'widget');
                echo "
                </div>
            ";
            } else {
                // line 306
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 306, $this->getSourceContext()); })()), "time", array()), 'widget', array("row" => false, "input_wrapper_class" => "col-sm-2"));
                echo "
            ";
            }
            // line 308
            echo "        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_97ebf92f01b2a96d769b866de0e3d0f935e43738f9b12fa0b30c404111703a59->leave($__internal_97ebf92f01b2a96d769b866de0e3d0f935e43738f9b12fa0b30c404111703a59_prof);

        
        $__internal_863e75acaa54a54d4d54f63d6e2ba0b4fb65f886f61642519de8fab917c79541->leave($__internal_863e75acaa54a54d4d54f63d6e2ba0b4fb65f886f61642519de8fab917c79541_prof);

    }

    // line 313
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_b34d379fcd7e2d652d68aff570c41bb9c88fd79c72eb22b2b62d7513a44b0fe8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b34d379fcd7e2d652d68aff570c41bb9c88fd79c72eb22b2b62d7513a44b0fe8->enter($__internal_b34d379fcd7e2d652d68aff570c41bb9c88fd79c72eb22b2b62d7513a44b0fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_ec10a6d9521f8e5a2f8103ff76bbba7e3786e99b3a6cc1bc26027c6e87819c3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec10a6d9521f8e5a2f8103ff76bbba7e3786e99b3a6cc1bc26027c6e87819c3b->enter($__internal_ec10a6d9521f8e5a2f8103ff76bbba7e3786e99b3a6cc1bc26027c6e87819c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 314
        echo "    ";
        $context["show_label"] = ((array_key_exists("show_label", $context)) ? (_twig_default_filter((isset($context["show_label"]) || array_key_exists("show_label", $context) ? $context["show_label"] : (function () { throw new Twig_Error_Runtime('Variable "show_label" does not exist.', 314, $this->getSourceContext()); })()), true)) : (true));
        // line 315
        echo "    <div class=\"form-group";
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 315, $this->getSourceContext()); })())) > 0)) {
            echo " has-error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 315, $this->getSourceContext()); })()), "html", null, true);
        echo "\">
        ";
        // line 316
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "field_description", array(), "any", false, true), "options", array(), "any", true, true)) {
            // line 317
            echo "            ";
            $context["label"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "name", array()), (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 317, $this->getSourceContext()); })()))) : ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 317, $this->getSourceContext()); })())));
            // line 318
            echo "        ";
        }
        // line 319
        echo "
        ";
        // line 320
        $context["div_class"] = "sonata-ba-field";
        // line 321
        echo "
        ";
        // line 322
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 322, $this->getSourceContext()); })()) === false)) {
            // line 323
            echo "            ";
            $context["div_class"] = ((isset($context["div_class"]) || array_key_exists("div_class", $context) ? $context["div_class"] : (function () { throw new Twig_Error_Runtime('Variable "div_class" does not exist.', 323, $this->getSourceContext()); })()) . " sonata-collection-row-without-label");
            // line 324
            echo "        ";
        }
        // line 325
        echo "
        ";
        // line 326
        if ((array_key_exists("sonata_admin", $context) && (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 326, $this->getSourceContext()); })()), "options", array()), "form_type", array(), "array") == "horizontal"))) {
            // line 327
            echo "            ";
            // line 328
            echo "            ";
            if ((((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 328, $this->getSourceContext()); })()) === false) || twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array(), "any", false, true), "checked", array(), "any", true, true))) {
                // line 329
                echo "                ";
                if (twig_in_filter("collection", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 329, $this->getSourceContext()); })()), "parent", array()), "vars", array()), "block_prefixes", array()))) {
                    // line 330
                    echo "                    ";
                    $context["div_class"] = ((isset($context["div_class"]) || array_key_exists("div_class", $context) ? $context["div_class"] : (function () { throw new Twig_Error_Runtime('Variable "div_class" does not exist.', 330, $this->getSourceContext()); })()) . " col-sm-12");
                    // line 331
                    echo "                ";
                } else {
                    // line 332
                    echo "                    ";
                    $context["div_class"] = ((isset($context["div_class"]) || array_key_exists("div_class", $context) ? $context["div_class"] : (function () { throw new Twig_Error_Runtime('Variable "div_class" does not exist.', 332, $this->getSourceContext()); })()) . " col-sm-9 col-sm-offset-3");
                    // line 333
                    echo "                ";
                }
                // line 334
                echo "            ";
            } else {
                // line 335
                echo "                ";
                $context["div_class"] = ((isset($context["div_class"]) || array_key_exists("div_class", $context) ? $context["div_class"] : (function () { throw new Twig_Error_Runtime('Variable "div_class" does not exist.', 335, $this->getSourceContext()); })()) . " col-sm-9");
                // line 336
                echo "            ";
            }
            // line 337
            echo "        ";
        }
        // line 338
        echo "
        ";
        // line 339
        if ((isset($context["show_label"]) || array_key_exists("show_label", $context) ? $context["show_label"] : (function () { throw new Twig_Error_Runtime('Variable "show_label" does not exist.', 339, $this->getSourceContext()); })())) {
            // line 340
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 340, $this->getSourceContext()); })()), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 340, $this->getSourceContext()); })()), null)) : (null))) ? array() : array("label" => $_label_)));
            echo "
        ";
        }
        // line 342
        echo "
        ";
        // line 343
        if ((array_key_exists("sonata_admin", $context) && (isset($context["sonata_admin_enabled"]) || array_key_exists("sonata_admin_enabled", $context) ? $context["sonata_admin_enabled"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin_enabled" does not exist.', 343, $this->getSourceContext()); })()))) {
            // line 344
            echo "            ";
            $context["div_class"] = (((((isset($context["div_class"]) || array_key_exists("div_class", $context) ? $context["div_class"] : (function () { throw new Twig_Error_Runtime('Variable "div_class" does not exist.', 344, $this->getSourceContext()); })()) . " sonata-ba-field-") . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 344, $this->getSourceContext()); })()), "edit", array())) . "-") . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 344, $this->getSourceContext()); })()), "inline", array()));
            // line 345
            echo "        ";
        }
        // line 346
        echo "
        ";
        // line 347
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 347, $this->getSourceContext()); })())) > 0)) {
            // line 348
            echo "            ";
            $context["div_class"] = ((isset($context["div_class"]) || array_key_exists("div_class", $context) ? $context["div_class"] : (function () { throw new Twig_Error_Runtime('Variable "div_class" does not exist.', 348, $this->getSourceContext()); })()) . " sonata-ba-field-error");
            // line 349
            echo "        ";
        }
        // line 350
        echo "
        <div class=\"";
        // line 351
        echo twig_escape_filter($this->env, (isset($context["div_class"]) || array_key_exists("div_class", $context) ? $context["div_class"] : (function () { throw new Twig_Error_Runtime('Variable "div_class" does not exist.', 351, $this->getSourceContext()); })()), "html", null, true);
        echo "\">
            ";
        // line 352
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 352, $this->getSourceContext()); })()), 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
        echo " ";
        // line 353
        echo "
            ";
        // line 354
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 354, $this->getSourceContext()); })())) > 0)) {
            // line 355
            echo "                <div class=\"help-block sonata-ba-field-error-messages\">
                    ";
            // line 356
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 356, $this->getSourceContext()); })()), 'errors');
            echo "
                </div>
            ";
        }
        // line 359
        echo "
            ";
        // line 360
        if (((array_key_exists("sonata_admin", $context) && (isset($context["sonata_admin_enabled"]) || array_key_exists("sonata_admin_enabled", $context) ? $context["sonata_admin_enabled"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin_enabled" does not exist.', 360, $this->getSourceContext()); })())) && ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "field_description", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "field_description", array(), "any", false, true), "help", array()), false)) : (false)))) {
            // line 361
            echo "                <span class=\"help-block sonata-ba-field-help\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 361, $this->getSourceContext()); })()), "field_description", array()), "help", array()), array(), ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 361, $this->getSourceContext()); })()), "field_description", array()), "translationDomain", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 361, $this->getSourceContext()); })()), "field_description", array()), "translationDomain", array())) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 361, $this->getSourceContext()); })()), "translationDomain", array()))));
            echo "</span>
            ";
        }
        // line 363
        echo "        </div>
    </div>
";
        
        $__internal_ec10a6d9521f8e5a2f8103ff76bbba7e3786e99b3a6cc1bc26027c6e87819c3b->leave($__internal_ec10a6d9521f8e5a2f8103ff76bbba7e3786e99b3a6cc1bc26027c6e87819c3b_prof);

        
        $__internal_b34d379fcd7e2d652d68aff570c41bb9c88fd79c72eb22b2b62d7513a44b0fe8->leave($__internal_b34d379fcd7e2d652d68aff570c41bb9c88fd79c72eb22b2b62d7513a44b0fe8_prof);

    }

    // line 367
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_2c77d8726a802d18b3a9359df2969e2de40ad64c2931b2a2b6de4a4b17e086c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c77d8726a802d18b3a9359df2969e2de40ad64c2931b2a2b6de4a4b17e086c8->enter($__internal_2c77d8726a802d18b3a9359df2969e2de40ad64c2931b2a2b6de4a4b17e086c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_95c8599a07505cf0639ab8b46a03a5da05c16722b62d1addd1287324a40218c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95c8599a07505cf0639ab8b46a03a5da05c16722b62d1addd1287324a40218c6->enter($__internal_95c8599a07505cf0639ab8b46a03a5da05c16722b62d1addd1287324a40218c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 368
        $context["show_label"] = false;
        // line 369
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_95c8599a07505cf0639ab8b46a03a5da05c16722b62d1addd1287324a40218c6->leave($__internal_95c8599a07505cf0639ab8b46a03a5da05c16722b62d1addd1287324a40218c6_prof);

        
        $__internal_2c77d8726a802d18b3a9359df2969e2de40ad64c2931b2a2b6de4a4b17e086c8->leave($__internal_2c77d8726a802d18b3a9359df2969e2de40ad64c2931b2a2b6de4a4b17e086c8_prof);

    }

    // line 372
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_d237b90d3aebb44405c888d32f9eceba598e576230a02cf92c4a71f1b67da37b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d237b90d3aebb44405c888d32f9eceba598e576230a02cf92c4a71f1b67da37b->enter($__internal_d237b90d3aebb44405c888d32f9eceba598e576230a02cf92c4a71f1b67da37b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_2b045cdb9a793b4676d4b8c260e72de0e5fbb3bb83e7af000bb9478652e58119 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b045cdb9a793b4676d4b8c260e72de0e5fbb3bb83e7af000bb9478652e58119->enter($__internal_2b045cdb9a793b4676d4b8c260e72de0e5fbb3bb83e7af000bb9478652e58119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 373
        $context["show_label"] = false;
        // line 374
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_2b045cdb9a793b4676d4b8c260e72de0e5fbb3bb83e7af000bb9478652e58119->leave($__internal_2b045cdb9a793b4676d4b8c260e72de0e5fbb3bb83e7af000bb9478652e58119_prof);

        
        $__internal_d237b90d3aebb44405c888d32f9eceba598e576230a02cf92c4a71f1b67da37b->leave($__internal_d237b90d3aebb44405c888d32f9eceba598e576230a02cf92c4a71f1b67da37b_prof);

    }

    // line 377
    public function block_sonata_type_native_collection_widget_row($context, array $blocks = array())
    {
        $__internal_3915ac46c9e5e8b45ecf77338464cf1914548d98309c7bdbe4e5b8c9194041ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3915ac46c9e5e8b45ecf77338464cf1914548d98309c7bdbe4e5b8c9194041ef->enter($__internal_3915ac46c9e5e8b45ecf77338464cf1914548d98309c7bdbe4e5b8c9194041ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_native_collection_widget_row"));

        $__internal_ea1c707bbef1079d94154f81a1b67526e65a893ef0bbb14afc7b282bb0e08c1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea1c707bbef1079d94154f81a1b67526e65a893ef0bbb14afc7b282bb0e08c1b->enter($__internal_ea1c707bbef1079d94154f81a1b67526e65a893ef0bbb14afc7b282bb0e08c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_native_collection_widget_row"));

        // line 378
        ob_start();
        // line 379
        echo "    <div class=\"sonata-collection-row\">
        ";
        // line 380
        if ((isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new Twig_Error_Runtime('Variable "allow_delete" does not exist.', 380, $this->getSourceContext()); })())) {
            // line 381
            echo "            <div class=\"row\">
                <div class=\"col-xs-1\">
                    <a href=\"#\" class=\"btn btn-link sonata-collection-delete\">
                        <i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i>
                    </a>
                </div>
                <div class=\"col-xs-11\">
        ";
        }
        // line 389
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new Twig_Error_Runtime('Variable "child" does not exist.', 389, $this->getSourceContext()); })()), 'row', array("label" => false));
        echo "
        ";
        // line 390
        if ((isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new Twig_Error_Runtime('Variable "allow_delete" does not exist.', 390, $this->getSourceContext()); })())) {
            // line 391
            echo "                </div>
            </div>
        ";
        }
        // line 394
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ea1c707bbef1079d94154f81a1b67526e65a893ef0bbb14afc7b282bb0e08c1b->leave($__internal_ea1c707bbef1079d94154f81a1b67526e65a893ef0bbb14afc7b282bb0e08c1b_prof);

        
        $__internal_3915ac46c9e5e8b45ecf77338464cf1914548d98309c7bdbe4e5b8c9194041ef->leave($__internal_3915ac46c9e5e8b45ecf77338464cf1914548d98309c7bdbe4e5b8c9194041ef_prof);

    }

    // line 398
    public function block_sonata_type_native_collection_widget($context, array $blocks = array())
    {
        $__internal_14cced97ef1c1c128749c11d9dc6a31ba9839dc54f5403acf2374f8d5e2c0bef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14cced97ef1c1c128749c11d9dc6a31ba9839dc54f5403acf2374f8d5e2c0bef->enter($__internal_14cced97ef1c1c128749c11d9dc6a31ba9839dc54f5403acf2374f8d5e2c0bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_native_collection_widget"));

        $__internal_9b98fb1a4df9dbeaa5bfb13457e2b94b4cc6b97caf3d60ed8f134a098d2ff53d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b98fb1a4df9dbeaa5bfb13457e2b94b4cc6b97caf3d60ed8f134a098d2ff53d->enter($__internal_9b98fb1a4df9dbeaa5bfb13457e2b94b4cc6b97caf3d60ed8f134a098d2ff53d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_native_collection_widget"));

        // line 399
        ob_start();
        // line 400
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 401
            echo "        ";
            $context["child"] = (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new Twig_Error_Runtime('Variable "prototype" does not exist.', 401, $this->getSourceContext()); })());
            // line 402
            echo "        ";
            $context["allow_delete_backup"] = (isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new Twig_Error_Runtime('Variable "allow_delete" does not exist.', 402, $this->getSourceContext()); })());
            // line 403
            echo "        ";
            $context["allow_delete"] = true;
            // line 404
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 404, $this->getSourceContext()); })()), array("data-prototype" =>             $this->renderBlock("sonata_type_native_collection_widget_row", $context, $blocks), "data-prototype-name" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new Twig_Error_Runtime('Variable "prototype" does not exist.', 404, $this->getSourceContext()); })()), "vars", array()), "name", array()), "class" => ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : (""))));
            // line 405
            echo "        ";
            $context["allow_delete"] = (isset($context["allow_delete_backup"]) || array_key_exists("allow_delete_backup", $context) ? $context["allow_delete_backup"] : (function () { throw new Twig_Error_Runtime('Variable "allow_delete_backup" does not exist.', 405, $this->getSourceContext()); })());
            // line 406
            echo "    ";
        }
        // line 407
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 408
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 408, $this->getSourceContext()); })()), 'errors');
        echo "
        ";
        // line 409
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 409, $this->getSourceContext()); })()));
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
            // line 410
            echo "            ";
            $this->displayBlock("sonata_type_native_collection_widget_row", $context, $blocks);
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
        // line 412
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 412, $this->getSourceContext()); })()), 'rest');
        echo "
        ";
        // line 413
        if ((isset($context["allow_add"]) || array_key_exists("allow_add", $context) ? $context["allow_add"] : (function () { throw new Twig_Error_Runtime('Variable "allow_add" does not exist.', 413, $this->getSourceContext()); })())) {
            // line 414
            echo "            <div><a href=\"#\" class=\"btn btn-link sonata-collection-add\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i></a></div>
        ";
        }
        // line 416
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_9b98fb1a4df9dbeaa5bfb13457e2b94b4cc6b97caf3d60ed8f134a098d2ff53d->leave($__internal_9b98fb1a4df9dbeaa5bfb13457e2b94b4cc6b97caf3d60ed8f134a098d2ff53d_prof);

        
        $__internal_14cced97ef1c1c128749c11d9dc6a31ba9839dc54f5403acf2374f8d5e2c0bef->leave($__internal_14cced97ef1c1c128749c11d9dc6a31ba9839dc54f5403acf2374f8d5e2c0bef_prof);

    }

    // line 420
    public function block_sonata_type_immutable_array_widget($context, array $blocks = array())
    {
        $__internal_10417a0e739589ad5a9834247c344555d9023617c3e4b7fb8685d899829536ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10417a0e739589ad5a9834247c344555d9023617c3e4b7fb8685d899829536ae->enter($__internal_10417a0e739589ad5a9834247c344555d9023617c3e4b7fb8685d899829536ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_immutable_array_widget"));

        $__internal_fe7d1c5fb2feeccc07627796c759c805604602bab2ba7cbbba4eebe8076b671d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe7d1c5fb2feeccc07627796c759c805604602bab2ba7cbbba4eebe8076b671d->enter($__internal_fe7d1c5fb2feeccc07627796c759c805604602bab2ba7cbbba4eebe8076b671d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_immutable_array_widget"));

        // line 421
        echo "    ";
        ob_start();
        // line 422
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 423
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 423, $this->getSourceContext()); })()), 'errors');
        echo "

            ";
        // line 425
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 425, $this->getSourceContext()); })()));
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
        foreach ($context['_seq'] as $context["key"] => $context["child"]) {
            // line 426
            echo "                ";
            $this->displayBlock("sonata_type_immutable_array_widget_row", $context, $blocks);
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 428
        echo "
            ";
        // line 429
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 429, $this->getSourceContext()); })()), 'rest');
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_fe7d1c5fb2feeccc07627796c759c805604602bab2ba7cbbba4eebe8076b671d->leave($__internal_fe7d1c5fb2feeccc07627796c759c805604602bab2ba7cbbba4eebe8076b671d_prof);

        
        $__internal_10417a0e739589ad5a9834247c344555d9023617c3e4b7fb8685d899829536ae->leave($__internal_10417a0e739589ad5a9834247c344555d9023617c3e4b7fb8685d899829536ae_prof);

    }

    // line 434
    public function block_sonata_type_immutable_array_widget_row($context, array $blocks = array())
    {
        $__internal_e75de37542e9b3ca1a675ad05e74c571138dfdb08b575b5bd71c28bb92c08b94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e75de37542e9b3ca1a675ad05e74c571138dfdb08b575b5bd71c28bb92c08b94->enter($__internal_e75de37542e9b3ca1a675ad05e74c571138dfdb08b575b5bd71c28bb92c08b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_immutable_array_widget_row"));

        $__internal_ba199f1cec632372da7fe46349265e798a3bd5b9db189af0c40d7ef8ea89972f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba199f1cec632372da7fe46349265e798a3bd5b9db189af0c40d7ef8ea89972f->enter($__internal_ba199f1cec632372da7fe46349265e798a3bd5b9db189af0c40d7ef8ea89972f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_immutable_array_widget_row"));

        // line 435
        echo "    ";
        ob_start();
        // line 436
        echo "        <div class=\"form-group";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new Twig_Error_Runtime('Variable "child" does not exist.', 436, $this->getSourceContext()); })()), "vars", array()), "errors", array())) > 0)) {
            echo " error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 436, $this->getSourceContext()); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new Twig_Error_Runtime('Variable "key" does not exist.', 436, $this->getSourceContext()); })()), "html", null, true);
        echo "\">

            ";
        // line 438
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new Twig_Error_Runtime('Variable "child" does not exist.', 438, $this->getSourceContext()); })()), 'label');
        echo "

            ";
        // line 440
        $context["div_class"] = "";
        // line 441
        echo "            ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 441, $this->getSourceContext()); })()), "options", array()), "form_type", array(), "array") == "horizontal")) {
            // line 442
            echo "                ";
            $context["div_class"] = "col-sm-9";
            // line 443
            echo "            ";
        }
        // line 444
        echo "
            <div class=\"";
        // line 445
        echo twig_escape_filter($this->env, (isset($context["div_class"]) || array_key_exists("div_class", $context) ? $context["div_class"] : (function () { throw new Twig_Error_Runtime('Variable "div_class" does not exist.', 445, $this->getSourceContext()); })()), "html", null, true);
        echo " sonata-ba-field sonata-ba-field-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 445, $this->getSourceContext()); })()), "edit", array()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 445, $this->getSourceContext()); })()), "inline", array()), "html", null, true);
        echo " ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new Twig_Error_Runtime('Variable "child" does not exist.', 445, $this->getSourceContext()); })()), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
                ";
        // line 446
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new Twig_Error_Runtime('Variable "child" does not exist.', 446, $this->getSourceContext()); })()), 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
        echo " ";
        // line 447
        echo "            </div>

            ";
        // line 449
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new Twig_Error_Runtime('Variable "child" does not exist.', 449, $this->getSourceContext()); })()), "vars", array()), "errors", array())) > 0)) {
            // line 450
            echo "                <div class=\"help-block sonata-ba-field-error-messages\">
                    ";
            // line 451
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new Twig_Error_Runtime('Variable "child" does not exist.', 451, $this->getSourceContext()); })()), 'errors');
            echo "
                </div>
            ";
        }
        // line 454
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ba199f1cec632372da7fe46349265e798a3bd5b9db189af0c40d7ef8ea89972f->leave($__internal_ba199f1cec632372da7fe46349265e798a3bd5b9db189af0c40d7ef8ea89972f_prof);

        
        $__internal_e75de37542e9b3ca1a675ad05e74c571138dfdb08b575b5bd71c28bb92c08b94->leave($__internal_e75de37542e9b3ca1a675ad05e74c571138dfdb08b575b5bd71c28bb92c08b94_prof);

    }

    // line 458
    public function block_sonata_type_model_autocomplete_widget($context, array $blocks = array())
    {
        $__internal_c29cc63586d1dd3d0181fff8a56cb0f468ae7726ce13c80f9ccbb5b4cc1f1824 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c29cc63586d1dd3d0181fff8a56cb0f468ae7726ce13c80f9ccbb5b4cc1f1824->enter($__internal_c29cc63586d1dd3d0181fff8a56cb0f468ae7726ce13c80f9ccbb5b4cc1f1824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_widget"));

        $__internal_db140c3bed87d685de8207abb1dfdb88abdcd394a15fec895b8211ede29ea18c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db140c3bed87d685de8207abb1dfdb88abdcd394a15fec895b8211ede29ea18c->enter($__internal_db140c3bed87d685de8207abb1dfdb88abdcd394a15fec895b8211ede29ea18c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_widget"));

        // line 459
        echo "    ";
        $this->loadTemplate((isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new Twig_Error_Runtime('Variable "template" does not exist.', 459, $this->getSourceContext()); })()), "SonataAdminBundle:Form:form_admin_fields.html.twig", 459)->display($context);
        
        $__internal_db140c3bed87d685de8207abb1dfdb88abdcd394a15fec895b8211ede29ea18c->leave($__internal_db140c3bed87d685de8207abb1dfdb88abdcd394a15fec895b8211ede29ea18c_prof);

        
        $__internal_c29cc63586d1dd3d0181fff8a56cb0f468ae7726ce13c80f9ccbb5b4cc1f1824->leave($__internal_c29cc63586d1dd3d0181fff8a56cb0f468ae7726ce13c80f9ccbb5b4cc1f1824_prof);

    }

    // line 462
    public function block_sonata_type_choice_field_mask_widget($context, array $blocks = array())
    {
        $__internal_1a06c55a7c52905d015eae14a115f165104d050a661acfd68c8c4c63371ed261 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a06c55a7c52905d015eae14a115f165104d050a661acfd68c8c4c63371ed261->enter($__internal_1a06c55a7c52905d015eae14a115f165104d050a661acfd68c8c4c63371ed261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_choice_field_mask_widget"));

        $__internal_7a676cf79100a78e2b6798e758806d3ad90936fa23a4163f6f5492be3a2d4383 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a676cf79100a78e2b6798e758806d3ad90936fa23a4163f6f5492be3a2d4383->enter($__internal_7a676cf79100a78e2b6798e758806d3ad90936fa23a4163f6f5492be3a2d4383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_choice_field_mask_widget"));

        // line 463
        echo "    ";
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    ";
        // line 464
        $context["main_form_name"] = twig_slice($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 464, $this->getSourceContext()); })()), 0, (twig_length_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 464, $this->getSourceContext()); })())) - twig_length_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 464, $this->getSourceContext()); })()))));
        // line 465
        echo "    <script>
        jQuery(document).ready(function() {
            var allFields = ";
        // line 467
        echo json_encode((isset($context["all_fields"]) || array_key_exists("all_fields", $context) ? $context["all_fields"] : (function () { throw new Twig_Error_Runtime('Variable "all_fields" does not exist.', 467, $this->getSourceContext()); })()));
        echo ";
            var map = ";
        // line 468
        echo json_encode((isset($context["map"]) || array_key_exists("map", $context) ? $context["map"] : (function () { throw new Twig_Error_Runtime('Variable "map" does not exist.', 468, $this->getSourceContext()); })()));
        echo ";

            var showMaskChoiceEl = jQuery('#";
        // line 470
        echo twig_escape_filter($this->env, (isset($context["main_form_name"]) || array_key_exists("main_form_name", $context) ? $context["main_form_name"] : (function () { throw new Twig_Error_Runtime('Variable "main_form_name" does not exist.', 470, $this->getSourceContext()); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 470, $this->getSourceContext()); })()), "html", null, true);
        echo "');

            showMaskChoiceEl.on('change', function () {
                choice_field_mask_show(jQuery(this).val());
            });

            function choice_field_mask_show(val)
            {
                var controlGroupIdFunc = function (field) {
                    return '#sonata-ba-field-container-";
        // line 479
        echo twig_escape_filter($this->env, (isset($context["main_form_name"]) || array_key_exists("main_form_name", $context) ? $context["main_form_name"] : (function () { throw new Twig_Error_Runtime('Variable "main_form_name" does not exist.', 479, $this->getSourceContext()); })()), "html", null, true);
        echo "' + field;

                };
                if (map[val] == undefined) {
                    jQuery.each(allFields, function (i, field) {
                        jQuery(controlGroupIdFunc(field)).hide();
                    });
                    return;
                }

                jQuery.each(allFields, function (i, field) {
                    jQuery(controlGroupIdFunc(field)).hide();
                });
                jQuery.each(map[val], function (i, field) {
                    jQuery(controlGroupIdFunc(field)).show();
                });
            }
            choice_field_mask_show(showMaskChoiceEl.val());
        });

    </script>
";
        
        $__internal_7a676cf79100a78e2b6798e758806d3ad90936fa23a4163f6f5492be3a2d4383->leave($__internal_7a676cf79100a78e2b6798e758806d3ad90936fa23a4163f6f5492be3a2d4383_prof);

        
        $__internal_1a06c55a7c52905d015eae14a115f165104d050a661acfd68c8c4c63371ed261->leave($__internal_1a06c55a7c52905d015eae14a115f165104d050a661acfd68c8c4c63371ed261_prof);

    }

    // line 502
    public function block_sonata_type_choice_multiple_sortable($context, array $blocks = array())
    {
        $__internal_20ccd7650a9cddc57dc5ee0685ae36ab4bef044ae1bdb3945a949dbde8dc3bae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20ccd7650a9cddc57dc5ee0685ae36ab4bef044ae1bdb3945a949dbde8dc3bae->enter($__internal_20ccd7650a9cddc57dc5ee0685ae36ab4bef044ae1bdb3945a949dbde8dc3bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_choice_multiple_sortable"));

        $__internal_05b21f374af2f11e83ec8e660fff15e2010f7e85c72b50643786df0106c82cfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05b21f374af2f11e83ec8e660fff15e2010f7e85c72b50643786df0106c82cfd->enter($__internal_05b21f374af2f11e83ec8e660fff15e2010f7e85c72b50643786df0106c82cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_choice_multiple_sortable"));

        // line 503
        echo "    <input type=\"hidden\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new Twig_Error_Runtime('Variable "full_name" does not exist.', 503, $this->getSourceContext()); })()), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 503, $this->getSourceContext()); })()), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_join_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 503, $this->getSourceContext()); })()), ","), "html", null, true);
        echo "\" />

    <script>
        jQuery(document).ready(function() {
            Admin.setup_sortable_select2(jQuery('#";
        // line 507
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 507, $this->getSourceContext()); })()), "html", null, true);
        echo "'), ";
        echo json_encode(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 507, $this->getSourceContext()); })()), "vars", array()), "choices", array()));
        echo ");
        });
    </script>
";
        
        $__internal_05b21f374af2f11e83ec8e660fff15e2010f7e85c72b50643786df0106c82cfd->leave($__internal_05b21f374af2f11e83ec8e660fff15e2010f7e85c72b50643786df0106c82cfd_prof);

        
        $__internal_20ccd7650a9cddc57dc5ee0685ae36ab4bef044ae1bdb3945a949dbde8dc3bae->leave($__internal_20ccd7650a9cddc57dc5ee0685ae36ab4bef044ae1bdb3945a949dbde8dc3bae_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Form:form_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1648 => 507,  1636 => 503,  1627 => 502,  1595 => 479,  1582 => 470,  1577 => 468,  1573 => 467,  1569 => 465,  1567 => 464,  1562 => 463,  1553 => 462,  1542 => 459,  1533 => 458,  1521 => 454,  1515 => 451,  1512 => 450,  1510 => 449,  1506 => 447,  1503 => 446,  1491 => 445,  1488 => 444,  1485 => 443,  1482 => 442,  1479 => 441,  1477 => 440,  1472 => 438,  1460 => 436,  1457 => 435,  1448 => 434,  1434 => 429,  1431 => 428,  1414 => 426,  1397 => 425,  1392 => 423,  1387 => 422,  1384 => 421,  1375 => 420,  1363 => 416,  1359 => 414,  1357 => 413,  1352 => 412,  1335 => 410,  1318 => 409,  1314 => 408,  1309 => 407,  1306 => 406,  1303 => 405,  1300 => 404,  1297 => 403,  1294 => 402,  1291 => 401,  1288 => 400,  1286 => 399,  1277 => 398,  1265 => 394,  1260 => 391,  1258 => 390,  1253 => 389,  1243 => 381,  1241 => 380,  1238 => 379,  1236 => 378,  1227 => 377,  1216 => 374,  1214 => 373,  1205 => 372,  1194 => 369,  1192 => 368,  1183 => 367,  1171 => 363,  1165 => 361,  1163 => 360,  1160 => 359,  1154 => 356,  1151 => 355,  1149 => 354,  1146 => 353,  1143 => 352,  1139 => 351,  1136 => 350,  1133 => 349,  1130 => 348,  1128 => 347,  1125 => 346,  1122 => 345,  1119 => 344,  1117 => 343,  1114 => 342,  1108 => 340,  1106 => 339,  1103 => 338,  1100 => 337,  1097 => 336,  1094 => 335,  1091 => 334,  1088 => 333,  1085 => 332,  1082 => 331,  1079 => 330,  1076 => 329,  1073 => 328,  1071 => 327,  1069 => 326,  1066 => 325,  1063 => 324,  1060 => 323,  1058 => 322,  1055 => 321,  1053 => 320,  1050 => 319,  1047 => 318,  1044 => 317,  1042 => 316,  1033 => 315,  1030 => 314,  1021 => 313,  1008 => 308,  1002 => 306,  996 => 303,  993 => 302,  991 => 301,  988 => 300,  982 => 298,  976 => 295,  973 => 294,  971 => 293,  966 => 291,  962 => 290,  957 => 289,  954 => 288,  948 => 286,  945 => 285,  943 => 284,  934 => 283,  921 => 278,  915 => 275,  910 => 274,  907 => 273,  901 => 270,  896 => 269,  894 => 268,  889 => 266,  885 => 265,  880 => 264,  877 => 263,  874 => 262,  871 => 261,  868 => 260,  862 => 258,  859 => 257,  857 => 256,  848 => 255,  834 => 249,  832 => 248,  831 => 247,  830 => 246,  829 => 245,  824 => 244,  821 => 243,  818 => 242,  815 => 241,  812 => 240,  806 => 238,  803 => 237,  801 => 236,  792 => 235,  776 => 229,  773 => 228,  770 => 227,  764 => 225,  762 => 224,  757 => 223,  754 => 222,  751 => 221,  747 => 219,  744 => 217,  741 => 215,  739 => 214,  732 => 213,  730 => 212,  727 => 211,  724 => 209,  721 => 207,  719 => 206,  712 => 205,  710 => 204,  702 => 203,  696 => 201,  693 => 200,  691 => 199,  688 => 198,  685 => 197,  682 => 196,  679 => 195,  676 => 194,  673 => 193,  671 => 192,  662 => 191,  650 => 187,  643 => 185,  640 => 184,  637 => 183,  633 => 182,  628 => 181,  625 => 180,  623 => 179,  614 => 178,  602 => 174,  599 => 172,  597 => 171,  595 => 170,  593 => 169,  591 => 168,  576 => 167,  573 => 166,  570 => 165,  567 => 164,  564 => 163,  561 => 162,  558 => 161,  555 => 160,  552 => 159,  549 => 158,  546 => 157,  544 => 156,  541 => 155,  538 => 154,  535 => 153,  526 => 152,  516 => 149,  507 => 148,  497 => 145,  488 => 144,  475 => 139,  469 => 137,  466 => 135,  464 => 134,  449 => 133,  446 => 132,  442 => 129,  439 => 126,  438 => 125,  437 => 124,  435 => 123,  433 => 122,  430 => 121,  427 => 120,  424 => 119,  421 => 118,  418 => 117,  415 => 116,  413 => 115,  410 => 114,  407 => 113,  405 => 112,  402 => 111,  400 => 110,  397 => 109,  394 => 108,  391 => 107,  388 => 106,  386 => 105,  377 => 104,  366 => 99,  364 => 98,  362 => 97,  359 => 95,  357 => 94,  355 => 93,  346 => 92,  335 => 88,  333 => 87,  331 => 86,  328 => 84,  326 => 83,  324 => 82,  315 => 81,  300 => 75,  297 => 74,  294 => 73,  291 => 72,  282 => 71,  271 => 68,  267 => 66,  265 => 65,  262 => 64,  259 => 63,  257 => 62,  251 => 60,  249 => 59,  247 => 58,  244 => 57,  241 => 56,  238 => 54,  236 => 53,  227 => 52,  214 => 49,  211 => 48,  202 => 47,  189 => 44,  186 => 43,  183 => 42,  180 => 41,  177 => 40,  168 => 39,  158 => 36,  154 => 35,  145 => 34,  130 => 29,  128 => 28,  126 => 27,  117 => 26,  106 => 23,  102 => 22,  99 => 21,  90 => 19,  86 => 18,  83 => 17,  78 => 16,  76 => 15,  67 => 14,  11 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'form_div_layout.html.twig' %}

{% block form_errors -%}
    {% if errors|length > 0 %}
        {% if not form.parent %}<div class=\"alert alert-danger\">{% endif %}
            <ul class=\"list-unstyled\">
                {% for error in errors %}
                    <li><i class=\"fa fa-exclamation-circle\" aria-hidden=\"true\"></i> {{ error.message }}</li>
                {% endfor %}
            </ul>
        {% if not form.parent %}</div>{% endif %}
    {% endif %}
{%- endblock form_errors %}

{% block sonata_help %}
{% spaceless %}
{% if sonata_help is defined and sonata_help %}
    <span class=\"help-block sonata-ba-field-widget-help\">{{ sonata_help|raw }}</span>
{% endif %}
{% endspaceless %}
{% endblock %}

{% block form_widget -%}
    {{ parent() }}
    {{ block('sonata_help') }}
{%- endblock form_widget %}

{% block form_widget_simple %}
    {% set type = type|default('text') %}
    {% if type != 'file' %}
        {% set attr = attr|merge({'class': attr.class|default('') ~ ' form-control'}) %}
    {% endif %}
    {{ parent() }}
{% endblock form_widget_simple %}

{% block textarea_widget %}
    {% set attr = attr|merge({'class': attr.class|default('') ~ ' form-control'}) %}
    {{ parent() }}
{% endblock textarea_widget %}

{% block money_widget -%}
    {% if money_pattern == '{{ widget }}' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set currencySymbol = money_pattern|replace({'{{ widget }}': ''})|trim %}
        {% if money_pattern matches '/^{{ widget }}/' %}
            <div class=\"input-group\">
                {{- block('form_widget_simple') -}}
                <span class=\"input-group-addon\">{{ currencySymbol }}</span>
            </div>
        {% elseif money_pattern matches '/{{ widget }}\$/' %}
            <div class=\"input-group\">
                <span class=\"input-group-addon\">{{ currencySymbol }}</span>
                {{- block('form_widget_simple') -}}
            </div>
        {% endif %}
    {% endif %}
{%- endblock money_widget %}

{% block percent_widget %}
    {% spaceless %}
        {% set type = type|default('text') %}
        <div class=\"input-group\">
            {{ block('form_widget_simple') }}
            <span class=\"input-group-addon\">%</span>
        </div>
    {% endspaceless %}
{% endblock percent_widget %}

{% block checkbox_widget -%}
    {% set parent_label_class = parent_label_class|default('') -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default('') -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}
{% block form_label %}
{% spaceless %}
    {% if label is not same as(false) and sonata_admin.options['form_type'] == 'horizontal' %}
        {% set label_class = 'col-sm-3' %}
    {% endif %}

    {% set label_class = label_class|default('') ~ ' control-label' %}

    {% if label is not same as(false) %}
        {% set label_attr = label_attr|merge({'class': label_attr.class|default('') ~ label_class }) %}

        {% if not compound %}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {% endif %}
        {% if required %}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}

        {% if label is empty %}
            {%- if label_format is defined and label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}

        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {% if not sonata_admin.admin %}
                {{- label|trans({}, translation_domain) -}}
            {% else %}
                {{ label|trans({}, sonata_admin.field_description.translationDomain ?: admin.translationDomain) }}
            {% endif %}
        </label>
    {% endif %}
{% endspaceless %}
{% endblock form_label %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {% if sonata_admin.admin %}
        {% set translation_domain = sonata_admin.field_description.translationDomain %}
    {% endif %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {% set label = name|humanize %}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw -}}
            {%- if label is not same as(false) -%}
                <span class=\"control-label__text\">
                    {{- label|trans({}, translation_domain) -}}
                </span>
            {%- endif -%}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{% block choice_widget_expanded %}
{% spaceless %}
    {% set attr = attr|merge({'class': attr.class|default('') ~ ' list-unstyled'}) %}
    <ul {{ block('widget_container_attributes') }}>
    {% for child in form %}
        <li>
            {{ form_widget(child, {'horizontal': false, 'horizontal_input_wrapper_class': ''}) }} {# {'horizontal': false, 'horizontal_input_wrapper_class': ''} needed to avoid MopaBootstrapBundle messing with the DOM #}
        </li>
    {% endfor %}
    </ul>
{% endspaceless %}
{% endblock choice_widget_expanded %}

{% block choice_widget_collapsed %}
{% spaceless %}
    {% if required and placeholder is defined and placeholder is none %}
        {% set required = false %}
    {% elseif required and empty_value is defined and empty_value_in_choices is defined and empty_value is none and not empty_value_in_choices and not multiple %}
        {% set required = false %}
    {% endif %}

    {% set attr = attr|merge({'class': attr.class|default('') ~ ' form-control'}) %}
    {% if (sortable is defined) and sortable and multiple %}
        {{ block('sonata_type_choice_multiple_sortable') }}
    {% else %}
        <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %} >
            {% if empty_value is defined and empty_value is not none %}
                <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>
                    {% if not sonata_admin.admin %}
                        {{- empty_value|trans({}, translation_domain) -}}
                    {% else %}
                        {{- empty_value|trans({}, sonata_admin.field_description.translationDomain) -}}
                    {% endif%}
                </option>
            {% elseif placeholder is defined and placeholder is not none %}
                <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>
                    {% if not sonata_admin.admin %}
                        {{- placeholder|trans({}, translation_domain) -}}
                    {% else %}
                        {{- placeholder|trans({}, sonata_admin.field_description.translationDomain) -}}
                    {% endif%}
                </option>
            {% endif %}
            {% if preferred_choices|length > 0 %}
                {% set options = preferred_choices %}
                {{ block('choice_widget_options') }}
                {% if choices|length > 0 %}
                    <option disabled=\"disabled\">{{ separator }}</option>
                {% endif %}
            {% endif %}
            {% set options = choices %}
            {{ block('choice_widget_options') }}
        </select>
    {% endif %}
{% endspaceless %}
{% endblock choice_widget_collapsed %}

{% block date_widget %}
{% spaceless %}
    {% if widget == 'single_text' %}
        {{ block('form_widget_simple') }}
    {% else %}
        {% if row is not defined or row == true %}
            {% set attr = attr|merge({'class': attr.class|default('') ~ ' row' }) %}
        {% endif %}
        {% set input_wrapper_class = input_wrapper_class|default('col-sm-4') %}
        <div {{ block('widget_container_attributes') }}>
            {{ date_pattern|replace({
                '{{ year }}':  '<div class=\"'~ input_wrapper_class ~ '\">' ~ form_widget(form.year) ~ '</div>',
                '{{ month }}': '<div class=\"'~ input_wrapper_class ~ '\">' ~ form_widget(form.month) ~ '</div>',
                '{{ day }}':   '<div class=\"'~ input_wrapper_class ~ '\">' ~ form_widget(form.day) ~ '</div>',
            })|raw }}
        </div>
    {% endif %}
{% endspaceless %}
{% endblock date_widget %}

{% block time_widget %}
{% spaceless %}
    {% if widget == 'single_text' %}
        {{ block('form_widget_simple') }}
    {% else %}
        {% if row is not defined or row == true %}
            {% set attr = attr|merge({'class': attr.class|default('') ~ ' row' }) %}
        {% endif %}
        {% set input_wrapper_class = input_wrapper_class|default('col-sm-6') %}
        <div {{ block('widget_container_attributes') }}>
            <div class=\"{{ input_wrapper_class }}\">
                {{ form_widget(form.hour) }}
            </div>
            {% if with_minutes %}
                <div class=\"{{ input_wrapper_class }}\">
                    {{ form_widget(form.minute) }}
                </div>
            {% endif %}
            {% if with_seconds %}
                <div class=\"{{ input_wrapper_class }}\">
                    {{ form_widget(form.second) }}
                </div>
            {% endif %}
        </div>
    {% endif %}
{% endspaceless %}
{% endblock time_widget %}

{% block datetime_widget %}
{% spaceless %}
    {% if widget == 'single_text' %}
        {{ block('form_widget_simple') }}
    {% else %}
        {% set attr = attr|merge({'class': attr.class|default('') ~ ' row' }) %}
        <div {{ block('widget_container_attributes') }}>
            {{ form_errors(form.date) }}
            {{ form_errors(form.time) }}

            {% if form.date.vars.widget == 'single_text' %}
                <div class=\"col-sm-2\">
                    {{ form_widget(form.date) }}
                </div>
            {% else %}
                {{ form_widget(form.date, {'row': false, 'input_wrapper_class': 'col-sm-2'}) }}
            {% endif %}

            {% if form.time.vars.widget == 'single_text' %}
                <div class=\"col-sm-2\">
                    {{ form_widget(form.time) }}
                </div>
            {% else %}
                {{ form_widget(form.time, {'row': false, 'input_wrapper_class': 'col-sm-2'}) }}
            {% endif %}
        </div>
    {% endif %}
{% endspaceless %}
{% endblock datetime_widget %}

{% block form_row %}
    {% set show_label = show_label|default(true) %}
    <div class=\"form-group{% if errors|length > 0 %} has-error{% endif %}\" id=\"sonata-ba-field-container-{{ id }}\">
        {% if sonata_admin.field_description.options is defined %}
            {% set label = sonata_admin.field_description.options.name|default(label)  %}
        {% endif %}

        {% set div_class = 'sonata-ba-field' %}

        {% if label is same as(false) %}
            {% set div_class = div_class ~ ' sonata-collection-row-without-label' %}
        {% endif %}

        {% if sonata_admin is defined and sonata_admin.options['form_type'] == 'horizontal' %}
            {# Add an offset if no label or is a checkbox/radio #}
            {% if label is same as(false) or form.vars.checked is defined %}
                {% if 'collection' in form.parent.vars.block_prefixes %}
                    {% set div_class = div_class ~ ' col-sm-12' %}
                {% else %}
                    {% set div_class = div_class ~ ' col-sm-9 col-sm-offset-3' %}
                {% endif %}
            {% else %}
                {% set div_class = div_class ~ ' col-sm-9' %}
            {% endif %}
        {% endif %}

        {% if show_label %}
            {{ form_label(form, label|default(null)) }}
        {% endif %}

        {% if sonata_admin is defined and sonata_admin_enabled %}
            {% set div_class = div_class ~ ' sonata-ba-field-' ~ sonata_admin.edit ~ '-' ~ sonata_admin.inline %}
        {% endif %}

        {% if errors|length > 0 %}
            {% set div_class = div_class ~ ' sonata-ba-field-error' %}
        {% endif %}

        <div class=\"{{ div_class }}\">
            {{ form_widget(form, {'horizontal': false, 'horizontal_input_wrapper_class': ''}) }} {# {'horizontal': false, 'horizontal_input_wrapper_class': ''} needed to avoid MopaBootstrapBundle messing with the DOM #}

            {% if errors|length > 0 %}
                <div class=\"help-block sonata-ba-field-error-messages\">
                    {{ form_errors(form) }}
                </div>
            {% endif %}

            {% if sonata_admin is defined and sonata_admin_enabled and sonata_admin.field_description.help|default(false) %}
                <span class=\"help-block sonata-ba-field-help\">{{ sonata_admin.field_description.help|trans({}, sonata_admin.field_description.translationDomain ?: admin.translationDomain)|raw }}</span>
            {% endif %}
        </div>
    </div>
{% endblock form_row %}

{% block checkbox_row -%}
    {% set show_label = false %}
    {{ block('form_row') }}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {% set show_label = false %}
    {{ block('form_row') }}
{%- endblock radio_row %}

{% block sonata_type_native_collection_widget_row %}
{% spaceless %}
    <div class=\"sonata-collection-row\">
        {% if allow_delete %}
            <div class=\"row\">
                <div class=\"col-xs-1\">
                    <a href=\"#\" class=\"btn btn-link sonata-collection-delete\">
                        <i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i>
                    </a>
                </div>
                <div class=\"col-xs-11\">
        {% endif %}
            {{ form_row(child, { label: false }) }}
        {% if allow_delete %}
                </div>
            </div>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock sonata_type_native_collection_widget_row %}

{% block sonata_type_native_collection_widget %}
{% spaceless %}
    {% if prototype is defined %}
        {% set child = prototype %}
        {% set allow_delete_backup = allow_delete %}
        {% set allow_delete = true %}
        {% set attr = attr|merge({'data-prototype': block('sonata_type_native_collection_widget_row'), 'data-prototype-name': prototype.vars.name, 'class': attr.class|default('') }) %}
        {% set allow_delete = allow_delete_backup %}
    {% endif %}
    <div {{ block('widget_container_attributes') }}>
        {{ form_errors(form) }}
        {% for child in form %}
            {{ block('sonata_type_native_collection_widget_row') }}
        {% endfor %}
        {{ form_rest(form) }}
        {% if allow_add %}
            <div><a href=\"#\" class=\"btn btn-link sonata-collection-add\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i></a></div>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock sonata_type_native_collection_widget %}

{% block sonata_type_immutable_array_widget %}
    {% spaceless %}
        <div {{ block('widget_container_attributes') }}>
            {{ form_errors(form) }}

            {% for key, child in form %}
                {{ block('sonata_type_immutable_array_widget_row') }}
            {% endfor %}

            {{ form_rest(form) }}
        </div>
    {% endspaceless %}
{% endblock sonata_type_immutable_array_widget %}

{% block sonata_type_immutable_array_widget_row %}
    {% spaceless %}
        <div class=\"form-group{% if child.vars.errors|length > 0%} error{%endif%}\" id=\"sonata-ba-field-container-{{ id }}-{{ key }}\">

            {{ form_label(child) }}

            {% set div_class = \"\" %}
            {% if sonata_admin.options['form_type'] == 'horizontal' %}
                {% set div_class = 'col-sm-9' %}
            {% endif%}

            <div class=\"{{ div_class }} sonata-ba-field sonata-ba-field-{{ sonata_admin.edit }}-{{ sonata_admin.inline }} {% if child.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}\">
                {{ form_widget(child, {'horizontal': false, 'horizontal_input_wrapper_class': ''}) }} {# {'horizontal': false, 'horizontal_input_wrapper_class': ''} needed to avoid MopaBootstrapBundle messing with the DOM #}
            </div>

            {% if child.vars.errors|length > 0 %}
                <div class=\"help-block sonata-ba-field-error-messages\">
                    {{ form_errors(child) }}
                </div>
            {% endif %}
        </div>
    {% endspaceless %}
{% endblock %}

{% block sonata_type_model_autocomplete_widget %}
    {% include template %}
{% endblock sonata_type_model_autocomplete_widget %}

{% block sonata_type_choice_field_mask_widget %}
    {{ block('choice_widget') }}
    {% set main_form_name = id|slice(0, id|length - name|length) %}
    <script>
        jQuery(document).ready(function() {
            var allFields = {{ all_fields|json_encode|raw }};
            var map = {{ map|json_encode|raw }};

            var showMaskChoiceEl = jQuery('#{{ main_form_name }}{{ name }}');

            showMaskChoiceEl.on('change', function () {
                choice_field_mask_show(jQuery(this).val());
            });

            function choice_field_mask_show(val)
            {
                var controlGroupIdFunc = function (field) {
                    return '#sonata-ba-field-container-{{ main_form_name }}' + field;

                };
                if (map[val] == undefined) {
                    jQuery.each(allFields, function (i, field) {
                        jQuery(controlGroupIdFunc(field)).hide();
                    });
                    return;
                }

                jQuery.each(allFields, function (i, field) {
                    jQuery(controlGroupIdFunc(field)).hide();
                });
                jQuery.each(map[val], function (i, field) {
                    jQuery(controlGroupIdFunc(field)).show();
                });
            }
            choice_field_mask_show(showMaskChoiceEl.val());
        });

    </script>
{% endblock %}

{%  block sonata_type_choice_multiple_sortable %}
    <input type=\"hidden\" name=\"{{ full_name }}\" id=\"{{ id }}\" value=\"{{ value|join(',') }}\" />

    <script>
        jQuery(document).ready(function() {
            Admin.setup_sortable_select2(jQuery('#{{ id }}'), {{ form.vars.choices|json_encode|raw }});
        });
    </script>
{% endblock %}
", "SonataAdminBundle:Form:form_admin_fields.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/Form/form_admin_fields.html.twig");
    }
}

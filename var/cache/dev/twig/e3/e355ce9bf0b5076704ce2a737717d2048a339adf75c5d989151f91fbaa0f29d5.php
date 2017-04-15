<?php

/* SyliusUiBundle:Form:imagesTheme.html.twig */
class __TwigTemplate_a984aa0e189bcdfef9cbea59c231c86e7675466d711cd100dc19b1ede02efd17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusUi/Form/theme.html.twig", "SyliusUiBundle:Form:imagesTheme.html.twig", 1);
        $this->blocks = array(
            'collection_widget' => array($this, 'block_collection_widget'),
            'sylius_product_image_widget' => array($this, 'block_sylius_product_image_widget'),
            'sylius_taxon_image_widget' => array($this, 'block_sylius_taxon_image_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusUi/Form/theme.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_88a5410870452eba40c077c9da2f90cbe60f32dd3090d4b611b2f7884c4a6ab7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88a5410870452eba40c077c9da2f90cbe60f32dd3090d4b611b2f7884c4a6ab7->enter($__internal_88a5410870452eba40c077c9da2f90cbe60f32dd3090d4b611b2f7884c4a6ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Form:imagesTheme.html.twig"));

        $__internal_fa975c77c531e2246ff27dbf15ccd208219ea203bfaf9032cd2b6a04b4c668b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa975c77c531e2246ff27dbf15ccd208219ea203bfaf9032cd2b6a04b4c668b8->enter($__internal_fa975c77c531e2246ff27dbf15ccd208219ea203bfaf9032cd2b6a04b4c668b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Form:imagesTheme.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88a5410870452eba40c077c9da2f90cbe60f32dd3090d4b611b2f7884c4a6ab7->leave($__internal_88a5410870452eba40c077c9da2f90cbe60f32dd3090d4b611b2f7884c4a6ab7_prof);

        
        $__internal_fa975c77c531e2246ff27dbf15ccd208219ea203bfaf9032cd2b6a04b4c668b8->leave($__internal_fa975c77c531e2246ff27dbf15ccd208219ea203bfaf9032cd2b6a04b4c668b8_prof);

    }

    // line 3
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_e5790fac327fb663fc605b72ae0c426e3add558cbef5983aad7e3700c3cc7b9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5790fac327fb663fc605b72ae0c426e3add558cbef5983aad7e3700c3cc7b9f->enter($__internal_e5790fac327fb663fc605b72ae0c426e3add558cbef5983aad7e3700c3cc7b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_e3a89070b0a1cd2fb5d74d636ed4650456902e054909cc2db89d7f2ccc9cdc8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3a89070b0a1cd2fb5d74d636ed4650456902e054909cc2db89d7f2ccc9cdc8a->enter($__internal_e3a89070b0a1cd2fb5d74d636ed4650456902e054909cc2db89d7f2ccc9cdc8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 4
        $context["__internal_030dcc845568884849e05dc6b71bdc29731d1f85cf00aaefbf60d15273ebc904"] = $this->loadTemplate("SyliusResourceBundle:Macros:notification.html.twig", "SyliusUiBundle:Form:imagesTheme.html.twig", 4);
        // line 5
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()))) : ("")) . " controls collection-widget")));
        // line 6
        echo "
    ";
        // line 7
        ob_start();
        // line 8
        echo "        <div data-form-type=\"collection\" ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo "
                ";
        // line 9
        if ((array_key_exists("prototype", $context) && ($context["allow_add"] ?? $this->getContext($context, "allow_add")))) {
            // line 10
            echo "                    data-prototype='";
            echo twig_escape_filter($this->env, $this->getAttribute($this, "collection_item", array(0 => ($context["prototype"] ?? $this->getContext($context, "prototype")), 1 => ($context["allow_delete"] ?? $this->getContext($context, "allow_delete")), 2 => ($context["button_delete_label"] ?? $this->getContext($context, "button_delete_label")), 3 => "__name__"), "method"));
            echo "'";
        }
        // line 12
        echo ">
            ";
        // line 13
        echo $context["__internal_030dcc845568884849e05dc6b71bdc29731d1f85cf00aaefbf60d15273ebc904"]->geterror($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "errors", array()));
        echo "

            ";
        // line 15
        if (twig_test_iterable(((array_key_exists("prototypes", $context)) ? (_twig_default_filter(($context["prototypes"] ?? $this->getContext($context, "prototypes")))) : ("")))) {
            // line 16
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["prototypes"] ?? $this->getContext($context, "prototypes")));
            foreach ($context['_seq'] as $context["key"] => $context["subPrototype"]) {
                // line 17
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
            // line 19
            echo "            ";
        }
        // line 20
        echo "
            <div data-form-collection=\"list\" class=\"ui three column stackable grid\">
                ";
        // line 22
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
            // line 23
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
        // line 25
        echo "            </div>

            ";
        // line 27
        if ((array_key_exists("prototype", $context) && ($context["allow_add"] ?? $this->getContext($context, "allow_add")))) {
            // line 28
            echo "                <a href=\"#\" class=\"ui labeled icon button\" data-form-collection=\"add\">
                    <i class=\"plus square outline icon\"></i>
                    ";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["button_add_label"] ?? $this->getContext($context, "button_add_label"))), "html", null, true);
            echo "
                </a>
            ";
        }
        // line 33
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_e3a89070b0a1cd2fb5d74d636ed4650456902e054909cc2db89d7f2ccc9cdc8a->leave($__internal_e3a89070b0a1cd2fb5d74d636ed4650456902e054909cc2db89d7f2ccc9cdc8a_prof);

        
        $__internal_e5790fac327fb663fc605b72ae0c426e3add558cbef5983aad7e3700c3cc7b9f->leave($__internal_e5790fac327fb663fc605b72ae0c426e3add558cbef5983aad7e3700c3cc7b9f_prof);

    }

    // line 51
    public function block_sylius_product_image_widget($context, array $blocks = array())
    {
        $__internal_fc74d627982ccbd23d9098a9e89e023d1c9e6c4b1b34b314ade037be1dbef86a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc74d627982ccbd23d9098a9e89e023d1c9e6c4b1b34b314ade037be1dbef86a->enter($__internal_fc74d627982ccbd23d9098a9e89e023d1c9e6c4b1b34b314ade037be1dbef86a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_product_image_widget"));

        $__internal_00dd6495768559750c32b814220c85311fa2766e11688f9fdc0d2f92da215435 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00dd6495768559750c32b814220c85311fa2766e11688f9fdc0d2f92da215435->enter($__internal_00dd6495768559750c32b814220c85311fa2766e11688f9fdc0d2f92da215435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_product_image_widget"));

        // line 52
        echo "    ";
        ob_start();
        // line 53
        echo "    <div class=\"ui upload box segment\">
        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), 'row');
        echo "
        <label for=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\" class=\"ui icon labeled button\"><i class=\"cloud upload icon\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.choose_file"), "html", null, true);
        echo "</label>
    ";
        // line 56
        if ( !(null === (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "path", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "path", array()), null)) : (null)))) {
            // line 57
            echo "        <img class=\"ui small bordered image\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "value", array()), "path", array()), "sylius_small"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "value", array()), "type", array()), "html", null, true);
            echo "\" />
    ";
        }
        // line 59
        echo "        <div class=\"ui hidden element\">
            ";
        // line 60
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
        </div>
        <div class=\"ui element\">";
        // line 63
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'errors');
        // line 64
        echo "</div>
    ";
        // line 65
        if ((( !(null === $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "id", array())) && (0 != twig_length_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "variants", array())))) &&  !$this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "simple", array()))) {
            // line 66
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "productVariants", array()), 'row');
            echo "
    ";
        }
        // line 68
        echo "    </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_00dd6495768559750c32b814220c85311fa2766e11688f9fdc0d2f92da215435->leave($__internal_00dd6495768559750c32b814220c85311fa2766e11688f9fdc0d2f92da215435_prof);

        
        $__internal_fc74d627982ccbd23d9098a9e89e023d1c9e6c4b1b34b314ade037be1dbef86a->leave($__internal_fc74d627982ccbd23d9098a9e89e023d1c9e6c4b1b34b314ade037be1dbef86a_prof);

    }

    // line 72
    public function block_sylius_taxon_image_widget($context, array $blocks = array())
    {
        $__internal_0a626f2e400ec1976791a8bfa84068dd596984549e97cf465e2cf2b9d643ab5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a626f2e400ec1976791a8bfa84068dd596984549e97cf465e2cf2b9d643ab5d->enter($__internal_0a626f2e400ec1976791a8bfa84068dd596984549e97cf465e2cf2b9d643ab5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_taxon_image_widget"));

        $__internal_4cec61bebad38ef1fc9c7b56fc6052ec5f2502ad7d3c4a1708525000a2d5b660 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cec61bebad38ef1fc9c7b56fc6052ec5f2502ad7d3c4a1708525000a2d5b660->enter($__internal_4cec61bebad38ef1fc9c7b56fc6052ec5f2502ad7d3c4a1708525000a2d5b660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_taxon_image_widget"));

        // line 73
        echo "    ";
        ob_start();
        // line 74
        echo "    <div class=\"ui upload box segment\">
        ";
        // line 75
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), 'row');
        echo "
        ";
        // line 76
        if ((null === (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "path", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "path", array()), null)) : (null)))) {
            // line 77
            echo "            <label for=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), "vars", array()), "id", array()), "html", null, true);
            echo "\" class=\"ui icon labeled button\"><i class=\"cloud upload icon\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.choose_file"), "html", null, true);
            echo "</label>
        ";
        } else {
            // line 79
            echo "            <img class=\"ui small bordered image\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "value", array()), "path", array()), "sylius_small"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "value", array()), "type", array()), "html", null, true);
            echo "\" />
            <label for=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), "vars", array()), "id", array()), "html", null, true);
            echo "\" class=\"ui icon labeled button\"><i class=\"cloud upload icon\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.change_file"), "html", null, true);
            echo "</label>
        ";
        }
        // line 82
        echo "        <div class=\"ui hidden element\">
            ";
        // line 83
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
        </div>
        <div class=\"ui element\">";
        // line 86
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'errors');
        // line 87
        echo "</div>
    </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_4cec61bebad38ef1fc9c7b56fc6052ec5f2502ad7d3c4a1708525000a2d5b660->leave($__internal_4cec61bebad38ef1fc9c7b56fc6052ec5f2502ad7d3c4a1708525000a2d5b660_prof);

        
        $__internal_0a626f2e400ec1976791a8bfa84068dd596984549e97cf465e2cf2b9d643ab5d->leave($__internal_0a626f2e400ec1976791a8bfa84068dd596984549e97cf465e2cf2b9d643ab5d_prof);

    }

    // line 37
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
            $__internal_f036707f421b22fd04a2f989d87995ea4b3e1a095db0bfdd9a52da6ec99f65f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_f036707f421b22fd04a2f989d87995ea4b3e1a095db0bfdd9a52da6ec99f65f5->enter($__internal_f036707f421b22fd04a2f989d87995ea4b3e1a095db0bfdd9a52da6ec99f65f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "collection_item"));

            $__internal_7fa675ab5781e9c5e8c46cf4d428e8ff2bdf417104cda6c9db6dca4be9d502da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_7fa675ab5781e9c5e8c46cf4d428e8ff2bdf417104cda6c9db6dca4be9d502da->enter($__internal_7fa675ab5781e9c5e8c46cf4d428e8ff2bdf417104cda6c9db6dca4be9d502da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "collection_item"));

            // line 38
            echo "    ";
            ob_start();
            // line 39
            echo "        <div data-form-collection=\"item\" data-form-collection-index=\"";
            echo twig_escape_filter($this->env, ($context["index"] ?? $this->getContext($context, "index")), "html", null, true);
            echo "\" class=\"column\">
            ";
            // line 40
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
            echo "
            ";
            // line 41
            if (($context["allow_delete"] ?? $this->getContext($context, "allow_delete"))) {
                // line 42
                echo "                <a href=\"#\" data-form-collection=\"delete\" class=\"ui red labeled icon button\" style=\"margin-bottom: 1em;\">
                    <i class=\"trash icon\"></i>
                    ";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["button_delete_label"] ?? $this->getContext($context, "button_delete_label"))), "html", null, true);
                echo "
                </a>
            ";
            }
            // line 47
            echo "        </div>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            
            $__internal_7fa675ab5781e9c5e8c46cf4d428e8ff2bdf417104cda6c9db6dca4be9d502da->leave($__internal_7fa675ab5781e9c5e8c46cf4d428e8ff2bdf417104cda6c9db6dca4be9d502da_prof);

            
            $__internal_f036707f421b22fd04a2f989d87995ea4b3e1a095db0bfdd9a52da6ec99f65f5->leave($__internal_f036707f421b22fd04a2f989d87995ea4b3e1a095db0bfdd9a52da6ec99f65f5_prof);

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
        return "SyliusUiBundle:Form:imagesTheme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  347 => 47,  341 => 44,  337 => 42,  335 => 41,  331 => 40,  326 => 39,  323 => 38,  302 => 37,  289 => 87,  287 => 86,  282 => 83,  279 => 82,  272 => 80,  265 => 79,  257 => 77,  255 => 76,  251 => 75,  248 => 74,  245 => 73,  236 => 72,  224 => 68,  218 => 66,  216 => 65,  213 => 64,  211 => 63,  206 => 60,  203 => 59,  195 => 57,  193 => 56,  187 => 55,  183 => 54,  180 => 53,  177 => 52,  168 => 51,  156 => 33,  150 => 30,  146 => 28,  144 => 27,  140 => 25,  123 => 23,  106 => 22,  102 => 20,  99 => 19,  88 => 17,  83 => 16,  81 => 15,  76 => 13,  73 => 12,  68 => 10,  66 => 9,  61 => 8,  59 => 7,  56 => 6,  53 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusUi/Form/theme.html.twig' %}

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

            <div data-form-collection=\"list\" class=\"ui three column stackable grid\">
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
        <div data-form-collection=\"item\" data-form-collection-index=\"{{ index }}\" class=\"column\">
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

{% block sylius_product_image_widget %}
    {% spaceless %}
    <div class=\"ui upload box segment\">
        {{ form_row(form.type) }}
        <label for=\"{{ form.file.vars.id }}\" class=\"ui icon labeled button\"><i class=\"cloud upload icon\"></i> {{ 'sylius.ui.choose_file'|trans }}</label>
    {% if form.vars.value.path|default(null) is not null %}
        <img class=\"ui small bordered image\" src=\"{{ form.vars.value.path|imagine_filter('sylius_small') }}\" alt=\"{{ form.vars.value.type }}\" />
    {% endif %}
        <div class=\"ui hidden element\">
            {{ form_widget(form.file) }}
        </div>
        <div class=\"ui element\">
            {{- form_errors(form.file) -}}
        </div>
    {% if product.id is not null and 0 != product.variants|length and not product.simple %}
        {{ form_row(form.productVariants) }}
    {% endif %}
    </div>
    {% endspaceless %}
{% endblock %}

{% block sylius_taxon_image_widget %}
    {% spaceless %}
    <div class=\"ui upload box segment\">
        {{ form_row(form.type) }}
        {% if form.vars.value.path|default(null) is null %}
            <label for=\"{{ form.file.vars.id }}\" class=\"ui icon labeled button\"><i class=\"cloud upload icon\"></i> {{ 'sylius.ui.choose_file'|trans }}</label>
        {% else %}
            <img class=\"ui small bordered image\" src=\"{{ form.vars.value.path|imagine_filter('sylius_small') }}\" alt=\"{{ form.vars.value.type }}\" />
            <label for=\"{{ form.file.vars.id }}\" class=\"ui icon labeled button\"><i class=\"cloud upload icon\"></i> {{ 'sylius.ui.change_file'|trans }}</label>
        {% endif %}
        <div class=\"ui hidden element\">
            {{ form_widget(form.file) }}
        </div>
        <div class=\"ui element\">
            {{- form_errors(form.file) -}}
        </div>
    </div>
    {% endspaceless %}
{% endblock %}
", "SyliusUiBundle:Form:imagesTheme.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Form/imagesTheme.html.twig");
    }
}

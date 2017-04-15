<?php

/* SyliusUiBundle:Macro:buttons.html.twig */
class __TwigTemplate_91d0d6884bb3bd4fc36dba6cb3d9af20d8285e0d1b646a22bc3621c0587c5a68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9aa68464b265f285392a7870dd1f649a36dc20da17b0a8f15eddbc40bad18b6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aa68464b265f285392a7870dd1f649a36dc20da17b0a8f15eddbc40bad18b6b->enter($__internal_9aa68464b265f285392a7870dd1f649a36dc20da17b0a8f15eddbc40bad18b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Macro:buttons.html.twig"));

        $__internal_926c2f9457eadcff66a1488f4d2551b37fb924de44b937fb394398f86612fc85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_926c2f9457eadcff66a1488f4d2551b37fb924de44b937fb394398f86612fc85->enter($__internal_926c2f9457eadcff66a1488f4d2551b37fb924de44b937fb394398f86612fc85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Macro:buttons.html.twig"));

        // line 11
        echo "
";
        // line 21
        echo "
";
        // line 31
        echo "
";
        // line 41
        echo "
";
        // line 47
        echo "
";
        // line 53
        echo "
";
        
        $__internal_9aa68464b265f285392a7870dd1f649a36dc20da17b0a8f15eddbc40bad18b6b->leave($__internal_9aa68464b265f285392a7870dd1f649a36dc20da17b0a8f15eddbc40bad18b6b_prof);

        
        $__internal_926c2f9457eadcff66a1488f4d2551b37fb924de44b937fb394398f86612fc85->leave($__internal_926c2f9457eadcff66a1488f4d2551b37fb924de44b937fb394398f86612fc85_prof);

    }

    // line 1
    public function getdefault($__url__ = null, $__message__ = null, $__id__ = null, $__icon__ = null, $__class__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "message" => $__message__,
            "id" => $__id__,
            "icon" => $__icon__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_a45a22e6fc0ffa7aa7329294b8d4880f4a3fb951bf8b37e4ea2ed44aadd1a564 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_a45a22e6fc0ffa7aa7329294b8d4880f4a3fb951bf8b37e4ea2ed44aadd1a564->enter($__internal_a45a22e6fc0ffa7aa7329294b8d4880f4a3fb951bf8b37e4ea2ed44aadd1a564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "default"));

            $__internal_b0c07c15598ff14bea85ec8d8ed1d5bfebe8802e7092a74165d058885b6b2944 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_b0c07c15598ff14bea85ec8d8ed1d5bfebe8802e7092a74165d058885b6b2944->enter($__internal_b0c07c15598ff14bea85ec8d8ed1d5bfebe8802e7092a74165d058885b6b2944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "default"));

            // line 2
            echo "    <a class=\"ui ";
            if ( !twig_test_empty(($context["message"] ?? $this->getContext($context, "message")))) {
                echo "labeled ";
            }
            if ( !twig_test_empty(($context["icon"] ?? $this->getContext($context, "icon")))) {
                echo "icon ";
            }
            echo "button ";
            if ( !twig_test_empty(($context["class"] ?? $this->getContext($context, "class")))) {
                echo " ";
                echo twig_escape_filter($this->env, ($context["class"] ?? $this->getContext($context, "class")), "html", null, true);
                echo " ";
            }
            echo "\" ";
            if ( !(null === ($context["id"] ?? $this->getContext($context, "id")))) {
                echo " id=\"";
                echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
                echo "\"";
            }
            echo " href=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
            echo "\">
        ";
            // line 3
            if ( !twig_test_empty(($context["icon"] ?? $this->getContext($context, "icon")))) {
                // line 4
                echo "            <i class=\"icon ";
                echo twig_escape_filter($this->env, ($context["icon"] ?? $this->getContext($context, "icon")), "html", null, true);
                echo "\"></i>
        ";
            }
            // line 6
            echo "        ";
            if ( !twig_test_empty(($context["message"] ?? $this->getContext($context, "message")))) {
                // line 7
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["message"] ?? $this->getContext($context, "message"))), "html", null, true);
                echo "
        ";
            }
            // line 9
            echo "    </a>
";
            
            $__internal_b0c07c15598ff14bea85ec8d8ed1d5bfebe8802e7092a74165d058885b6b2944->leave($__internal_b0c07c15598ff14bea85ec8d8ed1d5bfebe8802e7092a74165d058885b6b2944_prof);

            
            $__internal_a45a22e6fc0ffa7aa7329294b8d4880f4a3fb951bf8b37e4ea2ed44aadd1a564->leave($__internal_a45a22e6fc0ffa7aa7329294b8d4880f4a3fb951bf8b37e4ea2ed44aadd1a564_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 12
    public function getshow($__url__ = null, $__message__ = null, $__id__ = null, $__class__ = null, $__labeled__ = true, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "message" => $__message__,
            "id" => $__id__,
            "class" => $__class__,
            "labeled" => $__labeled__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_74c3e73470946933f241e118df5f66bf4ef60462fb2d891676f65d7a96abecba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_74c3e73470946933f241e118df5f66bf4ef60462fb2d891676f65d7a96abecba->enter($__internal_74c3e73470946933f241e118df5f66bf4ef60462fb2d891676f65d7a96abecba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "show"));

            $__internal_c15560f084ba8eb9eb68e1248aae325c73a9600b4c594bf5e1808090a509610f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_c15560f084ba8eb9eb68e1248aae325c73a9600b4c594bf5e1808090a509610f->enter($__internal_c15560f084ba8eb9eb68e1248aae325c73a9600b4c594bf5e1808090a509610f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "show"));

            // line 13
            echo "    ";
            $context["buttons"] = $this;
            // line 14
            echo "
    ";
            // line 15
            if ((twig_test_empty(($context["message"] ?? $this->getContext($context, "message"))) && ($context["labeled"] ?? $this->getContext($context, "labeled")))) {
                // line 16
                echo "        ";
                $context["message"] = "sylius.ui.show";
                // line 17
                echo "    ";
            }
            // line 18
            echo "
    ";
            // line 19
            echo $context["buttons"]->getdefault(($context["url"] ?? $this->getContext($context, "url")), ($context["message"] ?? $this->getContext($context, "message")), ($context["id"] ?? $this->getContext($context, "id")), "search");
            echo "
";
            
            $__internal_c15560f084ba8eb9eb68e1248aae325c73a9600b4c594bf5e1808090a509610f->leave($__internal_c15560f084ba8eb9eb68e1248aae325c73a9600b4c594bf5e1808090a509610f_prof);

            
            $__internal_74c3e73470946933f241e118df5f66bf4ef60462fb2d891676f65d7a96abecba->leave($__internal_74c3e73470946933f241e118df5f66bf4ef60462fb2d891676f65d7a96abecba_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 22
    public function getcreate($__url__ = null, $__message__ = null, $__id__ = null, $__labeled__ = true, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "message" => $__message__,
            "id" => $__id__,
            "labeled" => $__labeled__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_7b045ec58d527cb13da0a65cbd83c548e89f4d8ec31fe178da78a9f556dc6c03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_7b045ec58d527cb13da0a65cbd83c548e89f4d8ec31fe178da78a9f556dc6c03->enter($__internal_7b045ec58d527cb13da0a65cbd83c548e89f4d8ec31fe178da78a9f556dc6c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "create"));

            $__internal_cc9a579fedf3c28847ae9767af006c7a68ce7127d2525a7d4cb48ffea68a5180 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_cc9a579fedf3c28847ae9767af006c7a68ce7127d2525a7d4cb48ffea68a5180->enter($__internal_cc9a579fedf3c28847ae9767af006c7a68ce7127d2525a7d4cb48ffea68a5180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "create"));

            // line 23
            echo "    ";
            $context["buttons"] = $this;
            // line 24
            echo "
    ";
            // line 25
            if ((twig_test_empty(($context["message"] ?? $this->getContext($context, "message"))) && ($context["labeled"] ?? $this->getContext($context, "labeled")))) {
                // line 26
                echo "        ";
                $context["message"] = "sylius.ui.create";
                // line 27
                echo "    ";
            }
            // line 28
            echo "
    ";
            // line 29
            echo $context["buttons"]->getdefault(($context["url"] ?? $this->getContext($context, "url")), ($context["message"] ?? $this->getContext($context, "message")), ($context["id"] ?? $this->getContext($context, "id")), "plus", "primary");
            echo "
";
            
            $__internal_cc9a579fedf3c28847ae9767af006c7a68ce7127d2525a7d4cb48ffea68a5180->leave($__internal_cc9a579fedf3c28847ae9767af006c7a68ce7127d2525a7d4cb48ffea68a5180_prof);

            
            $__internal_7b045ec58d527cb13da0a65cbd83c548e89f4d8ec31fe178da78a9f556dc6c03->leave($__internal_7b045ec58d527cb13da0a65cbd83c548e89f4d8ec31fe178da78a9f556dc6c03_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 32
    public function getedit($__url__ = null, $__message__ = null, $__id__ = null, $__labeled__ = true, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "message" => $__message__,
            "id" => $__id__,
            "labeled" => $__labeled__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_4465b01a2b5305180072fa891a10eea0d9f12c1e0f6690cfa842f393fee2ee23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_4465b01a2b5305180072fa891a10eea0d9f12c1e0f6690cfa842f393fee2ee23->enter($__internal_4465b01a2b5305180072fa891a10eea0d9f12c1e0f6690cfa842f393fee2ee23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "edit"));

            $__internal_6baf7ae337dc2fb8eaf752436f5c81a4b8b9c084dc4bba769b3f252d239d3e71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_6baf7ae337dc2fb8eaf752436f5c81a4b8b9c084dc4bba769b3f252d239d3e71->enter($__internal_6baf7ae337dc2fb8eaf752436f5c81a4b8b9c084dc4bba769b3f252d239d3e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "edit"));

            // line 33
            echo "    ";
            $context["buttons"] = $this;
            // line 34
            echo "
    ";
            // line 35
            if ((twig_test_empty(($context["message"] ?? $this->getContext($context, "message"))) && ($context["labeled"] ?? $this->getContext($context, "labeled")))) {
                // line 36
                echo "        ";
                $context["message"] = "sylius.ui.edit";
                // line 37
                echo "    ";
            }
            // line 38
            echo "
    ";
            // line 39
            echo $context["buttons"]->getdefault(($context["url"] ?? $this->getContext($context, "url")), ($context["message"] ?? $this->getContext($context, "message")), ($context["id"] ?? $this->getContext($context, "id")), "pencil");
            echo "
";
            
            $__internal_6baf7ae337dc2fb8eaf752436f5c81a4b8b9c084dc4bba769b3f252d239d3e71->leave($__internal_6baf7ae337dc2fb8eaf752436f5c81a4b8b9c084dc4bba769b3f252d239d3e71_prof);

            
            $__internal_4465b01a2b5305180072fa891a10eea0d9f12c1e0f6690cfa842f393fee2ee23->leave($__internal_4465b01a2b5305180072fa891a10eea0d9f12c1e0f6690cfa842f393fee2ee23_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 42
    public function getfilter($__message__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "message" => $__message__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_3fcead8384c53d5972da63980896cfe630b3672fc4e6c17a69beb638c7a08892 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_3fcead8384c53d5972da63980896cfe630b3672fc4e6c17a69beb638c7a08892->enter($__internal_3fcead8384c53d5972da63980896cfe630b3672fc4e6c17a69beb638c7a08892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "filter"));

            $__internal_1c88c4f608c4240069a9f445d9f1be844004f5079e79e963c7169c29fd012c6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_1c88c4f608c4240069a9f445d9f1be844004f5079e79e963c7169c29fd012c6a->enter($__internal_1c88c4f608c4240069a9f445d9f1be844004f5079e79e963c7169c29fd012c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "filter"));

            // line 43
            echo "    <button class=\"ui blue labeled icon button\" type=\"submit\">
        <i class=\"icon search\"></i> ";
            // line 44
            echo twig_escape_filter($this->env, ((twig_test_empty(($context["message"] ?? $this->getContext($context, "message")))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.filter")) : (($context["message"] ?? $this->getContext($context, "message")))), "html", null, true);
            echo "
    </button>
";
            
            $__internal_1c88c4f608c4240069a9f445d9f1be844004f5079e79e963c7169c29fd012c6a->leave($__internal_1c88c4f608c4240069a9f445d9f1be844004f5079e79e963c7169c29fd012c6a_prof);

            
            $__internal_3fcead8384c53d5972da63980896cfe630b3672fc4e6c17a69beb638c7a08892->leave($__internal_3fcead8384c53d5972da63980896cfe630b3672fc4e6c17a69beb638c7a08892_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 48
    public function getresetFilters($__url__ = null, $__message__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "message" => $__message__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_7d6dbdddbc1b7d1cc12e5442874c165b7c781b82f0b3e262538e3bc03e6692c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_7d6dbdddbc1b7d1cc12e5442874c165b7c781b82f0b3e262538e3bc03e6692c8->enter($__internal_7d6dbdddbc1b7d1cc12e5442874c165b7c781b82f0b3e262538e3bc03e6692c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "resetFilters"));

            $__internal_6ad10f1c38af0723189b152c23cb30511ed39eb71896d82e20e42c5ae4f38492 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_6ad10f1c38af0723189b152c23cb30511ed39eb71896d82e20e42c5ae4f38492->enter($__internal_6ad10f1c38af0723189b152c23cb30511ed39eb71896d82e20e42c5ae4f38492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "resetFilters"));

            // line 49
            echo "    <a class=\"ui labeled icon button\" href=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
            echo "\">
        <i class=\"icon remove\"></i> ";
            // line 50
            echo twig_escape_filter($this->env, ((twig_test_empty(($context["message"] ?? $this->getContext($context, "message")))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.clear_filters")) : (($context["message"] ?? $this->getContext($context, "message")))), "html", null, true);
            echo "
    </a>
";
            
            $__internal_6ad10f1c38af0723189b152c23cb30511ed39eb71896d82e20e42c5ae4f38492->leave($__internal_6ad10f1c38af0723189b152c23cb30511ed39eb71896d82e20e42c5ae4f38492_prof);

            
            $__internal_7d6dbdddbc1b7d1cc12e5442874c165b7c781b82f0b3e262538e3bc03e6692c8->leave($__internal_7d6dbdddbc1b7d1cc12e5442874c165b7c781b82f0b3e262538e3bc03e6692c8_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 54
    public function getdelete($__url__ = null, $__message__ = null, $__labeled__ = true, $__resourceId__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "message" => $__message__,
            "labeled" => $__labeled__,
            "resourceId" => $__resourceId__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_c67889541f96a2518c2c7018d3f3fbd96adccd14131a1f433be63011e9854d8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_c67889541f96a2518c2c7018d3f3fbd96adccd14131a1f433be63011e9854d8c->enter($__internal_c67889541f96a2518c2c7018d3f3fbd96adccd14131a1f433be63011e9854d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "delete"));

            $__internal_dab68b2c9d1fb1cfbce5d64f93676a0fe5f1c6c99c1d2933fae2e2d099abbb9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_dab68b2c9d1fb1cfbce5d64f93676a0fe5f1c6c99c1d2933fae2e2d099abbb9e->enter($__internal_dab68b2c9d1fb1cfbce5d64f93676a0fe5f1c6c99c1d2933fae2e2d099abbb9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "delete"));

            // line 55
            echo "    <form action=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
            echo "\" method=\"post\">
        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
        <button class=\"ui red ";
            // line 57
            if (($context["labeled"] ?? $this->getContext($context, "labeled"))) {
                echo "labeled ";
            }
            echo "icon button\" type=\"submit\" data-requires-confirmation>
            <i class=\"icon trash\"></i> ";
            // line 58
            echo twig_escape_filter($this->env, (((twig_test_empty(($context["message"] ?? $this->getContext($context, "message"))) && ($context["labeled"] ?? $this->getContext($context, "labeled")))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.delete")) : (($context["message"] ?? $this->getContext($context, "message")))), "html", null, true);
            echo "
        </button>
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken(($context["resourceId"] ?? $this->getContext($context, "resourceId"))), "html", null, true);
            echo "\" />
    </form>
";
            
            $__internal_dab68b2c9d1fb1cfbce5d64f93676a0fe5f1c6c99c1d2933fae2e2d099abbb9e->leave($__internal_dab68b2c9d1fb1cfbce5d64f93676a0fe5f1c6c99c1d2933fae2e2d099abbb9e_prof);

            
            $__internal_c67889541f96a2518c2c7018d3f3fbd96adccd14131a1f433be63011e9854d8c->leave($__internal_c67889541f96a2518c2c7018d3f3fbd96adccd14131a1f433be63011e9854d8c_prof);

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
        return "SyliusUiBundle:Macro:buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  451 => 60,  446 => 58,  440 => 57,  434 => 55,  413 => 54,  389 => 50,  384 => 49,  365 => 48,  341 => 44,  338 => 43,  320 => 42,  297 => 39,  294 => 38,  291 => 37,  288 => 36,  286 => 35,  283 => 34,  280 => 33,  259 => 32,  236 => 29,  233 => 28,  230 => 27,  227 => 26,  225 => 25,  222 => 24,  219 => 23,  198 => 22,  175 => 19,  172 => 18,  169 => 17,  166 => 16,  164 => 15,  161 => 14,  158 => 13,  136 => 12,  114 => 9,  108 => 7,  105 => 6,  99 => 4,  97 => 3,  73 => 2,  51 => 1,  40 => 53,  37 => 47,  34 => 41,  31 => 31,  28 => 21,  25 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro default(url, message, id, icon, class) %}
    <a class=\"ui {% if message is not empty %}labeled {% endif %}{% if icon is not empty %}icon {% endif %}button {% if class is not empty %} {{ class }} {% endif %}\" {% if id is not null %} id=\"{{ id }}\"{% endif %} href=\"{{ url }}\">
        {% if icon is not empty %}
            <i class=\"icon {{ icon }}\"></i>
        {% endif %}
        {% if message is not empty %}
            {{ message|trans }}
        {% endif %}
    </a>
{% endmacro %}

{% macro show(url, message, id, class, labeled = true) %}
    {% import _self as buttons %}

    {% if message is empty and labeled %}
        {% set message = 'sylius.ui.show' %}
    {% endif %}

    {{ buttons.default(url, message, id, 'search') }}
{% endmacro %}

{% macro create(url, message, id, labeled = true) %}
    {% import _self as buttons %}

    {% if message is empty and labeled %}
        {% set message = 'sylius.ui.create' %}
    {% endif %}

    {{ buttons.default(url, message, id, 'plus', 'primary') }}
{% endmacro %}

{% macro edit(url, message, id, labeled = true) %}
    {% import _self as buttons %}

    {% if message is empty and labeled %}
        {% set message = 'sylius.ui.edit' %}
    {% endif %}

    {{ buttons.default(url, message, id, 'pencil') }}
{% endmacro %}

{% macro filter(message) %}
    <button class=\"ui blue labeled icon button\" type=\"submit\">
        <i class=\"icon search\"></i> {{ message is empty ? 'sylius.ui.filter'|trans : message }}
    </button>
{% endmacro %}

{% macro resetFilters(url, message) %}
    <a class=\"ui labeled icon button\" href=\"{{ url }}\">
        <i class=\"icon remove\"></i> {{ message is empty ? 'sylius.ui.clear_filters'|trans : message }}
    </a>
{% endmacro %}

{% macro delete(url, message, labeled = true, resourceId = null) %}
    <form action=\"{{ url }}\" method=\"post\">
        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
        <button class=\"ui red {% if labeled %}labeled {% endif %}icon button\" type=\"submit\" data-requires-confirmation>
            <i class=\"icon trash\"></i> {{ (message is empty and labeled) ? 'sylius.ui.delete'|trans : message }}
        </button>
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token(resourceId) }}\" />
    </form>
{% endmacro %}
", "SyliusUiBundle:Macro:buttons.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Macro/buttons.html.twig");
    }
}

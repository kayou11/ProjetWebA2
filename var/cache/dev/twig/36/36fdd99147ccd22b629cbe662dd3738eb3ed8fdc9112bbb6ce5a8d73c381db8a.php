<?php

/* SyliusResourceBundle:Macros:buttons.html.twig */
class __TwigTemplate_77a8ef039f63bdedf29912c52015a395f74939b4772604d8cb26796db86610aa extends Twig_Template
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
        $__internal_040b1deca7a2bed747a8c958f66fa25b72361f68521eca52a6b33ae5e68cb251 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_040b1deca7a2bed747a8c958f66fa25b72361f68521eca52a6b33ae5e68cb251->enter($__internal_040b1deca7a2bed747a8c958f66fa25b72361f68521eca52a6b33ae5e68cb251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusResourceBundle:Macros:buttons.html.twig"));

        $__internal_18934d404d61083a39fdda35789dd904faefb4f2d84885c139992ba8261e5173 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18934d404d61083a39fdda35789dd904faefb4f2d84885c139992ba8261e5173->enter($__internal_18934d404d61083a39fdda35789dd904faefb4f2d84885c139992ba8261e5173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusResourceBundle:Macros:buttons.html.twig"));

        // line 6
        echo "
";
        // line 12
        echo "
";
        // line 18
        echo "
";
        // line 24
        echo "
";
        // line 39
        echo "
";
        // line 45
        echo "
";
        // line 54
        echo "
";
        // line 63
        echo "
";
        // line 72
        echo "
";
        
        $__internal_040b1deca7a2bed747a8c958f66fa25b72361f68521eca52a6b33ae5e68cb251->leave($__internal_040b1deca7a2bed747a8c958f66fa25b72361f68521eca52a6b33ae5e68cb251_prof);

        
        $__internal_18934d404d61083a39fdda35789dd904faefb4f2d84885c139992ba8261e5173->leave($__internal_18934d404d61083a39fdda35789dd904faefb4f2d84885c139992ba8261e5173_prof);

    }

    // line 1
    public function getshow($__url__ = null, $__message__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "message" => $__message__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_045b2020d985e03d0c7a64eb4ec1dd49cec9234da1558dced5e19bd0ba2cac93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_045b2020d985e03d0c7a64eb4ec1dd49cec9234da1558dced5e19bd0ba2cac93->enter($__internal_045b2020d985e03d0c7a64eb4ec1dd49cec9234da1558dced5e19bd0ba2cac93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "show"));

            $__internal_994fa6643d092dc64b7620f3ef7c9aa81ccb2e1b3e2b3bdf684f36ec509b5aca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_994fa6643d092dc64b7620f3ef7c9aa81ccb2e1b3e2b3bdf684f36ec509b5aca->enter($__internal_994fa6643d092dc64b7620f3ef7c9aa81ccb2e1b3e2b3bdf684f36ec509b5aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "show"));

            // line 2
            echo "<a href=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
            echo "\" class=\"btn btn-default\">
   <i class=\"glyphicon glyphicon-book\"></i><span>";
            // line 3
            echo twig_escape_filter($this->env, ((twig_test_empty(($context["message"] ?? $this->getContext($context, "message")))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.details")) : (($context["message"] ?? $this->getContext($context, "message")))), "html", null, true);
            echo "</span>
</a>
";
            
            $__internal_994fa6643d092dc64b7620f3ef7c9aa81ccb2e1b3e2b3bdf684f36ec509b5aca->leave($__internal_994fa6643d092dc64b7620f3ef7c9aa81ccb2e1b3e2b3bdf684f36ec509b5aca_prof);

            
            $__internal_045b2020d985e03d0c7a64eb4ec1dd49cec9234da1558dced5e19bd0ba2cac93->leave($__internal_045b2020d985e03d0c7a64eb4ec1dd49cec9234da1558dced5e19bd0ba2cac93_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 7
    public function getgeneric($__url__ = null, $__message__ = null, $__icon__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "message" => $__message__,
            "icon" => $__icon__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_70f53fe7805c0b14656b0dd368ad76421fbc17bb11c0768ad44655c9e9c6d69c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_70f53fe7805c0b14656b0dd368ad76421fbc17bb11c0768ad44655c9e9c6d69c->enter($__internal_70f53fe7805c0b14656b0dd368ad76421fbc17bb11c0768ad44655c9e9c6d69c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "generic"));

            $__internal_05df8ab9699e857664d3d3ae6e40c2eca1b7397ec0325b57499066831d50a492 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_05df8ab9699e857664d3d3ae6e40c2eca1b7397ec0325b57499066831d50a492->enter($__internal_05df8ab9699e857664d3d3ae6e40c2eca1b7397ec0325b57499066831d50a492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "generic"));

            // line 8
            echo "<a href=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
            echo "\" class=\"btn btn-default\">
    ";
            // line 9
            if ( !twig_test_empty(($context["icon"] ?? $this->getContext($context, "icon")))) {
                echo "<i class=\"glyphicon glyphicon-";
                echo twig_escape_filter($this->env, ($context["icon"] ?? $this->getContext($context, "icon")), "html", null, true);
                echo "\"></i>";
            }
            echo "<span>";
            echo twig_escape_filter($this->env, ($context["message"] ?? $this->getContext($context, "message")), "html", null, true);
            echo "</span>
</a>
";
            
            $__internal_05df8ab9699e857664d3d3ae6e40c2eca1b7397ec0325b57499066831d50a492->leave($__internal_05df8ab9699e857664d3d3ae6e40c2eca1b7397ec0325b57499066831d50a492_prof);

            
            $__internal_70f53fe7805c0b14656b0dd368ad76421fbc17bb11c0768ad44655c9e9c6d69c->leave($__internal_70f53fe7805c0b14656b0dd368ad76421fbc17bb11c0768ad44655c9e9c6d69c_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 13
    public function getcreate($__url__ = null, $__message__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "message" => $__message__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_5d9b936e71123a0428d0f201676a4e2b6a9abaa3a6801abcf29606e1666f17ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_5d9b936e71123a0428d0f201676a4e2b6a9abaa3a6801abcf29606e1666f17ea->enter($__internal_5d9b936e71123a0428d0f201676a4e2b6a9abaa3a6801abcf29606e1666f17ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "create"));

            $__internal_6c9521b8cdeba0031bcd68c43c62c2d1e34391415a493fbd45e6c56e9c0ed156 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_6c9521b8cdeba0031bcd68c43c62c2d1e34391415a493fbd45e6c56e9c0ed156->enter($__internal_6c9521b8cdeba0031bcd68c43c62c2d1e34391415a493fbd45e6c56e9c0ed156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "create"));

            // line 14
            echo "<a href=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
            echo "\" class=\"btn btn-primary\">
    <i class=\"glyphicon glyphicon-plus-sign\"></i><span>";
            // line 15
            echo twig_escape_filter($this->env, ((twig_test_empty(($context["message"] ?? $this->getContext($context, "message")))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.create")) : (($context["message"] ?? $this->getContext($context, "message")))), "html", null, true);
            echo "</span>
</a>
";
            
            $__internal_6c9521b8cdeba0031bcd68c43c62c2d1e34391415a493fbd45e6c56e9c0ed156->leave($__internal_6c9521b8cdeba0031bcd68c43c62c2d1e34391415a493fbd45e6c56e9c0ed156_prof);

            
            $__internal_5d9b936e71123a0428d0f201676a4e2b6a9abaa3a6801abcf29606e1666f17ea->leave($__internal_5d9b936e71123a0428d0f201676a4e2b6a9abaa3a6801abcf29606e1666f17ea_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 19
    public function getedit($__url__ = null, $__message__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "message" => $__message__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_1186642dbd0831629a14deeda5072cbc1be7a10cf27152c84ae923854342b31b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_1186642dbd0831629a14deeda5072cbc1be7a10cf27152c84ae923854342b31b->enter($__internal_1186642dbd0831629a14deeda5072cbc1be7a10cf27152c84ae923854342b31b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "edit"));

            $__internal_0a3dc67d09bdbc7c712f548a415e30b5b5a5bbeaada711e46e69df93f33fc46e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_0a3dc67d09bdbc7c712f548a415e30b5b5a5bbeaada711e46e69df93f33fc46e->enter($__internal_0a3dc67d09bdbc7c712f548a415e30b5b5a5bbeaada711e46e69df93f33fc46e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "edit"));

            // line 20
            echo "<a href=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
            echo "\" class=\"btn btn-primary\">
    <i class=\"glyphicon glyphicon-pencil\"></i><span>";
            // line 21
            echo twig_escape_filter($this->env, ((twig_test_empty(($context["message"] ?? $this->getContext($context, "message")))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.edit")) : (($context["message"] ?? $this->getContext($context, "message")))), "html", null, true);
            echo "</span>
</a>
";
            
            $__internal_0a3dc67d09bdbc7c712f548a415e30b5b5a5bbeaada711e46e69df93f33fc46e->leave($__internal_0a3dc67d09bdbc7c712f548a415e30b5b5a5bbeaada711e46e69df93f33fc46e_prof);

            
            $__internal_1186642dbd0831629a14deeda5072cbc1be7a10cf27152c84ae923854342b31b->leave($__internal_1186642dbd0831629a14deeda5072cbc1be7a10cf27152c84ae923854342b31b_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 25
    public function getdelete($__url__ = null, $__message__ = null, $__disabled__ = false, $__modal__ = true, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "message" => $__message__,
            "disabled" => $__disabled__,
            "modal" => $__modal__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_8d04c22cc3a32ed0b8d031937db0141bfa4b63c8f98416f2962049ea57786c7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_8d04c22cc3a32ed0b8d031937db0141bfa4b63c8f98416f2962049ea57786c7b->enter($__internal_8d04c22cc3a32ed0b8d031937db0141bfa4b63c8f98416f2962049ea57786c7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "delete"));

            $__internal_5e4c446b07d20e89cff6d34d24ac7cb534bf633ac7cc7257e863f307ae0c3ca9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_5e4c446b07d20e89cff6d34d24ac7cb534bf633ac7cc7257e863f307ae0c3ca9->enter($__internal_5e4c446b07d20e89cff6d34d24ac7cb534bf633ac7cc7257e863f307ae0c3ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "delete"));

            // line 26
            if (($context["disabled"] ?? $this->getContext($context, "disabled"))) {
                // line 27
                echo "<span class=\"btn btn-danger disabled\">
    <i class=\"glyphicon glyphicon-trash\"></i><span>";
                // line 28
                echo twig_escape_filter($this->env, ((twig_test_empty(($context["message"] ?? $this->getContext($context, "message")))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.delete")) : (($context["message"] ?? $this->getContext($context, "message")))), "html", null, true);
                echo "</span>
</span>
";
            } else {
                // line 31
                echo "<form action=\"";
                echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
                echo "\" method=\"post\" class=\"delete-action-form\" novalidate>
    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
    <button class=\"btn btn-danger";
                // line 33
                if (($context["modal"] ?? $this->getContext($context, "modal"))) {
                    echo " btn-confirm";
                }
                echo "\" type=\"submit\">
        <i class=\"glyphicon glyphicon-trash\"></i> <span>";
                // line 34
                echo twig_escape_filter($this->env, ((twig_test_empty(($context["message"] ?? $this->getContext($context, "message")))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.delete")) : (($context["message"] ?? $this->getContext($context, "message")))), "html", null, true);
                echo "</span>
    </button>
</form>
";
            }
            
            $__internal_5e4c446b07d20e89cff6d34d24ac7cb534bf633ac7cc7257e863f307ae0c3ca9->leave($__internal_5e4c446b07d20e89cff6d34d24ac7cb534bf633ac7cc7257e863f307ae0c3ca9_prof);

            
            $__internal_8d04c22cc3a32ed0b8d031937db0141bfa4b63c8f98416f2962049ea57786c7b->leave($__internal_8d04c22cc3a32ed0b8d031937db0141bfa4b63c8f98416f2962049ea57786c7b_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 40
    public function getmanage($__url__ = null, $__message__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "message" => $__message__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_08b8f0dd85ac9d03d681f4a4359729d44e505ada7992ca6c8616f672d66dc782 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_08b8f0dd85ac9d03d681f4a4359729d44e505ada7992ca6c8616f672d66dc782->enter($__internal_08b8f0dd85ac9d03d681f4a4359729d44e505ada7992ca6c8616f672d66dc782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "manage"));

            $__internal_c1887245d237fdea856b16a28d7ae8401b8301b0d662018b016516dad92ab86b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_c1887245d237fdea856b16a28d7ae8401b8301b0d662018b016516dad92ab86b->enter($__internal_c1887245d237fdea856b16a28d7ae8401b8301b0d662018b016516dad92ab86b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "manage"));

            // line 41
            echo "<a href=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
            echo "\" class=\"btn btn-success\">
    <i class=\"glyphicon glyphicon-folder-open\"></i><span>";
            // line 42
            echo twig_escape_filter($this->env, ((twig_test_empty(($context["message"] ?? $this->getContext($context, "message")))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.manage")) : (($context["message"] ?? $this->getContext($context, "message")))), "html", null, true);
            echo "</span>
</a>
";
            
            $__internal_c1887245d237fdea856b16a28d7ae8401b8301b0d662018b016516dad92ab86b->leave($__internal_c1887245d237fdea856b16a28d7ae8401b8301b0d662018b016516dad92ab86b_prof);

            
            $__internal_08b8f0dd85ac9d03d681f4a4359729d44e505ada7992ca6c8616f672d66dc782->leave($__internal_08b8f0dd85ac9d03d681f4a4359729d44e505ada7992ca6c8616f672d66dc782_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 46
    public function getmove($__url__ = null, $__direction__ = null, $__first__ = false, $__last__ = false, $__message__ = "", ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "direction" => $__direction__,
            "first" => $__first__,
            "last" => $__last__,
            "message" => $__message__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_a5393db3744f9cbb8eb45b253dc69bb0189f33dd97642d660d0f0919d860f978 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_a5393db3744f9cbb8eb45b253dc69bb0189f33dd97642d660d0f0919d860f978->enter($__internal_a5393db3744f9cbb8eb45b253dc69bb0189f33dd97642d660d0f0919d860f978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "move"));

            $__internal_9dcffe9e6cb5677498c11415c9f22da0d2e0e2bd7f709e5ed67d47126f64658e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_9dcffe9e6cb5677498c11415c9f22da0d2e0e2bd7f709e5ed67d47126f64658e->enter($__internal_9dcffe9e6cb5677498c11415c9f22da0d2e0e2bd7f709e5ed67d47126f64658e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "move"));

            // line 47
            echo "<form action=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
            echo "\" method=\"post\" class=\"delete-action-form\" novalidate>
    <input type=\"hidden\" name=\"_method\" value=\"PUT\">
    <button title=\"";
            // line 49
            echo twig_escape_filter($this->env, ((twig_test_empty(($context["message"] ?? $this->getContext($context, "message")))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(("sylius.ui.move_" . ($context["direction"] ?? $this->getContext($context, "direction"))))) : (($context["message"] ?? $this->getContext($context, "message")))), "html", null, true);
            echo "\" class=\"btn btn-default ";
            if (((("up" == ($context["direction"] ?? $this->getContext($context, "direction"))) && ($context["first"] ?? $this->getContext($context, "first"))) || (("down" == ($context["direction"] ?? $this->getContext($context, "direction"))) && ($context["last"] ?? $this->getContext($context, "last"))))) {
                echo "disabled";
            }
            echo "\" type=\"submit\">
        <i class=\"glyphicon glyphicon-arrow-";
            // line 50
            echo twig_escape_filter($this->env, ($context["direction"] ?? $this->getContext($context, "direction")), "html", null, true);
            echo "\"></i>
    </button>
</form>
";
            
            $__internal_9dcffe9e6cb5677498c11415c9f22da0d2e0e2bd7f709e5ed67d47126f64658e->leave($__internal_9dcffe9e6cb5677498c11415c9f22da0d2e0e2bd7f709e5ed67d47126f64658e_prof);

            
            $__internal_a5393db3744f9cbb8eb45b253dc69bb0189f33dd97642d660d0f0919d860f978->leave($__internal_a5393db3744f9cbb8eb45b253dc69bb0189f33dd97642d660d0f0919d860f978_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 55
    public function getpatch($__url__ = null, $__message__ = null, $__icon__ = null, $__button__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "message" => $__message__,
            "icon" => $__icon__,
            "button" => $__button__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_4c87c377639184361a0555d9622976c9716ec9bdfa6549235d376628bbdeb9d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_4c87c377639184361a0555d9622976c9716ec9bdfa6549235d376628bbdeb9d7->enter($__internal_4c87c377639184361a0555d9622976c9716ec9bdfa6549235d376628bbdeb9d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "patch"));

            $__internal_4a8eda98c2f215708a9cfc0e570d763c5e7ac95249b28f6f891324094e7e9683 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_4a8eda98c2f215708a9cfc0e570d763c5e7ac95249b28f6f891324094e7e9683->enter($__internal_4a8eda98c2f215708a9cfc0e570d763c5e7ac95249b28f6f891324094e7e9683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "patch"));

            // line 56
            echo "<form action=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
            echo "\" method=\"post\" class=\"delete-action-form\" novalidate>
    <input type=\"hidden\" name=\"_method\" value=\"PATCH\">
    <button class=\"btn btn-";
            // line 58
            echo twig_escape_filter($this->env, ((array_key_exists("button", $context)) ? (_twig_default_filter(($context["button"] ?? $this->getContext($context, "button")), "success")) : ("success")), "html", null, true);
            echo "\" type=\"submit\">
        <i class=\"glyphicon glyphicon-";
            // line 59
            echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter(($context["icon"] ?? $this->getContext($context, "icon")), "transfer")) : ("transfer")), "html", null, true);
            echo "\"></i> <span>";
            echo twig_escape_filter($this->env, ($context["message"] ?? $this->getContext($context, "message")), "html", null, true);
            echo "</span>
    </button>
</form>
";
            
            $__internal_4a8eda98c2f215708a9cfc0e570d763c5e7ac95249b28f6f891324094e7e9683->leave($__internal_4a8eda98c2f215708a9cfc0e570d763c5e7ac95249b28f6f891324094e7e9683_prof);

            
            $__internal_4c87c377639184361a0555d9622976c9716ec9bdfa6549235d376628bbdeb9d7->leave($__internal_4c87c377639184361a0555d9622976c9716ec9bdfa6549235d376628bbdeb9d7_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 64
    public function getenable($__url__ = null, $__message__ = null, $__icon__ = null, $__button__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "message" => $__message__,
            "icon" => $__icon__,
            "button" => $__button__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_7bc3abf7ca31e4b81ee52ddcaf815cd91752fa0bf5bfaca15bb4d206cab5300a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_7bc3abf7ca31e4b81ee52ddcaf815cd91752fa0bf5bfaca15bb4d206cab5300a->enter($__internal_7bc3abf7ca31e4b81ee52ddcaf815cd91752fa0bf5bfaca15bb4d206cab5300a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "enable"));

            $__internal_b34b17a96a49045cdfaa6321f1b2c1bca121fce61601e19198800d9de789496d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_b34b17a96a49045cdfaa6321f1b2c1bca121fce61601e19198800d9de789496d->enter($__internal_b34b17a96a49045cdfaa6321f1b2c1bca121fce61601e19198800d9de789496d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "enable"));

            // line 65
            echo "<form action=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
            echo "\" method=\"post\" class=\"delete-action-form\" novalidate>
    <input type=\"hidden\" name=\"_method\" value=\"PATCH\">
    <button class=\"btn btn-";
            // line 67
            echo twig_escape_filter($this->env, ((array_key_exists("button", $context)) ? (_twig_default_filter(($context["button"] ?? $this->getContext($context, "button")), "success")) : ("success")), "html", null, true);
            echo "\" type=\"submit\">
        <i class=\"glyphicon glyphicon-";
            // line 68
            echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter(($context["icon"] ?? $this->getContext($context, "icon")), "ok")) : ("ok")), "html", null, true);
            echo "\"></i> <span>";
            echo twig_escape_filter($this->env, ((twig_test_empty(($context["message"] ?? $this->getContext($context, "message")))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.enable")) : (($context["message"] ?? $this->getContext($context, "message")))), "html", null, true);
            echo "</span>
    </button>
</form>
";
            
            $__internal_b34b17a96a49045cdfaa6321f1b2c1bca121fce61601e19198800d9de789496d->leave($__internal_b34b17a96a49045cdfaa6321f1b2c1bca121fce61601e19198800d9de789496d_prof);

            
            $__internal_7bc3abf7ca31e4b81ee52ddcaf815cd91752fa0bf5bfaca15bb4d206cab5300a->leave($__internal_7bc3abf7ca31e4b81ee52ddcaf815cd91752fa0bf5bfaca15bb4d206cab5300a_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 73
    public function getdisable($__url__ = null, $__message__ = null, $__icon__ = null, $__button__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "message" => $__message__,
            "icon" => $__icon__,
            "button" => $__button__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_0fb9db90f8246df262bbb9b270d107f71e7fdf5b18e9992616c0514985cfbac9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_0fb9db90f8246df262bbb9b270d107f71e7fdf5b18e9992616c0514985cfbac9->enter($__internal_0fb9db90f8246df262bbb9b270d107f71e7fdf5b18e9992616c0514985cfbac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "disable"));

            $__internal_b3095bc7407d45d704faa2516e1df7c22c8c7fa6884c9d9640143a9743619c63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_b3095bc7407d45d704faa2516e1df7c22c8c7fa6884c9d9640143a9743619c63->enter($__internal_b3095bc7407d45d704faa2516e1df7c22c8c7fa6884c9d9640143a9743619c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "disable"));

            // line 74
            echo "<form action=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
            echo "\" method=\"post\" class=\"delete-action-form\" novalidate>
    <input type=\"hidden\" name=\"_method\" value=\"PATCH\">
    <button class=\"btn btn-";
            // line 76
            echo twig_escape_filter($this->env, ((array_key_exists("button", $context)) ? (_twig_default_filter(($context["button"] ?? $this->getContext($context, "button")), "danger")) : ("danger")), "html", null, true);
            echo "\" type=\"submit\">
        <i class=\"glyphicon glyphicon-";
            // line 77
            echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter(($context["icon"] ?? $this->getContext($context, "icon")), "remove")) : ("remove")), "html", null, true);
            echo "\"></i> <span>";
            echo twig_escape_filter($this->env, ((twig_test_empty(($context["message"] ?? $this->getContext($context, "message")))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.disable")) : (($context["message"] ?? $this->getContext($context, "message")))), "html", null, true);
            echo "</span>
    </button>
</form>
";
            
            $__internal_b3095bc7407d45d704faa2516e1df7c22c8c7fa6884c9d9640143a9743619c63->leave($__internal_b3095bc7407d45d704faa2516e1df7c22c8c7fa6884c9d9640143a9743619c63_prof);

            
            $__internal_0fb9db90f8246df262bbb9b270d107f71e7fdf5b18e9992616c0514985cfbac9->leave($__internal_0fb9db90f8246df262bbb9b270d107f71e7fdf5b18e9992616c0514985cfbac9_prof);

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
        return "SyliusResourceBundle:Macros:buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  585 => 77,  581 => 76,  575 => 74,  554 => 73,  527 => 68,  523 => 67,  517 => 65,  496 => 64,  469 => 59,  465 => 58,  459 => 56,  438 => 55,  413 => 50,  405 => 49,  399 => 47,  377 => 46,  353 => 42,  348 => 41,  329 => 40,  303 => 34,  297 => 33,  291 => 31,  285 => 28,  282 => 27,  280 => 26,  259 => 25,  235 => 21,  230 => 20,  211 => 19,  187 => 15,  182 => 14,  163 => 13,  133 => 9,  128 => 8,  108 => 7,  84 => 3,  79 => 2,  60 => 1,  49 => 72,  46 => 63,  43 => 54,  40 => 45,  37 => 39,  34 => 24,  31 => 18,  28 => 12,  25 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro show(url, message) %}
<a href=\"{{ url }}\" class=\"btn btn-default\">
   <i class=\"glyphicon glyphicon-book\"></i><span>{{ message is empty ? 'sylius.ui.details'|trans : message }}</span>
</a>
{% endmacro %}

{% macro generic(url, message, icon) %}
<a href=\"{{ url }}\" class=\"btn btn-default\">
    {% if icon is not empty %}<i class=\"glyphicon glyphicon-{{ icon }}\"></i>{% endif %}<span>{{ message }}</span>
</a>
{% endmacro %}

{% macro create(url, message) %}
<a href=\"{{ url }}\" class=\"btn btn-primary\">
    <i class=\"glyphicon glyphicon-plus-sign\"></i><span>{{ message is empty ? 'sylius.ui.create'|trans : message }}</span>
</a>
{% endmacro %}

{% macro edit(url, message) %}
<a href=\"{{ url }}\" class=\"btn btn-primary\">
    <i class=\"glyphicon glyphicon-pencil\"></i><span>{{ message is empty ? 'sylius.ui.edit'|trans : message }}</span>
</a>
{% endmacro %}

{% macro delete(url, message, disabled=false, modal=true) %}
{% if disabled %}
<span class=\"btn btn-danger disabled\">
    <i class=\"glyphicon glyphicon-trash\"></i><span>{{ message is empty ? 'sylius.ui.delete'|trans : message }}</span>
</span>
{% else %}
<form action=\"{{ url }}\" method=\"post\" class=\"delete-action-form\" novalidate>
    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
    <button class=\"btn btn-danger{% if modal %} btn-confirm{% endif %}\" type=\"submit\">
        <i class=\"glyphicon glyphicon-trash\"></i> <span>{{ message is empty ? 'sylius.ui.delete'|trans : message }}</span>
    </button>
</form>
{% endif %}
{% endmacro %}

{% macro manage(url, message) %}
<a href=\"{{ url }}\" class=\"btn btn-success\">
    <i class=\"glyphicon glyphicon-folder-open\"></i><span>{{ message is empty ? 'sylius.ui.manage'|trans : message }}</span>
</a>
{% endmacro %}

{% macro move(url, direction, first=false, last=false, message='') %}
<form action=\"{{ url }}\" method=\"post\" class=\"delete-action-form\" novalidate>
    <input type=\"hidden\" name=\"_method\" value=\"PUT\">
    <button title=\"{{ message is empty ? ('sylius.ui.move_'~direction)|trans : message }}\" class=\"btn btn-default {% if ('up' == direction and first) or ('down' == direction and last) %}disabled{% endif %}\" type=\"submit\">
        <i class=\"glyphicon glyphicon-arrow-{{ direction }}\"></i>
    </button>
</form>
{% endmacro %}

{% macro patch(url, message, icon, button) %}
<form action=\"{{ url }}\" method=\"post\" class=\"delete-action-form\" novalidate>
    <input type=\"hidden\" name=\"_method\" value=\"PATCH\">
    <button class=\"btn btn-{{ button|default('success') }}\" type=\"submit\">
        <i class=\"glyphicon glyphicon-{{ icon|default('transfer') }}\"></i> <span>{{ message }}</span>
    </button>
</form>
{% endmacro %}

{% macro enable(url, message, icon, button) %}
<form action=\"{{ url }}\" method=\"post\" class=\"delete-action-form\" novalidate>
    <input type=\"hidden\" name=\"_method\" value=\"PATCH\">
    <button class=\"btn btn-{{ button|default('success') }}\" type=\"submit\">
        <i class=\"glyphicon glyphicon-{{ icon|default('ok') }}\"></i> <span>{{ message is empty ? 'sylius.ui.enable'|trans : message }}</span>
    </button>
</form>
{% endmacro %}

{% macro disable(url, message, icon, button) %}
<form action=\"{{ url }}\" method=\"post\" class=\"delete-action-form\" novalidate>
    <input type=\"hidden\" name=\"_method\" value=\"PATCH\">
    <button class=\"btn btn-{{ button|default('danger') }}\" type=\"submit\">
        <i class=\"glyphicon glyphicon-{{ icon|default('remove') }}\"></i> <span>{{ message is empty ? 'sylius.ui.disable'|trans : message }}</span>
    </button>
</form>
{% endmacro %}
", "SyliusResourceBundle:Macros:buttons.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ResourceBundle/Resources/views/Macros/buttons.html.twig");
    }
}

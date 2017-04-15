<?php

/* SyliusResourceBundle:Macros:notification.html.twig */
class __TwigTemplate_446375a799753916033d44dee8859c537835b63a7529dd9efc265d8cda52663c extends Twig_Template
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
        $__internal_533f89eec85fe0d315740b452c7b99c723ef6382e3048d2c3105b888d94c87e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_533f89eec85fe0d315740b452c7b99c723ef6382e3048d2c3105b888d94c87e8->enter($__internal_533f89eec85fe0d315740b452c7b99c723ef6382e3048d2c3105b888d94c87e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusResourceBundle:Macros:notification.html.twig"));

        $__internal_8bd3cd832fc415c5c9d219097d63442072928b058a86f37c263765b23222ea0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bd3cd832fc415c5c9d219097d63442072928b058a86f37c263765b23222ea0c->enter($__internal_8bd3cd832fc415c5c9d219097d63442072928b058a86f37c263765b23222ea0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusResourceBundle:Macros:notification.html.twig"));

        // line 13
        echo "

";
        // line 41
        echo "
";
        // line 45
        echo "
";
        // line 49
        echo "
";
        // line 53
        echo "
";
        // line 57
        echo "
";
        
        $__internal_533f89eec85fe0d315740b452c7b99c723ef6382e3048d2c3105b888d94c87e8->leave($__internal_533f89eec85fe0d315740b452c7b99c723ef6382e3048d2c3105b888d94c87e8_prof);

        
        $__internal_8bd3cd832fc415c5c9d219097d63442072928b058a86f37c263765b23222ea0c->leave($__internal_8bd3cd832fc415c5c9d219097d63442072928b058a86f37c263765b23222ea0c_prof);

    }

    // line 2
    public function getflashes(...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_72882d9799174f7fc4167a333aec54757dcc45e210e00127ba8efe2fdaacc9e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_72882d9799174f7fc4167a333aec54757dcc45e210e00127ba8efe2fdaacc9e0->enter($__internal_72882d9799174f7fc4167a333aec54757dcc45e210e00127ba8efe2fdaacc9e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "flashes"));

            $__internal_9dce0a6239d775ebaed7597ba60769d404bfc293e4516da16e9f163719d13e0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_9dce0a6239d775ebaed7597ba60769d404bfc293e4516da16e9f163719d13e0b->enter($__internal_9dce0a6239d775ebaed7597ba60769d404bfc293e4516da16e9f163719d13e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "flashes"));

            // line 3
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
            foreach ($context['_seq'] as $context["type"] => $context["flashes"]) {
                // line 4
                echo "        <div id=\"flashesMessage\" class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
            <ul class=\"list-unstyled\">
                ";
                // line 6
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["flashes"]);
                foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                    // line 7
                    echo "                    <li>";
                    echo twig_escape_filter($this->env, $context["flash"], "html", null, true);
                    echo "</li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 9
                echo "            </ul>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['flashes'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_9dce0a6239d775ebaed7597ba60769d404bfc293e4516da16e9f163719d13e0b->leave($__internal_9dce0a6239d775ebaed7597ba60769d404bfc293e4516da16e9f163719d13e0b_prof);

            
            $__internal_72882d9799174f7fc4167a333aec54757dcc45e210e00127ba8efe2fdaacc9e0->leave($__internal_72882d9799174f7fc4167a333aec54757dcc45e210e00127ba8efe2fdaacc9e0_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 20
    public function getalert($__text__ = null, $__type__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "type" => $__type__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_0d4b4288e4c76bab54f501b78f13b1edb0a973158768f7978433074942f8fbb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_0d4b4288e4c76bab54f501b78f13b1edb0a973158768f7978433074942f8fbb0->enter($__internal_0d4b4288e4c76bab54f501b78f13b1edb0a973158768f7978433074942f8fbb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "alert"));

            $__internal_0c65bcafac72ce758cb10a02cc7355b0890ec8c9e9913e1c92c01da39de028aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_0c65bcafac72ce758cb10a02cc7355b0890ec8c9e9913e1c92c01da39de028aa->enter($__internal_0c65bcafac72ce758cb10a02cc7355b0890ec8c9e9913e1c92c01da39de028aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "alert"));

            // line 21
            echo "    ";
            $context["type"] = ("alert-" . ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "info")) : ("info")));
            // line 22
            echo "
    ";
            // line 23
            if (((array_key_exists("text", $context)) ? (_twig_default_filter(($context["text"] ?? $this->getContext($context, "text")))) : (""))) {
                // line 24
                echo "    <div class=\"alert ";
                echo twig_escape_filter($this->env, ($context["type"] ?? $this->getContext($context, "type")), "html", null, true);
                echo "\">
        ";
                // line 25
                if (twig_test_iterable(($context["text"] ?? $this->getContext($context, "text")))) {
                    // line 26
                    echo "            <ul class=\"form-type-errors list-unstyled\">
                ";
                    // line 27
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["text"] ?? $this->getContext($context, "text")));
                    foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                        // line 28
                        echo "                    <li>
                        <p class=\"text-";
                        // line 29
                        echo twig_escape_filter($this->env, ($context["type"] ?? $this->getContext($context, "type")), "html", null, true);
                        echo "\">
                            ";
                        // line 30
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["line"], "message", array()), $this->getAttribute($context["line"], "messageParameters", array())), "html", null, true);
                        echo "
                        </p>
                    </li>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 34
                    echo "            </ul>
        ";
                } else {
                    // line 36
                    echo "            ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["text"] ?? $this->getContext($context, "text"))), "html", null, true);
                    echo "
        ";
                }
                // line 38
                echo "    </div>
    ";
            }
            
            $__internal_0c65bcafac72ce758cb10a02cc7355b0890ec8c9e9913e1c92c01da39de028aa->leave($__internal_0c65bcafac72ce758cb10a02cc7355b0890ec8c9e9913e1c92c01da39de028aa_prof);

            
            $__internal_0d4b4288e4c76bab54f501b78f13b1edb0a973158768f7978433074942f8fbb0->leave($__internal_0d4b4288e4c76bab54f501b78f13b1edb0a973158768f7978433074942f8fbb0_prof);

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
    public function getdanger($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_f8406529c85ad3407e16478df3e574389bdf1a6e108563e311364d2174d16036 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_f8406529c85ad3407e16478df3e574389bdf1a6e108563e311364d2174d16036->enter($__internal_f8406529c85ad3407e16478df3e574389bdf1a6e108563e311364d2174d16036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "danger"));

            $__internal_29da37467c03337de71e9809b300c5c8c80d2e859b31741c4c31fe24e9b274b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_29da37467c03337de71e9809b300c5c8c80d2e859b31741c4c31fe24e9b274b5->enter($__internal_29da37467c03337de71e9809b300c5c8c80d2e859b31741c4c31fe24e9b274b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "danger"));

            // line 43
            echo "    ";
            echo $this->getAttribute($this, "alert", array(0 => ($context["text"] ?? $this->getContext($context, "text")), 1 => "danger"), "method");
            echo "
";
            
            $__internal_29da37467c03337de71e9809b300c5c8c80d2e859b31741c4c31fe24e9b274b5->leave($__internal_29da37467c03337de71e9809b300c5c8c80d2e859b31741c4c31fe24e9b274b5_prof);

            
            $__internal_f8406529c85ad3407e16478df3e574389bdf1a6e108563e311364d2174d16036->leave($__internal_f8406529c85ad3407e16478df3e574389bdf1a6e108563e311364d2174d16036_prof);

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
    public function geterror($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_b86d97a65d936614b5c0ef857549a5ddcc35020825f8c1e7aaf22ec0af918b31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_b86d97a65d936614b5c0ef857549a5ddcc35020825f8c1e7aaf22ec0af918b31->enter($__internal_b86d97a65d936614b5c0ef857549a5ddcc35020825f8c1e7aaf22ec0af918b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "error"));

            $__internal_f765de391fa0fe0b3a868af9b2ebbf1baf90122c9f49ffd7118a54d62ea5d07e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_f765de391fa0fe0b3a868af9b2ebbf1baf90122c9f49ffd7118a54d62ea5d07e->enter($__internal_f765de391fa0fe0b3a868af9b2ebbf1baf90122c9f49ffd7118a54d62ea5d07e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "error"));

            // line 47
            echo "    ";
            echo $this->getAttribute($this, "danger", array(0 => ($context["text"] ?? $this->getContext($context, "text"))), "method");
            echo "
";
            
            $__internal_f765de391fa0fe0b3a868af9b2ebbf1baf90122c9f49ffd7118a54d62ea5d07e->leave($__internal_f765de391fa0fe0b3a868af9b2ebbf1baf90122c9f49ffd7118a54d62ea5d07e_prof);

            
            $__internal_b86d97a65d936614b5c0ef857549a5ddcc35020825f8c1e7aaf22ec0af918b31->leave($__internal_b86d97a65d936614b5c0ef857549a5ddcc35020825f8c1e7aaf22ec0af918b31_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 50
    public function getwarning($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_e594abfe2c75ddd3fa8d896017dc6185ddf213eae72fd6284a5592b79ee41ecf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_e594abfe2c75ddd3fa8d896017dc6185ddf213eae72fd6284a5592b79ee41ecf->enter($__internal_e594abfe2c75ddd3fa8d896017dc6185ddf213eae72fd6284a5592b79ee41ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "warning"));

            $__internal_6591ca99a316e9827e7af4791514c29d6507d0ea00d15dc3264ff0a6952b5a8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_6591ca99a316e9827e7af4791514c29d6507d0ea00d15dc3264ff0a6952b5a8b->enter($__internal_6591ca99a316e9827e7af4791514c29d6507d0ea00d15dc3264ff0a6952b5a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "warning"));

            // line 51
            echo "    ";
            echo $this->getAttribute($this, "alert", array(0 => ($context["text"] ?? $this->getContext($context, "text")), 1 => "warning"), "method");
            echo "
";
            
            $__internal_6591ca99a316e9827e7af4791514c29d6507d0ea00d15dc3264ff0a6952b5a8b->leave($__internal_6591ca99a316e9827e7af4791514c29d6507d0ea00d15dc3264ff0a6952b5a8b_prof);

            
            $__internal_e594abfe2c75ddd3fa8d896017dc6185ddf213eae72fd6284a5592b79ee41ecf->leave($__internal_e594abfe2c75ddd3fa8d896017dc6185ddf213eae72fd6284a5592b79ee41ecf_prof);

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
    public function getsuccess($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_e9fb82103d177474557db36a573c31390333033c94e240ee14fd6a8aaedea88b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_e9fb82103d177474557db36a573c31390333033c94e240ee14fd6a8aaedea88b->enter($__internal_e9fb82103d177474557db36a573c31390333033c94e240ee14fd6a8aaedea88b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "success"));

            $__internal_9c0efff5f1ff24c516c77113ceca8788d77eeb8a2d6b635747fd594c0ab2fd7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_9c0efff5f1ff24c516c77113ceca8788d77eeb8a2d6b635747fd594c0ab2fd7b->enter($__internal_9c0efff5f1ff24c516c77113ceca8788d77eeb8a2d6b635747fd594c0ab2fd7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "success"));

            // line 55
            echo "    ";
            echo $this->getAttribute($this, "alert", array(0 => ($context["text"] ?? $this->getContext($context, "text")), 1 => "success"), "method");
            echo "
";
            
            $__internal_9c0efff5f1ff24c516c77113ceca8788d77eeb8a2d6b635747fd594c0ab2fd7b->leave($__internal_9c0efff5f1ff24c516c77113ceca8788d77eeb8a2d6b635747fd594c0ab2fd7b_prof);

            
            $__internal_e9fb82103d177474557db36a573c31390333033c94e240ee14fd6a8aaedea88b->leave($__internal_e9fb82103d177474557db36a573c31390333033c94e240ee14fd6a8aaedea88b_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 58
    public function getinfo($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_49e129e50231623f54611f6d4842f9d90f673d8532ba710cde7cae080e18f03c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_49e129e50231623f54611f6d4842f9d90f673d8532ba710cde7cae080e18f03c->enter($__internal_49e129e50231623f54611f6d4842f9d90f673d8532ba710cde7cae080e18f03c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "info"));

            $__internal_463cc4b9cae9d2e5599593c064b8acbb503c5d9c6be45758657d9fdaec8bc158 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_463cc4b9cae9d2e5599593c064b8acbb503c5d9c6be45758657d9fdaec8bc158->enter($__internal_463cc4b9cae9d2e5599593c064b8acbb503c5d9c6be45758657d9fdaec8bc158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "info"));

            // line 59
            echo "    ";
            echo $this->getAttribute($this, "alert", array(0 => ($context["text"] ?? $this->getContext($context, "text")), 1 => "info"), "method");
            echo "
";
            
            $__internal_463cc4b9cae9d2e5599593c064b8acbb503c5d9c6be45758657d9fdaec8bc158->leave($__internal_463cc4b9cae9d2e5599593c064b8acbb503c5d9c6be45758657d9fdaec8bc158_prof);

            
            $__internal_49e129e50231623f54611f6d4842f9d90f673d8532ba710cde7cae080e18f03c->leave($__internal_49e129e50231623f54611f6d4842f9d90f673d8532ba710cde7cae080e18f03c_prof);

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
        return "SyliusResourceBundle:Macros:notification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  397 => 59,  379 => 58,  355 => 55,  337 => 54,  313 => 51,  295 => 50,  271 => 47,  253 => 46,  229 => 43,  211 => 42,  188 => 38,  182 => 36,  178 => 34,  168 => 30,  164 => 29,  161 => 28,  157 => 27,  154 => 26,  152 => 25,  147 => 24,  145 => 23,  142 => 22,  139 => 21,  120 => 20,  93 => 9,  84 => 7,  80 => 6,  74 => 4,  69 => 3,  52 => 2,  41 => 57,  38 => 53,  35 => 49,  32 => 45,  29 => 41,  25 => 13,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Display all the flashes messages #}
{% macro flashes() %}
    {% for type, flashes in app.session.flashBag.all %}
        <div id=\"flashesMessage\" class=\"alert alert-{{ type }}\">
            <ul class=\"list-unstyled\">
                {% for flash in flashes %}
                    <li>{{ flash }}</li>
                {% endfor %}
            </ul>
        </div>
    {% endfor %}
{% endmacro %}


{#
    Display a bootstrap alert :
    - text : Message to print (string or array)
    - type : danger | warning | success | info (Default : info)
#}
{% macro alert(text, type) %}
    {% set type = 'alert-' ~ type|default('info') %}

    {% if text|default %}
    <div class=\"alert {{ type }}\">
        {% if text is iterable %}
            <ul class=\"form-type-errors list-unstyled\">
                {% for line in text %}
                    <li>
                        <p class=\"text-{{ type }}\">
                            {{ line.message|trans(line.messageParameters) }}
                        </p>
                    </li>
                {% endfor %}
            </ul>
        {% else %}
            {{ text|trans }}
        {% endif %}
    </div>
    {% endif %}
{% endmacro %}

{% macro danger(text) %}
    {{ _self.alert(text, 'danger') }}
{% endmacro %}

{% macro error(text) %}
    {{ _self.danger(text) }}
{% endmacro %}

{% macro warning(text) %}
    {{ _self.alert(text, 'warning') }}
{% endmacro %}

{% macro success(text) %}
    {{ _self.alert(text, 'success') }}
{% endmacro %}

{% macro info(text) %}
    {{ _self.alert(text, 'info') }}
{% endmacro %}
", "SyliusResourceBundle:Macros:notification.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ResourceBundle/Resources/views/Macros/notification.html.twig");
    }
}

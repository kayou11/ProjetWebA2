<?php

/* SyliusUiBundle:Macro:labels.html.twig */
class __TwigTemplate_8a8f1194f0f60d925f830e75e2c29a0ff39f28e77fdbd1c431340a7e1220f92a extends Twig_Template
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
        $__internal_3e00e1009e7a7551f4f8a1d5183e6bb919d2face6d5cc1511dfbda0795dcd00a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e00e1009e7a7551f4f8a1d5183e6bb919d2face6d5cc1511dfbda0795dcd00a->enter($__internal_3e00e1009e7a7551f4f8a1d5183e6bb919d2face6d5cc1511dfbda0795dcd00a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Macro:labels.html.twig"));

        $__internal_cbfd8ef3df9c84675ec98b6ce927c8164a5688f2b5e2d8c3ee7ddbc29f17592b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbfd8ef3df9c84675ec98b6ce927c8164a5688f2b5e2d8c3ee7ddbc29f17592b->enter($__internal_cbfd8ef3df9c84675ec98b6ce927c8164a5688f2b5e2d8c3ee7ddbc29f17592b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Macro:labels.html.twig"));

        // line 4
        echo "
";
        // line 14
        echo "
";
        // line 21
        echo "
";
        // line 28
        echo "
";
        // line 38
        echo "
";
        // line 45
        echo "
";
        
        $__internal_3e00e1009e7a7551f4f8a1d5183e6bb919d2face6d5cc1511dfbda0795dcd00a->leave($__internal_3e00e1009e7a7551f4f8a1d5183e6bb919d2face6d5cc1511dfbda0795dcd00a_prof);

        
        $__internal_cbfd8ef3df9c84675ec98b6ce927c8164a5688f2b5e2d8c3ee7ddbc29f17592b->leave($__internal_cbfd8ef3df9c84675ec98b6ce927c8164a5688f2b5e2d8c3ee7ddbc29f17592b_prof);

    }

    // line 1
    public function getdefault($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_79af3ef2df4c53bc5c7a75fcc47f48a9e70767f0971fa32e3408e59dd849b89e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_79af3ef2df4c53bc5c7a75fcc47f48a9e70767f0971fa32e3408e59dd849b89e->enter($__internal_79af3ef2df4c53bc5c7a75fcc47f48a9e70767f0971fa32e3408e59dd849b89e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "default"));

            $__internal_b5c2940b178840c40932171a24f05a2bbb51c9546309996b38248a947881762e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_b5c2940b178840c40932171a24f05a2bbb51c9546309996b38248a947881762e->enter($__internal_b5c2940b178840c40932171a24f05a2bbb51c9546309996b38248a947881762e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "default"));

            // line 2
            echo "    <span class=\"ui label\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["text"] ?? $this->getContext($context, "text"))), "html", null, true);
            echo "</span>
";
            
            $__internal_b5c2940b178840c40932171a24f05a2bbb51c9546309996b38248a947881762e->leave($__internal_b5c2940b178840c40932171a24f05a2bbb51c9546309996b38248a947881762e_prof);

            
            $__internal_79af3ef2df4c53bc5c7a75fcc47f48a9e70767f0971fa32e3408e59dd849b89e->leave($__internal_79af3ef2df4c53bc5c7a75fcc47f48a9e70767f0971fa32e3408e59dd849b89e_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 5
    public function getstatus($__status__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "status" => $__status__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_f843af2508d7a440f79a0c66548d55063059c1da2504b65a366a1fd2c4bb45c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_f843af2508d7a440f79a0c66548d55063059c1da2504b65a366a1fd2c4bb45c5->enter($__internal_f843af2508d7a440f79a0c66548d55063059c1da2504b65a366a1fd2c4bb45c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "status"));

            $__internal_f8b91f12e0318edfcb96a0e26b12216162bdaf89e4953d661a3b2829eb16e9c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_f8b91f12e0318edfcb96a0e26b12216162bdaf89e4953d661a3b2829eb16e9c3->enter($__internal_f8b91f12e0318edfcb96a0e26b12216162bdaf89e4953d661a3b2829eb16e9c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "status"));

            // line 6
            echo "    ";
            $context["labels"] = $this;
            // line 7
            echo "
    ";
            // line 8
            if (($context["status"] ?? $this->getContext($context, "status"))) {
                // line 9
                echo "        ";
                echo $context["labels"]->getenabled();
                echo "
    ";
            } else {
                // line 11
                echo "        ";
                echo $context["labels"]->getdisabled();
                echo "
    ";
            }
            
            $__internal_f8b91f12e0318edfcb96a0e26b12216162bdaf89e4953d661a3b2829eb16e9c3->leave($__internal_f8b91f12e0318edfcb96a0e26b12216162bdaf89e4953d661a3b2829eb16e9c3_prof);

            
            $__internal_f843af2508d7a440f79a0c66548d55063059c1da2504b65a366a1fd2c4bb45c5->leave($__internal_f843af2508d7a440f79a0c66548d55063059c1da2504b65a366a1fd2c4bb45c5_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 15
    public function getenabled(...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_7ea9ea791e52b0b03fee72c8ef05d77fd9c42b53b58f4afb9f699e12435bf4a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_7ea9ea791e52b0b03fee72c8ef05d77fd9c42b53b58f4afb9f699e12435bf4a9->enter($__internal_7ea9ea791e52b0b03fee72c8ef05d77fd9c42b53b58f4afb9f699e12435bf4a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "enabled"));

            $__internal_4fbe78a2c930dcba7e39c9f9a5aab6888039e6a748f04ef56f32732ccb5aa72e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_4fbe78a2c930dcba7e39c9f9a5aab6888039e6a748f04ef56f32732ccb5aa72e->enter($__internal_4fbe78a2c930dcba7e39c9f9a5aab6888039e6a748f04ef56f32732ccb5aa72e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "enabled"));

            // line 16
            echo "    <span class=\"ui teal label\">
        <i class=\"checkmark icon\"></i>
        ";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.enabled"), "html", null, true);
            echo "
    </span>
";
            
            $__internal_4fbe78a2c930dcba7e39c9f9a5aab6888039e6a748f04ef56f32732ccb5aa72e->leave($__internal_4fbe78a2c930dcba7e39c9f9a5aab6888039e6a748f04ef56f32732ccb5aa72e_prof);

            
            $__internal_7ea9ea791e52b0b03fee72c8ef05d77fd9c42b53b58f4afb9f699e12435bf4a9->leave($__internal_7ea9ea791e52b0b03fee72c8ef05d77fd9c42b53b58f4afb9f699e12435bf4a9_prof);

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
    public function getdisabled(...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_54196468f762e49b959c5bc0fe57c98849f6905ad9ee9592bb3e6c754d3c2e2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_54196468f762e49b959c5bc0fe57c98849f6905ad9ee9592bb3e6c754d3c2e2a->enter($__internal_54196468f762e49b959c5bc0fe57c98849f6905ad9ee9592bb3e6c754d3c2e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "disabled"));

            $__internal_9cc95e7fa2a45c25c056af16077dfa989241d475696b92ec8e8f51d774d61e32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_9cc95e7fa2a45c25c056af16077dfa989241d475696b92ec8e8f51d774d61e32->enter($__internal_9cc95e7fa2a45c25c056af16077dfa989241d475696b92ec8e8f51d774d61e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "disabled"));

            // line 23
            echo "    <span class=\"ui red label\">
        <i class=\"remove icon\"></i>
        ";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.disabled"), "html", null, true);
            echo "
    </span>
";
            
            $__internal_9cc95e7fa2a45c25c056af16077dfa989241d475696b92ec8e8f51d774d61e32->leave($__internal_9cc95e7fa2a45c25c056af16077dfa989241d475696b92ec8e8f51d774d61e32_prof);

            
            $__internal_54196468f762e49b959c5bc0fe57c98849f6905ad9ee9592bb3e6c754d3c2e2a->leave($__internal_54196468f762e49b959c5bc0fe57c98849f6905ad9ee9592bb3e6c754d3c2e2a_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 29
    public function getyesNo($__value__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "value" => $__value__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_53f19a59264bcfd94a9313634a8cef98ab17abea0d88094cd13ea7bb04d0c720 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_53f19a59264bcfd94a9313634a8cef98ab17abea0d88094cd13ea7bb04d0c720->enter($__internal_53f19a59264bcfd94a9313634a8cef98ab17abea0d88094cd13ea7bb04d0c720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "yesNo"));

            $__internal_5b534827005eb86618f54657de174ee08da28b8026b7cbdd2a2466a528454d8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_5b534827005eb86618f54657de174ee08da28b8026b7cbdd2a2466a528454d8e->enter($__internal_5b534827005eb86618f54657de174ee08da28b8026b7cbdd2a2466a528454d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "yesNo"));

            // line 30
            echo "    ";
            $context["labels"] = $this;
            // line 31
            echo "
    ";
            // line 32
            if (($context["value"] ?? $this->getContext($context, "value"))) {
                // line 33
                echo "        ";
                echo $context["labels"]->getyes();
                echo "
    ";
            } else {
                // line 35
                echo "        ";
                echo $context["labels"]->getno();
                echo "
    ";
            }
            
            $__internal_5b534827005eb86618f54657de174ee08da28b8026b7cbdd2a2466a528454d8e->leave($__internal_5b534827005eb86618f54657de174ee08da28b8026b7cbdd2a2466a528454d8e_prof);

            
            $__internal_53f19a59264bcfd94a9313634a8cef98ab17abea0d88094cd13ea7bb04d0c720->leave($__internal_53f19a59264bcfd94a9313634a8cef98ab17abea0d88094cd13ea7bb04d0c720_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 39
    public function getyes(...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_c65c3bf6ffdfe256abc7ca6faeee22e30871f75a993a79da14eafef06df51fff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_c65c3bf6ffdfe256abc7ca6faeee22e30871f75a993a79da14eafef06df51fff->enter($__internal_c65c3bf6ffdfe256abc7ca6faeee22e30871f75a993a79da14eafef06df51fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "yes"));

            $__internal_0bed5f96a3f8ef30a76eaf795159bc54b8c560e8e98e4fb648fc18ef03a88a7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_0bed5f96a3f8ef30a76eaf795159bc54b8c560e8e98e4fb648fc18ef03a88a7a->enter($__internal_0bed5f96a3f8ef30a76eaf795159bc54b8c560e8e98e4fb648fc18ef03a88a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "yes"));

            // line 40
            echo "    <span class=\"ui basic label\">
        <i class=\"checkmark icon\"></i>
        ";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.yes_label"), "html", null, true);
            echo "
    </span>
";
            
            $__internal_0bed5f96a3f8ef30a76eaf795159bc54b8c560e8e98e4fb648fc18ef03a88a7a->leave($__internal_0bed5f96a3f8ef30a76eaf795159bc54b8c560e8e98e4fb648fc18ef03a88a7a_prof);

            
            $__internal_c65c3bf6ffdfe256abc7ca6faeee22e30871f75a993a79da14eafef06df51fff->leave($__internal_c65c3bf6ffdfe256abc7ca6faeee22e30871f75a993a79da14eafef06df51fff_prof);

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
    public function getno(...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_20d449d159040b16c5ad0839ae5a7a2d3b9078f52b821e2326146b9e4ae34f4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_20d449d159040b16c5ad0839ae5a7a2d3b9078f52b821e2326146b9e4ae34f4d->enter($__internal_20d449d159040b16c5ad0839ae5a7a2d3b9078f52b821e2326146b9e4ae34f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "no"));

            $__internal_2c7da6869a6bf6bd5a7e37845e5f1c0ae143b20c63d30f3375b66a7cdcec79ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_2c7da6869a6bf6bd5a7e37845e5f1c0ae143b20c63d30f3375b66a7cdcec79ef->enter($__internal_2c7da6869a6bf6bd5a7e37845e5f1c0ae143b20c63d30f3375b66a7cdcec79ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "no"));

            // line 47
            echo "    <span class=\"ui basic label\">
        <i class=\"remove icon\"></i>
        ";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.no_label"), "html", null, true);
            echo "
    </span>
";
            
            $__internal_2c7da6869a6bf6bd5a7e37845e5f1c0ae143b20c63d30f3375b66a7cdcec79ef->leave($__internal_2c7da6869a6bf6bd5a7e37845e5f1c0ae143b20c63d30f3375b66a7cdcec79ef_prof);

            
            $__internal_20d449d159040b16c5ad0839ae5a7a2d3b9078f52b821e2326146b9e4ae34f4d->leave($__internal_20d449d159040b16c5ad0839ae5a7a2d3b9078f52b821e2326146b9e4ae34f4d_prof);

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
        return "SyliusUiBundle:Macro:labels.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  363 => 49,  359 => 47,  342 => 46,  318 => 42,  314 => 40,  297 => 39,  272 => 35,  266 => 33,  264 => 32,  261 => 31,  258 => 30,  240 => 29,  216 => 25,  212 => 23,  195 => 22,  171 => 18,  167 => 16,  150 => 15,  125 => 11,  119 => 9,  117 => 8,  114 => 7,  111 => 6,  93 => 5,  69 => 2,  51 => 1,  40 => 45,  37 => 38,  34 => 28,  31 => 21,  28 => 14,  25 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro default(text) %}
    <span class=\"ui label\">{{ text|trans }}</span>
{% endmacro %}

{% macro status(status) %}
    {% import _self as labels %}

    {% if status %}
        {{ labels.enabled() }}
    {% else %}
        {{ labels.disabled() }}
    {% endif %}
{% endmacro %}

{% macro enabled() %}
    <span class=\"ui teal label\">
        <i class=\"checkmark icon\"></i>
        {{ 'sylius.ui.enabled'|trans }}
    </span>
{% endmacro %}

{% macro disabled() %}
    <span class=\"ui red label\">
        <i class=\"remove icon\"></i>
        {{ 'sylius.ui.disabled'|trans }}
    </span>
{% endmacro %}

{% macro yesNo(value) %}
    {% import _self as labels %}

    {% if value %}
        {{ labels.yes() }}
    {% else %}
        {{ labels.no() }}
    {% endif %}
{% endmacro %}

{% macro yes() %}
    <span class=\"ui basic label\">
        <i class=\"checkmark icon\"></i>
        {{ 'sylius.ui.yes_label'|trans }}
    </span>
{% endmacro %}

{% macro no() %}
    <span class=\"ui basic label\">
        <i class=\"remove icon\"></i>
        {{ 'sylius.ui.no_label'|trans }}
    </span>
{% endmacro %}
", "SyliusUiBundle:Macro:labels.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Macro/labels.html.twig");
    }
}

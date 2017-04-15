<?php

/* SyliusUiBundle:Macro:messages.html.twig */
class __TwigTemplate_fb2a0d167788627ab66680cdd01d74307b3e409d273aa75dbbe221661a9289b0 extends Twig_Template
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
        $__internal_c5b968d6dceb20b515719c54973df8fb49b87df9bc2c10dfb6b1e93564ec14cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5b968d6dceb20b515719c54973df8fb49b87df9bc2c10dfb6b1e93564ec14cc->enter($__internal_c5b968d6dceb20b515719c54973df8fb49b87df9bc2c10dfb6b1e93564ec14cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Macro:messages.html.twig"));

        $__internal_2b95775cd5ad05e854f9671ecd8583cbebf47661cf39f0385a887a88f02eeaa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b95775cd5ad05e854f9671ecd8583cbebf47661cf39f0385a887a88f02eeaa0->enter($__internal_2b95775cd5ad05e854f9671ecd8583cbebf47661cf39f0385a887a88f02eeaa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Macro:messages.html.twig"));

        // line 14
        echo "
";
        // line 19
        echo "
";
        // line 24
        echo "
";
        
        $__internal_c5b968d6dceb20b515719c54973df8fb49b87df9bc2c10dfb6b1e93564ec14cc->leave($__internal_c5b968d6dceb20b515719c54973df8fb49b87df9bc2c10dfb6b1e93564ec14cc_prof);

        
        $__internal_2b95775cd5ad05e854f9671ecd8583cbebf47661cf39f0385a887a88f02eeaa0->leave($__internal_2b95775cd5ad05e854f9671ecd8583cbebf47661cf39f0385a887a88f02eeaa0_prof);

    }

    // line 1
    public function getdefault($__message__ = null, $__icon__ = null, $__type__ = null, $__header__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "message" => $__message__,
            "icon" => $__icon__,
            "type" => $__type__,
            "header" => $__header__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_5097921df37946e59a3b9dd4b01113f35330df711021c86475ee2eb36cf2ef50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_5097921df37946e59a3b9dd4b01113f35330df711021c86475ee2eb36cf2ef50->enter($__internal_5097921df37946e59a3b9dd4b01113f35330df711021c86475ee2eb36cf2ef50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "default"));

            $__internal_9c05abbd6cc7d942af6e4e1d4d9d1e3e436ba5d5dd6f04d29534b97dd282d897 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_9c05abbd6cc7d942af6e4e1d4d9d1e3e436ba5d5dd6f04d29534b97dd282d897->enter($__internal_9c05abbd6cc7d942af6e4e1d4d9d1e3e436ba5d5dd6f04d29534b97dd282d897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "default"));

            // line 2
            echo "    <div class=\"ui icon ";
            echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "")) : ("")), "html", null, true);
            echo " message\">
        <i class=\"";
            // line 3
            echo twig_escape_filter($this->env, ($context["icon"] ?? $this->getContext($context, "icon")), "html", null, true);
            echo " icon\"></i>
        <div class=\"content\">
            ";
            // line 5
            if ( !twig_test_empty(($context["type"] ?? $this->getContext($context, "type")))) {
                // line 6
                echo "            <div class=\"header\">
                ";
                // line 7
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((array_key_exists("header", $context)) ? (_twig_default_filter(($context["header"] ?? $this->getContext($context, "header")), ($context["type"] ?? $this->getContext($context, "type")))) : (($context["type"] ?? $this->getContext($context, "type"))))), "html", null, true);
                echo "
            </div>
            ";
            }
            // line 10
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["message"] ?? $this->getContext($context, "message"))), "html", null, true);
            echo "</p>
        </div>
    </div>
";
            
            $__internal_9c05abbd6cc7d942af6e4e1d4d9d1e3e436ba5d5dd6f04d29534b97dd282d897->leave($__internal_9c05abbd6cc7d942af6e4e1d4d9d1e3e436ba5d5dd6f04d29534b97dd282d897_prof);

            
            $__internal_5097921df37946e59a3b9dd4b01113f35330df711021c86475ee2eb36cf2ef50->leave($__internal_5097921df37946e59a3b9dd4b01113f35330df711021c86475ee2eb36cf2ef50_prof);

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
    public function getinfo($__message__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "message" => $__message__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_46bcc7dc47ba3dfefdfadd3d733826a4f4f8391513bf9da85f697bbc7ffe3e88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_46bcc7dc47ba3dfefdfadd3d733826a4f4f8391513bf9da85f697bbc7ffe3e88->enter($__internal_46bcc7dc47ba3dfefdfadd3d733826a4f4f8391513bf9da85f697bbc7ffe3e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "info"));

            $__internal_e908592e8c41242a91762f6a1e0ffe9cccbf6009e10a99ebd15beeaa5557fb36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_e908592e8c41242a91762f6a1e0ffe9cccbf6009e10a99ebd15beeaa5557fb36->enter($__internal_e908592e8c41242a91762f6a1e0ffe9cccbf6009e10a99ebd15beeaa5557fb36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "info"));

            // line 16
            echo "    ";
            $context["messages"] = $this;
            // line 17
            echo "    ";
            echo $context["messages"]->getdefault(($context["message"] ?? $this->getContext($context, "message")), "info circle", "info", "sylius.ui.info");
            echo "
";
            
            $__internal_e908592e8c41242a91762f6a1e0ffe9cccbf6009e10a99ebd15beeaa5557fb36->leave($__internal_e908592e8c41242a91762f6a1e0ffe9cccbf6009e10a99ebd15beeaa5557fb36_prof);

            
            $__internal_46bcc7dc47ba3dfefdfadd3d733826a4f4f8391513bf9da85f697bbc7ffe3e88->leave($__internal_46bcc7dc47ba3dfefdfadd3d733826a4f4f8391513bf9da85f697bbc7ffe3e88_prof);

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
    public function getsuccess($__message__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "message" => $__message__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_50ef5e1e2654f82e755ab5dce95d83cc4ccbcfcad590f7217f645694547afb0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_50ef5e1e2654f82e755ab5dce95d83cc4ccbcfcad590f7217f645694547afb0f->enter($__internal_50ef5e1e2654f82e755ab5dce95d83cc4ccbcfcad590f7217f645694547afb0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "success"));

            $__internal_da3e4057de5af3c0b0abec2f8251f42e3c0ac46894f7d317e5b07c510cf37a10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_da3e4057de5af3c0b0abec2f8251f42e3c0ac46894f7d317e5b07c510cf37a10->enter($__internal_da3e4057de5af3c0b0abec2f8251f42e3c0ac46894f7d317e5b07c510cf37a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "success"));

            // line 21
            echo "    ";
            $context["messages"] = $this;
            // line 22
            echo "    ";
            echo $context["messages"]->getdefault(($context["message"] ?? $this->getContext($context, "message")), "checkmark", "success", "sylius.ui.success");
            echo "
";
            
            $__internal_da3e4057de5af3c0b0abec2f8251f42e3c0ac46894f7d317e5b07c510cf37a10->leave($__internal_da3e4057de5af3c0b0abec2f8251f42e3c0ac46894f7d317e5b07c510cf37a10_prof);

            
            $__internal_50ef5e1e2654f82e755ab5dce95d83cc4ccbcfcad590f7217f645694547afb0f->leave($__internal_50ef5e1e2654f82e755ab5dce95d83cc4ccbcfcad590f7217f645694547afb0f_prof);

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
    public function geterror($__message__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "message" => $__message__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_af37f9372903764cedb28eba28b2e249858ecdcae6137705ef8924ceabf978a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_af37f9372903764cedb28eba28b2e249858ecdcae6137705ef8924ceabf978a4->enter($__internal_af37f9372903764cedb28eba28b2e249858ecdcae6137705ef8924ceabf978a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "error"));

            $__internal_ed1171e61dc8829142456314c58dac665bbe091dd62a93894f59c6a3c9b9f66a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_ed1171e61dc8829142456314c58dac665bbe091dd62a93894f59c6a3c9b9f66a->enter($__internal_ed1171e61dc8829142456314c58dac665bbe091dd62a93894f59c6a3c9b9f66a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "error"));

            // line 26
            echo "    ";
            $context["messages"] = $this;
            // line 27
            echo "    ";
            echo $context["messages"]->getdefault(($context["message"] ?? $this->getContext($context, "message")), "remove", "negative", "sylius.ui.error");
            echo "
";
            
            $__internal_ed1171e61dc8829142456314c58dac665bbe091dd62a93894f59c6a3c9b9f66a->leave($__internal_ed1171e61dc8829142456314c58dac665bbe091dd62a93894f59c6a3c9b9f66a_prof);

            
            $__internal_af37f9372903764cedb28eba28b2e249858ecdcae6137705ef8924ceabf978a4->leave($__internal_af37f9372903764cedb28eba28b2e249858ecdcae6137705ef8924ceabf978a4_prof);

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
        return "SyliusUiBundle:Macro:messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 27,  218 => 26,  200 => 25,  176 => 22,  173 => 21,  155 => 20,  131 => 17,  128 => 16,  110 => 15,  84 => 10,  78 => 7,  75 => 6,  73 => 5,  68 => 3,  63 => 2,  42 => 1,  31 => 24,  28 => 19,  25 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro default(message, icon, type, header) %}
    <div class=\"ui icon {{ type|default('') }} message\">
        <i class=\"{{ icon }} icon\"></i>
        <div class=\"content\">
            {% if type is not empty %}
            <div class=\"header\">
                {{ header|default(type)|trans }}
            </div>
            {% endif %}
            <p>{{ message|trans }}</p>
        </div>
    </div>
{% endmacro %}

{% macro info(message) %}
    {% import _self as messages %}
    {{ messages.default(message, 'info circle', 'info', 'sylius.ui.info') }}
{% endmacro %}

{% macro success(message) %}
    {% import _self as messages %}
    {{ messages.default(message, 'checkmark', 'success', 'sylius.ui.success') }}
{% endmacro %}

{% macro error(message) %}
    {% import _self as messages %}
    {{ messages.default(message, 'remove', 'negative', 'sylius.ui.error') }}
{% endmacro %}
", "SyliusUiBundle:Macro:messages.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Macro/messages.html.twig");
    }
}

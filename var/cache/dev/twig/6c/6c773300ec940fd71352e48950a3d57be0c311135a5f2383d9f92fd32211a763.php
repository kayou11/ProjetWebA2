<?php

/* SyliusUiBundle:Macro:messages.html.twig */
class __TwigTemplate_3dab592246b9cc517bea638819d0510e92167b5ac4a8c61c1519df0455f1c7ab extends Twig_Template
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
        $__internal_73fb77768420ef5435d29b2a65443afb0da49928119ecb1036d7d45bc76419a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73fb77768420ef5435d29b2a65443afb0da49928119ecb1036d7d45bc76419a0->enter($__internal_73fb77768420ef5435d29b2a65443afb0da49928119ecb1036d7d45bc76419a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Macro:messages.html.twig"));

        $__internal_6d45ff6392d572f0d655da2fb233431bd4bf003a3139e7f3e66feeb542028f4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d45ff6392d572f0d655da2fb233431bd4bf003a3139e7f3e66feeb542028f4a->enter($__internal_6d45ff6392d572f0d655da2fb233431bd4bf003a3139e7f3e66feeb542028f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Macro:messages.html.twig"));

        // line 14
        echo "
";
        // line 19
        echo "
";
        // line 24
        echo "
";
        
        $__internal_73fb77768420ef5435d29b2a65443afb0da49928119ecb1036d7d45bc76419a0->leave($__internal_73fb77768420ef5435d29b2a65443afb0da49928119ecb1036d7d45bc76419a0_prof);

        
        $__internal_6d45ff6392d572f0d655da2fb233431bd4bf003a3139e7f3e66feeb542028f4a->leave($__internal_6d45ff6392d572f0d655da2fb233431bd4bf003a3139e7f3e66feeb542028f4a_prof);

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
            $__internal_de3d140555401027f7f7735018f6592756d3db9c152f94d87d5c422f5a99b968 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_de3d140555401027f7f7735018f6592756d3db9c152f94d87d5c422f5a99b968->enter($__internal_de3d140555401027f7f7735018f6592756d3db9c152f94d87d5c422f5a99b968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "default"));

            $__internal_2fc5203e346a6f1cac0f55ae4d72b5d8b4bd97f3f895cca652d65cd376df524b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_2fc5203e346a6f1cac0f55ae4d72b5d8b4bd97f3f895cca652d65cd376df524b->enter($__internal_2fc5203e346a6f1cac0f55ae4d72b5d8b4bd97f3f895cca652d65cd376df524b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "default"));

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
            
            $__internal_2fc5203e346a6f1cac0f55ae4d72b5d8b4bd97f3f895cca652d65cd376df524b->leave($__internal_2fc5203e346a6f1cac0f55ae4d72b5d8b4bd97f3f895cca652d65cd376df524b_prof);

            
            $__internal_de3d140555401027f7f7735018f6592756d3db9c152f94d87d5c422f5a99b968->leave($__internal_de3d140555401027f7f7735018f6592756d3db9c152f94d87d5c422f5a99b968_prof);

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
            $__internal_9f0b0598ea0139c5541b524336819d9261ba329b68a71d99e4ef213d44aa6167 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_9f0b0598ea0139c5541b524336819d9261ba329b68a71d99e4ef213d44aa6167->enter($__internal_9f0b0598ea0139c5541b524336819d9261ba329b68a71d99e4ef213d44aa6167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "info"));

            $__internal_9e3f2ecd63b3f0ec8d8419719fefd3b2f269ed3abc7d1b505a11565c031a652e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_9e3f2ecd63b3f0ec8d8419719fefd3b2f269ed3abc7d1b505a11565c031a652e->enter($__internal_9e3f2ecd63b3f0ec8d8419719fefd3b2f269ed3abc7d1b505a11565c031a652e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "info"));

            // line 16
            echo "    ";
            $context["messages"] = $this;
            // line 17
            echo "    ";
            echo $context["messages"]->getdefault(($context["message"] ?? $this->getContext($context, "message")), "info circle", "info", "sylius.ui.info");
            echo "
";
            
            $__internal_9e3f2ecd63b3f0ec8d8419719fefd3b2f269ed3abc7d1b505a11565c031a652e->leave($__internal_9e3f2ecd63b3f0ec8d8419719fefd3b2f269ed3abc7d1b505a11565c031a652e_prof);

            
            $__internal_9f0b0598ea0139c5541b524336819d9261ba329b68a71d99e4ef213d44aa6167->leave($__internal_9f0b0598ea0139c5541b524336819d9261ba329b68a71d99e4ef213d44aa6167_prof);

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
            $__internal_9f62004dce5fc2c1a5f4d48d17d7a0895ac89758c98d710ff1969d3ec5076c18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_9f62004dce5fc2c1a5f4d48d17d7a0895ac89758c98d710ff1969d3ec5076c18->enter($__internal_9f62004dce5fc2c1a5f4d48d17d7a0895ac89758c98d710ff1969d3ec5076c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "success"));

            $__internal_0364c152be8edc449bf39a3d8902f45055832f69d83b065cfc067a2d3bc5dc0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_0364c152be8edc449bf39a3d8902f45055832f69d83b065cfc067a2d3bc5dc0f->enter($__internal_0364c152be8edc449bf39a3d8902f45055832f69d83b065cfc067a2d3bc5dc0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "success"));

            // line 21
            echo "    ";
            $context["messages"] = $this;
            // line 22
            echo "    ";
            echo $context["messages"]->getdefault(($context["message"] ?? $this->getContext($context, "message")), "checkmark", "success", "sylius.ui.success");
            echo "
";
            
            $__internal_0364c152be8edc449bf39a3d8902f45055832f69d83b065cfc067a2d3bc5dc0f->leave($__internal_0364c152be8edc449bf39a3d8902f45055832f69d83b065cfc067a2d3bc5dc0f_prof);

            
            $__internal_9f62004dce5fc2c1a5f4d48d17d7a0895ac89758c98d710ff1969d3ec5076c18->leave($__internal_9f62004dce5fc2c1a5f4d48d17d7a0895ac89758c98d710ff1969d3ec5076c18_prof);

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
            $__internal_cd24836780b6d9172f0bb8d390ab3f6941c53594b4abd3fd48fbc56e4a65917e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_cd24836780b6d9172f0bb8d390ab3f6941c53594b4abd3fd48fbc56e4a65917e->enter($__internal_cd24836780b6d9172f0bb8d390ab3f6941c53594b4abd3fd48fbc56e4a65917e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "error"));

            $__internal_51665cf59cf63ca3379cbdf639a82f5af7d42cd071c87c0f79aaa0319ccd4597 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_51665cf59cf63ca3379cbdf639a82f5af7d42cd071c87c0f79aaa0319ccd4597->enter($__internal_51665cf59cf63ca3379cbdf639a82f5af7d42cd071c87c0f79aaa0319ccd4597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "error"));

            // line 26
            echo "    ";
            $context["messages"] = $this;
            // line 27
            echo "    ";
            echo $context["messages"]->getdefault(($context["message"] ?? $this->getContext($context, "message")), "remove", "negative", "sylius.ui.error");
            echo "
";
            
            $__internal_51665cf59cf63ca3379cbdf639a82f5af7d42cd071c87c0f79aaa0319ccd4597->leave($__internal_51665cf59cf63ca3379cbdf639a82f5af7d42cd071c87c0f79aaa0319ccd4597_prof);

            
            $__internal_cd24836780b6d9172f0bb8d390ab3f6941c53594b4abd3fd48fbc56e4a65917e->leave($__internal_cd24836780b6d9172f0bb8d390ab3f6941c53594b4abd3fd48fbc56e4a65917e_prof);

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
", "SyliusUiBundle:Macro:messages.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Macro/messages.html.twig");
    }
}

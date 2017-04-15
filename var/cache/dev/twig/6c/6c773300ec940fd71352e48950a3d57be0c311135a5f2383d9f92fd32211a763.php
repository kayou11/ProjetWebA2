<?php

/* @SyliusUi/Macro/messages.html.twig */
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
        $__internal_ec2d207fd0346c43ace23e8dbc914eabe50199f72a60e885fbe47168952e7db7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec2d207fd0346c43ace23e8dbc914eabe50199f72a60e885fbe47168952e7db7->enter($__internal_ec2d207fd0346c43ace23e8dbc914eabe50199f72a60e885fbe47168952e7db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Macro/messages.html.twig"));

        $__internal_c150f6b6d75f4c8a96809528dd6df400e0d15b490183304af45017e60485d61a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c150f6b6d75f4c8a96809528dd6df400e0d15b490183304af45017e60485d61a->enter($__internal_c150f6b6d75f4c8a96809528dd6df400e0d15b490183304af45017e60485d61a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Macro/messages.html.twig"));

        // line 14
        echo "
";
        // line 19
        echo "
";
        // line 24
        echo "
";
        
        $__internal_ec2d207fd0346c43ace23e8dbc914eabe50199f72a60e885fbe47168952e7db7->leave($__internal_ec2d207fd0346c43ace23e8dbc914eabe50199f72a60e885fbe47168952e7db7_prof);

        
        $__internal_c150f6b6d75f4c8a96809528dd6df400e0d15b490183304af45017e60485d61a->leave($__internal_c150f6b6d75f4c8a96809528dd6df400e0d15b490183304af45017e60485d61a_prof);

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
            $__internal_90c0ec539654fb22a2c495e7bf6628981e58f6d3d653021f702af57fd7dae73f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_90c0ec539654fb22a2c495e7bf6628981e58f6d3d653021f702af57fd7dae73f->enter($__internal_90c0ec539654fb22a2c495e7bf6628981e58f6d3d653021f702af57fd7dae73f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "default"));

            $__internal_d3af76765ac88785ade8932955089438e1dcfbe8ba7dc5f525d98ac932be2cdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_d3af76765ac88785ade8932955089438e1dcfbe8ba7dc5f525d98ac932be2cdd->enter($__internal_d3af76765ac88785ade8932955089438e1dcfbe8ba7dc5f525d98ac932be2cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "default"));

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
            
            $__internal_d3af76765ac88785ade8932955089438e1dcfbe8ba7dc5f525d98ac932be2cdd->leave($__internal_d3af76765ac88785ade8932955089438e1dcfbe8ba7dc5f525d98ac932be2cdd_prof);

            
            $__internal_90c0ec539654fb22a2c495e7bf6628981e58f6d3d653021f702af57fd7dae73f->leave($__internal_90c0ec539654fb22a2c495e7bf6628981e58f6d3d653021f702af57fd7dae73f_prof);

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
            $__internal_6a87b909fb90c69477e9788ae6560a7cf26386df70c839a5a12c4ad6a2b41ec3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_6a87b909fb90c69477e9788ae6560a7cf26386df70c839a5a12c4ad6a2b41ec3->enter($__internal_6a87b909fb90c69477e9788ae6560a7cf26386df70c839a5a12c4ad6a2b41ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "info"));

            $__internal_7ad1aec4a205e6599618a139a0a54656e7227a9dd047697d6ed6eaeee82f9b19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_7ad1aec4a205e6599618a139a0a54656e7227a9dd047697d6ed6eaeee82f9b19->enter($__internal_7ad1aec4a205e6599618a139a0a54656e7227a9dd047697d6ed6eaeee82f9b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "info"));

            // line 16
            echo "    ";
            $context["messages"] = $this;
            // line 17
            echo "    ";
            echo $context["messages"]->getdefault(($context["message"] ?? $this->getContext($context, "message")), "info circle", "info", "sylius.ui.info");
            echo "
";
            
            $__internal_7ad1aec4a205e6599618a139a0a54656e7227a9dd047697d6ed6eaeee82f9b19->leave($__internal_7ad1aec4a205e6599618a139a0a54656e7227a9dd047697d6ed6eaeee82f9b19_prof);

            
            $__internal_6a87b909fb90c69477e9788ae6560a7cf26386df70c839a5a12c4ad6a2b41ec3->leave($__internal_6a87b909fb90c69477e9788ae6560a7cf26386df70c839a5a12c4ad6a2b41ec3_prof);

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
            $__internal_061e4fa754b3991829353d486982bf0a4f3ed52206015b87045ee3ebf44cf102 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_061e4fa754b3991829353d486982bf0a4f3ed52206015b87045ee3ebf44cf102->enter($__internal_061e4fa754b3991829353d486982bf0a4f3ed52206015b87045ee3ebf44cf102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "success"));

            $__internal_7ea7d22448af6fbfa73e758924ce4919a95d2cf04c28500f4f53b4f32c214325 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_7ea7d22448af6fbfa73e758924ce4919a95d2cf04c28500f4f53b4f32c214325->enter($__internal_7ea7d22448af6fbfa73e758924ce4919a95d2cf04c28500f4f53b4f32c214325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "success"));

            // line 21
            echo "    ";
            $context["messages"] = $this;
            // line 22
            echo "    ";
            echo $context["messages"]->getdefault(($context["message"] ?? $this->getContext($context, "message")), "checkmark", "success", "sylius.ui.success");
            echo "
";
            
            $__internal_7ea7d22448af6fbfa73e758924ce4919a95d2cf04c28500f4f53b4f32c214325->leave($__internal_7ea7d22448af6fbfa73e758924ce4919a95d2cf04c28500f4f53b4f32c214325_prof);

            
            $__internal_061e4fa754b3991829353d486982bf0a4f3ed52206015b87045ee3ebf44cf102->leave($__internal_061e4fa754b3991829353d486982bf0a4f3ed52206015b87045ee3ebf44cf102_prof);

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
            $__internal_626469152519fcc9cc1489911847304c7d9e906290f779f916e012c1d55cf4e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_626469152519fcc9cc1489911847304c7d9e906290f779f916e012c1d55cf4e5->enter($__internal_626469152519fcc9cc1489911847304c7d9e906290f779f916e012c1d55cf4e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "error"));

            $__internal_7372b2dfd0e9f39b20b45bd453b714ecf3d1eb33744cc57398011e500e4c2fa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_7372b2dfd0e9f39b20b45bd453b714ecf3d1eb33744cc57398011e500e4c2fa9->enter($__internal_7372b2dfd0e9f39b20b45bd453b714ecf3d1eb33744cc57398011e500e4c2fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "error"));

            // line 26
            echo "    ";
            $context["messages"] = $this;
            // line 27
            echo "    ";
            echo $context["messages"]->getdefault(($context["message"] ?? $this->getContext($context, "message")), "remove", "negative", "sylius.ui.error");
            echo "
";
            
            $__internal_7372b2dfd0e9f39b20b45bd453b714ecf3d1eb33744cc57398011e500e4c2fa9->leave($__internal_7372b2dfd0e9f39b20b45bd453b714ecf3d1eb33744cc57398011e500e4c2fa9_prof);

            
            $__internal_626469152519fcc9cc1489911847304c7d9e906290f779f916e012c1d55cf4e5->leave($__internal_626469152519fcc9cc1489911847304c7d9e906290f779f916e012c1d55cf4e5_prof);

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
        return "@SyliusUi/Macro/messages.html.twig";
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
", "@SyliusUi/Macro/messages.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Macro/messages.html.twig");
    }
}

<?php

/* SyliusUiBundle:Security:_login.html.twig */
class __TwigTemplate_10fd03fa37f2984119cd1f3771dada2fa9c9668733843034bb6a805bda4489d5 extends Twig_Template
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
        $__internal_b552abdc9d7229712d5d9c369b6a26bd04cb997ecf300adbc301452afa8e26b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b552abdc9d7229712d5d9c369b6a26bd04cb997ecf300adbc301452afa8e26b4->enter($__internal_b552abdc9d7229712d5d9c369b6a26bd04cb997ecf300adbc301452afa8e26b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Security:_login.html.twig"));

        $__internal_b94265b2589e6f23c13f230e99fc736e3a12abac0aeaee3fea22fe4db63c4438 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b94265b2589e6f23c13f230e99fc736e3a12abac0aeaee3fea22fe4db63c4438->enter($__internal_b94265b2589e6f23c13f230e99fc736e3a12abac0aeaee3fea22fe4db63c4438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Security:_login.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "@SyliusUi/Form/theme.html.twig"));
        // line 2
        echo "
";
        // line 3
        $context["messages"] = $this->loadTemplate("@SyliusUi/Macro/messages.html.twig", "SyliusUiBundle:Security:_login.html.twig", 3);
        // line 4
        echo "
<div class=\"ui middle aligned center aligned grid\">
    <div class=\"column\">
        ";
        // line 7
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.login.before_form", array("form" => ($context["form"] ?? $this->getContext($context, "form")))));
        echo "

        ";
        // line 9
        if ($this->getAttribute(($context["paths"] ?? null), "logo", array(), "any", true, true)) {
            // line 10
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["paths"] ?? $this->getContext($context, "paths")), "logo", array())), "html", null, true);
            echo "\" class=\"ui fluid image\" id=\"logo\">
        ";
        }
        // line 12
        echo "
        ";
        // line 13
        if (($context["last_error"] ?? $this->getContext($context, "last_error"))) {
            // line 14
            echo "            <div class=\"ui left aligned basic segment\">
                ";
            // line 15
            echo $context["messages"]->geterror($this->getAttribute(($context["last_error"] ?? $this->getContext($context, "last_error")), "message", array()));
            echo "
            </div>
        ";
        }
        // line 18
        echo "
        ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => ((array_key_exists("action", $context)) ? (_twig_default_filter(($context["action"] ?? $this->getContext($context, "action")), "/")) : ("/")), "attr" => array("class" => "ui large loadable form", "novalidate" => "novalidate")));
        echo "
            <div class=\"ui left aligned segment\">
                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_username", array()), 'row', array("value" => ((array_key_exists("last_username", $context)) ? (_twig_default_filter(($context["last_username"] ?? $this->getContext($context, "last_username")), "")) : (""))));
        echo "
                ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_password", array()), 'row');
        echo "
                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_remember_me", array()), 'row');
        echo "
                <input type=\"hidden\" name=\"_csrf_admin_security_token\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("admin_authenticate"), "html", null, true);
        echo "\">
                <button type=\"submit\" class=\"ui fluid large primary submit button\">Login</button>
            </div>

            ";
        // line 28
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.login.form", array("form" => ($context["form"] ?? $this->getContext($context, "form")))));
        echo "

        ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
    </div>
</div>
";
        
        $__internal_b552abdc9d7229712d5d9c369b6a26bd04cb997ecf300adbc301452afa8e26b4->leave($__internal_b552abdc9d7229712d5d9c369b6a26bd04cb997ecf300adbc301452afa8e26b4_prof);

        
        $__internal_b94265b2589e6f23c13f230e99fc736e3a12abac0aeaee3fea22fe4db63c4438->leave($__internal_b94265b2589e6f23c13f230e99fc736e3a12abac0aeaee3fea22fe4db63c4438_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Security:_login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 30,  91 => 28,  84 => 24,  80 => 23,  76 => 22,  72 => 21,  67 => 19,  64 => 18,  58 => 15,  55 => 14,  53 => 13,  50 => 12,  44 => 10,  42 => 9,  37 => 7,  32 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% form_theme form '@SyliusUi/Form/theme.html.twig' %}

{% import '@SyliusUi/Macro/messages.html.twig' as messages %}

<div class=\"ui middle aligned center aligned grid\">
    <div class=\"column\">
        {{ sonata_block_render_event('sylius.admin.login.before_form', {'form': form}) }}

        {% if paths.logo is defined %}
        <img src=\"{{ asset(paths.logo) }}\" class=\"ui fluid image\" id=\"logo\">
        {% endif %}

        {% if last_error %}
            <div class=\"ui left aligned basic segment\">
                {{ messages.error(last_error.message) }}
            </div>
        {% endif %}

        {{ form_start(form, {'action': action|default('/'), 'attr': {'class': 'ui large loadable form', 'novalidate': 'novalidate'}}) }}
            <div class=\"ui left aligned segment\">
                {{ form_row(form._username, {'value': last_username|default('')}) }}
                {{ form_row(form._password) }}
                {{ form_row(form._remember_me) }}
                <input type=\"hidden\" name=\"_csrf_admin_security_token\" value=\"{{ csrf_token('admin_authenticate') }}\">
                <button type=\"submit\" class=\"ui fluid large primary submit button\">Login</button>
            </div>

            {{ sonata_block_render_event('sylius.admin.login.form', {'form': form}) }}

        {{ form_end(form, {'render_rest': false}) }}
    </div>
</div>
", "SyliusUiBundle:Security:_login.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Security/_login.html.twig");
    }
}

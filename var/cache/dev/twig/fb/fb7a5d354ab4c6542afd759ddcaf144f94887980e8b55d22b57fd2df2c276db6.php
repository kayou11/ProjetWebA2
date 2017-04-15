<?php

/* SyliusResourceBundle:Macros:actions.html.twig */
class __TwigTemplate_09dd28ab0e462af5f2c88fdab17a94f9001d09a396fc263bcc87acc66b226f58 extends Twig_Template
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
        $__internal_1985135172ec39854872f80fad94ddb48368b4def99957b7b642cb3a85eda911 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1985135172ec39854872f80fad94ddb48368b4def99957b7b642cb3a85eda911->enter($__internal_1985135172ec39854872f80fad94ddb48368b4def99957b7b642cb3a85eda911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusResourceBundle:Macros:actions.html.twig"));

        $__internal_23c7037b39f11a1a4ea747dc7300c49f4f7b2c42d1fb80b142c5628c59d6a3de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23c7037b39f11a1a4ea747dc7300c49f4f7b2c42d1fb80b142c5628c59d6a3de->enter($__internal_23c7037b39f11a1a4ea747dc7300c49f4f7b2c42d1fb80b142c5628c59d6a3de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusResourceBundle:Macros:actions.html.twig"));

        // line 7
        echo "
";
        
        $__internal_1985135172ec39854872f80fad94ddb48368b4def99957b7b642cb3a85eda911->leave($__internal_1985135172ec39854872f80fad94ddb48368b4def99957b7b642cb3a85eda911_prof);

        
        $__internal_23c7037b39f11a1a4ea747dc7300c49f4f7b2c42d1fb80b142c5628c59d6a3de->leave($__internal_23c7037b39f11a1a4ea747dc7300c49f4f7b2c42d1fb80b142c5628c59d6a3de_prof);

    }

    // line 1
    public function getcreate($__url__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_23454fd59aa90a58571d1e0a02bd271e0fe7fcfdfb78786b5679d692c49a9f19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_23454fd59aa90a58571d1e0a02bd271e0fe7fcfdfb78786b5679d692c49a9f19->enter($__internal_23454fd59aa90a58571d1e0a02bd271e0fe7fcfdfb78786b5679d692c49a9f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "create"));

            $__internal_98ea91482c5f0c81007fab13de635991009698ac1d2ff1667201fab041cbdf16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_98ea91482c5f0c81007fab13de635991009698ac1d2ff1667201fab041cbdf16->enter($__internal_98ea91482c5f0c81007fab13de635991009698ac1d2ff1667201fab041cbdf16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "create"));

            // line 2
            echo "<div class=\"form-actions\">
    <button type=\"submit\" class=\"btn btn-primary btn-lg\"><i class=\"glyphicon glyphicon-ok\"></i> ";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.create"), "html", null, true);
            echo "</button>
    <a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "referer", 1 => ($context["url"] ?? $this->getContext($context, "url"))), "method"), "html", null, true);
            echo "\" class=\"btn btn-danger btn-lg\"><i class=\"glyphicon glyphicon-remove\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.cancel"), "html", null, true);
            echo "</a>
</div>
";
            
            $__internal_98ea91482c5f0c81007fab13de635991009698ac1d2ff1667201fab041cbdf16->leave($__internal_98ea91482c5f0c81007fab13de635991009698ac1d2ff1667201fab041cbdf16_prof);

            
            $__internal_23454fd59aa90a58571d1e0a02bd271e0fe7fcfdfb78786b5679d692c49a9f19->leave($__internal_23454fd59aa90a58571d1e0a02bd271e0fe7fcfdfb78786b5679d692c49a9f19_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 8
    public function getupdate($__url__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_33e4f8af0240a573989c1304dd8aaf9ed41b2563c5920892f5c6638cfc1d4859 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_33e4f8af0240a573989c1304dd8aaf9ed41b2563c5920892f5c6638cfc1d4859->enter($__internal_33e4f8af0240a573989c1304dd8aaf9ed41b2563c5920892f5c6638cfc1d4859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "update"));

            $__internal_2a98ab4882168192155e3cdd8a32c047a251c9f20811311da662f5f9934bc683 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_2a98ab4882168192155e3cdd8a32c047a251c9f20811311da662f5f9934bc683->enter($__internal_2a98ab4882168192155e3cdd8a32c047a251c9f20811311da662f5f9934bc683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "update"));

            // line 9
            echo "<div class=\"form-actions\">
    <button type=\"submit\" class=\"btn btn-primary btn-lg\"><i class=\"glyphicon glyphicon-save\"></i> ";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.save_changes"), "html", null, true);
            echo "</button>
    <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "referer", 1 => ($context["url"] ?? $this->getContext($context, "url"))), "method"), "html", null, true);
            echo "\" class=\"btn btn-danger btn-lg\"><i class=\"glyphicon glyphicon-remove\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.cancel"), "html", null, true);
            echo "</a>
</div>
";
            
            $__internal_2a98ab4882168192155e3cdd8a32c047a251c9f20811311da662f5f9934bc683->leave($__internal_2a98ab4882168192155e3cdd8a32c047a251c9f20811311da662f5f9934bc683_prof);

            
            $__internal_33e4f8af0240a573989c1304dd8aaf9ed41b2563c5920892f5c6638cfc1d4859->leave($__internal_33e4f8af0240a573989c1304dd8aaf9ed41b2563c5920892f5c6638cfc1d4859_prof);

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
        return "SyliusResourceBundle:Macros:actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 11,  108 => 10,  105 => 9,  87 => 8,  61 => 4,  57 => 3,  54 => 2,  36 => 1,  25 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro create(url) %}
<div class=\"form-actions\">
    <button type=\"submit\" class=\"btn btn-primary btn-lg\"><i class=\"glyphicon glyphicon-ok\"></i> {{ 'sylius.ui.create'|trans }}</button>
    <a href=\"{{ app.request.headers.get('referer', url) }}\" class=\"btn btn-danger btn-lg\"><i class=\"glyphicon glyphicon-remove\"></i> {{ 'sylius.ui.cancel'|trans }}</a>
</div>
{% endmacro %}

{% macro update(url) %}
<div class=\"form-actions\">
    <button type=\"submit\" class=\"btn btn-primary btn-lg\"><i class=\"glyphicon glyphicon-save\"></i> {{ 'sylius.ui.save_changes'|trans }}</button>
    <a href=\"{{ app.request.headers.get('referer', url) }}\" class=\"btn btn-danger btn-lg\"><i class=\"glyphicon glyphicon-remove\"></i> {{ 'sylius.ui.cancel'|trans }}</a>
</div>
{% endmacro %}
", "SyliusResourceBundle:Macros:actions.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ResourceBundle/Resources/views/Macros/actions.html.twig");
    }
}

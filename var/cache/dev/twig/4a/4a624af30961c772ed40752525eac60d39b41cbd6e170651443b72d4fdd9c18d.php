<?php

/* SyliusUiBundle:Macro:common.html.twig */
class __TwigTemplate_2a9db5b53952cb7f12aea8d247d600f5d4e5e7aa670ccc4bd4b6db1e7960c1b3 extends Twig_Template
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
        $__internal_88817a9285a770dd32782a4dd27aca47a99d2b591259b23c1e851448c35b6c29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88817a9285a770dd32782a4dd27aca47a99d2b591259b23c1e851448c35b6c29->enter($__internal_88817a9285a770dd32782a4dd27aca47a99d2b591259b23c1e851448c35b6c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Macro:common.html.twig"));

        $__internal_83abaebf6c5abafb3ae1ed3856df01db746152f867afa5008b7be2f814287c72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83abaebf6c5abafb3ae1ed3856df01db746152f867afa5008b7be2f814287c72->enter($__internal_83abaebf6c5abafb3ae1ed3856df01db746152f867afa5008b7be2f814287c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Macro:common.html.twig"));

        
        $__internal_88817a9285a770dd32782a4dd27aca47a99d2b591259b23c1e851448c35b6c29->leave($__internal_88817a9285a770dd32782a4dd27aca47a99d2b591259b23c1e851448c35b6c29_prof);

        
        $__internal_83abaebf6c5abafb3ae1ed3856df01db746152f867afa5008b7be2f814287c72->leave($__internal_83abaebf6c5abafb3ae1ed3856df01db746152f867afa5008b7be2f814287c72_prof);

    }

    // line 1
    public function getattributes($__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_0c0e3d55a0ebeed15978347d01f33015bed604413aa7d5235fd087978c3dff4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_0c0e3d55a0ebeed15978347d01f33015bed604413aa7d5235fd087978c3dff4e->enter($__internal_0c0e3d55a0ebeed15978347d01f33015bed604413aa7d5235fd087978c3dff4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            $__internal_4604daab33db39b36ff1d2c65493f829afacc55ab9cfae0aafebbbc56a1c4932 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_4604daab33db39b36ff1d2c65493f829afacc55ab9cfae0aafebbbc56a1c4932->enter($__internal_4604daab33db39b36ff1d2c65493f829afacc55ab9cfae0aafebbbc56a1c4932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? $this->getContext($context, "attributes")));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 3
                if (( !(null === $context["value"]) &&  !($context["value"] === false))) {
                    // line 4
                    echo sprintf(" %s=\"%s\"", $context["name"], ((($context["value"] === true)) ? (twig_escape_filter($this->env, $context["name"])) : (twig_escape_filter($this->env, $context["value"]))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_4604daab33db39b36ff1d2c65493f829afacc55ab9cfae0aafebbbc56a1c4932->leave($__internal_4604daab33db39b36ff1d2c65493f829afacc55ab9cfae0aafebbbc56a1c4932_prof);

            
            $__internal_0c0e3d55a0ebeed15978347d01f33015bed604413aa7d5235fd087978c3dff4e->leave($__internal_0c0e3d55a0ebeed15978347d01f33015bed604413aa7d5235fd087978c3dff4e_prof);

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
        return "SyliusUiBundle:Macro:common.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 4,  56 => 3,  51 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro attributes(attributes) %}
    {% for name, value in attributes %}
        {%- if value is not none and value is not same as(false) -%}
            {{- ' %s=\"%s\"'|format(name, value is same as(true) ? name|e : value|e)|raw -}}
        {%- endif -%}
    {%- endfor -%}
{% endmacro %}
", "SyliusUiBundle:Macro:common.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Macro/common.html.twig");
    }
}

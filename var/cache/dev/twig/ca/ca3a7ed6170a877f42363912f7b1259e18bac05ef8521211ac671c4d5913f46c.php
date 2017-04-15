<?php

/* SyliusShopBundle:Common/Form:_countryCode.html.twig */
class __TwigTemplate_4d0e5cdb3881aed380a5504774650187232ba72444e17947969c396eac2e2970 extends Twig_Template
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
        $__internal_3531ee37d9c0524436f97baa8165482e26b0ac82a1049bcffbe23252202a18e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3531ee37d9c0524436f97baa8165482e26b0ac82a1049bcffbe23252202a18e2->enter($__internal_3531ee37d9c0524436f97baa8165482e26b0ac82a1049bcffbe23252202a18e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Form:_countryCode.html.twig"));

        $__internal_7051b60e3ece7a31877d35bd637043148c9f4e5a845186bd1fcd82a0cc250881 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7051b60e3ece7a31877d35bd637043148c9f4e5a845186bd1fcd82a0cc250881->enter($__internal_7051b60e3ece7a31877d35bd637043148c9f4e5a845186bd1fcd82a0cc250881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Form:_countryCode.html.twig"));

        // line 1
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "choices", array())) == 1)) {
            // line 2
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'row', array("value" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "choices", array()), 0, array(), "array"), "value", array())));
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'row');
            echo "
";
        }
        
        $__internal_3531ee37d9c0524436f97baa8165482e26b0ac82a1049bcffbe23252202a18e2->leave($__internal_3531ee37d9c0524436f97baa8165482e26b0ac82a1049bcffbe23252202a18e2_prof);

        
        $__internal_7051b60e3ece7a31877d35bd637043148c9f4e5a845186bd1fcd82a0cc250881->leave($__internal_7051b60e3ece7a31877d35bd637043148c9f4e5a845186bd1fcd82a0cc250881_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Common/Form:_countryCode.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if form.vars.choices|length == 1 %}
    {{ form_row(form, {'value': form.vars.choices[0].value}) }}
{% else %}
    {{ form_row(form) }}
{% endif %}
", "SyliusShopBundle:Common/Form:_countryCode.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Common/Form/_countryCode.html.twig");
    }
}

<?php

/* SyliusUiBundle:Label:_default.html.twig */
class __TwigTemplate_a89414d714485de39559bbadd227dd4c6177ebcf4c4f14d7e5edab367668880e extends Twig_Template
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
        $__internal_682ede04e6996947d424313da6cc1ab15c450e17676fa9dab85ca20018de985c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_682ede04e6996947d424313da6cc1ab15c450e17676fa9dab85ca20018de985c->enter($__internal_682ede04e6996947d424313da6cc1ab15c450e17676fa9dab85ca20018de985c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Label:_default.html.twig"));

        $__internal_84fe271c721bdfa99edf4e17e91c1460e24246f7b6bdfcb21bfb345254eba267 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84fe271c721bdfa99edf4e17e91c1460e24246f7b6bdfcb21bfb345254eba267->enter($__internal_84fe271c721bdfa99edf4e17e91c1460e24246f7b6bdfcb21bfb345254eba267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Label:_default.html.twig"));

        // line 1
        $context["label"] = $this->loadTemplate("@SyliusUi/Macro/labels.html.twig", "SyliusUiBundle:Label:_default.html.twig", 1);
        // line 2
        echo $context["label"]->getdefault(($context["value"] ?? $this->getContext($context, "value")));
        echo "
";
        
        $__internal_682ede04e6996947d424313da6cc1ab15c450e17676fa9dab85ca20018de985c->leave($__internal_682ede04e6996947d424313da6cc1ab15c450e17676fa9dab85ca20018de985c_prof);

        
        $__internal_84fe271c721bdfa99edf4e17e91c1460e24246f7b6bdfcb21bfb345254eba267->leave($__internal_84fe271c721bdfa99edf4e17e91c1460e24246f7b6bdfcb21bfb345254eba267_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Label:_default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusUi/Macro/labels.html.twig' as label %}
{{ label.default(value) }}
", "SyliusUiBundle:Label:_default.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Label/_default.html.twig");
    }
}

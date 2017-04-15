<?php

/* @SyliusUi/_javascripts.html.twig */
class __TwigTemplate_0817c0005ab32e4b410ade8b6fd0503c8164d96aa5e7c3154b2b69e8e0ded8c0 extends Twig_Template
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
        $__internal_01c968301051e7d312ad28561b8fff3b9f106720015e886dcf1640b9bb0e611d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01c968301051e7d312ad28561b8fff3b9f106720015e886dcf1640b9bb0e611d->enter($__internal_01c968301051e7d312ad28561b8fff3b9f106720015e886dcf1640b9bb0e611d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/_javascripts.html.twig"));

        $__internal_54743eecc104f528a5be8c0a6aff9adfa9759929ec642083eb1f193bc2043668 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54743eecc104f528a5be8c0a6aff9adfa9759929ec642083eb1f193bc2043668->enter($__internal_54743eecc104f528a5be8c0a6aff9adfa9759929ec642083eb1f193bc2043668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/_javascripts.html.twig"));

        // line 1
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["path"] ?? $this->getContext($context, "path"))), "html", null, true);
        echo "\"></script>
";
        
        $__internal_01c968301051e7d312ad28561b8fff3b9f106720015e886dcf1640b9bb0e611d->leave($__internal_01c968301051e7d312ad28561b8fff3b9f106720015e886dcf1640b9bb0e611d_prof);

        
        $__internal_54743eecc104f528a5be8c0a6aff9adfa9759929ec642083eb1f193bc2043668->leave($__internal_54743eecc104f528a5be8c0a6aff9adfa9759929ec642083eb1f193bc2043668_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusUi/_javascripts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script src=\"{{ asset(path) }}\"></script>
", "@SyliusUi/_javascripts.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/_javascripts.html.twig");
    }
}

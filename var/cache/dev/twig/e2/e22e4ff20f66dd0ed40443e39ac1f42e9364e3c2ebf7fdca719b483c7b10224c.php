<?php

/* SyliusUiBundle::_javascripts.html.twig */
class __TwigTemplate_fde82a09d3711b57e859f717738f0eefb4bdd9a59ee9c059564b046c071c7aa5 extends Twig_Template
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
        $__internal_6ecaf4734ac2d6a8c2e8645c4d4ee88f32af526e808d181e29ca3287fa048bde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ecaf4734ac2d6a8c2e8645c4d4ee88f32af526e808d181e29ca3287fa048bde->enter($__internal_6ecaf4734ac2d6a8c2e8645c4d4ee88f32af526e808d181e29ca3287fa048bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle::_javascripts.html.twig"));

        $__internal_87b2b50c5cfa2ea5f2be9a046cf6d6585fafb48199a138cbe01a680668db6f0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87b2b50c5cfa2ea5f2be9a046cf6d6585fafb48199a138cbe01a680668db6f0f->enter($__internal_87b2b50c5cfa2ea5f2be9a046cf6d6585fafb48199a138cbe01a680668db6f0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle::_javascripts.html.twig"));

        // line 1
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["path"] ?? $this->getContext($context, "path"))), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6ecaf4734ac2d6a8c2e8645c4d4ee88f32af526e808d181e29ca3287fa048bde->leave($__internal_6ecaf4734ac2d6a8c2e8645c4d4ee88f32af526e808d181e29ca3287fa048bde_prof);

        
        $__internal_87b2b50c5cfa2ea5f2be9a046cf6d6585fafb48199a138cbe01a680668db6f0f->leave($__internal_87b2b50c5cfa2ea5f2be9a046cf6d6585fafb48199a138cbe01a680668db6f0f_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle::_javascripts.html.twig";
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
", "SyliusUiBundle::_javascripts.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/_javascripts.html.twig");
    }
}

<?php

/* SyliusAdminBundle:Crud/Index:_content.html.twig */
class __TwigTemplate_e9304699f3a092a274cfd20c0821127495b67cb2481cbe2011bf789dab6e717f extends Twig_Template
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
        $__internal_2d5708760efb02aa882e39ce67419bf5cb2ec73d3e03ba76357f0c67f422a809 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d5708760efb02aa882e39ce67419bf5cb2ec73d3e03ba76357f0c67f422a809->enter($__internal_2d5708760efb02aa882e39ce67419bf5cb2ec73d3e03ba76357f0c67f422a809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Crud/Index:_content.html.twig"));

        $__internal_2703984ca736ea2cb0be2c4dbccfe3ad47845b597fab578af8c14068336e584c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2703984ca736ea2cb0be2c4dbccfe3ad47845b597fab578af8c14068336e584c->enter($__internal_2703984ca736ea2cb0be2c4dbccfe3ad47845b597fab578af8c14068336e584c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Crud/Index:_content.html.twig"));

        // line 1
        echo call_user_func_array($this->env->getFunction('sylius_grid_render')->getCallable(), array(($context["resources"] ?? $this->getContext($context, "resources")), "@SyliusUi/Grid/_default.html.twig"));
        echo "
";
        
        $__internal_2d5708760efb02aa882e39ce67419bf5cb2ec73d3e03ba76357f0c67f422a809->leave($__internal_2d5708760efb02aa882e39ce67419bf5cb2ec73d3e03ba76357f0c67f422a809_prof);

        
        $__internal_2703984ca736ea2cb0be2c4dbccfe3ad47845b597fab578af8c14068336e584c->leave($__internal_2703984ca736ea2cb0be2c4dbccfe3ad47845b597fab578af8c14068336e584c_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Crud/Index:_content.html.twig";
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
        return new Twig_Source("{{ sylius_grid_render(resources, '@SyliusUi/Grid/_default.html.twig') }}
", "SyliusAdminBundle:Crud/Index:_content.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Crud/Index/_content.html.twig");
    }
}

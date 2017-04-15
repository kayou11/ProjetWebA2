<?php

/* SyliusAdminBundle:Order/History:_header.html.twig */
class __TwigTemplate_99932cc750f444ac440f810b8d85c3c7ecd69aa4771fab5c01b3e6c8882e7166 extends Twig_Template
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
        $__internal_472dd1a8ce7f45bdce26640e345d3e1a4ded236c1910121a6c31a811dbe352ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_472dd1a8ce7f45bdce26640e345d3e1a4ded236c1910121a6c31a811dbe352ab->enter($__internal_472dd1a8ce7f45bdce26640e345d3e1a4ded236c1910121a6c31a811dbe352ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/History:_header.html.twig"));

        $__internal_05aea9da23a5ddacbc98e82fbe34f0a83ea6eba94a6c9aafeed0bb3d943af3a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05aea9da23a5ddacbc98e82fbe34f0a83ea6eba94a6c9aafeed0bb3d943af3a8->enter($__internal_05aea9da23a5ddacbc98e82fbe34f0a83ea6eba94a6c9aafeed0bb3d943af3a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/History:_header.html.twig"));

        // line 1
        $this->loadTemplate("@SyliusAdmin/Order/Show/_header.html.twig", "SyliusAdminBundle:Order/History:_header.html.twig", 1)->display($context);
        
        $__internal_472dd1a8ce7f45bdce26640e345d3e1a4ded236c1910121a6c31a811dbe352ab->leave($__internal_472dd1a8ce7f45bdce26640e345d3e1a4ded236c1910121a6c31a811dbe352ab_prof);

        
        $__internal_05aea9da23a5ddacbc98e82fbe34f0a83ea6eba94a6c9aafeed0bb3d943af3a8->leave($__internal_05aea9da23a5ddacbc98e82fbe34f0a83ea6eba94a6c9aafeed0bb3d943af3a8_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/History:_header.html.twig";
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
        return new Twig_Source("{% include '@SyliusAdmin/Order/Show/_header.html.twig' %}
", "SyliusAdminBundle:Order/History:_header.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/History/_header.html.twig");
    }
}

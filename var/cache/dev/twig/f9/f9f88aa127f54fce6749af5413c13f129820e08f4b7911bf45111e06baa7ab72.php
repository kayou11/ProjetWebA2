<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_8ee81dab414b9a10949cc2ad99ca807ea314cf378bad4d7e61b85408863c2c56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae3f3c3ae88a275db222ae72ffd37167e2bf5eba331bd116f7d89908b7bcc7e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae3f3c3ae88a275db222ae72ffd37167e2bf5eba331bd116f7d89908b7bcc7e5->enter($__internal_ae3f3c3ae88a275db222ae72ffd37167e2bf5eba331bd116f7d89908b7bcc7e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        $__internal_f199f6ebc01f1ee10fbfcc6ab66a3a6a1fba1d3a26c16323849c2b42eb4c88d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f199f6ebc01f1ee10fbfcc6ab66a3a6a1fba1d3a26c16323849c2b42eb4c88d1->enter($__internal_f199f6ebc01f1ee10fbfcc6ab66a3a6a1fba1d3a26c16323849c2b42eb4c88d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_ae3f3c3ae88a275db222ae72ffd37167e2bf5eba331bd116f7d89908b7bcc7e5->leave($__internal_ae3f3c3ae88a275db222ae72ffd37167e2bf5eba331bd116f7d89908b7bcc7e5_prof);

        
        $__internal_f199f6ebc01f1ee10fbfcc6ab66a3a6a1fba1d3a26c16323849c2b42eb4c88d1->leave($__internal_f199f6ebc01f1ee10fbfcc6ab66a3a6a1fba1d3a26c16323849c2b42eb4c88d1_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_0cfbff4b31d17666a6ceb9721330e81453f1e9fd089d8624e8ed8e15705e30df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cfbff4b31d17666a6ceb9721330e81453f1e9fd089d8624e8ed8e15705e30df->enter($__internal_0cfbff4b31d17666a6ceb9721330e81453f1e9fd089d8624e8ed8e15705e30df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        $__internal_990f96fa6243c831b9914f48b9d38ff5446b4975baf3c2cbc72fd85f5abbc263 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_990f96fa6243c831b9914f48b9d38ff5446b4975baf3c2cbc72fd85f5abbc263->enter($__internal_990f96fa6243c831b9914f48b9d38ff5446b4975baf3c2cbc72fd85f5abbc263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_990f96fa6243c831b9914f48b9d38ff5446b4975baf3c2cbc72fd85f5abbc263->leave($__internal_990f96fa6243c831b9914f48b9d38ff5446b4975baf3c2cbc72fd85f5abbc263_prof);

        
        $__internal_0cfbff4b31d17666a6ceb9721330e81453f1e9fd089d8624e8ed8e15705e30df->leave($__internal_0cfbff4b31d17666a6ceb9721330e81453f1e9fd089d8624e8ed8e15705e30df_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block user_block %}{# Customize this value #}{% endblock %}
", "SonataAdminBundle:Core:user_block.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/Core/user_block.html.twig");
    }
}

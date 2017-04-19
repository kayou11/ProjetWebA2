<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_e4e4a3ad31412cd418fdf57092ed9ded7889c06aec29bfd1c712e4ea68ece55c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@User/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'style' => array($this, 'block_style'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@User/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5eec4b030604fb536f412c7edf58b7c82648efcab819aff9d6b0e667cf297799 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5eec4b030604fb536f412c7edf58b7c82648efcab819aff9d6b0e667cf297799->enter($__internal_5eec4b030604fb536f412c7edf58b7c82648efcab819aff9d6b0e667cf297799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_723bf4734750c848eb1c8550a5de4c8f14766cd07f2032d9f868bc10fb6b9997 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_723bf4734750c848eb1c8550a5de4c8f14766cd07f2032d9f868bc10fb6b9997->enter($__internal_723bf4734750c848eb1c8550a5de4c8f14766cd07f2032d9f868bc10fb6b9997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5eec4b030604fb536f412c7edf58b7c82648efcab819aff9d6b0e667cf297799->leave($__internal_5eec4b030604fb536f412c7edf58b7c82648efcab819aff9d6b0e667cf297799_prof);

        
        $__internal_723bf4734750c848eb1c8550a5de4c8f14766cd07f2032d9f868bc10fb6b9997->leave($__internal_723bf4734750c848eb1c8550a5de4c8f14766cd07f2032d9f868bc10fb6b9997_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_039556173d1a4295a3172ce53795825614db19d9d8428510724a4720597b7bd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_039556173d1a4295a3172ce53795825614db19d9d8428510724a4720597b7bd9->enter($__internal_039556173d1a4295a3172ce53795825614db19d9d8428510724a4720597b7bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a44c83bc41b7d4c1fd526a8e1c7c9dc8718857596ca35f5e9e48add0ea71c750 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a44c83bc41b7d4c1fd526a8e1c7c9dc8718857596ca35f5e9e48add0ea71c750->enter($__internal_a44c83bc41b7d4c1fd526a8e1c7c9dc8718857596ca35f5e9e48add0ea71c750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mon Compte";
        
        $__internal_a44c83bc41b7d4c1fd526a8e1c7c9dc8718857596ca35f5e9e48add0ea71c750->leave($__internal_a44c83bc41b7d4c1fd526a8e1c7c9dc8718857596ca35f5e9e48add0ea71c750_prof);

        
        $__internal_039556173d1a4295a3172ce53795825614db19d9d8428510724a4720597b7bd9->leave($__internal_039556173d1a4295a3172ce53795825614db19d9d8428510724a4720597b7bd9_prof);

    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        $__internal_ea6d9c80170764cb5cced2d72de8d974b8a040a800a69494d51e6f25050b05a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea6d9c80170764cb5cced2d72de8d974b8a040a800a69494d51e6f25050b05a5->enter($__internal_ea6d9c80170764cb5cced2d72de8d974b8a040a800a69494d51e6f25050b05a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_c77b8aa77fed406266d7129bc9ac218d699bbc7bfb7d0aa475ac406c8f64d90a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c77b8aa77fed406266d7129bc9ac218d699bbc7bfb7d0aa475ac406c8f64d90a->enter($__internal_c77b8aa77fed406266d7129bc9ac218d699bbc7bfb7d0aa475ac406c8f64d90a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"../../public/css/pages/profil.css\" type=\"text/css\" />
";
        
        $__internal_c77b8aa77fed406266d7129bc9ac218d699bbc7bfb7d0aa475ac406c8f64d90a->leave($__internal_c77b8aa77fed406266d7129bc9ac218d699bbc7bfb7d0aa475ac406c8f64d90a_prof);

        
        $__internal_ea6d9c80170764cb5cced2d72de8d974b8a040a800a69494d51e6f25050b05a5->leave($__internal_ea6d9c80170764cb5cced2d72de8d974b8a040a800a69494d51e6f25050b05a5_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ee5d8315e05dcd4653b4d79b20416f7f52754899a8ee59365b9e5e88de072354 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee5d8315e05dcd4653b4d79b20416f7f52754899a8ee59365b9e5e88de072354->enter($__internal_ee5d8315e05dcd4653b4d79b20416f7f52754899a8ee59365b9e5e88de072354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6ad89ed957023640cce14ba1c46af0c32e84f7f1f87e86be9ec64e9c3479928b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ad89ed957023640cce14ba1c46af0c32e84f7f1f87e86be9ec64e9c3479928b->enter($__internal_6ad89ed957023640cce14ba1c46af0c32e84f7f1f87e86be9ec64e9c3479928b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        $this->loadTemplate("@User/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 7)->display($context);
        
        $__internal_6ad89ed957023640cce14ba1c46af0c32e84f7f1f87e86be9ec64e9c3479928b->leave($__internal_6ad89ed957023640cce14ba1c46af0c32e84f7f1f87e86be9ec64e9c3479928b_prof);

        
        $__internal_ee5d8315e05dcd4653b4d79b20416f7f52754899a8ee59365b9e5e88de072354->leave($__internal_ee5d8315e05dcd4653b4d79b20416f7f52754899a8ee59365b9e5e88de072354_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 7,  80 => 6,  69 => 4,  60 => 3,  42 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@User/layout.html.twig\" %}
{% block title %}Mon Compte{% endblock %}
{% block style %}
    <link rel=\"stylesheet\" href=\"../../public/css/pages/profil.css\" type=\"text/css\" />
{% endblock %}
{% block fos_user_content %}
{% include \"@User/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/src/UserBundle/Resources/views/Profile/show.html.twig");
    }
}

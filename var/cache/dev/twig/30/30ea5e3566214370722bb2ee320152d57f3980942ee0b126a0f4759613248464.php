<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_3f2180d49d6156d5c7e0472bd121118adeb1ba6e1990fb528aff01259a8e6434 extends Twig_Template
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
        $__internal_11838c857dff046aee28e0021b20ff6d65a3e46d234e76123b1a11f392af0fe7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11838c857dff046aee28e0021b20ff6d65a3e46d234e76123b1a11f392af0fe7->enter($__internal_11838c857dff046aee28e0021b20ff6d65a3e46d234e76123b1a11f392af0fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        $__internal_43672bd8d5a5c93788def91fdfe7a33a4612a022d8180f60a4e7e1c7ee0d8f2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43672bd8d5a5c93788def91fdfe7a33a4612a022d8180f60a4e7e1c7ee0d8f2e->enter($__internal_43672bd8d5a5c93788def91fdfe7a33a4612a022d8180f60a4e7e1c7ee0d8f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_11838c857dff046aee28e0021b20ff6d65a3e46d234e76123b1a11f392af0fe7->leave($__internal_11838c857dff046aee28e0021b20ff6d65a3e46d234e76123b1a11f392af0fe7_prof);

        
        $__internal_43672bd8d5a5c93788def91fdfe7a33a4612a022d8180f60a4e7e1c7ee0d8f2e->leave($__internal_43672bd8d5a5c93788def91fdfe7a33a4612a022d8180f60a4e7e1c7ee0d8f2e_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_ab7c41bd2430a874e752ea65032d968261c3f47da505bd27538be97298ae2d89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab7c41bd2430a874e752ea65032d968261c3f47da505bd27538be97298ae2d89->enter($__internal_ab7c41bd2430a874e752ea65032d968261c3f47da505bd27538be97298ae2d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        $__internal_5921b5c38247710f13a7e7704cd33076b056ecc24aadfc3d8b1bcd4d58609095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5921b5c38247710f13a7e7704cd33076b056ecc24aadfc3d8b1bcd4d58609095->enter($__internal_5921b5c38247710f13a7e7704cd33076b056ecc24aadfc3d8b1bcd4d58609095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_5921b5c38247710f13a7e7704cd33076b056ecc24aadfc3d8b1bcd4d58609095->leave($__internal_5921b5c38247710f13a7e7704cd33076b056ecc24aadfc3d8b1bcd4d58609095_prof);

        
        $__internal_ab7c41bd2430a874e752ea65032d968261c3f47da505bd27538be97298ae2d89->leave($__internal_ab7c41bd2430a874e752ea65032d968261c3f47da505bd27538be97298ae2d89_prof);

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

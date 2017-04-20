<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_48317991a91c225ad153b8fda92c49b21d7c264e9ad1e032b8369eb69f7e6d96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@User/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'style' => array($this, 'block_style'),
            'img_logo_path' => array($this, 'block_img_logo_path'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'img_footer_path' => array($this, 'block_img_footer_path'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@User/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2783e2f0dfe3f0f85f52bce15ec4d1594a5f3fa107fcb56ac6fde72c6d845eca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2783e2f0dfe3f0f85f52bce15ec4d1594a5f3fa107fcb56ac6fde72c6d845eca->enter($__internal_2783e2f0dfe3f0f85f52bce15ec4d1594a5f3fa107fcb56ac6fde72c6d845eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_8e1d7311890be358ec42e7508eec18341ec49d0d59eabb60d9aa943467ad8cd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e1d7311890be358ec42e7508eec18341ec49d0d59eabb60d9aa943467ad8cd1->enter($__internal_8e1d7311890be358ec42e7508eec18341ec49d0d59eabb60d9aa943467ad8cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2783e2f0dfe3f0f85f52bce15ec4d1594a5f3fa107fcb56ac6fde72c6d845eca->leave($__internal_2783e2f0dfe3f0f85f52bce15ec4d1594a5f3fa107fcb56ac6fde72c6d845eca_prof);

        
        $__internal_8e1d7311890be358ec42e7508eec18341ec49d0d59eabb60d9aa943467ad8cd1->leave($__internal_8e1d7311890be358ec42e7508eec18341ec49d0d59eabb60d9aa943467ad8cd1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e1b5dab2538c760d9404672351659e97f73f24d1ea5c0dbeaf5ce6d0c8e8aaf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1b5dab2538c760d9404672351659e97f73f24d1ea5c0dbeaf5ce6d0c8e8aaf9->enter($__internal_e1b5dab2538c760d9404672351659e97f73f24d1ea5c0dbeaf5ce6d0c8e8aaf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8dde2aa2a0152a70f28f353e0c25fcb1ed41b3e32db982947cdd8ea9011d82ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dde2aa2a0152a70f28f353e0c25fcb1ed41b3e32db982947cdd8ea9011d82ff->enter($__internal_8dde2aa2a0152a70f28f353e0c25fcb1ed41b3e32db982947cdd8ea9011d82ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Inscrivez-vous !";
        
        $__internal_8dde2aa2a0152a70f28f353e0c25fcb1ed41b3e32db982947cdd8ea9011d82ff->leave($__internal_8dde2aa2a0152a70f28f353e0c25fcb1ed41b3e32db982947cdd8ea9011d82ff_prof);

        
        $__internal_e1b5dab2538c760d9404672351659e97f73f24d1ea5c0dbeaf5ce6d0c8e8aaf9->leave($__internal_e1b5dab2538c760d9404672351659e97f73f24d1ea5c0dbeaf5ce6d0c8e8aaf9_prof);

    }

    // line 5
    public function block_style($context, array $blocks = array())
    {
        $__internal_68f05108a0a8b670033b6877c17e8e7c67c327b5678f4298c3acd42df41cd245 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68f05108a0a8b670033b6877c17e8e7c67c327b5678f4298c3acd42df41cd245->enter($__internal_68f05108a0a8b670033b6877c17e8e7c67c327b5678f4298c3acd42df41cd245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_4786ac8884f9017bad926e84534ba2e54afc00a0831926d497ff2734d2eb93fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4786ac8884f9017bad926e84534ba2e54afc00a0831926d497ff2734d2eb93fd->enter($__internal_4786ac8884f9017bad926e84534ba2e54afc00a0831926d497ff2734d2eb93fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 6
        echo "    <link rel=\"stylesheet\" href=\"../../public/css/pages/inscription.css\" type=\"text/css\" />
";
        
        $__internal_4786ac8884f9017bad926e84534ba2e54afc00a0831926d497ff2734d2eb93fd->leave($__internal_4786ac8884f9017bad926e84534ba2e54afc00a0831926d497ff2734d2eb93fd_prof);

        
        $__internal_68f05108a0a8b670033b6877c17e8e7c67c327b5678f4298c3acd42df41cd245->leave($__internal_68f05108a0a8b670033b6877c17e8e7c67c327b5678f4298c3acd42df41cd245_prof);

    }

    // line 9
    public function block_img_logo_path($context, array $blocks = array())
    {
        $__internal_e4d6c69722620f1b85fde4b4bcbc38e9b592411d05950385913255f12931b86e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4d6c69722620f1b85fde4b4bcbc38e9b592411d05950385913255f12931b86e->enter($__internal_e4d6c69722620f1b85fde4b4bcbc38e9b592411d05950385913255f12931b86e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img_logo_path"));

        $__internal_9c484621f217c01e0f0b05ad60e8e3b950224d2a2e34a43b149347850e4b45d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c484621f217c01e0f0b05ad60e8e3b950224d2a2e34a43b149347850e4b45d3->enter($__internal_9c484621f217c01e0f0b05ad60e8e3b950224d2a2e34a43b149347850e4b45d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img_logo_path"));

        echo "../../public/img/";
        
        $__internal_9c484621f217c01e0f0b05ad60e8e3b950224d2a2e34a43b149347850e4b45d3->leave($__internal_9c484621f217c01e0f0b05ad60e8e3b950224d2a2e34a43b149347850e4b45d3_prof);

        
        $__internal_e4d6c69722620f1b85fde4b4bcbc38e9b592411d05950385913255f12931b86e->leave($__internal_e4d6c69722620f1b85fde4b4bcbc38e9b592411d05950385913255f12931b86e_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_acd4d492a010159e3240f6a1d3913e12172bf247f16a72466c50c418b04b1a7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acd4d492a010159e3240f6a1d3913e12172bf247f16a72466c50c418b04b1a7a->enter($__internal_acd4d492a010159e3240f6a1d3913e12172bf247f16a72466c50c418b04b1a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_26dce9d33f6415145a6a8441d6333b1f78512143a1c874fc086707308b4688cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26dce9d33f6415145a6a8441d6333b1f78512143a1c874fc086707308b4688cd->enter($__internal_26dce9d33f6415145a6a8441d6333b1f78512143a1c874fc086707308b4688cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 12
        echo "    ";
        $this->loadTemplate("@User/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 12)->display($context);
        
        $__internal_26dce9d33f6415145a6a8441d6333b1f78512143a1c874fc086707308b4688cd->leave($__internal_26dce9d33f6415145a6a8441d6333b1f78512143a1c874fc086707308b4688cd_prof);

        
        $__internal_acd4d492a010159e3240f6a1d3913e12172bf247f16a72466c50c418b04b1a7a->leave($__internal_acd4d492a010159e3240f6a1d3913e12172bf247f16a72466c50c418b04b1a7a_prof);

    }

    // line 15
    public function block_img_footer_path($context, array $blocks = array())
    {
        $__internal_584ac647e21fc43317c0aab6e61edcd44c6aaa96c6830cda7e4f0e9b26501b5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_584ac647e21fc43317c0aab6e61edcd44c6aaa96c6830cda7e4f0e9b26501b5c->enter($__internal_584ac647e21fc43317c0aab6e61edcd44c6aaa96c6830cda7e4f0e9b26501b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img_footer_path"));

        $__internal_139704d9a7689ac8db795b52ad4a894462dc493545aa7031d0494b22b9cff1b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_139704d9a7689ac8db795b52ad4a894462dc493545aa7031d0494b22b9cff1b0->enter($__internal_139704d9a7689ac8db795b52ad4a894462dc493545aa7031d0494b22b9cff1b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img_footer_path"));

        echo "../../public/img/";
        
        $__internal_139704d9a7689ac8db795b52ad4a894462dc493545aa7031d0494b22b9cff1b0->leave($__internal_139704d9a7689ac8db795b52ad4a894462dc493545aa7031d0494b22b9cff1b0_prof);

        
        $__internal_584ac647e21fc43317c0aab6e61edcd44c6aaa96c6830cda7e4f0e9b26501b5c->leave($__internal_584ac647e21fc43317c0aab6e61edcd44c6aaa96c6830cda7e4f0e9b26501b5c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 15,  109 => 12,  100 => 11,  82 => 9,  71 => 6,  62 => 5,  44 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@User/layout.html.twig\" %}

{% block title %}Inscrivez-vous !{% endblock %}

{% block style %}
    <link rel=\"stylesheet\" href=\"../../public/css/pages/inscription.css\" type=\"text/css\" />
{% endblock %}

{% block img_logo_path %}../../public/img/{% endblock %}

{% block fos_user_content %}
    {% include \"@User/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}

{% block img_footer_path %}../../public/img/{% endblock %}", "FOSUserBundle:Registration:register.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/src/UserBundle/Resources/views/Registration/register.html.twig");
    }
}

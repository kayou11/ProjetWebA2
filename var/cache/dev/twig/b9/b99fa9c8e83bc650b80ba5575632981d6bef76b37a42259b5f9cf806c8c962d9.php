<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_1b20ba1c8a5041e2f3bf9635980b4009b776d06ded30fbdef0736ae5342df112 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@User/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_988b31a482ef6a1a0fdfc29a1afa2f0d94a0538692424b98ab3638520fdb8370 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_988b31a482ef6a1a0fdfc29a1afa2f0d94a0538692424b98ab3638520fdb8370->enter($__internal_988b31a482ef6a1a0fdfc29a1afa2f0d94a0538692424b98ab3638520fdb8370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_a6794dbb9437f146026d860d0f743ec2811b7cb832e7f8c699c0014c8931b772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6794dbb9437f146026d860d0f743ec2811b7cb832e7f8c699c0014c8931b772->enter($__internal_a6794dbb9437f146026d860d0f743ec2811b7cb832e7f8c699c0014c8931b772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_988b31a482ef6a1a0fdfc29a1afa2f0d94a0538692424b98ab3638520fdb8370->leave($__internal_988b31a482ef6a1a0fdfc29a1afa2f0d94a0538692424b98ab3638520fdb8370_prof);

        
        $__internal_a6794dbb9437f146026d860d0f743ec2811b7cb832e7f8c699c0014c8931b772->leave($__internal_a6794dbb9437f146026d860d0f743ec2811b7cb832e7f8c699c0014c8931b772_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_7c109c371508e32c4314848f4325f8ef6ecf86db27b2b41bed2326975fdffeb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c109c371508e32c4314848f4325f8ef6ecf86db27b2b41bed2326975fdffeb7->enter($__internal_7c109c371508e32c4314848f4325f8ef6ecf86db27b2b41bed2326975fdffeb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1024c03300af682929f7bd3bc1f66120ecfa7125d0ee69aba9eabb4584121fc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1024c03300af682929f7bd3bc1f66120ecfa7125d0ee69aba9eabb4584121fc6->enter($__internal_1024c03300af682929f7bd3bc1f66120ecfa7125d0ee69aba9eabb4584121fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Inscrivez-vous !";
        
        $__internal_1024c03300af682929f7bd3bc1f66120ecfa7125d0ee69aba9eabb4584121fc6->leave($__internal_1024c03300af682929f7bd3bc1f66120ecfa7125d0ee69aba9eabb4584121fc6_prof);

        
        $__internal_7c109c371508e32c4314848f4325f8ef6ecf86db27b2b41bed2326975fdffeb7->leave($__internal_7c109c371508e32c4314848f4325f8ef6ecf86db27b2b41bed2326975fdffeb7_prof);

    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        $__internal_49586623d3f6bdf43b0ec1c9f18155f70e411ac9b87e00c712382d02b8898c7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49586623d3f6bdf43b0ec1c9f18155f70e411ac9b87e00c712382d02b8898c7e->enter($__internal_49586623d3f6bdf43b0ec1c9f18155f70e411ac9b87e00c712382d02b8898c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_0c6424d8f66c6dca18fff1a23d3ade70d88df050575b2a2988dbcfa01641ccd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c6424d8f66c6dca18fff1a23d3ade70d88df050575b2a2988dbcfa01641ccd8->enter($__internal_0c6424d8f66c6dca18fff1a23d3ade70d88df050575b2a2988dbcfa01641ccd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"../public/css/pages/inscription.css\" type=\"text/css\" />
";
        
        $__internal_0c6424d8f66c6dca18fff1a23d3ade70d88df050575b2a2988dbcfa01641ccd8->leave($__internal_0c6424d8f66c6dca18fff1a23d3ade70d88df050575b2a2988dbcfa01641ccd8_prof);

        
        $__internal_49586623d3f6bdf43b0ec1c9f18155f70e411ac9b87e00c712382d02b8898c7e->leave($__internal_49586623d3f6bdf43b0ec1c9f18155f70e411ac9b87e00c712382d02b8898c7e_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3da243cbb9ee780eb8056fc28934f9efe51f3f33f2b288874ab6707abfb60ace = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3da243cbb9ee780eb8056fc28934f9efe51f3f33f2b288874ab6707abfb60ace->enter($__internal_3da243cbb9ee780eb8056fc28934f9efe51f3f33f2b288874ab6707abfb60ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6286607cccbefdca178cd711d682145957361bc252b1dff529f5410f4cb086e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6286607cccbefdca178cd711d682145957361bc252b1dff529f5410f4cb086e8->enter($__internal_6286607cccbefdca178cd711d682145957361bc252b1dff529f5410f4cb086e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "    ";
        $this->loadTemplate("@User/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 7)->display($context);
        
        $__internal_6286607cccbefdca178cd711d682145957361bc252b1dff529f5410f4cb086e8->leave($__internal_6286607cccbefdca178cd711d682145957361bc252b1dff529f5410f4cb086e8_prof);

        
        $__internal_3da243cbb9ee780eb8056fc28934f9efe51f3f33f2b288874ab6707abfb60ace->leave($__internal_3da243cbb9ee780eb8056fc28934f9efe51f3f33f2b288874ab6707abfb60ace_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% block title %}Inscrivez-vous !{% endblock %}
{% block style %}
    <link rel=\"stylesheet\" href=\"../public/css/pages/inscription.css\" type=\"text/css\" />
{% endblock %}
{% block fos_user_content %}
    {% include \"@User/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}", "@FOSUser/Registration/register.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/src/UserBundle/Resources/views/Registration/register.html.twig");
    }
}

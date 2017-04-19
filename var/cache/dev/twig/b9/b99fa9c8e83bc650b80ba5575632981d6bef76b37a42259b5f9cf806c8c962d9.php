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
        $__internal_960b6d68fe4a73748c6c5cf97fbe16b9a0dd3f78a9566f7ac62ebc6f660e5691 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_960b6d68fe4a73748c6c5cf97fbe16b9a0dd3f78a9566f7ac62ebc6f660e5691->enter($__internal_960b6d68fe4a73748c6c5cf97fbe16b9a0dd3f78a9566f7ac62ebc6f660e5691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_f360a04e955ad83a31acb3ef91f3e84218e5ffc1bd21e1ec0b0afa350b80660c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f360a04e955ad83a31acb3ef91f3e84218e5ffc1bd21e1ec0b0afa350b80660c->enter($__internal_f360a04e955ad83a31acb3ef91f3e84218e5ffc1bd21e1ec0b0afa350b80660c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_960b6d68fe4a73748c6c5cf97fbe16b9a0dd3f78a9566f7ac62ebc6f660e5691->leave($__internal_960b6d68fe4a73748c6c5cf97fbe16b9a0dd3f78a9566f7ac62ebc6f660e5691_prof);

        
        $__internal_f360a04e955ad83a31acb3ef91f3e84218e5ffc1bd21e1ec0b0afa350b80660c->leave($__internal_f360a04e955ad83a31acb3ef91f3e84218e5ffc1bd21e1ec0b0afa350b80660c_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ab1afe1ee5ca5d3b35818089f4538246c0dc0126a8cef3ed49e1b1de6b2e42e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab1afe1ee5ca5d3b35818089f4538246c0dc0126a8cef3ed49e1b1de6b2e42e6->enter($__internal_ab1afe1ee5ca5d3b35818089f4538246c0dc0126a8cef3ed49e1b1de6b2e42e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f20115db50dc52a31d652ce5fa6c472aa320b536e2cdfa30258257470fef9853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f20115db50dc52a31d652ce5fa6c472aa320b536e2cdfa30258257470fef9853->enter($__internal_f20115db50dc52a31d652ce5fa6c472aa320b536e2cdfa30258257470fef9853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Inscrivez-vous !";
        
        $__internal_f20115db50dc52a31d652ce5fa6c472aa320b536e2cdfa30258257470fef9853->leave($__internal_f20115db50dc52a31d652ce5fa6c472aa320b536e2cdfa30258257470fef9853_prof);

        
        $__internal_ab1afe1ee5ca5d3b35818089f4538246c0dc0126a8cef3ed49e1b1de6b2e42e6->leave($__internal_ab1afe1ee5ca5d3b35818089f4538246c0dc0126a8cef3ed49e1b1de6b2e42e6_prof);

    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        $__internal_00b551964ec3e34d396e147a69f8aa1822e26e8b493deb6ad26eb2d03bd37a42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00b551964ec3e34d396e147a69f8aa1822e26e8b493deb6ad26eb2d03bd37a42->enter($__internal_00b551964ec3e34d396e147a69f8aa1822e26e8b493deb6ad26eb2d03bd37a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_0b617661b5c4a22b32556f191b089320e0b75ac6035b11a758503e9588a2218c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b617661b5c4a22b32556f191b089320e0b75ac6035b11a758503e9588a2218c->enter($__internal_0b617661b5c4a22b32556f191b089320e0b75ac6035b11a758503e9588a2218c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"../../public/css/pages/inscription.css\" type=\"text/css\" />
";
        
        $__internal_0b617661b5c4a22b32556f191b089320e0b75ac6035b11a758503e9588a2218c->leave($__internal_0b617661b5c4a22b32556f191b089320e0b75ac6035b11a758503e9588a2218c_prof);

        
        $__internal_00b551964ec3e34d396e147a69f8aa1822e26e8b493deb6ad26eb2d03bd37a42->leave($__internal_00b551964ec3e34d396e147a69f8aa1822e26e8b493deb6ad26eb2d03bd37a42_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d4cdd5a4c88f53c41054ae762b9a559d73ddb8ed204a25ea6607dc605d99b19a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4cdd5a4c88f53c41054ae762b9a559d73ddb8ed204a25ea6607dc605d99b19a->enter($__internal_d4cdd5a4c88f53c41054ae762b9a559d73ddb8ed204a25ea6607dc605d99b19a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_18fdda3fc8fbccb257b6268eb22adb385881120434cd6595a7ccb14b2ef29057 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18fdda3fc8fbccb257b6268eb22adb385881120434cd6595a7ccb14b2ef29057->enter($__internal_18fdda3fc8fbccb257b6268eb22adb385881120434cd6595a7ccb14b2ef29057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "    ";
        $this->loadTemplate("@User/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 7)->display($context);
        
        $__internal_18fdda3fc8fbccb257b6268eb22adb385881120434cd6595a7ccb14b2ef29057->leave($__internal_18fdda3fc8fbccb257b6268eb22adb385881120434cd6595a7ccb14b2ef29057_prof);

        
        $__internal_d4cdd5a4c88f53c41054ae762b9a559d73ddb8ed204a25ea6607dc605d99b19a->leave($__internal_d4cdd5a4c88f53c41054ae762b9a559d73ddb8ed204a25ea6607dc605d99b19a_prof);

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
    <link rel=\"stylesheet\" href=\"../../public/css/pages/inscription.css\" type=\"text/css\" />
{% endblock %}
{% block fos_user_content %}
    {% include \"@User/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}", "@FOSUser/Registration/register.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/src/UserBundle/Resources/views/Registration/register.html.twig");
    }
}

<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_70c18c6996334e590850daa55edb97ac71d785e068c9d940fd5ff1e0360aba78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4dc7de401f63af022a934b117ce6e0a1e5bf76a952d4a575599880c1f123333a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dc7de401f63af022a934b117ce6e0a1e5bf76a952d4a575599880c1f123333a->enter($__internal_4dc7de401f63af022a934b117ce6e0a1e5bf76a952d4a575599880c1f123333a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_d91259c50ca174a3603a08e098356948a5e86fea0a9538494e096d69725c0f46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d91259c50ca174a3603a08e098356948a5e86fea0a9538494e096d69725c0f46->enter($__internal_d91259c50ca174a3603a08e098356948a5e86fea0a9538494e096d69725c0f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4dc7de401f63af022a934b117ce6e0a1e5bf76a952d4a575599880c1f123333a->leave($__internal_4dc7de401f63af022a934b117ce6e0a1e5bf76a952d4a575599880c1f123333a_prof);

        
        $__internal_d91259c50ca174a3603a08e098356948a5e86fea0a9538494e096d69725c0f46->leave($__internal_d91259c50ca174a3603a08e098356948a5e86fea0a9538494e096d69725c0f46_prof);

    }

    // line 2
    public function block_style($context, array $blocks = array())
    {
        $__internal_5a07cd5e0699d261d11509d5ba491aaa1e93e209538e0a7c0f3241bcf0fccd3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a07cd5e0699d261d11509d5ba491aaa1e93e209538e0a7c0f3241bcf0fccd3d->enter($__internal_5a07cd5e0699d261d11509d5ba491aaa1e93e209538e0a7c0f3241bcf0fccd3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_c2c2c0c13d719fa3f3211bc5231af4d6cc6dd57382267cad967a1d63947e1d5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2c2c0c13d719fa3f3211bc5231af4d6cc6dd57382267cad967a1d63947e1d5d->enter($__internal_c2c2c0c13d719fa3f3211bc5231af4d6cc6dd57382267cad967a1d63947e1d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 3
        echo "    <link rel=\"stylesheet\" href=\"../../public/css/pages/change_password.css\" type=\"text/css\" />
";
        
        $__internal_c2c2c0c13d719fa3f3211bc5231af4d6cc6dd57382267cad967a1d63947e1d5d->leave($__internal_c2c2c0c13d719fa3f3211bc5231af4d6cc6dd57382267cad967a1d63947e1d5d_prof);

        
        $__internal_5a07cd5e0699d261d11509d5ba491aaa1e93e209538e0a7c0f3241bcf0fccd3d->leave($__internal_5a07cd5e0699d261d11509d5ba491aaa1e93e209538e0a7c0f3241bcf0fccd3d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_47d9be3ebe9e3f5bfa0cabceda157985f8a725f29bdc4e76943ca21c34e07c3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47d9be3ebe9e3f5bfa0cabceda157985f8a725f29bdc4e76943ca21c34e07c3b->enter($__internal_47d9be3ebe9e3f5bfa0cabceda157985f8a725f29bdc4e76943ca21c34e07c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6b57bafc2b83abdc83c53453a905b0cad2a0f64c900b3ca4b5c7093903a3af93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b57bafc2b83abdc83c53453a905b0cad2a0f64c900b3ca4b5c7093903a3af93->enter($__internal_6b57bafc2b83abdc83c53453a905b0cad2a0f64c900b3ca4b5c7093903a3af93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 6)->display($context);
        
        $__internal_6b57bafc2b83abdc83c53453a905b0cad2a0f64c900b3ca4b5c7093903a3af93->leave($__internal_6b57bafc2b83abdc83c53453a905b0cad2a0f64c900b3ca4b5c7093903a3af93_prof);

        
        $__internal_47d9be3ebe9e3f5bfa0cabceda157985f8a725f29bdc4e76943ca21c34e07c3b->leave($__internal_47d9be3ebe9e3f5bfa0cabceda157985f8a725f29bdc4e76943ca21c34e07c3b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 6,  61 => 5,  50 => 3,  41 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}
{% block style %}
    <link rel=\"stylesheet\" href=\"../../public/css/pages/change_password.css\" type=\"text/css\" />
{% endblock %}
{% block fos_user_content %}
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/src/UserBundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}

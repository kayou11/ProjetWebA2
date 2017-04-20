<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_6b3195a6b35b4ec2a04dad4c00b5090a82b155a71f03daa58f45121bcff6e08f extends Twig_Template
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
        $__internal_ea8224b031bf03760e9bf338678a191ea768389e48326842d2a3c9f4fa26e52d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea8224b031bf03760e9bf338678a191ea768389e48326842d2a3c9f4fa26e52d->enter($__internal_ea8224b031bf03760e9bf338678a191ea768389e48326842d2a3c9f4fa26e52d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_c72186babe2ef355627bf4fefd1a378ef7e539812f7eb7bc70e989056438be7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c72186babe2ef355627bf4fefd1a378ef7e539812f7eb7bc70e989056438be7d->enter($__internal_c72186babe2ef355627bf4fefd1a378ef7e539812f7eb7bc70e989056438be7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea8224b031bf03760e9bf338678a191ea768389e48326842d2a3c9f4fa26e52d->leave($__internal_ea8224b031bf03760e9bf338678a191ea768389e48326842d2a3c9f4fa26e52d_prof);

        
        $__internal_c72186babe2ef355627bf4fefd1a378ef7e539812f7eb7bc70e989056438be7d->leave($__internal_c72186babe2ef355627bf4fefd1a378ef7e539812f7eb7bc70e989056438be7d_prof);

    }

    // line 2
    public function block_style($context, array $blocks = array())
    {
        $__internal_901066e2fe76e6f3751a9cf8b1c25de27121cbfb0bfa6ed7eeca4d39aa56c4fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_901066e2fe76e6f3751a9cf8b1c25de27121cbfb0bfa6ed7eeca4d39aa56c4fa->enter($__internal_901066e2fe76e6f3751a9cf8b1c25de27121cbfb0bfa6ed7eeca4d39aa56c4fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_8c202dfa348290cd5925e5c70828a21ea002a10109d647154fbfceefab34b123 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c202dfa348290cd5925e5c70828a21ea002a10109d647154fbfceefab34b123->enter($__internal_8c202dfa348290cd5925e5c70828a21ea002a10109d647154fbfceefab34b123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 3
        echo "    <link rel=\"stylesheet\" href=\"../../public/css/pages/change_password.css\" type=\"text/css\" />
";
        
        $__internal_8c202dfa348290cd5925e5c70828a21ea002a10109d647154fbfceefab34b123->leave($__internal_8c202dfa348290cd5925e5c70828a21ea002a10109d647154fbfceefab34b123_prof);

        
        $__internal_901066e2fe76e6f3751a9cf8b1c25de27121cbfb0bfa6ed7eeca4d39aa56c4fa->leave($__internal_901066e2fe76e6f3751a9cf8b1c25de27121cbfb0bfa6ed7eeca4d39aa56c4fa_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dbfde7ce2b043805749dad1f4ba92a94ba46bb325a6c5e8bbf44318b9fd570e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbfde7ce2b043805749dad1f4ba92a94ba46bb325a6c5e8bbf44318b9fd570e2->enter($__internal_dbfde7ce2b043805749dad1f4ba92a94ba46bb325a6c5e8bbf44318b9fd570e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6cf6c0976018950ee85fb1566ae1ee573bab9c2fb534034f28304eb470d1374a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cf6c0976018950ee85fb1566ae1ee573bab9c2fb534034f28304eb470d1374a->enter($__internal_6cf6c0976018950ee85fb1566ae1ee573bab9c2fb534034f28304eb470d1374a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 6)->display($context);
        
        $__internal_6cf6c0976018950ee85fb1566ae1ee573bab9c2fb534034f28304eb470d1374a->leave($__internal_6cf6c0976018950ee85fb1566ae1ee573bab9c2fb534034f28304eb470d1374a_prof);

        
        $__internal_dbfde7ce2b043805749dad1f4ba92a94ba46bb325a6c5e8bbf44318b9fd570e2->leave($__internal_dbfde7ce2b043805749dad1f4ba92a94ba46bb325a6c5e8bbf44318b9fd570e2_prof);

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

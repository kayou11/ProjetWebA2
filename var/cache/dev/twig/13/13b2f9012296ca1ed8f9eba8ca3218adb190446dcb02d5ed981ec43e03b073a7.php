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
        $__internal_77e613692c38bd100b7d394c2559928fb987a957da09976b22be8bfc75c70216 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77e613692c38bd100b7d394c2559928fb987a957da09976b22be8bfc75c70216->enter($__internal_77e613692c38bd100b7d394c2559928fb987a957da09976b22be8bfc75c70216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_788edc3c09f8e89f2615315354da32e36f9f12dee93287ea4025abf84f3124bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_788edc3c09f8e89f2615315354da32e36f9f12dee93287ea4025abf84f3124bc->enter($__internal_788edc3c09f8e89f2615315354da32e36f9f12dee93287ea4025abf84f3124bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77e613692c38bd100b7d394c2559928fb987a957da09976b22be8bfc75c70216->leave($__internal_77e613692c38bd100b7d394c2559928fb987a957da09976b22be8bfc75c70216_prof);

        
        $__internal_788edc3c09f8e89f2615315354da32e36f9f12dee93287ea4025abf84f3124bc->leave($__internal_788edc3c09f8e89f2615315354da32e36f9f12dee93287ea4025abf84f3124bc_prof);

    }

    // line 2
    public function block_style($context, array $blocks = array())
    {
        $__internal_d375ba9725b4d3cc6b6f3621edc92cb17a7869d83021897988130e58c0894a98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d375ba9725b4d3cc6b6f3621edc92cb17a7869d83021897988130e58c0894a98->enter($__internal_d375ba9725b4d3cc6b6f3621edc92cb17a7869d83021897988130e58c0894a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_19d34174851ed7d8cfcf110c27469cdeaa078bd0b25f2bd66b68193da80a96d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19d34174851ed7d8cfcf110c27469cdeaa078bd0b25f2bd66b68193da80a96d8->enter($__internal_19d34174851ed7d8cfcf110c27469cdeaa078bd0b25f2bd66b68193da80a96d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 3
        echo "    <link rel=\"stylesheet\" href=\"../../public/css/pages/change_password.css\" type=\"text/css\" />
";
        
        $__internal_19d34174851ed7d8cfcf110c27469cdeaa078bd0b25f2bd66b68193da80a96d8->leave($__internal_19d34174851ed7d8cfcf110c27469cdeaa078bd0b25f2bd66b68193da80a96d8_prof);

        
        $__internal_d375ba9725b4d3cc6b6f3621edc92cb17a7869d83021897988130e58c0894a98->leave($__internal_d375ba9725b4d3cc6b6f3621edc92cb17a7869d83021897988130e58c0894a98_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dd5eda205b0916cf148e58f6e42ae30f87937f04aad5bef2c5e34d6ef81ac78d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd5eda205b0916cf148e58f6e42ae30f87937f04aad5bef2c5e34d6ef81ac78d->enter($__internal_dd5eda205b0916cf148e58f6e42ae30f87937f04aad5bef2c5e34d6ef81ac78d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bbac0690766ebe0b8ba72277e2585a97117fdfff7bf73b3075a6e262561778ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbac0690766ebe0b8ba72277e2585a97117fdfff7bf73b3075a6e262561778ae->enter($__internal_bbac0690766ebe0b8ba72277e2585a97117fdfff7bf73b3075a6e262561778ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 6)->display($context);
        
        $__internal_bbac0690766ebe0b8ba72277e2585a97117fdfff7bf73b3075a6e262561778ae->leave($__internal_bbac0690766ebe0b8ba72277e2585a97117fdfff7bf73b3075a6e262561778ae_prof);

        
        $__internal_dd5eda205b0916cf148e58f6e42ae30f87937f04aad5bef2c5e34d6ef81ac78d->leave($__internal_dd5eda205b0916cf148e58f6e42ae30f87937f04aad5bef2c5e34d6ef81ac78d_prof);

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

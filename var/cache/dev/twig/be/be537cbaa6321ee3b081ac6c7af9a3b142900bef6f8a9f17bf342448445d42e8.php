<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_be96b9124e612fe557a02b077373b2d91c056f457240e88e80b37ea1c063f472 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c15dc2ac157ee2c231a7d984853324bf520918a13bf058077dc09791d0b78efe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c15dc2ac157ee2c231a7d984853324bf520918a13bf058077dc09791d0b78efe->enter($__internal_c15dc2ac157ee2c231a7d984853324bf520918a13bf058077dc09791d0b78efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_865590e241185fc60a3137f1575db7db005925fb6068337913ad442d94ab3408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_865590e241185fc60a3137f1575db7db005925fb6068337913ad442d94ab3408->enter($__internal_865590e241185fc60a3137f1575db7db005925fb6068337913ad442d94ab3408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c15dc2ac157ee2c231a7d984853324bf520918a13bf058077dc09791d0b78efe->leave($__internal_c15dc2ac157ee2c231a7d984853324bf520918a13bf058077dc09791d0b78efe_prof);

        
        $__internal_865590e241185fc60a3137f1575db7db005925fb6068337913ad442d94ab3408->leave($__internal_865590e241185fc60a3137f1575db7db005925fb6068337913ad442d94ab3408_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_72eae1a25dcebce4956c1abb736df5080b48b087e5312cf092b84fa257beed3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72eae1a25dcebce4956c1abb736df5080b48b087e5312cf092b84fa257beed3d->enter($__internal_72eae1a25dcebce4956c1abb736df5080b48b087e5312cf092b84fa257beed3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3eb35fb5623672c87b7b05605f7a5580d62bc5e209be7e96c394dbe003727311 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eb35fb5623672c87b7b05605f7a5580d62bc5e209be7e96c394dbe003727311->enter($__internal_3eb35fb5623672c87b7b05605f7a5580d62bc5e209be7e96c394dbe003727311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_3eb35fb5623672c87b7b05605f7a5580d62bc5e209be7e96c394dbe003727311->leave($__internal_3eb35fb5623672c87b7b05605f7a5580d62bc5e209be7e96c394dbe003727311_prof);

        
        $__internal_72eae1a25dcebce4956c1abb736df5080b48b087e5312cf092b84fa257beed3d->leave($__internal_72eae1a25dcebce4956c1abb736df5080b48b087e5312cf092b84fa257beed3d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}

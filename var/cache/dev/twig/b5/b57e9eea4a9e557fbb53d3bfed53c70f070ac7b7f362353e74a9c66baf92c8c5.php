<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_d2a181fcb20c786fd82e0508c84712108981d42fb01db58a7ab10d4bfaa3bbdc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_a141a9460fbea57d2191e5f4eaf2101ad3b1dbe197d8e49be5101282d359a635 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a141a9460fbea57d2191e5f4eaf2101ad3b1dbe197d8e49be5101282d359a635->enter($__internal_a141a9460fbea57d2191e5f4eaf2101ad3b1dbe197d8e49be5101282d359a635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_96750b137b0dc3c0fefee30cf7c247eeb5983e66a498752b1241b640d1936934 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96750b137b0dc3c0fefee30cf7c247eeb5983e66a498752b1241b640d1936934->enter($__internal_96750b137b0dc3c0fefee30cf7c247eeb5983e66a498752b1241b640d1936934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a141a9460fbea57d2191e5f4eaf2101ad3b1dbe197d8e49be5101282d359a635->leave($__internal_a141a9460fbea57d2191e5f4eaf2101ad3b1dbe197d8e49be5101282d359a635_prof);

        
        $__internal_96750b137b0dc3c0fefee30cf7c247eeb5983e66a498752b1241b640d1936934->leave($__internal_96750b137b0dc3c0fefee30cf7c247eeb5983e66a498752b1241b640d1936934_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_76314a1b5cd3fd966922b3a4c506ff71f110571e74b064139b198cee555410eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76314a1b5cd3fd966922b3a4c506ff71f110571e74b064139b198cee555410eb->enter($__internal_76314a1b5cd3fd966922b3a4c506ff71f110571e74b064139b198cee555410eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a926b3cbf54639dec8835a2de9e7f58972fcf8cca1f7c1bc11281ba3d40659ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a926b3cbf54639dec8835a2de9e7f58972fcf8cca1f7c1bc11281ba3d40659ef->enter($__internal_a926b3cbf54639dec8835a2de9e7f58972fcf8cca1f7c1bc11281ba3d40659ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_a926b3cbf54639dec8835a2de9e7f58972fcf8cca1f7c1bc11281ba3d40659ef->leave($__internal_a926b3cbf54639dec8835a2de9e7f58972fcf8cca1f7c1bc11281ba3d40659ef_prof);

        
        $__internal_76314a1b5cd3fd966922b3a4c506ff71f110571e74b064139b198cee555410eb->leave($__internal_76314a1b5cd3fd966922b3a4c506ff71f110571e74b064139b198cee555410eb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}

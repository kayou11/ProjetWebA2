<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_fee732bf05c9152a5cf447675ac22fe8f1ee2aa7199c6b622f9bb10cf93d0a41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_f5fb14b642661c697371ca8068e74bed9ab61b89e24f313bf84173d06bd33617 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5fb14b642661c697371ca8068e74bed9ab61b89e24f313bf84173d06bd33617->enter($__internal_f5fb14b642661c697371ca8068e74bed9ab61b89e24f313bf84173d06bd33617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_ab1a3a2b0af71b3a45808a5cf05f3f0ac6085720f1a92004847c600596adb36a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab1a3a2b0af71b3a45808a5cf05f3f0ac6085720f1a92004847c600596adb36a->enter($__internal_ab1a3a2b0af71b3a45808a5cf05f3f0ac6085720f1a92004847c600596adb36a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5fb14b642661c697371ca8068e74bed9ab61b89e24f313bf84173d06bd33617->leave($__internal_f5fb14b642661c697371ca8068e74bed9ab61b89e24f313bf84173d06bd33617_prof);

        
        $__internal_ab1a3a2b0af71b3a45808a5cf05f3f0ac6085720f1a92004847c600596adb36a->leave($__internal_ab1a3a2b0af71b3a45808a5cf05f3f0ac6085720f1a92004847c600596adb36a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_82ba723f708999852ad0ef9d48413a9d41f3d71cdc4a1e1a91203ef866bf9a58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82ba723f708999852ad0ef9d48413a9d41f3d71cdc4a1e1a91203ef866bf9a58->enter($__internal_82ba723f708999852ad0ef9d48413a9d41f3d71cdc4a1e1a91203ef866bf9a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_90217f2af06e7540c2630922b17d3ed4f924713c2c36bf4017a3f80d846aab67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90217f2af06e7540c2630922b17d3ed4f924713c2c36bf4017a3f80d846aab67->enter($__internal_90217f2af06e7540c2630922b17d3ed4f924713c2c36bf4017a3f80d846aab67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_90217f2af06e7540c2630922b17d3ed4f924713c2c36bf4017a3f80d846aab67->leave($__internal_90217f2af06e7540c2630922b17d3ed4f924713c2c36bf4017a3f80d846aab67_prof);

        
        $__internal_82ba723f708999852ad0ef9d48413a9d41f3d71cdc4a1e1a91203ef866bf9a58->leave($__internal_82ba723f708999852ad0ef9d48413a9d41f3d71cdc4a1e1a91203ef866bf9a58_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}

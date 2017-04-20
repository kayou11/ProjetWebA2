<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_65441f6b2458d1e4e0e0ba82d47960727d870b3e9c6cdbf8f9881a02482e2df5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@User/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_38b6821aff6dc2377ba9bfa95a83a77270f4c6e996eb13f0d3b06010566803f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38b6821aff6dc2377ba9bfa95a83a77270f4c6e996eb13f0d3b06010566803f0->enter($__internal_38b6821aff6dc2377ba9bfa95a83a77270f4c6e996eb13f0d3b06010566803f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_8d8d091664de06da619029d49087fdd8d0185b2dab5d4f5ec9fa6390c77183e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d8d091664de06da619029d49087fdd8d0185b2dab5d4f5ec9fa6390c77183e7->enter($__internal_8d8d091664de06da619029d49087fdd8d0185b2dab5d4f5ec9fa6390c77183e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38b6821aff6dc2377ba9bfa95a83a77270f4c6e996eb13f0d3b06010566803f0->leave($__internal_38b6821aff6dc2377ba9bfa95a83a77270f4c6e996eb13f0d3b06010566803f0_prof);

        
        $__internal_8d8d091664de06da619029d49087fdd8d0185b2dab5d4f5ec9fa6390c77183e7->leave($__internal_8d8d091664de06da619029d49087fdd8d0185b2dab5d4f5ec9fa6390c77183e7_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_20db84ed788d3be854a254d03ecc50eca5120f6f2317f86b76c538f78a2e36b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20db84ed788d3be854a254d03ecc50eca5120f6f2317f86b76c538f78a2e36b2->enter($__internal_20db84ed788d3be854a254d03ecc50eca5120f6f2317f86b76c538f78a2e36b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5194fdc68ddf10ebe462229b2e9b183478c818ecb0bfe3508ed991f6af45f20b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5194fdc68ddf10ebe462229b2e9b183478c818ecb0bfe3508ed991f6af45f20b->enter($__internal_5194fdc68ddf10ebe462229b2e9b183478c818ecb0bfe3508ed991f6af45f20b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mon Compte";
        
        $__internal_5194fdc68ddf10ebe462229b2e9b183478c818ecb0bfe3508ed991f6af45f20b->leave($__internal_5194fdc68ddf10ebe462229b2e9b183478c818ecb0bfe3508ed991f6af45f20b_prof);

        
        $__internal_20db84ed788d3be854a254d03ecc50eca5120f6f2317f86b76c538f78a2e36b2->leave($__internal_20db84ed788d3be854a254d03ecc50eca5120f6f2317f86b76c538f78a2e36b2_prof);

    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        $__internal_4e9791a5680e4a34b73354039cfc7cfb2af0b02b9a0fd974b8be84008d6378a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e9791a5680e4a34b73354039cfc7cfb2af0b02b9a0fd974b8be84008d6378a6->enter($__internal_4e9791a5680e4a34b73354039cfc7cfb2af0b02b9a0fd974b8be84008d6378a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_7ec4421a540f133f03027207af85b8276073b73626f456b5986dbabec7a6036b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ec4421a540f133f03027207af85b8276073b73626f456b5986dbabec7a6036b->enter($__internal_7ec4421a540f133f03027207af85b8276073b73626f456b5986dbabec7a6036b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"../../public/css/pages/profil.css\" type=\"text/css\" />
";
        
        $__internal_7ec4421a540f133f03027207af85b8276073b73626f456b5986dbabec7a6036b->leave($__internal_7ec4421a540f133f03027207af85b8276073b73626f456b5986dbabec7a6036b_prof);

        
        $__internal_4e9791a5680e4a34b73354039cfc7cfb2af0b02b9a0fd974b8be84008d6378a6->leave($__internal_4e9791a5680e4a34b73354039cfc7cfb2af0b02b9a0fd974b8be84008d6378a6_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2ae6c293e2e0abee292c5c4a4413fdbf6b94ed8148aae6984f9b2f984a216673 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ae6c293e2e0abee292c5c4a4413fdbf6b94ed8148aae6984f9b2f984a216673->enter($__internal_2ae6c293e2e0abee292c5c4a4413fdbf6b94ed8148aae6984f9b2f984a216673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_401137854447d88c42a8538630c62b2b40f634f5d3acd33363e340295042772e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_401137854447d88c42a8538630c62b2b40f634f5d3acd33363e340295042772e->enter($__internal_401137854447d88c42a8538630c62b2b40f634f5d3acd33363e340295042772e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        $this->loadTemplate("@User/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 7)->display($context);
        
        $__internal_401137854447d88c42a8538630c62b2b40f634f5d3acd33363e340295042772e->leave($__internal_401137854447d88c42a8538630c62b2b40f634f5d3acd33363e340295042772e_prof);

        
        $__internal_2ae6c293e2e0abee292c5c4a4413fdbf6b94ed8148aae6984f9b2f984a216673->leave($__internal_2ae6c293e2e0abee292c5c4a4413fdbf6b94ed8148aae6984f9b2f984a216673_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% block title %}Mon Compte{% endblock %}
{% block style %}
    <link rel=\"stylesheet\" href=\"../../public/css/pages/profil.css\" type=\"text/css\" />
{% endblock %}
{% block fos_user_content %}
{% include \"@User/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/src/UserBundle/Resources/views/Profile/show.html.twig");
    }
}

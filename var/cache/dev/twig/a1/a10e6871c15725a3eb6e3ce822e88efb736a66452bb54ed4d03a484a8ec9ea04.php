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
        $__internal_0b191e6e1318cc2b9573c2868b9512e2da143d07d9d5b99ff5ddeb390d348d63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b191e6e1318cc2b9573c2868b9512e2da143d07d9d5b99ff5ddeb390d348d63->enter($__internal_0b191e6e1318cc2b9573c2868b9512e2da143d07d9d5b99ff5ddeb390d348d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_49a5878a10d1514664ee61a96cdf130c370eb733a0dce28556d4fd52bc718356 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49a5878a10d1514664ee61a96cdf130c370eb733a0dce28556d4fd52bc718356->enter($__internal_49a5878a10d1514664ee61a96cdf130c370eb733a0dce28556d4fd52bc718356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b191e6e1318cc2b9573c2868b9512e2da143d07d9d5b99ff5ddeb390d348d63->leave($__internal_0b191e6e1318cc2b9573c2868b9512e2da143d07d9d5b99ff5ddeb390d348d63_prof);

        
        $__internal_49a5878a10d1514664ee61a96cdf130c370eb733a0dce28556d4fd52bc718356->leave($__internal_49a5878a10d1514664ee61a96cdf130c370eb733a0dce28556d4fd52bc718356_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c43be2b0588944831ae3bd587d44ac8f7aed58504bafe4787834ffdaafa4a2a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c43be2b0588944831ae3bd587d44ac8f7aed58504bafe4787834ffdaafa4a2a6->enter($__internal_c43be2b0588944831ae3bd587d44ac8f7aed58504bafe4787834ffdaafa4a2a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_63a1df05d7956902e171058645e4d98a53d0f6a2c3fd32bbd11dc9149a1fc24e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63a1df05d7956902e171058645e4d98a53d0f6a2c3fd32bbd11dc9149a1fc24e->enter($__internal_63a1df05d7956902e171058645e4d98a53d0f6a2c3fd32bbd11dc9149a1fc24e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Inscrivez-vous !";
        
        $__internal_63a1df05d7956902e171058645e4d98a53d0f6a2c3fd32bbd11dc9149a1fc24e->leave($__internal_63a1df05d7956902e171058645e4d98a53d0f6a2c3fd32bbd11dc9149a1fc24e_prof);

        
        $__internal_c43be2b0588944831ae3bd587d44ac8f7aed58504bafe4787834ffdaafa4a2a6->leave($__internal_c43be2b0588944831ae3bd587d44ac8f7aed58504bafe4787834ffdaafa4a2a6_prof);

    }

    // line 5
    public function block_style($context, array $blocks = array())
    {
        $__internal_803b4eadb064ecb8826f2072b1a8b427c1bd1c0610e9846609670eb985e9030b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_803b4eadb064ecb8826f2072b1a8b427c1bd1c0610e9846609670eb985e9030b->enter($__internal_803b4eadb064ecb8826f2072b1a8b427c1bd1c0610e9846609670eb985e9030b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_c51d626d406e260e0f4537a530256f40a4daf0033d3c45265f8789667e4280f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c51d626d406e260e0f4537a530256f40a4daf0033d3c45265f8789667e4280f4->enter($__internal_c51d626d406e260e0f4537a530256f40a4daf0033d3c45265f8789667e4280f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 6
        echo "    <link rel=\"stylesheet\" href=\"../../public/css/pages/inscription.css\" type=\"text/css\" />
";
        
        $__internal_c51d626d406e260e0f4537a530256f40a4daf0033d3c45265f8789667e4280f4->leave($__internal_c51d626d406e260e0f4537a530256f40a4daf0033d3c45265f8789667e4280f4_prof);

        
        $__internal_803b4eadb064ecb8826f2072b1a8b427c1bd1c0610e9846609670eb985e9030b->leave($__internal_803b4eadb064ecb8826f2072b1a8b427c1bd1c0610e9846609670eb985e9030b_prof);

    }

    // line 9
    public function block_img_logo_path($context, array $blocks = array())
    {
        $__internal_5049d22d6d2395c0aceb886ecd9dab9af6bdb648143bdb50660b449496b795b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5049d22d6d2395c0aceb886ecd9dab9af6bdb648143bdb50660b449496b795b1->enter($__internal_5049d22d6d2395c0aceb886ecd9dab9af6bdb648143bdb50660b449496b795b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img_logo_path"));

        $__internal_a1f9c72bde0f6991d419503dcd54c9019cbe6a32fa05c65ce6479b3f81c11d9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1f9c72bde0f6991d419503dcd54c9019cbe6a32fa05c65ce6479b3f81c11d9d->enter($__internal_a1f9c72bde0f6991d419503dcd54c9019cbe6a32fa05c65ce6479b3f81c11d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img_logo_path"));

        echo "../../public/img/";
        
        $__internal_a1f9c72bde0f6991d419503dcd54c9019cbe6a32fa05c65ce6479b3f81c11d9d->leave($__internal_a1f9c72bde0f6991d419503dcd54c9019cbe6a32fa05c65ce6479b3f81c11d9d_prof);

        
        $__internal_5049d22d6d2395c0aceb886ecd9dab9af6bdb648143bdb50660b449496b795b1->leave($__internal_5049d22d6d2395c0aceb886ecd9dab9af6bdb648143bdb50660b449496b795b1_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_353feef5a84a9943c075fd42a69a7099251f5a1a4eb4a42ab982bcff1f5e7b8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_353feef5a84a9943c075fd42a69a7099251f5a1a4eb4a42ab982bcff1f5e7b8a->enter($__internal_353feef5a84a9943c075fd42a69a7099251f5a1a4eb4a42ab982bcff1f5e7b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3a855bed006051cd2c631303af71b9ec39f42ade8229008c88a2d97161b8b604 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a855bed006051cd2c631303af71b9ec39f42ade8229008c88a2d97161b8b604->enter($__internal_3a855bed006051cd2c631303af71b9ec39f42ade8229008c88a2d97161b8b604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 12
        echo "    ";
        $this->loadTemplate("@User/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 12)->display($context);
        
        $__internal_3a855bed006051cd2c631303af71b9ec39f42ade8229008c88a2d97161b8b604->leave($__internal_3a855bed006051cd2c631303af71b9ec39f42ade8229008c88a2d97161b8b604_prof);

        
        $__internal_353feef5a84a9943c075fd42a69a7099251f5a1a4eb4a42ab982bcff1f5e7b8a->leave($__internal_353feef5a84a9943c075fd42a69a7099251f5a1a4eb4a42ab982bcff1f5e7b8a_prof);

    }

    // line 15
    public function block_img_footer_path($context, array $blocks = array())
    {
        $__internal_32231395618f0061cbf81cee7878695f4864e48fb89876fcc26d328f1e16b927 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32231395618f0061cbf81cee7878695f4864e48fb89876fcc26d328f1e16b927->enter($__internal_32231395618f0061cbf81cee7878695f4864e48fb89876fcc26d328f1e16b927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img_footer_path"));

        $__internal_00711ac284d9b47a50db6f0ad25b33d4177bb9edfc23c409e968f622d16b9978 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00711ac284d9b47a50db6f0ad25b33d4177bb9edfc23c409e968f622d16b9978->enter($__internal_00711ac284d9b47a50db6f0ad25b33d4177bb9edfc23c409e968f622d16b9978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img_footer_path"));

        echo "../../public/img/";
        
        $__internal_00711ac284d9b47a50db6f0ad25b33d4177bb9edfc23c409e968f622d16b9978->leave($__internal_00711ac284d9b47a50db6f0ad25b33d4177bb9edfc23c409e968f622d16b9978_prof);

        
        $__internal_32231395618f0061cbf81cee7878695f4864e48fb89876fcc26d328f1e16b927->leave($__internal_32231395618f0061cbf81cee7878695f4864e48fb89876fcc26d328f1e16b927_prof);

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

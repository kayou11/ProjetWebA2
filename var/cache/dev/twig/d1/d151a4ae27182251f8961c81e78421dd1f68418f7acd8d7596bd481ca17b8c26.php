<?php

/* SiteBundle:Pages:contact.html.twig */
class __TwigTemplate_3859ff8006417e9158c772cb43f13f857f523a731b7ab17653220f7e5c28b29d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SiteBundle::base.html.twig", "SiteBundle:Pages:contact.html.twig", 1);
        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SiteBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a3928cdce2d439087fa051a98cfcce202ba347f5155c4a5a72d41b1e298f5de0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3928cdce2d439087fa051a98cfcce202ba347f5155c4a5a72d41b1e298f5de0->enter($__internal_a3928cdce2d439087fa051a98cfcce202ba347f5155c4a5a72d41b1e298f5de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:contact.html.twig"));

        $__internal_a6da4e152610f9b97c079686cd923fb9fedcc55a7b7aa37d5772456cae3054ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6da4e152610f9b97c079686cd923fb9fedcc55a7b7aa37d5772456cae3054ad->enter($__internal_a6da4e152610f9b97c079686cd923fb9fedcc55a7b7aa37d5772456cae3054ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3928cdce2d439087fa051a98cfcce202ba347f5155c4a5a72d41b1e298f5de0->leave($__internal_a3928cdce2d439087fa051a98cfcce202ba347f5155c4a5a72d41b1e298f5de0_prof);

        
        $__internal_a6da4e152610f9b97c079686cd923fb9fedcc55a7b7aa37d5772456cae3054ad->leave($__internal_a6da4e152610f9b97c079686cd923fb9fedcc55a7b7aa37d5772456cae3054ad_prof);

    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        $__internal_5e982f47adf2bf57f828aabadf1566e3df9a3373a058fc79904d041d1e0cffe1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e982f47adf2bf57f828aabadf1566e3df9a3373a058fc79904d041d1e0cffe1->enter($__internal_5e982f47adf2bf57f828aabadf1566e3df9a3373a058fc79904d041d1e0cffe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_99348111c86a00d5c9e8e6262d5ff7d16f494b905f1a1d0e2c3bd6072b6a8ce2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99348111c86a00d5c9e8e6262d5ff7d16f494b905f1a1d0e2c3bd6072b6a8ce2->enter($__internal_99348111c86a00d5c9e8e6262d5ff7d16f494b905f1a1d0e2c3bd6072b6a8ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"../public/css/pages/contact.css\" type=\"text/css\" />
";
        
        $__internal_99348111c86a00d5c9e8e6262d5ff7d16f494b905f1a1d0e2c3bd6072b6a8ce2->leave($__internal_99348111c86a00d5c9e8e6262d5ff7d16f494b905f1a1d0e2c3bd6072b6a8ce2_prof);

        
        $__internal_5e982f47adf2bf57f828aabadf1566e3df9a3373a058fc79904d041d1e0cffe1->leave($__internal_5e982f47adf2bf57f828aabadf1566e3df9a3373a058fc79904d041d1e0cffe1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_710f3346b9857c3c5ace00e459591edb749a161c8c89c4a51ca9a0caa6bbbe29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_710f3346b9857c3c5ace00e459591edb749a161c8c89c4a51ca9a0caa6bbbe29->enter($__internal_710f3346b9857c3c5ace00e459591edb749a161c8c89c4a51ca9a0caa6bbbe29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ad40c8958306070dadb4d6c8092d898104b67320bc02eed9e4b0694f569752d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad40c8958306070dadb4d6c8092d898104b67320bc02eed9e4b0694f569752d5->enter($__internal_ad40c8958306070dadb4d6c8092d898104b67320bc02eed9e4b0694f569752d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Galerie photos";
        
        $__internal_ad40c8958306070dadb4d6c8092d898104b67320bc02eed9e4b0694f569752d5->leave($__internal_ad40c8958306070dadb4d6c8092d898104b67320bc02eed9e4b0694f569752d5_prof);

        
        $__internal_710f3346b9857c3c5ace00e459591edb749a161c8c89c4a51ca9a0caa6bbbe29->leave($__internal_710f3346b9857c3c5ace00e459591edb749a161c8c89c4a51ca9a0caa6bbbe29_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_75fc730272678cf408ff9a99f5d3cd27de56715a452dc07a4589b35aa90ae0b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75fc730272678cf408ff9a99f5d3cd27de56715a452dc07a4589b35aa90ae0b3->enter($__internal_75fc730272678cf408ff9a99f5d3cd27de56715a452dc07a4589b35aa90ae0b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e2cba149b367d2657cd31feaaa3b87d82f4d7a79606f568f3150728d88626512 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2cba149b367d2657cd31feaaa3b87d82f4d7a79606f568f3150728d88626512->enter($__internal_e2cba149b367d2657cd31feaaa3b87d82f4d7a79606f568f3150728d88626512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    <div id=\"content\">
        <div class=\"container\">
            <h2 class=\"BodyTitle\">Contact</h2>
            <div class=\"PositionBoutton\">
                <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("site_le_bde");
        echo "\"><button onclick=\"PassageBDERouge()\" id=\"BouttonMembreBDE\">Membres du BDE</button></a>
                <button onclick=\"PassageContactRouge()\" id=\"BouttonContact\">Contact</button><br>
                <div class=\"row\">
                    <div class=\"col-md-8\">
                        <p>Envoyer un mail au BDE pour soumettre une activité ou pour toutes autres informations </p>
                        <br>
                        <p>Sujet : </p>
                        <input type=\"text\" name=\"Objet\">
                        <br>
                        <br>
                        <br>
                        <p>Message : </p><textarea name=\"comments\" id=\"comments\" cols=\"50\" rows=\"6\" placeholder=\"Notez votre message ici!\"></textarea><br>
                        <button type=\"\">Pièce jointe</button><br><br>
                        <button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_e2cba149b367d2657cd31feaaa3b87d82f4d7a79606f568f3150728d88626512->leave($__internal_e2cba149b367d2657cd31feaaa3b87d82f4d7a79606f568f3150728d88626512_prof);

        
        $__internal_75fc730272678cf408ff9a99f5d3cd27de56715a452dc07a4589b35aa90ae0b3->leave($__internal_75fc730272678cf408ff9a99f5d3cd27de56715a452dc07a4589b35aa90ae0b3_prof);

    }

    public function getTemplateName()
    {
        return "SiteBundle:Pages:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 14,  89 => 10,  80 => 9,  62 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SiteBundle::base.html.twig\" %}

{% block style %}
    <link rel=\"stylesheet\" href=\"../public/css/pages/contact.css\" type=\"text/css\" />
{% endblock %}

{% block title  %}Galerie photos{% endblock %}

{% block content %}
    <div id=\"content\">
        <div class=\"container\">
            <h2 class=\"BodyTitle\">Contact</h2>
            <div class=\"PositionBoutton\">
                <a href=\"{{ path('site_le_bde') }}\"><button onclick=\"PassageBDERouge()\" id=\"BouttonMembreBDE\">Membres du BDE</button></a>
                <button onclick=\"PassageContactRouge()\" id=\"BouttonContact\">Contact</button><br>
                <div class=\"row\">
                    <div class=\"col-md-8\">
                        <p>Envoyer un mail au BDE pour soumettre une activité ou pour toutes autres informations </p>
                        <br>
                        <p>Sujet : </p>
                        <input type=\"text\" name=\"Objet\">
                        <br>
                        <br>
                        <br>
                        <p>Message : </p><textarea name=\"comments\" id=\"comments\" cols=\"50\" rows=\"6\" placeholder=\"Notez votre message ici!\"></textarea><br>
                        <button type=\"\">Pièce jointe</button><br><br>
                        <button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "SiteBundle:Pages:contact.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/src/SiteBundle/Resources/views/Pages/contact.html.twig");
    }
}

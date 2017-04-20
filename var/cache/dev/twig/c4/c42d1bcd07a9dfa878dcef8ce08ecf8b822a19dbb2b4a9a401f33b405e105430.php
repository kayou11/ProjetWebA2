<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_484f7d852d1c674c6fdd1a3755bd22d2d105e1a25d38acbb4b4e2172140195af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_17235f0c1ee95282dc7bef4ab9a04eed69dff997a68129ace286d0d4e908ee96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17235f0c1ee95282dc7bef4ab9a04eed69dff997a68129ace286d0d4e908ee96->enter($__internal_17235f0c1ee95282dc7bef4ab9a04eed69dff997a68129ace286d0d4e908ee96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_f8c077c500bd4a00d3c5ee55e70af437d607118f77cf2263df0a4f4c37240a2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8c077c500bd4a00d3c5ee55e70af437d607118f77cf2263df0a4f4c37240a2f->enter($__internal_f8c077c500bd4a00d3c5ee55e70af437d607118f77cf2263df0a4f4c37240a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_17235f0c1ee95282dc7bef4ab9a04eed69dff997a68129ace286d0d4e908ee96->leave($__internal_17235f0c1ee95282dc7bef4ab9a04eed69dff997a68129ace286d0d4e908ee96_prof);

        
        $__internal_f8c077c500bd4a00d3c5ee55e70af437d607118f77cf2263df0a4f4c37240a2f->leave($__internal_f8c077c500bd4a00d3c5ee55e70af437d607118f77cf2263df0a4f4c37240a2f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2776a542b7a4e09fa46b50bbf045ec114f8a525a83494076b62ecb0d9156bed1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2776a542b7a4e09fa46b50bbf045ec114f8a525a83494076b62ecb0d9156bed1->enter($__internal_2776a542b7a4e09fa46b50bbf045ec114f8a525a83494076b62ecb0d9156bed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4dd7a3063849bf67374799637fba5533a832351e682c13ece218f61af63d233e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dd7a3063849bf67374799637fba5533a832351e682c13ece218f61af63d233e->enter($__internal_4dd7a3063849bf67374799637fba5533a832351e682c13ece218f61af63d233e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4dd7a3063849bf67374799637fba5533a832351e682c13ece218f61af63d233e->leave($__internal_4dd7a3063849bf67374799637fba5533a832351e682c13ece218f61af63d233e_prof);

        
        $__internal_2776a542b7a4e09fa46b50bbf045ec114f8a525a83494076b62ecb0d9156bed1->leave($__internal_2776a542b7a4e09fa46b50bbf045ec114f8a525a83494076b62ecb0d9156bed1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}

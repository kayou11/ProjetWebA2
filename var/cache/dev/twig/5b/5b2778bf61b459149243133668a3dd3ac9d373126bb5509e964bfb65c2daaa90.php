<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_7a2c6f118628ecb5f8389de211dfd9179d0ecbda440728aabf5d360d1df89559 extends Twig_Template
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
        $__internal_cb54f6003c294d219a3d5f6b024d3051e74591d217beba8621c3371465997852 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb54f6003c294d219a3d5f6b024d3051e74591d217beba8621c3371465997852->enter($__internal_cb54f6003c294d219a3d5f6b024d3051e74591d217beba8621c3371465997852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_67a99b6d19fa643575e9ca3310dc85c9b26d5b54075356084adf157bb6302800 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67a99b6d19fa643575e9ca3310dc85c9b26d5b54075356084adf157bb6302800->enter($__internal_67a99b6d19fa643575e9ca3310dc85c9b26d5b54075356084adf157bb6302800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_cb54f6003c294d219a3d5f6b024d3051e74591d217beba8621c3371465997852->leave($__internal_cb54f6003c294d219a3d5f6b024d3051e74591d217beba8621c3371465997852_prof);

        
        $__internal_67a99b6d19fa643575e9ca3310dc85c9b26d5b54075356084adf157bb6302800->leave($__internal_67a99b6d19fa643575e9ca3310dc85c9b26d5b54075356084adf157bb6302800_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_91f5654f361b2a3768a694912a685af02c11a9927467a17087452dcde7e8cc66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91f5654f361b2a3768a694912a685af02c11a9927467a17087452dcde7e8cc66->enter($__internal_91f5654f361b2a3768a694912a685af02c11a9927467a17087452dcde7e8cc66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0505cabbe6a40c271320fdc5b4618bb5f7e2c30371c178ab62d40aa569900c8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0505cabbe6a40c271320fdc5b4618bb5f7e2c30371c178ab62d40aa569900c8d->enter($__internal_0505cabbe6a40c271320fdc5b4618bb5f7e2c30371c178ab62d40aa569900c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0505cabbe6a40c271320fdc5b4618bb5f7e2c30371c178ab62d40aa569900c8d->leave($__internal_0505cabbe6a40c271320fdc5b4618bb5f7e2c30371c178ab62d40aa569900c8d_prof);

        
        $__internal_91f5654f361b2a3768a694912a685af02c11a9927467a17087452dcde7e8cc66->leave($__internal_91f5654f361b2a3768a694912a685af02c11a9927467a17087452dcde7e8cc66_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}

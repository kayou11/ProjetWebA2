<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_47d7fd87c8200873efca58a2b479f7c038244d2375ddaf59acc6330adb6e6873 extends Twig_Template
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
        $__internal_cb7c6a9ac359b648ad7911460b6f7dcd65793b909196d431b055b74d79079bd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb7c6a9ac359b648ad7911460b6f7dcd65793b909196d431b055b74d79079bd2->enter($__internal_cb7c6a9ac359b648ad7911460b6f7dcd65793b909196d431b055b74d79079bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_34296888cdbdcb5fb39f2b887ff3b83514c60bbd3f75d16450eb3db34d6cac5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34296888cdbdcb5fb39f2b887ff3b83514c60bbd3f75d16450eb3db34d6cac5d->enter($__internal_34296888cdbdcb5fb39f2b887ff3b83514c60bbd3f75d16450eb3db34d6cac5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_cb7c6a9ac359b648ad7911460b6f7dcd65793b909196d431b055b74d79079bd2->leave($__internal_cb7c6a9ac359b648ad7911460b6f7dcd65793b909196d431b055b74d79079bd2_prof);

        
        $__internal_34296888cdbdcb5fb39f2b887ff3b83514c60bbd3f75d16450eb3db34d6cac5d->leave($__internal_34296888cdbdcb5fb39f2b887ff3b83514c60bbd3f75d16450eb3db34d6cac5d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_73c5bd107a06c59367e9d184358a3e3ed11852f46ab96ed13ee4ff1fe477513a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73c5bd107a06c59367e9d184358a3e3ed11852f46ab96ed13ee4ff1fe477513a->enter($__internal_73c5bd107a06c59367e9d184358a3e3ed11852f46ab96ed13ee4ff1fe477513a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b732b10fee3c71e5bd667acae245abbe0508be9752973f82e0d042f4863f8f60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b732b10fee3c71e5bd667acae245abbe0508be9752973f82e0d042f4863f8f60->enter($__internal_b732b10fee3c71e5bd667acae245abbe0508be9752973f82e0d042f4863f8f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b732b10fee3c71e5bd667acae245abbe0508be9752973f82e0d042f4863f8f60->leave($__internal_b732b10fee3c71e5bd667acae245abbe0508be9752973f82e0d042f4863f8f60_prof);

        
        $__internal_73c5bd107a06c59367e9d184358a3e3ed11852f46ab96ed13ee4ff1fe477513a->leave($__internal_73c5bd107a06c59367e9d184358a3e3ed11852f46ab96ed13ee4ff1fe477513a_prof);

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

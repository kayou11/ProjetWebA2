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
        $__internal_8221b3deaac2b1649fb6806c2d59dc0b3cfec1b31869b889954da2af83cee757 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8221b3deaac2b1649fb6806c2d59dc0b3cfec1b31869b889954da2af83cee757->enter($__internal_8221b3deaac2b1649fb6806c2d59dc0b3cfec1b31869b889954da2af83cee757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_291303d0ea8b9227d49fa73424fcd5eb4e17f652a694d3fe54a480f4a928d1c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_291303d0ea8b9227d49fa73424fcd5eb4e17f652a694d3fe54a480f4a928d1c2->enter($__internal_291303d0ea8b9227d49fa73424fcd5eb4e17f652a694d3fe54a480f4a928d1c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_8221b3deaac2b1649fb6806c2d59dc0b3cfec1b31869b889954da2af83cee757->leave($__internal_8221b3deaac2b1649fb6806c2d59dc0b3cfec1b31869b889954da2af83cee757_prof);

        
        $__internal_291303d0ea8b9227d49fa73424fcd5eb4e17f652a694d3fe54a480f4a928d1c2->leave($__internal_291303d0ea8b9227d49fa73424fcd5eb4e17f652a694d3fe54a480f4a928d1c2_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1607e902bc34b1ba5ed8c8f9ff614d8ef7f18a1c40f992d9dc3b9ade472bd0be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1607e902bc34b1ba5ed8c8f9ff614d8ef7f18a1c40f992d9dc3b9ade472bd0be->enter($__internal_1607e902bc34b1ba5ed8c8f9ff614d8ef7f18a1c40f992d9dc3b9ade472bd0be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c0d6a93ac1aca912e5aba7e696f18be1147d15d84a863ad87ea7bae0d6d365d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0d6a93ac1aca912e5aba7e696f18be1147d15d84a863ad87ea7bae0d6d365d1->enter($__internal_c0d6a93ac1aca912e5aba7e696f18be1147d15d84a863ad87ea7bae0d6d365d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c0d6a93ac1aca912e5aba7e696f18be1147d15d84a863ad87ea7bae0d6d365d1->leave($__internal_c0d6a93ac1aca912e5aba7e696f18be1147d15d84a863ad87ea7bae0d6d365d1_prof);

        
        $__internal_1607e902bc34b1ba5ed8c8f9ff614d8ef7f18a1c40f992d9dc3b9ade472bd0be->leave($__internal_1607e902bc34b1ba5ed8c8f9ff614d8ef7f18a1c40f992d9dc3b9ade472bd0be_prof);

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

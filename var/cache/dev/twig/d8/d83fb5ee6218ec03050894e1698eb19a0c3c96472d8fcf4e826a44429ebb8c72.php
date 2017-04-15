<?php

/* SyliusUiBundle:Security:login.html.twig */
class __TwigTemplate_89dccb2444be05b411bf3eb16c63d3b2501152ad995712de0bd597884ec2b5d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusUi/Layout/centered.html.twig", "SyliusUiBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusUi/Layout/centered.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f6fe43120d5929f8cc7a0d0f68021873a66ae5177184bb4c02abed77b22d121 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f6fe43120d5929f8cc7a0d0f68021873a66ae5177184bb4c02abed77b22d121->enter($__internal_4f6fe43120d5929f8cc7a0d0f68021873a66ae5177184bb4c02abed77b22d121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Security:login.html.twig"));

        $__internal_f05ef65e6466b69f7630c2afaaf78d738527ef8beb28d920598e3d4f2679b0b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f05ef65e6466b69f7630c2afaaf78d738527ef8beb28d920598e3d4f2679b0b3->enter($__internal_f05ef65e6466b69f7630c2afaaf78d738527ef8beb28d920598e3d4f2679b0b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f6fe43120d5929f8cc7a0d0f68021873a66ae5177184bb4c02abed77b22d121->leave($__internal_4f6fe43120d5929f8cc7a0d0f68021873a66ae5177184bb4c02abed77b22d121_prof);

        
        $__internal_f05ef65e6466b69f7630c2afaaf78d738527ef8beb28d920598e3d4f2679b0b3->leave($__internal_f05ef65e6466b69f7630c2afaaf78d738527ef8beb28d920598e3d4f2679b0b3_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_e2520837a893c3d2022ed429cf997fb159c2d992dd15c41e47a196424ec444f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2520837a893c3d2022ed429cf997fb159c2d992dd15c41e47a196424ec444f3->enter($__internal_e2520837a893c3d2022ed429cf997fb159c2d992dd15c41e47a196424ec444f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_fd2fa43e67c7bed26b2d252680cd87dd7d7d6e6bd666b8941b8e0da587bbfcac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd2fa43e67c7bed26b2d252680cd87dd7d7d6e6bd666b8941b8e0da587bbfcac->enter($__internal_fd2fa43e67c7bed26b2d252680cd87dd7d7d6e6bd666b8941b8e0da587bbfcac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        $this->loadTemplate("@SyliusUi/Security/_login.html.twig", "SyliusUiBundle:Security:login.html.twig", 4)->display($context);
        
        $__internal_fd2fa43e67c7bed26b2d252680cd87dd7d7d6e6bd666b8941b8e0da587bbfcac->leave($__internal_fd2fa43e67c7bed26b2d252680cd87dd7d7d6e6bd666b8941b8e0da587bbfcac_prof);

        
        $__internal_e2520837a893c3d2022ed429cf997fb159c2d992dd15c41e47a196424ec444f3->leave($__internal_e2520837a893c3d2022ed429cf997fb159c2d992dd15c41e47a196424ec444f3_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusUi/Layout/centered.html.twig' %}

{% block content %}
{% include '@SyliusUi/Security/_login.html.twig' %}
{% endblock %}
", "SyliusUiBundle:Security:login.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Security/login.html.twig");
    }
}

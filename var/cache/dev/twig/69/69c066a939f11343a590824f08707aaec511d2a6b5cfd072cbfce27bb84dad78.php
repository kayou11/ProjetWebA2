<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6263651adade39de1f784ad928c1ebf12155ee20abd325770b1c3859e2a00061 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5ef0807853ed1861311250b8e9c99c3aa46ce28edb076e4f71cf3a59fd882608 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ef0807853ed1861311250b8e9c99c3aa46ce28edb076e4f71cf3a59fd882608->enter($__internal_5ef0807853ed1861311250b8e9c99c3aa46ce28edb076e4f71cf3a59fd882608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_001b9a165cce3971bdad8d21f39d083c1a0d29cc8a6eb47bbc26cbdf70681e9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_001b9a165cce3971bdad8d21f39d083c1a0d29cc8a6eb47bbc26cbdf70681e9d->enter($__internal_001b9a165cce3971bdad8d21f39d083c1a0d29cc8a6eb47bbc26cbdf70681e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ef0807853ed1861311250b8e9c99c3aa46ce28edb076e4f71cf3a59fd882608->leave($__internal_5ef0807853ed1861311250b8e9c99c3aa46ce28edb076e4f71cf3a59fd882608_prof);

        
        $__internal_001b9a165cce3971bdad8d21f39d083c1a0d29cc8a6eb47bbc26cbdf70681e9d->leave($__internal_001b9a165cce3971bdad8d21f39d083c1a0d29cc8a6eb47bbc26cbdf70681e9d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_690152f357dda25314a64c3823c1ef725e90de73c9bacd996e83e9c15af618d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_690152f357dda25314a64c3823c1ef725e90de73c9bacd996e83e9c15af618d9->enter($__internal_690152f357dda25314a64c3823c1ef725e90de73c9bacd996e83e9c15af618d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_732379f26df240187877929f85794d6b374f8906bee642635f234a5ee6a1246e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_732379f26df240187877929f85794d6b374f8906bee642635f234a5ee6a1246e->enter($__internal_732379f26df240187877929f85794d6b374f8906bee642635f234a5ee6a1246e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_732379f26df240187877929f85794d6b374f8906bee642635f234a5ee6a1246e->leave($__internal_732379f26df240187877929f85794d6b374f8906bee642635f234a5ee6a1246e_prof);

        
        $__internal_690152f357dda25314a64c3823c1ef725e90de73c9bacd996e83e9c15af618d9->leave($__internal_690152f357dda25314a64c3823c1ef725e90de73c9bacd996e83e9c15af618d9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f9ab8959d0bba3de0a7db54bc47aaeed316d1e6f75eb8bb19d7512abcebd8e77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9ab8959d0bba3de0a7db54bc47aaeed316d1e6f75eb8bb19d7512abcebd8e77->enter($__internal_f9ab8959d0bba3de0a7db54bc47aaeed316d1e6f75eb8bb19d7512abcebd8e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2e17c46ac9ac37188de7d92b95a1cc4739023b3d9044a613bf9cc5ebde2421e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e17c46ac9ac37188de7d92b95a1cc4739023b3d9044a613bf9cc5ebde2421e6->enter($__internal_2e17c46ac9ac37188de7d92b95a1cc4739023b3d9044a613bf9cc5ebde2421e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2e17c46ac9ac37188de7d92b95a1cc4739023b3d9044a613bf9cc5ebde2421e6->leave($__internal_2e17c46ac9ac37188de7d92b95a1cc4739023b3d9044a613bf9cc5ebde2421e6_prof);

        
        $__internal_f9ab8959d0bba3de0a7db54bc47aaeed316d1e6f75eb8bb19d7512abcebd8e77->leave($__internal_f9ab8959d0bba3de0a7db54bc47aaeed316d1e6f75eb8bb19d7512abcebd8e77_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3836ee0ef4f82b89a10805ec59bf64ea27cc28927459cda6af2b5aec259e2cb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3836ee0ef4f82b89a10805ec59bf64ea27cc28927459cda6af2b5aec259e2cb3->enter($__internal_3836ee0ef4f82b89a10805ec59bf64ea27cc28927459cda6af2b5aec259e2cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7b45cadb5778d5b843004ec28c5b1b02153ae51bb602abb82afd1cddb52c309c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b45cadb5778d5b843004ec28c5b1b02153ae51bb602abb82afd1cddb52c309c->enter($__internal_7b45cadb5778d5b843004ec28c5b1b02153ae51bb602abb82afd1cddb52c309c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_7b45cadb5778d5b843004ec28c5b1b02153ae51bb602abb82afd1cddb52c309c->leave($__internal_7b45cadb5778d5b843004ec28c5b1b02153ae51bb602abb82afd1cddb52c309c_prof);

        
        $__internal_3836ee0ef4f82b89a10805ec59bf64ea27cc28927459cda6af2b5aec259e2cb3->leave($__internal_3836ee0ef4f82b89a10805ec59bf64ea27cc28927459cda6af2b5aec259e2cb3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

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
        $__internal_ce8957d6ad10319c4f72505ba2b86ed4084f01f8a4c0f2c66aeb3fb74dd52485 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce8957d6ad10319c4f72505ba2b86ed4084f01f8a4c0f2c66aeb3fb74dd52485->enter($__internal_ce8957d6ad10319c4f72505ba2b86ed4084f01f8a4c0f2c66aeb3fb74dd52485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_190e7e0aefb139082805433c63c43a5b01095e71b16fa535ed72a2daa5aa24a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_190e7e0aefb139082805433c63c43a5b01095e71b16fa535ed72a2daa5aa24a3->enter($__internal_190e7e0aefb139082805433c63c43a5b01095e71b16fa535ed72a2daa5aa24a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce8957d6ad10319c4f72505ba2b86ed4084f01f8a4c0f2c66aeb3fb74dd52485->leave($__internal_ce8957d6ad10319c4f72505ba2b86ed4084f01f8a4c0f2c66aeb3fb74dd52485_prof);

        
        $__internal_190e7e0aefb139082805433c63c43a5b01095e71b16fa535ed72a2daa5aa24a3->leave($__internal_190e7e0aefb139082805433c63c43a5b01095e71b16fa535ed72a2daa5aa24a3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ed35f3d2aba04587f50711b87b19ba56c2bc4200692f6c7748defab11a2224ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed35f3d2aba04587f50711b87b19ba56c2bc4200692f6c7748defab11a2224ff->enter($__internal_ed35f3d2aba04587f50711b87b19ba56c2bc4200692f6c7748defab11a2224ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_79c32e8c0af0150ef11e4600bc078dd35bbbb3e0d212215268603acd2f214181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79c32e8c0af0150ef11e4600bc078dd35bbbb3e0d212215268603acd2f214181->enter($__internal_79c32e8c0af0150ef11e4600bc078dd35bbbb3e0d212215268603acd2f214181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_79c32e8c0af0150ef11e4600bc078dd35bbbb3e0d212215268603acd2f214181->leave($__internal_79c32e8c0af0150ef11e4600bc078dd35bbbb3e0d212215268603acd2f214181_prof);

        
        $__internal_ed35f3d2aba04587f50711b87b19ba56c2bc4200692f6c7748defab11a2224ff->leave($__internal_ed35f3d2aba04587f50711b87b19ba56c2bc4200692f6c7748defab11a2224ff_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1f311e5577c8a523f55a26791e0a6b93b398900c6b99427cd150a72bbf2a6eaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f311e5577c8a523f55a26791e0a6b93b398900c6b99427cd150a72bbf2a6eaa->enter($__internal_1f311e5577c8a523f55a26791e0a6b93b398900c6b99427cd150a72bbf2a6eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b8acdad08047cea967185b273d0ecb96e95993179a1b76c5d94c6ead26ae0412 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8acdad08047cea967185b273d0ecb96e95993179a1b76c5d94c6ead26ae0412->enter($__internal_b8acdad08047cea967185b273d0ecb96e95993179a1b76c5d94c6ead26ae0412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b8acdad08047cea967185b273d0ecb96e95993179a1b76c5d94c6ead26ae0412->leave($__internal_b8acdad08047cea967185b273d0ecb96e95993179a1b76c5d94c6ead26ae0412_prof);

        
        $__internal_1f311e5577c8a523f55a26791e0a6b93b398900c6b99427cd150a72bbf2a6eaa->leave($__internal_1f311e5577c8a523f55a26791e0a6b93b398900c6b99427cd150a72bbf2a6eaa_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_76f8a989ee49cefbd976dda5f171e7b80fc5412f8af53be1e8f0c1feee8c0ef4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76f8a989ee49cefbd976dda5f171e7b80fc5412f8af53be1e8f0c1feee8c0ef4->enter($__internal_76f8a989ee49cefbd976dda5f171e7b80fc5412f8af53be1e8f0c1feee8c0ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b90eaff03b979c35b4029903cf86dd4dd7c72c5b1ccf3f025542f963ccfec688 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b90eaff03b979c35b4029903cf86dd4dd7c72c5b1ccf3f025542f963ccfec688->enter($__internal_b90eaff03b979c35b4029903cf86dd4dd7c72c5b1ccf3f025542f963ccfec688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_b90eaff03b979c35b4029903cf86dd4dd7c72c5b1ccf3f025542f963ccfec688->leave($__internal_b90eaff03b979c35b4029903cf86dd4dd7c72c5b1ccf3f025542f963ccfec688_prof);

        
        $__internal_76f8a989ee49cefbd976dda5f171e7b80fc5412f8af53be1e8f0c1feee8c0ef4->leave($__internal_76f8a989ee49cefbd976dda5f171e7b80fc5412f8af53be1e8f0c1feee8c0ef4_prof);

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

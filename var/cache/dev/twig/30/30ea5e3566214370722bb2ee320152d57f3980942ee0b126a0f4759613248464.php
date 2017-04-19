<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_3f2180d49d6156d5c7e0472bd121118adeb1ba6e1990fb528aff01259a8e6434 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_270cad45a7e25f52b7d9b0fbceb287194e4c1d4606cb5c918400aad29d40dbb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_270cad45a7e25f52b7d9b0fbceb287194e4c1d4606cb5c918400aad29d40dbb0->enter($__internal_270cad45a7e25f52b7d9b0fbceb287194e4c1d4606cb5c918400aad29d40dbb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        $__internal_be277020e73ff34cba5c35d846f39adc3e8faa8489f2c7e4754d65a4c5a7b64c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be277020e73ff34cba5c35d846f39adc3e8faa8489f2c7e4754d65a4c5a7b64c->enter($__internal_be277020e73ff34cba5c35d846f39adc3e8faa8489f2c7e4754d65a4c5a7b64c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_270cad45a7e25f52b7d9b0fbceb287194e4c1d4606cb5c918400aad29d40dbb0->leave($__internal_270cad45a7e25f52b7d9b0fbceb287194e4c1d4606cb5c918400aad29d40dbb0_prof);

        
        $__internal_be277020e73ff34cba5c35d846f39adc3e8faa8489f2c7e4754d65a4c5a7b64c->leave($__internal_be277020e73ff34cba5c35d846f39adc3e8faa8489f2c7e4754d65a4c5a7b64c_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_27f040c3e293222463a3cf9d989e72461399036dd99e913d819080428182e88d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27f040c3e293222463a3cf9d989e72461399036dd99e913d819080428182e88d->enter($__internal_27f040c3e293222463a3cf9d989e72461399036dd99e913d819080428182e88d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        $__internal_eb04bfdae80fc13d6daa999ef2b10626e86e5c36df134308d87d2a1cae15c3a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb04bfdae80fc13d6daa999ef2b10626e86e5c36df134308d87d2a1cae15c3a1->enter($__internal_eb04bfdae80fc13d6daa999ef2b10626e86e5c36df134308d87d2a1cae15c3a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_eb04bfdae80fc13d6daa999ef2b10626e86e5c36df134308d87d2a1cae15c3a1->leave($__internal_eb04bfdae80fc13d6daa999ef2b10626e86e5c36df134308d87d2a1cae15c3a1_prof);

        
        $__internal_27f040c3e293222463a3cf9d989e72461399036dd99e913d819080428182e88d->leave($__internal_27f040c3e293222463a3cf9d989e72461399036dd99e913d819080428182e88d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block user_block %}{# Customize this value #}{% endblock %}
", "SonataAdminBundle:Core:user_block.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/Core/user_block.html.twig");
    }
}

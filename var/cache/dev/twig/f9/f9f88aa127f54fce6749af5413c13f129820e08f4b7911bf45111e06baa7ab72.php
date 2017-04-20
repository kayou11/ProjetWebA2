<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_8ee81dab414b9a10949cc2ad99ca807ea314cf378bad4d7e61b85408863c2c56 extends Twig_Template
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
        $__internal_98288a375f7487684a791141899c890154267f3096fe0f23e48af5b2fc0c057a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98288a375f7487684a791141899c890154267f3096fe0f23e48af5b2fc0c057a->enter($__internal_98288a375f7487684a791141899c890154267f3096fe0f23e48af5b2fc0c057a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        $__internal_19c907a4784d80cc32395f4b398b4bfc0776b56facc6a56e9a8a191ebbb17a30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19c907a4784d80cc32395f4b398b4bfc0776b56facc6a56e9a8a191ebbb17a30->enter($__internal_19c907a4784d80cc32395f4b398b4bfc0776b56facc6a56e9a8a191ebbb17a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_98288a375f7487684a791141899c890154267f3096fe0f23e48af5b2fc0c057a->leave($__internal_98288a375f7487684a791141899c890154267f3096fe0f23e48af5b2fc0c057a_prof);

        
        $__internal_19c907a4784d80cc32395f4b398b4bfc0776b56facc6a56e9a8a191ebbb17a30->leave($__internal_19c907a4784d80cc32395f4b398b4bfc0776b56facc6a56e9a8a191ebbb17a30_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_eb004bc41e7c07925c5d04da57a5a75582e15bf2f3ae0624572e63132f59c790 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb004bc41e7c07925c5d04da57a5a75582e15bf2f3ae0624572e63132f59c790->enter($__internal_eb004bc41e7c07925c5d04da57a5a75582e15bf2f3ae0624572e63132f59c790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        $__internal_9801dfb4c782528dda61691bb8db5091fb1400973cc980eff5c988f4b9db1f22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9801dfb4c782528dda61691bb8db5091fb1400973cc980eff5c988f4b9db1f22->enter($__internal_9801dfb4c782528dda61691bb8db5091fb1400973cc980eff5c988f4b9db1f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_9801dfb4c782528dda61691bb8db5091fb1400973cc980eff5c988f4b9db1f22->leave($__internal_9801dfb4c782528dda61691bb8db5091fb1400973cc980eff5c988f4b9db1f22_prof);

        
        $__internal_eb004bc41e7c07925c5d04da57a5a75582e15bf2f3ae0624572e63132f59c790->leave($__internal_eb004bc41e7c07925c5d04da57a5a75582e15bf2f3ae0624572e63132f59c790_prof);

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

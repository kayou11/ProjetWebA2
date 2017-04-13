<?php

/* base.html.twig */
class __TwigTemplate_45e255e5e7bdca0ca5a436c04c5247c6fab0e89cd67f60111f4e5cf8efdadcd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b42594111ef5d8d6a1e44c3cb2c594788be1c543be7316d598f45d48282a3e10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b42594111ef5d8d6a1e44c3cb2c594788be1c543be7316d598f45d48282a3e10->enter($__internal_b42594111ef5d8d6a1e44c3cb2c594788be1c543be7316d598f45d48282a3e10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_4714676b4f1bc4127027f767d6dbe83129696b3a1da74d80f3474e4d9153f1f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4714676b4f1bc4127027f767d6dbe83129696b3a1da74d80f3474e4d9153f1f8->enter($__internal_4714676b4f1bc4127027f767d6dbe83129696b3a1da74d80f3474e4d9153f1f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_b42594111ef5d8d6a1e44c3cb2c594788be1c543be7316d598f45d48282a3e10->leave($__internal_b42594111ef5d8d6a1e44c3cb2c594788be1c543be7316d598f45d48282a3e10_prof);

        
        $__internal_4714676b4f1bc4127027f767d6dbe83129696b3a1da74d80f3474e4d9153f1f8->leave($__internal_4714676b4f1bc4127027f767d6dbe83129696b3a1da74d80f3474e4d9153f1f8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c66279a8322c1de816b145e087f178fcef95efcd56e2cc9a1ae5ccbd24b48394 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c66279a8322c1de816b145e087f178fcef95efcd56e2cc9a1ae5ccbd24b48394->enter($__internal_c66279a8322c1de816b145e087f178fcef95efcd56e2cc9a1ae5ccbd24b48394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_81dd6006891f341b6e9831ac75b002e5d9f5a385eb55c1b199edcf0bea68994c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81dd6006891f341b6e9831ac75b002e5d9f5a385eb55c1b199edcf0bea68994c->enter($__internal_81dd6006891f341b6e9831ac75b002e5d9f5a385eb55c1b199edcf0bea68994c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_81dd6006891f341b6e9831ac75b002e5d9f5a385eb55c1b199edcf0bea68994c->leave($__internal_81dd6006891f341b6e9831ac75b002e5d9f5a385eb55c1b199edcf0bea68994c_prof);

        
        $__internal_c66279a8322c1de816b145e087f178fcef95efcd56e2cc9a1ae5ccbd24b48394->leave($__internal_c66279a8322c1de816b145e087f178fcef95efcd56e2cc9a1ae5ccbd24b48394_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_528cd00df1cfb38929de66e4062c098f9a51507b7f6c3c3bec842556d0e60849 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_528cd00df1cfb38929de66e4062c098f9a51507b7f6c3c3bec842556d0e60849->enter($__internal_528cd00df1cfb38929de66e4062c098f9a51507b7f6c3c3bec842556d0e60849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_eceb93b503935a13f1008feb47e8d3988655c2af8497b9b30863cbf3dfb796fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eceb93b503935a13f1008feb47e8d3988655c2af8497b9b30863cbf3dfb796fd->enter($__internal_eceb93b503935a13f1008feb47e8d3988655c2af8497b9b30863cbf3dfb796fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_eceb93b503935a13f1008feb47e8d3988655c2af8497b9b30863cbf3dfb796fd->leave($__internal_eceb93b503935a13f1008feb47e8d3988655c2af8497b9b30863cbf3dfb796fd_prof);

        
        $__internal_528cd00df1cfb38929de66e4062c098f9a51507b7f6c3c3bec842556d0e60849->leave($__internal_528cd00df1cfb38929de66e4062c098f9a51507b7f6c3c3bec842556d0e60849_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_72597c2aeeab839080cb969df0ade68d4607f757aa4e6056c3b6a21d2f8b22cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72597c2aeeab839080cb969df0ade68d4607f757aa4e6056c3b6a21d2f8b22cc->enter($__internal_72597c2aeeab839080cb969df0ade68d4607f757aa4e6056c3b6a21d2f8b22cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8867363c6d5eff239b3f43ee41c00f011c755397112d25d625a07eeb37b3b6a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8867363c6d5eff239b3f43ee41c00f011c755397112d25d625a07eeb37b3b6a0->enter($__internal_8867363c6d5eff239b3f43ee41c00f011c755397112d25d625a07eeb37b3b6a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8867363c6d5eff239b3f43ee41c00f011c755397112d25d625a07eeb37b3b6a0->leave($__internal_8867363c6d5eff239b3f43ee41c00f011c755397112d25d625a07eeb37b3b6a0_prof);

        
        $__internal_72597c2aeeab839080cb969df0ade68d4607f757aa4e6056c3b6a21d2f8b22cc->leave($__internal_72597c2aeeab839080cb969df0ade68d4607f757aa4e6056c3b6a21d2f8b22cc_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ad679c98311635263ccf86ddd0e2230eb1d42a0754ca05990d646eb87cf92b34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad679c98311635263ccf86ddd0e2230eb1d42a0754ca05990d646eb87cf92b34->enter($__internal_ad679c98311635263ccf86ddd0e2230eb1d42a0754ca05990d646eb87cf92b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4239075437648d705a9f7bc5d4a9de2ac4d22b7a8ec3d650a800b274a601e0f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4239075437648d705a9f7bc5d4a9de2ac4d22b7a8ec3d650a800b274a601e0f2->enter($__internal_4239075437648d705a9f7bc5d4a9de2ac4d22b7a8ec3d650a800b274a601e0f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4239075437648d705a9f7bc5d4a9de2ac4d22b7a8ec3d650a800b274a601e0f2->leave($__internal_4239075437648d705a9f7bc5d4a9de2ac4d22b7a8ec3d650a800b274a601e0f2_prof);

        
        $__internal_ad679c98311635263ccf86ddd0e2230eb1d42a0754ca05990d646eb87cf92b34->leave($__internal_ad679c98311635263ccf86ddd0e2230eb1d42a0754ca05990d646eb87cf92b34_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/app/Resources/views/base.html.twig");
    }
}

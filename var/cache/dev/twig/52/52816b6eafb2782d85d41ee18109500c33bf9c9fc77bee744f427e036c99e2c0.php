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
        $__internal_794721fa98faa104d40b378e155c81bd5a227d0a4a96657780debe344ddef66a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_794721fa98faa104d40b378e155c81bd5a227d0a4a96657780debe344ddef66a->enter($__internal_794721fa98faa104d40b378e155c81bd5a227d0a4a96657780debe344ddef66a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_49e49fbf2180d54b4fbd9d64776ab3b9a1142f0b41440f012e9b5926fb71258a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49e49fbf2180d54b4fbd9d64776ab3b9a1142f0b41440f012e9b5926fb71258a->enter($__internal_49e49fbf2180d54b4fbd9d64776ab3b9a1142f0b41440f012e9b5926fb71258a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_794721fa98faa104d40b378e155c81bd5a227d0a4a96657780debe344ddef66a->leave($__internal_794721fa98faa104d40b378e155c81bd5a227d0a4a96657780debe344ddef66a_prof);

        
        $__internal_49e49fbf2180d54b4fbd9d64776ab3b9a1142f0b41440f012e9b5926fb71258a->leave($__internal_49e49fbf2180d54b4fbd9d64776ab3b9a1142f0b41440f012e9b5926fb71258a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c6bc65fc6395af93aacee959ace3bea45779e34b8e99c433296e6e8aac96d721 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6bc65fc6395af93aacee959ace3bea45779e34b8e99c433296e6e8aac96d721->enter($__internal_c6bc65fc6395af93aacee959ace3bea45779e34b8e99c433296e6e8aac96d721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ab739c432ee07fd0b51b16985d27b6f7d49ee32dfefa5792d05452ad6efaa5d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab739c432ee07fd0b51b16985d27b6f7d49ee32dfefa5792d05452ad6efaa5d3->enter($__internal_ab739c432ee07fd0b51b16985d27b6f7d49ee32dfefa5792d05452ad6efaa5d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ab739c432ee07fd0b51b16985d27b6f7d49ee32dfefa5792d05452ad6efaa5d3->leave($__internal_ab739c432ee07fd0b51b16985d27b6f7d49ee32dfefa5792d05452ad6efaa5d3_prof);

        
        $__internal_c6bc65fc6395af93aacee959ace3bea45779e34b8e99c433296e6e8aac96d721->leave($__internal_c6bc65fc6395af93aacee959ace3bea45779e34b8e99c433296e6e8aac96d721_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7a873580d2f35050b71309bcdcf47912a40dad64b2e7d4003a281b5c6c092463 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a873580d2f35050b71309bcdcf47912a40dad64b2e7d4003a281b5c6c092463->enter($__internal_7a873580d2f35050b71309bcdcf47912a40dad64b2e7d4003a281b5c6c092463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b74a7df0980c3a637ae459d5d108a084d2edbc51c15daa0c681d0f0d20a15c58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b74a7df0980c3a637ae459d5d108a084d2edbc51c15daa0c681d0f0d20a15c58->enter($__internal_b74a7df0980c3a637ae459d5d108a084d2edbc51c15daa0c681d0f0d20a15c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b74a7df0980c3a637ae459d5d108a084d2edbc51c15daa0c681d0f0d20a15c58->leave($__internal_b74a7df0980c3a637ae459d5d108a084d2edbc51c15daa0c681d0f0d20a15c58_prof);

        
        $__internal_7a873580d2f35050b71309bcdcf47912a40dad64b2e7d4003a281b5c6c092463->leave($__internal_7a873580d2f35050b71309bcdcf47912a40dad64b2e7d4003a281b5c6c092463_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a37cb8d76b4e9226dca0a22ee97ff40369f9dd8abef8f98bf695d76badb02411 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a37cb8d76b4e9226dca0a22ee97ff40369f9dd8abef8f98bf695d76badb02411->enter($__internal_a37cb8d76b4e9226dca0a22ee97ff40369f9dd8abef8f98bf695d76badb02411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_653d15b262bb5b9c991389e651a01e03ec0d47f3de6c43dea46c32c89b8f363e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_653d15b262bb5b9c991389e651a01e03ec0d47f3de6c43dea46c32c89b8f363e->enter($__internal_653d15b262bb5b9c991389e651a01e03ec0d47f3de6c43dea46c32c89b8f363e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_653d15b262bb5b9c991389e651a01e03ec0d47f3de6c43dea46c32c89b8f363e->leave($__internal_653d15b262bb5b9c991389e651a01e03ec0d47f3de6c43dea46c32c89b8f363e_prof);

        
        $__internal_a37cb8d76b4e9226dca0a22ee97ff40369f9dd8abef8f98bf695d76badb02411->leave($__internal_a37cb8d76b4e9226dca0a22ee97ff40369f9dd8abef8f98bf695d76badb02411_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c84d2cf6a37d8bb8523209527f412bcd5e3473c5c11d08bf63382a4f9826c953 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c84d2cf6a37d8bb8523209527f412bcd5e3473c5c11d08bf63382a4f9826c953->enter($__internal_c84d2cf6a37d8bb8523209527f412bcd5e3473c5c11d08bf63382a4f9826c953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_541a5c062bd6ca7e6059a8bbb51404e1c86b6cfc86ed032db28fe206a00ea6e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_541a5c062bd6ca7e6059a8bbb51404e1c86b6cfc86ed032db28fe206a00ea6e2->enter($__internal_541a5c062bd6ca7e6059a8bbb51404e1c86b6cfc86ed032db28fe206a00ea6e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_541a5c062bd6ca7e6059a8bbb51404e1c86b6cfc86ed032db28fe206a00ea6e2->leave($__internal_541a5c062bd6ca7e6059a8bbb51404e1c86b6cfc86ed032db28fe206a00ea6e2_prof);

        
        $__internal_c84d2cf6a37d8bb8523209527f412bcd5e3473c5c11d08bf63382a4f9826c953->leave($__internal_c84d2cf6a37d8bb8523209527f412bcd5e3473c5c11d08bf63382a4f9826c953_prof);

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

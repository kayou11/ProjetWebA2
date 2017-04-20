<?php

/* CoreSphereConsoleBundle::base.html.twig */
class __TwigTemplate_8172b068974fd357906edb50001c38ff60611aca7a33bf28b5555d2e048b4d13 extends Twig_Template
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
        $__internal_16947ffa109ed9cc92a5d692ad47d26b1976fe5e59a468cc18f8990e1d2b4a81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16947ffa109ed9cc92a5d692ad47d26b1976fe5e59a468cc18f8990e1d2b4a81->enter($__internal_16947ffa109ed9cc92a5d692ad47d26b1976fe5e59a468cc18f8990e1d2b4a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

        $__internal_9d3996c927d5efe3a4ebdb29d6f51a2919e234864702aaab7c5408db57feed74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d3996c927d5efe3a4ebdb29d6f51a2919e234864702aaab7c5408db57feed74->enter($__internal_9d3996c927d5efe3a4ebdb29d6f51a2919e234864702aaab7c5408db57feed74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

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
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "    </body>
</html>
";
        
        $__internal_16947ffa109ed9cc92a5d692ad47d26b1976fe5e59a468cc18f8990e1d2b4a81->leave($__internal_16947ffa109ed9cc92a5d692ad47d26b1976fe5e59a468cc18f8990e1d2b4a81_prof);

        
        $__internal_9d3996c927d5efe3a4ebdb29d6f51a2919e234864702aaab7c5408db57feed74->leave($__internal_9d3996c927d5efe3a4ebdb29d6f51a2919e234864702aaab7c5408db57feed74_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e43cdc1ec3be52c4db3ae60bc98048b7277fe5aff49b07a8a339097108a755a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e43cdc1ec3be52c4db3ae60bc98048b7277fe5aff49b07a8a339097108a755a8->enter($__internal_e43cdc1ec3be52c4db3ae60bc98048b7277fe5aff49b07a8a339097108a755a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_37de8bc571e690213f4ce9a061d9c03f6741bdd22276b530284266676716ea74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37de8bc571e690213f4ce9a061d9c03f6741bdd22276b530284266676716ea74->enter($__internal_37de8bc571e690213f4ce9a061d9c03f6741bdd22276b530284266676716ea74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CoreSphere Console";
        
        $__internal_37de8bc571e690213f4ce9a061d9c03f6741bdd22276b530284266676716ea74->leave($__internal_37de8bc571e690213f4ce9a061d9c03f6741bdd22276b530284266676716ea74_prof);

        
        $__internal_e43cdc1ec3be52c4db3ae60bc98048b7277fe5aff49b07a8a339097108a755a8->leave($__internal_e43cdc1ec3be52c4db3ae60bc98048b7277fe5aff49b07a8a339097108a755a8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ec7dbf4a2964bfa58eaf16164d53ffe539604d4bc03252bf53969d96c0364fd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec7dbf4a2964bfa58eaf16164d53ffe539604d4bc03252bf53969d96c0364fd4->enter($__internal_ec7dbf4a2964bfa58eaf16164d53ffe539604d4bc03252bf53969d96c0364fd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7d6e76519aa184cee8ff1ec6f1d46121503c7c229a503b14d9d4e7e4f4e15556 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d6e76519aa184cee8ff1ec6f1d46121503c7c229a503b14d9d4e7e4f4e15556->enter($__internal_7d6e76519aa184cee8ff1ec6f1d46121503c7c229a503b14d9d4e7e4f4e15556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
        
        $__internal_7d6e76519aa184cee8ff1ec6f1d46121503c7c229a503b14d9d4e7e4f4e15556->leave($__internal_7d6e76519aa184cee8ff1ec6f1d46121503c7c229a503b14d9d4e7e4f4e15556_prof);

        
        $__internal_ec7dbf4a2964bfa58eaf16164d53ffe539604d4bc03252bf53969d96c0364fd4->leave($__internal_ec7dbf4a2964bfa58eaf16164d53ffe539604d4bc03252bf53969d96c0364fd4_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_7df8b03e58422f0ba611417694d0d37d64500c8a8cbf8d0b9dc1b2abff2c5de1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7df8b03e58422f0ba611417694d0d37d64500c8a8cbf8d0b9dc1b2abff2c5de1->enter($__internal_7df8b03e58422f0ba611417694d0d37d64500c8a8cbf8d0b9dc1b2abff2c5de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_46a8a417c0015fce0d4d5c8dc1865ad728600ab1b00b34d38d3a048307759059 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46a8a417c0015fce0d4d5c8dc1865ad728600ab1b00b34d38d3a048307759059->enter($__internal_46a8a417c0015fce0d4d5c8dc1865ad728600ab1b00b34d38d3a048307759059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_46a8a417c0015fce0d4d5c8dc1865ad728600ab1b00b34d38d3a048307759059->leave($__internal_46a8a417c0015fce0d4d5c8dc1865ad728600ab1b00b34d38d3a048307759059_prof);

        
        $__internal_7df8b03e58422f0ba611417694d0d37d64500c8a8cbf8d0b9dc1b2abff2c5de1->leave($__internal_7df8b03e58422f0ba611417694d0d37d64500c8a8cbf8d0b9dc1b2abff2c5de1_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c27d5700a418cc1d06774d5413efe4167130633b740def67817dbfdc4fa80fa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c27d5700a418cc1d06774d5413efe4167130633b740def67817dbfdc4fa80fa2->enter($__internal_c27d5700a418cc1d06774d5413efe4167130633b740def67817dbfdc4fa80fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_91b7a4c7b084671c4e7ab61fc655657182ebbd8705777d05b608fce38ef057b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91b7a4c7b084671c4e7ab61fc655657182ebbd8705777d05b608fce38ef057b7->enter($__internal_91b7a4c7b084671c4e7ab61fc655657182ebbd8705777d05b608fce38ef057b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            ";
        // line 15
        echo "            <script>
            window.jQuery || document.write('<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js\"><\\/script>')
            </script>
            <script>
            window.jQuery || document.write(\"<script src=\\\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\\\"><\\/script>\");
            </script>
        ";
        
        $__internal_91b7a4c7b084671c4e7ab61fc655657182ebbd8705777d05b608fce38ef057b7->leave($__internal_91b7a4c7b084671c4e7ab61fc655657182ebbd8705777d05b608fce38ef057b7_prof);

        
        $__internal_c27d5700a418cc1d06774d5413efe4167130633b740def67817dbfdc4fa80fa2->leave($__internal_c27d5700a418cc1d06774d5413efe4167130633b740def67817dbfdc4fa80fa2_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 19,  134 => 15,  132 => 14,  123 => 13,  105 => 12,  92 => 7,  83 => 6,  65 => 5,  53 => 22,  50 => 13,  48 => 12,  41 => 9,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title 'CoreSphere Console' %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/coresphereconsole/css/base.css') }}\" type=\"text/css\" />
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body '' %}
        {% block javascripts %}
            {# Load jQuery from Google CDN with a local fallback when not laded yet #}
            <script>
            window.jQuery || document.write('<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js\"><\\/script>')
            </script>
            <script>
            window.jQuery || document.write(\"<script src=\\\"{{ asset('bundles/coresphereconsole/js/jquery-1.8.3.min.js') }}\\\"><\\/script>\");
            </script>
        {% endblock %}
    </body>
</html>
", "CoreSphereConsoleBundle::base.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/coresphere/console-bundle/Resources/views/base.html.twig");
    }
}

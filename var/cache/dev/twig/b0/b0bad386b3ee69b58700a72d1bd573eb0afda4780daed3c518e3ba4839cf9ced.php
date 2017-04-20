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
        $__internal_98b5827e2675b17d5134c462fcffbac3e043d26401e92bb5878d93013d52d2fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98b5827e2675b17d5134c462fcffbac3e043d26401e92bb5878d93013d52d2fc->enter($__internal_98b5827e2675b17d5134c462fcffbac3e043d26401e92bb5878d93013d52d2fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

        $__internal_628cccf415efbb9c6d86b690a48ef4e777418f327d2165be1763ee6d4550304b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_628cccf415efbb9c6d86b690a48ef4e777418f327d2165be1763ee6d4550304b->enter($__internal_628cccf415efbb9c6d86b690a48ef4e777418f327d2165be1763ee6d4550304b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

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
        
        $__internal_98b5827e2675b17d5134c462fcffbac3e043d26401e92bb5878d93013d52d2fc->leave($__internal_98b5827e2675b17d5134c462fcffbac3e043d26401e92bb5878d93013d52d2fc_prof);

        
        $__internal_628cccf415efbb9c6d86b690a48ef4e777418f327d2165be1763ee6d4550304b->leave($__internal_628cccf415efbb9c6d86b690a48ef4e777418f327d2165be1763ee6d4550304b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_475e653892af020b317d163c589e1532f03929e76a1c369470d539a30881b27b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_475e653892af020b317d163c589e1532f03929e76a1c369470d539a30881b27b->enter($__internal_475e653892af020b317d163c589e1532f03929e76a1c369470d539a30881b27b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8ce4676ecb9f0d29fff350ebb552ff9ddfb5ec26bfacd0b5cd3b0f71598740fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ce4676ecb9f0d29fff350ebb552ff9ddfb5ec26bfacd0b5cd3b0f71598740fc->enter($__internal_8ce4676ecb9f0d29fff350ebb552ff9ddfb5ec26bfacd0b5cd3b0f71598740fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CoreSphere Console";
        
        $__internal_8ce4676ecb9f0d29fff350ebb552ff9ddfb5ec26bfacd0b5cd3b0f71598740fc->leave($__internal_8ce4676ecb9f0d29fff350ebb552ff9ddfb5ec26bfacd0b5cd3b0f71598740fc_prof);

        
        $__internal_475e653892af020b317d163c589e1532f03929e76a1c369470d539a30881b27b->leave($__internal_475e653892af020b317d163c589e1532f03929e76a1c369470d539a30881b27b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f38e671332e02029f49d71514c3e2dc121541e3c64ae826e5dfc4d93d9a00ec8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f38e671332e02029f49d71514c3e2dc121541e3c64ae826e5dfc4d93d9a00ec8->enter($__internal_f38e671332e02029f49d71514c3e2dc121541e3c64ae826e5dfc4d93d9a00ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_71e5bd73c95b85f11083415daa69dfb7feff755d16368b1f4d1d46c51a0df2b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71e5bd73c95b85f11083415daa69dfb7feff755d16368b1f4d1d46c51a0df2b4->enter($__internal_71e5bd73c95b85f11083415daa69dfb7feff755d16368b1f4d1d46c51a0df2b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
        
        $__internal_71e5bd73c95b85f11083415daa69dfb7feff755d16368b1f4d1d46c51a0df2b4->leave($__internal_71e5bd73c95b85f11083415daa69dfb7feff755d16368b1f4d1d46c51a0df2b4_prof);

        
        $__internal_f38e671332e02029f49d71514c3e2dc121541e3c64ae826e5dfc4d93d9a00ec8->leave($__internal_f38e671332e02029f49d71514c3e2dc121541e3c64ae826e5dfc4d93d9a00ec8_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_e03fd23d2281f2750260415643d932fb8e5ed71cecfa00238bb527604940592a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e03fd23d2281f2750260415643d932fb8e5ed71cecfa00238bb527604940592a->enter($__internal_e03fd23d2281f2750260415643d932fb8e5ed71cecfa00238bb527604940592a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_16f8e870f3f2e2d201c82f8be0ef514dc834f63e4d43a326347494789ef9ee8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16f8e870f3f2e2d201c82f8be0ef514dc834f63e4d43a326347494789ef9ee8d->enter($__internal_16f8e870f3f2e2d201c82f8be0ef514dc834f63e4d43a326347494789ef9ee8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_16f8e870f3f2e2d201c82f8be0ef514dc834f63e4d43a326347494789ef9ee8d->leave($__internal_16f8e870f3f2e2d201c82f8be0ef514dc834f63e4d43a326347494789ef9ee8d_prof);

        
        $__internal_e03fd23d2281f2750260415643d932fb8e5ed71cecfa00238bb527604940592a->leave($__internal_e03fd23d2281f2750260415643d932fb8e5ed71cecfa00238bb527604940592a_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_18fff83193e92c0477bcf688fb8de07573a5872167a2a87372ee9071cc4430ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18fff83193e92c0477bcf688fb8de07573a5872167a2a87372ee9071cc4430ae->enter($__internal_18fff83193e92c0477bcf688fb8de07573a5872167a2a87372ee9071cc4430ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c830a15f6451ea9ad59a471e956c06be8a196b699aed0fe0b896d7084a2c55e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c830a15f6451ea9ad59a471e956c06be8a196b699aed0fe0b896d7084a2c55e7->enter($__internal_c830a15f6451ea9ad59a471e956c06be8a196b699aed0fe0b896d7084a2c55e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_c830a15f6451ea9ad59a471e956c06be8a196b699aed0fe0b896d7084a2c55e7->leave($__internal_c830a15f6451ea9ad59a471e956c06be8a196b699aed0fe0b896d7084a2c55e7_prof);

        
        $__internal_18fff83193e92c0477bcf688fb8de07573a5872167a2a87372ee9071cc4430ae->leave($__internal_18fff83193e92c0477bcf688fb8de07573a5872167a2a87372ee9071cc4430ae_prof);

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

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
        $__internal_190b7cac440152c6a6a43bee85ce448edf28a3e5de5e46674776c19e2b5c16bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_190b7cac440152c6a6a43bee85ce448edf28a3e5de5e46674776c19e2b5c16bc->enter($__internal_190b7cac440152c6a6a43bee85ce448edf28a3e5de5e46674776c19e2b5c16bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

        $__internal_19ed3439c222780c4ec84710f077487944fc6e7c7878b9fbb70e6be0b145d655 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19ed3439c222780c4ec84710f077487944fc6e7c7878b9fbb70e6be0b145d655->enter($__internal_19ed3439c222780c4ec84710f077487944fc6e7c7878b9fbb70e6be0b145d655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

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
        
        $__internal_190b7cac440152c6a6a43bee85ce448edf28a3e5de5e46674776c19e2b5c16bc->leave($__internal_190b7cac440152c6a6a43bee85ce448edf28a3e5de5e46674776c19e2b5c16bc_prof);

        
        $__internal_19ed3439c222780c4ec84710f077487944fc6e7c7878b9fbb70e6be0b145d655->leave($__internal_19ed3439c222780c4ec84710f077487944fc6e7c7878b9fbb70e6be0b145d655_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d59d9a7b269429f0ca8c99f06fb5380c4d29122cf6dbb1ae1271ac50d40180e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d59d9a7b269429f0ca8c99f06fb5380c4d29122cf6dbb1ae1271ac50d40180e6->enter($__internal_d59d9a7b269429f0ca8c99f06fb5380c4d29122cf6dbb1ae1271ac50d40180e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5ff88c5d32c7c3cdec0bcd32103604d6ddc588ca32b8d7fd4cc82fb906db4781 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ff88c5d32c7c3cdec0bcd32103604d6ddc588ca32b8d7fd4cc82fb906db4781->enter($__internal_5ff88c5d32c7c3cdec0bcd32103604d6ddc588ca32b8d7fd4cc82fb906db4781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CoreSphere Console";
        
        $__internal_5ff88c5d32c7c3cdec0bcd32103604d6ddc588ca32b8d7fd4cc82fb906db4781->leave($__internal_5ff88c5d32c7c3cdec0bcd32103604d6ddc588ca32b8d7fd4cc82fb906db4781_prof);

        
        $__internal_d59d9a7b269429f0ca8c99f06fb5380c4d29122cf6dbb1ae1271ac50d40180e6->leave($__internal_d59d9a7b269429f0ca8c99f06fb5380c4d29122cf6dbb1ae1271ac50d40180e6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_08178f5d12a62d4082abbf6ff34176eed926bad1028aa644cadb296433a5e452 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08178f5d12a62d4082abbf6ff34176eed926bad1028aa644cadb296433a5e452->enter($__internal_08178f5d12a62d4082abbf6ff34176eed926bad1028aa644cadb296433a5e452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_09661ed7206abae5c400ce5a399b9a644fc647cd26c4f5f1502c1ab1ff760ac8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09661ed7206abae5c400ce5a399b9a644fc647cd26c4f5f1502c1ab1ff760ac8->enter($__internal_09661ed7206abae5c400ce5a399b9a644fc647cd26c4f5f1502c1ab1ff760ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
        
        $__internal_09661ed7206abae5c400ce5a399b9a644fc647cd26c4f5f1502c1ab1ff760ac8->leave($__internal_09661ed7206abae5c400ce5a399b9a644fc647cd26c4f5f1502c1ab1ff760ac8_prof);

        
        $__internal_08178f5d12a62d4082abbf6ff34176eed926bad1028aa644cadb296433a5e452->leave($__internal_08178f5d12a62d4082abbf6ff34176eed926bad1028aa644cadb296433a5e452_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_497c0b1c9389140edebf2a9732f0b65388df777be49b02fc6d49170d25cff01e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_497c0b1c9389140edebf2a9732f0b65388df777be49b02fc6d49170d25cff01e->enter($__internal_497c0b1c9389140edebf2a9732f0b65388df777be49b02fc6d49170d25cff01e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5c157134f880deab662b424861c452251a38030dd3fb87c0eb9606d49e5254e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c157134f880deab662b424861c452251a38030dd3fb87c0eb9606d49e5254e9->enter($__internal_5c157134f880deab662b424861c452251a38030dd3fb87c0eb9606d49e5254e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_5c157134f880deab662b424861c452251a38030dd3fb87c0eb9606d49e5254e9->leave($__internal_5c157134f880deab662b424861c452251a38030dd3fb87c0eb9606d49e5254e9_prof);

        
        $__internal_497c0b1c9389140edebf2a9732f0b65388df777be49b02fc6d49170d25cff01e->leave($__internal_497c0b1c9389140edebf2a9732f0b65388df777be49b02fc6d49170d25cff01e_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_83e43269b546c2cf5277af2cc28ad89d3fbc7b46cb4bdfad48da902d6833d66d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83e43269b546c2cf5277af2cc28ad89d3fbc7b46cb4bdfad48da902d6833d66d->enter($__internal_83e43269b546c2cf5277af2cc28ad89d3fbc7b46cb4bdfad48da902d6833d66d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f785bd302fcd0cfdd77d5c494cf3972182f507d70fadb0a9b5b1d6722cb11866 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f785bd302fcd0cfdd77d5c494cf3972182f507d70fadb0a9b5b1d6722cb11866->enter($__internal_f785bd302fcd0cfdd77d5c494cf3972182f507d70fadb0a9b5b1d6722cb11866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_f785bd302fcd0cfdd77d5c494cf3972182f507d70fadb0a9b5b1d6722cb11866->leave($__internal_f785bd302fcd0cfdd77d5c494cf3972182f507d70fadb0a9b5b1d6722cb11866_prof);

        
        $__internal_83e43269b546c2cf5277af2cc28ad89d3fbc7b46cb4bdfad48da902d6833d66d->leave($__internal_83e43269b546c2cf5277af2cc28ad89d3fbc7b46cb4bdfad48da902d6833d66d_prof);

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

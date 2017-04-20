<?php

/* CoreSphereConsoleBundle:Console:console.html.twig */
class __TwigTemplate_091c03ae31d34484379e9489813c0a2843ad0299e9f45b0fb816efeeab5cdcea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreSphereConsoleBundle::base.html.twig", "CoreSphereConsoleBundle:Console:console.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CoreSphereConsoleBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_19ac8d98d49dd838170776b9fda69ce54c08063d8a1371229eef44aa28511f65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19ac8d98d49dd838170776b9fda69ce54c08063d8a1371229eef44aa28511f65->enter($__internal_19ac8d98d49dd838170776b9fda69ce54c08063d8a1371229eef44aa28511f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:console.html.twig"));

        $__internal_ea775f024ae116e79009bfb5df0e6c6461cfe04a1db3ae206822bf79969f3ece = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea775f024ae116e79009bfb5df0e6c6461cfe04a1db3ae206822bf79969f3ece->enter($__internal_ea775f024ae116e79009bfb5df0e6c6461cfe04a1db3ae206822bf79969f3ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:console.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19ac8d98d49dd838170776b9fda69ce54c08063d8a1371229eef44aa28511f65->leave($__internal_19ac8d98d49dd838170776b9fda69ce54c08063d8a1371229eef44aa28511f65_prof);

        
        $__internal_ea775f024ae116e79009bfb5df0e6c6461cfe04a1db3ae206822bf79969f3ece->leave($__internal_ea775f024ae116e79009bfb5df0e6c6461cfe04a1db3ae206822bf79969f3ece_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b42509503dfc4f8ccdddb050dca2df5c3c6d991ea0e2e9e21af97cbf1b652852 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b42509503dfc4f8ccdddb050dca2df5c3c6d991ea0e2e9e21af97cbf1b652852->enter($__internal_b42509503dfc4f8ccdddb050dca2df5c3c6d991ea0e2e9e21af97cbf1b652852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f74afd33a129132dc700a08866c72760941b8bd137bafa5e089ea4beceedfc86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f74afd33a129132dc700a08866c72760941b8bd137bafa5e089ea4beceedfc86->enter($__internal_f74afd33a129132dc700a08866c72760941b8bd137bafa5e089ea4beceedfc86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.headline.index"), "html", null, true);
        
        $__internal_f74afd33a129132dc700a08866c72760941b8bd137bafa5e089ea4beceedfc86->leave($__internal_f74afd33a129132dc700a08866c72760941b8bd137bafa5e089ea4beceedfc86_prof);

        
        $__internal_b42509503dfc4f8ccdddb050dca2df5c3c6d991ea0e2e9e21af97cbf1b652852->leave($__internal_b42509503dfc4f8ccdddb050dca2df5c3c6d991ea0e2e9e21af97cbf1b652852_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7aa4f35a2df4709829c196bcdc47e26eceaf3ac60e6d2906307fbfb4f411306a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7aa4f35a2df4709829c196bcdc47e26eceaf3ac60e6d2906307fbfb4f411306a->enter($__internal_7aa4f35a2df4709829c196bcdc47e26eceaf3ac60e6d2906307fbfb4f411306a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0f1d7563cb74631a9406a05a67982b06f72e213d628a386d40dccc48419a9f79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f1d7563cb74631a9406a05a67982b06f72e213d628a386d40dccc48419a9f79->enter($__internal_0f1d7563cb74631a9406a05a67982b06f72e213d628a386d40dccc48419a9f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/console.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        
        $__internal_0f1d7563cb74631a9406a05a67982b06f72e213d628a386d40dccc48419a9f79->leave($__internal_0f1d7563cb74631a9406a05a67982b06f72e213d628a386d40dccc48419a9f79_prof);

        
        $__internal_7aa4f35a2df4709829c196bcdc47e26eceaf3ac60e6d2906307fbfb4f411306a->leave($__internal_7aa4f35a2df4709829c196bcdc47e26eceaf3ac60e6d2906307fbfb4f411306a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_926785c970ce3f3d5fbe958ec1a0601e7344de58cc8b37f84fb8ccace4c903a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_926785c970ce3f3d5fbe958ec1a0601e7344de58cc8b37f84fb8ccace4c903a2->enter($__internal_926785c970ce3f3d5fbe958ec1a0601e7344de58cc8b37f84fb8ccace4c903a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4a816f2ea71b114051fecb3a0616de7ab1037108946c7bd6cacb6177958b48a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a816f2ea71b114051fecb3a0616de7ab1037108946c7bd6cacb6177958b48a0->enter($__internal_4a816f2ea71b114051fecb3a0616de7ab1037108946c7bd6cacb6177958b48a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:terminal.html.twig", "CoreSphereConsoleBundle:Console:console.html.twig", 11)->display($context);
        // line 12
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:htmlTemplates.html.twig", "CoreSphereConsoleBundle:Console:console.html.twig", 12)->display($context);
        
        $__internal_4a816f2ea71b114051fecb3a0616de7ab1037108946c7bd6cacb6177958b48a0->leave($__internal_4a816f2ea71b114051fecb3a0616de7ab1037108946c7bd6cacb6177958b48a0_prof);

        
        $__internal_926785c970ce3f3d5fbe958ec1a0601e7344de58cc8b37f84fb8ccace4c903a2->leave($__internal_926785c970ce3f3d5fbe958ec1a0601e7344de58cc8b37f84fb8ccace4c903a2_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_78064b03b5acc033ebb5b3b43b0542068c12b3548bff358abc66769bc0fdc119 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78064b03b5acc033ebb5b3b43b0542068c12b3548bff358abc66769bc0fdc119->enter($__internal_78064b03b5acc033ebb5b3b43b0542068c12b3548bff358abc66769bc0fdc119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a1986b65b8c15628b1af7aafffd7a58477b2ba5b5c051f573c115cecfac27090 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1986b65b8c15628b1af7aafffd7a58477b2ba5b5c051f573c115cecfac27090->enter($__internal_a1986b65b8c15628b1af7aafffd7a58477b2ba5b5c051f573c115cecfac27090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/js/console.js"), "html", null, true);
        echo "\"></script>
    <script>
        jQuery(function () {
            ";
        // line 21
        echo "            var coresphere_console = new CoreSphereConsole(
                jQuery(\"#coresphere_consolebundle_console\"), {
                \"commands\" : ";
        // line 23
        echo json_encode(twig_get_array_keys_filter((isset($context["commands"]) || array_key_exists("commands", $context) ? $context["commands"] : (function () { throw new Twig_Error_Runtime('Variable "commands" does not exist.', 23, $this->getSourceContext()); })())));
        echo ".sort(),
                \"post_path\" : \"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("console_exec"), "js", null, true);
        echo "\",
                \"environment\" : \"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["environment"]) || array_key_exists("environment", $context) ? $context["environment"] : (function () { throw new Twig_Error_Runtime('Variable "environment" does not exist.', 25, $this->getSourceContext()); })()), "js", null, true);
        echo "\",
                \"lang\" : {
                    \"loading\" : \"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.loading"), "js", null, true);
        echo "\",
                    \"suggestion_head\" : \"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.suggestion_head"), "js", null, true);
        echo "\",
                    \"environment\" : \"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.environment"), "js", null, true);
        echo "\",
                    \"empty_response\" : \"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.empty_response"), "js", null, true);
        echo "\",
                    \"welcome_message\" : \"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.welcome_message", array("%command%" => "<code class=\"console_command\">list</code>")), "js", null, true);
        echo "\"
                },
                \"templates\" : {
                    \"error\" : \$(\"#template_console_error\").text(),
                    \"command\" : \$(\"#template_console_command\").text(),
                    \"environment\" : \$(\"#template_console_environment\").text(),
                    \"suggestion_list\" : \$('#template_suggestion_list').text(),
                    \"loading\" : \$('#template_console_loading').text(),
                    \"suggestion_item_active\" : \$('#suggestion_item_active').text(),
                    \"suggestion_item\" : \$('#suggestion_item').text(),
                    \"highlight\" : \$('#template_console_highlight').text().trim()
                }
            });
            ";
        // line 45
        echo "        });
    </script>
";
        
        $__internal_a1986b65b8c15628b1af7aafffd7a58477b2ba5b5c051f573c115cecfac27090->leave($__internal_a1986b65b8c15628b1af7aafffd7a58477b2ba5b5c051f573c115cecfac27090_prof);

        
        $__internal_78064b03b5acc033ebb5b3b43b0542068c12b3548bff358abc66769bc0fdc119->leave($__internal_78064b03b5acc033ebb5b3b43b0542068c12b3548bff358abc66769bc0fdc119_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle:Console:console.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 45,  163 => 31,  159 => 30,  155 => 29,  151 => 28,  147 => 27,  142 => 25,  138 => 24,  134 => 23,  130 => 21,  124 => 17,  119 => 16,  110 => 15,  99 => 12,  96 => 11,  87 => 10,  75 => 7,  70 => 6,  61 => 5,  43 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'CoreSphereConsoleBundle::base.html.twig'  %}

{% block title %}{{ 'coresphere_console.headline.index'|trans }}{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/coresphereconsole/css/console.css') }}\" type=\"text/css\" />
{% endblock %}

{% block body %}
    {%  include 'CoreSphereConsoleBundle:Console:terminal.html.twig' %}
    {%  include 'CoreSphereConsoleBundle:Console:htmlTemplates.html.twig' %}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('bundles/coresphereconsole/js/console.js') }}\"></script>
    <script>
        jQuery(function () {
            {% autoescape 'js' %}
            var coresphere_console = new CoreSphereConsole(
                jQuery(\"#coresphere_consolebundle_console\"), {
                \"commands\" : {{ commands|keys|json_encode|raw }}.sort(),
                \"post_path\" : \"{{ path('console_exec') }}\",
                \"environment\" : \"{{ environment }}\",
                \"lang\" : {
                    \"loading\" : \"{{ 'coresphere_console.loading'|trans }}\",
                    \"suggestion_head\" : \"{{ 'coresphere_console.suggestion_head'|trans }}\",
                    \"environment\" : \"{{ 'coresphere_console.environment'|trans }}\",
                    \"empty_response\" : \"{{ 'coresphere_console.empty_response'|trans }}\",
                    \"welcome_message\" : \"{{ 'coresphere_console.welcome_message'|trans({'%command%': '<code class=\\\"console_command\\\">list</code>'}) }}\"
                },
                \"templates\" : {
                    \"error\" : \$(\"#template_console_error\").text(),
                    \"command\" : \$(\"#template_console_command\").text(),
                    \"environment\" : \$(\"#template_console_environment\").text(),
                    \"suggestion_list\" : \$('#template_suggestion_list').text(),
                    \"loading\" : \$('#template_console_loading').text(),
                    \"suggestion_item_active\" : \$('#suggestion_item_active').text(),
                    \"suggestion_item\" : \$('#suggestion_item').text(),
                    \"highlight\" : \$('#template_console_highlight').text().trim()
                }
            });
            {% endautoescape %}
        });
    </script>
{% endblock %}
", "CoreSphereConsoleBundle:Console:console.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/coresphere/console-bundle/Resources/views/Console/console.html.twig");
    }
}

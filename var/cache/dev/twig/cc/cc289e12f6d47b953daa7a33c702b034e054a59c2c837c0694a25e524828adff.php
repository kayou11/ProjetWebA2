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
        $__internal_d4e4fbad5ea8f2394a75f81a00b335fd81971208788d6f21354b789eb0bb2e63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4e4fbad5ea8f2394a75f81a00b335fd81971208788d6f21354b789eb0bb2e63->enter($__internal_d4e4fbad5ea8f2394a75f81a00b335fd81971208788d6f21354b789eb0bb2e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:console.html.twig"));

        $__internal_5cedcb78b5b0597ff13eecb454e4ff7e7124ea11b7aeb13e6935bbf10069c47c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cedcb78b5b0597ff13eecb454e4ff7e7124ea11b7aeb13e6935bbf10069c47c->enter($__internal_5cedcb78b5b0597ff13eecb454e4ff7e7124ea11b7aeb13e6935bbf10069c47c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:console.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4e4fbad5ea8f2394a75f81a00b335fd81971208788d6f21354b789eb0bb2e63->leave($__internal_d4e4fbad5ea8f2394a75f81a00b335fd81971208788d6f21354b789eb0bb2e63_prof);

        
        $__internal_5cedcb78b5b0597ff13eecb454e4ff7e7124ea11b7aeb13e6935bbf10069c47c->leave($__internal_5cedcb78b5b0597ff13eecb454e4ff7e7124ea11b7aeb13e6935bbf10069c47c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d838cfeb0ccc5882002db0d9ad73135768ca86a0d62e59786e063bb881ce6370 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d838cfeb0ccc5882002db0d9ad73135768ca86a0d62e59786e063bb881ce6370->enter($__internal_d838cfeb0ccc5882002db0d9ad73135768ca86a0d62e59786e063bb881ce6370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_43b4d9232178e10b5ff91a6e940e94cd83c33bdbed7788643591d7e7eebf4961 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43b4d9232178e10b5ff91a6e940e94cd83c33bdbed7788643591d7e7eebf4961->enter($__internal_43b4d9232178e10b5ff91a6e940e94cd83c33bdbed7788643591d7e7eebf4961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.headline.index"), "html", null, true);
        
        $__internal_43b4d9232178e10b5ff91a6e940e94cd83c33bdbed7788643591d7e7eebf4961->leave($__internal_43b4d9232178e10b5ff91a6e940e94cd83c33bdbed7788643591d7e7eebf4961_prof);

        
        $__internal_d838cfeb0ccc5882002db0d9ad73135768ca86a0d62e59786e063bb881ce6370->leave($__internal_d838cfeb0ccc5882002db0d9ad73135768ca86a0d62e59786e063bb881ce6370_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2a13ffd586dc3ca6af667f5fb70f1815078d1cb0fef2676c6d23e7ed92f2aaa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a13ffd586dc3ca6af667f5fb70f1815078d1cb0fef2676c6d23e7ed92f2aaa8->enter($__internal_2a13ffd586dc3ca6af667f5fb70f1815078d1cb0fef2676c6d23e7ed92f2aaa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0b12149a2ca1c8f91b9ae4d5c421a85af3408768a395fa9defbd076485a9d7c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b12149a2ca1c8f91b9ae4d5c421a85af3408768a395fa9defbd076485a9d7c4->enter($__internal_0b12149a2ca1c8f91b9ae4d5c421a85af3408768a395fa9defbd076485a9d7c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/console.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        
        $__internal_0b12149a2ca1c8f91b9ae4d5c421a85af3408768a395fa9defbd076485a9d7c4->leave($__internal_0b12149a2ca1c8f91b9ae4d5c421a85af3408768a395fa9defbd076485a9d7c4_prof);

        
        $__internal_2a13ffd586dc3ca6af667f5fb70f1815078d1cb0fef2676c6d23e7ed92f2aaa8->leave($__internal_2a13ffd586dc3ca6af667f5fb70f1815078d1cb0fef2676c6d23e7ed92f2aaa8_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_005f88516b61069f4ad8962f1dbb709815c3ed54287ae9e739f2844921eceffd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_005f88516b61069f4ad8962f1dbb709815c3ed54287ae9e739f2844921eceffd->enter($__internal_005f88516b61069f4ad8962f1dbb709815c3ed54287ae9e739f2844921eceffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6fc88eb9b5e72ed2eb6b202873ea4e4716e26a3059f7422197baafe1f4083947 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fc88eb9b5e72ed2eb6b202873ea4e4716e26a3059f7422197baafe1f4083947->enter($__internal_6fc88eb9b5e72ed2eb6b202873ea4e4716e26a3059f7422197baafe1f4083947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:terminal.html.twig", "CoreSphereConsoleBundle:Console:console.html.twig", 11)->display($context);
        // line 12
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:htmlTemplates.html.twig", "CoreSphereConsoleBundle:Console:console.html.twig", 12)->display($context);
        
        $__internal_6fc88eb9b5e72ed2eb6b202873ea4e4716e26a3059f7422197baafe1f4083947->leave($__internal_6fc88eb9b5e72ed2eb6b202873ea4e4716e26a3059f7422197baafe1f4083947_prof);

        
        $__internal_005f88516b61069f4ad8962f1dbb709815c3ed54287ae9e739f2844921eceffd->leave($__internal_005f88516b61069f4ad8962f1dbb709815c3ed54287ae9e739f2844921eceffd_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0ae8a21665d04be3f10ed2cb6781c3bc6c14bd3697aefde840069200e804a238 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ae8a21665d04be3f10ed2cb6781c3bc6c14bd3697aefde840069200e804a238->enter($__internal_0ae8a21665d04be3f10ed2cb6781c3bc6c14bd3697aefde840069200e804a238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4be9048f9a6f5484e68f052ae4cdee7219434ecfbc1100da93d55a8e3ef1a116 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4be9048f9a6f5484e68f052ae4cdee7219434ecfbc1100da93d55a8e3ef1a116->enter($__internal_4be9048f9a6f5484e68f052ae4cdee7219434ecfbc1100da93d55a8e3ef1a116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_4be9048f9a6f5484e68f052ae4cdee7219434ecfbc1100da93d55a8e3ef1a116->leave($__internal_4be9048f9a6f5484e68f052ae4cdee7219434ecfbc1100da93d55a8e3ef1a116_prof);

        
        $__internal_0ae8a21665d04be3f10ed2cb6781c3bc6c14bd3697aefde840069200e804a238->leave($__internal_0ae8a21665d04be3f10ed2cb6781c3bc6c14bd3697aefde840069200e804a238_prof);

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

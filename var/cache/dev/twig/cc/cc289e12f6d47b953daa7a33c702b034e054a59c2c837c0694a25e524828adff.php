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
        $__internal_7e90e1098f5ab74557f5ba76caf600ab8831d3ea6365576cd0c8bc8a64f305fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e90e1098f5ab74557f5ba76caf600ab8831d3ea6365576cd0c8bc8a64f305fe->enter($__internal_7e90e1098f5ab74557f5ba76caf600ab8831d3ea6365576cd0c8bc8a64f305fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:console.html.twig"));

        $__internal_64648fe9a4e230c4f6ac3fc388dd223eeaed088381f3bb63e22fbada4ed23f21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64648fe9a4e230c4f6ac3fc388dd223eeaed088381f3bb63e22fbada4ed23f21->enter($__internal_64648fe9a4e230c4f6ac3fc388dd223eeaed088381f3bb63e22fbada4ed23f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:console.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e90e1098f5ab74557f5ba76caf600ab8831d3ea6365576cd0c8bc8a64f305fe->leave($__internal_7e90e1098f5ab74557f5ba76caf600ab8831d3ea6365576cd0c8bc8a64f305fe_prof);

        
        $__internal_64648fe9a4e230c4f6ac3fc388dd223eeaed088381f3bb63e22fbada4ed23f21->leave($__internal_64648fe9a4e230c4f6ac3fc388dd223eeaed088381f3bb63e22fbada4ed23f21_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1c7ae7c763b26d3c3e989c63149ef35eaca21d8d2bf6adddbefc0fd5e7764944 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c7ae7c763b26d3c3e989c63149ef35eaca21d8d2bf6adddbefc0fd5e7764944->enter($__internal_1c7ae7c763b26d3c3e989c63149ef35eaca21d8d2bf6adddbefc0fd5e7764944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c5cd5fdd3113b55a8dd95683c93a29378bea428c0b94cc0bb61b41f860d51f5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5cd5fdd3113b55a8dd95683c93a29378bea428c0b94cc0bb61b41f860d51f5f->enter($__internal_c5cd5fdd3113b55a8dd95683c93a29378bea428c0b94cc0bb61b41f860d51f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.headline.index"), "html", null, true);
        
        $__internal_c5cd5fdd3113b55a8dd95683c93a29378bea428c0b94cc0bb61b41f860d51f5f->leave($__internal_c5cd5fdd3113b55a8dd95683c93a29378bea428c0b94cc0bb61b41f860d51f5f_prof);

        
        $__internal_1c7ae7c763b26d3c3e989c63149ef35eaca21d8d2bf6adddbefc0fd5e7764944->leave($__internal_1c7ae7c763b26d3c3e989c63149ef35eaca21d8d2bf6adddbefc0fd5e7764944_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bf34c579d36f87ccdd3309ccbb405903855869b3a1b7214ccb9962e137ce8c04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf34c579d36f87ccdd3309ccbb405903855869b3a1b7214ccb9962e137ce8c04->enter($__internal_bf34c579d36f87ccdd3309ccbb405903855869b3a1b7214ccb9962e137ce8c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_45b4a723eae2ef8ac69efe294df60791a6ecc0fec7290b7e2e460a6af36f4276 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45b4a723eae2ef8ac69efe294df60791a6ecc0fec7290b7e2e460a6af36f4276->enter($__internal_45b4a723eae2ef8ac69efe294df60791a6ecc0fec7290b7e2e460a6af36f4276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/console.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        
        $__internal_45b4a723eae2ef8ac69efe294df60791a6ecc0fec7290b7e2e460a6af36f4276->leave($__internal_45b4a723eae2ef8ac69efe294df60791a6ecc0fec7290b7e2e460a6af36f4276_prof);

        
        $__internal_bf34c579d36f87ccdd3309ccbb405903855869b3a1b7214ccb9962e137ce8c04->leave($__internal_bf34c579d36f87ccdd3309ccbb405903855869b3a1b7214ccb9962e137ce8c04_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_afe93fcef5e9a70892175e822587409c18125478f344cd43d7f491b2d38e5acc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afe93fcef5e9a70892175e822587409c18125478f344cd43d7f491b2d38e5acc->enter($__internal_afe93fcef5e9a70892175e822587409c18125478f344cd43d7f491b2d38e5acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2ed8a5689e53b9f660715c329ff989493389c4dc4e66eec437371aa70a4c1bd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ed8a5689e53b9f660715c329ff989493389c4dc4e66eec437371aa70a4c1bd7->enter($__internal_2ed8a5689e53b9f660715c329ff989493389c4dc4e66eec437371aa70a4c1bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:terminal.html.twig", "CoreSphereConsoleBundle:Console:console.html.twig", 11)->display($context);
        // line 12
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:htmlTemplates.html.twig", "CoreSphereConsoleBundle:Console:console.html.twig", 12)->display($context);
        
        $__internal_2ed8a5689e53b9f660715c329ff989493389c4dc4e66eec437371aa70a4c1bd7->leave($__internal_2ed8a5689e53b9f660715c329ff989493389c4dc4e66eec437371aa70a4c1bd7_prof);

        
        $__internal_afe93fcef5e9a70892175e822587409c18125478f344cd43d7f491b2d38e5acc->leave($__internal_afe93fcef5e9a70892175e822587409c18125478f344cd43d7f491b2d38e5acc_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2d595304f9b0b1490777304a47d0f51a017fffe67390958e2adb1c1a00a2766c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d595304f9b0b1490777304a47d0f51a017fffe67390958e2adb1c1a00a2766c->enter($__internal_2d595304f9b0b1490777304a47d0f51a017fffe67390958e2adb1c1a00a2766c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9e2c3960960680c515797a616aa2e01a871ee55f7db36066881d54795adb58fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e2c3960960680c515797a616aa2e01a871ee55f7db36066881d54795adb58fc->enter($__internal_9e2c3960960680c515797a616aa2e01a871ee55f7db36066881d54795adb58fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_9e2c3960960680c515797a616aa2e01a871ee55f7db36066881d54795adb58fc->leave($__internal_9e2c3960960680c515797a616aa2e01a871ee55f7db36066881d54795adb58fc_prof);

        
        $__internal_2d595304f9b0b1490777304a47d0f51a017fffe67390958e2adb1c1a00a2766c->leave($__internal_2d595304f9b0b1490777304a47d0f51a017fffe67390958e2adb1c1a00a2766c_prof);

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

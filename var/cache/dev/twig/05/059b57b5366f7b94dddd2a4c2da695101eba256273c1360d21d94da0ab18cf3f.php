<?php

/* FOSOAuthServerBundle::layout.html.twig */
class __TwigTemplate_63ee44d7e5268cfc99716e118b054b9e6ca2459a62d65824cf10b5c0a2a89820 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_oauth_server_content' => array($this, 'block_fos_oauth_server_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7e54828b9225b894a2f3f1a38239d15dd6ae31ab8a84184034a94dff0f7cb22b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e54828b9225b894a2f3f1a38239d15dd6ae31ab8a84184034a94dff0f7cb22b->enter($__internal_7e54828b9225b894a2f3f1a38239d15dd6ae31ab8a84184034a94dff0f7cb22b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSOAuthServerBundle::layout.html.twig"));

        $__internal_f509ed5c0aa485c4391a20c5a5281b189c628f453e41baea1054b9b4d81d76a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f509ed5c0aa485c4391a20c5a5281b189c628f453e41baea1054b9b4d81d76a8->enter($__internal_f509ed5c0aa485c4391a20c5a5281b189c628f453e41baea1054b9b4d81d76a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSOAuthServerBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        <div>
            ";
        // line 8
        $this->displayBlock('fos_oauth_server_content', $context, $blocks);
        // line 10
        echo "        </div>
    </body>
</html>
";
        
        $__internal_7e54828b9225b894a2f3f1a38239d15dd6ae31ab8a84184034a94dff0f7cb22b->leave($__internal_7e54828b9225b894a2f3f1a38239d15dd6ae31ab8a84184034a94dff0f7cb22b_prof);

        
        $__internal_f509ed5c0aa485c4391a20c5a5281b189c628f453e41baea1054b9b4d81d76a8->leave($__internal_f509ed5c0aa485c4391a20c5a5281b189c628f453e41baea1054b9b4d81d76a8_prof);

    }

    // line 8
    public function block_fos_oauth_server_content($context, array $blocks = array())
    {
        $__internal_b8bafc09c8a180938e9169c13acd417dcb118698b815c801dad001b51fb333a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8bafc09c8a180938e9169c13acd417dcb118698b815c801dad001b51fb333a6->enter($__internal_b8bafc09c8a180938e9169c13acd417dcb118698b815c801dad001b51fb333a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_oauth_server_content"));

        $__internal_7ef46b1361cdf63d9714b9fc6d3cb904ae6e8e7a7965cb939599dc2c7fa672a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ef46b1361cdf63d9714b9fc6d3cb904ae6e8e7a7965cb939599dc2c7fa672a7->enter($__internal_7ef46b1361cdf63d9714b9fc6d3cb904ae6e8e7a7965cb939599dc2c7fa672a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_oauth_server_content"));

        // line 9
        echo "            ";
        
        $__internal_7ef46b1361cdf63d9714b9fc6d3cb904ae6e8e7a7965cb939599dc2c7fa672a7->leave($__internal_7ef46b1361cdf63d9714b9fc6d3cb904ae6e8e7a7965cb939599dc2c7fa672a7_prof);

        
        $__internal_b8bafc09c8a180938e9169c13acd417dcb118698b815c801dad001b51fb333a6->leave($__internal_b8bafc09c8a180938e9169c13acd417dcb118698b815c801dad001b51fb333a6_prof);

    }

    public function getTemplateName()
    {
        return "FOSOAuthServerBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  59 => 9,  50 => 8,  37 => 10,  35 => 8,  26 => 1,);
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
    </head>
    <body>
        <div>
            {% block fos_oauth_server_content %}
            {% endblock fos_oauth_server_content %}
        </div>
    </body>
</html>
", "FOSOAuthServerBundle::layout.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/friendsofsymfony/oauth-server-bundle/Resources/views/layout.html.twig");
    }
}

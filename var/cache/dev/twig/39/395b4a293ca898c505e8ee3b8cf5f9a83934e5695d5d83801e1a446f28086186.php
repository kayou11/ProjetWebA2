<?php

/* SonataAdminBundle::empty_layout.html.twig */
class __TwigTemplate_2c148241c8b3a51b1494dd6cea89975afbee19f85e7224fdfe6c2b82af35508f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin_pool"]) || array_key_exists("admin_pool", $context) ? $context["admin_pool"] : (function () { throw new Twig_Error_Runtime('Variable "admin_pool" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "layout"), "method"), "SonataAdminBundle::empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff86723b9ce2634d2232c37c3a8c08a59e42fba9e92979179a1028f513144185 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff86723b9ce2634d2232c37c3a8c08a59e42fba9e92979179a1028f513144185->enter($__internal_ff86723b9ce2634d2232c37c3a8c08a59e42fba9e92979179a1028f513144185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $__internal_1594fc92570ccd492ea5e34a00167364c6d256ed31265b90b891250dd8c21ce3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1594fc92570ccd492ea5e34a00167364c6d256ed31265b90b891250dd8c21ce3->enter($__internal_1594fc92570ccd492ea5e34a00167364c6d256ed31265b90b891250dd8c21ce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff86723b9ce2634d2232c37c3a8c08a59e42fba9e92979179a1028f513144185->leave($__internal_ff86723b9ce2634d2232c37c3a8c08a59e42fba9e92979179a1028f513144185_prof);

        
        $__internal_1594fc92570ccd492ea5e34a00167364c6d256ed31265b90b891250dd8c21ce3->leave($__internal_1594fc92570ccd492ea5e34a00167364c6d256ed31265b90b891250dd8c21ce3_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_ef56b689f6be36ad60f924886ba6bb1807d40198cf02ab39304ece6fe0a101c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef56b689f6be36ad60f924886ba6bb1807d40198cf02ab39304ece6fe0a101c0->enter($__internal_ef56b689f6be36ad60f924886ba6bb1807d40198cf02ab39304ece6fe0a101c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        $__internal_84e2135abc2e7bfe8ac8eebd45886a0edd338a0f55685547246dd26488db7f61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84e2135abc2e7bfe8ac8eebd45886a0edd338a0f55685547246dd26488db7f61->enter($__internal_84e2135abc2e7bfe8ac8eebd45886a0edd338a0f55685547246dd26488db7f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_84e2135abc2e7bfe8ac8eebd45886a0edd338a0f55685547246dd26488db7f61->leave($__internal_84e2135abc2e7bfe8ac8eebd45886a0edd338a0f55685547246dd26488db7f61_prof);

        
        $__internal_ef56b689f6be36ad60f924886ba6bb1807d40198cf02ab39304ece6fe0a101c0->leave($__internal_ef56b689f6be36ad60f924886ba6bb1807d40198cf02ab39304ece6fe0a101c0_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_da5c18351b4a5fc19a66a333a72d08f024caa5c66e16a47579bb905e166e58d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da5c18351b4a5fc19a66a333a72d08f024caa5c66e16a47579bb905e166e58d9->enter($__internal_da5c18351b4a5fc19a66a333a72d08f024caa5c66e16a47579bb905e166e58d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        $__internal_c5df7320e9b6dbf6e4200beec733685256b8c49a1d6d415c1b33dd55488e93f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5df7320e9b6dbf6e4200beec733685256b8c49a1d6d415c1b33dd55488e93f6->enter($__internal_c5df7320e9b6dbf6e4200beec733685256b8c49a1d6d415c1b33dd55488e93f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_c5df7320e9b6dbf6e4200beec733685256b8c49a1d6d415c1b33dd55488e93f6->leave($__internal_c5df7320e9b6dbf6e4200beec733685256b8c49a1d6d415c1b33dd55488e93f6_prof);

        
        $__internal_da5c18351b4a5fc19a66a333a72d08f024caa5c66e16a47579bb905e166e58d9->leave($__internal_da5c18351b4a5fc19a66a333a72d08f024caa5c66e16a47579bb905e166e58d9_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_c392a81de797e4308106c3c6435bc7ea518c2db7aa941e0a192986c7f14d2775 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c392a81de797e4308106c3c6435bc7ea518c2db7aa941e0a192986c7f14d2775->enter($__internal_c392a81de797e4308106c3c6435bc7ea518c2db7aa941e0a192986c7f14d2775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        $__internal_a0ddafacb5dbb548878fb661f51ae68ecdff9bea75fc5acf2a79b0f32414c712 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0ddafacb5dbb548878fb661f51ae68ecdff9bea75fc5acf2a79b0f32414c712->enter($__internal_a0ddafacb5dbb548878fb661f51ae68ecdff9bea75fc5acf2a79b0f32414c712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_a0ddafacb5dbb548878fb661f51ae68ecdff9bea75fc5acf2a79b0f32414c712->leave($__internal_a0ddafacb5dbb548878fb661f51ae68ecdff9bea75fc5acf2a79b0f32414c712_prof);

        
        $__internal_c392a81de797e4308106c3c6435bc7ea518c2db7aa941e0a192986c7f14d2775->leave($__internal_c392a81de797e4308106c3c6435bc7ea518c2db7aa941e0a192986c7f14d2775_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_a391a988d7fb98456d3537034af8950d7111165237302c54e0c3abc7433e69d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a391a988d7fb98456d3537034af8950d7111165237302c54e0c3abc7433e69d0->enter($__internal_a391a988d7fb98456d3537034af8950d7111165237302c54e0c3abc7433e69d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        $__internal_742836dbc2c1031c6ca2a165912286abf4f5638b00e5e60b08b60048428a5c31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_742836dbc2c1031c6ca2a165912286abf4f5638b00e5e60b08b60048428a5c31->enter($__internal_742836dbc2c1031c6ca2a165912286abf4f5638b00e5e60b08b60048428a5c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_742836dbc2c1031c6ca2a165912286abf4f5638b00e5e60b08b60048428a5c31->leave($__internal_742836dbc2c1031c6ca2a165912286abf4f5638b00e5e60b08b60048428a5c31_prof);

        
        $__internal_a391a988d7fb98456d3537034af8950d7111165237302c54e0c3abc7433e69d0->leave($__internal_a391a988d7fb98456d3537034af8950d7111165237302c54e0c3abc7433e69d0_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ecb07d7a76c98ff10d7d326ad177520fb4ec545366566bd13397f4e1253ab9a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecb07d7a76c98ff10d7d326ad177520fb4ec545366566bd13397f4e1253ab9a6->enter($__internal_ecb07d7a76c98ff10d7d326ad177520fb4ec545366566bd13397f4e1253ab9a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c1e7471c25c58f3e41a389df94776e41cf3e4898708bbc022afd1853228e39c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1e7471c25c58f3e41a389df94776e41cf3e4898708bbc022afd1853228e39c5->enter($__internal_c1e7471c25c58f3e41a389df94776e41cf3e4898708bbc022afd1853228e39c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>
";
        
        $__internal_c1e7471c25c58f3e41a389df94776e41cf3e4898708bbc022afd1853228e39c5->leave($__internal_c1e7471c25c58f3e41a389df94776e41cf3e4898708bbc022afd1853228e39c5_prof);

        
        $__internal_ecb07d7a76c98ff10d7d326ad177520fb4ec545366566bd13397f4e1253ab9a6->leave($__internal_ecb07d7a76c98ff10d7d326ad177520fb4ec545366566bd13397f4e1253ab9a6_prof);

    }

    // line 30
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_75bcb41665ad6f435d570bf70bbd2fba8b66fdac24a1f4ee9ac040bf66507f1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75bcb41665ad6f435d570bf70bbd2fba8b66fdac24a1f4ee9ac040bf66507f1b->enter($__internal_75bcb41665ad6f435d570bf70bbd2fba8b66fdac24a1f4ee9ac040bf66507f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        $__internal_1a309d421196d52613121253546ed3e595ec8bf55e53878c3d7621930cc891eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a309d421196d52613121253546ed3e595ec8bf55e53878c3d7621930cc891eb->enter($__internal_1a309d421196d52613121253546ed3e595ec8bf55e53878c3d7621930cc891eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 31
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_1a309d421196d52613121253546ed3e595ec8bf55e53878c3d7621930cc891eb->leave($__internal_1a309d421196d52613121253546ed3e595ec8bf55e53878c3d7621930cc891eb_prof);

        
        $__internal_75bcb41665ad6f435d570bf70bbd2fba8b66fdac24a1f4ee9ac040bf66507f1b->leave($__internal_75bcb41665ad6f435d570bf70bbd2fba8b66fdac24a1f4ee9ac040bf66507f1b_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_6d9487b8f3044cb527774539ee00b10e112268b8ce9180a77fdb0f40e132172c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d9487b8f3044cb527774539ee00b10e112268b8ce9180a77fdb0f40e132172c->enter($__internal_6d9487b8f3044cb527774539ee00b10e112268b8ce9180a77fdb0f40e132172c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        $__internal_0e22fb7d100d3cf83e59ed8d97cbbf686504f61a7121724c21de577ffbd3f338 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e22fb7d100d3cf83e59ed8d97cbbf686504f61a7121724c21de577ffbd3f338->enter($__internal_0e22fb7d100d3cf83e59ed8d97cbbf686504f61a7121724c21de577ffbd3f338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 32
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_0e22fb7d100d3cf83e59ed8d97cbbf686504f61a7121724c21de577ffbd3f338->leave($__internal_0e22fb7d100d3cf83e59ed8d97cbbf686504f61a7121724c21de577ffbd3f338_prof);

        
        $__internal_6d9487b8f3044cb527774539ee00b10e112268b8ce9180a77fdb0f40e132172c->leave($__internal_6d9487b8f3044cb527774539ee00b10e112268b8ce9180a77fdb0f40e132172c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::empty_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 32,  151 => 31,  142 => 30,  122 => 20,  113 => 19,  96 => 17,  79 => 16,  62 => 15,  45 => 14,  24 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin_pool.getTemplate('layout') %}

{% block sonata_header %}{% endblock %}
{% block sonata_left_side %}{% endblock %}
{% block sonata_nav %}{% endblock %}
{% block sonata_breadcrumb %}{% endblock %}

{% block stylesheets %}
    {{ parent() }}

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>
{% endblock %}

{% block sonata_wrapper %}
    {% block sonata_page_content %}
        {{ parent() }}
    {% endblock %}
{% endblock %}
", "SonataAdminBundle::empty_layout.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/empty_layout.html.twig");
    }
}

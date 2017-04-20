<?php

/* SonataAdminBundle::empty_layout.html.twig */
class __TwigTemplate_a5d0086a1f90672476376c7b2a089f564807ed5b901c53f70599c6b77db7bd72 extends Twig_Template
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
        $__internal_c88d7ce904fe592a930343b3f7b8fdd48a121ed37b8b114e206d6db6dda55968 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c88d7ce904fe592a930343b3f7b8fdd48a121ed37b8b114e206d6db6dda55968->enter($__internal_c88d7ce904fe592a930343b3f7b8fdd48a121ed37b8b114e206d6db6dda55968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $__internal_d3777c7675d3894e07bf50a0ac184cfa97bb58a6a589e0f779c265acb7d283e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3777c7675d3894e07bf50a0ac184cfa97bb58a6a589e0f779c265acb7d283e8->enter($__internal_d3777c7675d3894e07bf50a0ac184cfa97bb58a6a589e0f779c265acb7d283e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c88d7ce904fe592a930343b3f7b8fdd48a121ed37b8b114e206d6db6dda55968->leave($__internal_c88d7ce904fe592a930343b3f7b8fdd48a121ed37b8b114e206d6db6dda55968_prof);

        
        $__internal_d3777c7675d3894e07bf50a0ac184cfa97bb58a6a589e0f779c265acb7d283e8->leave($__internal_d3777c7675d3894e07bf50a0ac184cfa97bb58a6a589e0f779c265acb7d283e8_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_c70f68270737c8eeaeefef9a441b21d1df146e82f05fa3e47bc63d2df93eb0e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c70f68270737c8eeaeefef9a441b21d1df146e82f05fa3e47bc63d2df93eb0e5->enter($__internal_c70f68270737c8eeaeefef9a441b21d1df146e82f05fa3e47bc63d2df93eb0e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        $__internal_cd4a82c9cd321a06ecac8d11c1322067385589113c211a22e7f6797632364167 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd4a82c9cd321a06ecac8d11c1322067385589113c211a22e7f6797632364167->enter($__internal_cd4a82c9cd321a06ecac8d11c1322067385589113c211a22e7f6797632364167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_cd4a82c9cd321a06ecac8d11c1322067385589113c211a22e7f6797632364167->leave($__internal_cd4a82c9cd321a06ecac8d11c1322067385589113c211a22e7f6797632364167_prof);

        
        $__internal_c70f68270737c8eeaeefef9a441b21d1df146e82f05fa3e47bc63d2df93eb0e5->leave($__internal_c70f68270737c8eeaeefef9a441b21d1df146e82f05fa3e47bc63d2df93eb0e5_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_0a9d71c040593e3a1c062408259256ff514d47f2c6315166dd39cf0b6b283d76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a9d71c040593e3a1c062408259256ff514d47f2c6315166dd39cf0b6b283d76->enter($__internal_0a9d71c040593e3a1c062408259256ff514d47f2c6315166dd39cf0b6b283d76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        $__internal_fe078c5d9aa6307121f75341d8917884f7246685cbc635786dc048f976202b38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe078c5d9aa6307121f75341d8917884f7246685cbc635786dc048f976202b38->enter($__internal_fe078c5d9aa6307121f75341d8917884f7246685cbc635786dc048f976202b38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_fe078c5d9aa6307121f75341d8917884f7246685cbc635786dc048f976202b38->leave($__internal_fe078c5d9aa6307121f75341d8917884f7246685cbc635786dc048f976202b38_prof);

        
        $__internal_0a9d71c040593e3a1c062408259256ff514d47f2c6315166dd39cf0b6b283d76->leave($__internal_0a9d71c040593e3a1c062408259256ff514d47f2c6315166dd39cf0b6b283d76_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_c83f9b4076b8413958c354b9a6576ab8a66c1b4be52d677801b620ced7812b1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c83f9b4076b8413958c354b9a6576ab8a66c1b4be52d677801b620ced7812b1c->enter($__internal_c83f9b4076b8413958c354b9a6576ab8a66c1b4be52d677801b620ced7812b1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        $__internal_e091f76f6655b671b3e5bc9f664a42ac241f252c343b6a4cd0258b82b18f73e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e091f76f6655b671b3e5bc9f664a42ac241f252c343b6a4cd0258b82b18f73e4->enter($__internal_e091f76f6655b671b3e5bc9f664a42ac241f252c343b6a4cd0258b82b18f73e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_e091f76f6655b671b3e5bc9f664a42ac241f252c343b6a4cd0258b82b18f73e4->leave($__internal_e091f76f6655b671b3e5bc9f664a42ac241f252c343b6a4cd0258b82b18f73e4_prof);

        
        $__internal_c83f9b4076b8413958c354b9a6576ab8a66c1b4be52d677801b620ced7812b1c->leave($__internal_c83f9b4076b8413958c354b9a6576ab8a66c1b4be52d677801b620ced7812b1c_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_3b87c2686e9c4c3a8770207b68a9287880cdaa7623df17373b8e1974dcb2a991 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b87c2686e9c4c3a8770207b68a9287880cdaa7623df17373b8e1974dcb2a991->enter($__internal_3b87c2686e9c4c3a8770207b68a9287880cdaa7623df17373b8e1974dcb2a991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        $__internal_30d615f2020499fd9e65f592ebb2e141d622672b06d0e59ac1d1edee74cb0113 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30d615f2020499fd9e65f592ebb2e141d622672b06d0e59ac1d1edee74cb0113->enter($__internal_30d615f2020499fd9e65f592ebb2e141d622672b06d0e59ac1d1edee74cb0113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_30d615f2020499fd9e65f592ebb2e141d622672b06d0e59ac1d1edee74cb0113->leave($__internal_30d615f2020499fd9e65f592ebb2e141d622672b06d0e59ac1d1edee74cb0113_prof);

        
        $__internal_3b87c2686e9c4c3a8770207b68a9287880cdaa7623df17373b8e1974dcb2a991->leave($__internal_3b87c2686e9c4c3a8770207b68a9287880cdaa7623df17373b8e1974dcb2a991_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8e606f398e349e8f6b20658bb43563156ef740aab684c3fe4f6aef4386e857e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e606f398e349e8f6b20658bb43563156ef740aab684c3fe4f6aef4386e857e5->enter($__internal_8e606f398e349e8f6b20658bb43563156ef740aab684c3fe4f6aef4386e857e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e4806be88c3a5ac6f46bacdbbeec1776d9cc0c2e11c642b5917e4b04b5ba5fed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4806be88c3a5ac6f46bacdbbeec1776d9cc0c2e11c642b5917e4b04b5ba5fed->enter($__internal_e4806be88c3a5ac6f46bacdbbeec1776d9cc0c2e11c642b5917e4b04b5ba5fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_e4806be88c3a5ac6f46bacdbbeec1776d9cc0c2e11c642b5917e4b04b5ba5fed->leave($__internal_e4806be88c3a5ac6f46bacdbbeec1776d9cc0c2e11c642b5917e4b04b5ba5fed_prof);

        
        $__internal_8e606f398e349e8f6b20658bb43563156ef740aab684c3fe4f6aef4386e857e5->leave($__internal_8e606f398e349e8f6b20658bb43563156ef740aab684c3fe4f6aef4386e857e5_prof);

    }

    // line 30
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_39e37266b31b87046a93481c7be998f78283ebbefbf8844aeca9e0b1bec50ffb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39e37266b31b87046a93481c7be998f78283ebbefbf8844aeca9e0b1bec50ffb->enter($__internal_39e37266b31b87046a93481c7be998f78283ebbefbf8844aeca9e0b1bec50ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        $__internal_b08a6f9329010b484562eec49e25cc78ac234cba808aa4800455e627d8741bad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b08a6f9329010b484562eec49e25cc78ac234cba808aa4800455e627d8741bad->enter($__internal_b08a6f9329010b484562eec49e25cc78ac234cba808aa4800455e627d8741bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 31
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_b08a6f9329010b484562eec49e25cc78ac234cba808aa4800455e627d8741bad->leave($__internal_b08a6f9329010b484562eec49e25cc78ac234cba808aa4800455e627d8741bad_prof);

        
        $__internal_39e37266b31b87046a93481c7be998f78283ebbefbf8844aeca9e0b1bec50ffb->leave($__internal_39e37266b31b87046a93481c7be998f78283ebbefbf8844aeca9e0b1bec50ffb_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_036c1c4e3f36583169877339c49c194082c162b2a6d546806dde6a625b7f993b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_036c1c4e3f36583169877339c49c194082c162b2a6d546806dde6a625b7f993b->enter($__internal_036c1c4e3f36583169877339c49c194082c162b2a6d546806dde6a625b7f993b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        $__internal_5dabddcd9af25456961e25f5af1bdee1b8f3064e6c0ce6a0f6a3ae1ca47758cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dabddcd9af25456961e25f5af1bdee1b8f3064e6c0ce6a0f6a3ae1ca47758cc->enter($__internal_5dabddcd9af25456961e25f5af1bdee1b8f3064e6c0ce6a0f6a3ae1ca47758cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 32
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_5dabddcd9af25456961e25f5af1bdee1b8f3064e6c0ce6a0f6a3ae1ca47758cc->leave($__internal_5dabddcd9af25456961e25f5af1bdee1b8f3064e6c0ce6a0f6a3ae1ca47758cc_prof);

        
        $__internal_036c1c4e3f36583169877339c49c194082c162b2a6d546806dde6a625b7f993b->leave($__internal_036c1c4e3f36583169877339c49c194082c162b2a6d546806dde6a625b7f993b_prof);

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

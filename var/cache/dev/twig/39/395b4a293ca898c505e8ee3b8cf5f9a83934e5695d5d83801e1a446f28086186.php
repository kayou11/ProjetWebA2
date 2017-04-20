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
        $__internal_dae1cb3c8bdee3269b8a46bd7d1b0b62637135c68b6ff3e710fba59dd4fe5b46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dae1cb3c8bdee3269b8a46bd7d1b0b62637135c68b6ff3e710fba59dd4fe5b46->enter($__internal_dae1cb3c8bdee3269b8a46bd7d1b0b62637135c68b6ff3e710fba59dd4fe5b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $__internal_9072675f11ecb113148cb4e083178e9fd777cd5498e98b571bf63dc5c4537eb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9072675f11ecb113148cb4e083178e9fd777cd5498e98b571bf63dc5c4537eb6->enter($__internal_9072675f11ecb113148cb4e083178e9fd777cd5498e98b571bf63dc5c4537eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dae1cb3c8bdee3269b8a46bd7d1b0b62637135c68b6ff3e710fba59dd4fe5b46->leave($__internal_dae1cb3c8bdee3269b8a46bd7d1b0b62637135c68b6ff3e710fba59dd4fe5b46_prof);

        
        $__internal_9072675f11ecb113148cb4e083178e9fd777cd5498e98b571bf63dc5c4537eb6->leave($__internal_9072675f11ecb113148cb4e083178e9fd777cd5498e98b571bf63dc5c4537eb6_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_8eb0c96022bbc91b674e14fa2a96e63b370ece793380f16bb6f09ef2fc32c936 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8eb0c96022bbc91b674e14fa2a96e63b370ece793380f16bb6f09ef2fc32c936->enter($__internal_8eb0c96022bbc91b674e14fa2a96e63b370ece793380f16bb6f09ef2fc32c936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        $__internal_36e7447454c5d029aa06e0d9bda4be4f4120438a388c2eafba4355e950213753 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36e7447454c5d029aa06e0d9bda4be4f4120438a388c2eafba4355e950213753->enter($__internal_36e7447454c5d029aa06e0d9bda4be4f4120438a388c2eafba4355e950213753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_36e7447454c5d029aa06e0d9bda4be4f4120438a388c2eafba4355e950213753->leave($__internal_36e7447454c5d029aa06e0d9bda4be4f4120438a388c2eafba4355e950213753_prof);

        
        $__internal_8eb0c96022bbc91b674e14fa2a96e63b370ece793380f16bb6f09ef2fc32c936->leave($__internal_8eb0c96022bbc91b674e14fa2a96e63b370ece793380f16bb6f09ef2fc32c936_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_060c445706318c9875356ef0f17a1b42519cda6785928053e1a40bf39f6ee4f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_060c445706318c9875356ef0f17a1b42519cda6785928053e1a40bf39f6ee4f0->enter($__internal_060c445706318c9875356ef0f17a1b42519cda6785928053e1a40bf39f6ee4f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        $__internal_4b4222944330e8fdd792f5e8fd2bbac29ebe17dcd67d8893c2421c52c73d951c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b4222944330e8fdd792f5e8fd2bbac29ebe17dcd67d8893c2421c52c73d951c->enter($__internal_4b4222944330e8fdd792f5e8fd2bbac29ebe17dcd67d8893c2421c52c73d951c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_4b4222944330e8fdd792f5e8fd2bbac29ebe17dcd67d8893c2421c52c73d951c->leave($__internal_4b4222944330e8fdd792f5e8fd2bbac29ebe17dcd67d8893c2421c52c73d951c_prof);

        
        $__internal_060c445706318c9875356ef0f17a1b42519cda6785928053e1a40bf39f6ee4f0->leave($__internal_060c445706318c9875356ef0f17a1b42519cda6785928053e1a40bf39f6ee4f0_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_c56b7d317543beba3aa7dfbfa23cd285586531db09bd22202ff43284c1202d51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c56b7d317543beba3aa7dfbfa23cd285586531db09bd22202ff43284c1202d51->enter($__internal_c56b7d317543beba3aa7dfbfa23cd285586531db09bd22202ff43284c1202d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        $__internal_12a2ac47773d1c170c7ec232f5b4ff9b5a2b6a4e15d560ab1ee62bea5a235444 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12a2ac47773d1c170c7ec232f5b4ff9b5a2b6a4e15d560ab1ee62bea5a235444->enter($__internal_12a2ac47773d1c170c7ec232f5b4ff9b5a2b6a4e15d560ab1ee62bea5a235444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_12a2ac47773d1c170c7ec232f5b4ff9b5a2b6a4e15d560ab1ee62bea5a235444->leave($__internal_12a2ac47773d1c170c7ec232f5b4ff9b5a2b6a4e15d560ab1ee62bea5a235444_prof);

        
        $__internal_c56b7d317543beba3aa7dfbfa23cd285586531db09bd22202ff43284c1202d51->leave($__internal_c56b7d317543beba3aa7dfbfa23cd285586531db09bd22202ff43284c1202d51_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_28165d007af2bab2b9ff9bbdf282a93cc56a58cfb8044da807b2a994d50f1d5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28165d007af2bab2b9ff9bbdf282a93cc56a58cfb8044da807b2a994d50f1d5e->enter($__internal_28165d007af2bab2b9ff9bbdf282a93cc56a58cfb8044da807b2a994d50f1d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        $__internal_243938adf5bf0eeaecf7259b08831b7e8442fb7382167837a442a23741089f42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_243938adf5bf0eeaecf7259b08831b7e8442fb7382167837a442a23741089f42->enter($__internal_243938adf5bf0eeaecf7259b08831b7e8442fb7382167837a442a23741089f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_243938adf5bf0eeaecf7259b08831b7e8442fb7382167837a442a23741089f42->leave($__internal_243938adf5bf0eeaecf7259b08831b7e8442fb7382167837a442a23741089f42_prof);

        
        $__internal_28165d007af2bab2b9ff9bbdf282a93cc56a58cfb8044da807b2a994d50f1d5e->leave($__internal_28165d007af2bab2b9ff9bbdf282a93cc56a58cfb8044da807b2a994d50f1d5e_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f5715dbbdaf06bb8f1bba00185458e38b2cb769175255888475086f240e040e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5715dbbdaf06bb8f1bba00185458e38b2cb769175255888475086f240e040e2->enter($__internal_f5715dbbdaf06bb8f1bba00185458e38b2cb769175255888475086f240e040e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3d6064e85b1ce4ebd66bbcd981f0f8a7533e09ad7bc5efd8f6040e8c2617dda7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d6064e85b1ce4ebd66bbcd981f0f8a7533e09ad7bc5efd8f6040e8c2617dda7->enter($__internal_3d6064e85b1ce4ebd66bbcd981f0f8a7533e09ad7bc5efd8f6040e8c2617dda7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_3d6064e85b1ce4ebd66bbcd981f0f8a7533e09ad7bc5efd8f6040e8c2617dda7->leave($__internal_3d6064e85b1ce4ebd66bbcd981f0f8a7533e09ad7bc5efd8f6040e8c2617dda7_prof);

        
        $__internal_f5715dbbdaf06bb8f1bba00185458e38b2cb769175255888475086f240e040e2->leave($__internal_f5715dbbdaf06bb8f1bba00185458e38b2cb769175255888475086f240e040e2_prof);

    }

    // line 30
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_97eef2594a38fe969e392d267cdf8e3b5ae538ea39aa0216c90cab95bbfc043c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97eef2594a38fe969e392d267cdf8e3b5ae538ea39aa0216c90cab95bbfc043c->enter($__internal_97eef2594a38fe969e392d267cdf8e3b5ae538ea39aa0216c90cab95bbfc043c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        $__internal_8a3653d59fab9eeb13df4b6321a3a428a27e925c4d395054e4741a816ced5089 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a3653d59fab9eeb13df4b6321a3a428a27e925c4d395054e4741a816ced5089->enter($__internal_8a3653d59fab9eeb13df4b6321a3a428a27e925c4d395054e4741a816ced5089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 31
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_8a3653d59fab9eeb13df4b6321a3a428a27e925c4d395054e4741a816ced5089->leave($__internal_8a3653d59fab9eeb13df4b6321a3a428a27e925c4d395054e4741a816ced5089_prof);

        
        $__internal_97eef2594a38fe969e392d267cdf8e3b5ae538ea39aa0216c90cab95bbfc043c->leave($__internal_97eef2594a38fe969e392d267cdf8e3b5ae538ea39aa0216c90cab95bbfc043c_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_29848fa9dab67efdd9c761718fd5367f92344ee469ab3b3a39d4f9091356f045 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29848fa9dab67efdd9c761718fd5367f92344ee469ab3b3a39d4f9091356f045->enter($__internal_29848fa9dab67efdd9c761718fd5367f92344ee469ab3b3a39d4f9091356f045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        $__internal_5160f05c0d4fb253a788f99db72bcab886c0e02cc96070f159c4d6007f849d78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5160f05c0d4fb253a788f99db72bcab886c0e02cc96070f159c4d6007f849d78->enter($__internal_5160f05c0d4fb253a788f99db72bcab886c0e02cc96070f159c4d6007f849d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 32
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_5160f05c0d4fb253a788f99db72bcab886c0e02cc96070f159c4d6007f849d78->leave($__internal_5160f05c0d4fb253a788f99db72bcab886c0e02cc96070f159c4d6007f849d78_prof);

        
        $__internal_29848fa9dab67efdd9c761718fd5367f92344ee469ab3b3a39d4f9091356f045->leave($__internal_29848fa9dab67efdd9c761718fd5367f92344ee469ab3b3a39d4f9091356f045_prof);

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

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
        $__internal_d8e89231b9d710f5eb30bebda986d91c9c6a9dd306d7056bd4c543dd9156c6d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8e89231b9d710f5eb30bebda986d91c9c6a9dd306d7056bd4c543dd9156c6d2->enter($__internal_d8e89231b9d710f5eb30bebda986d91c9c6a9dd306d7056bd4c543dd9156c6d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $__internal_0ad7240bd5ca874e941087cbf87be442f2025cfb9d0fdad3ddc374d229fba189 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ad7240bd5ca874e941087cbf87be442f2025cfb9d0fdad3ddc374d229fba189->enter($__internal_0ad7240bd5ca874e941087cbf87be442f2025cfb9d0fdad3ddc374d229fba189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8e89231b9d710f5eb30bebda986d91c9c6a9dd306d7056bd4c543dd9156c6d2->leave($__internal_d8e89231b9d710f5eb30bebda986d91c9c6a9dd306d7056bd4c543dd9156c6d2_prof);

        
        $__internal_0ad7240bd5ca874e941087cbf87be442f2025cfb9d0fdad3ddc374d229fba189->leave($__internal_0ad7240bd5ca874e941087cbf87be442f2025cfb9d0fdad3ddc374d229fba189_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_da22ee7041df51a21fef070801b915fa352f976f37d5f30fa977bb883fe160d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da22ee7041df51a21fef070801b915fa352f976f37d5f30fa977bb883fe160d2->enter($__internal_da22ee7041df51a21fef070801b915fa352f976f37d5f30fa977bb883fe160d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        $__internal_16c72135c9ddc2bcfdd9fa19cb54c96cc7f81430110d3ce0904674acd1ba51a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16c72135c9ddc2bcfdd9fa19cb54c96cc7f81430110d3ce0904674acd1ba51a3->enter($__internal_16c72135c9ddc2bcfdd9fa19cb54c96cc7f81430110d3ce0904674acd1ba51a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_16c72135c9ddc2bcfdd9fa19cb54c96cc7f81430110d3ce0904674acd1ba51a3->leave($__internal_16c72135c9ddc2bcfdd9fa19cb54c96cc7f81430110d3ce0904674acd1ba51a3_prof);

        
        $__internal_da22ee7041df51a21fef070801b915fa352f976f37d5f30fa977bb883fe160d2->leave($__internal_da22ee7041df51a21fef070801b915fa352f976f37d5f30fa977bb883fe160d2_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_7cad3d7c2e39a72004b6b2dd50720e68adf5f81134b47610a56ab0aabed64cce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cad3d7c2e39a72004b6b2dd50720e68adf5f81134b47610a56ab0aabed64cce->enter($__internal_7cad3d7c2e39a72004b6b2dd50720e68adf5f81134b47610a56ab0aabed64cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        $__internal_7a66ec0c6a58fff9731b53a05aae6f06cd9c243b73bde36fd6533e7c6dcba5b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a66ec0c6a58fff9731b53a05aae6f06cd9c243b73bde36fd6533e7c6dcba5b1->enter($__internal_7a66ec0c6a58fff9731b53a05aae6f06cd9c243b73bde36fd6533e7c6dcba5b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_7a66ec0c6a58fff9731b53a05aae6f06cd9c243b73bde36fd6533e7c6dcba5b1->leave($__internal_7a66ec0c6a58fff9731b53a05aae6f06cd9c243b73bde36fd6533e7c6dcba5b1_prof);

        
        $__internal_7cad3d7c2e39a72004b6b2dd50720e68adf5f81134b47610a56ab0aabed64cce->leave($__internal_7cad3d7c2e39a72004b6b2dd50720e68adf5f81134b47610a56ab0aabed64cce_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_5e04e60b48ebcf3c7f7951070061423bb461199ebf59b527836e76cff68ecafb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e04e60b48ebcf3c7f7951070061423bb461199ebf59b527836e76cff68ecafb->enter($__internal_5e04e60b48ebcf3c7f7951070061423bb461199ebf59b527836e76cff68ecafb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        $__internal_7c595837a7655600e6e4367c74d03526414ffd941c61f64b858981decfd30597 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c595837a7655600e6e4367c74d03526414ffd941c61f64b858981decfd30597->enter($__internal_7c595837a7655600e6e4367c74d03526414ffd941c61f64b858981decfd30597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_7c595837a7655600e6e4367c74d03526414ffd941c61f64b858981decfd30597->leave($__internal_7c595837a7655600e6e4367c74d03526414ffd941c61f64b858981decfd30597_prof);

        
        $__internal_5e04e60b48ebcf3c7f7951070061423bb461199ebf59b527836e76cff68ecafb->leave($__internal_5e04e60b48ebcf3c7f7951070061423bb461199ebf59b527836e76cff68ecafb_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_91bd356522b231f2651b060b62ccd189ad8fc47a6d8535dbf4a2d0ee36c043ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91bd356522b231f2651b060b62ccd189ad8fc47a6d8535dbf4a2d0ee36c043ff->enter($__internal_91bd356522b231f2651b060b62ccd189ad8fc47a6d8535dbf4a2d0ee36c043ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        $__internal_0af97b5ae5c566babaa923e799d429426e744218d6f6dd3c89f4713dcf049684 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0af97b5ae5c566babaa923e799d429426e744218d6f6dd3c89f4713dcf049684->enter($__internal_0af97b5ae5c566babaa923e799d429426e744218d6f6dd3c89f4713dcf049684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_0af97b5ae5c566babaa923e799d429426e744218d6f6dd3c89f4713dcf049684->leave($__internal_0af97b5ae5c566babaa923e799d429426e744218d6f6dd3c89f4713dcf049684_prof);

        
        $__internal_91bd356522b231f2651b060b62ccd189ad8fc47a6d8535dbf4a2d0ee36c043ff->leave($__internal_91bd356522b231f2651b060b62ccd189ad8fc47a6d8535dbf4a2d0ee36c043ff_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_685d20b6710eaddb954adfeacc063dcf9f8a714430fb6776ed309dc2cca3074c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_685d20b6710eaddb954adfeacc063dcf9f8a714430fb6776ed309dc2cca3074c->enter($__internal_685d20b6710eaddb954adfeacc063dcf9f8a714430fb6776ed309dc2cca3074c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_acc0405e48e9ee64e8cc0d02c3f82b80edb9342ec4aaeb803e6986511af64490 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acc0405e48e9ee64e8cc0d02c3f82b80edb9342ec4aaeb803e6986511af64490->enter($__internal_acc0405e48e9ee64e8cc0d02c3f82b80edb9342ec4aaeb803e6986511af64490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_acc0405e48e9ee64e8cc0d02c3f82b80edb9342ec4aaeb803e6986511af64490->leave($__internal_acc0405e48e9ee64e8cc0d02c3f82b80edb9342ec4aaeb803e6986511af64490_prof);

        
        $__internal_685d20b6710eaddb954adfeacc063dcf9f8a714430fb6776ed309dc2cca3074c->leave($__internal_685d20b6710eaddb954adfeacc063dcf9f8a714430fb6776ed309dc2cca3074c_prof);

    }

    // line 30
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_629bf09475c6c799e97ca818dd151e69164dfab022aff1d11242bcc72975ef3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_629bf09475c6c799e97ca818dd151e69164dfab022aff1d11242bcc72975ef3d->enter($__internal_629bf09475c6c799e97ca818dd151e69164dfab022aff1d11242bcc72975ef3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        $__internal_7bf947877dead34880683adedca7009e7725df47db2d8a3d05bc1a3db0267813 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bf947877dead34880683adedca7009e7725df47db2d8a3d05bc1a3db0267813->enter($__internal_7bf947877dead34880683adedca7009e7725df47db2d8a3d05bc1a3db0267813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 31
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_7bf947877dead34880683adedca7009e7725df47db2d8a3d05bc1a3db0267813->leave($__internal_7bf947877dead34880683adedca7009e7725df47db2d8a3d05bc1a3db0267813_prof);

        
        $__internal_629bf09475c6c799e97ca818dd151e69164dfab022aff1d11242bcc72975ef3d->leave($__internal_629bf09475c6c799e97ca818dd151e69164dfab022aff1d11242bcc72975ef3d_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_dcf7266dcc0a052c3b69287cbb445936db97fa8bb2386c7f20253e9f318d0e72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcf7266dcc0a052c3b69287cbb445936db97fa8bb2386c7f20253e9f318d0e72->enter($__internal_dcf7266dcc0a052c3b69287cbb445936db97fa8bb2386c7f20253e9f318d0e72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        $__internal_eae5f61e3f799325fc06fd4f19fdb1745bb849ec22f22f171fcff552f8e64bb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eae5f61e3f799325fc06fd4f19fdb1745bb849ec22f22f171fcff552f8e64bb0->enter($__internal_eae5f61e3f799325fc06fd4f19fdb1745bb849ec22f22f171fcff552f8e64bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 32
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_eae5f61e3f799325fc06fd4f19fdb1745bb849ec22f22f171fcff552f8e64bb0->leave($__internal_eae5f61e3f799325fc06fd4f19fdb1745bb849ec22f22f171fcff552f8e64bb0_prof);

        
        $__internal_dcf7266dcc0a052c3b69287cbb445936db97fa8bb2386c7f20253e9f318d0e72->leave($__internal_dcf7266dcc0a052c3b69287cbb445936db97fa8bb2386c7f20253e9f318d0e72_prof);

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

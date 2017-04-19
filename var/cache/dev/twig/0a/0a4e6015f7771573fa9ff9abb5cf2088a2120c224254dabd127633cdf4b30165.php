<?php

/* SonataAdminBundle:CRUD:edit_string.html.twig */
class __TwigTemplate_9aa28a229cd910c001f1ff507afa47c7b18fea434dbeb0fde55a9ed6ac8add09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 12, $this->getSourceContext()); })()), "SonataAdminBundle:CRUD:edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aecb3bdd96e8ce074a7e0796ebc2b8aacf3d9ed638ad9d9a64d18b9fd644274d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aecb3bdd96e8ce074a7e0796ebc2b8aacf3d9ed638ad9d9a64d18b9fd644274d->enter($__internal_aecb3bdd96e8ce074a7e0796ebc2b8aacf3d9ed638ad9d9a64d18b9fd644274d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $__internal_fb16027fa9d823365f12fa5bda3c38882a89d434029c1551f9253d33b6fb61ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb16027fa9d823365f12fa5bda3c38882a89d434029c1551f9253d33b6fb61ca->enter($__internal_fb16027fa9d823365f12fa5bda3c38882a89d434029c1551f9253d33b6fb61ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aecb3bdd96e8ce074a7e0796ebc2b8aacf3d9ed638ad9d9a64d18b9fd644274d->leave($__internal_aecb3bdd96e8ce074a7e0796ebc2b8aacf3d9ed638ad9d9a64d18b9fd644274d_prof);

        
        $__internal_fb16027fa9d823365f12fa5bda3c38882a89d434029c1551f9253d33b6fb61ca->leave($__internal_fb16027fa9d823365f12fa5bda3c38882a89d434029c1551f9253d33b6fb61ca_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_ae4468b09d8e1f8cb05bfbcb6f45147b91a4dc5188e55bd9a4a128d591743e25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae4468b09d8e1f8cb05bfbcb6f45147b91a4dc5188e55bd9a4a128d591743e25->enter($__internal_ae4468b09d8e1f8cb05bfbcb6f45147b91a4dc5188e55bd9a4a128d591743e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_6be98f554f0fcda62a2b3ada758a672f02e0ed21870e345edb7d74cdf13753c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6be98f554f0fcda62a2b3ada758a672f02e0ed21870e345edb7d74cdf13753c2->enter($__internal_6be98f554f0fcda62a2b3ada758a672f02e0ed21870e345edb7d74cdf13753c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 14, $this->getSourceContext()); })()), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_6be98f554f0fcda62a2b3ada758a672f02e0ed21870e345edb7d74cdf13753c2->leave($__internal_6be98f554f0fcda62a2b3ada758a672f02e0ed21870e345edb7d74cdf13753c2_prof);

        
        $__internal_ae4468b09d8e1f8cb05bfbcb6f45147b91a4dc5188e55bd9a4a128d591743e25->leave($__internal_ae4468b09d8e1f8cb05bfbcb6f45147b91a4dc5188e55bd9a4a128d591743e25_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 14,  18 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends base_template %}

{% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}
", "SonataAdminBundle:CRUD:edit_string.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_string.html.twig");
    }
}

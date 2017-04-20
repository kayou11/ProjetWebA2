<?php

/* SonataAdminBundle:CRUD:list_email.html.twig */
class __TwigTemplate_1d448cc819149c94f689617cba91c5910007c72154c2d98ebfa170b9d07d4019 extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_email.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fbc5d396f23f7547be83da59ee2e9051f3b94a894b93ef574b124482baaadc07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbc5d396f23f7547be83da59ee2e9051f3b94a894b93ef574b124482baaadc07->enter($__internal_fbc5d396f23f7547be83da59ee2e9051f3b94a894b93ef574b124482baaadc07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_email.html.twig"));

        $__internal_86cd4cec001a9a09d22443bbb739c5d564c3b81bf1d42c8a8a1a84baee7c816a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86cd4cec001a9a09d22443bbb739c5d564c3b81bf1d42c8a8a1a84baee7c816a->enter($__internal_86cd4cec001a9a09d22443bbb739c5d564c3b81bf1d42c8a8a1a84baee7c816a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_email.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbc5d396f23f7547be83da59ee2e9051f3b94a894b93ef574b124482baaadc07->leave($__internal_fbc5d396f23f7547be83da59ee2e9051f3b94a894b93ef574b124482baaadc07_prof);

        
        $__internal_86cd4cec001a9a09d22443bbb739c5d564c3b81bf1d42c8a8a1a84baee7c816a->leave($__internal_86cd4cec001a9a09d22443bbb739c5d564c3b81bf1d42c8a8a1a84baee7c816a_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_135e470e9e962edd9def2d84c1b41d2fc05aea62be4336bd3d231cc21c6bc12b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_135e470e9e962edd9def2d84c1b41d2fc05aea62be4336bd3d231cc21c6bc12b->enter($__internal_135e470e9e962edd9def2d84c1b41d2fc05aea62be4336bd3d231cc21c6bc12b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_2f646766ebef5d194bd28ba81e75dcaa0d0a116d705226bc294415bb217a8268 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f646766ebef5d194bd28ba81e75dcaa0d0a116d705226bc294415bb217a8268->enter($__internal_2f646766ebef5d194bd28ba81e75dcaa0d0a116d705226bc294415bb217a8268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:list_email.html.twig", 15)->display($context);
        
        $__internal_2f646766ebef5d194bd28ba81e75dcaa0d0a116d705226bc294415bb217a8268->leave($__internal_2f646766ebef5d194bd28ba81e75dcaa0d0a116d705226bc294415bb217a8268_prof);

        
        $__internal_135e470e9e962edd9def2d84c1b41d2fc05aea62be4336bd3d231cc21c6bc12b->leave($__internal_135e470e9e962edd9def2d84c1b41d2fc05aea62be4336bd3d231cc21c6bc12b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 15,  39 => 14,  18 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}
{% endblock %}
", "SonataAdminBundle:CRUD:list_email.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_email.html.twig");
    }
}

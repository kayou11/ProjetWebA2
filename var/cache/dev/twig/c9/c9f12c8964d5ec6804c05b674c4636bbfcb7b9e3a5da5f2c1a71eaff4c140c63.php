<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_953ca3b9cfd366e59311eb78c74d843f0a1c62d126b553adcdaecb7a19820bf7 extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b08a9d92b73bd426883a6803a1a330b041d019e4fefda40138f4dbaf44e12974 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b08a9d92b73bd426883a6803a1a330b041d019e4fefda40138f4dbaf44e12974->enter($__internal_b08a9d92b73bd426883a6803a1a330b041d019e4fefda40138f4dbaf44e12974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $__internal_103598a651510dd5ca603d2490638395c22a5adde39bbab867754409bfc0ab7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_103598a651510dd5ca603d2490638395c22a5adde39bbab867754409bfc0ab7f->enter($__internal_103598a651510dd5ca603d2490638395c22a5adde39bbab867754409bfc0ab7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b08a9d92b73bd426883a6803a1a330b041d019e4fefda40138f4dbaf44e12974->leave($__internal_b08a9d92b73bd426883a6803a1a330b041d019e4fefda40138f4dbaf44e12974_prof);

        
        $__internal_103598a651510dd5ca603d2490638395c22a5adde39bbab867754409bfc0ab7f->leave($__internal_103598a651510dd5ca603d2490638395c22a5adde39bbab867754409bfc0ab7f_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c9d4d3d1f6cdff5e859145efd6d6163cc7a53e40fb1c6a3ec16d9cdb290410f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9d4d3d1f6cdff5e859145efd6d6163cc7a53e40fb1c6a3ec16d9cdb290410f1->enter($__internal_c9d4d3d1f6cdff5e859145efd6d6163cc7a53e40fb1c6a3ec16d9cdb290410f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_eefb4f1029d116ac4d8d86550d0239c7ca58c82177c7cc54e678e876094894fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eefb4f1029d116ac4d8d86550d0239c7ca58c82177c7cc54e678e876094894fa->enter($__internal_eefb4f1029d116ac4d8d86550d0239c7ca58c82177c7cc54e678e876094894fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 15, $this->getSourceContext()); })()), "id", array(0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 15, $this->getSourceContext()); })())), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_eefb4f1029d116ac4d8d86550d0239c7ca58c82177c7cc54e678e876094894fa->leave($__internal_eefb4f1029d116ac4d8d86550d0239c7ca58c82177c7cc54e678e876094894fa_prof);

        
        $__internal_c9d4d3d1f6cdff5e859145efd6d6163cc7a53e40fb1c6a3ec16d9cdb290410f1->leave($__internal_c9d4d3d1f6cdff5e859145efd6d6163cc7a53e40fb1c6a3ec16d9cdb290410f1_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
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
    <input type=\"checkbox\" name=\"idx[]\" value=\"{{ admin.id(object) }}\">
{% endblock %}
", "SonataAdminBundle:CRUD:list__batch.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list__batch.html.twig");
    }
}

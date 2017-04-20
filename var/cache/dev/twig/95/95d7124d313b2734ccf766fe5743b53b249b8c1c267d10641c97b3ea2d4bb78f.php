<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_d8a712ba971fef46760afd5d09d8599b32b7c43dcd0b20e73214759b98dcc989 extends Twig_Template
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
        $__internal_d27a8566cc3eb4c1708c8ae4791e53c617fc29baf5b7c47d20660a5404831b30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d27a8566cc3eb4c1708c8ae4791e53c617fc29baf5b7c47d20660a5404831b30->enter($__internal_d27a8566cc3eb4c1708c8ae4791e53c617fc29baf5b7c47d20660a5404831b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $__internal_34bbfd4ad415c542e39cdc0a26146a2ecc6ecb4ee96f9a593105fdfad3172115 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34bbfd4ad415c542e39cdc0a26146a2ecc6ecb4ee96f9a593105fdfad3172115->enter($__internal_34bbfd4ad415c542e39cdc0a26146a2ecc6ecb4ee96f9a593105fdfad3172115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d27a8566cc3eb4c1708c8ae4791e53c617fc29baf5b7c47d20660a5404831b30->leave($__internal_d27a8566cc3eb4c1708c8ae4791e53c617fc29baf5b7c47d20660a5404831b30_prof);

        
        $__internal_34bbfd4ad415c542e39cdc0a26146a2ecc6ecb4ee96f9a593105fdfad3172115->leave($__internal_34bbfd4ad415c542e39cdc0a26146a2ecc6ecb4ee96f9a593105fdfad3172115_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_3b4156cd6d419fce7dc55dd32c68e0b88b506428cd8071fa2b456d5a776a1ce6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b4156cd6d419fce7dc55dd32c68e0b88b506428cd8071fa2b456d5a776a1ce6->enter($__internal_3b4156cd6d419fce7dc55dd32c68e0b88b506428cd8071fa2b456d5a776a1ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_4465f7f0f847b6b901a2fd405a70e594877860798e10929324d01ebadc01d82c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4465f7f0f847b6b901a2fd405a70e594877860798e10929324d01ebadc01d82c->enter($__internal_4465f7f0f847b6b901a2fd405a70e594877860798e10929324d01ebadc01d82c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 15, $this->getSourceContext()); })()), "id", array(0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 15, $this->getSourceContext()); })())), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_4465f7f0f847b6b901a2fd405a70e594877860798e10929324d01ebadc01d82c->leave($__internal_4465f7f0f847b6b901a2fd405a70e594877860798e10929324d01ebadc01d82c_prof);

        
        $__internal_3b4156cd6d419fce7dc55dd32c68e0b88b506428cd8071fa2b456d5a776a1ce6->leave($__internal_3b4156cd6d419fce7dc55dd32c68e0b88b506428cd8071fa2b456d5a776a1ce6_prof);

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

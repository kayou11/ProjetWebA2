<?php

/* SonataAdminBundle:CRUD:list__action.html.twig */
class __TwigTemplate_7e49777a1c4d0d5a5aa5e6b7dd37bac8c9d7a50199eaf2fce3cebc0905f3e941 extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d1336bfc7f1365e4de1a5ad0ef9c733f7364fa0485d0372b7e8d8b7af28f5fa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1336bfc7f1365e4de1a5ad0ef9c733f7364fa0485d0372b7e8d8b7af28f5fa5->enter($__internal_d1336bfc7f1365e4de1a5ad0ef9c733f7364fa0485d0372b7e8d8b7af28f5fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__action.html.twig"));

        $__internal_2dffd1231d1c199897de63b4405b44e4c057655796bec6b08423119f3d0d3226 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dffd1231d1c199897de63b4405b44e4c057655796bec6b08423119f3d0d3226->enter($__internal_2dffd1231d1c199897de63b4405b44e4c057655796bec6b08423119f3d0d3226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1336bfc7f1365e4de1a5ad0ef9c733f7364fa0485d0372b7e8d8b7af28f5fa5->leave($__internal_d1336bfc7f1365e4de1a5ad0ef9c733f7364fa0485d0372b7e8d8b7af28f5fa5_prof);

        
        $__internal_2dffd1231d1c199897de63b4405b44e4c057655796bec6b08423119f3d0d3226->leave($__internal_2dffd1231d1c199897de63b4405b44e4c057655796bec6b08423119f3d0d3226_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_f5ba4e5a3ae00e5462549d768dc2f41e2b85cf9851b95ab3cda3711054d66b73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5ba4e5a3ae00e5462549d768dc2f41e2b85cf9851b95ab3cda3711054d66b73->enter($__internal_f5ba4e5a3ae00e5462549d768dc2f41e2b85cf9851b95ab3cda3711054d66b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_c2137253af844bfe8c644a828caa751f159ebc25e0dcd8fa0f430f511a35e19c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2137253af844bfe8c644a828caa751f159ebc25e0dcd8fa0f430f511a35e19c->enter($__internal_c2137253af844bfe8c644a828caa751f159ebc25e0dcd8fa0f430f511a35e19c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <div class=\"btn-group\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 16, $this->getSourceContext()); })()), "options", array()), "actions", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["actions"]) {
            // line 17
            echo "            ";
            $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), $context["actions"], "template", array()), "SonataAdminBundle:CRUD:list__action.html.twig", 17)->display($context);
            // line 18
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </div>
";
        
        $__internal_c2137253af844bfe8c644a828caa751f159ebc25e0dcd8fa0f430f511a35e19c->leave($__internal_c2137253af844bfe8c644a828caa751f159ebc25e0dcd8fa0f430f511a35e19c_prof);

        
        $__internal_f5ba4e5a3ae00e5462549d768dc2f41e2b85cf9851b95ab3cda3711054d66b73->leave($__internal_f5ba4e5a3ae00e5462549d768dc2f41e2b85cf9851b95ab3cda3711054d66b73_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 19,  71 => 18,  68 => 17,  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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
    <div class=\"btn-group\">
        {% for actions in field_description.options.actions %}
            {% include actions.template %}
        {% endfor %}
    </div>
{% endblock %}
", "SonataAdminBundle:CRUD:list__action.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list__action.html.twig");
    }
}

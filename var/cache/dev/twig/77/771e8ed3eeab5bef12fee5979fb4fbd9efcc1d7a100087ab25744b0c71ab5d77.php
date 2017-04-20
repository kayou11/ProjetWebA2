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
        $__internal_99b0cc0125c0ae41dbf652e64490c1cade423aeab5fd46f02b8645054f1663e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99b0cc0125c0ae41dbf652e64490c1cade423aeab5fd46f02b8645054f1663e4->enter($__internal_99b0cc0125c0ae41dbf652e64490c1cade423aeab5fd46f02b8645054f1663e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__action.html.twig"));

        $__internal_4ecbce63eb1f936dca3729965782122c654cb94c04629f88e000a58e7fbabe14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ecbce63eb1f936dca3729965782122c654cb94c04629f88e000a58e7fbabe14->enter($__internal_4ecbce63eb1f936dca3729965782122c654cb94c04629f88e000a58e7fbabe14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99b0cc0125c0ae41dbf652e64490c1cade423aeab5fd46f02b8645054f1663e4->leave($__internal_99b0cc0125c0ae41dbf652e64490c1cade423aeab5fd46f02b8645054f1663e4_prof);

        
        $__internal_4ecbce63eb1f936dca3729965782122c654cb94c04629f88e000a58e7fbabe14->leave($__internal_4ecbce63eb1f936dca3729965782122c654cb94c04629f88e000a58e7fbabe14_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_4078990951670e63534dced7883ff078f14e699301efaff447a8c626a90859af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4078990951670e63534dced7883ff078f14e699301efaff447a8c626a90859af->enter($__internal_4078990951670e63534dced7883ff078f14e699301efaff447a8c626a90859af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_302010f94c74c577805583723a9cb2367a8c34098a9fa268cf2bb825caf1f221 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_302010f94c74c577805583723a9cb2367a8c34098a9fa268cf2bb825caf1f221->enter($__internal_302010f94c74c577805583723a9cb2367a8c34098a9fa268cf2bb825caf1f221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_302010f94c74c577805583723a9cb2367a8c34098a9fa268cf2bb825caf1f221->leave($__internal_302010f94c74c577805583723a9cb2367a8c34098a9fa268cf2bb825caf1f221_prof);

        
        $__internal_4078990951670e63534dced7883ff078f14e699301efaff447a8c626a90859af->leave($__internal_4078990951670e63534dced7883ff078f14e699301efaff447a8c626a90859af_prof);

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

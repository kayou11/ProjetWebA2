<?php

/* SyliusAdminBundle:Crud/Index:_actions.html.twig */
class __TwigTemplate_96bc674096bc65312670de2fe349c9abcd09bdfc56c0f9631c3dae3d323defc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_848dcc248d2da8ca1b4acecfba2efd1d2d6481f81a71e4f80d9fc540be7bc85d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_848dcc248d2da8ca1b4acecfba2efd1d2d6481f81a71e4f80d9fc540be7bc85d->enter($__internal_848dcc248d2da8ca1b4acecfba2efd1d2d6481f81a71e4f80d9fc540be7bc85d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Crud/Index:_actions.html.twig"));

        $__internal_da73d03400a450e7dfa577abea4b6ef5323fcd043edc936e780da166842e7a21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da73d03400a450e7dfa577abea4b6ef5323fcd043edc936e780da166842e7a21->enter($__internal_da73d03400a450e7dfa577abea4b6ef5323fcd043edc936e780da166842e7a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Crud/Index:_actions.html.twig"));

        // line 1
        echo "<div class=\"middle aligned column\">
    <div class=\"ui right floated buttons\">
        ";
        // line 3
        if ($this->getAttribute($this->getAttribute(($context["definition"] ?? null), "actionGroups", array(), "any", false, true), "main", array(), "any", true, true)) {
            // line 4
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["definition"] ?? $this->getContext($context, "definition")), "getEnabledActions", array(0 => "main"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 5
                echo "                ";
                echo call_user_func_array($this->env->getFunction('sylius_grid_render_action')->getCallable(), array(($context["resources"] ?? $this->getContext($context, "resources")), $context["action"], null));
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "        ";
        }
        // line 8
        echo "    </div>
</div>
";
        
        $__internal_848dcc248d2da8ca1b4acecfba2efd1d2d6481f81a71e4f80d9fc540be7bc85d->leave($__internal_848dcc248d2da8ca1b4acecfba2efd1d2d6481f81a71e4f80d9fc540be7bc85d_prof);

        
        $__internal_da73d03400a450e7dfa577abea4b6ef5323fcd043edc936e780da166842e7a21->leave($__internal_da73d03400a450e7dfa577abea4b6ef5323fcd043edc936e780da166842e7a21_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Crud/Index:_actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 8,  45 => 7,  36 => 5,  31 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"middle aligned column\">
    <div class=\"ui right floated buttons\">
        {% if definition.actionGroups.main is defined %}
            {% for action in definition.getEnabledActions('main') %}
                {{ sylius_grid_render_action(resources, action, null) }}
            {% endfor %}
        {% endif %}
    </div>
</div>
", "SyliusAdminBundle:Crud/Index:_actions.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Crud/Index/_actions.html.twig");
    }
}

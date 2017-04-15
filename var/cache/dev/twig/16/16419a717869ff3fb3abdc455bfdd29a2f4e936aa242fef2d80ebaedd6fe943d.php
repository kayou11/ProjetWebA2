<?php

/* SyliusAdminBundle:Order/History:_actions.html.twig */
class __TwigTemplate_9d05fffb77710cef277a855d163aa535883b35ec79191b50e90ff6b7c9af30d0 extends Twig_Template
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
        $__internal_1259e3621571e05377b76047a250908c5f1f336823446316a8185351e7828a76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1259e3621571e05377b76047a250908c5f1f336823446316a8185351e7828a76->enter($__internal_1259e3621571e05377b76047a250908c5f1f336823446316a8185351e7828a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/History:_actions.html.twig"));

        $__internal_0ad0b684f8cb4b827c8df84eed5724b40c18b761f2853eb86cf9e0644036e985 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ad0b684f8cb4b827c8df84eed5724b40c18b761f2853eb86cf9e0644036e985->enter($__internal_0ad0b684f8cb4b827c8df84eed5724b40c18b761f2853eb86cf9e0644036e985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/History:_actions.html.twig"));

        // line 1
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_order_show", array("id" => $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "id", array()))), "html", null, true);
        echo "\" class=\"ui labeled icon button\"><i class=\"reply icon\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.return"), "html", null, true);
        echo "</a>
";
        
        $__internal_1259e3621571e05377b76047a250908c5f1f336823446316a8185351e7828a76->leave($__internal_1259e3621571e05377b76047a250908c5f1f336823446316a8185351e7828a76_prof);

        
        $__internal_0ad0b684f8cb4b827c8df84eed5724b40c18b761f2853eb86cf9e0644036e985->leave($__internal_0ad0b684f8cb4b827c8df84eed5724b40c18b761f2853eb86cf9e0644036e985_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/History:_actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a href=\"{{ path('sylius_admin_order_show', {'id': order.id}) }}\" class=\"ui labeled icon button\"><i class=\"reply icon\"></i>{{ 'sylius.ui.return'|trans }}</a>
", "SyliusAdminBundle:Order/History:_actions.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/History/_actions.html.twig");
    }
}

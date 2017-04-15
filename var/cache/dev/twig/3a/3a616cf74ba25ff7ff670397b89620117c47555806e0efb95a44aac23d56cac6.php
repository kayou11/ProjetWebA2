<?php

/* SyliusAdminBundle:Shipment/Partial:_ship.html.twig */
class __TwigTemplate_9221a458aa3ca11c88e98dbe23ecf45279c39d63c68cdfa5cfc95ca5011209f1 extends Twig_Template
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
        $__internal_aa4f885b578a1aab7c9e2a9578925ae211c1ad892f8e688331664904a34cd25f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa4f885b578a1aab7c9e2a9578925ae211c1ad892f8e688331664904a34cd25f->enter($__internal_aa4f885b578a1aab7c9e2a9578925ae211c1ad892f8e688331664904a34cd25f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Shipment/Partial:_ship.html.twig"));

        $__internal_4e96da13abfcd35b7def120f26923a4e17cba3f43f150dd2ee4093900f258882 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e96da13abfcd35b7def120f26923a4e17cba3f43f150dd2ee4093900f258882->enter($__internal_4e96da13abfcd35b7def120f26923a4e17cba3f43f150dd2ee4093900f258882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Shipment/Partial:_ship.html.twig"));

        // line 1
        echo "<div class=\"ui segment\">
    ";
        // line 2
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_order_shipment_ship", $this->getAttribute($this->getAttribute($this->getAttribute(($context["configuration"] ?? $this->getContext($context, "configuration")), "vars", array()), "route", array()), "parameters", array())), "attr" => array("class" => "ui loadable form", "novalidate" => "novalidate")));
        echo "
    <input type=\"hidden\" name=\"_method\" value=\"PUT\">
    <div class=\"ui fluid action input\">
        ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tracking", array()), 'widget', array("attr" => array("placeholder" => ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.tracking_code") . "..."))));
        echo "
        <button type=\"submit\" class=\"ui labeled icon teal button\"><i class=\"plane icon\"></i> ";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.ship"), "html", null, true);
        echo "</button>
    </div>
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
</div>
";
        
        $__internal_aa4f885b578a1aab7c9e2a9578925ae211c1ad892f8e688331664904a34cd25f->leave($__internal_aa4f885b578a1aab7c9e2a9578925ae211c1ad892f8e688331664904a34cd25f_prof);

        
        $__internal_4e96da13abfcd35b7def120f26923a4e17cba3f43f150dd2ee4093900f258882->leave($__internal_4e96da13abfcd35b7def120f26923a4e17cba3f43f150dd2ee4093900f258882_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Shipment/Partial:_ship.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  43 => 8,  38 => 6,  34 => 5,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui segment\">
    {{ form_start(form, {'action': path('sylius_admin_order_shipment_ship', configuration.vars.route.parameters), 'attr': {'class': 'ui loadable form', 'novalidate': 'novalidate'}}) }}
    <input type=\"hidden\" name=\"_method\" value=\"PUT\">
    <div class=\"ui fluid action input\">
        {{ form_widget(form.tracking, {'attr': {'placeholder': 'sylius.ui.tracking_code'|trans ~ '...'}}) }}
        <button type=\"submit\" class=\"ui labeled icon teal button\"><i class=\"plane icon\"></i> {{ 'sylius.ui.ship'|trans }}</button>
    </div>
    {{ form_row(form._token) }}
    {{ form_end(form, {'render_rest': false}) }}
</div>
", "SyliusAdminBundle:Shipment/Partial:_ship.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Shipment/Partial/_ship.html.twig");
    }
}

<?php

/* SyliusAdminBundle:Product:_form.html.twig */
class __TwigTemplate_d8378384f3f0d0755c9e0aabf1d4c98069bc3e9c14b588db4ff99bedb953a84b extends Twig_Template
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
        $__internal_5fb4a2b2599007839017bd1ee257fb40c2e67dd9f518fa54da68d77ae3cea685 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fb4a2b2599007839017bd1ee257fb40c2e67dd9f518fa54da68d77ae3cea685->enter($__internal_5fb4a2b2599007839017bd1ee257fb40c2e67dd9f518fa54da68d77ae3cea685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product:_form.html.twig"));

        $__internal_becda5242d4681995459fa23319383529e62c024a9f7879d5d0090e822615b8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_becda5242d4681995459fa23319383529e62c024a9f7879d5d0090e822615b8a->enter($__internal_becda5242d4681995459fa23319383529e62c024a9f7879d5d0090e822615b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product:_form.html.twig"));

        // line 1
        $context["menu"] = $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->get("sylius.admin.product_form", array(), array("product" => ($context["product"] ?? $this->getContext($context, "product"))));
        // line 2
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render(($context["menu"] ?? $this->getContext($context, "menu")), array("template" => "SyliusAdminBundle:Product:_menu.html.twig", "form" => ($context["form"] ?? $this->getContext($context, "form")), "product" => ($context["product"] ?? $this->getContext($context, "product"))));
        echo "
";
        
        $__internal_5fb4a2b2599007839017bd1ee257fb40c2e67dd9f518fa54da68d77ae3cea685->leave($__internal_5fb4a2b2599007839017bd1ee257fb40c2e67dd9f518fa54da68d77ae3cea685_prof);

        
        $__internal_becda5242d4681995459fa23319383529e62c024a9f7879d5d0090e822615b8a->leave($__internal_becda5242d4681995459fa23319383529e62c024a9f7879d5d0090e822615b8a_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Product:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set menu = knp_menu_get('sylius.admin.product_form', [], {'product': product}) %}
{{ knp_menu_render(menu, {'template': 'SyliusAdminBundle:Product:_menu.html.twig', 'form': form, 'product': product}) }}
", "SyliusAdminBundle:Product:_form.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/_form.html.twig");
    }
}

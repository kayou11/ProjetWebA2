<?php

/* SyliusAdminBundle:Locale/Grid/Field:name.html.twig */
class __TwigTemplate_4607a2d5dff0d8c927cf89dfc8cbe9dbe66a9d5ca8e621e4be0c2f48f5d92530 extends Twig_Template
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
        $__internal_9dd8538cd541149d5e76990f37c5753475a1e548732541d39cbb081152afa2c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dd8538cd541149d5e76990f37c5753475a1e548732541d39cbb081152afa2c9->enter($__internal_9dd8538cd541149d5e76990f37c5753475a1e548732541d39cbb081152afa2c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Locale/Grid/Field:name.html.twig"));

        $__internal_654360a4590fdad29de66ac0020379fb1fefd46a396ab9cd9df3913cde57a2cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_654360a4590fdad29de66ac0020379fb1fefd46a396ab9cd9df3913cde57a2cc->enter($__internal_654360a4590fdad29de66ac0020379fb1fefd46a396ab9cd9df3913cde57a2cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Locale/Grid/Field:name.html.twig"));

        // line 1
        echo "<i class=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_slice($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "code", array()), 3, 2)), "html", null, true);
        echo " flag\"></i> ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "code", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "name", array()), "html", null, true);
        echo "
";
        
        $__internal_9dd8538cd541149d5e76990f37c5753475a1e548732541d39cbb081152afa2c9->leave($__internal_9dd8538cd541149d5e76990f37c5753475a1e548732541d39cbb081152afa2c9_prof);

        
        $__internal_654360a4590fdad29de66ac0020379fb1fefd46a396ab9cd9df3913cde57a2cc->leave($__internal_654360a4590fdad29de66ac0020379fb1fefd46a396ab9cd9df3913cde57a2cc_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Locale/Grid/Field:name.html.twig";
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
        return new Twig_Source("<i class=\"{{ data.code|slice(3, 2)|lower }} flag\"></i> {{ data.code }} {{ data.name }}
", "SyliusAdminBundle:Locale/Grid/Field:name.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Locale/Grid/Field/name.html.twig");
    }
}

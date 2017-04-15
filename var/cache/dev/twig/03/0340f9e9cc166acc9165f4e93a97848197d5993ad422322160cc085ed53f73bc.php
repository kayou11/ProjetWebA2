<?php

/* SyliusAdminBundle:Macro:breadcrumb.html.twig */
class __TwigTemplate_31a5fd5f233e79e44bf8a608b2522285cb80c26b69da7e11bf1e596c98f4c6fa extends Twig_Template
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
        $__internal_73cb10f29d946d2428d2db98ff39cc9436bec494fd8a03f3e290f0a39333a978 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73cb10f29d946d2428d2db98ff39cc9436bec494fd8a03f3e290f0a39333a978->enter($__internal_73cb10f29d946d2428d2db98ff39cc9436bec494fd8a03f3e290f0a39333a978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Macro:breadcrumb.html.twig"));

        $__internal_4468b4fd3df3f3d91145f339e9758fd4e0bafe727e8a869254878803a7c7261c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4468b4fd3df3f3d91145f339e9758fd4e0bafe727e8a869254878803a7c7261c->enter($__internal_4468b4fd3df3f3d91145f339e9758fd4e0bafe727e8a869254878803a7c7261c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Macro:breadcrumb.html.twig"));

        
        $__internal_73cb10f29d946d2428d2db98ff39cc9436bec494fd8a03f3e290f0a39333a978->leave($__internal_73cb10f29d946d2428d2db98ff39cc9436bec494fd8a03f3e290f0a39333a978_prof);

        
        $__internal_4468b4fd3df3f3d91145f339e9758fd4e0bafe727e8a869254878803a7c7261c->leave($__internal_4468b4fd3df3f3d91145f339e9758fd4e0bafe727e8a869254878803a7c7261c_prof);

    }

    // line 1
    public function getcrumble($__crumbs__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "crumbs" => $__crumbs__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_71596b71505112f5aa40cec6b00ff92455bfd0d6abd593ef868ce887f5ef7bed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_71596b71505112f5aa40cec6b00ff92455bfd0d6abd593ef868ce887f5ef7bed->enter($__internal_71596b71505112f5aa40cec6b00ff92455bfd0d6abd593ef868ce887f5ef7bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "crumble"));

            $__internal_f6aaf4beca55033b8a13a31e6dccd1547068d9a9c512412d5484aa71912db709 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_f6aaf4beca55033b8a13a31e6dccd1547068d9a9c512412d5484aa71912db709->enter($__internal_f6aaf4beca55033b8a13a31e6dccd1547068d9a9c512412d5484aa71912db709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "crumble"));

            // line 2
            echo "    ";
            $context["_breadcrumb"] = $this->loadTemplate("@SyliusUi/Macro/breadcrumb.html.twig", "SyliusAdminBundle:Macro:breadcrumb.html.twig", 2);
            // line 3
            echo "
    ";
            // line 4
            echo $context["_breadcrumb"]->getcrumble(($context["crumbs"] ?? $this->getContext($context, "crumbs")), $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_dashboard"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.administration"));
            echo "
";
            
            $__internal_f6aaf4beca55033b8a13a31e6dccd1547068d9a9c512412d5484aa71912db709->leave($__internal_f6aaf4beca55033b8a13a31e6dccd1547068d9a9c512412d5484aa71912db709_prof);

            
            $__internal_71596b71505112f5aa40cec6b00ff92455bfd0d6abd593ef868ce887f5ef7bed->leave($__internal_71596b71505112f5aa40cec6b00ff92455bfd0d6abd593ef868ce887f5ef7bed_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Macro:breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 4,  54 => 3,  51 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro crumble(crumbs = {}) %}
    {% import '@SyliusUi/Macro/breadcrumb.html.twig' as _breadcrumb %}

    {{ _breadcrumb.crumble(crumbs, path('sylius_admin_dashboard'), 'sylius.ui.administration'|trans) }}
{% endmacro %}
", "SyliusAdminBundle:Macro:breadcrumb.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Macro/breadcrumb.html.twig");
    }
}

<?php

/* SyliusAdminBundle:ShippingCategory:_form.html.twig */
class __TwigTemplate_32c90842a66b7d6ca8710d6a4ca04610e89b0f9ff8cbf3adf07231b4e0f9825f extends Twig_Template
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
        $__internal_42a93a8fc8af977e646c8d05f2f50c0be6f4bb70c6747cc5cc3499427ab47c7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42a93a8fc8af977e646c8d05f2f50c0be6f4bb70c6747cc5cc3499427ab47c7c->enter($__internal_42a93a8fc8af977e646c8d05f2f50c0be6f4bb70c6747cc5cc3499427ab47c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ShippingCategory:_form.html.twig"));

        $__internal_4f6a4752873a5deda89eb67f21657d5e3cea1a7a7e9929016b4b10e6886ed4e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f6a4752873a5deda89eb67f21657d5e3cea1a7a7e9929016b4b10e6886ed4e9->enter($__internal_4f6a4752873a5deda89eb67f21657d5e3cea1a7a7e9929016b4b10e6886ed4e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ShippingCategory:_form.html.twig"));

        // line 1
        echo "<div class=\"ui column stackable grid\">
    <div class=\"row\">
        <div class=\"column\">
            ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
            <div class=\"two fields\">
                ";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "code", array()), 'row');
        echo "
                ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'row');
        echo "
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"column\">
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'row');
        echo "
        </div>
    </div>
</div>
";
        
        $__internal_42a93a8fc8af977e646c8d05f2f50c0be6f4bb70c6747cc5cc3499427ab47c7c->leave($__internal_42a93a8fc8af977e646c8d05f2f50c0be6f4bb70c6747cc5cc3499427ab47c7c_prof);

        
        $__internal_4f6a4752873a5deda89eb67f21657d5e3cea1a7a7e9929016b4b10e6886ed4e9->leave($__internal_4f6a4752873a5deda89eb67f21657d5e3cea1a7a7e9929016b4b10e6886ed4e9_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ShippingCategory:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 13,  39 => 7,  35 => 6,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui column stackable grid\">
    <div class=\"row\">
        <div class=\"column\">
            {{ form_errors(form) }}
            <div class=\"two fields\">
                {{ form_row(form.code) }}
                {{ form_row(form.name) }}
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"column\">
            {{ form_row(form.description) }}
        </div>
    </div>
</div>
", "SyliusAdminBundle:ShippingCategory:_form.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/ShippingCategory/_form.html.twig");
    }
}

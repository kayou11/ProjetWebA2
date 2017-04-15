<?php

/* SyliusAdminBundle:ProductReview:_form.html.twig */
class __TwigTemplate_551593892e844491c9aedebe2ca26002c962174c743a139a15f9727e50d19d76 extends Twig_Template
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
        $__internal_dfb8f5640d7a7f044333807c08d9bdc2fc4468fb77ec2d82a3792b8b5b101531 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfb8f5640d7a7f044333807c08d9bdc2fc4468fb77ec2d82a3792b8b5b101531->enter($__internal_dfb8f5640d7a7f044333807c08d9bdc2fc4468fb77ec2d82a3792b8b5b101531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductReview:_form.html.twig"));

        $__internal_63721360ca0b47fb8d4db635937fc229f491ceb981aa2b8f2615e8e5ff58447a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63721360ca0b47fb8d4db635937fc229f491ceb981aa2b8f2615e8e5ff58447a->enter($__internal_63721360ca0b47fb8d4db635937fc229f491ceb981aa2b8f2615e8e5ff58447a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductReview:_form.html.twig"));

        // line 1
        echo "<div class=\"ui stackable grid\">
    <div class=\"twelve wide column\">
        <div class=\"ui segment\">
            ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
            ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'row');
        echo "
            ";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "comment", array()), 'row');
        echo "
            ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rating", array()), 'row');
        echo "
        </div>
    </div>
    <div class=\"four wide column\">
        ";
        // line 11
        $this->loadTemplate("@SyliusAdmin/ProductReview/_product.html.twig", "SyliusAdminBundle:ProductReview:_form.html.twig", 11)->display($context);
        // line 12
        echo "        ";
        $this->loadTemplate("@SyliusAdmin/ProductReview/_author.html.twig", "SyliusAdminBundle:ProductReview:_form.html.twig", 12)->display($context);
        // line 13
        echo "    </div>
</div>
";
        
        $__internal_dfb8f5640d7a7f044333807c08d9bdc2fc4468fb77ec2d82a3792b8b5b101531->leave($__internal_dfb8f5640d7a7f044333807c08d9bdc2fc4468fb77ec2d82a3792b8b5b101531_prof);

        
        $__internal_63721360ca0b47fb8d4db635937fc229f491ceb981aa2b8f2615e8e5ff58447a->leave($__internal_63721360ca0b47fb8d4db635937fc229f491ceb981aa2b8f2615e8e5ff58447a_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductReview:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 13,  51 => 12,  49 => 11,  42 => 7,  38 => 6,  34 => 5,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui stackable grid\">
    <div class=\"twelve wide column\">
        <div class=\"ui segment\">
            {{ form_errors(form) }}
            {{ form_row(form.title) }}
            {{ form_row(form.comment) }}
            {{ form_row(form.rating) }}
        </div>
    </div>
    <div class=\"four wide column\">
        {% include '@SyliusAdmin/ProductReview/_product.html.twig' %}
        {% include '@SyliusAdmin/ProductReview/_author.html.twig' %}
    </div>
</div>
", "SyliusAdminBundle:ProductReview:_form.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/ProductReview/_form.html.twig");
    }
}

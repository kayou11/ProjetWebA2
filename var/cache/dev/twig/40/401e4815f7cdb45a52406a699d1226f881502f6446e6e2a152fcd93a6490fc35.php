<?php

/* SyliusShopBundle:ProductReview:_form.html.twig */
class __TwigTemplate_cbba1b3148f3aa4f5c0132e952e34c6ef3fd7861f0d58d4c2e681ceb57544fa3 extends Twig_Template
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
        $__internal_d9d4437281df4c058a48bf49ac10274049119a273484bfa45175d91794327c69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9d4437281df4c058a48bf49ac10274049119a273484bfa45175d91794327c69->enter($__internal_d9d4437281df4c058a48bf49ac10274049119a273484bfa45175d91794327c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:ProductReview:_form.html.twig"));

        $__internal_3566006944eae6e0e2b9adb176d112d9346d2d1f822e519d85a5e6007f23abab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3566006944eae6e0e2b9adb176d112d9346d2d1f822e519d85a5e6007f23abab->enter($__internal_3566006944eae6e0e2b9adb176d112d9346d2d1f822e519d85a5e6007f23abab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:ProductReview:_form.html.twig"));

        // line 1
        echo "<div class=\"field\">
    <div class=\"ui huge star rating\" data-rating=\"0\" data-max-rating=\"5\"></div>
    <br/>
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rating", array()), 'errors');
        echo "
    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rating", array()), 'widget', array("attr" => array("style" => "display: none")));
        echo "
</div>
<div class=\"field\">
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.title"))));
        echo "
    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'errors');
        echo "
</div>
<div class=\"field\">
    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "comment", array()), 'widget', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.write_your_own_review"))));
        echo "
    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "comment", array()), 'errors');
        echo "
</div>
";
        // line 15
        if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 16
            echo "    <div class=\"field\">
        ";
            // line 17
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "author", array()), "email", array()), 'widget', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.email"))));
            echo "
        ";
            // line 18
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "author", array()), "email", array()), 'errors');
            echo "
    </div>
";
        }
        
        $__internal_d9d4437281df4c058a48bf49ac10274049119a273484bfa45175d91794327c69->leave($__internal_d9d4437281df4c058a48bf49ac10274049119a273484bfa45175d91794327c69_prof);

        
        $__internal_3566006944eae6e0e2b9adb176d112d9346d2d1f822e519d85a5e6007f23abab->leave($__internal_3566006944eae6e0e2b9adb176d112d9346d2d1f822e519d85a5e6007f23abab_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:ProductReview:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 18,  64 => 17,  61 => 16,  59 => 15,  54 => 13,  50 => 12,  44 => 9,  40 => 8,  34 => 5,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"field\">
    <div class=\"ui huge star rating\" data-rating=\"0\" data-max-rating=\"5\"></div>
    <br/>
    {{ form_errors(form.rating) }}
    {{ form_widget(form.rating, {'attr': {'style': 'display: none'} }) }}
</div>
<div class=\"field\">
    {{ form_widget(form.title, {'attr': {'placeholder': 'sylius.ui.title'|trans} }) }}
    {{ form_errors(form.title) }}
</div>
<div class=\"field\">
    {{ form_widget(form.comment, {'attr': {'placeholder': 'sylius.ui.write_your_own_review'|trans} }) }}
    {{ form_errors(form.comment) }}
</div>
{% if not is_granted(\"IS_AUTHENTICATED_FULLY\") %}
    <div class=\"field\">
        {{ form_widget(form.author.email, {'attr': {'placeholder': 'sylius.ui.email'|trans}}) }}
        {{ form_errors(form.author.email) }}
    </div>
{% endif %}
", "SyliusShopBundle:ProductReview:_form.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/ProductReview/_form.html.twig");
    }
}

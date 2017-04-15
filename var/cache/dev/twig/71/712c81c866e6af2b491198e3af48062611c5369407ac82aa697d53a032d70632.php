<?php

/* @SyliusShop/Login/_form.html.twig */
class __TwigTemplate_4bd25d3cfa278502681248cf52176ad5845943bc2a1baf859fcd06d0c38754af extends Twig_Template
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
        $__internal_9826ac2facf3bcb229bdffc924d87210c39be0d1cb11ebfe060103b5028d4ec9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9826ac2facf3bcb229bdffc924d87210c39be0d1cb11ebfe060103b5028d4ec9->enter($__internal_9826ac2facf3bcb229bdffc924d87210c39be0d1cb11ebfe060103b5028d4ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Login/_form.html.twig"));

        $__internal_f156ba76971e8bfe9db0a987ae52af30457da96d7c1d119703f250ccdd9d879d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f156ba76971e8bfe9db0a987ae52af30457da96d7c1d119703f250ccdd9d879d->enter($__internal_f156ba76971e8bfe9db0a987ae52af30457da96d7c1d119703f250ccdd9d879d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Login/_form.html.twig"));

        // line 1
        if (($context["last_error"] ?? $this->getContext($context, "last_error"))) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), "error", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["last_error"] ?? $this->getContext($context, "last_error")), "messageKey", array()), $this->getAttribute(($context["last_error"] ?? $this->getContext($context, "last_error")), "messageData", array()), "security")), "method"), "html", null, true);
            echo "
";
        }
        // line 4
        echo "
";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_username", array()), 'row');
        echo "
";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_password", array()), 'row');
        echo "
";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_remember_me", array()), 'row');
        echo "
";
        
        $__internal_9826ac2facf3bcb229bdffc924d87210c39be0d1cb11ebfe060103b5028d4ec9->leave($__internal_9826ac2facf3bcb229bdffc924d87210c39be0d1cb11ebfe060103b5028d4ec9_prof);

        
        $__internal_f156ba76971e8bfe9db0a987ae52af30457da96d7c1d119703f250ccdd9d879d->leave($__internal_f156ba76971e8bfe9db0a987ae52af30457da96d7c1d119703f250ccdd9d879d_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Login/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 7,  40 => 6,  36 => 5,  33 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if last_error %}
    {{ messages.error(last_error.messageKey|trans(last_error.messageData, 'security')) }}
{% endif %}

{{ form_row(form._username) }}
{{ form_row(form._password) }}
{{ form_row(form._remember_me) }}
", "@SyliusShop/Login/_form.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Login/_form.html.twig");
    }
}

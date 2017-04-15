<?php

/* FOSOAuthServerBundle:Authorize:authorize_content.html.twig */
class __TwigTemplate_a8d4d931970374cc8aa78af1b7dbe39802f5764f61743b70134912099c82e488 extends Twig_Template
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
        $__internal_043e806edacf2112bc04c85952eacca6a0f0d2ce75910513b996333ec2106acf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_043e806edacf2112bc04c85952eacca6a0f0d2ce75910513b996333ec2106acf->enter($__internal_043e806edacf2112bc04c85952eacca6a0f0d2ce75910513b996333ec2106acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSOAuthServerBundle:Authorize:authorize_content.html.twig"));

        $__internal_298f7778ded0042038e9937cd78cb678e88c334fe4bb4459868ae049609e50d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_298f7778ded0042038e9937cd78cb678e88c334fe4bb4459868ae049609e50d4->enter($__internal_298f7778ded0042038e9937cd78cb678e88c334fe4bb4459868ae049609e50d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSOAuthServerBundle:Authorize:authorize_content.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "POST", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_oauth_server_authorize"), "label_attr" => array("class" => "fos_oauth_server_authorize")));
        echo "
    <input type=\"submit\" name=\"accepted\" value=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("authorize.accept", array(), "FOSOAuthServerBundle"), "html", null, true);
        echo "\" />
    <input type=\"submit\" name=\"rejected\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("authorize.reject", array(), "FOSOAuthServerBundle"), "html", null, true);
        echo "\" />

    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "client_id", array()), 'row');
        echo "
    ";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "response_type", array()), 'row');
        echo "
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "redirect_uri", array()), 'row');
        echo "
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "state", array()), 'row');
        echo "
    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "scope", array()), 'row');
        echo "
    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
</form>
";
        
        $__internal_043e806edacf2112bc04c85952eacca6a0f0d2ce75910513b996333ec2106acf->leave($__internal_043e806edacf2112bc04c85952eacca6a0f0d2ce75910513b996333ec2106acf_prof);

        
        $__internal_298f7778ded0042038e9937cd78cb678e88c334fe4bb4459868ae049609e50d4->leave($__internal_298f7778ded0042038e9937cd78cb678e88c334fe4bb4459868ae049609e50d4_prof);

    }

    public function getTemplateName()
    {
        return "FOSOAuthServerBundle:Authorize:authorize_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 10,  54 => 9,  50 => 8,  46 => 7,  42 => 6,  38 => 5,  33 => 3,  29 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form, {'method': 'POST', 'action': path('fos_oauth_server_authorize'), 'label_attr': {'class': 'fos_oauth_server_authorize'} }) }}
    <input type=\"submit\" name=\"accepted\" value=\"{{ 'authorize.accept'|trans({}, 'FOSOAuthServerBundle') }}\" />
    <input type=\"submit\" name=\"rejected\" value=\"{{ 'authorize.reject'|trans({}, 'FOSOAuthServerBundle') }}\" />

    {{ form_row(form.client_id) }}
    {{ form_row(form.response_type) }}
    {{ form_row(form.redirect_uri) }}
    {{ form_row(form.state) }}
    {{ form_row(form.scope) }}
    {{ form_rest(form) }}
</form>
", "FOSOAuthServerBundle:Authorize:authorize_content.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/friendsofsymfony/oauth-server-bundle/Resources/views/Authorize/authorize_content.html.twig");
    }
}

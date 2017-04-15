<?php

/* SyliusShopBundle:Email:contactRequest.html.twig */
class __TwigTemplate_e6b8a37d8b2f11cdab6b30569986e19db346140fd8a757f0466919a2c536d2ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aaae0c4e2b50e50b078a5c9ff35ec24d41472cde9d83d636c40cf284d9911eee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaae0c4e2b50e50b078a5c9ff35ec24d41472cde9d83d636c40cf284d9911eee->enter($__internal_aaae0c4e2b50e50b078a5c9ff35ec24d41472cde9d83d636c40cf284d9911eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Email:contactRequest.html.twig"));

        $__internal_6f53b10af25872ae79f2916f5e206b9dab4711598a1ab3a1e39005129390d8a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f53b10af25872ae79f2916f5e206b9dab4711598a1ab3a1e39005129390d8a7->enter($__internal_6f53b10af25872ae79f2916f5e206b9dab4711598a1ab3a1e39005129390d8a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Email:contactRequest.html.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_aaae0c4e2b50e50b078a5c9ff35ec24d41472cde9d83d636c40cf284d9911eee->leave($__internal_aaae0c4e2b50e50b078a5c9ff35ec24d41472cde9d83d636c40cf284d9911eee_prof);

        
        $__internal_6f53b10af25872ae79f2916f5e206b9dab4711598a1ab3a1e39005129390d8a7->leave($__internal_6f53b10af25872ae79f2916f5e206b9dab4711598a1ab3a1e39005129390d8a7_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2c12879014e33c1eca967337f1dcec5e9be53b068aa241ee7461a731659a8176 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c12879014e33c1eca967337f1dcec5e9be53b068aa241ee7461a731659a8176->enter($__internal_2c12879014e33c1eca967337f1dcec5e9be53b068aa241ee7461a731659a8176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_347887324c2f869c3843cb27a245c57c1acb0e95f669a108c325bfeea0887c11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_347887324c2f869c3843cb27a245c57c1acb0e95f669a108c325bfeea0887c11->enter($__internal_347887324c2f869c3843cb27a245c57c1acb0e95f669a108c325bfeea0887c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 2
        echo "    Contact request
";
        
        $__internal_347887324c2f869c3843cb27a245c57c1acb0e95f669a108c325bfeea0887c11->leave($__internal_347887324c2f869c3843cb27a245c57c1acb0e95f669a108c325bfeea0887c11_prof);

        
        $__internal_2c12879014e33c1eca967337f1dcec5e9be53b068aa241ee7461a731659a8176->leave($__internal_2c12879014e33c1eca967337f1dcec5e9be53b068aa241ee7461a731659a8176_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_57b5b3a63bd229a701b8917a36492c7b7fe779cca0d95415a0ec5689aa6c7702 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57b5b3a63bd229a701b8917a36492c7b7fe779cca0d95415a0ec5689aa6c7702->enter($__internal_57b5b3a63bd229a701b8917a36492c7b7fe779cca0d95415a0ec5689aa6c7702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0b131751788dc1e1b56b72975f063ebe837021c29dcbf4d730fb5037c2c8a840 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b131751788dc1e1b56b72975f063ebe837021c29dcbf4d730fb5037c2c8a840->enter($__internal_0b131751788dc1e1b56b72975f063ebe837021c29dcbf4d730fb5037c2c8a840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        // line 7
        echo "        Message from: ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "email", array()), "html", null, true);
        echo "
        <br/>
        Content:
        <br/>
        \"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "message", array()), "html", null, true);
        echo "\"
    ";
        
        $__internal_0b131751788dc1e1b56b72975f063ebe837021c29dcbf4d730fb5037c2c8a840->leave($__internal_0b131751788dc1e1b56b72975f063ebe837021c29dcbf4d730fb5037c2c8a840_prof);

        
        $__internal_57b5b3a63bd229a701b8917a36492c7b7fe779cca0d95415a0ec5689aa6c7702->leave($__internal_57b5b3a63bd229a701b8917a36492c7b7fe779cca0d95415a0ec5689aa6c7702_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Email:contactRequest.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  81 => 11,  73 => 7,  71 => 6,  62 => 5,  51 => 2,  42 => 1,  32 => 5,  29 => 4,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block subject %}
    Contact request
{% endblock %}

{% block body %}
    {% autoescape %}
        Message from: {{ data.email }}
        <br/>
        Content:
        <br/>
        \"{{ data.message }}\"
    {% endautoescape %}
{% endblock %}
", "SyliusShopBundle:Email:contactRequest.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Email/contactRequest.html.twig");
    }
}

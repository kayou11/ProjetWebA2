<?php

/* SyliusShopBundle:Email:userRegistration.html.twig */
class __TwigTemplate_b877c52d636b62025da0bbeac536dfdd335214771a110ade0c0bcd66891139c6 extends Twig_Template
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
        $__internal_54046b409c0f488f02a41761e2e8e1ded408f3ccb0e41e5340db6c593cf0397d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54046b409c0f488f02a41761e2e8e1ded408f3ccb0e41e5340db6c593cf0397d->enter($__internal_54046b409c0f488f02a41761e2e8e1ded408f3ccb0e41e5340db6c593cf0397d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Email:userRegistration.html.twig"));

        $__internal_4fc1ae229a409a0359071b0a024a4b56218a1fbda6e9301e7536a378cbe9b151 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fc1ae229a409a0359071b0a024a4b56218a1fbda6e9301e7536a378cbe9b151->enter($__internal_4fc1ae229a409a0359071b0a024a4b56218a1fbda6e9301e7536a378cbe9b151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Email:userRegistration.html.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_54046b409c0f488f02a41761e2e8e1ded408f3ccb0e41e5340db6c593cf0397d->leave($__internal_54046b409c0f488f02a41761e2e8e1ded408f3ccb0e41e5340db6c593cf0397d_prof);

        
        $__internal_4fc1ae229a409a0359071b0a024a4b56218a1fbda6e9301e7536a378cbe9b151->leave($__internal_4fc1ae229a409a0359071b0a024a4b56218a1fbda6e9301e7536a378cbe9b151_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_15e76b0856ccadac291c40cc94f5b15aac33fcf843e508816d683c602a671a8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15e76b0856ccadac291c40cc94f5b15aac33fcf843e508816d683c602a671a8f->enter($__internal_15e76b0856ccadac291c40cc94f5b15aac33fcf843e508816d683c602a671a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_05d5cc03b5dfa4bd2cde61e7561078142f01910f08834a2077d48ba1775d8def = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05d5cc03b5dfa4bd2cde61e7561078142f01910f08834a2077d48ba1775d8def->enter($__internal_05d5cc03b5dfa4bd2cde61e7561078142f01910f08834a2077d48ba1775d8def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 2
        echo "    User registration
";
        
        $__internal_05d5cc03b5dfa4bd2cde61e7561078142f01910f08834a2077d48ba1775d8def->leave($__internal_05d5cc03b5dfa4bd2cde61e7561078142f01910f08834a2077d48ba1775d8def_prof);

        
        $__internal_15e76b0856ccadac291c40cc94f5b15aac33fcf843e508816d683c602a671a8f->leave($__internal_15e76b0856ccadac291c40cc94f5b15aac33fcf843e508816d683c602a671a8f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7358ae71a5daf443c686cabac52b4a6b4a4c0add09b71acce5081bdca7fc107e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7358ae71a5daf443c686cabac52b4a6b4a4c0add09b71acce5081bdca7fc107e->enter($__internal_7358ae71a5daf443c686cabac52b4a6b4a4c0add09b71acce5081bdca7fc107e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_970cbfff3fcf8dfd2685db92a4a9a53267795b606c8ae71b39cb2f3906df1c92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_970cbfff3fcf8dfd2685db92a4a9a53267795b606c8ae71b39cb2f3906df1c92->enter($__internal_970cbfff3fcf8dfd2685db92a4a9a53267795b606c8ae71b39cb2f3906df1c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        // line 7
        echo "        Welcome to our store!
        <br/><br/>
        You have just been registered.
        <br/>
        Thank you ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo ".
    ";
        
        $__internal_970cbfff3fcf8dfd2685db92a4a9a53267795b606c8ae71b39cb2f3906df1c92->leave($__internal_970cbfff3fcf8dfd2685db92a4a9a53267795b606c8ae71b39cb2f3906df1c92_prof);

        
        $__internal_7358ae71a5daf443c686cabac52b4a6b4a4c0add09b71acce5081bdca7fc107e->leave($__internal_7358ae71a5daf443c686cabac52b4a6b4a4c0add09b71acce5081bdca7fc107e_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Email:userRegistration.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  79 => 11,  73 => 7,  71 => 6,  62 => 5,  51 => 2,  42 => 1,  32 => 5,  29 => 4,  27 => 1,);
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
    User registration
{% endblock %}

{% block body %}
    {% autoescape %}
        Welcome to our store!
        <br/><br/>
        You have just been registered.
        <br/>
        Thank you {{ user.username }}.
    {% endautoescape %}
{% endblock %}
", "SyliusShopBundle:Email:userRegistration.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Email/userRegistration.html.twig");
    }
}

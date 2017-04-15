<?php

/* SyliusShopBundle:Email:passwordReset.html.twig */
class __TwigTemplate_07e588f12b2f81fc1d46d86ec968d87024b31e79ca42708bfdee84a707d6eefe extends Twig_Template
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
        $__internal_185a2e5c7fdb803e63176481aeb83e99c7ffd959b5446a12317a87930ad637de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_185a2e5c7fdb803e63176481aeb83e99c7ffd959b5446a12317a87930ad637de->enter($__internal_185a2e5c7fdb803e63176481aeb83e99c7ffd959b5446a12317a87930ad637de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Email:passwordReset.html.twig"));

        $__internal_418b49d91693096653df065abeb25f31ccc6865c1a0fccaf5db5770de2d2ed2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_418b49d91693096653df065abeb25f31ccc6865c1a0fccaf5db5770de2d2ed2b->enter($__internal_418b49d91693096653df065abeb25f31ccc6865c1a0fccaf5db5770de2d2ed2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Email:passwordReset.html.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_185a2e5c7fdb803e63176481aeb83e99c7ffd959b5446a12317a87930ad637de->leave($__internal_185a2e5c7fdb803e63176481aeb83e99c7ffd959b5446a12317a87930ad637de_prof);

        
        $__internal_418b49d91693096653df065abeb25f31ccc6865c1a0fccaf5db5770de2d2ed2b->leave($__internal_418b49d91693096653df065abeb25f31ccc6865c1a0fccaf5db5770de2d2ed2b_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_9655229af9068642d01213b921d9474d86d705f675ba24a7d288cd2dc478504c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9655229af9068642d01213b921d9474d86d705f675ba24a7d288cd2dc478504c->enter($__internal_9655229af9068642d01213b921d9474d86d705f675ba24a7d288cd2dc478504c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_745fb45c28db04af931b0941f9d291478e161ea69702ec448fc53db3d51cd4e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_745fb45c28db04af931b0941f9d291478e161ea69702ec448fc53db3d51cd4e4->enter($__internal_745fb45c28db04af931b0941f9d291478e161ea69702ec448fc53db3d51cd4e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 2
        echo "    Password reset
";
        
        $__internal_745fb45c28db04af931b0941f9d291478e161ea69702ec448fc53db3d51cd4e4->leave($__internal_745fb45c28db04af931b0941f9d291478e161ea69702ec448fc53db3d51cd4e4_prof);

        
        $__internal_9655229af9068642d01213b921d9474d86d705f675ba24a7d288cd2dc478504c->leave($__internal_9655229af9068642d01213b921d9474d86d705f675ba24a7d288cd2dc478504c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_da7724539880481fd3c351d5cd5e6d18f83f9133798a25fb9d6edc78ef4c81f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da7724539880481fd3c351d5cd5e6d18f83f9133798a25fb9d6edc78ef4c81f2->enter($__internal_da7724539880481fd3c351d5cd5e6d18f83f9133798a25fb9d6edc78ef4c81f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_349952a2a67118b92f76b8178c4b0bd9915f40a42e6846f904024529ec42859a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_349952a2a67118b92f76b8178c4b0bd9915f40a42e6846f904024529ec42859a->enter($__internal_349952a2a67118b92f76b8178c4b0bd9915f40a42e6846f904024529ec42859a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $context["url"] = (( !(null === $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "hostname", array()))) ? ((("http://" . $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "hostname", array())) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_password_reset", array("token" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "passwordResetToken", array()))))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sylius_shop_password_reset", array("token" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "passwordResetToken", array())))));
        // line 7
        echo "    ";
        // line 8
        echo "        <h3>Hello ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</h3>

        To reset your password - please visit ";
        // line 10
        echo ($context["url"] ?? $this->getContext($context, "url"));
        echo "
        <br/><br/>
        Regards, the Team.
    ";
        
        $__internal_349952a2a67118b92f76b8178c4b0bd9915f40a42e6846f904024529ec42859a->leave($__internal_349952a2a67118b92f76b8178c4b0bd9915f40a42e6846f904024529ec42859a_prof);

        
        $__internal_da7724539880481fd3c351d5cd5e6d18f83f9133798a25fb9d6edc78ef4c81f2->leave($__internal_da7724539880481fd3c351d5cd5e6d18f83f9133798a25fb9d6edc78ef4c81f2_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Email:passwordReset.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  82 => 10,  76 => 8,  74 => 7,  71 => 6,  62 => 5,  51 => 2,  42 => 1,  32 => 5,  29 => 4,  27 => 1,);
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
    Password reset
{% endblock %}

{% block body %}
    {% set url = channel.hostname is not null ? 'http://' ~ channel.hostname ~ path('sylius_shop_password_reset', { 'token': user.passwordResetToken}) : url('sylius_shop_password_reset', { 'token': user.passwordResetToken}) %}
    {% autoescape %}
        <h3>Hello {{ user.username }}</h3>

        To reset your password - please visit {{ url|raw }}
        <br/><br/>
        Regards, the Team.
    {% endautoescape %}
{% endblock %}
", "SyliusShopBundle:Email:passwordReset.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Email/passwordReset.html.twig");
    }
}

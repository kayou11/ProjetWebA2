<?php

/* SyliusAdminBundle:Customer/Show:_content.html.twig */
class __TwigTemplate_e1b4d35f9508e05d86a427ef8e380a1c77bf74a98e28dbb5dd5ce42c295cd63a extends Twig_Template
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
        $__internal_4845b56d831c949fe03c18d300d4318ac11b0b14103fe006151f2cb4ed859ff4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4845b56d831c949fe03c18d300d4318ac11b0b14103fe006151f2cb4ed859ff4->enter($__internal_4845b56d831c949fe03c18d300d4318ac11b0b14103fe006151f2cb4ed859ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Customer/Show:_content.html.twig"));

        $__internal_132a6da46950254de9ea3838451a42aa33231574ec01c8b301686c5bf337b16c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_132a6da46950254de9ea3838451a42aa33231574ec01c8b301686c5bf337b16c->enter($__internal_132a6da46950254de9ea3838451a42aa33231574ec01c8b301686c5bf337b16c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Customer/Show:_content.html.twig"));

        // line 1
        echo "<div class=\"eight wide column\" id=\"info\">
    <div class=\"ui fluid card\">
        ";
        // line 3
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.customer.show.before_information", array("resource" => ($context["resource"] ?? $this->getContext($context, "resource")))));
        echo "

        <div class=\"content\">
            <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_customer_update", array("id" => $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "id", array()))), "html", null, true);
        echo "\" class=\"header\">
                ";
        // line 7
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["customer"] ?? null), "fullName", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["customer"] ?? null), "fullName", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.guest_customer"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.guest_customer"))), "html", null, true);
        echo "
            </a>
            <div class=\"meta\">
                <span class=\"date\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.customer_since"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "createdAt", array())), "html", null, true);
        echo "</span>
                <br />
                ";
        // line 12
        if ( !(null === $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "group", array()))) {
            // line 13
            echo "                    <span class=\"group\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.group_membership"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "group", array()), "html", null, true);
            echo "</span>
                ";
        }
        // line 15
        echo "            </div>
        </div>
        <div class=\"content\">
            <div id=\"subscribed-to-newsletter\">
                <i class=\"";
        // line 19
        echo (($this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "subscribedToNewsletter", array())) ? ("green checkmark") : ("red remove"));
        echo " icon\"></i>
                ";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.subscribed_to_newsletter"), "html", null, true);
        echo "
            </div>
            ";
        // line 22
        if ( !(null === $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "user", array()))) {
            // line 23
            echo "                ";
            $context["user"] = $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "user", array());
            // line 24
            echo "                <div id=\"verified-email\">
                    <i class=\"";
            // line 25
            echo (($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "verified", array())) ? ("green checkmark") : ("red remove"));
            echo " icon\"></i>
                    ";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.email_verified"), "html", null, true);
            echo "
                </div>
                <br />
                ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute(($context["buttons"] ?? $this->getContext($context, "buttons")), "default", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_impersonate_user", array("username" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "emailCanonical", array()))), 1 => "sylius.ui.impersonate", 2 => "impersonate", 3 => "unhide", 4 => "blue"), "method"), "html", null, true);
            echo "
            ";
        }
        // line 31
        echo "        </div>
        <div class=\"extra content\">
            <a href=\"mailto:";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "email", array()), "html", null, true);
        echo "\">
                <i class=\"envelope icon\"></i> ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "email", array()), "html", null, true);
        echo "
            </a>
            ";
        // line 36
        if ( !(null === $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "phoneNumber", array()))) {
            // line 37
            echo "                <div id=\"phone-number\">
                    <i class=\"phone icon\"></i> ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "phoneNumber", array()), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 41
        echo "        </div>

        ";
        // line 43
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.customer.show.after_information", array("resource" => ($context["resource"] ?? $this->getContext($context, "resource")))));
        echo "
    </div>
</div>
";
        
        $__internal_4845b56d831c949fe03c18d300d4318ac11b0b14103fe006151f2cb4ed859ff4->leave($__internal_4845b56d831c949fe03c18d300d4318ac11b0b14103fe006151f2cb4ed859ff4_prof);

        
        $__internal_132a6da46950254de9ea3838451a42aa33231574ec01c8b301686c5bf337b16c->leave($__internal_132a6da46950254de9ea3838451a42aa33231574ec01c8b301686c5bf337b16c_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Customer/Show:_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 43,  124 => 41,  118 => 38,  115 => 37,  113 => 36,  108 => 34,  104 => 33,  100 => 31,  95 => 29,  89 => 26,  85 => 25,  82 => 24,  79 => 23,  77 => 22,  72 => 20,  68 => 19,  62 => 15,  54 => 13,  52 => 12,  45 => 10,  39 => 7,  35 => 6,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"eight wide column\" id=\"info\">
    <div class=\"ui fluid card\">
        {{ sonata_block_render_event('sylius.admin.customer.show.before_information', {'resource': resource}) }}

        <div class=\"content\">
            <a href=\"{{ path('sylius_admin_customer_update', {'id': customer.id}) }}\" class=\"header\">
                {{ customer.fullName|default('sylius.ui.guest_customer'|trans) }}
            </a>
            <div class=\"meta\">
                <span class=\"date\">{{ 'sylius.ui.customer_since'|trans }} {{ customer.createdAt|date }}</span>
                <br />
                {% if customer.group is not null %}
                    <span class=\"group\">{{ 'sylius.ui.group_membership'|trans }}: {{ customer.group }}</span>
                {% endif %}
            </div>
        </div>
        <div class=\"content\">
            <div id=\"subscribed-to-newsletter\">
                <i class=\"{{ customer.subscribedToNewsletter ? 'green checkmark' : 'red remove' }} icon\"></i>
                {{ 'sylius.ui.subscribed_to_newsletter'|trans }}
            </div>
            {% if customer.user is not null %}
                {% set user = customer.user %}
                <div id=\"verified-email\">
                    <i class=\"{{ user.verified ? 'green checkmark' : 'red remove' }} icon\"></i>
                    {{ 'sylius.ui.email_verified'|trans }}
                </div>
                <br />
                {{ buttons.default(path('sylius_admin_impersonate_user', {'username': user.emailCanonical}), 'sylius.ui.impersonate', 'impersonate', 'unhide', 'blue') }}
            {% endif %}
        </div>
        <div class=\"extra content\">
            <a href=\"mailto:{{ customer.email }}\">
                <i class=\"envelope icon\"></i> {{ customer.email }}
            </a>
            {% if customer.phoneNumber is not null %}
                <div id=\"phone-number\">
                    <i class=\"phone icon\"></i> {{ customer.phoneNumber }}
                </div>
            {% endif %}
        </div>

        {{ sonata_block_render_event('sylius.admin.customer.show.after_information', {'resource': resource}) }}
    </div>
</div>
", "SyliusAdminBundle:Customer/Show:_content.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Customer/Show/_content.html.twig");
    }
}

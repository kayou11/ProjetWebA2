<?php

/* SyliusShopBundle::_footer.html.twig */
class __TwigTemplate_21bc9b416268d91accc35ccddf2ee9d198b710dd52e3306d1371c687528b42e1 extends Twig_Template
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
        $__internal_4f7d82022fd101ce2030206f4c378c9b725057c3ddf79cf492181635b2b577ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f7d82022fd101ce2030206f4c378c9b725057c3ddf79cf492181635b2b577ac->enter($__internal_4f7d82022fd101ce2030206f4c378c9b725057c3ddf79cf492181635b2b577ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle::_footer.html.twig"));

        $__internal_4ec54bf059ad768d321a863996597fc7650e525cc9f33cb34da17dfabad643ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ec54bf059ad768d321a863996597fc7650e525cc9f33cb34da17dfabad643ed->enter($__internal_4ec54bf059ad768d321a863996597fc7650e525cc9f33cb34da17dfabad643ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle::_footer.html.twig"));

        // line 1
        echo "<footer id=\"footer\" class=\"ui inverted vertical footer segment\">
    <div class=\"ui container\">
        <div class=\"ui inverted divided equal height stackable grid\">
            ";
        // line 4
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.layout.before_footer"));
        echo "

            <div class=\"three wide column\">
                <h4 class=\"ui inverted header\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.your_store"), "html", null, true);
        echo "</h4>
                <div class=\"ui inverted link list\">
                    <a href=\"#\" class=\"item\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.about"), "html", null, true);
        echo "</a>
                    <a href=\"#\" class=\"item\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.terms_and_conditions"), "html", null, true);
        echo "</a>
                    <a href=\"#\" class=\"item\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.privacy_policy"), "html", null, true);
        echo "</a>
                </div>
            </div>
            <div class=\"three wide column\">
                <h4 class=\"ui inverted header\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.customer_care"), "html", null, true);
        echo "</h4>
                <div class=\"ui inverted link list\">
                    <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_contact_request");
        echo "\" class=\"item\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.contact_us"), "html", null, true);
        echo "</a>
                    <a href=\"#\" class=\"item\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.faqs"), "html", null, true);
        echo "</a>
                    <a href=\"#\" class=\"item\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.delivery_and_shipping"), "html", null, true);
        echo "</a>
                    <a href=\"#\" class=\"item\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.returns_policy"), "html", null, true);
        echo "</a>
                </div>
            </div>
            <div class=\"eight wide column\">
                <h4 class=\"ui inverted header\">&copy; ";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.your_store"), "html", null, true);
        echo "</h4>
                <p>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.powered_by"), "html", null, true);
        echo " <a href=\"http://sylius.org\" target=\"_blank\" style=\"color: #1abb9c;\">Sylius</a>.</p>
            </div>

            ";
        // line 28
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.layout.after_footer"));
        echo "
        </div>
    </div>
</footer>
";
        
        $__internal_4f7d82022fd101ce2030206f4c378c9b725057c3ddf79cf492181635b2b577ac->leave($__internal_4f7d82022fd101ce2030206f4c378c9b725057c3ddf79cf492181635b2b577ac_prof);

        
        $__internal_4ec54bf059ad768d321a863996597fc7650e525cc9f33cb34da17dfabad643ed->leave($__internal_4ec54bf059ad768d321a863996597fc7650e525cc9f33cb34da17dfabad643ed_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle::_footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 28,  86 => 25,  82 => 24,  75 => 20,  71 => 19,  67 => 18,  61 => 17,  56 => 15,  49 => 11,  45 => 10,  41 => 9,  36 => 7,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<footer id=\"footer\" class=\"ui inverted vertical footer segment\">
    <div class=\"ui container\">
        <div class=\"ui inverted divided equal height stackable grid\">
            {{ sonata_block_render_event('sylius.shop.layout.before_footer') }}

            <div class=\"three wide column\">
                <h4 class=\"ui inverted header\">{{ 'sylius.ui.your_store'|trans }}</h4>
                <div class=\"ui inverted link list\">
                    <a href=\"#\" class=\"item\">{{ 'sylius.ui.about'|trans }}</a>
                    <a href=\"#\" class=\"item\">{{ 'sylius.ui.terms_and_conditions'|trans }}</a>
                    <a href=\"#\" class=\"item\">{{ 'sylius.ui.privacy_policy'|trans }}</a>
                </div>
            </div>
            <div class=\"three wide column\">
                <h4 class=\"ui inverted header\">{{ 'sylius.ui.customer_care'|trans  }}</h4>
                <div class=\"ui inverted link list\">
                    <a href=\"{{ path('sylius_shop_contact_request') }}\" class=\"item\">{{ 'sylius.ui.contact_us'|trans  }}</a>
                    <a href=\"#\" class=\"item\">{{ 'sylius.ui.faqs'|trans  }}</a>
                    <a href=\"#\" class=\"item\">{{ 'sylius.ui.delivery_and_shipping'|trans  }}</a>
                    <a href=\"#\" class=\"item\">{{ 'sylius.ui.returns_policy'|trans  }}</a>
                </div>
            </div>
            <div class=\"eight wide column\">
                <h4 class=\"ui inverted header\">&copy; {{ 'sylius.ui.your_store'|trans }}</h4>
                <p>{{ 'sylius.ui.powered_by'|trans }} <a href=\"http://sylius.org\" target=\"_blank\" style=\"color: #1abb9c;\">Sylius</a>.</p>
            </div>

            {{ sonata_block_render_event('sylius.shop.layout.after_footer') }}
        </div>
    </div>
</footer>
", "SyliusShopBundle::_footer.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/_footer.html.twig");
    }
}

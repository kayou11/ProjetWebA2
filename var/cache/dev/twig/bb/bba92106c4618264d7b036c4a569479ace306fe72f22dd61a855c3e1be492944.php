<?php

/* SyliusShopBundle:ProductReview:_single.html.twig */
class __TwigTemplate_4ff2ae6bd5486e43ea9be26e698a29e035715f656ec4d33fc60ae264d1e38dcf extends Twig_Template
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
        $__internal_1e7067bbf5db2c1d3373d235c5af0a6fe43606b220ddc5aafa755e8cf7e63287 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e7067bbf5db2c1d3373d235c5af0a6fe43606b220ddc5aafa755e8cf7e63287->enter($__internal_1e7067bbf5db2c1d3373d235c5af0a6fe43606b220ddc5aafa755e8cf7e63287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:ProductReview:_single.html.twig"));

        $__internal_cf1e4d2d83f4a8a1371df885d456147e5f618bd82e1b72663129a43c2d1c1023 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf1e4d2d83f4a8a1371df885d456147e5f618bd82e1b72663129a43c2d1c1023->enter($__internal_cf1e4d2d83f4a8a1371df885d456147e5f618bd82e1b72663129a43c2d1c1023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:ProductReview:_single.html.twig"));

        // line 1
        echo "<div class=\"comment\">
    <div class=\"content\">
        <a class=\"author\">";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["review"] ?? $this->getContext($context, "review")), "author", array()), "firstName", array()), "html", null, true);
        echo "</a>
        <div class=\"metadata\">
            <div class=\"date\">";
        // line 5
        echo $this->env->getExtension('Sonata\IntlBundle\Twig\Extension\DateTimeExtension')->formatDate($this->getAttribute(($context["review"] ?? $this->getContext($context, "review")), "createdAt", array()));
        echo "</div>
            <div class=\"rating\">
                <div class=\"ui star rating\" data-rating=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["review"] ?? $this->getContext($context, "review")), "rating", array()), "html", null, true);
        echo "\" data-max-rating=\"5\" style=\"pointer-events: none;\"></div>
            </div>
        </div>
        <div class=\"text\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["review"] ?? $this->getContext($context, "review")), "comment", array()), "html", null, true);
        echo "</div>
    </div>
</div>
";
        
        $__internal_1e7067bbf5db2c1d3373d235c5af0a6fe43606b220ddc5aafa755e8cf7e63287->leave($__internal_1e7067bbf5db2c1d3373d235c5af0a6fe43606b220ddc5aafa755e8cf7e63287_prof);

        
        $__internal_cf1e4d2d83f4a8a1371df885d456147e5f618bd82e1b72663129a43c2d1c1023->leave($__internal_cf1e4d2d83f4a8a1371df885d456147e5f618bd82e1b72663129a43c2d1c1023_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:ProductReview:_single.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 10,  39 => 7,  34 => 5,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"comment\">
    <div class=\"content\">
        <a class=\"author\">{{ review.author.firstName }}</a>
        <div class=\"metadata\">
            <div class=\"date\">{{ review.createdAt|format_date }}</div>
            <div class=\"rating\">
                <div class=\"ui star rating\" data-rating=\"{{ review.rating }}\" data-max-rating=\"5\" style=\"pointer-events: none;\"></div>
            </div>
        </div>
        <div class=\"text\">{{ review.comment }}</div>
    </div>
</div>
", "SyliusShopBundle:ProductReview:_single.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/ProductReview/_single.html.twig");
    }
}

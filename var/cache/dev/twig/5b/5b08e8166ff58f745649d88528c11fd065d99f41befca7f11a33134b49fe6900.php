<?php

/* @SyliusShop/Product/_horizontalList.html.twig */
class __TwigTemplate_d552c1146d1cfa1cd52a8758bc4381cf07a927023eaf951e19b90483c5a65cc2 extends Twig_Template
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
        $__internal_4bd6295c10bad94495c829301f028318b6b1ee4fffe40284feb4c11ab60b4949 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bd6295c10bad94495c829301f028318b6b1ee4fffe40284feb4c11ab60b4949->enter($__internal_4bd6295c10bad94495c829301f028318b6b1ee4fffe40284feb4c11ab60b4949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/_horizontalList.html.twig"));

        $__internal_2c1f7a72c4f3251a662c8cb5851b09ebe3aa63df80f6145f164e9b8cc0b40307 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c1f7a72c4f3251a662c8cb5851b09ebe3aa63df80f6145f164e9b8cc0b40307->enter($__internal_2c1f7a72c4f3251a662c8cb5851b09ebe3aa63df80f6145f164e9b8cc0b40307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/_horizontalList.html.twig"));

        // line 1
        echo "<div class=\"ui four column stackable grid\">
    <div class=\"row\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? $this->getContext($context, "products")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 4
            echo "            <div class=\"column\">
                ";
            // line 5
            $this->loadTemplate("@SyliusShop/Product/_box.html.twig", "@SyliusShop/Product/_horizontalList.html.twig", 5)->display($context);
            // line 6
            echo "            </div>
    ";
            // line 7
            if ((0 == ($this->getAttribute($context["loop"], "index", array()) % 4))) {
                // line 8
                echo "    </div>
    <div class=\"row\">
    ";
            }
            // line 11
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    </div>
</div>
";
        
        $__internal_4bd6295c10bad94495c829301f028318b6b1ee4fffe40284feb4c11ab60b4949->leave($__internal_4bd6295c10bad94495c829301f028318b6b1ee4fffe40284feb4c11ab60b4949_prof);

        
        $__internal_2c1f7a72c4f3251a662c8cb5851b09ebe3aa63df80f6145f164e9b8cc0b40307->leave($__internal_2c1f7a72c4f3251a662c8cb5851b09ebe3aa63df80f6145f164e9b8cc0b40307_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/_horizontalList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 12,  61 => 11,  56 => 8,  54 => 7,  51 => 6,  49 => 5,  46 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui four column stackable grid\">
    <div class=\"row\">
        {% for product in products %}
            <div class=\"column\">
                {% include '@SyliusShop/Product/_box.html.twig' %}
            </div>
    {% if 0 == loop.index % 4 %}
    </div>
    <div class=\"row\">
    {% endif %}
        {% endfor %}
    </div>
</div>
", "@SyliusShop/Product/_horizontalList.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/_horizontalList.html.twig");
    }
}

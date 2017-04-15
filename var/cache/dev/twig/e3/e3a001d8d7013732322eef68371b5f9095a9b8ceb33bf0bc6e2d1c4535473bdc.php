<?php

/* SyliusUiBundle:Macro:breadcrumb.html.twig */
class __TwigTemplate_f198d4023340a14ca0b0c721649404a254f41631fb65c1293837938726af07a1 extends Twig_Template
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
        $__internal_d92d160c4b86aa931db52c27d279e618f855627782d9423d5192d1fb0999e647 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d92d160c4b86aa931db52c27d279e618f855627782d9423d5192d1fb0999e647->enter($__internal_d92d160c4b86aa931db52c27d279e618f855627782d9423d5192d1fb0999e647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Macro:breadcrumb.html.twig"));

        $__internal_a41ca6633479c28fb083e289e02fdab18fd9fd5e41cdae06611302b1636e4415 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a41ca6633479c28fb083e289e02fdab18fd9fd5e41cdae06611302b1636e4415->enter($__internal_a41ca6633479c28fb083e289e02fdab18fd9fd5e41cdae06611302b1636e4415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Macro:breadcrumb.html.twig"));

        
        $__internal_d92d160c4b86aa931db52c27d279e618f855627782d9423d5192d1fb0999e647->leave($__internal_d92d160c4b86aa931db52c27d279e618f855627782d9423d5192d1fb0999e647_prof);

        
        $__internal_a41ca6633479c28fb083e289e02fdab18fd9fd5e41cdae06611302b1636e4415->leave($__internal_a41ca6633479c28fb083e289e02fdab18fd9fd5e41cdae06611302b1636e4415_prof);

    }

    // line 1
    public function getcrumble($__crumbs__ = array(), $__root_path__ = null, $__root_label__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "crumbs" => $__crumbs__,
            "root_path" => $__root_path__,
            "root_label" => $__root_label__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_94a2c08cede7cedfb5f39569c9a889a3479c0af582860a42eef55327cc1262c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_94a2c08cede7cedfb5f39569c9a889a3479c0af582860a42eef55327cc1262c3->enter($__internal_94a2c08cede7cedfb5f39569c9a889a3479c0af582860a42eef55327cc1262c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "crumble"));

            $__internal_191ea8aa75cbe9857295ddf7f5afec372c828e56e17510a52ffbcf9332fb6c92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_191ea8aa75cbe9857295ddf7f5afec372c828e56e17510a52ffbcf9332fb6c92->enter($__internal_191ea8aa75cbe9857295ddf7f5afec372c828e56e17510a52ffbcf9332fb6c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "crumble"));

            // line 2
            echo "    <div class=\"ui breadcrumb\">
        ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["crumbs"] ?? $this->getContext($context, "crumbs")));
            $context['_iterated'] = false;
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
            foreach ($context['_seq'] as $context["_key"] => $context["crumb"]) {
                // line 4
                echo "            ";
                if ($this->getAttribute($context["loop"], "last", array())) {
                    // line 5
                    echo "                <div class=\"active section\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["crumb"], "label", array()), "html", null, true);
                    echo "</div>
            ";
                } elseif ($this->getAttribute(                // line 6
$context["crumb"], "url", array(), "any", true, true)) {
                    // line 7
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["crumb"], "url", array()), "html", null, true);
                    echo "\" class=\"section\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["crumb"], "label", array()), "html", null, true);
                    echo "</a>
                <i class=\"right chevron icon divider\"></i>
            ";
                } else {
                    // line 10
                    echo "                <div class=\"section\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["crumb"], "label", array()), "html", null, true);
                    echo "</div>
                <i class=\"right chevron icon divider\"></i>
            ";
                }
                // line 13
                echo "        ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            if (!$context['_iterated']) {
                // line 14
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, ((array_key_exists("root_url", $context)) ? (_twig_default_filter(($context["root_url"] ?? $this->getContext($context, "root_url")), "/")) : ("/")), "html", null, true);
                echo "\" class=\"section\">";
                echo twig_escape_filter($this->env, ((array_key_exists("root_label", $context)) ? (_twig_default_filter(($context["root_label"] ?? $this->getContext($context, "root_label")), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.root"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.root"))), "html", null, true);
                echo "</a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['crumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "    </div>
";
            
            $__internal_191ea8aa75cbe9857295ddf7f5afec372c828e56e17510a52ffbcf9332fb6c92->leave($__internal_191ea8aa75cbe9857295ddf7f5afec372c828e56e17510a52ffbcf9332fb6c92_prof);

            
            $__internal_94a2c08cede7cedfb5f39569c9a889a3479c0af582860a42eef55327cc1262c3->leave($__internal_94a2c08cede7cedfb5f39569c9a889a3479c0af582860a42eef55327cc1262c3_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Macro:breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 16,  113 => 14,  100 => 13,  93 => 10,  84 => 7,  82 => 6,  77 => 5,  74 => 4,  56 => 3,  53 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro crumble(crumbs = {}, root_path, root_label) %}
    <div class=\"ui breadcrumb\">
        {% for crumb in crumbs %}
            {% if loop.last %}
                <div class=\"active section\">{{ crumb.label }}</div>
            {% elseif crumb.url is defined %}
                <a href=\"{{ crumb.url }}\" class=\"section\">{{ crumb.label }}</a>
                <i class=\"right chevron icon divider\"></i>
            {% else %}
                <div class=\"section\">{{ crumb.label }}</div>
                <i class=\"right chevron icon divider\"></i>
            {% endif %}
        {% else %}
            <a href=\"{{ root_url|default('/') }}\" class=\"section\">{{ root_label|default('sylius.ui.root'|trans) }}</a>
        {% endfor %}
    </div>
{% endmacro %}
", "SyliusUiBundle:Macro:breadcrumb.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Macro/breadcrumb.html.twig");
    }
}

<?php

/* SyliusUiBundle:Grid/Action:archive.html.twig */
class __TwigTemplate_e31d67ea1aa73e0724b6583a2ef1bbbd63b4926a93e73418da57fb48f085c0ff extends Twig_Template
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
        $__internal_37741e4c5178d7428a4c5dc724637002ab2e9d60681489f36de1272c043d1d85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37741e4c5178d7428a4c5dc724637002ab2e9d60681489f36de1272c043d1d85->enter($__internal_37741e4c5178d7428a4c5dc724637002ab2e9d60681489f36de1272c043d1d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Action:archive.html.twig"));

        $__internal_4a2a43b046608db88ec7f3350b9993d37e41d151ade325e0ade79ded59d2a685 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a2a43b046608db88ec7f3350b9993d37e41d151ade325e0ade79ded59d2a685->enter($__internal_4a2a43b046608db88ec7f3350b9993d37e41d151ade325e0ade79ded59d2a685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Action:archive.html.twig"));

        // line 1
        $context["path"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "requestConfiguration", array()), "getRouteName", array(0 => "archive"), "method"), array("id" => $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "id", array())));
        // line 2
        echo "
<form action=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["path"] ?? $this->getContext($context, "path")), "html", null, true);
        echo "\" method=\"POST\" name=\"sylius_archivable\">
    <input type=\"hidden\" name=\"_method\" value=\"PATCH\">
    <input type=\"hidden\" name=\"sylius_archivable[_token]\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("sylius_archivable"), "html", null, true);
        echo "\" />

    <button class=\"ui brown labeled icon button\" type=\"submit\" data-requires-confirmation>
        <i class=\"";
        // line 8
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["action"] ?? null), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["action"] ?? null), "icon", array()), "archive")) : ("archive")), "html", null, true);
        echo " icon\"></i>
        ";
        // line 9
        if ( !(null === $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "archivedAt", array()))) {
            // line 10
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($this->getAttribute(($context["action"] ?? null), "options", array(), "any", false, true), "restore_label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["action"] ?? null), "options", array(), "any", false, true), "restore_label", array()), "sylius.ui.restore")) : ("sylius.ui.restore"))), "html", null, true);
            echo "
        ";
        } else {
            // line 12
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(($context["action"] ?? null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["action"] ?? null), "label", array()), "sylius.ui.archive")) : ("sylius.ui.archive"))), "html", null, true);
            echo "
        ";
        }
        // line 14
        echo "    </button>
</form>
";
        
        $__internal_37741e4c5178d7428a4c5dc724637002ab2e9d60681489f36de1272c043d1d85->leave($__internal_37741e4c5178d7428a4c5dc724637002ab2e9d60681489f36de1272c043d1d85_prof);

        
        $__internal_4a2a43b046608db88ec7f3350b9993d37e41d151ade325e0ade79ded59d2a685->leave($__internal_4a2a43b046608db88ec7f3350b9993d37e41d151ade325e0ade79ded59d2a685_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Grid/Action:archive.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 14,  53 => 12,  47 => 10,  45 => 9,  41 => 8,  35 => 5,  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set path = path(grid.requestConfiguration.getRouteName('archive'), {'id': data.id}) %}

<form action=\"{{ path }}\" method=\"POST\" name=\"sylius_archivable\">
    <input type=\"hidden\" name=\"_method\" value=\"PATCH\">
    <input type=\"hidden\" name=\"sylius_archivable[_token]\" value=\"{{ csrf_token('sylius_archivable') }}\" />

    <button class=\"ui brown labeled icon button\" type=\"submit\" data-requires-confirmation>
        <i class=\"{{ action.icon|default('archive') }} icon\"></i>
        {% if data.archivedAt is not null %}
            {{ action.options.restore_label|default('sylius.ui.restore')|trans }}
        {% else %}
            {{ action.label|default('sylius.ui.archive')|trans }}
        {% endif %}
    </button>
</form>
", "SyliusUiBundle:Grid/Action:archive.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Grid/Action/archive.html.twig");
    }
}

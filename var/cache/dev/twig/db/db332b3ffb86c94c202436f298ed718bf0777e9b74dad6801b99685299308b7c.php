<?php

/* SyliusAdminBundle:Macro:translationForm.html.twig */
class __TwigTemplate_c5d692fb3c2f7a655459f34ef4f8c6faa48d672cef83e970d18e8b1025704574 extends Twig_Template
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
        $__internal_aa566a6d74e2de27c19061fa028694c9e877a7f1340b3b4f96ae3cb6a5bfb5b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa566a6d74e2de27c19061fa028694c9e877a7f1340b3b4f96ae3cb6a5bfb5b1->enter($__internal_aa566a6d74e2de27c19061fa028694c9e877a7f1340b3b4f96ae3cb6a5bfb5b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Macro:translationForm.html.twig"));

        $__internal_eedaf79eadf163825a7a959ae41f6c8c03decbe7366f9d1d604a40bd44f7cf97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eedaf79eadf163825a7a959ae41f6c8c03decbe7366f9d1d604a40bd44f7cf97->enter($__internal_eedaf79eadf163825a7a959ae41f6c8c03decbe7366f9d1d604a40bd44f7cf97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Macro:translationForm.html.twig"));

        // line 20
        echo "
";
        
        $__internal_aa566a6d74e2de27c19061fa028694c9e877a7f1340b3b4f96ae3cb6a5bfb5b1->leave($__internal_aa566a6d74e2de27c19061fa028694c9e877a7f1340b3b4f96ae3cb6a5bfb5b1_prof);

        
        $__internal_eedaf79eadf163825a7a959ae41f6c8c03decbe7366f9d1d604a40bd44f7cf97->leave($__internal_eedaf79eadf163825a7a959ae41f6c8c03decbe7366f9d1d604a40bd44f7cf97_prof);

    }

    // line 1
    public function gettranslationForm($__translations__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "translations" => $__translations__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_3aae35e4e055c693a18e1259594555db2f77ad63d067f5872c02bd793283439a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_3aae35e4e055c693a18e1259594555db2f77ad63d067f5872c02bd793283439a->enter($__internal_3aae35e4e055c693a18e1259594555db2f77ad63d067f5872c02bd793283439a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "translationForm"));

            $__internal_6a252366110afe971772e193ee2879700767551c98fb3620a7af02a3a37806ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_6a252366110afe971772e193ee2879700767551c98fb3620a7af02a3a37806ed->enter($__internal_6a252366110afe971772e193ee2879700767551c98fb3620a7af02a3a37806ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "translationForm"));

            // line 2
            echo "    ";
            $context["flags"] = $this->loadTemplate("@SyliusUi/Macro/flags.html.twig", "SyliusAdminBundle:Macro:translationForm.html.twig", 2);
            // line 3
            echo "
    <div class=\"ui styled fluid accordion\">
        ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["translations"] ?? $this->getContext($context, "translations")));
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
            foreach ($context['_seq'] as $context["locale"] => $context["translationForm"]) {
                // line 6
                echo "            <div data-locale=\"";
                echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
                echo "\">
                <div class=\"title";
                // line 7
                if ((0 == $this->getAttribute($context["loop"], "index0", array()))) {
                    echo " active";
                }
                echo "\">
                    <i class=\"dropdown icon\"></i>
                    ";
                // line 9
                echo $context["flags"]->getfromLocaleCode($context["locale"]);
                echo " ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sylius_locale_name')->getCallable(), array($context["locale"])), "html", null, true);
                echo "
                </div>
                <div class=\"ui content";
                // line 11
                if ((0 == $this->getAttribute($context["loop"], "index0", array()))) {
                    echo " active";
                }
                echo "\">
                    ";
                // line 12
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["translationForm"]);
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 13
                    echo "                        ";
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["field"], 'row');
                    echo "
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 15
                echo "                </div>
            </div>
        ";
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
            unset($context['_seq'], $context['_iterated'], $context['locale'], $context['translationForm'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "    </div>
";
            
            $__internal_6a252366110afe971772e193ee2879700767551c98fb3620a7af02a3a37806ed->leave($__internal_6a252366110afe971772e193ee2879700767551c98fb3620a7af02a3a37806ed_prof);

            
            $__internal_3aae35e4e055c693a18e1259594555db2f77ad63d067f5872c02bd793283439a->leave($__internal_3aae35e4e055c693a18e1259594555db2f77ad63d067f5872c02bd793283439a_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 21
    public function gettranslationFormWithSlug($__translations__ = null, $__slugFieldTemplate__ = null, $__resource__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "translations" => $__translations__,
            "slugFieldTemplate" => $__slugFieldTemplate__,
            "resource" => $__resource__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_f56bc3feb017c2492892d023896f27deb5b1d0d27b597aa6267bdc456b375826 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_f56bc3feb017c2492892d023896f27deb5b1d0d27b597aa6267bdc456b375826->enter($__internal_f56bc3feb017c2492892d023896f27deb5b1d0d27b597aa6267bdc456b375826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "translationFormWithSlug"));

            $__internal_a723eee5012725b8e48f792c7bb0268fc831a957ba8661883b542827f77c64c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_a723eee5012725b8e48f792c7bb0268fc831a957ba8661883b542827f77c64c3->enter($__internal_a723eee5012725b8e48f792c7bb0268fc831a957ba8661883b542827f77c64c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "translationFormWithSlug"));

            // line 22
            echo "    ";
            $context["flags"] = $this->loadTemplate("@SyliusUi/Macro/flags.html.twig", "SyliusAdminBundle:Macro:translationForm.html.twig", 22);
            // line 23
            echo "
    <div class=\"ui styled fluid accordion\">
        ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["translations"] ?? $this->getContext($context, "translations")));
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
            foreach ($context['_seq'] as $context["locale"] => $context["translationForm"]) {
                // line 26
                echo "            <div data-locale=\"";
                echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
                echo "\">
                <div class=\"title";
                // line 27
                if ((0 == $this->getAttribute($context["loop"], "index0", array()))) {
                    echo " active";
                }
                echo "\">
                    <i class=\"dropdown icon\"></i>
                    ";
                // line 29
                echo $context["flags"]->getfromLocaleCode($context["locale"]);
                echo " ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sylius_locale_name')->getCallable(), array($context["locale"])), "html", null, true);
                echo "
                </div>
                <div class=\"ui content";
                // line 31
                if ((0 == $this->getAttribute($context["loop"], "index0", array()))) {
                    echo " active";
                }
                echo "\">
                    ";
                // line 32
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["translationForm"]);
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
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 33
                    echo "                        ";
                    if (($this->getAttribute($this->getAttribute($context["field"], "vars", array()), "name", array()) != "slug")) {
                        // line 34
                        echo "                            ";
                        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["field"], 'row');
                        echo "
                        ";
                    } else {
                        // line 36
                        echo "                            ";
                        $this->loadTemplate(($context["slugFieldTemplate"] ?? $this->getContext($context, "slugFieldTemplate")), "SyliusAdminBundle:Macro:translationForm.html.twig", 36)->display(array_merge($context, array("slugField" => $this->getAttribute($context["translationForm"], "slug", array()), "resource" => ($context["resource"] ?? $this->getContext($context, "resource")))));
                        // line 37
                        echo "                        ";
                    }
                    // line 38
                    echo "                    ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "                </div>
            </div>
        ";
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
            unset($context['_seq'], $context['_iterated'], $context['locale'], $context['translationForm'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "    </div>
";
            
            $__internal_a723eee5012725b8e48f792c7bb0268fc831a957ba8661883b542827f77c64c3->leave($__internal_a723eee5012725b8e48f792c7bb0268fc831a957ba8661883b542827f77c64c3_prof);

            
            $__internal_f56bc3feb017c2492892d023896f27deb5b1d0d27b597aa6267bdc456b375826->leave($__internal_f56bc3feb017c2492892d023896f27deb5b1d0d27b597aa6267bdc456b375826_prof);

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
        return "SyliusAdminBundle:Macro:translationForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 42,  269 => 39,  255 => 38,  252 => 37,  249 => 36,  243 => 34,  240 => 33,  223 => 32,  217 => 31,  210 => 29,  203 => 27,  198 => 26,  181 => 25,  177 => 23,  174 => 22,  154 => 21,  132 => 18,  116 => 15,  107 => 13,  103 => 12,  97 => 11,  90 => 9,  83 => 7,  78 => 6,  61 => 5,  57 => 3,  54 => 2,  36 => 1,  25 => 20,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro translationForm(translations) %}
    {% import '@SyliusUi/Macro/flags.html.twig' as flags %}

    <div class=\"ui styled fluid accordion\">
        {% for locale, translationForm in translations %}
            <div data-locale=\"{{ locale }}\">
                <div class=\"title{% if 0 == loop.index0 %} active{% endif %}\">
                    <i class=\"dropdown icon\"></i>
                    {{ flags.fromLocaleCode(locale) }} {{ locale|sylius_locale_name }}
                </div>
                <div class=\"ui content{% if 0 == loop.index0 %} active{% endif %}\">
                    {% for field in translationForm %}
                        {{ form_row(field) }}
                    {% endfor %}
                </div>
            </div>
        {% endfor %}
    </div>
{% endmacro %}

{% macro translationFormWithSlug(translations, slugFieldTemplate, resource) %}
    {% import '@SyliusUi/Macro/flags.html.twig' as flags %}

    <div class=\"ui styled fluid accordion\">
        {% for locale, translationForm in translations %}
            <div data-locale=\"{{ locale }}\">
                <div class=\"title{% if 0 == loop.index0 %} active{% endif %}\">
                    <i class=\"dropdown icon\"></i>
                    {{ flags.fromLocaleCode(locale) }} {{ locale|sylius_locale_name }}
                </div>
                <div class=\"ui content{% if 0 == loop.index0 %} active{% endif %}\">
                    {% for field in translationForm %}
                        {% if field.vars.name != 'slug' %}
                            {{ form_row(field) }}
                        {% else %}
                            {% include slugFieldTemplate with { 'slugField': translationForm.slug, 'resource': resource } %}
                        {% endif %}
                    {% endfor %}
                </div>
            </div>
        {% endfor %}
    </div>
{% endmacro %}
", "SyliusAdminBundle:Macro:translationForm.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Macro/translationForm.html.twig");
    }
}

<?php

/* SonataAdminBundle:Block:block_admin_list.html.twig */
class __TwigTemplate_27ce0fdc23eb3a12d0a2e754fc3a24c2bb630e72f912fca0536366751e922302 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_block"]) || array_key_exists("sonata_block", $context) ? $context["sonata_block"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_block" does not exist.', 12, $this->getSourceContext()); })()), "templates", array()), "block_base", array()), "SonataAdminBundle:Block:block_admin_list.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c78b6e5273c5b6edb14c37b1564a0dbe9bc610f5374f8c2433e06fb43cfe3cab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c78b6e5273c5b6edb14c37b1564a0dbe9bc610f5374f8c2433e06fb43cfe3cab->enter($__internal_c78b6e5273c5b6edb14c37b1564a0dbe9bc610f5374f8c2433e06fb43cfe3cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Block:block_admin_list.html.twig"));

        $__internal_ff77a3be3e32d5371267e9181bcf46d78a91b005d608763a687e63c22f0d4afb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff77a3be3e32d5371267e9181bcf46d78a91b005d608763a687e63c22f0d4afb->enter($__internal_ff77a3be3e32d5371267e9181bcf46d78a91b005d608763a687e63c22f0d4afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Block:block_admin_list.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c78b6e5273c5b6edb14c37b1564a0dbe9bc610f5374f8c2433e06fb43cfe3cab->leave($__internal_c78b6e5273c5b6edb14c37b1564a0dbe9bc610f5374f8c2433e06fb43cfe3cab_prof);

        
        $__internal_ff77a3be3e32d5371267e9181bcf46d78a91b005d608763a687e63c22f0d4afb->leave($__internal_ff77a3be3e32d5371267e9181bcf46d78a91b005d608763a687e63c22f0d4afb_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_51f4d274bb81e5f368e09dda3a338d54321eb2c61351ac84b1ce0bd81769380d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51f4d274bb81e5f368e09dda3a338d54321eb2c61351ac84b1ce0bd81769380d->enter($__internal_51f4d274bb81e5f368e09dda3a338d54321eb2c61351ac84b1ce0bd81769380d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_b798c643923e6ce8278218dff878b31ebfd3e3eed124b61df7286f9327e73984 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b798c643923e6ce8278218dff878b31ebfd3e3eed124b61df7286f9327e73984->enter($__internal_b798c643923e6ce8278218dff878b31ebfd3e3eed124b61df7286f9327e73984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new Twig_Error_Runtime('Variable "groups" does not exist.', 15, $this->getSourceContext()); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 16
            echo "        ";
            $context["display"] = (twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "roles", array())) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN"));
            // line 17
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                if ( !(isset($context["display"]) || array_key_exists("display", $context) ? $context["display"] : (function () { throw new Twig_Error_Runtime('Variable "display" does not exist.', 17, $this->getSourceContext()); })())) {
                    // line 18
                    echo "            ";
                    $context["display"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($context["role"]);
                    // line 19
                    echo "        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "
        ";
            // line 21
            if ((isset($context["display"]) || array_key_exists("display", $context) ? $context["display"] : (function () { throw new Twig_Error_Runtime('Variable "display" does not exist.', 21, $this->getSourceContext()); })())) {
                // line 22
                echo "            <div class=\"box\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "label", array()), array(), twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "label_catalogue", array())), "html", null, true);
                echo "</h3>
                </div>
                <div class=\"box-body\">
                    <table class=\"table table-hover\">
                        <tbody>
                            ";
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "items", array()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                    // line 30
                    echo "                                ";
                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["admin"], "dashboardActions", array())) > 0)) {
                        // line 31
                        echo "                                            <tr>
                                                <td class=\"sonata-ba-list-label\" width=\"40%\">
                                                    ";
                        // line 33
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["admin"], "label", array()), array(), twig_get_attribute($this->env, $this->getSourceContext(), $context["admin"], "translationdomain", array())), "html", null, true);
                        echo "
                                                </td>
                                                <td>
                                                    <div class=\"btn-group\">
                                                        ";
                        // line 37
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["admin"], "dashboardActions", array()));
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
                        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                            // line 38
                            echo "                                                            ";
                            $this->loadTemplate(((twig_get_attribute($this->env, $this->getSourceContext(), $context["action"], "template", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["action"], "template", array()), "SonataAdminBundle:CRUD:dashboard__action.html.twig")) : ("SonataAdminBundle:CRUD:dashboard__action.html.twig")), "SonataAdminBundle:Block:block_admin_list.html.twig", 38)->display(array_merge($context, array("action" => $context["action"])));
                            // line 39
                            echo "                                                        ";
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
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 40
                        echo "                                                    </div>
                                                </td>
                                            </tr>
                                ";
                    }
                    // line 44
                    echo "                            ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "                        </tbody>
                    </table>
                </div>
            </div>
        ";
            }
            // line 50
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_b798c643923e6ce8278218dff878b31ebfd3e3eed124b61df7286f9327e73984->leave($__internal_b798c643923e6ce8278218dff878b31ebfd3e3eed124b61df7286f9327e73984_prof);

        
        $__internal_51f4d274bb81e5f368e09dda3a338d54321eb2c61351ac84b1ce0bd81769380d->leave($__internal_51f4d274bb81e5f368e09dda3a338d54321eb2c61351ac84b1ce0bd81769380d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Block:block_admin_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 50,  187 => 45,  173 => 44,  167 => 40,  153 => 39,  150 => 38,  133 => 37,  126 => 33,  122 => 31,  119 => 30,  102 => 29,  94 => 24,  90 => 22,  88 => 21,  85 => 20,  78 => 19,  75 => 18,  69 => 17,  66 => 16,  48 => 15,  39 => 14,  18 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends sonata_block.templates.block_base %}

{% block block %}
    {% for group in groups %}
        {% set display = (group.roles is empty or is_granted('ROLE_SUPER_ADMIN') ) %}
        {% for role in group.roles if not display %}
            {% set display = is_granted(role)%}
        {% endfor %}

        {% if display %}
            <div class=\"box\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">{{ group.label|trans({}, group.label_catalogue) }}</h3>
                </div>
                <div class=\"box-body\">
                    <table class=\"table table-hover\">
                        <tbody>
                            {% for admin in group.items %}
                                {% if admin.dashboardActions|length > 0 %}
                                            <tr>
                                                <td class=\"sonata-ba-list-label\" width=\"40%\">
                                                    {{ admin.label|trans({}, admin.translationdomain) }}
                                                </td>
                                                <td>
                                                    <div class=\"btn-group\">
                                                        {% for action in admin.dashboardActions %}
                                                            {% include action.template|default('SonataAdminBundle:CRUD:dashboard__action.html.twig') with {'action': action} %}
                                                        {% endfor %}
                                                    </div>
                                                </td>
                                            </tr>
                                {% endif %}
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        {% endif %}
    {% endfor %}
{% endblock %}
", "SonataAdminBundle:Block:block_admin_list.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/Block/block_admin_list.html.twig");
    }
}

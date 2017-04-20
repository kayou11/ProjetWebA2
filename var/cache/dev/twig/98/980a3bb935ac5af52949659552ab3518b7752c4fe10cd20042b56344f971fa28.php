<?php

/* SonataAdminBundle:Menu:sonata_menu.html.twig */
class __TwigTemplate_0bdde8d95c80f1a8cad2b0cd8d57b1a4a5212b8e5c79a51f9406812a1bfc23d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "SonataAdminBundle:Menu:sonata_menu.html.twig", 1);
        $this->blocks = array(
            'root' => array($this, 'block_root'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_98dd0bfe04963a7e2046039629a93a3a736ac55b599ac0b81072bec862b60a65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98dd0bfe04963a7e2046039629a93a3a736ac55b599ac0b81072bec862b60a65->enter($__internal_98dd0bfe04963a7e2046039629a93a3a736ac55b599ac0b81072bec862b60a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Menu:sonata_menu.html.twig"));

        $__internal_21a394986cfd273e94562d77b4c93a3769b3a3b107b5e5a867ea42e8115089cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21a394986cfd273e94562d77b4c93a3769b3a3b107b5e5a867ea42e8115089cc->enter($__internal_21a394986cfd273e94562d77b4c93a3769b3a3b107b5e5a867ea42e8115089cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Menu:sonata_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98dd0bfe04963a7e2046039629a93a3a736ac55b599ac0b81072bec862b60a65->leave($__internal_98dd0bfe04963a7e2046039629a93a3a736ac55b599ac0b81072bec862b60a65_prof);

        
        $__internal_21a394986cfd273e94562d77b4c93a3769b3a3b107b5e5a867ea42e8115089cc->leave($__internal_21a394986cfd273e94562d77b4c93a3769b3a3b107b5e5a867ea42e8115089cc_prof);

    }

    // line 3
    public function block_root($context, array $blocks = array())
    {
        $__internal_5f3627d840d748996a9097e99d8d791594975a128e2ae971bdc79531c734ca30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f3627d840d748996a9097e99d8d791594975a128e2ae971bdc79531c734ca30->enter($__internal_5f3627d840d748996a9097e99d8d791594975a128e2ae971bdc79531c734ca30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        $__internal_7758493bcf26d5b6fce6c0726cdad24c17d1a44b8cbf18f7278b8d34d1320ba1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7758493bcf26d5b6fce6c0726cdad24c17d1a44b8cbf18f7278b8d34d1320ba1->enter($__internal_7758493bcf26d5b6fce6c0726cdad24c17d1a44b8cbf18f7278b8d34d1320ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 4
        $context["listAttributes"] = twig_array_merge(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 4, $this->getSourceContext()); })()), "childrenAttributes", array()), array("class" => "sidebar-menu"));
        // line 5
        $context["request"] = ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 5, $this->getSourceContext()); })()), "extra", array(0 => "request"), "method")) ? (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 5, $this->getSourceContext()); })()), "extra", array(0 => "request"), "method")) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 5, $this->getSourceContext()); })()), "request", array())));
        // line 6
        echo "    ";
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_7758493bcf26d5b6fce6c0726cdad24c17d1a44b8cbf18f7278b8d34d1320ba1->leave($__internal_7758493bcf26d5b6fce6c0726cdad24c17d1a44b8cbf18f7278b8d34d1320ba1_prof);

        
        $__internal_5f3627d840d748996a9097e99d8d791594975a128e2ae971bdc79531c734ca30->leave($__internal_5f3627d840d748996a9097e99d8d791594975a128e2ae971bdc79531c734ca30_prof);

    }

    // line 9
    public function block_item($context, array $blocks = array())
    {
        $__internal_ff318594a3f0fa86b7c91e54e9d6c9e186d24122633770350775ab8d9420b7c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff318594a3f0fa86b7c91e54e9d6c9e186d24122633770350775ab8d9420b7c0->enter($__internal_ff318594a3f0fa86b7c91e54e9d6c9e186d24122633770350775ab8d9420b7c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_ef96a2c00feb482eb5df273ee02298f6a23e414b3f251c72b96a31fbd386f444 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef96a2c00feb482eb5df273ee02298f6a23e414b3f251c72b96a31fbd386f444->enter($__internal_ef96a2c00feb482eb5df273ee02298f6a23e414b3f251c72b96a31fbd386f444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 10
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 10, $this->getSourceContext()); })()), "displayed", array())) {
            // line 12
            $context["display"] = (twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 12, $this->getSourceContext()); })()), "extra", array(0 => "roles"), "method")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN"));
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 13, $this->getSourceContext()); })()), "extra", array(0 => "roles"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                if ( !(isset($context["display"]) || array_key_exists("display", $context) ? $context["display"] : (function () { throw new Twig_Error_Runtime('Variable "display" does not exist.', 13, $this->getSourceContext()); })())) {
                    // line 14
                    $context["display"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($context["role"]);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 18
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 18, $this->getSourceContext()); })()), "displayed", array()) && ((array_key_exists("display", $context)) ? (_twig_default_filter((isset($context["display"]) || array_key_exists("display", $context) ? $context["display"] : (function () { throw new Twig_Error_Runtime('Variable "display" does not exist.', 18, $this->getSourceContext()); })()))) : ("")))) {
            // line 19
            echo "        ";
            $context["options"] = twig_array_merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 19, $this->getSourceContext()); })()), array("branch_class" => "treeview", "currentClass" => "active"));
            // line 20
            twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 20, $this->getSourceContext()); })()), "setChildrenAttribute", array(0 => "class", 1 => twig_trim_filter((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 20, $this->getSourceContext()); })()), "childrenAttribute", array(0 => "class"), "method") . " active"))), "method");
            // line 21
            twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 21, $this->getSourceContext()); })()), "setChildrenAttribute", array(0 => "class", 1 => twig_trim_filter((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 21, $this->getSourceContext()); })()), "childrenAttribute", array(0 => "class"), "method") . " treeview-menu"))), "method");
            // line 22
            echo "        ";
            $this->displayParentBlock("item", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_ef96a2c00feb482eb5df273ee02298f6a23e414b3f251c72b96a31fbd386f444->leave($__internal_ef96a2c00feb482eb5df273ee02298f6a23e414b3f251c72b96a31fbd386f444_prof);

        
        $__internal_ff318594a3f0fa86b7c91e54e9d6c9e186d24122633770350775ab8d9420b7c0->leave($__internal_ff318594a3f0fa86b7c91e54e9d6c9e186d24122633770350775ab8d9420b7c0_prof);

    }

    // line 26
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_9049e078b8f8e76149f4391eb39778d934848e346a2124280f353700f14296f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9049e078b8f8e76149f4391eb39778d934848e346a2124280f353700f14296f9->enter($__internal_9049e078b8f8e76149f4391eb39778d934848e346a2124280f353700f14296f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_d6ea9aa0c5b3e63e28b973ee0d97c53a86edf5b8efaae5bd0f35b66ef3aace1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6ea9aa0c5b3e63e28b973ee0d97c53a86edf5b8efaae5bd0f35b66ef3aace1e->enter($__internal_d6ea9aa0c5b3e63e28b973ee0d97c53a86edf5b8efaae5bd0f35b66ef3aace1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        // line 27
        echo "    ";
        ob_start();
        // line 28
        echo "        ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "extra", array(0 => "on_top"), "method", true, true) &&  !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 28, $this->getSourceContext()); })()), "extra", array(0 => "on_top"), "method"))) {
            // line 29
            echo "            ";
            $context["translation_domain"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 29, $this->getSourceContext()); })()), "extra", array(0 => "translation_domain", 1 => "messages"), "method");
            // line 30
            echo "            ";
            $context["icon"] = ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "attribute", array(0 => "icon"), "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "attribute", array(0 => "icon"), "method"), (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 30, $this->getSourceContext()); })()), "level", array()) > 1)) ? ("<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>") : ("")))) : ((((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 30, $this->getSourceContext()); })()), "level", array()) > 1)) ? ("<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>") : (""))));
            // line 31
            echo "        ";
        } else {
            // line 32
            echo "            ";
            $context["icon"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 32, $this->getSourceContext()); })()), "extra", array(0 => "icon"), "method");
            // line 33
            echo "        ";
        }
        // line 34
        echo "        ";
        $context["is_link"] = true;
        // line 35
        echo "        ";
        $this->displayParentBlock("linkElement", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_d6ea9aa0c5b3e63e28b973ee0d97c53a86edf5b8efaae5bd0f35b66ef3aace1e->leave($__internal_d6ea9aa0c5b3e63e28b973ee0d97c53a86edf5b8efaae5bd0f35b66ef3aace1e_prof);

        
        $__internal_9049e078b8f8e76149f4391eb39778d934848e346a2124280f353700f14296f9->leave($__internal_9049e078b8f8e76149f4391eb39778d934848e346a2124280f353700f14296f9_prof);

    }

    // line 39
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_51e00bcc632cedccaf443a2e749760dc4388fecc8eb9e7f8af24d43fdc476e0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51e00bcc632cedccaf443a2e749760dc4388fecc8eb9e7f8af24d43fdc476e0b->enter($__internal_51e00bcc632cedccaf443a2e749760dc4388fecc8eb9e7f8af24d43fdc476e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_e4059713f05cefcfb289a15f910503b5f77b881e2ae268a7ac3ea201fc892c9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4059713f05cefcfb289a15f910503b5f77b881e2ae268a7ac3ea201fc892c9b->enter($__internal_e4059713f05cefcfb289a15f910503b5f77b881e2ae268a7ac3ea201fc892c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        // line 40
        echo "    ";
        ob_start();
        // line 41
        echo "        <a href=\"#\">
            ";
        // line 42
        $context["translation_domain"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 42, $this->getSourceContext()); })()), "extra", array(0 => "label_catalogue"), "method");
        // line 43
        echo "            ";
        $context["icon"] = ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "extra", array(0 => "icon"), "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "extra", array(0 => "icon"), "method"), "")) : (""));
        // line 44
        echo "            ";
        echo (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new Twig_Error_Runtime('Variable "icon" does not exist.', 44, $this->getSourceContext()); })());
        echo "
            ";
        // line 45
        $this->displayParentBlock("spanElement", $context, $blocks);
        // line 46
        if (( !twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "extra", array(0 => "keep_open"), "method", true, true) ||  !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 46, $this->getSourceContext()); })()), "extra", array(0 => "keep_open"), "method"))) {
            // line 47
            echo "<span class=\"pull-right-container\"><i class=\"fa pull-right fa-angle-left\"></i></span>";
        }
        // line 49
        echo "</a>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_e4059713f05cefcfb289a15f910503b5f77b881e2ae268a7ac3ea201fc892c9b->leave($__internal_e4059713f05cefcfb289a15f910503b5f77b881e2ae268a7ac3ea201fc892c9b_prof);

        
        $__internal_51e00bcc632cedccaf443a2e749760dc4388fecc8eb9e7f8af24d43fdc476e0b->leave($__internal_51e00bcc632cedccaf443a2e749760dc4388fecc8eb9e7f8af24d43fdc476e0b_prof);

    }

    // line 53
    public function block_label($context, array $blocks = array())
    {
        $__internal_181ad4c80b34301e898b389960a1b7547cdc646406b2f441efddd0609a3f9b64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_181ad4c80b34301e898b389960a1b7547cdc646406b2f441efddd0609a3f9b64->enter($__internal_181ad4c80b34301e898b389960a1b7547cdc646406b2f441efddd0609a3f9b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_7bd46b0c842ef726bf867df7a2148ba734c7e95df6e9ddbeb68c53fa2ad1047d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bd46b0c842ef726bf867df7a2148ba734c7e95df6e9ddbeb68c53fa2ad1047d->enter($__internal_7bd46b0c842ef726bf867df7a2148ba734c7e95df6e9ddbeb68c53fa2ad1047d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        if ((array_key_exists("is_link", $context) && (isset($context["is_link"]) || array_key_exists("is_link", $context) ? $context["is_link"] : (function () { throw new Twig_Error_Runtime('Variable "is_link" does not exist.', 53, $this->getSourceContext()); })()))) {
            echo ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new Twig_Error_Runtime('Variable "icon" does not exist.', 53, $this->getSourceContext()); })()))) : (""));
        }
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 53, $this->getSourceContext()); })()), "allow_safe_labels", array()) && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 53, $this->getSourceContext()); })()), "extra", array(0 => "safe_label", 1 => false), "method"))) {
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 53, $this->getSourceContext()); })()), "label", array());
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 53, $this->getSourceContext()); })()), "label", array()), array(), ((array_key_exists("translation_domain", $context)) ? (_twig_default_filter((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 53, $this->getSourceContext()); })()), "messages")) : ("messages"))), "html", null, true);
        }
        
        $__internal_7bd46b0c842ef726bf867df7a2148ba734c7e95df6e9ddbeb68c53fa2ad1047d->leave($__internal_7bd46b0c842ef726bf867df7a2148ba734c7e95df6e9ddbeb68c53fa2ad1047d_prof);

        
        $__internal_181ad4c80b34301e898b389960a1b7547cdc646406b2f441efddd0609a3f9b64->leave($__internal_181ad4c80b34301e898b389960a1b7547cdc646406b2f441efddd0609a3f9b64_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Menu:sonata_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 53,  196 => 49,  193 => 47,  191 => 46,  189 => 45,  184 => 44,  181 => 43,  179 => 42,  176 => 41,  173 => 40,  164 => 39,  150 => 35,  147 => 34,  144 => 33,  141 => 32,  138 => 31,  135 => 30,  132 => 29,  129 => 28,  126 => 27,  117 => 26,  103 => 22,  101 => 21,  99 => 20,  96 => 19,  94 => 18,  86 => 14,  81 => 13,  79 => 12,  77 => 10,  68 => 9,  57 => 6,  55 => 5,  53 => 4,  44 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu.html.twig' %}

{% block root %}
    {%- set listAttributes = item.childrenAttributes|merge({'class': 'sidebar-menu'}) %}
    {%- set request        = item.extra('request') ?: app.request %}
    {{ block('list') -}}
{% endblock %}

{% block item %}
    {%- if item.displayed %}
        {#- check role of the group #}
        {%- set display = (item.extra('roles') is empty or is_granted('ROLE_SUPER_ADMIN') ) %}
        {%- for role in item.extra('roles') if not display %}
            {%- set display = is_granted(role) %}
        {%- endfor %}
    {%- endif %}

    {%- if item.displayed and display|default %}
        {% set options = options|merge({branch_class: 'treeview', currentClass: \"active\"}) %}
        {%- do item.setChildrenAttribute('class', (item.childrenAttribute('class')~' active')|trim) %}
        {%- do item.setChildrenAttribute('class', (item.childrenAttribute('class')~' treeview-menu')|trim) %}
        {{ parent() }}
    {% endif %}
{% endblock %}

{% block linkElement %}
    {% spaceless %}
        {% if item.extra('on_top') is defined and not item.extra('on_top') %}
            {% set translation_domain = item.extra('translation_domain', 'messages') %}
            {% set icon = item.attribute('icon')|default(item.level > 1 ? '<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>' : '') %}
        {% else %}
            {% set icon = item.extra('icon') %}
        {% endif %}
        {% set is_link = true %}
        {{ parent() }}
    {% endspaceless %}
{% endblock %}

{% block spanElement %}
    {% spaceless %}
        <a href=\"#\">
            {% set translation_domain = item.extra('label_catalogue') %}
            {% set icon = item.extra('icon')|default('') %}
            {{ icon|raw }}
            {{ parent() }}
            {%- if item.extra('keep_open') is not defined or not item.extra('keep_open') -%}
                <span class=\"pull-right-container\"><i class=\"fa pull-right fa-angle-left\"></i></span>
            {%- endif -%}
        </a>
    {% endspaceless %}
{% endblock %}

{% block label %}{% if is_link is defined and is_link %}{{ icon|default|raw }}{% endif %}{% if options.allow_safe_labels and item.extra('safe_label', false) %}{{ item.label|raw }}{% else %}{{ item.label|trans({}, translation_domain|default('messages')) }}{% endif %}{% endblock %}
", "SonataAdminBundle:Menu:sonata_menu.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/Menu/sonata_menu.html.twig");
    }
}

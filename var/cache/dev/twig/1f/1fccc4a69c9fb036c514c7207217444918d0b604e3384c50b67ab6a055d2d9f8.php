<?php

/* SonataAdminBundle:CRUD:base_list.html.twig */
class __TwigTemplate_85cb397c3e53605eb2bfd952ef1f21574edf37529caa6825cf7ad2cb5e34f272 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'title' => array($this, 'block_title'),
            'navbar_title' => array($this, 'block_navbar_title'),
            'list_table' => array($this, 'block_list_table'),
            'list_header' => array($this, 'block_list_header'),
            'table_header' => array($this, 'block_table_header'),
            'table_body' => array($this, 'block_table_body'),
            'table_footer' => array($this, 'block_table_footer'),
            'no_result_content' => array($this, 'block_no_result_content'),
            'list_footer' => array($this, 'block_list_footer'),
            'batch' => array($this, 'block_batch'),
            'batch_javascript' => array($this, 'block_batch_javascript'),
            'batch_actions' => array($this, 'block_batch_actions'),
            'pager_results' => array($this, 'block_pager_results'),
            'pager_links' => array($this, 'block_pager_links'),
            'list_filters_actions' => array($this, 'block_list_filters_actions'),
            'list_filters' => array($this, 'block_list_filters'),
            'sonata_list_filter_group_class' => array($this, 'block_sonata_list_filter_group_class'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 12, $this->getSourceContext()); })()), "SonataAdminBundle:CRUD:base_list.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_27ca173529175cb917fb1d08c844c39272305632d7bb4eda0e453b5da4d07926 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27ca173529175cb917fb1d08c844c39272305632d7bb4eda0e453b5da4d07926->enter($__internal_27ca173529175cb917fb1d08c844c39272305632d7bb4eda0e453b5da4d07926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_list.html.twig"));

        $__internal_fb8453bf496f0baa3089315737593e490dff3bdd0c31c9bc0ceae864427e95c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb8453bf496f0baa3089315737593e490dff3bdd0c31c9bc0ceae864427e95c8->enter($__internal_fb8453bf496f0baa3089315737593e490dff3bdd0c31c9bc0ceae864427e95c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_list.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27ca173529175cb917fb1d08c844c39272305632d7bb4eda0e453b5da4d07926->leave($__internal_27ca173529175cb917fb1d08c844c39272305632d7bb4eda0e453b5da4d07926_prof);

        
        $__internal_fb8453bf496f0baa3089315737593e490dff3bdd0c31c9bc0ceae864427e95c8->leave($__internal_fb8453bf496f0baa3089315737593e490dff3bdd0c31c9bc0ceae864427e95c8_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_fda781f2564a63d7bcb4be085a8fddb1da659f75216d09d80e99b2326e2a9c89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fda781f2564a63d7bcb4be085a8fddb1da659f75216d09d80e99b2326e2a9c89->enter($__internal_fda781f2564a63d7bcb4be085a8fddb1da659f75216d09d80e99b2326e2a9c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_fe6f3ec4b852daa9fa0e82358a76549db947e9b2f520de785dc17c89367a3aae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe6f3ec4b852daa9fa0e82358a76549db947e9b2f520de785dc17c89367a3aae->enter($__internal_fe6f3ec4b852daa9fa0e82358a76549db947e9b2f520de785dc17c89367a3aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_list.html.twig", 15)->display($context);
        
        $__internal_fe6f3ec4b852daa9fa0e82358a76549db947e9b2f520de785dc17c89367a3aae->leave($__internal_fe6f3ec4b852daa9fa0e82358a76549db947e9b2f520de785dc17c89367a3aae_prof);

        
        $__internal_fda781f2564a63d7bcb4be085a8fddb1da659f75216d09d80e99b2326e2a9c89->leave($__internal_fda781f2564a63d7bcb4be085a8fddb1da659f75216d09d80e99b2326e2a9c89_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_385889c6c763fbe7d776b42fc64634c46ad1e549063016d8430da3db921147b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_385889c6c763fbe7d776b42fc64634c46ad1e549063016d8430da3db921147b5->enter($__internal_385889c6c763fbe7d776b42fc64634c46ad1e549063016d8430da3db921147b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_fd204b9b28e549f70515cd87cb242780e03c9d13b380c59f9fa452e0deb29dda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd204b9b28e549f70515cd87cb242780e03c9d13b380c59f9fa452e0deb29dda->enter($__internal_fd204b9b28e549f70515cd87cb242780e03c9d13b380c59f9fa452e0deb29dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 18, $this->getSourceContext()); })()), "sidemenu", array(0 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 18, $this->getSourceContext()); })())), "method"), array("currentClass" => "active", "template" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 18, $this->getSourceContext()); })()), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_fd204b9b28e549f70515cd87cb242780e03c9d13b380c59f9fa452e0deb29dda->leave($__internal_fd204b9b28e549f70515cd87cb242780e03c9d13b380c59f9fa452e0deb29dda_prof);

        
        $__internal_385889c6c763fbe7d776b42fc64634c46ad1e549063016d8430da3db921147b5->leave($__internal_385889c6c763fbe7d776b42fc64634c46ad1e549063016d8430da3db921147b5_prof);

    }

    // line 20
    public function block_title($context, array $blocks = array())
    {
        $__internal_04663b3cfbb061780666f5366791760f240655308fbd25c9db0212ca5f891ce2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04663b3cfbb061780666f5366791760f240655308fbd25c9db0212ca5f891ce2->enter($__internal_04663b3cfbb061780666f5366791760f240655308fbd25c9db0212ca5f891ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3b9a2d00ca7f221e7f0a439bc212cfa73af5b697024099f365a045409cb4f5df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b9a2d00ca7f221e7f0a439bc212cfa73af5b697024099f365a045409cb4f5df->enter($__internal_3b9a2d00ca7f221e7f0a439bc212cfa73af5b697024099f365a045409cb4f5df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 21
        echo "    ";
        // line 25
        echo "
    ";
        // line 26
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 26, $this->getSourceContext()); })()), "isChild", array()) && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 26, $this->getSourceContext()); })()), "parent", array()), "subject", array()))) {
            // line 27
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 27, $this->getSourceContext()); })()), "parent", array()), "toString", array(0 => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 27, $this->getSourceContext()); })()), "parent", array()), "subject", array())), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_3b9a2d00ca7f221e7f0a439bc212cfa73af5b697024099f365a045409cb4f5df->leave($__internal_3b9a2d00ca7f221e7f0a439bc212cfa73af5b697024099f365a045409cb4f5df_prof);

        
        $__internal_04663b3cfbb061780666f5366791760f240655308fbd25c9db0212ca5f891ce2->leave($__internal_04663b3cfbb061780666f5366791760f240655308fbd25c9db0212ca5f891ce2_prof);

    }

    // line 31
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_b57b8091e6e8ffa956cc9731461d0898febc8b0f69eab9689dd254cb655ff337 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b57b8091e6e8ffa956cc9731461d0898febc8b0f69eab9689dd254cb655ff337->enter($__internal_b57b8091e6e8ffa956cc9731461d0898febc8b0f69eab9689dd254cb655ff337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        $__internal_24a15eb2a2dcefc041a5bb5230b72d3f4d4da9d44cc5eda4a2c78adfa2103c54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24a15eb2a2dcefc041a5bb5230b72d3f4d4da9d44cc5eda4a2c78adfa2103c54->enter($__internal_24a15eb2a2dcefc041a5bb5230b72d3f4d4da9d44cc5eda4a2c78adfa2103c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 32
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_24a15eb2a2dcefc041a5bb5230b72d3f4d4da9d44cc5eda4a2c78adfa2103c54->leave($__internal_24a15eb2a2dcefc041a5bb5230b72d3f4d4da9d44cc5eda4a2c78adfa2103c54_prof);

        
        $__internal_b57b8091e6e8ffa956cc9731461d0898febc8b0f69eab9689dd254cb655ff337->leave($__internal_b57b8091e6e8ffa956cc9731461d0898febc8b0f69eab9689dd254cb655ff337_prof);

    }

    // line 35
    public function block_list_table($context, array $blocks = array())
    {
        $__internal_876bb1fb0e07058fa23e465153f8c1bbe49b75b901d5ceef1ca1684bcb76f763 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_876bb1fb0e07058fa23e465153f8c1bbe49b75b901d5ceef1ca1684bcb76f763->enter($__internal_876bb1fb0e07058fa23e465153f8c1bbe49b75b901d5ceef1ca1684bcb76f763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_table"));

        $__internal_b8b88fc994b7716d970c04955e0f72cf6a0e1c7d58839d0e385706189ae4c392 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8b88fc994b7716d970c04955e0f72cf6a0e1c7d58839d0e385706189ae4c392->enter($__internal_b8b88fc994b7716d970c04955e0f72cf6a0e1c7d58839d0e385706189ae4c392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_table"));

        // line 36
        echo "    <div class=\"col-xs-12 col-md-12\">
        ";
        // line 37
        $context["batchactions"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 37, $this->getSourceContext()); })()), "batchactions", array());
        // line 38
        echo "        ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 38, $this->getSourceContext()); })()), "hasRoute", array(0 => "batch"), "method") && twig_length_filter($this->env, (isset($context["batchactions"]) || array_key_exists("batchactions", $context) ? $context["batchactions"] : (function () { throw new Twig_Error_Runtime('Variable "batchactions" does not exist.', 38, $this->getSourceContext()); })())))) {
            // line 39
            echo "            <form action=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 39, $this->getSourceContext()); })()), "generateUrl", array(0 => "batch", 1 => array("filter" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 39, $this->getSourceContext()); })()), "filterParameters", array()))), "method"), "html", null, true);
            echo "\" method=\"POST\" >
            <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 40, $this->getSourceContext()); })()), "html", null, true);
            echo "\">
        ";
        }
        // line 42
        echo "
        ";
        // line 44
        echo "        <div class=\"box box-primary\" ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 44, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "lastPage", array()) == 1)) {
            echo "style=\"margin-bottom: 100px;\"";
        }
        echo ">
            <div class=\"box-body ";
        // line 45
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 45, $this->getSourceContext()); })()), "datagrid", array()), "results", array())) > 0)) {
            echo "table-responsive no-padding";
        }
        echo "\">
                ";
        // line 46
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.top", array("admin" => (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 46, $this->getSourceContext()); })()))));
        echo "

                ";
        // line 48
        $this->displayBlock('list_header', $context, $blocks);
        // line 49
        echo "
                ";
        // line 50
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 50, $this->getSourceContext()); })()), "datagrid", array()), "results", array())) > 0)) {
            // line 51
            echo "                    <table class=\"table table-bordered table-striped sonata-ba-list\">
                        ";
            // line 52
            $this->displayBlock('table_header', $context, $blocks);
            // line 88
            echo "
                        ";
            // line 89
            $this->displayBlock('table_body', $context, $blocks);
            // line 94
            echo "
                        ";
            // line 95
            $this->displayBlock('table_footer', $context, $blocks);
            // line 97
            echo "                    </table>
                ";
        } else {
            // line 99
            echo "                    ";
            $this->displayBlock('no_result_content', $context, $blocks);
            // line 117
            echo "                ";
        }
        // line 118
        echo "
                ";
        // line 119
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.bottom", array("admin" => (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 119, $this->getSourceContext()); })()))));
        echo "
            </div>
            ";
        // line 121
        $this->displayBlock('list_footer', $context, $blocks);
        // line 221
        echo "        </div>
        ";
        // line 222
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 222, $this->getSourceContext()); })()), "hasRoute", array(0 => "batch"), "method") && twig_length_filter($this->env, (isset($context["batchactions"]) || array_key_exists("batchactions", $context) ? $context["batchactions"] : (function () { throw new Twig_Error_Runtime('Variable "batchactions" does not exist.', 222, $this->getSourceContext()); })())))) {
            // line 223
            echo "            </form>
        ";
        }
        // line 225
        echo "    </div>
";
        
        $__internal_b8b88fc994b7716d970c04955e0f72cf6a0e1c7d58839d0e385706189ae4c392->leave($__internal_b8b88fc994b7716d970c04955e0f72cf6a0e1c7d58839d0e385706189ae4c392_prof);

        
        $__internal_876bb1fb0e07058fa23e465153f8c1bbe49b75b901d5ceef1ca1684bcb76f763->leave($__internal_876bb1fb0e07058fa23e465153f8c1bbe49b75b901d5ceef1ca1684bcb76f763_prof);

    }

    // line 48
    public function block_list_header($context, array $blocks = array())
    {
        $__internal_f35e5c3c791909078bf7219e28458281ffcdc7dab95c865203ea4ae8269556c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f35e5c3c791909078bf7219e28458281ffcdc7dab95c865203ea4ae8269556c9->enter($__internal_f35e5c3c791909078bf7219e28458281ffcdc7dab95c865203ea4ae8269556c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_header"));

        $__internal_aed151fcd25959fe4733150ab7935e12cbc7c6b3a48079388f2be0f8453f37f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aed151fcd25959fe4733150ab7935e12cbc7c6b3a48079388f2be0f8453f37f1->enter($__internal_aed151fcd25959fe4733150ab7935e12cbc7c6b3a48079388f2be0f8453f37f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_header"));

        
        $__internal_aed151fcd25959fe4733150ab7935e12cbc7c6b3a48079388f2be0f8453f37f1->leave($__internal_aed151fcd25959fe4733150ab7935e12cbc7c6b3a48079388f2be0f8453f37f1_prof);

        
        $__internal_f35e5c3c791909078bf7219e28458281ffcdc7dab95c865203ea4ae8269556c9->leave($__internal_f35e5c3c791909078bf7219e28458281ffcdc7dab95c865203ea4ae8269556c9_prof);

    }

    // line 52
    public function block_table_header($context, array $blocks = array())
    {
        $__internal_0fdd643980b5ff1661a6c7351377406b41fcbc650d5bc6ac8df8a5333dd7fca4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fdd643980b5ff1661a6c7351377406b41fcbc650d5bc6ac8df8a5333dd7fca4->enter($__internal_0fdd643980b5ff1661a6c7351377406b41fcbc650d5bc6ac8df8a5333dd7fca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_header"));

        $__internal_f3bf6a18c23d649e14865c57382f5ea4575dbe4d50373899c9480febf2432143 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3bf6a18c23d649e14865c57382f5ea4575dbe4d50373899c9480febf2432143->enter($__internal_f3bf6a18c23d649e14865c57382f5ea4575dbe4d50373899c9480febf2432143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_header"));

        // line 53
        echo "                            <thead>
                                <tr class=\"sonata-ba-list-field-header\">
                                    ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 55, $this->getSourceContext()); })()), "list", array()), "elements", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 56
            echo "                                        ";
            if (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 56, $this->getSourceContext()); })()), "hasRoute", array(0 => "batch"), "method") && (twig_get_attribute($this->env, $this->getSourceContext(), $context["field_description"], "getOption", array(0 => "code"), "method") == "_batch")) && (twig_length_filter($this->env, (isset($context["batchactions"]) || array_key_exists("batchactions", $context) ? $context["batchactions"] : (function () { throw new Twig_Error_Runtime('Variable "batchactions" does not exist.', 56, $this->getSourceContext()); })())) > 0))) {
                // line 57
                echo "                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-batch\">
                                              <input type=\"checkbox\" id=\"list_batch_checkbox\">
                                            </th>
                                        ";
            } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),             // line 60
$context["field_description"], "getOption", array(0 => "code"), "method") == "_select")) {
                // line 61
                echo "                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-select\"></th>
                                        ";
            } elseif (((twig_get_attribute($this->env, $this->getSourceContext(),             // line 62
$context["field_description"], "name", array()) == "_action") && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 62, $this->getSourceContext()); })()), "request", array()), "isXmlHttpRequest", array()))) {
                // line 63
                echo "                                            ";
                // line 64
                echo "                                        ";
            } elseif (((twig_get_attribute($this->env, $this->getSourceContext(), $context["field_description"], "getOption", array(0 => "ajax_hidden"), "method") == true) && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 64, $this->getSourceContext()); })()), "request", array()), "isXmlHttpRequest", array()))) {
                // line 65
                echo "                                            ";
                // line 66
                echo "                                        ";
            } else {
                // line 67
                echo "                                            ";
                $context["sortable"] = false;
                // line 68
                echo "                                            ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["field_description"], "options", array(), "any", false, true), "sortable", array(), "any", true, true) && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["field_description"], "options", array()), "sortable", array()))) {
                    // line 69
                    echo "                                                ";
                    $context["sortable"] = true;
                    // line 70
                    echo "                                                ";
                    $context["sort_parameters"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 70, $this->getSourceContext()); })()), "modelmanager", array()), "sortparameters", array(0 => $context["field_description"], 1 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 70, $this->getSourceContext()); })()), "datagrid", array())), "method");
                    // line 71
                    echo "                                                ";
                    $context["current"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 71, $this->getSourceContext()); })()), "datagrid", array()), "values", array()), "_sort_by", array()) == $context["field_description"]) || (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 71, $this->getSourceContext()); })()), "datagrid", array()), "values", array()), "_sort_by", array()), "fieldName", array()) == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sort_parameters"]) || array_key_exists("sort_parameters", $context) ? $context["sort_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "sort_parameters" does not exist.', 71, $this->getSourceContext()); })()), "filter", array()), "_sort_by", array())));
                    // line 72
                    echo "                                                ";
                    $context["sort_active_class"] = (((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new Twig_Error_Runtime('Variable "current" does not exist.', 72, $this->getSourceContext()); })())) ? ("sonata-ba-list-field-order-active") : (""));
                    // line 73
                    echo "                                                ";
                    $context["sort_by"] = (((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new Twig_Error_Runtime('Variable "current" does not exist.', 73, $this->getSourceContext()); })())) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 73, $this->getSourceContext()); })()), "datagrid", array()), "values", array()), "_sort_order", array())) : (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["field_description"], "options", array()), "_sort_order", array())));
                    // line 74
                    echo "                                            ";
                }
                // line 75
                echo "
                                            ";
                // line 76
                ob_start();
                // line 77
                echo "                                                <th class=\"sonata-ba-list-field-header-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["field_description"], "type", array()), "html", null, true);
                echo " ";
                if ((isset($context["sortable"]) || array_key_exists("sortable", $context) ? $context["sortable"] : (function () { throw new Twig_Error_Runtime('Variable "sortable" does not exist.', 77, $this->getSourceContext()); })())) {
                    echo " sonata-ba-list-field-header-order-";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["sort_by"]) || array_key_exists("sort_by", $context) ? $context["sort_by"] : (function () { throw new Twig_Error_Runtime('Variable "sort_by" does not exist.', 77, $this->getSourceContext()); })())), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["sort_active_class"]) || array_key_exists("sort_active_class", $context) ? $context["sort_active_class"] : (function () { throw new Twig_Error_Runtime('Variable "sort_active_class" does not exist.', 77, $this->getSourceContext()); })()), "html", null, true);
                }
                if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["field_description"], "options", array(), "any", false, true), "header_class", array(), "any", true, true)) {
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["field_description"], "options", array()), "header_class", array()), "html", null, true);
                }
                echo "\"";
                if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["field_description"], "options", array(), "any", false, true), "header_style", array(), "any", true, true)) {
                    echo " style=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["field_description"], "options", array()), "header_style", array()), "html", null, true);
                    echo "\"";
                }
                echo ">
                                                    ";
                // line 78
                if ((isset($context["sortable"]) || array_key_exists("sortable", $context) ? $context["sortable"] : (function () { throw new Twig_Error_Runtime('Variable "sortable" does not exist.', 78, $this->getSourceContext()); })())) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 78, $this->getSourceContext()); })()), "generateUrl", array(0 => "list", 1 => (isset($context["sort_parameters"]) || array_key_exists("sort_parameters", $context) ? $context["sort_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "sort_parameters" does not exist.', 78, $this->getSourceContext()); })())), "method"), "html", null, true);
                    echo "\">";
                }
                // line 79
                echo "                                                    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["field_description"], "label", array()), array(), twig_get_attribute($this->env, $this->getSourceContext(), $context["field_description"], "translationDomain", array())), "html", null, true);
                echo "
                                                    ";
                // line 80
                if ((isset($context["sortable"]) || array_key_exists("sortable", $context) ? $context["sortable"] : (function () { throw new Twig_Error_Runtime('Variable "sortable" does not exist.', 80, $this->getSourceContext()); })())) {
                    echo "</a>";
                }
                // line 81
                echo "                                                </th>
                                            ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 83
                echo "                                        ";
            }
            // line 84
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "                                </tr>
                            </thead>
                        ";
        
        $__internal_f3bf6a18c23d649e14865c57382f5ea4575dbe4d50373899c9480febf2432143->leave($__internal_f3bf6a18c23d649e14865c57382f5ea4575dbe4d50373899c9480febf2432143_prof);

        
        $__internal_0fdd643980b5ff1661a6c7351377406b41fcbc650d5bc6ac8df8a5333dd7fca4->leave($__internal_0fdd643980b5ff1661a6c7351377406b41fcbc650d5bc6ac8df8a5333dd7fca4_prof);

    }

    // line 89
    public function block_table_body($context, array $blocks = array())
    {
        $__internal_c323c62daf1a5f15f094152cab1ec727ab5570999d784cfb66c4938adc475c38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c323c62daf1a5f15f094152cab1ec727ab5570999d784cfb66c4938adc475c38->enter($__internal_c323c62daf1a5f15f094152cab1ec727ab5570999d784cfb66c4938adc475c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body"));

        $__internal_5c7551e45cec18ac5e86db0e24f7fd2a2aae0e70f6bc28ac7eb95191d3855e70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c7551e45cec18ac5e86db0e24f7fd2a2aae0e70f6bc28ac7eb95191d3855e70->enter($__internal_5c7551e45cec18ac5e86db0e24f7fd2a2aae0e70f6bc28ac7eb95191d3855e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body"));

        // line 90
        echo "                            <tbody>
                                ";
        // line 91
        $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 91, $this->getSourceContext()); })()), "getTemplate", array(0 => ("outer_list_rows_" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 91, $this->getSourceContext()); })()), "getListMode", array(), "method"))), "method"), "SonataAdminBundle:CRUD:base_list.html.twig", 91)->display($context);
        // line 92
        echo "                            </tbody>
                        ";
        
        $__internal_5c7551e45cec18ac5e86db0e24f7fd2a2aae0e70f6bc28ac7eb95191d3855e70->leave($__internal_5c7551e45cec18ac5e86db0e24f7fd2a2aae0e70f6bc28ac7eb95191d3855e70_prof);

        
        $__internal_c323c62daf1a5f15f094152cab1ec727ab5570999d784cfb66c4938adc475c38->leave($__internal_c323c62daf1a5f15f094152cab1ec727ab5570999d784cfb66c4938adc475c38_prof);

    }

    // line 95
    public function block_table_footer($context, array $blocks = array())
    {
        $__internal_01b0bea0f9270fa8d89bb55fbdf068ad89e7667759a7da22a09d112a8e3cdd8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01b0bea0f9270fa8d89bb55fbdf068ad89e7667759a7da22a09d112a8e3cdd8d->enter($__internal_01b0bea0f9270fa8d89bb55fbdf068ad89e7667759a7da22a09d112a8e3cdd8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_footer"));

        $__internal_bc0f85139fa73729403b95b9792cc845b6edce9aedc23e97414d461b121f8f0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc0f85139fa73729403b95b9792cc845b6edce9aedc23e97414d461b121f8f0d->enter($__internal_bc0f85139fa73729403b95b9792cc845b6edce9aedc23e97414d461b121f8f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_footer"));

        // line 96
        echo "                        ";
        
        $__internal_bc0f85139fa73729403b95b9792cc845b6edce9aedc23e97414d461b121f8f0d->leave($__internal_bc0f85139fa73729403b95b9792cc845b6edce9aedc23e97414d461b121f8f0d_prof);

        
        $__internal_01b0bea0f9270fa8d89bb55fbdf068ad89e7667759a7da22a09d112a8e3cdd8d->leave($__internal_01b0bea0f9270fa8d89bb55fbdf068ad89e7667759a7da22a09d112a8e3cdd8d_prof);

    }

    // line 99
    public function block_no_result_content($context, array $blocks = array())
    {
        $__internal_a6db608f3174f164b7cd5b1a2be80166d5daa44492f8c59f82df326451a0b009 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6db608f3174f164b7cd5b1a2be80166d5daa44492f8c59f82df326451a0b009->enter($__internal_a6db608f3174f164b7cd5b1a2be80166d5daa44492f8c59f82df326451a0b009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "no_result_content"));

        $__internal_40e7ce0f81c844e53df98f82204257ac7fb37e02a0467f347d3da0cc437a78ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40e7ce0f81c844e53df98f82204257ac7fb37e02a0467f347d3da0cc437a78ae->enter($__internal_40e7ce0f81c844e53df98f82204257ac7fb37e02a0467f347d3da0cc437a78ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "no_result_content"));

        // line 100
        echo "                        <div class=\"info-box\">
                            <span class=\"info-box-icon bg-aqua\"><i class=\"fa fa-arrow-circle-right\" aria-hidden=\"true\"></i></span>
                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("no_result", array(), "SonataAdminBundle"), "html", null, true);
        echo "</span>
                                <div class=\"progress\">
                                    <div class=\"progress-bar\" style=\"width: 0%\"></div>
                                </div>
                                <span class=\"progress-description\">
                                    ";
        // line 108
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 108, $this->getSourceContext()); })()), "request", array()), "xmlHttpRequest", array())) {
            // line 109
            echo "                                    <ul class=\"list-unstyled\">
                                        ";
            // line 110
            $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "SonataAdminBundle:CRUD:base_list.html.twig", 110)->display($context);
            // line 111
            echo "                                    </ul>
                                    ";
        }
        // line 113
        echo "                                </span>
                            </div><!-- /.info-box-content -->
                        </div>
                    ";
        
        $__internal_40e7ce0f81c844e53df98f82204257ac7fb37e02a0467f347d3da0cc437a78ae->leave($__internal_40e7ce0f81c844e53df98f82204257ac7fb37e02a0467f347d3da0cc437a78ae_prof);

        
        $__internal_a6db608f3174f164b7cd5b1a2be80166d5daa44492f8c59f82df326451a0b009->leave($__internal_a6db608f3174f164b7cd5b1a2be80166d5daa44492f8c59f82df326451a0b009_prof);

    }

    // line 121
    public function block_list_footer($context, array $blocks = array())
    {
        $__internal_f34758106cf910a2c592a8eee8c9460bd9aa64906b86971ee0262c94b464d444 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f34758106cf910a2c592a8eee8c9460bd9aa64906b86971ee0262c94b464d444->enter($__internal_f34758106cf910a2c592a8eee8c9460bd9aa64906b86971ee0262c94b464d444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_footer"));

        $__internal_d0bf47371966a5908725c7279a6398a41575e5e6d51801d694d63d31df646859 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0bf47371966a5908725c7279a6398a41575e5e6d51801d694d63d31df646859->enter($__internal_d0bf47371966a5908725c7279a6398a41575e5e6d51801d694d63d31df646859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_footer"));

        // line 122
        echo "                ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 122, $this->getSourceContext()); })()), "datagrid", array()), "results", array())) > 0)) {
            // line 123
            echo "                    <div class=\"box-footer\">
                        <div class=\"form-inline clearfix\">
                            ";
            // line 125
            if ( !twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 125, $this->getSourceContext()); })()), "request", array()), "isXmlHttpRequest", array())) {
                // line 126
                echo "                                <div class=\"pull-left\">
                                    ";
                // line 127
                if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 127, $this->getSourceContext()); })()), "hasRoute", array(0 => "batch"), "method") && (twig_length_filter($this->env, (isset($context["batchactions"]) || array_key_exists("batchactions", $context) ? $context["batchactions"] : (function () { throw new Twig_Error_Runtime('Variable "batchactions" does not exist.', 127, $this->getSourceContext()); })())) > 0))) {
                    // line 128
                    echo "                                        ";
                    $this->displayBlock('batch', $context, $blocks);
                    // line 175
                    echo "                                    ";
                }
                // line 176
                echo "                                </div>


                                ";
                // line 180
                echo "                                ";
                $context["export_formats"] = ((array_key_exists("export_formats", $context)) ? (_twig_default_filter((isset($context["export_formats"]) || array_key_exists("export_formats", $context) ? $context["export_formats"] : (function () { throw new Twig_Error_Runtime('Variable "export_formats" does not exist.', 180, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 180, $this->getSourceContext()); })()), "exportFormats", array()))) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 180, $this->getSourceContext()); })()), "exportFormats", array())));
                // line 181
                echo "
                                <div class=\"pull-right\">
                                    ";
                // line 183
                if (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 183, $this->getSourceContext()); })()), "hasRoute", array(0 => "export"), "method") && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 183, $this->getSourceContext()); })()), "hasAccess", array(0 => "export"), "method")) && twig_length_filter($this->env, (isset($context["export_formats"]) || array_key_exists("export_formats", $context) ? $context["export_formats"] : (function () { throw new Twig_Error_Runtime('Variable "export_formats" does not exist.', 183, $this->getSourceContext()); })())))) {
                    // line 184
                    echo "                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                                                <i class=\"fa fa-share-square-o\" aria-hidden=\"true\"></i>
                                                ";
                    // line 187
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_export_download", array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\">
                                                ";
                    // line 191
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["export_formats"]) || array_key_exists("export_formats", $context) ? $context["export_formats"] : (function () { throw new Twig_Error_Runtime('Variable "export_formats" does not exist.', 191, $this->getSourceContext()); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
                        // line 192
                        echo "                                                <li>
                                                    <a href=\"";
                        // line 193
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 193, $this->getSourceContext()); })()), "generateUrl", array(0 => "export", 1 => (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 193, $this->getSourceContext()); })()), "modelmanager", array()), "paginationparameters", array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 193, $this->getSourceContext()); })()), "datagrid", array()), 1 => 0), "method") + array("format" => $context["format"]))), "method"), "html", null, true);
                        echo "\">
                                                        <i class=\"fa fa-arrow-circle-o-down\" aria-hidden=\"true\"></i>
                                                        ";
                        // line 195
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(("export_format_" . $context["format"]), array(), "SonataAdminBundle"), "html", null, true);
                        echo "
                                                    </a>
                                                <li>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['format'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 199
                    echo "                                            </ul>
                                        </div>

                                        &nbsp;-&nbsp;
                                    ";
                }
                // line 204
                echo "
                                    ";
                // line 205
                $this->displayBlock('pager_results', $context, $blocks);
                // line 208
                echo "                                </div>
                            ";
            }
            // line 210
            echo "                        </div>

                        ";
            // line 212
            $this->displayBlock('pager_links', $context, $blocks);
            // line 218
            echo "                    </div>
                ";
        }
        // line 220
        echo "            ";
        
        $__internal_d0bf47371966a5908725c7279a6398a41575e5e6d51801d694d63d31df646859->leave($__internal_d0bf47371966a5908725c7279a6398a41575e5e6d51801d694d63d31df646859_prof);

        
        $__internal_f34758106cf910a2c592a8eee8c9460bd9aa64906b86971ee0262c94b464d444->leave($__internal_f34758106cf910a2c592a8eee8c9460bd9aa64906b86971ee0262c94b464d444_prof);

    }

    // line 128
    public function block_batch($context, array $blocks = array())
    {
        $__internal_4f02696c0417291378092676599ac5ac63d68bd84ed4c09275cd91a76ca11bec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f02696c0417291378092676599ac5ac63d68bd84ed4c09275cd91a76ca11bec->enter($__internal_4f02696c0417291378092676599ac5ac63d68bd84ed4c09275cd91a76ca11bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch"));

        $__internal_83d2f55f425be8d3d4d2734601765866f2a0644ad3f35b57a3be8070872301af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83d2f55f425be8d3d4d2734601765866f2a0644ad3f35b57a3be8070872301af->enter($__internal_83d2f55f425be8d3d4d2734601765866f2a0644ad3f35b57a3be8070872301af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch"));

        // line 129
        echo "                                            <script>
                                                ";
        // line 130
        $this->displayBlock('batch_javascript', $context, $blocks);
        // line 157
        echo "                                            </script>

                                        ";
        // line 159
        $this->displayBlock('batch_actions', $context, $blocks);
        // line 172
        echo "
                                            <input type=\"submit\" class=\"btn btn-small btn-primary\" value=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_batch", array(), "SonataAdminBundle"), "html", null, true);
        echo "\">
                                        ";
        
        $__internal_83d2f55f425be8d3d4d2734601765866f2a0644ad3f35b57a3be8070872301af->leave($__internal_83d2f55f425be8d3d4d2734601765866f2a0644ad3f35b57a3be8070872301af_prof);

        
        $__internal_4f02696c0417291378092676599ac5ac63d68bd84ed4c09275cd91a76ca11bec->leave($__internal_4f02696c0417291378092676599ac5ac63d68bd84ed4c09275cd91a76ca11bec_prof);

    }

    // line 130
    public function block_batch_javascript($context, array $blocks = array())
    {
        $__internal_6f8e31971933f5ec4e899b8e17d5cf12055206a6cbd20c3bbf7aff3eecc6a04f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f8e31971933f5ec4e899b8e17d5cf12055206a6cbd20c3bbf7aff3eecc6a04f->enter($__internal_6f8e31971933f5ec4e899b8e17d5cf12055206a6cbd20c3bbf7aff3eecc6a04f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch_javascript"));

        $__internal_6ce9dc9f2d98ec1d0169101ae7e8ea565c5859cd449f2a66722896f0543452a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ce9dc9f2d98ec1d0169101ae7e8ea565c5859cd449f2a66722896f0543452a7->enter($__internal_6ce9dc9f2d98ec1d0169101ae7e8ea565c5859cd449f2a66722896f0543452a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch_javascript"));

        // line 131
        echo "                                                    jQuery(document).ready(function (\$) {
                                                        // Toggle individual checkboxes when the batch checkbox is changed
                                                        \$('#list_batch_checkbox').on('ifChanged change', function () {
                                                            var checkboxes = \$(this)
                                                                .closest('table')
                                                                .find('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                            ;
                                                            if (window.SONATA_CONFIG.USE_ICHECK) {
                                                                checkboxes.iCheck(\$(this).is(':checked') ? 'check' : 'uncheck');
                                                            } else {
                                                                checkboxes.prop('checked', this.checked);
                                                            }
                                                        });

                                                        // Add a CSS class to rows when they are selected
                                                        \$('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                            .on('ifChanged change', function () {
                                                                \$(this)
                                                                    .closest('tr, div.sonata-ba-list-field-batch')
                                                                    .toggleClass('sonata-ba-list-row-selected', \$(this).is(':checked'))
                                                                ;
                                                            })
                                                            .trigger('ifChanged')
                                                        ;
                                                    });
                                                ";
        
        $__internal_6ce9dc9f2d98ec1d0169101ae7e8ea565c5859cd449f2a66722896f0543452a7->leave($__internal_6ce9dc9f2d98ec1d0169101ae7e8ea565c5859cd449f2a66722896f0543452a7_prof);

        
        $__internal_6f8e31971933f5ec4e899b8e17d5cf12055206a6cbd20c3bbf7aff3eecc6a04f->leave($__internal_6f8e31971933f5ec4e899b8e17d5cf12055206a6cbd20c3bbf7aff3eecc6a04f_prof);

    }

    // line 159
    public function block_batch_actions($context, array $blocks = array())
    {
        $__internal_051292da317cb924194f1c964ff4713b79c95b0e7efc8c6432d51a47478d0d6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_051292da317cb924194f1c964ff4713b79c95b0e7efc8c6432d51a47478d0d6f->enter($__internal_051292da317cb924194f1c964ff4713b79c95b0e7efc8c6432d51a47478d0d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch_actions"));

        $__internal_c5c97598d999fcf3b2e1c67ede26cd6701b57e77dc2af988abf3dea03554ff6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5c97598d999fcf3b2e1c67ede26cd6701b57e77dc2af988abf3dea03554ff6b->enter($__internal_c5c97598d999fcf3b2e1c67ede26cd6701b57e77dc2af988abf3dea03554ff6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch_actions"));

        // line 160
        echo "                                            <label class=\"checkbox\" for=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 160, $this->getSourceContext()); })()), "uniqid", array()), "html", null, true);
        echo "_all_elements\">
                                                <input type=\"checkbox\" name=\"all_elements\" id=\"";
        // line 161
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 161, $this->getSourceContext()); })()), "uniqid", array()), "html", null, true);
        echo "_all_elements\">
                                                ";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("all_elements", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                                                (";
        // line 163
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 163, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "nbresults", array()), "html", null, true);
        echo ")
                                            </label>

                                            <select name=\"action\" style=\"width: auto; height: auto\" class=\"form-control\">
                                                ";
        // line 167
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["batchactions"]) || array_key_exists("batchactions", $context) ? $context["batchactions"] : (function () { throw new Twig_Error_Runtime('Variable "batchactions" does not exist.', 167, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["action"] => $context["options"]) {
            // line 168
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["action"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["options"], "label", array()), array(), ((twig_get_attribute($this->env, $this->getSourceContext(), $context["options"], "translation_domain", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["options"], "translation_domain", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 168, $this->getSourceContext()); })()), "translationDomain", array()))) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 168, $this->getSourceContext()); })()), "translationDomain", array())))), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['action'], $context['options'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "                                            </select>
                                        ";
        
        $__internal_c5c97598d999fcf3b2e1c67ede26cd6701b57e77dc2af988abf3dea03554ff6b->leave($__internal_c5c97598d999fcf3b2e1c67ede26cd6701b57e77dc2af988abf3dea03554ff6b_prof);

        
        $__internal_051292da317cb924194f1c964ff4713b79c95b0e7efc8c6432d51a47478d0d6f->leave($__internal_051292da317cb924194f1c964ff4713b79c95b0e7efc8c6432d51a47478d0d6f_prof);

    }

    // line 205
    public function block_pager_results($context, array $blocks = array())
    {
        $__internal_3cc6b909f88a3dbbb2c653fe930bacbc5a5fbd9645762e89c55936c7e21d56c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cc6b909f88a3dbbb2c653fe930bacbc5a5fbd9645762e89c55936c7e21d56c3->enter($__internal_3cc6b909f88a3dbbb2c653fe930bacbc5a5fbd9645762e89c55936c7e21d56c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pager_results"));

        $__internal_93946bef0dfc9b3ca1a34d812fd2e67210dd4bc54b75184037ef2ea045037dd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93946bef0dfc9b3ca1a34d812fd2e67210dd4bc54b75184037ef2ea045037dd7->enter($__internal_93946bef0dfc9b3ca1a34d812fd2e67210dd4bc54b75184037ef2ea045037dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pager_results"));

        // line 206
        echo "                                        ";
        $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 206, $this->getSourceContext()); })()), "getTemplate", array(0 => "pager_results"), "method"), "SonataAdminBundle:CRUD:base_list.html.twig", 206)->display($context);
        // line 207
        echo "                                    ";
        
        $__internal_93946bef0dfc9b3ca1a34d812fd2e67210dd4bc54b75184037ef2ea045037dd7->leave($__internal_93946bef0dfc9b3ca1a34d812fd2e67210dd4bc54b75184037ef2ea045037dd7_prof);

        
        $__internal_3cc6b909f88a3dbbb2c653fe930bacbc5a5fbd9645762e89c55936c7e21d56c3->leave($__internal_3cc6b909f88a3dbbb2c653fe930bacbc5a5fbd9645762e89c55936c7e21d56c3_prof);

    }

    // line 212
    public function block_pager_links($context, array $blocks = array())
    {
        $__internal_db199db2ecb62e5867ba39e39852101adf820ee92f63da99f54c4d88d2c76a5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db199db2ecb62e5867ba39e39852101adf820ee92f63da99f54c4d88d2c76a5a->enter($__internal_db199db2ecb62e5867ba39e39852101adf820ee92f63da99f54c4d88d2c76a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pager_links"));

        $__internal_661e63ec5920a584819beee70dd82ee4f0d467293fd9eaa4b702ab5819f42441 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_661e63ec5920a584819beee70dd82ee4f0d467293fd9eaa4b702ab5819f42441->enter($__internal_661e63ec5920a584819beee70dd82ee4f0d467293fd9eaa4b702ab5819f42441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pager_links"));

        // line 213
        echo "                            ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 213, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "haveToPaginate", array(), "method")) {
            // line 214
            echo "                                <hr/>
                                ";
            // line 215
            $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 215, $this->getSourceContext()); })()), "getTemplate", array(0 => "pager_links"), "method"), "SonataAdminBundle:CRUD:base_list.html.twig", 215)->display($context);
            // line 216
            echo "                            ";
        }
        // line 217
        echo "                        ";
        
        $__internal_661e63ec5920a584819beee70dd82ee4f0d467293fd9eaa4b702ab5819f42441->leave($__internal_661e63ec5920a584819beee70dd82ee4f0d467293fd9eaa4b702ab5819f42441_prof);

        
        $__internal_db199db2ecb62e5867ba39e39852101adf820ee92f63da99f54c4d88d2c76a5a->leave($__internal_db199db2ecb62e5867ba39e39852101adf820ee92f63da99f54c4d88d2c76a5a_prof);

    }

    // line 228
    public function block_list_filters_actions($context, array $blocks = array())
    {
        $__internal_a282d08d92120a243a32e1586e853384bf3d7752350e6a306b37fc3aa06feaa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a282d08d92120a243a32e1586e853384bf3d7752350e6a306b37fc3aa06feaa6->enter($__internal_a282d08d92120a243a32e1586e853384bf3d7752350e6a306b37fc3aa06feaa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_filters_actions"));

        $__internal_a0faf5dc968015ca0a429cd17eb4186039e75a5794946161a380e06b2b5454cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0faf5dc968015ca0a429cd17eb4186039e75a5794946161a380e06b2b5454cf->enter($__internal_a0faf5dc968015ca0a429cd17eb4186039e75a5794946161a380e06b2b5454cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_filters_actions"));

        // line 229
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 229, $this->getSourceContext()); })()), "datagrid", array()), "filters", array()))) {
            // line 230
            echo "        <ul class=\"nav navbar-nav navbar-right\">

            <li class=\"dropdown sonata-actions\">
                <a href=\"#\" class=\"dropdown-toggle sonata-ba-action\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-filter\" aria-hidden=\"true\"></i>
                    ";
            // line 235
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_filters", array(), "SonataAdminBundle"), "html", null, true);
            echo " <b class=\"caret\"></b>
                </a>

                <ul class=\"dropdown-menu\" role=\"menu\">
                    ";
            // line 239
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 239, $this->getSourceContext()); })()), "datagrid", array()), "filters", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                if (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["filter"], "options", array()), "show_filter", array(), "array") === true) || (null === twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["filter"], "options", array()), "show_filter", array(), "array")))) {
                    // line 240
                    echo "                        ";
                    $context["filterActive"] = ((twig_get_attribute($this->env, $this->getSourceContext(), $context["filter"], "isActive", array(), "method") || twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["filter"], "options", array()), "show_filter", array(), "array")) &&  !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 240, $this->getSourceContext()); })()), "isDefaultFilter", array(0 => twig_get_attribute($this->env, $this->getSourceContext(), $context["filter"], "formName", array())), "method"));
                    // line 241
                    echo "                        <li>
                            <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-";
                    // line 242
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 242, $this->getSourceContext()); })()), "uniqid", array()), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["filter"], "name", array()), "html", null, true);
                    echo "\" filter-container=\"filter-container-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 242, $this->getSourceContext()); })()), "uniqid", array(), "method"), "html", null, true);
                    echo "\">
                                <i class=\"fa ";
                    // line 243
                    echo (((twig_get_attribute($this->env, $this->getSourceContext(), $context["filter"], "isActive", array(), "method") || twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["filter"], "options", array()), "show_filter", array(), "array"))) ? ("fa-check-square-o") : ("fa-square-o"));
                    echo "\"></i>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["filter"], "label", array()), array(), ((twig_get_attribute($this->env, $this->getSourceContext(), $context["filter"], "translationDomain", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["filter"], "translationDomain", array())) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 243, $this->getSourceContext()); })()), "translationDomain", array())))), "html", null, true);
                    echo "
                            </a>
                        </li>
                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 247
            echo "                </ul>
            </li>
        </ul>
    ";
        }
        
        $__internal_a0faf5dc968015ca0a429cd17eb4186039e75a5794946161a380e06b2b5454cf->leave($__internal_a0faf5dc968015ca0a429cd17eb4186039e75a5794946161a380e06b2b5454cf_prof);

        
        $__internal_a282d08d92120a243a32e1586e853384bf3d7752350e6a306b37fc3aa06feaa6->leave($__internal_a282d08d92120a243a32e1586e853384bf3d7752350e6a306b37fc3aa06feaa6_prof);

    }

    // line 253
    public function block_list_filters($context, array $blocks = array())
    {
        $__internal_8de415c48773d7d589cd26e8aa68ae1d0750b97407f161c5e23f7c449084c9da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8de415c48773d7d589cd26e8aa68ae1d0750b97407f161c5e23f7c449084c9da->enter($__internal_8de415c48773d7d589cd26e8aa68ae1d0750b97407f161c5e23f7c449084c9da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_filters"));

        $__internal_c4ede0caa5cbca8721c40e16f6a015a5b1d1cecf269b0c1972a211245eda95ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4ede0caa5cbca8721c40e16f6a015a5b1d1cecf269b0c1972a211245eda95ab->enter($__internal_c4ede0caa5cbca8721c40e16f6a015a5b1d1cecf269b0c1972a211245eda95ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_filters"));

        // line 254
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 254, $this->getSourceContext()); })()), "datagrid", array()), "filters", array())) {
            // line 255
            echo "        ";
            $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 255, $this->getSourceContext()); })()), array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 255, $this->getSourceContext()); })()), "getTemplate", array(0 => "filter"), "method")));
            // line 256
            echo "
        <div class=\"col-xs-12 col-md-12 sonata-filters-box\" style=\"display: ";
            // line 257
            echo ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 257, $this->getSourceContext()); })()), "datagrid", array()), "hasDisplayableFilters", array())) ? ("block") : ("none"));
            echo "\" id=\"filter-container-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 257, $this->getSourceContext()); })()), "uniqid", array(), "method"), "html", null, true);
            echo "\">
            <div class=\"box box-primary\" >
                <div class=\"box-body\">
                    <form class=\"sonata-filter-form form-horizontal ";
            // line 260
            echo (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 260, $this->getSourceContext()); })()), "isChild", array()) && (1 == twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 260, $this->getSourceContext()); })()), "datagrid", array()), "filters", array()))))) ? ("hide") : (""));
            echo "\" action=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 260, $this->getSourceContext()); })()), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\" method=\"GET\" role=\"form\">
                        ";
            // line 261
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 261, $this->getSourceContext()); })()), 'errors');
            echo "

                        <div class=\"row\">
                            <div class=\"col-sm-9\">
                                ";
            // line 265
            $context["withAdvancedFilter"] = false;
            // line 266
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 266, $this->getSourceContext()); })()), "datagrid", array()), "filters", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 267
                echo "                                    ";
                $context["filterActive"] = (((twig_get_attribute($this->env, $this->getSourceContext(), $context["filter"], "isActive", array(), "method") && (null === twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["filter"], "options", array()), "show_filter", array(), "array"))) || (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["filter"], "options", array()), "show_filter", array(), "array") === true)) &&  !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 267, $this->getSourceContext()); })()), "isDefaultFilter", array(0 => twig_get_attribute($this->env, $this->getSourceContext(), $context["filter"], "formName", array())), "method"));
                // line 268
                echo "                                    ";
                $context["filterVisible"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["filter"], "options", array()), "show_filter", array(), "array") === true) || (null === twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["filter"], "options", array()), "show_filter", array(), "array")));
                // line 269
                echo "                                    <div class=\"form-group ";
                $this->displayBlock('sonata_list_filter_group_class', $context, $blocks);
                echo "\" id=\"filter-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 269, $this->getSourceContext()); })()), "uniqid", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["filter"], "name", array()), "html", null, true);
                echo "\" sonata-filter=\"";
                echo (((isset($context["filterVisible"]) || array_key_exists("filterVisible", $context) ? $context["filterVisible"] : (function () { throw new Twig_Error_Runtime('Variable "filterVisible" does not exist.', 269, $this->getSourceContext()); })())) ? ("true") : ("false"));
                echo "\" style=\"display: ";
                if ((isset($context["filterActive"]) || array_key_exists("filterActive", $context) ? $context["filterActive"] : (function () { throw new Twig_Error_Runtime('Variable "filterActive" does not exist.', 269, $this->getSourceContext()); })())) {
                    echo "block";
                } else {
                    echo "none";
                }
                echo "\">
                                        ";
                // line 270
                if ( !(twig_get_attribute($this->env, $this->getSourceContext(), $context["filter"], "label", array()) === false)) {
                    // line 271
                    echo "                                            <label for=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 271, $this->getSourceContext()); })()), "children", array()), twig_get_attribute($this->env, $this->getSourceContext(), $context["filter"], "formName", array()), array(), "array"), "children", array()), "value", array(), "array"), "vars", array()), "id", array()), "html", null, true);
                    echo "\" class=\"col-sm-3 control-label\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["filter"], "label", array()), array(), ((twig_get_attribute($this->env, $this->getSourceContext(), $context["filter"], "translationDomain", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["filter"], "translationDomain", array())) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 271, $this->getSourceContext()); })()), "translationDomain", array())))), "html", null, true);
                    echo "</label>
                                        ";
                }
                // line 273
                echo "                                        ";
                $context["attr"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "children", array(), "any", false, true), twig_get_attribute($this->env, $this->getSourceContext(), $context["filter"], "formName", array()), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "children", array(), "any", false, true), twig_get_attribute($this->env, $this->getSourceContext(), $context["filter"], "formName", array()), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array()), array())) : (array()));
                // line 274
                echo "
                                        <div class=\"col-sm-4 advanced-filter\">
                                            ";
                // line 276
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 276, $this->getSourceContext()); })()), "children", array()), twig_get_attribute($this->env, $this->getSourceContext(), $context["filter"], "formName", array()), array(), "array"), "children", array()), "type", array(), "array"), 'widget', array("attr" => (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 276, $this->getSourceContext()); })())));
                echo "
                                        </div>

                                        <div class=\"col-sm-4\">
                                            ";
                // line 280
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 280, $this->getSourceContext()); })()), "children", array()), twig_get_attribute($this->env, $this->getSourceContext(), $context["filter"], "formName", array()), array(), "array"), "children", array()), "value", array(), "array"), 'widget');
                echo "
                                        </div>

                                        <div class=\"col-sm-1\">
                                            <label class=\"control-label\">
                                                <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-";
                // line 285
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 285, $this->getSourceContext()); })()), "uniqid", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["filter"], "name", array()), "html", null, true);
                echo "\" filter-container=\"filter-container-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 285, $this->getSourceContext()); })()), "uniqid", array(), "method"), "html", null, true);
                echo "\">
                                                    <i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i>
                                                </a>
                                            </label>
                                        </div>
                                    </div>

                                    ";
                // line 292
                if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["filter"], "options", array()), "advanced_filter", array(), "array")) {
                    // line 293
                    echo "                                        ";
                    $context["withAdvancedFilter"] = true;
                    // line 294
                    echo "                                    ";
                }
                // line 295
                echo "                                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 296
            echo "                            </div>
                            <div class=\"col-sm-3 text-center\">
                                <input type=\"hidden\" name=\"filter[_page]\" id=\"filter__page\" value=\"1\">

                                ";
            // line 300
            $context["foo"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 300, $this->getSourceContext()); })()), "children", array()), "_page", array(), "array"), "setRendered", array(), "method");
            // line 301
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 301, $this->getSourceContext()); })()), 'rest');
            echo "

                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-primary\">
                                        <i class=\"fa fa-filter\" aria-hidden=\"true\"></i> ";
            // line 305
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                                    </button>

                                    <a class=\"btn btn-default\" href=\"";
            // line 308
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 308, $this->getSourceContext()); })()), "generateUrl", array(0 => "list", 1 => array("filters" => "reset")), "method"), "html", null, true);
            echo "\">
                                        ";
            // line 309
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_reset_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                                    </a>
                                </div>

                                ";
            // line 313
            if ((isset($context["withAdvancedFilter"]) || array_key_exists("withAdvancedFilter", $context) ? $context["withAdvancedFilter"] : (function () { throw new Twig_Error_Runtime('Variable "withAdvancedFilter" does not exist.', 313, $this->getSourceContext()); })())) {
                // line 314
                echo "                                    <div class=\"form-group\">
                                        <a href=\"#\" data-toggle=\"advanced-filter\">
                                            <i class=\"fa fa-cogs\" aria-hidden=\"true\"></i>
                                            ";
                // line 317
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_advanced_filters", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                                        </a>
                                    </div>
                                ";
            }
            // line 321
            echo "                            </div>
                        </div>

                        ";
            // line 324
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 324, $this->getSourceContext()); })()), "persistentParameters", array()));
            foreach ($context['_seq'] as $context["paramKey"] => $context["paramValue"]) {
                // line 325
                echo "                            <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, $context["paramKey"], "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["paramValue"], "html", null, true);
                echo "\">
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['paramKey'], $context['paramValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 327
            echo "                    </form>
                </div>
            </div>
        </div>
    ";
        }
        
        $__internal_c4ede0caa5cbca8721c40e16f6a015a5b1d1cecf269b0c1972a211245eda95ab->leave($__internal_c4ede0caa5cbca8721c40e16f6a015a5b1d1cecf269b0c1972a211245eda95ab_prof);

        
        $__internal_8de415c48773d7d589cd26e8aa68ae1d0750b97407f161c5e23f7c449084c9da->leave($__internal_8de415c48773d7d589cd26e8aa68ae1d0750b97407f161c5e23f7c449084c9da_prof);

    }

    // line 269
    public function block_sonata_list_filter_group_class($context, array $blocks = array())
    {
        $__internal_c912853aa7a4415c0f76367690c97641b6214936dfcf3ff1d558b2d8a3c28f84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c912853aa7a4415c0f76367690c97641b6214936dfcf3ff1d558b2d8a3c28f84->enter($__internal_c912853aa7a4415c0f76367690c97641b6214936dfcf3ff1d558b2d8a3c28f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_list_filter_group_class"));

        $__internal_e0ec733a3ff721ae8ff538928ce3ef095386c50ee186a094a60f0cc7e8492d22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0ec733a3ff721ae8ff538928ce3ef095386c50ee186a094a60f0cc7e8492d22->enter($__internal_e0ec733a3ff721ae8ff538928ce3ef095386c50ee186a094a60f0cc7e8492d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_list_filter_group_class"));

        
        $__internal_e0ec733a3ff721ae8ff538928ce3ef095386c50ee186a094a60f0cc7e8492d22->leave($__internal_e0ec733a3ff721ae8ff538928ce3ef095386c50ee186a094a60f0cc7e8492d22_prof);

        
        $__internal_c912853aa7a4415c0f76367690c97641b6214936dfcf3ff1d558b2d8a3c28f84->leave($__internal_c912853aa7a4415c0f76367690c97641b6214936dfcf3ff1d558b2d8a3c28f84_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1098 => 269,  1083 => 327,  1072 => 325,  1068 => 324,  1063 => 321,  1056 => 317,  1051 => 314,  1049 => 313,  1042 => 309,  1038 => 308,  1032 => 305,  1024 => 301,  1022 => 300,  1016 => 296,  1002 => 295,  999 => 294,  996 => 293,  994 => 292,  980 => 285,  972 => 280,  965 => 276,  961 => 274,  958 => 273,  950 => 271,  948 => 270,  931 => 269,  928 => 268,  925 => 267,  907 => 266,  905 => 265,  898 => 261,  892 => 260,  884 => 257,  881 => 256,  878 => 255,  875 => 254,  866 => 253,  852 => 247,  839 => 243,  831 => 242,  828 => 241,  825 => 240,  820 => 239,  813 => 235,  806 => 230,  804 => 229,  795 => 228,  785 => 217,  782 => 216,  780 => 215,  777 => 214,  774 => 213,  765 => 212,  755 => 207,  752 => 206,  743 => 205,  732 => 170,  721 => 168,  717 => 167,  710 => 163,  706 => 162,  702 => 161,  697 => 160,  688 => 159,  653 => 131,  644 => 130,  632 => 173,  629 => 172,  627 => 159,  623 => 157,  621 => 130,  618 => 129,  609 => 128,  599 => 220,  595 => 218,  593 => 212,  589 => 210,  585 => 208,  583 => 205,  580 => 204,  573 => 199,  563 => 195,  558 => 193,  555 => 192,  551 => 191,  544 => 187,  539 => 184,  537 => 183,  533 => 181,  530 => 180,  525 => 176,  522 => 175,  519 => 128,  517 => 127,  514 => 126,  512 => 125,  508 => 123,  505 => 122,  496 => 121,  483 => 113,  479 => 111,  477 => 110,  474 => 109,  472 => 108,  464 => 103,  459 => 100,  450 => 99,  440 => 96,  431 => 95,  420 => 92,  418 => 91,  415 => 90,  406 => 89,  394 => 85,  388 => 84,  385 => 83,  381 => 81,  377 => 80,  372 => 79,  366 => 78,  344 => 77,  342 => 76,  339 => 75,  336 => 74,  333 => 73,  330 => 72,  327 => 71,  324 => 70,  321 => 69,  318 => 68,  315 => 67,  312 => 66,  310 => 65,  307 => 64,  305 => 63,  303 => 62,  300 => 61,  298 => 60,  293 => 57,  290 => 56,  286 => 55,  282 => 53,  273 => 52,  256 => 48,  245 => 225,  241 => 223,  239 => 222,  236 => 221,  234 => 121,  229 => 119,  226 => 118,  223 => 117,  220 => 99,  216 => 97,  214 => 95,  211 => 94,  209 => 89,  206 => 88,  204 => 52,  201 => 51,  199 => 50,  196 => 49,  194 => 48,  189 => 46,  183 => 45,  176 => 44,  173 => 42,  168 => 40,  163 => 39,  160 => 38,  158 => 37,  155 => 36,  146 => 35,  133 => 32,  124 => 31,  110 => 27,  108 => 26,  105 => 25,  103 => 21,  94 => 20,  76 => 18,  66 => 15,  57 => 14,  36 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends base_template %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}

{% block title %}
    {#
        The list template can be used in nested mode,
        so we define the title corresponding to the parent's admin.
    #}

    {% if admin.isChild and admin.parent.subject %}
        {{ \"title_edit\"|trans({'%name%': admin.parent.toString(admin.parent.subject)|truncate(15) }, 'SonataAdminBundle') }}
    {% endif %}
{% endblock %}

{% block navbar_title %}
    {{ block('title') }}
{% endblock %}

{% block list_table %}
    <div class=\"col-xs-12 col-md-12\">
        {% set batchactions = admin.batchactions %}
        {% if admin.hasRoute('batch') and batchactions|length %}
            <form action=\"{{ admin.generateUrl('batch', {'filter': admin.filterParameters}) }}\" method=\"POST\" >
            <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"{{ csrf_token }}\">
        {% endif %}

        {# Add a margin if no pager to prevent dropdown cropping on window #}
        <div class=\"box box-primary\" {% if admin.datagrid.pager.lastPage == 1 %}style=\"margin-bottom: 100px;\"{% endif %}>
            <div class=\"box-body {% if admin.datagrid.results|length > 0 %}table-responsive no-padding{% endif %}\">
                {{ sonata_block_render_event('sonata.admin.list.table.top', { 'admin': admin }) }}

                {% block list_header %}{% endblock %}

                {% if admin.datagrid.results|length > 0 %}
                    <table class=\"table table-bordered table-striped sonata-ba-list\">
                        {% block table_header %}
                            <thead>
                                <tr class=\"sonata-ba-list-field-header\">
                                    {% for field_description in admin.list.elements %}
                                        {% if admin.hasRoute('batch') and field_description.getOption('code') == '_batch' and batchactions|length > 0 %}
                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-batch\">
                                              <input type=\"checkbox\" id=\"list_batch_checkbox\">
                                            </th>
                                        {% elseif field_description.getOption('code') == '_select' %}
                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-select\"></th>
                                        {% elseif field_description.name == '_action' and app.request.isXmlHttpRequest %}
                                            {# Action buttons disabled in ajax view! #}
                                        {% elseif field_description.getOption('ajax_hidden') == true and app.request.isXmlHttpRequest %}
                                            {# Disable fields with 'ajax_hidden' option set to true #}
                                        {% else %}
                                            {% set sortable = false %}
                                            {% if field_description.options.sortable is defined and field_description.options.sortable %}
                                                {% set sortable             = true %}
                                                {% set sort_parameters      = admin.modelmanager.sortparameters(field_description, admin.datagrid) %}
                                                {% set current              = admin.datagrid.values._sort_by == field_description or admin.datagrid.values._sort_by.fieldName == sort_parameters.filter._sort_by %}
                                                {% set sort_active_class    = current ? 'sonata-ba-list-field-order-active' : '' %}
                                                {% set sort_by              = current ? admin.datagrid.values._sort_order : field_description.options._sort_order %}
                                            {% endif %}

                                            {% spaceless %}
                                                <th class=\"sonata-ba-list-field-header-{{ field_description.type}} {% if sortable %} sonata-ba-list-field-header-order-{{ sort_by|lower }} {{ sort_active_class }}{% endif %}{% if field_description.options.header_class is defined %} {{ field_description.options.header_class }}{% endif %}\"{% if field_description.options.header_style is defined %} style=\"{{ field_description.options.header_style }}\"{% endif %}>
                                                    {% if sortable %}<a href=\"{{ admin.generateUrl('list', sort_parameters) }}\">{% endif %}
                                                    {{ field_description.label|trans({}, field_description.translationDomain) }}
                                                    {% if sortable %}</a>{% endif %}
                                                </th>
                                            {% endspaceless %}
                                        {% endif %}
                                    {% endfor %}
                                </tr>
                            </thead>
                        {% endblock %}

                        {% block table_body %}
                            <tbody>
                                {% include admin.getTemplate('outer_list_rows_' ~ admin.getListMode()) %}
                            </tbody>
                        {% endblock %}

                        {% block table_footer %}
                        {% endblock %}
                    </table>
                {% else %}
                    {% block no_result_content %}
                        <div class=\"info-box\">
                            <span class=\"info-box-icon bg-aqua\"><i class=\"fa fa-arrow-circle-right\" aria-hidden=\"true\"></i></span>
                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">{{ 'no_result'|trans({}, 'SonataAdminBundle') }}</span>
                                <div class=\"progress\">
                                    <div class=\"progress-bar\" style=\"width: 0%\"></div>
                                </div>
                                <span class=\"progress-description\">
                                    {% if not app.request.xmlHttpRequest %}
                                    <ul class=\"list-unstyled\">
                                        {% include 'SonataAdminBundle:Button:create_button.html.twig' %}
                                    </ul>
                                    {% endif %}
                                </span>
                            </div><!-- /.info-box-content -->
                        </div>
                    {% endblock %}
                {% endif %}

                {{ sonata_block_render_event('sonata.admin.list.table.bottom', { 'admin': admin }) }}
            </div>
            {% block list_footer %}
                {% if admin.datagrid.results|length > 0 %}
                    <div class=\"box-footer\">
                        <div class=\"form-inline clearfix\">
                            {% if not app.request.isXmlHttpRequest %}
                                <div class=\"pull-left\">
                                    {% if admin.hasRoute('batch') and batchactions|length > 0  %}
                                        {% block batch %}
                                            <script>
                                                {% block batch_javascript %}
                                                    jQuery(document).ready(function (\$) {
                                                        // Toggle individual checkboxes when the batch checkbox is changed
                                                        \$('#list_batch_checkbox').on('ifChanged change', function () {
                                                            var checkboxes = \$(this)
                                                                .closest('table')
                                                                .find('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                            ;
                                                            if (window.SONATA_CONFIG.USE_ICHECK) {
                                                                checkboxes.iCheck(\$(this).is(':checked') ? 'check' : 'uncheck');
                                                            } else {
                                                                checkboxes.prop('checked', this.checked);
                                                            }
                                                        });

                                                        // Add a CSS class to rows when they are selected
                                                        \$('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                            .on('ifChanged change', function () {
                                                                \$(this)
                                                                    .closest('tr, div.sonata-ba-list-field-batch')
                                                                    .toggleClass('sonata-ba-list-row-selected', \$(this).is(':checked'))
                                                                ;
                                                            })
                                                            .trigger('ifChanged')
                                                        ;
                                                    });
                                                {% endblock %}
                                            </script>

                                        {% block batch_actions %}
                                            <label class=\"checkbox\" for=\"{{ admin.uniqid }}_all_elements\">
                                                <input type=\"checkbox\" name=\"all_elements\" id=\"{{ admin.uniqid }}_all_elements\">
                                                {{ 'all_elements'|trans({}, 'SonataAdminBundle') }}
                                                ({{ admin.datagrid.pager.nbresults }})
                                            </label>

                                            <select name=\"action\" style=\"width: auto; height: auto\" class=\"form-control\">
                                                {% for action, options in batchactions %}
                                                    <option value=\"{{ action }}\">{{ options.label|trans({}, options.translation_domain|default(admin.translationDomain)) }}</option>
                                                {% endfor %}
                                            </select>
                                        {% endblock %}

                                            <input type=\"submit\" class=\"btn btn-small btn-primary\" value=\"{{ 'btn_batch'|trans({}, 'SonataAdminBundle') }}\">
                                        {% endblock %}
                                    {% endif %}
                                </div>


                                {# NEXT_MAJOR : remove this assignment #}
                                {% set export_formats = export_formats|default(admin.exportFormats) %}

                                <div class=\"pull-right\">
                                    {% if admin.hasRoute('export') and admin.hasAccess('export') and export_formats|length %}
                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                                                <i class=\"fa fa-share-square-o\" aria-hidden=\"true\"></i>
                                                {{ \"label_export_download\"|trans({}, \"SonataAdminBundle\") }}
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\">
                                                {% for format in export_formats %}
                                                <li>
                                                    <a href=\"{{ admin.generateUrl('export', admin.modelmanager.paginationparameters(admin.datagrid, 0) + {'format' : format}) }}\">
                                                        <i class=\"fa fa-arrow-circle-o-down\" aria-hidden=\"true\"></i>
                                                        {{ (\"export_format_\" ~ format)|trans({}, 'SonataAdminBundle') }}
                                                    </a>
                                                <li>
                                                {% endfor %}
                                            </ul>
                                        </div>

                                        &nbsp;-&nbsp;
                                    {% endif %}

                                    {% block pager_results %}
                                        {% include admin.getTemplate('pager_results') %}
                                    {% endblock %}
                                </div>
                            {% endif %}
                        </div>

                        {% block pager_links %}
                            {% if admin.datagrid.pager.haveToPaginate() %}
                                <hr/>
                                {% include admin.getTemplate('pager_links') %}
                            {% endif %}
                        {% endblock %}
                    </div>
                {% endif %}
            {% endblock %}
        </div>
        {% if admin.hasRoute('batch') and batchactions|length %}
            </form>
        {% endif %}
    </div>
{% endblock %}

{% block list_filters_actions %}
    {%- if admin.datagrid.filters|length %}
        <ul class=\"nav navbar-nav navbar-right\">

            <li class=\"dropdown sonata-actions\">
                <a href=\"#\" class=\"dropdown-toggle sonata-ba-action\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-filter\" aria-hidden=\"true\"></i>
                    {{ 'link_filters'|trans({}, 'SonataAdminBundle') }} <b class=\"caret\"></b>
                </a>

                <ul class=\"dropdown-menu\" role=\"menu\">
                    {% for filter in admin.datagrid.filters if (filter.options['show_filter'] is same as(true) or filter.options['show_filter'] is null) %}
                        {% set filterActive = ((filter.isActive() or filter.options['show_filter']) and not admin.isDefaultFilter(filter.formName)) %}
                        <li>
                            <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-{{ admin.uniqid }}-{{ filter.name }}\" filter-container=\"filter-container-{{ admin.uniqid() }}\">
                                <i class=\"fa {{ (filter.isActive() or filter.options['show_filter']) ? 'fa-check-square-o' : 'fa-square-o' }}\"></i>{{ filter.label|trans({}, filter.translationDomain ?: admin.translationDomain) }}
                            </a>
                        </li>
                    {% endfor %}
                </ul>
            </li>
        </ul>
    {% endif -%}
{% endblock %}

{% block list_filters %}
    {% if admin.datagrid.filters %}
        {% form_theme form admin.getTemplate('filter') %}

        <div class=\"col-xs-12 col-md-12 sonata-filters-box\" style=\"display: {{ admin.datagrid.hasDisplayableFilters ? 'block' : 'none' }}\" id=\"filter-container-{{ admin.uniqid() }}\">
            <div class=\"box box-primary\" >
                <div class=\"box-body\">
                    <form class=\"sonata-filter-form form-horizontal {{ admin.isChild and 1 == admin.datagrid.filters|length ? 'hide' : '' }}\" action=\"{{ admin.generateUrl('list') }}\" method=\"GET\" role=\"form\">
                        {{ form_errors(form) }}

                        <div class=\"row\">
                            <div class=\"col-sm-9\">
                                {% set withAdvancedFilter = false %}
                                {% for filter in admin.datagrid.filters %}
                                    {% set filterActive = ((filter.isActive() and filter.options['show_filter'] is null) or (filter.options['show_filter'] is same as(true))) and not admin.isDefaultFilter(filter.formName) %}
                                    {% set filterVisible = filter.options['show_filter'] is same as(true) or filter.options['show_filter'] is null %}
                                    <div class=\"form-group {% block sonata_list_filter_group_class %}{% endblock %}\" id=\"filter-{{ admin.uniqid }}-{{ filter.name }}\" sonata-filter=\"{{ filterVisible ? 'true' : 'false' }}\" style=\"display: {% if filterActive %}block{% else %}none{% endif %}\">
                                        {% if filter.label is not same as(false) %}
                                            <label for=\"{{ form.children[filter.formName].children['value'].vars.id }}\" class=\"col-sm-3 control-label\">{{ filter.label|trans({}, filter.translationDomain ?: admin.translationDomain) }}</label>
                                        {% endif %}
                                        {% set attr = form.children[filter.formName].children['type'].vars.attr|default({}) %}

                                        <div class=\"col-sm-4 advanced-filter\">
                                            {{ form_widget(form.children[filter.formName].children['type'], {'attr':  attr}) }}
                                        </div>

                                        <div class=\"col-sm-4\">
                                            {{ form_widget(form.children[filter.formName].children['value']) }}
                                        </div>

                                        <div class=\"col-sm-1\">
                                            <label class=\"control-label\">
                                                <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-{{ admin.uniqid }}-{{ filter.name }}\" filter-container=\"filter-container-{{ admin.uniqid() }}\">
                                                    <i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i>
                                                </a>
                                            </label>
                                        </div>
                                    </div>

                                    {% if filter.options['advanced_filter'] %}
                                        {% set withAdvancedFilter = true %}
                                    {% endif %}
                                {% endfor %}
                            </div>
                            <div class=\"col-sm-3 text-center\">
                                <input type=\"hidden\" name=\"filter[_page]\" id=\"filter__page\" value=\"1\">

                                {% set foo = form.children['_page'].setRendered() %}
                                {{ form_rest(form) }}

                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-primary\">
                                        <i class=\"fa fa-filter\" aria-hidden=\"true\"></i> {{ 'btn_filter'|trans({}, 'SonataAdminBundle') }}
                                    </button>

                                    <a class=\"btn btn-default\" href=\"{{ admin.generateUrl('list', {filters: 'reset'}) }}\">
                                        {{ 'link_reset_filter'|trans({}, 'SonataAdminBundle') }}
                                    </a>
                                </div>

                                {% if withAdvancedFilter %}
                                    <div class=\"form-group\">
                                        <a href=\"#\" data-toggle=\"advanced-filter\">
                                            <i class=\"fa fa-cogs\" aria-hidden=\"true\"></i>
                                            {{ 'btn_advanced_filters'|trans({}, 'SonataAdminBundle') }}
                                        </a>
                                    </div>
                                {% endif %}
                            </div>
                        </div>

                        {% for paramKey, paramValue in admin.persistentParameters %}
                            <input type=\"hidden\" name=\"{{ paramKey }}\" value=\"{{ paramValue }}\">
                        {% endfor %}
                    </form>
                </div>
            </div>
        </div>
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:base_list.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_list.html.twig");
    }
}

<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_305e5c70b0af14522c99d0b43505e9bd2c420e1297cd9f364fb466e1930fab06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@User/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'style' => array($this, 'block_style'),
            'img_logo_path' => array($this, 'block_img_logo_path'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'img_footer_path' => array($this, 'block_img_footer_path'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@User/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1dd9566c47211a4e8e87b5fabb5ab2f7e117c22031837083b43ee451bd84bdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1dd9566c47211a4e8e87b5fabb5ab2f7e117c22031837083b43ee451bd84bdc->enter($__internal_b1dd9566c47211a4e8e87b5fabb5ab2f7e117c22031837083b43ee451bd84bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_0c47d7091631c86e205b4eaa6ea0de7bd9fdae572c2f222d7241a3d32c536080 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c47d7091631c86e205b4eaa6ea0de7bd9fdae572c2f222d7241a3d32c536080->enter($__internal_0c47d7091631c86e205b4eaa6ea0de7bd9fdae572c2f222d7241a3d32c536080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1dd9566c47211a4e8e87b5fabb5ab2f7e117c22031837083b43ee451bd84bdc->leave($__internal_b1dd9566c47211a4e8e87b5fabb5ab2f7e117c22031837083b43ee451bd84bdc_prof);

        
        $__internal_0c47d7091631c86e205b4eaa6ea0de7bd9fdae572c2f222d7241a3d32c536080->leave($__internal_0c47d7091631c86e205b4eaa6ea0de7bd9fdae572c2f222d7241a3d32c536080_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bf5e41ba6a3bf513ee547884730d2747e47592f703f3bf55771a3b3ac339d38c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf5e41ba6a3bf513ee547884730d2747e47592f703f3bf55771a3b3ac339d38c->enter($__internal_bf5e41ba6a3bf513ee547884730d2747e47592f703f3bf55771a3b3ac339d38c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_513960b73e1bd662affb7d3b356f99427e3dbcf37a3e42ba99a30001649b907c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_513960b73e1bd662affb7d3b356f99427e3dbcf37a3e42ba99a30001649b907c->enter($__internal_513960b73e1bd662affb7d3b356f99427e3dbcf37a3e42ba99a30001649b907c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Inscrivez-vous !";
        
        $__internal_513960b73e1bd662affb7d3b356f99427e3dbcf37a3e42ba99a30001649b907c->leave($__internal_513960b73e1bd662affb7d3b356f99427e3dbcf37a3e42ba99a30001649b907c_prof);

        
        $__internal_bf5e41ba6a3bf513ee547884730d2747e47592f703f3bf55771a3b3ac339d38c->leave($__internal_bf5e41ba6a3bf513ee547884730d2747e47592f703f3bf55771a3b3ac339d38c_prof);

    }

    // line 5
    public function block_style($context, array $blocks = array())
    {
        $__internal_d416cc8987f7566d604569ec6044d7e0111c973476d572d8b6a2f9f7843b1398 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d416cc8987f7566d604569ec6044d7e0111c973476d572d8b6a2f9f7843b1398->enter($__internal_d416cc8987f7566d604569ec6044d7e0111c973476d572d8b6a2f9f7843b1398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_3f0ed2a0c61c2b05992e0a4c3832afddae25e90865323b81f14fe7c8395a697f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f0ed2a0c61c2b05992e0a4c3832afddae25e90865323b81f14fe7c8395a697f->enter($__internal_3f0ed2a0c61c2b05992e0a4c3832afddae25e90865323b81f14fe7c8395a697f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 6
        echo "    <link rel=\"stylesheet\" href=\"../../public/css/pages/inscription.css\" type=\"text/css\" />
";
        
        $__internal_3f0ed2a0c61c2b05992e0a4c3832afddae25e90865323b81f14fe7c8395a697f->leave($__internal_3f0ed2a0c61c2b05992e0a4c3832afddae25e90865323b81f14fe7c8395a697f_prof);

        
        $__internal_d416cc8987f7566d604569ec6044d7e0111c973476d572d8b6a2f9f7843b1398->leave($__internal_d416cc8987f7566d604569ec6044d7e0111c973476d572d8b6a2f9f7843b1398_prof);

    }

    // line 9
    public function block_img_logo_path($context, array $blocks = array())
    {
        $__internal_c07d140c48428321f394a5e21c3571020036e2b91636c8eb5d1365e16814b48c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c07d140c48428321f394a5e21c3571020036e2b91636c8eb5d1365e16814b48c->enter($__internal_c07d140c48428321f394a5e21c3571020036e2b91636c8eb5d1365e16814b48c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img_logo_path"));

        $__internal_ea49160f8a1693116c8d89edf5db9455f37a8db0d71633fdb6636ba7dde7d9da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea49160f8a1693116c8d89edf5db9455f37a8db0d71633fdb6636ba7dde7d9da->enter($__internal_ea49160f8a1693116c8d89edf5db9455f37a8db0d71633fdb6636ba7dde7d9da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img_logo_path"));

        echo "../../public/img/";
        
        $__internal_ea49160f8a1693116c8d89edf5db9455f37a8db0d71633fdb6636ba7dde7d9da->leave($__internal_ea49160f8a1693116c8d89edf5db9455f37a8db0d71633fdb6636ba7dde7d9da_prof);

        
        $__internal_c07d140c48428321f394a5e21c3571020036e2b91636c8eb5d1365e16814b48c->leave($__internal_c07d140c48428321f394a5e21c3571020036e2b91636c8eb5d1365e16814b48c_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d5b75fa0bef6e59d77c6ddd0d0512bfdc7adeea2b34f0fe15ec16ce6224195f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5b75fa0bef6e59d77c6ddd0d0512bfdc7adeea2b34f0fe15ec16ce6224195f6->enter($__internal_d5b75fa0bef6e59d77c6ddd0d0512bfdc7adeea2b34f0fe15ec16ce6224195f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5706e6573cba12b5523070e6f2054fa08e7eb3b76eadf8517ead51db0432dbec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5706e6573cba12b5523070e6f2054fa08e7eb3b76eadf8517ead51db0432dbec->enter($__internal_5706e6573cba12b5523070e6f2054fa08e7eb3b76eadf8517ead51db0432dbec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 12
        echo "    ";
        $this->loadTemplate("@User/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 12)->display($context);
        
        $__internal_5706e6573cba12b5523070e6f2054fa08e7eb3b76eadf8517ead51db0432dbec->leave($__internal_5706e6573cba12b5523070e6f2054fa08e7eb3b76eadf8517ead51db0432dbec_prof);

        
        $__internal_d5b75fa0bef6e59d77c6ddd0d0512bfdc7adeea2b34f0fe15ec16ce6224195f6->leave($__internal_d5b75fa0bef6e59d77c6ddd0d0512bfdc7adeea2b34f0fe15ec16ce6224195f6_prof);

    }

    // line 15
    public function block_img_footer_path($context, array $blocks = array())
    {
        $__internal_b745e4195b247f2824c121c2eccbf7a5cd7ced817b0c4e47275d6f0b977c2d5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b745e4195b247f2824c121c2eccbf7a5cd7ced817b0c4e47275d6f0b977c2d5f->enter($__internal_b745e4195b247f2824c121c2eccbf7a5cd7ced817b0c4e47275d6f0b977c2d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img_footer_path"));

        $__internal_3540ad49601bd2333bbf66266a198b57c2e8f0b08af1ec3f4b4bd1222829c7dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3540ad49601bd2333bbf66266a198b57c2e8f0b08af1ec3f4b4bd1222829c7dc->enter($__internal_3540ad49601bd2333bbf66266a198b57c2e8f0b08af1ec3f4b4bd1222829c7dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img_footer_path"));

        echo "../../public/img/";
        
        $__internal_3540ad49601bd2333bbf66266a198b57c2e8f0b08af1ec3f4b4bd1222829c7dc->leave($__internal_3540ad49601bd2333bbf66266a198b57c2e8f0b08af1ec3f4b4bd1222829c7dc_prof);

        
        $__internal_b745e4195b247f2824c121c2eccbf7a5cd7ced817b0c4e47275d6f0b977c2d5f->leave($__internal_b745e4195b247f2824c121c2eccbf7a5cd7ced817b0c4e47275d6f0b977c2d5f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 15,  109 => 12,  100 => 11,  82 => 9,  71 => 6,  62 => 5,  44 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@User/layout.html.twig\" %}

{% block title %}Inscrivez-vous !{% endblock %}

{% block style %}
    <link rel=\"stylesheet\" href=\"../../public/css/pages/inscription.css\" type=\"text/css\" />
{% endblock %}

{% block img_logo_path %}../../public/img/{% endblock %}

{% block fos_user_content %}
    {% include \"@User/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}

{% block img_footer_path %}../../public/img/{% endblock %}", "FOSUserBundle:Registration:register.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/src/UserBundle/Resources/views/Registration/register.html.twig");
    }
}

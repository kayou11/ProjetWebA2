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
        $__internal_350cb469581b49e8473ff819c392e8e1e5b908e68a34f9c84dc22d209fa222e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_350cb469581b49e8473ff819c392e8e1e5b908e68a34f9c84dc22d209fa222e1->enter($__internal_350cb469581b49e8473ff819c392e8e1e5b908e68a34f9c84dc22d209fa222e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_1cbe2c229a87f6fe213c5204333d73c6370c33e2bc646f9cb8e3cdf6d55206a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cbe2c229a87f6fe213c5204333d73c6370c33e2bc646f9cb8e3cdf6d55206a6->enter($__internal_1cbe2c229a87f6fe213c5204333d73c6370c33e2bc646f9cb8e3cdf6d55206a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_350cb469581b49e8473ff819c392e8e1e5b908e68a34f9c84dc22d209fa222e1->leave($__internal_350cb469581b49e8473ff819c392e8e1e5b908e68a34f9c84dc22d209fa222e1_prof);

        
        $__internal_1cbe2c229a87f6fe213c5204333d73c6370c33e2bc646f9cb8e3cdf6d55206a6->leave($__internal_1cbe2c229a87f6fe213c5204333d73c6370c33e2bc646f9cb8e3cdf6d55206a6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3202ab5d71596c1e40430a7aa7f6acd4f6ef6e9b0ca854d2efb7806051746b1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3202ab5d71596c1e40430a7aa7f6acd4f6ef6e9b0ca854d2efb7806051746b1b->enter($__internal_3202ab5d71596c1e40430a7aa7f6acd4f6ef6e9b0ca854d2efb7806051746b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ca72d4e2d4a355006dd66460a8567bfbdf90fa0f9ad5f41e86b911b4e2b6cdd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca72d4e2d4a355006dd66460a8567bfbdf90fa0f9ad5f41e86b911b4e2b6cdd6->enter($__internal_ca72d4e2d4a355006dd66460a8567bfbdf90fa0f9ad5f41e86b911b4e2b6cdd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Inscrivez-vous !";
        
        $__internal_ca72d4e2d4a355006dd66460a8567bfbdf90fa0f9ad5f41e86b911b4e2b6cdd6->leave($__internal_ca72d4e2d4a355006dd66460a8567bfbdf90fa0f9ad5f41e86b911b4e2b6cdd6_prof);

        
        $__internal_3202ab5d71596c1e40430a7aa7f6acd4f6ef6e9b0ca854d2efb7806051746b1b->leave($__internal_3202ab5d71596c1e40430a7aa7f6acd4f6ef6e9b0ca854d2efb7806051746b1b_prof);

    }

    // line 5
    public function block_style($context, array $blocks = array())
    {
        $__internal_6f9129a614604294f0a78be2b297991d16fd9d15b97bb90db1077771325d16a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f9129a614604294f0a78be2b297991d16fd9d15b97bb90db1077771325d16a7->enter($__internal_6f9129a614604294f0a78be2b297991d16fd9d15b97bb90db1077771325d16a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_6d03c85509320e5253cee78ea5761338866c958bb6872048359510d4f70dc1c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d03c85509320e5253cee78ea5761338866c958bb6872048359510d4f70dc1c1->enter($__internal_6d03c85509320e5253cee78ea5761338866c958bb6872048359510d4f70dc1c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 6
        echo "    <link rel=\"stylesheet\" href=\"../../public/css/pages/inscription.css\" type=\"text/css\" />
";
        
        $__internal_6d03c85509320e5253cee78ea5761338866c958bb6872048359510d4f70dc1c1->leave($__internal_6d03c85509320e5253cee78ea5761338866c958bb6872048359510d4f70dc1c1_prof);

        
        $__internal_6f9129a614604294f0a78be2b297991d16fd9d15b97bb90db1077771325d16a7->leave($__internal_6f9129a614604294f0a78be2b297991d16fd9d15b97bb90db1077771325d16a7_prof);

    }

    // line 9
    public function block_img_logo_path($context, array $blocks = array())
    {
        $__internal_6866014fdc3d92fefe9b77d4fa22fea2b61e89dd3a9e7b1e2b9eee6dae80aa56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6866014fdc3d92fefe9b77d4fa22fea2b61e89dd3a9e7b1e2b9eee6dae80aa56->enter($__internal_6866014fdc3d92fefe9b77d4fa22fea2b61e89dd3a9e7b1e2b9eee6dae80aa56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img_logo_path"));

        $__internal_95d8050f7d0febcb33b224c74c4a86cfe9a49ff01c3dde9f436b9c854bf8dfb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95d8050f7d0febcb33b224c74c4a86cfe9a49ff01c3dde9f436b9c854bf8dfb3->enter($__internal_95d8050f7d0febcb33b224c74c4a86cfe9a49ff01c3dde9f436b9c854bf8dfb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img_logo_path"));

        echo "../../public/img/";
        
        $__internal_95d8050f7d0febcb33b224c74c4a86cfe9a49ff01c3dde9f436b9c854bf8dfb3->leave($__internal_95d8050f7d0febcb33b224c74c4a86cfe9a49ff01c3dde9f436b9c854bf8dfb3_prof);

        
        $__internal_6866014fdc3d92fefe9b77d4fa22fea2b61e89dd3a9e7b1e2b9eee6dae80aa56->leave($__internal_6866014fdc3d92fefe9b77d4fa22fea2b61e89dd3a9e7b1e2b9eee6dae80aa56_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_80349c620c92463ef7ca70cd2e39cbf85122df45adbe0828b3b285427e7834d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80349c620c92463ef7ca70cd2e39cbf85122df45adbe0828b3b285427e7834d1->enter($__internal_80349c620c92463ef7ca70cd2e39cbf85122df45adbe0828b3b285427e7834d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b37407d702d62b00a4231ff01e9dd79241cd3f8759160dfe58a6d645894170d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b37407d702d62b00a4231ff01e9dd79241cd3f8759160dfe58a6d645894170d6->enter($__internal_b37407d702d62b00a4231ff01e9dd79241cd3f8759160dfe58a6d645894170d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 12
        echo "    ";
        $this->loadTemplate("@User/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 12)->display($context);
        
        $__internal_b37407d702d62b00a4231ff01e9dd79241cd3f8759160dfe58a6d645894170d6->leave($__internal_b37407d702d62b00a4231ff01e9dd79241cd3f8759160dfe58a6d645894170d6_prof);

        
        $__internal_80349c620c92463ef7ca70cd2e39cbf85122df45adbe0828b3b285427e7834d1->leave($__internal_80349c620c92463ef7ca70cd2e39cbf85122df45adbe0828b3b285427e7834d1_prof);

    }

    // line 15
    public function block_img_footer_path($context, array $blocks = array())
    {
        $__internal_07c0e16a6448056db3bb49e3be9695eaa4f2d8278c95409f67f5d010075d6beb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07c0e16a6448056db3bb49e3be9695eaa4f2d8278c95409f67f5d010075d6beb->enter($__internal_07c0e16a6448056db3bb49e3be9695eaa4f2d8278c95409f67f5d010075d6beb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img_footer_path"));

        $__internal_8b6badb8eadcfa160341e4ac7e6000513807c227a701176accff8f147658ddaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b6badb8eadcfa160341e4ac7e6000513807c227a701176accff8f147658ddaa->enter($__internal_8b6badb8eadcfa160341e4ac7e6000513807c227a701176accff8f147658ddaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img_footer_path"));

        echo "../../public/img/";
        
        $__internal_8b6badb8eadcfa160341e4ac7e6000513807c227a701176accff8f147658ddaa->leave($__internal_8b6badb8eadcfa160341e4ac7e6000513807c227a701176accff8f147658ddaa_prof);

        
        $__internal_07c0e16a6448056db3bb49e3be9695eaa4f2d8278c95409f67f5d010075d6beb->leave($__internal_07c0e16a6448056db3bb49e3be9695eaa4f2d8278c95409f67f5d010075d6beb_prof);

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
